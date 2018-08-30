<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\FormLayoutStripedLabelsAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Striped Label Forms</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="form-layout-striped-labels.html#">Form Layouts</a>
</li>
<li class="breadcrumb-item active"><a href="form-layout-striped-labels.html#">Striped Label Forms</a>
</li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="form-layout-striped-labels.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="form-layout-striped-labels.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="form-layout-striped-labels.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="form-layout-striped-labels.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Striped label form layout section start -->
<section id="striped-label-form-layouts">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="striped-label-layout-basic">Project Info</h4>
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
<div class="card-content collapse show">
<div class="card-body">
<div class="card-text">
<p>Add <code>.striped-labels</code> to form tag to add striped
                        labels. In this example <code>.form-horizontal</code> and
                        <code>.form-bordered</code> is used to show the striped labels
                        functionality.
                      </p>
</div>
<form class="form form-horizontal striped-labels form-bordered">
<div class="form-body">
<h4 class="form-section"><i class="la la-user"></i> Personal Info</h4>
<div class="form-group row">
<label class="col-md-3 label-control" for="projectinput1">First Name</label>
<div class="col-md-9">
<input class="form-control" id="projectinput1" name="fname" placeholder="First Name" type="text"/>
</div>
</div>
<div class="form-group row">
<label class="col-md-3 label-control" for="projectinput2">Last Name</label>
<div class="col-md-9">
<input class="form-control" id="projectinput2" name="lname" placeholder="Last Name" type="text"/>
</div>
</div>
<div class="form-group row">
<label class="col-md-3 label-control" for="projectinput3">E-mail</label>
<div class="col-md-9">
<input class="form-control" id="projectinput3" name="email" placeholder="E-mail" type="text"/>
</div>
</div>
<div class="form-group row last">
<label class="col-md-3 label-control" for="projectinput4">Contact Number</label>
<div class="col-md-9">
<input class="form-control" id="projectinput4" name="phone" placeholder="Phone" type="text"/>
</div>
</div>
<h4 class="form-section"><i class="la la-clipboard"></i> Requirements</h4>
<div class="form-group row">
<label class="col-md-3 label-control" for="projectinput5">Company</label>
<div class="col-md-9">
<input class="form-control" id="projectinput5" name="company" placeholder="Company Name" type="text"/>
</div>
</div>
<div class="form-group row">
<label class="col-md-3 label-control" for="projectinput6">Interested in</label>
<div class="col-md-9">
<select class="form-control" id="projectinput6" name="interested">
<option disabled="" selected="" value="none">Interested in</option>
<option value="design">design</option>
<option value="development">development</option>
<option value="illustration">illustration</option>
<option value="branding">branding</option>
<option value="video">video</option>
</select>
</div>
</div>
<div class="form-group row">
<label class="col-md-3 label-control" for="projectinput7">Budget</label>
<div class="col-md-9">
<select class="form-control" id="projectinput7" name="budget">
<option disabled="" selected="" value="0">Budget</option>
<option value="less than 5000$">less than 5000$</option>
<option value="5000$ - 10000$">5000$ - 10000$</option>
<option value="10000$ - 20000$">10000$ - 20000$</option>
<option value="more than 20000$">more than 20000$</option>
</select>
</div>
</div>
<div class="form-group row">
<label class="col-md-3 label-control">Select File</label>
<div class="col-md-9">
<label class="file center-block" id="projectinput8">
<input id="file" type="file"/>
<span class="file-custom"></span>
</label>
</div>
</div>
<div class="form-group row last">
<label class="col-md-3 label-control" for="projectinput9">About Project</label>
<div class="col-md-9">
<textarea class="form-control" id="projectinput9" name="comment" placeholder="About Project" rows="5"></textarea>
</div>
</div>
</div>
<div class="form-actions">
<button class="btn btn-warning mr-1" type="button">
<i class="la la-remove"></i> Cancel
                        </button>
<button class="btn btn-primary" type="submit">
<i class="la la-check"></i> Save
                        </button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="striped-label-layout-icons">Timesheet</h4>
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
<div class="card-content collapse show">
<div class="card-body">
<div class="card-text">
<p>Add <code>.striped-labels</code> to form tag to add striped
                        labels. In this example icons are used with form controls
                        to show the striped labels functionality.</p>
