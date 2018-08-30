<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ComponentButtonsBasicAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Buttons</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="component-buttons-basic.html#">Components</a>
</li>
<li class="breadcrumb-item active">Buttons
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="component-buttons-basic.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="component-buttons-basic.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="component-buttons-basic.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="component-buttons-basic.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- States start -->
<section id="basic-states">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">States</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p>Buttons will appear pressed when active. However, you can still
                      force the same active appearance with <code>.active</code>                      (and include the aria-pressed="true" attribute) should you
                      need to replicate the state programmatically.</p>
<div class="row">
<div class="col-sm-12 col-lg-4 col-xl-2">
<ul class="pl-0 list-unstyled">
<li class="mb-1">
<button class="btn btn-secondary btn-block" type="button">Secondary</button>
</li>
<li class="mb-1">
<div class="row">
<div class="col-sm-6 col-12">
<span class="block">Normal</span>
<span class="block">
<small>#6B6F82</small>
</span>
</div>
<div class="col-sm-6 col-12">
<div class="color-box" style="background-color: #6B6F82; border:1px solid #6B6F82;"></div>
</div>
</div>
</li>
<li class="mb-1">
<div class="row">
<div class="col-sm-6 col-12">
<span class="block">Hover</span>
<span class="block">
<small>#5a5d6d</small>
</span>
</div>
<div class="col-sm-6 col-12">
<div class="color-box" style="background-color: #5a5d6d;border-color: #545766;"></div>
</div>
</div>
</li>
<li class="mb-1">
<div class="row">
<div class="col-sm-6 col-12">
<span class="block">Active</span>
<span class="block">
<small>#545766</small>
</span>
</div>
<div class="col-sm-6 col-12">
<div class="color-box" style="background-color: #545766; border-color: #4e515f;"></div>
</div>
</div>
</li>
<li class="mb-1">
<div class="row">
<div class="col-sm-6 col-12">
<span class="block">Disabled</span>
<span class="block">
<small>#9fa1ad</small>
</span>
</div>
<div class="col-sm-6 col-12">
<div class="btn-secondary disabled btn color-box"></div>
</div>
</div>
</li>
</ul>
</div>
<div class="col-sm-12 col-lg-4 col-xl-2">
<ul class="pl-0 list-unstyled">
<li class="mb-1">
<button class="btn btn-primary btn-block" type="button">Primary</button>
</li>
<li class="mb-1">
<div class="row">
<div class="col-sm-6 col-12">
<span class="block">Normal</span>
<span class="block">
<small>#535BE2</small>
</span>
</div>
<div class="col-sm-6 col-12">
<div class="color-box" style="background-color:#535BE2;"></div>
</div>
</div>
</li>
<li class="mb-1">
<div class="row">
<div class="col-sm-6 col-12">
<span class="block">Hover</span>
<span class="block">
<small>#7D84EB</small>
</span>
</div>
<div class="col-sm-6 col-12">
<div class="color-box" style="background-color:#7D84EB;"></div>
</div>
</div>
</li>
<li class="mb-1">
<div class="row">
<div class="col-sm-6 col-12">
<span class="block">Active</span>
<span class="block">
<small>#4951DE</small>
</span>
</div>
<div class="col-sm-6 col-12">
<div class="color-box" style="background-color:#4951DE;"></div>
</div>
</div>
</li>
<li class="mb-1">
<div class="row">
<div class="col-sm-6 col-12">
<span class="block">Disabled</span>
<span class="block">
<small>#9ba0f0</small>
</span>
</div>
<div class="col-sm-6 col-12">
<div class="bg-primary btn disabled color-box"></div>
</div>
</div>
</li>
</ul>
</div>
<div class="col-sm-12 col-lg-4 col-xl-2">
<ul class="pl-0 list-unstyled">
<li class="mb-1">
<button class="btn btn-success btn-block" type="button">Success</button>
</li>
<li class="mb-1">
<div class="row">
<div class="col-sm-6 col-12">
<span class="block">Normal</span>
<span class="block">
<small>#28D094</small>
</span>
</div>
<div class="col-sm-6 col-12">
<div class="color-box" style="background-color:#28D094;"></div>
</div>
</div>
</li>
<li class="mb-1">
<div class="row">
<div class="col-sm-6 col-12">
<span class="block">Hover</span>
<span class="block">
<small>#48D7A4</small>
</span>
</div>
<div class="col-sm-6 col-12">
<div class="hover color-box" style="background-color:#48D7A4;"></div>
</div>
</div>
</li>
<li class="mb-1">
<div class="row">
<div class="col-sm-6 col-12">
<span class="block">Active</span>
<span class="block">
<small>#18BE77</small>
</span>
</div>
<div class="col-sm-6 col-12">
<div class="active color-box" style="background-color:#18BE77;"></div>
</div>
</div>
</li>
<li class="mb-1">
<div class="row">
<div class="col-sm-6 col-12">
<span class="block">Disabled</span>
<span class="block">
<small>#73e0b9</small>
</span>
</div>
<div class="col-sm-6 col-12">
<div class="bg-success disabled btn color-box"></div>
</div>
</div>
</li>
</ul>
</div>
<div class="col-sm-12 col-lg-4 col-xl-2">
<ul class="pl-0 list-unstyled">
<li class="mb-1">
<button class="btn btn-danger btn-block" type="button">Danger</button>
</li>
<li class="mb-1">
<div class="row">
<div class="col-sm-6 col-12">
<span class="block">Normal</span>
<span class="block">
<small>#FF4961</small>
</span>
</div>
<div class="col-sm-6 col-12">
<div class="bg-danger color-box"></div>
</div>
</div>
</li>
<li class="mb-1">
<div class="row">
<div class="col-sm-6 col-12">
<span class="block">Hover</span>
<span class="block">
<small>#FF6479</small>
</span>
</div>
<div class="col-sm-6 col-12">
<div class="color-box" style="background-color:#FF6479;"></div>
</div>
</div>
</li>
<li class="mb-1">
<div class="row">
<div class="col-sm-6 col-12">
<span class="block">Active</span>
<span class="block">
<small>#FF3145</small>
</span>
</div>
<div class="col-sm-6 col-12">
<div class="color-box" style="background-color:#FF3145;"></div>
</div>
</div>
</li>
<li class="mb-1">
<div class="row">
<div class="col-sm-6 col-12">
<span class="block">Disabled</span>
<span class="block">
<small>#ff8898</small>
</span>
</div>
<div class="col-sm-6 col-12">
<div class="bg-danger disabled btn color-box"></div>
</div>
</div>
</li>
</ul>
</div>
<div class="col-sm-12 col-lg-4 col-xl-2">
<ul class="pl-0 list-unstyled">
<li class="mb-1">
<button class="btn btn-info btn-block" type="button">Info</button>
</li>
<li class="mb-1">
<div class="row">
<div class="col-sm-6 col-12">
<span class="block">Normal</span>
<span class="block">
<small>#1E9FF2</small>
</span>
</div>
<div class="col-sm-6 col-12">
<div class="bg-info color-box"></div>
</div>
</div>
</li>
<li class="mb-1">
<div class="row">
<div class="col-sm-6 col-12">
<span class="block">Hover</span>
<span class="block">
<small>#40ADF4</small>
</span>
</div>
<div class="col-sm-6 col-12">
<div class="color-box" style="background-color:#40ADF4;"></div>
</div>
</div>
</li>
<li class="mb-1">
<div class="row">
<div class="col-sm-6 col-12">
<span class="block">Active</span>
<span class="block">
<small>#1283EC</small>
</span>
</div>
<div class="col-sm-6 col-12">
<div class="color-box" style="background-color:#1283EC;"></div>
</div>
</div>
</li>
<li class="mb-1">
<div class="row">
<div class="col-sm-6 col-12">
<span class="block">Disabled</span>
<span class="block">
<small>#6dc0f6</small>
</span>
</div>
<div class="col-sm-6 col-12">
<div class="bg-info disabled btn color-box"></div>
</div>
</div>
</li>
</ul>
</div>
<div class="col-sm-12 col-lg-4 col-xl-2">
<ul class="pl-0 list-unstyled">
<li class="mb-1">
<button class="btn btn-warning btn-block" type="button">Warning</button>
</li>
<li class="mb-1">
<div class="row">
<div class="col-sm-6 col-12">
<span class="block">Normal</span>
<span class="block">
<small>#FF9149</small>
</span>
</div>
<div class="col-sm-6 col-12">
<div class="bg-warning color-box"></div>
</div>
</div>
</li>
<li class="mb-1">
<div class="row">
<div class="col-sm-6 col-12">
<span class="block">Hover</span>
<span class="block">
<small>#FFA264</small>
</span>
</div>
<div class="col-sm-6 col-12">
<div class="color-box" style="background-color:#FFA264;"></div>
</div>
</div>
</li>
<li class="mb-1">
<div class="row">
<div class="col-sm-6 col-12">
<span class="block">Active</span>
<span class="block">
<small>#FF7431</small>
</span>
</div>
<div class="col-sm-6 col-12">
<div class="color-box" style="background-color:#FF7431;"></div>
</div>
</div>
</li>
<li class="mb-1">
<div class="row">
<div class="col-sm-6 col-12">
<span class="block">Disabled</span>
<span class="block">
<small>#ffb788</small>
</span>
</div>
<div class="col-sm-6 col-12">
<div class="bg-warning disabled btn color-box"></div>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- States end -->
<!-- Basic Buttons start -->
<section id="basic-buttons">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Buttons </h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<h5>Buttons </h5>
<p>Bootstrap includes six predefined button styles, each serving
                          its own semantic purpose.</p>
