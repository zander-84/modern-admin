<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class D3LineChartAsset extends AssetBundle
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
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/charts/d3/line/line.min.js',
        'app-assets/js/scripts/charts/d3/line/area.min.js',
        'app-assets/js/scripts/charts/d3/line/bivariate.min.js',
        'app-assets/js/scripts/charts/d3/line/stacked-area.min.js',
        'app-assets/js/scripts/charts/d3/line/multi-series-line.js',
        'app-assets/js/scripts/charts/d3/line/difference.min.js',
        'app-assets/js/scripts/charts/d3/line/focus-context.min.js',
        'app-assets/js/scripts/charts/d3/line/line-tension.js',
        
    ];
}