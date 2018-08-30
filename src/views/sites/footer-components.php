<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\FooterComponentsAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Footer Components</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="footer-components.html#">Footer</a>
</li>
<li class="breadcrumb-item active">Footer Components
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="footer-components.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="footer-components.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="footer-components.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="footer-components.html#"><i class="la la-cog"></i> Settings</a>
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
<p>Footer navbar component supports custom content such as: dropdown
                  menus, multi level menus, language selects, forms fields, date
                  pickers etc.</p>
</div>
<div class="alert bg-success alert-icon-left mb-2" role="alert">
<span class="alert-icon"><i class="la la-pencil-square"></i></span>
<strong>Experience it!</strong>
<p>This page contain footer with components example, check on the bottom
                  of the page.</p>
</div>
</div>
</div>
</section>
<!--/ Description -->
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
<span class="text-bold-600">Line no 2:</span> Contain the <code>.navbar</code> to support
                    custom contents.</li>
<li>
<span class="text-bold-600">Line no 4, 5, 6, 10, 16:</span> Contain the custom content such
                    as: dropdown menus, multi level menus, language selects, forms
                    fields, date pickers etc. </li>
</ul>
<pre class="language-markup" data-line="2, 4, 5, 6, 10, 16">
    <code class="language-markup">
      &lt;!-- START FOOTER CUSTOM--&gt;
      &lt;footer class="navbar fixed-bottom content container-fluid footer footer-light footer-shadow"&gt;
        &lt;ul class="nav navbar-nav ml-1"&gt;
          &lt;li class="nav-item"&gt;&lt;a href="#" class="nav-link text-muted"&gt;Terms of use&lt;/a&gt;&lt;/li&gt;
          &lt;li class="nav-item"&gt;&lt;a href="#" class="nav-link text-muted"&gt;Privacy Policy&lt;/a&gt;&lt;/li&gt;
          &lt;li class="dropdown dropdown-language nav-item"&gt;&lt;a  href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link"&gt;&lt;i class="flag-icon flag-icon-gb"&gt;&lt;/i&gt;&lt;span class="selected-language"&gt;English&lt;/span&gt;&lt;i class="caret"&gt;&lt;/i&gt;&lt;/a&gt;
            &lt;div aria-labelledby="dropdown-flag" class="dropdown-menu dropdown-menu-right"&gt;&lt;a href="#" class="dropdown-item"&gt;&lt;i class="flag-icon flag-icon-gb"&gt;&lt;/i&gt; English&lt;/a&gt;&lt;a href="#" class="dropdown-item"&gt;&lt;i class="flag-icon flag-icon-es"&gt;&lt;/i&gt; Spanish&lt;/a&gt;&lt;a href="#" class="dropdown-item"&gt;&lt;i class="flag-icon flag-icon-pt"&gt;&lt;/i&gt; Portuguese&lt;/a&gt;&lt;a href="#" class="dropdown-item"&gt;&lt;i class="flag-icon flag-icon-fr"&gt;&lt;/i&gt; French&lt;/a&gt;&lt;/div&gt;
          &lt;/li&gt;
        &lt;/ul&gt;
        &lt;form class="form-inline float-right"&gt;
          &lt;div class="input-group mb-0 mt-0"&gt;&lt;span class="input-group-prepand"&gt;
              &lt;button type="button" class="btn btn-secondary"&gt;&lt;i class="ft-monitor"&gt;&lt;/i&gt;&lt;/button&gt;&lt;/span&gt;
            &lt;input type="text" placeholder="Quick search..." aria-label="Amount" class="form-control"&gt;&lt;span class="input-group-append"&gt;
              &lt;button type="button" class="btn btn-outline-success"&gt;Go!&lt;/button&gt;&lt;/span&gt;
          &lt;/div&gt;
          &lt;button type="button" class="btn btn-outline-primary"&gt;&lt;i class="la la-heart-o"&gt;&lt;/i&gt; Logut&lt;/button&gt;
        &lt;/form&gt;
      &lt;/footer&gt;
      &lt;!-- END FOOTER CUSTOM--&gt;
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
<h5 class="card-title mt-2">PUG Code</h5>
<p>To generate custom footer fixed page or template, you need to use
                  following PUG code.</p>
<ul>
<li>
<span class="text-bold-600">Line no 20-21:</span> <code>footerConfig</code> block has a <code>footerType</code>                    variable, it contains footer specific classes in that you need
                    to add <code>'footer-fixed'</code> class.</li>
<li>
<span class="text-bold-600">Line no 25-26:</span> You can use <code>'footer-light'</code>,<code>'footer-dark'</code>                    &amp; <code>'footer-transparent'</code> color options.</li>
<li>
<span class="text-bold-600">Line no 20-21:</span> Block <code>footer</code> uses custom <code>footer-custom.pug</code>                    file contain custom component supports custom content such as:
                    dropdown menus, multi level menus, language selects, forms fields,
                    date pickers etc. You cna create your own new PUG file also and
                    include it to use for custom footer.</li>
<li>
<span class="text-bold-600">Line no 36-37:</span> <code>content</code> block has content
                    section html file included <code>include ../contents/footer-components.html</code>,
                    which can be customizable on page level.</li>
</ul>
<p>If you want to use this layout on page level you need to define it
                  on page it self. This template has one example pug file for fixed
                  footer <code>footer-components.pug</code>, however you can use
                  it on template level but it will generate whole template footer
                  fixed.
                </p>
<pre class="language-pug" data-line="20-23, 27-28" data-line-offset="11">
                <code class="language-pug">
                    block pageVars
                      - var pageTitle    = "Footer Components"
                      - var pageSubTitle = "Footer custom components"
                      - var description  = "Footer support custom components to provide more usability."
                      - var activeMenu   = "footer-components"
                    extends template
                    append footerConfig
                      - var footerType = "fixed-bottom"
                      - var footerColor = "footer-light"
                      - var footerBorder = true
                    //- Template includes
                    //-------------------
                    block footer
                      include ../templates/sections/footer/footer-custom
                    append breadcrumbs
                      +breadcrumbs([{url:"index.html",name:"Home"},{url:"#",name:"Footer"}, {name:"Footer Components"}])
                    //- Include page content in page block
                    append content
                      include ../contents/footer-components.html
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