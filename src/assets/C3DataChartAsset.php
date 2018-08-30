<?php

namespace zander84\modernadmin\assets;

use yii\web\AssetBundle;

class C3DataChartAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/charts/c3.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        'app-assets/css/plugins/charts/c3-chart.min.css'
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/charts/d3.min.js',
        'app-assets/vendors/js/charts/c3.min.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/charts/c3/data/category-data.min.js',
        'app-assets/js/scripts/charts/c3/data/column-oriented.min.js',
        'app-assets/js/scripts/charts/c3/data/data-color.min.js',
        'app-assets/js/scripts/charts/c3/data/data-from-url.min.js',
        'app-assets/js/scripts/charts/c3/data/data-order.min.js',
        'app-assets/js/scripts/charts/c3/data/row-oriented.min.js',
        
    ];
}

