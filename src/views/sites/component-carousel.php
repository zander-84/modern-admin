<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ComponentCarouselAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Carousel</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="component-carousel.html#">Components</a>
</li>
<li class="breadcrumb-item active">Carousel
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="component-carousel.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="component-carousel.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="component-carousel.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="component-carousel.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Basic Carousel start -->
<section id="basic-carousel">
<div class="row">
<div class="col-12 mt-1 mb-1">
<p>
<strong> Nested carousels are not supported.</strong>
</p>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Example</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="carousel slide" data-ride="carousel" id="carousel-example-generic">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#carousel-example-generic"></li>
<li data-slide-to="1" data-target="#carousel-example-generic"></li>
<li data-slide-to="2" data-target="#carousel-example-generic"></li>
</ol>
<div class="carousel-inner" role="listbox">
<div class="carousel-item active">
<img alt="First slide" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/02.jpg"/>
</div>
<div class="carousel-item">
<img alt="Second slide" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/03.jpg"/>
</div>
<div class="carousel-item">
<img alt="Third slide" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/01.jpg"/>
</div>
</div>
<a class="carousel-control-prev" data-slide="prev" href="component-carousel.html#carousel-example-generic" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" data-slide="next" href="component-carousel.html#carousel-example-generic" role="button">
<span aria-hidden="true" class="carousel-control-next-icon"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Optional captions</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="carousel slide" data-ride="carousel" id="carousel-example-caption">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#carousel-example-caption"></li>
<li data-slide-to="1" data-target="#carousel-example-caption"></li>
<li data-slide-to="2" data-target="#carousel-example-caption"></li>
</ol>
<div class="carousel-inner" role="listbox">
<div class="carousel-item active">
<img alt="First slide" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/06.jpg"/>
<div class="carousel-caption">
<h3>First Slide Label</h3>
<p>Donut jujubes I love topping I love sweet. Jujubes I
                              love brownie gummi bears I love donut sweet chocolate.
                              Tart chocolate marshmallow.Tart carrot cake muffin.</p>
</div>
</div>
<div class="carousel-item">
<img alt="Second slide" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/08.jpg"/>
<div class="carousel-caption">
<h3>Second Slide Label</h3>
<p>Tart macaroon marzipan I love soufflé apple pie wafer.
                              Chocolate bar jelly caramels jujubes chocolate cake
                              gummies. Cupcake cake I love cake danish carrot cake.</p>
</div>
</div>
<div class="carousel-item">
<img alt="Third slide" src="<?=$baseUrl;?>/app-assets/images/carousel/05.jpg"/>
<div class="carousel-caption">
<h3>Third Slide Label</h3>
<p>Pudding sweet pie gummies. Chocolate bar sweet tiramisu
                              cheesecake chocolate cotton candy pastry muffin. Marshmallow
                              cake powder icing.</p>
</div>
</div>
</div>
<a class="carousel-control-prev" data-slide="prev" href="component-carousel.html#carousel-example-caption" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" data-slide="next" href="component-carousel.html#carousel-example-caption" role="button">
<span aria-hidden="true" class="carousel-control-next-icon"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Basic Carousel end -->
<!-- Carousel Options start -->
<section id="carousel-options">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Carousel Options</h4>
<p>Options can be passed via data attributes or JavaScript. For data attributes,
                append the option name to <code>data-</code>, as in <code>data-interval=""</code>.</p>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Interval Option</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>The amount of time to delay between automatically cycling an
                      item. If false, carousel will not automatically cycle.</p>
<div class="carousel slide" data-interval="5000" data-ride="carousel" id="carousel-interval">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#carousel-interval"></li>
<li data-slide-to="1" data-target="#carousel-interval"></li>
<li data-slide-to="2" data-target="#carousel-interval"></li>
</ol>
<div class="carousel-inner" role="listbox">
<div class="carousel-item active">
<img alt="First slide" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/10.jpg"/>
</div>
<div class="carousel-item">
<img alt="Second slide" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/15.jpg"/>
</div>
<div class="carousel-item">
<img alt="Third slide" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/14.jpg"/>
</div>
</div>
<a class="carousel-control-prev" data-slide="prev" href="component-carousel.html#carousel-interval" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" data-slide="next" href="component-carousel.html#carousel-interval" role="button">
<span aria-hidden="true" class="carousel-control-next-icon"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Pause Option</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>If set to <code>"hover"</code>, pauses the cycling of the carousel
                      on <code>mouseenter</code> and resumes the cycling of the carousel
                      on <code>mouseleave</code>. If set to <code>null</code>, hovering
                      over the carousel won't pause it.</p>
<div class="carousel slide" data-pause="" data-ride="carousel" id="carousel-pause">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#carousel-pause"></li>
<li data-slide-to="1" data-target="#carousel-pause"></li>
<li data-slide-to="2" data-target="#carousel-pause"></li>
</ol>
<div class="carousel-inner" role="listbox">
<div class="carousel-item active">
<img alt="First slide" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/03.jpg"/>
</div>
<div class="carousel-item">
<img alt="Second slide" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/09.jpg"/>
</div>
<div class="carousel-item">
<img alt="Third slide" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/07.jpg"/>
</div>
</div>
<a class="carousel-control-prev" data-slide="prev" href="component-carousel.html#carousel-pause" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" data-slide="next" href="component-carousel.html#carousel-pause" role="button">
<span aria-hidden="true" class="carousel-control-next-icon"></span>
<span class="sr-only">Next</span>
</a>
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
<h4 class="card-title">Wrap Option</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Whether the carousel should cycle continuously or have hard stops.
                      Default: true</p>
<div class="carousel slide" data-ride="carousel" data-wrap="false" id="carousel-wrap">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#carousel-wrap"></li>
<li data-slide-to="1" data-target="#carousel-wrap"></li>
<li data-slide-to="2" data-target="#carousel-wrap"></li>
</ol>
<div class="carousel-inner" role="listbox">
<div class="carousel-item active">
<img alt="First slide" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/02.jpg"/>
</div>
<div class="carousel-item">
<img alt="Second slide" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/04.jpg"/>
</div>
<div class="carousel-item">
<img alt="Third slide" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/08.jpg"/>
</div>
</div>
<a class="carousel-control-prev" data-slide="prev" href="component-carousel.html#carousel-wrap" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" data-slide="next" href="component-carousel.html#carousel-wrap" role="button">
<span aria-hidden="true" class="carousel-control-next-icon"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Keyboard Option</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Whether the carousel should react to keyboard events. Default:
                      true
                    </p>
<div class="carousel slide" data-keyboard="false" data-ride="carousel" id="carousel-keyboard">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#carousel-keyboard"></li>
<li data-slide-to="1" data-target="#carousel-keyboard"></li>
<li data-slide-to="2" data-target="#carousel-keyboard"></li>
</ol>
<div class="carousel-inner" role="listbox">
<div class="carousel-item active">
<img alt="First slide" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/11.jpg"/>
</div>
<div class="carousel-item">
<img alt="Second slide" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/06.jpg"/>
</div>
<div class="carousel-item">
<img alt="Third slide" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/01.jpg"/>
</div>
</div>
<a class="carousel-control-prev" data-slide="prev" href="component-carousel.html#carousel-keyboard" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" data-slide="next" href="component-carousel.html#carousel-keyboard" role="button">
<span aria-hidden="true" class="carousel-control-next-icon"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Carousel Options end -->
</div>
</div>
</div>