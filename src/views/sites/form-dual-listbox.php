<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\FormDualListboxAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Dual Listbox</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="form-dual-listbox.html#">Form Components</a>
</li>
<li class="breadcrumb-item active">Dual Listbox
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="form-dual-listbox.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="form-dual-listbox.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="form-dual-listbox.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="form-dual-listbox.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Dual Listbox start -->
<section class="basic-dual-listbox">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Dual ListBox</h4>
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
<div class="card-content">
<div class="card-body">
<div class="form-group">
<select class="duallistbox" multiple="multiple" size="10">
<option value="1">Amsterdam</option>
<option value="2">Antwerp</option>
<option selected="selected" value="3">Athens</option>
<option value="4">Barcelona</option>
<option value="5">Berlin</option>
<option selected="selected" value="6">Birmingham</option>
<option value="7">Bradford</option>
<option value="8">Bremen</option>
<option value="9">Brussels</option>
<option selected="selected" value="10">Bucharest</option>
<option value="11">Budapest</option>
<option selected="selected" value="12">Cologne</option>
<option selected="selected" value="13">Copenhagen</option>
<option value="14">Dortmund</option>
<option value="15">Dresden</option>
<option selected="selected" value="16">Dublin</option>
<option value="17">Düsseldorf</option>
<option selected="selected" value="18">Essen</option>
<option value="19">Frankfurt</option>
<option value="20">Genoa</option>
</select>
<p class="mt-1">Add <code>.duallistbox</code> class for basic dual listbox.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Dual Listbox end -->
<!-- Dual Listbox Without Filter start -->
<section class="without-filter">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Dual ListBox Without Filter</h4>
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
<div class="card-content">
<div class="card-body">
<div class="form-group">
<select class="duallistbox-no-filter" multiple="multiple" size="10">
<option value="1">Amsterdam</option>
<option value="2">Antwerp</option>
<option selected="selected" value="3">Athens</option>
<option value="4">Barcelona</option>
<option value="5">Berlin</option>
<option selected="selected" value="6">Birmingham</option>
<option value="7">Bradford</option>
<option value="8">Bremen</option>
<option value="9">Brussels</option>
<option selected="selected" value="10">Bucharest</option>
<option value="11">Budapest</option>
<option selected="selected" value="12">Cologne</option>
<option selected="selected" value="13">Copenhagen</option>
<option value="14">Dortmund</option>
<option value="15">Dresden</option>
<option selected="selected" value="16">Dublin</option>
<option value="17">Düsseldorf</option>
<option selected="selected" value="18">Essen</option>
<option value="19">Frankfurt</option>
<option value="20">Genoa</option>
</select>
<p class="mt-1">Add <code>.duallistbox-no-filter</code> class without filter
                        dual listbox.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Dual Listbox Without Filter end -->
<!-- Dual ListBox with multiple selection start -->
<section class="with-multi-selection">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Dual ListBox with multiple selection</h4>
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
<div class="card-content">
<div class="card-body">
<div class="form-group">
<select class="duallistbox-multi-selection" multiple="multiple" size="10">
<option value="1">Amsterdam</option>
<option value="2">Antwerp</option>
<option selected="selected" value="3">Athens</option>
<option value="4">Barcelona</option>
<option value="5">Berlin</option>
<option selected="selected" value="6">Birmingham</option>
<option value="7">Bradford</option>
<option value="8">Bremen</option>
<option value="9">Brussels</option>
<option selected="selected" value="10">Bucharest</option>
<option value="11">Budapest</option>
<option selected="selected" value="12">Cologne</option>
<option selected="selected" value="13">Copenhagen</option>
<option value="14">Dortmund</option>
<option value="15">Dresden</option>
<option selected="selected" value="16">Dublin</option>
<option value="17">Düsseldorf</option>
<option selected="selected" value="18">Essen</option>
<option value="19">Frankfurt</option>
<option value="20">Genoa</option>
</select>
<p class="mt-1">Add <code>.duallistbox-multi-selection</code> class for Dual
                        ListBox with Multiple Selection</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Dual ListBox with multiple selection end -->
<!-- Dual ListBox with Filter Options start -->
<section class="with-filter-options">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Dual ListBox with Filter Options</h4>
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
<div class="card-content">
<div class="card-body">
<div class="form-group">
<select class="duallistbox-with-filter" multiple="multiple" size="10">
<option value="1">Amsterdam</option>
<option value="2">Antwerp</option>
<option selected="selected" value="3">Athens</option>
<option value="4">Barcelona</option>
<option value="5">Berlin</option>
<option selected="selected" value="6">Birmingham</option>
<option value="7">Bradford</option>
<option value="8">Bremen</option>
<option value="9">Brussels</option>
<option selected="selected" value="10">Bucharest</option>
<option value="11">Budapest</option>
<option selected="selected" value="12">Cologne</option>
<option selected="selected" value="13">Copenhagen</option>
<option value="14">Dortmund</option>
<option value="15">Dresden</option>
<option selected="selected" value="16">Dublin</option>
<option value="17">Düsseldorf</option>
<option selected="selected" value="18">Essen</option>
<option value="19">Frankfurt</option>
<option value="20">Genoa</option>
</select>
<p class="mt-1">Add <code>.duallistbox-with-filter</code> class for basic dual
                        listbox.
                      </p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Dual ListBox with Filter Options end -->
