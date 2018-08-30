<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ExComponentOfflineAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Offline</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="ex-component-offline.html#">Extra Components</a>
</li>
<li class="breadcrumb-item active">Offline
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="ex-component-offline.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="ex-component-offline.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="ex-component-offline.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="ex-component-offline.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Template section start -->
<section id="theme">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4>Pick a theme</h4>
<hr/>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<div class="card-body">
<div class="row mb-3 mt-2">
<div class="offset-md-3 col-md-6 col-sm-12">
<h3 class="text-center mb-1">Default</h3>
<div class="browser">
<iframe data-theme="default"></iframe>
</div>
</div>
</div>
<div class="row mb-3">
<div class="offset-md-3 col-md-6 col-sm-12">
<h3 class="text-center mb-1">Slide</h3>
<div class="browser">
<iframe data-theme="slide"></iframe>
</div>
</div>
</div>
<div class="row mb-3">
<div class="offset-md-3 col-md-6 col-sm-12">
<h3 class="text-center mb-1">Dark</h3>
<div class="browser">
<iframe data-theme="dark"></iframe>
</div>
</div>
</div>
<div class="row mb-3">
<div class="offset-md-3 col-md-6 col-sm-12">
<h3 class="text-center mb-1">Chrome</h3>
<div class="browser">
<iframe data-theme="chrome"></iframe>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Template section end -->
<!-- Indicator themes section start -->
<section id="indicator-themes">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4>Indicator Themes</h4>
<hr/>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<div class="card-body">
<div class="row mb-3 mt-2">
<div class="offset-md-3 col-md-6 col-sm-12">
<h3 class="text-center mb-1">Default</h3>
<div class="browser">
<iframe data-theme="default-indicator"></iframe>
</div>
</div>
</div>
<div class="row mb-3">
<div class="offset-md-3 col-md-6 col-sm-12">
<h3 class="text-center mb-1">Slide</h3>
<div class="browser">
<iframe data-theme="slide-indicator"></iframe>
</div>
</div>
</div>
<div class="row mb-3">
<div class="offset-md-3 col-md-6 col-sm-12">
<h3 class="text-center mb-1">Dark</h3>
<div class="browser">
<iframe data-theme="dark-indicator"></iframe>
</div>
</div>
</div>
<div class="row mb-3">
<div class="offset-md-3 col-md-6 col-sm-12">
<h3 class="text-center mb-1">Chrome</h3>
<div class="browser">
<iframe data-theme="chrome-indicator"></iframe>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Indicator themes section end -->
<!-- Features section start -->
<section id="features">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">offline</h4>
</div>
<div class="card-body">
<div class="card-body">
<p>Improve the experience of your app when your users lose connection.</p>
<ul>
<li>Monitors ajax requests looking for failure</li>
<li>Confirms the connection status by requesting an image or fake
                        resource
                      </li>
<li>Automatically grabs ajax requests made while the connection
                        is down and remakes them after the connection is restored.</li>
<li>Simple UI with beautiful themes</li>
<li>3kb minified and compressed</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Features section end -->
</div>
</div>
</div>