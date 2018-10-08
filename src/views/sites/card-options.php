<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\CardOptionsAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Card Options</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="card-options.html#">Components</a>
</li>
<li class="breadcrumb-item active">Bootstrap Cards
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="card-options.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="card-options.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="card-options.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="card-options.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Card header options section start -->
<section id="card-header-options">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Card Header Options</h4>
<p>Card header options include basic card header, with controls, with
                inline and block sub titles.</p>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Card Title</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Basic card without any heading elements and border.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Card Header Controls</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p>Basic card with heading elements.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Card Title
                    <small>with inline subtitle</small>
</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p>Basic card with inline subtitle. Use <code>small</code> tag for
                      subtitle.
                    </p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Card Title
                    <small class="block">with block subtitle</small>
</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p>Basic card with block subtitle. Use <code>small</code> tag with
                      <code>block</code> class for block subtitle.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Card header options section end -->
<!-- Card footer options section start -->
<section id="card-footer-options">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Card Footer Options</h4>
<p>Card footer options include basic card footer, without border, within
                card body and within card body without border.</p>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Footer</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p>Oat cake ice cream candy chocolate cake chocolate cake cotton
                      candy dragée apple pie. Brownie carrot cake candy canes bonbon
                      fruitcake topping halvah. Cake sweet roll cake cheesecake cookie
                      chocolate cake liquorice. Apple pie sugar plum powder donut
                      soufflé.
                    </p>
</div>
</div>
<div class="card-footer text-muted">
<span>2 days ago</span>
<span class="float-right">Read More <i class="ft-arrow-right"></i></span>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Footer Without Border</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p>Oat cake ice cream candy chocolate cake chocolate cake cotton
                      candy dragée apple pie. Brownie carrot cake candy canes bonbon
                      fruitcake topping halvah. Cake sweet roll cake cheesecake cookie
                      chocolate cake liquorice. Apple pie sugar plum powder donut
                      soufflé.
                    </p>
</div>
</div>
<div class="card-footer border-0 text-muted">
<span class="danger"><i class="la la-heart"></i> 173 Likes</span>
<span class="float-right primary">View More <i class="ft-arrow-right"></i></span>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Footer Within Body</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p>Oat cake ice cream candy chocolate cake chocolate cake cotton
                      candy dragée apple pie. Brownie carrot cake candy canes bonbon
                      fruitcake topping halvah. Cake sweet roll cake cheesecake cookie
                      chocolate cake liquorice. Apple pie sugar plum powder donut
                      soufflé.
                    </p>
<div class="card-footer text-muted mt-2">
<span>updated 3 hours ago</span>
<span class="float-right">
<span class="badge bg-teal">Technology</span>
<span class="badge badge-warning">Mobile</span>
</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Footer Within Body Without Border</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p>Oat cake ice cream candy chocolate cake chocolate cake cotton
                      candy dragée apple pie. Brownie carrot cake candy canes bonbon
                      fruitcake topping halvah. Cake sweet roll cake cheesecake cookie
                      chocolate cake liquorice. Apple pie sugar plum powder donut
                      soufflé.
                    </p>
<div class="card-footer border-0 text-muted mt-2">
<span>5 minutes ago</span>
<span class="float-right"><i class="ft-message-circle"></i> 16</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Card footer options section end -->
<!-- Card title sizing options section start -->
<section id="card-title-sizing-options">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Card Title Sizing</h4>
<p>You can use any heading tags like H1, H2, H3, H4, H5, H6 to display
                card title.</p>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h1>H1 Title</h1>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p>Use <code>&lt;h1 class="card-header "&gt;H1 Title&lt;/h1&gt;</code>                      for H1 title heading.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h2>H2 Title</h2>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p>Use <code>&lt;h2 class="card-header "&gt;H2 Title&lt;/h2&gt;</code>                      for H2 title heading.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h3>H3 Title</h3>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p>Use <code>&lt;h3 class="card-header "&gt;H3 Title&lt;/h3&gt;</code>                      for H3 title heading.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4>H4 Title</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p>Use <code>&lt;h4 class="card-header "&gt;H4 Title&lt;/h4&gt;</code>                      for H4 title heading.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h5>H5 Title</h5>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p>Use <code>&lt;h5 class="card-header "&gt;H5 Title&lt;/h5&gt;</code>                      for H5 title heading.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h6>H6 Title</h6>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p>Use <code>&lt;h6 class="card-header "&gt;H6 Title&lt;/h6&gt;</code>                      for H6 title heading.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Card title sizing options section end -->
