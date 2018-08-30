<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class FlotPieChartsAsset extends AssetBundle
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
        'app-assets/vendors/js/charts/flot/jquery.flot.min.js',
        'app-assets/vendors/js/charts/flot/jquery.flot.pie.js',
        'app-assets/vendors/js/charts/flot/jquery.flot.resize.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/charts/flot/pie/donut-hole.min.js',
        'app-assets/js/scripts/charts/flot/pie/interactive-pie.min.js',
        'app-assets/js/scripts/charts/flot/pie/label-formatter.min.js',
        'app-assets/js/scripts/charts/flot/pie/pie.min.js',
        'app-assets/js/scripts/charts/flot/pie/rectangular-pie.min.js',
        'app-assets/js/scripts/charts/flot/pie/tilted-pie.min.js',
        
    ];
}