<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ScrumboardAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Scrum Board</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item active">Scrum Board
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="scrumboard.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="scrumboard.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="scrumboard.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="scrumboard.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Sample Project Scrumboard -->
<section class="row" id="sample-project-scrumboard">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Sample Project Scrumboard</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body">
<div class="overflow-hidden">
<div class="lobilists-wrapper" id="todo-lists-basic-demo"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!--/ Sample Project Scrumboard -->
<!--Custom controls-->
<section class="row" id="custom-controls">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Custom controls</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body">
<div class="card-text">
<p>Custom controls allow you to show/hide controls on list card.</p>
<div class="overflow-hidden">
<div class="lobilists-wrapper" id="todo-lists-demo-controls"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!--/ Custom controls-->
<!--Disabled drag & drop-->
<section class="row" id="disabled-drag-drop">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Disabled drag &amp; drop</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body">
<div class="card-text">
<p>Disabled drag &amp; drop feature for list card.</p>
<div class="overflow-hidden">
<div class="lobilists-wrapper" id="todo-lists-demo-sorting"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!--/ Disabled drag & drop-->
</div>
