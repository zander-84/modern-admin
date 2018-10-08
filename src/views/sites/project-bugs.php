<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ProjectBugsAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Project Bugs Lists</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="project-bugs.html#">Project</a>
</li>
<li class="breadcrumb-item active">Project Bugs List
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="project-bugs.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="project-bugs.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-detached content-right">
<div class="content-body">
<section class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">All Bugs</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<button class="btn btn-primary btn-sm"><i class="ft-plus white"></i> Submit Bug</button>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-warning btn-sm dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop1" type="button"><i class="ft-download white"></i></button>
<span aria-labelledby="btnSearchDrop1" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-bugs.html#"><i class="la la-calendar"></i> Due Date</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="la la-random"></i> Priority </a>
<a class="dropdown-item" href="project-bugs.html#"><i class="la la-bar-chart"></i> Progress</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="la la-user"></i> Assign to</a>
</span>
</span>
<button class="btn btn-success btn-sm"><i class="ft-settings white"></i></button>
</div>
</div>
<div class="card-content">
<div class="card-body">
<!-- Task List table -->
<div class="table-responsive">
<table class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle" id="project-bugs-list">
<thead>
<tr>
<th>ID</th>
<th>Bug</th>
<th>Asignee</th>
<th>Status</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<tr>
<td><a class="text-bold-600" href="project-bugs.html#">#101</a></td>
<td>
<a class="text-bold-600" href="project-bugs.html#">Vertical menu issue on iPad</a>
<p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-3.png" title="John Doe"/><i class=""></i>
</span>
</td>
<td>
<span class="badge badge-info">In Progress</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop2" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-eye"></i> Open Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-edit-2"></i> Edit Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-check"></i> Complete Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-upload"></i> Assign to</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-trash"></i> Delete Bug</a>
</span>
</span>
</td>
</tr>
<tr>
<td><a class="text-bold-600" href="project-bugs.html#">#220</a></td>
<td>
<a class="text-bold-600" href="project-bugs.html#">Progress bar animation improvement</a>
<p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-4.png" title="Amy Doe"/><i class=""></i>
</span>
</td>
<td>
<span class="badge badge-warning">Open</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop3" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop3" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-eye"></i> Open Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-edit-2"></i> Edit Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-check"></i> Complete Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-upload"></i> Assign to</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-trash"></i> Delete Bug</a>
</span>
</span>
</td>
</tr>
<tr>
<td><a class="text-bold-600" href="project-bugs.html#">#420</a></td>
<td>
<a class="text-bold-600" href="project-bugs.html#">Authentication API security issue</a>
<p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-5.png" title="Joe Doe"/><i class=""></i>
</span>
</td>
<td>
<span class="badge badge-danger">Reopen</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop4" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop4" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-eye"></i> Open Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-edit-2"></i> Edit Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-check"></i> Complete Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-upload"></i> Assign to</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-trash"></i> Delete Bug</a>
</span>
</span>
</td>
</tr>
<tr>
<td><a class="text-bold-600" href="project-bugs.html#">#124</a></td>
<td>
<a class="text-bold-600" href="project-bugs.html#">Project page chart issue</a>
<p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-16.png" title="Joe Doe"/><i class=""></i>
</span>
</td>
<td>
<span class="badge badge-info">In Progress</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop5" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop5" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-eye"></i> Open Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-edit-2"></i> Edit Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-check"></i> Complete Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-upload"></i> Assign to</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-trash"></i> Delete Bug</a>
</span>
</span>
</td>
</tr>
<tr>
<td><a class="text-bold-600" href="project-bugs.html#">#140</a></td>
<td>
<a class="text-bold-600" href="project-bugs.html#">Profile page timeline issue</a>
<p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png" title="Joe Doe"/><i class=""></i>
</span>
</td>
<td>
<span class="badge badge-success">To be tested</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop6" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop6" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-eye"></i> Open Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-edit-2"></i> Edit Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-check"></i> Complete Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-upload"></i> Assign to</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-trash"></i> Delete Bug</a>
</span>
</span>
</td>
</tr>
<tr>
<td><a class="text-bold-600" href="project-bugs.html#">#261</a></td>
<td>
<a class="text-bold-600" href="project-bugs.html#">Tooltip display issue in login form</a>
<p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-8.png" title="Joe Doe"/><i class=""></i>
</span>
</td>
<td>
<span class="badge badge-warning">Open</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop7" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop7" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-eye"></i> Open Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-edit-2"></i> Edit Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-check"></i> Complete Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-upload"></i> Assign to</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-trash"></i> Delete Bug</a>
</span>
</span>
</td>
</tr>
<tr>
<td><a class="text-bold-600" href="project-bugs.html#">#158</a></td>
<td>
<a class="text-bold-600" href="project-bugs.html#">Button loading issue on submit</a>
<p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-9.png" title="Joe Doe"/><i class=""></i>
</span>
</td>
<td>
<span class="badge badge-info">Closed</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop8" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop8" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-eye"></i> Open Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-edit-2"></i> Edit Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-check"></i> Complete Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-upload"></i> Assign to</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-trash"></i> Delete Bug</a>
</span>
</span>
</td>
</tr>
<tr>
<td><a class="text-bold-600" href="project-bugs.html#">#158</a></td>
<td>
<a class="text-bold-600" href="project-bugs.html#">D3 Chart responsive issue</a>
<p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-10.png" title="Joe Doe"/><i class=""></i>
</span>
</td>
<td>
<span class="badge badge-danger">Reopen</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop9" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop9" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-eye"></i> Open Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-edit-2"></i> Edit Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-check"></i> Complete Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-upload"></i> Assign to</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-trash"></i> Delete Bug</a>
</span>
</span>
</td>
</tr>
<tr>
<td><a class="text-bold-600" href="project-bugs.html#">#850</a></td>
<td>
<a class="text-bold-600" href="project-bugs.html#">Google map reset location</a>
<p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-11.png" title="Joe Doe"/><i class=""></i>
</span>
</td>
<td>
<span class="badge badge-warning">Open</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop10" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop10" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-eye"></i> Open Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-edit-2"></i> Edit Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-check"></i> Complete Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-upload"></i> Assign to</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-trash"></i> Delete Bug</a>
</span>
</span>
</td>
</tr>
<tr>
<td><a class="text-bold-600" href="project-bugs.html#">#550</a></td>
<td>
<a class="text-bold-600" href="project-bugs.html#">jQuery drag and drop integration issue</a>
<p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-12.png" title="Joe Doe"/><i class=""></i>
</span>
</td>
<td>
<span class="badge badge-info">In Progress</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop11" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop11" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-eye"></i> Open Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-edit-2"></i> Edit Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-check"></i> Complete Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-upload"></i> Assign to</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-trash"></i> Delete Bug</a>
</span>
</span>
</td>
</tr>
<tr>
<td><a class="text-bold-600" href="project-bugs.html#">#425</a></td>
<td>
<a class="text-bold-600" href="project-bugs.html#">DataTable inline editable issue</a>
<p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-14.png" title="Joe Doe"/><i class=""></i>
</span>
</td>
<td>
<span class="badge badge-danger">Reopen</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop12" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop12" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-eye"></i> Open Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-edit-2"></i> Edit Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-check"></i> Complete Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-upload"></i> Assign to</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-trash"></i> Delete Bug</a>
</span>
</span>
</td>
</tr>
<tr>
<td><a class="text-bold-600" href="project-bugs.html#">#526</a></td>
<td>
<a class="text-bold-600" href="project-bugs.html#">Vertical menu issue on iPad</a>
<p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-3.png" title="John Doe"/><i class=""></i>
</span>
</td>
<td>
<span class="badge badge-info">In Progress</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop13" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop13" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-eye"></i> Open Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-edit-2"></i> Edit Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-check"></i> Complete Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-upload"></i> Assign to</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-trash"></i> Delete Bug</a>
</span>
</span>
</td>
</tr>
<tr>
<td><a class="text-bold-600" href="project-bugs.html#">#995</a></td>
<td>
<a class="text-bold-600" href="project-bugs.html#">Progress bar animation improvement</a>
<p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-4.png" title="Amy Doe"/><i class=""></i>
</span>
</td>
<td>
<span class="badge badge-warning">Open</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop14" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop14" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-eye"></i> Open Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-edit-2"></i> Edit Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-check"></i> Complete Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-upload"></i> Assign to</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-trash"></i> Delete Bug</a>
</span>
</span>
</td>
</tr>
<tr>
<td><a class="text-bold-600" href="project-bugs.html#">#992</a></td>
<td>
<a class="text-bold-600" href="project-bugs.html#">Authentication API security issue</a>
<p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-5.png" title="Joe Doe"/><i class=""></i>
</span>
</td>
<td>
<span class="badge badge-danger">Reopen</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop15" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop15" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-eye"></i> Open Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-edit-2"></i> Edit Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-check"></i> Complete Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-upload"></i> Assign to</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-trash"></i> Delete Bug</a>
</span>
</span>
</td>
</tr>
<tr>
<td><a class="text-bold-600" href="project-bugs.html#">#956</a></td>
<td>
<a class="text-bold-600" href="project-bugs.html#">Project page chart issue</a>
<p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-16.png" title="Joe Doe"/><i class=""></i>
</span>
</td>
<td>
<span class="badge badge-info">In Progress</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop16" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop16" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-eye"></i> Open Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-edit-2"></i> Edit Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-check"></i> Complete Bug</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-upload"></i> Assign to</a>
<a class="dropdown-item" href="project-bugs.html#"><i class="ft-trash"></i> Delete Bug</a>
</span>
</span>
</td>
</tr>
</tbody>
<tfoot>
<tr>
<th>ID</th>
<th>Bug</th>
<th>Asignee</th>
<th>Status</th>
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
<div class="card-header">
<h4 class="card-title">Predefined Views</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<!-- bug-list search -->
<div class="card-content">
<div class="card-body border-top-blue-grey border-top-lighten-5">
<div class="bug-list-search">
<div class="bug-list-search-content">
<form action="#">
<div class="position-relative">
<input class="form-control" placeholder="Search project bugs..." type="search"/>
<div class="form-control-position">
<i class="ft-search text-size-base text-muted"></i>
</div>
</div>
</form>
</div>
</div>
</div>
<!-- /bug-list search -->
<!-- bug-list view -->
<div class="card-body ">
<div class="list-group">
<a class="list-group-item active" href="project-bugs.html#">All Bugs</a>
<a class="list-group-item list-group-item-action" href="project-bugs.html#">All Open</a>
<a class="list-group-item list-group-item-action" href="project-bugs.html#">All Closed</a>
<a class="list-group-item list-group-item-action" href="project-bugs.html#">My Open</a>
<a class="list-group-item list-group-item-action" href="project-bugs.html#">My Closed</a>
<a class="list-group-item list-group-item-action" href="project-bugs.html#">Overdue Bugs</a>
<a class="list-group-item list-group-item-action disabled" href="project-bugs.html#">Created Today</a>
<a class="list-group-item list-group-item-action" href="project-bugs.html#">Bugs I Follow</a>
</div>
</div>
</div>
</div>
<!--/ Predefined Views -->
<!-- Bug Progress -->
<div class="card">
<div class="card-header">
<h4 class="card-title">Bug Progress</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body ">
<div class="height-400 echart-container" id="bug-pie-chart"></div>
</div>
</div>
</div>
<!--/ Bug Progress -->
<!-- QA Team -->
<div class="card">
<div class="card-header mb-0">
<h4 class="card-title">QA Team</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body py-0 px-0">
<div class="list-group">
<a class="list-group-item" href="javascript:void(0)">
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png"/><i></i></span>
</div>
<div class="media-body">
<h6 class="media-heading mb-0">Margaret Govan</h6>
<p class="font-small-2 mb-0">QA Analyst</p>
</div>
</div>
</a>
<a class="list-group-item" href="javascript:void(0)">
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-busy rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-2.png"/><i></i></span>
</div>
<div class="media-body">
<h6 class="media-heading mb-0">Bret Lezama</h6>
<p class="font-small-2 mb-0">QA Person</p>
</div>
</div>
</a>
<a class="list-group-item" href="javascript:void(0)">
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-3.png"/><i></i></span>
</div>
<div class="media-body">
<h6 class="media-heading mb-0">Carie Berra</h6>
<p class="font-small-2 mb-0">QA Manager</p>
</div>
</div>
</a>
<a class="list-group-item" href="javascript:void(0)">
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-away rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-6.png"/><i></i></span>
</div>
<div class="media-body">
<h6 class="media-heading mb-0">Eric Alsobrook</h6>
<p class="font-small-2 mb-0">QA Lead</p>
</div>
</div>
</a>
<a class="list-group-item" href="javascript:void(0)">
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-away rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-8.png"/><i></i></span>
</div>
<div class="media-body">
<h6 class="media-heading mb-0">John Alsobrook</h6>
<p class="font-small-2 mb-0">QA Person</p>
</div>
</div>
</a>
</div>
</div>
</div>
</div>
<!--/ QA Team -->
</div>
</div>
</div>
