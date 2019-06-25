<?php
use \zander84\modernadmin\widgets\ModernCard;
use \zander84\modernadmin\widgets\form\ModernSmallForm;
use \app\models\web\models\Admin;
?>


<?=ModernCard::beginRow() ?>
<?=ModernCard::beginCard([
    'col' => 12,
    'cardClass'=> 'border-top-'.Yii::$app->params['modern_dashboard']['theme_color'].' border-top-2 border-bottom-'.Yii::$app->params['modern_dashboard']['theme_color'].' border-bottom-2 box-shadow-0 samllform',
    'cardHeader'=>[
        'enable' => true,
        'title' => 'Role',
        'actions'=>[
            'collapse' => true,
            'reload' => 'role',
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
<?=$model_form->section('ft-user', '角色属性');?>

<?=$model_form->beginFieldRow()?>
<?=$model_form->fieldTextInput($form, 'name',12);?>
<?=$model_form->fieldTextInput($form, 'description',12);?>
<?php //echo $model_form->fieldDropMultiDownList($form, 'children', \zander84\modernadmin\models\rbac\RbacAuthItem::childrenRule(),12);?>
<?=$model_form->endFieldRow()?>

<?=$model_form->section('ft-user', '菜单选择');?>
<?=$model_form->beginFieldRow()?>
<?php
$menus = \zander84\modernadmin\models\rbac\RbacAuthItem::menu();
$auth = Yii::$app->authManager;

foreach ($menus as $k=>$menu){
    $label = $auth->getPermission($k);
    if($menu) {
        echo $model_form->fieldDropMultiDownList($form, 'children', $menu ,12,[], ['unselect' => false],  $label->description );
    }
}

?>
<?=$model_form->endFieldRow()?>

<?=$model_form->endBody();?>
<?=$model_form->actions();?>

<?php ModernSmallForm::end()?>
<?=ModernCard::endCard() ?>
<?=ModernCard::endRow() ?>
