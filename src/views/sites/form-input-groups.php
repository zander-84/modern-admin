<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\FormInputGroupsAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Input Groups</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="form-input-groups.html#">Form Components</a>
</li>
<li class="breadcrumb-item active">Input Groups
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="form-input-groups.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="form-input-groups.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="form-input-groups.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="form-input-groups.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- input groups start -->
<section class="input-groups" id="input-groups">
<div class="row match-height">
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default Input group</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add span with <code>.input-group-text</code> class <b>before</b> <code>&lt;input&gt;</code></p>
<fieldset>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">@</span>
</div>
<input aria-describedby="basic-addon1" class="form-control" placeholder="Addon to Left" type="text"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group with Right Addon</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add span with <code>.input-group-text</code> class <b>after</b> <code>&lt;input&gt;</code></p>
<fieldset>
<div class="input-group">
<input aria-describedby="basic-addon2" class="form-control" placeholder="Addon To Right" type="text"/>
<div class="input-group-append">
<span class="input-group-text" id="basic-addon2">@example.com</span>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group Addon on both side</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add span with <code>.input-group-text</code> class to <b>before &amp; after</b> <code>&lt;input&gt;</code></p>
<fieldset>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">$</span>
</div>
<input aria-label="Amount (to the nearest dollar)" class="form-control" placeholder="Addon On Both Side" type="text"/>
<div class="input-group-append">
<span class="input-group-text">.00</span>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group addon with Icon</h4>
</div>
<div class="card-body">
<div class="card-block">
<fieldset>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon3"><i class="la la-envelope"></i></span>
</div>
<input aria-describedby="basic-addon3" class="form-control" placeholder="Addon to Left" type="text"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group addon with Right Icon</h4>
</div>
<div class="card-body">
<div class="card-block">
<fieldset>
<div class="input-group">
<input aria-describedby="basic-addon4" class="form-control" placeholder="Addon To Right" type="text"/>
<div class="input-group-append">
<span class="input-group-text" id="basic-addon4"><i class="la la-user"></i></span>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group addon with icon both side</h4>
</div>
<div class="card-body">
<div class="card-block">
<fieldset>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="la la-phone-square"></i></span>
</div>
<input aria-label="Amount (to the nearest dollar)" class="form-control" placeholder="Addon On Both Side" type="text"/>
<div class="input-group-append">
<span class="input-group-text"><i class="la la-mobile"></i></span>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group addon with Spinner</h4>
</div>
<div class="card-body">
<div class="card-block">
<fieldset>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon5"><i class="la la-spinner icon-spin"></i></span>
</div>
<input aria-describedby="basic-addon5" class="form-control" placeholder="Addon to Left" type="text"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group addon with Right Spinner</h4>
</div>
<div class="card-body">
<div class="card-block">
<fieldset>
<div class="input-group">
<input aria-describedby="basic-addon6" class="form-control" placeholder="Addon To Right" type="text"/>
<div class="input-group-append">
<span class="input-group-text" id="basic-addon6"><i class="la la-rotate-right icon-spin"></i></span>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group addon with Spinner both side</h4>
</div>
<div class="card-body">
<div class="card-block">
<fieldset>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="la la-circle-o-notch icon-spin"></i></span>
</div>
<input aria-label="Amount (to the nearest dollar)" class="form-control" placeholder="Addon On Both Side" type="text"/>
<div class="input-group-append">
<span class="input-group-text"><i class="icon-spin la la-share-alt-square"></i></span>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- input groups end -->
<!-- Input Groups With Checkbox start -->
<section class="checkbox-input-group" id="input-group-checkbox">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Input group with Checkbox</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group with checkbox</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add span with <code>.input-group-text</code> class <b>before</b> <code>&lt;input&gt;</code> text and Add checkbox inside.</p>
<fieldset>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text">
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="customCheck1" type="checkbox"/>
<label class="custom-control-label" for="customCheck1"></label>
</div>
</div>
</div>
<input aria-describedby="checkbox-addon1" class="form-control" placeholder="Text input with Left checkbox " type="text"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group with Right Addon</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add span with <code>.input-group-text</code> class <b>after</b> <code>&lt;input&gt;</code> text and Add checkbox inside.</p>
<fieldset>
<div class="input-group">
<input aria-describedby="checkbox-addon2" class="form-control" placeholder="Text input with right checkbox" type="text"/>
<div class="input-group-append">
<span class="input-group-text" id="checkbox-addon2">
<span class="skin skin-square">
<input checked="" id="check-1" type="checkbox"/>
</span>
</span>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group Addon on both side</h4>
</div>
<div class="card-body">
<div class="card-block">
<fieldset>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text ">
<span class="skin skin-futurico">
<input id="check-2" type="checkbox"/>
</span>
</span>
</div>
<input aria-label="Amount (to the nearest dollar)" class="form-control" placeholder="Addon &amp; checkbox Both Side" type="text"/>
<div class="input-group-append">
<span class="input-group-text">@example.com</span>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Input Groups With Checkbox end -->
<!-- Input Groups With Radio start -->
<section class="radio-input-group" id="input-group-radio">
<div class="row match-height">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Input group with Radio</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group with radio</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add span with <code>.input-group-text</code> class <b>before</b> <code>&lt;input&gt;</code> text and Add radio inside.</p>
<fieldset>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text" id="radio-addon1">
<span class="skin-polaris skin">
<input aria-label="Radio for following text input" type="radio"/>
</span>
</span>
</div>
<input aria-describedby="radio-addon1" class="form-control" placeholder="Text input with Left radio" type="text"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group with Right Addon</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add span with <code>.input-group-text</code> class <b>after</b> <code>&lt;input&gt;</code> text and Add radio inside.</p>
<fieldset>
<div class="input-group">
<input aria-describedby="radio-addon2" class="form-control" placeholder="Text input with right radio" type="text"/>
<div class="input-group-append">
<span class="input-group-text skin skin-flat" id="radio-addon2">
<input aria-label="Radio for following text input" type="radio"/>
</span>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group Addon on both side</h4>
</div>
<div class="card-body">
<div class="card-block">
<fieldset>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text ">
<span class="skin skin-futurico">
<input checked="" type="radio"/>
<span></span>
</span>
</span>
</div>
<input aria-label="Amount (to the nearest dollar)" class="form-control" placeholder="Addon &amp; radio Both Side" type="text"/>
<div class="input-group-append">
<span class="input-group-text">@example.com</span>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Input Groups With Radio end -->
<!-- Switchery Input Group start -->
<section class="switchery-input-group" id="input-group-switchery">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Input group with Switchery</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group with Switchery</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add span with <code>.input-group-text</code> class <b>before</b> <code>&lt;input&gt;</code> text and Add switchery inside.</p>
<fieldset>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text" id="radio-addon3">
<input checked="" class="switchery" data-size="xs" id="switchery" type="checkbox"/>
</span>
</div>
<input aria-describedby="radio-addon3" class="form-control" placeholder="Input with Left switchery" type="text"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group with Right Switchery</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add span with <code>.input-group-text</code> class <b>after</b> <code>&lt;input&gt;</code> text and Add switchery inside.</p>
<fieldset>
<div class="input-group">
<input aria-describedby="radio-addon4" class="form-control" placeholder="Input with right switchery" type="text"/>
<div class="input-group-append">
<span class="input-group-text" id="radio-addon4">
<input checked="" class="switchery" data-size="xs" id="switchery2" type="checkbox"/>
</span>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group with switchery on both side</h4>
</div>
<div class="card-body">
<div class="card-block">
<fieldset>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<input checked="" class="switchery" data-size="xs" id="switchery3" type="checkbox"/>
</span>
</div>
<input aria-label="Amount (to the nearest dollar)" class="form-control" placeholder="Switchery On Both Side" type="text"/>
<div class="input-group-append">
<span class="input-group-text">
<input checked="" class="switchery" data-size="xs" id="switchery4" type="checkbox"/>
</span>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Switchery Input Group end -->
<!--	   Input Group Sizing	 -->
<section class="sizing-input-group" id="input-group-sizing">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Input Groups Sizing</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Large Input group</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add <code>.input-group-lg</code> class to <code>.input-group</code>                      for Large addon.</p>
<fieldset>
<div class="input-group input-group-lg">
<div class="input-group-prepend">
<span class="input-group-text" id="sizing-addon1">@</span>
</div>
<input aria-describedby="sizing-addon1" class="form-control" placeholder="Large Addon" type="text"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default Input group</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Default Input Group addon.</p>
<fieldset>
<div class="input-group">
<input aria-describedby="sizing-addon2" class="form-control" placeholder="Default Addon" type="text"/>
<div class="input-group-append">
<span class="input-group-text" id="sizing-addon2">.00</span>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Small Input group</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add <code>.input-group-sm</code> class to <code>.input-group</code>                      for small addon.</p>
<fieldset>
<div class="input-group input-group-sm">
<div class="input-group-prepend">
<span class="input-group-text" id="sizing-addon3">@example.com</span>
</div>
<input aria-describedby="sizing-addon3" class="form-control" placeholder="Small Addon" type="text"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Input Group Sizing end-->
<!-- Input Group Buttons start -->
<section class="buttons-input-group" id="input-group-buttons">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Input Groups Buttons</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group Button On Left</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add button inside <b>before</b> <code>&lt;input&gt;</code></p>
<fieldset>
<div class="input-group">
<div class="input-group-prepend">
<button class="btn btn-primary" type="button">Click Me!</button>
</div>
<input aria-describedby="button-addon1" class="form-control" placeholder="Button on left" type="text"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group Button On Right</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add button inside <b>after</b> <code>&lt;input&gt;</code></p>
<fieldset>
<div class="input-group">
<input aria-describedby="button-addon2" class="form-control" placeholder="Button on right" type="text"/>
<div class="input-group-append">
<button class="btn btn-primary" type="button">Go</button>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group Button On Both Side</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add button inside <b>before &amp; after</b> <code>&lt;input&gt;</code></p>
<fieldset>
<div class="input-group">
<div class="input-group-prepend">
<button class="btn btn-primary" type="button">Love it!</button>
</div>
<input aria-label="Amount" class="form-control" placeholder="Button on both side" type="text"/>
<div class="input-group-append">
<button class="btn btn-primary" type="button">Hate it!</button>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group Icon Button On Left</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add button inside <b>before</b> <code>&lt;input&gt;</code></p>
<fieldset>
<div class="input-group">
<div class="input-group-prepend">
<button class="btn btn-primary" type="button"><i class="la la-microphone"></i></button>
</div>
<input aria-describedby="button-addon3" class="form-control" placeholder="Button on left" type="text"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group Button On Right</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add button inside <b>after</b> <code>&lt;input&gt;</code></p>
<fieldset>
<div class="input-group">
<input aria-describedby="button-addon4" class="form-control" placeholder="Button on right" type="text"/>
<div class="input-group-append">
<button class="btn btn-primary" type="button"><i class="la la-pencil"></i></button>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group Button On Both Side</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add button inside <b>before &amp; after</b> <code>&lt;input&gt;</code></p>
<fieldset>
<div class="input-group">
<div class="input-group-prepend">
<button class="btn btn-primary" type="button"><i class="la la-search"></i></button>
</div>
<input aria-label="Amount" class="form-control" placeholder="Button on both side" type="text"/>
<div class="input-group-append">
<button class="btn btn-primary" type="button">Go!</button>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Input Group Buttons end -->
<!-- Buttons with Dropdown start -->
<section class="buttons-with-dropdown" id="input-group-dropdown">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Buttons with Dropdown</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group Dropdown On Left</h4>
</div>
<div class="card-body">
<div class="card-block">
<fieldset>
<div class="input-group">
<div class="input-group-prepend">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
                            Action
                          </button>
