<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ComponentMediaObjectsAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Media Objects</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="component-media-objects.html#">Components</a>
</li>
<li class="breadcrumb-item active">Media Objects
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="component-media-objects.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="component-media-objects.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="component-media-objects.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="component-media-objects.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Default Media Object start -->
<section id="basic-media-object">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Default Media Object</h4>
<p>The default media allow to float a media object (images, video, audio)
                to the left or right of a content block.</p>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Left Aligned Media Objects</h4>
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
<div class="media-list">
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-3.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h4 class="media-heading">Cookie candy</h4>
                          Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon
                          gummi bears apple pie. Brownie lemon drops chocolate cake
                          donut croissant cotton candy.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-6.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h4 class="media-heading">Tootsie roll dessert </h4>
                          Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o
                          bear claw bear claw halvah. Biscuit icing pastry tootsie
                          roll gingerbread croissant chupa chups.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-13.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h4 class="media-heading">Lemon drops ice cream</h4>
                          Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy
                          cheesecake tootsie roll. Candy sweet cake. Tiramisu cookie
                          toffee donut.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Left Media With Right Text</h4>
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
<div class="media-list">
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-10.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body text-right">
<h4 class="media-heading">Oat cake </h4>
                          Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake.
                          Tiramisu cookie toffee donut. Chocolate pie croissant gummi
                          bears muffin dessert chocolate.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body text-right">
<h4 class="media-heading">Jelly chocolate cake</h4>
                          Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake
                          jelly beans marzipan sesame snaps.Jelly beans cake chocolate
                          cake gummi bears lollipop.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-2.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body text-right">
<h4 class="media-heading">Pudding marshmallow</h4>
                          Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream
                          sugar plum biscuit. Lemon drops brownie biscuit jelly-o
                          biscuit gummies.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Right Aligned Media Objects</h4>
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
<div class="media-list">
<div class="media">
<div class="media-body">
<h4 class="media-heading">Chocolate sweet</h4>
                          Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon
                          gummi bears apple pie. Brownie lemon drops chocolate cake
                          donut croissant cotton candy.
                        </div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png" style="width: 64px;height: 64px;"/>
</a>
</div>
<div class="media">
<div class="media-body">
<h4 class="media-heading">Sugar plum jelly</h4>
                          Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o
                          bear claw bear claw halvah. Biscuit icing pastry tootsie
                          roll gingerbread croissant chupa chups.
                        </div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-16.png" style="width: 64px;height: 64px;"/>
</a>
</div>
<div class="media">
<div class="media-body">
<h4 class="media-heading">Gingerbread sugar</h4>
                          Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy
                          cheesecake tootsie roll. Candy sweet cake. Tiramisu cookie
                          toffee donut.
                        </div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-6.png" style="width: 64px;height: 64px;"/>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Right Media With Right Text</h4>
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
<div class="media-list">
<div class="media">
<div class="media-body text-right">
<h4 class="media-heading">Chupa chups candy</h4>
                          Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake.
                          Tiramisu cookie toffee donut. Chocolate pie croissant gummi
                          bears muffin dessert chocolate.
                        </div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-5.png" style="width: 64px;height: 64px;"/>
</a>
</div>
<div class="media">
<div class="media-body text-right">
<h4 class="media-heading">Chocolate pudding</h4>
                          Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake
                          jelly beans marzipan sesame snaps.Jelly beans cake chocolate
                          cake gummi bears lollipop.
                        </div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-11.png" style="width: 64px;height: 64px;"/>
</a>
</div>
<div class="media">
<div class="media-body text-right">
<h4 class="media-heading">Cotton candy jelly</h4>
                          Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream
                          sugar plum biscuit. Lemon drops brownie biscuit jelly-o
                          biscuit gummies.
                        </div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-20.png" style="width: 64px;height: 64px;"/>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Default Media Object end -->
<!-- Bordered Media Object start -->
<section id="bordered-media-object">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Bordered Media Object</h4>
<p>Wrap media list using <code>.media-bordered</code> class for bordered
                Media Object.</p>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Left Aligned Media Bordered</h4>
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
<div class="media-list media-bordered">
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-23.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h4 class="media-heading">Cookie candy</h4>
                          Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon
                          gummi bears apple pie. Brownie lemon drops chocolate cake
                          donut croissant cotton candy.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-16.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h4 class="media-heading">Tootsie roll dessert </h4>
                          Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o
                          bear claw bear claw halvah. Biscuit icing pastry tootsie
                          roll gingerbread croissant chupa chups.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-15.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h4 class="media-heading">Lemon drops ice cream</h4>
                          Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy
                          cheesecake tootsie roll. Candy sweet cake. Tiramisu cookie
                          toffee donut.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Bordered Media</h4>
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
<div class="media-list media-bordered">
<div class="media">
<div class="media-body text-right">
<h4 class="media-heading">Chupa chups candy</h4>
                          Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake.
                          Tiramisu cookie toffee donut. Chocolate pie croissant gummi
                          bears muffin dessert chocolate.
                        </div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-9.png" style="width: 64px;height: 64px;"/>
</a>
</div>
<div class="media">
<div class="media-body text-right">
<h4 class="media-heading">Chocolate pudding</h4>
                          Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake
                          jelly beans marzipan sesame snaps.Jelly beans cake chocolate
                          cake gummi bears lollipop.
                        </div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-14.png" style="width: 64px;height: 64px;"/>
</a>
</div>
<div class="media">
<div class="media-body text-right">
<h4 class="media-heading">Cotton candy jelly</h4>
                          Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream
                          sugar plum biscuit. Lemon drops brownie biscuit jelly-o
                          biscuit gummies.
                        </div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-21.png" style="width: 64px;height: 64px;"/>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Bordered Media Object end -->
<!-- Media Object With Header start -->
<section id="media-object-with-header">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Media Object with Header</h4>
<p>Use class <code>.media-head</code> inside <code>.media</code> class.</p>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Media with Header</h4>
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
<div class="media-list media-bordered">
<div class="media">
<h4 class="media-head text-uppercase">Header Section</h4>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-13.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h4 class="media-heading">Cookie candy</h4>
                          Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon
                          gummi bears apple pie. Brownie lemon drops chocolate cake
                          donut croissant cotton candy.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-10.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h4 class="media-heading">Tootsie roll dessert </h4>
                          Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o
                          bear claw bear claw halvah. Biscuit icing pastry tootsie
                          roll gingerbread croissant chupa chups.
                        </div>
