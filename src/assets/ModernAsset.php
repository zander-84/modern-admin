<?php

namespace zander84\modernadmin\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ModernAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        
    ];
    public $js = [
        'assets/layer-v3.1.1/layer.js'
    ];
    public $depends = [

        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];

}

class CustomAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'assets/css/custom.css'
    ];
    public $js = [
        'assets/js/custom.js'
    ];
}
