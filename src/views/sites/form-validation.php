<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\FormValidationAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">JQuery Bootstrap Validation</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="form-validation.html#">Form Components</a>
</li>
<li class="breadcrumb-item active">JQuery Bootstrap Validation
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="form-validation.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="form-validation.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="form-validation.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="form-validation.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Input Validation start -->
<section class="input-validation">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Inputs Validation</h4>
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
<p>Add <code>novalidate</code> attribute to form tag.</p>
<form class="form-horizontal" novalidate="">
<div class="row">
<div class="col-lg-6 col-md-12">
<div class="form-group">
<h5>Basic Text Input
                              <span class="required">*</span>
</h5>
<div class="controls">
<input class="form-control" data-validation-required-message="This field is required" name="text" required="" type="text"/>
</div>
<p>Add <code>required</code> attribute to field for required
                              validation.
                            </p>
</div>
<div class="form-group">
<h5>Email Field
                              <span class="required">*</span>
</h5>
<div class="controls">
<input class="form-control" data-validation-required-message="This field is required" name="email" required="" type="email"/>
</div>
</div>
<div class="form-group">
<h5>Repeat Email Field
                              <span class="required">*</span>
</h5>
<div class="controls">
<input class="form-control" data-validation-match-match="email" name="email2" required="" type="email"/>
<p>Add <code>data-validation-match-match</code> attribute
                                with the field name as value to match with it.</p>
</div>
</div>
<div class="form-group">
<h5>Password Input Field
                              <span class="required">*</span>
</h5>
<div class="controls">
<input class="form-control" data-validation-required-message="This field is required" name="password" required="" type="password"/>
</div>
</div>
<div class="form-group">
<h5>Repeat Password Input Field
                              <span class="required">*</span>
</h5>
<div class="controls">
<input class="form-control" data-validation-match-match="password" name="password2" required="" type="password"/>
</div>
</div>
<div class="form-group">
<h5>Input with Right Icon
                              <span class="required">*</span>
</h5>
<div class="controls position-relative has-icon-right">
<input class="form-control" data-validation-required-message="This field is required" placeholder="Addon To Right" type="text"/>
<div class="form-control-position">
<i class="la la-code-fork"></i>
</div>
</div>
</div>
<div class="form-group">
<h5>Input addon with Right Icon
                              <span class="required">*</span>
</h5>
<div class="controls">
<div class="input-group">
<input class="form-control" data-validation-required-message="This field is required" placeholder="Addon To Right" type="text"/>
<div class="input-group-append">
<span class="input-group-text" id="basic-addon5"><i class="la la-suitcase"></i></span>
</div>
</div>
</div>
</div>
<div class="form-group">
<h5>Maximum Character Length
                              <span class="required">*</span>
</h5>
<div class="controls">
<input class="form-control" data-validation-required-message="This field is required" maxlength="10" name="maxChar" required="" type="text"/>
</div>
<p>Add <code>maxlength</code> attribute for maximum number
                              of characters to accept. Also use <code>data-validation-maxlength-message</code>                              attribute for maxlength failure message</p>
</div>
<div class="form-group">
<h5>Minimum Character Length
                              <span class="required">*</span>
</h5>
<div class="controls">
<input class="form-control" data-validation-required-message="This field is required" minlength="6" name="minChar" required="" type="text"/>
<p>Add <code>minlength</code> attribute for minimum number
                                of characters to accept. Also use <code>data-validation-minlength-message</code>                                attribute for minlength failure message</p>
</div>
</div>
<div class="form-group">
<h5>Only Numbers
                              <span class="required">*</span>
</h5>
<div class="controls">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">$</span>
</div>
<input class="form-control" data-validation-required-message="This field is required" name="onlyNum" required="" type="number"/>
<div class="input-group-append">
<span class="input-group-text">.00</span>
</div>
</div>
</div>
</div>
<div class="form-group">
<h5>Maximum Number
                              <span class="required">*</span>
</h5>
<small><i>Must be lower than 25</i></small>
<div class="controls">
<input class="form-control" data-validation-required-message="This field is required" max="25" name="maxNum" required="" type="text"/>
</div>
<p>Add <code>max</code> attribute for maximum number to
                              accept. Also use <code>data-validation-max-message</code>                              attribute for max failure message</p>
</div>
<div class="form-group">
<h5>Minimum Number
                              <span class="required">*</span>
