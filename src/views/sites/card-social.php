<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\CardSocialAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Advance Social Cards</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="card-social.html#">Components</a>
</li>
<li class="breadcrumb-item active">Social Cards
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="card-social.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="card-social.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="card-social.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="card-social.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Social cards section start -->
<section id="social-cards">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Social Cards</h4>
<p>User's social profile cards with followers - following numbers and
                follow button.</p>
</div>
</div>
<div class="row mt-2">
<div class="col-xl-4 col-md-6 col-12">
<div class="card profile-card-with-cover">
<div class="card-content">
<!--<img class="card-img-top img-fluid" src="<?=$baseUrl;?>/app-assets/images/carousel/18.jpg" alt="Card cover image">-->
<div class="card-img-top img-fluid bg-cover height-200" style="background: url('https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/backgrounds/fb.jpg') 0 30%;"></div>
<div class="card-profile-image">
<img alt="Card image" class="rounded-circle img-border box-shadow-1" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-4.png"/>
</div>
<div class="profile-card-with-cover-content text-center">
<div class="profile-details mt-2">
<h4 class="card-title">Linda Holland</h4>
<ul class="list-inline clearfix mt-2">
<li class="mr-3">
<h2 class="block">3.5K</h2> Likes</li>
<li class="mr-3">
<h2 class="block">2845</h2> Followers</li>
<li>
<h2 class="block">645</h2> Following</li>
</ul>
</div>
<div class="card-body">
<a class="btn btn-social btn-min-width mr-1 mb-1 btn-facebook" href="card-social.html#"><i class="la la-facebook"></i> Follow</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6 col-12">
<div class="card profile-card-with-cover">
<div class="card-content">
<div class="card-img-top img-fluid bg-cover height-200" style="background: url('https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/backgrounds/in.jpg') 0 40%;"></div>
<div class="card-profile-image">
<img alt="Card image" class="rounded-circle img-border box-shadow-1" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-9.png"/>
</div>
<div class="profile-card-with-cover-content text-center">
<div class="profile-details mt-2">
<h4 class="card-title">Philip Garrett</h4>
<ul class="list-inline clearfix mt-2">
<li class="mr-3">
<h2 class="block">500+</h2> Connections</li>
<li class="mr-3">
<h2 class="block">485</h2> Posts</li>
<li>
<h2 class="block">35</h2> Following</li>
</ul>
</div>
<div class="card-body">
<a class="btn btn-social btn-min-width mr-1 mb-1 btn-linkedin" href="card-social.html#">
<span class="la la-linkedin"></span> Follow</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6 col-12">
<div class="card profile-card-with-cover">
<div class="card-content">
<div class="card-img-top img-fluid bg-cover height-200" style="background: url('https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/backgrounds/tw.jpg') 0 30%;"></div>
<div class="card-profile-image">
<img alt="Card image" class="rounded-circle img-border box-shadow-1" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-8.png"/>
</div>
<div class="profile-card-with-cover-content text-center">
<div class="profile-details mt-2">
<h4 class="card-title">Christine Wood</h4>
<ul class="list-inline clearfix mt-2">
<li class="mr-3">
<h2 class="block">1.6K</h2> Likes</li>
<li class="mr-3">
<h2 class="block">264</h2> Followers</li>
<li>
<h2 class="block">85</h2> Following</li>
</ul>
</div>
<div class="card-body">
<a class="btn btn-social btn-min-width mr-1 mb-1 btn-twitter white" href="card-social.html#">
<span class="la la-twitter"></span> Follow</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-4 col-md-12">
<div class="card bg-twitter white">
<div class="card-content p-2">
<div class="card-body">
<div class="text-center mb-1">
<i class="la la-twitter font-large-3"></i>
</div>
<div class="tweet-slider carousel slide text-center" data-ride="carousel">
<div class="carousel-inner">
<div class="carousel-item active">
<p>Congratulations to Rob Jones in accounting for winning
                            our
                            <span class="yellow">#NFL</span> football pool!</p>
</div>
<div class="carousel-item">
<p>Contests are a great thing to partner on. Partnerships
                            immediately
                            <span class="yellow">#DOUBLE</span> the reach.</p>
</div>
<div class="carousel-item">
<p>Puns, humor, and quotes are great content on
                            <span class="yellow">#Twitter</span>. Find some related to your business.</p>
</div>
<div class="carousel-item">
<p>Are there
                            <span class="yellow">#common-sense</span> facts related to your business?
                            Combine them with a great photo.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-12">
<div class="card bg-facebook white">
<div class="card-content p-2">
<div class="card-body">
<div class="text-center mb-1">
<i class="la la-facebook font-large-3"></i>
</div>
<div class="fb-post-slider carousel slide text-center" data-ride="carousel">
<div class="carousel-inner">
<div class="carousel-item active">
<p>Congratulations to Rob Jones in accounting for winning
                            our #NFL football pool!</p>
</div>
<div class="carousel-item">
<p>Contests are a great thing to partner on. Partnerships
                            immediately #DOUBLE the reach.</p>
</div>
<div class="carousel-item">
<p>Puns, humor, and quotes are great content on #Twitter.
                            Find some related to your business.</p>
</div>
<div class="carousel-item">
<p>Are there #common-sense facts related to your business?
                            Combine them with a great photo.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-12">
<div class="card bg-linkedin white">
<div class="card-content p-2">
<div class="card-body">
<div class="text-center mb-1">
<i class="la la-linkedin font-large-3"></i>
</div>
<div class="linkedin-post-slider carousel slide text-center" data-ride="carousel">
<div class="carousel-inner">
<div class="carousel-item active">
<p>Congratulations to Rob Jones in accounting for winning
                            our #NFL football pool!</p>
</div>
<div class="carousel-item">
<p>Contests are a great thing to partner on. Partnerships
                            immediately #DOUBLE the reach.</p>
</div>
<div class="carousel-item">
<p>Puns, humor, and quotes are great content on #Twitter.
                            Find some related to your business.</p>
</div>
<div class="carousel-item">
<p>Are there #common-sense facts related to your business?
                            Combine them with a great photo.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Social cards section end -->
</div>
