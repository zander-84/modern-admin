<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\VerticalNavStylingAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Navigation Styling</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="vertical-nav-styling.html#">Vertical Navigation</a>
</li>
<li class="breadcrumb-item active">Navigation Styling
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="vertical-nav-styling.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="vertical-nav-styling.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="vertical-nav-styling.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="vertical-nav-styling.html#"><i class="la la-cog"></i> Settings</a>
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
<p>Modern Admin provides flexible navigation component, which allows
                  you to modify navigation colors, appearance of different types
                  of content, components placement etc. This page contain all navigation
                  styling options.</p>
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
                  the navigation components and navigation itself. Below table contain
                  all available classes that can be used with the navigation:</p>
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
<td>To create vertical fixed navigation, you need to add <code>.menu-fixed</code>                          class in navigation <code>&lt;div&gt;</code> tag. Fore
                          more information please check <a href="vertical-nav-fixed.html" target="_blank">vertical-fixed-navigation.html</a></td>
</tr>
<tr>
<th scope="row"><code>.menu-static</code></th>
<td>To create vertical static navigation, you need to add <code>.menu-static</code>                          class in navigation <code>&lt;div&gt;</code> tag. Fore
                          more information please check <a href="vertical-nav-static.html" target="_blank">vertical-static-navigation.html</a></td>
</tr>
<tr>
<th scope="row"><code>.menu-light</code></th>
<td>To create light vertical navigation, you need to add <code>.menu-light</code>                          class in navigation <code>&lt;div&gt;</code> tag. Fore
                          more information please check <a href="vertical-nav-light.html" target="_blank">vertical-light-navigation.html</a></td>
</tr>
<tr>
<th scope="row"><code>.menu-dark</code></th>
<td>To create dark vertical navigation, you need to add <code>.menu-dark</code>                          class in navigation <code>&lt;div&gt;</code> tag. Fore
                          more information please check <a href="vertical-nav-dark.html" target="_blank">vertical-dark-navigation.html</a></td>
</tr>
<tr>
<th scope="row"><code>.menu-accordion</code></th>
<td>Default vertical navigation type is accordion navigation.
                          To create vertical accordion navigation, you need to add
                          <code>.menu-accordion</code> class in navigation <code>&lt;div&gt;</code>                          tag. Fore more information please check <a href="vertical-nav-accordion.html" target="_blank">vertical-accordion-navigation.html</a></td>
</tr>
<tr>
<th scope="row"><code>.menu-collapsible</code></th>
<td>To create vertical collapsible navigation, you need to add
                          <code>.menu-collapsible</code> class in navigation <code>&lt;div&gt;</code>                          tag. Fore more information please check <a href="vertical-nav-collapsible.html" target="_blank">vertical-collapsible-navigation.html</a></td>
</tr>
<tr>
<th scope="row"><code>.menu-flipped</code></th>
<td>Change navigation menu position to right with the help of
                          flipped navigation menu options. You need to add <code>.menu-flipped</code>                          class in navigation <code>&lt;div&gt;</code> tag. Fore
                          more information please check <a href="vertical-nav-flipped.html" target="_blank">vertical-flipped-navigation.html</a></td>
</tr>
<tr>
<th scope="row"><code>.menu-native-scroll</code></th>
<td>To create vertical navigation with native scroll, you need
                          to add <code>.menu-native-scroll</code> class in navigation
                          <code>&lt;div&gt;</code> tag. This navigation class is
                          optional. Fore more information please check <a href="vertical-nav-native-scroll.html" target="_blank">vertical-navigation-native-scroll.html</a></td>
</tr>
<tr>
<th scope="row"><code>.menu-icon-right</code></th>
<td>To create vertical navigation right side icons, you need
                          to add <code>.menu-icon-right</code> class in navigation
                          <code>&lt;div&gt;</code> tag. This navigation class is
                          optional. Fore more information please check <a href="vertical-nav-right-side-icon.html" target="_blank">vertical-navigation-right-side-icons.html</a></td>
</tr>
<tr>
<th scope="row"><code>.menu-bordered</code></th>
<td>To create vertical bordered navigation, you need to add <code>.menu-bordered</code>                          class in navigation <code>&lt;div&gt;</code> tag. This
                          navigation class is optional. Fore more information please
                          check <a href="vertical-nav-bordered.html" target="_blank">vertical-bordered-navigation.html</a></td>
</tr>
<tr>
<th scope="row"><code>.disabled</code></th>
<td>To disabled vertical navigation menu link, you need to add
                          <code>.disabled</code> class in navigation
                          <code>&lt;li&gt;</code> tag. This navigation class is optional.
                          Fore more information please check <a href="vertical-nav-disabled-link.html" target="_blank">vertical-disabled-navigation-link.html</a></td>
</tr>
<tr>
<th scope="row"><code>.menu-shadow</code></th>
<td>You can also apply navigation shadow bottom by adding <code>.menu-shadow</code>                          class in navigation <code>&lt;div&gt;</code> tag. This
                          navigation class is optional.</td>
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
<p>This section contains HTML Markup to demonstrate navigation styling
                  options. This markup define where to add css classes to customize
                  navigation as per your requirements.</p>
<ul>
<li>
<span class="text-bold-600">Line no 12 (Navigation position options):</span> Contain the
                    <code>.menu-fixed</code> class to set navigation position fixed,
                    here you can use any one class from <code>.menu-fixed</code>                    &amp; <code>.menu-static</code>.</li>
