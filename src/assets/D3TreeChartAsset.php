<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class D3TreeChartAsset extends AssetBundle
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
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/charts/d3/tree/tree.min.js',
        'app-assets/js/scripts/charts/d3/tree/bracket.min.js',
        'app-assets/js/scripts/charts/d3/tree/collapsible.min.js',
        'app-assets/js/scripts/charts/d3/tree/dendrogram.js',
        'app-assets/js/scripts/charts/d3/tree/radial.min.js',
        
    ];
}