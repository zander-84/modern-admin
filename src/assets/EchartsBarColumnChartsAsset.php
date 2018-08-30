<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class EchartsBarColumnChartsAsset extends AssetBundle
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
        'app-assets/vendors/js/charts/echarts/echarts.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/charts/echarts/bar-column/basic-bar.js',
        'app-assets/js/scripts/charts/echarts/bar-column/basic-column.js',
        'app-assets/js/scripts/charts/echarts/bar-column/change-waterfall.js',
        'app-assets/js/scripts/charts/echarts/bar-column/column-multi-level-control.js',
        'app-assets/js/scripts/charts/echarts/bar-column/irregular-bar.js',
        'app-assets/js/scripts/charts/echarts/bar-column/stacked-bar.js',
        'app-assets/js/scripts/charts/echarts/bar-column/stacked-clustered-column.js',
        'app-assets/js/scripts/charts/echarts/bar-column/stacked-column.js',
        'app-assets/js/scripts/charts/echarts/bar-column/stacked-floating-bar.js',
        'app-assets/js/scripts/charts/echarts/bar-column/thermometer.js',
        
    ];
}