</div>
<div class="media">
<h4 class="media-head text-uppercase">Another Header Section</h4>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-5.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h4 class="media-heading">Lemon drops ice cream</h4>
                          Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy
                          cheesecake tootsie roll. Candy sweet cake. Tiramisu cookie
                          toffee donut.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Media With Header</h4>
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
<div class="media-list media-bordered">
<div class="media">
<h4 class="media-head text-uppercase text-right">Header Section</h4>
</div>
<div class="media">
<div class="media-body text-right">
<h4 class="media-heading">Chupa chups candy</h4>
                          Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake.
                          Tiramisu cookie toffee donut. Chocolate pie croissant gummi
                          bears muffin dessert chocolate.
                        </div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-19.png" style="width: 64px;height: 64px;"/>
</a>
</div>
<div class="media">
<div class="media-body text-right">
<h4 class="media-heading">Chocolate pudding</h4>
                          Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake
                          jelly beans marzipan sesame snaps.Jelly beans cake chocolate
                          cake gummi bears lollipop.
                        </div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-17.png" style="width: 64px;height: 64px;"/>
</a>
</div>
<div class="media">
<h4 class="media-head text-uppercase text-right">Another Header Section</h4>
</div>
<div class="media">
<div class="media-body text-right">
<h4 class="media-heading">Cotton candy jelly</h4>
                          Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream
                          sugar plum biscuit. Lemon drops brownie biscuit jelly-o
                          biscuit gummies.
                        </div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-8.png" style="width: 64px;height: 64px;"/>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Media Object With Header end -->
<!-- Round Media Object start -->
<section id="round-media-object">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Round Media Object</h4>
<p>Add <code>.rounded-circle</code> class to image for round media object.</p>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Left Round Media Objects</h4>
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
<div class="media-list">
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-3.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h4 class="media-heading">Cookie candy</h4>
                          Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon
                          gummi bears apple pie. Brownie lemon drops chocolate cake
                          donut croissant cotton candy.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-6.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h4 class="media-heading">Tootsie roll dessert </h4>
                          Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o
                          bear claw bear claw halvah. Biscuit icing pastry tootsie
                          roll gingerbread croissant chupa chups.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-13.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h4 class="media-heading">Lemon drops ice cream</h4>
                          Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy
                          cheesecake tootsie roll. Candy sweet cake. Tiramisu cookie
                          toffee donut.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Right Round Media</h4>
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
<div class="media-list">
<div class="media">
<div class="media-body text-right">
<h4 class="media-heading">Oat cake </h4>
                          Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake.
                          Tiramisu cookie toffee donut. Chocolate pie croissant gummi
                          bears muffin dessert chocolate.
                        </div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-10.png" style="width: 64px;height: 64px;"/>
</a>
</div>
<div class="media">
<div class="media-body text-right">
<h4 class="media-heading">Jelly chocolate cake</h4>
                          Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake
                          jelly beans marzipan sesame snaps.Jelly beans cake chocolate
                          cake gummi bears lollipop.
                        </div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png" style="width: 64px;height: 64px;"/>
</a>
</div>
<div class="media">
<div class="media-body text-right">
<h4 class="media-heading">Pudding marshmallow</h4>
                          Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream
                          sugar plum biscuit. Lemon drops brownie biscuit jelly-o
                          biscuit gummies.
                        </div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-2.png" style="width: 64px;height: 64px;"/>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Round Media Object end -->
<!-- Bordered Round Media Object start -->
<section id="bordered-round-media-object">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Bordered Round Media Object</h4>
<p>Wrap media list using <code>.media-bordered</code> class for bordered
                Media Object.</p>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Bordered Round Media Objects</h4>
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
<div class="media-list media-bordered">
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-13.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h4 class="media-heading">Cookie candy</h4>
                          Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon
                          gummi bears apple pie. Brownie lemon drops chocolate cake
                          donut croissant cotton candy.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-16.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h4 class="media-heading">Tootsie roll dessert </h4>
                          Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o
                          bear claw bear claw halvah. Biscuit icing pastry tootsie
                          roll gingerbread croissant chupa chups.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-22.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h4 class="media-heading">Lemon drops ice cream</h4>
                          Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy
                          cheesecake tootsie roll. Candy sweet cake. Tiramisu cookie
                          toffee donut.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Bordered Round Media With Right Align</h4>
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
<div class="media-list media-bordered">
<div class="media">
<div class="media-body text-right">
<h4 class="media-heading">Oat cake </h4>
                          Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake.
                          Tiramisu cookie toffee donut. Chocolate pie croissant gummi
                          bears muffin dessert chocolate.
                        </div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-17.png" style="width: 64px;height: 64px;"/>
</a>
</div>
<div class="media">
<div class="media-body text-right">
<h4 class="media-heading">Jelly chocolate cake</h4>
                          Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake
                          jelly beans marzipan sesame snaps.Jelly beans cake chocolate
                          cake gummi bears lollipop.
                        </div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-2.png" style="width: 64px;height: 64px;"/>
</a>
</div>
<div class="media">
<div class="media-body text-right">
<h4 class="media-heading">Pudding marshmallow</h4>
                          Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream
                          sugar plum biscuit. Lemon drops brownie biscuit jelly-o
                          biscuit gummies.
                        </div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png" style="width: 64px;height: 64px;"/>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Bordered Round Media Object end -->
<!-- Round Media Object with Header start -->
<section id="round-media-object-with-header">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Round Media Object with Header</h4>
<p>Use class <code>.media-head</code> inside <code>.media</code> class.</p>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Round Media with Header</h4>
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
<div class="media-list media-bordered">
<div class="media">
<h4 class="media-head text-uppercase">Header Section</h4>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-23.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h4 class="media-heading">Cookie candy</h4>
                          Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon
                          gummi bears apple pie. Brownie lemon drops chocolate cake
                          donut croissant cotton candy.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-9.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h4 class="media-heading">Tootsie roll dessert </h4>
                          Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o
                          bear claw bear claw halvah. Biscuit icing pastry tootsie
                          roll gingerbread croissant chupa chups.
                        </div>
</div>
<div class="media">
<h4 class="media-head text-uppercase">Another Header</h4>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-11.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h4 class="media-heading">Lemon drops ice cream</h4>
                          Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy
                          cheesecake tootsie roll. Candy sweet cake. Tiramisu cookie
                          toffee donut.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Round Media With Right Header</h4>
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
<div class="media-list media-bordered">
<div class="media text-right">
<h4 class="media-head text-uppercase">Heading Section</h4>
</div>
<div class="media">
<div class="media-body">
<h4 class="media-heading">Oat cake </h4>
                          Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake.
                          Tiramisu cookie toffee donut. Chocolate pie croissant gummi
                          bears muffin dessert chocolate.
                        </div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-14.png" style="width: 64px;height: 64px;"/>
