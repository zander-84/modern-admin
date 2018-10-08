<?php
use yii\helpers\Html;


$bundle = zander84\modernadmin\assets\ModernAsset::register($this);





$baseUrl = $bundle->baseUrl;
$modern_dashboard = Yii::$app->params['modern_dashboard'];
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title><?= Html::encode(isset($this->title) ? $this->title : '') ?></title>
    <link rel="apple-touch-icon" href="<?= $baseUrl; ?>/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= $baseUrl; ?>/app-assets/images/ico/favicon.ico">
    <link href="<?= $baseUrl; ?>/app-assets/fonts/feather/googleapis.css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700"  rel="stylesheet">
    <?php $this->head() ?>
</head>


<body >


<?php $this->beginBody() ?>
<div style="padding: 2.2rem;">
<?= $content ?>
</div>

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>

