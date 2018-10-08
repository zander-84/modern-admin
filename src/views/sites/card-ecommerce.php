<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\CardEcommerceAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Advance E-commerce Cards</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="card-ecommerce.html#">Components</a>
</li>
<li class="breadcrumb-item active">E-commerce Cards
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="card-ecommerce.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="card-ecommerce.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="card-ecommerce.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="card-ecommerce.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- E-commerce section start -->
<section id="ecommerce-stats">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">E-Commerce Analytics</h4>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card text-white bg-success bg-lighten-1">
<div class="card-header">
<h4 class="card-title text-white">Top Selling Phones</h4>
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
<div class="height-400 echart-container" id="doughnut"></div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card text-white bg-danger bg-lighten-1">
<div class="card-header">
<h4 class="card-title text-white">Customer Browser's Stats</h4>
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
<div class="height-400 echart-container" id="timeline"></div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<!-- Nightingale Rose With Labels Chart -->
<div class="col-md-6 col-sm-12">
<div class="card bg-blue-grey bg-lighten-1 text-white">
<div class="card-header">
<h4 class="card-title text-white">Monthly Sales</h4>
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
<div class="height-400 echart-container" id="nightingale-rose-labels"></div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Recent Buyers</h4>
<a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="media-list" id="recent-buyers">
<a class="media border-0" href="card-ecommerce.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md avatar-online">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png"/>
<i></i>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Kristopher Candy
                          <span class="font-medium-4 float-right pt-1">$1,021</span>
</h6>
<p class="list-group-item-text mb-0">
<span class="badge badge-primary">Electronics</span>
<span class="badge badge-warning ml-1">Decor</span>
</p>
</div>
</a>
<a class="media border-0" href="card-ecommerce.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md avatar-away">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-8.png"/>
<i></i>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Lawrence Fowler
                          <span class="font-medium-4 float-right pt-1">$2,021</span>
</h6>
<p class="list-group-item-text mb-0">
<span class="badge badge-danger">Appliances</span>
</p>
</div>
</a>
<a class="media border-0" href="card-ecommerce.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md avatar-busy">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-9.png"/>
<i></i>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Linda Olson
                          <span class="font-medium-4 float-right pt-1">$1,112</span>
</h6>
<p class="list-group-item-text mb-0">
<span class="badge badge-primary">Electronics</span>
<span class="badge badge-success ml-1">Office</span>
</p>
</div>
</a>
<a class="media border-0" href="card-ecommerce.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md avatar-online">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-10.png"/>
<i></i>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Roy Clark
                          <span class="font-medium-4 float-right pt-1">$2,815</span>
</h6>
<p class="list-group-item-text mb-0">
<span class="badge badge-warning">Decor</span>
<span class="badge badge-danger ml-1">Appliances</span>
</p>
</div>
</a>
<a class="media border-0" href="card-ecommerce.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md avatar-online">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-11.png"/>
<i></i>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Kristopher Candy
                          <span class="font-medium-4 float-right pt-1">$2,021</span>
</h6>
<p class="list-group-item-text mb-0">
<span class="badge badge-primary">Electronics</span>
<span class="badge badge-warning ml-1">Decor</span>
</p>
</div>
</a>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // E-commerce section end -->
<!-- Shopping cards section start -->
<section id="shopping-cards">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Shopping Cards</h4>
</div>
</div>
<div class="row match-height">
<div class="col-lg-4 col-md-12">
<div class="card text-center">
<div class="card-content">
<img alt="Card image cap" class="card-img-top img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/24.png"/>
<div class="card-body">
<h4 class="card-title">Formal Shoes</h4>
<p class="card-text">Some quick example text.</p>
<div aria-label="Basic example" class="btn-group" role="group">
<span class="btn btn-outline-blue-grey">$159</span>
<button class="btn btn-outline-blue-grey" type="button">Shop Now <i class="ft-shopping-cart"></i></button>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="card">
<div class="card-content">
<img alt="Card image cap" class="card-img-top img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/25.jpg"/>
<div class="card-body">
<h4 class="card-title">Smart Wearable</h4>
<p class="card-text">Oat cake ice cream candy chocolate cake chocolate cake cotton
                      candy.
                    </p>
