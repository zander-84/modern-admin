<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ComponentProgressAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Progress</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="component-progress.html#">Components</a>
</li>
<li class="breadcrumb-item active">Progress
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="component-progress.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="component-progress.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="component-progress.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="component-progress.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Basic Progress start -->
<section id="basic-progress">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Progress</h4>
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
<div class="card-body text-center">
<div class="text-center" id="example-caption-1">Reticulating splines… 0%</div>
<div class="progress">
<div aria-describedby="example-caption-1" aria-valuemax="100" aria-valuemin="0" aria-valuenow="0" class="progress-bar" role="progressbar"></div>
</div>
<div class="text-center" id="example-caption-2">Reticulating splines… 25%</div>
<div class="progress">
<div aria-describedby="example-caption-2" aria-valuemax="100" aria-valuemin="25" aria-valuenow="25" class="progress-bar" role="progressbar" style="width:25%"></div>
</div>
<div class="text-center" id="example-caption-3">Reticulating splines… 50%</div>
<div class="progress">
<div aria-describedby="example-caption-3" aria-valuemax="100" aria-valuemin="50" aria-valuenow="50" class="progress-bar" role="progressbar" style="width:50%"></div>
</div>
<div class="text-center" id="example-caption-4">Reticulating splines… 75%</div>
<div class="progress">
<div aria-describedby="example-caption-4" aria-valuemax="100" aria-valuemin="75" aria-valuenow="75" class="progress-bar" role="progressbar" style="width:75%"></div>
</div>
<div class="text-center" id="example-caption-5">Reticulating splines… 100%</div>
<div class="progress">
<div aria-describedby="example-caption-5" aria-valuemax="100" aria-valuemin="100" aria-valuenow="100" class="progress-bar" role="progressbar" style="width:100%"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Basic Progress end -->
<!-- Colored Progress start -->
<section id="colored-progress">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Colored Progress</h4>
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
<div class="card-body text-center">
<p>Progress bars use some of the same button and alert classes for
                      consistent styles.</p>
<div class="progress">
<div aria-valuemax="100" aria-valuemin="20" aria-valuenow="20" class="progress-bar" role="progressbar" style="width:20%"></div>
</div>
<div class="progress">
<div aria-valuemax="100" aria-valuemin="40" aria-valuenow="40" class="progress-bar bg-success" role="progressbar" style="width:40%"></div>
</div>
<div class="progress">
<div aria-valuemax="100" aria-valuemin="60" aria-valuenow="60" class="progress-bar bg-danger" role="progressbar" style="width:60%"></div>
</div>
<div class="progress">
<div aria-valuemax="100" aria-valuemin="80" aria-valuenow="80" class="progress-bar bg-info" role="progressbar" style="width:80%"></div>
</div>
<div class="progress">
<div aria-valuemax="100" aria-valuemin="100" aria-valuenow="100" class="progress-bar bg-warning" role="progressbar" style="width:100%"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Colored Progress end -->
<!-- Labeled Progress start -->
<section id="labeled-progress">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Labeled Progress</h4>
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
<div class="card-body text-center">
<div class="progress">
<div aria-valuemax="100" aria-valuemin="20" aria-valuenow="20" class="progress-bar" role="progressbar" style="width:20%">20%</div>
</div>
<div class="progress">
<div aria-valuemax="100" aria-valuemin="40" aria-valuenow="40" class="progress-bar bg-success" role="progressbar" style="width:40%">40%</div>
</div>
<div class="progress">
<div aria-valuemax="100" aria-valuemin="60" aria-valuenow="60" class="progress-bar bg-danger" role="progressbar" style="width:60%">60%</div>
</div>
<div class="progress">
<div aria-valuemax="100" aria-valuemin="80" aria-valuenow="80" class="progress-bar bg-info" role="progressbar" style="width:80%">80%</div>
</div>
<div class="progress">
<div aria-valuemax="100" aria-valuemin="100" aria-valuenow="100" class="progress-bar bg-warning" role="progressbar" style="width:100%">100%</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Labeled Progress end -->
<!-- Striped Progress start -->
<section id="striped-progress">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Striped Progress</h4>
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
<div class="card-body text-center">
<p>Uses a gradient to create a striped effect.</p>
<div class="progress">
<div aria-valuemax="100" aria-valuemin="20" aria-valuenow="20" class="progress-bar progress-bar-striped" role="progressbar" style="width:20%"></div>
</div>
<div class="progress">
<div aria-valuemax="100" aria-valuemin="40" aria-valuenow="40" class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width:40%"></div>
</div>
<div class="progress">
<div aria-valuemax="100" aria-valuemin="60" aria-valuenow="60" class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width:60%"></div>
</div>
<div class="progress">
<div aria-valuemax="100" aria-valuemin="80" aria-valuenow="80" class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width:80%"></div>
</div>
<div class="progress">
<div aria-valuemax="100" aria-valuemin="100" aria-valuenow="100" class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width:100%"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Striped Progress end -->
<!-- Animated Progress start -->
<section id="animated-progress">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Animated Progress</h4>
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
<div class="card-body text-center">
<p>Progressbar with animated effect.</p>
<div class="progress">
<div aria-valuemax="100" aria-valuemin="20" aria-valuenow="20" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width:20%"></div>
</div>
<div class="progress">
<div aria-valuemax="100" aria-valuemin="40" aria-valuenow="40" class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width:40%"></div>
</div>
<div class="progress">
<div aria-valuemax="100" aria-valuemin="60" aria-valuenow="60" class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width:60%"></div>
</div>
<div class="progress">
<div aria-valuemax="100" aria-valuemin="80" aria-valuenow="80" class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width:80%"></div>
</div>
<div class="progress">
<div aria-valuemax="100" aria-valuemin="100" aria-valuenow="100" class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width:100%"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Animated Progress end -->
<!-- Progress Sizes start -->
<section id="progress-sizes">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Progress Sizes</h4>
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
<div class="card-body text-center">
<p>Different height sizes using inline styles. For Default progress,
                      No size class needed.</p>
<div class="progress" style="height: 18px;">
<div aria-valuemax="100" aria-valuemin="20" aria-valuenow="20" class="progress-bar progress-bar-striped" role="progressbar" style="width:20%;"></div>
</div>
<div class="progress" style="height: 14px;">
<div aria-valuemax="100" aria-valuemin="40" aria-valuenow="40" class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width:40%;"></div>
</div>
<div class="progress" style="height: 10px;">
<div aria-valuemax="100" aria-valuemin="60" aria-valuenow="60" class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width:60%;"></div>
</div>
<div class="progress" style="height: 7px;">
<div aria-valuemax="100" aria-valuemin="80" aria-valuenow="80" class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width:80%;"></div>
</div>
<div class="progress" style="height: 3px;">
<div aria-valuemax="100" aria-valuemin="100" aria-valuenow="100" class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width:100%;"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Progress Sizes end -->
</div>
</div>
</div>