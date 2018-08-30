<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ComponentDropdownsAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Dropdowns</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="component-dropdowns.html#">Components</a>
</li>
<li class="breadcrumb-item active">Dropdowns
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="component-dropdowns.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="component-dropdowns.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="component-dropdowns.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="component-dropdowns.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Basic Dropdowns start -->
<section id="basic-dropdowns">
<div class="row match-height">
<div class="col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Dropdown</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="dropdown show">
<div class="dropdown-menu show" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
<button class="dropdown-item" type="button">Action</button>
<button class="dropdown-item" type="button">Another action</button>
<button class="dropdown-item" type="button">Something else here</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Dropdown with divider</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="dropdown show">
<div class="dropdown-menu show" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
<a class="dropdown-item" href="component-dropdowns.html#">Action</a>
<a class="dropdown-item" href="component-dropdowns.html#">Another action</a>
<a class="dropdown-item" href="component-dropdowns.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-dropdowns.html#">Separated link</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">With Disabled Menu</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="dropdown show">
<div class="dropdown-menu show" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
<a class="dropdown-item" href="component-dropdowns.html#">Action</a>
<a class="dropdown-item disabled" href="component-dropdowns.html#">Another action</a>
<a class="dropdown-item" href="component-dropdowns.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-dropdowns.html#">Separated link</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">With active state</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="dropdown show">
<div class="dropdown-menu show" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
<a class="dropdown-item" href="component-dropdowns.html#">Action</a>
<a class="dropdown-item" href="component-dropdowns.html#">Another action</a>
<a class="dropdown-item active" href="component-dropdowns.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-dropdowns.html#">Separated link</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Basic Dropdowns end -->
<!-- Dropdown with Headers start -->
<section id="dropdown-with-headers">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Dropdown with Headers</h4>
<p>Add a header to label sections of actions in any dropdown menu.</p>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Header</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="dropdown show">
<div class="dropdown-menu show" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
<h6 class="dropdown-header">1st Dropdown header</h6>
<button class="dropdown-item" type="button">Action</button>
<button class="dropdown-item" type="button">Another action</button>
<h6 class="dropdown-header">2nd Dropdown header</h6>
<button class="dropdown-item" type="button">Something else here</button>
<button class="dropdown-item" type="button">Another Link</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Header with divider</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="dropdown show">
<div class="dropdown-menu show" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
<h6 class="dropdown-header">1st Dropdown header</h6>
<a class="dropdown-item" href="component-dropdowns.html#">Action</a>
<a class="dropdown-item" href="component-dropdowns.html#">Another action</a>
<h6 class="dropdown-header">2nd Dropdown header</h6>
<a class="dropdown-item" href="component-dropdowns.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-dropdowns.html#">Separated link</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">With Highlighted Menu</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="dropdown show">
<div class="dropdown-menu show" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
<h6 class="dropdown-header highlight">1st Dropdown header</h6>
<a class="dropdown-item" href="component-dropdowns.html#">Action</a>
<a class="dropdown-item" href="component-dropdowns.html#">Another action</a>
<h6 class="dropdown-header highlight">2nd Dropdown header</h6>
<a class="dropdown-item" href="component-dropdowns.html#">Something else here</a>
<a class="dropdown-item" href="component-dropdowns.html#">Separated link</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">With Header Icons</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="dropdown show">
<div class="dropdown-menu show" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
<h6 class="dropdown-header"><i class="la la-lightbulb-o mr-1 font-medium-1"></i> <i class="la la-list float-right font-medium-1"></i>                          1st Dropdown header</h6>
<a class="dropdown-item" href="component-dropdowns.html#">Action</a>
<a class="dropdown-item" href="component-dropdowns.html#">Another action</a>
<h6 class="dropdown-header highlight"><i class="la la-link mr-1 font-medium-1"></i> <i class="la la-eye float-right font-medium-1"></i>                          2nd Dropdown header</h6>
<a class="dropdown-item" href="component-dropdowns.html#">Something else here</a>
<a class="dropdown-item" href="component-dropdowns.html#">Separated link</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Dropdown with Headers end -->
<!-- Dropdown Buttons with Arrow start -->
<section id="dropdown-buttons-with-arrow">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Dropdown Options</h4>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Dropdown Buttons with Arrow</h4>
</div>
<div class="card-body">
<div class="card-content">
<p>Use <code>.arrow</code> class to <code>.dropdown-menu</code>                      to add arrow. <code>.arrow-right</code> &amp; <code>.arrow-left</code>                      classes to <code>.dropdown-menu</code> in submenu will give
                      you arrow on right &amp; left accrodingly.</p>
