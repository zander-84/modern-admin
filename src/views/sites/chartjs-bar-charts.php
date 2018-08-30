<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ChartjsBarChartsAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Chartjs Bar Chart</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="chartjs-bar-charts.html#">Chartjs</a>
</li>
<li class="breadcrumb-item active">Bar Chart
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="chartjs-bar-charts.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="chartjs-bar-charts.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="chartjs-bar-charts.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="chartjs-bar-charts.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Bar charts section start -->
<section id="chartjs-bar-charts">
<!-- Bar Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Bar Chart</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
<canvas height="400" id="bar-chart"></canvas>
</div>
</div>
</div>
</div>
</div>
<!-- Column Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Column Chart</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
<canvas height="400" id="column-chart"></canvas>
</div>
</div>
</div>
</div>
</div>
<!-- Bar Stacked Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Bar Stacked Chart</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
<canvas height="400" id="bar-stacked"></canvas>
</div>
</div>
</div>
</div>
</div>
<!-- Column Stacked Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Column Stacked Chart</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
<canvas height="400" id="column-stacked"></canvas>
</div>
</div>
</div>
</div>
</div>
<!-- Bar Multi Axis Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Bar Multi Axis Chart</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
<canvas height="600" id="bar-multi-axis"></canvas>
</div>
</div>
</div>
</div>
</div>
<!-- Column Multi Axis Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Column Multi Axis Chart</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
<canvas height="600" id="column-multi-axis"></canvas>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Bar charts section end -->
</div>
</div>
</div>