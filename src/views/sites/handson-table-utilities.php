<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\HandsonTableUtilitiesAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">HandsonTable Utilities</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="handson-table-utilities.html#">HandsonTable</a>
</li>
<li class="breadcrumb-item active">Utilities
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="handson-table-utilities.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="handson-table-utilities.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="handson-table-utilities.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="handson-table-utilities.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Context menu with default options start -->
<section id="context-menu">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Context menu with default options</h4>
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
<p>To run the basic configuration of the Context Menu, just set
                      the contextMenu option to true.</p>
<p>From version 0.11, context menu also works for row and column
                      headers. When the context menu for the row header is opened,
                      the column options are disabled. Likewise, when the context
                      menu for the column header is opened, the row options are disabled</p>
<div class="table-respove">
<div class="hot handsontable htRowHeaders htColumnHeaders" id="context"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Context menu with default options end -->
<!-- Context menu with fully custom configuration start -->
<section id="menu-configuration">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Context menu with fully custom configuration</h4>
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
<p>For greatest configurability, you use contextMenu option as a
                      configuration object as described in jQuery contextMenu documentation.</p>
<p>This example shows how to set custom text, how to disable "Remove
                      row" and "Insert row above" for the first row and how to add
                      your own option.</p>
<div class="hot handsontable htRowHeaders htColumnHeaders" id="configuration"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Context menu with fully custom configuration end -->
<!-- Copy-paste configuration start -->
<section id="copy-paste">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Copy-paste configuration</h4>
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
<p>Copy and Paste feature are available in Handson table by default,
                      but only as key shortcuts (Ctrl (Cmd) + C and Ctrl (Cmd) +
                      V respectively).</p>
<p>This plugin makes them available also as a clickable options
                      in the context menu. Unfortunately, due to the browser's security
                      restrictions, Handson table is forced to use a third-party
                      flash-based library. We chose to use ZeroClipboard - it adds
                      a small invisible flash clip to your website, allowing the
                      user to click on it, and thus save data to the clipboard.</p>
<div class="table-respove">
<div class="hot handsontable htRowHeaders htColumnHeaders" id="copyPaste"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Copy-paste configuration end -->
<!-- Custom buttons start -->
<section id="custom-buttons">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Custom buttons</h4>
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
<p>The alter method can be used if you want to insert or remove
                      rows and columns using external buttons. The below example
                      uses the a custom made handson table.removeRow.js plugin for
                      that matter. Move your mouse over a row to see it.</p>
<p>You can programmatically select a cell using the selectCell method.
                      The below button implements it.</p>
<button class="intext-btn btn btn-primary mr-1" id="selectFirst">Select first cell</button>
<div class="checklist">
<label>
<input checked="checked" id="rowHeaders" type="checkbox"/> Show row headers</label>  
                      <label>
<input checked="checked" id="colHeaders" type="checkbox"/> Show col headers</label>
</div>
<div class="table-respove">
<div class="hot handsontable htRowHeaders htColumnHeaders" id="buttons"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Custom buttons end -->
<!-- Comments start -->
<section id="comments-table">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Comments</h4>
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
<p>With option comments: true, you can add and remove cell comments
                      through the context menu. To initialize Handson table with
                      predefined comments, provide comment cell property: {row: 1,
                      col: 1, comment: "Test comment"}</p>
<div class="table-respove">
<div class="hot handsontable htRowHeaders htColumnHeaders" id="comments"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Comments end -->
</div>