<div class="dropdown-menu">
<a class="dropdown-item" href="form-input-groups.html#">Action</a>
<a class="dropdown-item" href="form-input-groups.html#">Another action</a>
<a class="dropdown-item" href="form-input-groups.html#">Something else here</a>
<div class="dropdown-divider" role="separator"></div>
<a class="dropdown-item" href="form-input-groups.html#">Separated link</a>
</div>
</div>
<input class="form-control" placeholder="Dropdown on left" type="text"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group Dropdown On Right</h4>
</div>
<div class="card-body">
<div class="card-block">
<fieldset>
<div class="input-group">
<input class="form-control" placeholder="Dropdown on right" type="text"/>
<div class="input-group-append">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
                            Action
                          </button>
<div class="dropdown-menu">
<a class="dropdown-item" href="form-input-groups.html#">Action</a>
<a class="dropdown-item" href="form-input-groups.html#">Another action</a>
<a class="dropdown-item" href="form-input-groups.html#">Something else here</a>
<div class="dropdown-divider" role="separator"></div>
<a class="dropdown-item" href="form-input-groups.html#">Separated link</a>
</div>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group Dropdown On Both Side</h4>
</div>
<div class="card-body">
<div class="card-block">
<fieldset>
<div class="input-group">
<div class="input-group-prepend">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
<i class="la la-pencil"></i>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="form-input-groups.html#">Action</a>
<a class="dropdown-item" href="form-input-groups.html#">Another action</a>
<a class="dropdown-item" href="form-input-groups.html#">Something else here</a>
<div class="dropdown-divider" role="separator"></div>
<a class="dropdown-item" href="form-input-groups.html#">Separated link</a>
</div>
</div>
<input aria-label="Amount" class="form-control" placeholder="Dropdown on both side" type="text"/>
<div class="input-group-append">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
                            Action
                          </button>
