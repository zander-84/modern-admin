<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class LayoutContentDetachedLeftStickySidebarAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/extensions/nouislider.min.css',
        'app-assets/vendors/css/ui/prism.min.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        'app-assets/css/plugins/extensions/noui-slider.min.css',
        'app-assets/css/core/colors/palette-noui.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/ui/jquery.sticky.js',
        'app-assets/vendors/js/ui/prism.min.js',
        'app-assets/vendors/js/extensions/jquery.raty.js',
        'app-assets/vendors/js/extensions/jquery.knob.min.js',
        'app-assets/vendors/js/extensions/wNumb.js',
        'app-assets/vendors/js/extensions/nouislider.min.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/extensions/knob.min.js',
        'app-assets/js/scripts/pages/content-sidebar.min.js',
        
    ];
}