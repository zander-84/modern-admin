<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ExComponentToolbarAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Toolbar</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="ex-component-toolbar.html#">Extra Components</a>
</li>
<li class="breadcrumb-item active">Toolbar
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="ex-component-toolbar.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="ex-component-toolbar.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="ex-component-toolbar.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="ex-component-toolbar.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Basic section start -->
<section id="basic">
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic</h4>
</div>
<div class="card-body">
<div class="card-body">
<div class="row">
<div class="col-md-3 col-sm-6 mb-3">
<h4 class="text-center mb-2">Default</h4>
<div class="btn-toolbar mx-auto" data-toolbar="user-options"><i class="ft-settings"></i></div>
</div>
<div class="col-md-3 col-sm-6 mb-3">
<h4 class="text-center mb-2">Light Shade</h4>
<div class="btn-toolbar btn-toolbar-light mx-auto" data-toolbar="user-options" data-toolbar-style="light"><i class="ft-settings"></i></div>
</div>
<div class="col-md-3 col-sm-6 mb-3">
<h4 class="text-center mb-2">Dark Shade</h4>
<div class="btn-toolbar btn-toolbar-dark mx-auto" data-toolbar="user-options" data-toolbar-style="dark"><i class="ft-settings"></i></div>
</div>
<div class="col-md-3 col-sm-6 mb-3">
<h4 class="text-center mb-2">On Click</h4>
<div class="btn-toolbar btn-toolbar-info-o mx-auto" data-toolbar="transport-options-o" data-toolbar-style="info-o"><i class="ft-settings"></i></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Basic section end -->
<!-- Colors section start -->
<section id="colors">
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Colors</h4>
</div>
<div class="card-body">
<div class="card-body">
<div class="row">
<div class="col-lg-2 col-md-3 col-sm-6 mb-3">
<h4 class="text-center mb-2">Primary</h4>
<div class="btn-toolbar btn-toolbar-primary mx-auto" data-toolbar="user-options" data-toolbar-style="primary"><i class="ft-settings"></i></div>
</div>
<div class="col-lg-2 col-md-3 col-sm-6 mb-3">
<h4 class="text-center mb-2">Danger</h4>
<div class="btn-toolbar btn-toolbar-danger mx-auto" data-toolbar="user-options" data-toolbar-style="danger"><i class="ft-settings"></i></div>
</div>
<div class="col-lg-2 col-md-3 col-sm-6 mb-3">
<h4 class="text-center mb-2">Warning</h4>
<div class="btn-toolbar btn-toolbar-warning mx-auto" data-toolbar="user-options" data-toolbar-style="warning"><i class="ft-settings"></i></div>
</div>
<div class="col-lg-2 col-md-3 col-sm-6 mb-3">
<h4 class="text-center mb-2">Info</h4>
<div class="btn-toolbar btn-toolbar-info mx-auto" data-toolbar="user-options" data-toolbar-style="info"><i class="ft-settings"></i></div>
</div>
<div class="col-lg-2 col-md-3 col-sm-6 mb-3">
<h4 class="text-center mb-2">Success</h4>
<div class="btn-toolbar btn-toolbar-success mx-auto" data-toolbar="user-options" data-toolbar-style="success"><i class="ft-settings"></i></div>
</div>
<div class="col-lg-2 col-md-3 col-sm-6 mb-3">
<h4 class="text-center mb-2">Info-o</h4>
<div class="btn-toolbar btn-toolbar-info-o mx-auto" data-toolbar="user-options" data-toolbar-style="info-o"><i class="ft-settings"></i></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Colors section end -->
<!-- Positions section start -->
<section id="positions">
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Positions</h4>
</div>
<div class="card-body">
<div class="card-body">
<div class="row">
<div class="col-md-3 col-sm-6 mb-3">
<h4 class="text-center mb-2">Top</h4>
<div class="btn-toolbar btn-toolbar-info mx-auto" data-toolbar="set-01" data-toolbar-style="info"><i class="ft-chevron-up"></i></div>
</div>
<div class="col-md-3 col-sm-6 mb-3">
<h4 class="text-center mb-2">Left</h4>
<div class="btn-toolbar btn-toolbar-success mx-auto" data-toolbar="set-02" data-toolbar-style="success"><i class="ft-chevron-left"></i></div>
</div>
<div class="col-md-3 col-sm-6 mb-3">
<h4 class="text-center mb-2">Bottom</h4>
<div class="btn-toolbar btn-toolbar-warning mx-auto" data-toolbar="set-03" data-toolbar-style="warning"><i class="ft-chevron-down"></i></div>
</div>
<div class="col-md-3 col-sm-6 mb-3">
<h4 class="text-center mb-2">Right</h4>
<div class="btn-toolbar btn-toolbar-danger mx-auto" data-toolbar="set-04" data-toolbar-style="danger"><i class="ft-chevron-right"></i></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Positions section end -->
<!-- Animations section start -->
<section id="animations">
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Animations</h4>
</div>
<div class="card-body">
<div class="card-body">
<div class="row">
<div class="col-lg-2 col-md-3 col-sm-6 mb-3">
<h4 class="text-center mb-2">Standard</h4>
<div class="btn-toolbar btn-toolbar-primary mx-auto" data-toolbar="transport-options" data-toolbar-animation="standard" data-toolbar-style="primary"><i class="la la-space-shuttle"></i></div>
</div>
<div class="col-lg-2 col-md-3 col-sm-6 mb-3">
<h4 class="text-center mb-2">Flip</h4>
<div class="btn-toolbar btn-toolbar-danger mx-auto" data-toolbar="transport-options" data-toolbar-animation="flip" data-toolbar-style="danger"><i class="la la-automobile"></i></div>
</div>
<div class="col-lg-2 col-md-3 col-sm-6 mb-3">
<h4 class="text-center mb-2">Grow</h4>
<div class="btn-toolbar btn-toolbar-warning mx-auto" data-toolbar="transport-options" data-toolbar-animation="grow" data-toolbar-style="warning"><i class="la la-bicycle"></i></div>
</div>
<div class="col-lg-2 col-md-3 col-sm-6 mb-3">
<h4 class="text-center mb-2">Fly In</h4>
<div class="btn-toolbar btn-toolbar-info mx-auto" data-toolbar="transport-options" data-toolbar-animation="flyin" data-toolbar-style="info"><i class="la la-subway"></i></div>
</div>
<div class="col-lg-2 col-md-3 col-sm-6 mb-3">
<h4 class="text-center mb-2">Bounce</h4>
<div class="btn-toolbar btn-toolbar-success mx-auto" data-toolbar="transport-options" data-toolbar-animation="bounce" data-toolbar-style="success"><i class="la la-subway"></i></div>
</div>
<div class="col-lg-2 col-md-3 col-sm-6 mb-3">
<h4 class="text-center mb-2">Grow</h4>
<div class="btn-toolbar btn-toolbar-info-o mx-auto" data-toolbar="transport-options" data-toolbar-animation="grow" data-toolbar-style="info-o"><i class="la la-ship"></i></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Animations section end -->
<!-- Creating buttons section start -->
<section id="create-buttons">
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Creating Buttons</h4>
</div>
<div class="card-body">
<div class="card-body">
<p>The button can be created by adding the class .btn-toolbar to
                      a html element e.g. a div, a, span, button, while the colors
                      can be controller with different CSS classes.</p>
