<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class VectorMapsJvqAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/charts/jqvmap.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/charts/jqvmap/jquery.vmap.min.js',
        'app-assets/vendors/js/charts/jqvmap/maps/continents/jquery.vmap.africa.js',
        'app-assets/vendors/js/charts/jqvmap/maps/continents/jquery.vmap.asia.js',
        'app-assets/vendors/js/charts/jqvmap/maps/continents/jquery.vmap.australia.js',
        'app-assets/vendors/js/charts/jqvmap/maps/continents/jquery.vmap.europe.js',
        'app-assets/vendors/js/charts/jqvmap/maps/continents/jquery.vmap.north-america.js',
        'app-assets/vendors/js/charts/jqvmap/maps/continents/jquery.vmap.south-america.js',
        'app-assets/vendors/js/charts/jqvmap/maps/jquery.vmap.usa.js',
        'app-assets/vendors/js/charts/jqvmap/maps/jquery.vmap.world.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/charts/jqvmap/jqvmap.min.js',
        'app-assets/data/jqvmaps/jquery.vmap.sampledata.js',
        
    ];
}