<div class="row">
<div class="col-sm-3 col-6">
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-success dropdown-toggle" data-toggle="dropdown" type="button">
                            Action
                          </button>
<div class="dropdown-menu arrow">
<button class="dropdown-item" type="button">Action</button>
<button class="dropdown-item" type="button">Another action</button>
<button class="dropdown-item" type="button">Something else here</button>
<div class="dropdown-divider"></div>
<div class="dropdown-submenu">
<button class="dropdown-item" type="button">More Options</button>
<div class="dropdown-menu arrow-left" role="menu">
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-3 col-6">
<div class="btn-group mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger btn-block dropdown-toggle" data-toggle="dropdown" type="button">
                            Action
                          </button>
<div class="dropdown-menu open-left arrow">
<button class="dropdown-item" type="button">Action</button>
<button class="dropdown-item" type="button">Another action</button>
<button class="dropdown-item" type="button">Something else here</button>
<div class="dropdown-divider"></div>
<div class="dropdown-submenu">
<button class="dropdown-item" type="button">More Options</button>
<div class="dropdown-menu open-left arrow-right" role="menu">
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-3 col-6">
<div class="btn-group dropup mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button">
                            Action
                          </button>
<div class="dropdown-menu arrow">
<button class="dropdown-item" type="button">Action</button>
<button class="dropdown-item" type="button">Another action</button>
<button class="dropdown-item" type="button">Something else here</button>
<div class="dropdown-divider"></div>
<div class="dropdown-submenu">
<button class="dropdown-item" type="button">More Options</button>
<div class="dropdown-menu arrow-left" role="menu">
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-3 col-6">
<div class="btn-group dropup mr-1 mb-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" type="button">
                            Action
                          </button>
<div class="dropdown-menu open-left arrow">
<button class="dropdown-item" type="button">Action</button>
<button class="dropdown-item" type="button">Another action</button>
<button class="dropdown-item" type="button">Something else here</button>
<div class="dropdown-divider"></div>
<div class="dropdown-submenu">
<button class="dropdown-item" type="button">More Options</button>
<div class="dropdown-menu open-left arrow-right" role="menu">
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
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
<!-- Dropdown Buttons with Arrow end -->
<!-- Dropdown Active states start -->
<section id="dropdown-active-states">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Dropdown Active states</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Dropdown Buttons with <code>.active</code> class and theme color
                      buttons.
                    </p>
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-12 height-250">
<div class="btn-group mr-1 mb-1 show">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" type="button">
                            Action
                          </button>
<div class="dropdown-menu show">
<button class="dropdown-item" type="button">Action</button>
<button class="dropdown-item" type="button">Another action</button>
<button class="dropdown-item active" type="button">Something else here</button>
<div class="dropdown-divider"></div>
<div class="dropdown-submenu">
<button class="dropdown-item" type="button">More Options</button>
<div class="dropdown-menu" role="menu">
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 height-250">
<div class="btn-group mr-1 mb-1 show">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
                            Action
                          </button>