<div class="form-group">
<!-- basic buttons -->
<button class="btn btn-secondary btn-min-width mr-1 mb-1" type="button">Secondary</button>
<button class="btn btn-primary btn-min-width mr-1 mb-1" type="button">Primary</button>
<button class="btn btn-success btn-min-width mr-1 mb-1" type="button">Success</button>
<button class="btn btn-info btn-min-width mr-1 mb-1" type="button">Info</button>
<button class="btn btn-warning btn-min-width mr-1 mb-1" type="button">Warning</button>
<button class="btn btn-danger btn-min-width mr-1 mb-1" type="button">Danger</button>
<button class="btn btn-light btn-min-width mr-1 mb-1" type="button">Light</button>
<button class="btn btn-dark btn-min-width mr-1 mb-1" type="button">Dark</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Basic Buttons end -->
<!-- Buttons Glow start -->
<section id="button-glow">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Buttons Glow</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<p>Use <code>.btn-glow</code> class with any colored button
                          to add button glow.</p>
<div class="form-group">
<!-- Buttons Glow -->
<button class="btn btn-primary btn-min-width btn-glow mr-1 mb-1" type="button">Primary</button>
<button class="btn btn-success btn-min-width btn-glow mr-1 mb-1" type="button">Success</button>
<button class="btn btn-info btn-min-width btn-glow mr-1 mb-1" type="button">Info</button>
<button class="btn btn-warning btn-min-width btn-glow mr-1 mb-1" type="button">Warning</button>
<button class="btn btn-danger btn-min-width btn-glow mr-1 mb-1" type="button">Danger</button>
<button class="btn btn-purple btn-min-width btn-glow mr-1 mb-1" type="button">Purple</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Buttons Glow end -->
<!-- Buttons Shadow start -->
<section id="button-shadow">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Buttons Shadow</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<p>Use <code>.box-shadow-*</code> class with button to add button
                          shadow.
                        </p>
<div class="form-group">
<!-- Buttons Shadow -->
<button class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1" type="button">Primary</button>
<button class="btn btn-success btn-min-width box-shadow-2 mr-1 mb-1" type="button">Success</button>
<button class="btn btn-info btn-min-width box-shadow-3 mr-1 mb-1" type="button">Info</button>
<button class="btn btn-warning btn-min-width box-shadow-4 mr-1 mb-1" type="button">Warning</button>
<button class="btn btn-danger btn-min-width box-shadow-5 mr-1 mb-1" type="button">Danger</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Buttons Shadow end -->
<!-- Square Buttons start -->
<section id="square-buttons">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Square Buttons </h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<p>Use <code>.square</code> class for square buttons.</p>
<div class="form-group">
<!-- basic buttons -->
<button class="btn btn-secondary square btn-min-width mr-1 mb-1" type="button">Secondary</button>
<button class="btn btn-primary square btn-min-width mr-1 mb-1" type="button">Primary</button>
<button class="btn btn-success square btn-min-width mr-1 mb-1" type="button">Success</button>
<button class="btn btn-info square btn-min-width mr-1 mb-1" type="button">Info</button>
<button class="btn btn-warning square btn-min-width mr-1 mb-1" type="button">Warning</button>
<button class="btn btn-danger square btn-min-width mr-1 mb-1" type="button">Danger</button>
<button class="btn btn-light square btn-min-width mr-1 mb-1" type="button">Light</button>
<button class="btn btn-dark square btn-min-width mr-1 mb-1" type="button">Dark</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Square Buttons end -->
<!-- Round Buttons start -->
<section id="round-buttons">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Round Buttons </h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<p>Use <code>.round</code> class for round buttons.</p>
<div class="form-group">
<!-- basic buttons -->
<button class="btn btn-secondary round btn-min-width mr-1 mb-1" type="button">Secondary</button>
<button class="btn btn-primary round btn-min-width mr-1 mb-1" type="button">Primary</button>
<button class="btn btn-success round btn-min-width mr-1 mb-1" type="button">Success</button>
<button class="btn btn-info round btn-min-width mr-1 mb-1" type="button">Info</button>
<button class="btn btn-warning round btn-min-width mr-1 mb-1" type="button">Warning</button>
<button class="btn btn-danger round btn-min-width mr-1 mb-1" type="button">Danger</button>
<button class="btn btn-light round btn-min-width mr-1 mb-1" type="button">Light</button>
<button class="btn btn-dark round btn-min-width mr-1 mb-1" type="button">Dark</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Round Buttons end -->
<!-- Single button dropdowns start -->
<section id="single-button-dropdowns">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Single button dropdowns</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<h5>Button dropdowns</h5>
<p>Turn a button into a dropdown toggle with some basic markup
                          changes.
                        </p>
<div class="form-group">
<!-- Single Button Dropdown -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-secondary btn-min-width dropdown-toggle" data-toggle="dropdown" type="button">Secondary</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary btn-min-width dropdown-toggle" data-toggle="dropdown" type="button">Primary</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-success btn-min-width dropdown-toggle" data-toggle="dropdown" type="button">Success</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info btn-min-width dropdown-toggle" data-toggle="dropdown" type="button">Info</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-warning btn-min-width dropdown-toggle" data-toggle="dropdown" type="button">Warning</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger btn-min-width dropdown-toggle" data-toggle="dropdown" type="button">Danger</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-light btn-min-width dropdown-toggle" data-toggle="dropdown" type="button">Light</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-dark btn-min-width dropdown-toggle" data-toggle="dropdown" type="button">Dark</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Single button dropdowns end -->
<!-- Split Buttons start -->
<section id="split-buttons">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Split Buttons</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<h5>Split button dropdowns</h5>
<p>Similarly, create split button dropdowns with the same markup
                          changes, only with a separate button.</p>
<div class="form-group">
<!-- Split Button Dropdown -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-secondary" type="button">Secondary</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" type="button">
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-primary" type="button">Primary</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-success" type="button">Success</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-success dropdown-toggle" data-toggle="dropdown" type="button">
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-info" type="button">Info</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button">
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-warning" type="button">Warning</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" type="button">
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-danger" type="button">Danger</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" type="button">
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-light" type="button">Light</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-light dropdown-toggle" data-toggle="dropdown" type="button">
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-dark" type="button">Dark</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" type="button">
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Split Buttons end -->
<!-- Basic Button group start -->
<section id="basic-button-group">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Button group</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<p>Group a series of buttons together on a single line with
                          the button group. Wrap a series of buttons with <code>.btn</code>                          in <code>.btn-group</code>.</p>