</div>
</div>
<div class="card-footer text-muted">
<span class="float-left">$349</span>
<span class="float-right">Add To Cart <i class="la la-cart-plus"></i></span>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="card">
<div class="card-content">
<img alt="Card image cap" class="card-img-top img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/22.jpg"/>
<div class="card-body">
<h4 class="card-title">Sunglass</h4>
<p class="card-text">Some quick example text.</p>
</div>
</div>
<div class="card-footer text-muted mt-2">
<span class="float-left">
<del class="grey">$99</del>
<span class="ml-1">$49</span>
</span>
<span class="float-right"><i class="la la-heart-o"></i> Like</span>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-4 col-lg-12">
<div class="card text-center">
<div class="card-content">
<img alt="Card image cap" class="card-img-top img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/26.jpg"/>
<div class="card-body">
<h4 class="card-title">Running Shoes</h4>
</div>
</div>
</div>
</div>
<div class="col-xl-8 col-lg-12">
<div class="card text-white bg-gradient-y-pink text-center">
<div class="card-content">
<img alt="Relax" class="float-right pr-3 img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/29.png" width="600"/>
<div class="card-body pt-3">
<h4 class="card-title mt-3 text-white">Brand Minute</h4>
<p class="card-text ">Donut toffee</p>
<button class="btn bg-white bg-darken-3 pink">Buy Now</button>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-4 col-lg-6">
<div class="card">
<div class="card-content">
<div class="card-body text-center">
<p class="text-uppercase">You Are Purchasing</p>
<h3 class="text-uppercase">Apple Watch</h3>
<div class="rating">
<i class="la la-star"></i>
<i class="la la-star"></i>
<i class="la la-star"></i>
<i class="la la-star"></i>
<i class="la la-star-half-o"></i>
</div>
<img alt="apple-watch" class="img-fluid p-2" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/apple-watch.png" width="250px"/>
<button class="btn btn-success btn-block btn-glow text-uppercase p-1" type="button">Purchase</button>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6">
<div class="card">
<div class="card-content">
<div class="card-body text-center">
<p class="text-uppercase">You Are Purchasing</p>
<h3 class="text-uppercase">Fitbit Watch</h3>
<div class="rating">
<i class="la la-star"></i>
<i class="la la-star"></i>
<i class="la la-star"></i>
<i class="la la-star"></i>
<i class="la la-star-half-o"></i>
</div>
<img alt="apple-watch" class="img-fluid p-2" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/fitbit-watch.png" width="250px"/>
<button class="btn btn-danger btn-block btn-glow text-uppercase p-1" type="button">Purchase</button>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6">
<div class="card">
<div class="card-content">
<div class="card-body text-center">
<p class="text-uppercase">You Are Purchasing</p>
<h3 class="text-uppercase">Samsung Gear s2</h3>
<div class="rating">
<i class="la la-star"></i>
<i class="la la-star"></i>
<i class="la la-star"></i>
<i class="la la-star"></i>
<i class="la la-star-half-o"></i>
</div>
<img alt="apple-watch" class="img-fluid p-2" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/samsung-gear.png" width="250px"/>
<button class="btn btn-warning btn-block btn-glow text-uppercase p-1" type="button">Purchase</button>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-8 col-md-12">
<div class="card">
<div class="card-content">
<div class="card-body p-0">
<div class="row">
<div class="col-xl-6 col-md-12 p-2 pl-3">
<div class="">
<h2>Unique Furniture</h2>
<div class="rating warning mb-1">
<i class="la la-star"></i>
<i class="la la-star"></i>
<i class="la la-star"></i>
<i class="la la-star"></i>
<i class="la la-star-half-o"></i> 1290 review
                          </div>
