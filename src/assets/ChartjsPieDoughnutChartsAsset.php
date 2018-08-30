<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class ChartjsPieDoughnutChartsAsset extends AssetBundle
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
        'app-assets/vendors/js/charts/chart.min.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/charts/chartjs/pie-doughnut/pie.min.js',
        'app-assets/js/scripts/charts/chartjs/pie-doughnut/pie-simple.js',
        'app-assets/js/scripts/charts/chartjs/pie-doughnut/doughnut.js',
        'app-assets/js/scripts/charts/chartjs/pie-doughnut/doughnut-simple.js',
        
    ];
}