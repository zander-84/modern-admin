<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ChatApplicationAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="sidebar-left sidebar-fixed">
<div class="sidebar">
<div class="sidebar-content card d-none d-lg-block">
<div class="card-body chat-fixed-search">
<fieldset class="form-group position-relative has-icon-left m-0">
<input class="form-control" id="iconLeft4" placeholder="Search user" type="text"/>
<div class="form-control-position">
<i class="ft-search"></i>
</div>
</fieldset>
</div>
<div class="list-group position-relative" id="users-list">
<div class="users-list-padding media-list">
<a class="media border-0" href="chat-application.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md avatar-online">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-3.png"/>
<i></i>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Elizabeth Elliott
                    <span class="font-small-3 float-right info">4:14 AM</span>
</h6>
<p class="list-group-item-text text-muted mb-0"><i class="ft-check primary font-small-2"></i> Okay
                    <span class="float-right primary"><i class="font-medium-1 icon-pin blue-grey lighten-3"></i></span>
</p>
</div>
</a>
<a class="media border-0" href="chat-application.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md avatar-busy">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png"/>
<i></i>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Kristopher Candy
                    <span class="font-small-3 float-right info">9:04 PM</span>
</h6>
<p class="list-group-item-text text-muted mb-0"><i class="ft-check primary font-small-2"></i> Thank you
                    <span class="float-right primary">
<span class="badge badge-pill badge-danger">12</span>
</span>
</p>
</div>
</a>
<a class="media border-0" href="chat-application.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md avatar-away">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-8.png"/>
<i></i>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Sarah Woods
                    <span class="font-small-3 float-right info">2:14 AM</span>
</h6>
<p class="list-group-item-text text-muted mb-0"><i class="ft-check font-small-2"></i> Hello krish!
                    <span class="float-right primary"><i class="font-medium-1 icon-volume-off blue-grey lighten-3 mr-1"></i>
<span class="badge badge-pill badge-danger">3</span>
</span>
</p>
</div>
</a>
<a class="media bg-blue-grey bg-lighten-5 border-right-info border-right-2" href="chat-application.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md avatar-online">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png"/>
<i></i>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Wayne Burton
                    <span class="font-small-3 float-right info">Today</span>
</h6>
<p class="list-group-item-text text-muted mb-0"><i class="ft-check primary font-small-2"></i> Can we connect?</p>
</div>
</a>
<a class="media border-0" href="chat-application.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md avatar-away">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-5.png"/>
<i></i>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Sarah Montgomery
                    <span class="font-small-3 float-right info">Yesterday</span>
</h6>
<p class="list-group-item-text text-muted mb-0"><i class="ft-check font-small-2"></i> Will connect you</p>
</div>
</a>
<a class="media border-0" href="chat-application.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md avatar-online">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-9.png"/>
<i></i>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Heather Howell
                    <span class="font-small-3 float-right info">Friday</span>
</h6>
<p class="list-group-item-text text-muted mb-0"><i class="ft-check font-small-2"></i> Thank you
                    <span class="float-right primary">
<span class="badge badge-pill badge-danger">4</span>
</span>
</p>
</div>
</a>
<a class="media border-0" href="chat-application.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md avatar-busy">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png"/>
<i></i>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Kelly Reyes
                    <span class="font-small-3 float-right info">Thrusday</span>
</h6>
<p class="list-group-item-text text-muted mb-0"><i class="ft-check font-small-2"></i> I love you </p>
</div>
</a>
<a class="media border-0" href="chat-application.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md avatar-online">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-14.png"/>
<i></i>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Vincent Nelson</h6>
<p class="list-group-item-text text-muted mb-0"><i class="ft-check primary font-small-2"></i> Who you are?</p>
</div>
</a>
<a class="media border-0" href="chat-application.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md avatar-online">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-3.png"/>
<i></i>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Elizabeth Elliott
                    <span class="font-small-3 float-right info">4:14 AM</span>
</h6>
<p class="list-group-item-text text-muted mb-0"><i class="ft-check font-small-2"></i> Okay
                    <span class="float-right primary"><i class="font-medium-1 icon-pin blue-grey lighten-3"></i></span>
