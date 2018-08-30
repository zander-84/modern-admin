<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\UsersContactsAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Contacts</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="users-contacts.html#">Users</a>
</li>
<li class="breadcrumb-item active">Contacts
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="users-contacts.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="users-contacts.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-detached content-right">
<div class="content-body">
<section class="row">
<div class="col-12">
<div class="card">
<div class="card-head">
<div class="card-header">
<h4 class="card-title">All Contacts</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<button class="btn btn-primary btn-sm"><i class="ft-plus white"></i> Add Contacts</button>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-warning dropdown-toggle dropdown-menu-right btn-sm" data-toggle="dropdown" id="btnSearchDrop1" type="button"><i class="ft-download-cloud white"></i></button>
<span aria-labelledby="btnSearchDrop1" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-upload"></i> Import</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-download"></i> Export</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-shuffle"></i> Find Duplicate</a>
</span>
</span>
<button class="btn btn-default btn-sm"><i class="ft-settings white"></i></button>
</div>
</div>
</div>
<div class="card-content">
<div class="card-body">
<!-- Task List table -->
<div class="table-responsive">
<table class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle" id="users-contacts">
<thead>
<tr>
<th></th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Favorite</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-2.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Alice Collins</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">alice@example.com</a>
</td>
<td>+658-254-256</td>
<td class="text-center"><i class="la la-star yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop2" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Margaret Govan</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">margaret@example.com</a>
</td>
<td>+125-654-564</td>
<td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop3" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop3" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-4.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Eugene Woods</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">eugene@example.com</a>
</td>
<td>+987-654-564</td>
<td class="text-center"><i class="la la-star yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop4" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop4" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-3.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Russell Bryant</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">russell@example.com</a>
</td>
<td>+235-654-564</td>
<td class="text-center"><i class="la la-star yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop5" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop5" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-6.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Cynthia Tucker</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">cynthia@example.com</a>
</td>
<td>+987-654-564</td>
<td class="text-center"><i class="la la-star yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop6" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop6" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-busy rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-5.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Scott Marshall</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">scott@example.com</a>
</td>
<td>+954-654-564</td>
<td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop7" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop7" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-away rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-8.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Catherine Smith</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">catherine@example.com</a>
</td>
<td>+254-654-564</td>
<td class="text-center"><i class="la la-star yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop8" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop8" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-off rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Eric Howard</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">eric@example.com</a>
</td>
<td>+545-654-564</td>
<td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop9" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop9" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-9.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Donald Watkins</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">donald@example.com</a>
</td>
<td>+987-654-564</td>
<td class="text-center"><i class="la la-star yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop10" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop10" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-10.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Brittany Barnes</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">brittany@example.com</a>
</td>
<td>+632-654-564</td>
<td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop11" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop11" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-busy rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-5.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Scott Marshall</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">scott@example.com</a>
</td>
<td>+954-654-564</td>
<td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop12" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop12" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-away rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-8.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Catherine Smith</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">catherine@example.com</a>
</td>
<td>+254-654-564</td>
<td class="text-center"><i class="la la-star yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop13" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop13" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-off rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Eric Howard</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">eric@example.com</a>
</td>
<td>+545-654-564</td>
<td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop14" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop14" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-9.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Donald Watkins</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">donald@example.com</a>
</td>
<td>+987-654-564</td>
<td class="text-center"><i class="la la-star yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop15" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop15" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-10.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Brittany Barnes</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">brittany@example.com</a>
</td>
<td>+632-654-564</td>
<td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop16" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop16" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-2.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Alice Collins</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">alice@example.com</a>
</td>
<td>+658-254-256</td>
<td class="text-center"><i class="la la-star yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop17" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop17" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Margaret Govan</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">margaret@example.com</a>
</td>
<td>+125-654-564</td>
<td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop18" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop18" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-4.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Eugene Woods</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">eugene@example.com</a>
</td>
<td>+987-654-564</td>
<td class="text-center"><i class="la la-star yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop19" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop19" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-3.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Russell Bryant</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">russell@example.com</a>
</td>
<td>+235-654-564</td>
<td class="text-center"><i class="la la-star yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop20" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop20" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-6.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Cynthia Tucker</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">cynthia@example.com</a>
</td>
<td>+987-654-564</td>
<td class="text-center"><i class="la la-star yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop21" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop21" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-4.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Eugene Woods</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">eugene@example.com</a>
</td>
<td>+987-654-564</td>
<td class="text-center"><i class="la la-star yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop22" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop22" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-3.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Russell Bryant</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">russell@example.com</a>
</td>
<td>+235-654-564</td>
<td class="text-center"><i class="la la-star yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop23" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop23" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-6.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Cynthia Tucker</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">cynthia@example.com</a>
</td>
<td>+987-654-564</td>
<td class="text-center"><i class="la la-star yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop24" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop24" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-2.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Alice Collins</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">alice@example.com</a>
</td>
<td>+658-254-256</td>
<td class="text-center"><i class="la la-star yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop25" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop25" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Margaret Govan</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">margaret@example.com</a>
</td>
<td>+125-654-564</td>
<td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop26" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop26" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-busy rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-5.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Scott Marshall</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">scott@example.com</a>
</td>
<td>+954-654-564</td>
<td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop27" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop27" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-away rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-8.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Catherine Smith</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">catherine@example.com</a>
</td>
<td>+254-654-564</td>
<td class="text-center"><i class="la la-star yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop28" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop28" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-off rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Eric Howard</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">eric@example.com</a>
</td>
<td>+545-654-564</td>
<td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop29" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop29" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-9.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Donald Watkins</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">donald@example.com</a>
</td>
<td>+987-654-564</td>
<td class="text-center"><i class="la la-star yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop30" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop30" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-10.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<a class="media-heading" href="users-contacts.html#">Brittany Barnes</a>
</div>
</div>
</td>
<td class="text-center">
<a href="mailto:email@example.com">brittany@example.com</a>
</td>
<td>+632-654-564</td>
<td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
<td>
<span class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop31" type="button"><i class="ft-settings"></i></button>
<span aria-labelledby="btnSearchDrop31" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-trash-2"></i> Edit</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-edit-2"></i> Delete</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle primary"></i> Projects</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle info"></i> Team</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle warning"></i> Clients</a>
<a class="dropdown-item" href="users-contacts.html#"><i class="ft-plus-circle success"></i> Friends</a>
</span>
</span>
</td>
</tr>
</tbody>
<tfoot>
<tr>
<th></th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Favorite</th>
<th>Actions</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
<div class="sidebar-detached sidebar-left">
<div class="sidebar">
<div class="bug-list-sidebar-content">
<!-- Predefined Views -->
<div class="card">
<div class="card-head">
<div class="media p-1">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png"/><i></i></span>
</div>
<div class="media-body media-middle">
<h5 class="media-heading">Margaret Govan</h5>
</div>
</div>
</div>
<!-- contacts search -->
<div class="card-body border-top-blue-grey border-top-lighten-5">
<div class="bug-list-search">
<div class="bug-list-search-content">
<form action="#">
<div class="position-relative">
<input class="form-control" id="search-contacts" placeholder="Search contacts..." type="search"/>
<div class="form-control-position">
<i class="la la-search text-size-base text-muted"></i>
</div>
</div>
</form>
</div>
</div>
</div>
<!-- /contacts search -->
<!-- contacts view -->
<div class="card-body">
<div class="list-group">
<a class="list-group-item active" href="users-contacts.html#">All Contacts</a>
<a class="list-group-item list-group-item-action" href="users-contacts.html#">Recently contacted</a>
<a class="list-group-item list-group-item-action" href="users-contacts.html#">Favorite contacts</a>
</div>
</div>
<!-- Groups-->
<div class="card-body">
<p class="lead">Groups</p>
<ul class="list-group">
<li class="list-group-item">
<span class="badge badge-primary badge-pill float-right">14</span> <a href="users-contacts.html#"> Project</a>
</li>
<li class="list-group-item">
<span class="badge badge-info badge-pill float-right">22</span> <a href="users-contacts.html#"> Team</a>
</li>
<li class="list-group-item">
<span class="badge badge-warning badge-pill float-right">10</span> <a href="users-contacts.html#"> Clients</a>
</li>
<li class="list-group-item">
<span class="badge badge-success badge-pill float-right">5</span> <a href="users-contacts.html#"> Friends</a>
</li>
</ul>
</div>
<!--/ Groups-->
<!--More-->
<div class="card-body ">
<p class="lead">More</p>
<ul class="list-group">
<li><a class="list-group-item" href="users-contacts.html#">Import</a></li>
<li><a class="list-group-item" href="users-contacts.html#">Export</a></li>
<li><a class="list-group-item" href="users-contacts.html#">Print</a></li>
<li><a class="list-group-item" href="users-contacts.html#">Restore contacts</a></li>
<li><a class="list-group-item" href="users-contacts.html#">Find duplicate</a></li>
</ul>
</div>
<!--/More-->
</div>
<!--/ Predefined Views -->
</div>
</div>
</div>
</div>
</div>