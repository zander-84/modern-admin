<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class FlotLineChartsAsset extends AssetBundle
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
        'app-assets/vendors/js/charts/flot/jquery.flot.time.js',
        'app-assets/vendors/js/charts/flot/jquery.flot.selection.js',
        'app-assets/vendors/js/charts/flot/jquery.flot.symbol.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/charts/flot/line/line.min.js',
        'app-assets/js/scripts/charts/flot/line/realtime.min.js',
        'app-assets/js/scripts/charts/flot/line/series-types.min.js',
        'app-assets/js/scripts/charts/flot/line/symbols.min.js',
        'app-assets/js/scripts/charts/flot/line/tracking.min.js',
        'app-assets/js/scripts/charts/flot/line/visitors.min.js',
        
    ];
}