<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ComponentNavsComponentAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Navs</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="component-navs-component.html#">Components</a>
</li>
<li class="breadcrumb-item active">Navs
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="component-navs-component.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="component-navs-component.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="component-navs-component.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="component-navs-component.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Basic Navs start -->
<section id="basic-nav-components">
<div class="row">
<div class="col-md-12 mt-1">
<p>If you are using navs to provide a navigation bar, be sure to add a
                role="navigation" to the most logical parent container of the <code>&lt;ul&gt;,</code>                or wrap a <code>&lt;nav&gt;</code> element around the whole navigation.</p>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Base nav</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav flex-column">
<li class="nav-item">
<a class="nav-link active">Active</a>
</li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
<li class="nav-item">
<a class="nav-link disabled">Disabled</a>
</li>
</ul>
<p>Roll your own navigation style by extending the base <code>.nav</code>                      component. All Bootstrap’s nav components are built on top
                      of this by specifying additional styles.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Nav with Border</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav flex-column wrap-border">
<li class="nav-item">
<a class="nav-link active">Active</a>
</li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
<li class="nav-item">
<a class="nav-link disabled">Disabled</a>
</li>
</ul>
<p>To wrap with border, use <code>.wrap-border</code> class.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Nav with Square Border</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav flex-column wrap-border square-border">
<li class="nav-item">
<a class="nav-link active">Active</a>
</li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
<li class="nav-item">
<a class="nav-link disabled">Disabled</a>
</li>
</ul>
<p>To wrap with square border, use <code>.square-border</code> class
                      with <code>.wrap-border</code> class.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Nav with Divider</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav flex-column wrap-border">
<li class="nav-item">
<a class="nav-link active">Active</a>
</li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
<li class="dropdown-divider"></li>
<li class="nav-item">
<a class="nav-link disabled">Disabled</a>
</li>
</ul>
<p>To add divider, use <code>.dropdown-divider</code> class to <code>&lt;li&gt;</code></p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Basic Navs end -->
<!-- Nav with Header Options start -->
<section id="nav-with-header-options">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Navs with header Options</h4>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Nav with Header</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav flex-column wrap-border">
<li class="nav-header">Heading Option 1</li>
<li class="nav-item">
<a class="nav-link active">Active</a>
</li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
<li class="dropdown-divider"></li>
<li class="nav-header">Heading Option 2</li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
</ul>
<p>To add header to nav, use <code>.nav-header</code> class.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Heading with Icon</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav flex-column wrap-border">
<li class="nav-header"><i class="la la-bars mr-1"></i> Heading Option 1</li>
<li class="nav-item">
<a class="nav-link active">Active</a>
</li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
<li class="dropdown-divider"></li>
<li class="nav-header"><i class="la la-bars mr-1"></i> Heading Option 2</li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
</ul>
<p>You can also add icon to the text in header section.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Heading with Right Icon</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav flex-column wrap-border">
<li class="nav-header">Heading Option 1 <i class="la la-bell-o float-right mr-1"></i></li>
<li class="nav-item">
<a class="nav-link active">Active</a>
</li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
<li class="dropdown-divider"></li>
<li class="nav-header">Heading Option 2 <i class="la la-eye mr-1 float-right"></i></li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
</ul>
<p>You can add icon to right side of the text by using <code>.float-right</code>                      class.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Heading Icon both the side</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav flex-column wrap-border">
<li class="nav-header"><i class="la la-bars mr-1"></i> Heading Option 1 <i class="la la-bell-o float-right mr-1"></i></li>
<li class="nav-item">
<a class="nav-link active">Active</a>
</li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
<li class="dropdown-divider"></li>
<li class="nav-header"><i class="la la-bars mr-1"></i> Heading Option 2 <i class="la la-eye mr-1 float-right"></i></li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
</ul>
<p>You can also add icon to both sides of the text in header section.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Nav with Header Options end -->
<!-- Links with Icons start -->
<section id="links-with-icons">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Links with Icons</h4>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Icon on left</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav flex-column wrap-border">
<li class="nav-header">Heading Option 1</li>
<li class="nav-item">
<a class="nav-link active"><i class="la la-angle-double-right"></i> Active</a>
</li>
<li class="nav-item">
<a class="nav-link"><i class="la la-angle-double-right"></i> Link</a>
</li>
<li class="nav-item">
<a class="nav-link"><i class="la la-angle-double-right"></i> Link</a>
</li>
<li class="dropdown-divider"></li>
<li class="nav-header">Heading Option 2</li>
<li class="nav-item">
<a class="nav-link"><i class="la la-angle-double-right"></i> Link</a>
</li>
</ul>
<p>Use icon name class to set icons.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Icon on Right</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav flex-column wrap-border">
<li class="nav-header">Heading Option 1</li>
<li class="nav-item">
<a class="nav-link active"><i class="la la-eye float-right"></i>Active</a>
</li>
<li class="nav-item">
<a class="nav-link"><i class="la la-eye float-right"></i>Link</a>
</li>
<li class="nav-item">
<a class="nav-link"><i class="la la-eye float-right"></i>Link</a>
</li>
<li class="dropdown-divider"></li>
<li class="nav-header">Heading Option 2 </li>
<li class="nav-item">
<a class="nav-link"><i class="la la-eye float-right"></i>Link</a>
</li>
</ul>
<p>To set icons to right use <code>.float-right</code> class.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Icon on both side of links</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav flex-column wrap-border">
<li class="nav-header">Heading Option 1</li>
<li class="nav-item">
<a class="nav-link active"><i class="la la-angle-double-right"></i><i class="la la-eye float-right"></i> Active</a>
</li>
<li class="nav-item">
<a class="nav-link"><i class="la la-angle-double-right"></i><i class="la la-eye float-right"></i> Link</a>
</li>
<li class="nav-item">
<a class="nav-link"><i class="la la-angle-double-right"></i><i class="la la-eye float-right"></i> Link</a>
</li>
<li class="dropdown-divider"></li>
<li class="nav-header">Heading Option 2 </li>
<li class="nav-item">
<a class="nav-link"><i class="la la-angle-double-right"></i><i class="la la-eye float-right"></i> Link</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">With Header and list Icons</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav flex-column wrap-border">
<li class="nav-header"> <i class="la la-disc2"></i> Heading Option 1</li>
<li class="nav-item">
<a class="nav-link active"><i class="la la-caret-right"></i><i class="la la-heart6 float-right"></i> Active</a>
</li>
<li class="nav-item">
<a class="nav-link"><i class="la la-caret-right"></i><i class="la la-heart6 float-right"></i> Link</a>
</li>
<li class="nav-item">
<a class="nav-link"><i class="la la-caret-right"></i><i class="la la-heart6 float-right"></i> Link</a>
</li>
<li class="dropdown-divider"></li>
<li class="nav-header"><i class="la la-disc2"></i> Heading Option 2 </li>
<li class="nav-item">
<a class="nav-link"><i class="la la-caret-right"></i><i class="la la-heart6 float-right"></i> Link</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Links with Icons end -->
<!-- Navs with Labels & Label pills start -->
<section id="navs-labels-pills">
<div class="row">
<div class="col-12 mt-1">
<h4>Navs with Labels &amp; Label pills</h4>
<hr/>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">With Label</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav flex-column wrap-border">
<li class="nav-header">
<span class="badge badge-default badge-success">New</span> Heading Option 1
                      </li>
