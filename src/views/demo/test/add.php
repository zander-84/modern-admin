<?php
use \zander84\modernadmin\widgets\ModernLayout;
use \zander84\modernadmin\widgets\ModernCard;
use \zander84\modernadmin\widgets\form\ModernSmallForm;
use \zander84\modernadmin\widgets\ModernPjax;
?>


<?=ModernCard::beginRow() ?>
<?=ModernCard::beginCard([
    'col' => 12,
    'cardClass'=> 'border-top-pink border-top-3 border-bottom-blue border-bottom-3 box-shadow-0',
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
<?php $model_form = ModernSmallForm::begin([
    'options' => ['data-pjax' => true],
    'action' => Yii::$app->request->getUrl(),
    'identities' => ['id'=>'id']
]);?>


<?=$model_form->beginBody();?>
<?=$model_form->section('ft-user', 'Personal Info');?>

<?=$model_form->beginFieldRow()?>
<?=$model_form->fieldTextInput($form, 'name',12);?>
<?=$model_form->fieldPasswordInput($form, 'password',12);?>

<?=$model_form->fieldImageInput($form, 'img_obj',12);?>
<?=$model_form->fieldIconInput($form, 'email',12,'la la-envelope');?>
<?=$model_form->fieldPrependInput($form, 'phone',12);?>
<?=$model_form->fieldTextarea($form, 'info',12);?>
<?=$model_form->fieldRadioList($form, 'is_high',[0=>'high',1=>'low'],4, false);?>
<?=$model_form->fieldCheckbox($form, 'is_married',12,'a');?>
<?=$model_form->fieldSwitch($form, 'is_single',12);?>
<?=$model_form->fieldDropDownList($form, 'sex',[0=>'man',1=>'woman'],12);?>
<?=$model_form->fieldDropMultiDownList($form, 'hobby',[0=>'篮球',1=>'足球',2=>'乒乓球'],12);?>
<?php echo $model_form->fieldTagsInput($form, 'foods',12);?>
<?=$model_form->fieldTimeInput($form, 'waking_time',12,['isRange'=>true,'current'=>'start','start'=>'waking_time', 'end'=>'rest_time']);?>
<?=$model_form->fieldTimeInput($form, 'rest_time',12,['isRange'=>true,'current'=>'end','start'=>'waking_time', 'end'=>'rest_time']);?>
<?=$model_form->fieldTimeInput($form, 'today',12);?>
<?=$model_form->endFieldRow()?>
<?=$model_form->endBody();?>
<?=$model_form->actions();?>

<?php ModernSmallForm::end()?>
<?=ModernCard::endCard() ?>
<?=ModernCard::endRow() ?>