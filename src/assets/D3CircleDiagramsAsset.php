<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class D3CircleDiagramsAsset extends AssetBundle
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
        'app-assets/vendors/js/charts/venn.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/charts/d3/circle/interactive-venn.js',
        'app-assets/js/scripts/charts/d3/circle/intersection-tooltip-venn.js',
        'app-assets/js/scripts/charts/d3/circle/medical-venn.js',
        'app-assets/js/scripts/charts/d3/circle/styled-venn.js',
        'app-assets/js/scripts/charts/d3/circle/venn-venn.js',
        'app-assets/js/scripts/charts/d3/circle/weighted-venn.js',
        'app-assets/js/scripts/charts/d3/circle/sequences-sunburst.js',
        'app-assets/js/scripts/charts/d3/circle/zoomable-sunburst.js',
        'app-assets/js/scripts/charts/d3/circle/sunburst-partition.js',
        'app-assets/js/scripts/charts/d3/circle/sunburst-distortion.js',
        
    ];
}