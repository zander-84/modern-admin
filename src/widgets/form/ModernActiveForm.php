<?php
namespace zander84\modernadmin\widgets\form;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use zander84\modernadmin\helpers\HtmlHelper;
use zander84\modernadmin\widgets\ModernCard;
use zander84\modernadmin\widgets\ModernLayout;

class ModernActiveForm extends  \yii\widgets\ActiveForm
{

    public $fieldClass = 'zander84\modernadmin\widgets\form\ModernActiveFormField';

    public function fieldIconInput($model, $attribute,$width=12, $icon='', $fieldOptions = [], $textInputOptions = [] )
    {
        $fieldOptions = $this->defaultFieldOptions($fieldOptions, HtmlHelper::column($width));
        return $this->field($model, $attribute, $fieldOptions)->iconInput($textInputOptions,$icon)->label(false);
    }

    public function fieldIconPasswordInput($model, $attribute,$width=12, $icon='', $fieldOptions = [], $textInputOptions = [] )
    {
        $fieldOptions = $this->defaultFieldOptions($fieldOptions, HtmlHelper::column($width));
        return $this->field($model, $attribute, $fieldOptions)->iconPasswdInput($textInputOptions,$icon)->label(false);
    }


    public function fieldPrependInput($model, $attribute,$width=12,$lable = null, $fieldOptions = [], $textInputOptions = [] )
    {
        $fieldOptions = $this->defaultFieldOptions($fieldOptions, HtmlHelper::column($width));
        return $this->field($model, $attribute, $fieldOptions)->prependInput($textInputOptions,$lable)->label(false);
    }


    public function fieldTextInput($model, $attribute,$width=12, $lable = null, $fieldOptions = [], $textInputOptions = [],$lableOptions = [] )
    {
        $fieldOptions = $this->defaultFieldOptions($fieldOptions, HtmlHelper::column($width));
        return $this->field($model, $attribute, $fieldOptions)->textInput($textInputOptions)->label($lable, $lableOptions);
    }

    public function fieldHiddenInput($model, $attribute )
    {
        return $this->field($model, $attribute)->hiddenInput();;
    }

    public function fieldPasswordInput($model, $attribute,$width=12, $lable = null, $fieldOptions = [], $textInputOptions = [],$lableOptions = [] )
    {
        $fieldOptions = $this->defaultFieldOptions($fieldOptions, HtmlHelper::column($width));
        return $this->field($model, $attribute, $fieldOptions)->passwordInput($textInputOptions)->label($lable, $lableOptions);
    }

    public function fieldDropDownList($model, $attribute, $items=[],$width=12, $label=null, $fieldOptions = [], $dropDownListOptions = [])
    {
        $fieldOptions = $this->defaultFieldOptions($fieldOptions, HtmlHelper::column($width));
        return $this->field($model,$attribute,$fieldOptions)->dropDownList($items,$dropDownListOptions)->label($label);
    }

    public function fieldTextarea($model, $attribute,$width=12, $label=null ,  $fieldOptions = [], $textareaOptions = ['rows' => 6])
    {
        $fieldOptions = $this->defaultFieldOptions($fieldOptions, HtmlHelper::column($width));
        return  $this->field($model, $attribute, $fieldOptions)->textarea($textareaOptions);
    }