<div class="dropdown-menu show">
<button class="dropdown-item" type="button">Action</button>
<button class="dropdown-item" type="button">Another action</button>
<button class="dropdown-item active" type="button">Something else here</button>
<div class="dropdown-divider"></div>
<div class="dropdown-submenu">
<button class="dropdown-item" type="button">More Options</button>
<div class="dropdown-menu" role="menu">
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 height-250">
<div class="btn-group mr-1 mb-1 show">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button">
                            Action
                          </button>
<div class="dropdown-menu show">
<button class="dropdown-item" type="button">Action</button>
<button class="dropdown-item" type="button">Another action</button>
<button class="dropdown-item active" type="button">Something else here</button>
<div class="dropdown-divider"></div>
<div class="dropdown-submenu">
<button class="dropdown-item" type="button">More Options</button>
<div class="dropdown-menu" role="menu">
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 height-250">
<div class="btn-group mr-1 mb-1 show">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" type="button">
                            Action
                          </button>
<div class="dropdown-menu show">
<button class="dropdown-item" type="button">Action</button>
<button class="dropdown-item" type="button">Another action</button>
<button class="dropdown-item active" type="button">Something else here</button>
<div class="dropdown-divider"></div>
<div class="dropdown-submenu">
<button class="dropdown-item" type="button">More Options</button>
<div class="dropdown-menu" role="menu">
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 height-250">
<div class="btn-group mr-1 mb-1 show">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-success dropdown-toggle" data-toggle="dropdown" type="button">
                            Action
                          </button>
<div class="dropdown-menu show">
<button class="dropdown-item" type="button">Action</button>
<button class="dropdown-item" type="button">Another action</button>
<button class="dropdown-item active" type="button">Something else here</button>
<div class="dropdown-divider"></div>
<div class="dropdown-submenu">
<button class="dropdown-item" type="button">More Options</button>
<div class="dropdown-menu" role="menu">
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 height-250">
<div class="btn-group mr-1 mb-1 show">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" type="button">
                            Action
                          </button>
<div class="dropdown-menu show">
<button class="dropdown-item" type="button">Action</button>
<button class="dropdown-item" type="button">Another action</button>
<button class="dropdown-item active" type="button">Something else here</button>
<div class="dropdown-divider"></div>
<div class="dropdown-submenu">
<button class="dropdown-item" type="button">More Options</button>
<div class="dropdown-menu open-left" role="menu">
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
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
<!-- Dropdown Active states end -->
<!-- Dropdown Sizes start -->
<section id="dropdown-sizes">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Dropdowns Sizes</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Extra Large Size</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.dropdown-menu-xl</code> class to set extra large size
                      dropdown.
                    </p>
<div class="dropdown show">
<div class="dropdown-menu dropdown-menu-xl show" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
<h6 class="dropdown-header">1st Dropdown header</h6>
<a class="dropdown-item" href="component-dropdowns.html#">Action</a>
<a class="dropdown-item" href="component-dropdowns.html#">Another action</a>
<h6 class="dropdown-header">2nd Dropdown header</h6>
<a class="dropdown-item" href="component-dropdowns.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-dropdowns.html#">Separated link</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Large Size</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.dropdown-menu-lg</code> class to set large size dropdown.</p>
<div class="dropdown show">
<div class="dropdown-menu dropdown-menu-lg show" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
<h6 class="dropdown-header">1st Dropdown header</h6>
<a class="dropdown-item" href="component-dropdowns.html#">Action</a>
<a class="dropdown-item" href="component-dropdowns.html#">Another action</a>
<h6 class="dropdown-header">2nd Dropdown header</h6>
<a class="dropdown-item" href="component-dropdowns.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-dropdowns.html#">Separated link</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Small Size</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.dropdown-menu-sm</code> class to set small size dropdown.</p>
<div class="dropdown show">
<div class="dropdown-menu dropdown-menu-sm show" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
<h6 class="dropdown-header">1st Dropdown header</h6>
<a class="dropdown-item" href="component-dropdowns.html#">Action</a>
<a class="dropdown-item" href="component-dropdowns.html#">Another action</a>
<h6 class="dropdown-header">2nd Dropdown header</h6>
<a class="dropdown-item" href="component-dropdowns.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="component-dropdowns.html#">Separated link</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Dropdown Sizes end -->
<!-- Dropdown with components start -->
<section id="dropdown-with-components">
<div class="row">
<div class="col-12 mt-1">
<h4>Dropdowns with components</h4>
<hr/>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Left Icons</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="dropdown show">
<div class="dropdown-menu show" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
<button class="dropdown-item" type="button"><i class="mr-1 ft-eye"></i> Action</button>
<button class="dropdown-item" type="button"><i class="mr-1 ft-edit"></i> Another action</button>
<button class="dropdown-item" type="button"><i class="mr-1 ft-link"></i> Something else here</button>
<div class="dropdown-divider"></div>
<button class="dropdown-item" type="button"><i class="mr-1 ft-trending-up"></i> Something here</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Right Icons</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="dropdown show">
<div class="dropdown-menu show" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
<button class="dropdown-item" type="button"><i class="ft-crop float-right"></i> Action</button>
<button class="dropdown-item" type="button"><i class="ft-link float-right"></i> Another action</button>
<button class="dropdown-item" type="button"><i class="ft-trending-up float-right"></i> Something else
                          here
                        </button>
