<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class FlotBarChartsAsset extends AssetBundle
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
        'app-assets/vendors/js/charts/flot/jquery.flot.resize.js',
        'app-assets/vendors/js/charts/flot/jquery.flot.categories.js',
        'app-assets/vendors/js/charts/flot/jquery.flot.threshold.js',
        'app-assets/vendors/js/charts/flot/jquery.flot.stack.js',
        'app-assets/vendors/js/charts/flot/jquery.flot.errorbars.js',
        'app-assets/vendors/js/charts/flot/jquery.flot.navigate.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/charts/flot/bar/bar.min.js',
        'app-assets/js/scripts/charts/flot/bar/annotations.min.js',
        'app-assets/js/scripts/charts/flot/bar/thresholds.min.js',
        'app-assets/js/scripts/charts/flot/bar/stacked-bar.min.js',
        'app-assets/js/scripts/charts/flot/bar/error-bars.min.js',
        
    ];
}