<?php


namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

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

    public $jsOptions = [
        'position' => View::POS_END,
    ];
}