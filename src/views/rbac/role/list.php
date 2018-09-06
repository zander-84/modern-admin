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
    'action' => 'role'
]);?>
<?=$model_form->beginFieldRow()?>
<?=$model_form->fieldPrependInput($search, 'name',6);?>
<?=$model_form->submit(3);?>
<?=\zander84\modernadmin\widgets\ModernButtons::checkModalButton(['id' => 'assign_role',],[
    'id'=>'assign_role_modal',
    'data-href'=>Yii::$app->request->getUrl(),
    'data-action'=>Yii::$app->request->action_before_modal,
    'data-ids'=>'',
    'data-target'=>'#deleteRoles',
],' Delete',3);?>

<?php

$js = <<<JS
$(document).on('click','#assign_role',function() {
    var keys = $("#grid").yiiGridView("getSelectedRows");
    var ids = keys.join(",");
    
    if(!ids){
        swal("请选择", "", "error");
        return false;
    }
    
    $("#assign_role_modal").attr("data-ids",ids)
    $("#assign_role_modal").click()
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
        'title' => '角色列表',
        'actions'=>[
            'collapse' => true,
            'reload' => 'role',
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

                ],
                'options'=>['width'=>"10%"],
            ],
            [
                'class' => 'yii\grid\CheckboxColumn',
                'name' => 'name',
                'options'=>['width'=>"5%"],
            ],
            [
                'attribute' => 'name',
                'label' => '角色名称',
                'options'=>['width'=>"30%"],
            ],
            [
                'attribute' => 'description',
                'label' => '描述',
                'options'=>['width'=>"20%"],
            ],

        ]
])?>

<?=ModernCard::endCard() ?>
<?=ModernCard::endRow() ?>