</div>
<form class="form form-horizontal striped-labels form-bordered">
<div class="form-body">
<div class="form-group row">
<label class="col-md-3 label-control" for="timesheetinput1">Employee Name</label>
<div class="col-md-9">
<div class="position-relative has-icon-left">
<input class="form-control" id="timesheetinput1" name="employeename" placeholder="employee name" type="text"/>
<div class="form-control-position">
<i class="la la-user"></i>
</div>
</div>
</div>
</div>
<div class="form-group row">
<label class="col-md-3 label-control" for="timesheetinput2">Project Name</label>
<div class="col-md-9">
<div class="position-relative has-icon-left">
<input class="form-control" id="timesheetinput2" name="projectname" placeholder="project name" type="text"/>
<div class="form-control-position">
<i class="la la-briefcase"></i>
</div>
</div>
</div>
</div>
<div class="form-group row">
<label class="col-md-3 label-control" for="timesheetinput3">Date</label>
<div class="col-md-9">
<div class="position-relative has-icon-left">
<input class="form-control" id="timesheetinput3" name="date" type="date"/>
<div class="form-control-position">
<i class="la la-calendar"></i>
</div>
</div>
</div>
</div>
<div class="form-group row">
<label class="col-md-3 label-control">Rate Per Hour</label>
<div class="col-md-9">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">$</span>
</div>
<input aria-label="Amount (to the nearest dollar)" class="form-control" name="rateperhour" placeholder="Rate Per Hour" type="text"/>
<div class="input-group-append">
<span class="input-group-text">.00</span>
</div>
</div>
</div>
</div>
<div class="form-group row">
<label class="col-md-3 label-control" for="timesheetinput5">Start Time</label>
<div class="col-md-9">
<div class="position-relative has-icon-left">
<input class="form-control" id="timesheetinput5" name="starttime" type="time"/>
<div class="form-control-position">
<i class="la la-clock"></i>
</div>
</div>
</div>
</div>
<div class="form-group row">
<label class="col-md-3 label-control" for="timesheetinput6">End Time</label>
<div class="col-md-9">
<div class="position-relative has-icon-left">
<input class="form-control" id="timesheetinput6" name="endtime" type="time"/>
<div class="form-control-position">
<i class="la la-clock"></i>
</div>
</div>
</div>
</div>
<div class="form-group row last">
<label class="col-md-3 label-control" for="timesheetinput7">Notes</label>
<div class="col-md-9">
<div class="position-relative has-icon-left">
<textarea class="form-control" id="timesheetinput7" name="notes" placeholder="notes" rows="5"></textarea>
<div class="form-control-position">
<i class="la la-file"></i>
</div>
</div>
</div>
</div>
</div>
<div class="form-actions right">
<button class="btn btn-warning mr-1" type="button">
<i class="la la-remove"></i> Cancel
                        </button>
<button class="btn btn-primary" type="submit">
<i class="la la-check"></i> Save
                        </button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 offset-md-3">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="striped-label-layout-card-center">Event Registration</h4>
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
<div class="card-content collapse show">
<div class="card-body">
<div class="card-text">
<p>Add <code>.striped-labels</code> to form tag to add striped
                        labels. In this example centered card is used to show the
                        striped labels functionality.</p>
</div>
<form class="form form-horizontal striped-labels">
<div class="form-body">
<div class="form-group row">
<label class="col-md-3 label-control" for="eventRegInput1">Full Name</label>
<div class="col-md-9">
<input class="form-control" id="eventRegInput1" name="fullname" placeholder="name" type="text"/>
</div>
</div>
<div class="form-group row">
<label class="col-md-3 label-control" for="eventRegInput2">Title</label>
<div class="col-md-9">
<input class="form-control" id="eventRegInput2" name="title" placeholder="title" type="text"/>
</div>
</div>
<div class="form-group row">
<label class="col-md-3 label-control" for="eventRegInput3">Company</label>
<div class="col-md-9">
<input class="form-control" id="eventRegInput3" name="company" placeholder="company" type="text"/>
</div>
</div>
<div class="form-group row">
<label class="col-md-3 label-control" for="eventRegInput4">Email</label>
<div class="col-md-9">
<input class="form-control" id="eventRegInput4" name="email" placeholder="email" type="email"/>
</div>
</div>
<div class="form-group row">
<label class="col-md-3 label-control" for="eventRegInput5">Contact Number</label>
<div class="col-md-9">
<input class="form-control" id="eventRegInput5" name="contact" placeholder="contact number" type="tel"/>
</div>
</div>
<div class="form-group row last">
<label class="col-md-3 label-control">Existing Customer</label>
<div class="col-md-9">
<div class="input-group p-1">
<div class="d-inline-block custom-control custom-radio mr-1">
<input checked="" class="custom-control-input" id="yes" name="customer1" type="radio"/>
<label class="custom-control-label" for="yes">Yes</label>
</div>
<div class="d-inline-block custom-control custom-radio">
<input class="custom-control-input" id="no" name="customer1" type="radio"/>
<label class="custom-control-label" for="no">No</label>
</div>
</div>
</div>
</div>
</div>
<div class="form-actions center">
<button class="btn btn-warning mr-1" type="button">
<i class="la la-remove"></i> Cancel
                        </button>
<button class="btn btn-primary" type="submit">
<i class="la la-check"></i> Save
                        </button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Striped label form layout section end -->
</div>
</div>
</div>