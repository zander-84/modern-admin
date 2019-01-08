<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class ImagesInputAsset extends AssetBundle {

    public $sourcePath = '@modern-assets';

    public $css = [
        'assets/fileinput/css/fileinput.css',
        ['https://use.fontawesome.com/releases/v5.5.0/css/all.css','option'=>['crossorigin'=>'anonymous']],
    ];

    public $js = [
        ['https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js','option'=>['crossorigin'=>'anonymous']],
        'assets/fileinput/js/plugins/sortable.js',
        'assets/fileinput/js/fileinput.js',
        //'assets/fileinput/js/locales/fr.js',
        //'assets/fileinput/js/locales/es.js',
        'assets/fileinput/themes/fas/theme.js',
        'assets/fileinput/themes/explorer-fas/theme.js',
    ];

}