<?php
use \zander84\modernadmin\widgets\ModernLayout;
use \zander84\modernadmin\widgets\ModernCard;
use \zander84\modernadmin\widgets\form\ModernActiveForm;
use \zander84\modernadmin\widgets\ModernPjax;
$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
        \zander84\modernadmin\assets\FormLayoutBasicAsset::class,
        \zander84\modernadmin\assets\FormCheckboxesRadiosAsset::class,
        \zander84\modernadmin\assets\FormSwitchAsset::class,
        //\zander84\modernadmin\assets\FormSelect2Asset::class,
        \zander84\modernadmin\assets\Select2Asset::class,
        \zander84\modernadmin\assets\PickersDateTimePicker2Asset::class,
        \zander84\modernadmin\assets\FormTagsInput2Asset::class,
        \zander84\modernadmin\assets\ExComponentToastrAsset::class,


    ]
]);
?>

<?php ModernPjax::begin(['id' => 'pjax']) ?>
<?php \zander84\modernadmin\widgets\ModernFlush::widget(); ?>

<?= ModernLayout::beginTag([
        ['div',['class'=>'app-content content']],
        ['div',['class'=>'content-wrapper']],
]);
?>

        <?=\zander84\modernadmin\widgets\ModernBreadcrumbs::widget([
            'currentPage' => 'Basic Forms'   ,
            'pageList' => [
                ['url' => '#', 'name'=>'Dashboard'],
                ['url' => ['/site/demo'], 'name'=>'Demo', 'active'=>true],
            ]
        ]) ?>

<?= ModernLayout::beginTag([
    ['div',['class'=>'content-body']],
    ['section',['class'=>'basic-form-layouts']],
]);
?>

<?=ModernCard::beginRow() ?>
<?=ModernCard::beginCard([
    'col' => 6,
    'cardClass'=> 'border-top-pink border-top-3 border-bottom-blue border-bottom-3 box-shadow-0',
    'cardHeader'=>[
        'enable' => true,
        'title' => 'Form test',
        'actions'=>[
            'collapse' => true,
            'reload' => '/site/demo',
            'expand' => true,
        ]
    ],
    //'cardText' => 'demo'
])?>
<?php $model_form = ModernActiveForm::begin([
    'options' => ['data-pjax' => true],
    //'options' => ['class'=>'form']
]);?>

<?=$model_form->beginBody();?>
<?=$model_form->section('ft-user', 'Personal Info');?>

<?=$model_form->beginFieldRow()?>
<?=$model_form->fieldTextInput($form, 'name',6);?>
<?=$model_form->fieldPasswordInput($form, 'password',6);?>

<?=$model_form->fieldImageInput($form, 'img_obj',12);?>
<?=$model_form->fieldIconInput($form, 'email',6,'la la-envelope');?>
<?=$model_form->fieldPrependInput($form, 'phone',6);?>
<?=$model_form->fieldTextarea($form, 'info',12);?>
<?=$model_form->fieldRadioList($form, 'is_high',[0=>'high',1=>'low'],4, false);?>
<?=$model_form->fieldCheckbox($form, 'is_married',4,'a');?>
<?=$model_form->fieldSwitch($form, 'is_single',4);?>
<?=$model_form->fieldDropDownList($form, 'sex',[0=>'man',1=>'woman'],12);?>
<?=$model_form->fieldDropMultiDownList($form, 'hobby',[0=>'篮球',1=>'足球',2=>'乒乓球'],12);?>
<?=$model_form->fieldTagsInput($form, 'foods',12);?>
<?=$model_form->fieldTimeInput($form, 'waking_time',6,['isRange'=>true,'current'=>'start','start'=>'waking_time', 'end'=>'rest_time']);?>
<?=$model_form->fieldTimeInput($form, 'rest_time',6,['isRange'=>true,'current'=>'end','start'=>'waking_time', 'end'=>'rest_time']);?>
<?=$model_form->fieldTimeInput($form, 'today',12);?>

<?=$model_form->endFieldRow()?>


<?=$model_form->endBody();?>
<?=$model_form->actions();?>

<?php ModernActiveForm::end()?>
<?=ModernCard::endCard() ?>
<?=ModernCard::endRow() ?>


<?= ModernLayout::endTag(['section', 'div'])?>
<?= ModernLayout::endTag(['div', 'div'])?>
<?php ModernPjax::end() ?>

