<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ComponentModalsAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Modal</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="component-modals.html#">Components</a>
</li>
<li class="breadcrumb-item active">Modal
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="component-modals.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="component-modals.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="component-modals.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="component-modals.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Basic Modals start -->
<section id="basic-modals">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Modals</h4>
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
<div class="row my-2">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Default Modal</h5>
<p>Toggle a modal via JavaScript by clicking the button above.</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-primary block btn-lg" data-target="#default" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel1" class="modal fade text-left" id="default" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel1">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Modal With Icons</h5>
<p> With some icons and success alert to give success message.</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-primary block btn-lg" data-target="#iconModal" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel2" class="modal fade text-left" id="iconModal" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel2"><i class="la la-road2"></i> Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5><i class="la la-arrow-right"></i> Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5><i class="la la-lightbulb-o"></i> Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
<div class="alert alert-success" role="alert">
<span class="text-bold-600">Well done!</span> You successfully read this
                                    important alert message.
                                  </div>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Disable Keyboard</h5>
<p> By Default, closes the modal when escape key is pressed.
                            Disable keyboard interaction using data-backdrop="false".</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-primary block btn-lg" data-keyboard="false" data-target="#keyboard" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel3" class="modal fade text-left" id="keyboard" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel3">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Disable Backdrop</h5>
<p>Disable backdrop element using data-backdrop="false", it
                            includes a modal-backdrop element. Alternatively, specify
                            static for a backdrop which doesn't close the modal on
                            outsidedata-backdrop="false" click.</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-primary block btn-lg" data-backdrop="false" data-target="#backdrop" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel4" class="modal fade text-left" id="backdrop" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel4">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Modal Show</h5>
<p>Manually opens a modal. Returns to the caller before the
                            modal has actually been shown.</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-primary block btn-lg" data-show="false" data-target="#show" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel5" class="modal fade text-left" id="show" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel5">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Disable Animation</h5>
<p>For modals that simply appear rather than fade in to view,
                            remove the .fade class from your modal markup.</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-primary block btn-lg" data-target="#animation" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel6" class="modal text-left" id="animation" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel6"><i class="la la-tree"></i> Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5><i class="la la-arrow-right"></i> Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5><i class="la la-lightbulb-o"></i> Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
<div class="alert alert-success" role="alert">
<span class="text-bold-600">Well done!</span> You successfully read this
                                    important alert message.
                                  </div>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
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
</div>
</section>
<!-- Basic Modals end -->
<!-- Modal Themes start -->
<section id="modal-themes">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Modal Themes</h4>
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
<div class="row my-2">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Primary Modal Template</h5>
<p>To use primary modal theme, add <code>.bg-primary</code>                            class to the <code>.modal-header</code> container</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-primary block btn-lg" data-backdrop="false" data-target="#primary" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel8" class="modal fade text-left" id="primary" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header bg-primary white">
<h4 class="modal-title white" id="myModalLabel8">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Success Modal Template</h5>
<p>To use success modal theme, add <code>.bg-success</code>                            class to the <code>.modal-header</code> container</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-success block btn-lg" data-target="#success" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel9" class="modal fade text-left" id="success" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header bg-success white">
<h4 class="modal-title white" id="myModalLabel9"><i class="la la-tree"></i> Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5><i class="la la-arrow-right"></i> Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5><i class="la la-lightbulb-o"></i> Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
<div class="alert alert-success" role="alert">
<span class="text-bold-600">Well done!</span> You successfully read this
                                    important alert message.
                                  </div>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-success" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Danger Modal Template</h5>
<p>To use danger modal theme, add <code>.bg-danger</code>                            class to the <code>.modal-header</code> container</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-danger block btn-lg" data-target="#danger" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel10" class="modal fade text-left" id="danger" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header bg-danger white">
<h4 class="modal-title white" id="myModalLabel10">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-danger" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Info Modal Template</h5>
<p>To use info modal theme, add <code>.bg-info</code> class
                            to the <code>.modal-header</code> container</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-info block btn-lg" data-backdrop="false" data-target="#info" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel11" class="modal fade text-left" id="info" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header bg-info white">