</a>
</div>
<div class="media">
<div class="media-body">
<h4 class="media-heading">Jelly chocolate cake</h4>
                          Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake
                          jelly beans marzipan sesame snaps.Jelly beans cake chocolate
                          cake gummi bears lollipop.
                        </div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-12.png" style="width: 64px;height: 64px;"/>
</a>
</div>
<div class="media text-right">
<h4 class="media-head text-uppercase">Another Heading</h4>
</div>
<div class="media">
<div class="media-body">
<h4 class="media-heading">Pudding marshmallow</h4>
                          Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream
                          sugar plum biscuit. Lemon drops brownie biscuit jelly-o
                          biscuit gummies.
                        </div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-17.png" style="width: 64px;height: 64px;"/>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Round Media Object with Header end -->
<!-- Media Title Options start -->
<section id="media-title-options">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Media Title Options</h4>
<p>Find different options for media title.</p>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Simple Title</h4>
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
<div class="media-list media-bordered">
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-13.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<div class="media-heading text-bold-600">Cookie candy</div>
                          Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon
                          gummi bears apple pie. Brownie lemon drops chocolate cake
                          donut croissant cotton candy.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-19.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<div class="media-heading text-bold-600">Tootsie roll dessert </div>
                          Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o
                          bear claw bear claw halvah. Biscuit icing pastry tootsie
                          roll gingerbread croissant chupa chups.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-21.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<div class="media-heading text-bold-600">Lemon drops ice cream</div>
                          Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy
                          cheesecake tootsie roll. Candy sweet cake. Tiramisu cookie
                          toffee donut.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Round Media With Simple Title</h4>
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
<div class="media-list media-bordered">
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-24.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<div class="media-heading text-bold-600">Oat cake </div>
                          Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake.
                          Tiramisu cookie toffee donut. Chocolate pie croissant gummi
                          bears muffin dessert chocolate.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-2.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<div class="media-heading text-bold-600">Jelly chocolate cake</div>
                          Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake
                          jelly beans marzipan sesame snaps.Jelly beans cake chocolate
                          cake gummi bears lollipop.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<div class="media-heading text-bold-600">Pudding marshmallow</div>
                          Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream
                          sugar plum biscuit. Lemon drops brownie biscuit jelly-o
                          biscuit gummies.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Linked Title</h4>
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
<div class="media-list media-bordered">
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-3.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<div class="media-heading text-bold-600"><a href="component-media-objects.html#">Cookie candy</a></div>
                          Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon
                          gummi bears apple pie. Brownie lemon drops chocolate cake
                          donut croissant cotton candy.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-20.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<div class="media-heading text-bold-600"><a href="component-media-objects.html#">Tootsie roll dessert </a></div>
                          Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o
                          bear claw bear claw halvah. Biscuit icing pastry tootsie
                          roll gingerbread croissant chupa chups.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-10.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<div class="media-heading text-bold-600"><a href="component-media-objects.html#">Lemon drops ice cream</a></div>
                          Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy
                          cheesecake tootsie roll. Candy sweet cake. Tiramisu cookie
                          toffee donut.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Round Media With Linked Title</h4>
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
<div class="media-list media-bordered">
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-4.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<div class="media-heading text-bold-600"><a href="component-media-objects.html#">Oat cake </a></div>
                          Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake.
                          Tiramisu cookie toffee donut. Chocolate pie croissant gummi
                          bears muffin dessert chocolate.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-19.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<div class="media-heading text-bold-600"><a href="component-media-objects.html#">Jelly chocolate cake</a></div>
                          Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake
                          jelly beans marzipan sesame snaps.Jelly beans cake chocolate
                          cake gummi bears lollipop.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-16.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<div class="media-heading text-bold-600"><a href="component-media-objects.html#">Pudding marshmallow</a></div>
                          Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream
                          sugar plum biscuit. Lemon drops brownie biscuit jelly-o
                          biscuit gummies.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Title Using Headings</h4>
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
<div class="media-list media-bordered">
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-13.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading">Cookie candy</h5>
                          Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon
                          gummi bears apple pie. Brownie lemon drops chocolate cake
                          donut croissant cotton candy.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-19.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading">Tootsie roll dessert </h5>
                          Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o
                          bear claw bear claw halvah. Biscuit icing pastry tootsie
                          roll gingerbread croissant chupa chups.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-21.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading">Lemon drops ice cream</h5>
                          Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy
                          cheesecake tootsie roll. Candy sweet cake. Tiramisu cookie
                          toffee donut.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Round Media With Headings</h4>
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
<div class="media-list media-bordered">
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-24.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading">Oat cake </h5>
                          Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake.
                          Tiramisu cookie toffee donut. Chocolate pie croissant gummi
                          bears muffin dessert chocolate.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-2.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading">Jelly chocolate cake</h5>
                          Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake
                          jelly beans marzipan sesame snaps.Jelly beans cake chocolate
                          cake gummi bears lollipop.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading">Pudding marshmallow</h5>
                          Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream
                          sugar plum biscuit. Lemon drops brownie biscuit jelly-o
                          biscuit gummies.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Linked Headings</h4>
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
<div class="media-list media-bordered">
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-3.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading"><a href="component-media-objects.html#">Cookie candy</a></h5>
                          Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon
                          gummi bears apple pie. Brownie lemon drops chocolate cake
                          donut croissant cotton candy.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-20.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading"><a href="component-media-objects.html#">Tootsie roll dessert </a></h5>
                          Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o
                          bear claw bear claw halvah. Biscuit icing pastry tootsie
                          roll gingerbread croissant chupa chups.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-10.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading"><a href="component-media-objects.html#">Lemon drops ice cream</a></h5>
                          Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy
                          cheesecake tootsie roll. Candy sweet cake. Tiramisu cookie
                          toffee donut.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Linked Headings</h4>
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
<div class="media-list media-bordered">
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-4.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading"><a href="component-media-objects.html#">Oat cake </a></h5>
                          Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake.
                          Tiramisu cookie toffee donut. Chocolate pie croissant gummi
                          bears muffin dessert chocolate.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-19.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading"><a href="component-media-objects.html#">Jelly chocolate cake</a></h5>
                          Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake
                          jelly beans marzipan sesame snaps.Jelly beans cake chocolate
                          cake gummi bears lollipop.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-16.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading"><a href="component-media-objects.html#">Pudding marshmallow</a></h5>
                          Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream
                          sugar plum biscuit. Lemon drops brownie biscuit jelly-o
                          biscuit gummies.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Colored Title</h4>
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
<div class="media-list media-bordered">
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-11.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading"><a class="success" href="component-media-objects.html#">Cookie candy</a></h5>
                          Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon
                          gummi bears apple pie. Brownie lemon drops chocolate cake
                          donut croissant cotton candy.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-9.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading"><a class="danger" href="component-media-objects.html#">Tootsie roll dessert </a></h5>
                          Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o
                          bear claw bear claw halvah. Biscuit icing pastry tootsie
                          roll gingerbread croissant chupa chups.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading"><a class="brown" href="component-media-objects.html#">Lemon drops ice cream</a></h5>
                          Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy
                          cheesecake tootsie roll. Candy sweet cake. Tiramisu cookie
                          toffee donut.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Round Media With Colored Title</h4>
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
<div class="media-list media-bordered">
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-4.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading"><a class="warning" href="component-media-objects.html#">Oat cake </a></h5>
                          Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake.
                          Tiramisu cookie toffee donut. Chocolate pie croissant gummi
                          bears muffin dessert chocolate.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-22.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading"><a class="info" href="component-media-objects.html#">Jelly chocolate cake</a></h5>
                          Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake
                          jelly beans marzipan sesame snaps.Jelly beans cake chocolate
                          cake gummi bears lollipop.
                        </div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-6.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading"><a class="purple" href="component-media-objects.html#">Pudding marshmallow</a></h5>
                          Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream
                          sugar plum biscuit. Lemon drops brownie biscuit jelly-o
                          biscuit gummies.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Media Title Options end -->
