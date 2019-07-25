<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Test;

/**
 * Class TestController
 * @package frontend\controllers
 */
class TestController extends Controller
{
    /**
     * @return string
     * @throws \yii\db\Exception
     */
    public function actionIndex() : string
    {
        $max = Yii::$app->params['maxNewsInList'];

        $list = Test::getNewsList($max);

        return $this->render('index', [
            'list' => $list,
        ]);
    }

    /**
     * @param $id
     * @return string
     * @throws \yii\db\Exception
     */
    public function actionView($id)
    {
        $item = Test::getItem($id);

        return $this->render('view', [
           'item' => $item
        ]);
    }

    public function actionMail()
    {
        $result = Yii::$app->mailer->compose()
            ->setFrom('romaslip32@gmail.com')
            ->setTo('romaslip32@gmail.com')
            ->setSubject('Тема сообщения')
            ->setTextBody('Текст сообщения')
            ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
            ->send();
    }
}