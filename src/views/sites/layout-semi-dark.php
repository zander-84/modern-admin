<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\LayoutSemiDarkAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Semi Dark Layout</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="layout-semi-dark.html#">Page Layouts</a>
</li>
<li class="breadcrumb-item active">Semi Dark Layout
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="layout-semi-dark.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="layout-semi-dark.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="layout-semi-dark.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="layout-semi-dark.html#"><i class="la la-cog"></i> Settings</a>
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
<p>The dark layout has a semi dark color navbar, dark navigation menu
                  and light footer. In this page you can experience it. If you want
                  to create a semi dark version template you can use this layout.
                  For admin panels this layout provide elegant UI.</p>
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
<p>This table contains all classes related to the semi dark layout.
                  This is a custom layout classes for semi dark layout page requirements.</p>
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
<th scope="row"><code>.navbar-semi-dark</code></th>
<td>To set navbar semi dark color you need to add <code>.navbar-semi-dark</code>                          class in navbar <code>&lt;nav&gt;</code> tag. Refer HTML
                          markup line no 7.</td>
</tr>
<tr>
<th scope="row"><code>.menu-dark</code></th>
<td>To set the main navigation dark color on page <code>.menu-dark</code>                          class needs to add in navigation wrapper. Refer HTML markup
                          line no 12.</td>
</tr>
<tr>
<th scope="row"><code>.footer-light</code></th>
<td>To set the main footer light color on page <code>.footer-light</code>                          class needs to add in footer wrapper. Refer HTML markup
                          line no 37.</td>
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
<p>This section contains HTML Markup to create semi dark layout. This
                  markup define where to add css classes to make semi dark navbar,
                  dark navigation &amp; light footer.</p>
<ul>
<li>
<span class="text-bold-600">Line no 7:</span> Contain the <code>.navbar-semi-dark</code>                    class for adjusting navbar color semi dark.</li>
<li>
<span class="text-bold-600">Line no 12:</span> Contain the <code>.menu-dark</code> class
                    for adjusting main navigation color dark.</li>
<li>
<span class="text-bold-600">Line no 37:</span> Contain the <code>.footer-light</code> class
                    for adjusting footer color light.</li>
</ul>
<p>Modern has a ready to use starter kit, you can use this layout directly
                  by using the starter kit pages from the <code>modern-admin/starter-kit</code>                  folder.</p>
<pre class="language-markup" data-line="7, 12, 37">
        <code class="language-markup">
            &lt;!DOCTYPE html&gt;
              &lt;html lang="en"&gt;
                &lt;head&gt;&lt;/head&gt;
                &lt;body data-menu="vertical-menu" class="vertical-layout vertical-menu 2-column menu-expanded"&gt;
                  &lt;!-- fixed-top--&gt;
                  &lt;nav role="navigation" class="header-navbar navbar-expand-sm navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow navbar-border"&gt;
                      ...
                  &lt;/nav&gt;
                  &lt;!-- BEGIN Navigation--&gt;
                  &lt;div class="main-menu menu-dark menu-fixed menu-shadow"&gt;
                      ...
                  &lt;/div&gt;
                  &lt;!-- END Navigation--&gt;
                  &lt;!-- BEGIN Content--&gt;
                  &lt;div class="content app-content"&gt;
                      &lt;div class="content-wrapper"&gt;
                          &lt;!-- content header--&gt;
                          &lt;div class="content-header row"&gt;
                              ...
                          &lt;/div&gt;
                          &lt;!-- content header--&gt;
                          &lt;!-- content right--&gt;
                          &lt;div class="content-right"&gt;
                              ...
                          &lt;/div&gt;
                          &lt;!-- content right--&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;!-- END Content--&gt;
                  &lt;!-- START FOOTER DARK--&gt;
                  &lt;footer class="footer footer-dark footer-fixed"&gt;
                      ...
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
<p>This table contains required PUG variables to generate semi dark
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
<td><code>logoType</code></td>
<td><code>string</code></td>
<td><code>'light'</code></td>
<td><code>pageConfig</code> block has a <code>logoType </code>                          variable, it contains logo type specific classes in that
                          you need to add <code>'light'</code> for semi-dark layout.</td>