<div class="form-group">
<!-- button group -->
<div aria-label="Basic example" class="btn-group" role="group">
<button class="btn btn-secondary" type="button">Secondary</button>
<button class="btn btn-primary" type="button">Primary</button>
<button class="btn btn-success" type="button">Success</button>
<button class="btn btn-info" type="button">Info</button>
<button class="btn btn-warning" type="button">Warning</button>
<button class="btn btn-danger" type="button">Danger</button>
<button class="btn btn-light" type="button">Light</button>
<button class="btn btn-dark" type="button">Dark</button>
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
<!-- Basic Button group end -->
<!-- Basic Button Icon start -->
<section id="basic-button-icons">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Buttons with Icon </h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<p>Bootstrap includes six predefined button styles, each serving
                          its own semantic purpose.</p>
<div class="form-group">
<!-- Buttons with Icon -->
<button class="btn btn-secondary btn-min-width mr-1 mb-1" type="button"><i class="la la-star-o"></i> Secondary</button>
<button class="btn btn-primary btn-min-width mr-1 mb-1" type="button"><i class="la la-user"></i> Primary</button>
<button class="btn btn-success btn-min-width mr-1 mb-1" type="button"><i class="la la-check"></i> Success</button>
<button class="btn btn-info btn-min-width mr-1 mb-1" type="button"><i class="la la-info"></i> Info</button>
<button class="btn btn-warning btn-min-width mr-1 mb-1" type="button">Warning <i class="la la-camera"></i></button>
<button class="btn btn-danger btn-min-width mr-1 mb-1" type="button">Danger <i class="la la-eye"></i></button>
<button class="btn btn-light btn-min-width mr-1 mb-1" type="button">Light <i class="la la-plug"></i></button>
<button class="btn btn-dark btn-min-width mr-1 mb-1" type="button">Dark <i class="la la-heart"></i></button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Basic Button Icon end -->
<!-- Button dropdowns with icons start -->
<section id="button-dropdowns-with-icons">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Button dropdowns with icons</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<div class="form-group">
<!-- Button dropdowns with icons -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary btn-min-width dropdown-toggle" data-toggle="dropdown" type="button"><i class="la la-user"></i> Secondary</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary btn-min-width dropdown-toggle" data-toggle="dropdown" type="button"><i class="la la-star-o"></i> Primary</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-success btn-min-width dropdown-toggle" data-toggle="dropdown" type="button"><i class="la la-check"></i> Success</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info btn-min-width dropdown-toggle" data-toggle="dropdown" type="button"><i class="la la-info"></i> Info</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-warning btn-min-width dropdown-toggle" data-toggle="dropdown" type="button"><i class="la la-camera"></i> Warning</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger btn-min-width dropdown-toggle" data-toggle="dropdown" type="button"><i class="la la-eye"></i> Danger</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-light btn-min-width dropdown-toggle" data-toggle="dropdown" type="button"><i class="la la-plug"></i> Light</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-dark btn-min-width dropdown-toggle" data-toggle="dropdown" type="button"><i class="la la-heart"></i> Dark</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Button dropdowns with icons end -->
<!-- Split button dropdowns with icon start -->
<section id="split-button-dropdown-icons">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Split button dropdowns with icon</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<div class="form-group">
<!-- Split button dropdowns with icon -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-secondary" type="button"><i class="la la-user"></i> Secondary</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-primary" type="button"><i class="la la-star-o"></i> Primary</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-success" type="button"><i class="la la-check"></i> Success</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-success dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-info" type="button"><i class="la la-info"></i> Info</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-warning" type="button"><i class="la la-camera"></i> Warning</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-danger" type="button"><i class="la la-eye"></i> Danger</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-light" type="button"><i class="la la-plug"></i> Light</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-light dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-dark" type="button"><i class="la la-heart"></i> Dark</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Split button dropdowns with icon end -->
<!-- Button group with icon start -->
<section id="button-group-with-icons">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Button group with icon</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<p>Button group with icons and text.</p>
<div class="form-group">
<div aria-label="Basic example" class="btn-group" role="group">
<!-- Button group with icons -->
<button class="btn btn-secondary" type="button"><i class="la la-star-o"></i> Secondary</button>
<button class="btn btn-primary" type="button"><i class="la la-user"></i> Primary</button>
<button class="btn btn-success" type="button"><i class="la la-check"></i> Success</button>
<button class="btn btn-info" type="button"><i class="la la-info"></i> Info</button>
<button class="btn btn-warning" type="button"><i class="la la-camera"></i> Warning</button>
<button class="btn btn-danger" type="button"><i class="la la-eye"></i> Danger</button>
<button class="btn btn-light" type="button"><i class="la la-plug"></i> Light</button>
<button class="btn btn-dark" type="button"><i class="la la-heart"></i> Dark</button>
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
<!-- Button group with icon end -->
<!-- Icon Buttons start -->
<section id="icons-buttons">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Icon Buttons</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-lg-6 col-md-12">
<p>Simple Icon Button</p>
<div class="form-group">
<!-- Simple Icon Button -->
<button class="btn btn-icon btn-secondary mr-1" type="button"><i class="la la-star-o"></i></button>
<button class="btn btn-icon btn-primary mr-1" type="button"><i class="la la-user"></i></button>
<button class="btn btn-icon btn-success mr-1" type="button"><i class="la la-check"></i></button>
<button class="btn btn-icon btn-info mr-1" type="button"><i class="la la-info"></i></button>
<button class="btn btn-icon btn-warning mr-1" type="button"><i class="la la-camera"></i></button>
<button class="btn btn-icon btn-danger mr-1" type="button"><i class="la la-eye"></i></button>
<button class="btn btn-icon btn-light mr-1" type="button"><i class="la la-plug"></i></button>
<button class="btn btn-icon btn-dark mr-1" type="button"><i class="la la-heart"></i></button>
</div>
</div>
<div class="col-lg-6 col-md-12">
<p>Use <code>.btn-icon.btn-pure</code> classes for only icon
                          buttons
                        </p>
<div class="form-group">
<!-- Icon Button -->
<button class="btn btn-icon btn-pure secondary mr-1" type="button"><i class="la la-desktop"></i></button>
<button class="btn btn-icon btn-pure primary mr-1" type="button"><i class="la la-star-o"></i></button>
<button class="btn btn-icon btn-pure success mr-1" type="button"><i class="la la-check-circle"></i></button>
<button class="btn btn-icon btn-pure info mr-1" type="button"><i class="la la-moon-o"></i></button>
<button class="btn btn-icon btn-pure warning mr-1" type="button"><i class="la la-heart-o"></i></button>
<button class="btn btn-icon btn-pure danger mr-1" type="button"><i class="la la-archive"></i></button>
<button class="btn btn-icon btn-pure light mr-1" type="button"><i class="la la-plug"></i></button>
<button class="btn btn-icon btn-pure dark mr-1" type="button"><i class="la la-heart"></i></button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Icon Buttons end -->
<!-- Icon Buttons dropdowns start -->
<section id="icons-buttons-dropdowns">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Icon Button dropdowns</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<div class="form-group">
<!-- Icon Button dropdowns -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-icon btn-secondary dropdown-toggle" data-toggle="dropdown" type="button"><i class="la la-user"></i></button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-icon btn-primary dropdown-toggle" data-toggle="dropdown" type="button"><i class="la la-star-o"></i></button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown" type="button"><i class="la la-check"></i></button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info btn-icon dropdown-toggle" data-toggle="dropdown" type="button"><i class="la la-info"></i></button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-icon btn-warning dropdown-toggle" data-toggle="dropdown" type="button"><i class="la la-camera"></i></button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger btn-icon dropdown-toggle" data-toggle="dropdown" type="button"><i class="la la-eye"></i></button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-light btn-icon dropdown-toggle" data-toggle="dropdown" type="button"><i class="la la-plug"></i></button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-dark btn-icon dropdown-toggle" data-toggle="dropdown" type="button"><i class="la la-heart"></i></button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Icon Buttons dropdowns end -->
<!-- Split Icon Buttons dropdowns start -->
<section id="split-icons-buttons-dropdowns">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Split icon button dropdowns</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<div class="form-group">
<!-- Split icon button dropdowns -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-secondary" type="button"><i class="la la-user"></i></button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-primary" type="button"><i class="la la-star-o"></i></button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-success" type="button"><i class="la la-check"></i></button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-success dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-info" type="button"><i class="la la-info"></i></button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-warning" type="button"><i class="la la-camera"></i></button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-danger" type="button"><i class="la la-eye"></i></button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-light" type="button"><i class="la la-plug"></i></button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-light dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-dark" type="button"><i class="la la-heart"></i></button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Split Icon Buttons dropdowns end -->
<!-- Icon Buttons group start -->
<section id="icons-buttons-group">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Icon Button group</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-lg-6 col-md-12">
<p>Icon Button group without text.</p>
<div class="form-group">
<!-- Icon Button group -->
<div aria-label="Basic example" class="btn-group" role="group">
<button class="btn btn-icon btn-secondary" type="button"><i class="la la-star-o"></i></button>
<button class="btn btn-icon btn-primary" type="button"><i class="la la-user"></i></button>
<button class="btn btn-icon btn-success" type="button"><i class="la la-check"></i></button>
<button class="btn btn-icon btn-info" type="button"><i class="la la-info"></i></button>
<button class="btn btn-icon btn-warning" type="button"><i class="la la-camera"></i></button>
<button class="btn btn-icon btn-danger" type="button"><i class="la la-eye"></i></button>
<button class="btn btn-icon btn-light" type="button"><i class="la la-plug"></i></button>
<button class="btn btn-icon btn-dark" type="button"><i class="la la-heart"></i></button>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<p>Combine sets of button groups into
                          <strong>Button toolbar</strong> for more complex components.</p>
