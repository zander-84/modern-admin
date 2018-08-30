<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\TableBorderAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Table border</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="table-border.html#">Tables</a>
</li>
<li class="breadcrumb-item active">Table Border
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="table-border.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="table-border.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="table-border.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="table-border.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Table row borders end-->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Table row borders</h4>
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
<div class="card-content">
<div class="card-body card-dashboard">
<p class="card-text">Example of table row borders. This is a default table border style
                    by bootstrap and attached to <code>.table</code> class.</p>
</div>
<div class="table-responsive">
<table class="table mb-0">
<thead>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
</tr>
</thead>
<tbody>
<tr>
<td>John</td>
<td>Doe</td>
<td>john@example.com</td>
</tr>
<tr>
<td>Mary</td>
<td>Moe</td>
<td>mary@example.com</td>
</tr>
<tr>
<td>July</td>
<td>Dooley</td>
<td>july@example.com</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- Table row borders end -->
<!-- Table column borders end-->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Table column borders</h4>
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
<div class="card-content">
<div class="card-body card-dashboard">
<p class="card-text">Example of vertical table borders. This custom table border layout
                    displays vertical borders only. However border between table
                    head and table body is also visible for better visual separation.
                    To use this layout add .table-columned class to the table with
                    .table class.
                  </p>
<p class="card-text">Example of table column borders. Add <code>.table-column</code>                    class with <code>.table</code> for table with column border.</p>
</div>
<div class="table-responsive">
<table class="table table-column">
<thead>
<tr>
<th>Home</th>
<th>Client</th>
<th>Setting</th>
</tr>
</thead>
<tbody>
<tr>
<td>data1</td>
<td>data2</td>
<td>data3</td>
</tr>
<tr>
<td>data1</td>
<td>data2</td>
<td>data3</td>
</tr>
<tr>
<td>data1</td>
<td>data2</td>
<td>data3</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- Table column borders end -->
<!-- Both borders end-->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Both borders</h4>
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
<div class="card-content">
<div class="card-body card-dashboard">
<p class="card-text">Example of table having both column &amp; row borders. Add <code>.table-bordered</code>                    class with <code>.table</code> for both borders table.</p>
</div>
<div class="table-responsive">
<table class="table table-bordered mb-0">
<thead>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
</tr>
</thead>
<tbody>
<tr>
<td>John</td>
<td>Doe</td>
<td>john@example.com</td>
</tr>
<tr>
<td>Mary</td>
<td>Moe</td>
<td>mary@example.com</td>
</tr>
<tr>
<td>July</td>
<td>Dooley</td>
<td>july@example.com</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- Both borders end -->
<!-- Borderless table end-->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Borderless table</h4>
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
<div class="card-content">
<div class="card-body card-dashboard">
<p class="card-text">Example of borderless table, all border are hidden, except border
                    <code>&lt;thead&gt;</code> and <code>&lt;tfoot&gt;</code>. Add
                    <code>.table-borderless</code> class with <code>.table</code>                    for borderless table.</p>
</div>
<div class="table-responsive">
<table class="table table-borderless mb-0">
<thead>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
</tr>
</thead>
<tbody>
<tr>
<td>John</td>
<td>Doe</td>
<td>john@example.com</td>
</tr>
<tr>
<td>Mary</td>
<td>Moe</td>
<td>mary@example.com</td>
</tr>
<tr>
<td>July</td>
<td>Dooley</td>
<td>july@example.com</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- Borderless table end -->
<!-- Default borders end-->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default borders</h4>
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
<div class="card-content">
<div class="card-body card-dashboard">
<p class="card-text">Example of a default border table. This is bootstrap default table
                    having only <code>.table</code> class.</p>
</div>
<div class="table-responsive">
<table class="table mb-0">
<thead>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
</tr>
</thead>
<tbody>
<tr>
<td>John</td>
<td>Doe</td>
<td>john@example.com</td>
</tr>
<tr>
<td>Mary</td>
<td>Moe</td>
<td>mary@example.com</td>
</tr>
<tr>
<td>July</td>
<td>Dooley</td>
<td>july@example.com</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- Default borders end -->
<!-- Solid border end-->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Solid border</h4>
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
<div class="card-content">
<div class="card-body card-dashboard">
<p class="card-text">Example of a solid bordered table row. This border inherits all
                    styling options from the default border style, the only difference
                    is it has 2px width. Add <code>.border-solid</code> to the table
                    body row. This border style works only with row borders.</p>
</div>
<div class="table-responsive">
<table class="table mb-0">
<thead>
<tr class="border-solid">
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
</tr>
</thead>
<tbody>
<tr>
<td>John</td>
<td>Doe</td>
<td>john@example.com</td>
</tr>
<tr class="border-solid">
<td>Mary</td>
<td>Moe</td>
<td>mary@example.com</td>
</tr>
<tr>
<td>July</td>
<td>Dooley</td>
<td>july@example.com</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- Solid border end -->
<!-- Double border end-->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Double border</h4>
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
<div class="card-content">
<div class="card-body card-dashboard">
<p class="card-text">Example of double bordered table row. This has 4px width and double
                    style. Add <code>.border-double</code> to the table body row.
                    This border style works only with row borders.</p>
</div>
<div class="table-responsive">
<table class="table mb-0">
<thead>
<tr class="border-double">
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
</tr>
</thead>
<tbody>
<tr>
<td>John</td>
<td>Doe</td>
<td>john@example.com</td>
</tr>
<tr class="border-double">
<td>Mary</td>
<td>Moe</td>
<td>mary@example.com</td>
</tr>
<tr>
<td>July</td>
<td>Dooley</td>
<td>july@example.com</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- Double border end -->
<!-- Border color end-->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Border color</h4>
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
<div class="card-content">
<div class="card-body card-dashboard">
<p class="card-text">Example of a table border with custom color. Based on bootstrap
                    color options, you can set any of predefined colors by adding
                    <code>.border-bottom-*</code> class to the table row. This will
                    works with all border styles tables demonstrated above.</p>
<p>Apart form bootstrap color options you can also use Modern Admin
                    color palette options, To set the selected border color lighten
                    use <code>.border-bottom-*</code> where <code>*</code> is the
                    value of your selected color from palette, and with that use
                    <code>.border-bottom-lighten-*</code> or <code>.border-bottom-darken-*</code>                    class where <code>*</code> is the value between '1-5' of your
                    selected lighten/darken color from modern color palette. So for
                    color lighten 4 border class will be <code>.border-bottom-lighten-4</code>.</p>
</div>
<div class="table-responsive">
<table class="table mb-0">
<thead>
<tr class="border-bottom-active border-custom-color">
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Age</th>
</tr>
</thead>
<tbody>
<tr class="border-bottom-success border-custom-color">
<td>John</td>
<td>Doe</td>
<td>john@example.com</td>
<td>20</td>
</tr>
<tr class="border-bottom-info border-custom-color">
<td>Mary</td>
<td>Moe</td>
<td>mary@example.com</td>
<td>22</td>
</tr>
<tr class="border-bottom-teal border-bottom-darken-2 border-custom-color">
<td>July</td>
<td>Dooley</td>
<td>july@example.com</td>
<td>30</td>
</tr>
<tr class="border-bottom-pink border-bottom-darken-2 border-custom-color">
<td>Piter</td>
<td>Draker</td>
<td>piter@example.com</td>
<td>30</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- Border color end -->
</div>
</div>
</div>