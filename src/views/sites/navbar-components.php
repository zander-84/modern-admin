<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\NavbarComponentsAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Navbar Components</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="navbar-components.html#">Navbars</a>
</li>
<li class="breadcrumb-item active">Navbar Components
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="navbar-components.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="navbar-components.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="navbar-components.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="navbar-components.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Description -->
<section class="card" id="description">
<div class="card-header">
<h4 class="card-title">Description</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="card-text">
<p> The navbar components supports custom content such as dropdowns,
                  form inputs, tabs, icons, labels, badges &amp; pickers etc. Navbar
                  components works with different types of navbar like dark, light,
                  fixed, &amp; hide on scroll.</p>
</div>
</div>
</div>
</section>
<!--/ Description -->
<!-- Example -->
<section id="examples">
<div class="card">
<div class="card-header">
<h4 class="card-title">Examples</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body">
<div class="card-text">
<p>Examples below demonstrate some navbar components.</p>
<p class="mt-1">Mixed Components</p>
<nav class="header-navbar navbar-expand-sm navbar navbar-with-menu navbar-light navbar-shadow border-grey border-lighten-2">
<div class="navbar-wrapper">
<div class="navbar-header">
<ul class="nav navbar-nav mr-auto">
<li class="nav-item mobile-menu d-md-none float-left">
<button class="nav-link menu-toggle hamburger hamburger--arrow js-hamburger is-active">
<span class="hamburger-box"></span>
<span class="hamburger-inner"></span>
</button>
</li>
<li class="nav-item">
<a class="navbar-brand nav-link" href="index.html">
<img alt="branding logo" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/logo/logo-dark.png"/>
</a>
</li>
<li class="nav-item d-md-none float-right"><a class="nav-link open-navbar-container" data-target="#navbar-mobile1" data-toggle="collapse"><i class="la la-ellipsis-v"></i></a></li>
</ul>
</div>
<div class="navbar-container content">
<div class="collapse navbar-collapse" id="navbar-mobile1">
<ul class="nav navbar-nav mr-auto">
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="navbar-components.html#" role="button">Classic</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="navbar-components.html#">Action</a>
<a class="dropdown-item" href="navbar-components.html#">Another action</a>
<a class="dropdown-item" href="navbar-components.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="navbar-components.html#">Separated link</a>
</div>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="navbar-components.html#" role="button">Dropdown</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="navbar-components.html#">Action</a>
<a class="dropdown-item" href="navbar-components.html#">Another action</a>
<a class="dropdown-item" href="navbar-components.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="navbar-components.html#">Separated link</a>
</div>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="navbar-components.html#" role="button">Options</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="navbar-components.html#">Action</a>
<a class="dropdown-item" href="navbar-components.html#">Another action</a>
<a class="dropdown-item" href="navbar-components.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="navbar-components.html#">Separated link</a>
</div>
</li>
</ul>
<ul class="nav navbar-nav">
<li class="dropdown dropdown-user nav-item">
<a class="dropdown-toggle nav-link dropdown-user-link" data-toggle="dropdown" href="navbar-components.html#">
<span class="avatar avatar-online">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png"/><i></i></span>
<h6 class="user-name"> John Doe</h6><i class="caret"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="navbar-components.html#"><i class="ft-user"></i> Edit Profile</a>
<a class="dropdown-item" href="navbar-components.html#"><i class="ft-mail"></i> My Inbox</a>
<a class="dropdown-item" href="navbar-components.html#">
<i class="ft-check-square"></i> Task</a>
<a class="dropdown-item" href="navbar-components.html#"><i class="ft-message-square"></i> Calender</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="navbar-components.html#"><i class="ft-power"></i> Logout</a>
</div>
</li>
</ul>
</div>
</div>
</div>
</nav>
<p class="mt-1">Language Options</p>
<nav class="header-navbar navbar-expand-sm navbar navbar-with-menu navbar-light navbar-shadow border-grey border-lighten-2">
<div class="navbar-wrapper">
<div class="navbar-header">
<ul class="nav navbar-nav mr-auto">
<li class="nav-item mobile-menu d-md-none float-left">
<button class="nav-link menu-toggle hamburger hamburger--arrow js-hamburger is-active">
<span class="hamburger-box"></span>
<span class="hamburger-inner"></span>
</button>
</li>
<li class="nav-item">
<a class="navbar-brand nav-link" href="index.html">
<img alt="branding logo" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/logo/logo-dark.png"/>
</a>
</li>
<li class="nav-item d-md-none float-right"><a class="nav-link open-navbar-container" data-target="#navbar-mobile2" data-toggle="collapse"><i class="la la-ellipsis-v"></i></a></li>
</ul>
</div>
<div class="navbar-container content">
<div class="collapse navbar-collapse" id="navbar-mobile2">
<ul class="nav navbar-nav mr-auto lng-nav">
<li class="nav-item">
<a class="nav-link active" data-lng="en" href="navbar-components.html#"><i class="flag-icon flag-icon-gb"></i> English</a>
</li>
<li class="nav-item"><a class="nav-link" data-lng="es" href="navbar-components.html#"><i class="flag-icon flag-icon-es"></i> Spanish</a></li>
<li class="nav-item"><a class="nav-link" data-lng="pt" href="navbar-components.html#"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></li>
<li class="nav-item"><a class="nav-link" data-lng="fr" href="navbar-components.html#"><i class="flag-icon flag-icon-fr"></i> French</a></li>
</ul>
<ul class="nav navbar-nav lng-dropdown float-right">
<li class="dropdown dropdown-language nav-item">
<a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle nav-link" data-toggle="dropdown" href="navbar-components.html#" id="dropdown-active-item"><i class="flag-icon flag-icon-gb"></i> English<i class="caret"></i></a>
<div aria-labelledby="dropdown-flag" class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item active" data-lng="en" href="navbar-components.html#"><i class="flag-icon flag-icon-gb"></i> English</a>
<a class="dropdown-item" data-lng="es" href="navbar-components.html#"><i class="flag-icon flag-icon-es"></i> Spanish</a>
<a class="dropdown-item" data-lng="pt" href="navbar-components.html#"><i class="flag-icon flag-icon-pt"></i> Portuguese</a>
<a class="dropdown-item" data-lng="fr" href="navbar-components.html#"><i class="flag-icon flag-icon-fr"></i> French</a>
</div>
</li>
</ul>
</div>
</div>
</div>
</nav>
<p class="mt-1">Navigation with Icons</p>
<nav class="header-navbar navbar-expand-sm navbar navbar-with-menu navbar-light navbar-shadow border-grey border-lighten-2">
<div class="navbar-wrapper">
<div class="navbar-header">
<ul class="nav navbar-nav mr-auto">
<li class="nav-item mobile-menu d-md-none float-left">
<button class="nav-link menu-toggle hamburger hamburger--arrow js-hamburger is-active">
<span class="hamburger-box"></span>
<span class="hamburger-inner"></span>
</button>
</li>
<li class="nav-item">
<a class="navbar-brand nav-link" href="index.html">
<img alt="branding logo" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/logo/logo-dark.png"/>
</a>
</li>
<li class="nav-item d-md-none float-right"><a class="nav-link open-navbar-container" data-target="#navbar-mobile3" data-toggle="collapse"><i class="la la-ellipsis-v"></i></a></li>
</ul>
</div>
<div class="navbar-container content">
<div class="collapse navbar-collapse" id="navbar-mobile3">
<ul class="nav navbar-nav mr-auto">
<li class="nav-item">
<a aria-expanded="false" aria-haspopup="true" class="nav-link" href="navbar-components.html#" role="button"><i class="la la-bell-o"></i> Classic</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="navbar-components.html#" role="button"><i class="la la-plus-square-o"></i>Dropdown</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="navbar-components.html#">Action</a>
<a class="dropdown-item" href="navbar-components.html#">Another action</a>
<a class="dropdown-item" href="navbar-components.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="navbar-components.html#">Separated link</a>
</div>
</li>
<li class="nav-item">
<a aria-expanded="false" aria-haspopup="true" class="nav-link" href="navbar-components.html#" role="button"><i class="la la-sort-amount-asc"></i>Options</a>
</li>
</ul>
<ul class="nav navbar-nav">
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="navbar-components.html#" role="button"><i class="la la-cog"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="navbar-components.html#">Action</a>
<a class="dropdown-item" href="navbar-components.html#">Another action</a>
<a class="dropdown-item" href="navbar-components.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="navbar-components.html#">Separated link</a>
</div>
</li>
</ul>
</div>
</div>
</div>
</nav>
<p class="mt-1">Button Navigation</p>
<nav class="header-navbar navbar-expand-sm navbar navbar-with-menu navbar-dark navbar-shadow border-grey border-darken-2">
<div class="navbar-wrapper">
<div class="navbar-header">
<ul class="nav navbar-nav mr-auto">
<li class="nav-item mobile-menu d-md-none float-left">
<button class="nav-link menu-toggle hamburger hamburger--arrow js-hamburger is-active">
<span class="hamburger-box"></span>
<span class="hamburger-inner"></span>
</button>
</li>
<li class="nav-item">
<a class="navbar-brand nav-link" href="index.html">
<img alt="branding logo" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/logo/logo-light.png"/>
</a>
</li>
<li class="nav-item d-md-none float-right"><a class="nav-link open-navbar-container" data-target="#navbar-mobile4" data-toggle="collapse"><i class="la la-ellipsis-v"></i></a></li>
</ul>
</div>
<div class="navbar-container content">
<div class="collapse navbar-collapse" id="navbar-mobile4">
<ul class="nav navbar-nav mr-auto">
<li class="nav-item">
<button class="nav-link btn btn-success mr-1 mt-1 white" type="button">Button</button>
</li>
<li class="nav-item dropdown">
<button aria-expanded="false" aria-haspopup="true" class="nav-link btn btn-primary mr-1 mt-1 white dropdown-toggle" data-toggle="dropdown" type="button">Dropdown</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="navbar-components.html#">Action</a>
<a class="dropdown-item" href="navbar-components.html#">Another action</a>
<a class="dropdown-item" href="navbar-components.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="navbar-components.html#">Separated link</a>
</div>
</li>
<li class="nav-item">
<button aria-expanded="false" aria-haspopup="true" class="nav-link btn btn-success mr-1 mt-1 white" type="button">Options</button>
</li>
</ul>
<ul class="nav navbar-nav">
<li class="nav-item dropdown">
<button aria-expanded="false" aria-haspopup="true" class="nav-link btn btn-info mr-1 mt-1 white dropdown-toggle" data-toggle="dropdown" type="button">Settings</button>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="navbar-components.html#">Action</a>
<a class="dropdown-item" href="navbar-components.html#">Another action</a>
<a class="dropdown-item" href="navbar-components.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="navbar-components.html#">Separated link</a>
</div>
</li>
</ul>
</div>
</div>
</div>
</nav>
<p class="mt-1">Labels and badges</p>
<nav class="header-navbar navbar-expand-sm navbar navbar-with-menu navbar-dark navbar-shadow border-grey border-darken-2">
<div class="navbar-wrapper">
<div class="navbar-header">
<ul class="nav navbar-nav mr-auto">
<li class="nav-item mobile-menu d-md-none float-left">
<button class="nav-link menu-toggle hamburger hamburger--arrow js-hamburger is-active">
<span class="hamburger-box"></span>
<span class="hamburger-inner"></span>
</button>
</li>
<li class="nav-item">
<a class="navbar-brand nav-link" href="index.html">
<img alt="branding logo" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/logo/logo-light.png"/>
</a>
</li>
<li class="nav-item d-md-none float-right"><a class="nav-link open-navbar-container" data-target="#navbar-mobile5" data-toggle="collapse"><i class="la la-ellipsis-v"></i></a></li>
</ul>
</div>
<div class="navbar-container content">
<div class="collapse navbar-collapse" id="navbar-mobile5">
<ul class="nav navbar-nav mr-auto">
<li class="nav-item">
<a aria-expanded="false" aria-haspopup="true" class="nav-link" href="navbar-components.html#" role="button"><i class="la la-bell-o"></i> Classic
                                <div class="badge badge-primary">New</div>
