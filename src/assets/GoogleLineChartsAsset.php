<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class GoogleLineChartsAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/other/js/jsapi',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/charts/google/line/line.min.js',
        'app-assets/js/scripts/charts/google/line/line-interval.js',
        'app-assets/js/scripts/charts/google/line/area.min.js',
        'app-assets/js/scripts/charts/google/line/area-interval.js',
        'app-assets/js/scripts/charts/google/line/area-stacked.min.js',
        'app-assets/js/scripts/charts/google/line/area-stepped.min.js',
        'app-assets/js/scripts/charts/google/line/area-stacked-stepped.js',
        
    ];
}