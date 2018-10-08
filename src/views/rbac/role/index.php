<?php
/**
 * Created by PhpStorm.
 * User: marvin
 * Date: 2018/8/31
 * Time: 14:11
 */

use \zander84\modernadmin\widgets\ModernLayout;
use \zander84\modernadmin\widgets\ModernCard;

use \zander84\modernadmin\widgets\ModernPjax;

$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
        \zander84\modernadmin\assets\FormLayoutBasicAsset::class,
        \zander84\modernadmin\assets\FormCheckboxesRadiosAsset::class,
        \zander84\modernadmin\assets\FormSwitch2Asset::class,
        \zander84\modernadmin\assets\Select2Asset::class,
        \zander84\modernadmin\assets\PickersDateTimePicker2Asset::class,
        \zander84\modernadmin\assets\FormTagsInput2Asset::class,
        \zander84\modernadmin\assets\ExComponentToastrAsset::class,
        \zander84\modernadmin\assets\ComponentPaginationAsset::class,
        \zander84\modernadmin\assets\ExComponentSweetAlerts2Asset::class,

    ]
]);
?>
<?php ModernPjax::begin(['id' => 'pjax']) ?>
<?php \zander84\modernadmin\widgets\ModernFlush::widget(); ?>




<?=\zander84\modernadmin\widgets\ModernBreadcrumbs::widget([
    'currentPage' => '角色列表',
    'pageList' => [
        ['url' => ['rule'], 'name'=>'Rule', 'data-pjax'=>false],
        ['url' => ['menu'], 'name'=>'Menu', 'data-pjax'=>false],
        ['url' => ['role'], 'name'=>'Role', 'data-pjax'=>false, 'active'=>true],
    ]
]) ?>


<?= ModernLayout::beginTag([
    ['div',['class'=>'content-body']],
    ['section',['class'=>'basic-form-layouts']],
]);
?>

<?=ModernCard::beginRow()?>
<?=ModernCard::beginColumn(3)?>
<?=$this->render('form', ['form'=>$form]) ?>
<?=ModernCard::endColumn()?>

<?=ModernCard::beginColumn(9)?>
<?php echo $this->render('list', ['search'=>$search, 'dataProvider'=>$dataProvider]) ?>
<?=ModernCard::endColumn()?>

<?=ModernCard::endRow()?>
<?= ModernLayout::endTag(['section', 'div'])?>


<?php ModernPjax::end() ?>

<?php echo  \zander84\modernadmin\widgets\ModernModal::widget([
    'id' => 'deleteRoles',
]);?>



