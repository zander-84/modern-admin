<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\NavbarLightAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Navbar Light</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="navbar-light.html#">Navbars</a>
</li>
<li class="breadcrumb-item active">Navbar Light
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="navbar-light.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="navbar-light.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="navbar-light.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="navbar-light.html#"><i class="la la-cog"></i> Settings</a>
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
<p>Light color navbar with custom light color options. If you want to
                  create a light color navbar use the following customization options.</p>
</div>
<div class="alert bg-success alert-icon-left mb-2" role="alert">
<span class="alert-icon"><i class="la la-pencil-square"></i></span>
<strong>Experience it!</strong>
<p>This page contain navbar light color options option example, check
                  the top navbar.</p>
</div>
</div>
</div>
</section>
<!--/ Description -->
<!-- Example -->
<section class="card" id="example">
<div class="card-header">
<h4 class="card-title">Examples</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
<p>Classic white</p>
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
<li class="nav-item d-md-none float-right"><a class="nav-link open-navbar-container" data-target="#navbar-mobile10" data-toggle="collapse"><i class="la la-ellipsis-h pe-2x icon-rotate-right"></i></a></li>
</ul>
</div>
<div class="navbar-container content">
<div class="collapse navbar-collapse" id="navbar-mobile10">
<ul class="nav navbar-nav mr-auto">
<li class="nav-item"><a class="nav-link active" href="navbar-light.html#">Active</a></li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="navbar-light.html#" role="button">Dropdown</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="navbar-light.html#">Action</a>
<a class="dropdown-item" href="navbar-light.html#">Another action</a>
<a class="dropdown-item" href="navbar-light.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="navbar-light.html#">Separated link</a>
</div>
</li>
<li class="nav-item"><a class="nav-link disabled" href="navbar-light.html#">Disabled</a></li>
</ul>
<ul class="nav navbar-nav float-right">
<li class="dropdown dropdown-language nav-item">
<a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle nav-link" data-toggle="dropdown" href="navbar-light.html#" id="dropdown-flag10"><i class="flag-icon flag-icon-gb"></i>
<span class="selected-language">English</span><i class="caret"></i></a>
<div aria-labelledby="dropdown-flag10" class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="navbar-light.html#"><i class="flag-icon flag-icon-gb"></i> English</a>
<a class="dropdown-item" href="navbar-light.html#"><i class="flag-icon flag-icon-es"></i> Spanish</a>
<a class="dropdown-item" href="navbar-light.html#"><i class="flag-icon flag-icon-pt"></i> Portuguese</a>
<a class="dropdown-item" href="navbar-light.html#"><i class="flag-icon flag-icon-fr"></i> French</a>
</div>
</li>
<li class="dropdown dropdown-user nav-item">
<a class="dropdown-toggle nav-link dropdown-user-link" data-toggle="dropdown" href="navbar-light.html#">
<span class="avatar avatar-online">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png"/><i></i></span>
<h6 class="user-name"> John Doe</h6><i class="caret"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="navbar-light.html#"><i class="ft-user"></i> Edit Profile</a>
<a class="dropdown-item" href="navbar-light.html#"><i class="ft-mail"></i> My Inbox</a>
<a class="dropdown-item" href="navbar-light.html#">
<i class="ft-check-square"></i> Task</a>
<a class="dropdown-item" href="navbar-light.html#"><i class="ft-message-square"></i> Calender</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="navbar-light.html#"><i class="ft-power"></i> Logout</a>
</div>
</li>
</ul>
</div>
</div>
</div>
</nav>
<h5 class="mt-3">Custom light colors</h5>
<p class="mt-2">Light amber</p>
<nav class="header-navbar navbar-expand-sm navbar navbar-with-menu navbar-light navbar-shadow bg-amber bg-lighten-5 border-amber border-lighten-4">
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
<a class="nav-link open-navbar-container" data-target="#navbar-mobile2" data-toggle="collapse"><i class="la la-ellipsis-h pe-2x icon-rotate-right"></i></a>
</li>
</ul>
</div>
<div class="navbar-container content">
<div class="collapse navbar-collapse" id="navbar-mobile2">
<ul class="nav navbar-nav mr-auto">
<li class="nav-item"><a class="nav-link active" href="navbar-light.html#">Active</a></li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="navbar-light.html#" role="button">Dropdown</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="navbar-light.html#">Action</a>
<a class="dropdown-item" href="navbar-light.html#">Another action</a>
<a class="dropdown-item" href="navbar-light.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="navbar-light.html#">Separated link</a>
</div>
</li>
<li class="nav-item"><a class="nav-link disabled" href="navbar-light.html#">Disabled</a></li>
</ul>
<ul class="nav navbar-nav float-right">
<li class="dropdown dropdown-language nav-item">
<a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle nav-link" data-toggle="dropdown" href="navbar-light.html#" id="dropdown-flag2"><i class="flag-icon flag-icon-gb"></i>
<span class="selected-language">English</span><i class="caret"></i></a>
<div aria-labelledby="dropdown-flag2" class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="navbar-light.html#"><i class="flag-icon flag-icon-gb"></i> English</a>
<a class="dropdown-item" href="navbar-light.html#"><i class="flag-icon flag-icon-es"></i> Spanish</a>
<a class="dropdown-item" href="navbar-light.html#"><i class="flag-icon flag-icon-pt"></i> Portuguese</a>
<a class="dropdown-item" href="navbar-light.html#"><i class="flag-icon flag-icon-fr"></i> French</a>
</div>
</li>
<li class="dropdown dropdown-user nav-item">
<a class="dropdown-toggle nav-link dropdown-user-link" data-toggle="dropdown" href="navbar-light.html#">
<span class="avatar avatar-online">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png"/><i></i></span>
<h6 class="user-name"> John Doe</h6><i class="caret"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="navbar-light.html#"><i class="ft-user"></i> Edit Profile</a>
<a class="dropdown-item" href="navbar-light.html#"><i class="ft-mail"></i> My Inbox</a>
<a class="dropdown-item" href="navbar-light.html#">
<i class="ft-check-square"></i> Task</a>
<a class="dropdown-item" href="navbar-light.html#"><i class="ft-message-square"></i> Calender</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="navbar-light.html#"><i class="ft-power"></i> Logout</a>
</div>
</li>
</ul>
</div>
</div>
</div>
</nav>
<p class="mt-2">Light blue without shadow</p>
<nav class="header-navbar navbar-expand-sm navbar navbar-with-menu navbar-light bg-blue bg-lighten-5 border-blue border-lighten-4">
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
<a class="nav-link open-navbar-container" data-target="#navbar-mobile3" data-toggle="collapse"><i class="la la-ellipsis-h pe-2x icon-rotate-right"></i></a>
</li>
</ul>
</div>
<div class="navbar-container content">
<div class="collapse navbar-collapse" id="navbar-mobile3">
<ul class="nav navbar-nav mr-auto">
<li class="nav-item"><a class="nav-link active" href="navbar-light.html#">Active</a></li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="navbar-light.html#" role="button">Dropdown</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="navbar-light.html#">Action</a>
<a class="dropdown-item" href="navbar-light.html#">Another action</a>
<a class="dropdown-item" href="navbar-light.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="navbar-light.html#">Separated link</a>
</div>
</li>
<li class="nav-item"><a class="nav-link disabled" href="navbar-light.html#">Disabled</a></li>
</ul>
<ul class="nav navbar-nav float-right">
<li class="dropdown dropdown-language nav-item">
<a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle nav-link" data-toggle="dropdown" href="navbar-light.html#" id="dropdown-flag3"><i class="flag-icon flag-icon-gb"></i>
<span class="selected-language">English</span><i class="caret"></i></a>
<div aria-labelledby="dropdown-flag3" class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="navbar-light.html#"><i class="flag-icon flag-icon-gb"></i> English</a>
<a class="dropdown-item" href="navbar-light.html#"><i class="flag-icon flag-icon-es"></i> Spanish</a>
<a class="dropdown-item" href="navbar-light.html#"><i class="flag-icon flag-icon-pt"></i> Portuguese</a>
<a class="dropdown-item" href="navbar-light.html#"><i class="flag-icon flag-icon-fr"></i> French</a>
</div>
</li>
<li class="dropdown dropdown-user nav-item">
<a class="dropdown-toggle nav-link dropdown-user-link" data-toggle="dropdown" href="navbar-light.html#">
<span class="avatar avatar-online">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png"/><i></i></span>
<h6 class="user-name"> John Doe</h6><i class="caret"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="navbar-light.html#"><i class="ft-user"></i> Edit Profile</a>
<a class="dropdown-item" href="navbar-light.html#"><i class="ft-mail"></i> My Inbox</a>
<a class="dropdown-item" href="navbar-light.html#">
<i class="ft-check-square"></i> Task</a>
<a class="dropdown-item" href="navbar-light.html#"><i class="ft-message-square"></i> Calender</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="navbar-light.html#"><i class="ft-power"></i> Logout</a>
</div>
</li>
</ul>
</div>
</div>
</div>
</nav>
<p class="mt-2">Light red</p>
<nav class="header-navbar navbar-expand-sm navbar navbar-with-menu navbar-light navbar-shadow bg-red bg-lighten-5 border-red border-lighten-4">
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
<a class="nav-link open-navbar-container" data-target="#navbar-mobile4" data-toggle="collapse"><i class="la la-ellipsis-h pe-2x icon-rotate-right"></i></a>
</li>
</ul>
</div>
<div class="navbar-container content">
<div class="collapse navbar-collapse" id="navbar-mobile4">
<ul class="nav navbar-nav mr-auto">
<li class="nav-item"><a class="nav-link active" href="navbar-light.html#">Active</a></li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="navbar-light.html#" role="button">Dropdown</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="navbar-light.html#">Action</a>
<a class="dropdown-item" href="navbar-light.html#">Another action</a>
<a class="dropdown-item" href="navbar-light.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="navbar-light.html#">Separated link</a>
</div>
</li>
<li class="nav-item"><a class="nav-link disabled" href="navbar-light.html#">Disabled</a></li>
</ul>
<ul class="nav navbar-nav float-right">
<li class="dropdown dropdown-language nav-item">
<a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle nav-link" data-toggle="dropdown" href="navbar-light.html#" id="dropdown-flag4"><i class="flag-icon flag-icon-gb"></i>
<span class="selected-language">English</span><i class="caret"></i></a>
<div aria-labelledby="dropdown-flag4" class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="navbar-light.html#"><i class="flag-icon flag-icon-gb"></i> English</a>
<a class="dropdown-item" href="navbar-light.html#"><i class="flag-icon flag-icon-es"></i> Spanish</a>
<a class="dropdown-item" href="navbar-light.html#"><i class="flag-icon flag-icon-pt"></i> Portuguese</a>
<a class="dropdown-item" href="navbar-light.html#"><i class="flag-icon flag-icon-fr"></i> French</a>
</div>
</li>
<li class="dropdown dropdown-user nav-item">
<a class="dropdown-toggle nav-link dropdown-user-link" data-toggle="dropdown" href="navbar-light.html#">
<span class="avatar avatar-online">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png"/><i></i></span>
<h6 class="user-name"> John Doe</h6><i class="caret"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="navbar-light.html#"><i class="ft-user"></i> Edit Profile</a>
<a class="dropdown-item" href="navbar-light.html#"><i class="ft-mail"></i> My Inbox</a>
<a class="dropdown-item" href="navbar-light.html#">
<i class="ft-check-square"></i> Task</a>
<a class="dropdown-item" href="navbar-light.html#"><i class="ft-message-square"></i> Calender</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="navbar-light.html#"><i class="ft-power"></i> Logout</a>
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
</section>
<!--/ Description -->
<!-- CSS Classes -->
<section class="card" id="css-classes">
<div class="card-header">
<h4 class="card-title">CSS Classes</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
<p>This table contains all classes which can be used in light navbar.
                  You can combine them as per navbar light template requirements.</p>
