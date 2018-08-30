<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class TimelineLeftAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/forms/icheck/icheck.css',
        'app-assets/vendors/css/forms/icheck/custom.css',
        'app-assets/vendors/js/gallery/photo-swipe/photoswipe.css',
        'app-assets/vendors/js/gallery/photo-swipe/default-skin/default-skin.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        'app-assets/css/pages/timeline.min.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/forms/icheck/icheck.min.js',
        'app-assets/other/js/maps/api/js',
        'app-assets/vendors/js/charts/gmaps.min.js',
        'app-assets/vendors/js/gallery/masonry/masonry.pkgd.min.js',
        'app-assets/vendors/js/gallery/photo-swipe/photoswipe.min.js',
        'app-assets/vendors/js/gallery/photo-swipe/photoswipe-ui-default.min.js',
        'app-assets/vendors/js/charts/echarts/echarts.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/charts/echarts/bar-column/stacked-column.js',
        'app-assets/js/scripts/charts/echarts/radar-chord/non-ribbon-chord.js',
        'app-assets/js/scripts/gallery/photo-swipe/photoswipe-script.js',
        'app-assets/js/scripts/pages/timeline.min.js',
        
    ];
}