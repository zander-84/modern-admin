<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\GoogleBarChartsAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">google Bar Chart</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="google-bar-charts.html#">Google Charts</a>
</li>
<li class="breadcrumb-item active">Bar Chart
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="google-bar-charts.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="google-bar-charts.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="google-bar-charts.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="google-bar-charts.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Google bar charts section start -->
<section id="google-bar-charts">
<!-- Bar Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Bar Chart</h4>
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
<div class="card-body">
<p class="card-text">A bar chart is a horizontal bar chart rendered in the browser
                      using SVG or VML, whichever is appropriate for the user's browser.
                      Like all google charts, bar charts display tooltips when the
                      user hovers over the data.</p>
<div class="chart-container">
<div id="bar-chart"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Stacked Bar Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Stacked Bar Chart</h4>
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
<div class="card-body">
<p class="card-text">A stacked bar chart is a bar chart that places related values
                      atop one another. If there are any negative values, they are
                      stacked in reverse order below the chart's axis baseline. Stacked
                      bar charts are typically used when a category naturally divides
                      into components. For instance, consider some hypothetical book
                      sales, divided by genre and compared across time:</p>
<div id="stacked-bar-chart"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Column Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Column Chart</h4>
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
<div class="card-body">
<p class="card-text">A column chart is a vertical bar chart rendered in the browser
                      using SVG or VML, whichever is appropriate for the user's browser.
                      Like all google charts, column charts display tooltips when
                      the user hovers over the data.</p>
<div id="column-chart"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Stacked Column Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Stacked Column Chart</h4>
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
<div class="card-body">
<p class="card-text">A stacked column chart is a column chart that places related
                      values atop one another. If there are any negative values,
                      they are stacked in reverse order below the chart's baseline.
                      It's typically used when a category naturally divides into
                      components. For instance, consider some hypothetical book sales,
                      divided by genre and compared across time:</p>
<div id="stacked-column-chart"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Combo Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Combo Chart</h4>
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
<div class="card-body">
<p class="card-text">A chart that lets you render each series as a different marker
                      type from the following list: line, area, bars, candlesticks,
                      and stepped area.</p>
<p class="card-text">To assign a default marker type for series, specify the seriesType
                      property. Use the series property to specify properties of
                      each series individually.</p>
<div id="combo-chart"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Bar Interval Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Bar Intervals</h4>
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
<div class="card-body">
<p class="card-text">Bar intervals create error bars around your data. The first and
                      last columns of the interval are drawn as wide bars parallel
                      to the domain-axis, and inner columns are drawn as shorter
                      "ticks". A "stick" is added to join the wide bars (if these
                      two bars have the same value then the stick is rendered as
                      a point, unless the pointSize option is zero).</p>
<p class="card-text">The width of the horizontal bars corresponding to the first and
                      last columns is controlled with intervals.barWidth, and the
                      width of the horizontal bars corresponding to the inner columns
                      is controlled with intervals.shortBarWidth. </p>
<div id="bar-intervals"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Histogram -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Histogram</h4>
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
<div class="card-body">
<p class="card-text">A histogram is a chart that groups numeric data into bins, displaying
                      the bins as segmented columns. They're used to depict the distribution
                      of a dataset: how often values fall into ranges.</p>
<p class="card-text">google Charts automatically chooses the number of bins for you.
                      All bins are equal width and have a height proportional to
                      the number of data points in the bin. In other respects, histograms
                      are similar to column charts.</p>
<div id="histogram"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Google bar charts section end -->
</div>
</div>
</div>