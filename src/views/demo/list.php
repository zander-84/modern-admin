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


<?= ModernLayout::beginTag([
        ['div',['class'=>'app-content content']],
        ['div',['class'=>'content-wrapper']],
]);
?>

        <?=\zander84\modernadmin\widgets\ModernBreadcrumbs::widget([
            'currentPage' => 'Basic Forms'   ,
            'pageList' => [
                ['url' => '#', 'name'=>'Dashboard'],
                ['url' => ['/site/list'], 'name'=>'Demo', 'active'=>true],
            ]
        ]) ?>


    <?= ModernLayout::beginTag([
        ['div',['class'=>'content-body']],
        ['section',['class'=>'basic-form-layouts']],
    ]);
?>

        <?=ModernCard::beginRow()?>
            <?=ModernCard::beginColumn(4)?>
                <?=$this->render('test/add', ['form'=>$form]) ?>
            <?=ModernCard::endColumn()?>

            <?=ModernCard::beginColumn(8)?>
                    <?=$this->render('test/list', ['search'=>$search, 'dataProvider'=>$dataProvider]) ?>
            <?=ModernCard::endColumn()?>

        <?=ModernCard::endRow()?>


    <?= ModernLayout::endTag(['section', 'div'])?>
<?= ModernLayout::endTag(['div', 'div'])?>


<?php ModernPjax::end() ?>




<?= \zander84\modernadmin\widgets\ModernModal::widget([
    'id' => 'test',
]);?>

