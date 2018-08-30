<?php
/**
 * Created by PhpStorm.
 * User: leviputna
 * Date: 4/02/2016
 * Time: 1:19 PM
 */

namespace zander84\modernadmin\widgets\form;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\InputWidget;
use zander84\modernadmin\assets\ImageInputAsset;

class ModernImageInput extends InputWidget
{

    public $attribute = 'image';
    public $value;

    /**
     * @inheritdoc
     */
    public function run()
    {
        parent::run();
        $this->registerAssets();

        echo $this->renderInput();
    }

    /**
     * Renders the input
     *
     * @return string
     */
    protected function renderInput(){
        $options = ArrayHelper::merge($this->options, [
            'class' => ' ' . $this->id,
            'data-type' => $this->attribute
        ]);

        $script = '$(function () {
                        $(\'input.' . $this->id . '\').dropzone({
                            \'value\': \'' . $this->value . '\'
                        })
                  });';

        $this->view->registerJs($script, View::POS_READY);
        return Html::activeFileInput($this->model, $this->attribute, $options);
    }

    /**
     * Registers the needed assets
     */
    public function registerAssets()
    {
        $view = $this->getView();
        ImageInputAsset::register($view);
    }

}