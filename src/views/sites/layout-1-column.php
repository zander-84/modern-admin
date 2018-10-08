<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\Layout1ColumnAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">1 Column</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="layout-1-column.html#">Page Layouts</a>
</li>
<li class="breadcrumb-item active">1 Column
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="layout-1-column.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="layout-1-column.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="layout-1-column.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="layout-1-column.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Description -->
<div class="card">
<div class="card-header">
<h4 class="card-title">Description</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="card-text">
<p>1 Column layout is very useful for full width page requirements i.e:
                  Contact us, Terms &amp; Condition, Privacy policy etc..., It has Navbar
                  with back to dashboard/home page option and footer, navigation
                  menu will not be displayed on this layout.</p>
</div>
</div>
</div>
</div>
<!--/ Description -->
<!-- CSS Classes -->
<div class="card">
<div class="card-header">
<h4 class="card-title">CSS Classes</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="card-text">
<p>This table contains all classes related to the 1 column layout. This
                  is a custom layout for full width page requirements.</p>
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
<th scope="row"><code>.1-column</code></th>
<td>You can create 1 column layout by adding <code>.1-column</code>                          class in <code>&lt;body&gt;</code> tag.</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!--/ CSS Classes -->
<!-- HTML Markup -->
<div class="card">
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
<p>This section contains HTML Markup to create 1 column layout. You
                  need to add the <code>.1-column</code> class in the <code>&lt;body&gt;</code>                  tag as show in below markup on line no 4. Please note that 1 column
                  layout do not have Navigation section and it has back to Dashboard
                  or Home page link in Navbar.</p>
<p>Modern has a ready to use starter kit, you can use this layout directly
                  by using the starter kit pages from the <code>modern-admin/starter-kit</code>                  folder.</p>
<pre class="language-markup" data-line="4">
        <code class="language-markup">
            &lt;!DOCTYPE html&gt;
              &lt;html lang="en"&gt;
                &lt;head&gt;&lt;/head&gt;
                &lt;body data-menu="vertical-menu" class="vertical-layout vertical-menu 1-column menu-expanded"&gt;
                  &lt;!-- fixed-top--&gt;
                  &lt;nav role="navigation" class="header-navbar navbar-expand-sm navbar navbar-with-menu fixed-top navbar-dark navbar-shadow navbar-border"&gt;
                    .....
                  &lt;/nav&gt;
                  &lt;!-- BEGIN Content--&gt;
                  &lt;div class="content app-content"&gt;
                    .....
                  &lt;/div&gt;
                  &lt;!-- END Content--&gt;
                  &lt;!-- START FOOTER DARK--&gt;
                  &lt;footer class="footer footer-dark"&gt;
                    .....
                  &lt;/footer&gt;
                  &lt;!-- START FOOTER DARK--&gt;
                &lt;/body&gt;
              &lt;/html&gt;
        </code>
        </pre>
</div>
</div>
</div>
</div>
<!--/ HTML Markup -->
<!-- PUG Code -->
<div class="card">
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
<p>This table contains required PUG variables to generate 1 column layout.</p>
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
<td><code>'1-column'</code></td>
<td><code>pageConfig</code> block has a page configuration variables,
                          for 1 column layout you need to define variable <code>- var contentLayout = '1-column'</code></td>
</tr>
<tr>
<th scope="row"><code>pageConfig</code></th>
<td><code>headerType</code></td>
<td><code>string</code></td>
<td><code>'header-back'</code></td>
<td>You need to set <code>headerType</code> variable value as
                          <code>'header-back'</code> in <code>pageConfig</code> block.
                          You can create your own new header type and set it over
                          here also.</td>
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
<p>To generate 1 column layout page or template, you need to use following
                  PUG code.</p>
<p>
<span class="text-bold-600">Line no 20-22:</span> <code>pageConfig</code> block has a page
                  configuration variables, in that for 1 column layout need to define
                  variable <code>- var contentLayout = '1-column'</code></p>
<p>
<span class="text-bold-600">Line no 22:</span> <code>pageConfig</code> block has a page configuration
                  variables, in that for header-back custom navbar you need to define
                  variable <code>- var headerType  = 'header-back'</code></p>
<p>As mentioned above this template do not have a navigation, so it
                  should have back to Dashboard or Home link to navigate. This template
                  also need custom navbar with back to dashboard or home link, for
                  custom navbar use this variable <code>headerType</code> and value
                  will be <code>'header-back'</code>. You can also customize or change
                  this pug file as per your requirements.</p>
<p>If you want to use this layout on page level you need to define it
                  on pug page it self. This template has one example pug file for
                  1 column <code>layout-1-column.pug</code>, however you can use
                  it on template level but it will generate whole template as a 1
                  column.
                </p>
<pre class="language-pug" data-line="20-22" data-line-offset="11">
              <code class="language-pug">
                block pageVars
                    - var pageTitle    = "1 Column"
                    - var pageSubTitle = "Full width 1 column layout"
                    - var description  = "The full width 1 column layout with only content section."
                    - var activeMenu   = "layout-1-column"
                extends template
                append pageConfig
                    - var contentLayout = '1-column'
                    - var headerType = 'header-back'
                append breadcrumbs
                    +breadcrumbs([{url:"index.html",name:"Home"},{url:"#",name:"Page Layouts"}, {name:"1 Column"}])
                //- Include page content in page block
                append content
                    include ../contents/layout-1-column.html
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
</div>
<!--/ PUG Code -->
</div>
