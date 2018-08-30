<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\HeadersBreadcrumbsWithRoundButtonAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2">
<h3 class="content-header-title">Breadcrumbs with round buttons</h3>
<div class="row breadcrumbs-top">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="headers-breadcrumbs-with-round-button.html#">Page headers</a>
</li>
<li class="breadcrumb-item active">Breadcrumbs with round button
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right text-md-right col-md-6 col-12">
<div class="form-group">
<button class="btn-icon btn btn-danger btn-glow btn-round" type="button"><i class="ft-bell"></i></button>
</div>
</div>
</div>
<div class="content-body">
<!-- Description -->
<section class="card" id="description">
<div class="card-header">
<h4 class="card-title">Description</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
<p class="card-text">An example of page header with page title, breadcrumbs, content title
                and round buttons. You can check the above page header section which
                contain breadcrumbs with round button example.</p>
<div class="alert bg-success alert-icon-left mb-2" role="alert">
<span class="alert-icon"><i class="la la-pencil-square"></i></span>
<strong>Experience it!</strong>
<p>This page contain breadcrumbs with button 2 example, check on the
                  top of the page container section.</p>
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
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body">
<p class="card-text">This section contains HTML Markup to create page with breadcrumbs with
                round button.</p>
<p class="card-text">You can use below HTML breadcrumbs with round button page header snippet
                in any type of layout. You can also custom above HTML snippet as
                per your requirements. Modern has a ready to use 10 different types
                of page headers.</p>
<pre class="language-markup">
            <code class="language-markup">
              &lt;div class="content-header row"&gt;
                  &lt;div class="content-header-left col-md-6 col-12"&gt;
                    &lt;h2 class="content-header-title mb-0"&gt;Breadcrumbs with button 2&lt;/h2&gt;
                    &lt;div class="row breadcrumbs-top"&gt;
                      &lt;div class="breadcrumb-wrapper col-12"&gt;
                        &lt;ol class="breadcrumb"&gt;
                          &lt;li class="breadcrumb-item"&gt;&lt;a href="/"&gt;Home&lt;/a&gt;
                          &lt;/li&gt;
                          &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Page headers&lt;/a&gt;
                          &lt;/li&gt;
                          &lt;li class="breadcrumb-item active"&gt;Breadcrumbs with button 2
                          &lt;/li&gt;
                        &lt;/ol&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;div class="content-header-right text-md-right col-md-6 col-12"&gt;
                    &lt;div class="form-group"&gt;&lt;/div&gt;
                    &lt;!-- Round Outline Icon Buttons--&gt;
                    &lt;button type="button" class="btn-icon btn btn-secondary btn-round"&gt;&lt;i class="la la-bell-o"&gt;&lt;/i&gt;&lt;/button&gt;
                    &lt;button type="button" class="btn-icon btn btn-secondary btn-round"&gt;&lt;i class="la la-life-ring"&gt;&lt;/i&gt;&lt;/button&gt;
                    &lt;button type="button" class="btn-icon btn btn-secondary btn-round"&gt;&lt;i class="la la-cog"&gt;&lt;/i&gt;&lt;/button&gt;
                  &lt;/div&gt;
                  &lt;div class="content-header-lead col-12 mt-2"&gt;
                    &lt;p class="lead"&gt;Page header with page title, breadcrumbs, content title and round buttons.&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
            </code>
            </pre>
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
                with round buttons.</p>
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
<td><code>'include page-headers/breadcrumbs-with-round-button'</code></td>
<td>You need to append <code>page-header</code> block parameter
                        as <code>'include page-headers/breadcrumbs-with-round-button'</code>.</td>
</tr>
</tbody>
</table>
</div>
<h5 class="card-title mt-2">PUG Code</h5>
<p class="card-text">To generate page with breadcrumbs with round buttons header or template,
                you need to use following PUG code.</p>
<p class="card-text">
<span class="text-bold-600">Line no 22-23:</span> <code>page-header</code> block has a page/template
                specific configuration parameter, in that for breadcrumbs with round
                buttons header you need to define parameter <code>include page-headers/breadcrumbs-with-round-button</code>.
                However you can create your own page header PUG file in <code>pages/page-headers</code>                folder.</p>
<p class="card-text">If you want to use this layout on page level you need to define it
                on page it self. This template has one example pug file with breadcrumbs
                with round buttons <code>breadcrumbs-with-round-button.pug</code>.</p>
<pre class="language-pug" data-line="23-24" data-line-offset="11">
            <code class="language-pug">
                block pageVars
                    - var pageTitle    = "breadcrumbs with round button 2"
                    - var pageSubTitle = "Page header with round buttons"
                    - var description  = "Page header with page title, breadcrumbs, content title and round buttons."
                    - var activeMenu   = "headers-breadcrumbs-with-round-button"
                
                extends template
                
                append breadcrumbs
                    +breadcrumbs([{url:"index.html",name:"Home"},{url:"#",name:"Page headers"}, {name:"breadcrumbs with round button 2"}])
                
                append page-header
                    include page-headers/breadcrumbs-with-round-button
                
                //- Include page content in page block
                append content
                    include ../contents/headers-breadcrumbs-with-round-button.html
                
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