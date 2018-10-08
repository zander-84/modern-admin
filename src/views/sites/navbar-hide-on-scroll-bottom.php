<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\NavbarHideOnScrollBottomAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Hide on Scroll Bottom</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="navbar-hide-on-scroll-bottom.html#">Navbars</a>
</li>
<li class="breadcrumb-item active">Hide on Scroll Bottom
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="navbar-hide-on-scroll-bottom.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="navbar-hide-on-scroll-bottom.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="navbar-hide-on-scroll-bottom.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="navbar-hide-on-scroll-bottom.html#"><i class="la la-cog"></i> Settings</a>
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
<p>The hide on scroll option use to hide your fixed top or bottom navbar
                  on page scroll down, once you scroll up again it will be visible.
                  In this page you can experience it.</p>
<div class="alert bg-success alert-icon-left mb-2" role="alert">
<span class="alert-icon"><i class="la la-pencil-square"></i></span>
<strong>Experience it!</strong>
<p>Hideable navbar option is available for fixed navbar with static
                    navigation only. Works in top and bottom positions, single and
                    multiple navbars.</p>
</div>
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
<p>This table contains all classes related to the fixed top or bottom
                  navbar with hide on scroll.</p>
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
<th scope="row"><code>.navbar-hide-on-scroll</code></th>
<td>To set navbar hide on scroll you need to add <code>.navbar-hide-on-scroll</code>                          class in navbar <code>&lt;nav&gt;</code> tag. Refer HTML
                          markup line no 7.</td>
</tr>
<tr>
<th scope="row"><code>.fixed-top</code></th>
<td>To hide on scroll you need to set navbar fixed also, add
                          fixed navbar in top <code>.fixed-top</code> class in navbar
                          <code>&lt;nav&gt;</code> tag. Refer HTML markup line no
                          7.
                        </td>
</tr>
<tr>
<th scope="row"><code>.fixed-bottom</code></th>
<td>To hide on scroll you need to set navbar fixed also, add
                          fixed navbar in bottom <code>.fixed-bottom</code> class
                          in navbar <code>&lt;nav&gt;</code> tag. Refer HTML markup
                          line no 7.</td>
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
<p>This section contains HTML Markup to set navbar hide on scroll. This
                  markup define where to add css classes to make navbar hide on scroll.</p>
<ul>
<li>
<span class="text-bold-600">Line no 7:</span> Contain the <code>.navbar-hide-on-scroll</code>                    class to make navbar hide on scroll.</li>
<li>
<span class="text-bold-600">Line no 7:</span> Contain the <code>.fixed-top</code> or <code>.fixed-bottom</code>                    class for adjusting navbar fixed on top.</li>
</ul>
<p>Modern has a ready to use starter kit, you can use this layout directly
                  by using the starter kit pages from the <code>modern-admin/starter-kit</code>                  folder.</p>
<pre class="language-markup" data-line="7">
        <code class="language-markup">
            &lt;!DOCTYPE html&gt;
              &lt;html lang="en"&gt;
                &lt;head&gt;&lt;/head&gt;
                &lt;body data-menu="vertical-menu" class="vertical-layout vertical-menu 2-column menu-expanded"&gt;
                  &lt;!-- navbar-hide-on-scroll--&gt;
                  &lt;nav role="navigation" class="header-navbar navbar-expand-sm navbar navbar-with-menu navbar-hide-on-scroll fixed-bottom navbar-dark navbar-shadow navbar-border"&gt;
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
<!--JS Code -->
<section class="card" id="js-code">
<div class="card-header">
<h4 class="card-title">JS Configuration</h4>
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
<p>Modern Admin use headroom.js to functionate navbar hide on scroll.
                  You need to use the following headroom.js configurations code for
                  customization. File app.js has the following code for customization.</p>
<h5 class="card-title mt-2">Plugin overview</h5>
<p>Headroom.js is a lightweight, high-performance JS widget (with no
                  dependencies!) that allows you to react to the user's scroll. The
                  header on this site is a living example, it slides out of view
                  when scrolling down and slides back in when scrolling up.</p>
<h5 class="card-title mt-2">Plugin options</h5>
<p>Headroom.js can also accept an options object to alter the way it
                  behaves. You can see the default options by inspecting Headroom.options.
                  The structure of an options object is as follows:</p>
