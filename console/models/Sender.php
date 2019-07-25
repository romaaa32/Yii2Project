<?php


namespace console\models;

use Yii;

/**
 * Class Sender
 * @package console\models
 */
class Sender
{

    /**
     * @param $subscribers
     * @param $newsList
     * @return int
     */
    public static function run($subscribers, $newsList)
    {
        $viewData = ['newsList' => $newsList];
        $count = 0;

        foreach ($subscribers as $subscriber) {
            $result = Yii::$app->mailer->compose('/mailer/newsList', $viewData)
                ->setFrom('support@xn----7sbbqne8anroh.xn--p1ai')
                ->setTo($subscriber['email'])
                ->setSubject('Тема сообщения')
                ->send();
            if ($result) {
                $count++;
            }
        }

        return $count;
    }
}