<div class="dropdown-menu">
<a class="dropdown-item" href="form-input-groups.html#">Action</a>
<a class="dropdown-item" href="form-input-groups.html#">Another action</a>
<a class="dropdown-item" href="form-input-groups.html#">Something else here</a>
<div class="dropdown-divider" role="separator"></div>
<a class="dropdown-item" href="form-input-groups.html#">Separated link</a>
</div>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Buttons with Dropdown end -->
<!-- Segmented Buttons with Dropdown start -->
<section class="segmented-buttons-with-dropdown">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Segmented Buttons with Dropdown</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Segmented Button On Left</h4>
</div>
<div class="card-body">
<div class="card-block">
<fieldset>
<div class="input-group">
<div class="input-group-prepend">
<button class="btn btn-primary" type="button">Action</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="form-input-groups.html#">Action</a>
<a class="dropdown-item" href="form-input-groups.html#">Another action</a>
<a class="dropdown-item" href="form-input-groups.html#">Something else here</a>
<div class="dropdown-divider" role="separator"></div>
<a class="dropdown-item" href="form-input-groups.html#">Separated link</a>
</div>
</div>
<input class="form-control" placeholder="Segmented Button on left" type="text"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Segmented Button On Right</h4>
</div>
<div class="card-body">
<div class="card-block">
<fieldset>
<div class="input-group">
<input class="form-control" placeholder="Segmented Button on right" type="text"/>
<div class="input-group-append">
<button class="btn btn-primary" type="button">Action</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="form-input-groups.html#">Action</a>
<a class="dropdown-item" href="form-input-groups.html#">Another action</a>
<a class="dropdown-item" href="form-input-groups.html#">Something else here</a>
<div class="dropdown-divider" role="separator"></div>
<a class="dropdown-item" href="form-input-groups.html#">Separated link</a>
</div>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Segmented Buttons On Both Side</h4>
</div>
<div class="card-body">
<div class="card-block">
<fieldset>
<div class="input-group">
<div class="input-group-prepend">
<button class="btn btn-primary" type="button">
<i class="la la-paper-plane"></i>
</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="form-input-groups.html#">Action</a>
<a class="dropdown-item" href="form-input-groups.html#">Another action</a>
<a class="dropdown-item" href="form-input-groups.html#">Something else here</a>
<div class="dropdown-divider" role="separator"></div>
<a class="dropdown-item" href="form-input-groups.html#">Separated link</a>
</div>
</div>
<input aria-label="Amount" class="form-control" placeholder="Segmented Button on both side" type="text"/>
<div class="input-group-append">
<button class="btn btn-primary" type="button">Action</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="form-input-groups.html#">Action</a>
<a class="dropdown-item" href="form-input-groups.html#">Another action</a>
<a class="dropdown-item" href="form-input-groups.html#">Something else here</a>
<div class="dropdown-divider" role="separator"></div>
<a class="dropdown-item" href="form-input-groups.html#">Separated link</a>
</div>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Segmented Buttons with Dropdown end -->
<!-- Color Options start -->
<section class="color-options" id="color-validation">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Color options</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default Input group</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add color using <code>.bg-COLORNAME</code> class to the addon.</p>
<fieldset>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text bg-primary border-primary white" id="basic-addon7">@</span>
</div>
<input aria-describedby="basic-addon7" class="form-control" placeholder="Addon to Left" type="text"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group with Right Addon</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add color using <code>.bg-COLORNAME</code> class to the addon.</p>
<fieldset>
<div class="input-group">
<input aria-describedby="basic-addon8" class="form-control" placeholder="Addon To Right" type="text"/>
<div class="input-group-append">
<span class="input-group-text bg-warning border-warning white" id="basic-addon8"><i class="la la-pencil"></i></span>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group Addon on both side</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add color using <code>.bg-COLORNAME</code> class to the addon
                      and input with lighten/darken color.</p>
