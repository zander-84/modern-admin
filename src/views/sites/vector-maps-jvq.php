<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\VectorMapsJvqAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">jQuery Vector Maps</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="vector-maps-jvq.html#">Maps</a>
</li>
<li class="breadcrumb-item"><a href="vector-maps-jvq.html#">Vector Maps</a>
</li>
<li class="breadcrumb-item active">jQuery Vector Maps
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="vector-maps-jvq.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="vector-maps-jvq.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="vector-maps-jvq.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="vector-maps-jvq.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- jvq maps section start -->
<section id="jvq-maps">
<!-- Continents -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Continents</h4>
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
<div class="card-body height-400">
<div id="continents">
<!-- Asia -->
<h4 class="continent-tab" id="asia">Asia</h4>
<div class="continent-map">
<div class="jqvmap-area" id="continent-asia"></div>
</div>
<!-- Europe -->
<h4 class="continent-tab" id="europe">Europe</h4>
<div class="continent-map">
<div class="jqvmap-area" id="continent-europe"></div>
</div>
<!-- Australia -->
<h4 class="continent-tab" id="australia">Australia</h4>
<div class="continent-map">
<div class="jqvmap-area" id="continent-australia"></div>
</div>
<!-- Africa -->
<h4 class="continent-tab" id="africa">Africa</h4>
<div class="continent-map">
<div class="jqvmap-area" id="continent-africa"></div>
</div>
<!-- North America -->
<h4 class="continent-tab" id="northamerica">North America</h4>
<div class="continent-map">
<div class="jqvmap-area" id="continent-northamerica"></div>
</div>
<!-- South America -->
<h4 class="continent-tab" id="southamerica">South America</h4>
<div class="continent-map">
<div class="jqvmap-area" id="continent-southamerica"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Multi Select Region -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Multi Select Region</h4>
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
<div class="card-body height-400">
<div class="jqvmap-area" id="multi-select-region"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Custom Pins -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Custom Pins</h4>
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
<div class="card-body height-400">
<div class="jqvmap-area" id="custom-pins"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Inactive Regions -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Inactive Regions</h4>
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
<div class="height-400" id="inactive-regions"></div>
</div>
</div>
</div>
</div>
</div>
<!-- World Map -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">World Map</h4>
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
<div class="card-body height-400">
<div class="jqvmap-area" id="world-map"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // jvq maps section end -->
</div>