<div class="form-group">
<!-- Icon Button toolbar group -->
<div aria-label="Toolbar with button groups" class="btn-toolbar" role="toolbar">
<div aria-label="First Group" class="btn-group" role="group">
<button class="btn btn-icon btn-light" type="button"><i class="la la-umbrella"></i></button>
<button class="btn btn-icon btn-secondary" type="button"><i class="la la-moon-o"></i></button>
<button class="btn btn-icon btn-primary" type="button"><i class="la la-cloud-download"></i></button>
</div>
<div aria-label="Second Group" class="btn-group mx-2" role="group">
<button class="btn btn-icon btn-success" type="button"><i class="la la-fighter-jet"></i></button>
<button class="btn btn-icon btn-info" type="button"><i class="la la-location-arrow"></i></button>
<button class="btn btn-icon btn-warning" type="button"><i class="la la-gavel"></i></button>
</div>
<div aria-label="Third Group" class="btn-group" role="group">
<button class="btn btn-icon btn-danger" type="button"><i class="la la-tint"></i></button>
</div>
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
<!-- Icon Buttons group end -->
<!-- Sizes start -->
<section id="sizes-2">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Sizes</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-lg-6 col-md-12">
<p>Add <code>.btn-lg</code> or <code>.btn-sm</code> for Fancy
                          larger or smaller buttons size.</p>
<!-- simple sizes -->
<div class="form-group">
<button class="btn mr-1 mb-1 btn-primary btn-lg" type="button">Large button</button>
<button class="btn mr-1 mb-1 btn-secondary btn-lg" type="button">Large button</button>
</div>
<div class="form-group">
<button class="btn mr-1 mb-1 btn-primary" type="button">Secondary button</button>
<button class="btn mr-1 mb-1 btn-secondary" type="button">Secondary button</button>
</div>
<div class="form-group">
<button class="btn mr-1 mb-1 btn-primary btn-sm" type="button">Small button</button>
<button class="btn mr-1 mb-1 btn-secondary btn-sm" type="button">Small button</button>
</div>
</div>
<div class="col-lg-6 col-md-12">
<p>Buttons with Icons in different sizes</p>
<!-- sizes with icons -->
<div class="form-group">
<button class="btn mr-1 mb-1 btn-success btn-lg" type="button"><i class="la la-star-o"></i> Large button</button>
<button class="btn mr-1 mb-1 btn-danger btn-lg" type="button"><i class="la la-heart"></i> Large button</button>
</div>
<div class="form-group">
<button class="btn mr-1 mb-1 btn-success" type="button"><i class="la la-check-circle"></i> Secondary button</button>
<button class="btn mr-1 mb-1 btn-danger" type="button"><i class="la la-archive"></i> Secondary button</button>
</div>
<div class="form-group">
<button class="btn mr-1 mb-1 btn-success btn-sm" type="button"><i class="la la-desktop"></i> Small button</button>
<button class="btn mr-1 mb-1 btn-danger btn-sm" type="button"><i class="la la-moon-o"></i> Small button</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Sizes end -->
<!-- Button Dropdowns Sizes start -->
<section id="button-dropdown-sizes">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Button Dropdowns Sizes</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-lg-6 col-md-12">
<p>Button dropdowns work with buttons of all sizes.</p>
<div class="form-group">
<!-- Button Dropdowns Sizes -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle btn-lg" data-toggle="dropdown" type="button">Primary</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle btn-lg" data-toggle="dropdown" type="button">Secondary</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
</div>
<div class="form-group">
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">Primary</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" type="button">Secondary</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
</div>
<div class="form-group">
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" type="button">Primary</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" type="button">Secondary</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
</div>
</div>
<div class="col-lg-6 col-md-12">
<p>Buttons with Icons in different sizes</p>
<div class="form-group">
<!-- Button Dropdowns Sizes with Icons -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-success dropdown-toggle btn-lg" data-toggle="dropdown" type="button"><i class="la la-toggle-on"></i> Success</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle btn-lg" data-toggle="dropdown" type="button"><i class="la la-smile-o"></i> Danger</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
</div>
<div class="form-group">
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-success dropdown-toggle" data-toggle="dropdown" type="button"><i class="la la-toggle-on"></i> Success</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" type="button"><i class="la la-smile-o"></i> Danger</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
</div>
<div class="form-group">
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" type="button"><i class="la la-toggle-on"></i> Success</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle btn-sm" data-toggle="dropdown" type="button"><i class="la la-smile-o"></i> Danger</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Button Dropdowns Sizes end -->
<!-- Button Group Sizes start -->
<section id="button-group-sizes">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Button Group Sizes</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<p>Instead of applying button sizing classes to every button
                          in a group, just add <code>.btn-group-*</code> to each
                          <code>.btn-group</code>.</p>