</p>
</div>
</a>
<a class="media border-0" href="chat-application.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md avatar-busy">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png"/>
<i></i>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Kristopher Candy
                    <span class="font-small-3 float-right info">9:04 PM</span>
</h6>
<p class="list-group-item-text text-muted mb-0"><i class="ft-check primary font-small-2"></i> Thank you
                    <span class="float-right primary">
<span class="badge badge-pill badge-danger">12</span>
</span>
</p>
</div>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="content-right">
<div class="content-wrapper">
<div class="content-header row">
</div>
<div class="content-body">
<section class="chat-app-window">
<div class="badge badge-default mb-1">Chat History</div>
<div class="chats">
<div class="chats">
<div class="chat">
<div class="chat-avatar">
<a class="avatar" data-original-title="" data-placement="right" data-toggle="tooltip" href="chat-application.html#" title="">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png"/>
</a>
</div>
<div class="chat-body">
<div class="chat-content">
<p>How can we help? We're here for you!</p>
</div>
</div>
</div>
<div class="chat chat-left">
<div class="chat-avatar">
<a class="avatar" data-original-title="" data-placement="left" data-toggle="tooltip" href="chat-application.html#" title="">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png"/>
</a>
</div>
<div class="chat-body">
<div class="chat-content">
<p>Hey John, I am looking for the best admin template.</p>
<p>Could you please help me to find it out?</p>
</div>
<div class="chat-content">
<p>It should be Bootstrap 4 compatible.</p>
</div>
</div>
</div>
<div class="chat">
<div class="chat-avatar">
<a class="avatar" data-original-title="" data-placement="right" data-toggle="tooltip" href="chat-application.html#" title="">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png"/>
</a>
</div>
<div class="chat-body">
<div class="chat-content">
<p>Absolutely!</p>
</div>
<div class="chat-content">
<p>Modern admin is the responsive bootstrap 4 admin template.</p>
</div>
</div>
</div>
<p class="time">1 hours ago</p>
<div class="chat chat-left">
<div class="chat-avatar">
<a class="avatar" data-original-title="" data-placement="left" data-toggle="tooltip" href="chat-application.html#" title="">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png"/>
</a>
</div>
<div class="chat-body">
<div class="chat-content">
<p>Looks clean and fresh UI.</p>
</div>
<div class="chat-content">
<p>It's perfect for my next project.</p>
</div>
<div class="chat-content">
<p>How can I purchase it?</p>
</div>
</div>
</div>
<div class="chat">
<div class="chat-avatar">
<a class="avatar" data-original-title="" data-placement="right" data-toggle="tooltip" href="chat-application.html#" title="">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png"/>
</a>
</div>
<div class="chat-body">
<div class="chat-content">
<p>Thanks, from ThemeForest.</p>
</div>
</div>
</div>
<div class="chat chat-left">
<div class="chat-avatar">
<a class="avatar" data-original-title="" data-placement="left" data-toggle="tooltip" href="chat-application.html#" title="">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png"/>
</a>
</div>
<div class="chat-body">
<div class="chat-content">
<p>I will purchase it for sure.</p>
</div>
<div class="chat-content">
<p>Thanks.</p>
</div>
</div>
</div>
<div class="chat">
<div class="chat-avatar">
<a class="avatar" data-original-title="" data-placement="right" data-toggle="tooltip" href="chat-application.html#" title="">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png"/>
</a>
</div>
<div class="chat-body">
<div class="chat-content">
<p>Great, Feel free to get in touch on</p>
</div>
<div class="chat-content">
<p>https://pixinvent.ticksy.com/</p>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="chat-app-form">
<form class="chat-app-input d-flex">
<fieldset class="form-group position-relative has-icon-left col-10 m-0">
<div class="form-control-position">
<i class="icon-emoticon-smile"></i>
</div>
<input class="form-control" id="iconLeft4" placeholder="Type your message" type="text"/>
<div class="form-control-position control-position-right">
<i class="ft-image"></i>
</div>
</fieldset>
<fieldset class="form-group position-relative has-icon-left col-2 m-0">
<button class="btn btn-info" type="button"><i class="la la-paper-plane-o d-lg-none"></i>
<span class="d-none d-lg-block">Send</span>
</button>
</fieldset>
</form>
</section>
</div>
</div>
</div>
</div>