<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\NavbarStylingAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Navbar Styling</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="navbar-styling.html#">Navbars</a>
</li>
<li class="breadcrumb-item active">Navbar Styling
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="navbar-styling.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="navbar-styling.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="navbar-styling.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="navbar-styling.html#"><i class="la la-cog"></i> Settings</a>
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
<p>Modern Admin provides flexible navbar component, which allows you
                  to modify navbar colors, appearance of different types of content,
                  components placement etc. This page contain all navbar styling
                  options.
                </p>
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
<p>All this functionality is available by setting proper classes to
                  the navbar components and navbar itself. Below table contain all
                  available classes that can be used with the navbar:</p>
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
<th scope="row"><code>.fixed-top</code></th>
<td>To set navbar fixed at top you need to add <code>.fixed-top</code>                          class in navbar <code>&lt;nav&gt;</code> tag. For more
                          information please check <a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/fixed-top.html" target="_blank">fixed-top.html</a>.</td>
</tr>
<tr>
<th scope="row"><code>.fixed-bottom</code></th>
<td>To set navbar fixed at bottom you need to add <code>.fixed-bottom</code>                          class in navbar <code>&lt;nav&gt;</code> tag.</td>
</tr>
<tr>
<th scope="row"><code>.navbar-static-top</code></th>
<td>Create a full-width navbar that scrolls away with the page
                          by adding <code>.navbar-static-top</code>. Unlike the <code>.navbar-fixed-*</code>                          classes, you do not need to change any padding on the <code>body</code>.</td>
</tr>
<tr>
<th scope="row"><code>.navbar-brand-center</code></th>
<td>This class allow you to set navbar branding portion at center.
                          Add <code>.navbar-brand-center</code> class in navbar <code>&lt;nav&gt;</code>                          tag. For more information please check <a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/navbar-brand-center.html" target="_blank">navbar-brand-center.html</a>. This is optional
                          class.
                        </td>
</tr>
<tr>
<th scope="row"><code>.navbar-light</code></th>
<td> To set navbar light color you need to add <code>.navbar-light</code>                          class in navbar <code>&lt;nav&gt;</code> tag. For more
                          information please check <a href="navbar-light.html" target="_blank">navbar-light.html</a></td>
</tr>
<tr>
<th scope="row"><code>.navbar-dark</code></th>
<td> To set navbar dark color you need to add <code>.navbar-dark</code>                          class in navbar <code>&lt;nav&gt;</code> tag. For more
                          information please check <a href="navbar-dark.html" target="_blank">navbar-dark.html</a></td>
</tr>
<tr>
<th scope="row"><code>.navbar-semi-dark</code></th>
<td> To set navbar semi dark color you need to add <code>.navbar-semi-dark</code>                          class in navbar <code>&lt;nav&gt;</code> tag. For more
                          information please check <a href="navbar-semi-dark.html" target="_blank">navbar-semi-dark.html</a></td>
</tr>
<tr>
<th scope="row"><code>.navbar-border</code></th>
<td>You can add navbar border bottom by adding <code>.navbar-border</code>                          class in navbar <code>&lt;nav&gt;</code> tag. This navbar
                          class is optional.</td>
</tr>
<tr>
<th scope="row"><code>.navbar-shadow</code></th>
<td>You can also apply navbar shadow bottom by adding <code>.navbar-shadow</code>                          class in navbar <code>&lt;nav&gt;</code> tag. This navbar
                          class is optional.</td>
</tr>
<tr>
<th scope="row"><code>.disabled</code></th>
<td>To disabled navbar menu item link, you need to add <code>.disabled</code>                          class in navigation
                          <code>&lt;li&gt;</code> tag. This navigation class is optional.
                          Fore more information please check <a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/vertical-disabled-navigation-link.html" target="_blank">vertical-disabled-navigation-link.html</a></td>
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
<p>This section contains HTML Markup to demonstrate navbar styling options.
                  This markup define where to add css classes to customize navbar
                  as per your requirements.</p>
<ul>
<li>
<span class="text-bold-600">Line no 7 (Navbar position options):</span> Contain the <code>.fixed-top</code>                    class for adjusting navbar fixed on top, here you can use any
                    one class from <code>.fixed-top</code>, <code>.fixed-bottom</code>                    &amp; <code>.navbar-static-top</code> as per your navbar position
                    requirement.
                  </li>
<li>
<span class="text-bold-600">Line no 7 (Navbar color options):</span> Contain the <code>.navbar-dark</code>                    class for adjusting navbar color dark, here you can use any one
                    class from <code>.navbar-dark</code>, <code>.navbar-light</code>                    &amp; <code>.navbar-semi-dark</code> as per your navbar color requirement.
                    You can also use custom colors i.e blue, red, cyan etc.. from
                    Modern Admin color palettes, for more information of custom navbar
                    color usage please refer <a href="navbar-light.html" target="_blank">navbar-light.html</a>,
                    <a href="navbar-dark.html" target="_blank">navbar-dark.html</a>                    &amp; <a href="navbar-semi-dark.html" target="_blank">navbar-semi-dark.html</a></li>
<li>
<span class="text-bold-600">Line no 7:</span> If you want to set navbar branding at center
                    you can add <code>.navbar-brand-center</code> class to this line,
                    its optional class.</li>