<div class="form-group">
<!-- Button Group Sizes -->
<div aria-label="Basic example" class="btn-group btn-group-lg" role="group">
<button class="btn btn-primary" type="button">Primary</button>
<button class="btn btn-light" type="button">Secondary</button>
<button class="btn btn-info" type="button">Info</button>
<button class="btn btn-warning" type="button">Warning</button>
<button class="btn btn-secondary" type="button">Secondary</button>
</div>
</div>
<div class="form-group">
<div aria-label="Basic example" class="btn-group" role="group">
<button class="btn btn-primary" type="button">Primary</button>
<button class="btn btn-light" type="button">Secondary</button>
<button class="btn btn-info" type="button">Info</button>
<button class="btn btn-warning" type="button">Warning</button>
<button class="btn btn-secondary" type="button">Secondary</button>
</div>
</div>
<div class="form-group">
<div aria-label="Basic example" class="btn-group btn-group-sm" role="group">
<button class="btn btn-primary" type="button">Primary</button>
<button class="btn btn-light" type="button">Secondary</button>
<button class="btn btn-info" type="button">Info</button>
<button class="btn btn-warning" type="button">Warning</button>
<button class="btn btn-secondary" type="button">Secondary</button>
</div>
</div>
</div>
<div class="col-12">
<p>Button Group with Icons in different sizes</p>
<div class="form-group">
<!-- Button Group with Icons in different sizes -->
<div aria-label="Basic example" class="btn-group btn-group-lg" role="group">
<button class="btn btn-success" type="button"><i class="la la-search"></i> Success</button>
<button class="btn btn-danger" type="button"><i class="la la-smile-o"></i> Danger</button>
<button class="btn btn-primary" type="button"><i class="la la-user"></i> Primary</button>
<button class="btn btn-info" type="button"><i class="la la-info"></i> Info</button>
<button class="btn btn-warning" type="button"><i class="la la-link"></i> Warning</button>
</div>
</div>
<div class="form-group">
<div aria-label="Basic example" class="btn-group" role="group">
<button class="btn btn-success" type="button"><i class="la la-search"></i> Success</button>
<button class="btn btn-danger" type="button"><i class="la la-smile-o"></i> Danger</button>
<button class="btn btn-primary" type="button"><i class="la la-user"></i> Primary</button>
<button class="btn btn-info" type="button"><i class="la la-info"></i> Info</button>
<button class="btn btn-warning" type="button"><i class="la la-link"></i> Warning</button>
</div>
</div>
<div class="form-group">
<div aria-label="Basic example" class="btn-group btn-group-sm" role="group">
<button class="btn btn-success" type="button"><i class="la la-search"></i> Success</button>
<button class="btn btn-danger" type="button"><i class="la la-smile-o"></i> Danger</button>
<button class="btn btn-primary" type="button"><i class="la la-user"></i> Primary</button>
<button class="btn btn-info" type="button"><i class="la la-info"></i> Info</button>
<button class="btn btn-warning" type="button"><i class="la la-link"></i> Warning</button>
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
<!-- Button Group Sizes end -->
<!-- Block level buttons start -->
<section id="block-level-buttons">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Block level buttons</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<!-- Block level buttons -->
<p>Create block level buttons—those that span the full width of
                      a parent—by adding <code>.btn-block</code>.</p>
<div class="row">
<div class="col-lg-6 col-md-12">
<div class="form-group">
<button class="btn mb-1 btn-primary btn-lg btn-block" type="button">Block level button</button>
<button class="btn mb-1 btn-secondary btn-lg btn-block" type="button">Block level button</button>
</div>
</div>
<div class="col-lg-6 col-md-12">
<!-- Block level buttons with icon -->
<div class="form-group">
<button class="btn mb-1 btn-success btn-icon btn-lg btn-block" type="button"><i class="la la-check-circle"></i> Block level button</button>
<button class="btn mb-1 btn-danger btn-icon btn-lg btn-block" type="button">Block level button</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Block level buttons end -->
<!-- Button tags start -->
<section id="button-tags">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Button tags</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<!-- anchor, button tag, input button, input submit Tags -->
<p>The .btn classes are designed to be used with the <code>&lt;button&gt;</code>                      element. However, you can also use these classes on <code>&lt;a&gt;</code>                      or <code>&lt;input&gt;</code> elements.</p>
<div class="form-group">
<a class="btn btn-primary btn-min-width mr-1 mb-1" href="component-buttons-basic.html#" role="button">Link</a>
<button class="btn btn-primary btn-min-width mr-1 mb-1" type="submit">Button</button>
<input class="btn btn-primary btn-min-width mr-1 mb-1" type="button" value="Input"/>
<input class="btn btn-primary btn-min-width mr-1 mb-1" type="submit" value="Submit"/>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Button tags end -->
<!-- Outline Buttons start -->
<section id="outline-button">
<div class="row">
<div class="col-md-12 mb-1 mt-2">
<h3 class="text-uppercase">Outline Buttons </h3>
<p>Replace the default modifier classes with the <code>.btn-outline </code>ones
                to remove all background images and colors on any button.</p>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Outline buttons</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<p>Use a class <code>.btn-outline-*</code> to quickly create
                          a outline button.</p>
<div class="form-group">
<!-- Outline buttons -->
<button class="btn btn-outline-secondary btn-min-width mr-1 mb-1" type="button">Secondary</button>
<button class="btn btn-outline-primary btn-min-width mr-1 mb-1" type="button">Primary</button>
<button class="btn btn-outline-success btn-min-width mr-1 mb-1" type="button">Success</button>
<button class="btn btn-outline-info btn-min-width mr-1 mb-1" type="button">Info</button>
<button class="btn btn-outline-warning btn-min-width mr-1 mb-1" type="button">Warning</button>
<button class="btn btn-outline-danger btn-min-width mr-1 mb-1" type="button">Danger</button>
<button class="btn btn-outline-light btn-min-width mr-1 mb-1" type="button">Light</button>
<button class="btn btn-outline-dark btn-min-width mr-1 mb-1" type="button">Dark</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Outline Buttons end -->
<!-- Outline Buttons Glow start -->
<section id="outline-button-glow">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Outline Buttons Glow</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<p>Use <code>.btn-glow</code> class with any colored button
                          to add button glow.</p>
<div class="form-group">
<!-- Outline Buttons Glow -->
<button class="btn btn-outline-primary btn-min-width btn-glow mr-1 mb-1" type="button">Primary</button>
<button class="btn btn-outline-success btn-min-width btn-glow mr-1 mb-1" type="button">Success</button>
<button class="btn btn-outline-info btn-min-width btn-glow mr-1 mb-1" type="button">Info</button>
<button class="btn btn-outline-warning btn-min-width btn-glow mr-1 mb-1" type="button">Warning</button>
<button class="btn btn-outline-danger btn-min-width btn-glow mr-1 mb-1" type="button">Danger</button>
<button class="btn btn-outline-purple btn-min-width btn-glow mr-1 mb-1" type="button">Purple</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Outline Buttons Glow end -->
<!-- Outline Buttons Shadow start -->
<section id="outline-button-shadow">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Outline Buttons Shadow</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<p>Use <code>.box-shadow-*</code> class with button to add button
                          shadow.
                        </p>
<div class="form-group">
<!-- Outline Buttons Shadow -->
<button class="btn btn-outline-primary btn-min-width box-shadow-1 mr-1 mb-1" type="button">Primary</button>
<button class="btn btn-outline-success btn-min-width box-shadow-2 mr-1 mb-1" type="button">Success</button>
<button class="btn btn-outline-info btn-min-width box-shadow-3 mr-1 mb-1" type="button">Info</button>
<button class="btn btn-outline-warning btn-min-width box-shadow-4 mr-1 mb-1" type="button">Warning</button>
<button class="btn btn-outline-danger btn-min-width box-shadow-5 mr-1 mb-1" type="button">Danger</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Outline Buttons Shadow end -->
<!-- Square Buttons start -->
<section id="square-outline-button">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Square buttons</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<p>Use a class <code>.square</code> with outline button class
                          to create square outline button.</p>
<div class="form-group">
<!-- Square buttons -->
<button class="btn btn-outline-secondary square btn-min-width mr-1 mb-1" type="button">Secondary</button>
<button class="btn btn-outline-primary square btn-min-width mr-1 mb-1" type="button">Primary</button>
<button class="btn btn-outline-success square btn-min-width mr-1 mb-1" type="button">Success</button>
<button class="btn btn-outline-info square btn-min-width mr-1 mb-1" type="button">Info</button>
<button class="btn btn-outline-warning square btn-min-width mr-1 mb-1" type="button">Warning</button>
<button class="btn btn-outline-danger square btn-min-width mr-1 mb-1" type="button">Danger</button>
<button class="btn btn-outline-light square btn-min-width mr-1 mb-1" type="button">Light</button>
<button class="btn btn-outline-dark square btn-min-width mr-1 mb-1" type="button">Dark</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Square Buttons end -->
<!-- Round Buttons start -->
<section id="round-outline-button">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Round buttons</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<p>Use a class <code>.round</code> with outline button class
                          to create round outline button.</p>
