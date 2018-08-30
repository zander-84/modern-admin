<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class ComingSoonBgVideoAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/extensions/bgvideo/video-js.min.css',
        'app-assets/vendors/css/extensions/bgvideo/bigvideo.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        'app-assets/css/pages/coming-soon.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/coming-soon/jquery.countdown.min.js',
        'app-assets/vendors/js/bgvideo/video.min.js',
        'app-assets/vendors/js/bgvideo/imagesloaded.pkgd.min.js',
        'app-assets/vendors/js/bgvideo/bigvideo.js',
        'app-assets/vendors/js/bgvideo/jquery.tubular.1.0.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/coming-soon/coming-soon.js',
        
    ];
}