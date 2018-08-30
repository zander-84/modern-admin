<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class PickersDateTimePicker2Asset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/pickers/daterange/daterangepicker.css',
        'app-assets/vendors/css/pickers/pickadate/pickadate.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        'app-assets/css/plugins/pickers/daterange/daterange.min.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/pickers/pickadate/picker.js',
        'app-assets/vendors/js/pickers/pickadate/picker.date.js',
        'app-assets/vendors/js/pickers/pickadate/picker.time.js',
        'app-assets/vendors/js/pickers/pickadate/legacy.js',
        'app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js',
        'app-assets/vendors/js/pickers/daterange/daterangepicker.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
    ];
    
}