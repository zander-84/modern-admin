<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\FormInputsAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Form Basic Elements</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="form-inputs.html#">Form</a>
</li>
<li class="breadcrumb-item active">Basic Elements
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="form-inputs.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="form-inputs.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="form-inputs.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="form-inputs.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Basic Inputs start -->
<section class="basic-inputs">
<div class="row match-height">
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default Input text</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<input class="form-control" id="basicInput" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default Input text with help</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<small class="text-muted">eg.<i>someone@example.com</i></small>
<input class="form-control" id="helpInputTop" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Password</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<input class="form-control" id="passwordField" type="password"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Disabled Input field</h4>
</div>
<div class="card-block">
<div class="card-body">
<p>Add attribute <code>disabled</code> to disable input field.</p>
<fieldset class="form-group">
<input class="form-control" disabled="" id="disabledInput" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Predefined Input Value</h4>
</div>
<div class="card-block">
<div class="card-body">
<p>Add attribute <code>value="VALUE"</code> to set predefined value.</p>
<fieldset class="form-group">
<input class="form-control" id="predefinedInput" type="text" value="http://"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Readonly Input field</h4>
</div>
<div class="card-block">
<div class="card-body">
<p>Add attribute <code>readonly="readonly"</code> to set field readonly.</p>
<fieldset class="form-group">
<input class="form-control" id="readonlyInput" readonly="readonly" type="text" value="You can't change me. ;)"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input with Placeholder</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<input class="form-control" id="placeholderInput" placeholder="Enter Email Address" type="email"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Maximum Value</h4>
</div>
<div class="card-block">
<div class="card-body">
<p>Add attribute <code>maxlength="NUMBER"</code> to input area.</p>
<fieldset class="form-group">
<input class="form-control" id="maxInput" maxlength="6" placeholder="Maximum 6 characters." type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title cursor-pointer" for="focusInput">Focus on label click</label>
</div>
<div class="card-block">
<div class="card-body">
<p>To set focus on label click, use <code>.cursor-pointer</code>                      class.</p>
<fieldset class="form-group">
<input class="form-control" id="focusInput" maxlength="6" placeholder="Field Focus On Label Click." type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Static Text</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<p class="form-control-static" id="staticInput">email@pixinvent.com</p>
<p>To set static text use <code>.form-control-static</code> class.</p>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="helpInput">Input with Help text at bottom</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<input class="form-control" id="helpInput" placeholder="With Help Text" type="text"/>
</fieldset>
<p class="text-muted">Muted help text using <code>.text-muted</code> class.</p>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="autoOffInput">Autocomplete Disabled</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<input autocomplete="off" class="form-control" id="autoOffInput" placeholder="Autocomplete is off!" type="text"/>
<p>Add attribute <code>autocomplete="off"</code> to disable Autocomplete.</p>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Basic Inputs end -->
<!-- Inputs Type Options start -->
<section class="input-type-options" id="input-types">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Input Type Options</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="text">Text</label>
</div>
<div class="card-block">
<div class="card-body">
<p>Using <code>input type="text"</code></p>
<fieldset class="form-group">
<input class="form-control" id="text" type="text" value="Artisanal kale"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="password">Password</label>
</div>
<div class="card-block">
<div class="card-body">
<p>Using <code>input type="password"</code></p>
<fieldset class="form-group">
<input class="form-control" id="password" type="password" value="hunter2"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="tel">Telephone Number</label>
</div>
<div class="card-block">
<div class="card-body">
<p>Using <code>input type="tel"</code></p>
<fieldset class="form-group">
<input class="form-control" id="tel" type="tel" value="1-(555)-555-5555"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="email">Email</label>
</div>
<div class="card-block">
<div class="card-body">
<p>Using <code>input type="email"</code></p>
<fieldset class="form-group">
<input class="form-control" id="email" type="email" value="bootstrap@example.com"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="url">URL</label>
</div>
<div class="card-block">
<div class="card-body">
<p>Using <code>input type="url"</code></p>
<fieldset class="form-group">
<input class="form-control" id="url" type="url" value="http://getbootstrap.com"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="search">Search</label>
</div>
<div class="card-block">
<div class="card-body">
<p>Using <code>input type="search"</code></p>
<fieldset class="form-group">
<input class="form-control" id="search" type="search" value="How do I shoot web"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="number">Numbers</label>
</div>
<div class="card-block">
<div class="card-body">
<p>Using <code>input type="number"</code></p>
<fieldset class="form-group">
<input class="form-control" id="number" type="number" value="43"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="dateTime">Date Time</label>
</div>
<div class="card-block">
<div class="card-body">
<p>Using <code>input type="datetime-local"</code></p>
<fieldset class="form-group">
<input class="form-control" id="dateTime" type="datetime-local" value="2011-08-19T13:45:00"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="date">Date</label>
</div>
<div class="card-block">
<div class="card-body">
<p>Using <code>input type="date"</code></p>
<fieldset class="form-group">
<input class="form-control" id="date" type="date" value="2011-08-19"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="time">Time</label>
</div>
<div class="card-block">
<div class="card-body">
<p>Using <code>input type="time"</code></p>
<fieldset class="form-group">
<input class="form-control" id="time" type="time" value="13:45:00"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="week">Week</label>
</div>
<div class="card-block">
<div class="card-body">
<p>Using <code>input type="week"</code></p>
<fieldset class="form-group">
<input class="form-control" id="week" type="week" value="2011-W33"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="month">Month</label>
</div>
<div class="card-block">
<div class="card-body">
<p>Using <code>input type="month"</code></p>
<fieldset class="form-group">
<input class="form-control" id="month" type="month" value="2011-08"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="color">Color</label>
</div>
<div class="card-block">
<div class="card-body">
<p>Using <code>input type="color"</code></p>
<fieldset class="form-group">
<input class="form-control" id="color" type="color" value="#563d7c"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="range">Range</label>
</div>
<div class="card-block">
<div class="card-body">
<p>Using <code>input type="range"</code></p>
<fieldset class="form-group">
<input class="form-control" id="range" type="range" value="50"/>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Inputs Type Options end -->
<!-- Basic Textarea start -->
<section class="basic-textarea">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Basic Textarea</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="cursor-pointer card-title" for="basicTextarea">Basic Textarea</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<textarea class="form-control" id="basicTextarea" rows="3"></textarea>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="cursor-pointer card-title" for="placeTextarea">Textarea with Placeholder</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<textarea class="form-control" id="placeTextarea" placeholder="Simple Textarea" rows="3"></textarea>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="cursor-pointer card-title" for="descTextarea">Textarea with Description</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<p class="text-muted">Textarea description text.</p>
<textarea class="form-control" id="descTextarea" placeholder="Textarea with description" rows="3"></textarea>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Basic Textarea end -->
<!-- Basic Select start -->
<section class="basic-select">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Basic Select</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="basicSelect">Basic select</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<select class="form-control" id="basicSelect">
<option>Select Option</option>
<option>Option 1</option>
<option>Option 2</option>
<option>Option 3</option>
<option>Option 4</option>
<option>Option 5</option>
</select>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="customSelect">Custom select</label>
</div>
<div class="card-block">
<div class="card-body">
<p>To use custom select add class<code>.custom-select</code> to
                      select.
                    </p>
