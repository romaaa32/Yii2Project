<?php


/**
 * @var $model frontend\models\Subscribe
 */


use frontend\assets\GalleryAsset;

GalleryAsset::register($this);

$this->title = 'Подпишитесь на новости!';
$this->registerMetaTag([
        'name' => 'description',
        'content' => 'Description of the page...',
]);

if (Yii::$app->session->hasFlash('subscriberStatus')) {
    echo Yii::$app->session->getFlash('subscriberStatus');
}

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}

?>

<form method="post">
    <p>Email</p>
    <input type="text" name="email" />
    <br><br>
    <input type="submit">
</form>