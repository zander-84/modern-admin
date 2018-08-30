<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\HeadersBreadcrumbsWithButtonGroupAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12">
<h3 class="content-header-title">Breadcrumbs with buttons group </h3>
<div class="row breadcrumbs-top">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="headers-breadcrumbs-with-button-group.html#">Page headers</a>
</li>
<li class="breadcrumb-item active">Breadcrumbs bottom
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div aria-label="Button group with nested dropdown" class="btn-group float-md-right" role="group">
<div class="btn-group" role="group">
<a class="btn btn-outline-info round" href="calendars-clndr.html"><i class="la la-calendar"></i></a>
<a class="btn btn-outline-info round" href="timeline-center.html"><i class="la la-bar-chart"></i></a>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-info round dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnGroupDrop1" type="button"><i class="icon-cog3 icon-left"></i> Settings</button>
<div aria-labelledby="btnGroupDrop1" class="dropdown-menu"><a class="dropdown-item" href="card-bootstrap.html">Bootstrap Cards</a>
<a class="dropdown-item" href="component-buttons-extended.html">Buttons Extended</a>
</div>
</div>
</div>
</div>
<div class="content-header-lead col-12 mt-2">
<p class="lead">Page header with page title, breadcrumbs, description, content title and
            buttons group.</p>
</div>
</div>
<div class="content-body">
<!-- Description -->
<section class="card" id="description">
<div class="card-header">
<h4 class="card-title">Description</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body">
<p class="card-text">An example of page header with page title, breadcrumbs, description,
                content title and buttons group.</p>
<div class="alert bg-success alert-icon-left mb-2" role="alert">
<span class="alert-icon"><i class="la la-pencil-square"></i></span>
<strong>Experience it!</strong>
<p>This page contain breadcrumbs with buttons group example, check on
                  the top of the page container section.</p>
</div>
</div>
</div>
</section>
<!--/ Description -->
<!-- HTML Markup -->
<section class="card" id="html-markup">
<div class="card-header">
<h4 class="card-title">HTML Markup</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body">
<p class="card-text">This section contains HTML Markup to create page with breadcrumbs with
                button group.</p>
<p class="card-text">You can use below HTML breadcrumbs with button group page header snippet
                in any type of layout. You can also custom above HTML snippet as
                per your requirements. Modern has a ready to use 10 different types
                of page headers.</p>
<pre class="language-markup">
            <code class="language-markup">
              &lt;div class="content-header row"&gt;
                  &lt;div class="breadcrumb-wrapper col-12"&gt;
                    &lt;ol class="breadcrumb"&gt;
                      &lt;li class="breadcrumb-item"&gt;&lt;a href="/"&gt;Home&lt;/a&gt;
                      &lt;/li&gt;
                      &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Page headers&lt;/a&gt;
                      &lt;/li&gt;
                      &lt;li class="breadcrumb-item active"&gt;Breadcrumbs with buttons
                      &lt;/li&gt;
                    &lt;/ol&gt;
                  &lt;/div&gt;
                  &lt;div class="content-header-left col-md-6 col-12"&gt;
                    &lt;h2 class="content-header-title mb-0"&gt;Breadcrumbs with buttons group&lt;/h2&gt;
                    &lt;p class="text-muted mb-0"&gt;Page header with breadcrumbs &amp; buttons group&lt;/p&gt;
                  &lt;/div&gt;
                  &lt;div class="content-header-right col-md-6 col-12"&gt;
                    &lt;div role="group" aria-label="Button group with nested dropdown" class="btn-group float-md-right mt-1"&gt;
                      &lt;div role="group" class="btn-group"&gt;
                        &lt;button type="button" class="btn btn-outline-primary"&gt;&lt;i class="ft-mail"&gt;&lt;/i&gt;&lt;/button&gt;
                        &lt;button type="button" class="btn btn-outline-primary"&gt;&lt;i class="ft-calendar"&gt;&lt;/i&gt;&lt;/button&gt;
                        &lt;button type="button" class="btn btn-outline-primary"&gt;&lt;i class="ft-bell"&gt;&lt;/i&gt;&lt;/button&gt;
                        &lt;button id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-outline-primary dropdown-toggle dropdown-menu-right"&gt;&lt;i class="ft-settings icon-left"&gt;&lt;/i&gt; Settings&lt;/button&gt;
                        &lt;div aria-labelledby="btnGroupDrop1" class="dropdown-menu"&gt;&lt;a href="#" class="dropdown-item"&gt;Dropdown link&lt;/a&gt;&lt;a href="#" class="dropdown-item"&gt;Dropdown link&lt;/a&gt;&lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;div class="content-header-lead col-12 mt-2"&gt;
                    &lt;p class="lead"&gt;Page header with page title, breadcrumbs, description, content title and buttons group.&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
            </code>
            </pre>
</div>
</div>
</section>
<!--/ HTML Markup -->
<!-- PUG Code -->
<section class="card">
<div class="card-header">
<h4 class="card-title">PUG Configuration</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body">
<p class="card-text">Modern Admin use PUG as template engine to generate pages and whole
                template quickly using node js, for getting start with PUG usage
                &amp; template generating process please refer template documentation.</p>
<h5 class="card-title mt-2">PUG Variables</h5>
<p class="card-text">This table contains required PUG block to generate page with breadcrumbs
                with buttons.</p>
<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr>
<th>Block</th>
<th>Parameter</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row"><code>page-header</code></th>
<td><code>'include page-headers/breadcrumbs-with-button-group'</code></td>
<td>You need to append <code>page-header</code> block parameter
                        as <code>'include page-headers/breadcrumbs-with-button-group'</code>.</td>
</tr>
</tbody>
</table>
</div>
<h5 class="card-title mt-2">PUG Code</h5>
<p class="card-text">To generate page with breadcrumbs with buttons header or template,
                you need to use following PUG code.</p>
<p class="card-text">
<span class="text-bold-600">Line no 22-23:</span> <code>page-header</code> block has a page/template
                specific configuration parameter, in that for breadcrumbs with buttons
                header you need to define parameter <code>include page-headers/breadcrumbs-with-button-group</code>.
                However you can create your own page header PUG file in <code>pages/page-headers</code>                folder.</p>
<p class="card-text">If you want to use this layout on page level you need to define it
                on page it self. This template has one example pug file with breadcrumbs
                with buttons <code>breadcrumbs-with-button-group.pug</code>.</p>
<pre class="language-pug" data-line="23-24" data-line-offset="11">
            <code class="language-pug">
                block pageVars
                    - var pageTitle    = "Breadcrumbs with buttons group"
                    - var pageSubTitle = "Page header with breadcrumbs &amp; buttons group"
                    - var description  = "Page header with page title, breadcrumbs, description, content title and buttons group."
                    - var activeMenu   = "headers-breadcrumbs-with-button-group"
                
                extends template
                
                append breadcrumbs
                    +breadcrumbs([{url:"index.html",name:"Home"},{url:"#",name:"Page headers"}, {name:"Breadcrumbs with buttons"}])
                
                append page-header
                    include page-headers/breadcrumbs-with-button-group
                
                //- Include page content in page block
                append content
                    include ../contents/headers-breadcrumbs-with-button-group.html
                
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
</section>
<!--/ PUG Code -->
</div>
</div>
</div>