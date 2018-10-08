<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\FooterFixedAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Footer Fixed</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="footer-fixed.html#">Footer</a>
</li>
<li class="breadcrumb-item active">Footer Fixed
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="footer-fixed.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="footer-fixed.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="footer-fixed.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="footer-fixed.html#"><i class="la la-cog"></i> Settings</a>
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
<p>The footer fixed option has a fixed footer at the bottom side, You
                  can check fixed footer on bottom of this page.</p>
</div>
<div class="alert bg-success alert-icon-left mb-2" role="alert">
<span class="alert-icon"><i class="la la-pencil-square"></i></span>
<strong>Experience it!</strong>
<p>This page contain footer fixed options example, check on the bottom
                  of the page.</p>
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
<p>This table contains all classes which can be used in fixed footer.
                  You can combine them as per footer fixed template requirements.</p>
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
<th scope="row"><code>.fixed-bottom</code></th>
<td>To set footer fixed you need to add <code>.fixed-bottom</code>                          class in footer <code>&lt;footer&gt;</code> tag. Refer
                          HTML markup line no 37.</td>
</tr>
</tbody>
</table>
</div>
<p>Default fixed footer color is light, You can use <code>.footer-dark</code>                  &amp; <code>.footer-transparent</code> with <code>.fixed-bottom</code>.</p>
<p>You can also use styling options i.e <code>.footer-border</code>                  &amp; <code>.footer-shadow</code> with <code>.fixed-bottom</code></p>
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
<p>This section contains HTML Markup to create fixed footer. This markup
                  define where to add css classes to make footer fixed.</p>
<ul>
<li>
<span class="text-bold-600">Line no 37:</span> Contain the <code>.fixed-bottom</code> class
                    for adjusting footer fixed.</li>
<li>
<span class="text-bold-600">Line no 37:</span> Also contain the <code>.footer-light</code>                    &amp; <code>.footer-shadow</code> classes for adjusting footer color
                    and shadow. Those are optional classes.</li>
</ul>
<pre class="language-markup" data-line="37">
        <code class="language-markup">
              &lt;!DOCTYPE html&gt;
              &lt;html lang="en"&gt;
                &lt;head&gt;&lt;/head&gt;
                &lt;body data-menu="vertical-menu" class="vertical-layout vertical-menu 2-column menu-expanded"&gt;
                  &lt;!-- fixed-top--&gt;
                  &lt;nav role="navigation" class="header-navbar navbar-expand-sm navbar navbar-with-menu fixed-top navbar-transparent navbar-shadow navbar-border"&gt;
                      ...
                  &lt;/nav&gt;
                  &lt;!-- BEGIN Navigation--&gt;
                  &lt;div class="main-menu menu-transparent menu-fixed menu-shadow"&gt;
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
                  &lt;footer class="navbar footer fixed-bottom footer-light footer-shadow content container-fluid"&gt;
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
<p>This table contains required PUG variables to generate fixed footer.</p>
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
<th scope="row"><code>footerConfig</code></th>
<td><code>footerType</code></td>
<td><code>string</code></td>
<td><code>'fixed-bottom'</code></td>
<td><code>footerConfig</code> block has a <code>footerType</code>                          variable, it contains footer specific classes in that you
                          need to add <code>'fixed-bottom'</code> class.</td>
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
<p>To generate footer fixed page or template, you need to use following
                  PUG code.</p>
<ul>
<li>
<span class="text-bold-600">Line no 20-22:</span> Set footer fixed class to <code>footerType</code>                    variable value as <code>'fixed-bottom'</code> in <code>footerConfig</code>                    block, it contains footer type specific classes.</li>
<li>
<span class="text-bold-600">Line no 20-22:</span> You can use <code>.footer-light</code>,<code>.footer-dark</code>                    &amp; <code>.footer-transparent</code> color options.</li>
<li>
<span class="text-bold-600">Line no 28-29:</span> <code>content</code> block has content
                    section html file included <code>include ../contents/footer-fixed.html</code>,
                    which can be customizable on page level.</li>
</ul>
<p>If you want to use this layout on page level you need to define it
                  on page it self. This template has one example pug file for fixed
                  footer <code>footer-fixed.pug</code>, however you can use it on
                  template level but it will generate whole template footer fixed.</p>
<pre class="language-pug" data-line="20-22, 28-29" data-line-offset="11">
              <code class="language-pug">
                  block pageVars
                    - var pageTitle    = "Footer Fixed"
                    - var pageSubTitle = "Fixed color footer"
                    - var description  = "The Fixed footer options used to make your footer set to be fixed at bottom."
                    - var activeMenu   = "footer-fixed"
                  extends template
                  append footerConfig
                    - var footerType = "fixed-bottom"
                    - var footerColor = "footer-dark"
                  append breadcrumbs
                    +breadcrumbs([{url:"index.html",name:"Home"},{url:"#",name:"Footer"}, {name:"Footer Fixed"}])
                  //- Include page content in page block
                  append content
                    include ../contents/footer-fixed.html
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
