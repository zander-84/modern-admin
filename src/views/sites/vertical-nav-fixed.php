<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\VerticalNavFixedAsset::class,
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
<li class="breadcrumb-item"><a href="vertical-nav-fixed.html#">Navigation</a>
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
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="vertical-nav-fixed.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="vertical-nav-fixed.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="vertical-nav-fixed.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="vertical-nav-fixed.html#"><i class="la la-cog"></i> Settings</a>
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
<p>Default vertical navigation type is fixed navigation. Vertical fixed
                  navigation menu set to be fix on scroll of container section.</p>
</div>
<div class="alert bg-success alert-icon-left mb-2" role="alert">
<span class="alert-icon"><i class="la la-pencil-square"></i></span>
<strong>Experience it!</strong>
<p>This page contain fixed navigation menu options example, check at
                  the left hand side of the page.</p>
</div>
</div>
</div>
</section>
<!--/ Description -->
<!-- CSS Classes -->
<section class="card" id="css-classes">
<div class="card-header">
<h4 class="card-title">CSS Classes</h4>
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
<p>This table contains all classes related to the vertical fixed navigation
                  option.
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
<td>To create vertical fixed navigation, you need to add <code>.menu-fixed</code>                          class in navigation <code>&lt;div&gt;</code> tag. Refer
                          HTML markup line no 12.</td>
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
<p>This section contains HTML Markup to create vertical fixed navigation.
                  It define where to add css classes to make vertical fixed navigation.</p>
<ul>
<li>
<span class="text-bold-600">Line no 12:</span> Contain the <code>.menu-fixed</code> class
                    to set vertical navigation fixed.</li>
</ul>
<pre class="language-markup" data-line="12">
                  <code class="language-markup">
                      &lt;!DOCTYPE html&gt;
                        &lt;html lang="en"&gt;
                          &lt;head&gt;&lt;/head&gt;
                          &lt;body data-menu="vertical-menu" class="vertical-layout vertical-menu 2-column menu-expanded"&gt;
                            &lt;!-- fixed-top--&gt;
                            &lt;nav role="navigation" class="header-navbar navbar-expand-sm navbar navbar-with-menu fixed-top navbar-dark navbar-shadow navbar-border"&gt;
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
<section class="card" id="pug-configuration">
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
<p>This table contains required PUG variables to generate vertical fixed
                  navigation.
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
<th scope="row"><code>verticalMenuConfig</code></th>
<th scope="row"><code>menuType</code></th>
<td><code>string</code></td>
<td><code>'menu-fixed'</code></td>
<td><code>verticalMenuConfig</code> block has a <code>menuType</code>                          variable, it contains navigation specific classes in that
                          you need to add <code>'menu-fixed'</code>.
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
<p>Use following PUG code to generate page or template having vertical
                  fixed navigation.</p>
<ul>
<li>
<span class="text-bold-600">Line no 20-21:</span> Set vertical fixed navigation class to
                    <code>menuType</code> variable value as <code>'menu-fixed'</code>                    in <code>verticalMenuConfig</code> block.</li>
<li>
<span class="text-bold-600">Line no 27-28:</span> <code>content</code> block has content
                    section html file included <code>include ../contents/vertical-fixed-navigation.html</code>,
                    which can be customizable on page level.</li>
</ul>
<p>If you want to use vertical fixed navigation options on page level
                  you need to define it on page it self. This template has one example
                  pug file for <code>vertical-fixed-navigation.pug</code>, however
                  you can use it on template level but it will generate whole template
                  have vertical fixed navigation.</p>
<pre class="language-pug" data-line="20-21, 27-28" data-line-offset="11">
              <code class="language-pug">
                block pageVars
                    - var pageTitle    = "Fixed Navigation"
                    - var pageSubTitle = "Vertical fixed navigation menu"
                    - var description  = "The fixed navigation menu options use to set navigation menu position fixed."
                    - var activeMenu   = "vertical-nav-fixed"
                extends template
                append verticalMenuConfig
                    - var menuType = 'menu-fixed'
                append breadcrumbs
                    +breadcrumbs([{url:"index.html",name:"Home"},{url:"#",name:"Navigation"}, {name:"Fixed Navigation"}])
                //- Include page content in page block
                append content
                    include ../contents/vertical-nav-fixed.html
                //- Vendor CSS
                //------------------------------
                //- Add Vendor specific CSS
                append vendorcss
                    link(rel='stylesheet', type='text/css', href='<?=$baseUrl;?>/app-assets/vendors/css/ui/prism.min.css')
                //- Page CSS
                //------------------------------
                //- Add custom page specific CSS
                append pagecss
                //- Vendor JS
                //------------------------------
                //- Add vendor specific JS
                append vendorjs
                    script(type='text/javascript' ,src='<?=$baseUrl;?>/app-assets/vendors/js/ui/prism.min.js')
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