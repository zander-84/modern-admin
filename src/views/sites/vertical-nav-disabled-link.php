<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\VerticalNavDisabledLinkAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Disabled Link</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="vertical-nav-disabled-link.html#">Navigation</a>
</li>
<li class="breadcrumb-item active">Disabled Navigation Link
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="vertical-nav-disabled-link.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="vertical-nav-disabled-link.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="vertical-nav-disabled-link.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="vertical-nav-disabled-link.html#"><i class="la la-cog"></i> Settings</a>
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
<p>The disabled navigation option allow you to disable certain level
                  navigation link.</p>
</div>
<div class="alert bg-success alert-icon-left mb-2" role="alert">
<span class="alert-icon"><i class="la la-pencil-square"></i></span>
<strong>Experience it!</strong>
<p>This page contain navigation menu with disabled navigation item (
                  Disabled Menu ) options example, check at the left hand side of
                  the page.</p>
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
<p>This table contains class to disable navigation menu link.</p>
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
<th scope="row"><code>.disabled</code></th>
<td>To disabled vertical navigation menu link, you need to add
                          <code>.disabled</code> class in navigation <code>&lt;li&gt;</code>                          tag. Refer HTML markup line no 12.</td>
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
<p>This section contains HTML Markup to create vertical bordered navigation.
                  It define where to add css classes to make vertical bordered navigation.</p>
<ul>
<li>
<span class="text-bold-600">Line no 26 &amp; 22:</span> Contain the <code>.disabled</code> class,
                    Line 16 shows to disabled parent menu item and Line 22 shows
                    disabled child menu item.</li>
</ul>
<pre class="language-markup" data-line="16, 22">
                  <code class="language-markup">
                      &lt;!DOCTYPE html&gt;
                        &lt;html lang="en"&gt;
                          &lt;head&gt;&lt;/head&gt;
                          &lt;body data-menu="vertical-menu" class="vertical-layout vertical-menu 2-column menu-expanded"&gt;
                            &lt;!-- navbar-static-top--&gt;
                            &lt;nav role="navigation" class="header-navbar navbar-expand-sm navbar navbar-with-menu navbar-static-top navbar-dark navbar-shadow navbar-border"&gt;
                                ...
                            &lt;/nav&gt;
                            &lt;!-- BEGIN Navigation--&gt;
                            &lt;div class="main-menu menu-dark menu-native-scroll menu-shadow"&gt;
                                &lt;div class="main-menu-header"&gt;
                                  &lt;div data-mcs-theme="minimal-dark" class="main-menu-content ps-container ps-theme-light ps-active-y"&gt;
                                    &lt;ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main"&gt;
                                      &lt;li class="nav-item disabled"&gt;&lt;a href="index.html"&gt;&lt;i class="la la-home"&gt;&lt;/i&gt;&lt;span class="menu-title"&gt;Dashboard &lt;span class="badge badge-default badge-info float-right"&gt;1.2.2&lt;/span&gt;&lt;span class="badge badge-default badge-info float-right"&gt;&lt;/span&gt;&lt;/span&gt;&lt;/a&gt;
                                      &lt;/li&gt;
                                      &lt;li class="nav-item has-sub open"&gt;&lt;a href="#"&gt;&lt;i class="la la-tv"&gt;&lt;/i&gt;&lt;span class="menu-title"&gt;Layouts&lt;span class="badge badge-default badge-info float-right"&gt;&lt;/span&gt;&lt;/span&gt;&lt;/a&gt;
                                        &lt;ul class="menu-content"&gt;
                                          &lt;li class="is-shown"&gt;&lt;a href="#"&gt;Layout 1&lt;/a&gt;
                                          &lt;/li&gt;
                                          &lt;li class="is-shown disabled"&gt;&lt;a href="#"&gt;Layout 2 &lt;span class="badge badge-default badge-info float-right"&gt;New&lt;/span&gt;&lt;/a&gt;
                                          &lt;/li&gt;
                                          &lt;li class="is-shown"&gt;&lt;a href="#"&gt;Layout 3&lt;/a&gt;
                                          &lt;/li&gt;
                                          &lt;li class="is-shown"&gt;&lt;a href="#"&gt;Layout 4&lt;/a&gt;
                                          &lt;/li&gt;
                                          &lt;li class="disabled is-shown"&gt;&lt;a href="#"&gt;Layout 5&lt;span class="tag menu-sub-title"&gt;Coming soon&lt;/span&gt;&lt;/a&gt;
                                          &lt;/li&gt;
                                        &lt;/ul&gt;
                                      &lt;/li&gt;
                                    &lt;/ul&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
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
<h5 class="card-title mt-2">Menu JSON Configurations</h5>
<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr>
<th>Options</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row"><code>classlist</code></th>
<td>Is the name of menu object, you can add any classes related
                          to that navigation link. To disable add <code>disabled</code>.</td>
</tr>
</tbody>
</table>
</div>
<h5 class="card-title mt-2">PUG Code</h5>
<p>You need to add navigation disabled link options to menu JSON object,
                  please read the documentation to customize the menu using PUG.</p>
<ul>
<li>
<span class="text-bold-600">Line no 18 &amp; 24:</span> Contain disabled navigation link JSON
                    configurations options.</li>
</ul>
<p>Modern Admin use the common menu JSON object to generate same menu
                  on each pages of your template that will save your time by reducing
                  the repetitive menu customization task on each page. This template
                  has menu example pug file for every layouts, Here in below example,
                  it shows vertical menu layout menu PUG file <code>vertical-menu.pug</code>,
                  you can use it on template level only it will generate whole template
                  with the same menu options.</p>
<pre class="language-json" data-line="18, 24" data-line-offset="12">
                  <code class="language-json">
                      +verticalMenu([
                      //- Main Navigation Header
                      {navheader:"Main",icon:"la la-ellipsis-h"},
                        //- Dashbaord
                        {url:"index.html",name:"Dashboard",slug:"dashboard",icon:"la la-home",  classlist:"disabled"},
                        //- Layouts Start
                        {url:"#",name:"Layouts",slug:"",icon:"la la-tv",
                          //- Layouts Submenu
                          submenu:[
                            {url:"#",name:"Layout 1",slug:"", classlist:"disabled"},
                            {url:"#",name:"Layout 2",slug:""},
                            {url:"#",name:"Layout 3",slug:""},
                            {url:"#",name:"Layout 4",slug:""},
                            {url:"#",name:"Layout 5",slug:"",classlist:"disabled",menuSubtitle:"Coming soon"},
                          ]
                        },
                        //- Layouts End
                    ]);
                  </code>
                </pre>
</div>
</div>
</div>
</section>
<!--/ PUG Code -->
</div>
