<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ExComponentListsAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">List JS</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="ex-component-lists.html#">Extra Components</a>
</li>
<li class="breadcrumb-item active">List JS
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="ex-component-lists.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="ex-component-lists.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="ex-component-lists.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="ex-component-lists.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Lists section start -->
<section id="lists">
<div class="row match-height">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="list-basic">Basic</h4>
</div>
<div class="card-body">
<div class="card-body">
<div id="basic-list">
<input class="search form-control round border-primary mb-1" placeholder="Search" type="text"/>
<div class="row">
<div class="col-md-6 col-sm-12">
<button class="sort btn btn-block btn-outline-warning btn-round mb-2" data-sort="name">Sort by name</button>
</div>
<div class="col-md-6 col-sm-12">
<button class="sort btn btn-block btn-outline-success btn-round mb-2" data-sort="born">Sort by born</button>
</div>
</div>
<ul class="list-group list">
<li class="list-group-item">
<h3 class="name">Jonny Stromberg</h3>
<p class="born">1986</p>
</li>
<li class="list-group-item">
<h3 class="name">Jonas Arnklint</h3>
<p class="born">1985</p>
</li>
<li class="list-group-item">
<h3 class="name">Martina Elm</h3>
<p class="born">1986</p>
</li>
<li class="list-group-item">
<h3 class="name">Gustaf Lindqvist</h3>
<p class="born">1983</p>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="list-add-item">Add Item</h4>
</div>
<div class="card-body">
<div class="card-body">
<div id="add-item-list">
<input class="search form-control round border-primary mb-1" placeholder="Search" type="text"/>
<div class="row">
<div class="col-md-6 col-sm-12">
<button class="sort btn btn-block btn-outline-warning btn-round mb-2" data-sort="name">Sort by name</button>
</div>
<div class="col-md-6 col-sm-12">
<button class="sort btn btn-block btn-outline-success btn-round mb-2" data-sort="born">Sort by born</button>
</div>
</div>
<ul class="list-group list">
<li class="list-group-item">
<h3 class="name">Jonny Stromberg</h3>
<p class="born">1986</p>
</li>
<li class="list-group-item">
<h3 class="name">Jonas Arnklint</h3>
<p class="born">1985</p>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row match-height">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="list-new">New List</h4>
</div>
<div class="card-body">
<div class="card-body">
<div id="new-list">
<input class="search form-control round border-primary mb-1" placeholder="Search" type="text"/>
<div class="row">
<div class="col-md-6 col-sm-12">
<button class="sort btn btn-block btn-outline-warning btn-round mb-2" data-sort="name">Sort by name</button>
</div>
<div class="col-md-6 col-sm-12">
<button class="sort btn btn-block btn-outline-success btn-round mb-2" data-sort="born">Sort by born</button>
</div>
</div>
<ul class="list-group list"></ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="list-table">Table</h4>
</div>
<div class="card-body">
<div class="card-body">
<div id="table-list">
<input class="search form-control round border-primary mb-1" placeholder="Search" type="text"/>
<div class="row">
<div class="col-md-6 col-sm-12">
<button class="sort btn btn-block btn-outline-warning btn-round mb-2" data-sort="name">Sort by name</button>
</div>
<div class="col-md-6 col-sm-12">
<button class="sort btn btn-block btn-outline-success btn-round mb-2" data-sort="born">Sort by born</button>
</div>
</div>
<table class="table table-bordered table-lg">
<thead>
<tr>
<th>#</th>
<th>Name</th>
<th>Born</th>
</tr>
</thead>
<!-- IMPORTANT, class="list" have to be at tbody -->
<tbody class="list">
<tr>
<th scope="row">1</th>
<td class="name">
<h3>Jonny Stromberg</h3>
</td>
<td class="born">1986</td>
</tr>
<tr>
<th scope="row">2</th>
<td class="name">
<h3>Jonas Arnklint</h3>
</td>
<td class="born">1985</td>
</tr>
<tr>
<th scope="row">3</th>
<td class="name">
<h3>Martina Elm</h3>
</td>
<td class="born">1986</td>
</tr>
<tr>
<th scope="row">4</th>
<td class="name">
<h3>Gustaf Lindqvist</h3>
</td>
<td class="born">1983</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="list-data-attr">Data Attributes</h4>
</div>
<div class="card-body">
<div class="card-body">
<p>Use data attributes and other custom attributes as keys.</p>
<div id="data-attributes-list">
<input class="search form-control round border-primary mb-1" placeholder="Search" type="text"/>
<div class="row">
<div class="col-md-6 col-sm-12">
<button class="sort btn btn-block btn-outline-warning btn-round mb-2" data-sort="name">Sort by name</button>
</div>
<div class="col-md-6 col-sm-12">
<button class="sort btn btn-block btn-outline-success btn-round mb-2" data-sort="born">Sort by born</button>
</div>
</div>
<div class="table-responsive">
<table class="table table-bordered text-center">
<thead>
<tr>
<th class="text-center">#</th>
<th class="text-center">Name</th>
<th class="text-center">Born</th>
<th class="text-center">Photo</th>
</tr>
</thead>
<!-- IMPORTANT, class="list" have to be at tbody -->
<tbody class="list">
<tr data-id="1">
<th class="id" scope="row">1</th>
<td><a class="link name" href="https://pixinvent.com">Jonny Stromberg</a></td>
<td class="born timestamp" data-timestamp="12345">1986</td>
<td>
<img alt="avatar" class="image" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png"/>
</td>
</tr>
<tr data-id="2">
<th class="id" scope="row">2</th>
<td><a class="link name" href="https://pixinvent.com">Jonas Arnklint</a></td>
<td class="born timestamp" data-timestamp="23456">1985</td>
<td>
<img alt="avatar" class="image" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png"/>
</td>
</tr>
<tr data-id="3">
<th class="id" scope="row">3</th>
<td><a class="link name" href="https://pixinvent.com">Martina Elm</a></td>
<td class="born timestamp" data-timestamp="34567">1986</td>
<td>
<img alt="avatar" class="image" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-22.png"/>
</td>
</tr>
<tr data-id="4">
<th class="id" scope="row">4</th>
<td><a class="link name" href="https://pixinvent.com">Gustaf Lindqvist</a></td>
<td class="born timestamp" data-timestamp="45678">1983</td>
<td>
<img alt="avatar" class="image" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-19.png"/>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="list-editable">Add, Get &amp; Remove</h4>
</div>
<div class="card-body">
<div class="card-body">
<div id="editable-list">
<input class="search form-control round border-primary mb-1" placeholder="Search" type="text"/>
<div class="row">
<div class="col-md-6 col-sm-12">
<button class="sort btn btn-block btn-outline-warning btn-round mb-2" data-sort="name">Sort by name</button>
</div>
<div class="col-md-6 col-sm-12">
<button class="sort btn btn-block btn-outline-success btn-round mb-2" data-sort="age">Sort by age</button>
</div>
</div>
<div class="table-responsive">
<table class="table table-bordered table-lg text-center">
<thead>
<tr>
<th class="sort text-center" data-sort="name">Name</th>
<th class="sort text-center" data-sort="age">Age</th>
<th class="sort text-center" data-sort="city">City</th>
<th>Edit</th>
<th>Remove</th>
</tr>
</thead>
<!-- IMPORTANT, class="list" have to be at tbody -->
<tbody class="list">
<tr>
<td class="name">Jonny</td>
<td class="age">27</td>
<td class="city">Stockholm</td>
<td class="edit">
<button class="btn btn-outline-primary edit-item-btn">Edit</button>
</td>
<td class="remove">
<button class="btn btn-outline-danger remove-item-btn">Remove</button>
</td>
</tr>
<tr>
<td class="name">Jonas</td>
<td class="age">32</td>
<td class="city">Berlin</td>
<td class="edit">
<button class="btn btn-outline-primary edit-item-btn">Edit</button>
</td>
<td class="remove">
<button class="btn btn-outline-danger remove-item-btn">Remove</button>
</td>
</tr>
<tr>
<td class="name">Gustaf</td>
<td class="age">23</td>
<td class="city">Sundsvall</td>
<td class="edit">
<button class="btn btn-outline-primary edit-item-btn">Edit</button>
</td>
<td class="remove">
<button class="btn btn-outline-danger remove-item-btn">Remove</button>
</td>
</tr>
<tr>
<td class="name">Fredrik</td>
<td class="age">26</td>
<td class="city">Goteborg</td>
<td class="edit">
<button class="btn btn-outline-primary edit-item-btn">Edit</button>
</td>
<td class="remove">
<button class="btn btn-outline-danger remove-item-btn">Remove</button>
</td>
</tr>
<tr>
<td class="name">Otis</td>
<td class="age">36</td>
<td class="city">Bacolod</td>
<td class="edit">
<button class="btn btn-outline-primary edit-item-btn">Edit</button>
</td>
<td class="remove">
<button class="btn btn-outline-danger remove-item-btn">Remove</button>
</td>
</tr>
<tr>
<td class="name">Carla</td>
<td class="age">27</td>
<td class="city">Baleshwar</td>
<td class="edit">
<button class="btn btn-outline-primary edit-item-btn">Edit</button>
</td>
<td class="remove">
<button class="btn btn-outline-danger remove-item-btn">Remove</button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="table-responsive">
<table class="table table-bordered table-lg mt-2 mb-2">
<tr>
<td class="name">
<input id="id-field" type="hidden"/>
<input class="form-control" id="name-field" placeholder="Name" type="text"/>
</td>
</tr>
<tr>
<td class="age">
<input class="form-control" id="age-field" placeholder="Age" type="text"/>
</td>
</tr>
<tr>
<td class="city">
<input class="form-control" id="city-field" placeholder="City" type="text"/>
</td>
</tr>
<tr>
<td class="add">
<button class="btn btn-success" id="add-btn">Add</button>
<button class="btn btn-primary" id="edit-btn">Edit</button>
</td>
</tr>
</table>
</div>
<p>This is just a simple example showing how to use <code>add()</code>,
                        <code>values()</code> and <code>remove()</code>. The example
                        have bugs (not List.js (I hope ;)) so I do not recommend
                        copy-paste programming.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="list-fuzzy-search">Fuzzy Search</h4>
