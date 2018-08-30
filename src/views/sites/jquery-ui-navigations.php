<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\JqueryUiNavigationsAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">jQuery UI navigations</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="jquery-ui-navigations.html#">jQuery UI</a>
</li>
<li class="breadcrumb-item active">Navigations
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="jquery-ui-navigations.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="jquery-ui-navigations.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="jquery-ui-navigations.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="jquery-ui-navigations.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Accordion section start -->
<section id="accordion">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4>Accordion</h4>
<p>Displays collapsible content panels for presenting information in a
                limited amount of space. Click headers to expand/collapse content
                that is broken into logical sections, much like tabs. Optionally,
                toggle sections open/closed on mouseover.</p>
<hr/>
</div>
</div>
<div class="row">
<!-- Accordion Default -->
<div class="col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default Functionality</h4>
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
<div class="card-content collapse show draggable-container">
<div class="card-body">
<p class="card-text">
                      Click headers to expand/collapse content that is broken into logical sections, much
                      like tabs. Optionally, toggle sections open/closed on mouseover.
                    </p>
<div class="jqueryui-ele-container">
<div class="accordion-default">
<h3>Section 1</h3>
<div>
<p>
                            Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque.
                            Vivamus nisi metus, molestie vel, gravida in, condimentum
                            sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam
                            mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum
                            a velit eu ante scelerisque vulputate.
                          </p>
</div>
<h3>Section 2</h3>
<div>
<p>
                            Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus
                            hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                            velit, faucibus interdum tellus libero ac justo. Vivamus
                            non quam. In suscipit faucibus urna.
                          </p>
</div>
<h3>Section 3</h3>
<div>
<p>
                            Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus
                            pellentesque purus in massa. Aenean in pede. Phasellus
                            ac libero ac tellus pellentesque semper. Sed ac felis.
                            Sed commodo, magna quis lacinia ornare, quam ante aliquam
                            nisi, eu iaculis leo purus venenatis dui.
                        </p></div>
<h3>Section 4</h3>
<div>
<p>
                            Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada
                            fames ac turpis egestas. Vestibulum ante ipsum primis
                            in faucibus orci luctus et ultrices posuere cubilia Curae;
                            Aenean lacinia mauris vel est.
                          </p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Collapse Content -->
<div class="col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Collapse Content</h4>
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
<div class="card-content collapse show constrain-movement-container">
<div class="card-body">
<p class="card-text">
                      By default, accordions always keep one section open. To allow for all sections to
                      be be collapsible, set the <code>collapsible</code>                      option to true. Click on the currently open section to collapse
                      its content pane.
                    </p>
<div class="jqueryui-ele-container">
<div class="accordion-collapsible">
<h3>Section 1</h3>
<div>
<p>
                            Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque.
                            Vivamus nisi metus, molestie vel, gravida in, condimentum
                            sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam
                            mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum
                            a velit eu ante scelerisque vulputate.
                          </p>
</div>
<h3>Section 2</h3>
<div>
<p>
                            Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus
                            hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                            velit, faucibus interdum tellus libero ac justo. Vivamus
                            non quam. In suscipit faucibus urna.
                          </p>
</div>
<h3>Section 3</h3>
<div>
<p>
                            Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus
                            pellentesque purus in massa. Aenean in pede. Phasellus
                            ac libero ac tellus pellentesque semper. Sed ac felis.
                            Sed commodo, magna quis lacinia ornare, quam ante aliquam
                            nisi, eu iaculis leo purus venenatis dui.
                        </p></div>
<h3>Section 4</h3>
<div>
<p>
                            Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada
                            fames ac turpis egestas. Vestibulum ante ipsum primis
                            in faucibus orci luctus et ultrices posuere cubilia Curae;
                            Aenean lacinia mauris vel est.
                          </p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<!-- No Auto Height -->
<div class="col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">No Auto Height</h4>
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
<div class="card-content collapse show draggable-container">
<div class="card-body">
<p class="card-text">
                      Setting <code>heightStyle: "content"</code> allows the accordion
                      panels to keep their native height.
                    </p>
<div class="jqueryui-ele-container">
<div class="accordion-height">
<h3>Section 1</h3>
<div>
<p>
                            Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque.
                            Vivamus nisi metus, molestie vel, gravida in, condimentum
                            sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam
                            mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum
                            a velit eu ante scelerisque vulputate.
                          </p>