<fieldset class="form-group">
<select class="custom-select" id="customSelect">
<option selected="">Open this select menu</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="countrySelect">Multiple select</label>
</div>
<div class="card-block">
<div class="card-body">
<p>To use multiple select add an attribute<code> multiple="multiple"</code>.</p>
<fieldset class="form-group">
<select class="form-control" id="countrySelect" multiple="multiple">
<option selected="selected">United States</option>
<option>Canada</option>
<option selected="selected">United Kingdom</option>
<option>Japan</option>
<option>Australia</option>
<option>Germany</option>
<option selected="selected">India</option>
<option>Italy</option>
<option>Sweden</option>
<option>France</option>
<option>New Zealand</option>
<option>Switzerland</option>
<option>Russia</option>
<option>England</option>
<option>Norway</option>
<option>Greece</option>
<option>Philippines</option>
<option>Ireland</option>
<option>China</option>
<option>South Korea</option>
</select>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Basic Select end -->
<!-- Basic Inputs Style start -->
<section class="basic-inputs-style" id="input-style">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Basic Input Style 2</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-lg-12">
<div class="card">
<div class="card-block">
<div class="card-body">
<p>Another Input style using <code>.form-group-style</code></p>
<fieldset class="form-group form-group-style">
<label for="textbox2">Input text Style 2</label>
<input class="form-control" id="textbox2" type="text"/>
</fieldset>
<fieldset class="form-group form-group-style">
<label for="email1">Email</label>
<input class="form-control" id="email1" type="email"/>
</fieldset>
<fieldset class="form-group form-group-style">
<label for="password1">Password</label>
<input class="form-control" id="password1" type="password"/>
</fieldset>
<fieldset class="form-group form-group-style">
<label for="url1">URL</label>
<input class="form-control" id="url1" type="url"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-12">
<div class="card">
<div class="card-block">
<div class="card-body">
<p>Another Select style using <code>.form-group-style</code></p>
<fieldset class="form-group form-group-style">
<label for="number12">Number</label>
<input class="form-control" id="number12" type="number"/>
</fieldset>
<fieldset class="form-group form-group-style ">
<label for="textarea2">Textarea</label>
<textarea class="form-control" id="textarea2" rows="3"></textarea>
</fieldset>
<fieldset class="form-group form-group-style ">
<label for="selectOpt">Select</label>
<select class="form-control" id="selectOpt">
<option>Select Option</option>
<option>Option 1</option>
<option>Option 2</option>
<option>Option 3</option>
<option>Option 4</option>
<option>Option 5</option>
</select>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-12">
<div class="card">
<div class="card-block">
<div class="card-body">
<p>Another types using <code>.form-group-style</code> class.</p>
<fieldset class="form-group form-group-style">
<label for="dateTime1">DateTime</label>
<input class="form-control" id="dateTime1" type="datetime-local"/>
</fieldset>
<fieldset class="form-group form-group-style">
<label for="date12">Date</label>
<input class="form-control" id="date12" type="date"/>
</fieldset>
<fieldset class="form-group form-group-style">
<label for="time12">Time</label>
<input class="form-control" id="time12" type="time"/>
</fieldset>
<fieldset class="form-group form-group-style">
<label for="month12">Month</label>
<input class="form-control" id="month12" type="month"/>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Basic Inputs Style end -->
<!-- Basic File Browser start -->
<section class="file-browser">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Basic File Browser</h4>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="exampleInputFile">File input</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<input class="form-control-file" id="exampleInputFile" type="file"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic File Input</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<div class="custom-file">
<input class="custom-file-input" id="inputGroupFile01" type="file"/>
<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Basic File Browser end -->
<!-- Inputs Font Options start -->
<section class="font-options" id="font-options">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Input Font Options</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="inputText">Normal Font</label>
</div>
<div class="card-block">
<div class="card-body">
<p><code>.font-weight-normal</code> class for normal font</p>
<fieldset class="form-group">
<input class="font-weight-normal form-control" id="inputText" placeholder="Normal Font" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="inputText1">Bold Font</label>
</div>
<div class="card-block">
<div class="card-body">
<p><code>.font-weight-bold</code> class for bold font</p>
<fieldset class="form-group">
<input class="font-weight-bold form-control" id="inputText1" placeholder="Bold Font" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="inputText2">Italic Font</label>
</div>
<div class="card-block">
<div class="card-body">
<p><code>.font-weight-italic</code> class for italic font</p>
<fieldset class="form-group">
<input class="font-italic form-control" id="inputText2" placeholder="Italic Font" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="inputText3">Lowercase Font</label>
</div>
<div class="card-block">
<div class="card-body">
<p><code>.text-lowercase</code> class for lowercase font </p>
<fieldset class="form-group">
<input class="text-lowercase form-control" id="inputText3" placeholder="Lowercase Font" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="inputText4">Capitalized Text</label>
</div>
<div class="card-block">
<div class="card-body">
<p><code>.text-capitalize</code> class for capitalize font</p>
<fieldset class="form-group">
<input class="text-capitalize form-control" id="inputText4" placeholder="capitalized text" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="inputText5">Uppercased Text</label>
</div>
<div class="card-block">
<div class="card-body">
<p><code>.text-uppercased</code> class for uppercased font</p>
<fieldset class="form-group">
<input class="text-uppercase form-control" id="inputText5" placeholder="Uppercased Text" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="inputText6">Left Aligned Text</label>
</div>
<div class="card-block">
<div class="card-body">
<p><code>.text-left</code> class for left align text in input</p>
<fieldset class="form-group">
<input class="text-left form-control" id="inputText6" placeholder="Left Aligned Text" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="inputText7">Center Aligned Text</label>
</div>
<div class="card-block">
<div class="card-body">
<p><code>.text-center</code> class for center align text in input</p>
<fieldset class="form-group">
<input class="text-center form-control" id="inputText7" placeholder="Center Aligned Text" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="inputText8">Right Aligned Text</label>
</div>
<div class="card-block">
<div class="card-body">
<p><code>.text-right</code> class for right align text in input</p>
<fieldset class="form-group">
<input class="text-right form-control" id="inputText8" placeholder="Right Aligned Text" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="inputFont">Large Font</label>
</div>
<div class="card-block">
<div class="card-body">
<p><code>.font-size-large</code> class for large input font</p>
<fieldset class="form-group">
<input class="form-control text-uppercase font-size-large" id="inputFont" placeholder="Input With Large Font" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="inputFont1">Small Font</label>
</div>
<div class="card-block">
<div class="card-body">
<p><code>.font-size-small</code> class for small input font</p>
<fieldset class="form-group">
<input class="font-size-small form-control" id="inputFont1" placeholder="Input With Small Font" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="inputText9">Extra Small Font</label>
</div>
<div class="card-block">
<div class="card-body">
<p><code>.font-size-xsmall</code> class for XSmall input font</p>
<fieldset class="form-group">
<input class="font-size-xsmall form-control" id="inputText9" placeholder="Input With Extra Small Font" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Inputs Font Options end -->
<!-- Helper Classes start -->
<section class="helpers" id="form-helpers">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Basic Form Helpers</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Form Helper Left</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<input class="form-control" id="helpInput1" placeholder="Help Text" type="text"/>
<p class="text-left">
<small class="text-muted">Helper aligned to left</small>
</p>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Form Helper Center</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<input class="form-control" id="helpInput2" placeholder="Help Text" type="text"/>
<p class="text-center">
<small class="text-muted">Helper aligned to center</small>
</p>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Form Helper Right</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<input class="form-control" id="helpInput3" placeholder="Help Text" type="text"/>
<p class="text-right">
<small class="text-muted">Helper aligned to right</small>
</p>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Form Helper Left with color label</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<input class="form-control" id="helpInput4" placeholder="Help Text" type="text"/>
<p class="block-tag text-left">
<small class="badge badge-default badge-info">Helper aligned to left</small>
</p>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Form Helper Center with color label</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<input class="form-control" id="helpInput5" placeholder="Help Text" type="text"/>
<p class="block-tag text-center">
<small class="badge badge-default badge-success">Helper aligned to center</small>
</p>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Form Helper Right with color label</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<input class="form-control" id="helpInput6" placeholder="Help Text" type="text"/>
<p class="block-tag text-right">
<small class="badge badge-default badge-danger">Helper aligned to right</small>
</p>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Form Helper Left with block color label</h4>
</div>
<div class="card-blockdy">
<div class="card-body">
<fieldset class="form-group">
<input class="form-control" id="helpInput7" placeholder="Help Text class .text-left" type="text"/>
<p class="badge-default badge-info block-tag text-left">
<small class="block-area white">Helper aligned to left</small>
</p>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Form Helper Center with block color label</h4>
</div>
<div class="card-blockdy">
<div class="card-body">
<fieldset class="form-group">
<input class="form-control" id="helpInput8" placeholder="Help Text class .text-center" type="text"/>
<p class="badge-default badge-success block-tag text-center">
<small class="block-area white">Helper aligned to center</small>
</p>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Form Helper Right with block color label</h4>
</div>
<div class="card-blockdy">
<div class="card-body">
<fieldset class="form-group">
<input class="form-control" id="helpInput9" placeholder="Help Text class .text-right" type="text"/>
<p class="badge-default badge-danger block-tag text-right">
<small class="block-area white">Helper aligned to right</small>
</p>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Inline Helper</h4>
</div>
<div class="card-block">
<div class="card-body">
<div class="row">
<div class="col-md-8">
<input class="form-control" id="helpInput10" placeholder="Help Text" type="text"/>
</div>
<div class="col-md-4 block-tag">
<small class="text-muted block-area">Inline helper class <code>.block-tag</code></small>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Inline Helper with color</h4>
</div>
<div class="card-block">
<div class="card-body">
<div class="row">
<div class="col-md-8">
<input class="form-control" id="helpInput11" placeholder="Help Text" type="text"/>
</div>
<div class="col-md-4 block-tag">
<small class="badge badge-warning block-area">Inline color helper</small>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Helper Classes end -->
<!-- Tooltip start -->
<section class="tooltip-area">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Inputs With Tooltip</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tooltip On Focus</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<input class="form-control" data-placement="top" data-title="Tooltip on focus" data-toggle="tooltip" data-trigger="focus" placeholder="Click on input" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tooltip On Hover</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<input class="form-control" data-placement="top" data-title="Tooltip on hover" data-toggle="tooltip" data-trigger="hover" placeholder="Tooltip on Hover" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tooltip Bottom</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<input class="form-control" data-placement="bottom" data-title="Tooltip at Bottom" data-toggle="tooltip" placeholder="Tooltip at bottom" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tooltip On Right</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<input class="form-control" data-placement="right" data-title="Right Tooltip" data-toggle="tooltip" placeholder="Tooltip On Right" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tooltip On Left</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<input class="form-control" data-original-title="Left Tooltip" data-placement="left" data-toggle="tooltip" placeholder="Tooltip on Left" title="" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tooltip Top</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<input class="form-control" data-placement="top" data-title="Tooltip at Top" data-toggle="tooltip" placeholder="Tooltip at top" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Tooltip end -->
<!-- Input Styling start -->
<section class="input-styling">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Input Styling</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="roundText">Rounded Input</label>
</div>
<div class="card-block">
<div class="card-body">
<p><code>.round</code> class for rounded field</p>
<fieldset class="form-group">
<input class="form-control round" id="roundText" placeholder="Rounded Input" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="squareText">Squared Input</label>
</div>
<div class="card-block">
<div class="card-body">
<p><code>.square</code> class for squared field</p>
<fieldset class="form-group">
<input class="form-control square" id="squareText" placeholder="Squared Input" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="regText">Default Input</label>
</div>
<div class="card-block">
<div class="card-body">
<p>Default Input Field</p>
<fieldset class="form-group">
<input class="form-control" id="regText" placeholder="Default Input" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Input Styling end -->
<!-- Column Sizing start -->
<section class="column-sizing">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Input Column Sizing</h4>
</div>
</div>
<div class="row max-height">
<div class="col-sm-12 col-md-5">
<div class="card">
<div class="card-header">
<label class="card-title" for="roundText1">Column sizing 1</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<input class="form-control" id="roundText1" placeholder=".col-5" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-4">
<div class="card">
<div class="card-header">
<label class="card-title" for="squareText1">Column sizing 2</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<input class="form-control" id="squareText1" placeholder=".col-4" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-3">
<div class="card">
<div class="card-header">
<label class="card-title" for="regText1">Column sizing 3</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group">
<input class="form-control" id="regText1" placeholder=".col-3" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Column Sizing end -->
<!-- Control Sizing start -->
<section class="control-sizing">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Control Sizing Options</h4>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="xLarge">Extra Large Input</label>
</div>
<div class="card-block">
<div class="card-body">
<p>XLarge Input class <code>.input-xl</code></p>
<fieldset class="form-group position-relative">
<input class="form-control input-xl" id="xLarge" placeholder="XLarge Input" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="xLargeSelect">Extra Large Select</label>
</div>
<div class="card-block">
<div class="card-body">
<p>XLarge Input class <code>.input-xl</code> for select</p>
<fieldset class="form-group position-relative">
<select class="form-control input-xl" id="xLargeSelect">
<option selected="">XLarge select options</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="Large">Large Input</label>
</div>
<div class="card-block">
<div class="card-body">
<p>Large Input class <code>.input-lg</code></p>
<fieldset class="form-group position-relative">
<input class="form-control input-lg" id="Large" placeholder="Large Input" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="LargeSelect">Large Select</label>
</div>
<div class="card-block">
<div class="card-body">
<p>Large Input class <code>.input-lg</code> for select</p>
<fieldset class="form-group position-relative">
<select class="form-control input-lg" id="LargeSelect">
<option selected="">Large select options</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="Default">Default Input</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group position-relative">
<input class="form-control" id="Default" placeholder="Default Input" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="DefaultSelect">Default Select</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group position-relative">
<select class="form-control" id="DefaultSelect">
<option selected="">Default select options</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="Small">Small Input</label>
</div>
<div class="card-block">
<div class="card-body">
<p>Small Input class <code>.input-sm</code></p>
<fieldset class="form-group position-relative">
<input class="form-control input-sm" id="Small" placeholder="Small Input" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="SmallSelect">Small Select</label>
</div>
<div class="card-block">
<div class="card-body">
<p>Small Input class <code>.input-sm</code> for select</p>
<fieldset class="form-group position-relative">
<select class="form-control input-sm" id="SmallSelect">
<option selected="">Small select options</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="xSmall">Extra Small Input</label>
</div>
<div class="card-block">
<div class="card-body">
<p>XSmall Input class <code>.input-xs</code></p>
<fieldset class="form-group position-relative">
<input class="form-control input-xs" id="xSmall" placeholder="XSmall Input" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="xSmallSelect">Extra Small Select</label>
</div>
<div class="card-block">
<div class="card-body">
<p>XSmall Input class <code>.input-xs</code> for select</p>
<fieldset class="form-group position-relative">
<select class="form-control input-xs" id="xSmallSelect">
<option selected="">XSmall select options</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Control Sizing end -->
<!-- validations start -->
<section class="validations" id="validation">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Input Validation States</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title danger" for="inputDanger">
<strong>Danger State</strong>
</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group has-danger">
<input class="form-control form-control-danger" id="inputDanger" type="text"/>
<p class="text-right">
<small class="danger text-muted">Use<code>.has-danger</code> class for danger state</small>
</p>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title success" for="inputSuccess">
<strong>Success State</strong>
</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group has-success">
<input class="form-control form-control-success" id="inputSuccess" type="text"/>
<p class="text-right">
<small class="success text-muted">Use<code>.has-success</code> class for success state</small>
</p>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title warning" for="inputWarning">
<strong>Warning State</strong>
</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group has-warning">
<input class="form-control form-control-warning" id="inputWarning" type="text"/>
<p class="text-right">
<small class="warning text-muted">Use<code>.has-warning</code> class for warning state</small>
</p>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- validations end -->
<!-- Inputs Icons start -->
<section class="inputs-icons">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Input with Icons</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="iconLeft">Extra Large Input with Left Icon</label>
</div>
<div class="card-block">
<div class="card-body">
<p>Icon Left class <code>.has-icon-left</code>, XLarge Input class
                      <code>.input-xl</code>&amp; <code>.font-medium-4</code> class
                      for XLarge Icon </p>
