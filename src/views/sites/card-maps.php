<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\CardMapsAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Advance Maps</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="card-maps.html#">Components</a>
</li>
<li class="breadcrumb-item active">Advance Maps
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="card-maps.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="card-maps.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="card-maps.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="card-maps.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Vector maps section start -->
<section id="vector-maps">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Vector Maps</h4>
<p>Statistics on vector maps.</p>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="card box-shadow-0">
<div class="card-content">
<div class="row">
<div class="col-xl-9 col-lg-12">
<div class="height-500" id="world-map-markers"></div>
</div>
<div class="col-xl-3 col-lg-12">
<div class="card-body">
<h4 class="card-title pt-1 text-center">Sales All Over The World</h4>
<div class="row">
<div class="col-xl-12 col-lg-4 col-sm-12 pl-1">
<div class="media">
<div class="media-body">
<span class="text-bold-500">Total Orders <i class="ft-arrow-down warning"></i>
<span class="warning">4.27%</span>
</span>
<h2 class="mb-0">789</h2>
</div>
</div>
<div class="height-100" id="map-total-orders"></div>
</div>
<div class="col-xl-12 col-lg-4 col-sm-12">
<div class="media">
<div class="media-body">
<span class="text-bold-500">Total Profit <i class="ft-arrow-up success"></i>
<span class="teal accent-3">6.89%</span>
</span>
<h2 class="mb-0">$47.8K</h2>
</div>
</div>
<div class="height-100" id="map-total-profit"></div>
</div>
<div class="col-xl-12 col-lg-4 col-sm-12">
<div class="sales">
<div class="sales-today mb-1">
<p class="m-0">Today
                                  <span class="sucess float-right"><i class="ft-arrow-up success"></i> 6.89%</span>
</p>
<div class="progress mt-1 mb-0" style="height: 7px;">
<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar bg-success" role="progressbar" style="width: 70%"></div>
</div>
</div>
<div class="sales-yesterday">
<p class="m-0">Yesterday
                                  <span class="warning float-right"><i class="ft-arrow-down warning"></i> 4.18%</span>
</p>
<div class="progress mt-1 mb-0" style="height: 7px;">
<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar bg-warning" role="progressbar" style="width: 60%"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Vector maps section end -->
</div>
</div>
</div>