<table class="table table-bordered table-lg">
<thead>
<tr>
<th class="text-center">#</th>
<th class="text-center">Toolbar</th>
<th>Code</th>
</tr>
</thead>
<tbody>
<tr>
<th class="text-center" scope="row">1</th>
<td>
<div class="mx-auto btn-toolbar"><i class="ft-settings"></i></div>
</td>
<td><pre class="prettyprint"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn-toolbar"</span><span class="tag">&gt;</span><span class="pln">...</span><span class="tag">&lt;/div&gt;</span></pre></td>
</tr>
<tr>
<th class="text-center" scope="row">2</th>
<td>
<div class="mx-auto btn-toolbar btn-toolbar-primary"><i class="ft-settings"></i></div>
</td>
<td><pre class="prettyprint"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn-toolbar btn-toolbar-primary"</span><span class="tag">&gt;</span><span class="pln">...</span><span class="tag">&lt;/div&gt;</span></pre></td>
</tr>
<tr>
<th class="text-center" scope="row">3</th>
<td>
<div class="mx-auto btn-toolbar btn-toolbar-danger"><i class="ft-settings"></i></div>
</td>
<td><pre class="prettyprint"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn-toolbar btn-toolbar-danger"</span><span class="tag">&gt;</span><span class="pln">...</span><span class="tag">&lt;/div&gt;</span></pre></td>
</tr>
<tr>
<th class="text-center" scope="row">4</th>
<td>
<div class="mx-auto btn-toolbar btn-toolbar-warning"><i class="ft-settings"></i></div>
</td>
<td><pre class="prettyprint"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn-toolbar btn-toolbar-warning"</span><span class="tag">&gt;</span><span class="pln">...</span><span class="tag">&lt;/div&gt;</span></pre></td>
</tr>
<tr>
<th class="text-center" scope="row">5</th>
<td>
<div class="mx-auto btn-toolbar btn-toolbar-info"><i class="ft-settings"></i></div>
</td>
<td><pre class="prettyprint"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn-toolbar btn-toolbar-info"</span><span class="tag">&gt;</span><span class="pln">...</span><span class="tag">&lt;/div&gt;</span></pre></td>
</tr>
<tr>
<th class="text-center" scope="row">6</th>
<td>
<div class="mx-auto btn-toolbar btn-toolbar-success"><i class="ft-settings"></i></div>
</td>
<td><pre class="prettyprint"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn-toolbar btn-toolbar-success"</span><span class="tag">&gt;</span><span class="pln">...</span><span class="tag">&lt;/div&gt;</span></pre></td>
</tr>
<tr>
<th class="text-center" scope="row">7</th>
<td>
<div class="mx-auto btn-toolbar btn-toolbar-info-o"><i class="ft-settings"></i></div>
</td>
<td><pre class="prettyprint"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn-toolbar btn-toolbar-info-o"</span><span class="tag">&gt;</span><span class="pln">...</span><span class="tag">&lt;/div&gt;</span></pre></td>
</tr>
<tr>
<th class="text-center" scope="row">8</th>
<td>
<div class="mx-auto btn-toolbar btn-toolbar-dark"><i class="ft-settings"></i></div>
</td>
<td><pre class="prettyprint"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn-toolbar btn-toolbar-dark"</span><span class="tag">&gt;</span><span class="pln">...</span><span class="tag">&lt;/div&gt;</span></pre></td>
</tr>
<tr>
<th class="text-center" scope="row">9</th>
<td>
<div class="mx-auto btn-toolbar btn-toolbar-light"><i class="ft-settings"></i></div>
</td>
<td><pre class="prettyprint"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn-toolbar btn-toolbar-light"</span><span class="tag">&gt;</span><span class="pln">...</span><span class="tag">&lt;/div&gt;</span></pre></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Creating buttons section end -->
<!-- Features section start -->
<section id="features">
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Features</h4>
</div>
<div class="card-body">
<div class="card-body">
<ul>
<li>Straightforward implementation with simple options.</li>
<li>Includes a set of css buttons for use with the toolbars.</li>
<li>You can run as many toolbars as required.</li>
<li>Toolbars can be attached to any element required.</li>
<li>Toolbar icons are easily customized through the popular
                        <a href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a>                        icons.</li>