<!-- Media Text Option start -->
<section id="media-text-option">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Media Text Option</h4>
<p>Use class <code>.text-muted</code> for muted media text.</p>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Muted Text</h4>
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
<div class="media-list media-bordered">
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-13.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading"><a href="component-media-objects.html#">Cookie candy</a></h5>
<span class="text-muted">Cookie candy dragée marzipan gingerbread pie pudding. Brownie
                            fruitcake wafer bonbon gummi bears apple pie. Brownie
                            lemon drops chocolate cake donut croissant cotton candy.</span>
</div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-10.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading"><a href="component-media-objects.html#">Tootsie roll dessert </a></h5>
<span class="text-muted">Tootsie roll dessert tart candy canes ice cream gingerbread
                            cookie. Jelly jelly-o bear claw bear claw halvah. Biscuit
                            icing pastry tootsie roll gingerbread croissant chupa
                            chups. </span>
</div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-5.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading"><a href="component-media-objects.html#">Lemon drops ice cream</a></h5>
<span class="text-muted">Lemon drops ice cream chocolate cake marzipan ice cream.
                            Gummi bears cotton candy cheesecake tootsie roll. Candy
                            sweet cake. Tiramisu cookie toffee donut.</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Round Media With Muted Text</h4>
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
<div class="media-list media-bordered">
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-8.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading"><a href="component-media-objects.html#">Oat cake </a></h5>
<span class="text-muted">Oat cake topping oat cake jelly soufflé donut jelly-o tootsie
                            roll. Candy sweet cake. Tiramisu cookie toffee donut.
                            Chocolate pie croissant gummi bears muffin dessert chocolate.</span>
</div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-13.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading"><a href="component-media-objects.html#">Jelly chocolate cake</a></h5>
<span class="text-muted">Jelly chocolate cake lemon drops halvah dragée caramels
                            jelly-o biscuit. Fruitcake jelly beans marzipan sesame
                            snaps.Jelly beans cake chocolate cake gummi bears lollipop.</span>
</div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-21.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading"><a href="component-media-objects.html#">Pudding marshmallow</a></h5>
<span class="text-muted">Pudding marshmallow cheesecake. Chocolate cake apple pie
                            jelly-o bear claw ice cream sugar plum biscuit. Lemon
                            drops brownie biscuit jelly-o biscuit gummies.</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Media Text Option end -->
<!-- Linked Media List start -->
<section id="linked-media-list">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Linked Media List</h4>
<p>Wrap <code>.media</code> with <code>.media-linked</code> and use <code>&lt;a&gt;</code>                tag which contains <code>.media-link</code> to wrap image, title
                &amp; text.</p>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Linked Media List</h4>
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
<div class="media-list media-bordered media-linked">
<div class="media">
<a class="media-link" href="component-media-objects.html#">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-3.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">Cookie candy</h5>
                            Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon
                            gummi bears apple pie. Brownie lemon drops chocolate
                            cake donut croissant cotton candy.
                          </div>
</a>
</div>
<div class="media">
<a class="media-link" href="component-media-objects.html#">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-6.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">Tootsie roll dessert</h5>
                            Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o
                            bear claw bear claw halvah. Biscuit icing pastry tootsie
                            roll gingerbread croissant chupa chups.
                          </div>
</a>
</div>
<div class="media">
<a class="media-link" href="component-media-objects.html#">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-15.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">Lemon drops ice cream</h5>
                            Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy
                            cheesecake tootsie roll. Candy sweet cake. Tiramisu cookie
                            toffee donut.
                          </div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Using Round Media</h4>
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
<div class="media-list media-bordered media-linked">
<div class="media">
<a class="media-link" href="component-media-objects.html#">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-18.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">Oat cake </h5>
                            Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake.
                            Tiramisu cookie toffee donut. Chocolate pie croissant
                            gummi bears muffin dessert chocolate.
                          </div>
</a>
</div>
<div class="media">
<a class="media-link" href="component-media-objects.html#">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-23.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">Jelly chocolate cake</h5>
                            Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake
                            jelly beans marzipan sesame snaps.Jelly beans cake chocolate
                            cake gummi bears lollipop.
                          </div>
</a>
</div>
<div class="media">
<a class="media-link" href="component-media-objects.html#">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-20.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">Pudding marshmallow</h5>
                            Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream
                            sugar plum biscuit. Lemon drops brownie biscuit jelly-o
                            biscuit gummies.
                          </div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">With Header</h4>
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
<div class="media-list media-bordered media-linked">
<div class="media">
<h4 class="media-head text-uppercase">Header Section</h4>
</div>
<div class="media">
<a class="media-link" href="component-media-objects.html#">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-11.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">Cookie candy</h5>
                            Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon
                            gummi bears apple pie. Brownie lemon drops chocolate
                            cake donut croissant cotton candy.
                          </div>
</a>
</div>
<div class="media">
<a class="media-link" href="component-media-objects.html#">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-17.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">Tootsie roll dessert</h5>
                            Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o
                            bear claw bear claw halvah. Biscuit icing pastry tootsie
                            roll gingerbread croissant chupa chups.
                          </div>
