<?php

namespace common\components;

use Yii;

/**
 * Class StringHelper
 * @package common\components
 */
class StringHelper
{
    private $limit;

    /**
     * StringHelper constructor.
     */
    public function __construct()
    {
        $this->limit = Yii::$app->params['shortTextLimit'];
    }

    /**
     * @param $string
     * @param null $limit
     * @return bool|string
     */
    public function getShort($string, $limit = null)
    {
        if($limit === null) {
            $limit = $this->limit;
        }

        return substr($string, 0, $limit);
    }
}