</div>
<h3>Section 2</h3>
<div>
<p>
                            Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus
                            hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                            velit, faucibus interdum tellus libero ac justo. Vivamus
                            non quam. In suscipit faucibus urna.
                          </p>
</div>
<h3>Section 3</h3>
<div>
<p>
                            Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus
                            pellentesque purus in massa. Aenean in pede. Phasellus
                            ac libero ac tellus pellentesque semper. Sed ac felis.
                            Sed commodo, magna quis lacinia ornare, quam ante aliquam
                            nisi, eu iaculis leo purus venenatis dui.
                        </p></div>
<h3>Section 4</h3>
<div>
<p>
                            Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada
                            fames ac turpis egestas. Vestibulum ante ipsum primis
                            in faucibus orci luctus et ultrices posuere cubilia Curae;
                            Aenean lacinia mauris vel est.
                          </p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Sortable -->
<div class="col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Sortable</h4>
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
<div class="card-content collapse show constrain-movement-container">
<div class="card-body">
<p class="card-text">
                      Drag the header to re-order panels.
                    </p>
<div class="jqueryui-ele-container">
<div class="accordion-sortable">
<div class="group">
<h3>Section 1</h3>
<div>
<p>
                              Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque.
                              Vivamus nisi metus, molestie vel, gravida in, condimentum
                              sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam
                              mi. Proin viverra leo ut odio. Curabitur malesuada.
                              Vestibulum a velit eu ante scelerisque vulputate.
                            </p>
</div>
</div>
<div class="group">
<h3>Section 2</h3>
<div>
<p>
                              Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus
                              hendrerit, dolor at aliquet laoreet, mauris turpis
                              porttitor velit, faucibus interdum tellus libero ac
                              justo. Vivamus non quam. In suscipit faucibus urna.
                            </p>
</div>
</div>
<div class="group">
<h3>Section 3</h3>
<div>
<p>
                              Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus
                              pellentesque purus in massa. Aenean in pede. Phasellus
                              ac libero ac tellus pellentesque semper. Sed ac felis.
                              Sed commodo, magna quis lacinia ornare, quam ante aliquam
                              nisi, eu iaculis leo purus venenatis dui.
                          </p></div>
</div>
<div class="group">
<h3>Section 4</h3>
<div>
<p>
                              Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada
                              fames ac turpis egestas. Vestibulum ante ipsum primis
                              in faucibus orci luctus et ultrices posuere cubilia
                              Curae; Aenean lacinia mauris vel est.
                            </p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Accordion section end -->
<!-- Menu section start -->
<section id="menu">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4>Menu</h4>
<p>Themeable menu with mouse and keyboard interactions for navigation.
                A menu with the default configuration, disabled items and nested
                menus. A list is transformed, adding theming, mouse and keyboard
                navigation support. Try to tab to the menu then use the cursor keys
                to navigate.</p>
<hr/>
</div>
</div>
<div class="row">
<!-- Default Functionality -->
<div class="col-lg-4 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default Functionality</h4>
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
<div class="card-content collapse show draggable-container">
<div class="card-body">
<p class="card-text">
                      A menu with the default configuration and nested menus. Try to tab to the menu then
                      use the cursor keys to navigate.
                    </p>
<div class="jqueryui-ele-container">
<ul class="menu-default">
<li>
<div>Books</div>
</li>
<li>
<div>Clothing</div>
</li>
<li>
<div>Electronics</div>
<ul>
<li>
<div>Home Entertainment</div>
</li>
<li>
<div>Car Hifi</div>
</li>
<li>
<div>Utilities</div>
</li>
</ul>
</li>
<li class="ui-menu-divider"></li>
<li>
<div>Movies</div>
</li>
<li>
<div>Music</div>
<ul>
<li>
<div>Rock</div>
<ul>
<li>
<div>Alternative</div>
</li>
<li>
<div>Classic</div>
</li>
</ul>
</li>
<li>
<div>Jazz</div>
<ul>
<li>
<div>Freejazz</div>
</li>
<li>
<div>Big Band</div>
</li>
<li>
<div>Modern</div>
</li>
</ul>
</li>
<li>
<div>Pop</div>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<!-- Disabled Menu Items -->
<div class="col-lg-4 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Disabled Menu Items</h4>
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
<div class="card-content collapse show draggable-container">
<div class="card-body">
<p class="card-text">
                      Add class <code>ui-state-disabled</code> to a list item to
                      disable that menu item. A menu with the default configuration,
                      disabled itmes and nested menus.
                    </p>