<div class="row">
<div class="col-md-6">
<pre class="language-js">
                <code class="language-js">
                  {
                  // vertical offset in px before element is first unpinned
                  offset : 0,
                  // scroll tolerance in px before state changes
                  tolerance : 0,
                  // or you can specify tolerance individually for up/down scroll
                  tolerance : {
                      up : 5,
                      down : 0
                  },
                  // css classes to apply
                  classes : {
                      // when element is initialised
                      initial : "headroom",
                      // when scrolling up
                      pinned : "headroom--pinned",
                      // when scrolling down
                      unpinned : "headroom--unpinned",
                      // when above offset
                      top : "headroom--top",
                      // when below offset
                      notTop : "headroom--not-top",
                      // when at bottom of scroll area
                      bottom : "headroom--bottom",
                      // when not at bottom of scroll area
                      notBottom : "headroom--not-bottom"
                  },
                  // element to listen to scroll events on, defaults to `window`
                  scroller : someElement,
                  // callback when pinned, `this` is headroom object
                  onPin : function() {},
                  // callback when unpinned, `this` is headroom object
                  onUnpin : function() {},
                  // callback when above offset, `this` is headroom object
                  onTop : function() {},
                  // callback when below offset, `this` is headroom object
                  onNotTop : function() {},
                  // callback when at bottom of page, `this` is headroom object
                  onBottom : function() {},
                  // callback when moving away from bottom of page, `this` is headroom object
                  onNotBottom : function() {}
              }
                </code>
              </pre>
</div>
<div class="col-md-6">
<table class="table table-hover">
<thead>
<tr>
<th>Options</th>
<th>Datatype</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row"><code>offset </code></th>
<td>Number</td>
<td>Vertical offset in px before element is first unpinned.</td>
</tr>
<tr>
<th scope="row"><code>tolerance </code></th>
<td>Number</td>
<td>Scroll tolerance in px before state changes,or you can
                            specify tolerance individually for up/down scroll.</td>
</tr>
<tr>
<th scope="row"><code>initial </code></th>
<td>String</td>
<td>When element is initialised this class will be applied.</td>
</tr>
<tr>
<th scope="row"><code>pinned </code></th>
<td>String</td>
<td>when scrolling up, this class will be applied.</td>
</tr>
<tr>
<th scope="row"><code>unpinned </code></th>
<td>String</td>
<td>When scrolling down, this class will be applied.</td>
</tr>
<tr>
<th scope="row"><code>Top </code></th>
<td>String</td>
<td>When above offset, this class will be applied.</td>
</tr>
<tr>
<th scope="row"><code>notTop  </code></th>
<td>String</td>
<td>When below offset, this class will be applied.</td>
</tr>
<tr>
<th scope="row"><code>bottom </code></th>
<td>String</td>
<td>When at bottom of scroll area, this class will be applied.</td>
</tr>
<tr>
<th scope="row"><code>notBottom </code></th>
<td>String</td>
<td>When not at bottom of scroll area, this class will be applied.</td>
</tr>
<tr>
<th scope="row"><code>scroller</code></th>
<td></td>
<td>Element to listen to scroll events on, defaults to `window`.</td>
</tr>
<tr>
<th scope="row"><code>onPin </code></th>
<td>function</td>
<td>Callback when pinned, `this` is headroom object.</td>
</tr>
<tr>
<th scope="row"><code>onUnpin </code></th>
<td>function</td>
<td>Callback when unpinned, `this` is headroom object.</td>
</tr>
<tr>
<th scope="row"><code>onTop </code></th>
<td>function</td>
<td>Callback when above offset, `this` is headroom object.</td>
</tr>
<tr>
<th scope="row"><code>onNotTop </code></th>
<td>function</td>
<td>Callback when below offset, `this` is headroom object.</td>
</tr>
<tr>
<th scope="row"><code>onBottom </code></th>
<td>function</td>
<td>Callback when at bottom of page, `this` is headroom object.</td>
</tr>
<tr>
<th scope="row"><code>onNotBottom  </code></th>
<td>function</td>
<td>Callback when moving away from bottom of page, `this` is
                            headroom object.</td>
</tr>
</tbody>
</table>
</div>
</div>
<p>In Modern Admin we have just used following headroom.js configurations
                  options in <code>js/code/app.js</code></p>
<div class="row">
<div class="col-md-6">
<p class="text-bold-600">Top navbar position example:</p>
<pre class="language-js">
            <code class="language-js">
              // Top Navbars - Hide on Scroll
              $(".navbar-hide-on-scroll.fixed-top").headroom({
                "offset": 205,
                "tolerance": 5,
                "classes": {
                   // when element is initialised
                  initial : "headroom",
                  // when scrolling up
                  pinned : "headroom--pinned-top",
                  // when scrolling down
                  unpinned : "headroom--unpinned-top",
                }
              });
            </code>
          </pre>
</div>
<div class="col-md-6">
<p class="text-bold-600">Bottom navbar position example:</p>
<pre class="language-js">
            <code class="language-js">
              // Bottom Navbars - Hide on Scroll
              $(".navbar-hide-on-scroll.fixed-bottom").headroom({
                "offset": 205,
                "tolerance": 5,
                "classes": {
                   // when element is initialised
                  initial : "headroom",
                  // when scrolling up
                  pinned : "headroom--pinned-bottom",
                  // when scrolling down
                  unpinned : "headroom--unpinned-bottom",
                }
              });
            </code>
          </pre>