<fieldset>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text bg-success bg-darken-2 border-success white"><i class="la la-calendar"></i></span>
</div>
<input aria-label="
								Amount (to the nearest dollar)" class="form-control bg-success border-success" placeholder="Addon On Both Side" type="text"/>
<div class="input-group-append">
<span class="input-group-text bg-success bg-darken-2 border-success white">.00</span>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group Button On Left</h4>
</div>
<div class="card-body">
<div class="card-block">
<fieldset>
<div class="input-group">
<div class="input-group-prepend">
<button class="btn btn-primary bg-danger border-danger" type="button">Click Me!</button>
</div>
<input aria-describedby="button-addon5" class="form-control" placeholder="Button on left" type="text"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group Button On Right</h4>
</div>
<div class="card-body">
<div class="card-block">
<fieldset>
<div class="input-group">
<input aria-describedby="button-addon6" class="form-control" placeholder="Button on right" type="text"/>
<div class="input-group-append">
<button class="btn btn-primary bg-info border-info" type="button"><i class="la la-check"></i></button>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input group Button On Both Side</h4>
</div>
<div class="card-body">
<div class="card-block">
<fieldset>
<div class="input-group">
<div class="input-group-prepend">
<button class="btn btn-primary bg-pink border-pink bg-darken-2" type="button"><i class="la la-shopping-cart"></i></button>
</div>
<input aria-label="Amount" class="form-control bg-pink border-pink" placeholder="Button on both side" type="text"/>
<div class="input-group-append">
<button class="btn btn-primary bg-pink border-pink bg-darken-2" type="button">Shopping!</button>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Color Options end -->
<!-- Bootstrap TouchSpin Spinners start -->
<section class="bootstrap-touchspin-spinners" id="touchspin">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Bootstrap TouchSpin Spinners</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default Touchspin</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add <code>.touchspin</code> class to input to add touchspin input
                      group.
                    </p>
