<?php
namespace zander84\modernadmin\widgets\form;


use yii\helpers\Json;
use yii\widgets\ActiveFormAsset;

class ModernModalForm extends ModernSmallForm
{

    public  function buttons($sumit = 'Submit', $close = 'Close'  )
    {
        $html = '';
        $html .= '<div class="modal-footer" style="margin-top: 40px;">';
        $html .= '<input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="'.$close.'">';
        $html .= ' <input type="submit" class="btn btn-outline-primary btn-lg" value="'.$sumit.'">';
        $html .= '</div>';
        return $html;
    }


    public function registerClientScript()
    {
        $id = $this->options['id'];
        $options = Json::htmlEncode($this->getClientOptions());
        $attributes = Json::htmlEncode($this->attributes);
        $view = $this->getView();
        ActiveFormAsset::register($view);
        $view->registerJs("jQuery('#$id').yiiActiveForm($attributes, $options);");
    }




}
