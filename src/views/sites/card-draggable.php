<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\CardDraggableAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Draggable Cards</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="card-draggable.html#">Form Components</a>
</li>
<li class="breadcrumb-item active">Draggable Cards
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="card-draggable.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="card-draggable.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="card-draggable.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="card-draggable.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Card drag area section start -->
<section id="drag-area">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4 class="text-uppercase">Basic Draggable Cards</h4>
<hr/>
</div>
</div>
<div class="row" id="card-drag-area">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Card Heading 1</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
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
<h4 class="card-title">Card Heading 2</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
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
<h4 class="card-title">Card Heading 3</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
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
<h4 class="card-title">Card Heading 4</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
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
<!-- // Card drag area section end -->
<!-- Card move section start -->
<section id="card-move-section">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4 class="text-uppercase">Change Card Color When Moved</h4>
<hr/>
</div>
</div>
<div class="row" id="card-move">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Card Heading 1</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
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
<h4 class="card-title">Card Heading 2</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
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
<h4 class="card-title">Card Heading 3</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
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
<h4 class="card-title">Card Heading 4</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
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
<!-- // Card move section end -->
<!-- Card copy section start -->
<section id="card-copy">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4 class="text-uppercase">Copy Card</h4>
<hr/>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12 align-self-start" id="copy-left">
<div class="card">
<div class="card-header">
<h4 class="card-title">Card Heading 1</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
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
<div class="card">
<div class="card-header">
<h4 class="card-title">Card Heading 2</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
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
<div class="col-md-6 col-sm-12 align-self-end" id="copy-right">
<div class="card">
<div class="card-header">
<h4 class="card-title">Card Heading 3</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
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
<div class="card">
<div class="card-header">
<h4 class="card-title">Card Heading 4</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
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
<!-- // Card copy section end -->
<!-- Card drag handle section start -->
<section id="card-drag-handle">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4 class="text-uppercase">Drag Handles</h4>
<hr/>
</div>
</div>
<div class="wrapper">
<div class="row">
<div class="col-md-6 col-sm-12 align-self-start container" id="left-handles">
<div class="card">
<div class="card-header">
<h4 class="card-title">Card Heading 1</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li>
<span class="handle ft-move"></span>
</li>
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
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
                        roll pie marshmallow lollipop chupa chups donut fruitcake
                        cake.
                      </p>
</div>
</div>
</div>
<div class="card">
<div class="card-header">
<h4 class="card-title">Card Heading 2</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li>
<span class="handle ft-move"></span>
</li>
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
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
                        roll pie marshmallow lollipop chupa chups donut fruitcake
                        cake.
                      </p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12 align-self-end container" id="right-handles">
<div class="card">
<div class="card-header">
<h4 class="card-title">Card Heading 3</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li>
<span class="handle ft-move"></span>
</li>
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
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
                        roll pie marshmallow lollipop chupa chups donut fruitcake
                        cake.
                      </p>
</div>
</div>
</div>
<div class="card">
<div class="card-header">
<h4 class="card-title">Card Heading 4</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li>
<span class="handle ft-move"></span>
</li>
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
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
                        roll pie marshmallow lollipop chupa chups donut fruitcake
                        cake.
                      </p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Card drag handle section end -->
<!-- Card drag title area section start -->
<section id="card-drag-title-area">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4 class="text-uppercase">Drag With Title Area</h4>
<hr/>
</div>
</div>
<div class="wrapper">
<div class="row">
<div class="col-md-6 col-sm-12 align-self-start container" id="left-titleHandles">
<div class="card">
<div class="card-header titleArea">
<h4 class="card-title">Card Heading 1</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li>
<span class="ft-move"></span>
</li>
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
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
                        roll pie marshmallow lollipop chupa chups donut fruitcake
                        cake.
                      </p>
</div>
</div>
</div>
<div class="card">
<div class="card-header titleArea">
<h4 class="card-title">Card Heading 2</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li>
<span class="ft-move"></span>
</li>
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
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
                        roll pie marshmallow lollipop chupa chups donut fruitcake
                        cake.
                      </p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12 align-self-end container" id="right-titleHandles">
<div class="card">
<div class="card-header titleArea">
<h4 class="card-title">Card Heading 3</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li>
<span class="ft-move"></span>
</li>
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
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
                        roll pie marshmallow lollipop chupa chups donut fruitcake
                        cake.
                      </p>
</div>
</div>
</div>
<div class="card">
<div class="card-header titleArea">
<h4 class="card-title">Card Heading 4</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li>
<span class="ft-move"></span>
</li>
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
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
                        roll pie marshmallow lollipop chupa chups donut fruitcake
                        cake.
                      </p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Card drag title area section end -->
</div>
