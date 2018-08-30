<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\LayoutStaticAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Static Layout</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="layout-static.html#">Page Layouts</a>
</li>
<li class="breadcrumb-item active">Static Layout
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="layout-static.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="layout-static.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="layout-static.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="layout-static.html#"><i class="la la-cog"></i> Settings</a>
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
<p>Staic layout is useful for those platform having less menu options
                  and content sections where user required to scroll less.</p>
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
<p>Default this template has a static layout elements, so there is no
                  any specific classes need to add to create this layout.</p>
<p>To create this layout just need to confirm <code>.fixed-top</code>,
                  <code>.menu-fixed</code> and <code>.footer-fixed</code> not applied
                  to their respective element, in short do not use fixed layout classes.</p>
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
<p>This section contains HTML Markup to create static layout. No need
                  to add any specific classes just do not use fixed layout classes.
                  This layout has a navigation, content and left sidebar sections
                  with common header &amp; footer.</p>
<p>Modern has a ready to use starter kit, you can use this layout directly
                  by using the starter kit pages from the <code>modern-admin/starter-kit</code>                  folder.</p>
<pre class="language-markup">
                <code class="language-markup">
                    &lt;!DOCTYPE html&gt;
                      &lt;html lang="en"&gt;
                        &lt;head&gt;&lt;/head&gt;
                        &lt;body data-menu="vertical-menu" class="vertical-layout vertical-menu content-left-sidebar menu-expanded"&gt;
                          &lt;!-- fixed-top--&gt;
                          &lt;nav role="navigation" class="header-navbar navbar-expand-sm navbar navbar-with-menu navbar-dark navbar-shadow navbar-border"&gt;
                              ...
                          &lt;/nav&gt;
                          &lt;!-- BEGIN Navigation--&gt;
                          &lt;div class="main-menu menu-dark menu-shadow"&gt;
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
                                  &lt;!-- content body--&gt;
                                  &lt;div class="content-body"&gt;
                                      ...
                                  &lt;/div&gt;
                                  &lt;!-- content body--&gt;
                              &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;!-- END Content--&gt;
                          &lt;!-- START FOOTER DARK--&gt;
                          &lt;footer class="footer footer-dark"&gt;
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
<p>This table contains required PUG variables to generate static layout.</p>
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
<td><code>navbarFixed</code></td>
<td><code>boolean</code></td>
<td><code>false</code></td>
<td><code>pageConfig</code> block has a <code>navbarFixed</code>                          variable, it contains navbar position specific setting
                          in that you need to set <code>false</code> for fixed navbar.</td>
</tr>
<tr>
<th scope="row"><code>navbarConfig</code></th>
<td><code>navbarPosition</code></td>
<td><code>string</code></td>
<td><code>'navbar-static-top'</code></td>
<td><code>navbarConfig</code> block has a <code>navbarPosition</code>                          variable, it contains navbar position type specific classes
                          in that you need to set <code>'navbar-static-top'</code>                          for static navbar.</td>
</tr>
<tr>
<th scope="row"><code>verticalMenuConfig</code></th>
<td><code>menuType</code></td>
<td><code>string</code></td>
<td><code>'menu-static'</code></td>
<td><code>verticalMenuConfig</code> block has a <code>menuType</code>                          variable, it contains navigation type specific classes
                          in that you need to set <code>'menu-static'</code> for
                          static vertical navigation.</td>
</tr>
<tr>
<th scope="row"><code>horizontalMenuConfig</code></th>
<td><code>menuType</code></td>
<td><code>string</code></td>
<td><code>'navbar-static'</code></td>
<td><code>verticalMenuConfig</code> block has a <code>menuType</code>                          variable, it contains navigation type specific classes
                          in that you need to set <code>'navbar-static'</code> for
                          static horizontal navigation.</td>
</tr>
<tr>
<th scope="row"><code>footerConfig</code></th>
<td><code>footerType</code></td>
<td><code>string</code></td>
<td><code>'footer-static'</code></td>
<td><code>footerConfig</code> block has a <code>footerType</code>                          variable, it contains footer type specific classes in that
                          you need to set <code>'footer-static'</code> for static
                          footer.
                        </td>
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
<p>To generate boxed layout page or template, you need to use following
                  PUG code.</p>
<ul>
<li>
<span class="text-bold-600">Line no 20-21:</span> Set <code>navbarFixed</code> variable value
                    as <code>false</code> in <code>pageConfig</code> block, as our
                    layout is not fixed.</li>
<li>
<span class="text-bold-600">Line no 23-24:</span> Set <code>navbarPosition</code> variable
                    value as <code>'navbar-static-top'</code> in <code>navbarConfig</code>                    block for static navbar.</li>
<li>
<span class="text-bold-600">Line no 26-27:</span> Set <code>menuType</code> variable value
                    as <code>'menu-static'</code> in <code>verticalMenuConfig</code>                    block for static navigation in vertical layout.</li>
<li>
<span class="text-bold-600">Line no 29-30:</span> Set <code>menuType</code> variable value
                    as <code>'navbar-static'</code> in <code>horizontalMenuConfig</code>                    block for static navigation in vertical layout.</li>
<li>
<span class="text-bold-600">Line no 32-33:</span> Set <code>footerType</code> variable value
                    as <code>'footer-static'</code> in <code>footerConfig</code>                    block for static footer.</li>
<li>
<span class="text-bold-600">Line no 39-40:</span> <code>content</code> block has content
                    section html file included <code>include ../contents/layout-static.html</code>,
                    which can be customizable on page level.</li>
</ul>
<p>If you want to use this layout on page level you need to define it
                  on page it self. This template has one example pug file for static
                  <code>layout-static.pug</code>, however you can use it on template
                  level but it will generate whole template as a static.</p>
<pre class="language-pug" data-line="20-21, 23-24, 26-27, 29-30, 32-33, 39-40" data-line-offset="11">
              <code class="language-pug">
                  block pageVars
                    - var pageTitle    = "Static Layout"
                    - var pageSubTitle = "Static layout with navigation"
                    - var description  = "The static layout page structure have fixed navbar, navigation and footer."
                    - var activeMenu   = "layout-static"
                  extends template
                  append pageConfig
                    - var navbarFixed = false
                  append navbarConfig
                    - var navbarPosition = "navbar-static-top"
                  append verticalMenuConfig
                    - var menuType = 'menu-static'
                  append horizontalMenuConfig
                    - var horizontalMenuType = 'navbar-static'
                  append footerConfig
                    - var footerType = "footer-static"
                  append breadcrumbs
                    +breadcrumbs([{url:"index.html",name:"Home"},{url:"#",name:"Page Layouts"}, {name:"Static Layout"}])
                  //- Include page content in page block
                  append content
                    include ../contents/layout-static.html
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