</h5>
<small><i>Must be higher than 10</i></small>
<div class="controls">
<input class="form-control" data-validation-required-message="This field is required" min="10" name="minNum" required="" type="text"/>
</div>
<p>Add <code>min</code> attribute for minimum number to
                              accept. Also use <code>data-validation-min-message</code>                              attribute for min failure message</p>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="form-group">
<h5>File Input Field
                              <span class="required">*</span>
</h5>
<div class="controls">
<input class="form-control" name="file" required="" type="file"/>
</div>
</div>
<div class="form-group">
<h5>Custom Required Message
                              <span class="required">*</span>
</h5>
<div class="controls">
<input class="form-control" data-validation-required-message="This is custom message" name="textRange" placeholder="Custom Message" required="" type="text"/>
<p>Add <code>data-validation-required-message</code> attribute
                                for Custom required failure message</p>
</div>
</div>
<div class="form-group">
<h5>Text Input Range
                              <span class="required">*</span>
</h5>
<div class="controls">
<input class="form-control" data-validation-required-message="This field is required" maxlength="20" minlength="10" name="text" placeholder="Enter number between 10 &amp; 20" required="" type="text"/>
</div>
</div>
<div class="form-group">
<h5>Input with Button
                              <span class="required">*</span>
</h5>
<div class="controls">
<div class="input-group">
<input class="form-control" placeholder="Button on right" required="" type="text"/>
<div class="input-group-append">
<button class="btn btn-warning" type="button">
<i class="la la-pencil"></i>
</button>
</div>
</div>
</div>
</div>
<div class="form-group">
<h5>Touchspin</h5>
<div class="controls">
<div class="input-group">
<input class="form-control touchspin" required="" type="text"/>
</div>
</div>
</div>
<div class="form-group">
<h5>No Characters, Only Numbers
                              <span class="required">*</span>
</h5>
<div class="controls">
<input class="form-control" data-validation-containsnumber-message="No Characters Allowed, Only Numbers" data-validation-containsnumber-regex="(\d)+" name="noChar" required="" type="text"/>
</div>
</div>
<div class="form-group">
<h5>Pattern
                              <span class="required">*</span>
<small><i>Must start with 'a' and end with 'z'</i></small>
</h5>
<div class="controls">
<input class="form-control" data-validation-pattern-message="Must start with 'a' and end with 'z'" name="pattern" pattern="a.*z" required="" type="text"/>
<p>Add <code>pattern</code> attribute to set input pattern.
                                Also use <code>data-validation-pattern-message</code>                                attribute for pattern failure message</p>
</div>
</div>
<div class="form-group">
<h5>Enter URL
                              <span class="required">*</span>
</h5>
<div class="controls">
<input class="form-control" data-validation-regex-message="Only Valid URL's" data-validation-regex-regex="((http[s]?|ftp[s]?):\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*" placeholder="Add URL" type="text"/>
<p>Add <code>data-validation-regex-regex</code> attribute
                                for regular expression. Also use <code>data-validation-regex-message</code>                                attribute for regex failure message</p>
</div>
</div>
<div class="form-group">
<h5>Enter Email Address
                              <span class="required">*</span>
</h5>
<div class="controls">
<input class="form-control" data-validation-regex-message="Enter Valid Email" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" placeholder="Email Address" type="text"/>
</div>
</div>
<div class="form-group">
<h5>Enter Date
                              <span class="required">*</span>
</h5>
<div class="controls">
<input class="form-control" data-validation-regex-message="Enter Valid Date" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" placeholder="MM/DD/YYYY" type="text"/>
</div>
</div>
<div class="form-group">
<h5>Basic Select
                              <span class="required">*</span>
</h5>
<div class="controls">
<select class="form-control" id="select" name="select" required="">
<option value="">Select Your City</option>
<option value="1">Amsterdam</option>
<option value="2">Antwerp</option>
<option value="3">Athens</option>
<option value="4">Barcelona</option>
<option value="5">Berlin</option>
<option value="6">Birmingham</option>
<option value="7">Bradford</option>
<option value="8">Bremen</option>
<option value="9">Brussels</option>
<option value="10">Bucharest</option>
<option value="11">Budapest</option>
<option value="12">Cologne</option>
<option value="13">Copenhagen</option>
<option value="14">Dortmund</option>
<option value="15">Dresden</option>
<option value="16">Dublin</option>
</select>
</div>
</div>
<div class="form-group">
<h5>Basic Textarea
                              <span class="required">*</span>