<div class="form-group">
<!-- Round buttons -->
<button class="btn btn-outline-secondary round btn-min-width mr-1 mb-1" type="button">Secondary</button>
<button class="btn btn-outline-primary round btn-min-width mr-1 mb-1" type="button">Primary</button>
<button class="btn btn-outline-success round btn-min-width mr-1 mb-1" type="button">Success</button>
<button class="btn btn-outline-info round btn-min-width mr-1 mb-1" type="button">Info</button>
<button class="btn btn-outline-warning round btn-min-width mr-1 mb-1" type="button">Warning</button>
<button class="btn btn-outline-danger round btn-min-width mr-1 mb-1" type="button">Danger</button>
<button class="btn btn-outline-light round btn-min-width mr-1 mb-1" type="button">Light</button>
<button class="btn btn-outline-dark round btn-min-width mr-1 mb-1" type="button">Dark</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Round Buttons end -->
<!-- Single outline button dropdowns start -->
<section id="single-outline-button-dropdowns">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Single outline button dropdowns</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<div class="form-group">
<!-- Single outline button dropdowns -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-secondary btn-min-width dropdown-toggle" data-toggle="dropdown" type="button">Secondary</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-primary btn-min-width dropdown-toggle" data-toggle="dropdown" type="button">Primary</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-success btn-min-width dropdown-toggle" data-toggle="dropdown" type="button">Success</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-info btn-min-width dropdown-toggle" data-toggle="dropdown" type="button">Info</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-warning btn-min-width dropdown-toggle" data-toggle="dropdown" type="button">Warning</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-danger btn-min-width dropdown-toggle" data-toggle="dropdown" type="button">Danger</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-light btn-min-width dropdown-toggle" data-toggle="dropdown" type="button">Light</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-dark btn-min-width dropdown-toggle" data-toggle="dropdown" type="button">Dark</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Single outline button dropdowns end -->
<!-- Split Outline button dropdowns with background start -->
<section id="split-outline-button-dropdown">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Split Outline button dropdowns with dropdown background</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<div class="form-group">
<!-- Split Outline button dropdowns with dropdown background -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-outline-secondary" type="button">Secondary</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-outline-primary" type="button">Primary</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-outline-success" type="button">Success</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-success dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-outline-info" type="button">Info</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-outline-warning" type="button">Warning</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-outline-danger" type="button">Danger</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-outline-light" type="button">Light</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-light dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-outline-dark" type="button">Dark</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Split Outline button dropdowns with dropdown background end -->
<!-- Split Outline button dropdowns start -->
<section id="split-outline-button-dropdowns">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Split Outline button dropdowns</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<div class="form-group">
<!-- Split Outline button dropdowns -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-outline-secondary" type="button">Secondary</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-outline-primary" type="button">Primary</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-outline-success" type="button">Success</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-outline-info" type="button">Info</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-outline-warning" type="button">Warning</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-outline-danger" type="button">Danger</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-outline-light" type="button">Light</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button class="btn btn-outline-dark" type="button">Dark</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Split Outline button dropdowns end -->
<!-- Outline Button group start -->
<section id="outline-button-group">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Outline Button group</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<p>Outline button group</p>
<div class="form-group">
<!-- Outline Button group -->
<div aria-label="Basic example" class="btn-group" role="group">
<button class="btn btn-outline-secondary" type="button">Secondary</button>
<button class="btn btn-outline-primary" type="button">Primary</button>
<button class="btn btn-outline-success" type="button">Success</button>
<button class="btn btn-outline-info" type="button">Info</button>
<button class="btn btn-outline-warning" type="button">Warning</button>
<button class="btn btn-outline-danger" type="button">Danger</button>
<button class="btn btn-outline-light" type="button">Light</button>
<button class="btn btn-outline-dark" type="button">Dark</button>
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
<!-- Outline Button group end -->
<!-- Outline Button with Icons start -->
<section id="outline-button-with-icons">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Outline buttons with Icons</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<p>Outline Buttons with icon.</p>
<div class="form-group">
<!-- Outline buttons with Icons -->
<button class="mr-1 mb-1 btn btn-outline-secondary btn-min-width" type="button"><i class="la la-star-o"></i> Secondary</button>
<button class="mr-1 mb-1 btn btn-outline-primary btn-min-width" type="button"><i class="la la-user"></i> Primary</button>
<button class="mr-1 mb-1 btn btn-outline-success btn-min-width" type="button"><i class="la la-search"></i> Success</button>
<button class="mr-1 mb-1 btn btn-outline-info btn-min-width" type="button"><i class="la la-camera"></i> Info</button>
<button class="mr-1 mb-1 btn btn-outline-warning btn-min-width" type="button"><i class="la la-camera"></i> Warning</button>
<button class="mr-1 mb-1 btn btn-outline-danger btn-min-width" type="button"><i class="la la-smile-o"></i> Danger</button>
<button class="mr-1 mb-1 btn btn-outline-light btn-min-width" type="button"><i class="la la-plug"></i> Light</button>
<button class="mr-1 mb-1 btn btn-outline-dark btn-min-width" type="button"><i class="la la-heart"></i> Dark</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Outline Button with Icons end -->
<!-- Split Outline Button dropdown with Icons start -->
<section id="split-outline-button-dropdown-with-icons">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Split Outline button dropdowns with icon &amp; dropdown outline</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<div class="form-group">
<!-- Split Outline button dropdowns with icon & dropdown outline -->
<div class="btn-group">
<button class="btn btn-outline-secondary" type="button"><i class="la la-user"></i> Secondary</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group">
<button class="btn btn-outline-primary" type="button"><i class="la la-star-o"></i> Primary</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group">
<button class="btn btn-outline-success" type="button"><i class="la la-search"></i> Success</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group">
<button class="btn btn-outline-info" type="button"><i class="la la-camera"></i> Info</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group">
<button class="btn btn-outline-warning" type="button"><i class="la la-camera"></i> Warning</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group">
<button class="btn btn-outline-danger" type="button"><i class="la la-smile-o"></i> Danger</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group">
<button class="btn btn-outline-light" type="button"><i class="la la-plug"></i> Light</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group">
<button class="btn btn-outline-dark" type="button"><i class="la la-heart"></i> Dark</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" type="button">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Split Outline Button dropdown with Icons end -->
<!-- Outline Button group with Icons start -->
<section id="outline-button-group-with-icons">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Outline Button group with icon</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<p>Outline button group with icons and text.</p>
<div class="form-group">
<!-- Outline button group with icons and text. -->
<div aria-label="Basic example" class="btn-group" role="group">
<button class="btn btn-outline-secondary" type="button"><i class="la la-star-o"></i> Secondary</button>
<button class="btn btn-outline-primary" type="button"><i class="la la-user"></i> Primary</button>
<button class="btn btn-outline-success" type="button"><i class="la la-search"></i> Success</button>
<button class="btn btn-outline-info" type="button"><i class="la la-camera"></i> Info</button>
<button class="btn btn-outline-warning" type="button"><i class="la la-camera"></i> Warning</button>
<button class="btn btn-outline-danger" type="button"><i class="la la-smile-o"></i> Danger</button>
<button class="btn btn-outline-light" type="button"><i class="la la-plug"></i> Light</button>
<button class="btn btn-outline-dark" type="button"><i class="la la-heart"></i> Dark</button>
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
<!-- Outline Button group with Icons end -->
<!-- Outline Icon Buttons start -->
<section id="outline-icons-buttons">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Outline Icon Buttons</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<p>Outline Icon Buttons.</p>
<div class="form-group">
<!-- Outline Icon Buttons -->
<button class="btn btn-outline-secondary mr-1" type="button"><i class="la la-star-o"></i></button>
<button class="btn btn-outline-primary mr-1" type="button"><i class="la la-user"></i></button>
<button class="btn btn-outline-success mr-1" type="button"><i class="la la-search"></i></button>
<button class="btn btn-outline-info mr-1" type="button"><i class="la la-camera"></i></button>
<button class="btn btn-outline-warning mr-1" type="button"><i class="la la-camera"></i></button>
<button class="btn btn-outline-danger mr-1" type="button"><i class="la la-smile-o"></i></button>
<button class="btn btn-outline-light mr-1" type="button"><i class="la la-plug"></i></button>
<button class="btn btn-outline-dark mr-1" type="button"><i class="la la-heart"></i></button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Outline Icon Buttons end -->
<!-- Outline Icon Button group start -->
<section id="outline-icons-button-group">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Outline Icon Button group</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-lg-6 col-md-12">
<p>Icon Button group without text.</p>
<div class="form-group">
<!-- Outline Icon Button group -->
<div aria-label="Basic example" class="btn-group" role="group">
<button class="btn btn-icon btn-outline-secondary" type="button"><i class="la la-star-o"></i></button>
<button class="btn btn-icon btn-outline-primary" type="button"><i class="la la-user"></i></button>
<button class="btn btn-icon btn-outline-success" type="button"><i class="la la-search"></i></button>
<button class="btn btn-icon btn-outline-warning" type="button"><i class="la la-camera"></i></button>
<button class="btn btn-icon btn-outline-info" type="button"><i class="la la-camera"></i></button>
<button class="btn btn-icon btn-outline-danger" type="button"><i class="la la-smile-o"></i></button>
<button class="btn btn-icon btn-outline-light" type="button"><i class="la la-plug"></i></button>
<button class="btn btn-icon btn-outline-dark" type="button"><i class="la la-heart"></i></button>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<p>Combine sets of button groups into
                          <strong>Button toolbar</strong> for more complex components.</p>
