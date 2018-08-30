<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class DtAdvancedInitializationAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/tables/datatable/datatables.min.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/tables/datatable/datatables.min.js',
        'app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js',
        'app-assets/vendors/js/tables/buttons.flash.min.js',
        'app-assets/vendors/js/tables/jszip.min.js',
        'app-assets/vendors/js/tables/pdfmake.min.js',
        'app-assets/vendors/js/tables/vfs_fonts.js',
        'app-assets/vendors/js/tables/buttons.html5.min.js',
        'app-assets/vendors/js/tables/buttons.print.min.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/tables/datatables/datatable-advanced.js',
        
    ];
}