<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\LayoutContentLeftStickySidebarAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="sidebar-left sidebar-sticky">
<div class="sidebar">
<div class="sidebar-content card d-none d-lg-block">
<div class="card-body">
<div class="category-title pb-1">
<h6>Card example</h6>
</div>
<!-- Card sample -->
<div class="text-center">
<img alt="Card image cap" class="card-img-top mb-1 img-fluid" data-src="holder.js/100px180/" src="<?=$baseUrl;?>/app-assets/images/portfolio/portfolio-1.jpg"/>
</div>
<h4 class="card-title">Card title</h4>
<p class="card-text">Some quick example text to build on the card title and make up the bulk
              of the card's content.</p>
<a class="btn btn-primary" href="layout-content-left-sticky-sidebar.html#">Button</a>
<!-- /Card sample -->
<hr/>
<!-- Striped Progress sample -->
<div class="category-title pb-1">
<h6>Progress example</h6>
</div>
<div>
<div class="progress progress-sm mt-1 mb-0">
<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar bg-success" role="progressbar" style="width: 40%"></div>
</div>
<div class="progress progress-sm mt-1 mb-0">
<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar bg-danger" role="progressbar" style="width: 60%"></div>
</div>
<div class="progress progress-sm mt-1 mb-0">
<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar bg-info" role="progressbar" style="width: 100%"></div>
</div>
</div>
<!-- /Striped Progress sample -->
<hr/>
<!-- Media sample -->
<div class="category-title pb-1">
<h6>Media example</h6>
</div>
<div class="media">
<a class="media-left pr-1" href="layout-content-left-sticky-sidebar.html#">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-3.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h4 class="media-heading">Cookie candy</h4> Cookie candy dragée marzipan pie pudding.
              </div>
</div>
<!-- /Media sample -->
<hr/>
<!-- /Eange Slider sample -->
<div class="category-title pb-1">
<h6>Range Slider example</h6>
</div>
<fieldset>
<div class="form-group">
<div class="slider-sm slider-success my-1" id="small-slider"></div>
</div>
</fieldset>
<!-- /Range Slider sample -->
<hr/>
<!-- Knob sample -->
<div class="category-title pb-1">
<h6>Knob example</h6>
</div>
<div>
<div class="text-center">
<input class="knob angle-offset" data-angleoffset="90" data-fgcolor="#FB6E52" data-linecap="round" type="text" value="35"/>
</div>
</div>
<!-- /Knob sample -->
<hr/>
<!-- Form sample -->
<div class="sidebar-category">
<div class="category-title pb-1">
<h6>Form example</h6>
</div>
<form action="#" class="category-content">
<div class="form-group">
<label>Your name:</label>
<input class="form-control" placeholder="Username" type="text"/>
</div>
<div class="form-group">
<label>Your password:</label>
<input class="form-control" placeholder="Password" type="password"/>
</div>
<div class="form-group">
<label>Your message:</label>
<textarea class="form-control" cols="3" placeholder="Default textarea" rows="3"></textarea>
</div>
<div class="row">
<div class="col-6">
<button class="btn btn-danger btn-block" type="reset">Reset</button>
</div>
<div class="col-6">
<button class="btn btn-info btn-block" type="submit">Submit</button>
</div>
</div>
</form>
</div>
<!-- /form sample -->
<hr/>
<!-- /Ratings sample -->
<div class="category-title pb-1">
<h6>Ratings example</h6>
</div>
<div>
<p class="card-text">This is the most basic example of ratings.</p>
<div id="score-rating"></div>
</div>
<!-- /Ratings sample -->
</div>
</div>
</div>
</div>
<div class="content-right">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Content Left Sticky Sidebar</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="layout-content-left-sticky-sidebar.html#">Page Layouts</a>
</li>
<li class="breadcrumb-item active">Content Left Sidebar Sticky
                  </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="layout-content-left-sticky-sidebar.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="layout-content-left-sticky-sidebar.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="layout-content-left-sticky-sidebar.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="layout-content-left-sticky-sidebar.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Description -->
