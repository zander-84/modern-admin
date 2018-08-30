<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\FormInputGridAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Input Grid</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="form-input-grid.html#">Form Components</a>
</li>
<li class="breadcrumb-item active">Input Grid
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="form-input-grid.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="form-input-grid.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="form-input-grid.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="form-input-grid.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- horizontal grid start -->
<section class="horizontal-grid" id="horizontal-grid">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Horizontal Grid</h4>
<a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<form action="#">
<div class="form-body">
<div class="row">
<div class="col-md-1">
<div class="form-group">
<input class="form-control" placeholder="1" type="text"/>
</div>
</div>
<div class="col-md-11">
<div class="form-group">
<input class="form-control" placeholder="col-md-11" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-2">
<div class="form-group">
<input class="form-control" placeholder="col-md-2" type="text"/>
</div>
</div>
<div class="col-md-10">
<div class="form-group">
<input class="form-control" placeholder="col-md-10" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<input class="form-control" placeholder="col-md-3" type="text"/>
</div>
</div>
<div class="col-md-9">
<div class="form-group">
<input class="form-control" placeholder="col-md-9" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<input class="form-control" placeholder="col-md-4" type="text"/>
</div>
</div>
<div class="col-md-8">
<div class="form-group">
<input class="form-control" placeholder="col-md-8" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-5">
<div class="form-group">
<input class="form-control" placeholder="col-md-5" type="text"/>
</div>
</div>
<div class="col-md-7">
<div class="form-group">
<input class="form-control" placeholder="col-md-7" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input class="form-control" placeholder="col-md-6" type="text"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input class="form-control" placeholder="col-md-6" type="text"/>
</div>
</div>
</div>
</div>
<div class="form-actions">
<div class="text-right">
<button class="btn btn-primary" type="submit">Submit <i class="ft-thumbs-up position-right"></i></button>
<button class="btn btn-warning" type="reset">Reset <i class="ft-refresh-cw position-right"></i></button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- horizontal grid end -->
<!-- Grid With Row Label start -->
<section class="grid-row-label" id="grid-row-label">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Grid With Row Label</h4>
<a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<form action="#">
<div class="form-body">
<label>Row Label </label>
<div class="row">
<div class="col-md-1">
<div class="form-group">
<input class="form-control" placeholder="1" type="text"/>
</div>
</div>
<div class="col-md-11">
<div class="form-group">
<input class="form-control" placeholder="col-md-11" type="text"/>
</div>
</div>
</div>
<label>Row Label </label>
<div class="row">
<div class="col-md-2">
<div class="form-group">
<input class="form-control" placeholder="col-md-2" type="text"/>
</div>
</div>
<div class="col-md-10">
<div class="form-group">
<input class="form-control" placeholder="col-md-10" type="text"/>
</div>
</div>
</div>
<label>Row Label </label>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<input class="form-control" placeholder="col-md-3" type="text"/>
</div>
</div>
<div class="col-md-9">
<div class="form-group">
<input class="form-control" placeholder="col-md-9" type="text"/>
</div>
</div>
</div>
<label>Row Label </label>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<input class="form-control" placeholder="col-md-4" type="text"/>
</div>
</div>
<div class="col-md-8">
<div class="form-group">
<input class="form-control" placeholder="col-md-8" type="text"/>
</div>
</div>
</div>
<label>Row Label </label>
<div class="row">
<div class="col-md-5">
<div class="form-group">
<input class="form-control" placeholder="col-md-5" type="text"/>
</div>
</div>
<div class="col-md-7">
<div class="form-group">
<input class="form-control" placeholder="col-md-7" type="text"/>
</div>
</div>
</div>
<label>Row Label </label>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input class="form-control" placeholder="col-md-6" type="text"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input class="form-control" placeholder="col-md-6" type="text"/>
</div>
</div>
</div>
</div>
<div class="form-actions">
<div class="text-right">
<button class="btn btn-primary" type="submit">Submit <i class="ft-thumbs-up position-right"></i></button>
<button class="btn btn-warning" type="reset">Reset <i class="ft-refresh-cw position-right"></i></button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Grid With Row Label end -->
<!-- Grid With Label start -->
<section class="grid-with-label" id="grid-with-label">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Grid With Label</h4>
<a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<form action="#">
<div class="form-body">
<div class="row">
<div class="col-md-1">
<div class="form-group">
<label>Label</label>
<input class="form-control" placeholder="1" type="text"/>
</div>
</div>
<div class="col-md-11">
<div class="form-group">
<label>Label</label>
<input class="form-control" placeholder="col-md-11" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-2">
<div class="form-group">
<label>Label</label>
<input class="form-control" placeholder="col-md-2" type="text"/>
</div>
</div>
<div class="col-md-10">
<div class="form-group">
<label>Label</label>
<input class="form-control" placeholder="col-md-10" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<label>Label</label>
<input class="form-control" placeholder="col-md-3" type="text"/>
</div>
</div>
<div class="col-md-9">
<div class="form-group">
<label>Label</label>
<input class="form-control" placeholder="col-md-9" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<label>Label</label>
<input class="form-control" placeholder="col-md-4" type="text"/>
</div>
</div>
<div class="col-md-8">
<div class="form-group">
<label>Label</label>
<input class="form-control" placeholder="col-md-8" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-5">
<div class="form-group">
<label>Label</label>
<input class="form-control" placeholder="col-md-5" type="text"/>
</div>
</div>
<div class="col-md-7">
<div class="form-group">
<label>Label</label>
<input class="form-control" placeholder="col-md-7" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Label</label>
<input class="form-control" placeholder="col-md-6" type="text"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Label</label>
<input class="form-control" placeholder="col-md-6" type="text"/>
</div>
</div>
</div>
</div>
<div class="form-actions">
<div class="text-right">
<button class="btn btn-primary" type="submit">Submit <i class="ft-thumbs-up position-right"></i></button>
<button class="btn btn-warning" type="reset">Reset <i class="ft-refresh-cw position-right"></i></button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Grid With Label end -->
<!-- Left Right Offset start -->
<section class="left-right-offset" id="left-right-offset">
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Right Offset</h4>
<a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<form action="#">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<input class="form-control" placeholder="col-md-12" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-11">
<div class="form-group">
<input class="form-control" placeholder="col-md-11" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-10">
<div class="form-group">
<input class="form-control" placeholder="col-md-10" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-9">
<div class="form-group">
<input class="form-control" placeholder="col-md-9" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-8">
<div class="form-group">
<input class="form-control" placeholder="col-md-8" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-7">
<div class="form-group">
<input class="form-control" placeholder="col-md-7" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input class="form-control" placeholder="col-md-6" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-5">
<div class="form-group">
<input class="form-control" placeholder="col-md-5" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<input class="form-control" placeholder="col-md-4" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<input class="form-control" placeholder="col-md-3" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-2">
<div class="form-group">
<input class="form-control" placeholder="col-md-2" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-1">
<div class="form-group">
<input class="form-control" placeholder="1" type="text"/>
</div>
</div>
</div>
</div>
<div class="form-actions">
<div class="text-left">
<button class="btn btn-primary" type="submit">Submit <i class="ft-thumbs-up position-right"></i></button>
<button class="btn btn-warning" type="reset">Reset <i class="ft-refresh-cw position-right"></i></button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Left Offset</h4>
<a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<form action="#">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<input class="form-control" placeholder="col-md-12" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-11 ml-auto">
<div class="form-group">
<input class="form-control" placeholder="col-md-11 ml-auto" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-10 ml-auto">
<div class="form-group">
<input class="form-control" placeholder="col-md-10 ml-auto" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-9 ml-auto">
<div class="form-group">
<input class="form-control" placeholder="col-md-9 ml-auto" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-8 ml-auto">
<div class="form-group">
<input class="form-control" placeholder="col-md-8 ml-auto" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-7 ml-auto">
<div class="form-group">
<input class="form-control" placeholder="col-md-7 ml-auto" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 ml-auto">
<div class="form-group">
<input class="form-control" placeholder="col-md-6 ml-auto" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-5 ml-auto">
<div class="form-group">
<input class="form-control" placeholder="col-md-5 ml-auto" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4 ml-auto">
<div class="form-group">
<input class="form-control" placeholder="col-md-4 ml-auto" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-3 ml-auto">
<div class="form-group">
<input class="form-control" placeholder="col-md-3 ml-auto" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-2 ml-auto">
<div class="form-group">
<input class="form-control" placeholder="col-md-2 ml-auto0" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-1 ml-auto">
<div class="form-group">
<input class="form-control" placeholder="11" type="text"/>
</div>
</div>
</div>
</div>
<div class="form-actions">
<div class="text-right">
<button class="btn btn-primary" type="submit">Submit <i class="ft-thumbs-up position-right"></i></button>
<button class="btn btn-warning" type="reset">Reset <i class="ft-refresh-cw position-right"></i></button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Left Right Offset end -->
<!-- Centered Input start -->
<section class="checkbox-input-grid" id="checkbox-input-grid">
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Centered Input</h4>
<a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<form action="#">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<input class="form-control" placeholder="col-md-12" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-10 m-auto">
<div class="form-group">
<input class="form-control" placeholder="col-md-10 m-auto" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-8 m-auto">
<div class="form-group">
<input class="form-control" placeholder="col-md-8 m-auto" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 m-auto">
<div class="form-group">
<input class="form-control" placeholder="col-md-6 m-auto" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4 m-auto">
<div class="form-group">
<input class="form-control" placeholder="col-md-4 m-auto" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-2 m-auto">
<div class="form-group">
<input class="form-control" placeholder="col-md-2 m-auto" type="text"/>
</div>
</div>
</div>
<div class="row">
<label class="col-md-4 text-right">Label</label>
<div class="col-md-4">
<div class="form-group">
<input class="form-control" placeholder="col-md-4" type="text"/>
</div>
</div>
</div>
<div class="row">
<label class="col-md-3 text-right">Label</label>
<div class="col-md-6">
<div class="form-group">
<input class="form-control" placeholder="col-md-6" type="text"/>
</div>
</div>
</div>
<div class="row">
<label class="col-md-2 text-right">Label</label>
<div class="col-md-8">
<div class="form-group">
<input class="form-control" placeholder="col-md-8" type="text"/>
</div>
</div>
</div>
<div class="row">
<label class="col-md-1 text-right">Label</label>
<div class="col-md-10">
<div class="form-group">
<input class="form-control" placeholder="col-md-10" type="text"/>
</div>
</div>
</div>
</div>
<div class="form-actions">
<div class="text-center">
<button class="btn btn-primary" type="submit">Submit <i class="ft-thumbs-up position-right"></i></button>
<button class="btn btn-warning" type="reset">Reset <i class="ft-refresh-cw position-right"></i></button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Centered Input with Default label</h4>
<a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<form action="#">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label>Label</label>
<input class="form-control" placeholder="col-md-12" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-10 m-auto">
<div class="form-group">
<label>Label</label>
<input class="form-control" placeholder="col-md-10 m-auto" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-9 m-auto">
<div class="form-group">
<label>Label</label>
<input class="form-control" placeholder="col-md-8 m-auto" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 m-auto">
<div class="form-group">
<label>Label</label>
<input class="form-control" placeholder="col-md-6 m-auto" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4 m-auto">
<div class="form-group">
<label>Label</label>
<input class="form-control" placeholder="col-md-4 m-auto" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-2 m-auto">
<div class="form-group">
<label>Label</label>
<input class="form-control" placeholder="col-md-2 m-auto" type="text"/>
</div>
</div>
</div>
</div>
<div class="form-actions">
<div class="text-center">
<button class="btn btn-primary" type="submit">Submit <i class="ft-thumbs-up position-right"></i></button>
<button class="btn btn-warning" type="reset">Reset <i class="ft-refresh-cw position-right"></i></button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Centered Input end -->
<!-- Grid with Row Label start -->
<section class="grid-with-inline-row-label" id="grid-with-inline-row-label">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Grid With Row Label</h4>
<a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<form action="#">
<div class="form-body">
<div class="form-group">
<div class="row">
<label class="col-lg-1">Label</label>
<div class="col-lg-11">
<div class="row">
<div class="col-md-1">
<input class="form-control" placeholder="col-md-1" type="text"/>
</div>
<div class="col-md-11">
<input class="form-control" placeholder="col-md-11" type="text"/>
</div>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<label class="col-lg-1">Label</label>
<div class="col-lg-11">
<div class="row">
<div class="col-md-2">
<input class="form-control" placeholder="col-md-2" type="text"/>
</div>
<div class="col-md-10">
<input class="form-control" placeholder="col-md-10" type="text"/>
</div>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<label class="col-lg-1">Label</label>
<div class="col-lg-11">
<div class="row">
<div class="col-md-3">
<input class="form-control" placeholder="col-md-3" type="text"/>
</div>
<div class="col-md-9">
<input class="form-control" placeholder="col-md-9" type="text"/>
</div>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<label class="col-lg-1">Label</label>
<div class="col-lg-11">
<div class="row">
<div class="col-md-4">
<input class="form-control" placeholder="col-md-4" type="text"/>
</div>
<div class="col-md-8">
<input class="form-control" placeholder="col-md-8" type="text"/>
</div>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<label class="col-lg-1">Label</label>
<div class="col-lg-11">
<div class="row">
<div class="col-md-5">
<input class="form-control" placeholder="col-md-5" type="text"/>
</div>
<div class="col-md-7">
<input class="form-control" placeholder="col-md-7" type="text"/>
</div>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<label class="col-lg-1">Label</label>
<div class="col-lg-11">
<div class="row">
<div class="col-md-6">
<input class="form-control" placeholder="col-md-6" type="text"/>
</div>
<div class="col-md-6">
<input class="form-control" placeholder="col-md-6" type="text"/>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="form-actions">
<div class="text-right">
<button class="btn btn-primary" type="submit">Submit <i class="ft-thumbs-up position-right"></i></button>
<button class="btn btn-warning" type="reset">Reset <i class="ft-refresh-cw position-right"></i></button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Grid with Row Label end -->
<!-- Grid With Inline Labels start -->
<section class="grid-with-inline-labels" id="grid-with-inline-labels">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Grid With Inline Input Label</h4>
<a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<form action="#">
<div class="form-body">
<div class="form-group">
<div class="row">
<div class="col-md-2">
<div class="row">
<div class="col-md-8">
<input class="form-control" placeholder="col-md-2" type="text"/>
</div>
<label class="col-md-4">Label </label>
</div>
</div>
<div class="col-md-10">
<div class="row">
<label class="col-md-4 text-right">Label </label>
<div class="col-md-8">
<input class="form-control" placeholder="col-md-10" type="text"/>
</div>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-md-3">
<div class="row">
<div class="col-md-8">
<input class="form-control" placeholder="col-md-3" type="text"/>
</div>
<label class="col-md-4">Label </label>
</div>
</div>
<div class="col-md-9">
<div class="row">
<label class="col-md-4 text-right">Label </label>
<div class="col-md-8">
<input class="form-control" placeholder="col-md-9" type="text"/>
</div>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-md-4">
<div class="row">
<div class="col-md-8">
<input class="form-control" placeholder="col-md-4" type="text"/>
</div>
<label class="col-md-4">Label </label>
</div>
</div>
<div class="col-md-8">
<div class="row">
<label class="col-md-4 text-right">Label </label>
<div class="col-md-8">
<input class="form-control" placeholder="col-md-8" type="text"/>
</div>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-md-5">
<div class="row">
<div class="col-md-8">
<input class="form-control" placeholder="col-md-5" type="text"/>
</div>
<label class="col-md-4">Label </label>
</div>
</div>
<div class="col-md-7">
<div class="row">
<label class="col-md-4 text-right">Label </label>
<div class="col-md-8">
<input class="form-control" placeholder="col-md-7" type="text"/>
</div>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-md-6">
<div class="row">
<div class="col-md-8">
<input class="form-control" placeholder="col-md-6" type="text"/>
</div>
<label class="col-md-4">Label </label>
</div>
</div>
<div class="col-md-6">
<div class="row">
<label class="col-md-4 text-right">Label </label>
<div class="col-md-8">
<input class="form-control" placeholder="col-md-6" type="text"/>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="form-actions">
<div class="text-right">
<button class="btn btn-primary" type="submit">Submit <i class="ft-thumbs-up position-right"></i></button>
<button class="btn btn-warning" type="reset">Reset <i class="ft-refresh-cw position-right"></i></button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Grid With Inline Labels end -->
<!-- Multiple Inputs with Label start -->
<section class="multiple-input-with-labels" id="multiple-input-with-labels">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Multiple Input With Default Label</h4>
<a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<form action="#">
<div class="form-body">
<label>Label </label>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<input class="form-control" placeholder="First Input &amp; First Row" type="text"/>
</div>
<div class="form-group">
<input class="form-control" placeholder="First Input &amp; Second Row" type="text"/>
</div>
</div>
<div class="col-md-8">
<div class="form-group">
<input class="form-control" placeholder="Second Input &amp; First Row" type="text"/>
</div>
<div class="form-group">
<input class="form-control" placeholder="Second Input &amp; Second Row" type="text"/>
</div>
</div>
</div>
<label>Multiple width Input Label</label>
<div class="row">
<div class="col-md-7">
<div class="form-group">
<input class="form-control" placeholder="First Input &amp; First Row" type="text"/>
</div>
</div>
<div class="col-md-5">
<div class="form-group">
<input class="form-control" placeholder="Second Input &amp; First Row" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-8">
<div class="form-group">
<input class="form-control" placeholder="First Input &amp; Second Row" type="text"/>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<input class="form-control" placeholder="Second Input &amp; Second Row" type="text"/>
</div>
</div>
</div>
</div>
<div class="form-actions">
<div class="text-right">
<button class="btn btn-primary" type="submit">Submit <i class="ft-thumbs-up position-right"></i></button>
<button class="btn btn-warning" type="reset">Reset <i class="ft-refresh-cw position-right"></i></button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Multiple Inputs with Label end -->
<!-- Multiple Inputs with Inline Label start -->
<section class="multiple-input-with-inline-labels" id="multiple-input-with-inline-labels">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Multiple Input With Inline Label</h4>
<a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<form action="#">
<div class="form-body">
<div class="form-group row">
<label class="col-md-2">Label </label>
<div class="col-md-10">
<div class="row">
<div class="col-md-4">
<div class="form-group">
<input class="form-control" placeholder="First Input &amp; First Row" type="text"/>
</div>
<div class="form-group">
<input class="form-control" placeholder="First Input &amp; Second Row" type="text"/>
</div>
</div>
<div class="col-md-8">
<div class="form-group">
<input class="form-control" placeholder="Second Input &amp; First Row" type="text"/>
</div>
<div class="form-group">
<input class="form-control" placeholder="Second Input &amp; Second Row" type="text"/>
</div>
</div>
</div>
</div>
</div>
<div class="form-group row">
<label class="col-md-2">Multiple width Input Label </label>
<div class="col-md-10">
<div class="row">
<div class="col-md-7">
<div class="form-group">
<input class="form-control" placeholder="First Input &amp; First Row" type="text"/>
</div>
</div>
<div class="col-md-5">
<div class="form-group">
<input class="form-control" placeholder="Second Input &amp; First Row" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-8">
<div class="form-group">
<input class="form-control" placeholder="First Input &amp; Second Row" type="text"/>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<input class="form-control" placeholder="Second Input &amp; Second Row" type="text"/>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="form-actions">
<div class="text-right">
<button class="btn btn-primary" type="submit">Submit <i class="ft-thumbs-up position-right"></i></button>
<button class="btn btn-warning" type="reset">Reset <i class="ft-refresh-cw position-right"></i></button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Multiple Inputs with Inline Label end -->
</div>
</div>
</div>