<fieldset class="form-group position-relative has-icon-left">
<input class="form-control form-control-xl input-xl" id="iconLeft" placeholder="Icon Left, Extra Large Input" type="text"/>
<div class="form-control-position">
<i class="icon-bulb success font-medium-4"></i>
</div>
<small>Icon Left class <code>.has-icon-left</code>, XLarge Input class
                        <code>.input-xl</code>&amp; <code>.font-medium-4</code> class
                        for XLarge Icon </small>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="iconLeft1">Extra Large Input with Right Icon</label>
</div>
<div class="card-block">
<div class="card-body">
<p>XLarge Input class <code>.input-xl</code>&amp; <code>.font-medium-4</code>                      class for XLarge Icon</p>
<fieldset class="form-group position-relative">
<input class="form-control form-control-xl input-xl" id="iconLeft1" placeholder="Icon Right, Extra Large Input" type="text"/>
<div class="form-control-position">
<i class="icon-microphone danger font-medium-4"></i>
</div>
<small>XLarge Input class <code>.input-xl</code>&amp; <code>.font-medium-4</code>                        class for XLarge Icon</small>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="iconLeft2">Large Input with Left Icon</label>
</div>
<div class="card-block">
<div class="card-body">
<p>Icon Left class <code>.has-icon-left</code>, Large Input class
                      <code>.input-lg</code>&amp; <code>.font-medium-4</code> class
                      for Large Icon </p>
