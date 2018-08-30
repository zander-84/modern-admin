<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class FormExtendedInputsAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        'app-assets/css/plugins/forms/extended/form-extended.min.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/forms/extended/typeahead/typeahead.bundle.min.js',
        'app-assets/vendors/js/forms/extended/typeahead/bloodhound.min.js',
        'app-assets/vendors/js/forms/extended/typeahead/handlebars.js',
        'app-assets/vendors/js/forms/extended/inputmask/jquery.inputmask.bundle.min.js',
        'app-assets/vendors/js/forms/extended/formatter/formatter.min.js',
        'app-assets/vendors/js/forms/extended/maxlength/bootstrap-maxlength.js',
        'app-assets/vendors/js/forms/extended/card/jquery.card.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/forms/extended/form-typeahead.min.js',
        'app-assets/js/scripts/forms/extended/form-inputmask.min.js',
        'app-assets/js/scripts/forms/extended/form-formatter.min.js',
        'app-assets/js/scripts/forms/extended/form-maxlength.min.js',
        'app-assets/js/scripts/forms/extended/form-card.min.js',
        
    ];
}