<section class="card" id="description">
<h4 class="card-header">Description</h4>
<div class="card-content">
<div class="card-body">
<div class="card-text">
<p>Content layout with left sticky sidebar provides more navigations
                    options on page level. For the larger screen this layout provides
                    best usability. This layout use the third column as a sticky
                    sidebar section.</p>
</div>
</div>
</div>
</section>
<!--/ Description -->
<!-- CSS Classes -->
<section class="card" id="css-classes">
<h4 class="card-header">CSS Classes</h4>
<div class="card-content">
<div class="card-body">
<div class="card-text">
<p>This table contains all classes related to the content left sticky
                    sidebar layout. This is a custom layout classes for content left
                    sticky sidebar layout page requirements.</p>
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
<th scope="row"><code>.content-left-sidebar</code></th>
<td>You can create 3 column left layout by adding <code>.content-left-sidebar</code>                            class in <code>&lt;body&gt;</code> tag.</td>
</tr>
<tr>
<th scope="row"><code>.content-right</code></th>
<td>In this layout content should be float in right side, so
                            <code>.content-right</code> class needs to add in content
                            wrapper. Refer HTML markup line no 27.</td>
</tr>
<tr>
<th scope="row"><code>.sidebar-left</code></th>
<td>In this layout sidebar should be float in left side, so
                            <code>.sidebar-right</code> class needs to add in sidebar
                            wrapper. Refer HTML markup line no 33.</td>
</tr>
<tr>
<th scope="row"><code>.sidebar-sticky</code></th>
<td>To create sticky sidebar add <code>.sidebar-sticky</code>                            class. Refer HTML markup line no 34.</td>
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
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
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
<p>This section contains HTML Markup to create 3 column left sticky
                    sidebar layout. You need to add the <code>.content-left-sidebar</code>                    class in the <code>&lt;body&gt;</code> tag as show in below markup
                    on line no 4. This layout has a navigation, content and left
                    sidebar sections with common header &amp; footer.</p>
<ul>
<li>
<span class="text-bold-600">Line no 27:</span> Contain the <code>.content-right</code>                      class for adjusting content section in right side.</li>
<li>
<span class="text-bold-600">Line no 33:</span> Contain the <code>.sidebar-left</code> class
                      for adjusting sidebar section in left side.</li>
<li>
<span class="text-bold-600">Line no 34:</span> Contain the <code>.sidebar-sticky</code>                      class, that will make the left sidebar sticky.</li>
</ul>
<p>Modern has a ready to use starter kit, you can use this layout
                    directly by using the starter kit pages from the <code>modern-admin/starter-kit</code>                    folder.</p>
<pre class="language-markup scrollable-container ps-container ps-theme-light ps-active-x" data-line="4, 27, 33, 34" data-mcs-theme="minimal-dark">
        <code class="language-markup">
            &lt;!DOCTYPE html&gt;
              &lt;html lang="en"&gt;
                &lt;head&gt;&lt;/head&gt;
                &lt;body data-menu="vertical-menu" class="vertical-layout vertical-menu content-left-sidebar menu-expanded"&gt;
                  
                  &lt;!-- navbar-fixed-top--&gt;
                  &lt;nav role="navigation" class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-dark navbar-shadow navbar-border"&gt;
                      ...
                  &lt;/nav&gt;
                  
                  &lt;!-- BEGIN Navigation--&gt;
                  &lt;div class="main-menu menu-dark menu-fixed menu-shadow"&gt;
                      ...
                  &lt;/div&gt;
                  &lt;!-- END Navigation--&gt;
                  &lt;!-- BEGIN Content--&gt;
                  &lt;div class="content app-content container-fluid"&gt;
                      &lt;div class="content-wrapper"&gt;
                          &lt;!-- content header--&gt;
                          &lt;div class="content-header row"&gt;
                              ...
                          &lt;/div&gt;
                          &lt;!-- content header--&gt;
                          
                          &lt;!-- content right--&gt;
                          &lt;div class="content-content-right"&gt;
                              ...
                          &lt;/div&gt;
                          &lt;!-- content right--&gt;
                          
                          &lt;!-- sidebar left--&gt;
                          &lt;div class="sidebar-sidebar-left"&gt;
                              &lt;div class="sidebar sidebar-sticky"&gt;
                                  ...
                              &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;!-- sidebar left--&gt;
                          
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
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
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
<p>This table contains required PUG variables to generate 3 column
                    left sticky sidebar layout.</p>
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
<th scope="row"><code>pageConfig</code></th>
<td><code>contentLayout</code></td>
<td><code>string</code></td>
<td><code>'content-left-sidebar'</code></td>
<td><code>pageConfig</code> block has a page configuration
                            variables, in that for 3 column layout need to define
                            variable <code>- var contentLayout = 'content-left-sidebar'</code></td>
