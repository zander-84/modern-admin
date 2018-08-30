<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ProjectTasksAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Project Task Lists</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="project-tasks.html#">Project</a>
</li>
<li class="breadcrumb-item active">Project Task List
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="project-tasks.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="project-tasks.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<section class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">My Task List</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<button class="btn btn-primary btn-sm"><i class="ft-plus white"></i> New Task</button>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-warning btn-sm dropdown-toggle dropdown-menu-right" data-toggle="dropdown" id="btnSearchDrop1" type="button"><i class="ft-download white"></i></button>
<span aria-labelledby="btnSearchDrop1" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="la la-calendar"></i> Due Date</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="la la-random"></i> Priority </a>
<a class="dropdown-item" href="project-tasks.html#"><i class="la la-bar-chart"></i> Progress</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="la la-user"></i> Assign to</a>
</span>
</span>
<button class="btn btn-success btn-sm"><i class="ft-settings white"></i></button>
</div>
</div>
<div class="card-content">
<div class="card-body">
<!-- Task List table -->
<div class="table-responsive">
<table class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle" id="project-task-list">
<thead>
<tr>
<th>
<input class="input-chk" type="checkbox"/>
</th>
<th>Task</th>
<th>Dates</th>
<th>Priority</th>
<th>Progress</th>
<th>Owner</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<!-- ABC Project -->
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">Complete the page header</a>
<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra
                              nibh.
                            </p>
</td>
<td>
<h6 class="mb-0">Basics Tasks &amp; Milestones in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>30 Oct, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-danger">Critical</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="82" aria-valuenow="82" class="progress-bar bg-gradient-x-success" role="progressbar" style="width:82%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-3.png" title="John Doe"/><i class=""></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop2" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">Menu open issue on top</a>
<p class="text-muted">Proin varius libero at magna dignissim lacinia.</p>
</td>
<td>
<h6 class="mb-0">Basics Tasks &amp; Milestones in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>30 Oct, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-primary">Medium</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="30" aria-valuenow="32" class="progress-bar bg-gradient-x-warning" role="progressbar" style="width:32%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-online">
<img alt="avatar" data-placement="right" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-5.png" title="Peater Doe"/><i></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop3" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop3" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">Integrate ChartJS Page</a>
<p class="text-muted"> Curabitur tempor, quam vel pulvinar finibus.</p>
</td>
<td>
<h6 class="mb-0">Basics Tasks &amp; Milestones in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>30 Oct, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-warning">High</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="20" aria-valuenow="20" class="progress-bar bg-gradient-x-danger" role="progressbar" style="width:20%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-online">
<img alt="avatar" data-placement="right" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-6.png" title="Nicole Barrett"/><i></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop4" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop4" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">Support Charls Users</a>
<p class="text-muted"> Donec pulvinar nisi ac convallis porta.</p>
</td>
<td>
<h6 class="mb-0">Basics Tasks &amp; Milestones in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>30 Oct, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-info">Low</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="30" aria-valuenow="30" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:30%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-off">
<img alt="avatar" data-placement="right" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png" title="Jason Robertson"/><i></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop5" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop5" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<!-- ABC Project -->
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">UI/UX Design for the new Mobile APP</a>
<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra
                              nibh.
                            </p>
</td>
<td>
<h6 class="mb-0">UI Tasks &amp; Support in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>12 Nov, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-success">Low</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="100" aria-valuenow="100" class="progress-bar bg-gradient-x-success" role="progressbar" style="width:100%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png" title="Willie Sanchez"/><i class=""></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop6" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop6" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">PSD Creation for the ABC APP</a>
<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra
                              nibh.
                            </p>
</td>
<td>
<h6 class="mb-0">UI Tasks &amp; Support in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>12 Nov, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-primary">Medium</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="50" aria-valuenow="50" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:50%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-8.png" title="Mary Salazar"/><i class=""></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop7" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop7" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<!-- 2 Days Ago -->
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">Fix bootstrap progress bar issue</a>
<p class="text-muted">Aliquam finibus tellus magna, eget viverra augue gravida
                              eget.
                            </p>