<div class="jqueryui-ele-container">
<ul class="disabled-menu-items">
<li>
<div class="ui-state-disabled">Books</div>
</li>
<li>
<div>Clothing</div>
</li>
<li>
<div>Electronics</div>
<ul>
<li>
<div>Home Entertainment</div>
</li>
<li>
<div>Car Hifi</div>
</li>
<li>
<div>Utilities</div>
</li>
</ul>
</li>
<li class="ui-menu-divider"></li>
<li>
<div class="ui-state-disabled">Movies</div>
</li>
<li>
<div>Music</div>
<ul>
<li>
<div>Rock</div>
<ul>
<li>
<div>Alternative</div>
</li>
<li>
<div>Classic</div>
</li>
</ul>
</li>
<li>
<div>Jazz</div>
<ul>
<li>
<div>Freejazz</div>
</li>
<li>
<div>Big Band</div>
</li>
<li>
<div>Modern</div>
</li>
</ul>
</li>
<li>
<div>Pop</div>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<!-- Disabled Menu -->
<div class="col-lg-4 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Disabled Menu</h4>
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
<div class="card-content collapse show draggable-container">
<div class="card-body">
<p class="card-text">
                      Add option <code>disabled: true</code> to disable menu.
                    </p>
<div class="jqueryui-ele-container">
<ul class="menu-disabled">
<li>
<div>Books</div>
</li>
<li>
<div>Clothing</div>
</li>
<li>
<div>Electronics</div>
<ul>
<li>
<div>Home Entertainment</div>
</li>
<li>
<div>Car Hifi</div>
</li>
<li>
<div>Utilities</div>
</li>
</ul>
</li>
<li class="ui-menu-divider"></li>
<li>
<div>Movies</div>
</li>
<li>
<div>Music</div>
<ul>
<li>
<div>Rock</div>
<ul>
<li>
<div>Alternative</div>
</li>
<li>
<div>Classic</div>
</li>
</ul>
</li>
<li>
<div>Jazz</div>
<ul>
<li>
<div>Freejazz</div>
</li>
<li>
<div>Big Band</div>
</li>
<li>
<div>Modern</div>
</li>
</ul>
</li>
<li>
<div>Pop</div>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<!-- Menu Category Header -->
<div class="col-lg-4 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Category Header</h4>
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
<div class="card-content collapse show draggable-container">
<div class="card-body">
<p class="card-text">
                      By using the <code>items</code> option, you can configure which
                      elements are converted into selectable menu items. Here this
                      technique is used to create category headers.
                    </p>
<div class="jqueryui-ele-container">
<ul class="menu-category-header ui-menu-upper">
<li class="ui-widget-header">
<div>Category 1</div>
</li>
<li>
<div>Books</div>
</li>
<li>
<div>Clothing</div>
</li>
<li>
<div>Electronics</div>
<ul>
<li>
<div>Home Entertainment</div>
</li>
<li>
<div>Car Hifi</div>
</li>
<li>
<div>Utilities</div>
</li>
</ul>
</li>
<li class="ui-widget-header">
<div>Category 2</div>
</li>
<li>
<div>Movies</div>
</li>
<li>
<div>Music</div>
<ul>
<li>
<div>Rock</div>
<ul>
<li>
<div>Alternative</div>
</li>
<li>
<div>Classic</div>
</li>
</ul>
</li>
<li>
<div>Jazz</div>
<ul>
<li>
<div>Freejazz</div>
</li>
<li>
<div>Big Band</div>
</li>
<li>
<div>Modern</div>
</li>
</ul>
</li>
<li>
<div>Pop</div>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<!-- Menu Icons -->
<div class="col-lg-4 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Menu Icons</h4>
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
<div class="card-content collapse show draggable-container">
<div class="card-body">
<p class="card-text">
                      A menu with the default configuration, showing how to use a menu with icons.
                    </p>