<fieldset>
<div class="input-group">
<input class="touchspin" type="text" value="50"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Touchspin with Postfix</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add <code>data-bts-postfix="POSTFIX_VALUE"</code> attribute to
                      input to add postfix to touchspin input group.</p>
<fieldset>
<div class="input-group">
<input class="touchspin" data-bts-postfix="%" type="text" value="50"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Touchspin with Prefix</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add <code>data-bts-prefix="PREFIX_VALUE"</code> attribute to
                      input to add prefix to touchspin input group.</p>
<fieldset>
<div class="input-group">
<input class="touchspin" data-bts-prefix="#" type="text" value="50"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Min Max Value of Touchspin</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Use <code>data-bts-min="VALUE" data-bts-max="VALUE"</code> attribute
                      to input to set min and max value of touchspin input group.</p>
<fieldset>
<div class="input-group">
<input class="touchspin" data-bts-max="100" data-bts-min="1" type="text" value="50"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Touchspin with initial Value</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add <code>data-bts-init-val="VALUE"</code> attribute attribute
                      to set initial value for input group.</p>
<fieldset>
<div class="input-group">
<input class="touchspin" data-bts-init-val="20" type="text"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Touchspin steps</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add <code>data-bts-step="VALUE"</code> attribute for increament
                      and decrement steps to touchspin input group.</p>
<fieldset>
<div class="input-group">
<input class="touchspin" data-bts-step="10" type="text" value="50"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Decimal Value of Touchspin</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Use <code>data-bts-decimal="VALUE"</code> attribute to use decimal
                      value of touchspin input.</p>
<fieldset>
<div class="input-group">
<input class="touchspin" data-bts-decimals="2" data-bts-step="0.25" type="text" value="50.00"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">vertical Touchspin</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add <code>.touchspin-vertical</code> class for vertical touchspin
                      input group.</p>