</a>
</div>
<div class="media">
<h4 class="media-head text-uppercase">Another Header</h4>
</div>
<div class="media">
<a class="media-link" href="component-media-objects.html#">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">Lemon drops ice cream</h5>
                            Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy
                            cheesecake tootsie roll. Candy sweet cake. Tiramisu cookie
                            toffee donut.
                          </div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Round Media With Header</h4>
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
<div class="media-list media-bordered media-linked">
<div class="media">
<h4 class="media-head text-uppercase">Header Section</h4>
</div>
<div class="media">
<a class="media-link" href="component-media-objects.html#">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-9.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">Oat cake </h5>
                            Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake.
                            Tiramisu cookie toffee donut. Chocolate pie croissant
                            gummi bears muffin dessert chocolate.
                          </div>
</a>
</div>
<div class="media">
<a class="media-link" href="component-media-objects.html#">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-5.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">Jelly chocolate cake</h5>
                            Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake
                            jelly beans marzipan sesame snaps.Jelly beans cake chocolate
                            cake gummi bears lollipop.
                          </div>
</a>
</div>
<div class="media">
<h4 class="media-head text-uppercase">Another Header</h4>
</div>
<div class="media">
<a class="media-link" href="component-media-objects.html#">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-2.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">Pudding marshmallow</h5>
                            Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream
                            sugar plum biscuit. Lemon drops brownie biscuit jelly-o
                            biscuit gummies.
                          </div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Linked Media List end -->
<!-- Media Alignment start -->
<section id="media-alignment">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Media Alignment</h4>
<p>The images or other media can be aligned top, middle, or bottom. The
                default is top aligned.</p>
<p>For left align, use class <code>.media-left</code>, For Right align,
                use class <code>.media-right</code>.</p>
<p>Now, for vertical alignment. For Top alignment, use <code>.align-self-start</code>                class. For Middle alignment, use <code>.align-self-center</code>                and For Bottom alignment, use <code>.align-self-end</code> with left
                or right aligned class.</p>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Media Aligned Left</h4>
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
<div class="media-list media-bordered">
<div class="media">
<a class="media-left align-self-start" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-4.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading">Top Aligned Media</h5>
                          Chocolate bar apple pie lollipop pastry candy canes. Candy soufflé brownie toffee
                          tootsie roll. Brownie lemon drops chocolate cake donut
                          croissant cotton candy ice cream.
                          <br/> Chocolate pudding jelly beans powder carrot cake pastry.
                          Sweet candy dragée cake brownie cheesecake jelly beans
                          tart lemon drops. Liquorice cake fruitcake dragée sesame
                          snaps candy canes biscuit pastry.
                          <br/> Cookie caramels brownie carrot cake macaroon brownie pastry.
                          Donut powder croissant tootsie roll cake cupcake. Cake
                          tart icing jelly-o ice cream tootsie roll bear claw toffee
                          brownie. Sugar plum danish muffin gummi bears.
                        </div>
</div>
<div class="media">
<a class="media-left align-self-center" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading">Middle Aligned Media</h5>
                          Dragée topping chocolate dragée icing gingerbread. Ice cream jujubes pie sweet roll
                          sweet roll marshmallow powder. Cotton candy dessert apple
                          pie chocolate cake dessert lemon drops topping gingerbread
                          biscuit.
                          <br/> Sugar plum tootsie roll sweet gummi bears soufflé cake
                          gummies lollipop jelly beans. Gummies sugar plum apple
                          pie apple pie cake bear claw. Jelly beans gingerbread biscuit
                          lollipop.
                          <br/> Topping halvah wafer croissant jelly tootsie roll. Candy
                          jujubes gummi bears sweet roll dessert. Apple pie jelly
                          gummies tiramisu macaroon tiramisu oat cake. Apple pie
                          tiramisu cake chocolate cake topping danish sweet apple
                          pie sugar plum.
                        </div>
</div>
<div class="media">
<a class="media-left align-self-end" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-16.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading">Bottom Aligned Media</h5>
                          Sweet sesame snaps dragée chocolate tiramisu cotton candy sweet roll bonbon dessert.
                          Chocolate cake tiramisu dragée. Carrot cake pudding marshmallow
                          fruitcake carrot cake.
                          <br/> Cotton candy pastry chocolate bar. Apple pie sesame snaps
                          macaroon muffin cookie toffee bonbon gummies candy canes.
                          Soufflé chocolate bar soufflé tart fruitcake muffin. Macaroon
                          sweet roll apple pie jelly beans powder pudding.
                          <br/> Brownie cupcake bonbon sweet lemon drops. Lollipop danish
                          jelly beans cotton candy marshmallow brownie. Brownie pastry
                          tiramisu candy oat cake tiramisu halvah cookie tart. Cotton
                          candy danish gingerbread powder liquorice.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Right Aligned Media</h4>
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
<div class="media-list media-bordered">
<div class="media">
<div class="media-body text-right">
<h5 class="media-heading">Top Aligned Media</h5>
                          Gummi bears marshmallow sweet roll. Chocolate bar halvah candy tart tart chocolate
                          tart muffin. Cheesecake chocolate bar gummi bears. Cookie
                          topping chocolate biscuit jujubes.
                          <br/> Cheesecake muffin danish candy chocolate sweet roll candy
                          jelly powder. Chocolate marzipan dragée. Biscuit oat cake
                          jelly beans brownie donut ice cream biscuit. Soufflé soufflé
                          dessert cotton candy chupa chups lemon drops.
                          <br/> Tiramisu jujubes powder jujubes pie cheesecake liquorice
                          lollipop lollipop. Cheesecake muffin liquorice. Soufflé
                          caramels cupcake. Dessert cake chocolate bar gummi bears
                          marshmallow bonbon halvah cake.
                        </div>
<a class="media-right align-self-start" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-12.png" style="width: 64px;height: 64px;"/>
</a>
</div>
<div class="media">
<div class="media-body text-right">
<h5 class="media-heading">Middle Aligned Media</h5>
                          Powder jelly topping pastry chocolate icing bonbon powder. Lollipop brownie sugar
                          plum sugar plum carrot cake donut. Pastry sugar plum apple
                          pie sesame snaps.
                          <br/> Tart brownie gummi bears pie cheesecake cake. Tootsie
                          roll lemon drops oat cake muffin danish halvah cookie chocolate
                          croissant. Apple pie oat cake liquorice sesame snaps. Jelly-o
                          jelly-o dragée topping. Sugar plum danish muffin gummi
                          bears.
                          <br/> Biscuit halvah tiramisu tiramisu. Chocolate lemon drops
                          cake halvah gingerbread topping. Oat cake gummies cheesecake
                          halvah marshmallow jelly beans apple pie gingerbread. Dessert
                          cookie chocolate cake.
                        </div>
