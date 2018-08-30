<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class EditorSummernoteAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/editors/summernote.css',
        'app-assets/vendors/css/editors/codemirror.css',
        'app-assets/vendors/css/editors/theme/monokai.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/editors/codemirror/lib/codemirror.js',
        'app-assets/vendors/js/editors/codemirror/mode/xml/xml.js',
        'app-assets/vendors/js/editors/summernote/summernote.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/editors/editor-summernote.min.js',
        
    ];
}