<!-- Card bg options section start -->
<section id="card-bg-options">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Card Background Variants</h4>
<p>Cards include their own variant classes for quickly changing the <code>background-color</code>                and <code>border-color</code> of a card.
                <strong>Darker colors require the use of</strong> <code>.text-white</code>.</p>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card text-white box-shadow-0 bg-primary">
<div class="card-header">
<h4 class="card-title text-white">Primary Background</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>bg-primary</code> class for primary background color.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card text-white box-shadow-0 bg-success">
<div class="card-header">
<h4 class="card-title text-white">Success Background</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>bg-success</code> class for success background color.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card text-white box-shadow-0 bg-info">
<div class="card-header">
<h4 class="card-title text-white">Info Background</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>bg-info</code> class for info background color.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card text-white box-shadow-0 bg-warning">
<div class="card-header">
<h4 class="card-title text-white">Warning Background</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>bg-warning</code> class for warning background color.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card text-white box-shadow-0 bg-danger">
<div class="card-header">
<h4 class="card-title text-white">Danger Background</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>bg-danger</code> class for danger background color.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card text-white box-shadow-0 bg-blue">
<div class="card-header">
<h4 class="card-title text-white">Custom background</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>bg-color</code> class for custom background color.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Card bg options section end -->
<!-- Card gradient options section start -->
<section id="card-gradient-options">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Card Background Gradient Variants</h4>
<p>Cards include their own variant classes for quickly changing the <code>background-color</code>                and <code>border-color</code> of a card.
                <strong>Darker colors require the use of</strong> <code>.text-white</code>.</p>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card text-white box-shadow-0 bg-gradient-x-primary">
<div class="card-header">
<h4 class="card-title text-white">Horizontal Gradient</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>.bg-gradient-x-*</code> class for horizontal gradient.</p>
<p class="card-text">Oat cake ice cream candy chocolate cake chocolate cake cotton
                      candy dragée apple pie. Brownie carrot cake candy canes bonbon
                      fruitcake topping halvah. Cake sweet roll cake cheesecake cookie
                      chocolate cake liquorice. Apple pie sugar plum powder donut
                      soufflé.
                    </p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card text-white box-shadow-0 bg-gradient-y-success">
<div class="card-header">
<h4 class="card-title text-white">Vertical Gradient</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>.bg-gradient-y-*</code> class for vertical gradient.</p>
<p class="card-text">Oat cake ice cream candy chocolate cake chocolate cake cotton
                      candy dragée apple pie. Brownie carrot cake candy canes bonbon
                      fruitcake topping halvah. Cake sweet roll cake cheesecake cookie
                      chocolate cake liquorice. Apple pie sugar plum powder donut
                      soufflé.
                    </p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card text-white box-shadow-0 bg-gradient-x2-pink">
<div class="card-header">
<h4 class="card-title text-white">Three Colors Horizontal Gradient</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>.bg-gradient-x2-*</code> class for three colors horizontal
                      gradient.
                    </p>
<p class="card-text">Oat cake ice cream candy chocolate cake chocolate cake cotton
                      candy dragée apple pie. Brownie carrot cake candy canes bonbon
                      fruitcake topping halvah. Cake sweet roll cake cheesecake cookie
                      chocolate cake liquorice. Apple pie sugar plum powder donut
                      soufflé.
                    </p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card text-white box-shadow-0 bg-gradient-y2-cyan">
<div class="card-header">
<h4 class="card-title text-white">Three Colors Vertical Gradient</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>.bg-gradient-y2-*</code> class for three colors vertical
                      gradient.
                    </p>
<p class="card-text">Oat cake ice cream candy chocolate cake chocolate cake cotton
                      candy dragée apple pie. Brownie carrot cake candy canes bonbon
                      fruitcake topping halvah. Cake sweet roll cake cheesecake cookie
                      chocolate cake liquorice. Apple pie sugar plum powder donut
                      soufflé.
                    </p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card text-white box-shadow-0 bg-gradient-directional-info">
<div class="card-header">
<h4 class="card-title text-white">Directional Gradient</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>.bg-gradient-directional-*</code> class for directional
                      gradient.
                    </p>