<h4 class="modal-title white" id="myModalLabel11">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-info" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Warning Modal Template</h5>
<p> To use warning modal theme, add <code>.bg-warning</code>                            class to the <code>.modal-header</code> container</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-warning block btn-lg" data-target="#warning" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel12" class="modal fade text-left" id="warning" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header bg-warning white">
<h4 class="modal-title white" id="myModalLabel12"><i class="la la-tree"></i> Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5><i class="la la-arrow-right"></i> Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5><i class="la la-lightbulb-o"></i> Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
<div class="alert alert-success" role="alert">
<span class="text-bold-600">Well done!</span> You successfully read this
                                    important alert message.
                                  </div>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-warning" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Border Modal Template</h5>
<p>To use Border color modal theme, add <code>.border-COLORNAME</code>                            class to the <code>.modal-content</code> container</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-pink block btn-lg border-pink pink" data-target="#border" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel15" class="modal fade text-left" id="border" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content border-pink">
<div class="modal-header border-bottom-pink">
<h4 class="modal-title" id="myModalLabel15"><i class="la la-tree"></i> Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5><i class="la la-arrow-right"></i> Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5><i class="la la-lightbulb-o"></i> Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
<div class="alert alert-success" role="alert">
<span class="text-bold-600">Well done!</span> You successfully read this
                                    important alert message.
                                  </div>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
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
</div>
</section>
<!-- Modal Themes end -->
<!-- Modal Sizes start -->
<section id="modal-sizes">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Modal Sizes</h4>
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
<div class="row my-2">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Extra Small Modal Size</h5>
<p>Add class <code>.modal-xs</code> with <code>.modal-dialog</code>                            to use Extra Small size of modal.</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-success block btn-lg" data-target="#xSmall" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel20" class="modal fade text-left" id="xSmall" role="dialog" tabindex="-1">
<div class="modal-dialog modal-xs" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel20">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Small Modal Size</h5>
<p>Add class <code>.modal-sm</code> with <code>.modal-dialog</code>                            to use small size of modal.</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-success block btn-lg" data-target="#small" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel19" class="modal fade text-left" id="small" role="dialog" tabindex="-1">
<div class="modal-dialog modal-sm" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel19">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Default Modal Size</h5>
<p>For <code>default size</code>, modal markup doesn't require
                            any additional sizing class.</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-success block btn-lg" data-target="#defaultSize" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel18" class="modal fade text-left" id="defaultSize" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel18"><i class="la la-tree"></i> Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5><i class="la la-arrow-right"></i> Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5><i class="la la-lightbulb-o"></i> Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
<div class="alert alert-success" role="alert">
<span class="text-bold-600">Well done!</span> You successfully read this
                                    important alert message.
                                  </div>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Large Modal</h5>
<p>Add class <code>.modal-lg</code> with <code>.modal-dialog</code>                            to use large size of modal.</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-success block btn-lg" data-target="#large" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel17" class="modal fade text-left" id="large" role="dialog" tabindex="-1">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel17">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Extra Large Modal</h5>
<p>Add class <code>.modal-xl</code> with <code>.modal-dialog</code>                            to use extra large size of modal.</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-success block btn-lg" data-target="#xlarge" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel16" class="modal fade text-left" id="xlarge" role="dialog" tabindex="-1">
<div class="modal-dialog modal-xl" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel16">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
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
</div>
</section>
<!-- Modal Sizes end -->
<!-- Modal Events start -->
<section id="modal-events">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Modal Events</h4>
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
<p>Bootstrap’s modal class exposes a few events for hooking into
                      modal functionality. All modal events are fired at the modal
                      itself
                    </p>
<div class="row my-2">
<div class="col-md-6 col-sm-12">
<div class="form-group">
<h5>OnShow Modal Event</h5>
<p>This event fires immediately when the show instance method
                            is called. If caused by a click, the clicked element
                            is available as the relatedTarget property of the event.</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-danger block btn-lg" data-target="#onshow" data-toggle="modal" id="onshowbtn" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel21" class="modal fade text-left" id="onshow" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel21">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="form-group">
<h5>OnShown Modal Event</h5>
<p>This event is fired when the modal has been made visible
                            to the user (will wait for CSS transitions to complete).
                            If caused by a click, the clicked element is available
                            as the relatedTarget property of the event.</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-danger block btn-lg" data-target="#onshown" data-toggle="modal" id="onshownbtn" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel22" class="modal fade text-left" id="onshown" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel22">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="form-group">
