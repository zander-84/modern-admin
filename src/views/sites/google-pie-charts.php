<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\GooglePieChartsAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">google Pie Chart</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="google-pie-charts.html#">Google Charts</a>
</li>
<li class="breadcrumb-item active">pie Chart
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="google-pie-charts.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="google-pie-charts.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="google-pie-charts.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="google-pie-charts.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Google pie charts section start -->
<section id="google-pie-charts">
<!-- Pie Charts -->
<div class="row">
<div class="col-xl-4 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Pie Chart</h4>
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
<p class="card-text">A pie chart that is rendered within the browser using SVG or
                      VML. Displays tooltips when hovering over slices.</p>
<div id="pie-chart"></div>
</div>
</div>
</div>
</div>
<!-- Pie Exploded Chart -->
<div class="col-xl-4 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Pie Exploded</h4>
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
<p class="card-text">You can separate pie slices from the rest of the chart with the
                      offset property of the slices option:</p>
<div id="pie-exploded"></div>
</div>
</div>
</div>
</div>
<!-- Pie Rotated Chart -->
<div class="col-xl-4 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Pie Rotated</h4>
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
<p class="card-text">By default, pie charts begin with the left edge of the first
                      slice pointing straight up. You can change that with the pieStartAngle
                      option:
                    </p>
<div id="pie-rotated"></div>
</div>
</div>
</div>
</div>
</div>
<!-- 3D Pie Charts -->
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">3D Pie Chart</h4>
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
<p class="card-text">If you set the is3D option to true, your pie chart will be drawn
                      as though it has three dimensions:</p>
<div id="pie-3d"></div>
</div>
</div>
</div>
</div>
<!-- 3d Pie Exploded Chart -->
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">3d Pie Exploded</h4>
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
<p class="card-text">You can separate 3d pie slices from the rest of the chart with
                      the offset property of the slices option:</p>
<div id="pie-3d-exploded"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Donut Charts -->
<div class="row">
<div class="col-xl-4 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Donut Chart</h4>
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
<p class="card-text">A donut chart is a pie chart with a hole in the center. You can
                      create donut charts with the pieHole option.</p>
<p class="card-text">The pieHole option should be set to a number between 0 and 1,
                      corresponding to the ratio of radii between the hole and the
                      chart. Numbers between 0.4 and 0.6 will look best on most charts.
                      Values equal to or greater than 1 will be ignored, and a value
                      of 0 will completely shut your piehole.</p>
<div id="donut-chart"></div>
</div>
</div>
</div>
</div>
<!-- Donut Rotated Chart -->
<div class="col-xl-4 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Donut Rotated Chart</h4>
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
<p class="card-text">By default, donut charts begin with the left edge of the first
                      slice pointing straight up. You can change that with the pieStartAngle
                      option.
                    </p>
<p class="card-text">The pieHole option should be set to a number between 0 and 1,
                      corresponding to the ratio of radii between the hole and the
                      chart. Numbers between 0.4 and 0.6 will look best on most charts.
                      Values equal to or greater than 1 will be ignored, and a value
                      of 0 will completely shut your piehole.</p>
<div id="donut-rotated"></div>
</div>
</div>
</div>
</div>
<!-- Donut Exploded Chart -->
<div class="col-xl-4 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Donut Exploded Chart</h4>
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
<p class="card-text">You can separate donut slices from the rest of the chart with
                      the offset property of the slices option.</p>
<p class="card-text">The pieHole option should be set to a number between 0 and 1,
                      corresponding to the ratio of radii between the hole and the
                      chart. Numbers between 0.4 and 0.6 will look best on most charts.
                      Values equal to or greater than 1 will be ignored, and a value
                      of 0 will completely shut your piehole.</p>
<div id="donut-exploded"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Diff Charts -->
<div class="row">
<!-- Pie Diff Radius Chart -->
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Pie Diff Radius Chart</h4>
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
<p class="card-text">The diff pie chart nestles older data inside newer data. Consider
                      the change in popularity of the top five U.S. college majors
                      between 2000 and 2010 (mouse over the wedges to see the values;
                      data from the National Center for Education Statistics). Here's
                      the 2000 data, the 2010 data, and the diff between them.</p>
<p class="card-text">You can control the relative size of the circles with diff.innerCircle.radiusFactor</p>
<div id="pie-diff-radius"></div>
</div>
</div>
</div>
</div>
<!-- Pie Diff Border Chart -->
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Pie Diff Border Chart</h4>
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
<p class="card-text">The diff pie chart nestles older data inside newer data. Consider
                      the change in popularity of the top five U.S. college majors
                      between 2000 and 2010 (mouse over the wedges to see the values;
                      data from the National Center for Education Statistics). Here's
                      the 2000 data, the 2010 data, and the diff between them.</p>
<p class="card-text">You can control the border between the two with diff.innerCircle.borderFactor</p>
<div id="pie-diff-border"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Diff opacity Charts -->
<div class="row">
<!-- Pie Diff Opacity Chart -->
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Pie Diff Opacity Chart</h4>
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
<p class="card-text">The diff pie chart nestles older data inside newer data. Consider
                      the change in popularity of the top five U.S. college majors
                      between 2000 and 2010 (mouse over the wedges to see the values;
                      data from the National Center for Education Statistics). Here's
                      the 2000 data, the 2010 data, and the diff between them.</p>
<p class="card-text">You can control the transparency of each with diff.oldData.opacity
                      and diff.newData.opacity</p>
<div id="pie-diff-opacity"></div>
</div>
</div>
</div>
</div>
<!-- Pie Diff Invert Chart -->
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Pie Diff Invert Chart</h4>
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
<p class="card-text">The diff pie chart nestles older data inside newer data. Consider
                      the change in popularity of the top five U.S. college majors
                      between 2000 and 2010 (mouse over the wedges to see the values;
                      data from the National Center for Education Statistics). Here's
                      the 2000 data, the 2010 data, and the diff between them.</p>
<p class="card-text">You can you can invert the behavior so that the oldest data surrounds
                      the newest data with diff.oldData.inCenter</p>
<div id="pie-diff-invert"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Google pie charts section end -->
</div>