<div class="dropdown-divider"></div>
<button class="dropdown-item" type="button"><i class="ft-link float-right"></i> Something here</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Icons on both sides</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="dropdown show">
<div class="dropdown-menu show" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
<button class="dropdown-item" type="button"><i class="mr-1 ft-clock"></i> Action <i class="ft-edit float-right"></i></button>
<button class="dropdown-item" type="button"><i class="mr-1 ft-share-2"></i> Another action <i class="ft-trash float-right"></i></button>
<button class="dropdown-item" type="button"><i class="mr-1 ft-link"></i> Something else here <i class="ft-link float-right"></i></button>
<div class="dropdown-divider"></div>
<button class="dropdown-item" type="button"><i class="mr-1 ft-ft-bluetooth"></i> Something here<i class="ft-crop float-right"></i></button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">With Checkbox</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="dropdown show">
<div class="dropdown-menu show" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
<div class="dropdown-item">
<span class="skin skin-polaris">
<span class="float-right">
<input id="check1" type="checkbox"/>
</span>
<label for="check1">Dropdown First Option</label>
</span>
</div>
<div class="dropdown-item">
<span class="skin skin-polaris">
<span class="float-right">
<input id="check2" type="checkbox"/>
</span>
<label for="check2">Dropdown Second Option</label>
</span>
</div>
<div class="dropdown-divider"></div>
<div class="dropdown-item">
<span class="skin skin-polaris">
<input checked="" id="check3" type="checkbox"/>
<label class="ml-1" for="check3">Dropdown Third Option</label>
</span>
</div>
<div class="dropdown-item">
<span class="skin skin-polaris">
<input id="check4" type="checkbox"/>
<label class="ml-1" for="check4">Dropdown Fourth Option</label>
</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">With Radios</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="dropdown show">
<div class="dropdown-menu show" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
<div class="dropdown-item">
<span class="skin skin-futurico">
<input id="radio1" name="radio" type="radio"/>
<label class="ml-1" for="radio1"> First Radio Option</label>
</span>
</div>
<div class="dropdown-item">
<span class="skin skin-futurico">
<input checked="" class="mr-1" id="radio2" name="radio" type="radio"/>
<label class="ml-1" for="radio2"> Second Radio Option</label>
</span>
</div>
<div class="dropdown-divider"></div>
<div class="dropdown-item">
<span class="skin skin-futurico">
<span class="float-right">
<input id="radio3" name="radio" type="radio"/>
</span>
<label for="radio3">Third Radio Option</label>
</span>
</div>
<div class="dropdown-item">
<span class="skin skin-futurico">
<span class="float-right">
<input id="radio4" name="radio" type="radio"/>
</span>
<label for="radio4">Fourth Radio Option</label>
</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">With Switchery</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="dropdown show">
<div class="dropdown-menu show" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
<div class="dropdown-item">
<span class="float-right">
<input checked="" class="switchery-xs" id="switchery1" name="switchery" type="checkbox"/>
</span>
<label class="card-title" for="switchery1">Switchery Options</label>
</div>
<div class="dropdown-item">
<span class="float-right">
<input class="switchery-xs" id="switchery2" name="switchery" type="checkbox"/>
</span>
<label class="card-title" for="switchery2">Switchery Options</label>
</div>
<div class="dropdown-divider"></div>
<div class="dropdown-item">
<input checked="" class="switchery-xs" disabled="" id="switchery3" name="switchery" type="checkbox"/>
<label class="card-title ml-1" for="switchery3">Switchery Options</label>
</div>
<div class="dropdown-item">
<input class="switchery-xs" id="switchery4" name="switchery" type="checkbox"/>
<label class="card-title ml-1" for="switchery4">Switchery Options</label>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">With Labels</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="dropdown show">
<div class="dropdown-menu show" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
<button class="dropdown-item" type="button">
<span class="mr-1 badge badge-default badge-success">New</span> Action
                        </button>