<!-- Dual ListBox with Filter Text Options start -->
<section class="with-filter-text-options">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Dual ListBox with Filter Text Options</h4>
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
<div class="card-content">
<div class="card-body">
<div class="form-group">
<select class="duallistbox-custom-text" multiple="multiple" size="10">
<option value="option1">Option 1</option>
<option selected="selected" value="option2">Option 2</option>
<option selected="selected" value="option3">Option 3</option>
<option value="option4">Option 4</option>
<option value="option5">Option 5</option>
<option selected="selected" value="option6">Option 6</option>
<option selected="selected" value="option7">Option 7</option>
<option value="option8">Option 8</option>
<option value="option9">Option 9</option>
<option value="option0">Option 10</option>
</select>
<p class="mt-1"> All the listbox labels and placeholders are fully editable
                        through specified options, Like: <code>filterTextClear, filterPlaceHolder, infoText, infoTextFiltered, infoTextEmpty</code>.
                        You can use custom language also.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Dual ListBox with Filter Text Options end -->
<!-- Dual ListBox with Minimal Height start -->
<section class="with-minimal-height">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Dual ListBox with Minimal Height</h4>
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
<div class="card-content">
<div class="card-body">
<div class="form-group">
<select class="duallistbox-custom-height" multiple="multiple" size="10">
<option value="1">Amsterdam</option>
<option value="2">Antwerp</option>
<option selected="selected" value="3">Athens</option>
<option value="4">Barcelona</option>
<option value="5">Berlin</option>
<option selected="selected" value="6">Birmingham</option>
<option value="7">Bradford</option>
<option value="8">Bremen</option>
<option value="9">Brussels</option>
<option selected="selected" value="10">Bucharest</option>
<option value="11">Budapest</option>
<option selected="selected" value="12">Cologne</option>
<option selected="selected" value="13">Copenhagen</option>
<option value="14">Dortmund</option>
<option value="15">Dresden</option>
<option selected="selected" value="16">Dublin</option>
<option value="17">Düsseldorf</option>
<option selected="selected" value="18">Essen</option>
<option value="19">Frankfurt</option>
<option value="20">Genoa</option>
</select>
<p class="mt-1">Use <code>selectorMinimalHeight</code> setting option to set
                        dual listbox custom height.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Dual ListBox with Minimal Height end -->
<!-- Dual ListBox Custom Options start -->
<section class="with-custom-options">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Add Custom Options to Dual ListBox</h4>
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
<div class="card-content">
<div class="card-body">
<div class="form-group">
<select class="duallistbox-dynamic" multiple="multiple" size="10">
<option value="1">Amsterdam</option>
<option value="2">Antwerp</option>
<option selected="selected" value="3">Athens</option>
<option value="4">Barcelona</option>
<option value="5">Berlin</option>
<option selected="selected" value="6">Birmingham</option>
<option value="7">Bradford</option>
<option value="8">Bremen</option>
<option value="9">Brussels</option>
<option selected="selected" value="10">Bucharest</option>
<option value="11">Budapest</option>
<option selected="selected" value="12">Cologne</option>
<option selected="selected" value="13">Copenhagen</option>
<option value="14">Dortmund</option>
<option value="15">Dresden</option>
<option selected="selected" value="16">Dublin</option>
<option value="17">Düsseldorf</option>
<option selected="selected" value="18">Essen</option>
<option value="19">Frankfurt</option>
<option value="20">Genoa</option>
<option value="21">Glasgow</option>
<option value="22">Gothenburg</option>
<option selected="selected" value="23">Hamburg</option>
<option value="24">Hannover</option>
<option value="25">Helsinki</option>
</select>
</div>
<div class="buttons block">
<button class="btn btn-info duallistbox-add" type="button">Add options</button>
<button class="btn btn-info duallistbox-add-clear" type="button">Add with clearing highlights</button>
</div>
<p class="mt-1"> Add an option to the Listbox Using <code>Add Options</code> button.
                      Add an option and also clearing highlights of listbox option
                      using <code>Add with clearing highlight</code> button</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Dual ListBox Custom Options end -->
</div>
</div>
</div>