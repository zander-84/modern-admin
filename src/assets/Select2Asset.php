<?php

namespace zander84\modernadmin\assets;

use yii\web\AssetBundle;

class Select2Asset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'assets/select2-3.5.2/select2.css',
        'assets/select2-3.5.2/select2-bootstrap.css',
    ];

    public $js = [
        'assets/select2-3.5.2/select2.min.js',
    ];
}

