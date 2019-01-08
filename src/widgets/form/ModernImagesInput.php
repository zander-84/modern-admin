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
use zander84\modernadmin\assets\ImagesInputAsset;

class ModernImagesInput extends InputWidget
{

    public $attribute = 'image[]';
    public $value;
    public $imgOptions;

    public $uploadUrl = '#';
    public $allowedFileExtensions = ['jpg', 'png', 'gif','jpeg'];
    public $maxFileSize = 3*1024*1024;
    public $maxFilesNum = 20;

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

        $uploadUrl = isset($this->imgOptions['uploadUrl']) ? $this->imgOptions['uploadUrl'] : $this->uploadUrl;
        $allowedFileExtensions = isset($this->imgOptions['allowedFileExtensions']) ? $this->imgOptions['allowedFileExtensions'] : $this->allowedFileExtensions;
        $allowedFileExtensions = json_encode($allowedFileExtensions);
        
        $maxFileSize = isset($this->imgOptions['maxFileSize']) ? $this->imgOptions['maxFileSize'] : $this->maxFileSize;
        $maxFilesNum = isset($this->imgOptions['maxFilesNum']) ? $this->imgOptions['maxFilesNum'] : $this->maxFilesNum;

        $script = <<<js
                $(function () {
                    $('input.{$this->id}').fileinput({
                        theme: 'fas',
                        uploadUrl: '{$uploadUrl}', // you must set a valid URL here else you will get an error
                        allowedFileExtensions: {$allowedFileExtensions},
                        overwriteInitial: false,
                        maxFileSize: {$maxFileSize},
                        maxFilesNum: {$maxFilesNum},
                        //allowedFileTypes: ['image', 'video', 'flash'],
                        slugCallback: function (filename) {
                            return filename.replace('(', '_').replace(']', '_');
                        }
                    });
                  });


js;

        $this->view->registerJs($script, View::POS_READY);
        return Html::activeFileInput($this->model, $this->attribute, $options);
    }

    /**
     * Registers the needed assets
     */
    public function registerAssets()
    {
        $view = $this->getView();
        ImagesInputAsset::register($view);
    }

}