<p>Nteresting furniture design from a man with an interesting
                            background: Alain Gilles is an banker who quit finance
                            to study industrial design.
                          </p>
<p>Since opening his studio he's worked banker who quit finance
                            to study industrial design..</p>
</div>
<h2 class="py-2">$329.00</h2>
<button class="btn btn-warning btn-block btn-glow text-uppercase p-1" type="button">Purchase</button>
</div>
<div class="col-xl-6 col-md-12 p-0">
<div class="carousel slide" data-ride="carousel" id="carouselExampleSlidesOnly">
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-100" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/34.png"/>
</div>
<div class="carousel-item">
<img alt="First slide" class="d-block w-100" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/35.png"/>
</div>
<div class="carousel-item">
<img alt="First slide" class="d-block w-100" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/36.png"/>
</div>
<div class="carousel-item">
<img alt="First slide" class="d-block w-100" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/37.png"/>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6">
<div class="card">
<div class="card-content">
<div class="card-body text-center bg-danger p-0">
<h2 class="text-white pt-1">IPHONE X</h2>
<img alt="First slide" class="mx-auto d-block pt-1" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/icons/iphone.png" width="120px;"/>
<h2 class="text-white py-1 m-0">$999</h2>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-4 col-lg-6">
<div class="card">
<div class="card-content">
<div class="card-body p-0">
<div class="bg-warning bg-darken-2 pl-2 pr-2 pt-2 text-white">
<img src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/icons/nike.png" width="40px"/>
<h3 class="text-white pt-2">HARTBEESPOORT</h3>
<p class="m-0">Support and Nike Zoom Air come together for a more supportive
                        feel.
                      </p>
<img alt="Relax" class="float-right img-fluid card-image-position-right" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/sws.png" width="500"/>
<h1 class="card-font-style-black">FAS</h1>
</div>
<div class="card-body p-2">
<h5>HARTBEE<b>SPOORT</b>
<span class="badge badge-success">New</span>
</h5>
<p class="m-0">BASKET BALL COLLECTION</p>
<div class="rating">
<i class="la la-star"></i>
<i class="la la-star"></i>
<i class="la la-star"></i>
<i class="la la-star"></i>
<i class="la la-star-half-o"></i>
</div>
<p class="mt-1">Size</p>
<span>7</span>
<span class="ml-2 badge badge badge-warning badge-glow badge-pill">8</span>
<span class="ml-2">9</span>
<span class="ml-2">10</span>
<span class="ml-2">11</span>
<span class="ml-2">12</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-6 offset-xl-1">
<div class="card">
<div class="card-content">
<div class="card-body p-0">
<div class="bg-black pl-2 pr-2 pt-2 text-white">
<img src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/icons/nike.png" width="40px"/>
<h3 class="text-white text-uppercase pt-2">Virtual Reality</h3>
<p class="m-0">Virtual reality is a computer technology that uses virtual
                        reality headsets or multi-projected environments, sometimes
                        in combination with physical environments or props,</p>
<img alt="Relax" class="float-right img-fluid card-image-position-right-mid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/vr.png" width="600"/>
<h1 class="card-font-style-white">SMART</h1>
</div>
<div class="card-body p-2">
<h5>HARTBEE<b>SPOORT</b>
<span class="badge badge-success">New</span>
</h5>
<p class="m-0">BASKET BALL COLLECTION</p>
<div class="rating">
<i class="la la-star"></i>
<i class="la la-star"></i>
<i class="la la-star"></i>
<i class="la la-star"></i>
<i class="la la-star-half-o"></i>
</div>
<p class="mt-1">Size</p>
<span>7</span>
<span class="ml-2 badge badge badge-danger badge-glow badge-pill">8</span>
<span class="ml-2">9</span>
<span class="ml-2">10</span>
<span class="ml-2">11</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Shopping cards section end -->
</div>
