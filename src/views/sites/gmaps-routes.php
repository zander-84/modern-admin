<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\GmapsRoutesAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">gmaps - Routes</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="gmaps-routes.html#">gmaps</a>
</li>
<li class="breadcrumb-item active">Routes
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="gmaps-routes.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="gmaps-routes.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="gmaps-routes.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="gmaps-routes.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- gmaps routes section start -->
<section id="gmaps-routes">
<!-- Routes -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Routes</h4>
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
<p class="card-text">You must define two points (
                      <strong>origin</strong> and
                      <strong>destination</strong>) and color, opacity and weight of the
                      route in the map.</p>
<p class="card-text">Also, you can define a <code>travelMode</code>: <code>driving</code>,
                      <code>bicycling</code> or <code>walking</code>. Default is
                      <code>walking</code></p>
<div class="height-400" id="routes"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Routes Advance -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Routes Advance</h4>
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
<p class="card-text">Same as <code>drawRoute</code>, you must define an
                      <strong>origin</strong>,
                      <strong>destination</strong> and <code>travelMode</code>. Also, you
                      must define the function that GMaps will call every step in
                      the route.</p>
<div class="row">
<div class="height-400 w-100" id="routes-advance"></div>
</div>
<div class="row">
<div class="col-2">
<a class="btn btn-primary mt-1" href="gmaps-routes.html#" id="start_travel">Start Travel</a>
</div>
<div class="col-10">
<ul id="instructions">
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // gmaps routes section end -->
</div>
