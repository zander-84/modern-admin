<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ComponentListGroupAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">List Group</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="component-list-group.html#">Components</a>
</li>
<li class="breadcrumb-item active">List Group
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="component-list-group.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="component-list-group.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="component-list-group.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="component-list-group.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Basic ListGroups start -->
<section id="basic-listgroup">
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Simple ListGroup</h4>
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
<p>The most basic list group is simply an unordered list with list
                      items, and the proper classes. Build upon it with the options
                      that follow, or your own CSS as needed.</p>
<ul class="list-group">
<li class="list-group-item">Cras justo odio</li>
<li class="list-group-item">Dapibus ac facilisis in</li>
<li class="list-group-item">Morbi leo risus</li>
<li class="list-group-item">Porta ac consectetur ac</li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Disabled items</h4>
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
<p>Add <code>.disabled</code> to a <code>.list-group-item</code>                      to gray it out to appear disabled.</p>
<div class="list-group">
<a class="list-group-item disabled" href="component-list-group.html#">
								Cras justo odio
							</a>
<a class="list-group-item" href="component-list-group.html#">Dapibus ac facilisis in</a>
<a class="list-group-item" href="component-list-group.html#">Morbi leo risus</a>
<a class="list-group-item" href="component-list-group.html#">Porta ac consectetur ac</a>
<a class="list-group-item" href="component-list-group.html#">Vestibulum at eros</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Basic ListGroups end -->
<!-- With Labels and Badges start -->
<section id="using-labels-badges">
<div class="row">
<div class="col-12">
<h4>With Labels and Badges</h4>
<hr/>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Badges</h4>
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
<p>Add bagdes to any list group item to show unread counts, activity,
                      etc.
                    </p>
<ul class="list-group">
<li class="list-group-item">
<span class="badge badge-primary badge-pill float-right">5</span>
                        Cras justo odio
                      </li>
<li class="list-group-item">
<span class="badge badge-success badge-pill float-right">2</span>
                        Dapibus ac facilisis in
                      </li>
<li class="list-group-item">
<span class="badge badge-danger badge-pill float-right">1</span>
                        Morbi leo risus
                      </li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Labels</h4>
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
<p>Add labels to any list group item to show notifications, message,etc.</p>
<ul class="list-group">
<li class="list-group-item">
<span class="badge badge-warning float-right">Warning</span>
                        Cras justo odio
                      </li>
<li class="list-group-item">
<span class="badge badge-info float-right">info</span>
                        Dapibus ac facilisis in
                      </li>
<li class="list-group-item">
<span class="badge badge-danger float-right">danger</span>
                        Morbi leo risus
                      </li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- With Labels and Badges end -->
<!-- With Icons start -->
<section id="checkbox-input-group">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">With Icons</h4>
<p>Left Icons and Right Icons need icon class before and after text of
                list group.</p>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Left Icons</h4>
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
<ul class="list-group">
<li class="list-group-item">
<span class="float-left">
<i class="la la-star-o mr-1"></i>
</span>
                        Cras justo odio
                      </li>
<li class="list-group-item">
<span class="float-left">
<i class="la la-envelope-o mr-1"></i>
</span>
                        Dapibus ac facilisis in
                      </li>
<li class="list-group-item">
<span class="float-left">
<i class="la la-heart-o mr-1"></i>
</span>
                        Morbi leo risus
                      </li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Right Icons</h4>
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
<ul class="list-group">
<li class="list-group-item">
<span class="float-right">
<i class="la la-sun-o"></i>
</span>
                        Cras justo odio
                      </li>
<li class="list-group-item">
<span class="float-right">
<i class="la la-moon-o"></i>
</span>
                        Dapibus ac facilisis in
                      </li>
<li class="list-group-item">
<span class="float-right">
<i class="la la-cloud"></i>
</span>
                        Morbi leo risus
                      </li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- With Icons end -->
