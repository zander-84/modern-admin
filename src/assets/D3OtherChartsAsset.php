<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class D3OtherChartsAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/charts/d3.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/charts/d3.min.js',
        'app-assets/vendors/js/charts/gantt-chart-d3.js',
        'app-assets/vendors/js/charts/sankey.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/charts/d3/other/bubble.min.js',
        'app-assets/js/scripts/charts/d3/other/streamgraph.min.js',
        'app-assets/js/scripts/charts/d3/other/treemap.min.js',
        'app-assets/js/scripts/charts/d3/other/vertical-sankey.min.js',
        'app-assets/js/scripts/charts/d3/other/chord-diagram-new.js',
        'app-assets/js/scripts/charts/d3/other/gantt-chart.min.js',
        
    ];
}