    public function fieldRadioList($model, $attribute, $items=[],$width=12, $label=null , $fieldOptions = [], $radioListOptions = [],  $event=[])
    {
        $id = uniqid("modern_");
        $icheck = Yii::$app->params['modern_dashboard']['icheck'];
        $fieldOptions['options']['id'] = $id;
        $ichick_type =  $icheck['type'];
        $icheckradio = $icheck['radio'] ? '-'.$icheck['radio'] : '';
        $this->view->registerJs('
         $("#'.$id.' input").iCheck({
            radioClass: "iradio_'.$ichick_type.''.$icheckradio.'",
            });
        ');
        $this->view->registerCss('
            .iradio_'.$ichick_type.''.$icheckradio.'{
                vertical-align: bottom;
            }
        ');

        if(isset($event['ifClicked'])){
            $this->view->registerJs('
                $("#'.$id.' input").on("ifClicked",'.$event["ifClicked"].')
            ');
        }

        $fieldOptions = $this->defaultFieldOptions($fieldOptions, HtmlHelper::column($width));
        return $this->field($model, $attribute, $fieldOptions)->radioList($items,$radioListOptions)->label($label);
    }


    public function fieldCheckbox($model, $attribute, $width=12, $label = null,  $fieldOptions = [], $checkboxOptions = [],  $event=[])
    {
        $id = uniqid("modern_");
        $icheck = Yii::$app->params['modern_dashboard']['icheck'];
        $fieldOptions['options']['id'] = $id;
        $ichick_type =   $icheck['type'];
        $icheckbox = $icheck['box'] ? '-'.$icheck['box'] : '';

        $this->view->registerJs('
         $("#'.$id.' input").iCheck({
            checkboxClass: "icheckbox_'.$ichick_type.''.$icheckbox.'",
            });
        ');

        $this->view->registerCss('
            .icheckbox_'.$ichick_type.''.$icheckbox.'{
                vertical-align: bottom;
            }
        ');

        if(isset($event['ifClicked'])){
            $this->view->registerJs('
                $("#'.$id.' input").on("ifClicked",'.$event["ifClicked"].')
            ');
        }

        $fieldOptions = $this->defaultFieldOptions($fieldOptions, HtmlHelper::column($width));
        return $this->field($model,$attribute,$fieldOptions)->checkbox($checkboxOptions)->label($label);
    }

    public function fieldSwitch($model, $attribute, $width=12, $label = null,  $fieldOptions = [], $checkboxOptions = [])
    {
        $fieldOptions = $this->defaultFieldOptions($fieldOptions, HtmlHelper::column($width));
        $checkboxOptions['class'] = 'switch';
        $checkboxOptions['data-group-cls'] = 'btn-group-sm';
        $this->view->registerJs('!function(c,e,s){"use strict";s("html");s(".switch:checkbox").checkboxpicker(),s(".switchBootstrap").bootstrapSwitch(),s("#switch12").checkboxpicker({html:!0,offLabel:\'<span class="icon-remove">\',onLabel:\'<span class="icon-ok">\'});var t=0;if(Array.prototype.forEach){var r=s(".switchery");s.each(r,function(c,e){var t,r,a="",o="";t=s(this).data("size");a=void 0!==s(this).data("size")?"switchery switchery-"+{lg:"large",sm:"small",xs:"xsmall"}[t]:"switchery";o=void 0!==(r=s(this).data("color"))?{primary:"#967ADC",success:"#37BC9B",danger:"#DA4453",warning:"#F6BB42",info:"#3BAFDA"}[r]:"#37BC9B";new Switchery(s(this)[0],{className:a,color:o})})}else{var a=e.querySelectorAll(".switchery");for(t=0;t<a.length;t++)a[t].data("size"),a[t].data("color"),new Switchery(a[t],{color:"#37BC9B"})}}(window,document,jQuery);');
        return $this->field($model,$attribute,$fieldOptions)->checkbox($checkboxOptions,false)->label($label);
    }

    public function fieldDropMultiDownList($model, $attribute,  $items=[], $width=12, $fieldOptions = [], $dropDownListOptions = [], $label = null)
    {
        $dropDownListOptions['multiple'] = 'multiple';
        $id = uniqid('select2_');
        $dropDownListOptions['id'] = $id;
        $this->view->registerJs('
            $("#'.$id.'").off("select2")
            $("#'.$id.'").off("change")
            $("#'.$id.'").select2({
              
            });

            $("#'.$id.'").on("change" ,function(){
                $(this).parent("div").addClass("'.$this->successCssClass.'");
            })

        ');
        $fieldOptions = $this->defaultFieldOptions($fieldOptions, HtmlHelper::column($width));
        return $this->field($model,$attribute,$fieldOptions)->dropDownLists($items,$dropDownListOptions)->label($label);
    }


    public function fieldTimeInput($model, $attribute,$width=12,$rangeOptions=['isRange'=>false,'current'=>'start','start'=>'startID', 'end'=>'endID'], $lable = null,$fieldOptions = [], $textInputOptions = [], $datepickerOptions = '' )
    {
        $dafaultDatepickerOptions = "{
            format:'yyyy-mm-dd',
            today: 'Today',
            clear: 'Clear',
            close: 'Close',
        }";
        //onSet: function(){
        //
        //}
        $datepickerOptions = $datepickerOptions ? $datepickerOptions : $dafaultDatepickerOptions;
        $fieldOptions = $this->defaultFieldOptions($fieldOptions, HtmlHelper::column($width));

        if($rangeOptions['isRange']){
            $textInputOptions['id'] = $rangeOptions[$rangeOptions['current']];
            if($rangeOptions['current'] == 'end'){
                $startID = $rangeOptions['start'];
                $endID = $rangeOptions['end'];
                $js = <<<js
                	// Date Range from & to
                	
                var from_input = $('#{$startID}').pickadate({$datepickerOptions}),
                from_picker = from_input.pickadate('picker');
            
                var to_input = $('#{$endID}').pickadate({$datepickerOptions}),
                    to_picker = to_input.pickadate('picker');
            
            
                // Check if there’s a “from” or “to” date to start with.
                if ( from_picker.get('value') ) {
                    to_picker.set('min', from_picker.get('select'));
                }
                if ( to_picker.get('value') ) {
                    from_picker.set('max', to_picker.get('select'));
                }
            
                // When something is selected, update the “from” and “to” limits.
                from_picker.on('set', function(event) {
                    if ( event.select ) {
                        to_picker.set('min', from_picker.get('select'));
                    }
                    else if ( 'clear' in event ) {
                        to_picker.set('min', false);
                    }
                });
                to_picker.on('set', function(event) {
                    if ( event.select ) {
                        from_picker.set('max', to_picker.get('select'));
                    }
                    else if ( 'clear' in event ) {
                        from_picker.set('max', false);
                    }
                });
js;
                $this->view->registerJs($js);
            }

        }
        else{
            $textInputOptions['id'] =  isset($textInputOptions['id']) && $textInputOptions['id'] ? $textInputOptions['id'] :uniqid('id_');
            $this->view->registerJs("$('#".$textInputOptions['id'] ."').pickadate(".$datepickerOptions.");");
        }

        return $this->field($model, $attribute, $fieldOptions)->timeInput($textInputOptions)->label($lable);
    }


    //'language'=>'zh-CN',"changeDate" => "function(e) {  # `e` here contains the extra attributes }",
    public function fieldDateTimeInput($model, $attribute, $width=12, $fieldOptions = [], $textInputOptions = ['placeholder' => 'Select operating time ...'], $datepickerOptions = [], $label = null )
    {
        $defaultDatepickerOptions = ['pluginOptions'=>['format' => 'yyyy-mm-dd','language'=>'zh-CN', 'clearBtn'=>false, 'todayHighlight' => true, 'minView' => 'month', 'autoclose' =>true],'pluginEvents'=>[]];
        $datepickerOptions = ArrayHelper::merge($defaultDatepickerOptions,$datepickerOptions);

        $fieldOptions = $this->defaultFieldOptions($fieldOptions, HtmlHelper::column($width));
        return $this->field($model, $attribute, $fieldOptions)->widget(DateTimePicker::className(), [
            'name' => $model->$attribute,
            'pickerButton' => ['style'=>'width:40px'],
            'layout'=>'{picker}{input}',
            'options' => $textInputOptions,
            'pluginOptions' => $datepickerOptions['pluginOptions'],
            'pluginEvents' => $datepickerOptions['pluginEvents'],
        ])->label($label);
    }


    public function fieldTagsInput($model, $attribute,$width=12, $lable = null, $fieldOptions = [], $textInputOptions = [],$lableOptions = [])
    {
        $fieldOptions = $this->defaultFieldOptions($fieldOptions, HtmlHelper::column($width));
        $this->view->registerJs('
        
        $(document).ready(function () {
             $(".edit-on-delete").tagging({
                "edit-on-delete": !1,
                "forbidden-chars": [",", ".", "_", "?"],
                "forbidden-words": ["bastard", "bitch", "biatch", "bloody"],
                "no-duplicate": !1,
               
            
             })
             $(".type-zone")[0].blur()
        })
        ');
        return $this->field($model, $attribute, $fieldOptions)->tagsInput($textInputOptions)->label($lable, $lableOptions);
    }

    public function fieldImageInput($model, $attribute,$width=12, $lable=null, $fieldOptions = [], $textInputOptions = [])
    {
        $fieldOptions = $this->defaultFieldOptions($fieldOptions, HtmlHelper::column($width));
        return $this->field($model, $attribute, $fieldOptions)->widget(ModernImageInput::className(), [
            'value' => $model->$attribute,
            'options' => $textInputOptions,
        ])->label($lable);
    }

    public function beginBody($options = ['class'=>"card-body"])
    {
        return ModernLayout::beginTag([['div',$options]]);
    }

    public  function endBody()
    {
        return ModernLayout::endTag(['div']);
    }
    
    public function section($icon, $label = '')
    {
        $html = '';
        $html .= ModernLayout::beginTag([
            ['h4',['class'=>'form-section']],
            ['i',['class'=>$icon]],
        ]);
        $html .= ModernLayout::endTag(['i']);
        $html .= ' '.$label;
        $html .= ModernLayout::endTag(['h4']);

        return $html;
    }

    public function actions($btns = ['cancel'=>'Cancel', 'submit'=>'Save'])
    {
        $html = '';
        $html .= ModernLayout::beginTag([
            ['div',['class'=>'form-actions right']],
        ]);

        if($btns['cancel']){
            $html .= ModernLayout::beginTag([
                ['button',['class'=>'btn btn-warning mr-1 box-shadow-1','type'=>"reset"]],
            ]);
            $html .= ModernLayout::beginTag([
                ['i',['class'=>'ft-x']],
            ]);
            $html .= $btns['cancel'];
            $html .= ModernLayout::endTag(['i']);
            $html .= ModernLayout::endTag(['button']);
        }
        if($btns['submit']){
            $html .= ModernLayout::beginTag([
                ['button',['class'=>'btn btn-primary mr-1 box-shadow-1','type'=>"submit"]],
            ]);
            $html .= ModernLayout::beginTag([
                ['i',['class'=>'la la-check-square-o']],
            ]);
            $html .= $btns['submit'];
            $html .= ModernLayout::endTag(['i']);
            $html .= ModernLayout::endTag(['button']);
        }

        $html .= ModernLayout::endTag(['div']);

        return $html;
    }

    public function submit($col=3, $val = 'search')
    {
        $html = '';
        $html .= ModernCard::beginColumn($col,'cust_field');
        $html .= ModernLayout::beginTag([['div',['class'=>'btn-group', 'role'=>'group','style'=>['height'=>'40px', 'width'=>'100%']]]]);
        $html .= ModernLayout::beginTag([
            ['button',['class'=>'btn btn-success  ','type'=>"submit",'style'=>[ 'width'=>'100%']]],
        ]);
        $html .= ModernLayout::beginTag([
            ['i',['class'=>'la la-search','style'=>['margin-right'=>'5px']]],
        ]);
        $html .= ModernLayout::endTag(['i']);
        $html .= $val;

        $html .= ModernLayout::endTag(['button','div']);
        $html .= ModernCard::endColumn();

        return $html;
    }



    public function beginFieldRow($options = ['class'=>'row'])
    {
        return ModernLayout::beginTag([['div',$options]]);
    }

    public function endFieldRow($options = ['class'=>'row'])
    {
        return ModernLayout::endTag(['div']);
    }


    public static function begin ($config = [] )
    {
        $config = self::defaultConfig($config);
        $weight = parent::begin($config);
        return $weight;
    }

    public static function end ()
    {
        return parent::end();
    }

    public static function defaultConfig($config)
    {
        if(!isset($config['options']['class'])){
            $config['options']['class'] = 'form';
        }else{
            $config['options']['class'] .= ' form ';
        }

        return $config;
    }

    protected function defaultFieldOptions($config, $class)
    {
        if(!isset($config['options']['class'])){
            $config['options']['class'] = $class;
        }else{
            $config['options']['class'] .= $class;
        }
        $config['options']['class'] .=' cust_field ';
        return $config;
    }



}