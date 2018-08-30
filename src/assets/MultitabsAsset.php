<?php

namespace zander84\modernadmin\assets;

use yii\web\AssetBundle;

class MultitabsAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'assets/css/mutitabs.css',
      
    ];

    public $js = [
        //'assets/js/jquery.js',
        'assets/js/mutitabs.js',

    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}