<p>All these options can be set via following classes:</p>
<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr>
<th>Classes</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row"><code>.navbar-light</code></th>
<td>To set navbar light color you need to add <code>.navbar-light</code>                          class in navbar <code>&lt;nav&gt;</code> tag. Refer HTML
                          markup line no 2.</td>
</tr>
<tr>
<th scope="row"><code>.bg-[color]</code></th>
<td>
<p>To set the light navbar background color use <code>.bg-[color]</code>                            class where <code>[color]</code> is the value of your
                            selected color from modern color palette. So for blue
                            color background class will be <code>.bg-blue</code>.
                            Refer HTML markup line no 2. Background color class is
                            a optional if you don't it will take white background
                            default.
                          </p>
</td>
</tr>
<tr>
<th scope="row"><code>.bg-lighten-[*]</code></th>
<td>
<p>To set the selected background color lighten use <code>.bg-lighten-[*]</code>                            class where <code>[*]</code> is the value between '1-5'
                            of your selected lighten color from modern color palette.
                            So for color lighten 4 background class will be <code>.bg-lighten-4</code>.
                            Refer HTML markup line no 2. Background lighten color
                            class is a optional if you don't it will take white background
                            default.
                          </p>
<p><code>.bg-lighten-[*]</code> class will work only if you
                            have used <code>.bg-[color]</code>.</p>
