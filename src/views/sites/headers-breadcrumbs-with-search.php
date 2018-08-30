<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\HeadersBreadcrumbsWithSearchAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2">
<h3 class="content-header-title">Breadcrumbs with search</h3>
<div class="row breadcrumbs-top">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="headers-breadcrumbs-with-search.html#">Page headers</a>
</li>
<li class="breadcrumb-item active">Breadcrumbs with search
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<fieldset class="form-group relative has-icon-left col-md-5 col-12 float-right p-0">
<input class="form-control round" id="iconLeft" placeholder="Search..." type="text"/>
<div class="form-control-position"><i class="la la-search"></i></div>
</fieldset>
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
<p class="card-text">An example of page header with page title, breadcrumbs, content title
                and search input-box.</p>
<div class="alert bg-success alert-icon-left mb-2" role="alert">
<span class="alert-icon"><i class="la la-pencil-square"></i></span>
<strong>Experience it!</strong>
<p>This page contain breadcrumbs with search example, check on the top
                  of the page container section.</p>
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
<p class="card-text">This section contains HTML Markup to create page with headers breadcrumbs
                with search.</p>
<p class="card-text">You can use below HTML headers breadcrumbs with search page header
                snippet in any type of layout. You can also custom above HTML snippet
                as per your requirements. Modern has a ready to use 10 different
                types of page headers.</p>
<pre class="language-markup">
            <code class="language-markup">
              &lt;div class="content-header row"&gt;
                  &lt;div class="content-header-left col-md-6 col-12"&gt;
                    &lt;h2 class="content-header-title mb-0"&gt;Breadcrumbs with search&lt;/h2&gt;
                    &lt;p class="text-muted mb-0"&gt;Page header with breadcrumbs &amp; search&lt;/p&gt;
                  &lt;/div&gt;
                  &lt;div class="content-header-right col-md-6 col-12"&gt;
                    &lt;fieldset class="form-group relative has-icon-left col-md-6 float-right"&gt;
                      &lt;input id="iconLeft" type="text" placeholder="Search..." class="form-control round"/&gt;
                      &lt;div class="form-control-position"&gt;&lt;i class="la la-search"&gt;&lt;/i&gt;&lt;/div&gt;
                    &lt;/fieldset&gt;
                  &lt;/div&gt;
                  &lt;div class="content-header-lead col-12 mt-2"&gt;
                    &lt;p class="lead"&gt;Page header with page title, breadcrumbs, description, content title and search input-box.&lt;/p&gt;
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
<p class="card-text">This table contains required PUG block to generate page with breadcrumb
                basic.
              </p>
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
<td><code>'include page-headers/headers-breadcrumbs-with-search'</code></td>
<td>You need to append <code>page-header</code> block parameter
                        as <code>'include page-headers/headers-breadcrumbs-with-search'</code>.</td>
</tr>
</tbody>
</table>
</div>
<h5 class="card-title mt-2">PUG Code</h5>
<p class="card-text">To generate page with breadcrumb basic header or template, you need
                to use following PUG code.</p>
<p class="card-text">
<span class="text-bold-600">Line no 22-23:</span> <code>page-header</code> block has a page/template
                specific configuration parameter, in that for breadcrumb basic header
                you need to define parameter <code>include page-headers/headers-breadcrumbs-with-search</code>.
                However you can create your own page header PUG file in <code>pages/page-headers</code>                folder.</p>
<p class="card-text">If you want to use this layout on page level you need to define it
                on page it self. This template has one example pug file with breadcrumb
                basic <code>headers-breadcrumbs-with-search.pug</code>.</p>
<pre class="language-pug" data-line="23-24" data-line-offset="11">
            <code class="language-pug">
                block pageVars
                    - var pageTitle    = "Breadcrumbs with search"
                    - var pageSubTitle = "Page header with breadcrumbs &amp; search"
                    - var description  = "Page header with page title, breadcrumbs, description, content title and search input-box."
                    - var activeMenu   = "headers-breadcrumbs-with-search"
                
                extends template
                
                append breadcrumbs
                    +breadcrumbs([{url:"index.html",name:"Home"},{url:"#",name:"Page headers"}, {name:"Breadcrumbs with search"}])
                
                append page-header
                    include page-headers/breadcrumbs-with-search
                
                //- Include page content in page block
                append content
                    include ../contents/headers-breadcrumbs-with-search.html
                
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