<?php
use \zander84\modernadmin\widgets\ModernCard;
use \zander84\modernadmin\widgets\form\ModernActiveForm;
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
    'action' => 'rule'
]);?>
<?=$model_form->beginFieldRow()?>
<?=$model_form->fieldPrependInput($search, 'description',4);?>
<?=$model_form->fieldPrependInput($search, 'name',4);?>

<?=$model_form->submit(3);?>
<?=\zander84\modernadmin\widgets\ModernButtons::checkModalButton(['id' => 'assign_ids',],[
    'id'=>'assign_ids_modal',
    'data-href'=>Yii::$app->request->getUrl(),
    'data-action'=>Yii::$app->request->action_before_modal,
    'data-ids'=>'',
    'data-target'=>'#deleteRules',
],' Delete',3);?>

<?php

$js = <<<JS
$(document).on('click','#assign_ids',function() {
    var keys = $("#grid").yiiGridView("getSelectedRows");
    var ids = keys.join(",");
    
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
        'title' => '权限列表',
        'actions'=>[
            'collapse' => true,
            'reload' => 'rule',
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
                'header' => '操作',
                'template' => '<div style="display:flex;">{edit}{delete}</div>',

                'buttons' => [
                    'edit' => function($url, $model, $key){
                        return \zander84\modernadmin\widgets\ModernButtons::edit(['id'=>$model->name]);
                    },
                    'delete' => function($url, $model, $key){
                        return \zander84\modernadmin\widgets\ModernButtons::delete(['id'=>$model->name]);
                    }

                ]
            ],
            [
                'class' => 'yii\grid\CheckboxColumn',
                'name' => 'name',
            ],
            [
                'attribute' => 'description',
                'label' => '权限名称',
                'options'=>['width'=>"50%"],
            ],
            [
                'attribute' => 'name',
                'label' => '权限路径',
                'options'=>['width'=>"50%"],
            ],
        ]
])?>

<?=ModernCard::endCard() ?>
<?=ModernCard::endRow() ?>