<p class="card-text">Oat cake ice cream candy chocolate cake chocolate cake cotton
                      candy dragée apple pie. Brownie carrot cake candy canes bonbon
                      fruitcake topping halvah. Cake sweet roll cake cheesecake cookie
                      chocolate cake liquorice. Apple pie sugar plum powder donut
                      soufflé.
                    </p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card text-white box-shadow-0 bg-gradient-radial-warning">
<div class="card-header">
<h4 class="card-title text-white">Radial Gradient</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>.bg-gradient-radial-*</code> class for radial gradient.</p>
<p class="card-text">Oat cake ice cream candy chocolate cake chocolate cake cotton
                      candy dragée apple pie. Brownie carrot cake candy canes bonbon
                      fruitcake topping halvah. Cake sweet roll cake cheesecake cookie
                      chocolate cake liquorice. Apple pie sugar plum powder donut
                      soufflé.
                    </p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card bg-gradient-striped-yellow box-shadow-0">
<div class="card-header">
<h4 class="card-title">Striped Gradient</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>.bg-gradient-striped-*</code> class for striped gradient.</p>
<p class="card-text">Oat cake ice cream candy chocolate cake chocolate cake cotton
                      candy dragée apple pie. Brownie carrot cake candy canes bonbon
                      fruitcake topping halvah. Cake sweet roll cake cheesecake cookie
                      chocolate cake liquorice. Apple pie sugar plum powder donut
                      soufflé.
                    </p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card text-white bg-gradient-y-blue box-shadow-0">
<div class="card-header">
<h4 class="card-title text-white">Custom background Gradient</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">This example uses the same vertical gradient class with custom
                      color background.</p>
<p class="card-text">Oat cake ice cream candy chocolate cake chocolate cake cotton
                      candy dragée apple pie. Brownie carrot cake candy canes bonbon
                      fruitcake topping halvah. Cake sweet roll cake cheesecake cookie
                      chocolate cake liquorice. Apple pie sugar plum powder donut
                      soufflé.
                    </p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Card gradient options section end -->
<!-- Card outline options section start -->
<section id="card-outline-options">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Card Outline Variants</h4>
<p>In need of a colored card, but not the hefty background colors they
                bring? Replace the default modifier classes with the <code class="highlighter-rouge">.border-*</code>                ones to style just the <code class="highlighter-rouge">border-color</code>                of a card.</p>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card box-shadow-0 border-primary bg-transparent">
<div class="card-header bg-transparent">
<h4 class="card-title">Primary Outline</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>border-primary</code> class for primary outline color.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card box-shadow-0 border-success bg-transparent">
<div class="card-header bg-transparent">
<h4 class="card-title">Success Outline</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>border-success</code> class for success outline color.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card box-shadow-0 border-info bg-transparent">
<div class="card-header bg-transparent">
<h4 class="card-title">Info Outline</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>border-info</code> class for info outline color.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card box-shadow-0 border-warning bg-transparent">
<div class="card-header bg-transparent">
<h4 class="card-title">Warning Outline</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>border-warning</code> class for warning outline color.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card box-shadow-0 border-danger bg-transparent">
<div class="card-header bg-transparent">
<h4 class="card-title">Danger Outline</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>border-danger</code> class for danger outline color.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card box-shadow-0 border-blue bg-transparent">
<div class="card-header bg-transparent">
<h4 class="card-title">Custom Outline</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>border-*</code> class for custom outline color.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Card outline options section end -->
<!-- Card heading color options section start -->
<section id="card-heading-color-options">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Card Heading Colors</h4>
<p>In need of a colored heading card, but not the hefty background color
                cards? Use <code class="highlighter-rouge">.bg-*</code> class with
                <code>.card-header</code> along with <code>.card-head-inverse</code>                to make title text readable.</p>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header card-head-inverse bg-primary">
<h4 class="card-title text-white">Primary Card Heading</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>bg-primary</code> class with card-head for primary
                      card heading color.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header card-head-inverse bg-success">
<h4 class="card-title text-white">Success Card Heading</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>bg-success</code> class with card-head for success
                      card heading color.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header card-head-inverse bg-info">
<h4 class="card-title text-white">Info Card Heading</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>bg-info</code> class with card-head for info card heading
                      color.
                    </p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header card-head-inverse bg-warning">
<h4 class="card-title text-white">Warning Card Heading</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>bg-warning</code> class with card-head for warning
                      card heading color.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header card-head-inverse bg-danger">