<a class="media-right align-self-center" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-11.png" style="width: 64px;height: 64px;"/>
</a>
</div>
<div class="media">
<div class="media-body text-right">
<h5 class="media-heading">Bottom Aligned Media</h5>
                          Ice cream lemon drops marshmallow sweet carrot cake marshmallow candy macaroon cupcake.
                          Tart carrot cake fruitcake. Marzipan liquorice gummies
                          oat cake.
                          <br/> Danish jelly beans dessert sweet roll chupa chups candy
                          canes gummies jujubes soufflé. Cheesecake sweet roll candy
                          muffin halvah dessert candy soufflé. Donut cupcake caramels
                          pastry.Candy carrot cake liquorice chocolate bar gummi
                          bears brownie donut.
                          <br/> Bonbon sweet roll croissant candy canes sesame snaps chocolate
                          cake jujubes cookie. Caramels gummi bears fruitcake jelly
                          beans gummies candy canes. Sugar plum fruitcake tootsie
                          roll pastry chupa chups. Marshmallow marshmallow carrot
                          cake gingerbread tart tootsie roll macaroon cookie topping.
                        </div>
<a class="media-right align-self-end" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-24.png" style="width: 64px;height: 64px;"/>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Media Alignment end -->
<!-- Nested Media List start -->
<section id="nested-media-list">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Nested Media List</h4>
<p>With a bit of extra markup, you can use media inside list (useful for
                comment threads or articles lists).</p>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Media Aligned Left</h4>
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
<div class="media-list media-bordered">
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-19.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading">Cotton candy </h5>
                          Cookie caramels brownie carrot cake macaroon brownie pastry. Donut powder croissant
                          tootsie roll cake cupcake. Cake tart icing jelly-o ice
                          cream tootsie roll bear claw toffee brownie.
                          <div class="media mt-1">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading">Chupa chups cookie</h5>
                              Dragée topping chocolate dragée icing gingerbread. Ice cream jujubes pie sweet roll
                              sweet roll marshmallow powder. Cotton candy dessert
                              apple pie chocolate cake dessert lemon drops topping
                              <div class="media mt-1">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-16.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading">Marshmallow cake</h5>
                                  Sweet sesame snaps dragée chocolate tiramisu cotton candy sweet roll bonbon dessert.
                                  Chocolate cake tiramisu dragée. Carrot cake pudding
                                  marshmallow gingerbread powder liquorice.
                                </div>
</div>
</div>
</div>
</div>
</div>
<div class="media">
<a class="media-left" href="component-media-objects.html#">
<img alt="Generic placeholder image" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-9.png" style="width: 64px;height: 64px;"/>
</a>
<div class="media-body">
<h5 class="media-heading">Fruitcake soufflé</h5>
                          Brownie jujubes caramels candy canes soufflé chocolate cake. Sesame snaps chocolate
                          bar donut topping cake halvah chocolate bar pie. Jelly
                          jelly-o brownie jujubes pastry pastry gummies.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Right Aligned Media</h4>
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
<div class="media-list media-bordered">
<div class="media">
<div class="media-body text-right">
<h5 class="media-heading">Bonbon sweet roll</h5>
                          Gummi bears marshmallow sweet roll. Chocolate bar halvah candy tart tart chocolate
                          tart muffin. Cheesecake chocolate bar gummi bears. Cookie
                          topping chocolate biscuit jujubes.
                          <div class="media mt-1">
<div class="media-body text-right">
<h5 class="media-heading">Sweet roll tootsie</h5>
                              Tart brownie gummi bears pie cheesecake cake. Tootsie roll lemon drops oat cake muffin
                              danish halvah cookie chocolate croissant. Apple pie
                              oat cake liquorice sesame snaps. Jelly-o dragée topping.
                              <div class="media mt-1">
<div class="media-body text-right">
<h5 class="media-heading">Pie marzipan </h5>
                                  Ice cream lemon drops marshmallow sweet carrot cake marshmallow candy macaroon cupcake.
                                  Tart carrot cake fruitcake. Marzipan liquorice
                                  gummies oat cake. Donut cupcake caramels pastry.
                                </div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-13.png" style="width: 64px;height: 64px;"/>
</a>
</div>
</div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-25.png" style="width: 64px;height: 64px;"/>
</a>
</div>
</div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-21.png" style="width: 64px;height: 64px;"/>
</a>
</div>
<div class="media">
<div class="media-body text-right">
<h5 class="media-heading">Cupcake bonbon</h5>
                          Fruitcake donut chocolate bar. Jelly beans cake cotton candy cotton candy jelly beans
                          bonbon halvah. Marzipan lemon drops oat cake candy canes
                          jelly cake powder sweet roll.
                        </div>
<a class="media-right" href="component-media-objects.html#">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-8.png" style="width: 64px;height: 64px;"/>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Nested Media List end -->
<!-- Media Object with Notation Text start -->
<section id="media-object-with-notation-text">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Media Object with Notation Text</h4>
<p>Add some custom text to media body. This text can be date, time, any
                short info, notification, etc.</p>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Left Inline With Title</h4>
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
<div class="media-list media-bordered">
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-21.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Cookie candy
                            <span class="media-notation mt-1">2 weeks ago</span>
</h5>
                          Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon
                          gummi bears apple pie. Brownie lemon drops chocolate cake
                          donut croissant cotton candy.
                        </div>
</div>
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-19.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Tootsie roll dessert
                            <span class="media-notation mt-1">Yesterday, 12:00 pm</span>
</h5>
                          Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o
                          bear claw bear claw halvah. Biscuit icing pastry tootsie
                          roll gingerbread croissant chupa chups.
                        </div>
</div>
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-16.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Lemon drops ice cream
                            <span class="media-notation mt-1">2 days ago</span>
</h5>
                          Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy
                          cheesecake tootsie roll. Candy sweet cake. Tiramisu cookie
                          toffee donut.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Notation Text in Right</h4>
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
<div class="media-list media-bordered">
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-25.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Oat cake
                            <span class="media-notation mt-1 float-right">1 week ago, 6:20 pm</span>
</h5>
                          Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake.
                          Tiramisu cookie toffee donut. Chocolate pie croissant gummi
                          bears muffin dessert chocolate.
                        </div>
</div>
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-15.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Jelly chocolate cake
                            <span class="media-notation mt-1 float-right">3 hours ago</span>
</h5>
                          Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake
                          jelly beans marzipan sesame snaps.Jelly beans cake chocolate
                          cake gummi bears lollipop.
                        </div>