<h5>OnHide Modal Event</h5>
<p>This event is fired immediately when the hide instance
                            method has been called.</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-danger block btn-lg" data-target="#onhide" data-toggle="modal" id="onhidebtn" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel23" class="modal fade text-left" id="onhide" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel23"><i class="la la-tree"></i> Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5><i class="la la-arrow-right"></i> Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5><i class="la la-lightbulb-o"></i> Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
<div class="alert alert-success" role="alert">
<span class="text-bold-600">Well done!</span> You successfully read this
                                    important alert message.
                                  </div>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="form-group">
<h5>OnHidden Modal Event</h5>
<p>This event is fired when the modal has finished being hidden
                            from the user (will wait for CSS transitions to complete).</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-danger block btn-lg" data-target="#onhidden" data-toggle="modal" id="onhiddenbtn" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel24" class="modal fade text-left" id="onhidden" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel24">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
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
</div>
</section>
<!-- Modal Events end -->
<!-- Different Heading Options start -->
<section id="modal-heading-options">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Different Heading Options</h4>
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
<div class="row my-2">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Default heading Modal</h5>
<p> Use <code>.modal-title</code> class for basic modal title.</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-info block btn-lg" data-target="#headingDefault" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel25" class="modal fade text-left" id="headingDefault" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<label class="modal-title text-text-bold-600" id="myModalLabel25">Basic Modal</label>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Modal with subtitle</h5>
<p>Add <code>span</code> after Modal title for subtitle.</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-info block btn-lg" data-target="#heading5" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel26" class="modal fade text-left" id="heading5" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title" id="myModalLabel26">Main Modal Title</h3>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
<span class="modal-subtitle">This is modal subtitle</span>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>H1 heading Modal</h5>
<p>Use <code>H1</code> for Modal title</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-info block btn-lg" data-target="#heading1" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel27" class="modal fade text-left" id="heading1" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h1 class="modal-title" id="myModalLabel27">Basic Modal</h1>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>H2 heading Modal</h5>
<p>Use <code>H2</code> for Modal title</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-info block btn-lg" data-target="#heading2" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel28" class="modal fade text-left" id="heading2" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h2 class="modal-title" id="myModalLabel28">Basic Modal</h2>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>H3 heading Modal</h5>
<p>Use <code>H3</code> for Modal title</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-info block btn-lg" data-target="#heading3" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel29" class="modal fade text-left" id="heading3" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title" id="myModalLabel29">Basic Modal</h3>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>H4 heading Modal</h5>
<p>Use <code>H4</code> for Modal title</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-info block btn-lg" data-target="#heading4" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel30" class="modal fade text-left" id="heading4" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel30">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>H5 heading Modal</h5>
<p>Use <code>H5</code> for Modal title</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-info block btn-lg" data-target="#heading6" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel31" class="modal fade text-left" id="heading6" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="myModalLabel31">Basic Modal</h5>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>H6 heading Modal</h5>
<p>Use <code>H6</code> for Modal title</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-info block btn-lg" data-target="#heading7" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel32" class="modal fade text-left" id="heading7" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h6 class="modal-title" id="myModalLabel32">Basic Modal</h6>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
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
</div>
</section>
<!-- Different Heading Options end -->
<!-- Form Components start -->
<section id="form-components">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Form Components</h4>
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
<div class="row my-2">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Login Form</h5>
<p> Created Simple Login Form.</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-warning block btn-lg" data-target="#inlineForm" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel33" class="modal fade text-left" id="inlineForm" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<label class="modal-title text-text-bold-600" id="myModalLabel33">Inline Login Form</label>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<form action="#">
<div class="modal-body">
<label>Email: </label>
<div class="form-group">
<input class="form-control" placeholder="Email Address" type="text"/>
</div>
<label>Password: </label>
<div class="form-group">
<input class="form-control" placeholder="Password" type="password"/>
</div>
</div>
<div class="modal-footer">
<input class="btn btn-outline-secondary btn-lg" data-dismiss="modal" type="reset" value="close"/>
<input class="btn btn-outline-primary btn-lg" type="submit" value="Login"/>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Form with Icons</h5>
<p>Login Form With Icon.</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-warning block btn-lg" data-target="#iconForm" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel34" class="modal fade text-left" id="iconForm" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title" id="myModalLabel34">Modal Title</h3>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<form>
<div class="modal-body">
<label>Email: </label>
<div class="form-group position-relative has-icon-left">
<input class="form-control" placeholder="Email Address" type="text"/>
<div class="form-control-position">
<i class="la la-envelope font-medium-5 line-height-1 text-muted icon-align"></i>
</div>
</div>
<label>Password: </label>
<div class="form-group position-relative has-icon-left">
<input class="form-control" placeholder="Password" type="password"/>
<div class="form-control-position">
<i class="la la-lock font-large-1 line-height-1 text-muted icon-align"></i>
</div>
</div>
</div>
<div class="modal-footer">
<input class="btn btn-outline-secondary btn-lg" data-dismiss="modal" type="reset" value="close"/>
<input class="btn btn-outline-primary btn-lg" type="submit" value="Login"/>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Bootstrap Input Style Form</h5>
<p>Bootstrap Form using Floating Label fields.</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-warning block btn-lg" data-target="#bootstrap" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel35" class="modal fade text-left" id="bootstrap" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title" id="myModalLabel35"> Modal Title</h3>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<form>
<div class="modal-body">
<fieldset class="form-group floating-label-form-group">
<label for="email">Email Address</label>
<input class="form-control" id="email" placeholder="Email Address" type="text"/>
</fieldset>
<br/>
<fieldset class="form-group floating-label-form-group">
<label for="title">Password</label>
<input class="form-control" id="title" placeholder="Password" type="password"/>
</fieldset>
<br/>
<fieldset class="form-group floating-label-form-group">
<label for="title1">Description</label>
<textarea class="form-control" id="title1" placeholder="Description" rows="3"></textarea>
</fieldset>
</div>
<div class="modal-footer">
<input class="btn btn-outline-secondary btn-lg" data-dismiss="modal" type="reset" value="close"/>
<input class="btn btn-outline-primary btn-lg" type="submit" value="Login"/>
</div>
</form>
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
<!-- Form Components end -->
<!-- Modal Animations start -->
<section id="modal-animations">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Modal Animations</h4>
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
<p>animate.css is a bunch of cool, fun, and cross-browser animations
                      for you to use in your projects. Great for emphasis, home pages,
                      sliders, and general just-add-water-awesomeness.
                      <strong>Add the class <code>.animated</code> to the element you want
                        to animate. </strong>
