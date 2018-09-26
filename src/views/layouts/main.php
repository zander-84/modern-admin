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
                        <h5 class="brand-text"><?=$modern_dashboard['brand'] ?></h5>
                    </a>
                </li>
                <li class="nav-item d-none d-md-block float-right"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
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
                            ['label' => 'eCommerce','url' => ['/modern/index','id' =>'dashboard-ecommerce' ]],
                            ['label' => 'Crypto','url' => ['/modern/index', 'id' => 'dashboard-crypto']],
                            ['label' => 'Sales','url' => ['/modern/index'], 'id' => 'dashboard-sales'],
                        ],
                    ],
                    ['label' => 'Page layouts', 'icon' => 'la la-columns',
                        'items' => [
                            ['label' => '1 column','url' => ['/modern/index','id'=>'layout-1-column']],
                            ['label' => 'Content Sidebar',
                                'items' => [
                                    ['label' => 'Left sidebar','url' => ['/modern/index', 'id'=>'layout-content-left-sidebar']],
                                    ['label' => 'Right sidebar','url' => ['/modern/index', 'id'=>'layout-content-right-sidebar']],
                                    ['label' => 'Right sticky sidebar','url' => ['/modern/index', 'id'=>'layout-content-right-sticky-sidebar']],
                                ]
                            ],
                            ['label' => 'Content Det. Sidebar',
                                'items' => [
                                    ['label' => 'Detached left sidebar','url' => ['/modern/index', 'id' => 'layout-content-detached-left-sidebar']],
                                    ['label' => 'Detached sticky left sidebar','url' => ['/modern/index', 'id'=>'layout-content-detached-left-sticky-sidebar']],
                                    ['label' => 'Detached right sidebar','url' => ['/modern/index', 'id'=>'layout-content-detached-right-sidebar']],
                                    ['label' => 'Detached sticky right sidebar','url' => ['/modern/index', 'id'=>'layout-content-detached-right-sticky-sidebar']],
                                ]
                            ],
                            ['label' => 'Fixed navbar', 'url' => ['/modern/index', 'id'=>'layout-fixed-navbar']],
                            ['label' => 'Fixed navigation', 'url' => ['/modern/index', 'id'=>'layout-fixed-navbar-navigation']],
                            ['label' => 'Fixed navbar &amp; footer', 'url' => ['/modern/index', 'id'=>'layout-fixed-navbar-footer']],
                            ['label' => 'Fixed layout', 'url' => ['/modern/index', 'id'=>'layout-fixed']],
                            ['label' => 'Boxed layout', 'url' => ['/modern/index', 'id'=>'layout-boxed']],
                            ['label' => 'Static layout', 'url' => ['/modern/index', 'id'=>'layout-static']],
                            ['label' => 'Light layout', 'url' => ['/modern/index', 'id'=>'layout-light']],
                            ['label' => 'Dark layout', 'url' => ['/modern/index', 'id'=>'layout-dark']],
                            ['label' => 'Semi dark layout', 'url' => ['/modern/index', 'id'=>'layout-semi-dark']],
                        ],
                    ],
                    ['label' => 'Navbars', 'icon' => 'la la-navicon',
                        'items' => [
                            ['label' => 'Navbar Light', 'url' => ['/modern/index', 'id'=>'navbar-light']],
                            ['label' => 'Navbar Dark', 'url' => ['/modern/index', 'id'=>'navbar-dark']],
                            ['label' => 'Navbar Semi Dark', 'url' => ['/modern/index','id'=>'navbar-semi-dark']],
                            ['label' => 'Fixed Top', 'url' => ['/modern/index', 'id'=>'navbar-fixed-top']],
                            ['label' => 'Hide on Scroll',
                                'items' => [
                                    ['label' => 'Hide on Scroll Top', 'url' => ['/modern/index','id'=>'navbar-hide-on-scroll-top']],
                                    ['label' => 'Hide on Scroll Bottom', 'url' => ['/modern/index', 'id'=>'navbar-hide-on-scroll-bottom']],
                                ]
                            ],
                            ['label' => 'Navbar Components', 'url' => ['/modern/index' ,'id'=>'navbar-components']],
                            ['label' => 'Navbar Styling', 'url' => ['/modern/index', 'id'=>'navbar-styling']],
                        ]
                    ],
                    ['label' => 'Page Headers', 'icon' => 'la la-header',
                        'items' => [
                            ['label' => 'Breadcrumbs basic', 'url' => ['/modern/index' ,'id'=>'headers-breadcrumbs-basic']],
                            ['label' => 'Breadcrumbs top', 'url' => ['/modern/index' ,'id'=>'headers-breadcrumbs-top']],
                            ['label' => 'Breadcrumbs bottom', 'url' => ['/modern/index' ,'id'=>'headers-breadcrumbs-bottom']],
                            ['label' => 'Breadcrumbs top with des', 'url' => ['/modern/index', 'id'=>'headers-breadcrumbs-top-with-description']],
                            ['label' => 'Breadcrumbs with button', 'url' => ['/modern/index', 'id'=>'headers-breadcrumbs-with-button']],
                            ['label' => 'Breadcrumbs with button 2', 'url' => ['/modern/index','id'=>'headers-breadcrumbs-with-round-button']],
                            ['label' => 'Breadcrumbs with buttons', 'url' => ['/modern/index', 'id'=>'headers-breadcrumbs-with-button-group']],
                            ['label' => 'Breadcrumbs with desc', 'url' => ['/modern/index', 'id'=>'headers-breadcrumbs-with-description']],
                            ['label' => 'Breadcrumbs with search', 'url' => ['/modern/index', 'id'=>'headers-breadcrumbs-with-search']],
                            ['label' => 'Breadcrumbs with stats', 'url' => ['/modern/index', 'id'=>'headers-breadcrumbs-with-stats']],
                        ]
                    ],
                    ['label' => 'Footers', 'icon' => 'la la-download',
                        'items' => [
                            ['label' => 'Footer Light', 'url' => ['/modern/index' ,'id'=>'footer-light']],
                            ['label' => 'Footer Dark', 'url' => ['/modern/index', 'id'=>'footer-dark']],
                            ['label' => 'Footer Transparent', 'url' => ['/modern/index', 'id'=>'footer-transparent']],
                            ['label' => 'Footer Fixed', 'url' => ['/modern/index','id'=>'footer-fixed']],
                            ['label' => 'Footer Components', 'url' => ['/modern/index', 'id'=>'footer-components']],
                        ]
                    ],
                    ['label' => 'Color Palette', 'icon' => 'la la-paint-brush',
                        'items' => [
                            ['label' => 'Primary palette', 'url' => ['/modern/index', 'id'=>'color-palette-primary']],
                            ['label' => 'Danger palette', 'url' => ['/modern/index', 'id'=>'color-palette-danger']],
                            ['label' => 'Success palette', 'url' => ['/modern/index', 'id'=>'color-palette-success']],
                            ['label' => 'Warning palette', 'url' => ['/modern/index', 'id'=>'color-palette-warning']],
                            ['label' => 'Info palette', 'url' => ['/modern/index', 'id'=>'color-palette-info']],
                            ['label' => 'Red palette', 'url' => ['/modern/index', 'id'=>'color-palette-red']],
                            ['label' => 'Pink palette', 'url' => ['/modern/index', 'id'=>'color-palette-pink']],
                            ['label' => 'Purple palette', 'url' => ['/modern/index', 'id'=>'color-palette-purple']],
                            ['label' => 'Blue palette', 'url' => ['/modern/index', 'id'=>'color-palette-blue']],
                            ['label' => 'Cyan palette', 'url' => ['/modern/index', 'id'=>'color-palette-cyan']],
                            ['label' => 'Teal palette', 'url' => ['/modern/index', 'id'=>'color-palette-teal']],
                            ['label' => 'Yellow palette', 'url' => ['/modern/index', 'id'=>'color-palette-yellow']],
                            ['label' => 'Amber palette', 'url' => ['/modern/index', 'id'=>'color-palette-amber']],
                            ['label' => 'Blue Grey palette', 'url' => ['/modern/index', 'id'=>'color-palette-blue-grey']],

                        ]
                    ],
                    ['label' => 'Changelog', 'icon' => 'la la-copy','url' => ['/modern/index', 'id'=>'changelog']],

                    ['label' => 'Email Application', 'icon' => 'la la-envelope','url' => ['/modern/index', 'id'=>'email-application']],
                    ['label' => 'Chat Application', 'icon' => 'la la-comments','url' => ['/modern/index', 'id'=>'chat-application']],
                    ['label' => 'Project', 'icon' => 'la la-briefcase',
                        'items' => [
                            ['label' => 'Project Summary', 'url' => ['/modern/index', 'id'=>'project-summary']],
                            ['label' => 'Project Task', 'url' => ['/modern/index', 'id'=>'project-tasks']],
                            ['label' => 'Project Bugs', 'url' => ['/modern/index','id'=>'project-bugs']],
                        ]
                    ],
                    ['label' => 'Scrumboard', 'icon' => 'la la-check-square','url' => ['/modern/index', 'id'=>'scrumboard']],
                    ['label' => 'Invoice', 'icon' => 'la la-clipboard',
                        'items' => [
                            ['label' => 'Invoice Summary', 'url' => ['/modern/index' ,'id'=>'invoice-summary']],
                            ['label' => 'Invoice Template', 'url' => ['/modern/index', 'id'=>'invoice-template']],
                            ['label' => 'Invoice List', 'url' => ['/modern/index', 'id'=>'invoice-list']],

                        ]
                    ],
                    ['label' => 'Timelines', 'icon' => 'la la-film',
                        'items' => [
                            ['label' => 'Timelines Center', 'url' => ['/modern/index', 'id'=>'timeline-center']],
                            ['label' => 'Timelines Left', 'url' => ['/modern/index', 'id'=>'timeline-left']],
                            ['label' => 'Timelines Right', 'url' => ['/modern/index', 'id'=>'timeline-right']],
                            ['label' => 'Timelines Horizontal', 'url' => ['/modern/index', 'id'=>'timeline-horizontal']],

                        ]
                    ],
                    ['label' => 'Users', 'icon' => 'la la-user',
                        'items' => [
                            ['label' => 'Users Profile', 'url' => ['/modern/index', 'id'=>'user-profile']],
                            ['label' => 'Users Cards', 'url' => ['/modern/index', 'id'=>'user-cards']],
                            ['label' => 'Users List', 'url' => ['/modern/index', 'id'=>'users-contacts']],

                        ]
                    ],
                    ['label' => 'Gallery', 'icon' => 'la la-image',
                        'items' => [
                            ['label' => 'Gallery Grid', 'url' => ['/modern/index', 'id'=>'gallery-grid']],
                            ['label' => 'Gallery Grid with Desc', 'url' => ['/modern/index', 'id'=>'gallery-grid-with-desc']],
                            ['label' => 'Masonry Gallery', 'url' => ['/modern/index', 'id'=>'gallery-masonry']],
                            ['label' => 'Masonry Gallery with Desc', 'url' => ['/modern/index', 'id'=>'gallery-grid-with-desc']],
                            ['label' => 'Hover Effects', 'url' => ['/modern/index', 'id'=>'gallery-hover-effects']],

                        ]
                    ],
                    ['label' => 'Search', 'icon' => 'la la-search',
                        'items' => [
                            ['label' => 'Search Page', 'url' => ['/modern/index', 'id'=>'search-page']],
                            ['label' => 'Search Website', 'url' => ['/modern/index', 'id'=>'search-website']],
                            ['label' => 'Search Images', 'url' => ['/modern/index', 'id'=>'search-images']],
                            ['label' => 'Search Videos', 'url' => ['/modern/index', 'id'=>'search-videos']],
                        ]
                    ],
                    ['label' => 'Authentication', 'icon' => 'la la-unlock',
                        'items' => [
                            ['label' => 'Login Simple', 'url' => ['/modern/index', 'id'=>'login-simple']],
                            ['label' => 'Login with Bg', 'url' => ['/modern/index', 'id'=>'login-with-bg']],
                            ['label' => 'Login with Image', 'url' => ['/modern/index', 'id'=>'login-with-image']],
                            ['label' => 'Login with Navbar', 'url' => ['/modern/index', 'id'=>'login-with-navbar']],
                            ['label' => 'Login Advanced', 'url' => ['/modern/index', 'id'=>'login-advanced']],
                            ['label' => 'Register Simple', 'url' => ['/modern/index' ,'id'=>'register-simple']],
                            ['label' => 'Register with Bg', 'url' => ['/modern/index', 'id'=>'register-with-bg']],
                            ['label' => 'Register with Bg Image', 'url' => ['/modern/index', 'id'=>'register-with-bg-image']],
                            ['label' => 'Register with Navbar', 'url' => ['/modern/index', 'id'=>'register-with-bg-navbar']],
                            ['label' => 'Register Advanced', 'url' => ['/modern/index', 'id'=>'register-advanced']],
                            ['label' => 'Unlock User', 'url' => ['/modern/index', 'id' =>'unlock-user']],
                            ['label' => 'Recover Password', 'url' => ['/modern/index','id'=>'recover-password']],
                        ]
                    ],
                    ['label' => 'Error', 'icon' => 'la la-warning',
                        'items' => [
                            ['label' => 'Error 400', 'url' => ['/modern/index', 'id'=>'error-400']],
                            ['label' => 'Error 400 with Navbar', 'url' => ['/modern/index', 'id'=>'error-400-with-navbar']],
                            ['label' => 'Error 401', 'url' => ['/modern/index', 'id'=>'error-401']],
                            ['label' => 'Error 401 with Navbar', 'url' => ['/modern/index', 'id'=>'error-401-with-navbar']],
                            ['label' => 'Error 403', 'url' => ['/modern/index', 'id'=>'error-403']],
                            ['label' => 'Error 403 with Navbar', 'url' => ['/modern/index','id'=>'error-403-with-navbar']],
                            ['label' => 'Error 404', 'url' => ['/modern/index', 'id'=>'error-404']],
                            ['label' => 'Error 404 with Navbar', 'url' => ['/modern/index', 'id'=>'error-404-with-navbar']],
                            ['label' => 'Error 500', 'url' => ['/modern/index', 'id'=>'error-500']],
                            ['label' => 'Error 500 with Navbar', 'url' => ['/modern/index',' id'=>'error-500-with-navbar']],
                        ]
                    ],
                    ['label' => 'Others', 'icon' => 'la la-file-text',
                        'items' => [
                            ['label' => 'Coming Soon',
                                'items' => [
                                    ['label' => 'Flat', 'url' => ['/modern/index', 'id'=>'coming-soon-flat']],
                                    ['label' => 'Bg image', 'url' => ['/modern/index' ,'id'=>'coming-soon-bg-image']],
                                    ['label' => 'Bg video', 'url' => ['/modern/index', 'id'=>'coming-soon-bg-video']],
                                ]
                            ],
                            ['label' => 'Maintenance', 'url' => ['/modern/index', 'id'=>'under-maintenance']],
                        ]
                    ],
                    ['label' => 'Cards', 'icon' => 'la la-tablet',
                        'items' => [
                            ['label' => 'Bootstrap', 'url' => ['/modern/index', 'id'=>'card-bootstrap']],
                            ['label' => 'Headings', 'url' => ['/modern/index', 'id'=>'card-headings']],
                            ['label' => 'Options', 'url' => ['/modern/index','id'=>'card-options']],
                            ['label' => 'Action', 'url' => ['/modern/index', 'id'=>'card-actions']],
                            ['label' => 'Draggable', 'url' => ['/modern/index', 'id'=>'card-draggable']],
                        ]
                    ],
                    ['label' => 'Advance Cards', 'icon' => 'la la-fire',
                        'items' => [
                            ['label' => 'Statistics', 'url' => ['/modern/index', 'id'=>'card-statistics']],
                            ['label' => 'Weather', 'url' => ['/modern/index', 'id'=>'card-weather']],
                            ['label' => 'Charts', 'url' => ['/modern/index', 'id'=>'card-charts']],
                            ['label' => 'Interactive', 'url' => ['/modern/index','id'=>'card-interactive']],
                            ['label' => 'Maps', 'url' => ['/modern/index', 'id'=>'card-maps']],
                            ['label' => 'Social', 'url' => ['/modern/index','id'=>'card-social']],
                            ['label' => 'E-Commerce', 'url' => ['/modern/index', 'id'=>'card-ecommerce']],
                        ]
                    ],
                    ['label' => 'Content', 'icon' => 'la la-compass',
                        'items' => [
                            ['label' => 'Grid', 'url' => ['/modern/index', 'id'=>'content-grid']],
                            ['label' => 'Typography', 'url' => ['/modern/index', 'id'=>'content-typography']],
                            ['label' => 'Text utilities', 'url' => ['/modern/index', 'id'=>'content-text-utilities']],
                            ['label' => 'Syntax highlighter', 'url' => ['/modern/index', 'id'=>'content-syntax-highlighter']],
                            ['label' => 'Helper classes', 'url' => ['/modern/index', 'id'=>'content-helper-classes']],
                        ]
                    ],
                    ['label' => 'Components', 'icon' => 'la la-server',
                        'items' => [
                            ['label' => 'Alerts', 'url' => ['/modern/index', 'id'=>'component-alerts']],
                            ['label' => 'Callout', 'url' => ['/modern/index' ,'id'=>'component-callout']],
                            ['label' => 'Buttons',
                                'items' => [
                                    ['label' => 'Basic Buttons', 'url' => ['/modern/index','id'=>'component-buttons-basic']],
                                    ['label' => 'Extended Buttons', 'url' => ['/modern/index', 'id'=>'component-buttons-extended']],
                                ]
                            ],
                            ['label' => 'Carousel', 'url' => ['/modern/index', 'id'=>'component-carousel']],
                            ['label' => 'Dropdowns', 'url' => ['/modern/index', 'id'=>'component-dropdowns']],
                            ['label' => 'List Group', 'url' => ['/modern/index','id'=>'component-list-group']],
                            ['label' => 'Modals', 'url' => ['/modern/index', 'id'=>'component-modals']],
                            ['label' => 'Pagination', 'url' => ['/modern/index', 'id'=>'component-pagination']],
                            ['label' => 'Navs Component', 'url' => ['/modern/index','id'=>'component-navs-component']],
                            ['label' => 'Tabs Component', 'url' => ['/modern/index', 'id'=>'component-tabs-component']],
                            ['label' => 'Pills Component', 'url' => ['/modern/index', 'id'=>'component-pills-component']],
                            ['label' => 'Tooltips', 'url' => ['/modern/index', 'id'=>'component-tooltips']],
                            ['label' => 'Popovers', 'url' => ['/modern/index', 'id'=>'component-popovers']],
                            ['label' => 'Badges', 'url' => ['/modern/index', 'id'=>'component-badges']],
                            ['label' => 'Pill Badges', 'url' => ['/modern/index', 'id'=>'component-pill-badges']],
                            ['label' => 'Progress', 'url' => ['/modern/index', 'id'=>'component-progress']],
                            ['label' => 'Media Objects', 'url' => ['/modern/index', 'id'=>'component-media-objects']],
                            ['label' => 'Scrollable', 'url' => ['/modern/index' ,'id'=>'component-scrollable']],
                            ['label' => 'Spinners', 'url' => ['/modern/index', 'id'=>'component-spinners']],
                        ]
                    ],
                    ['label' => 'Extra Components', 'icon' => 'la la-diamond',
                        'items' => [
                            ['label' => 'Sweet Alerts', 'url' => ['/modern/index', 'id'=>'ex-component-sweet-alerts']],
                            ['label' => 'Tree Views', 'url' => ['/modern/index', 'id'=>'ex-component-tree-views']],
                            ['label' => 'Toastr', 'url' => ['/modern/index', 'id'=>'ex-component-toastr']],
                            ['label' => 'Ratings', 'url' => ['/modern/index', 'id'=>'ex-component-ratings']],
                            ['label' => 'NoUI Slider', 'url' => ['/modern/index', 'id'=>'ex-component-noui-slider']],
                            ['label' => 'Date Time Dropper', 'url' => ['/modern/index','id'=>'ex-component-date-time-dropper']],
                            ['label' => 'Lists', 'url' => ['/modern/index', 'id'=>'ex-component-lists']],
                            ['label' => 'Toolbar', 'url' => ['/modern/index','id'=>'ex-component-toolbar']],
                            ['label' => 'Knob', 'url' => ['/modern/index', 'id'=>'ex-component-knob']],
                            ['label' => 'Long Press', 'url' => ['/modern/index', 'id'=>'ex-component-long-press']],
                            ['label' => 'Offline', 'url' => ['/modern/index', 'id'=>'ex-component-offline']],
                            ['label' => 'Zoom', 'url' => ['/modern/index','id'=>'ex-component-zoom']],
                        ]
                    ],
                    ['label' => 'Icons', 'icon' => 'la la-eye',
                        'items' => [
                            ['label' => 'Feather', 'url' => ['/modern/index', 'id'=>'icons-feather']],
                            ['label' => 'Line Awesome', 'url' => ['/modern/index', 'id'=>'icons-line-awesome']],
                            ['label' => 'Meteocons', 'url' => ['/modern/index','id'=>'icons-meteocons']],
                            ['label' => 'Simple Line Icons', 'url' => ['/modern/index','id'=>'icons-simple-line-icons']],
                        ]
                    ],
                    ['label' => 'Animation', 'icon' => 'la la-spinner spinner','url' => ['/modern/index', 'id'=>'animation']],
                    ['label' => 'Form Elements', 'icon' => 'la la-terminal',
                        'items' => [
                            ['label' => 'Form Inputs', 'url' => ['/modern/index','id'=>'form-inputs']],
                            ['label' => 'Input Groups', 'url' => ['/modern/index','id'=>'form-input-groups']],
                            ['label' => 'Input Grid', 'url' => ['/modern/index', 'id'=>'form-input-grid']],
                            ['label' => 'Extended Inputs', 'url' => ['/modern/index','id'=>'form-extended-inputs']],
                            ['label' => 'Checkboxes &amp; Radios', 'url' => ['/modern/index','id'=>'form-checkboxes-radios']],
                            ['label' => 'Switch', 'url' => ['/modern/index', 'id'=>'form-switch']],
                            ['label' => 'Select',
                                'items' => [
                                    ['label' => 'Select2', 'url' => ['/modern/index', 'id'=>'form-select2']],
                                    ['label' => 'Selectize', 'url' => ['/modern/index', 'id'=>'form-selectize']],
                                    ['label' => 'Selectivity', 'url' => ['/modern/index','id'=>'form-selectivity']],
                                    ['label' => 'Select Box It', 'url' => ['/modern/index','id'=>'form-select-box-it']],
                                ]
                            ],
                            ['label' => 'Dual Listbox', 'url' => ['/modern/index','id'=>'form-dual-listbox']],
                            ['label' => 'Tags Input', 'url' => ['/modern/index','id'=>'form-tags-input']],
                            ['label' => 'Validation', 'url' => ['/modern/index','id'=>'form-validation']],
                        ]
                    ],
                    ['label' => 'Form Layouts', 'icon' => 'la la-file-text',
                        'items' => [
                            ['label' => 'Basic Forms', 'url' => ['/modern/index','id'=>'form-layout-basic']],
                            ['label' => 'Horizontal Forms', 'url' => ['/modern/index', 'id'=>'form-layout-horizontal']],
                            ['label' => 'Hidden Labels', 'url' => ['/modern/index','id'=>'form-layout-hidden-labels']],
                            ['label' => 'Form Actions', 'url' => ['/modern/index','id'=>'form-layout-form-actions']],
                            ['label' => 'Row Separator', 'url' => ['/modern/index','id'=>'form-layout-row-separator']],
                            ['label' => 'Bordered', 'url' => ['/modern/index', 'id'=>'form-layout-bordered']],
                            ['label' => 'Striped Rows', 'url' => ['/modern/index', 'id'=>'form-layout-striped-rows']],
                            ['label' => 'Striped Labels', 'url' => ['/modern/index','id'=>'form-layout-striped-labels']],
                        ]
                    ],

                    ['label' => 'Form Wizard', 'icon' => 'la la-paste',
                        'items' => [
                            ['label' => 'Circle Style', 'url' => ['/modern/index','id'=>'form-wizard-circle-style']],
                            ['label' => 'Notification Style', 'url' => ['/modern/index','id'=>'form-wizard-notification-style']],
                        ]
                    ],
                    ['label' => 'Form Repeater', 'icon' => 'la la-repeat','url' => ['/modern/index', 'id'=>'form-repeater']],

                    ['label' => 'Bootstrap Tables', 'icon' => 'la la-table',
                        'items' => [
                            ['label' => 'Basic Tables', 'url' => ['/modern/index','id'=>'table-basic']],
                            ['label' => 'Basic Border', 'url' => ['/modern/index','id'=>'table-border']],
                            ['label' => 'Basic Sizing', 'url' => ['/modern/index','id'=>'table-sizing']],
                            ['label' => 'Basic Styling', 'url' => ['/modern/index','id'=>'table-styling']],
                            ['label' => 'Basic Components', 'url' => ['/modern/index','id'=>'table-components']],
                        ]
                    ],
                    ['label' => 'DataTables', 'icon' => 'la la-table',
                        'items' => [
                            ['label' => 'Basic Initialisation', 'url' => ['/modern/index','id'=>'dt-basic-initialization']],
                            ['label' => 'Advanced Initialisation', 'url' => ['/modern/index', 'id'=>'dt-advanced-initialization']],
                            ['label' => 'Styling', 'url' => ['/modern/index' ,'id'=>'dt-styling']],
                            ['label' => 'Data Sources', 'url' => ['/modern/index','id'=>'dt-data-sources']],
                            ['label' => 'API', 'url' => ['/modern/index', 'id'=>'dt-api']],
                        ]
                    ],
                    ['label' => 'DataTables Ext.', 'icon' => 'la la-th-large',
                        'items' => [
                            ['label' => 'AutoFill', 'url' => ['/modern/index', 'id'=>'dt-extensions-autofill']],
                            ['label' => 'Buttons',
                                'items' => [
                                    ['label' => 'Basic Buttons', 'url' => ['/modern/index', 'id'=>'dt-extensions-buttons-basic']],
                                    ['label' => 'HTML 5 Data Export', 'url' => ['/modern/index', 'id'=>'dt-extensions-buttons-html-5-data-export']],
                                    ['label' => 'Flash Data Export', 'url' => ['/modern/index','id'=>'dt-extensions-buttons-flash-data-export']],
                                    ['label' => 'Column Visibility', 'url' => ['/modern/index', 'id'=>'dt-extensions-buttons-column-visibility']],
                                    ['label' => 'Print', 'url' => ['/modern/index','id'=>'dt-extensions-buttons-print']],
                                    ['label' => 'API', 'url' => ['/modern/index', 'id'=>'dt-extensions-buttons-api']],
                                ]
                            ],
                            ['label' => 'Column Reorder', 'url' => ['/modern/index','id'=>'dt-extensions-column-reorder']],
                            ['label' => 'Fixed Columns', 'url' => ['/modern/index','id'=>'dt-extensions-fixed-columns']],
                            ['label' => 'Key Table', 'url' => ['/modern/index','id'=>'dt-extensions-key-table']],
                            ['label' => 'Row Reorder', 'url' => ['/modern/index','id'=>'dt-extensions-row-reorder']],
                            ['label' => 'Select', 'url' => ['/modern/index', 'id'=>'dt-extensions-select']],
                            ['label' => 'Fix Header', 'url' => ['/modern/index','id'=>'dt-extensions-fix-header']],
                            ['label' => 'Responsive', 'url' => ['/modern/index','id'=>'dt-extensions-responsive']],
                            ['label' => 'Column Visibility', 'url' => ['/modern/index','id'=>'dt-extensions-column-visibility']],
                        ]
                    ],

                    ['label' => 'Handson Table', 'icon' => 'la la-th-list',
                        'items' => [
                            ['label' => 'Appearance', 'url' => ['/modern/index','id'=>'handson-table-appearance']],
                            ['label' => 'Rows Columns', 'url' => ['/modern/index', 'id'=>'handson-table-rows-columns']],
                            ['label' => 'Rows Only', 'url' => ['/modern/index', 'id'=>'handson-table-rows-only']],
                            ['label' => 'Data Operations', 'url' => ['/modern/index', 'id'=>'handson-table-data-operations']],
                            ['label' => 'Cell Features', 'url' => ['/modern/index','id'=>'handson-table-cell-features']],
                            ['label' => 'Cell Types', 'url' => ['/modern/index','id'=>'handson-table-cell-types']],
                            ['label' => 'Integrations', 'url' => ['/modern/index', 'id'=>'handson-table-integrations']],
                            ['label' => 'Utilities', 'url' => ['/modern/index','id'=>'handson-table-utilities']],
                         ]
                    ],
                    ['label' => 'jsGrid', 'icon' => 'la la-table','url' => ['/modern/index', 'id'=>'table-jsgrid']],
                    ['label' => 'Editors', 'icon' => 'la la-edit',
                        'items' => [
                            ['label' => 'Quill', 'url' => ['/modern/index', 'id'=>'editor-quill']],
                            ['label' => 'CKEditor', 'url' => ['/modern/index','id'=>'editor-ckeditor']],
                            ['label' => 'Summernote', 'url' => ['/modern/index', 'id'=>'editor-summernote']],
                            ['label' => 'TinyMCE', 'url' => ['/modern/index','id'=>'editor-tinymce']],
                            ['label' => 'Code Editor',
                                'items' => [
                                    ['label' => 'CodeMirror', 'url' => ['/modern/index','id'=>'code-editor-codemirror']],
                                    ['label' => 'Ace', 'url' => ['/modern/index', 'id'=>'code-editor-ace']],
                                ]
                            ],
                        ]
                    ],
                    ['label' => 'Pickers', 'icon' => 'la la-calendar',
                        'items' => [
                            ['label' => 'Date &amp; Time Picker', 'url' => ['/modern/index','id'=>'pickers-date-&-time-picker']],
                            ['label' => 'Color Picker', 'url' => ['/modern/index','id'=>'pickers-color-picker']],
                        ]
                    ],
                    ['label' => 'jQuery UI', 'icon' => 'la la-code-fork',
                        'items' => [
                            ['label' => 'Interactions', 'url' => ['/modern/index','id'=>'jquery-ui-interactions']],
                            ['label' => 'Navigations', 'url' => ['/modern/index','id'=>'jquery-ui-navigations']],
                            ['label' => 'Date Pickers', 'url' => ['/modern/index','id'=>'jquery-ui-date-pickers']],
                            ['label' => 'Autocomplete', 'url' => ['/modern/index', 'id'=>'jquery-ui-autocomplete']],
                            ['label' => 'Buttons &amp; Select', 'url' => ['/modern/index','id'=>'jquery-ui-buttons-select']],
                            ['label' => 'Slider &amp; Spinner', 'url' => ['/modern/index','id'=>'jquery-ui-slider-spinner']],
                            ['label' => 'Dialog &amp; Tooltip', 'url' => ['/modern/index', 'id'=>'jquery-ui-dialog-tooltip']],
                        ]
                    ],
                    ['label' => 'Block UI', 'icon' => 'la la-terminal','url' => ['/modern/index', 'id'=>'add-on-block-ui']],
                    ['label' => 'Image Cropper', 'icon' => 'la la-crop','url' => ['/modern/index' ,'id'=>'add-on-image-cropper']],
                    ['label' => 'Drag &amp; Drop', 'icon' => 'la la-mouse-pointer','url' => ['/modern/index', 'oid'=>'add-on-image-cropper']],
                    ['label' => 'File Uploader', 'icon' => 'la la-cloud-upload',
                        'items'=>[
                            ['label' => 'Dropzone', 'icon' => 'la la-terminal','url' => ['/modern/index' ,'id'=>'file-uploader-dropzone']],
                        ]
                    ],
                    ['label' => 'Event Calendars', 'icon' => 'la la-calendar',
                        'items' => [
                            ['label' => 'Full Calendar',
                                'items' => [
                                    ['label' => 'Basic', 'icon' => 'la la-mouse-pointer','url' => ['/modern/index', 'id'=>'full-calender-basic']],
                                    ['label' => 'Events', 'icon' => 'la la-mouse-pointer','url' => ['/modern/index', 'id'=>'full-calender-events']],
                                    ['label' => 'Advance', 'icon' => 'la la-mouse-pointer','url' => ['/modern/index','id'=>'full-calender-advance']],
                                    ['label' => 'Extra', 'icon' => 'la la-mouse-pointer','url' => ['/modern/index', 'id'=>'full-calender-extra']],
                                ]
                            ],
                            ['label' => 'CLNDR', 'icon' => 'la la-mouse-pointer','url' => ['/modern/index','id'=>'calendars-clndr']],
                        ]
                    ],
                    ['label' => 'Internationalization', 'icon' => 'la la-flag-o',
                        'items' => [
                            ['label' => 'Resources','url' => ['/modern/index','id'=>'i18n-resources']],
                            ['label' => 'XHR Backend','url' => ['/modern/index','id'=>'i18n-xhr-backend']],
                            ['label' => 'Query String','url' => ['/modern/index','id'=>'i18n-query-string-lng=en']],
                            ['label' => 'On Init','url' => ['/modern/index','id'=>'i18n-on-init']],
                            ['label' => 'After Init','url' => ['/modern/index','id'=>'i18n-after-init']],
                            ['label' => 'Fallback','url' => ['/modern/index','id'=>'i18n-fallback']],
                        ]
                    ],
                    ['label' => 'google Charts', 'icon' => 'la la-bar-chart',
                        'items' => [
                            ['label' => 'Bar charts','url' => ['/modern/index','id'=>'google-bar-charts']],
                            ['label' => 'Line charts','url' => ['/modern/index','id'=>'google-line-charts']],
                            ['label' => 'Pie charts','url' => ['/modern/index','id'=>'google-pie-charts']],
                            ['label' => 'Scatter charts','url' => ['/modern/index', 'id'=>'google-scatter-charts']],
                            ['label' => 'Bubble charts','url' => ['/modern/index', 'id'=>'google-bubble-charts']],
                            ['label' => 'Other charts','url' => ['/modern/index', 'id'=>'google-other-charts']],

                        ]
                    ],
                    ['label' => 'Echarts', 'icon' => 'la la-file-photo-o',
                        'items' => [
                            ['label' => 'Line &amp; Area charts','url' => ['/modern/index','id'=>'echarts-line-area-charts']],
                            ['label' => 'Bar &amp; Column charts','url' => ['/modern/index','id'=>'echarts-bar-column-charts']],
                            ['label' => 'Pie &amp; Doughnut charts','url' => ['/modern/index','id'=>'echarts-pie-doughnut-charts']],
                            ['label' => 'Scatter charts','url' => ['/modern/index', 'id'=>'echarts-scatter-charts']],
                            ['label' => 'Radar &amp; Chord charts','url' => ['/modern/index','id'=>'echarts-radar-chord-charts']],
                            ['label' => 'Funnel &amp; Gauges charts','url' => ['/modern/index', 'id'=>'echarts-funnel-gauges-charts']],
                            ['label' => 'Combination charts','url' => ['/modern/index', 'id'=>'echarts-combination-charts']],
                            ['label' => 'Advance charts','url' => ['/modern/index','id'=>'echarts-advance-charts']],
                        ]
                    ],

                    ['label' => 'Chartjs', 'icon' => 'la la-area-chart',
                        'items' => [
                            ['label' => 'Line charts','url' => ['/modern/index', 'id'=>'chartjs-line-charts']],
                            ['label' => 'Bar charts','url' => ['/modern/index','id'=>'chartjs-bar-charts']],
                            ['label' => 'Pie &amp; Doughnut charts','url' => ['/modern/index','id'=>'chartjs-pie-doughnut-charts']],
                            ['label' => 'Scatter charts','url' => ['/modern/index','id'=>'chartjs-scatter-charts']],
                            ['label' => 'Polar &amp; Radar charts','url' => ['/modern/index', 'id'=>'chartjs-polar-radar-charts']],
                            ['label' => 'Advance charts','url' => ['/modern/index','id'=>'chartjs-advance-charts']],

                        ]
                    ],
                    ['label' => 'D3 Charts', 'icon' => 'la la-line-chart',
                        'items' => [
                            ['label' => 'Line Chart','url' => ['/modern/index','id'=>'d3-line-chart']],
                            ['label' => 'Bar Chart','url' => ['/modern/index','id'=>'d3-bar-chart']],
                            ['label' => 'Pie Chart','url' => ['/modern/index','id'=>'d3-pie-chart']],
                            ['label' => 'Circle Diagrams','url' => ['/modern/index','id'=>'d3-circle-diagrams']],
                            ['label' => 'Tree Chart','url' => ['/modern/index','id'=>'d3-tree-chart']],
                            ['label' => 'Other Charts','url' => ['/modern/index','id'=>'d3-other-charts']],
                        ]
                    ],
                    ['label' => 'C3 Charts', 'icon' => 'la la-indent',
                        'items' => [
                            ['label' => 'Line Chart','url' => ['/modern/index', 'id'=>'c3-line-chart']],
                            ['label' => 'Bar &amp; Pie Chart','url' => ['/modern/index','id'=>'c3-bar-pie-chart']],
                            ['label' => 'Axis Chart','url' => ['/modern/index','id'=>'c3-axis-chart']],
                            ['label' => 'Data Chart','url' => ['/modern/index','id'=>'c3-data-chart']],
                            ['label' => 'Grid Chart','url' => ['/modern/index','id'=>'c3-grid-chart']],
                            ['label' => 'Transform Chart','url' => ['/modern/index','id'=>'c3-transform-chart']],
                            ['label' => 'Other Charts','url' => ['/modern/index','id'=>'c3-other-charts']],
                        ]
                    ],
                    ['label' => 'Chartist', 'icon' => 'la la-pie-chart',
                        'items' => [
                            ['label' => 'Line Charts','url' => ['/modern/index','id'=>'chartist-line-charts']],
                            ['label' => 'Bar Charts','url' => ['/modern/index','id'=>'chartist-bar-charts']],
                            ['label' => 'Pie Charts','url' => ['/modern/index','id'=>'chartist-pie-charts']],
                        ]
                    ],
                    ['label' => 'Morris Charts', 'icon' => 'la la-share-alt','url' => ['/modern/index','id'=>'morris-charts']],
                    ['label' => 'Flot Charts', 'icon' => 'la la-bolt',
                        'items' => [
                            ['label' => 'Line Charts','url' => ['/modern/index','id'=>'flot-line-charts']],
                            ['label' => 'Bar Charts','url' => ['/modern/index','id'=>'flot-bar-charts']],
                            ['label' => 'Pie Charts','url' => ['/modern/index','id'=>'flot-pie-charts']],
                        ]
                    ],
                    ['label' => 'Rickshaw Charts', 'icon' => 'la la-bullseye','url' => ['/modern/index','id'=>'rickshaw-charts']],
                    ['label' => 'Maps', 'icon' => 'la la-map',
                        'items' => [
                            ['label' => 'google Maps',
                                'items' => [
                                    ['label' => 'Maps','url' => ['/modern/index','id'=>'gmaps-basic-maps']],
                                    ['label' => 'Services','url' => ['/modern/index','id'=>'gmaps-services']],
                                    ['label' => 'Overlays','url' => ['/modern/index','id'=>'gmaps-overlays']],
                                    ['label' => 'Routes','url' => ['/modern/index','id'=>'gmaps-routes']],
                                    ['label' => 'Utils','url' => ['/modern/index','id'=>'gmaps-utils']],
                                ]
                            ],
                            ['label' => 'Vector Maps',
                                'items' => [
                                    ['label' => 'jQuery Mapael',
                                        'items' => [
                                            ['label' => 'Basic Maps','url' => ['/modern/index','id'=>'vector-maps-mapael-basic']],
                                            ['label' => 'Advance Maps','url' => ['/modern/index','id'=>'vector-maps-mapael-advance']],
                                        ]
                                    ],
                                    ['label' => 'jVector Maps','url' => ['/modern/index','id'=>'vector-maps-jvector']],
                                    ['label' => 'JQV Maps','url' => ['/modern/index','id'=>'vector-maps-jvq']],
                                ]
                            ],
                        ]
                    ],
                ],
            ]);
        ?>
    </div>
</div>
<?php endif; ?>
<?= $content ?>
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