<div class="form-group">
<!-- Outline Icon Button toolbar group -->
<div aria-label="Toolbar with button groups" class="btn-toolbar" role="toolbar">
<div aria-label="First Group" class="btn-group" role="group">
<button class="btn btn-icon btn-outline-light" type="button"><i class="la la-umbrella"></i></button>
<button class="btn btn-icon btn-outline-secondary" type="button"><i class="la la-moon-o"></i></button>
<button class="btn btn-icon btn-outline-primary" type="button"><i class="la la-cloud-download"></i></button>
</div>
<div aria-label="Second Group" class="btn-group mx-2" role="group">
<button class="btn btn-icon btn-outline-success" type="button"><i class="la la-fighter-jet"></i></button>
<button class="btn btn-icon btn-outline-warning" type="button"><i class="la la-gavel"></i></button>
<button class="btn btn-icon btn-outline-info" type="button"><i class="la la-tint"></i></button>
</div>
<div aria-label="Third Group" class="btn-group" role="group">
<button class="btn btn-icon btn-outline-danger" type="button"><i class="la la-cloud"></i></button>
</div>
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
<!-- Outline Icon Button group end -->
<!-- Sizes start -->
<section id="sizes">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Sizes</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-lg-6 col-md-12">
<!-- Outline Sizes -->
<p>Add <code>.btn-lg</code> or <code>.btn-sm</code> for Fancy
                          larger or smaller buttons size.</p>
<div class="form-group">
<button class="btn mr-1 mb-1 btn-outline-primary btn-lg" type="button">Large button</button>
<button class="btn mr-1 mb-1 btn-outline-secondary btn-lg" type="button">Large button</button>
</div>
<div class="form-group">
<button class="btn mr-1 mb-1 btn-outline-primary" type="button">Default button</button>
<button class="btn mr-1 mb-1 btn-outline-secondary" type="button">Default button</button>
</div>
<div class="form-group">
<button class="btn mr-1 mb-1 btn-outline-primary btn-sm" type="button">Small button</button>
<button class="btn mr-1 mb-1 btn-outline-secondary btn-sm" type="button">Small button</button>
</div>
</div>
<div class="col-lg-6 col-md-12">
<p>Buttons with Icons in different sizes</p>
<div class="form-group">
<button class="btn mr-1 mb-1 btn-outline-success btn-lg" type="button"><i class="la la-star-o"></i> Large button</button>
<button class="btn mr-1 mb-1 btn-outline-danger btn-lg" type="button"><i class="la la-heart"></i> Large button</button>
</div>
<div class="form-group">
<button class="btn mr-1 mb-1 btn-outline-success" type="button"><i class="la la-check-circle"></i> Default button</button>
<button class="btn mr-1 mb-1 btn-outline-danger" type="button"><i class="la la-archive"></i> Default button</button>
</div>
<div class="form-group">
<button class="btn mr-1 mb-1 btn-outline-success btn-sm" type="button"><i class="la la-desktop"></i> Small button</button>
<button class="btn mr-1 mb-1 btn-outline-danger btn-sm" type="button"><i class="la la-moon-o"></i> Small button</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Sizes end -->
<!-- Outline botton Dropdowns Sizes start -->
<section id="outline-button-dropdowns-sizes">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Outline Button Dropdowns Sizes</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-lg-6 col-md-12">
<p>Button dropdowns work with buttons of all sizes.</p>
<div class="form-group">
<!-- Outline Button Dropdowns Sizes -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-primary dropdown-toggle btn-lg" data-toggle="dropdown" type="button">Primary</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-secondary dropdown-toggle btn-lg" data-toggle="dropdown" type="button">Secondary</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
</div>
<div class="form-group">
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" type="button">Primary</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" type="button">Secondary</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
</div>
<div class="form-group">
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-primary dropdown-toggle btn-sm" data-toggle="dropdown" type="button">Primary</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-secondary dropdown-toggle btn-sm" data-toggle="dropdown" type="button">Secondary</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
</div>
</div>
<div class="col-lg-6 col-md-12">
<p>Icon Buttons in different sizes</p>
<div class="form-group">
<!-- Icon Buttons in different sizes -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-info dropdown-toggle btn-lg" data-toggle="dropdown" type="button"><i class="la la-info"></i></button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-warning dropdown-toggle btn-lg" data-toggle="dropdown" type="button"><i class="la la-warning"></i></button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
</div>
<div class="form-group">
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" type="button"><i class="la la-info"></i></button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown" type="button"><i class="la la-warning"></i></button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
</div>
<div class="form-group">
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-info dropdown-toggle btn-sm" data-toggle="dropdown" type="button"><i class="la la-info"></i></button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-warning dropdown-toggle btn-sm" data-toggle="dropdown" type="button"><i class="la la-warning"></i></button>
<div class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
</div>
</div>
<!-- /btn-group -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Outline botton Dropdowns Sizes end -->
<!-- Button Group Sizes start -->
<section id="button-group-sizes-2">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Button Group Sizes</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-12">
<p>Instead of applying button sizing classes to every button
                          in a group, just add <code>.btn-group-*</code> to each
                          <code>.btn-group</code>.</p>
<div class="form-group">
<!-- Button Group Sizes -->
<div aria-label="Basic example" class="btn-group btn-group-lg" role="group">
<button class="btn btn-outline-primary" type="button">Primary</button>
<button class="btn btn-outline-danger" type="button">Danger</button>
<button class="btn btn-outline-info" type="button">Info</button>
<button class="btn btn-outline-warning" type="button">Warning</button>
<button class="btn btn-outline-secondary" type="button">Secondary</button>
</div>
</div>
<div class="form-group">
<div aria-label="Basic example" class="btn-group" role="group">
<button class="btn btn-outline-primary" type="button">Primary</button>
<button class="btn btn-outline-danger" type="button">Danger</button>
<button class="btn btn-outline-info" type="button">Info</button>
<button class="btn btn-outline-warning" type="button">Warning</button>
<button class="btn btn-outline-secondary" type="button">Secondary</button>
</div>
</div>
<div class="form-group">
<div aria-label="Basic example" class="btn-group btn-group-sm" role="group">
<button class="btn btn-outline-primary" type="button">Primary</button>
<button class="btn btn-outline-danger" type="button">Danger</button>
<button class="btn btn-outline-info" type="button">Info</button>
<button class="btn btn-outline-warning" type="button">Warning</button>
<button class="btn btn-outline-secondary" type="button">Secondary</button>
</div>
</div>
</div>
<div class="col-12">
<p>Button Group with Icons in different sizes</p>
<div class="form-group">
<!-- Button Group Sizes with icon -->
<div aria-label="Basic example" class="btn-group btn-group-lg" role="group">
<button class="btn btn-outline-success" type="button"><i class="la la-search"></i> Success</button>
<button class="btn btn-outline-danger" type="button"><i class="la la-smile-o"></i> Danger</button>
<button class="btn btn-outline-primary" type="button"><i class="la la-user"></i> Primary</button>
<button class="btn btn-outline-warning" type="button"><i class="la la-link"></i> Warning</button>
<button class="btn btn-outline-info" type="button"><i class="la la-info"></i> Info</button>
</div>
</div>
<div class="form-group">
<div aria-label="Basic example" class="btn-group" role="group">
<button class="btn btn-outline-success" type="button"><i class="la la-search"></i> Success</button>
<button class="btn btn-outline-danger" type="button"><i class="la la-smile-o"></i> Danger</button>
<button class="btn btn-outline-primary" type="button"><i class="la la-user"></i> Primary</button>
<button class="btn btn-outline-warning" type="button"><i class="la la-link"></i> Warning</button>
<button class="btn btn-outline-info" type="button"><i class="la la-info"></i> Info</button>
</div>
</div>
<div class="form-group">
<div aria-label="Basic example" class="btn-group btn-group-sm" role="group">
<button class="btn btn-outline-success" type="button"><i class="la la-search"></i> Success</button>
<button class="btn btn-outline-danger" type="button"><i class="la la-smile-o"></i> Danger</button>
<button class="btn btn-outline-primary" type="button"><i class="la la-user"></i> Primary</button>
<button class="btn btn-outline-warning" type="button"><i class="la la-link"></i> Warning</button>
<button class="btn btn-outline-info" type="button"><i class="la la-info"></i> Info</button>
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
<!-- Button Group Sizes end -->
<!-- Block level Button start -->
<section id="block-level-button">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Block level buttons</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p>Create block level buttons—those that span the full width of
                      a parent—by adding <code>.btn-block</code>.</p>
