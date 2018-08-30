<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class CardInteractiveAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/charts/morris.css',
        'app-assets/vendors/css/charts/rickshaw.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/charts/chart.min.js',
        'app-assets/vendors/js/charts/d3.min.js',
        'app-assets/vendors/js/charts/rickshaw.min.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/cards/card-interactive.min.js',
        
    ];
}