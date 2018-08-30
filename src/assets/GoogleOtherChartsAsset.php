<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class GoogleOtherChartsAsset extends AssetBundle
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
        'app-assets/js/scripts/charts/google/other/candlestick.min.js',
        'app-assets/js/scripts/charts/google/other/diff.min.js',
        'app-assets/js/scripts/charts/google/other/geo.min.js',
        'app-assets/js/scripts/charts/google/other/guage.min.js',
        'app-assets/js/scripts/charts/google/other/sankey.min.js',
        'app-assets/js/scripts/charts/google/other/sticks-interval.js',
        'app-assets/js/scripts/charts/google/other/treemap.min.js',
        'app-assets/js/scripts/charts/google/other/trendlines.min.js',
        
    ];
}