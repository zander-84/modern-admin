<?php
use \zander84\modernadmin\widgets\ModernCard;
use \zander84\modernadmin\widgets\form\ModernSmallForm;
use \app\models\web\models\Admin;
?>


<?=ModernCard::beginRow() ?>
<?=ModernCard::beginCard([
    'col' => 12,
    'cardClass'=> 'border-top-'.Yii::$app->params['modern_dashboard']['theme_color'].' border-top-3 border-bottom-'.Yii::$app->params['modern_dashboard']['theme_color'].' border-bottom-3 box-shadow-0 samllform',
    'cardHeader'=>[
        'enable' => true,
        'title' => 'Menu',
        'actions'=>[
            'collapse' => true,
            'reload' => 'menu',
            'expand' => true,
        ]
    ],
    //'cardText' => 'demo'
])?>
<?php $model_form = ModernSmallForm::begin([
    'options' => ['data-pjax' => true],
    'action' => Yii::$app->request->getUrl(),
    'identities' => ['id'=>'id']
]);?>


<?=$model_form->beginBody();?>
<?=$model_form->section('ft-user', '菜单编辑');?>

<?=$model_form->beginFieldRow()?>
<?=$model_form->fieldTextInput($form, 'description',12);?>
<?=$model_form->fieldTextInput($form, 'name',12);?>
<?=$model_form->fieldDropMultiDownList($form, 'children', \zander84\modernadmin\models\rbac\RbacAuthItem::childrenRule(),12);?>
<?=$model_form->endFieldRow()?>

<?=$model_form->endBody();?>
<?=$model_form->actions();?>

<?php ModernSmallForm::end()?>
<?=ModernCard::endCard() ?>
<?=ModernCard::endRow() ?>
