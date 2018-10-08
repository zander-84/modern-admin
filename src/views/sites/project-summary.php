<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ProjectSummaryAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Project Summary</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="project-summary.html#">Project</a>
</li>
<li class="breadcrumb-item active">Project Summary
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="project-summary.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="project-summary.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="project-summary.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="project-summary.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-detached content-left">
<div class="content-body">
<section class="row">
<div class="col-md-12">
<div class="card">
<div class="card-head">
<div class="card-header">
<h4 class="card-title">iOS APP Development</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<span class="badge badge-default badge-warning">Mobile</span>
<span class="badge badge-default badge-success">New</span>
<span class="badge badge-default badge-info">iOS</span>
</div>
</div>
<div class="px-1">
<ul class="list-inline list-inline-pipe text-center p-1 border-bottom-grey border-bottom-lighten-3">
<li>Project Owner:
                        <span class="text-muted">Margaret Govan</span>
</li>
<li>Start:
                        <span class="text-muted">01/Feb/2017</span>
</li>
<li>Due on:
                        <span class="text-muted">01/Oct/2017</span>
</li>
<li><a class="text-muted" data-placement="bottom" data-toggle="tooltip" href="project-summary.html#" title="Export as PDF"><i class="la la-file-pdf-o"></i></a></li>
</ul>
</div>
</div>
<!-- project-info -->
<div class="card-body row" id="project-info">
<div class="project-info-count col-lg-4 col-md-12">
<div class="project-info-icon">
<h2>12</h2>
<div class="project-info-sub-icon">
<span class="la la-user"></span>
</div>
</div>
<div class="project-info-text pt-1">
<h5>Project Users</h5>
</div>
</div>
<div class="project-info-count col-lg-4 col-md-12">
<div class="project-info-icon">
<h2>160</h2>
<div class="project-info-sub-icon">
<span class="la la-calendar-check-o"></span>
</div>
</div>
<div class="project-info-text pt-1">
<h5>Project Task</h5>
</div>
</div>
<div class="project-info-count col-lg-4 col-md-12">
<div class="project-info-icon">
<h2>20</h2>
<div class="project-info-sub-icon">
<span class="la la-bug"></span>
</div>
</div>
<div class="project-info-text pt-1">
<h5>Project Bug</h5>
</div>
</div>
</div>
<!-- project-info -->
<div class="card-body">
<div class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
<span>Egal's Eye View Of Project Status</span>
</div>
<div class="row py-2">
<div class="col-lg-6 col-md-12">
<div class="insights px-2">
<div>
<span class="text-info h3">82%</span>
<span class="float-right">Tasks</span>
</div>
<div class="progress progress-md mt-1 mb-0">
<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar bg-info" role="progressbar" style="width: 82%"></div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="insights px-2">
<div>
<span class="text-success h3">78%</span>
<span class="float-right">TaskLists</span>
</div>
<div class="progress progress-md mt-1 mb-0">
<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar bg-success" role="progressbar" style="width: 78%"></div>
</div>
</div>
</div>
</div>
<div class="row py-2">
<div class="col-lg-6 col-md-12">
<div class="insights px-2">
<div>
<span class="text-warning h3">68%</span>
<span class="float-right">Milestones</span>
</div>
<div class="progress progress-md mt-1 mb-0">
<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar bg-warning" role="progressbar" style="width: 68%"></div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="insights px-2">
<div>
<span class="text-danger h3">62%</span>
<span class="float-right">Bugs</span>
</div>
<div class="progress progress-md mt-1 mb-0">
<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar bg-danger" role="progressbar" style="width: 62%"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Task Progress -->
<section class="row">
<div class="col-xl-6 col-lg-12 col-md-12">
<div class="card">
<div class="card-head">
<div class="card-header">
<h4 class="card-title">Task Progress</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="card-content">
<div class="card-body">
<div class="height-400 echart-container" id="task-pie-chart"></div>
</div>
</div>
</div>
</div>
<!--/ Task Progress -->
<!-- Bug Progress -->
<div class="col-xl-6 col-lg-12 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Bug Progress</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body">
<div class="height-400 echart-container" id="bug-pie-chart"></div>
</div>
</div>
</div>
</div>
<!--/ Bug Progress -->
</section>
</div>
</div>
<div class="sidebar-detached sidebar-right">
<div class="sidebar">
<div class="project-sidebar-content">
<div class="card">
<div class="card-header">
<h4 class="card-title">Project Details</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<!-- project search -->
<div class="card-body border-top-blue-grey border-top-lighten-5">
<div class="project-search">
<div class="project-search-content">
<form action="#">
<div class="position-relative">
<input class="form-control" placeholder="Search project task, bug, users..." type="search"/>
<div class="form-control-position">
<i class="la la-search text-size-base text-muted"></i>
</div>
</div>
</form>
</div>
</div>
</div>
<!-- /project search -->
<!-- project progress -->
<div class="card-body">
<div class="insights">
<p>Project Overall Progress
                      <span class="float-right text-warning h3">72%</span>
