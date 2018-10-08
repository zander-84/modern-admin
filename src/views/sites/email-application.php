<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\EmailApplicationAsset::class,
    ]
]);
?>
<div class="sidebar-left">
<div class="sidebar">
<div class="sidebar-content email-app-sidebar d-flex">
<div class="email-app-menu col-md-5 card d-none d-lg-block">
<div class="form-group form-group-compose text-center">
<button class="btn btn-danger btn-block my-1" type="button"><i class="ft-mail"></i> Compose</button>
</div>
<h6 class="text-muted text-bold-500 mb-1">Messages</h6>
<div class="list-group list-group-messages">
<a class="list-group-item active border-0" href="email-application.html#">
<i class="ft-inbox mr-1"></i> Inbox
                <span class="badge badge-secondary badge-pill float-right">8</span>
</a>
<a class="list-group-item list-group-item-action border-0" href="email-application.html#"><i class="la la-paper-plane-o mr-1"></i> Sent</a>
<a class="list-group-item list-group-item-action border-0" href="email-application.html#"><i class="ft-file mr-1"></i> Draft</a>
<a class="list-group-item list-group-item-action border-0" href="email-application.html#"><i class="ft-star mr-1"></i> Starred<span class="badge badge-danger badge-pill float-right">3</span> </a>
<a class="list-group-item list-group-item-action border-0" href="email-application.html#"><i class="ft-trash-2 mr-1"></i> Trash</a>
</div>
<h6 class="text-muted text-bold-500 mt-1 mb-1">Labels</h6>
<div class="list-group list-group-messages">
<a class="list-group-item list-group-item-action border-0" href="email-application.html#">
<i class="ft-circle mr-1 warning"></i> Work
                <span class="badge badge-warning badge-pill float-right">5</span>
</a>
<!--<a href="#" class="list-group-item list-group-item-action border-0"><i class="ft-circle mr-1 danger"></i> Family</a>-->
<!--<a href="#" class="list-group-item list-group-item-action border-0"><i class="ft-circle mr-1 primary"></i> Friends</a>-->
<a class="list-group-item list-group-item-action border-0" href="email-application.html#"><i class="ft-circle mr-1 success"></i> Private <span class="badge badge-success badge-pill float-right">3</span> </a>
</div>
</div>
<div class="email-app-list-wraper col-md-7 card p-0">
<div class="email-app-list">
<div class="card-body chat-fixed-search">
<fieldset class="form-group position-relative has-icon-left m-0 pb-1">
<input class="form-control" id="iconLeft4" placeholder="Search email" type="text"/>
<div class="form-control-position">
<i class="ft-search"></i>
</div>
</fieldset>
</div>
<div class="list-group" id="users-list">
<div class="users-list-padding media-list">
<a class="media border-0" href="email-application.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md">
<span class="media-object rounded-circle text-circle bg-info">T</span>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading text-bold-500">Tonny Deep
                        <span class="float-right">
<span class="font-small-2 primary">4:14 AM</span>
</span>
</h6>
<p class="list-group-item-text text-truncate text-bold-600 mb-0">PixInvent, I fount you...</p>
<p class="list-group-item-text mb-0">I would be good.
                        <span class="float-right primary">
<span class="badge badge-danger mr-1">Family</span> <i class="font-medium-1 ft-star blue-grey lighten-3"></i></span>
</p>
</div>
</a>
<a class="media border-0" href="email-application.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md">
<span class="media-object rounded-circle text-circle bg-danger">L</span>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading text-bold-500">Louis Welch
                        <span class="float-right"><i class="fa-paperclip fa"></i>
<span class="font-small-2 primary">2:15 AM</span>
</span>
</h6>
<p class="list-group-item-text text-truncate text-bold-600 mb-0">Thanks, Let's do it.</p>
<p class="list-group-item-text mb-0">Can we connect today...
                        <span class="float-right primary"><i class="font-medium-1 ft-star blue-grey lighten-3"></i></span>
</p>
</div>
</a>
<a class="media border-0" href="email-application.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md">
<span class="media-object rounded-circle text-circle bg-warning">E</span>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading text-bold-500">Envato Market
                        <span class="float-right">
<span class="font-small-2 primary">11:18 PM</span>
</span>
</h6>
<p class="list-group-item-text text-truncate text-bold-600 mb-0">You have new comment...</p>
<p class="list-group-item-text mb-0">Hi Pixinvent...
                        <span class="float-right primary">
<span class="badge badge-warning mr-1">Work</span> <i class="font-medium-1 ft-star blue-grey lighten-3"></i></span>
</p>
</div>
</a>
<a class="media bg-blue-grey bg-lighten-5 border-right-primary border-right-2" href="email-application.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png"/>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Wayne Burton
                        <span class="font-small-2 float-right">Today</span>
</h6>
<p class="list-group-item-text text-truncate mb-0">Project ABC Status...</p>
<p class="list-group-item-text mb-0">Andy, Lte's...
                        <span class="float-right primary">
