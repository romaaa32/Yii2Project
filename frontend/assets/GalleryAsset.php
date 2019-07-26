<?php


namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Class GalleryAsset
 * @package frontend\assets
 */
class GalleryAsset extends AssetBundle
{
    public $css = [
        'css/gallery/style.css',
    ];

    public $js = [
        'js/isotope/jquery.isotope.js',
//        'js/gallery/scripts.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}