</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="navbar-components.html#" role="button"><i class="la la-plus-square-o"></i>Dropdown <div class="badge badge-success badge-pills">tag</div></a>
<div class="dropdown-menu">
<a class="dropdown-item" href="navbar-components.html#">Action</a>
<a class="dropdown-item" href="navbar-components.html#">Another action</a>
<a class="dropdown-item" href="navbar-components.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="navbar-components.html#">Separated link</a>
</div>
</li>
<li class="nav-item">
<a aria-expanded="false" aria-haspopup="true" class="nav-link" href="navbar-components.html#" role="button"><i class="la la-sort-amount-asc"></i>Options
                                <div class="badge badge-info badge-pills badge-glow">22</div>
</a>
</li>
</ul>
<ul class="nav navbar-nav">
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="navbar-components.html#" role="button"><i class="la la-cog"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="navbar-components.html#">Action</a>
<a class="dropdown-item" href="navbar-components.html#">Another action</a>
<a class="dropdown-item" href="navbar-components.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="navbar-components.html#">Separated link</a>
</div>
</li>
</ul>
</div>
</div>
</div>
</nav>
</div>
</div>
</div>
</div>
<div class="card">
<div class="card-header">
<h4 class="card-title">Form Components</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body">
<div class="card-text">
<p>Examples below demonstrate some form components.</p>
<p class="mt-1">Basic Form</p>
<nav class="header-navbar navbar-expand-sm navbar navbar-with-menu navbar-light navbar-shadow border-grey border-lighten-2">
<div class="navbar-wrapper">
<div class="navbar-header">
<ul class="nav navbar-nav mr-auto">
<li class="nav-item mobile-menu d-md-none float-left">
<button class="nav-link menu-toggle hamburger hamburger--arrow js-hamburger is-active">
<span class="hamburger-box"></span>
<span class="hamburger-inner"></span>
</button>
</li>
<li class="nav-item">
<a class="navbar-brand nav-link" href="index.html">
<img alt="branding logo" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/logo/logo-dark.png"/>
</a>
</li>
<li class="nav-item d-md-none float-right">
<a class="nav-link open-navbar-container" data-target="#navbar-mobile6" data-toggle="collapse"><i class="la la-ellipsis-v"></i></a>
</li>
</ul>
</div>
<div class="navbar-container content">
<form class="form-inline float-left">
<label class="sr-only" for="inlineFormInput">Name</label>
<input class="form-control mt-1" id="inlineFormInput" placeholder="Jane Doe" type="text"/>
<button class="btn btn-primary mt-1" type="submit">Submit</button>
</form>
<div class="nav navbar-nav mr-auto lng-dropdown float-right mt-1">
<select class="form-control primary" id="selectColor">
<option selected="">Select options</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</div>
</div>
</div>
</nav>
<p class="mt-1">Input Groups</p>
<nav class="header-navbar navbar-expand-sm navbar navbar-with-menu navbar-light navbar-shadow border-grey border-lighten-2">
<div class="navbar-wrapper">
<div class="navbar-header">
<ul class="nav navbar-nav mr-auto">
<li class="nav-item mobile-menu d-md-none float-left">
<button class="nav-link menu-toggle hamburger hamburger--arrow js-hamburger is-active">
<span class="hamburger-box"></span>
<span class="hamburger-inner"></span>
</button>
</li>
<li class="nav-item">
<a class="navbar-brand nav-link" href="index.html">
<img alt="branding logo" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/logo/logo-dark.png"/>
</a>
</li>
<li class="nav-item d-md-none float-right">
<a class="nav-link open-navbar-container" data-target="#navbar-mobile7" data-toggle="collapse"><i class="la la-ellipsis-v"></i></a>
</li>
</ul>
</div>
<div class="navbar-container content">
<div class="form-inline float-left mt-1">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="la la-envelope-o"></i></span>
</div>
<input aria-label="Amount (to the nearest dollar)" class="form-control" placeholder="Addon On Both Side" type="text"/>
<div class="input-group-append">
<span class="input-group-text"><i class="la la-file-o"></i></span>
</div>
</div>
</div>
<div class="nav navbar-nav mr-auto lng-dropdown float-right mt-1 width-200">
<div class="input-group">
<input aria-describedby="basic-addon4" class="form-control" placeholder="Addon To Right" type="text"/>
<div class="input-group-append">
<span class="input-group-text" id="basic-addon4"><i class="la la-user"></i></span>
</div>
</div>
</div>
</div>
</div>
</nav>
<p class="mt-1">Checkboxes and Radios</p>
<nav class="header-navbar navbar-expand-sm navbar navbar-with-menu navbar-dark navbar-shadow border-grey border-darken-2">
<div class="navbar-wrapper">
<div class="navbar-header">
<ul class="nav navbar-nav mr-auto">
<li class="nav-item mobile-menu d-md-none float-left">
<button class="nav-link menu-toggle hamburger hamburger--arrow js-hamburger is-active">
<span class="hamburger-box"></span>
<span class="hamburger-inner"></span>
</button>
</li>
<li class="nav-item">
<a class="navbar-brand nav-link" href="index.html">
<img alt="branding logo" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/logo/logo-light.png"/>
</a>
</li>
<li class="nav-item d-md-none float-right">
<a class="nav-link open-navbar-container" data-target="#navbar-mobile8" data-toggle="collapse"><i class="la la-ellipsis-v"></i></a>
</li>
</ul>
</div>
<div class="navbar-container content">
<div class="nav navbar-nav mr-auto lng-dropdown float-left mt-2 white">
<div class="skin-polaris skin">
<input class="iradio_polaris" id="radio-1" name="iradio" type="radio"/>
<label for="radio-1">Manual</label>
<input checked="" class="iradio_polaris" id="radio-2" name="iradio" type="radio"/>
<label for="radio-2">Auto</label>
</div>
</div>
<div class="nav navbar-nav lng-dropdown float-right mt-2 white">
<div class="skin-polaris skin">
<input class="icheckbox_polaris" id="check-1" type="checkbox"/>
<label for="check-1">Unchecked</label>
<input checked="" class="icheckbox_polaris" id="check-2" type="checkbox"/>
<label for="check-2">Checked</label>
</div>
</div>
</div>
</div>
</nav>
</div>
</div>
</div>
</div>
</section>
<!--/ Example -->
</div>
</div>
</div>