<div class="jqueryui-ele-container">
<ul class="menu-icons">
<li class="ui-widget-header">
<div>Category 1</div>
</li>
<li>
<div>
<span class="ft-crop"></span> Books</div>
</li>
<li>
<div>
<span class="ft-eye"></span> Clothing</div>
</li>
<li>
<div>
<span class="ft-paperclip"></span> Electronics</div>
</li>
<li class="ui-widget-header">
<div>Category 2</div>
</li>
<li>
<div>
<span class="ft-mail"></span> Movies</div>
</li>
<li>
<div>
<span class="ft-link"></span> Music</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<!-- Menu Header Icon -->
<div class="col-lg-4 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Menu Header Icon</h4>
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
<div class="card-content collapse show draggable-container">
<div class="card-body">
<p class="card-text">
                      A menu with the default configuration, showing how to use a menu header with icons.
                    </p>
<div class="jqueryui-ele-container">
<ul class="menu-header-icons">
<li class="ui-widget-header">
<div>
<span class="ft-bell"></span> Category 1</div>
</li>
<li>
<div>Books</div>
</li>
<li>
<div>Clothing</div>
</li>
<li>
<div>Electronics</div>
</li>
<li class="ui-widget-header">
<div>
<span class="la la-lock"></span> Category 2</div>
</li>
<li>
<div>Movies</div>
</li>
<li>
<div>Music</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Menu section end -->
<!-- Tabs section start -->
<section id="tabs">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4>Tabs</h4>
<p>Themeable menu with mouse and keyboard interactions for navigation.
                A menu with the default configuration, disabled items and nested
                menus. A list is transformed, adding theming, mouse and keyboard
                navigation support. Try to tab to the menu then use the cursor keys
                to navigate.</p>
<hr/>
</div>
</div>
<div class="row">
<!-- Draggable Default -->
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default Functionality</h4>
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
<div class="card-content collapse show draggable-container">
<div class="card-body">
<p class="card-text">
                      A single content area with multiple panels, each associated with a header in a list.
                      Click tabs to swap between content that is broken into logical
                      sections.
                    </p>
<div class="jqueryui-ele-container">
<div class="tabs-default">
<ul>
<li><a href="jquery-ui-navigations.html#tabs-default-1"><i class="ft-unlock"></i> Nunc tincidunt</a></li>
<li><a href="jquery-ui-navigations.html#tabs-default-2"><i class="ft-wifi"></i> Proin dolor</a></li>
<li><a href="jquery-ui-navigations.html#tabs-default-3"><i class="ft-image"></i> Aenean lacinia</a></li>
</ul>
<div id="tabs-default-1">
<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo
                            a, risus. Curabitur nec arcu. Donec sollicitudin mi sit
                            amet mauris. Nam elementum quam ullamcorper ante. Etiam
                            aliquet massa et lorem. Mauris dapibus lacus auctor risus.
                            Aenean tempor ullamcorper leo. Vivamus sed magna quis
                            ligula eleifend adipiscing. Duis orci. Aliquam sodales
                            tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie
                            erat. Ut et mauris vel pede varius sollicitudin. Sed
                            ut dolor nec orci tincidunt interdum. Phasellus ipsum.
                            Nunc tristique tempus lectus.</p>
</div>
<div id="tabs-default-2">
<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus
                            gravida ante, ut pharetra massa metus id nunc. Duis scelerisque
                            molestie turpis. Sed fringilla, massa eget luctus malesuada,
                            metus eros molestie lectus, ut tempus eros massa ut dolor.
                            Aenean aliquet fringilla sem. Suspendisse sed ligula
                            in ligula suscipit aliquam. Praesent in eros vestibulum
                            mi adipiscing adipiscing. Morbi facilisis. Curabitur
                            ornare consequat nunc. Aenean vel metus. Ut posuere viverra
                            nulla. Aliquam erat volutpat. Pellentesque convallis.
                            Maecenas feugiat, tellus pellentesque pretium posuere,
                            felis lorem euismod felis, eu ornare leo nisi vel felis.
                            Mauris consectetur tortor et purus.</p>
</div>
<div id="tabs-default-3">
<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse
                            potenti. Aliquam vulputate, pede vel vehicula accumsan,
                            mi neque rutrum erat, eu congue orci lorem eget lorem.
                            Vestibulum non ante. Class aptent taciti sociosqu ad
                            litora torquent per conubia nostra, per inceptos himenaeos.
                            Fusce sodales. Quisque eu urna vel enim commodo pellentesque.
                            Praesent eu risus hendrerit ligula tempus pretium. Curabitur
                            lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Collapse Content -->
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Collapse Content</h4>
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
<div class="card-content collapse show constrain-movement-container">
<div class="card-body">
<p class="card-text">
                      A single content area with multiple panels, each associated with a header in a list.
                      To allow for all sections to be be collapsible, set the <code>collapsible</code>                      option to true. Click on the currently open section to collapse
                      its content pane.
                    </p>
