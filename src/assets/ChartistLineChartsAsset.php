<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class ChartistLineChartsAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/charts/chartist.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/charts/chartist.min.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/charts/chartist/line/area.min.js',
        'app-assets/js/scripts/charts/chartist/line/bi-polar-area.js',
        'app-assets/js/scripts/charts/chartist/line/holes-in-data.js',
        'app-assets/js/scripts/charts/chartist/line/line.min.js',
        'app-assets/js/scripts/charts/chartist/line/line-scatter.js',
        'app-assets/js/scripts/charts/chartist/line/series-overrides.js',
        'app-assets/js/scripts/charts/chartist/line/whole-numbers.js',
        
    ];
}