</p>
<div class="row my-2">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Bounce Animation</h5>
<p>Bounce Animation using <code>.bounce</code> class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#bounce" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel36" class="modal animated bounce text-left" id="bounce" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel36">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Flash Animation</h5>
<p>Flash Animation using <code>.flash</code> class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#flash" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel37" class="modal animated flash text-left" id="flash" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel37">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Pulse Animation</h5>
<p>Pulse Animation using <code>.pulse</code> class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#pulse" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel38" class="modal animated pulse text-left" id="pulse" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel38">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>RubberBand Animation</h5>
<p>RubberBand Animation using <code>.rubberBand</code> class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#rubberBand" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel39" class="modal animated rubberBand text-left" id="rubberBand" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel39">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Shake Animation</h5>
<p>Shake Animation using <code>.shake</code> class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#shake" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel40" class="modal animated shake text-left" id="shake" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel40">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Roll In Animation</h5>
<p>Roll In Animation using <code>.rollIn</code> class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#rollIn" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel41" class="modal animated rollIn text-left" id="rollIn" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel41">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Swing Animation</h5>
<p>Swing Animation using <code>.swing</code> class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#swing" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel42" class="modal animated swing text-left" id="swing" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel42">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Tada Animation</h5>
<p>Tada Animation using <code>.tada</code> class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#tada" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel43" class="modal animated tada text-left" id="tada" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel43">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Wobble Animation</h5>
<p>Wobble Animation using <code>.wobble</code> class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#wobble" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel44" class="modal animated wobble text-left" id="wobble" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel44">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Jello Animation</h5>
<p>Jello Animation using <code>.jello</code> class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#jello" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel45" class="modal animated jello text-left" id="jello" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel45">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Bounce In Animation</h5>
<p>Bounce In Animation using <code>.bounceIn</code> class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#bounceIn" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel46" class="modal animated bounceIn text-left" id="bounceIn" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel46">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Bounce In Down Animation</h5>
<p>Bounce In Down Animation using <code>.bounceInDown</code>                            class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#bounceInDown" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel47" class="modal animated bounceInDown text-left" id="bounceInDown" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel47">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Bounce In Left Animation</h5>
<p>Bounce In Left Animation using <code>.bounceInLeft</code>                            class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#bounceInLeft" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel48" class="modal animated bounceInLeft text-left" id="bounceInLeft" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel48">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Bounce In Right Animation</h5>
<p>Bounce In Right Animation using <code>.bounceInRight</code>                            class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#bounceInRight" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel49" class="modal animated bounceInRight text-left" id="bounceInRight" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel49">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Bounce In Up Animation</h5>
<p>Bounce In Up Animation using <code>.bounceInUp</code> class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#bounceInUp" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel50" class="modal animated bounceInUp text-left" id="bounceInUp" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel50">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Fade In Animation</h5>
<p>Use <code>.fadeIn</code> class for fade in animation to
                            modal
                          </p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#fadeIn" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel51" class="modal animated fadeIn text-left" id="fadeIn" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel51">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Fade In Down Animation</h5>