<div class="jqueryui-ele-container">
<div class="tabs-collapse">
<ul>
<li><a href="jquery-ui-navigations.html#tabs-collapse-1"><i class="ft-clock"></i> Nunc tincidunt</a></li>
<li><a href="jquery-ui-navigations.html#tabs-collapse-2"><i class="ft-watch"></i> Proin dolor</a></li>
<li><a href="jquery-ui-navigations.html#tabs-collapse-3"><i class="ft-airplay"></i> Aenean lacinia</a></li>
</ul>
<div id="tabs-collapse-1">
<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo
                            a, risus. Curabitur nec arcu. Donec sollicitudin mi sit
                            amet mauris. Nam elementum quam ullamcorper ante. Etiam
                            aliquet massa et lorem. Mauris dapibus lacus auctor risus.
                            Aenean tempor ullamcorper leo. Vivamus sed magna quis
                            ligula eleifend adipiscing. Duis orci. Aliquam sodales
                            tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie
                            erat. Ut et mauris vel pede varius sollicitudin. Sed
                            ut dolor nec orci tincidunt interdum. Phasellus ipsum.
                            Nunc tristique tempus lectus.</p>
</div>
<div id="tabs-collapse-2">
<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus
                            gravida ante, ut pharetra massa metus id nunc. Duis scelerisque
                            molestie turpis. Sed fringilla, massa eget luctus malesuada,
                            metus eros molestie lectus, ut tempus eros massa ut dolor.
                            Aenean aliquet fringilla sem. Suspendisse sed ligula
                            in ligula suscipit aliquam. Praesent in eros vestibulum
                            mi adipiscing adipiscing. Morbi facilisis. Curabitur
                            ornare consequat nunc. Aenean vel metus. Ut posuere viverra
                            nulla. Aliquam erat volutpat. Pellentesque convallis.
                            Maecenas feugiat, tellus pellentesque pretium posuere,
                            felis lorem euismod felis, eu ornare leo nisi vel felis.
                            Mauris consectetur tortor et purus.</p>
</div>
<div id="tabs-collapse-3">
<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse
                            potenti. Aliquam vulputate, pede vel vehicula accumsan,
                            mi neque rutrum erat, eu congue orci lorem eget lorem.
                            Vestibulum non ante. Class aptent taciti sociosqu ad
                            litora torquent per conubia nostra, per inceptos himenaeos.
                            Fusce sodales. Quisque eu urna vel enim commodo pellentesque.
                            Praesent eu risus hendrerit ligula tempus pretium. Curabitur
                            lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<!-- Open on mouseover -->
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Mouse Over</h4>
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
<div class="card-content collapse show draggable-container">
<div class="card-body">
<p class="card-text">
                      A single content area with multiple panels, each associated with a header in a list.
                      Toggle sections open/closed on mouseover with the <code>event</code>                      option. The default value for event is "click."
                    </p>
<div class="jqueryui-ele-container">
<div class="tabs-mouseover">
<ul>
<li><a href="jquery-ui-navigations.html#tabs-mouseover-1"><i class="ft-camera"></i> Nunc tincidunt</a></li>
<li><a href="jquery-ui-navigations.html#tabs-mouseover-2"><i class="ft-video"></i> Proin dolor</a></li>
<li><a href="jquery-ui-navigations.html#tabs-mouseover-3"><i class="ft-disc"></i> Aenean lacinia</a></li>
</ul>
<div id="tabs-mouseover-1">
<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo
                            a, risus. Curabitur nec arcu. Donec sollicitudin mi sit
                            amet mauris. Nam elementum quam ullamcorper ante. Etiam
                            aliquet massa et lorem. Mauris dapibus lacus auctor risus.
                            Aenean tempor ullamcorper leo. Vivamus sed magna quis
                            ligula eleifend adipiscing. Duis orci. Aliquam sodales
                            tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie
                            erat. Ut et mauris vel pede varius sollicitudin. Sed
                            ut dolor nec orci tincidunt interdum. Phasellus ipsum.
                            Nunc tristique tempus lectus.</p>