</p>
<div class="progress progress-sm mt-1 mb-0">
<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar bg-warning" role="progressbar" style="width: 72%"></div>
</div>
</div>
</div>
<!-- project progress -->
</div>
</div>
<!-- Project Overview -->
<div class="card">
<div class="card-header">
<h4 class="card-title">Project Overview</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body">
<p>
<strong>Pellentesque habitant morbi tristique</strong> senectus et netus
                    et malesuada fames ac turpis egestas. Vestibulum tortor quam,
                    feugiat vitae.
                    <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend
                    leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum
                    erat wisi, condimentum sed, <code>commodo vitae</code>, ornare
                    sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum,
                    eros ipsum rutrum orci, sagittis tempus lacus enim ac dui.
                    <a href="project-summary.html#">Donec non enim</a>.</p>
<p>
<strong>Lorem ipsum dolor sit</strong>
</p>
<ol>
<li>Consectetuer adipiscing</li>
<li>Aliquam tincidunt mauris</li>
<li>Consectetur adipiscing</li>
<li>Vivamus pretium ornare</li>
<li>Curabitur massa</li>
</ol>
</div>
</div>
</div>
<!--/ Project Overview -->
<!-- Project Users -->
<div class="card">
<div class="card-header mb-0">
<h4 class="card-title">Project Users</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-content">
<div class="card-body py-0 px-0">
<div class="list-group">
<a class="list-group-item" href="javascript:void(0)">
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png"/><i></i></span>
</div>
<div class="media-body w-100">
<h6 class="media-heading mb-0">Margaret Govan</h6>
<p class="font-small-2 mb-0 text-muted">Project Owner</p>
</div>
</div>
</a>
<a class="list-group-item" href="javascript:void(0)">
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-busy rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-2.png"/><i></i></span>
</div>
<div class="media-body w-100">
<h6 class="media-heading mb-0">Bret Lezama</h6>
<p class="font-small-2 mb-0 text-muted">Project Manager</p>
</div>
</div>
</a>
<a class="list-group-item" href="javascript:void(0)">
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-3.png"/><i></i></span>
</div>
<div class="media-body w-100">
<h6 class="media-heading mb-0">Carie Berra</h6>
<p class="font-small-2 mb-0 text-muted">Senior Developer</p>
</div>
</div>
</a>
<a class="list-group-item" href="javascript:void(0)">
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-away rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-6.png"/><i></i></span>
</div>
<div class="media-body w-100">
<h6 class="media-heading mb-0">Eric Alsobrook</h6>
<p class="font-small-2 mb-0 text-muted">UI Developer</p>
</div>
</div>
</a>
<a class="list-group-item" href="javascript:void(0)">
<div class="media">
<div class="media-left pr-1">
<span class="avatar avatar-sm avatar-busy rounded-circle">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png"/><i></i></span>
</div>
<div class="media-body w-100">
<h6 class="media-heading mb-0">Berra Eric</h6>
<p class="font-small-2 mb-0 text-muted">UI Developer</p>
</div>
</div>
</a>
</div>
</div>
</div>
</div>
</div>
<!--/ Project Users -->
</div>
</div>
</div>
