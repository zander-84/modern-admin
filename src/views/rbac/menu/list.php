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
    'action' => 'menu'
]);?>
<?=$model_form->beginFieldRow()?>
<?=$model_form->fieldPrependInput($search, 'description',6);?>
<?=$model_form->submit(6);?>



<?=$model_form->endFieldRow()?>
<?php ModernActiveForm::end()?>

<?=ModernCard::endCard() ?>

<?=ModernCard::beginCard([
    'col' => 12,
    'cardClass'=> 'border-bottom-primary border-bottom-3 box-shadow-0',
    'cardHeader'=>[
        'enable' => true,
        'title' => '菜单列表',
        'actions'=>[
            'collapse' => true,
            'reload' => 'menu',
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
                'attribute' => 'description',
                'label' => '菜单名称',
                'value' => function($model){
                    $indent = substr_count($model->name,'_') >= 3 ? '---- ' : '';
                    return $indent.$model->description;
                },
                'options'=>['width'=>"20%"],
            ],


            [
                'attribute' => 'name',
                'label' => '菜单ID',
                'options'=>['width'=>"30%"],
            ],

            [
                'attribute' => 'data',
                'label' =>'子权限',
                'value' => function($model){
                    $children = \zander84\modernadmin\models\rbac\RbacAuthItem::childrenName($model->name);
                    return implode(',', $children);
                },
                'options'=>['width'=>"50%"],
            ],
        ]
])?>

<?=ModernCard::endCard() ?>
<?=ModernCard::endRow() ?>