</h5>
<div class="controls">
<textarea class="form-control" id="textarea" name="textarea" placeholder="Basic Textarea" required=""></textarea>
</div>
</div>
<div class="text-right">
<button class="btn btn-success" type="submit">Submit <i class="la la-thumbs-o-up position-right"></i></button>
<button class="btn btn-danger" type="reset">Reset <i class="la la-refresh position-right"></i></button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Input Validation end -->
<!-- Checkbox Validation start -->
<section class="checkbox-validation">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Checkbox Validation</h4>
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
<form class="form-horizontal" novalidate="">
<div class="row">
<div class="col-xl-6 col-lg-12">
<div class="row">
<div class="col-sm-6 col-12">
<div class="form-group">
<h5>
<strong>Basic Checkbox </strong>
<span class="required">*</span>
</h5>
<div class="controls">
<div class="skin skin-square">
<input id="single_checkbox" required="" type="checkbox" value=""/>
<label for="single_checkbox">I am unchecked Checkbox</label>
</div>
</div>
</div>
<div class="form-group">
<h5>
<strong>Checkbox Group </strong>
<span class="required">*</span>
</h5>
<div class="controls">
<div>
<div class="skin skin-square">
<input id="check_group1" name="basic_checkbox" required="" type="checkbox" value=""/>
<label for="check_group1">I am unchecked Checkbox</label>
</div>
</div>
<div>
<div class="skin skin-square">
<input id="check_group2" name="basic_checkbox" type="checkbox" value=""/>
<label for="check_group2">I am unchecked too</label>
</div>
</div>
</div>
</div>
<div class="form-group">
<h5>
<strong>Inline Checkbox Group </strong>
<span class="required">*</span>
</h5>
<div class="controls">
<div class="skin skin-square">
<input id="check_inline1" name="inline_checkbox" required="" type="checkbox" value=""/>
<label for="check_inline1">I am unchecked Checkbox</label>
</div>
<div class="skin skin-square">
<input id="check_inline2" name="inline_checkbox" type="checkbox" value=""/>
<label for="check_inline2">I am unchecked too</label>
</div>
<div class="skin skin-square">
<input id="check_inline3" name="inline_checkbox" type="checkbox" value=""/>
<label for="check_inline3">You can check me</label>
</div>
</div>
</div>
<div class="form-group">
<h5>
<strong>Maximum Checkbox selection</strong>
<span class="required">*</span>
</h5>
<div class="controls">
<div>
<div class="skin skin-square">
<input data-validation-maxchecked-maxchecked="2" data-validation-maxchecked-message="Don't be greedy!" id="check_max1" name="max_checkbox" required="" type="checkbox" value=""/>
<label for="check_max1">I am unchecked Checkbox</label>
</div>
</div>
<div>
<div class="skin skin-square">
<input id="check_max2" name="max_checkbox" type="checkbox" value=""/>
<label for="check_max2">I am unchecked too</label>
</div>
</div>
<div>
<div class="skin skin-square">
<input id="check_max3" name="max_checkbox" type="checkbox" value=""/>
<label for="check_max3">You can check me</label>
</div>
</div>
<p>Select any 2 options</p>
</div>
</div>
</div>
<div class="col-sm-6 col-12">
<div class="form-group">
<h5>
<strong>Minimum Checkbox selection</strong>
<span class="required">*</span>
</h5>
<div class="controls">
<div>
<div class="skin skin-square">
<input data-validation-minchecked-message="Choose at least two" data-validation-minchecked-minchecked="2" id="check_min1" name="min_checkbox" required="" type="checkbox" value=""/>
<label for="check_min1">I am unchecked Checkbox</label>
</div>
</div>
<div>
<div class="skin skin-square">
<input id="check_min2" name="min_checkbox" type="checkbox" value=""/>
<label for="check_min2">I am unchecked too</label>
</div>
</div>
<div>
<div class="skin skin-square">
<input id="check_min3" name="min_checkbox" type="checkbox" value=""/>
<label for="check_min3">You can check me</label>
</div>
</div>
<p>Select any 2 options</p>
</div>
</div>
<div class="form-group">
<h5>
<strong>Radio Group </strong>
<span class="required">*</span>
</h5>
<div class="controls">
<div class="skin skin-square">
<input id="radio1" name="basic_radio" required="" type="radio" value="1"/>
<label for="radio1">Check Me</label>
</div>
<div class="skin skin-square">
<input id="radio2" name="basic_radio" type="radio" value="2"/>
<label for="radio2">Or Me</label>
</div>
</div>
</div>
<div class="form-group">
<h5>
<strong>Inline Radio Group </strong>
<span class="required">*</span>
</h5>
<div class="controls">
<div class="skin skin-square">
<input id="radio_inline1" name="inline_radio" required="" type="radio" value="Yes"/>
<label for="radio_inline1">Check Me</label>
</div>
<div class="skin skin-square">
<input id="radio_inline2" name="inline_radio" type="radio" value="No"/>
<label for="radio_inline2">Or Me</label>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="row">
<div class="col-sm-6 col-12">
<div class="form-group">
<h5>
<strong>Styled Checkbox </strong>
<span class="required">*</span>
</h5>
<div class="controls">
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="customCheck" name="styled_single_checkbox" required="" type="checkbox" value="single"/>
<label class="custom-control-label" for="customCheck">Check this custom checkbox</label>
</div>
</div>
</div>
<div class="form-group">
<h5>
<strong>Styled Checkbox Group </strong>
<span class="required">*</span>
</h5>
<div class="controls">
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="customCheck1" name="styled_checkbox" required="" type="checkbox" value="x"/>
<label class="custom-control-label" for="customCheck1">I am unchecked Checkbox</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="customCheck2" name="styled_checkbox" required="" type="checkbox" value="y"/>
<label class="custom-control-label" for="customCheck2">I am unchecked too</label>
</div>
</div>
</div>
<div class="form-group">
<h5>
<strong>Inline Styled Checkbox Group </strong>
<span class="required">*</span>
</h5>
<div class="controls">
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="customCheck3" name="styled_inline_checkbox" required="" type="checkbox" value="x"/>
<label class="custom-control-label" for="customCheck3">I am unchecked Checkbox</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="customCheck4" name="styled_inline_checkbox" type="checkbox" value="y"/>
<label class="custom-control-label" for="customCheck4">I am unchecked too</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="customCheck5" name="styled_inline_checkbox" type="checkbox" value="c"/>
<label class="custom-control-label" for="customCheck5">You can check me</label>
</div>
</div>
</div>
<div class="form-group">
<h5>
<strong>Maximum Styled Checkbox selection</strong>
<span class="required">*</span>
</h5>
<div class="controls">
<div class="custom-control custom-checkbox">
<input class="custom-control-input" data-validation-maxchecked-maxchecked="2" data-validation-maxchecked-message="Don't be greedy!" id="customCheck6" name="styled_max_checkbox" required="" type="checkbox"/>
<label class="custom-control-label" for="customCheck6">I am unchecked Checkbox</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="customCheck7" name="styled_max_checkbox" type="checkbox"/>
<label class="custom-control-label" for="customCheck7">I am unchecked too</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="customCheck8" name="styled_max_checkbox" type="checkbox"/>
<label class="custom-control-label" for="customCheck8">You can check me</label>
</div>
</div>
<p>Select any 2 options</p>
</div>
</div>
<div class="col-sm-6 col-12">
<div class="form-group">
<h5>
<strong>Minimum Styled Checkbox selection</strong>
<span class="required">*</span>
</h5>
<div class="controls">
<div class="custom-control custom-checkbox">
<input class="custom-control-input" data-validation-minchecked-message="Choose at least two" data-validation-minchecked-minchecked="2" id="customCheck9" name="styled_min_checkbox" required="" type="checkbox" value="1"/>
<label class="custom-control-label" for="customCheck9">I am unchecked Checkbox</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="customCheck10" name="styled_min_checkbox" type="checkbox" value="2"/>
<label class="custom-control-label" for="customCheck10">I am unchecked too</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="customCheck11" name="styled_min_checkbox" type="checkbox" value="3"/>
<label class="custom-control-label" for="customCheck11">You can check me</label>
</div>
</div>
<p>Select any 2 options</p>
</div>
<div class="form-group">
<h5>
<strong>Styled Radio Group </strong>
<span class="required">*</span>
</h5>
<div class="controls">
<div class="custom-control custom-radio">
<input class="custom-control-input" id="styled_radio1" name="styled_radio" required="" type="radio" value="1"/>
<label class="custom-control-label" for="styled_radio1">Check me</label>
</div>
<div class="custom-control custom-radio">
<input class="custom-control-input" id="styled_radio2" name="styled_radio" required="" type="radio" value="2"/>
<label class="custom-control-label" for="styled_radio2">Or me</label>
</div>
</div>
</div>
<div class="form-group">
<h5>
<strong>Inline Styled Radio Group </strong>
<span class="required">*</span>
</h5>
<div class="controls">
<div class="custom-control custom-radio">
<input class="custom-control-input" id="styled_radio_inline1" name="styled_inline_radio" required="" type="radio" value="Yes"/>
<label class="custom-control-label" for="styled_radio_inline1">Check me</label>
</div>
<div class="custom-control custom-radio">
<input class="custom-control-input" id="styled_radio_inline2" name="styled_inline_radio" type="radio" value="No"/>
<label class="custom-control-label" for="styled_radio_inline2">Or me</label>
</div>
</div>
</div>
</div>
</div>
<div class="text-right">
<button class="btn btn-success" type="submit">Submit <i class="la la-thumbs-o-up position-right"></i></button>
<button class="btn btn-danger" type="reset">Reset <i class="la la-refresh position-right"></i></button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Checkbox Validation end -->
<!-- Switch Validation start -->
<section class="switch-validation">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Switch Validation</h4>
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
<div class="card-contenet">
<div class="card-body">
<form class="form-horizontal" novalidate="">
<div class="row">
<div class="col-sm-6 col-12">
<div class="form-group">
<h5>
<strong>Single Switch </strong>
<span class="required">*</span>
</h5>
<div class="controls">
<input class="switchBootstrap" id="single_switch" name="single_switch" required="" type="checkbox"/>
<span class="ml-1">
<label for="single_switch">I am unchecked Switch</label>
</span>
</div>
</div>
<div class="form-group">
<h5>
<strong>Switch Group </strong>
<span class="required">*</span>
</h5>
<div class="controls">
<div class="pb-1">
<input class="switchBootstrap" id="switch_group1" name="basic_switch" required="" type="checkbox"/>
<span class="ml-1">
<label for="switch_group1">I am unchecked Switch</label>
</span>
</div>
<div class="pb-1">
<input class="switchBootstrap" id="switch_group2" name="basic_switch" type="checkbox"/>
<span class="ml-1">
<label for="switch_group2">I am unchecked too</label>
</span>
</div>
<div>
<input class="switchBootstrap" id="switch_group3" name="basic_switch" type="checkbox"/>
<span class="ml-1">
<label for="switch_group3">You can check me</label>
</span>
</div>
</div>
</div>
<div class="form-group">
<h5>
<strong>Inline Switch Group </strong>
<span class="required">*</span>
</h5>
<div class="controls">
<div class="pb-1">
<input class="switchBootstrap" id="switch_inline1" name="inline_switch" required="" type="checkbox"/>
<span class="ml-1">
<label for="switch_inline1">I am unchecked Switch</label>
</span>
</div>
<div>
<input class="switchBootstrap" id="switch_inline2" name="inline_switch" type="checkbox"/>
<span class="ml-1">
<label for="switch_inline2">I am unchecked too</label>
</span>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-12">
<div class="form-group">
<h5>
<strong>Single Switchery </strong>
<span class="required">*</span>
</h5>
<div class="controls">
<input class="switchery" name="single_switchery" required="" type="checkbox"/>
<span class="ml-1">I am unchecked Switchery</span>
</div>
</div>
<div class="form-group">
<h5>
<strong>Switchery Group </strong>
<span class="required">*</span>
</h5>
<div class="controls">
<div class="pb-1">
<input class="switchery" id="switchery_group1" name="basic_switchery" required="" type="checkbox"/>
<span class="ml-1">
<label for="switchery_group1">I am unchecked Switchery</label>
</span>
</div>
<div class="pb-1">
<input class="switchery" id="switchery_group2" name="basic_switchery" type="checkbox"/>
<span class="ml-1">
<label for="switchery_group2">I am unchecked too</label>
</span>
</div>
<div>
<input class="switchery" id="switchery_group3" name="basic_switchery" type="checkbox"/>
<span class="ml-1">
<label for="switchery_group3">You can check me</label>
</span>
</div>
</div>
</div>
<div class="form-group">
<h5>
<strong>Inline Switchery Group </strong>
<span class="required">*</span>
</h5>
<div class="controls">
<div class="pb-1">
<input class="switchery" id="switchery_inline1" name="inline_switchery" required="" type="checkbox"/>
<span class="ml-1">
<label for="switchery_inline1">I am unchecked Switchery</label>
</span>
</div>
<div>
<input class="switchery" id="switchery_inline2" name="inline_switchery" type="checkbox"/>
<span class="ml-1">
<label for="switchery_inline2">I am unchecked too</label>
</span>
</div>
</div>
</div>
<div class="text-right">
<button class="btn btn-success" type="submit">Submit <i class="ft-thumbs-up position-right"></i></button>
<button class="btn btn-danger" type="reset">Reset <i class="ft-refresh-cw position-right"></i></button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Switch Validation end -->
</div>