</td>
<td>
<h6 class="mb-0">DFD &amp; Support Task in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>15 Dec, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-primary">Medium</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="35" aria-valuenow="35" class="progress-bar bg-gradient-x-warning" role="progressbar" style="width:35%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-9.png" title="Jerry King"/><i class=""></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop8" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop8" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">Support Alib on form wizard</a>
<p class="text-muted"> Donec pulvinar nisi ac convallis porta.</p>
</td>
<td>
<h6 class="mb-0">DFD &amp; Support Task in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>15 Dec, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-info">Low</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="30" aria-valuenow="30" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:30%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-off">
<img alt="avatar" data-placement="right" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-11.png" title="Jason Robertson"/><i></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop9" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop9" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<!-- 3 Days Ago -->
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">Integrate D3 JS Page</a>
<p class="text-muted"> Curabitur tempor, quam vel pulvinar finibus.</p>
</td>
<td>
<h6 class="mb-0">Frontend Task &amp; Testing Task in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>18 Dec, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-warning">High</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="20" aria-valuenow="20" class="progress-bar bg-gradient-x-danger" role="progressbar" style="width:20%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-online">
<img alt="avatar" data-placement="right" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-6.png" title="Nicole Barrett"/><i></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop10" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop10" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">Contact Charls for Vertical Menu issuea</a>
<p class="text-muted"> Donec pulvinar nisi ac convallis porta.</p>
</td>
<td>
<h6 class="mb-0">Frontend Task &amp; Testing Task in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>18 Dec, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-info">Low</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="30" aria-valuenow="30" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:30%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-off">
<img alt="avatar" data-placement="right" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png" title="Jason Robertson"/><i></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop11" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop11" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">UI/UX Design for the new Mobile APP</a>
<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra
                              nibh.
                            </p>
</td>
<td>
<h6 class="mb-0">Frontend Task &amp; Testing Task in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>18 Dec, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-success">Low</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="100" aria-valuenow="100" class="progress-bar bg-gradient-x-success" role="progressbar" style="width:100%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png" title="Willie Sanchez"/><i class=""></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop12" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop12" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">Admin PSD Creation for the ABC APP</a>
<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra
                              nibh.
                            </p>
</td>
<td>
<h6 class="mb-0">Frontend Task &amp; Testing Task in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>18 Dec, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-primary">Medium</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="50" aria-valuenow="50" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:50%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-8.png" title="Mary Salazar"/><i class=""></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop13" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop13" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<!-- 4 Days Ago -->
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">Complete dashboard page design</a>
<p class="text-muted"> Curabitur tempor, quam vel pulvinar finibus.</p>
</td>
<td>
<h6 class="mb-0"> Task &amp; DFD in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>22 Dec, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-warning">High</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="20" aria-valuenow="20" class="progress-bar bg-gradient-x-danger" role="progressbar" style="width:20%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-online">
<img alt="avatar" data-placement="right" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-6.png" title="Nicole Barrett"/><i></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop14" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop14" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">Horizontal Menu Test on Mobile</a>
<p class="text-muted"> Donec pulvinar nisi ac convallis porta.</p>
</td>
<td>
<h6 class="mb-0"> Task &amp; DFD in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>22 Dec, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-info">Low</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="30" aria-valuenow="30" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:30%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-off">
<img alt="avatar" data-placement="right" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png" title="Jason Robertson"/><i></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop15" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop15" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<!-- 5 Days Ago -->
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">UX Design for the Cake Shop</a>
<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra
                              nibh.
                            </p>
</td>
<td>
<h6 class="mb-0"> Task &amp; DFD in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>28 Oct, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-success">Low</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="100" aria-valuenow="100" class="progress-bar bg-gradient-x-success" role="progressbar" style="width:100%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png" title="Willie Sanchez"/><i class=""></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop16" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop16" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">Admin PSD to HTML Conversation</a>
<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra
                              nibh.
                            </p>
</td>
<td>
<h6 class="mb-0"> Task &amp; DFD in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>28 Oct, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-primary">Medium</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="50" aria-valuenow="50" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:50%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-8.png" title="Mary Salazar"/><i class=""></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop17" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop17" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<!-- 6 Days Ago -->
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">WordPress Template for eCommerce</a>
<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra
                              nibh.
                            </p>
</td>
<td>
<h6 class="mb-0">UX Task &amp; DFD in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>12 Oct, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-success">Low</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="100" aria-valuenow="100" class="progress-bar bg-gradient-x-success" role="progressbar" style="width:100%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png" title="Willie Sanchez"/><i class=""></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop18" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop18" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">Create Extension for Magneto</a>
<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra
                              nibh.
                            </p>
</td>
<td>
<h6 class="mb-0">UX Task &amp; DFD in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>12 Oct, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-primary">Medium</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="50" aria-valuenow="50" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:50%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-8.png" title="Mary Salazar"/><i class=""></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop19" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop19" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<!-- 7 Days Ago -->
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">Firefox progress bar issue</a>
<p class="text-muted">Aliquam finibus tellus magna, eget viverra augue gravida
                              eget.
                            </p>
