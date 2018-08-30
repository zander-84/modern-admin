<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class ExComponentLongPressAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/extensions/long-press.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/extensions/long-press/jquery.mousewheel.js',
        'app-assets/vendors/js/extensions/long-press/jquery.longpress.js',
        'app-assets/vendors/js/extensions/long-press/plugins.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/extensions/long-press.min.js',
        
    ];
}