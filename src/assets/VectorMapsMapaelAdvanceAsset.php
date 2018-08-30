<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class VectorMapsMapaelAdvanceAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/charts/mapael.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/charts/raphael-min.js',
        'app-assets/vendors/js/charts/mapael/jquery.mapael.min.js',
        'app-assets/vendors/js/charts/mapael/maps/france_departments.js',
        'app-assets/vendors/js/charts/mapael/maps/world_countries.js',
        'app-assets/vendors/js/charts/mapael/maps/usa_states.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/charts/mapael/advance/afterInit-extend.js',
        'app-assets/js/scripts/charts/mapael/advance/display-information.js',
        'app-assets/js/scripts/charts/mapael/advance/links-between-plotted-cities.js',
        'app-assets/js/scripts/charts/mapael/advance/multiple-legends-plotted-cities.js',
        'app-assets/js/scripts/charts/mapael/advance/zoom-on-click.js',
        
    ];
}