<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class FormSwitch2Asset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/forms/toggle/bootstrap-switch.min.css',
        'app-assets/vendors/css/forms/toggle/switchery.min.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        'app-assets/css/plugins/forms/switch.min.css',
        'app-assets/fonts/simple-line-icons/style.min.css',
        'app-assets/css/core/colors/palette-switch.min.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js',
        'app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js',
        'app-assets/vendors/js/forms/toggle/switchery.min.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        //'app-assets/js/scripts/forms/switch.min.js',
        
    ];
}