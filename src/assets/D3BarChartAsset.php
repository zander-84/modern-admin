<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class D3BarChartAsset extends AssetBundle
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
        'app-assets/vendors/js/charts/d3.tip.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/charts/d3/bar/bar.min.js',
        'app-assets/js/scripts/charts/d3/bar/bar-negative.min.js',
        'app-assets/js/scripts/charts/d3/bar/grouped-bar.min.js',
        'app-assets/js/scripts/charts/d3/bar/normalized-stacked-bar.js',
        'app-assets/js/scripts/charts/d3/bar/stacked-bar.min.js',
        'app-assets/js/scripts/charts/d3/bar/stacked-to-grouped.js',
        'app-assets/js/scripts/charts/d3/bar/stacked-to-multiples.js',
        'app-assets/js/scripts/charts/d3/bar/waterfall.min.js',
        
    ];
}