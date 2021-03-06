<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ComponentBadgesAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Badge</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="component-badges.html#">Components</a>
</li>
<li class="breadcrumb-item active">Badge
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="component-badges.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="component-badges.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="component-badges.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="component-badges.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Basic Badges start -->
<section id="basic-badges">
<div class="row match-height">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Secondary Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<p>Use the <code>.badge</code> class, followed by<code>.badge-secondary</code>class
                      within element to create secondary badge.</p>
<div class="badge badge-secondary">Secondary Badge</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Primary Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<p>Use the <code>.badge</code> class, followed by<code>.badge-primary</code>class
                      within element to create primary badge.</p>
<div class="badge badge-primary">Primary Badge</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Success Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<p>Use the <code>.badge</code> class, followed by<code>.badge-success</code>class
                      within element to create success badge.</p>
<div class="badge badge-success">Success Badge</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Danger Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<p>Use the <code>.badge</code> class, followed by<code>.badge-danger</code>class
                      within element to create danger badge.</p>
<div class="badge badge-danger">Danger Badge</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Info Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<p>Use the <code>.badge</code> class, followed by<code>.badge-info</code>class
                      within element to create info badge.</p>
<div class="badge badge-info">Info Badge</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Warning Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<p>Use the <code>.badge</code> class, followed by<code>.badge-warning</code>class
                      within element to create warning badge.</p>
<div class="badge badge-warning">Warning Badge</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Custom Blue Grey Color Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<p>Use the <code>.badge</code> class, followed by<code>.bg-blue-grey</code>class
                      within element to create blue grey badge.</p>
<div class="badge bg-blue-grey">Custom Blue Grey Color Badge</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Basic Badges end -->
<!-- Badges with Icons start -->
<section id="badges-with-icons">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Badges with Icons</h4>
</div>
</div>
<div class="row match-height">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Secondary Badge with Icon</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<p>Use the <code>.badge</code> class, followed by<code>.badge-secondary</code>class
                      within element to create secondary badge.</p>
<div class="badge badge-secondary">
<i class="la la-eye font-medium-2"></i>
<span>Secondary Badge</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Square Primary Badge with Icon</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<p>Use the <code>.badge</code> class, followed by<code>.badge-square</code>                      class for square bordered badge.</p>
<div class="badge badge-primary badge-square">
<i class="la la-envelope font-medium-2"></i>
<span>Primary Badge</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Round Success Badge with Icon</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<p>Use the <code>.badge</code> class, followed by<code>.round</code>                      class for round bordered badge.</p>
<div class="badge badge-success round">
<i class="la la-file-o font-medium-2"></i>
<span>Success Badge</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Danger Badge with Icon</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<p>Use the <code>.badge</code> class, followed by<code>.badge-danger</code>class
                      within element to create danger badge.</p>
<div class="badge badge-danger">
<span>Danger Badge</span>
<i class="la la-bell-o font-medium-2"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Square Info Badge with Icon</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<p>Use the <code>.badge</code> class, followed by<code>.badge-square</code>class
                      for square badge.</p>
<div class="badge badge-info badge-square">
<span>Info Badge</span>
<i class="la la-tv font-medium-2"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Round Warning Badge with Icon</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<p>Use the <code>.badge</code> class, followed by<code>.round</code>                      class for round bordered.</p>
<div class="badge badge-warning round">
<span>Warning Badge</span>
<i class="la la-lock font-medium-2"></i>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Badges with Icons end -->
<!-- Badges with Only Icons start -->
<section id="badges-with-only-icons">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Badges with Only Icons</h4>
</div>
</div>
<div class="row match-height">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Secondary Icon Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<p>Use the <code>.badge</code> class, followed by<code>.badge-secondary</code>class
                      within element to create secondary badge.</p>
<div class="badge badge-secondary">
<i class="font-medium-2 icon-line-height la la-camera"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Square Icon Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<p>Use the <code>.badge</code> class, followed by<code>.badge-square</code>class
                      to square bordered badge.</p>
<div class="badge badge-primary badge-square">
<i class="font-medium-2 icon-line-height la la-headphones"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Round Icon Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<p>Use the <code>.badge</code> class, followed by<code>.round</code>                      class for round warning badge.</p>
<div class="badge badge-success round">
<i class="font-medium-2 icon-line-height la la-cloud-upload"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Danger Icon Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<p>Use the <code>.badge</code> class, followed by<code>.badge-danger</code>class
                      within element to create danger badge.</p>