<span class="badge badge-success mr-1">Private</span> <i class="font-medium-1 ft-star warning"></i></span>
</p>
</div>
</a>
<a class="media border-0" href="email-application.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-5.png"/>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Sarah Montgomery
                        <span class="font-small-2 float-right">Yesterday</span>
</h6>
<p class="list-group-item-text text-truncate mb-0">Your New UI.</p>
<p class="list-group-item-text text-truncate mb-0">Everything looks good.</p>
</div>
</a>
<a class="media border-0" href="email-application.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md">
<span class="media-object rounded-circle text-circle bg-success">H</span>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Heather Howell
                        <span class="float-right"><i class="fa-paperclip fa"></i>
<span class="font-small-2">15 July</span>
</span>
</h6>
<p class="list-group-item-text text-truncate mb-0">Thanks, Let's do it.</p>
<p class="list-group-item-text mb-0">Can we connect today...
                        <span class="float-right primary"><i class="font-medium-1 ft-star blue-grey lighten-3"></i></span>
</p>
</div>
</a>
<a class="media border-0" href="email-application.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-8.png"/>
<i></i>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Kelly Reyes
                        <span class="font-small-2 float-right">12 July</span>
</h6>
<p class="list-group-item-text text-truncate mb-0">I paid it, Thanks.</p>
<p class="list-group-item-text mb-0">Check once...
                        <span class="float-right primary">
<span class="badge badge-warning mr-1">Work</span> <i class="font-medium-1 ft-star blue-grey lighten-3"></i></span>
</p>
</div>
</a>
<a class="media border-0" href="email-application.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md">
<span class="media-object rounded-circle text-circle bg-warning">V</span>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Vincent Nelson
                        <span class="font-small-2 float-right">11 July</span>
</h6>
<p class="list-group-item-text text-truncate mb-0"><i class="ft-check primary font-small-2"></i> Where are you
                        John?
                      </p>
<p class="list-group-item-text mb-0">Party tonight ?
                        <span class="float-right primary">
<span class="badge badge-primary mr-1">Friends</span> <i class="font-medium-1 ft-star blue-grey lighten-3"></i></span>
</p>
</div>
</a>
<a class="media border-0" href="email-application.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md">
<span class="media-object rounded-circle text-circle bg-info">E</span>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Elizabeth Elliott
                        <span class="font-small-2 float-right">8 July</span>
</h6>
<p class="list-group-item-text text-truncate mb-0">Okay, I will call you.</p>
<p class="list-group-item-text mb-0">Here they are work.
                        <span class="float-right primary"><i class="font-medium-1 ft-star blue-grey lighten-3"></i></span>
</p>
</div>
</a>
<a class="media border-0" href="email-application.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-6.png"/>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Sarah Montgomery
                        <span class="font-small-2 float-right">Yesterday</span>
</h6>
<p class="list-group-item-text text-truncate mb-0">Your New UI.</p>
<p class="list-group-item-text text-truncate mb-0">Everything looks good.</p>
</div>
</a>
<a class="media border-0" href="email-application.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md">
<span class="media-object rounded-circle text-circle bg-success">H</span>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Heather Howell
                        <span class="float-right"><i class="fa-paperclip fa"></i>
<span class="font-small-2">15 July</span>
</span>
</h6>
<p class="list-group-item-text text-truncate mb-0">Thanks, Let's do it.</p>
<p class="list-group-item-text mb-0">Can we connect today...
                        <span class="float-right primary"><i class="font-medium-1 ft-star blue-grey lighten-3"></i></span>
</p>
</div>
</a>
<a class="media border-0" href="email-application.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-10.png"/>
<i></i>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Kelly Reyes
                        <span class="font-small-2 float-right">12 July</span>
</h6>
<p class="list-group-item-text text-truncate mb-0">I paid it, Thanks.</p>
<p class="list-group-item-text mb-0">Check once...
                        <span class="float-right primary">
<span class="badge badge-warning mr-1">Work</span> <i class="font-medium-1 ft-star blue-grey lighten-3"></i></span>
</p>
</div>
</a>
<a class="media border-0" href="email-application.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md">
<span class="media-object rounded-circle text-circle bg-warning">V</span>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Vincent Nelson
                        <span class="font-small-2 float-right">11 July</span>
</h6>
<p class="list-group-item-text text-truncate mb-0"><i class="ft-check primary font-small-2"></i> Where are you
                        John?
                      </p>
<p class="list-group-item-text mb-0">Party tonight ?
                        <span class="float-right primary">
<span class="badge badge-primary mr-1">Friends</span> <i class="font-medium-1 ft-star blue-grey lighten-3"></i></span>
</p>
</div>
</a>
<a class="media border-0" href="email-application.html#">
<div class="media-left pr-1">
<span class="avatar avatar-md">
<span class="media-object rounded-circle text-circle bg-info">E</span>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Elizabeth Elliott
                        <span class="font-small-2 float-right">8 July</span>