<fieldset class="form-group position-relative has-icon-left">
<input class="form-control form-control-lg input-lg" id="iconLeft2" placeholder="Icon Left, Large Input" type="text"/>
<div class="form-control-position">
<i class="icon-lock-open warning font-medium-4"></i>
</div>
<small>Icon Left class <code>.has-icon-left</code>, Large Input class
                        <code>.input-lg</code>&amp; <code>.font-medium-4</code> class
                        for Large Icon </small>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="iconLeft3">Large Input with Right Icon</label>
</div>
<div class="card-block">
<div class="card-body">
<p>Large Input class <code>.input-lg</code>&amp; <code>.font-medium-4</code>                      class for Large Icon </p>
<fieldset class="form-group position-relative">
<input class="form-control form-control-lg input-lg" id="iconLeft3" placeholder="Icon Right, Large Input" type="text"/>
<div class="form-control-position">
<i class="icon-pencil info font-medium-4"></i>
</div>
<small>Large Input class <code>.input-lg</code>&amp; <code>.font-medium-4</code>                        class for Large Icon </small>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="iconLeft4">Default Input with Left Icon</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group position-relative has-icon-left">
<input class="form-control" id="iconLeft4" placeholder="Icon Left, Default Input" type="text"/>
<div class="form-control-position">
<i class="icon-screen-smartphone primary"></i>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="iconLeft5">Default Input with Right Icon</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group position-relative">
<input class="form-control" id="iconLeft5" placeholder="Icon Right, Default Input" type="text"/>
<div class="form-control-position">
<i class="icon-book-open warning"></i>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Small Input with Left Icon</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group position-relative has-icon-left">
<input class="form-control form-control-sm input-sm" id="iconLeft6" placeholder="Icon Left, Small Input" type="text"/>
<div class="form-control-position">
<i class="icon-magnifier danger font-small-3"></i>
</div>
<small>Icon Left class <code>.has-icon-left</code>, Small Input class
                        <code>.input-sm</code>&amp; <code>.font-small-4</code> class
                        for Small Icon </small>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Small Input with Right Icon</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group position-relative">
