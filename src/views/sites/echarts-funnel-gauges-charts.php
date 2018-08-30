<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\EchartsFunnelGaugesChartsAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Echarts - Funnel &amp; Gauges Chart</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="echarts-funnel-gauges-charts.html#">Echarts</a>
</li>
<li class="breadcrumb-item active">Funnel &amp; gauges Chart
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="echarts-funnel-gauges-charts.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="echarts-funnel-gauges-charts.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="echarts-funnel-gauges-charts.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="echarts-funnel-gauges-charts.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- funnel & gauges charts section start -->
<section id="funnel-gauges-charts">
<div class="row">
<!-- Basic Funnel Plot Chart -->
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Funnel Plot</h4>
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
<div class="height-400 echart-container" id="funnel-plot"></div>
</div>
</div>
</div>
</div>
<!-- Funnel Pyramid Chart -->
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Funnel Pyramid Chart</h4>
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
<div class="height-400 echart-container" id="funnel-pyramid"></div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<!-- Right Align Funnel Chart -->
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Right Align Funnel Chart</h4>
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
<div class="height-400 echart-container" id="right-align-funnel"></div>
</div>
</div>
</div>
</div>
<!-- Left Align Funnel Chart -->
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Left Align Funnel Chart</h4>
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
<div class="height-400 echart-container" id="left-align-funnel"></div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<!-- Multiple Funnel Chart -->
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Multiple Funnel Chart</h4>
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
<div class="height-400 echart-container" id="multiple-funnel1"></div>
</div>
</div>
</div>
</div>
<!-- Multiple Funnel Chart -->
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Multiple Funnel Chart</h4>
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
<div class="height-400 echart-container" id="multiple-funnel2"></div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<!-- Basic Gauge Chart -->
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Gauge Chart</h4>
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
<div class="height-400 echart-container" id="basic-gauge"></div>
</div>
</div>
</div>
</div>
<!-- Customized Gauge Chart -->
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Customized Gauge Chart</h4>
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
<div class="height-400 echart-container" id="customized-gauge"></div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<!-- Angular Gauge Chart -->
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Angular Gauge Chart</h4>
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
<div class="height-400 echart-container" id="angular-gauge"></div>
</div>
</div>
</div>
</div>
<!-- Multiple Gauge Chart -->
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Multiple Gauge Chart</h4>
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
<div class="height-400 echart-container" id="multiple-gauge"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // funnel & gauges charts section end -->
</div>
</div>
</div>