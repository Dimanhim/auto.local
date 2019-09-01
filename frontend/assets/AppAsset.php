<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/slick.css',
        'css/slick-theme.css',
        'css/style.css',
        'css/adaptive.css',
    ];
    public $js = [
        //'js/jquery-1.12.4.min.js',
        'js/bootstrap.min.js',
        'js/slick.min.js',
        'js/inputmask.js',
        'js/jquery.inputmask.js',
        'js/jquery-ui.min.js',
        'js/jquery-ui-1.8.21.custom.min.js',
        'js/common.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
