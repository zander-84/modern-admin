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


    <?php if(isset($this->blocks['is_full_page'])): ?>
    <?php if(isset($this->blocks['full_img'])): ?>
        <?php $full_img = 'bg-full-screen-image' ?>
    <?php else:?>
        <?php $full_img = '' ?>
    <?php endif; ?>
    <body class="vertical-layout vertical-menu-modern 1-column <?=$full_img?>    menu-expanded blank-page blank-page"
          data-open="click" data-menu="vertical-menu-modern" data-col="1-column">

    <?php else:?>
    <body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
          data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    <?php endif; ?>

    <?php $this->beginBody() ?>
    <?php if(!isset($this->blocks['is_full_page'])): ?>
        <!-- fixed-top-->
        <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top  navbar-shadow <?=$modern_dashboard['style']['nav_dark_light']?> <?=$modern_dashboard['style']['nav_lighten']?>  <?=$modern_dashboard['style']['nav_right']?>">
            <div class="navbar-wrapper">
                <div class="navbar-header <?=$modern_dashboard['style']['nav_left']?>">
                    <ul class="nav navbar-nav flex-row">
                        <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="dashboard-sales.html#"><i class="ft-menu font-large-1"></i></a></li>
                        <li class="nav-item mr-auto">
                            <a class="navbar-brand" href="index.html">
                                <img class="brand-logo" alt="modern admin logo" src="<?= $baseUrl; ?>/app-assets/images/logo/logo.png">
                                <h3 class="brand-text"><?=$modern_dashboard['brand'] ?></h3>
                            </a>
                        </li>
                        <li class="nav-item d-md-none">
                            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-container content">
                    <div class="collapse navbar-collapse" id="navbar-mobile">
                        <ul class="nav navbar-nav mr-auto float-left">
                        </ul>
                        <ul class="nav navbar-nav float-right">
                            <li class="dropdown dropdown-user nav-item">
                                <a class="dropdown-toggle nav-link dropdown-user-link" href="dashboard-sales.html#" data-toggle="dropdown">
                <span class="mr-1">Hello,
                  <span class="user-name text-bold-700">John Doe</span>
                </span>
                                    <span class="avatar avatar-online">
                  <img src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="dashboard-sales.html#"><i class="ft-user"></i> Edit Profile</a>
                                    <a class="dropdown-item" href="dashboard-sales.html#"><i class="ft-mail"></i> My Inbox</a>
                                    <a class="dropdown-item" href="dashboard-sales.html#"><i class="ft-check-square"></i> Task</a>
                                    <a class="dropdown-item" href="dashboard-sales.html#"><i class="ft-message-square"></i> Chats</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="dashboard-sales.html#"><i class="ft-power"></i> Logout</a>
                                </div>
                            </li>

                            <li class="dropdown dropdown-notification nav-item">
                                <a class="nav-link nav-link-label" href="dashboard-sales.html#" data-toggle="dropdown"><i class="ficon ft-bell"></i>
                                    <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">5</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                    <li class="dropdown-menu-header">
                                        <h6 class="dropdown-header m-0">
                                            <span class="grey darken-2">Notifications</span>
                                        </h6>
                                        <span class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span>
                                    </li>
                                    <li class="scrollable-container media-list w-100">
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">You have new order!</h6>
                                                    <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading red darken-1">99% Server load</h6>
                                                    <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                                    <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Complete the task</h6>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Generate monthly report</h6>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
                                </ul>
                            </li>
                            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- ////////////////////////////////////////////////////////////////////////////-->

        <div class="main-menu menu-fixed  menu-accordion menu-shadow <?=$modern_dashboard['style']['meun_dark_light'] ?> <?=$modern_dashboard['style']['menu_bordered'] ?>" data-scroll-to-active="true">
            <div class="main-menu-content">
                <?php
                echo \zander84\modernadmin\widgets\ModernMenu::widget([
                    'items' => [
                        ['label' => 'Dashboard', 'icon' => 'la la-home',
                            'items'=>[
                                ['label' => 'demo','url' => ['/site/add']],
                            ],
                        ],
                    ],
                ]);
                ?>
            </div>
        </div>
    <?php endif; ?>


    <div class="app-content content">
        <div class="content-wrapper">
            <?= $content ?>
        </div>
    </div>

    
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <?php if(!isset($this->blocks['is_full_page'])): ?>
        <footer class="footer footer-static footer-light navbar-border navbar-shadow">
            <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
                                                                                     target="_blank">PIXINVENT </a>, All rights reserved. </span>
                <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
            </p>
        </footer>
    <?php endif; ?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>