<li>
<span class="text-bold-600">Line no 7:</span> Also contain the <code>.navbar-border</code>                    &amp; <code>.navbar-shadow</code> classes that can be use together
                    and both are the optional.</li>
</ul>
<pre class="language-markup" data-line="7">
        <code class="language-markup">
            &lt;!DOCTYPE html&gt;
              &lt;html lang="en"&gt;
                &lt;head&gt;&lt;/head&gt;
                &lt;body data-menu="vertical-menu" class="vertical-layout vertical-menu 2-column menu-expanded"&gt;
                  &lt;!-- fixed-top--&gt;
                  &lt;nav role="navigation" class="navbar header-navbar navbar-with-menu fixed-top navbar-dark navbar-shadow navbar-border"&gt;
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
<p>This table contains required PUG variables to generate custom navbar.</p>
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
<th scope="row"><code>navbarConfig</code></th>
<td><code>navbarPosition</code></td>
<td><code>string</code></td>
<td><code>'fixed-top'</code></td>
<td>To set navbar fixed top, use <code>navbarCustom</code> variable
                          value as <code>'fixed-top'</code> in <code>navbarConfig</code>                          block.</td>
</tr>
<tr>
<th scope="row"><code>navbarConfig</code></th>
<td><code>navbarPosition</code></td>
<td><code>string</code></td>
<td><code>'fixed-bottom'</code></td>
<td>To set navbar fixed bottom, use <code>navbarCustom</code>                          variable value as <code>'fixed-bottom'</code> in <code>navbarConfig</code>                          block.</td>
</tr>
<tr>
<th scope="row"><code>navbarConfig</code></th>
<td><code>navbarPosition</code></td>
<td><code>string</code></td>
<td><code>'navbar-static-top'</code></td>
<td>To set navbar static top, use <code>navbarCustom</code> variable
                          value as <code>'navbar-static-top'</code> in <code>navbarConfig</code>                          block.</td>
</tr>
<tr>
<th scope="row"><code>navbarConfig</code></th>
<td><code>navbarColor</code></td>
<td><code>string</code></td>
<td><code>'navbar-light'</code></td>
<td>You need add navbar light class to <code>navbarCustom</code>                          variable value as <code>'navbar-light'</code> in <code>navbarConfig</code>                          block, it contains navbar specific classes in that you
                          need to add <code>navbar-light</code>. It also contain
                          optional classes like <code>bg-teal bg-lighten-5 border-teal border-lighten-4</code>.</td>
</tr>
<tr>
<th scope="row"><code>navbarConfig</code></th>
<td><code>navbarColor</code></td>
<td><code>string</code></td>
<td><code>'navbar-dark'</code></td>
<td>You need add navbar dark class to <code>navbarCustom</code>                          variable value as <code>'navbar-dark'</code> in <code>navbarConfig</code>                          block, it contains navbar specific classes in that you
                          need to add <code>navbar-dark</code>. It also contain optional
                          classes like <code>bg-teal bg-darken-5 border-teal border-darken-4</code>.</td>
</tr>
<tr>
<th scope="row"><code>navbarConfig</code></th>
<td><code>navbarColor</code></td>
<td><code>string</code></td>
<td><code>'navbar-semi-dark'</code></td>
<td>You need add navbar semi dark class to <code>navbarCustom</code>                          variable value as <code>'navbar-semi-dark'</code> in <code>navbarConfig</code>                          block, it contains navbar specific classes in that you
                          need to add <code>navbar-semi-dark</code>. It also contain
                          optional classes like <code>bg-grey bg-lighten-5 border-grey border-darken-2</code>.</td>
</tr>
<tr>
<th scope="row"><code>navbarConfig</code></th>
<td><code>navbarBrandCenter</code></td>
<td><code>boolean</code></td>
<td><code>true/false</code></td>
<td>Navbar brand center settings allow you to set navbar branding
                          at center, use <code>navbarBrandCenter</code> variable
                          value as <code>true/false</code> in <code>navbarConfig</code>                          block.</td>
</tr>
<tr>
<th scope="row"><code>navbarConfig</code></th>
<td><code>navbarHideOnScroll</code></td>
<td><code>boolean</code></td>
<td><code>true/false</code></td>
<td>This navbar settings allow you to set navbar hide on scroll,
                          use <code>navbarHideOnScroll</code> variable value as <code>true/false</code>                          in <code>navbarConfig</code> block.</td>
</tr>
<tr>
<th scope="row"><code>navbarConfig</code></th>
<td><code>navbarBorder</code></td>
<td><code>boolean</code></td>
<td><code>true/false</code></td>
<td>This navbar settings allow you to set navbar border, use
                          <code>navbarBorder</code> variable value as <code>true/false</code>                          in <code>navbarConfig</code> block.</td>
</tr>
<tr>
<th scope="row"><code>navbarConfig</code></th>
<td><code>navbarShadow</code></td>
<td><code>boolean</code></td>
<td><code>true/false</code></td>
<td>This navbar settings allow you to set navbar bottom shadow,
                          use <code>navbarShadow</code> variable value as <code>true/false</code>                          in <code>navbarConfig</code> block.</td>
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
</div>
</div>
</div>
</section>
<!--/ PUG Code -->
</div>
</div>
</div>