<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class DashboardEcommerceAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/weather-icons/climacons.min.css',
        'app-assets/fonts/meteocons/style.min.css',
        'app-assets/vendors/css/charts/morris.css',
        'app-assets/vendors/css/charts/chartist.css',
        'app-assets/vendors/css/charts/chartist-plugin-tooltip.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        'app-assets/fonts/simple-line-icons/style.min.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        'app-assets/css/pages/timeline.min.css',
        'app-assets/css/pages/dashboard-ecommerce.min.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/charts/chartist.min.js',
        'app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js',
        'app-assets/vendors/js/charts/raphael-min.js',
        'app-assets/vendors/js/charts/morris.min.js',
        'app-assets/vendors/js/timeline/horizontal-timeline.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/pages/dashboard-ecommerce.min.js',
        
    ];
}