<li class="nav-item">
<a class="nav-link active">Active</a>
</li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
<li class="dropdown-divider"></li>
<li class="nav-header">Heading Option 2
                        <span class="badge badge-default badge-warning float-right">beware</span>
</li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
</ul>
<p>To add label to nav, use <code>.badge.badge-COLOR</code> classes.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">With Label Pills</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav flex-column wrap-border">
<li class="nav-header">
<span class="badge badge-pill badge-default badge-danger badge-glow">5</span> Heading Option 1
                      </li>
<li class="nav-item">
<a class="nav-link active">Active</a>
</li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
<li class="dropdown-divider"></li>
<li class="nav-header">Heading Option 2
                        <span class="badge badge-pill badge-default badge-info badge-glow float-right">1</span>
</li>
<li class="nav-item">
<a class="nav-link">Link</a>
</li>
</ul>
<p>To add label pill to nav, use <code>.badge.badge-pill.badge-COLOR</code>                      classes.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">With Label for links</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav flex-column wrap-border">
<li class="nav-header">
<i class="ft-disc"></i>
<span class="badge badge-default badge-success float-right">New</span> Heading Option 1
                      </li>
<li class="nav-item">
<a class="nav-link active">Active <span class="badge badge-pill badge-default badge-danger float-right badge-glow">2</span></a>
</li>
<li class="nav-item">
<a class="nav-link">Link <span class="badge badge-pill badge-default badge-danger float-right badge-glow">1</span></a>
</li>
<li class="nav-item">
<a class="nav-link">Link <span class="badge badge-pill badge-default badge-danger float-right badge-glow">3</span></a>
</li>
<li class="dropdown-divider"></li>
<li class="nav-header"><i class="ft-disc"></i> Heading Option 2
                        <span class="badge badge-default badge-info float-right">Info</span>
</li>
<li class="nav-item">
<a class="nav-link">Link <span class="badge badge-pill badge-default badge-warning float-right badge-glow">4</span></a>
</li>
<li class="nav-item">
<a class="nav-link">Link <span class="badge badge-pill badge-default badge-warning float-right badge-glow">2</span></a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">With Label Pills for links</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav flex-column wrap-border">
<li class="nav-header">
<i class="ft-disc"></i>
<span class="float-right">Notifications
                        </span>
                        Heading Option 1
                      </li>
<li class="nav-item">
<a class="nav-link active">Active  
									<span class="badge badge-pill badge-glow badge-default badge-warning float-right">2</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link">Link 
									<span class="badge badge-default badge-info badge-pill badge-glow float-right">4</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link">Link 
									<span class="badge badge-default badge-success badge-pill badge-glow float-right">1</span>
</a>
</li>
<li class="dropdown-divider"></li>
<li class="nav-header">
<i class="ft-disc"></i> Heading Option 2
                        <span class="float-right">
                          Available
                        </span>
</li>
<li class="nav-item">
<a class="nav-link">Link
									<span class="badge badge-default badge-danger float-right">Offline</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link">Link <span class="badge badge-default badge-success float-right">Online</span></a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Navs with Labels &amp; Label pills end -->
</div>
</div>
</div>