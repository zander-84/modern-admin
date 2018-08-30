<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class FileUploaderDropzoneAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/ui/prism.min.css',
        'app-assets/vendors/css/file-uploaders/dropzone.min.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        'app-assets/css/plugins/file-uploaders/dropzone.min.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/extensions/dropzone.min.js',
        'app-assets/vendors/js/ui/prism.min.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/extensions/dropzone.min.js',
        
    ];
}