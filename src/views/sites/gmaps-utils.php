<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\GmapsUtilsAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">gmaps - Utils</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="gmaps-utils.html#">gmaps</a>
</li>
<li class="breadcrumb-item active">Utils
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="gmaps-utils.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="gmaps-utils.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="gmaps-utils.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="gmaps-utils.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- gmaps utils section start -->
<section id="gmaps-utils">
<!-- Context Menu -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Context Menu</h4>
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
<p class="card-text">You must define the
                      <strong>control</strong> that the context menu is attached (
                      <strong>map</strong> or
                      <strong>marker</strong>) and an array of
                      <strong>options</strong> with <code>title</code>, <code>name</code>                      and <code>action</code> Inside <code>action</code> you can
                      use <code>this</code> for the GMaps.js object (<code>map</code>                      in this case) and MouseEvent object <code>e</code>.</p>
<div class="height-400" id="context-menu"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Geofences -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Geofences</h4>
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
<p>You must define an
                      <strong>outside</strong> callback, which will use this <code>marker</code>                      and its <code>fence</code>.</p>
<p>You also can use <code>checkMarkerGeofence</code> or <code>checkGeofence</code>                      methods.</p>
<div class="height-400" id="geofences"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Custom Controls -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Custom Controls</h4>
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
<p class="card-text">You can use the following positions:</p>
<ul>
<li>top_center</li>
<li>top_left</li>
<li>top_right</li>
<li>left_top</li>
<li>right_top</li>
<li>left_center</li>
<li>right_center</li>
<li>left_bottom</li>
<li>right_bottom</li>
<li>bottom_center</li>
<li>bottom_left</li>
<li>bottom_right</li>
</ul>
<p class="card-text">You can learn more of custom controls <a href="https://developers.google.com/maps/documentation/javascript/controls">here</a>.</p>
<div class="height-400" id="custom-controls"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Fusion Table Layers -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Fusion Table Layers</h4>
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
<p class="card-text">You can learn more about Fusion Table layers <a href="https://developers.google.com/maps/documentation/javascript/layers#FusionTables">here</a>.</p>
<div class="height-400" id="fusion-table-layers"></div>
</div>
</div>
</div>
</div>
</div>
<!-- KML and GeoRSS Layers -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">KML and GeoRSS Layers</h4>
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
<p class="card-text">You can learn more about KML and GeoRSS layers <a href="https://developers.google.com/maps/documentation/javascript/layers#KMLLayers">here</a>.</p>
<div class="height-400" id="kml-layers"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Map Types -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Map Types</h4>
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
<p class="card-text">You can define many map types from external map services, like
                      OpenStreetMap:
                    </p>
<p class="card-text">You must define a function called <code>getTileUrl</code>, which
                      returns a tile URL according the coordenates in the map.</p>
<div class="height-400" id="map-types"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Overlay Map Types -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Overlay Map Types</h4>
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
<p class="card-text">You must define a function called <code>getTile</code>, which
                      returns a HTML element used to fill the map overlay. Also,
                      you have to set an overlay <code>index</code>, which place
                      the overlay on top of the base map, according this index.</p>
<p class="card-text">You can remove an overlay map type using <code>removeOverlayMapType(overlay_index)</code>.</p>
<div class="height-400" id="overlay-map-types"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Street View Panoramas -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Street View Panoramas</h4>
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
                      <strong>longitude</strong> of the panorama's position.</p>
<p>You also can define a
                      <strong>pov (heading, pitch and zoom)</strong> and others values defined
                      <a href="https://developers.google.com/maps/documentation/javascript/reference#StreetViewPanoramaOptions">in the official documentation</a>.</p>
<p>In the same way, you can define events, like in the <a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/map_events.html">Map events</a>                      example. The events allowed are defined <a href="https://developers.google.com/maps/documentation/javascript/reference#StreetViewPanorama">in the official documentation ("Events" section)</a>.</p>
<div class="height-400" id="street-view-panoramas"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Interacting with UI -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Interacting with UI</h4>
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
<p class="card-text">A line chart that is rendered within the browser using SVG or
                      VML. Displays tooltips when hovering over points.</p>
<div class="row">
<div class="col-lg-8 col-md-12">
<div class="height-400" id="interact-ui"></div>
</div>
<div class="col-lg-2 col-md-6">
<h5>Using indices</h5>
<ul id="markers-with-index">
</ul>
</div>
<div class="col-lg-2 col-md-6">
<h5>Using coordinates</h5>
<ul id="markers-with-coordinates">
</ul>
</div>
</div>
<script id="edit_marker_template" type="text/html">
                      <h4>Edit Marker</h4>
                      <form class="edit_marker" action="#" method="post" data-marker-index="{{index}}">
                        <p>
                          <label for="marker_{{index}}_lat">Latitude:</label>
                          <input type="text" id="marker_{{index}}_lat" value="{{lat}}" />
                        </p>
                        <p>
                          <label for="marker_{{index}}_lng">Longitude:</label>
                          <input type="text" id="marker_{{index}}_lng" value="{{lng}}" />
                        </p>
                        <input type="submit" value="Update position" />
                      </form>
                    </script>
</div>
</div>
</div>
</div>
</div>
<!-- Working with JSON -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Working with JSON</h4>
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
<p class="card-text">A line chart that is rendered within the browser using SVG or
                      VML. Displays tooltips when hovering over points.</p>
<div class="row">
<div class="col-lg-8 col-md-12">
<div class="height-400" id="json"></div>
</div>
<div class="col-lg-4 col-md-12">
<h5>Results for 'Ceviche' near 'Lima, Peru':</h5>
<ul id="results"></ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // gmaps utils section end -->
</div>
