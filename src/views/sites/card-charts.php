<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\CardChartsAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Advance Chart Cards</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="card-charts.html#">Components</a>
</li>
<li class="breadcrumb-item active">Advance Charts
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="card-charts.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="card-charts.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="card-charts.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="card-charts.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Charts section start -->
<section id="charts-section">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Charts</h4>
</div>
</div>
<div class="row">
<div class="col-xl-4 col-lg-12">
<div class="card text-white bg-info">
<div class="card-content">
<div class="position-relative">
<div class="chart-title position-absolute mt-2 ml-2 white">
<h1 class="display-4 text-white">84%</h1>
<span>Employees Satisfied</span>
</div>
<canvas class="height-450 block" id="emp-satisfaction"></canvas>
<div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3 white">
<a class="btn bg-info bg-darken-3 mr-1 white" href="card-charts.html#">Statistics <i class="ft-bar-chart"></i></a>                      for the last year.
                    </div>
</div>
</div>
</div>
</div>
<div class="col-xl-8 col-lg-12">
<div class="card">
<div class="card-content">
<div class="row">
<div class="col-lg-3 col-md-12">
<div class="chart-stats text-center my-3">
<div class="new-users my-2 overflow-hidden clearfix">
<span>New Users</span>
<h1 class="display-4">25%</h1>
</div>
<div class="returning-users my-2 overflow-hidden">
<span>Returning Users</span>
<h1 class="display-4">159</h1>
</div>
<div class="page-views my-2 overflow-hidden">
<span>Page Views</span>
<h1 class="display-4">246</h1>
</div>
</div>
</div>
<div class="col-lg-9 col-md-12">
<div class="card-body">
<ul class="list-inline text-center">
<li class="mr-1">
<h6><i class="la la-circle danger"></i>
<span>iOS</span>
</h6>
</li>
<li class="mr-1">
<h6><i class="la la-circle warning"></i>
<span>Windows</span>
</h6>
</li>
<li class="mr-1">
<h6><i class="la la-circle success"></i>
<span>Android</span>
</h6>
</li>
</ul>
<div class="chartjs">
<canvas class="height-350" id="line-stacked-area"></canvas>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-4 col-lg-12">
<div class="card">
<div class="card-content">
<div class="earning-chart position-relative">
<div class="chart-title position-absolute mt-2 ml-2">
<h1 class="display-4">$9865</h1>
<span class="text-muted">Total Earning</span>
</div>
<canvas class="height-450 block" id="earning-chart"></canvas>
<div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3">
<a class="btn bg-danger mr-1 white" href="card-charts.html#">Statistics <i class="ft-bar-chart"></i></a>
<span class="text-muted">for the <a class="danger darken-2" href="card-charts.html#">last year.</a></span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-12">
<div class="card">
<div class="card-content">
<div class="card-body sales-growth-chart">
<div class="chart-title mb-2">
<h1 class="display-4">52%</h1>
<span class="text-muted">Sales Growth Rate</span>
</div>
<div class="height-300" id="sales-growth-chart"></div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-12">
<div class="card">
<div class="card-content bg-success">
<div class="card-body sales-growth-chart">
<div class="height-250" id="mobile-sales"></div>
</div>
</div>
<div class="card-footer">
<div class="chart-title mb-1">
<span class="text-muted">Total mobile units sold and total earning statistics.</span>
</div>
<ul class="list-inline text-center clearfix mt-2">
<li class="mr-3">
<span class="text-muted">Total Units Sold</span>
<h2 class="block">18.6 k</h2>
</li>
<li>
<span class="text-muted">Total Earnings</span>
<h2 class="block">64.54 M</h2>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-4 col-lg-12">
<div class="card">
<div class="card-content">
<div class="card-body sales-growth-chart">
<div class="height-300" id="monthly-sales"></div>
</div>
</div>
<div class="card-footer">
<div class="chart-title mb-1 text-center">
<span class="text-muted">Total monthly Sales.</span>
</div>
<div class="chart-stats text-center">
<a class="btn btn-sm btn-info mr-1" href="card-charts.html#">Statistics <i class="ft-bar-chart"></i></a>
<span class="text-muted">for the last year.</span>
</div>
</div>
</div>
</div>
<div class="col-xl-8 col-lg-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<canvas class="height-400" id="posts-visits"></canvas>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-7 col-lg-12">
<div class="card">
<div class="card-content ">
<div class="height-250 position-relative" id="cost-revenue"></div>
</div>
<div class="card-footer">
<div class="row mt-1">
<div class="col-3 text-center">
<h6 class="text-muted">Total Products</h6>
<h2 class="block font-weight-normal">18.6 k</h2>
<div class="progress progress-sm mt-1 mb-0 box-shadow">
<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 70%"></div>
</div>
</div>
<div class="col-3 text-center">
<h6 class="text-muted">Total Sales</h6>
<h2 class="block font-weight-normal">64.54 M</h2>
<div class="progress progress-sm mt-1 mb-0 box-shadow">
<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 60%"></div>
</div>
</div>
<div class="col-3 text-center">
<h6 class="text-muted">Total Cost</h6>
<h2 class="block font-weight-normal">24.38 B</h2>
<div class="progress progress-sm mt-1 mb-0 box-shadow">
<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 40%"></div>
</div>
</div>
<div class="col-3 text-center">
<h6 class="text-muted">Total Revenue</h6>
<h2 class="block font-weight-normal">36.72 M</h2>
<div class="progress progress-sm mt-1 mb-0 box-shadow">
<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 90%"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-5 col-lg-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<canvas height="360" id="advertisement-expense"></canvas>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-4 col-lg-12">
<div class="card bg-danger">
<div class="card-content">
<canvas class="height-350 px-2 pt-2" id="global-sales"></canvas>
</div>
</div>
</div>
<div class="col-xl-8 col-lg-12">
<div class="card bg-success">
<div class="card-content">
<div class="card-body">
<canvas class="height-300" id="revenue-comparision"></canvas>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Charts section end -->
</div>
</div>
</div>