<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\HandsonTableAppearanceAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">HandsonTable Appearance</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="handson-table-appearance.html#">HandsonTable</a>
</li>
<li class="breadcrumb-item active">Appearance
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="handson-table-appearance.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="handson-table-appearance.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="handson-table-appearance.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="handson-table-appearance.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Conditional formatting start -->
<section id="formate">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Conditional formatting</h4>
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
<p>This demo shows how to use the cell type renderer feature to
                      make some conditional formatting:</p>
<ol>
<li>First row is read-only, and formatted in green bold text</li>
<li>All cells in the Nissan column are written in italic</li>
<li>Empty cells have silver background</li>
<li>Negative numbers are written in red</li>
</ol>
<div class="table-responsive">
<div class="hot handsontable htRowHeaders htColumnHeaders" id="formatting"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Conditional formatting end -->
<!-- Customizing borders start -->
<section id="border">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Customizing borders</h4>
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
<p>To enable the custom borders feature, set the customBorders option.
                      It could be set as true or initialized as an array with predefined
                      setup.
                    </p>
<p>To initialize Handson table with predefined custom borders, provide
                      cells coordinates and border styles in form of an array:</p>
<p>with row/col pairs: {row: 2, col: 2, left: { /*...*/ }} or with
                      range details: {range: {from: {row: 1, col: 1}, to:{row: 3,
                      col: 4}}, left: { /*...*/ }}</p>
<div class="table-responsive scroll-container">
<div class="hot handsontable htRowHeaders htColumnHeaders" id="borders"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Customizing borders end -->
<!-- Highlighting selection start -->
<section id="highlight-selection">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Highlighting selection</h4>
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
<p>Use options currentRowClassName and currentColumnClassName</p>
<div class="table-responsive">
<div class="hot handsontable htRowHeaders htColumnHeaders" id="highlighting"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Highlighting selection end -->
<!-- Mobiles and tablets start -->
<section id="mobiles-tablets">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Mobiles and tablets</h4>
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
<p>Currently Handson table supports only iPad 4 in a basic scope.
                      Mobile editor and selecting modes are enabled automatically
                      if you're viewing Handson table on a mobile device.</p>
<p>Open this page on iPad 4 and play with the demo below:</p>
<div class="table-responsive scroll-container">
<div class="hot handsontable htRowHeaders htColumnHeaders" id="mobilesTablets"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Mobiles and tablets end -->
</div>
