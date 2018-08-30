<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class ScrumboardAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/ui/jquery-ui.min.css',
        'app-assets/vendors/css/pages/lobilist/lobilist.css',
        'app-assets/vendors/css/ui/jquery-ui.min.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/js/core/libraries/jquery_ui/jquery-ui.min.js',
        'app-assets/vendors/js/pages/lobibox/lobibox.min.js',
        'app-assets/vendors/js/pages/lobilist/lobilist.js',
        'app-assets/js/core/libraries/jquery_ui/jquery-ui.min.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/ui/jquery-ui/date-pickers.min.js',
        'app-assets/js/scripts/pages/scrumboard.min.js',
        
    ];
}