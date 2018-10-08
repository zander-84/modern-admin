<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\TableJsgridAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">jsGrid</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="table-jsgrid.html#">jsGrid</a>
</li>
<li class="breadcrumb-item active">jsGrid
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="table-jsgrid.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="table-jsgrid.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="table-jsgrid.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="table-jsgrid.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Basic scenario start -->
<section id="basic">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Scenario</h4>
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
<div class="card-body card-dashboard ">
<p>Grid with filtering, editing, inserting, deleting, sorting and
                      paging. Data provided by controller.</p>
<div id="basicScenario"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Basic scenario end -->
<!-- OData service scenario start -->
<section id="odata-service">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">OData Service Scenario</h4>
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
<div class="card-body card-dashboard ">
<p>Controller loadData method requests data from OData service with
                      ajax. Any asynchronous source could be used instead. Just return
                      jQuery.promise from controller method. Field option itemTemplate
                      allows to render any custom cell content, just return your
                      markup as string, DOM Node or jQuery Element.</p>
<div id="serviceScenario"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- OData service scenario end -->
<!-- Sorting scenario start -->
<section id="sorting-scenario">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Sorting Scenario</h4>
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
<div class="card-body card-dashboard ">
<p>Sorting can be done not only with column header interaction,
                      but also with sort method.</p>
<div class="sort-panel">
<label>Sorting Field:
                        <select id="sortingField">
<option>Name</option>
<option>Age</option>
<option>Address</option>
<option>Country</option>
<option>Married</option>
</select>
</label>
<button class="btn btn-primary mr-1" id="sort" type="button">Sort</button>
</div>
<div class="js-shorting" id="sorting-table"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Sorting scenario end -->
<!-- Validation scenario start -->
<section id="validation-scenario">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Validation Scenario</h4>
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
<div class="card-body card-dashboard ">
<p>Grid supports field values validation for inserting and editing.
                      There are plenty of built-in validators available. Furthermore
                      custom validators can be easily added.</p>
<div id="validation"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Validation scenario end -->
<!-- Loading by page start -->
<section id="loading-page">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Loading by Page</h4>
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
<div class="card-body card-dashboard ">
<p>Grid allows to load data by pages. It helps to reduce data loading
                      time and of course necessary for large data sources.</p>
<div id="loading"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Loading by page end -->
<!-- Custom view start -->
<section id="custom-view">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Custom View</h4>
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
<div class="card-body card-dashboard ">
<p>All components of the grid can be easily configured. Heading,
                      filtering, inserting, editing, sorting, paging and row selection
                      could be switched with a single corresponding boolean option.</p>
<div class="config-panel">
<label>
<input checked="" id="heading" type="checkbox"/> Heading</label>  
                      <label>
<input checked="" id="filtering" type="checkbox"/> Filtering</label>  
                      <label>
<input id="inserting" type="checkbox"/> Inserting</label>  
                      <label>
<input checked="" id="editing" type="checkbox"/> Editing</label>  
                      <label>
<input checked="" id="paging" type="checkbox"/> Paging</label>  
                      <label>
<input checked="" id="sorting" type="checkbox"/> Sorting</label>  
                      <label>
<input checked="" id="selecting" type="checkbox"/> Selecting</label>  
                    </div>
<div id="customView"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Custom view end -->
<!-- Batch delete start -->
<section id="batch-delete">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Batch Delete</h4>
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
<div class="card-body card-dashboard ">
<p>Cell content of every column can be customized with itemTemplate,
                      headerTemplate, filterTemplate and insertTemplate functions
                      specified in field config. This example shows how to implement
                      batch deleting with custom field for selecting items.</p>
<div id="batchDelete"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Batch delete end -->
<!-- External pager start -->
<section id="external-pager">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">External Pager</h4>
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
<div class="card-body card-dashboard ">
<p>The pager could be placed anywhere outside of the grid. Just
                      specify pagerContainer option.</p>
<div class="external-pager jsgrid-pager-container my-1" id="externalPager"></div>
<div id="external"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- External pager end -->
</div>
