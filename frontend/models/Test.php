<?php


namespace frontend\models;

use Yii;

/**
 * Class Test
 * @package frontend\models
 */
class Test
{

    /**
     * @param $max
     * @return array
     * @throws \yii\db\Exception
     */
    public static function getNewsList($max) : array
    {
        $max = intval($max);
        $sql = /** @lang text */'SELECT * FROM news LIMIT '.$max;

        $result = Yii::$app->db->createCommand($sql)->queryAll();

        if(!empty($result) && is_array($result)) {
            foreach ($result as &$item) {
                $item['content'] = Yii::$app->stringHelper->getShort($item['content']);
            }
        }

        return $result;
    }

    /**
     * @param $id
     * @return array|false
     * @throws \yii\db\Exception
     */
    public static function getItem($id)
    {
        $id = intval($id);
        $sql = /** @lang text */"SELECT * FROM news WHERE id = $id";

        $result = Yii::$app->db->createCommand($sql)->queryOne();

        return $result;
    }

}