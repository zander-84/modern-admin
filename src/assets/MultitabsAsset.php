<?php

namespace zander84\modernadmin\assets;

use yii\web\AssetBundle;

class MultitabsAsset extends AssetBundle
{
    //public $sourcePath = '@modern-assets';
    //
    //public $css = [
    //    'assets/css/mutitabs.css',
    //
    //];
    //
    //public $js = [
    //    //'assets/js/jquery.js',
    //    'assets/js/mutitabs.js',
    //
    //];
    //public $depends = [
    //    //'yii\web\YiiAsset',
    //    //'yii\bootstrap\BootstrapAsset',
    //];


    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'multitabs/multitabs.css',
    ];
    public $js = [
        'multitabs/multitabs.js',
        'multitabs/app-menu.min.js',
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}

