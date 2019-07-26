<?php


namespace frontend\controllers;

use yii\web\Controller;

/**
 * Class GalleryController
 * @package frontend\controllers
 */
class GalleryController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}