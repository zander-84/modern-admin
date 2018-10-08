<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\GoogleScatterChartsAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">google Scatter Chart</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="google-scatter-charts.html#">Google Charts</a>
</li>
<li class="breadcrumb-item active">scatter Chart
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="google-scatter-charts.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="google-scatter-charts.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="google-scatter-charts.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="google-scatter-charts.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Google scatter charts section start -->
<section id="google-scatter-charts">
<!-- Scatter Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Scatter Chart</h4>
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
<div class="card-body">
<div class="card-body">
<p class="card-text">Scatter charts plot points on a graph. When the user hovers over
                      the points, tooltips are displayed with more information. google
                      scatter charts are rendered within the browser using SVG or
                      VML depending on browser capabilities.</p>
<div id="scatter-chart"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Scatter Diff Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Scatter Diff Chart</h4>
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
<div class="card-body">
<div class="card-body">
<p class="card-text">To demonstrate the diff scatter chart, let's consider a pair
                      of experiments, each comparing two medicines. Here are the
                      results from the two experiments, and the resulting diff chart.</p>
<div id="scatter-diff"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Scatter Material Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Scatter Material Chart</h4>
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
<div class="card-body">
<div class="card-body">
<p class="card-text">Creating a Material Scatter Chart is similar to creating what
                      we'll now call a "Classic" Scatter Chart. You load the google
                      Visualization API (although with the 'scatter' package instead
                      of the 'corechart' package), define your datatable, and then
                      create an object (but of class google.charts.Scatter instead
                      of google.visualization.ScatterChart).</p>
<p class="card-text">Material Scatter Charts have many small improvements over Classic
                      Scatter Charts, including variable opacity for legibility of
                      overlapping points, an improved color palette, clearer label
                      formatting, tighter default spacing, softer gridlines and titles
                      (and the addition of subtitles).</p>
<div id="scatter-material"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Point Interval Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Point Interval Chart</h4>
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
<div class="card-body">
<div class="card-body">
<p class="card-text">Point intervals display interval data as small circles. The point
                      size can be controlled with the intervals.pointSize option.
                      Here, it's 10.</p>
<div id="point-interval"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Google scatter charts section end -->
</div>