<div class="row">
<div class="col-lg-6 col-md-12">
<div class="form-group">
<!-- block level buttons -->
<button class="btn btn-outline-primary btn-lg mr-1 mb-1 btn-block" type="button">Block level button</button>
<button class="btn btn-outline-secondary btn-lg mr-1 mb-1 btn-block" type="button">Block level button</button>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="form-group">
<!-- block level buttons with icon -->
<button class="btn btn-outline-success btn-icon btn-lg mr-1 mb-1 btn-block" type="button">Block level button</button>
<button class="btn btn-outline-danger btn-icon btn-lg mr-1 mb-1 btn-block" type="button">Block level button</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Block level Button end -->
<!-- Nesting Button group start -->
<section id="nesting-button-group">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Nesting Button group</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-md-6 col-sm-12">
<p>Place a <code>.btn-group</code> within another <code>.btn-group</code>                          for dropdown menu buttons.</p>
<div class="form-group">
<div aria-label="Button group with nested dropdown" class="btn-group" role="group">
<button class="btn btn-success" type="button">1</button>
<button class="btn btn-danger" type="button">2</button>
<div class="btn-group" role="group">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" id="btnGroupDrop3" type="button">
                                Dropdown
                              </button>
<div aria-labelledby="btnGroupDrop3" class="dropdown-menu">
<a class="dropdown-item bg-warning" href="component-buttons-basic.html#">Dropdown link</a>
<a class="dropdown-item bg-warning" href="component-buttons-basic.html#">Dropdown link</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<p>Nesting Button group with outline</p>
<div class="form-group">
<div aria-label="Button group with nested dropdown" class="btn-group" role="group">
<button class="btn btn-outline-success" type="button">1</button>
<button class="btn btn-outline-danger" type="button">2</button>
<div class="btn-group" role="group">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" id="btnGroupDrop2" type="button">
                                Dropdown
                              </button>
<div aria-labelledby="btnGroupDrop2" class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
</div>
</div>
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
<!-- Nesting Button group end -->
<!-- Vertical variation start -->
<section id="vertical-variation">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Vertical variation</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-xl-3 col-lg-6 col-sm-12">
<p>Make a set of buttons appear vertically.</p>
<div class="form-group">
<!-- Vertical variation -->
<div aria-label="Vertical button group" class="btn-group-vertical" role="group">
<button class="btn btn-secondary" type="button">Button</button>
<button class="btn btn-secondary" type="button">Button</button>
<div class="btn-group" role="group">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop1" type="button">
                                Dropdown
                              </button>
<div aria-labelledby="btnGroupVerticalDrop1" class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
</div>
</div>
<button class="btn btn-secondary" type="button">Button</button>
<button class="btn btn-secondary" type="button">Button</button>
<div class="btn-group" role="group">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop2" type="button">
                                Dropdown
                              </button>
<div aria-labelledby="btnGroupVerticalDrop2" class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
</div>
</div>
<div class="btn-group" role="group">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop3" type="button">
                                Dropdown
                              </button>
<div aria-labelledby="btnGroupVerticalDrop3" class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
</div>
</div>
<div class="btn-group" role="group">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop4" type="button">
                                Dropdown
                              </button>
<div aria-labelledby="btnGroupVerticalDrop1" class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-sm-12">
<p>Vertical variation with different colors</p>
<div class="form-group">
<div aria-label="Vertical button group" class="btn-group-vertical" role="group">
<button class="btn btn-primary" type="button">Primary</button>
<button class="btn btn-secondary" type="button">Secondary</button>
<div class="btn-group" role="group">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-light dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop5" type="button">
                                Secondary
                              </button>
<div aria-labelledby="btnGroupVerticalDrop2" class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
</div>
</div>
<button class="btn btn-success" type="button">Success</button>
<button class="btn btn-danger" type="button">Danger</button>
<div class="btn-group" role="group">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop6" type="button">
                                Dropdown
                              </button>
<div aria-labelledby="btnGroupVerticalDrop3" class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
</div>
</div>
<div class="btn-group" role="group">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop7" type="button">
                                Dropdown
                              </button>
<div aria-labelledby="btnGroupVerticalDrop3" class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
</div>
</div>
<div class="btn-group" role="group">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop8" type="button">
                                Dropdown
                              </button>
<div aria-labelledby="btnGroupVerticalDrop2" class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-sm-12">
<p>Vertical variation with Outlines</p>
<div class="form-group">
<div aria-label="Vertical button group" class="btn-group-vertical" role="group">
<button class="btn btn-outline-primary" type="button">Button</button>
<button class="btn btn-outline-secondary" type="button">Button</button>
<div class="btn-group" role="group">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop9" type="button">
                                Dropdown
                              </button>
<div aria-labelledby="btnGroupVerticalDrop3" class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
</div>
</div>
<button class="btn btn-outline-success" type="button">Button</button>
<button class="btn btn-outline-danger" type="button">Button</button>
<div class="btn-group" role="group">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop10" type="button">
                                Dropdown
                              </button>
<div aria-labelledby="btnGroupVerticalDrop3" class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
</div>
</div>
<div class="btn-group" role="group">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop11" type="button">
                                Dropdown
                              </button>
<div aria-labelledby="btnGroupVerticalDrop3" class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
</div>
</div>
<div class="btn-group" role="group">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop12" type="button">
                                Dropdown
                              </button>
<div aria-labelledby="btnGroupVerticalDrop4" class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-sm-12">
<p>Vertical variation with Outlines</p>
<div class="form-group">
<div aria-label="Vertical button group" class="btn-group-vertical" role="group">
<button class="btn btn-outline-amber" type="button">Button</button>
<button class="btn btn-outline-cyan" type="button">Button</button>
<div class="btn-group" role="group">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop13" type="button">
                                Dropdown
                              </button>
<div aria-labelledby="btnGroupVerticalDrop5" class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
</div>
</div>
<button class="btn btn-outline-red" type="button">Button</button>
<button class="btn btn-outline-blue-grey" type="button">Button</button>
<div class="btn-group" role="group">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-purple dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop14" type="button">
                                Dropdown
                              </button>
<div aria-labelledby="btnGroupVerticalDrop5" class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
</div>
</div>
<div class="btn-group" role="group">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-pink dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop15" type="button">
                                Dropdown
                              </button>
<div aria-labelledby="btnGroupVerticalDrop3" class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
</div>
</div>
<div class="btn-group" role="group">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-amber dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop16" type="button">
                                Dropdown
                              </button>
<div aria-labelledby="btnGroupVerticalDrop6" class="dropdown-menu">
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
<a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
</div>
</div>
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
<!-- Vertical variation end -->
</div>
</div>
</div>