<p>Fade In Down Animation using <code>.fadeInDown</code> class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#fadeInDown" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel52" class="modal animated fadeInDown text-left" id="fadeInDown" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel52">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Fade In Down Big Animation</h5>
<p>Fade In Down Big Animation using <code>.fadeInDownBig</code>                            class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#fadeInDownBig" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel53" class="modal animated fadeInDownBig text-left" id="fadeInDownBig" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel53">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Fade In Left Animation</h5>
<p>Fade In Left Animation using <code>.fadeInLeft</code> class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#fadeInLeft" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel54" class="modal animated fadeInLeft text-left" id="fadeInLeft" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel54">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Fade In Left Big Animation</h5>
<p>Fade In Left Big Animation using <code>.fadeInLeftBig</code>                            class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#fadeInLeftBig" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel55" class="modal animated fadeInLeftBig text-left" id="fadeInLeftBig" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel55">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Fade In Right Animation</h5>
<p>Fade In Right Animation using <code>.fadeInRight</code>                            class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#fadeInRight" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel56" class="modal animated fadeInRight text-left" id="fadeInRight" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel56">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Fade In Right Big Animation</h5>
<p>Fade In Right Big Animation using <code>.fadeInRightBig</code>                            class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#fadeInRightBig" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel57" class="modal animated fadeInRightBig text-left" id="fadeInRightBig" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel57">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Fade In Up Animation</h5>
<p>Fade In Up Animation using <code>.fadeInUp</code> class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#fadeInUp" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel58" class="modal animated fadeInUp text-left" id="fadeInUp" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel58">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Fade In Up Big Animation</h5>
<p>Fade In Up Big Animation using <code>.fadeInUpBig</code>                            class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#fadeInUpBig" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel59" class="modal animated fadeInUpBig text-left" id="fadeInUpBig" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel59">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>FlipInX Animation</h5>
<p>FlipInX Animation using <code>.flipInX</code> class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#flipInX" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel60" class="modal animated flipInX text-left" id="flipInX" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel60">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>FlipInY Animation</h5>
<p>FlipInY Animation using <code>.flipInY</code> class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#flipInY" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" class="modal animated flipInY text-left" id="flipInY" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel62">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Light Speed In Animation</h5>
<p>Light Speed In Animation using <code>.lightSpeedIn</code>                            class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#lightSpeedIn" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel63" class="modal animated lightSpeedIn text-left" id="lightSpeedIn" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel63">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Rotate In Animation</h5>
<p>Use <code>.rotateIn</code> class for Rotate In Animation
                            to modal</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#rotateIn" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel64" class="modal animated rotateIn text-left" id="rotateIn" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel64">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Rotate In Down Left Animation</h5>
