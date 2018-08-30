<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\HandsonTableColumnsOnlyAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Columns only</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="handson-table-columns-only.html#">HandsonTable</a>
</li>
<li class="breadcrumb-item active">Columns only
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="handson-table-columns-only.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="handson-table-columns-only.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="handson-table-columns-only.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="handson-table-columns-only.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- StretchH last column start -->
<section id="stretchH">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">StretchH last column</h4>
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
<div class="card-body card-dashboard">
<p>The following example creates a table with vertical scrollbar
                      by specifying only the container height and overflow: hidden
                      in CSS. The last column is stretched using stretchH: 'last'
                      option.
                    </p>
<div class="hot handsontable" id="stretch"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- StretchH last column end -->
<!-- Freezing start -->
<section id="freezing-column">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Freezing</h4>
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
<div class="card-body card-dashboard">
<p>In order to manually freeze a column (in another words - make
                      it fixed), you need to set the manualColumnFreeze config item
                      to true in Handson table initialization. When the Manual Column
                      Freeze plugin is enabled, you can freeze any non-fixed column
                      and unfreeze any fixed column in your Handson table instance
                      using the Context Menu.</p>
<div class="table-responsive scroll-container">
<div class="hot handsontable htRowHeaders htColumnHeaders" id="freezing"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Freezing end -->
</div>
</div>
</div>