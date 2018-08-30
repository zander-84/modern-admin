<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ExComponentTreeViewsAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Bootstrap Tree View</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="ex-component-tree-views.html#">Extra Components</a>
</li>
<li class="breadcrumb-item active">Tree Views
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="ex-component-tree-views.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="ex-component-tree-views.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="ex-component-tree-views.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="ex-component-tree-views.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!--  Tree example section start -->
<section id="tree-examples">
<div class="row match-height">
<!-- Default Treeview -->
<div class="col-md-4 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default</h4>
</div>
<div class="card-body">
<div class="card-body">
<div id="default-treeview"></div>
</div>
</div>
</div>
</div>
<!-- Collapsed Treeview -->
<div class="col-md-4 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Collapsed</h4>
</div>
<div class="card-body">
<div class="card-body">
<div id="collapsed-treeview"></div>
</div>
</div>
</div>
</div>
<!-- Expanded Treeview -->
<div class="col-md-4 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Expanded</h4>
</div>
<div class="card-body">
<div class="card-body">
<div id="expanded-treeview"></div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<!-- Primary Colored Treeview -->
<div class="col-md-4 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Primary Color Treeview</h4>
</div>
<div class="card-body">
<div class="card-body">
<div id="primary-color-treeview"></div>
</div>
</div>
</div>
</div>
<!-- Custom Icon Treeview -->
<div class="col-md-4 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Custom Icon</h4>
</div>
<div class="card-body">
<div class="card-body">
<div id="custom-icon-treeview"></div>
</div>
</div>
</div>
</div>
<!-- Tags As Badges Treeview -->
<div class="col-md-4 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tags As Badges</h4>
</div>
<div class="card-body">
<div class="card-body">
<div id="tags-badge-treeview"></div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<!-- No Border Treeview -->
<div class="col-md-4 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">No Border</h4>
</div>
<div class="card-body">
<div class="card-body">
<div id="no-border-treeview"></div>
</div>
</div>
</div>
</div>
<!-- Colourful Treeview -->
<div class="col-md-4 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Colourful</h4>
</div>
<div class="card-body">
<div class="card-body">
<div id="colourful-treeview"></div>
</div>
</div>
</div>
</div>
<!-- Node Override Treeview -->
<div class="col-md-4 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Node Override</h4>
</div>
<div class="card-body">
<div class="card-body">
<div id="node-override-treeview"></div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<!-- Link Enabled Treeview -->
<div class="col-md-4 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Link Enabled</h4>
</div>
<div class="card-body">
<div class="card-body">
<div id="link-enabled-treeview"></div>
</div>
</div>
</div>
</div>
<!-- Disabled Treeview -->
<div class="col-md-4 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Disabled</h4>
</div>
<div class="card-body">
<div class="card-body">
<div class="form-group">
<button class="btn btn-warning mr-2" id="btn-disable-all" type="button">Disable All</button>
<button class="btn btn-success" id="btn-enable-all" type="button">Enable All</button>
</div>
<div id="disabled-treeview"></div>
</div>
</div>
</div>
</div>
<!-- Data Treeview -->
<div class="col-md-4 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Data</h4>
</div>
<div class="card-body">
<div class="card-body">
<div id="data-treeview"></div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<!-- Searchable Tree -->
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Searchable Tree</h4>
</div>
<div class="card-body">
<div class="card-body">
<div class="form-group">
<div class="seachbox mb-2">
<input class="form-control round" id="input-search" name="input-search" placeholder="Search" type="text"/>
</div>
</div>
<div class="row mb-1">
<div class="col-md-8 col-sm-12">
<div class="form-group">
<label class="mr-1">
<input id="chk-ignore-case" type="checkbox" value="false"/> Ignore Case
                          </label>
<label class="mr-1">
<input id="chk-exact-match" type="checkbox" value="false"/> Exact Match
                          </label>
<label class="mr-1">
<input id="chk-reveal-results" type="checkbox" value="false"/> Reveal Results
                          </label>
</div>
</div>
<div class="col-md-4 col-sm-12">
<button class="btn btn-primary mr-2 mb-1 float-left" id="btn-search" type="button">Search</button>
<button class="btn btn-primary mb-1 float-left" id="btn-clear-search" type="button">Clear</button>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div id="searchable-tree"></div>
</div>
<div class="col-md-6 col-sm-12">
<div id="search-output"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Selectable Tree -->
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Selectable Tree</h4>
</div>
<div class="card-body">
<div class="card-body">
<div class="form-group">
<div class="seachbox mb-2">
<input class="form-control round" id="input-select-node" name="input-select-node" placeholder="Identify Node..." type="text"/>
</div>
</div>
<div class="row mb-1">
<div class="col-md-3 col-sm-12">
<div class="form-group">
<label>
<input id="chk-select-multi" type="checkbox" value="false"/> Multi Select
                          </label>
</div>
</div>
<div class="col-md-9 col-sm-12">
<div class="form-group text-center">
<button class="btn btn-success mr-2 mb-1 float-left select-node" id="btn-select-node" type="button">Select Node</button>
<button class="btn btn-danger mr-2 mb-1 float-left select-node" id="btn-unselect-node" type="button">Unselect Node</button>
<button class="btn btn-primary mb-1 float-left select-node" id="btn-toggle-selected" type="button">Toggle Node</button>
</div>
</div>
</div>
<div id="selectable-tree"></div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<!-- Expandible Tree -->
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Expandible Tree</h4>
</div>
<div class="card-body">
<div class="card-body">
<div class="form-group text-center">
<button class="btn btn-success mr-2" id="btn-expand-all" type="button">Expand All</button>
<button class="btn btn-warning" id="btn-collapse-all" type="button">Collapse All</button>
</div>
<div id="expandible-tree"></div>
</div>
</div>
</div>
</div>
<!-- Checkable Tree -->
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Checkable Tree</h4>
</div>
<div class="card-body">
<div class="card-body">
<div class="form-group text-center">
<button class="btn btn-success mr-2" id="btn-check-all" type="button">Check All</button>
<button class="btn btn-warning" id="btn-uncheck-all" type="button">Uncheck All</button>
</div>
<div id="checkable-tree"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Tree example section end -->
</div>
</div>
</div>