</div>
<div class="card-body">
<div class="card-body">
<p>Example of how to use the fuzzy search plugin.</p>
<div id="fuzzy-search-list">
<input class="fuzzy-search form-control round border-primary mb-1" placeholder="Search" type="text"/>
<ul class="list-group list">
<li class="list-group-item">
<p class="name">Guybrush Threepwood</p>
</li>
<li class="list-group-item">
<p class="name">Elaine Marley</p>
</li>
<li class="list-group-item">
<p class="name">LeChuck</p>
</li>
<li class="list-group-item">
<p class="name">Stan</p>
</li>
<li class="list-group-item">
<p class="name">Voodoo Lady</p>
</li>
<li class="list-group-item">
<p class="name">Herman Toothrot</p>
</li>
<li class="list-group-item">
<p class="name">Meathook</p>
</li>
<li class="list-group-item">
<p class="name">Carla</p>
</li>
<li class="list-group-item">
<p class="name">Otis</p>
</li>
<li class="list-group-item">
<p class="name">Rapp Scallion</p>
</li>
<li class="list-group-item">
<p class="name">Rum Rogers Sr.</p>
</li>
<li class="list-group-item">
<p class="name">Men of Low Moral Fiber</p>
</li>
<li class="list-group-item">
<p class="name">Murray</p>
</li>
<li class="list-group-item">
<p class="name">Cannibals</p>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="list-pagination">Pagination</h4>
</div>
<div class="card-body">
<div class="card-body">
<p>Example of how to use the pagination plugin</p>
<div id="pagination-list">
<input class="search form-control round border-primary mb-1" placeholder="Search" type="text"/>
<ul class="list-group list">
<li class="list-group-item">
<p class="name">Guybrush Threepwood</p>
</li>
<li class="list-group-item">
<p class="name">Elaine Marley</p>
</li>
<li class="list-group-item">
<p class="name">LeChuck</p>
</li>
<li class="list-group-item">
<p class="name">Stan</p>
</li>
<li class="list-group-item">
<p class="name">Voodoo Lady</p>
</li>
<li class="list-group-item">
<p class="name">Herman Toothrot</p>
</li>
<li class="list-group-item">
<p class="name">Meathook</p>
</li>
<li class="list-group-item">
<p class="name">Carla</p>
</li>
<li class="list-group-item">
<p class="name">Otis</p>
</li>
<li class="list-group-item">
<p class="name">Rapp Scallion</p>
</li>
<li class="list-group-item">
<p class="name">Rum Rogers Sr.</p>
</li>
<li class="list-group-item">
<p class="name">Men of Low Moral Fiber</p>
</li>
<li class="list-group-item">
<p class="name">Murray</p>
</li>
<li class="list-group-item">
<p class="name">Cannibals</p>
</li>
</ul>
<ul class="pagination pagination-separate pagination-flat"></ul>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // List section end -->
</div>
