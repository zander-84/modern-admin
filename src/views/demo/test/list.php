<?php
use \zander84\modernadmin\widgets\ModernLayout;
use \zander84\modernadmin\widgets\ModernCard;
use \zander84\modernadmin\widgets\form\ModernActiveForm;
use \zander84\modernadmin\widgets\ModernPjax;
?>
<?=ModernCard::beginRow() ?>
<?=ModernCard::beginCard([
    'col' => 12,
    'cardClass'=> 'border-top-pink border-top-3  box-shadow-0',
    'cardHeader'=>[
        'enable' => false,
    ],
])?>
<?php $model_form = ModernActiveForm::begin([
    'options' => ['data-pjax' => true],
    'method' => 'get',
    'action' => '/site/list'
    //'options' => ['class'=>'form']
]);?>
<?=$model_form->beginFieldRow()?>
<?=$model_form->fieldPrependInput($search, 'name',4);?>
<?=$model_form->fieldPrependInput($search, 'phone',4);?>

<?=$model_form->submit(3);?>
<?=\zander84\modernadmin\widgets\ModernButtons::checkModalButton(['id' => 'assign_ids',],[
    'id'=>'assign_ids_modal',
    'data-href'=>Yii::$app->request->getUrl(),
    'data-action'=>Yii::$app->request->action_before_modal,
    'data-ids'=>'',
    'data-target'=>'#test',
],'Delete',3);?>
<?php //echo \zander84\modernadmin\widgets\ModernButtons::modalButton([
//    'id'=>'assign_ids_modal',
//    'data-href'=>Yii::$app->request->getUrl(),
//    'data-vals'=>[Yii::$app->request->action_key=>Yii::$app->request->action_before_modal],
//    'data-target'=>'#test',
//],'Delete',3);?>


<?php

$js = <<<JS
$(document).on('click','#assign_ids',function() {
    var keys = $("#grid").yiiGridView("getSelectedRows");
    
    var ids = keys.join(",");
    console.log(ids)
    if(!ids){
        swal("请选择", "", "error");
        return false;
    }
    
    $("#assign_ids_modal").attr("data-ids",ids)
    $("#assign_ids_modal").click()
     return true;
   
})

         
JS;
$this->registerJs($js);
?>


<?=$model_form->endFieldRow()?>
<?php ModernActiveForm::end()?>

<?=ModernCard::endCard() ?>

<?=ModernCard::beginCard([
    'col' => 12,
    'cardClass'=> 'border-bottom-primary border-bottom-3 box-shadow-0',
    'cardHeader'=>[
        'enable' => true,
        'title' => 'Form test',
        'actions'=>[
            'collapse' => true,
            'reload' => '/site/list',
            'expand' => true,
        ]
    ],
    //'cardText' => 'demo'
])?>
<?=\zander84\modernadmin\widgets\ModernGridview::widget([
        'dataProvider' => $dataProvider,
        'options' => [
            'id' => 'grid'
        ],
        'columns' => [
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Operation',
                'template' => '<div style="display:flex;">{edit} {delete}</div>',

                'buttons' => [
                    'edit' => function($url, $model, $key){
                        return \zander84\modernadmin\widgets\ModernButtons::edit(['id'=>$model->id]);
                    },
                    'delete' => function($url, $model, $key){
                        return \zander84\modernadmin\widgets\ModernButtons::delete(['id'=>$model->id]);
                    }

                ]
            ],
            [
                'class' => 'yii\grid\CheckboxColumn',
                'name' => 'id',
            ],
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => 'ID',
            ],
            'name',
            'phone',
            'email',
            'info',
            'sex',
            'is_high',
            'is_married',
            'is_single',
            'hobby',
            'foods',
            'waking_time',
            'rest_time',
            'today',
        ]
])?>

<?=ModernCard::endCard() ?>
<?=ModernCard::endRow() ?>

