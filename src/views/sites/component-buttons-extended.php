<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ComponentButtonsExtendedAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Buttons Extended</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="component-buttons-extended.html#">Components</a>
</li>
<li class="breadcrumb-item active">Buttons Extended
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="component-buttons-extended.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="component-buttons-extended.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="component-buttons-extended.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="component-buttons-extended.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Floating Buttons start-->
<section id="floating-point">
<div class="row">
<div class="col-12 mb-1">
<h4 class="text-uppercase">Floating Buttons</h4>
<p>Floating action buttons are used for a special type of promoted action.
                They are distinguished by a circled icon floating above the UI and
                have special motion behaviors related to morphing, launching, and
                the transferring anchor point. </p>
<p>Use the class <code>.btn</code> along with class <code>.btn-float</code>.</p>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Floating Buttons</h4>
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
<div class="col-xl-4 col-lg-12 mb-1">
<div class="form-group text-center">
<!-- Floating icon button Regular -->
<a class="btn btn-float btn-square btn-secondary" href="component-buttons-extended.html#"><i class="la la-thumbs-o-up"></i></a>
<a class="btn btn-float btn-square btn-float-lg btn-primary" href="component-buttons-extended.html#"><i class="la la-camera"></i></a>
<a class="btn btn-float btn-square btn-secondary" href="component-buttons-extended.html#"><i class="la la-thumbs-o-down"></i></a>
</div>
</div>
<div class="col-xl-4 col-lg-12 mb-1">
<div class="form-group text-center">
<!-- Floating button Regular with text -->
<a class="btn btn-float btn-cyan" href="component-buttons-extended.html#"><i class="la la-search"></i><span>search</span></a>
<a class="btn btn-float btn-float-lg btn-pink" href="component-buttons-extended.html#"><i class="la la-cloud-download"></i><span>Downloads</span></a>
<a class="btn btn-float btn-cyan" href="component-buttons-extended.html#"><i class="la la-refresh"></i><span>refresh</span></a>
</div>
</div>
<div class="col-xl-4 col-lg-12 mb-1">
<div class="form-group text-center">
<!-- Regular Round Floating button -->
<a class="btn btn-float btn-round btn-secondary" href="component-buttons-extended.html#"><i class="la la-thumbs-o-up"></i></a>
<a class="btn btn-float btn-round btn-float-lg btn-primary" href="component-buttons-extended.html#"><i class="la la-camera"></i></a>
<a class="btn btn-float btn-round btn-secondary" href="component-buttons-extended.html#"><i class="la la-thumbs-o-down"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Floating Buttons end -->
<!-- Floating Outline Buttons start-->
<section id="floating-outline-buttons">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Floating Outline Buttons</h4>
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
<div class="col-xl-4 col-lg-12 mb-1">
<div class="form-group text-center">
<!-- Floating icon Outline button -->
<button class="btn btn-float btn-square btn-outline-secondary" type="button"><i class="la la-thumbs-o-up"></i></button>
<button class="btn btn-float btn-square btn-float-lg btn-outline-primary" type="button"><i class="la la-camera"></i></button>
<button class="btn btn-float btn-square btn-outline-secondary" type="button"><i class="la la-thumbs-o-down"></i></button>
</div>
</div>
<div class="col-xl-4 col-lg-12 mb-1">
<div class="form-group text-center">
<!-- Floating Outline button with text -->
<button class="btn btn-float btn-outline-cyan" type="button"><i class="la la-search"></i>
<span>search</span>
</button>
<button class="btn btn-float btn-float-lg btn-outline-pink" type="button"><i class="la la-cloud-download"></i>
<span>Downloads</span>
</button>
<button class="btn btn-float btn-outline-cyan" type="button"><i class="la la-refresh"></i>
<span>refresh</span>
</button>
</div>
</div>
<div class="col-xl-4 col-lg-12 mb-1">
<div class="form-group text-center">
<!-- Outline Round Floating button -->
<button class="btn btn-float btn-outline-secondary btn-round" type="button"><i class="la la-thumbs-o-up"></i></button>
<button class="btn btn-float btn-float-lg btn-outline-primary btn-round" type="button"><i class="la la-camera"></i></button>
<button class="btn btn-float btn-outline-secondary btn-round" type="button"><i class="la la-thumbs-o-down"></i></button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Floating Outline Buttons end -->
<!-- Social Buttons for Bootstrap start-->
<section id="social-buttons">
<div class="row mt-3">
<div class="col-12 mb-1">
<h4 class="text-uppercase">Social Buttons for Bootstrap</h4>
<p>Buttons with built-in loading indicators, effectively bridging the
                gap between action and feedback.</p>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Social Media Buttons</h4>
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
<div class="col-xl-4 col-lg-12 mb-1">
<div class="form-group">
<!-- Social Buttons with Social Name -->
<a class="btn btn-social btn-min-width mr-1 mb-1 btn-facebook" href="component-buttons-extended.html#"><i class="la la-facebook"></i> Facebook</a>
<a class="btn btn-social btn-min-width mr-1 mb-1 btn-reddit" href="component-buttons-extended.html#">
<span class="la la-reddit font-medium-3"></span> Reddit</a>
<a class="btn btn-social btn-min-width mr-1 mb-1 btn-twitter" href="component-buttons-extended.html#">
<span class="la la-twitter"></span> Twitter</a>
<a class="btn btn-social btn-min-width mr-1 mb-1 btn-github" href="component-buttons-extended.html#"><i class="la la-github font-medium-3"></i> Github</a>
<a class="btn btn-social btn-min-width mr-1 mb-1 btn-soundcloud" href="component-buttons-extended.html#">
<span class="la la-soundcloud"></span> Soundcloud</a>
<a class="btn btn-social btn-min-width mr-1 mb-1 btn-vimeo" href="component-buttons-extended.html#">
<span class="la la-vimeo-square font-medium-3"></span> Vimeo</a>
<a class="btn btn-social btn-min-width mr-1 mb-1 btn-pinterest" href="component-buttons-extended.html#">
<span class="la la-pinterest-p font-medium-3"></span> Pinterest</a>
<a class="btn btn-social btn-min-width mr-1 mb-1 btn-tumblr" href="component-buttons-extended.html#">
<span class="la la-tumblr font-medium-3"></span> Tumblr</a>
<a class="btn btn-social btn-min-width mr-1 mb-1 btn-yahoo" href="component-buttons-extended.html#">
<span class="la la-yahoo font-medium-3"></span> Yahoo</a>
</div>
</div>
<div class="col-xl-4 col-lg-12 mb-1">
<!-- Social Icon Buttons -->
<div class="form-group">
<a class="btn btn-social-icon mr-1 mb-1 btn-adn" href="component-buttons-extended.html#">
<span class="la la-adn"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-bitbucket" href="component-buttons-extended.html#">
<span class="la la-bitbucket font-medium-3"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-dropbox" href="component-buttons-extended.html#">
<span class="la la-dropbox font-medium-3"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-facebook" href="component-buttons-extended.html#">
<span class="la la-facebook"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-flickr" href="component-buttons-extended.html#">
<span class="la la-flickr font-medium-3"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-foursquare" href="component-buttons-extended.html#">
<span class="la la-foursquare font-medium-3"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-github" href="component-buttons-extended.html#">
<span class="la la-github font-medium-3"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-google" href="component-buttons-extended.html#">
<span class="la la-google font-medium-3"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-instagram" href="component-buttons-extended.html#">
<span class="la la-instagram font-medium-3"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-linkedin" href="component-buttons-extended.html#">
<span class="la la-linkedin font-medium-3"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-microsoft" href="component-buttons-extended.html#">
<span class="la la-windows font-medium-3"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-odnoklassniki" href="component-buttons-extended.html#">
<span class="la la-odnoklassniki font-medium-3"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-openid" href="component-buttons-extended.html#">
<span class="la la-openid font-medium-3"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-pinterest" href="component-buttons-extended.html#">
<span class="la la-pinterest-p font-medium-3"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-reddit" href="component-buttons-extended.html#">
<span class="la la-reddit font-medium-3"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-soundcloud" href="component-buttons-extended.html#">
<span class="la la-soundcloud"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-tumblr" href="component-buttons-extended.html#">
<span class="la la-tumblr font-medium-3"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-twitter" href="component-buttons-extended.html#">
<span class="la la-twitter"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-vimeo" href="component-buttons-extended.html#">
<span class="la la-vimeo-square font-medium-3"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-vk" href="component-buttons-extended.html#">
<span class="la la-vk font-medium-3"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-yahoo" href="component-buttons-extended.html#">
<span class="la la-yahoo font-medium-3"></span>
</a>
</div>
</div>
<div class="col-xl-4 col-lg-12 mb-1 social-buttons">
<div class="form-group">
<!-- Social Buttons large name -->
<a class="btn btn-social width-200 mr-1 mb-1 btn-adn" href="component-buttons-extended.html#">
<span class="la la-adn font-medium-3"></span> Sign in with App.net</a>
<a class="btn btn-social width-200 mr-1 mb-1 btn-dropbox" href="component-buttons-extended.html#">
<span class="la la-dropbox font-medium-3"></span> Sign in with dropbox</a>
<a class="btn btn-social width-200 mr-1 mb-1 btn-flickr" href="component-buttons-extended.html#">
<span class="la la-flickr font-medium-3"></span> Sign in with flickr</a>
<a class="btn btn-social width-200 mr-1 mb-1 btn-github" href="component-buttons-extended.html#">
<span class="la la-github font-medium-3"></span> Sign in with github</a>
<a class="btn btn-social width-200 mr-1 mb-1 btn-google" href="component-buttons-extended.html#">
<span class="la la-google font-medium-3"></span> Sign in with google</a>
<a class="btn btn-social width-200 mr-1 mb-1 btn-facebook" href="component-buttons-extended.html#">
<span class="la la-facebook"></span> Sign in with facebook</a>
<a class="btn btn-social width-200 mr-1 mb-1 btn-foursquare" href="component-buttons-extended.html#">
<span class="la la-foursquare font-medium-3"></span> Sign in with foursquare</a>
<a class="btn btn-social width-200 mr-1 mb-1 btn-bitbucket" href="component-buttons-extended.html#">
<span class="la la-bitbucket font-medium-3"></span> Sign in with bitbucket</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Social Buttons for Bootstrap end -->
<!-- Social Media Buttons Size start-->
<section id="social-buttons-sizes">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Social Media Buttons Size</h4>
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
<div class="col-xl-4 col-lg-12 mb-1">
<div class="form-group">
<!-- Social Buttons block size-->
<a class="btn btn-social btn-block mb-1 btn-github" href="component-buttons-extended.html#"><i class="la la-github"></i> Github</a>
<a class="btn btn-social btn-block mb-1 btn-soundcloud" href="component-buttons-extended.html#">
<span class="la la-soundcloud"></span> Soundcloud</a>
<a class="btn btn-social btn-block mb-1 btn-vimeo" href="component-buttons-extended.html#">
<span class="la la-vimeo-square"></span> Vimeo</a>
<a class="btn btn-social btn-block mb-1 btn-yahoo" href="component-buttons-extended.html#">
<span class="la la-yahoo"></span> Yahoo</a>
<a class="btn btn-social btn-block mb-1 btn-flickr" href="component-buttons-extended.html#">
<span class="la la-flickr"></span> Flickr</a>
</div>
</div>
<div class="col-xl-4 col-lg-12 mb-1">
<div class="form-group text-center">
<!-- Social Buttons sizes -->
<div class="row">
<div class="col-12">
<a class="btn btn-social mb-1 mr-1 btn-lg btn-yahoo" href="component-buttons-extended.html#">
<span class="la la-yahoo"></span> Yahoo</a>
<a class="btn btn-social mb-1 mr-1 btn-yahoo" href="component-buttons-extended.html#">
<span class="la la-yahoo"></span> Yahoo</a>
<a class="btn btn-social mb-1 mr-1 btn-sm btn-yahoo" href="component-buttons-extended.html#">
<span class="la la-yahoo"></span> Yahoo</a>
<a class="btn btn-social mb-1 mr-1 btn-xs btn-yahoo" href="component-buttons-extended.html#">
<span class="la la-yahoo"></span> Yahoo</a>
</div>
</div>
<div class="row">
<div class="col-12">
<a class="btn btn-social mb-1 mr-1 btn-lg btn-vimeo" href="component-buttons-extended.html#">
<span class="la la-vimeo-square"></span> Vimeo</a>
<a class="btn btn-social mb-1 mr-1 btn-vimeo" href="component-buttons-extended.html#">
<span class="la la-vimeo-square"></span> Vimeo</a>
<a class="btn btn-social mb-1 mr-1 btn-sm btn-vimeo" href="component-buttons-extended.html#">
<span class="la la-vimeo-square"></span> Vimeo</a>
<a class="btn btn-social mb-1 mr-1 btn-xs btn-vimeo" href="component-buttons-extended.html#">
<span class="la la-vimeo-square"></span> Vimeo</a>
</div>
</div>
<!-- Social icon Buttons Sizes -->
<div class="row">
<div class="col-12">
<a class="btn btn-social-icon mb-1 mr-1 btn-lg btn-soundcloud" href="component-buttons-extended.html#">
<span class="la la-soundcloud"></span>
</a>
<a class="btn btn-social-icon mb-1 mr-1 btn-soundcloud" href="component-buttons-extended.html#">
<span class="la la-soundcloud"></span>
</a>
<a class="btn btn-social-icon mb-1 mr-1 btn-sm btn-soundcloud" href="component-buttons-extended.html#">
<span class="la la-soundcloud"></span>
</a>
<a class="btn btn-social-icon mb-1 mr-1 btn-xs btn-soundcloud" href="component-buttons-extended.html#">
<span class="la la-soundcloud"></span>
</a>
</div>
</div>
<div class="row">
<div class="col-12">
<a class="btn btn-social-icon btn-lg mb-1 mr-1 btn-github" href="component-buttons-extended.html#"><i class="la la-github"></i></a>
<a class="btn btn-social-icon mb-1 mr-1 btn-github" href="component-buttons-extended.html#"><i class="la la-github"></i></a>
<a class="btn btn-social-icon btn-sm mb-1 mr-1 btn-github" href="component-buttons-extended.html#"><i class="la la-github"></i></a>
<a class="btn btn-social-icon btn-xs mb-1 mr-1 btn-github" href="component-buttons-extended.html#"><i class="la la-github"></i></a>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-12 mb-1 social-buttons">
<div class="form-group">
<!-- Social Buttons block sizes -->
<a class="btn btn-social mb-1 btn-block btn-lg btn-pinterest" href="component-buttons-extended.html#">
<span class="la la-pinterest-p"></span> Sign in with Pinterest</a>
<a class="btn btn-social mb-1 btn-block btn-pinterest" href="component-buttons-extended.html#">
<span class="la la-pinterest-p"></span> Sign in with Pinterest</a>
<a class="btn btn-social mb-1 btn-block btn-sm btn-pinterest" href="component-buttons-extended.html#">
<span class="la la-pinterest-p"></span> Sign in with Pinterest</a>
<a class="btn btn-social mb-1 btn-block btn-xs btn-pinterest" href="component-buttons-extended.html#">
<span class="la la-pinterest-p"></span> Sign in with Pinterest</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Social Media Buttons Size end -->
<!-- Social Media Outline Buttons start-->
<section id="social-outline-buttons">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Social Media Outline Buttons</h4>
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
<div class="col-xl-4 col-lg-12 mb-1">
<div class="form-group">
<!-- Social Outline Buttons -->
<a class="btn btn-social btn-min-width mb-1 mr-1 btn-outline-facebook" href="component-buttons-extended.html#"><i class="la la-facebook"></i> Facebook</a>
<a class="btn btn-social btn-min-width mb-1 mr-1 btn-outline-reddit" href="component-buttons-extended.html#">
<span class="la la-reddit font-medium-4"></span> Reddit</a>
<a class="btn btn-social btn-min-width mb-1 mr-1 btn-outline-twitter" href="component-buttons-extended.html#">
<span class="la la-twitter font-medium-4"></span> Twitter</a>
<a class="btn btn-social btn-min-width mb-1 mr-1 btn-outline-github" href="component-buttons-extended.html#"><i class="la la-github font-medium-4"></i> Github</a>
<a class="btn btn-social btn-min-width mb-1 mr-1 btn-outline-soundcloud" href="component-buttons-extended.html#">
<span class="la la-soundcloud"></span> Soundcloud</a>
<a class="btn btn-social btn-min-width mb-1 mr-1 btn-outline-vimeo" href="component-buttons-extended.html#">
<span class="la la-vimeo-square font-medium-4"></span> Vimeo</a>
<a class="btn btn-social btn-min-width mb-1 mr-1 btn-outline-pinterest" href="component-buttons-extended.html#">
<span class="la la-pinterest-p font-medium-4"></span> Pinterest</a>
<a class="btn btn-social btn-min-width mb-1 mr-1 btn-outline-tumblr" href="component-buttons-extended.html#">
<span class="la la-tumblr font-medium-4"></span> Tumblr</a>
<a class="btn btn-social btn-min-width mb-1 mr-1 btn-outline-yahoo" href="component-buttons-extended.html#">
<span class="la la-yahoo font-medium-4"></span> Yahoo</a>
</div>
</div>
<div class="col-xl-4 col-lg-12 mb-1">
<div class="form-group">
<!-- Social Icons Outline Buttons -->
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-adn" href="component-buttons-extended.html#">
<span class="la la-adn"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-bitbucket" href="component-buttons-extended.html#">
<span class="la la-bitbucket font-medium-4"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-dropbox" href="component-buttons-extended.html#">
<span class="la la-dropbox font-medium-4"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook" href="component-buttons-extended.html#">
<span class="la la-facebook"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-flickr" href="component-buttons-extended.html#">
<span class="la la-flickr font-medium-4"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-foursquare" href="component-buttons-extended.html#">
<span class="la la-foursquare font-medium-4"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-github" href="component-buttons-extended.html#">
<span class="la la-github font-medium-4"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-google" href="component-buttons-extended.html#">
<span class="la la-google font-medium-4"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-instagram" href="component-buttons-extended.html#">
<span class="la la-instagram font-medium-4"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin" href="component-buttons-extended.html#">
<span class="la la-linkedin font-medium-4"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-microsoft" href="component-buttons-extended.html#">
<span class="la la-windows font-medium-4"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-odnoklassniki" href="component-buttons-extended.html#">
<span class="la la-odnoklassniki font-medium-4"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-openid" href="component-buttons-extended.html#">
<span class="la la-openid font-medium-4"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-pinterest" href="component-buttons-extended.html#">
<span class="la la-pinterest-p font-medium-4"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-reddit" href="component-buttons-extended.html#">
<span class="la la-reddit font-medium-4"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-soundcloud" href="component-buttons-extended.html#">
<span class="la la-soundcloud"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-tumblr" href="component-buttons-extended.html#">
<span class="la la-tumblr font-medium-4"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter" href="component-buttons-extended.html#">
<span class="la la-twitter"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-vimeo" href="component-buttons-extended.html#">
<span class="la la-vimeo-square font-medium-4"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-vk" href="component-buttons-extended.html#">
<span class="la la-vk font-medium-4"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-yahoo" href="component-buttons-extended.html#">
<span class="la la-yahoo font-medium-4"></span>
</a>
</div>
</div>
<div class="col-xl-4 col-lg-12 mb-1 social-buttons">
<div class="form-group">
<!-- Social Outline Buttons with text -->
<a class="btn btn-social width-200 mb-1 mr-1 btn-outline-adn" href="component-buttons-extended.html#">
<span class="la la-adn font-medium-4"></span> Sign in with App.net</a>
<a class="btn btn-social width-200 mb-1 mr-1 btn-outline-dropbox" href="component-buttons-extended.html#">
<span class="la la-dropbox font-medium-4"></span> Sign in with dropbox</a>
<a class="btn btn-social width-200 mb-1 mr-1 btn-outline-flickr" href="component-buttons-extended.html#">
<span class="la la-flickr font-medium-4"></span> Sign in with flickr</a>
<a class="btn btn-social width-200 mb-1 mr-1 btn-outline-github" href="component-buttons-extended.html#">
<span class="la la-github font-medium-4"></span> Sign in with github</a>
<a class="btn btn-social width-200 mb-1 mr-1 btn-outline-google" href="component-buttons-extended.html#">
<span class="la la-google font-medium-4"></span> Sign in with google</a>
<a class="btn btn-social width-200 mb-1 mr-1 btn-outline-facebook" href="component-buttons-extended.html#">
<span class="la la-facebook"></span> Sign in with facebook</a>
<a class="btn btn-social width-200 mb-1 mr-1 btn-outline-foursquare" href="component-buttons-extended.html#">
<span class="la la-foursquare font-medium-4"></span> Sign in with foursquare</a>
<a class="btn btn-social width-200 mb-1 mr-1 btn-outline-bitbucket" href="component-buttons-extended.html#">
<span class="la la-bitbucket font-medium-4"></span> Sign in with bitbucket</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Social Media Outline Buttons end -->
<!-- Social Media Outline Buttons Size start-->
<section id="social-outline-buttons-sizes">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Social Media Outline Buttons Size</h4>
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
<div class="col-xl-4 col-lg-12 mb-1">
<div class="form-group">
<!-- Social Outline Block Buttons Here-->
<a class="btn btn-social btn-block mb-1 btn-outline-github" href="component-buttons-extended.html#"><i class="la la-github"></i> Github</a>
<a class="btn btn-social btn-block mb-1 btn-outline-soundcloud" href="component-buttons-extended.html#">
<span class="la la-soundcloud"></span> Soundcloud</a>
<a class="btn btn-social btn-block mb-1 btn-outline-vimeo" href="component-buttons-extended.html#">
<span class="la la-vimeo-square"></span> Vimeo</a>
<a class="btn btn-social btn-block mb-1 btn-outline-yahoo" href="component-buttons-extended.html#">
<span class="la la-yahoo"></span> Yahoo</a>
<a class="btn btn-social btn-block mb-1 btn-outline-flickr" href="component-buttons-extended.html#">
<span class="la la-flickr"></span> Flickr</a>
</div>
</div>
<div class="col-xl-4 col-lg-12 mb-1">
<div class="form-group text-center">
<!-- Social Outline Buttons sizes -->
<div class="row">
<div class="col-12">
<a class="btn btn-social mb-1 mr-1 btn-lg btn-outline-yahoo" href="component-buttons-extended.html#">
<span class="la la-yahoo"></span> Yahoo</a>
<a class="btn btn-social mb-1 mr-1 btn-outline-yahoo" href="component-buttons-extended.html#">
<span class="la la-yahoo"></span> Yahoo</a>
<a class="btn btn-social mb-1 mr-1 btn-sm btn-outline-yahoo" href="component-buttons-extended.html#">
<span class="la la-yahoo"></span> Yahoo</a>
<a class="btn btn-social mb-1 mr-1 btn-xs btn-outline-yahoo" href="component-buttons-extended.html#">
<span class="la la-yahoo"></span> Yahoo</a>
</div>
</div>
<div class="row">
<div class="col-12">
<a class="btn btn-social mb-1 mr-1 btn-lg btn-outline-vimeo" href="component-buttons-extended.html#">
<span class="la la-vimeo-square"></span> Vimeo</a>
<a class="btn btn-social mb-1 mr-1 btn-outline-vimeo" href="component-buttons-extended.html#">
<span class="la la-vimeo-square"></span> Vimeo</a>
<a class="btn btn-social mb-1 mr-1 btn-sm btn-outline-vimeo" href="component-buttons-extended.html#">
<span class="la la-vimeo-square"></span> Vimeo</a>
<a class="btn btn-social mb-1 mr-1 btn-xs btn-outline-vimeo" href="component-buttons-extended.html#">
<span class="la la-vimeo-square"></span> Vimeo</a>
</div>
</div>
<!-- Social Outline Icon Buttons sizes -->
<div class="row">
<div class="col-12">
<a class="btn btn-social-icon mb-1 mr-1 btn-lg btn-outline-soundcloud" href="component-buttons-extended.html#">
<span class="la la-soundcloud"></span>
</a>
<a class="btn btn-social-icon mb-1 mr-1 btn-outline-soundcloud" href="component-buttons-extended.html#">
<span class="la la-soundcloud"></span>
</a>
<a class="btn btn-social-icon mb-1 mr-1 btn-sm btn-outline-soundcloud" href="component-buttons-extended.html#">
<span class="la la-soundcloud"></span>
</a>
<a class="btn btn-social-icon mb-1 mr-1 btn-xs btn-outline-soundcloud" href="component-buttons-extended.html#">
<span class="la la-soundcloud"></span>
</a>
</div>
</div>
<div class="row">
<div class="col-12">
<a class="btn btn-social-icon btn-lg mb-1 mr-1 btn-outline-github" href="component-buttons-extended.html#"><i class="la la-github"></i></a>
<a class="btn btn-social-icon mb-1 mr-1 btn-outline-github" href="component-buttons-extended.html#"><i class="la la-github"></i></a>
<a class="btn btn-social-icon btn-sm mb-1 mr-1 btn-outline-github" href="component-buttons-extended.html#"><i class="la la-github"></i></a>
<a class="btn btn-social-icon btn-xs mb-1 mr-1 btn-outline-github" href="component-buttons-extended.html#"><i class="la la-github"></i></a>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-12 mb-1 social-buttons">
<div class="form-group">
<!-- Social Outline block Buttons sizes -->
<a class="btn btn-social mb-1 btn-block btn-lg btn-outline-pinterest" href="component-buttons-extended.html#">
<span class="la la-pinterest-p"></span> Sign in with Pinterest</a>
<a class="btn btn-social mb-1 btn-block btn-outline-pinterest" href="component-buttons-extended.html#">
<span class="la la-pinterest-p"></span> Sign in with Pinterest</a>
<a class="btn btn-social mb-1 btn-block btn-sm btn-outline-pinterest" href="component-buttons-extended.html#">
<span class="la la-pinterest-p"></span> Sign in with Pinterest</a>
<a class="btn btn-social mb-1 btn-block btn-xs btn-outline-pinterest" href="component-buttons-extended.html#">
<span class="la la-pinterest-p"></span> Sign in with Pinterest</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Social Media Outline Buttons Size end -->
</div>