<button class="dropdown-item" type="button">
<span class="mr-1 badge badge-default badge-danger">bug</span> Another action
                        </button>
<button class="dropdown-item" type="button">
<span class="mr-1 badge badge-default badge-info">check</span> Something else here
                        </button>
<div class="dropdown-divider"></div>
<div class="dropdown-submenu">
<button class="dropdown-item" type="button">
<span class="mr-1 badge badge-default badge-warning">beware</span> More Options
                          </button>
<div class="dropdown-menu" role="menu">
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">With Badge Pills</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="dropdown show">
<div class="dropdown-menu show" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
<button class="dropdown-item" type="button">
<span class="mr-1 badge badge-pill badge-default badge-danger badge-glow">50</span> Action
                        </button>
<button class="dropdown-item" type="button">
<span class="mr-1 badge badge-pill badge-default badge-info badge-glow">15</span> Another action
                        </button>
<button class="dropdown-item" type="button">
<span class="mr-1 badge badge-pill badge-default badge-warning badge-glow">45</span> Something else here
                        </button>
<div class="dropdown-divider"></div>
<div class="dropdown-submenu">
<button class="dropdown-item" type="button">
<span class="mr-1 badge badge-pill badge-default badge-success badge-glow">10</span> More Options
                          </button>
<div class="dropdown-menu" role="menu">
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Labels &amp; Label pills</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="dropdown show">
<div class="dropdown-menu show" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
<button class="dropdown-item" type="button">
<span class="badge badge-default badge-success mr-1">New</span>
                          Action
                          <span class="badge badge-pill badge-default badge-danger badge-glow float-right">50</span>
</button>
<button class="dropdown-item" type="button">
<span class="badge badge-pill badge-default badge-info badge-glow mr-1">15</span>
                          Another action
                          <span class="badge badge-default badge-success float-right">bug</span>
</button>
<button class="dropdown-item" type="button">
<span class="badge badge-default badge-warning mr-1">check</span>
                          Something else here
                          <span class="badge badge-pill badge-default badge-info badge-glow ml-1">45</span>
</button>
<div class="dropdown-divider"></div>
<div class="dropdown-submenu">
<button class="dropdown-item" type="button">
<span class="badge badge-pill badge-default badge-danger badge-glow mr-1">10</span>
                            More Options
                            <span class="badge badge-default badge-warning ml-1">beware</span>
</button>
<div class="dropdown-menu open-left" role="menu">
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
<button class="dropdown-item" type="button">Submenu Item</button>
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
<!-- Dropdown with components end -->
</div>
</div>
</div>