</td>
<td>
<h6 class="mb-0">Support &amp; DFD in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>18 Oct, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-primary">Medium</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="35" aria-valuenow="35" class="progress-bar bg-gradient-x-warning" role="progressbar" style="width:35%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-9.png" title="Jerry King"/><i class=""></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop20" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop20" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">IE Support for new buttons</a>
<p class="text-muted"> Donec pulvinar nisi ac convallis porta.</p>
</td>
<td>
<h6 class="mb-0">Support &amp; DFD in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>18 Oct, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-info">Low</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="30" aria-valuenow="30" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:30%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-off">
<img alt="avatar" data-placement="right" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-11.png" title="Jason Robertson"/><i></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop21" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop21" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<!-- 8 Days Ago -->
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">Complete dashboard page design</a>
<p class="text-muted"> Curabitur tempor, quam vel pulvinar finibus.</p>
</td>
<td>
<h6 class="mb-0">Task &amp; Support in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>18 Oct, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-warning">High</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="20" aria-valuenow="20" class="progress-bar bg-gradient-x-danger" role="progressbar" style="width:20%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-online">
<img alt="avatar" data-placement="right" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-6.png" title="Nicole Barrett"/><i></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop22" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop22" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">RTL Support for All Pages</a>
<p class="text-muted"> Donec pulvinar nisi ac convallis porta.</p>
</td>
<td>
<h6 class="mb-0">Task &amp; Support in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>18 Oct, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-info">Low</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="30" aria-valuenow="30" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:30%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-off">
<img alt="avatar" data-placement="right" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png" title="Jason Robertson"/><i></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop23" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop23" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<!-- 9 Days Ago -->
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">UI Design for the CA</a>
<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra
                              nibh.
                            </p>
</td>
<td>
<h6 class="mb-0">DFD &amp; Support in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>18 Sept, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-success">Low</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="100" aria-valuenow="100" class="progress-bar bg-gradient-x-success" role="progressbar" style="width:100%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png" title="Willie Sanchez"/><i class=""></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop24" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop24" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">PSD to WordPress Conversation</a>
<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra
                              nibh.
                            </p>
</td>
<td>
<h6 class="mb-0">DFD &amp; Support in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>18 Sept, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-primary">Medium</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="50" aria-valuenow="50" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:50%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-8.png" title="Mary Salazar"/><i class=""></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop25" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop25" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<!-- 10 Days Ago -->
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">Complete Support page design</a>
<p class="text-muted"> Curabitur tempor, quam vel pulvinar finibus.</p>
</td>
<td>
<h6 class="mb-0"> UI Fix &amp; Support in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>25 Sept, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-warning">High</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="20" aria-valuenow="20" class="progress-bar bg-gradient-x-danger" role="progressbar" style="width:20%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-online">
<img alt="avatar" data-placement="right" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-6.png" title="Nicole Barrett"/><i></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop26" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop26" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">Create App Landing page</a>
<p class="text-muted"> Donec pulvinar nisi ac convallis porta.</p>
</td>
<td>
<h6 class="mb-0"> UI Fix &amp; Support in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>25 Sept, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-info">Low</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="30" aria-valuenow="30" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:30%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-off">
<img alt="avatar" data-placement="right" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png" title="Jason Robertson"/><i></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop27" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop27" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<!-- 11 Days Ago -->
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">UI Design for the CCC</a>
<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra
                              nibh.
                            </p>
</td>
<td>
<h6 class="mb-0"> UI/UX Task &amp; Support in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>05 Sept, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-success">Low</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="100" aria-valuenow="100" class="progress-bar bg-gradient-x-success" role="progressbar" style="width:100%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png" title="Willie Sanchez"/><i class=""></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop28" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop28" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
<tr>
<td>
<input class="input-chk" type="checkbox"/>
</td>
<td>
<a class="text-bold-600" href="project-tasks.html#">PSD to Magento Conversation</a>
<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra
                              nibh.
                            </p>
</td>
<td>
<h6 class="mb-0"> UI/UX Task &amp; Support in
                              <span class="text-bold-600">ABC Project</span> on
                              <em>05 Sept, 2017</em>
</h6>
</td>
<td>
<span class="badge badge-default badge-primary">Medium</span>
</td>
<td>
<div class="progress progress-sm">
<div aria-valuemax="100" aria-valuemin="50" aria-valuenow="50" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:50%"></div>
</div>
</td>
<td class="text-center">
<span class="avatar avatar-busy">
<img alt="avatar" data-placement="right" data-toggle="tooltip" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-8.png" title="Mary Salazar"/><i class=""></i>
</span>
</td>
<td>
<span class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnSearchDrop29" type="button"><i class="la la-cog"></i></button>
<span aria-labelledby="btnSearchDrop29" class="dropdown-menu mt-1 dropdown-menu-right">
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-eye"></i> Open Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-edit-2"></i> Edit Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-check"></i> Complete Task</a>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-upload"></i> Assign to</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="project-tasks.html#"><i class="ft-trash"></i> Delete Task</a>
</span>
</span>
</td>
</tr>
</tbody>
<tfoot>
<tr>
<th>
<input class="input-chk" type="checkbox"/>
</th>
<th>Task</th>
<th>Dates</th>
<th>Priority</th>
<th>Progress</th>
<th>Owner</th>
<th>Actions</th>
</tr>
</tfoot>
</table>
</div>
<!--/ Task List table -->
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>