<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\Layout2ColumnsAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">2 Columns</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="layout-2-columns.html#">Page Layouts</a>
</li>
<li class="breadcrumb-item active">2 Columns
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="layout-2-columns.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="layout-2-columns.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="layout-2-columns.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="layout-2-columns.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Description -->
<section class="card" id="description">
<div class="card-header">
<h4 class="card-title">Description</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="card-text">
<p>2 Columns layout is the most common and popular layout, it has a
                  navigation with content section. This layout use the common navbar
                  and footer sections, however you can add customized header or footer
                  on page level.</p>
<div class="alert bg-success alert-icon-left mb-2" role="alert">
<span class="alert-icon"><i class="la la-pencil-square"></i></span>
<span class="alert-icon"><i class="la la-pencil-square"></i></span>
                  Modern Admin Template default layout is 2 columns. If you do not define pageConfig
                  block on page or template level, it will consider 2 columns by
                  default.
                </div>
</div>
</div>
</div>
</section>
<!--/ Description -->
<!-- CSS Classes -->
<section class="card" id="css-classes">
<div class="card-header">
<h4 class="card-title">CSS Classes</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="card-text">
<p>This table contains all classes related to the 2 columns layout.
                  This is a custom layout classes for 2 columns layout page requirements.</p>
<p>All these options can be set via following classes:</p>
<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr>
<th>Classes</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row"><code>.2-columns</code></th>
<td>You can create 2 columns layout by adding <code>.2-columns</code>                          class in <code>&lt;body&gt;</code> tag.</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</section>
<!--/ CSS Classes -->
<!-- HTML Markup -->
<section class="card" id="html-markup">
<div class="card-header">
<h4 class="card-title">HTML Markup</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body">
<div class="card-text">
<p>This section contains HTML Markup to create 2 columns layout. You
                  need to add the <code>.2-columns</code> class in the <code>&lt;body&gt;</code>                  tag as show in below markup on line no 4. This layout has a navigation
                  and content sections with common header &amp; footer.</p>
<p>Modern has a ready to use starter kit, you can use this layout directly
                  by using the starter kit pages from the <code>modern-admin/starter-kit</code>                  folder.</p>
<pre class="language-markup" data-line="4">
        <code class="language-markup">
            &lt;!DOCTYPE html&gt;
              &lt;html lang="en"&gt;
                &lt;head&gt;&lt;/head&gt;
                &lt;body data-menu="vertical-menu" class="vertical-layout vertical-menu 2-columns menu-expanded"&gt;
                  
                  &lt;!-- fixed-top--&gt;
                  &lt;nav role="navigation" class="header-navbar navbar-expand-sm navbar navbar-with-menu fixed-top navbar-dark navbar-shadow navbar-border"&gt;
                  &lt;/nav&gt;
                  
                  &lt;!-- BEGIN Navigation--&gt;
                  &lt;div class="main-menu menu-dark menu-fixed menu-shadow"&gt;
                  &lt;/div&gt;
                  &lt;!-- END Navigation--&gt;
                  &lt;!-- BEGIN Content--&gt;
                  &lt;div class="content app-content"&gt;
                  &lt;/div&gt;
                  &lt;!-- END Content--&gt;
                  &lt;!-- START FOOTER DARK--&gt;
                  &lt;footer class="footer footer-dark"&gt;
                  &lt;/footer&gt;
                  &lt;!-- START FOOTER DARK--&gt;
                &lt;/body&gt;
              &lt;/html&gt;
        </code>
        </pre>
</div>
</div>
</div>
</section>
<!--/ HTML Markup -->
<!-- PUG Code -->
<section class="card" id="pug-code">
<div class="card-header">
<h4 class="card-title">PUG Configuration</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body">
<div class="card-text">
<p>Modern Admin use PUG as template engine to generate pages and whole
                  template quickly using node js, for getting start with PUG usage
                  &amp; template generating process please refer template documentation.</p>
<h5 class="card-title mt-2">PUG Variables</h5>
<p>This table contains required PUG variables to generate 2 columns
                  layout.
                </p>
<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr>
<th>Block</th>
<th>Variable</th>
<th>Datatype</th>
<th>Value</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row"><code>pageConfig</code></th>
<td><code>contentLayout</code></td>
<td><code>string</code></td>
<td><code>'2-columns'</code></td>
<td><code>pageConfig</code> block has a page configuration variables,
                          for 2 columns layout you need to define variable <code>- var contentLayout = '2-columns'</code></td>
</tr>
</tbody>
</table>
</div>
<div class="alert bg-info alert-icon-left mb-2" role="alert">
<span class="alert-icon"><i class="la la-info"></i></span>
                  Modern Admin Template <a class="white" href="../../../documentation/index.html" target="_blank"><u>documentation</u></a> has full
                  list of all blocks, datatype, variables and their description table.
                  Please review it for more configuration options.
                </div>
<h5 class="card-title mt-2">PUG Code</h5>
<p>To generate 2 columns layout page or template, you need to use following
                  PUG code.</p>
<p>
<span class="text-bold-600">Line no 19-20:</span> Default value of <code>contentLayout</code>                  variable is <code>'2-columns'</code>. Its is optional to set <code>contentLayout</code>                  variable value as <code>'2-columns'</code> in <code>pageConfig</code>                  block.</p>
<p>If you want to use this layout on page level you need to define it
                  on page it self. This template has one example pug file for 2 columns
                  <code>layout-2-columns.pug</code>, however you can use it on template
                  level but it will generate whole template as a 2 columns.</p>
<pre class="language-pug" data-line="19-20" data-line-offset="10">
              <code class="language-pug">
                block pageVars
                	- var pageTitle    = "2 Columns"
                	- var pageSubTitle = "2 columns layout with navigation"
                	- var description  = "The full width 2 columns layout with content &amp; navigation section."
                	- var activeMenu   = "layout-2-columns"
                
                extends template
                
                append pageConfig
                    - var contentLayout = '2-columns'
                
                append breadcrumbs
                	+breadcrumbs([{url:"index.html",name:"Home"},{url:"#",name:"Page Layouts"}, {name:"2 Columns"}])
                
                //- Include page content in page block
                append content
                	include ../contents/layout-2-columns.html
                
                //- Vendor CSS
                //------------------------------
                //- Add Vendor specific CSS
                append vendorcss
                
                //- Page CSS
                //------------------------------
                
                //- Add custom page specific CSS
                append pagecss
                
                //- Vendor JS
                //------------------------------
                //- Add vendor specific JS
                append vendorjs
                
                //- Page JS
                //------------------------------
                //- Add custom page specific JS
                append pagejs
              </code>
              </pre>
</div>
</div>
</div>
</section>
<!--/ PUG Code -->
</div>
