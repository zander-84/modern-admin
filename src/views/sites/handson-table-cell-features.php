<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\HandsonTableCellFeaturesAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">HandsonTable Cell Features</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="handson-table-cell-features.html#">HandsonTable</a>
</li>
<li class="breadcrumb-item active">Cell features
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="handson-table-cell-features.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="handson-table-cell-features.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="handson-table-cell-features.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="handson-table-cell-features.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Data validation start -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Data validation</h4>
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
<p>Use the validator (see options page) method to easily validate
                    synchronous or asynchronous changes to a cell. If you need more
                    control, beforeValidate and afterValidate plugin hooks are available
                    (see hooks page). In the below example, email_validator_fn is
                    an async validator that resolves after 1000 ms.</p>
<p>Use the allowInvalid option (see options page) to define if the
                    grid should accept input that does not validate. If you need
                    to modify the input (e.g. censor bad words, uppercase first letter),
                    use the plugin hook beforeChange (see hooks page).</p>
<p>By default all invalid cells are marked by htInvalid CSS class.
                    If you want to change class to another you can basically add
                    the invalidCellClassName option to Handson table settings. For
                    example.
                  </p>
<div class="table-responsive">
<div class="hot handsontable htColumnHeaders" id="validation"></div>
</div>
<p>Callback console: <code>[[row, col, oldValue, newValue], ...]</code></p>
<p>Edit the above grid to see callback</p>
<pre class="console" id="example1console"></pre>
</div>
</div>
</div>
</div>
</div>
<!-- Data validation end -->
<!-- Drag down in all directions start -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Drag down in all directions</h4>
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
<p>Notice the little square (fill handle) in the corner of the selected
                    cell. You can drag it (drag-down) to repeat the values from the
                    cell. Double click the fill handle in cell B4 (value "30") to
                    fill the selection down to the last value in neighbouring column,
                    just like it would in LibreOffice or google Docs.</p>
<div class="table-responsive">
<div class="hot handsontable htRowHeaders htColumnHeaders" id="drag"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Drag down in all directions end -->
<!-- Merged cells start -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Merged cells</h4>
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
<p>To enable the merge cells feature, set the mergeCells option to
                    be true or an array. To initialize Handson table with predefined
                    merged cells, provide merged cells details in form of an array:
                    mergeCells: [{row: 1, col: 1, rowspan: 2, colspan: 2}]</p>
<div class="table-responsive">
<div class="hot handsontable htRowHeaders htColumnHeaders" id="merged"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Merged cells end -->
<!-- Alignment start -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Alignment</h4>
<div class="heading-elements ">
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
<p>To initialize Handson table with predefined horizontal and vertical
                    alignment, provide className cells details in form of a grid,
                    columns or cell setting (see code sample below).</p>
<p>Available classNames:</p>
<ul>
<li>Horizontal: htLeft, htCenter, htRight, htJustify,</li>
<li>Vertical: htTop, htMiddle, htBottom.</li>
<li>Alignment changes can be tracked using afterSetCellMeta hook
                      callback.
                    </li>
</ul>
<div class="table-responsive">
<div class="hot htCenter handsontable htRowHeaders htColumnHeaders" id="alignment"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Alignment end -->
<!-- Read-only columns start -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Read-only columns</h4>
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
<p>In many usage cases, you will need to configure a certain column
                    to be read only. This column will be available for keyboard navigation
                    and CTRL+C. Only editing and pasting data will be disabled.</p>
<p>To make a column read-only, declare it in the columns setting.
                    You can also define a special renderer function that will dim
                    the read-only values.</p>
<div class="table-responsive">
<div class="hot handsontable htColumnHeaders" id="readOnly"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Read-only columns end -->
<!-- Non-editable columns start -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Non-editable columns</h4>
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
<p>In many cases you will need to configure a certain column to be
                    non-editable. Doing it does not change it's basic behavior (apart
                    from editing), which means you are still available to use keyboard
                    navigation, CTRL+C and CTRL+V functionalities, drag-to-fill etc.</p>
<p>To make a column non-editable, declare it in the columns setting.
                    You can also define a special renderer function that will dim
                    the editor value.</p>
<div class="table-responsive">
<div class="hot handsontable htColumnHeaders" id="nonEditable"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Non-editable columns end -->
</div>
</div>
</div>