<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class TableComponentsAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/forms/icheck/icheck.css',
        'app-assets/vendors/css/forms/icheck/custom.css',
        'app-assets/vendors/css/forms/toggle/switchery.min.css',
        'app-assets/vendors/css/forms/selects/select2.min.css',
        'app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        'app-assets/css/plugins/forms/switch.min.css',
        'app-assets/css/core/colors/palette-callout.min.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/forms/icheck/icheck.min.js',
        'app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js',
        'app-assets/vendors/js/forms/toggle/switchery.min.js',
        'app-assets/vendors/js/forms/select/select2.full.min.js',
        'app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js',
        'app-assets/other/js/jsapi',
        'app-assets/vendors/js/charts/jquery.sparkline.min.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/tables/components/table-components.js',
        
    ];
}