</tr>
<tr>
<th scope="row"><code>pageConfig</code></th>
<td><code>sidebarSticky</code></td>
<td><code>boolean</code></td>
<td><code>true</code></td>
<td>To make left sticky sidebar <code>pageConfig</code> block
                            also require <code>- var sidebarSticky = true</code>                            configuration variables, set value as <code>true</code>                            to enable it.</td>
</tr>
</tbody>
</table>
</div>
<div class="alert bg-info alert-icon-left alert-dismissible fade in mb-2" role="alert">
<span class="alert-icon"><i class="la la-info"></i></span>
                    Modern Admin Template <a class="white" href="../../../documentation/index.html" target="_blank"><u>documentation</u></a> has full
                    list of all blocks, datatype, variables and their description
                    table. Please review it for more configuration options.
                  </div>
<h5 class="card-title mt-2">PUG Code</h5>
<p>To generate content left sticky sidebar layout page or template,
                    you need to use following PUG code.</p>
<ul>
<li>
<span class="text-bold-600">Line no 20-22:</span> You need to set <code>contentLayout</code>                      variable value as <code>'content-left-sidebar'</code> in <code>pageConfig</code>                      block.</li>
<li>
<span class="text-bold-600">Line no 22:</span> You need to set <code>sidebarSticky</code>                      variable value as <code>true</code> in <code>pageConfig</code>                      block to enable left sticky sidebar.</li>
<li>
<span class="text-bold-600">Line no 28-29:</span> <code>content</code> block has content
                      section html file included <code>include ../contents/layout-content-left-sticky-sidebar.html</code>,
                      which can be customizable on page level.</li>
<li>
<span class="text-bold-600">Line no 31-32:</span> <code>sidebar</code> block has sidebar
                      section html file included <code>include ../contents/sidebar-common.html</code>,
                      which can be customizable on page level.</li>
</ul>
<p>If you want to use this layout on page level you need to define
                    it on page it self. This template has one example pug file for
                    content left sticky sidebar <code>layout-content-left-sticky-sidebar.pug</code>,
                    however you can use it on template level but it will generate
                    whole template as a content left sticky sidebar.</p>
<pre class="language-pug" data-line="20-22, 28-29, 31-32" data-line-offset="11">
              <code class="language-pug">
                  block pageVars
                	- var pageTitle    = "Content Left Sticky Sidebar"
                	- var pageSubTitle = "content layout with left sticky sidebar"
                	- var description  = "The content layout page structure with navigation, content area and left sticky sidebar."
                	- var activeMenu   = "layout-content-left-sticky-sidebar"
                
                extends template
                
                append pageConfig
                	- var contentLayout = 'content-left-sidebar'
                	- var sidebarSticky = true
                
                append breadcrumbs
                	+breadcrumbs([{url:"index.html",name:"Home"},{url:"#",name:"Page Layouts"}, {name:"Content Left Sidebar Sticky"}])
                
                //- Include page content in content block
                append content
                	include ../contents/layout-content-left-sticky-sidebar.html
                
                append sidebar
                	include ../contents/sidebar-common.html
                
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
</div>