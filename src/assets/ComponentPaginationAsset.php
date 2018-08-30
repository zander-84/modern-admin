<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class ComponentPaginationAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/pagination/bootstrap-datepaginator.min.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/pagination/jquery.bootpag.min.js',
        'app-assets/vendors/js/pagination/jquery.twbsPagination.min.js',
        'app-assets/vendors/js/pagination/moment.min.js',
        'app-assets/vendors/js/pagination/datepicker.js',
        'app-assets/vendors/js/pagination/bootstrap-datepaginator.min.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/pagination/pagination.js',
        
    ];
}