<div class="badge badge-danger">
<i class="font-medium-2 icon-line-height la la-eyedropper"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Square Icon Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<p>Use the <code>.badge</code> class, followed by<code>.badge-square</code>                      class to square bordered badge.</p>
<div class="badge badge-info badge-square">
<i class="font-medium-2 icon-line-height la la-star-o"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Round Icon Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<p>Use the <code>.badge</code> class, followed by<code>.round</code>                      class for round warning badge.</p>
<div class="badge badge-warning round">
<i class="font-medium-2 icon-line-height la la-youtube"></i>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Badges with Only Icons end -->
<!-- Bordered Badges start -->
<section id="bordered-badges">
<div class="row">
<div class="col-12 mt-1">
<h4>Bordered Badges</h4>
<p>Use the <code>.badge-bordered</code> with class <code>.badge</code>.
                Also use <code>.border-COLOR</code> class to add border and use <code>.COLOR</code>                for text color </p>
</div>
</div>
<div class="row match-height">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Primary Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-primary primary badge-border">Primary Badge</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Success Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-success success badge-border">Success Badge</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Danger Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-danger danger badge-border">Danger Badge</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Info Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-info info badge-border">Info Badge</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Warning Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-warning warning badge-border">Warning Badge</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Custom Color Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-red red badge-border">Custom Color Badge</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Bordered Badges end -->
<!-- Bordered Badges with Icons start -->
<section id="bordered-badges-with-icons">
<div class="row">
<div class="col-12 mt-1">
<h4>Bordered Badges with Icons</h4>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Default Primary Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-primary primary badge-border">
<i class="la la-clock-o font-medium-2"></i>
<span>Primary Badge</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Square Success Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-success success badge-square badge-border">
<i class="la la-camera font-medium-2"></i>
<span>Success Badge</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Round Danger Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-danger danger round badge-border">
<i class="la la-television font-medium-2"></i>
<span>Danger Badge</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Default Info Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-info info badge-border">
<span>Info Badge</span>
<i class="la la-heart-o font-medium-2"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Square Warning Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-warning warning badge-square badge-border">
<span>Warning Badge</span>
<i class="la la-book font-medium-2"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Round Custom Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-red red round badge-border">
<span>Custom Color Badge</span>
<i class="la la-search font-medium-2"></i>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Bordered Badges with Icons end -->
<!-- Bordered Icon Badges start -->
<section id="bordered-icon-badges">
<div class="row">
<div class="col-12 mt-1">
<h4>Bordered Icon badges</h4>
</div>
</div>
<div class="row match-height">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Default Primary Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-primary primary badge-border">
<i class="la la-envelope"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Square Success Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-success success badge-square badge-border">
<i class="la la-code"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Round Danger Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-danger danger round badge-border">
<i class="la la-gift"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Default Info Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-info info badge-border">
<i class="la la-star-o"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Square Warning Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-warning warning badge-square badge-border">
<i class="la la-eye"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Round Custom Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-red red round badge-border">
<i class="la la-smile-o"></i>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Bordered Icon Badges end -->
<!-- Striped Badges start -->
<section id="striped-badges">
<div class="row">
<div class="col-12 mt-1">
<h4>Striped Badges</h4>
<p>Use the <code>.badge-striped</code> with class <code>.badge</code>                for striped styled badges. Also use <code>.border-left-COLOR</code>                or <code>.border-right-COLOR</code> class to add border to left and
                right.
              </p>
