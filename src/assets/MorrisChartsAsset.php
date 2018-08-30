<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class MorrisChartsAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/charts/morris.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/charts/raphael-min.js',
        'app-assets/vendors/js/charts/morris.min.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/charts/morris/line.min.js',
        'app-assets/js/scripts/charts/morris/smooth-line.min.js',
        'app-assets/js/scripts/charts/morris/area.min.js',
        'app-assets/js/scripts/charts/morris/smooth-area.min.js',
        'app-assets/js/scripts/charts/morris/bar.min.js',
        'app-assets/js/scripts/charts/morris/donut.min.js',
        
    ];
}