</div>
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-4.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Pudding marshmallow
                            <span class="media-notation mt-1 float-right">Yesterday, 11:10 am</span>
</h5>
                          Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream
                          sugar plum biscuit. Lemon drops brownie biscuit jelly-o
                          biscuit gummies.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Notation Text Below Title</h4>
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
<div class="media-list media-bordered">
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Cookie candy
                          </h5>
<div class="media-notation mt-1">
                            3 days ago | 11 comments
                          </div>
                          Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon
                          gummi bears apple pie. Brownie lemon drops chocolate cake
                          donut croissant cotton candy.
                        </div>
</div>
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-8.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Tootsie roll dessert
                          </h5>
<div class="media-notation mt-1">
                            Yesterday, 10:00 am | 3 comments
                          </div>
                          Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o
                          bear claw bear claw halvah. Biscuit icing pastry tootsie
                          roll gingerbread croissant chupa chups.
                        </div>
</div>
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-6.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Lemon drops ice cream
                          </h5>
<div class="media-notation mt-1">
                            2 days ago | 1 comment
                          </div>
                          Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy
                          cheesecake tootsie roll. Candy sweet cake. Tiramisu cookie
                          toffee donut.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Notation Text after Text</h4>
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
<div class="media-list media-bordered">
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Oat cake
                          </h5>
                          Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake.
                          Tiramisu cookie toffee donut. Chocolate pie croissant gummi
                          bears muffin dessert chocolate.
                          <div class="media-notation mt-1">
<i class="ft-check-circle"></i> Updated Version
                          </div>
</div>
</div>
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-9.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Jelly chocolate cake
                          </h5>
                          Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake
                          jelly beans marzipan sesame snaps.Jelly beans cake chocolate
                          cake gummi bears lollipop.
                          <div class="media-notation mt-1">
<i class="ft-map-pin"></i> From New York | 1 day ago
                          </div>
</div>
</div>
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-22.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Pudding marshmallow
                          </h5>
                          Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream
                          sugar plum biscuit. Lemon drops brownie biscuit jelly-o
                          biscuit gummies.
                          <div class="media-notation mt-1">
<i class="ft-mail">
</i> 2 Unread mails
                          </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Notation Link Text</h4>
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
<div class="media-list media-bordered">
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-17.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Cookie candy
                          </h5>
                          Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon
                          gummi bears apple pie. Brownie lemon drops chocolate cake
                          donut croissant cotton candy.
                          <div class="media-notation mt-1">
<a href="component-media-objects.html#"> Reply </a>
<a href="component-media-objects.html#"> Edit </a>
<a href="component-media-objects.html#"> Delete </a>
</div>
</div>
</div>
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-18.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Tootsie roll dessert
                          </h5>
                          Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o
                          bear claw bear claw halvah. Biscuit icing pastry tootsie
                          roll gingerbread croissant chupa chups.
                          <div class="media-notation mt-1">
<a href="component-media-objects.html#"> Reply </a>
<a href="component-media-objects.html#"> Edit </a>
<a href="component-media-objects.html#"> Delete </a>
</div>
</div>
</div>
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-16.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Lemon drops ice cream
                          </h5>
                          Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy
                          cheesecake tootsie roll. Candy sweet cake. Tiramisu cookie
                          toffee donut.
                          <div class="media-notation mt-1">
<a href="component-media-objects.html#"> Reply </a>
<a href="component-media-objects.html#"> Edit </a>
<a href="component-media-objects.html#"> Delete </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Notation Icon Links</h4>
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
<div class="media-list media-bordered">
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-4.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Oat cake
                          </h5>
                          Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake.
                          Tiramisu cookie toffee donut. Chocolate pie croissant gummi
                          bears muffin dessert chocolate.
                          <div class="media-notation mt-1">
<a href="component-media-objects.html#">
<i class="ft-corner-up-left mr-0"></i> Reply
                            </a>
<a href="component-media-objects.html#">
<i class="ft-edit mr-0"></i> Edit
                            </a>
<a href="component-media-objects.html#">
<i class="ft-trash-2 mr-0"></i> Delete
                            </a>
</div>
</div>
</div>
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-6.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Jelly chocolate cake
                          </h5>
                          Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake
                          jelly beans marzipan sesame snaps.Jelly beans cake chocolate
                          cake gummi bears lollipop.
                          <div class="media-notation mt-1">
<a href="component-media-objects.html#">
<i class="ft-corner-up-left mr-0"></i> Reply
                            </a>
<a href="component-media-objects.html#">
<i class="ft-edit mr-0"></i> Edit
                            </a>
<a href="component-media-objects.html#">
<i class="ft-trash-2 mr-0"></i> Delete
                            </a>
</div>
</div>
</div>
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-9.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Pudding marshmallow
                          </h5>
                          Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream
                          sugar plum biscuit. Lemon drops brownie biscuit jelly-o
                          biscuit gummies.
                          <div class="media-notation mt-1">
<a href="component-media-objects.html#">
<i class="ft-corner-up-left mr-0"></i> Reply
                            </a>
<a href="component-media-objects.html#">
<i class="ft-edit mr-0"></i> Edit
                            </a>
<a href="component-media-objects.html#">
<i class="ft-trash-2 mr-0"></i> Delete
                            </a>
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
<!-- Media Object with Notation Text end -->
<!-- More Examples start -->
<section id="more-examples">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">More Examples</h4>
<p>Some more examples using media objects to know how to use it.</p>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">With Labels</h4>
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
<div class="media-list media-bordered">
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-19.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Cookie candy
                            <span class="badge badge-default badge-success float-right">CEO</span>
</h5>
                          Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon
                          gummi bears apple pie. Brownie lemon drops chocolate cake
                          donut croissant cotton candy.
                        </div>
</div>
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-18.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Tootsie roll dessert
                            <span class="badge badge-default badge-danger float-right">Bug Reporter</span>
</h5>
                          Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o
                          bear claw bear claw halvah. Biscuit icing pastry tootsie
                          roll gingerbread croissant chupa chups.
                        </div>
</div>
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-20.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Lemon drops ice cream
                            <span class="badge badge-default badge-info float-right">Director</span>
</h5>
                          Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy
                          cheesecake tootsie roll. Candy sweet cake. Tiramisu cookie
                          toffee donut.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">With Badges</h4>
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
<div class="media-list media-bordered">
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-9.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Oat cake
                            <span class="badge badge-pill badge-default badge-warning float-right">68</span>
</h5>
                          Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake.
                          Tiramisu cookie toffee donut. Chocolate pie croissant gummi
                          bears muffin dessert chocolate.
                        </div>
