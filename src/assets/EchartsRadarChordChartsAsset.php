<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class EchartsRadarChordChartsAsset extends AssetBundle
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
        'app-assets/js/scripts/charts/echarts/radar-chord/basic-chord.js',
        'app-assets/js/scripts/charts/echarts/radar-chord/basic-filled-radar.js',
        'app-assets/js/scripts/charts/echarts/radar-chord/basic-radar.js',
        'app-assets/js/scripts/charts/echarts/radar-chord/chord-sorting.js',
        'app-assets/js/scripts/charts/echarts/radar-chord/multiple-dimensions-chord.js',
        'app-assets/js/scripts/charts/echarts/radar-chord/multiple-radars.js',
        'app-assets/js/scripts/charts/echarts/radar-chord/non-ribbon-chord.js',
        'app-assets/js/scripts/charts/echarts/radar-chord/radar-multi-level-control.js',
        'app-assets/js/scripts/charts/echarts/radar-chord/wormhole.js',
        
    ];
}