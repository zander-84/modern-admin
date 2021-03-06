<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class DashboardSalesAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        'app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css',
        'app-assets/vendors/css/charts/morris.css',
        'app-assets/fonts/simple-line-icons/style.min.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/charts/chart.min.js',
        'app-assets/vendors/js/charts/raphael-min.js',
        'app-assets/vendors/js/charts/morris.min.js',
        'app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js',
        'app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js',
        'app-assets/data/jvector/visitor-data.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/pages/dashboard-sales.min.js',
        
    ];
}