<h4 class="card-title text-white">Danger Card Heading</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>bg-danger</code> class with card-head for danger card
                      heading color.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header card-head-inverse bg-blue">
<h4 class="card-title text-white">Custom Card Heading</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>bg-*</code> class with card-head for custom card heading
                      color.
                    </p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Card heading color options section end -->
<!-- Card bordered options section start -->
<section id="card-bordered-options">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Bordered Cards</h4>
<p>In need of a colored bordered card? Use <code class="highlighter-rouge">.border-*</code>                class with <code>.card</code>.</p>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card box-shadow-0 border-primary">
<div class="card-header card-head-inverse bg-primary">
<h4 class="card-title text-white">Primary Bordered Card</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>border-primary</code> class for primary border color.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card box-shadow-0 border-success">
<div class="card-header card-head-inverse bg-success">
<h4 class="card-title text-white">Success Bordered Card</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>border-success</code> class for success border color.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card box-shadow-0 border-info">
<div class="card-header card-head-inverse bg-info">
<h4 class="card-title text-white">Info Bordered Card</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>border-info</code> class for info border color.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card box-shadow-0 border-warning">
<div class="card-header card-head-inverse bg-warning">
<h4 class="card-title text-white">Warning Bordered Card</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>border-warning</code> class for warning border color.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card box-shadow-0 border-danger">
<div class="card-header card-head-inverse bg-danger">
<h4 class="card-title text-white">Danger Bordered Card</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>border-danger</code> class for danger border color.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card box-shadow-0 border-blue">
<div class="card-header card-head-inverse bg-blue">
<h4 class="card-title text-white">Custom Bordered Card</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>border-*</code> class for custom border color.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Card bordered options section end -->
<!-- Card border options section start -->
<section id="card-border-options">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Card Borders</h4>
<p>In need of a single or multiple colored bordered card? Use <code>.border-top-*</code>,
                <code>.border-right-*</code>, <code>.border-bottom-*</code>,<code>.border-left-*</code>                class with <code>.card</code>.</p>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card border-top-primary">
<div class="card-header">
<h4 class="card-title">Border Top</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>border-top-*</code> class for border top color.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card border-right-success">
<div class="card-header">
<h4 class="card-title">Border Right</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>border-right-*</code> class for border right color.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card border-bottom-info box-shadow-0">
<div class="card-header">
<h4 class="card-title">Border Bottom</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>border-bottom-*</code> class for border bottom color.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card border-left-warning">
<div class="card-header">
<h4 class="card-title">Border Left</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>border-left-*</code> class for border left color.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card border-top-danger box-shadow-0 border-bottom-danger">
<div class="card-header">
<h4 class="card-title">Border Top &amp; Bottom</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>border-top-*</code> and <code>border-bottom-*</code>                      class for border top and bottom color.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card border-left-blue border-right-blue">
<div class="card-header">
<h4 class="card-title">Border Left &amp; Right</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>border-left-*</code> and <code>border-right-*</code>                      class for border left and right color.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Card border options section end -->
<!-- Card border options section start -->
<section id="card-header-bg-options">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Card Border Sizing</h4>
<p>Want to chage border size of card? Use <code>.border-top-2</code>,
                <code>.border-right-2</code>, <code>.border-bottom-2</code>,<code>.border-left-2</code>                class with <code>.card</code>.</p>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card border-top-danger">
<div class="card-header">
<h4 class="card-title">Border Normal Size</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>border-top-*</code> class for border top color.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card border-right-success">
<div class="card-header">
<h4 class="card-title">Border Normal Size</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>border-right-*</code> class for border right color.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card border-bottom-info box-shadow-0 border-bottom-2">
<div class="card-header">
<h4 class="card-title">Border Large Size</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>border-bottom-*</code> class for border bottom color.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card border-left-warning border-left-2">
<div class="card-header">
<h4 class="card-title">Border Large Size</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>border-left-*</code> class for border left color.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card border-top-pink border-top-3 border-bottom-blue border-bottom-3 box-shadow-0">
<div class="card-header">
<h4 class="card-title">Border Extra Large Size</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>border-top-*</code> and <code>border-bottom-*</code>                      class for border top and bottom color.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card border-left-primary border-left-3 border-right-warning border-right-3">
<div class="card-header">
<h4 class="card-title">Border Extra Large Size</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Use <code>border-left-*</code> and <code>border-right-*</code>                      class for border left and right color.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Card border options section end -->
</div>
