<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class GooglePieChartsAsset extends AssetBundle
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
        'app-assets/js/scripts/charts/google/pie/pie.min.js',
        'app-assets/js/scripts/charts/google/pie/pie-exploded.min.js',
        'app-assets/js/scripts/charts/google/pie/pie-rotated.min.js',
        'app-assets/js/scripts/charts/google/pie/3d-pie.min.js',
        'app-assets/js/scripts/charts/google/pie/3d-pie-exploded.js',
        'app-assets/js/scripts/charts/google/pie/donut.min.js',
        'app-assets/js/scripts/charts/google/pie/donut-exploded.js',
        'app-assets/js/scripts/charts/google/pie/donut-rotated.min.js',
        'app-assets/js/scripts/charts/google/pie/pie-diff-radius.js',
        'app-assets/js/scripts/charts/google/pie/pie-diff-border.js',
        'app-assets/js/scripts/charts/google/pie/pie-diff-opacity.js',
        'app-assets/js/scripts/charts/google/pie/pie-diff-invert.js',
        
    ];
}