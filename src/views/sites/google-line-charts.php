<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\GoogleLineChartsAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">google Line Chart</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="google-line-charts.html#">Google Charts</a>
</li>
<li class="breadcrumb-item active">line Chart
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="google-line-charts.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="google-line-charts.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="google-line-charts.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="google-line-charts.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Google line charts section start -->
<section id="google-line-charts">
<!-- Line Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Line Chart</h4>
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
<p class="card-text">A line chart that is rendered within the browser using SVG or
                      VML. Displays tooltips when hovering over points.</p>
<div id="line-chart"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Line Interval Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Line Interval Chart</h4>
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
<p class="card-text">Line intervals are sometimes used to depict the variance of multiple
                      experiments. In the following chart, we illustrate a primary
                      series and intervals around it.</p>
<div id="line-interval"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Area Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Area Chart</h4>
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
<p class="card-text">An area chart that is rendered within the browser using SVG or
                      VML. Displays tips when hovering over points.</p>
<div id="area-chart"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Area Interval Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Area Interval Chart</h4>
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
<p class="card-text">An area interval renders interval data as a set of nested shaded
                      areas. Nesting of pairs of columns is similar to that of box
                      intervals, except that an even number of columns is required.</p>
<div id="area-interval"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Area Stacked Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Area Stacked Chart</h4>
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
<p class="card-text">By default, the area chart draws the series on top of one another.
                      You can stack them atop one another instead, so that the data
                      values at each x-value are summed. In an area chart, the value
                      for each series will always be stacked relative to the preceding
                      series value. Stacking a mix of negative and positive values
                      will cause the areas to overlap. It is important to note that
                      the interpolateNulls option does not work with stacked area
                      charts.
                    </p>
<div id="area-stacked"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Area Stepped Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Area Stepped</h4>
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
<p class="card-text">A stepped area chart that is rendered within the browser using
                      SVG or VML. Displays tips when hovering over steps.</p>
<div id="area-stepped"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Area Stacked Stepped Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Area Stacked Stepped Chart</h4>
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
<p class="card-text">Stepped area charts also support stacking, including 100% stacking.
                      A stacked stepped area chart is a stepped area chart that places
                      related values atop one another. If there are any negative
                      values, they are stacked in reverse order below the chart's
                      baseline. For 100% stacking, the stacks of elements at each
                      domain-value are rescaled such that they add up to 100%. The
                      options for this are isStacked: 'percent', which formats each
                      value as a percentage of 100%, and isStacked: 'relative', which
                      formats each value as a fraction of 1. There is also an isStacked:
                      'absolute' option, which is functionally equivalent to isStacked:
                      true.
                    </p>
<div id="area-stacked-stepped"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Google line charts section end -->
</div>