<li>Plenty of options to customized how your toolbar functions
                        including position, animations and events.</li>
<li>Toolbars are responsive and follow the buttons on resize.</li>
<li>Makes full use of CSS3 for animations.</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Features section end -->
<div class="toolbar-icons hidden" id="user-options">
<a href="ex-component-toolbar.html#"><i class="la la-user"></i></a>
<a href="ex-component-toolbar.html#"><i class="la la-star-o"></i></a>
<a href="ex-component-toolbar.html#"><i class="la la-code"></i></a>
<a href="ex-component-toolbar.html#"><i class="la la-archive"></i></a>
<a href="ex-component-toolbar.html#"><i class="la la-certificate"></i></a>
</div>
<div class="toolbar-icons hidden" id="transport-options">
<a href="ex-component-toolbar.html#"><i class="la la-space-shuttle"></i></a>
<a href="ex-component-toolbar.html#"><i class="la la-automobile"></i></a>
<a href="ex-component-toolbar.html#"><i class="la la-bicycle"></i></a>
</div>
<div class="toolbar-icons hidden" id="transport-options-2">
<a href="ex-component-toolbar.html#"><i class="la la-space-shuttle"></i></a>
<a href="ex-component-toolbar.html#"><i class="la la-automobile"></i></a>
<a href="ex-component-toolbar.html#"><i class="la la-bicycle"></i></a>
</div>
<div class="toolbar-icons hidden" id="transport-options-o">
<a href="ex-component-toolbar.html#"><i class="la la-automobile"></i></a>
<a href="ex-component-toolbar.html#"><i class="la la-bicycle"></i></a>
<a href="ex-component-toolbar.html#"><i class="la la-ship"></i></a>
<a href="ex-component-toolbar.html#"><i class="la la-space-shuttle"></i></a>
</div>
<div class="toolbar-icons hidden" id="set-01-options">
<a href="ex-component-toolbar.html#"><i class="la la-area-chart"></i></a>
<a href="ex-component-toolbar.html#"><i class="la la-bar-chart"></i></a>
<a href="ex-component-toolbar.html#"><i class="la la-line-chart"></i></a>
</div>
<div class="toolbar-icons hidden" id="set-02-options">
<a href="ex-component-toolbar.html#"><i class="la la-android"></i></a>
<a href="ex-component-toolbar.html#"><i class="la la-apple"></i></a>
<a href="ex-component-toolbar.html#"><i class="la la-twitter"></i></a>
</div>
<div class="toolbar-icons hidden" id="set-03-options">
<a href="ex-component-toolbar.html#"><i class="la la-btc"></i></a>
<a href="ex-component-toolbar.html#"><i class="la la-eur"></i></a>
<a href="ex-component-toolbar.html#"><i class="la la-cny"></i></a>
</div>
<div class="toolbar-icons hidden" id="set-04-options">
<a href="ex-component-toolbar.html#"><i class="la la-heart-o"></i></a>
<a href="ex-component-toolbar.html#"><i class="la la-heart-o"></i></a>
<a href="ex-component-toolbar.html#"><i class="la la-heart-o"></i></a>
</div>
</div>