<input class="form-control form-control-sm input-sm" id="iconLeft7" placeholder="Icon Right, Small Input" type="text"/>
<div class="form-control-position">
<i class="icon-key success font-small-4"></i>
</div>
<small>Small Input class <code>.input-sm</code>&amp; <code>.font-small-4</code>                        class for Small Icon </small>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Extra Small Input with Left Icon</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group position-relative has-icon-left">
<input class="form-control form-control-xs input-xs" id="iconLeft8" placeholder="Icon Left, Extra Small Input" type="text"/>
<div class="form-control-position">
<i class="icon-pie-chart info font-small-2"></i>
</div>
<small>Icon Left class <code>.has-icon-left</code>, XSmall Input class
                        <code>.input-xs</code>&amp; <code>.font-small-2</code> class
                        for XSmall Icon </small>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Extra Small Input with Right Icon</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group position-relative">
<input class="form-control form-control-xs input-xs" id="iconLeft9" placeholder="Icon Right, Extra Small Input" type="text"/>
<div class="form-control-position">
<i class="icon-cloud-upload warning font-small-2"></i>
</div>
<small>XSmall Input class <code>.input-xs</code>&amp; <code>.font-small-2</code>                        class for XSmall Icon </small>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Round Input with Icon</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group position-relative has-icon-left">
<input class="form-control round" id="iconLeft10" placeholder="Icon Left, Default Input" type="text"/>
<div class="form-control-position">
<i class="icon-user warning"></i>
</div>
<p>Use class <code>.has-icon-left</code> class for Left Icon.</p>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Round Input with Right Spin Icon</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group position-relative">
<input class="form-control round" id="iconLeft11" placeholder="Icon Right, Default Input" type="text"/>
<div class="form-control-position">
<i class="icon-key primary"></i>
</div>
<p>Default right icon. No classes needed.</p>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default Input with Spin Icon</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group position-relative has-icon-left">
<input class="form-control" id="iconLeft12" placeholder="Icon Left, Default Input" type="text"/>
<div class="form-control-position">
<i class="icon-refresh spinner"></i>
</div>
<p>Icon Left class <code>.has-icon-left</code> &amp; <code>.spinner</code>                        class to spin the Icon </p>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default Input with Right Spin Icon</h4>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group position-relative">
<input class="form-control" id="iconLeft13" placeholder="Icon Right, Default Input" type="text"/>
<div class="form-control-position">
<i class="spinner icon-disc"></i>
</div>
<p><code>.spinner</code> class to spin the Icon</p>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Inputs Icons end -->
<!-- Control Color start -->
<section class="control-color">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Control Color Options</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="textColor">Input Font Color</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group position-relative">
<input class="form-control primary" id="textColor" type="text" value="Primary colored Text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="textColor1">Input Border Color</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group position-relative">
<input class="form-control border-success" id="textColor1" placeholder="Success bordered Input" type="text"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="textColor2">Input Background Color</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group position-relative">
<input class="form-control bg-warning" id="textColor2" type="text" value="Background color Input"/>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="selectColor">Select Font Color</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group position-relative">
<select class="form-control danger" id="selectColor">
<option selected="">Select options</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="selectColor1">Select Border Color</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group position-relative">
<select class="form-control border-warning" id="selectColor1">
<option selected="">Select options</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title" for="selectColor2">Select Background Color</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group position-relative">
<select class="form-control bg-success" id="selectColor2">
<option selected="">Select options</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Textarea Font Color</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group position-relative">
<textarea class="form-control info" id="tareaColor1" rows="3">Textarea font Color</textarea>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Textarea Border Color</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group position-relative">
<textarea class="form-control border-primary" id="tareaColor2" rows="3">Textarea with Colored Border</textarea>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Textarea Background Color</label>
</div>
<div class="card-block">
<div class="card-body">
<fieldset class="form-group position-relative">
<textarea class="form-control bg-danger" id="tareaColor3" rows="3">Textarea with Colored background</textarea>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Control Color end -->
</div>
</div>
</div>