<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class EchartsAdvanceChartsAsset extends AssetBundle
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
        'app-assets/js/scripts/charts/echarts/advance/tornado.min.js',
        'app-assets/js/scripts/charts/echarts/advance/timeline.min.js',
        'app-assets/js/scripts/charts/echarts/advance/timeline-options.js',
        'app-assets/js/scripts/charts/echarts/advance/time-data.js',
        'app-assets/js/scripts/charts/echarts/advance/candlestick-multi-level-control.js',
        'app-assets/js/scripts/charts/echarts/advance/dynamic-data.js',
        'app-assets/js/scripts/charts/echarts/advance/event-river.js',
        'app-assets/js/scripts/charts/echarts/advance/eventRiver2-data.js',
        'app-assets/js/scripts/charts/echarts/advance/multiple-series-rainbow.js',
        'app-assets/js/scripts/charts/echarts/advance/treemap.min.js',
        'app-assets/js/scripts/charts/echarts/advance/word-cloud.js',
        
    ];
}