<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\CardInteractiveAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Advance Interactive Cards</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="card-interactive.html#">Components</a>
</li>
<li class="breadcrumb-item active">Advance Interactive Cards
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="card-interactive.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="card-interactive.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="card-interactive.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="card-interactive.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Interactive charts section start -->
<section id="interactive-charts">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4>Interactive Charts</h4>
<hr/>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Live Visits</h4>
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
<div class="card-content collapse show">
<div class="row">
<div class="col-xl-8 col-lg-12">
<div class="card-body">
<div class="rickshaw-wrap">
<div id="live-visits"></div>
<div class="rickshaw-legend-wrap">
<div id="area-chart-legend"></div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-12">
<div class="text-center">
<canvas id="live-visits-doughnut"></canvas>
</div>
<div class="table-responsive mt-2">
<table class="table table-striped mb-0">
<thead>
<tr>
<th>#</th>
<th>Continent</th>
<th>Visits</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
<td>Asia</td>
<td>15684</td>
</tr>
<tr>
<th scope="row">2</th>
<td>Africa</td>
<td>54789</td>
</tr>
<tr>
<th scope="row">3</th>
<td>America</td>
<td>89756</td>
</tr>
<tr>
<th scope="row">4</th>
<td>Europe</td>
<td>23489</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Interactive charts section end -->
</div>
</div>
</div>