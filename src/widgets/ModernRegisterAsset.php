<?php
/**
 * Created by PhpStorm.
 * User: marvin
 * Date: 2018/8/21
 * Time: 10:15
 */

namespace zander84\modernadmin\widgets;

use zander84\modernadmin\assets\ModernAsset;
use zander84\modernadmin\assets\CustomAsset;

class ModernRegisterAsset extends \yii\bootstrap\Widget
{

    public $assets = [];
    public $fullPage = false;
    public $fullImg = false;


    public function run()
    {
        $view = $this->getView();
        $bundle = ModernAsset::register($view);

        if($this->fullPage){
            $view->beginBlock('is_full_page');
            $view->endBlock();
        }

        if($this->fullImg){
            $view->beginBlock('full_img');
            $view->endBlock();
        }
        if($this->assets){
            foreach ($this->assets as $asset){
                $asset::register($view);
            }
        }

        CustomAsset::register($view);
        return $bundle->baseUrl;

    }
}