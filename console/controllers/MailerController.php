<?php


namespace console\controllers;


use console\models\Subscriber;
use yii\console\Controller;
use console\models\News;
use console\models\Sender;
use yii\helpers\Console;

/**
 * Class MailerController
 * @package console\controllers
 */
class MailerController extends Controller
{
    /**
     * @throws \yii\db\Exception
     */
    public function actionSend()
    {
        $newsList = News::getList();
        $subscribers = Subscriber::getList();

        $count = Sender::run($subscribers, $newsList);
        Console::output("\nEmails sent: {$count}");
    }
}