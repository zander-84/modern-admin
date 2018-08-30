<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\HandsonTableDataOperationsAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Data Operations</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="handson-table-data-operations.html#">HandsonTable</a>
</li>
<li class="breadcrumb-item active">Data Operations
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="handson-table-data-operations.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="handson-table-data-operations.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="handson-table-data-operations.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="handson-table-data-operations.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Sorting start -->
<section id="sorting-table">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Sorting</h4>
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
<p>If you want to sort data in your data source array, you can simply
                      invoke an Array.prototype.sort() function and call the render()
                      function to refresh the table. You don't need any plugin for
                      this. However, this operation alters the structure of the data
                      source, and in many cases you want to leave the data source
                      intact, while displaying its content in a specified order.Here's
                      where column sorting plugin comes in handy.</p>
<p>Column sorting plugin works as a proxy between the data source
                      and the Handson table rendering module. It can map indices
                      of displayed rows (called logical indices) to the indices of
                      corresponding rows in data source (called physical indices)
                      and vice versa. This way you can alter the order of rows which
                      are being presented to user, without changing the data source
                      internal structure.</p>
<div class="table-responsive">
<div class="hot handsontable htRowHeaders htColumnHeaders" id="sorting"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Sorting start -->
<!-- Paginating start -->
<section id="paginating-table">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Paginating</h4>
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
<p>Add pages to your table.</p>
<div class="table-responsive">
<div class="hot handsontable htColumnHeaders" id="paginating"></div>
</div>
<nav aria-label="Page navigation">
<ul class="pagination">
<li class="page-item"><a class="page-link" href="handson-table-data-operations.html#1">1</a></li>
<li class="page-item"><a class="page-link" href="handson-table-data-operations.html#2">2</a></li>
<li class="page-item"><a class="page-link" href="handson-table-data-operations.html#3">3</a></li>
<li class="page-item"><a class="page-link" href="handson-table-data-operations.html#4">4</a></li>
<li class="page-item"><a class="page-link" href="handson-table-data-operations.html#5">5</a></li>
</ul>
</nav>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Paginating end -->
<!-- Searching start -->
<section id="searching-table">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Searching</h4>
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
<p>The search plugin provides an easy interface to search data across
                      Handson table.</p>
<p>You should first enable the plugin by setting the search option
                      to search. When enabled, searchPlugin exposes a new method
                      query(queryStr), where queryStr is a string to find within
                      the table. By default, the search is case insensitive.</p>
<p>query(queryStr, [callback], [queryMethod]) method does 2 things.
                      First of all, it returns an array of search results. Every
                      element is an objects containing 3 properties:</p>
<ol>
<li>row – index of the row where the value has been found</li>
<li>col – index of the column where the value has been found</li>
<li>data – the value that has been found</li>
</ol>
<p>The second thing the query does is set the isSearchResult property
                      for each cell. If a cell is in search results, then its isSearchResult
                      is set to true, otherwise the property is set to false.</p>
<div class="row">
<fieldset class="form-group position-relative has-icon-left col-md-3">
<input class="form-control" id="search_field" placeholder="Search..." type="text"/>
<div class="form-control-position">
<i class="ficon la la-search"></i>
</div>
</fieldset>
</div>
<div class="table-responsive">
<div id="searching"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Searching end -->
</div>
</div>
</div>