</td>
</tr>
<tr>
<th scope="row"><code>.border-[color]</code></th>
<td>
<p>To set the light navbar border color use <code>.border-[color]</code>                            class where <code>[color]</code> is the value of your
                            selected color from modern color palette. So for blue
                            color border class will be <code>.bg-blue</code>. Refer
                            HTML markup line no 2. Border color class is a optional.</p>
</td>
</tr>
<tr>
<th scope="row"><code>.border-lighten-[color]</code></th>
<td>
<p>To set the selected border color lighten use <code>.border-lighten-[*]</code>                            class where <code>[*]</code> is the value between '1-5'
                            of your selected lighten color from modern color palette.
                            So for color lighten 4 border class will be <code>.border-lighten-4</code>.
                            Refer HTML markup line no 2. Border lighten color class
                            is a optional.</p>
<p><code>.border-lighten-[*]</code> class will work only if
                            you have used <code>.border-[color]</code>.</p>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</section>
<!--/ CSS Classes -->
<!-- HTML Markup -->
<section class="card" id="html-markup">
<div class="card-header">
<h4 class="card-title">HTML Markup</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
<p>This section contains HTML Markup to create light navbar. This markup
                  define where to add css classes to make navbar light.</p>
<ul>
<li>
<span class="text-bold-600">Line no 1:</span> Contain the <code>.navbar-light</code> class
                    for adjusting navbar color light. It has also <code>.bg-blue</code>                    &amp; <code>bg-lighten-5</code> to set lighten background color and
                    <code>border-blue</code> &amp; <code>border-lighten-4</code> to set
                    lighten border.</li>