</div>
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-19.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Jelly chocolate cake
                            <span class="badge badge-pill bg-blue float-right">28</span>
</h5>
                          Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake
                          jelly beans marzipan sesame snaps.Jelly beans cake chocolate
                          cake gummi bears lollipop.
                        </div>
</div>
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-4.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Pudding marshmallow
                            <span class="badge badge-pill bg-purple float-right">33</span>
</h5>
                          Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream
                          sugar plum biscuit. Lemon drops brownie biscuit jelly-o
                          biscuit gummies.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Labeled Icon</h4>
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
<div class="media-list media-bordered">
<div class="media">
<span class="media-left">
<a class="btn-icon btn btn-outline-danger btn-round" href="component-media-objects.html#">
<i class="la la-close"></i>
</a>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Cookie candy
                          </h5>
                          Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon
                          gummi bears apple pie. Brownie lemon drops chocolate cake
                          donut croissant cotton candy.
                        </div>
</div>
<div class="media">
<span class="media-left">
<a class="btn-icon btn btn-outline-success btn-round" href="component-media-objects.html#">
<i class="la la-check"></i>
</a>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Tootsie roll dessert
                          </h5>
                          Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o
                          bear claw bear claw halvah. Biscuit icing pastry tootsie
                          roll gingerbread croissant chupa chups.
                        </div>
</div>
<div class="media">
<span class="media-left">
<a class="btn-icon btn btn-outline-warning btn-round" href="component-media-objects.html#">
<i class="la la-warning"></i>
</a>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Lemon drops ice cream
                          </h5>
                          Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy
                          cheesecake tootsie roll. Candy sweet cake. Tiramisu cookie
                          toffee donut.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">With Dropdown, Icon, Icon List</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="la la-close"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body">
<div class="media-list media-bordered">
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-24.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Oat cake
                          </h5>
                          Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake.
                          Tiramisu cookie toffee donut. Chocolate pie croissant gummi
                          bears muffin dessert chocolate.
                        </div>
<span class="media-right">
<a class="btn-icon btn btn-outline-danger btn-round" href="component-media-objects.html#">
<i class="ft-x"></i>
</a>
</span>
</div>
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-21.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Jelly chocolate cake
                          </h5>
                          Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake
                          jelly beans marzipan sesame snaps.Jelly beans cake chocolate
                          cake gummi bears lollipop.
                        </div>
<span class="media-right">
<a class="btn-icon btn btn-outline-success btn-round" href="component-media-objects.html#">
<i class="la la-check"></i>
</a>
</span>
</div>
<div class="media">
<span class="media-left">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-12.png" style="width: 64px;height: 64px;"/>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Pudding marshmallow
                          </h5>
                          Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream
                          sugar plum biscuit. Lemon drops brownie biscuit jelly-o
                          biscuit gummies.
                        </div>
<span class="media-right">
<a class="btn-icon btn btn-outline-warning btn-round" href="component-media-objects.html#">
<i class="la la-warning"></i>
</a>
</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Status Indicator</h4>
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
<div class="media-list media-bordered">
<div class="media">
<span class="media-left avatar-online">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-12.png" style="width: 64px;height: 64px;"/>
<i></i>
</span>
<div class="media-body pl-1">
<h5 class="media-heading">
                            Cookie candy
                          </h5>
                          Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon
                          gummi bears apple pie. Brownie lemon drops chocolate cake
                          donut croissant cotton candy.
                        </div>
</div>
<div class="media">
<span class="media-left avatar-busy">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-15.png" style="width: 64px;height: 64px;"/>
<i></i>
</span>
<div class="media-body pl-1">
<h5 class="media-heading">
                            Tootsie roll dessert
                          </h5>
                          Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o
                          bear claw bear claw halvah. Biscuit icing pastry tootsie
                          roll gingerbread croissant chupa chups.
                        </div>
</div>
<div class="media">
<span class="media-left avatar-away">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-2.png" style="width: 64px;height: 64px;"/>
<i></i>
</span>
<div class="media-body pl-1">
<h5 class="media-heading">
                            Icing brownie pudding
                          </h5>
                          Tiramisu ice cream gummies jelly beans. Fruitcake sugar plum sesame snaps bonbon
                          pudding soufflé powder. Jelly beans gummies candy cotton
                          candy gummi bears jelly beans.
                        </div>
</div>
<div class="media">
<span class="media-left avatar-off">
<img alt="Generic placeholder image" class="media-object" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-17.png" style="width: 64px;height: 64px;"/>
<i></i>
</span>
<div class="media-body pl-1">
<h5 class="media-heading">
                            Lemon drops ice cream
                          </h5>
                          Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy
                          cheesecake tootsie roll. Candy sweet cake. Tiramisu cookie
                          toffee donut.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">With Notification</h4>
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
<div class="media-list media-bordered">
<div class="media">
<span class="media-left position-relative">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-9.png" style="width: 64px;height: 64px;"/>
<span class="badge badge-pill badge-default badge-up badge-glow badge-default badge-success float-right">6</span>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Oat cake
                          </h5>
                          Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake.
                          Tiramisu cookie toffee donut. Chocolate pie croissant gummi
                          bears muffin dessert chocolate.
                        </div>
</div>
<div class="media">
<span class="media-left position-relative">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-19.png" style="width: 64px;height: 64px;"/>
<span class="badge badge-pill badge-default badge-up badge-glow badge-default badge-danger float-right">9</span>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Jelly chocolate cake
                          </h5>
                          Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake
                          jelly beans marzipan sesame snaps.Jelly beans cake chocolate
                          cake gummi bears lollipop.
                        </div>
</div>
<div class="media">
<span class="media-left position-relative">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-4.png" style="width: 64px;height: 64px;"/>
<span class="badge badge-pill badge-default badge-up badge-glow badge-default badge-info float-right">3</span>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Pudding marshmallow
                          </h5>
                          Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream
                          sugar plum biscuit. Lemon drops brownie biscuit jelly-o
                          biscuit gummies.
                        </div>
</div>
<div class="media">
<span class="media-left position-relative">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-10.png" style="width: 64px;height: 64px;"/>
<span class="badge badge-pill badge-default badge-up badge-glow badge-default badge-warning float-right">7</span>
</span>
<div class="media-body">
<h5 class="media-heading">
                            Sweet marzipan
                          </h5>
                          Bonbon cake tiramisu topping toffee candy canes. Sweet marzipan sugar plum chocolate
                          caramels liquorice. Gummi bears toffee liquorice. Chocolate
                          muffin fruitcake.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- More Examples end -->
</div>
</div>
</div>