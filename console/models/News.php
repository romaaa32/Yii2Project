<?php

namespace console\models;

use Yii;

/**
 * Class News
 * @package console\models
 */
class News
{
    const STATUS_NOT_SEND = 1;
    // Метод для получения списка новостей которые необходимо отправить

    /**
     * @return mixed
     * @throws \yii\db\Exception
     */
    public static function getList()
    {
        // Получение данных из таблицы со статусом 1
        // Используем компоненот db
        // queryAll - все данные
        $sql = 'SELECT * FROM news WHERE status = '.self::STATUS_NOT_SEND;
        $list = Yii::$app->db->createCommand($sql)->queryAll();
        return News::prepareList($list);
    }

    // Метод для подготовки новостей

    /**
     * @param $result
     * @return mixed
     */
    private static function prepareList($result)
    {
        if(!empty($result) && is_array($result)) {
            foreach ($result as &$item) {
                $item['content'] = Yii::$app->stringHelper->getShort($item['content']);
            }
        }

        return $result;
    }
}