<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\CardActionsAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Card Actions</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="card-actions.html#">Components</a>
</li>
<li class="breadcrumb-item active">Card Actions
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="card-actions.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="card-actions.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="card-actions.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="card-actions.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- card actions section start -->
<section id="card-actions">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Card Actions Example</h4>
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
<div class="card-content collapse show">
<div class="card-body">
<div class="row">
<div class="col-xl-6 col-lg-12 mb-2">
<div class="table-responsive">
<table class="table table-bordered">
<thead>
<tr>
<th>Action</th>
<th>Live</th>
<th>Details</th>
</tr>
</thead>
<tbody>
<tr>
<td class="text-middle">Collapse</td>
<td>
<a class="btn btn-sm btn-outline-primary" data-action="collapse">Collapse</a>
</td>
<td> In Card Header, " <i class="ft-minus"></i> " sign
                                  given. when you click on this icon, card will be
                                  collapsed and change it's sign to " <i class="la la-plus"></i>                                  "</td>
</tr>
<tr>
<td class="text-middle">Reload</td>
<td>
<a class="btn btn-sm btn-outline-primary" data-action="reload">Refresh</a>
</td>
<td>In Card Header, " <i class="ft-rotate-cw"></i> "
                                  sign given. Click this icon when you want to reload/reset
                                  your card</td>
</tr>
<tr>
<td class="text-middle">Expand</td>
<td>
<a class="btn btn-sm btn-outline-primary" data-action="expand">Toggle</a>
</td>
<td> In Card Header, " <i class="ft-maximize"></i> " sign
                                  given.It is used to set card in fullscreen &amp;
                                  icon changes to " <i class="ft-minimize"></i> "</td>
</tr>
<tr>
<td class="text-middle">Close</td>
<td>
<a class="btn btn-sm btn-outline-primary" data-action="close">Remove</a>
</td>
<td> In Card Header, " <i class="ft-x"></i> " sign given
                                  to remove card from this page.</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<h4 class="card-title">Card Title</h4>
<p>Oat cake ice cream candy chocolate cake chocolate cake cotton
                          candy dragée apple pie. Brownie carrot cake candy canes
                          bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake
                          cookie chocolate cake liquorice. Apple pie sugar plum powder
                          donut soufflé.</p>
<p>Dessert jelly-o jelly dessert jujubes croissant. Marshmallow
                          pudding pastry halvah dessert apple pie caramels bonbon
                          toffee. Jelly beans brownie sweet bear claw biscuit. Marshmallow
                          jelly gummies marzipan tootsie roll topping.</p>
<p>Cotton candy wafer powder bonbon topping. Sugar plum danish
                          tootsie roll jelly tart icing bear claw. Gingerbread brownie
                          sweet roll cheesecake chocolate cake jelly beans marzipan
                          gummies dessert.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Collapse Example</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p>Oat cake ice cream candy chocolate cake chocolate cake cotton
                      candy dragée apple pie. Brownie carrot cake candy canes bonbon
                      fruitcake topping halvah. Cake sweet roll cake cheesecake cookie
                      chocolate cake liquorice. Apple pie sugar plum powder donut
                      soufflé.
                    </p>
<p>Dessert jelly-o jelly dessert jujubes croissant. Marshmallow
                      pudding pastry halvah dessert apple pie caramels bonbon toffee.
                      Jelly beans brownie sweet bear claw biscuit. Marshmallow jelly
                      gummies marzipan tootsie roll topping.</p>
<p>Cotton candy wafer powder bonbon topping. Sugar plum danish tootsie
                      roll jelly tart icing bear claw. Gingerbread brownie sweet
                      roll cheesecake chocolate cake jelly beans marzipan gummies
                      dessert.
                    </p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Refresh Example</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body">
<p>Oat cake ice cream candy chocolate cake chocolate cake cotton
                      candy dragée apple pie. Brownie carrot cake candy canes bonbon
                      fruitcake topping halvah. Cake sweet roll cake cheesecake cookie
                      chocolate cake liquorice. Apple pie sugar plum powder donut
                      soufflé.
                    </p>
<p>Dessert jelly-o jelly dessert jujubes croissant. Marshmallow
                      pudding pastry halvah dessert apple pie caramels bonbon toffee.
                      Jelly beans brownie sweet bear claw biscuit. Marshmallow jelly
                      gummies marzipan tootsie roll topping.</p>
<p>Cotton candy wafer powder bonbon topping. Sugar plum danish tootsie
                      roll jelly tart icing bear claw. Gingerbread brownie sweet
                      roll cheesecake chocolate cake jelly beans marzipan gummies
                      dessert.
                    </p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Expand/Fullscreen Example</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body">
<p>Oat cake ice cream candy chocolate cake chocolate cake cotton
                      candy dragée apple pie. Brownie carrot cake candy canes bonbon
                      fruitcake topping halvah. Cake sweet roll cake cheesecake cookie
                      chocolate cake liquorice. Apple pie sugar plum powder donut
                      soufflé.
                    </p>
<p>Dessert jelly-o jelly dessert jujubes croissant. Marshmallow
                      pudding pastry halvah dessert apple pie caramels bonbon toffee.
                      Jelly beans brownie sweet bear claw biscuit. Marshmallow jelly
                      gummies marzipan tootsie roll topping.</p>
<p>Cotton candy wafer powder bonbon topping. Sugar plum danish tootsie
                      roll jelly tart icing bear claw. Gingerbread brownie sweet
                      roll cheesecake chocolate cake jelly beans marzipan gummies
                      dessert.
                    </p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Close Example</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p>Oat cake ice cream candy chocolate cake chocolate cake cotton
                      candy dragée apple pie. Brownie carrot cake candy canes bonbon
                      fruitcake topping halvah. Cake sweet roll cake cheesecake cookie
                      chocolate cake liquorice. Apple pie sugar plum powder donut
                      soufflé.
                    </p>
<p>Dessert jelly-o jelly dessert jujubes croissant. Marshmallow
                      pudding pastry halvah dessert apple pie caramels bonbon toffee.
                      Jelly beans brownie sweet bear claw biscuit. Marshmallow jelly
                      gummies marzipan tootsie roll topping.</p>
<p>Cotton candy wafer powder bonbon topping. Sugar plum danish tootsie
                      roll jelly tart icing bear claw. Gingerbread brownie sweet
                      roll cheesecake chocolate cake jelly beans marzipan gummies
                      dessert.
                    </p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // card-actions section end -->
</div>
