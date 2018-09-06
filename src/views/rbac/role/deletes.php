<?php
use \zander84\modernadmin\widgets\ModernLayout;
use \zander84\modernadmin\widgets\ModernCard;
use \zander84\modernadmin\widgets\ModernPjax;
use \zander84\modernadmin\widgets\form\ModernModalForm;

?>

<?php ModernPjax::begin(['id'=>uniqid()]) ?>
<?=ModernCard::beginRow() ?>
<?=ModernCard::beginColumn() ?>

<?php $model_form = ModernModalForm::begin([
    'options' => ['data-pjax' => true],
    'action' => Yii::$app->request->getUrl(),
]);?>

<?=$model_form->fieldTextarea($del_form, 'ids',12,'角色名',[],['readonly'=>true]);?>
<?=$model_form->buttons('Delete');?>

<?php ModernModalForm::end()?>
<?=ModernCard::endColumn() ?>

<?=ModernCard::endRow() ?>
<?php ModernPjax::end() ?>

