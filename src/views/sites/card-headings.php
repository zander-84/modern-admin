<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\CardHeadingsAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Card Headings</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="card-headings.html#">Components</a>
</li>
<li class="breadcrumb-item active">Bootstrap Cards
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="card-headings.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="card-headings.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="card-headings.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="card-headings.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Card headings examples section start -->
<section id="card-headings">
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header" id="heading-links">
<h4 class="card-title">With Links</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<a class="success" href="card-headings.html#">Link 1</a>
<a class="danger" href="card-headings.html#">Link 2</a>
<a class="info" href="card-headings.html#">Link 3</a>
</div>
</div>
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Add links in <code>.heading-element</code> div. That will set links
                    on right side of the header.</p>
<p class="card-text">Caramels lemon drops tootsie roll toffee. Gummi bears macaroon
                    fruitcake sesame snaps dessert sugar plum lollipop donut jelly-o.
                    Croissant wafer bonbon sweet cake icing chocolate oat cake lemon
                    drops.
                  </p>
<p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé. Tart
                    lollipop carrot cake sugar plum. Marshmallow wafer tiramisu jelly
                    beans.
                  </p>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-labels">With Label &amp; Round label</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<span class="badge badge-default badge-info">Label</span>
<span class="badge badge-default badge-warning round">Round</span>
</div>
</div>
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Add a badge to card with <code>.badge badge-COLOR</code> class
                    with a wrapper of <code>.heading-elements</code> class.</p>
<p class="card-text">Carrot cake jujubes dragée wafer sesame snaps bear claw lollipop
                    sesame snaps. Tiramisu pudding jelly beans.</p>
<p class="card-text">Gingerbread brownie sweet roll cheesecake chocolate cake jelly
                    beans marzipan gummies dessert. Jelly beans sugar plum cheesecake
                    cookie oat cake soufflé.</p>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-pagination">With Pagination</h4>
<div class="heading-elements heading-top-elements">
<nav aria-label="Page navigation">
<ul>
<li class="page-item">
<a aria-label="Previous" class="page-link border-0" href="card-headings.html#">
<span aria-hidden="true">«</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link border-0" href="card-headings.html#">1</a></li>
<li class="page-item active"><a class="page-link border-0" href="card-headings.html#">2</a></li>
<li class="page-item"><a class="page-link border-0" href="card-headings.html#">3</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link border-0" href="card-headings.html#">
<span aria-hidden="true">»</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
</div>
</div>
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                    roll pie marshmallow lollipop.</p>
<p class="card-text">Tart lollipop carrot cake sugar plum. Jelly beans sugar plum cheesecake
                    cookie oat cake soufflé.</p>
<p class="card-text">Soufflé soufflé tart gummies marshmallow. Wafer pie cheesecake
                    marshmallow cookie tiramisu chocolate sweet roll. Marzipan bonbon
                    carrot cake soufflé pudding halvah topping candy canes.Fruitcake
                    halvah candy.</p>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-prev-next">With Next &amp; Previous</h4>
<div class="heading-elements heading-top-elements">
<nav aria-label="Page navigation">
<ul>
<li class="page-item">
<button aria-label="Previous" class="page-link btn-sm">
<span aria-hidden="true">« Prev</span>
<span class="sr-only">Previous</span>
</button>
</li>
<li class="page-item">
<button aria-label="Next" class="page-link btn-sm">
<span aria-hidden="true">Next »</span>
<span class="sr-only">Next</span>
</button>
</li>
</ul>
</nav>
</div>
</div>
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Cake icing chocolate cake gummi bears cupcake. Cheesecake cupcake
                    icing cotton candy sugar plum caramels bonbon pastry. Danish
                    jujubes icing sesame snaps.Gingerbread wafer sweet macaroon.</p>
<p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                    roll bonbon liquorice tiramisu pie powder.</p>
<p class="card-text">Liquorice apple pie cookie tart. Chocolate cake danish chupa chups
                    marshmallow liquorice danish biscuit oat cake. Cake halvah candy.</p>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-icon">Single Icon</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li>