</tr>
<tr>
<th scope="row"><code>navbarConfig</code></th>
<td><code>navbarColor</code></td>
<td><code>string</code></td>
<td><code>'navbar-semi-dark'</code></td>
<td><code>navbarConfig</code> block has a <code>navbarColor</code>                          variable, it contains navbar color specific classes in
                          that you need to add <code>'navbar-semi-dark'</code> for
                          semi-dark navbar.</td>
</tr>
<tr>
<th scope="row"><code>navbarConfig</code></th>
<td><code>navbarBrandCenter</code></td>
<td><code>boolean</code></td>
<td><code>false</code></td>
<td><code>navbarConfig</code> block has a <code>navbarBrandCenter</code>                          variable, it contains navbar center specific settings in
                          that you need to add <code>false</code> as semi-dark layout
                          doesn't support center alight navbar.</td>
</tr>
<tr>
<th scope="row"><code>verticalMenuCustom</code></th>
<td><code>menuColor</code></td>
<td><code>string</code></td>
<td><code>'menu-dark'</code></td>
<td><code>verticalMenuConfig</code> block has a <code>menuColor</code>                          variable, it contains navigation color specific classes
                          in that you need to add <code>'menu-dark'</code> for dark
                          navigation.
                        </td>
</tr>
</tbody>
</table>
</div>
<h5 class="card-title mt-2">PUG Code</h5>
<p>To generate semi dark layout page or template, you need to use following
                  PUG code.</p>
<ul>
<li>
<span class="text-bold-600">Line no 20-21:</span> Set light version on logo <code>logoType</code>                    variable value as <code>'light'</code> in <code>pageConfig</code>                    block.</li>
<li>
<span class="text-bold-600">Line no 23-25:</span> Set navbar semi-dark class to <code>navbarColor</code>                    variable value as <code>'navbar-semi-dark'</code> in <code>navbarConfig</code>                    block for semi-dark navbar.</li>
<li>
<span class="text-bold-600">Line no 25:</span> Set navbar center class to <code>navbarBrandCenter</code>                    variable value as <code>false</code> in <code>navbarConfig</code>                    block as center navbar doesn't support by semi-dark layout.</li>
<li>
<span class="text-bold-600">Line no 27-28:</span> Set navigation dark class to <code>verticalMenuCustom</code>                    variable value as <code>'menu-dark'</code> in <code>verticalMenuConfig</code>                    block for dark navigation.</li>
<li>
<span class="text-bold-600">Line no 37-38:</span> <code>content</code> block has content
                    section html file included <code>include ../contents/layout-semi-dark.html</code>,
                    which can be customizable on page level.</li>
</ul>
<p>If you want to use this layout on page level you need to define it
                  on page it self. This template has one example pug file for semi
                  dark layout <code>layout-semi-dark.pug</code>, however you can
                  use it on template level but it will generate whole template as
                  a semi dark layout.</p>
<pre class="language-pug" data-line="20-21, 23-25, 27-28, 34-35" data-line-offset="11">
              <code class="language-pug">
                  block pageVars
                    - var pageTitle    = "Semi Dark Layout"
                    - var pageSubTitle = "Semi dark template layout"
                    - var description  = "The semi dark layout has semi dark version navbar, dark navigation &amp; dark footer."
                    - var activeMenu   = "layout-semi-dark"
                  extends template
                  append pageConfig
                    - var logoType = 'light'
                  append navbarConfig
                    - var navbarColor = "navbar-semi-dark"
                    - var navbarBrandCenter = false
                  append verticalMenuConfig
                    - var menuColor = "menu-dark"
                  append breadcrumbs
                    +breadcrumbs([{url:"index.html",name:"Home"},{url:"#",name:"Page Layouts"}, {name:"Semi Dark Layout"}])
                  //- Include page content in page block
                  append content
                    include ../contents/layout-semi-dark.html
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
</div>
</div>