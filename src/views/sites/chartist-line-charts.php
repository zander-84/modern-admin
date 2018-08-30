<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ChartistLineChartsAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Chartist line chart</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="chartist-line-charts.html#">Chartist Charts</a>
</li>
<li class="breadcrumb-item active">Chartist line chart
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="chartist-line-charts.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="chartist-line-charts.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="chartist-line-charts.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="chartist-line-charts.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- chartist line charts section start -->
<section id="chartist-line-charts">
<!-- Simple Line Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Simple Line Chart</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">An example of a simple line chart with three series.</p>
<div class="height-400" id="line-chart"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Holes In Data -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Holes In Data</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Chartist does not freak out if you have holes in your data. Instead
                      it will render the lines in segments and handles these holes
                      gracefully. This also allows you to introduce a line at a later
                      point or to terminate the series before others.</p>
<div class="height-400" id="holes-in-data"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Only Whole Numbers -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Only Whole Numbers</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">You're dealing with series that contain only whole numbers? It
                      looks weird that Chartist is creating a scale that contains
                      fractions even if your data does not? No problem! Tell the
                      Chartist guy to only use integers and he'll do the math!</p>
<div class="height-400" id="whole-numbers"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Line Scatter Diagram -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Line Scatter Diagram</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">This advanced example uses a line chart to draw a scatter diagram.
                      The data object is created with a functional style random mechanism.
                      There is a mobile first responsive configuration using the
                      responsive options to show less labels on small screens.</p>
<div class="height-400" id="line-scatter"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Line Chart With Area -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Line Chart With Area</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">This chart uses the showArea option to draw line, dots but also
                      an area shape. Use the low option to specify a fixed lower
                      bound that will make the area expand. You can also use the
                      areaBase property to specify a data value that will be used
                      to determine the area shape base position (this is 0 by default).</p>
<div class="height-400" id="area"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Bi-Polar Line Chart With Area Only -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Bi-Polar Line Chart With Area Only</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">You can also only draw the area shapes of the line chart. Area
                      shapes will always be constructed around their areaBase (that
                      can be configured in the options) which also allows you to
                      draw nice bi-polar areas.</p>
<div class="height-400" id="bipolar-area"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Series Overrides -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Series Overrides</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">By naming your series using the series object notation with a
                      name property, you can enable the individual configuration
                      of series specific settings. <code>showLine</code>, <code>showPoint</code>,
                      <code>showArea</code> and even the smoothing function can be
                      overridden per series! And guess what? You can even override
                      those series settings in the responsive configuration! Check
                      the example code for more details.</p>
<div class="height-400" id="series-overrides"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // chartist line charts section end -->
</div>
</div>
</div>