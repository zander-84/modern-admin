<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\LayoutFixedNavigationAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Fixed Navigation</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="layout-fixed-navigation.html#">Page Layouts</a>
</li>
<li class="breadcrumb-item active">Fixed Navigation
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="layout-fixed-navigation.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="layout-fixed-navigation.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="layout-fixed-navigation.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="layout-fixed-navigation.html#"><i class="la la-cog"></i> Settings</a>
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
<p>The fixed navigation layout has a fixed navigation and static navbar
                  menu and footer. Only navigation section is fixed to user. In this
                  page you can experience it.</p>
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
<p>This table contains all classes related to the fixed navigation layout.
                  This is a custom layout classes for fixed navigation layout page
                  requirements.
                </p>
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
<th scope="row"><code>.menu-fixed</code></th>
<td>To set navigation fixed you need to add <code>.menu-fixed</code>                          class in menu wrapper. Refer HTML markup line no 12.</td>
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
<p>This section contains HTML Markup to create fixed navigation layout.
                  This markup define where to add css classes to make navigation
                  fixed.
                </p>
<ul>
<li>
<span class="text-bold-600">Line no 12:</span> Contain the <code>.menu-fixed</code> class
                    for adjusting navigation fixed on top.</li>
</ul>
<p>Modern has a ready to use starter kit, you can use this layout directly
                  by using the starter kit pages from the <code>modern-admin/starter-kit</code>                  folder.</p>
<pre class="language-markup" data-line="7">
        <code class="language-markup">
            &lt;!DOCTYPE html&gt;
              &lt;html lang="en"&gt;
                &lt;head&gt;&lt;/head&gt;
                &lt;body data-menu="vertical-menu" class="vertical-layout vertical-menu 2-column menu-expanded"&gt;
                  &lt;!-- fixed-top--&gt;
                  &lt;nav role="navigation" class="header-navbar navbar-expand-sm navbar navbar-with-menu navbar-dark navbar-shadow navbar-border"&gt;
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
<p>This table contains required PUG variables to generate fixed navigation
                  layout.
                </p>
<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr>
<th>Variable</th>
<th>Value</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row"><code>verticalMenuCustom</code></th>
<td><code>'menu-fixed'</code></td>
<td>In <code>verticalMenuConfig</code>, use <code>verticalMenuCustom</code>                          variable value as <code>'menu-fixed'</code> to fix the
                          navigation menu. <code>verticalMenuConfig</code> block.</td>
</tr>
</tbody>
</table>
</div>
<h5 class="card-title mt-2">PUG Code</h5>
<p>To generate fixed navigation layout page or template, you need to
                  use following PUG code.</p>
<ul>
<li>
<span class="text-bold-600">Line no 20-21:</span> <code>verticalMenuConfig</code> block has
                    a <code>verticalMenuCustom</code> variable, it contains navigation
                    specific classes in that you need to add <code>'menu-fixed'</code></li>
<li>
<span class="text-bold-600">Line no 36-37:</span> <code>content</code> block has content
                    section html file included <code>include ../contents/layout-fixed-navigation.html</code>,
                    which can be customizable on page level.</li>
</ul>
<p>If you want to use this layout on page level you need to define it
                  on page it self. This template has one example pug file for fixed
                  <code>layout-fixed-navigation.pug</code>, however you can use it
                  on template level but it will generate whole template as a fixed
                  navigation layout.</p>
<pre class="language-pug" data-line="22-23, 36-37" data-line-offset="11">
            <code class="language-pug">
                block pageVars
                  - var pageTitle    = "Fixed Navigation"
                  - var pageSubTitle = "Fixed navigation with fixed navigation"
                  - var description  = "The fixed navigation page structure have fixed navigation, static navbar and footer."
                  - var activeMenu   = "layout-fixed-navigation"
                
                extends template
                
                block navbarConfig
                  - var navbarCustom = "navbar-dark navbar-shadow navbar-border" //- OPTIONS: navbar-dark, navbar-light, navbar-semi-dark, fixed-top, navbar-hide-on-scroll, navbar-border, navbar-shadow
                block verticalMenuConfig
                  - var verticalMenuCustom = "menu-dark menu-fixed menu-shadow" //- OPTIONS : menu-bordered, menu-native-scroll, menu-icon-right menu-fixed
                
                block footerConfig
                  - var footerCustom = "footer-dark" //- OPTIONS: footer-dark, footer-transparent, footer-fixed
                
                append breadcrumbs
                  include ../includes/mixins
                  +breadcrumbs([{url:"index.html",name:"Home"},{url:"#",name:"Page Layouts"}, {name:"Fixed Navigation"}])
                
                append page-header
                  include page-headers/breadcrumb-top
                
                //- Include page content in page block
                append content
                  include ../contents/layout-fixed-navigation.html
                
                //- Page specific dependency
                //------------------------------
                
                //- Add custom page specific CSS
                block pagecss
                  link(rel='stylesheet', type='text/css', href='<?=$baseUrl;?>/app-assets/css/plugins/ui/prism.min.css')
                
                //- Add custom page specific JS
                block pagejs
                  script(type='text/javascript' ,src='<?=$baseUrl;?>/app-assets/vendors/js/ui/prism.min.js')
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