<!-- With Background Color Option start -->
<section id="with-back-color">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">With Background Color Option</h4>
<p>Use class <code>.bg-COLOR</code> for background color.</p>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Blue Grey Background Color</h4>
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
<ul class="list-group">
<li class="list-group-item bg-blue-grey white">
                        Cras justo odio
                      </li>
<li class="list-group-item bg-blue-grey white">
                        Dapibus ac facilisis in
                      </li>
<li class="list-group-item bg-blue-grey white">
                        Morbi leo risus
                      </li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Grey Background with Right Icons</h4>
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
<ul class="list-group">
<li class="list-group-item bg-pink white">
<span class="float-right">
<i class="la la-bell-o"></i>
</span>
                        Cras justo odio
                      </li>
<li class="list-group-item bg-pink white">
<span class="float-right">
<i class="la la-comment-o"></i>
</span>
                        Dapibus ac facilisis in
                      </li>
<li class="list-group-item bg-pink white">
<span class="float-right">
<i class="la la-heart-o"></i>
</span>
                        Morbi leo risus
                      </li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- With Background Color Option end -->
<!-- Anchors and buttons start -->
<section id="anchors-n-buttons">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Anchors and buttons</h4>
<p>Use anchors or buttons to create actionable list group items with hover,
                disabled, and active states by adding .list-group-item-action. This
                separate class contains a few overrides to add compatibility for
                <code>&lt;a&gt;</code>s and <code>&lt;button&gt;</code>s, as well
                as the hover and focus states.</p>
<div class="alert alert-primary">Be sure to
                <strong>not use</strong> the standard
                <strong>.btn</strong> classes here.</div>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Anchors</h4>
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
<div class="list-group">
<a class="list-group-item active" href="component-list-group.html#">
								Cras justo odio
							</a>
<a class="list-group-item list-group-item-action" href="component-list-group.html#">Dapibus ac facilisis in</a>
<a class="list-group-item list-group-item-action" href="component-list-group.html#">Morbi leo risus</a>
<a class="list-group-item list-group-item-action" href="component-list-group.html#">Porta ac consectetur ac</a>
<a class="list-group-item list-group-item-action disabled" href="component-list-group.html#">Vestibulum at eros</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Buttons</h4>
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
<div class="list-group">
<button class="list-group-item list-group-item-action active" type="button">
                        Cras justo odio
                      </button>
<button class="list-group-item list-group-item-action" type="button">Dapibus ac facilisis in</button>
<button class="list-group-item list-group-item-action" type="button">Morbi leo risus</button>
<button class="list-group-item list-group-item-action" type="button">Porta ac consectetur ac</button>
<button class="list-group-item list-group-item-action disabled" type="button">Vestibulum at eros</button>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Anchors and buttons end -->
<!-- Custom Listgroups start -->
<section id="custom-listgroup">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Custom ListGroups</h4>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Contextual classes</h4>
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
<p>Use contextual classes to style list items, default or linked.
                      Also includes .active state.</p>
<div class="list-group">
<a class="list-group-item list-group-item-action list-group-item-success" href="component-list-group.html#">Dapibus ac facilisis in</a>
<a class="list-group-item list-group-item-action list-group-item-info" href="component-list-group.html#">Cras sit amet nibh libero</a>
<a class="list-group-item list-group-item-action list-group-item-warning" href="component-list-group.html#">Porta ac consectetur ac</a>
<a class="list-group-item list-group-item-action list-group-item-danger" href="component-list-group.html#">Vestibulum at eros</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Custom content</h4>
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
<p>Add nearly any HTML within, even for linked list groups like
                      the one below.</p>
<div class="list-group">
<a class="list-group-item list-group-item-action flex-column align-items-start active" href="component-list-group.html#">
<div class="d-flex w-100 justify-content-between">
<h5 class="text-bold-600 white">List group item heading</h5>
<small>3 days ago</small>
</div>
<p>Donec id elit non mi porta gravida at eget metus. Maecenas
                          sed diam eget risus varius blandit.</p>
