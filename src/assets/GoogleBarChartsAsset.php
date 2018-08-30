<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class GoogleBarChartsAsset extends AssetBundle
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
        'app-assets/js/scripts/charts/google/bar/bar.min.js',
        'app-assets/js/scripts/charts/google/bar/bar-stacked.min.js',
        'app-assets/js/scripts/charts/google/bar/bar-intervals.min.js',
        'app-assets/js/scripts/charts/google/bar/column.js',
        'app-assets/js/scripts/charts/google/bar/stacked-column.js',
        'app-assets/js/scripts/charts/google/bar/combo.min.js',
        'app-assets/js/scripts/charts/google/bar/histogram.js',
        
    ];
}