<a href="card-headings.html#"><i class="ft-smartphone"></i></a>
</li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                      roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                      marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
<p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-multiple-icons">Multiple Icons</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a href="card-headings.html#"><i class="ft-link"></i></a></li>
<li><a href="card-headings.html#"><i class="ft-refresh-ccw"></i></a></li>
<li><a href="card-headings.html#"><i class="ft-settings"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                      roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                      marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
<p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-input">With Basic Input</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<input class="form-control" type="text"/>
</div>
</div>
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                      roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                      marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
<p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-input-icon">Input With Icon</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<fieldset class="position-relative">
<input class="form-control" type="text"/>
<div class="form-control-position">
<i class="ft-arrow-right"></i>
</div>
</fieldset>
</div>
</div>
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                      roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                      marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
<p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-input-spinner">Input With Spinner Icon</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<fieldset class="position-relative">
<input class="form-control" type="text"/>
<div class="form-control-position">
<i class="ft-refresh-cw spinner"></i>
</div>
</fieldset>
</div>
</div>
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                      roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                      marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
<p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-select">With Basic Select</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<fieldset>
<select class="form-control" id="basicSelect">
<option>Select City</option>
<option>Amsterdam</option>
<option>Antwerp</option>
<option>Athens</option>
<option>Barcelona</option>
<option>Berlin</option>
<option>Birmingham</option>
<option>Bradford</option>
<option>Bremen</option>
<option>Brussels</option>
<option>Bucharest</option>
<option>Budapest</option>
</select>
</fieldset>
</div>
</div>
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                      roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                      marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
<p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-checkboxes">Multiple Checkboxes</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<span class="inline c-input c-checkbox pl-1">
<input id="no" type="checkbox"/>
<span class="c-indicator"></span>
<label for="no">1</label>
</span>
<span class="inline c-input c-checkbox pl-1">
<input checked="" id="yes" type="checkbox"/>
<span class="c-indicator"></span>
<label for="yes">2</label>
</span>
</div>
</div>
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                      roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                      marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
<p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-colored-checkbox">Colored Checkbox</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<div class="input-group input-group-sm">
<div class="d-inline-block custom-control custom-checkbox mr-1">
<input class="custom-control-input" id="customCheck1" type="checkbox"/>
<label class="custom-control-label" for="customCheck1">1</label>
</div>
<div class="d-inline-block custom-control custom-checkbox mr-1">
<input class="custom-control-input" id="customCheck2" type="checkbox"/>
<label class="custom-control-label" for="customCheck2">2</label>
</div>
<div class="d-inline-block custom-control custom-checkbox">
<input class="custom-control-input" id="customCheck3" type="checkbox"/>
<label class="custom-control-label" for="customCheck3">3</label>
</div>
</div>
</div>
</div>
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                      roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                      marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
<p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-radios">Multiple Radios</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<div class="input-group input-group-sm">
<label class="inline c-input c-radio">
<input name="inlineRadio" type="radio"/>
<span class="c-indicator"></span>
                        Unchecked
                      </label>
<label class="inline c-input c-radio pl-1">
<input checked="" name="inlineRadio1" type="radio"/>
<span class="c-indicator"></span>
                        Checked
                      </label>
