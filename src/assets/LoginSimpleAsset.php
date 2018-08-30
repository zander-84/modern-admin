<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class LoginSimpleAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/forms/icheck/icheck.css',
        'app-assets/vendors/css/forms/icheck/custom.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        'app-assets/css/pages/login-register.min.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/forms/icheck/icheck.min.js',
        'app-assets/vendors/js/forms/validation/jqBootstrapValidation.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/forms/form-login-register.min.js',
        
    ];
}