<small>Donec id elit non mi porta.</small>
</a>
<a class="list-group-item list-group-item-action flex-column align-items-start" href="component-list-group.html#">
<div class="d-flex w-100 justify-content-between">
<h5 class="text-bold-600">List group item heading</h5>
<small class="text-muted">3 days ago</small>
</div>
<p>Donec id elit non mi porta gravida at eget metus. Maecenas
                          sed diam eget risus varius blandit.</p>
<small class="text-muted">Donec id elit non mi porta.</small>
</a>
<a class="list-group-item list-group-item-action flex-column align-items-start" href="component-list-group.html#">
<div class="d-flex w-100 justify-content-between">
<h5 class="text-bold-600">List group item heading</h5>
<small class="text-muted">3 days ago</small>
</div>
<p>Donec id elit non mi porta gravida at eget metus. Maecenas
                          sed diam eget risus varius blandit.</p>
<small class="text-muted">Donec id elit non mi porta.</small>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Custom Listgroups end -->
<!-- ListGroups with Media start -->
<section id="listgroup-with-media">
<div class="row">
<div class="col-12">
<h4>ListGroups with Media</h4>
<hr/>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Media On Left</h4>
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
<div class="media-list list-group">
<div class="list-group-item list-group-item-action media">
<a class="media-link" href="component-list-group.html#">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-11.png" style="width: 48px;height: 48px;"/>
</span>
<span class="media-body">
                            Dapibus ac facilisis in
                            <br/>
<span class="grey">CEO</span>
</span>
</a>
</div>
<div class="list-group-item list-group-item-action media">
<a class="media-link" href="component-list-group.html#">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-14.png" style="width: 48px;height: 48px;"/>
</span>
<span class="media-body">
                            Cras sit amet nibh libero
                            <br/>
<span class="grey">PM</span>
</span>
</a>
</div>
<div class="list-group-item list-group-item-action media">
<a class="media-link" href="component-list-group.html#">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-3.png" style="width: 48px;height: 48px;"/>
</span>
<span class="media-body">
                            Porta ac consectetur ac
                            <br/>
<span class="grey">CS</span>
</span>
</a>
</div>
<div class="list-group-item list-group-item-action media">
<a class="media-link" href="component-list-group.html#">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-17.png" style="width: 48px;height: 48px;"/>
</span>
<span class="media-body">
                            Vestibulum at eros
                            <br/>
<span class="grey">MD</span>
</span>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Media with Custom content</h4>
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
<div class="media-list list-group">
<a class="list-group-item list-group-item-action media active" href="component-list-group.html#">
<div class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png" style="width: 48px;height: 48px;"/>
</div>
<div class="media-body">
<h5 class="list-group-item-heading white">List group item heading</h5>
<span class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas
                            sed diam eget risus varius blandit.</span>
</div>
</a>
<a class="list-group-item list-group-item-action media" href="component-list-group.html#">
<div class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-16.png" style="width: 48px;height: 48px;"/>
</div>
<div class="media-body">
<h5 class="list-group-item-heading">List group item heading</h5>
<span class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas
                            sed diam eget risus varius blandit.</span>
</div>
</a>
<a class="list-group-item list-group-item-action media" href="component-list-group.html#">
<div class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-12.png" style="width: 48px;height: 48px;"/>
</div>
<div class="media-body">
<h5 class="list-group-item-heading">List group item heading</h5>
<span class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas
                            sed diam eget risus varius blandit.</span>
</div>
</a>
<a class="list-group-item list-group-item-action media" href="component-list-group.html#">
<div class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-9.png" style="width: 48px;height: 48px;"/>
</div>
<div class="media-body">
<h5 class="list-group-item-heading">List group item heading</h5>
<span class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas
                            sed diam eget risus varius blandit.</span>
</div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- ListGroups with Media end -->
</div>
</div>
</div>