</div>
</div>
</div>
</div>
</div>
</section>
<!--/ JS Code -->
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
<p>This table contains required PUG variables to generate fixed navbar
                  layout.
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
<th scope="row"><code>pageConfig</code></th>
<td><code>navbarFixed</code></td>
<td><code>boolean</code></td>
<td><code>false</code></td>
<td><code>pageConfig</code> block has a <code>navbarFixed</code>                          variable, it contains navbar specific settings in that
                          you need to set <code>false</code> to adjust top padding..</td>
</tr>
<tr>
<th scope="row"><code>navbarConfig</code></th>
<td><code>navbarPosition</code></td>
<td><code>string</code></td>
<td><code>'fixed-bottom'</code></td>
<td><code>navbarConfig</code> block has a <code>navbarPosition</code>                          variable, it contains navbar specific classes in that you
                          need to set <code>'fixed-bottom'</code>.</td>
</tr>
<tr>
<th scope="row"><code>navbarConfig</code></th>
<td><code>navbarHideOnScroll</code></td>
<td><code>string</code></td>
<td><code>boolean</code></td>
<td><code>navbarConfig</code> block has a <code>navbarHideOnScroll</code>                          variable, it contains navbar hide on scroll specific settings
                          in that you need to set <code>true</code> to enable it.</td>
</tr>
<tr>
<th scope="row"><code>verticalMenuConfig</code></th>
<td><code>menuType</code></td>
<td><code>string</code></td>
<td><code>'menu-static'</code></td>
<td><code>verticalMenuConfig</code> block has a <code>menuType</code>                          variable, it contains navigation specific classes in that
                          you need to set <code>'menu-static'</code> for vertical
                          layout. Hide on scroll support only static navigation.</td>
</tr>
<tr>
<th scope="row"><code>horizontalMenuConfig</code></th>
<td><code>menuType</code></td>
<td><code>string</code></td>
<td><code>'menu-static'</code></td>
<td><code>horizontalMenuConfig</code> block has a <code>menuType</code>                          variable, it contains navigation specific classes in that
                          you need to set <code>'menu-static'</code> for horizontal
                          layout. Hide on scroll support only static navigation.</td>
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
<p>To set navbar hide on scroll on page or template, you need to use
                  following PUG code.</p>
<ul>
<li>
<span class="text-bold-600">Line no 20-21:</span> Set navbar fixed setting to <code>navbarFixed</code>                    variable value as <code>false</code> in <code>pageConfig</code>                    block.</li>
<li>
<span class="text-bold-600">Line no 23-25:</span> Set navbar fixed class to <code>navbarPosition</code>                    variable value as <code>'fixed-bottom'</code> in <code>navbarConfig</code>                    block.</li>
<li>
<span class="text-bold-600">Line no 25:</span> Set navbar hide on scroll setting to <code>navbarHideOnScroll</code>                    variable value as <code>true</code> in <code>navbarConfig</code>                    block.</li>
<li>
<span class="text-bold-600">Line no 27-28:</span> Set navigation static class to <code>menuType</code>                    variable value as <code>'menu-static'</code> in <code>verticalMenuConfig</code>                    block.</li>
<li>
<span class="text-bold-600">Line no 30-31:</span> Set navigation static class to <code>menuType</code>                    variable value as <code>'navbar-static'</code> in <code>horizontalMenuConfig</code>                    block.</li>
<li>
<span class="text-bold-600">Line no 37-38:</span> <code>content</code> block has content
                    section html file included <code>include ../contents/navbar-hide-on-scroll-bottom.html</code>,
                    which can be customizable on page level.</li>
</ul>
<p>If you want to use this layout on page level you need to define it
                  on page it self. This template has one example pug file for fixed
                  <code>navbar-hide-on-scroll-bottom.pug</code>, however you can
                  use it on template level but it will generate whole template has
                  a navbar hide on scroll class.</p>
<pre class="language-pug" data-line="20-21, 23-25, 27-28, 30-31, 37-38" data-line-offset="11">
            <code class="language-pug">
            block pageVars
              - var pageTitle    = "Hide on Scroll Bottom"
              - var pageSubTitle = "Bottom navbar hide on page scroll"
              - var description  = "The hide on scroll option use to hide your fixed bottom navbar on page scroll."
              - var activeMenu   = "navbar-hide-on-scroll-bottom"
            extends template
            append pageConfig
              - var navbarFixed = false
            append navbarConfig
              - var navbarPosition = "fixed-bottom"
              - var navbarHideOnScroll = true
            append verticalMenuConfig
              - var menuType = "menu-static"
            append footerConfig
              - var footerType = "footer-static"
            append breadcrumbs
              +breadcrumbs([{url:"index.html",name:"Home"},{url:"#",name:"Navbars"}, {name:"Hide on Scroll Bottom"}])
            //- Include page content in page block
            append content
              include ../contents/navbar-hide-on-scroll-bottom.html
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