</ul>
<pre class="language-markup" data-line="2">
          <code class="language-markup">
                &lt;!-- fixed-top--&gt;
                &lt;nav  class="header-navbar navbar-expand-sm navbar navbar-with-menu navbar-light bg-blue bg-lighten-5 border-blue border-lighten-4"&gt;
                    &lt;div class="navbar-wrapper"&gt;
                        &lt;div class="navbar-header"&gt;
                            &lt;ul class="nav navbar-nav mr-auto"&gt;
                                &lt;li class="nav-item mobile-menu d-md-none float-left"&gt;
                                    &lt;button class="nav-link menu-toggle hamburger hamburger--arrow js-hamburger is-active"&gt;&lt;span class="hamburger-box"&gt;&lt;/span&gt;&lt;span class="hamburger-inner"&gt;&lt;/span&gt;&lt;/button&gt;
                                &lt;/li&gt;
                                &lt;li class="nav-item"&gt;
                                    &lt;a href="index.html" class="navbar-brand nav-link"&gt;&lt;img src="<?=$baseUrl;?>/app-assets/images/logo/logo-dark.png"&gt;&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li class="nav-item d-md-none float-right"&gt;&lt;a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container collapsed" aria-expanded="false"&gt;&lt;i class="la la-ellipsis-h pe-2x icon-rotate-right"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                        &lt;div class="navbar-container content"&gt;
                            &lt;div id="navbar-mobile" class="collapse navbar-collapse"&gt;
                                &lt;ul class="nav navbar-nav mr-auto"&gt;
                                    &lt;li class="nav-item"&gt;&lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;&lt;/li&gt;                                    
                                &lt;/ul&gt;
                                &lt;ul class="nav navbar-nav float-right"&gt;
                                    &lt;li class="nav-item"&gt;&lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/nav&gt;
                &lt;!--/ fixed-top--&gt;
          </code>
          </pre>