</div>
</div>
<div class="row match-height">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Primary Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-left-primary badge-striped">Primary Badge</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Success Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-left-success badge-striped">Success Badge</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Danger Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-left-danger badge-striped">Danger Badge</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Info Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-right-info badge-striped">Info Badge</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Warning Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-right-warning badge-striped">Warning Badge</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Custom Color Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-right-red badge-striped">Custom Color Badge</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Striped Badges end -->
<!-- Striped Badges with Icons start -->
<section id="striped-badges-with-icons">
<div class="row">
<div class="col-12 mt-1">
<h4>Striped Badges With Icons</h4>
</div>
</div>
<div class="row match-height">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Primary Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-left-primary badge-striped">
<i class="la la-server font-medium-2"></i>
<span>Primary Badge</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Success Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-left-success badge-square badge-striped">
<i class="la la-search font-medium-2"></i>
<span>Success Badge</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Danger Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-left-danger border-right-danger round badge-striped">
<i class="la la-folder font-medium-2"></i>
<span>Danger Badge</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Info Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-right-info badge-striped">
<span>Info Badge</span>
<i class="la la-umbrella font-medium-2"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Warning Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-right-warning badge-square badge-striped">
<span>Warning Badge</span>
<i class="la la-map-marker font-medium-2"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Custom Color Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-right-red border-left-red round badge-striped">
<span>Custom Color Badge</span>
<i class="la la-user font-medium-2"></i>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Striped Badges with Icons end -->
<!-- Striped Icon Badges start -->
<section id="striped-icon-badges">
<div class="row">
<div class="col-12 mt-1">
<h4>Bordered Icon badges</h4>
</div>
</div>
<div class="row match-height">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Default Primary Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-left-primary badge-striped">
<i class="la la-envelope font-medium-2"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Square Success Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-left-success badge-square badge-striped">
<i class="la la-code font-medium-2"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Round Danger Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-left-danger border-right-danger round badge-striped">
<i class="la la-gift font-medium-2"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Default Info Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-right-info badge-striped">
<i class="la la-star-o font-medium-2"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Square Warning Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-right-warning badge-square badge-striped">
<i class="la la-eye font-medium-2"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Round Custom Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge border-right-red border-left-red round badge-striped">
<i class="la la-smile-o font-medium-2"></i>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Striped Icon Badges end -->
<!-- Badges With Links start -->
<section id="badges-with-links">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Badges With Links</h4>
</div>
</div>
<div class="row match-height">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Secondary Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge badge-secondary">
<a href="component-badges.html#">Link Badge</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Primary Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge badge-primary">
<a href="component-badges.html#">
<i class="la la-gift font-medium-2"></i>
<span>Link Badge</span>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Success Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge badge-success">
<a href="component-badges.html#"><i class="la la-star-o font-medium-2"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Danger Tag</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge badge-border border-danger">
<a class="danger" href="component-badges.html#">Link Tag</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Info Tag</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge badge-border border-info badge-square">
<a class="info" href="component-badges.html#">
<i class="la la-envelope font-medium-2"></i>
<span>Link Tag</span>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Warning Tag</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge badge-border border-warning round">
<a class="warning" href="component-badges.html#">
<i class="la la-briefcase font-medium-2"></i>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Custom Striped Tag</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge badge-striped border-left-blue">
<a href="component-badges.html#">Link Tag</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Custom Right Striped Tag</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge badge-striped border-right-teal badge-square">
<a href="component-badges.html#">
<i class="la la-code font-medium-2"></i>
<span>Link Tag</span>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Custom Round Tag</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge badge-striped border-left-purple border-right-purple round">
<a href="component-badges.html#">
<i class="la la-heart-o font-medium-2"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Badges With Links end -->
<!-- Badges With Dropdowns start -->
<section id="badges-with-dropdowns">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Badges With Dropdown</h4>
</div>
</div>
<div class="row match-height">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Secondary Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="btn-group">
<div class="badge badge-secondary">
<a class="dropdown-toggle" data-toggle="dropdown" href="component-badges.html#">Dropdown Badge</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-badges.html#">Action</a>
<a class="dropdown-item" href="component-badges.html#">Another action</a>
<a class="dropdown-item" href="component-badges.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-badges.html#">Separated link</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Primary Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="btn-group">
<div class="badge badge-primary">
<a class="dropdown-toggle" data-toggle="dropdown" href="component-badges.html#">
<i class="la la-gift font-medium-2"></i>
<span>Dropdown Badge</span>
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-badges.html#">Action</a>
<a class="dropdown-item" href="component-badges.html#">Another action</a>
<a class="dropdown-item" href="component-badges.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-badges.html#">Separated link</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Success Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="btn-group">
<div class="badge badge-success">
<a class="dropdown-toggle" data-toggle="dropdown" href="component-badges.html#"><i class="la la-star-o font-medium-2"></i></a>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-badges.html#">Action</a>
<a class="dropdown-item" href="component-badges.html#">Another action</a>
<a class="dropdown-item" href="component-badges.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-badges.html#">Separated link</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Danger Tag</h4>
</div>
<div class="card-body">
<div class="card-block text-center">
<div class="btn-group">
<div class="badge badge-border border-danger">
<a class="dropdown-toggle danger" data-toggle="dropdown" href="component-badges.html#">Dropdown Tag</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-badges.html#">Action</a>
<a class="dropdown-item" href="component-badges.html#">Another action</a>
<a class="dropdown-item" href="component-badges.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-badges.html#">Separated link</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Info Tag</h4>
</div>
<div class="card-body">
<div class="card-block text-center">
<div class="btn-group">
<div class="badge badge-border border-info badge-square">
<a class="dropdown-toggle info" data-toggle="dropdown" href="component-badges.html#">
<i class="la la-envelope"></i>
<span>Dropdown Tag</span>
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-badges.html#">Action</a>
<a class="dropdown-item" href="component-badges.html#">Another action</a>
<a class="dropdown-item" href="component-badges.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-badges.html#">Separated link</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Warning Tag</h4>
</div>
<div class="card-body">
<div class="card-block text-center">
<div class="btn-group">
<div class="badge badge-border border-warning round">
<a class="dropdown-toggle warning" data-toggle="dropdown" href="component-badges.html#">
<i class="la la-briefcase font-medium-2"></i>
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-badges.html#">Action</a>
<a class="dropdown-item" href="component-badges.html#">Another action</a>
<a class="dropdown-item" href="component-badges.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-badges.html#">Separated link</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Custom Striped Tag</h4>
</div>
<div class="card-body">
<div class="card-block text-center">
<div class="btn-group">
<div class="badge badge-striped border-left-blue">
<a class="dropdown-toggle" data-toggle="dropdown" href="component-badges.html#">Dropdown Tag</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-badges.html#">Action</a>
<a class="dropdown-item" href="component-badges.html#">Another action</a>
<a class="dropdown-item" href="component-badges.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-badges.html#">Separated link</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Custom Right Striped Tag</h4>
</div>
<div class="card-body">
<div class="card-block text-center">
<div class="btn-group">
<div class="badge badge-striped border-right-teal badge-square">
<a class="dropdown-toggle" data-toggle="dropdown" href="component-badges.html#">
<i class="la la-code font-medium-2"></i>
<span>Dropdown Tag</span>
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-badges.html#">Action</a>
<a class="dropdown-item" href="component-badges.html#">Another action</a>
<a class="dropdown-item" href="component-badges.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-badges.html#">Separated link</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Custom Round Tag</h4>
</div>
<div class="card-body">
<div class="card-block text-center">
<div class="btn-group">
<div class="badge badge-striped border-left-purple border-right-purple round">
<a class="dropdown-toggle" data-toggle="dropdown" href="component-badges.html#">
<i class="la la-heart-o font-medium-2"></i>
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-badges.html#">Action</a>
<a class="dropdown-item" href="component-badges.html#">Another action</a>
<a class="dropdown-item" href="component-badges.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-badges.html#">Separated link</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Badges With Dropdowns end -->
<!-- Block Badges start -->
<section id="block-badges">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Block Badges</h4>
<p>Use <code>.block</code> class with <code>.badge</code>, to set block
                badge.
              </p>
