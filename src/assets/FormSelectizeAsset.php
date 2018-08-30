<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class FormSelectizeAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/forms/selects/selectize.css',
        'app-assets/vendors/css/forms/selects/selectize.default.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        'app-assets/css/plugins/forms/selectize/selectize.min.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/forms/select/selectize.min.js',
        'app-assets/js/core/libraries/jquery_ui/jquery-ui.min.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/forms/select/form-selectize.min.js',
        
    ];
}