</div>
</div>
</div>
</section>
<!--/ HTML Markup -->
<!-- PUG Code -->
<section class="card" id="pug-code">
<div class="card-header">
<h4 class="card-title">PUG Configuration</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
<p>Modern Admin use PUG as template engine to generate pages and whole
                  template quickly using node js, for getting start with PUG usage
                  &amp; template generating process please refer template documentation.</p>
<h5 class="card-title mt-2">PUG Variables</h5>
<p>This table contains required PUG variables to generate light layout.</p>
<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr>
<th>Block</th>
<th>Variable</th>
<th>Datatype</th>
<th>Value</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row"><code>pageConfig</code></th>
<td><code>logoType</code></td>
<td><code>string</code></td>
<td><code>'dark'</code></td>
<td><code>pageConfig</code> block has a <code>logoType</code>                          variable, it contains logo version specific classes in
                          that you need to add <code>'dark'</code>.</td>
</tr>
<tr>
<th scope="row"><code>navbarConfig</code></th>
<td><code>navbarColor</code></td>
<td><code>string</code></td>
<td><code>'navbar-light'</code></td>
<td><code>navbarConfig</code> block has a <code>navbarColor</code>                          variable, it contains navbar specific classes in that you
                          need to add <code>'navbar-light'</code>. It also contain
                          optional classes like <code>'bg-blue bg-lighten-5 border-blue border-lighten-4'</code>.</td>
</tr>
</tbody>
</table>
</div>
<div class="alert bg-info alert-icon-left mb-2" role="alert">
<span class="alert-icon"><i class="la la-info"></i></span>
                  Modern Admin Template <a class="white" href="../../../documentation/index.html" target="_blank"><u>documentation</u></a> has full
                  list of all blocks, datatype, variables and their description table.
                  Please review it for more configuration options.
                </div>
<h5 class="card-title mt-2">PUG Code</h5>
<p>To generate navbar light page or template, you need to use following
                  PUG code.</p>
<ul>
<li>
<span class="text-bold-600">Line no 21-22:</span> Set logo version dark class to <code>logoType</code>                    variable value as <code>'dark'</code> in <code>pageConfig</code>                    block as navbar color is light.</li>
<li>
<span class="text-bold-600">Line no 23-24:</span> You need set navbar light class to <code>navbarColor</code>                    variable value as <code>'navbar-light'</code> in <code>navbarConfig</code>                    block, it contains navbar color specific classes. It can also
                    contain optional classes like <code>'bg-blue bg-lighten-5 border-blue border-lighten-4'</code>                    for light color options from modern admin color palette.</li>
<li>
<span class="text-bold-600">Line no 30-31:</span> <code>content</code> block has content
                    section html file included <code>include ../contents/navbar-light.html</code>,
                    which can be customizable on page level.</li>
</ul>
<p>If you want to use this layout on page level you need to define it
                  on page it self. This template has one example pug file for light
                  navbar <code>navbar-light.pug</code>, however you can use it on
                  template level but it will generate whole template navbar light.</p>
<pre class="language-pug" data-line="20-21, 23-24, 30-31" data-line-offset="11">
                <code class="language-pug">
                    block pageVars
                        - var pageTitle    = "Navbar Light"
                        - var pageSubTitle = "Light color navbar"
                        - var description  = "The light color navbar with custom light color options &amp; other styling options."
                        - var activeMenu   = "navbar-light"
                    extends template
                    append pageConfig
                        - var logoType = 'dark'
                    append navbarConfig
                        - var navbarColor = "navbar-light"
                    append breadcrumbs
                        +breadcrumbs([{url:"index.html",name:"Home"},{url:"#",name:"Navbars"}, {name:"Navbar Light"}])
                    //- Include page content in page block
                    append content
                        include ../contents/navbar-light.html
                    //- Vendor CSS
                    //------------------------------
                    //- Add Vendor specific CSS
                    append vendorcss
                    //- Page CSS
                    //------------------------------
                    //- Add custom page specific CSS
                    append pagecss
                    //- Vendor JS
                    //------------------------------
                    //- Add vendor specific JS
                    append vendorjs
                    //- Page JS
                    //------------------------------
                    //- Add custom page specific JS
                    append pagejs
                </code>
                </pre>
</div>
</div>
</div>
</section>
<!--/ PUG Code -->
</div>
</div>
</div>