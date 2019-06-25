<?php

namespace zander84\modernadmin\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Url;
use Yii;

class ModernButtons
{

    public static function edit($params= [] , $highlight=true)
    {

        $active = '';
        $request = Yii::$app->request;
        $url = $request->getUrl();

        if($highlight) {
            foreach ($params as $k => $v) {
                if(isset($_POST[$k])) {
                    if ($v == $_POST[$k]) {
                        $active = ' field-active ';
                        Yii::$app->view->registerJs('$(document).ready(function (){ $(".field-active").parent().parent().parent().parent().parent().attr("class","border-'.Yii::$app->params['modern_dashboard']['theme_color'].' border-3"); })');
                    }
                }
            }
        }

        $params['_csrf'] = Yii::$app->request->csrfToken;
        $params[$request->action_key] = $request->action_find;
        $html = ModernLayout::beginTag([['div']]);
        $html .= Html::beginForm([$url],'post',['data-pjax' => true]);
        foreach ($params as $k=>$v){
            $html .=  Html::hiddenInput($k, $v);
        }
        $html .=  ModernLayout::beginTag([['i',['class'=>'ft-edit '.$active, 'onclick'=>'$(this).parent("form").submit()','style'=>['cursor'=>'pointer','font-size'=>'1.3rem']]]]);
        $html .=  ModernLayout::endTag(['i']);
        $html .= Html::endForm();
        $html .=  ModernLayout::endTag(['div']);
        return $html;
    }

    public static function aEdit($url )
    {
        $html = ModernLayout::beginTag([['div']]);
        $html .= Html::a(
            ModernLayout::beginTag([['i',['class'=>'ft-edit ', 'style'=>['cursor'=>'pointer','font-size'=>'1.3rem']]]]).ModernLayout::endTag(['i']),
            $url,
            ['data-pjax'=>0]
        );
        $html .=  ModernLayout::endTag(['div']);
        return $html;
    }


    public static function delete($params= [])
    {
        $request = Yii::$app->request;
        $url = $request->getUrl();
        $params['_csrf'] = Yii::$app->request->csrfToken;
        $params[$request->action_key] = $request->action_delete;
        $html = ModernLayout::beginTag([['div']]);
        $html .= Html::beginForm([$url],'post',['data-pjax' => true]);
        foreach ($params as $k=>$v){
            $html .=  Html::hiddenInput($k, $v);
        }
        //'onclick'=>'$(this).parent("form").submit()',
        $html .=  ModernLayout::beginTag([['i',['class'=>'ft-trash-2 ','type'=>'button','onclick'=>'
                swal({
            title: "Confirm Delete",
            text: "",
            icon: "warning",
            buttons: {
                cancel: {
                    text: "Cancel",
                    value: null,
                    visible: true,
                    className: "",
                    closeModal: false,
                },
                confirm: {
                    text: "Delete",
                    value: true,
                    visible: true,
                    className: "",
                    closeModal: true
                }
            }
        }).then(isConfirm => {
            if (isConfirm) {
               $(this).parent("form").submit()
            } else {
                swal("Cancelled", "It\'s safe.", "error");
            }
        });', 'style'=>['cursor'=>'pointer','font-size'=>'1.3rem','-webkit-appearance'=>'none']]]]);
        $html .=  ModernLayout::endTag(['i']);
        $html .= Html::endForm();
        $html .=  ModernLayout::endTag(['div']);
        return $html;
    }

    public static function checkModalButton($params,$model, $val = 'Delete', $col=3,  $color = 'btn-primary')
    {
        //$color = 'btn-'.Yii::$app->params['modern_dashboard']['theme_color'];
        $request = Yii::$app->request;
        $model['data-vals']['_csrf'] = $request->csrfToken;
        $model['data-vals'][$request->action_key] = $model['data-action'];

        $options = ['class'=>' btn-group ','role'=>'group','style'=>['height'=>'33px', 'width'=>'100%']];
        if(isset($params['class'])){
            $options['class'] = $options['class'].$params['class'];
            unset($params['class']);
        }
        $options = array_merge($options, $params);

        $html = '';


        $html .= ModernCard::beginColumn($col, 'cust_field');
        $html .= ModernLayout::beginTag([
            ['span',array_merge([ 'type'=>'button','data-toggle'=>"modal",'style'=>[ 'display'=>'none']],$model)],
        ]);
        $html .= ModernLayout::endTag(['span']);
        $html .= ModernLayout::beginTag([['div', $options]]);
        $html .= ModernLayout::beginTag([
            ['button',['class'=>'btn '.$color.' ','type'=>'button','style'=>[ 'width'=>'100%','padding-top'=>'7px']]],
        ]);

        $html .= $val;
        $html .= ModernLayout::endTag(['button','div']);



        $html .= ModernCard::endColumn();

        return $html;
    }

    public static function modalButton($params, $val = 'Delete', $col=3,  $color = 'btn-primary')
    {
        $request = Yii::$app->request;
        $params['data-vals']['_csrf'] = $request->csrfToken;
        $params['data-vals'][$request->action_key] = $params['data-action'];

        $options = ['class'=>' btn-group ','data-toggle'=>"modal",'role'=>'group','style'=>['height'=>'33px', 'width'=>'100%']];
        if(isset($params['class'])){
            $options['class'] = $options['class'].$params['class'];
            unset($params['class']);
        }
        $options = array_merge($options, $params);

        $html = '';
        $html .= ModernCard::beginColumn($col, 'cust_field');
        $html .= ModernLayout::beginTag([['div', $options]]);
        $html .= ModernLayout::beginTag([
            ['button',['class'=>'btn '.$color.' ','type'=>'button','style'=>[ 'width'=>'100%','padding-top'=>'7px']]],
        ]);

        $html .= $val;
        $html .= ModernLayout::endTag(['button','div']);

        $html .= ModernCard::endColumn();

        return $html;
    }

}
