<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class PickersColorPickerAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/pickers/miniColors/jquery.minicolors.css',
        'app-assets/vendors/css/pickers/spectrum/spectrum.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        'app-assets/css/plugins/pickers/colorpicker/colorpicker.min.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/pickers/miniColors/jquery.minicolors.min.js',
        'app-assets/vendors/js/pickers/spectrum/spectrum.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/pickers/colorpicker/picker-color.js',
        
    ];
}