<li>
<span class="text-bold-600">Line no 12 (Navigation color options):</span> Contain the <code>.menu-dark</code>                    class to set navigation color dark, here you can use any one
                    class from <code>.menu-light</code> &amp; <code>.menu-dark</code>.</li>
<li>
<span class="text-bold-600">Line no 12 (Accordion / Collapsible):</span> Default vertical
                    navigation type is accordion navigation. For accordion navigation
                    <code>.menu-accordion</code> class is optional to use, but if
                    you want to make navigation collapsible you need to add <code>.menu-collapsible</code>                    class.</li>
<li>
<span class="text-bold-600">Line no 12:</span> The rest of the navigation classes like <code>.menu-native-scroll</code>,
                    <code>.menu-icon-right</code>, <code>.menu-bordered</code> &amp;
                    <code>.menu-shadow</code> are optional and cab be used on your
                    custom requirements.</li>
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
                  &lt;div class="main-menu menu-light menu-shadow menu-bordered"&gt;
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
<p>This table contains required PUG variables to generate vertical navigation
                  with styling options.</p>
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
<th scope="row"><code>verticalMenuConfig</code></th>
<td><code>menuType</code></td>
<td><code>string</code></td>
<td><code>'menu-fixed'</code></td>
<td>To set the navigation position fixed, use <code>menuType</code>                          variable value as <code>'menu-fixed'</code> in <code>verticalMenuConfig</code>                          block.</td>
</tr>
<tr>
<th scope="row"><code>verticalMenuConfig</code></th>
<td><code>menuType</code></td>
<td><code>string</code></td>
<td><code>'menu-static'</code></td>
<td>To set the navigation position static, use <code>menuType</code>                          variable value as <code>'menu-static'</code> in <code>verticalMenuConfig</code>                          block.</td>
</tr>
<tr>
<th scope="row"><code>verticalMenuConfig</code></th>
<td><code>menuColor</code></td>
<td><code>string</code></td>
<td><code>'menu-light'</code></td>
<td>To set the navigation color light, use <code>menuColor</code>                          variable value as <code>'menu-light'</code> in <code>verticalMenuConfig</code>                          block.</td>
</tr>
<tr>
<th scope="row"><code>verticalMenuConfig</code></th>
<td><code>menuColor</code></td>
<td><code>string</code></td>
<td><code>'menu-dark'</code></td>
<td>To set the navigation color dark, use <code>menuColor</code>                          variable value as <code>'menu-dark'</code> in <code>verticalMenuConfig</code>                          block.</td>
</tr>
<tr>
<th scope="row"><code>verticalMenuConfig</code></th>
<td><code>menuOpenType</code></td>
<td><code>string</code></td>
<td><code>'menu-accordion'</code></td>
<td>To set the navigation accordion, use <code>menuOpenType</code>                          variable value as <code>'menu-accordion'</code> in <code>verticalMenuConfig</code>                          block.</td>
</tr>
<tr>
<th scope="row"><code>verticalMenuConfig</code></th>
<td><code>menuOpenType</code></td>
<td><code>string</code></td>
<td><code>'menu-collapsible'</code></td>
<td>To set the navigation collapsible, use <code>menuOpenType</code>                          variable value as <code>'menu-collapsible'</code> in <code>verticalMenuConfig</code>                          block.</td>
</tr>
<tr>
<th scope="row"><code>verticalMenuConfig</code></th>
<td><code>menuFlipped</code></td>
<td><code>boolean</code></td>
<td><code>true/false</code></td>
<td>To set the navigation flipped, use <code>menuFlipped</code>                          variable value as <code>true/false</code> in <code>verticalMenuConfig</code>                          block.</td>
</tr>
<tr>
<th scope="row"><code>verticalMenuConfig</code></th>
<td><code>menuNativeScroll</code></td>
<td><code>boolean</code></td>
<td><code>true/false</code></td>
<td>To set the navigation icon on right side, use <code>menuNativeScroll</code>                          variable value as <code>true/false</code> in <code>verticalMenuConfig</code>                          block.</td>
</tr>
<tr>
<th scope="row"><code>verticalMenuConfig</code></th>
<td><code>menuIconRight</code></td>
<td><code>boolean</code></td>
<td><code>true/false</code></td>
<td>To set the navigation icon on right side, use <code>menuIconRight</code>                          variable value as <code>true/false</code> in <code>verticalMenuConfig</code>                          block.</td>
</tr>
<tr>
<th scope="row"><code>verticalMenuConfig</code></th>
<td><code>menuDevider</code></td>
<td><code>boolean</code></td>
<td><code>true/false</code></td>
<td>To create vertical bordered navigation, use <code>menuDevider</code>                          variable value as <code>true/false</code> in <code>verticalMenuConfig</code>                          block.</td>
</tr>
<tr>
<th scope="row"><code>verticalMenuConfig</code></th>
<td><code>menuShadow</code></td>
<td><code>boolean</code></td>
<td><code>true/false</code></td>
<td>You can also apply navigation shadow, use <code>menuShadow</code>                          variable value as <code>true/false</code> in <code>verticalMenuConfig</code>                          block.</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</section>
<!--/ PUG Code -->
</div>
</div>
</div>