</div>
<div id="tabs-mouseover-2">
<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus
                            gravida ante, ut pharetra massa metus id nunc. Duis scelerisque
                            molestie turpis. Sed fringilla, massa eget luctus malesuada,
                            metus eros molestie lectus, ut tempus eros massa ut dolor.
                            Aenean aliquet fringilla sem. Suspendisse sed ligula
                            in ligula suscipit aliquam. Praesent in eros vestibulum
                            mi adipiscing adipiscing. Morbi facilisis. Curabitur
                            ornare consequat nunc. Aenean vel metus. Ut posuere viverra
                            nulla. Aliquam erat volutpat. Pellentesque convallis.
                            Maecenas feugiat, tellus pellentesque pretium posuere,
                            felis lorem euismod felis, eu ornare leo nisi vel felis.
                            Mauris consectetur tortor et purus.</p>
</div>
<div id="tabs-mouseover-3">
<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse
                            potenti. Aliquam vulputate, pede vel vehicula accumsan,
                            mi neque rutrum erat, eu congue orci lorem eget lorem.
                            Vestibulum non ante. Class aptent taciti sociosqu ad
                            litora torquent per conubia nostra, per inceptos himenaeos.
                            Fusce sodales. Quisque eu urna vel enim commodo pellentesque.
                            Praesent eu risus hendrerit ligula tempus pretium. Curabitur
                            lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Sortable -->
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Sortable</h4>
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
<div class="card-content collapse show constrain-movement-container">
<div class="card-body">
<p class="card-text">
                      A single content area with multiple panels, each associated with a header in a list.
                      Drag the tabs above to re-order them.
                    </p>
<div class="jqueryui-ele-container">
<div class="tabs-sortable">
<ul>
<li><a href="jquery-ui-navigations.html#tabs-sortable-1"><i class="ft-printer"></i> Nunc tincidunt</a></li>
<li><a href="jquery-ui-navigations.html#tabs-sortable-2"><i class="ft-monitor"></i> Proin dolor</a></li>
<li><a href="jquery-ui-navigations.html#tabs-sortable-3"><i class="ft-heart"></i> Aenean lacinia</a></li>
</ul>
<div id="tabs-sortable-1">
<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo
                            a, risus. Curabitur nec arcu. Donec sollicitudin mi sit
                            amet mauris. Nam elementum quam ullamcorper ante. Etiam
                            aliquet massa et lorem. Mauris dapibus lacus auctor risus.
                            Aenean tempor ullamcorper leo. Vivamus sed magna quis
                            ligula eleifend adipiscing. Duis orci. Aliquam sodales
                            tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie
                            erat. Ut et mauris vel pede varius sollicitudin. Sed
                            ut dolor nec orci tincidunt interdum. Phasellus ipsum.
                            Nunc tristique tempus lectus.</p>
</div>
<div id="tabs-sortable-2">
<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus
                            gravida ante, ut pharetra massa metus id nunc. Duis scelerisque
                            molestie turpis. Sed fringilla, massa eget luctus malesuada,
                            metus eros molestie lectus, ut tempus eros massa ut dolor.
                            Aenean aliquet fringilla sem. Suspendisse sed ligula
                            in ligula suscipit aliquam. Praesent in eros vestibulum
                            mi adipiscing adipiscing. Morbi facilisis. Curabitur
                            ornare consequat nunc. Aenean vel metus. Ut posuere viverra
                            nulla. Aliquam erat volutpat. Pellentesque convallis.
                            Maecenas feugiat, tellus pellentesque pretium posuere,
                            felis lorem euismod felis, eu ornare leo nisi vel felis.
                            Mauris consectetur tortor et purus.</p>
</div>
<div id="tabs-sortable-3">
<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse
                            potenti. Aliquam vulputate, pede vel vehicula accumsan,
                            mi neque rutrum erat, eu congue orci lorem eget lorem.
                            Vestibulum non ante. Class aptent taciti sociosqu ad
                            litora torquent per conubia nostra, per inceptos himenaeos.
                            Fusce sodales. Quisque eu urna vel enim commodo pellentesque.
                            Praesent eu risus hendrerit ligula tempus pretium. Curabitur
                            lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Tabs section end -->
</div>
</div>
</div>