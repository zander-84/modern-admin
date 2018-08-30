<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class D3PieChartAsset extends AssetBundle
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
        'app-assets/vendors/js/charts/d3-donut3D.js',
        'app-assets/vendors/js/charts/gradient-pie-d3.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/charts/d3/pie/pie.min.js',
        'app-assets/js/scripts/charts/d3/pie/donut.min.js',
        'app-assets/js/scripts/charts/d3/pie/3d-pie-donut.min.js',
        'app-assets/js/scripts/charts/d3/pie/gradient-pie.min.js',
        'app-assets/js/scripts/charts/d3/pie/dispatch-events.min.js',
        'app-assets/js/scripts/charts/d3/pie/pie-multiples.min.js',
        'app-assets/js/scripts/charts/d3/pie/donut-multiples.min.js',
        'app-assets/js/scripts/charts/d3/pie/pie-multiples-nesting.js',
        'app-assets/js/scripts/charts/d3/pie/donut-multiples-nesting.js',
        'app-assets/js/scripts/charts/d3/pie/pie-calendar.min.js',
        
    ];
}