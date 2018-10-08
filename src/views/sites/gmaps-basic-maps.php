<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\GmapsBasicMapsAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">gmaps - Basic Maps</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="gmaps-basic-maps.html#">gmaps</a>
</li>
<li class="breadcrumb-item active">Basic Maps
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="gmaps-basic-maps.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="gmaps-basic-maps.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="gmaps-basic-maps.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="gmaps-basic-maps.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- gmaps basic maps section start -->
<section id="gmaps-basic-maps">
<!-- Basic Map -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Map</h4>
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
<p class="card-text">You must define
                      <strong>container ID</strong>,
                      <strong>latitude</strong> and
                      <strong>longitude</strong> of the map's center.</p>
<p class="card-text">You also can define
                      <strong>zoom</strong>,
                      <strong>width</strong> and
                      <strong>height</strong>. By default, zoom is 15. Width an height in
                      a CSS class will replace these values.</p>
<p class="card-text">Map types are defined in the
                      <strong>mapType</strong> property. Allowed values are:
                      <strong>roadmap</strong> (default),
                      <strong>satellite</strong>,
                      <strong>hybrid</strong> and
                      <strong>terrain</strong>.</p>
<div class="height-400" id="basic-map"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Map Events -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Map Events</h4>
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
<p class="card-text">Click or drag this map to see attached events. You can check
                      the list of map events <a href="https://developers.google.com/maps/documentation/javascript/reference#Map">here</a>.</p>
<div class="height-400" id="map-events"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Markers -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Markers</h4>
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
<p class="card-text">
<strong>Latitude</strong> and
                      <strong>Longitude</strong> are required. You can also attach additional
                      information with <code>details</code>, which will be passed
                      to Event object (<code>e</code>) in the events previously defined.</p>
<div class="height-400" id="markers"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // gmaps basic maps section end -->
</div>
