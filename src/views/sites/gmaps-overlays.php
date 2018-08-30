<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\GmapsOverlaysAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">gmaps - Overlays</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="gmaps-overlays.html#">gmaps</a>
</li>
<li class="breadcrumb-item active">Overlays
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="gmaps-overlays.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="gmaps-overlays.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="gmaps-overlays.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="gmaps-overlays.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- gmaps overlays section start -->
<section id="gmaps-overlays">
<!-- Polylines -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Polylines</h4>
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
<p class="card-text">The path of the polyline is defined by an array of array of two
                      (latitude and longitude).</p>
<div class="height-400" id="polylines"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Overlays -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Overlays</h4>
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
                      <strong>latitude</strong>,
                      <strong>longitude</strong> and the
                      <strong>content</strong> of the map overlay.</p>
<p class="card-text">Also, you must define a
                      <strong>height</strong> to the
                      <strong>content</strong>.</p>
<p class="card-text">Also, you can define a <code>verticalAlign</code>, which can
                      be <code>top</code>, <code>middle</code> or <code>bottom</code>,
                      and <code>horizontalAlign</code>, which can be <code>left</code>,
                      <code>center</code> or <code>right</code>.</p>
<div class="height-400" id="overlays"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Polygons -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Polygons</h4>
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
<p class="card-text">The path of a polygon can be defined as an array of:</p>
<ul>
<li><code>google.maps.LatLng</code> objects, or
                      </li>
<li>arrays of coordinates, with index 0 and 1 as, respectively,
                        <b>latitude</b> and <b>longitude</b> (as in the example)
                      </li>
</ul>
<p class="card-text">Also, you can add a GeoJSON Polygon or MultiPolygon path using
                      <code>useGeoJSON: true</code>.</p>
<div class="height-400" id="polygons"></div>
</div>
</div>
</div>
</div>
</div>
<!-- GeoJSON Polygons -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">GeoJSON Polygons</h4>
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
<p class="card-text">The GeoJSON Polygon should be surrounded by brackets, according
                      the <a href="http://geojson.org/geojson-spec.html#id7">specification</a>.</p>
<div class="height-400" id="geojson-polygons"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // gmaps overlays section end -->
</div>
</div>
</div>