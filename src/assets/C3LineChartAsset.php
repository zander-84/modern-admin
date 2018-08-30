<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class C3LineChartAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/charts/c3.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        'app-assets/css/plugins/charts/c3-chart.min.css',

    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/charts/d3.min.js',
        'app-assets/vendors/js/charts/c3.min.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/charts/c3/line/line.min.js',
        'app-assets/js/scripts/charts/c3/line/spline.min.js',
        'app-assets/js/scripts/charts/c3/line/area.min.js',
        'app-assets/js/scripts/charts/c3/line/step.min.js',
        'app-assets/js/scripts/charts/c3/line/line-region.js',
        'app-assets/js/scripts/charts/c3/line/simple-xy.min.js',
        'app-assets/js/scripts/charts/c3/line/multiple-xy.min.js',

    ];
}