<?php
namespace zander84\modernadmin\widgets\form;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveField;

class ModernActiveFormField extends  ActiveField
{

    public function dropDownLists($items, $options = [])
    {
        $options = array_merge($this->inputOptions, $options);

        if ($this->form->validationStateOn === ModernActiveForm::VALIDATION_STATE_ON_INPUT) {
            $this->addErrorClassIfNeeded($options);
        }

        $this->addAriaAttributes($options);
        $this->adjustLabelFor($options);
        $this->parts['{input}'] = ModernHtml::activeDropDownList($this->model, $this->attribute, $items, $options);

        return $this;
    }

    public function timeInput($options = [])
    {

        $options = array_merge($this->inputOptions, $options);

        if ($this->form->validationStateOn === ModernActiveForm::VALIDATION_STATE_ON_INPUT) {
            $this->addErrorClassIfNeeded($options);
        }
        $this->addAriaAttributes($options);
        $this->adjustLabelFor($options);
        $this->parts['{input}'] = ' <div class="input-group"><div class="input-group-prepend"><span class="input-group-text"><span class="la la-calendar-o"></span></span> </div>'.
            Html::activeTextInput($this->model, $this->attribute, $options). '</div>';


        return $this;
    }

    public function tagsInput($options = [])
    {
        $options = array_merge($this->inputOptions, $options);

        if ($this->form->validationStateOn === ModernActiveForm::VALIDATION_STATE_ON_INPUT) {
            $this->addErrorClassIfNeeded($options);
        }

        $this->addAriaAttributes($options);
        $this->adjustLabelFor($options);
        $attribute = $this->attribute;
        $model = $this->model;
        $vals = $model->$attribute;
        if($vals && is_array($vals)){
            $vals = implode(', ',$vals);
        }
        $name = Html::getInputName($model, $attribute);;
        $id = Html::getInputId($model, $attribute);
        $this->parts['{input}'] = ' <div style="min-height:40px;"  class="edit-on-delete form-control" id="'.$id.'" data-tags-input-name="'.$name.'">'.$vals.'</div>';

        return $this;
    }

    public function iconInput($options,$icon)
    {
        $options = array_merge($this->inputOptions, $options);

        if ($this->form->validationStateOn === ModernActiveForm::VALIDATION_STATE_ON_INPUT) {
            $this->addErrorClassIfNeeded($options);
        }

        $this->addAriaAttributes($options);
        $this->adjustLabelFor($options);
        $this->parts['{input}'] = '<div class="input-group"><div class="input-group-prepend"><span class="input-group-text" style="width: 50px;height: 40px"><i class="'.$icon.'"></i></span></div>'.
            Html::activeTextInput($this->model, $this->attribute, $options).'</div>';

        return $this;
    }

    public function iconPasswdInput($options,$icon)
    {
        $options = array_merge($this->inputOptions, $options);

        if ($this->form->validationStateOn === ModernActiveForm::VALIDATION_STATE_ON_INPUT) {
            $this->addErrorClassIfNeeded($options);
        }

        $this->addAriaAttributes($options);
        $this->adjustLabelFor($options);
        $this->parts['{input}'] = '<div class="input-group"><div class="input-group-prepend"><span class="input-group-text" style="width: 50px;height: 40px"><i class="'.$icon.'"></i></span></div>'.
            Html::activePasswordInput($this->model, $this->attribute, $options).'</div>';

        return $this;
    }

    public function prependInput($options, $lable)
    {
        $options = array_merge($this->inputOptions, $options);

        if ($this->form->validationStateOn === ModernActiveForm::VALIDATION_STATE_ON_INPUT) {
            $this->addErrorClassIfNeeded($options);
        }
        $lable = $lable? $lable: $this->attribute;
        
        $this->addAriaAttributes($options);
        $this->adjustLabelFor($options);
        $this->parts['{input}'] = '<div class="input-group"><div class="input-group-prepend"><span class="input-group-text" >'.$lable.'</span></div>'.
            Html::activeTextInput($this->model, $this->attribute, $options).'</div>';

        return $this;
    }

}