<p>Rotate In Down Left Animation using <code>.fadeInUp</code>                            class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#rotateInDownLeft" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel65" class="modal animated rotateInDownLeft text-left" id="rotateInDownLeft" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel65">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Rotate In Down Right Animation</h5>
<p>Rotate In Down Right Animation using <code>.rotateInDownRight</code>                            class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#rotateInDownRight" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel66" class="modal animated rotateInDownRight text-left" id="rotateInDownRight" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel66">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Rotate In Up Left Animation</h5>
<p>Rotate In Up Left Animation using <code>.rotateInUpLeft</code>                            class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#rotateInUpLeft" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel67" class="modal animated rotateInUpLeft text-left" id="rotateInUpLeft" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel67">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Rotate In Up Right Animation</h5>
<p>Rotate In Up Right Animation using <code>.rotateInUpRight</code>                            class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#rotateInUpRight" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel68" class="modal animated rotateInUpRight text-left" id="rotateInUpRight" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel68">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Zoom In Animation</h5>
<p>Use <code>.zoomIn</code> class for Zoom In Animation to
                            modal
                          </p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#zoomIn" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel69" class="modal animated zoomIn text-left" id="zoomIn" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel69">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Zoom In Down Animation</h5>
<p>Zoom In Down Animation using <code>.zoomInDown</code> class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#zoomInDown" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel70" class="modal animated zoomInDown text-left" id="zoomInDown" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel70">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Zoom In Left Animation</h5>
<p>Zoom In Left Animation using <code>.zoomInLeft</code> class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#zoomInLeft" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel71" class="modal animated zoomInLeft text-left" id="zoomInLeft" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel71">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Zoom In Right Animation</h5>
<p>Zoom In Right Animation using <code>.zoomInRight</code>                            class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#zoomInRight" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel72" class="modal animated zoomInRight text-left" id="zoomInRight" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel72">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Zoom In Up Animation</h5>
<p>Zoom In Up Animation using <code>.zoomInUp</code> class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#zoomInUp" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel73" class="modal animated zoomInUp text-left" id="zoomInUp" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel73">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Slide In Up Animation</h5>
<p>Slide In Up Animation using <code>.slideInUp</code> class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#slideInUp" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel74" class="modal animated slideInUp text-left" id="slideInUp" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel74">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Slide In Left Animation</h5>
<p>Slide In Left Animation using <code>.slideInLeft</code>                            class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#slideInLeft" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel75" class="modal animated slideInLeft text-left" id="slideInLeft" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel75">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Slide In Right Animation</h5>
<p>Slide In Right Animation using <code>.slideInRight</code>                            class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#slideInRight" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel76" class="modal animated slideInRight text-left" id="slideInRight" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel76">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<h5>Slide In Down Animation</h5>
<p>Slide In Down Animation using <code>.slideInDown</code>                            class</p>
<!-- Button trigger modal -->
<button class="btn btn-outline-blue blue block btn-lg" data-target="#slideInDown" data-toggle="modal" type="button">
                            Launch Modal
                          </button>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel77" class="modal animated slideInDown text-left" id="slideInDown" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel77">Basic Modal</h4>
<button aria-label="Close" class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<h5>Check First Paragraph</h5>
<p>Oat cake ice cream candy chocolate cake chocolate
                                    cake cotton candy dragée apple pie. Brownie carrot
                                    cake candy canes bonbon fruitcake topping halvah.
                                    Cake sweet roll cake cheesecake cookie chocolate
                                    cake liquorice. Apple pie sugar plum powder donut
                                    soufflé.
                                  </p>
<p>Sweet roll biscuit donut cake gingerbread. Chocolate
                                    cupcake chocolate bar ice cream. Danish candy
                                    cake.
                                  </p>
<hr/>
<h5>Some More Text</h5>
<p>Cupcake sugar plum dessert tart powder chocolate
                                    fruitcake jelly. Tootsie roll bonbon toffee danish.
                                    Biscuit sweet cake gummies danish. Tootsie roll
                                    cotton candy tiramisu lollipop candy cookie biscuit
                                    pie.
                                  </p>
</div>
<div class="modal-footer">
<button class="btn grey btn-outline-secondary" data-dismiss="modal" type="button">Close</button>
<button class="btn btn-outline-primary" type="button">Save changes</button>
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
</div>
</section>
<!-- Modal Animations end -->
</div>
