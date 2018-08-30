<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\GmapsServicesAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">gmaps - Services</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="gmaps-services.html#">gmaps</a>
</li>
<li class="breadcrumb-item active">Services
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="gmaps-services.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="gmaps-services.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="gmaps-services.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="gmaps-services.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- gmaps services section start -->
<section id="gmaps-services">
<!-- Geolocation -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Geolocation</h4>
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
<p class="card-text"><code>GMaps.geolocate</code> supports 4 functions:</p>
<ul>
<li><code>success</code> (required): fires when geolocation has
                        been successful</li>
<li><code>error</code> (required): fires when geolocation has not
                        been done</li>
<li><code>not_supported</code> (required): fires when geolocation
                        is not supported by the browser</li>
<li><code>always</code> (optional): fires always after every scenario
                        described above.</li>
</ul>
<div class="height-400" id="geolocation"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Geocoding -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Geocoding</h4>
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
<p class="card-text">You can define either <code>address</code> or <code>lat</code>                      and <code>lng</code>. Also, you must define <code>callback</code>,
                      which will use <code>results</code> of geocoding and <code>status</code>.</p>
<form id="geocoding_form" method="post">
<label for="address">Address:</label>
<div class="input-group mb-1">
<input id="address" name="address" type="text"/>
<div class="input-group-append">
<input class="btn btn-primary" type="submit" value="Search"/>
</div>
</div>
</form>
<div class="height-400" id="geocoding"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // gmaps services section end -->
</div>
</div>
</div>