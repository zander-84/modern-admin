<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\HandsonTableRowsColumnsAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Rows and Columns</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="handson-table-rows-columns.html#">HandsonTable</a>
</li>
<li class="breadcrumb-item active">Rows Columns
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="handson-table-rows-columns.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="handson-table-rows-columns.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="handson-table-rows-columns.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="handson-table-rows-columns.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Scrolling start -->
<section id="scrolling-table">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Scrolling</h4>
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
<div class="card-body card-dashboard ">
<p class="card-text">To make the grid scrollable, set constant width and height to
                      the container holding Handson table and set the overflow property
                      to hidden in the container's stylesheet. Then, if the table
                      contains enough rows or columns, you can scroll through it.</p>
<p>Note, that Handson table renders only the visible part of the
                      table plus a fixed amount of rows and columns. You can experiment
                      with the viewportColumnRenderingOffset and viewportRowRenderingOffset
                      config options, which define this behavior, to improve the
                      performance of your app.</p>
<div class="table-responsive scroll-container">
<div class="hot htRowHeaders htColumnHeaders" id="scrolling"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Scrolling end -->
<!-- Fixing start -->
<section id="fixing-table">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Fixing</h4>
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
<div class="card-body card-dashboard ">
<p class="card-text">Specify two fixed rows with fixedRowsTop: 2 and two fixed columns
                      with fixedColumnsLeft: 2 option.</p>
<p>Note: You'll need horizontal scrollbars, so just set a container
                      width and overflow: hidden in CSS.</p>
<p>If you're looking for an option to manually fix columns, see
                      the Freezing section of this documentation.</p>
<div class="table-responsive scroll-container">
<div class="hot handsontable htRowHeaders htColumnHeaders" id="fixing"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Fixing end -->
<!-- Resizing start -->
<section id="resizing-table">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Resizing</h4>
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
<div class="card-body card-dashboard ">
<p class="card-text">To enable these features, use settings manualColumnResize: true
                      and manualRowResize: true</p>
<p>The draggable resize handle appears:</p>
<ol>
<li>In the right part of the column header,</li>
<li>In the bottom part of the row header.</li>
</ol>
<p>Double click on the resize handle automatically adjusts size
                      of the row or column.</p>
<p>For the selected rows or columns works simultaneously resize.</p>
<div class="table-responsive">
<div class="hot handsontable htRowHeaders htColumnHeaders" id="resizing"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Resizing end -->
<!-- Moving start -->
<section id="moving-table">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Moving</h4>
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
<div class="card-body card-dashboard ">
<p>To enable these features, use settings manualColumnMove: true
                      and manualRowMove: true</p>
<p>The draggable move handle appears:</p>
<ol>
<li>In the right part of the column header,</li>
<li>In the top part of the row header.</li>
</ol>
<div class="table-responsive scroll-container">
<div class="hot handsontable htRowHeaders htColumnHeaders" id="moving"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Moving end -->
</div>
</div>
</div>