<fieldset>
<input class="touchspin-vertical" type="text" value="55"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Touchspin mousewheel Disable</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add <code>.touchspin-stop-mousewheel</code> class to diable mousewheel.</p>
<fieldset>
<div class="input-group">
<input class="touchspin-stop-mousewheel" type="text" value="50"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Change Button Class to link</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add <code>data-bts-button-down-class &amp; data-bts-button-up-class</code>                      attribute to change button Class.</p>
<fieldset>
<div class="input-group">
<input class="touchspin" data-bts-button-down-class="btn btn-link" data-bts-button-up-class="btn btn-link" type="text" value="50"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Touchspin With Icon</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add icon class in <code>data-bts-postfix</code> attribute to
                      icon to postfix as well prefix.</p>
<fieldset>
<div class="input-group">
<input class="touchspin-stop-mousewheel" data-bts-postfix="&lt;i class='ft-phone'&gt;&lt;/i&gt;" type="text" value="50"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Touchspin Icon Button</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Use <code>data-bts-button-down-txt &amp; data-bts-button-up-txt</code>                      attribute to set touchspin icon button.</p>
<fieldset>
<div class="input-group">
<input class="touchspin" data-bts-button-down-txt="&lt;i class='icon-arrow-down2'&gt;&lt;/i&gt;" data-bts-button-up-txt="&lt;i class='icon-arrow-up2'&gt;&lt;/i&gt;" type="text" value="50.00"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Bootstrap TouchSpin Spinners end -->
<!-- Spinners Sizes start -->
<section class="spinners-sizes" id="spinner-sizes">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Spinners Sizes</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Large Horizontal Touchspin</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add <code>.input-group-lg</code> class to input-group.</p>
<fieldset>
<div class="input-group input-group-lg">
<input class="touchspin" type="text" value="50"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default Horizontal Touchspin</h4>
</div>
<div class="card-body">
<div class="card-block">
<fieldset>
<div class="input-group">
<input class="touchspin" type="text" value="55"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Small Horizontal Touchspin</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Add <code>.input-group-sm</code> class to input-group and add
                      <code>.input-sm</code> class to input.</p>
<fieldset>
<div class="input-group input-group-sm">
<input class="touchspin input-sm" type="text" value="60"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Spinners Sizes end -->
<!-- Spinners Color Options start -->
<section class="spinners-color" id="spinner-color">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Spinners Color Options</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Primary Touchspin</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>set <code>data-bts-button-down-class &amp; data-bts-button-up-class</code>                      attribute and add value as <code>btn btn-primary</code> for
                      Primary color spinner.</p>
<fieldset>
<div class="input-group">
<input class="touchspin-color" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary" type="text" value="50"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Secondray Touchspin</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>set <code>data-bts-button-down-class &amp; data-bts-button-up-class</code>                      attribute and add value as <code>btn btn-secondary</code> for
                      Primary color spinner.</p>
<fieldset>
<div class="input-group">
<input class="touchspin-color" data-bts-button-down-class="btn btn-secondary" data-bts-button-up-class="btn btn-secondary" type="text" value="55"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Success Touchspin</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>set <code>data-bts-button-down-class &amp; data-bts-button-up-class</code>                      attribute and add value as <code>btn btn-success</code> for
                      Success color spinner.</p>
<fieldset>
<div class="input-group">
<input class="touchspin-color" data-bts-button-down-class="btn btn-success" data-bts-button-up-class="btn btn-success" type="text" value="60"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Danger Touchspin</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>set <code>data-bts-button-down-class &amp; data-bts-button-up-class</code>                      attribute and add value as <code>btn btn-danger</code> for
                      Danger color spinner.</p>
<fieldset>
<div class="input-group">
<input class="touchspin-color" data-bts-button-down-class="btn btn-danger" data-bts-button-up-class="btn btn-danger" type="text" value="50"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Info Touchspin</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>set <code>data-bts-button-down-class &amp; data-bts-button-up-class</code>                      attribute and add value as <code>btn btn-info</code> for Info
                      color spinner.</p>
<fieldset>
<div class="input-group">
<input class="touchspin-color" data-bts-button-down-class="btn btn-info" data-bts-button-up-class="btn btn-info" type="text" value="55"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Warning Touchspin</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>set <code>data-bts-button-down-class &amp; data-bts-button-up-class</code>                      attribute and add value as <code>btn btn-warning</code> for
                      Warning color spinner.</p>
<fieldset>
<div class="input-group">
<input class="touchspin-color" data-bts-button-down-class="btn btn-warning" data-bts-button-up-class="btn btn-warning" type="text" value="60"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Spinners Color Options end -->
</div>
</div>
</div>