</h6>
<p class="list-group-item-text text-truncate mb-0">Okay, I will call you.</p>
<p class="list-group-item-text mb-0">Here they are work.
                        <span class="float-right primary"><i class="font-medium-1 ft-star blue-grey lighten-3"></i></span>
</p>
</div>
</a>
</div>
</div>
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
<div class="card email-app-details d-none d-lg-block">
<div class="card-content">
<div class="email-app-options card-body">
<div class="row">
<div class="col-md-6 col-12">
<div aria-label="Basic example" class="btn-group" role="group">
<button class="btn btn-sm btn-outline-secondary" data-original-title="Replay" data-placement="top" data-toggle="tooltip" type="button"><i class="la la-reply"></i></button>
<button class="btn btn-sm btn-outline-secondary" data-original-title="Replay All" data-placement="top" data-toggle="tooltip" type="button"><i class="la la-reply-all"></i></button>
<button class="btn btn-sm btn-outline-secondary" data-original-title="Report SPAM" data-placement="top" data-toggle="tooltip" type="button"><i class="ft-alert-octagon"></i></button>
<button class="btn btn-sm btn-outline-secondary" data-original-title="Delete" data-placement="top" data-toggle="tooltip" type="button"><i class="ft-trash-2"></i></button>
</div>
</div>
<div class="col-md-6 col-12 text-right">
<div aria-label="Basic example" class="btn-group" role="group">
<button class="btn btn-sm btn-outline-secondary" data-original-title="Previous" data-placement="top" data-toggle="tooltip" type="button"><i class="la la-angle-left"></i></button>
<button class="btn btn-sm btn-outline-secondary" data-original-title="Next" data-placement="top" data-toggle="tooltip" type="button"><i class="la la-angle-right"></i></button>
</div>
<div class="btn-group ml-1">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown" type="button">More</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="email-application.html#">Mark as unread</a>
<a class="dropdown-item" href="email-application.html#">Mark as unimportant</a>
<a class="dropdown-item" href="email-application.html#">Add star</a>
<a class="dropdown-item" href="email-application.html#">Add to task</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="email-application.html#">Filter mail</a>
</div>
</div>
</div>
</div>
</div>
<div class="email-app-title card-body">
<h3 class="list-group-item-heading">Project ABC Status Report</h3>
<p class="list-group-item-text">
<span class="primary">
<span class="badge badge-primary">Previous</span> <i class="float-right font-medium-3 ft-star warning"></i></span>
</p>
</div>
<div class="media-list">
<div class="card-header p-0" id="headingCollapse1">
<a aria-controls="collapse1" aria-expanded="true" class="collapsed email-app-sender media border-0 bg-blue-grey bg-lighten-5" data-toggle="collapse" href="email-application.html#collapse1">
<div class="media-left pr-1">
<span class="avatar avatar-md">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png"/>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">John Doe</h6>
<p class="list-group-item-text">Can you please provide me ABC Status Report.
                        <span class="float-right text muted">12 July</span>
</p>
</div>
</a>
</div>
<div aria-expanded="true" aria-labelledby="headingCollapse1" class="card-collapse collapse" id="collapse1" role="tabpanel">
<div class="card-content">
<div class="card-body">
<p>Hi Wayne,</p>
<p>Can you please provide me ABC Status Report.</p>
<p>Gmail Material Design Concept. Please check the full project
                        on Behance. Hope that will be fine for you.</p>
<p>Thanks for your consideration !</p>
<p>Regards,
                        <br/>John</p>
</div>
</div>
</div>
<div class="card-header p-0" id="headingCollapse2">
<a aria-controls="collapse2" aria-expanded="false" class="email-app-sender media border-0" data-toggle="collapse" href="email-application.html#collapse2">
<div class="media-left pr-1">
<span class="avatar avatar-md">
<img alt="Generic placeholder image" class="media-object rounded-circle" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png"/>
</span>
</div>
<div class="media-body w-100">
<h6 class="list-group-item-heading">Wayne Burton</h6>
<p class="list-group-item-text">to me
                        <span>Today</span>
<span class="float-right">
<i class="la la-reply mr-1"></i>
<i class="la la-arrow-right mr-1"></i>
<i class="la la-ellipsis-v"></i>
</span>
</p>
</div>
</a>
</div>
<div aria-expanded="false" aria-labelledby="headingCollapse2" class="card-collapse" id="collapse2" role="tabpanel">
<div class="card-content">
<div class="email-app-text card-body">
<div class="email-app-message">
<p>Hi John,</p>
<p>Thanks for your feedback ! Here's a new layout for a new
                          Modern Admin theme.</p>
<p>We will start the new application development soon once this
                          will be completed, I will provide you more details after
                          this Saturday. Hope that will be fine for you.</p>
<p>Hope your like it, or feel free to comment, feedback or rebound
                          !
                        </p>
<p>Cheers~</p>
</div>
</div>
</div>
</div>
<div class="email-app-text-action card-body">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
