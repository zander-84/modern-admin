<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class EchartsFunnelGaugesChartsAsset extends AssetBundle
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
        'app-assets/vendors/js/charts/echarts/echarts.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/charts/echarts/funnel-gauges/funnel-plot.js',
        'app-assets/js/scripts/charts/echarts/funnel-gauges/funnel-pyramid.js',
        'app-assets/js/scripts/charts/echarts/funnel-gauges/multiple-funnel1.js',
        'app-assets/js/scripts/charts/echarts/funnel-gauges/multiple-funnel2.js',
        'app-assets/js/scripts/charts/echarts/funnel-gauges/left-align-funnel.js',
        'app-assets/js/scripts/charts/echarts/funnel-gauges/right-align-funnel.js',
        'app-assets/js/scripts/charts/echarts/funnel-gauges/angular-gauge.js',
        'app-assets/js/scripts/charts/echarts/funnel-gauges/basic-gauge.js',
        'app-assets/js/scripts/charts/echarts/funnel-gauges/customized-gauge.js',
        'app-assets/js/scripts/charts/echarts/funnel-gauges/multiple-gauges.js',
        
    ];
}