</div>
</div>
<div class="row match-height">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Secondary Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge block badge-secondary">
<a href="component-badges.html#">Link Badge</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Primary Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge block badge-primary">
<a href="component-badges.html#">
<i class="la la-gift font-medium-2"></i>
<span>Link Badge</span>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Success Badge</h4>
</div>
<div class="card-content">
<div class="card-body text-center">
<div class="badge block badge-success">
<a href="component-badges.html#"><i class="la la-star-o font-medium-2"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Danger Tag</h4>
</div>
<div class="card-body">
<div class="card-block text-center">
<div class="badge block badge-border border-danger">
<a class="danger" href="component-badges.html#">Link Tag</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Info Tag</h4>
</div>
<div class="card-body">
<div class="card-block text-center">
<div class="badge block badge-border border-info badge-square">
<a class="info" href="component-badges.html#">
<i class="la la-envelope font-medium-2"></i>
<span>Link Tag</span>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Warning Tag</h4>
</div>
<div class="card-body">
<div class="card-block text-center">
<div class="badge block badge-border border-warning round">
<a class="warning" href="component-badges.html#">
<i class="la la-briefcase font-medium-2"></i>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Custom Striped Tag</h4>
</div>
<div class="card-body">
<div class="card-block text-center">
<div class="badge block badge-striped border-left-blue">
<a href="component-badges.html#">Link Tag</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Custom Right Striped Tag</h4>
</div>
<div class="card-body">
<div class="card-block text-center">
<div class="badge block badge-striped border-right-teal badge-square">
<a href="component-badges.html#">
<i class="la la-code font-medium-2"></i>
<span>Link Tag</span>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="text-center">Custom Round Tag</h4>
</div>
<div class="card-body">
<div class="card-block text-center">
<div class="badge block badge-striped border-left-purple border-right-purple round">
<a href="component-badges.html#">
<i class="la la-heart-o font-medium-2"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Block Badges end -->
</div>
