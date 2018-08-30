<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class DashboardCryptoAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        'app-assets/vendors/css/cryptocoins/cryptocoins.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/charts/echarts/chart/line.js',
        'app-assets/vendors/js/charts/echarts/chart/scatter.js',
        'app-assets/vendors/js/charts/echarts/chart/k.js',

        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/charts/chart.min.js',
        'app-assets/vendors/js/charts/echarts/echarts.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/pages/dashboard-crypto.min.js',
        
    ];
}