<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\HandsonTableCellTypesAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">HandsonTable Cell Types</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="handson-table-cell-types.html#">HandsonTable</a>
</li>
<li class="breadcrumb-item active">Cell types
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="handson-table-cell-types.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="handson-table-cell-types.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="handson-table-cell-types.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="handson-table-cell-types.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Rendering custom HTML in cells start -->
<section id="custom-html">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Rendering custom HTML in cells</h4>
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
<p>This example shows how to use custom cell renderers to display
                      HTML content in a cell. This is a very powerful feature. Just
                      remember to escape any HTML code that could be used for XSS
                      attacks. In the below configuration.</p>
<div class="table-responsive">
<div class="hot handsontable htColumnHeaders" id="rendering"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Rendering custom HTML in cells end -->
<!-- Numeric start -->
<section id="numeric">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Numeric</h4>
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
<p>By default, Handson table treats all cell values as string type.
                      This is because "textarea" returns a string as its value. In
                      many cases you will prefer cell values to be treated as number
                      type. This allows to format numbers nicely and sort them correctly.</p>
<p>To trigger the Numeric cell type, use the option type: 'numeric'
                      in columns array or cells function. Make sure your cell values
                      are numbers and not strings as Handson table will not parse
                      strings to numbers. Numeric cell type uses Numbro.js as the
                      formatting library. Head over to their website to learn about
                      the formatting syntax.</p>
<p>To use number formatting style valid for your language (i18n),
                      load language definition to Numbro.js. See "Languages" section
                      in Numbro.js docs for more info.</p>
<div class="table-responsive">
<div class="hot handsontable htColumnHeaders" id="numericData"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Numeric end -->
<!-- Date Start -->
<section id="date">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Date</h4>
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
<p>All data entered to the data-typed cells are validated against
                      the default date format (DD/MM/YYYY), unless another format
                      is provided. If you enable the correctFormat config item, the
                      dates will be automatically formatted to match the desired
                      format.
                    </p>
<div class="table-responsive">
<div class="hot handsontable htColumnHeaders" id="dateDate"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Date end -->
<!-- Time start -->
<section id="time">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Time</h4>
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
<p>To use the Time cell type, set the type: 'time' option in the
                      columns array or the cells function. The Time cell uses Moment.js
                      as the time formatter, so be sure to add an additional file
                      in your "head" : /dist/moment/moment.js</p>
<p>All data entered to the time-typed cells are eventually validated
                      against the default time format (h:mm:ss a, which translates
                      to, for example, 9:30:00 am) unless another format is provided
                      as the timeFormat.</p>
<p>If you enable the correctFormat config item, the values will
                      be automatically formatted to match the desired time format.</p>
<div class="table-responsive">
<div class="hot handsontable htColumnHeaders" id="timeData"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Time end -->
<!-- Checkbox true/false values start -->
<section id="checkbox-value">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Checkbox true/false values</h4>
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
<p>This is default usage scenario when columns data have true or
                      false value and we want to display ony checkboxes.</p>
<div class="table-responsive">
<div class="hot handsontable htColumnHeaders" id="checkbox"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Checkbox true/false values start -->
<!-- Select start -->
<section id="select-editor">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Select</h4>
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
<p>Select editor should be considered an example how to write editors
                      rather than used as a fully featured editor. It is a much simpler
                      form of the Dropdown editor. It is suggested to use the latter
                      in your projects.</p>
<div class="table-responsive">
<div class="hot handsontable htColumnHeaders" id="select"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Select end -->
<!-- Dropdown start -->
<section id="dropdown-area">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Dropdown</h4>
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
<p>This example shows the usage of the Dropdown feature. Dropdown
                      is based on Autocomplete cell type. All options used by autocomplete
                      cell type apply to dropdown as well.</p>
<div class="table-responsive">
<div class="hot handsontable htColumnHeaders" id="dropdown"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Dropdown start -->
<!-- Autocomplete lazy mode start -->
<section id="autocomplete-area">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Autocomplete lazy mode</h4>
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
<p> This example shows the usage of the Autocomplete feature in the
                      default lazy mode. In this mode, user can choose one of the
                      suggested options while typing or enter a custom value that
                      is not included in the suggestions. In this mode, the mouse
                      and keyboard bindings are identical as in Handson table cell
                      type. The options are rendered from the source property which
                      can be an array, or a function that returns an array.</p>
<div class="table-responsive">
<div class="hot handsontable htColumnHeaders" id="autocomplete"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Autocomplete lazy mode end -->
<!-- Password cell type start -->
<section id="password-cell">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Password cell type</h4>
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
<p>This kind of cell behaves like a text cell with a difference
                      that it masks its value using asterisk in cell renderer. For
                      the cell editor, a ' input type="password" ' field is used.
                      Data is stored in the data source as plain text.</p>
<div class="table-responsive">
<div class="hot handsontable htColumnHeaders" id="password"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Password cell type end -->
<!-- Handson table start -->
<section id="handson-table">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Handson table</h4>
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
<p>This page shows using Handson table as a cell editor in Handson
                      table (sometimes referred as HOT-in-HOT). Mouse click outside
                      of the editor or on one of the cells in HOT-in-HOT applies
                      change. *apply change means: The value of the cell highlighted
                      or clicked in HOT-in-HOT is applied as new cell value in the
                      main HOT. If no cell in HOT-in-HOT is selected, the value of
                      the text field is used instead.</p>
<div class="table-responsive">
<div class="hot handsontable htColumnHeaders" id="handsontable"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Handson table end -->
</div>
</div>
</div>