</div>
</div>
</div>
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                      roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                      marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
<p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-colored-radios">Colorful Radios</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<div class="input-group input-group-sm">
<div class="d-inline-block custom-control custom-radio mr-1">
<input class="custom-control-input" id="customRadio1" name="inlineRadio" type="radio"/>
<label class="custom-control-label" for="customRadio1">1</label>
</div>
<div class="d-inline-block custom-control custom-radio mr-1">
<input class="custom-control-input" id="customRadio2" name="inlineRadio" type="radio"/>
<label class="custom-control-label" for="customRadio2">2</label>
</div>
<div class="d-inline-block custom-control custom-radio">
<input class="custom-control-input" id="customRadio3" name="inlineRadio" type="radio"/>
<label class="custom-control-label" for="customRadio3">3</label>
</div>
</div>
</div>
</div>
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                      roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                      marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
<p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-toggle">Bootstrap Toggle</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<input class="switch" data-group-cls="btn-group-sm" data-icon-cls="fa" data-off-icon-cls="fa-thumbs-o-down" data-on-icon-cls="fa-thumbs-o-up" id="switch" type="checkbox"/>
</div>
</div>
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                      roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                      marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
<p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-switchery">Switchery</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<input checked="" class="switchery" data-color="info" id="switcheryColor" type="checkbox"/>
</div>
</div>
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                      roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                      marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
<p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-thumbnail">Single Thumbnail</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<span class="avatar">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png"/>
</span>
</div>
</div>
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                      roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                      marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
<p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-multiple-thumbnails">Multiple Thumbnail</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<span class="avatar">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-2.png"/>
</span>
<span class="avatar">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-3.png"/>
</span>
<span class="avatar">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-4.png"/>
</span>
</div>
</div>
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                      roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                      marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
<p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-thumbnail-status">Thumbnail with status</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<a href="card-headings.html#">
<span class="avatar avatar-online">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-18.png"/>
<i></i>
</span>
</a>
</div>
</div>
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                      roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                      marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
<p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-notification">With notification</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<a href="card-headings.html#">
<span class="avatar avatar-online">
<img alt="avatar" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-21.png"/>
<span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">3</span>
</span>
</a>
</div>
</div>
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                      roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                      marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
<p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-buttons1">Buttons</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<button class="btn btn-sm btn-icon btn-success" type="button">
<i class="ft-user white"></i>
</button>
<button class="btn btn-sm btn-primary" type="button">Click</button>
<button class="btn btn-sm bg-blue-grey white" type="button"><i class="ft-settings white"></i> Click</button>
</div>
</div>
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                      roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                      marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
<p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-buttons2">Buttons</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<button class="btn btn-sm btn-outline-success" type="button">Click</button>
<button class="btn btn-sm btn-round btn-outline-info" type="button">
<i class="ft-heart info"></i> Click
                    </button>
</div>
</div>
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                      roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                      marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
<p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-dropdown">With Dropdown</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<div class="btn-group">
<button class="btn btn-danger" type="button">Default</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" type="button">
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="card-headings.html#">Action</a>
<a class="dropdown-item" href="card-headings.html#">Another action</a>
<a class="dropdown-item" href="card-headings.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="card-headings.html#">Separated link</a>
</div>
</div>
</div>
</div>
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                      roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                      marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
<p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-icon-dropdown">With Icon &amp; Dropdown</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-round btn-secondary dropdown-toggle" data-toggle="dropdown" type="button"><i class="ft-user"></i> Default</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="card-headings.html#">Action</a>
<a class="dropdown-item" href="card-headings.html#">Another action</a>
<a class="dropdown-item" href="card-headings.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="card-headings.html#">Separated link</a>
</div>
</div>
</div>
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                      roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                      marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
<p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-icon-buttons">Multiple Icon Buttons</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<a class="btn btn-float btn-round btn-secondary" href="card-headings.html#"><i class="ft-thumbs-up"></i></a>
<a class="btn btn-float btn-round btn-secondary" href="card-headings.html#"><i class="ft-thumbs-down"></i></a>
</div>
</div>
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                      roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                      marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
<p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="heading-social-buttons">Social Buttons</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<div class="social-buttons">
<!-- Social Icons Outline Buttons -->
<a class="btn btn-social-icon btn-sm mr-1 btn-linkedin" href="card-headings.html#">
<span class="la la-linkedin"></span>
</a>
<a class="btn btn-social-icon btn-sm mr-1 btn-pinterest" href="card-headings.html#">
<span class="la la-pinterest-p"></span>
</a>
<a class="btn btn-social-icon btn-sm mr-1 btn-google" href="card-headings.html#">
<span class="la la-google"></span>
</a>
<a class="btn btn-social-icon btn-sm mr-1 btn-facebook" href="card-headings.html#">
<span class="la la-facebook"></span>
</a>
</div>
</div>
</div>
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Content title</h4>
<p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                      roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                      marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
<p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Card headings examples section end -->
</div>
</div>
</div>