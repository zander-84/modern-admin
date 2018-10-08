<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\JqueryUiAutocompleteAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">jQuery UI autocomplete</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="jquery-ui-autocomplete.html#">jQuery UI</a>
</li>
<li class="breadcrumb-item active">Autocomplete
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="jquery-ui-autocomplete.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="jquery-ui-autocomplete.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="jquery-ui-autocomplete.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="jquery-ui-autocomplete.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Auto Complete section start -->
<section id="date-picker">
<div class="row">
<div class="col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Examples</h4>
<a class="heading-elements-toggle"><i class="ft-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-refresh"></i></a></li>
<li><a data-action="expand"><i class="ft-expand"></i></a></li>
<li><a data-action="close"><i class="ft-remove"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<fieldset class="form-group">
<label>Default Functionality</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-search"></i></span>
</div>
<input class="form-control ac-default" type="text"/>
</div>
<small>The Auto complete widgets provides suggestions while you type
                        into the field. Here the suggestions are tags for people
                        names, give "a" (for Aaron or Abel) a try.</small>
</fieldset>
<fieldset class="form-group">
<label>Accent Folding</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-search"></i></span>
</div>
<input class="form-control ac-accent-folding" type="text"/>
</div>
<small>The auto complete field uses a custom source option which will
                        match results that have accented characters even when the
                        text field doesn't contain accented characters. However if
                        the you type in accented characters in the text field it
                        is smart enough not to show results that aren't accented.
                        Try typing "Jo" to see "John" and "Jörn", then type "Jö"
                        to see only "Jörn".</small>
</fieldset>
<fieldset class="form-group">
<label>Categories</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-search"></i></span>
</div>
<input class="form-control ac-category" type="text"/>
</div>
<small>A categorized search result. Try typing "a" or "n".</small>
</fieldset>
<fieldset class="form-group">
<label>Combobox</label>
<select class="ac-combobox">
<option value="">Select one...</option>
<option value="ActionScript">ActionScript</option>
<option value="AppleScript">AppleScript</option>
<option value="Asp">Asp</option>
<option value="BASIC">BASIC</option>
<option value="C">C</option>
<option value="C++">C++</option>
<option value="Clojure">Clojure</option>
<option value="COBOL">COBOL</option>
<option value="ColdFusion">ColdFusion</option>
<option value="Erlang">Erlang</option>
<option value="Fortran">Fortran</option>
<option value="Groovy">Groovy</option>
<option value="Haskell">Haskell</option>
<option value="Java">Java</option>
<option value="JavaScript">JavaScript</option>
<option value="Lisp">Lisp</option>
<option value="Perl">Perl</option>
<option value="PHP">PHP</option>
<option value="Python">Python</option>
<option value="Ruby">Ruby</option>
<option value="Scala">Scala</option>
<option value="Scheme">Scheme</option>
</select>
<small>A custom widget built by composition of Auto complete and Button.
                        You can either type something into the field to get filtered
                        suggestions based on your input, or use the button to get
                        the full list of selections. The input is read from an existing
                        select-element for progressive enhancement, passed to Auto
                        complete with a customized source-option.</small>
</fieldset>
<fieldset class="form-group">
<label>Custom Data &amp; Display</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-search"></i></span>
</div>
<input class="form-control ac-project" type="text"/>
<input class="ac-project-id" type="hidden"/>
<p id="ac-project-description"></p>
</div>
<small>You can use your own custom data formats and displays by simply
                        overriding the default focus and select actions. Try typing
                        "j" to get a list of projects or just press the down arrow.</small>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Examples</h4>
<a class="heading-elements-toggle"><i class="ft-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-refresh"></i></a></li>
<li><a data-action="expand"><i class="ft-expand"></i></a></li>
<li><a data-action="close"><i class="ft-remove"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<fieldset class="form-group">
<label>Multiple Values</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-search"></i></span>
</div>
<input class="form-control ac-multiple-values" type="text"/>
</div>
<small>Usage: Type something, eg. "a" to see suggestions for tagging
                        with people names. Select a value, then continue typing to
                        add more.</small>
<small>This is an example showing how to use the source-option along
                        with some events to enable auto completing multiple values
                        into a single field.</small>
</fieldset>
<fieldset class="form-group">
<label>Remote Datasource</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-search"></i></span>
</div>
<input class="form-control ac-remote-datasource" type="text"/>
</div>
<small>The Auto complete widgets provides suggestions while you type
                        into the field. Here the suggestions are bird names, displayed
                        when at least two characters are entered into the field.</small>
<small>The datasource is a server-side script which returns JSON data,
                        specified via a simple URL for the source-option. In addition,
                        the minLength-option is set to 2 to avoid queries that would
                        return too many results and the select-event is used to display
                        some feedback.</small>
</fieldset>
<fieldset class="form-group">
<label>Remote With Caching</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-search"></i></span>
</div>
<input class="form-control ac-remote-caching" type="text"/>
</div>
<small>Usage: Enter at least two characters to get bird name suggestions.
                        Select a value to continue adding more names.</small>
<small>This is an example showing how to use the source-option along
                        with some events to enable auto completing multiple values
                        into a single field.</small>
</fieldset>
<fieldset class="form-group">
<label>Multiple, Remote</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-search"></i></span>
</div>
<input class="form-control ac-multiple-remote" type="text"/>
</div>
<small>Usage: Enter at least two characters to get bird name suggestions.
                        Select a value to continue adding more names.</small>
<small>This is an example showing how to use the source-option along
                        with some events to enable auto completing multiple values
                        into a single field.</small>
</fieldset>
<fieldset class="form-group">
<label>XML Data Parsed Once</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-search"></i></span>
</div>
<input class="form-control ac-xml-data-parse" type="text"/>
</div>
<small>Usage: Enter at least two characters to get bird name suggestions.
                        Select a value to continue adding more names.</small>
<small>This is an example showing how to use the source-option along
                        with some events to enable auto completing multiple values
                        into a single field.</small>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Auto Complete section end -->
</div>
