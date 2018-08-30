<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\FormLayoutFormActionsAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Form Actions</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="form-layout-form-actions.html#">Form Layouts</a>
</li>
<li class="breadcrumb-item active"><a href="form-layout-form-actions.html#">Form Actions</a>
</li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="form-layout-form-actions.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="form-layout-form-actions.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="form-layout-form-actions.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="form-layout-form-actions.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Form actions layout section start -->
<section id="form-action-layouts">
<div class="row match-height">
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="from-actions-top-left">Project Info</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collpase show">
<div class="card-body">
<div class="card-text">
<div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-info"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Form Actions On Top Left.</strong>
</div>
<p>To add form actions on top of the form add a div with <code>.form-actions</code>                        class to begin the form. Add <code>.top</code> class to add
                        border below form actions.</p>
</div>
<form class="form">
<div class="form-actions top">
<button class="btn btn-warning mr-1" type="button">
<i class="ft-x"></i> Cancel
                        </button>
<button class="btn btn-primary" type="submit">
<i class="la la-check-square-o"></i> Save
                        </button>
</div>
<div class="form-body">
<h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
<div class="row">
<div class="form-group col-md-6 mb-2">
<label for="projectinput1">First Name</label>
<input class="form-control" id="projectinput1" name="fname" placeholder="First Name" type="text"/>
</div>
<div class="form-group col-md-6 mb-2">
<label for="projectinput2">Last Name</label>
<input class="form-control" id="projectinput2" name="lname" placeholder="Last Name" type="text"/>
</div>
</div>
<div class="row">
<div class="form-group col-md-6 mb-2">
<label for="projectinput3">E-mail</label>
<input class="form-control" id="projectinput3" name="email" placeholder="E-mail" type="text"/>
</div>
<div class="form-group col-md-6 mb-2">
<label for="projectinput4">Contact Number</label>
<input class="form-control" id="projectinput4" name="phone" placeholder="Phone" type="text"/>
</div>
</div>
<h4 class="form-section"><i class="ft-clipboard"></i> Requirements</h4>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="projectinput5">Company</label>
<input class="form-control" id="projectinput5" name="company" placeholder="Company Name" type="text"/>
</div>
</div>
<div class="row">
<div class="form-group col-md-6 mb-2">
<label for="projectinput6">Interested in</label>
<select class="form-control" id="projectinput6" name="interested">
<option disabled="" selected="" value="none">Interested in</option>
<option value="design">design</option>
<option value="development">development</option>
<option value="illustration">illustration</option>
<option value="branding">branding</option>
<option value="video">video</option>
</select>
</div>
<div class="form-group col-md-6 mb-2">
<label for="projectinput7">Budget</label>
<select class="form-control" id="projectinput7" name="budget">
<option disabled="" selected="" value="0">Budget</option>
<option value="less than 5000$">less than 5000$</option>
<option value="5000$ - 10000$">5000$ - 10000$</option>
<option value="10000$ - 20000$">10000$ - 20000$</option>
<option value="more than 20000$">more than 20000$</option>
</select>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label>Select File</label>
<label class="file center-block" id="projectinput8">
<input id="file" type="file"/>
<span class="file-custom"></span>
</label>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="projectinput9">About Project</label>
<textarea class="form-control" id="projectinput9" name="comment" placeholder="About Project" rows="5"></textarea>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="from-actions-bottom-right">User Profile</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collpase show">
<div class="card-body">
<div class="card-text">
<div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-info"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Form Actions On Bottom Right.</strong>
</div>
<p>To add form actions on bottom of the form add a div with <code>.form-actions</code>                        class to end the form. This is the default position for form
                        actions. We have added <code>.right</code> class to move
                        buttons on the right side.</p>
</div>
<form class="form">
<div class="form-body">
<h4 class="form-section"><i class="la la-eye"></i> About User</h4>
<div class="row">
<div class="form-group col-md-6 mb-2">
<label for="userinput1">Fist Name</label>
<input class="form-control border-primary" id="userinput1" name="name" placeholder="Name" type="text"/>
</div>
<div class="form-group col-md-6 mb-2">
<label for="userinput2">Last Name</label>
<input class="form-control border-primary" id="userinput2" name="company" placeholder="Company" type="text"/>
</div>
</div>
<div class="row">
<div class="form-group col-md-6 mb-2">
<label for="userinput3">Username</label>
<input class="form-control border-primary" id="userinput3" name="username" placeholder="Username" type="text"/>
</div>
<div class="form-group col-md-6 mb-2">
<label for="userinput4">Nick Name</label>
<input class="form-control border-primary" id="userinput4" name="nickname" placeholder="Nick Name" type="text"/>
</div>
</div>
<h4 class="form-section"><i class="ft-mail"></i> Contact Info &amp; Bio</h4>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="userinput5">Email</label>
<input class="form-control border-primary" id="userinput5" placeholder="email" type="email"/>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="userinput6">Website</label>
<input class="form-control border-primary" id="userinput6" placeholder="http://" type="url"/>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label>Contact Number</label>
<input class="form-control border-primary" id="userinput7" placeholder="Contact Number" type="tel"/>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="userinput8">Bio</label>
<textarea class="form-control border-primary" id="userinput8" name="bio" placeholder="Bio" rows="5"></textarea>
</div>
</div>
</div>
<div class="form-actions right">
<button class="btn btn-warning mr-1" type="button">
<i class="ft-x"></i> Cancel
                        </button>
<button class="btn btn-primary" type="submit">
<i class="la la-check-square-o"></i> Save
                        </button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="row match-height">
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="from-actions-top-bottom-left">Issue Tracking</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collpase show">
<div class="card-body">
<div class="card-text">
<div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-info"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Form Actions On Top And Bottom Left.</strong>
</div>
<p>To add form actions on top and bottom of the form add a div
                        with <code>.form-actions</code> class to start and end the
                        form.
                      </p>
</div>
<form class="form">
<div class="form-body">
<div class="form-actions top">
<button class="btn btn-warning mr-1" type="button">
<i class="ft-x"></i> Cancel
                          </button>
<button class="btn btn-primary" type="submit">
<i class="la la-check-square-o"></i> Save
                          </button>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="issueinput1">Issue Title</label>
<input class="form-control" data-placement="top" data-title="Issue Title" data-toggle="tooltip" data-trigger="hover" id="issueinput1" name="issuetitle" placeholder="issue title" type="text"/>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="issueinput2">Opened By</label>
<input class="form-control" data-placement="top" data-title="Opened By" data-toggle="tooltip" data-trigger="hover" id="issueinput2" name="openedby" placeholder="opened by" type="text"/>
</div>
</div>
<div class="row">
<div class="form-group col-md-6 mb-2">
<label for="issueinput3">Date Opened</label>
<input class="form-control" data-placement="top" data-title="Date Opened" data-toggle="tooltip" data-trigger="hover" id="issueinput3" name="dateopened" type="date"/>
</div>
<div class="form-group col-md-6 mb-2">
<label for="issueinput4">Date Fixed</label>
<input class="form-control" data-placement="top" data-title="Date Fixed" data-toggle="tooltip" data-trigger="hover" id="issueinput4" name="datefixed" type="date"/>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="issueinput5">Priority</label>
<select class="form-control" data-placement="top" data-title="Priority" data-toggle="tooltip" data-trigger="hover" id="issueinput5" name="priority">
<option value="low">Low</option>
<option value="medium">Medium</option>
<option value="high">High</option>
</select>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="issueinput6">Status</label>
<select class="form-control" data-placement="top" data-title="Status" data-toggle="tooltip" data-trigger="hover" id="issueinput6" name="status">
<option value="not started">Not Started</option>
<option value="started">Started</option>
<option value="fixed">Fixed</option>
</select>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="issueinput8">Comments</label>
<textarea class="form-control" data-placement="top" data-title="Comments" data-toggle="tooltip" data-trigger="hover" id="issueinput8" name="comments" placeholder="comments" rows="5"></textarea>
</div>
</div>
</div>
<div class="form-actions">
<button class="btn btn-warning mr-1" type="button">
<i class="ft-x"></i> Cancel
                        </button>
<button class="btn btn-primary" type="submit">
<i class="la la-check-square-o"></i> Save
                        </button>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="from-actions-top-bottom-right">Timesheet</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collpase show">
<div class="card-body">
<div class="card-text">
<div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-info"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Form Actions On Top And Bottom Right.</strong>
</div>
<p>To add form actions on top and bottom of the form add a div
                        with <code>.form-actions</code> class to start and end the
                        form. Add <code>.right</code> class to align the form action
                        buttons to right.</p>
</div>
<form class="form">
<div class="form-body">
<div class="form-actions top right">
<button class="btn btn-warning mr-1" type="button">
<i class="ft-x"></i> Cancel
                          </button>
<button class="btn btn-primary" type="submit">
<i class="la la-check-square-o"></i> Save
                          </button>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="timesheetinput1">Employee Name</label>
<div class="position-relative has-icon-left">
<input class="form-control" id="timesheetinput1" name="employeename" placeholder="employee name" type="text"/>
<div class="form-control-position">
<i class="ft-user"></i>
</div>
</div>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="timesheetinput2">Project Name</label>
<div class="position-relative has-icon-left">
<input class="form-control" id="timesheetinput2" name="projectname" placeholder="project name" type="text"/>
<div class="form-control-position">
<i class="la la-briefcase"></i>
</div>
</div>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="timesheetinput3">Date</label>
<div class="position-relative has-icon-left">
<input class="form-control" id="timesheetinput3" name="date" type="date"/>
<div class="form-control-position">
<i class="ft-message-square"></i>
</div>
</div>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label>Rate Per Hour</label>
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
<div class="row">
<div class="form-group col-md-6 mb-2">
<label for="timesheetinput5">Start Time</label>
<div class="position-relative has-icon-left">
<input class="form-control" id="timesheetinput5" name="starttime" type="time"/>
<div class="form-control-position">
<i class="ft-clock"></i>
</div>
</div>
</div>
<div class="form-group col-md-6 mb-2">
<label for="timesheetinput6">End Time</label>
<div class="position-relative has-icon-left">
<input class="form-control" id="timesheetinput6" name="endtime" type="time"/>
<div class="form-control-position">
<i class="ft-clock"></i>
</div>
</div>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="timesheetinput7">Notes</label>
<div class="position-relative has-icon-left">
<textarea class="form-control" id="timesheetinput7" name="notes" placeholder="notes" rows="5"></textarea>
<div class="form-control-position">
<i class="ft-file"></i>
</div>
</div>
</div>
</div>
</div>
<div class="form-actions right">
<button class="btn btn-warning mr-1" type="button">
<i class="ft-x"></i> Cancel
                        </button>
<button class="btn btn-primary" type="submit">
<i class="la la-check-square-o"></i> Save
                        </button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="row match-height">
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="from-actions-center-dropdown">Complaint Form</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<div class="btn-group">
<button class="btn btn-danger" type="button">Default</button>
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" type="button">
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="form-layout-form-actions.html#">Action</a>
<a class="dropdown-item" href="form-layout-form-actions.html#">Another action</a>
<a class="dropdown-item" href="form-layout-form-actions.html#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="form-layout-form-actions.html#">Separated link</a>
</div>
</div>
</div>
</div>
<div class="card-content">
<div class="card-body">
<div class="card-text">
<div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-info"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Form Actions On Center With Dropdown Form Action.</strong>
</div>
<p>To add form actions on bottom of the form add a div with <code>.form-actions</code>                        class to end the form. Add <code>.center</code> class to
                        align the form action buttons to center. We can also add
                        more form action using dropdown button to the top right corner
                        of the form.</p>
</div>
<form class="form">
<div class="form-body">
<div class="row">
<div class="form-group col-12 mb-2">
<label for="complaintinput1">Company Name</label>
<input class="form-control round" id="complaintinput1" name="companyname" placeholder="company name" type="text"/>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="complaintinput2">Employee Name</label>
<input class="form-control round" id="complaintinput2" name="employeename" placeholder="employee name" type="text"/>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="complaintinput3">Date of Complaint</label>
<input class="form-control round" id="complaintinput3" name="complaintdate" type="date"/>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="complaintinput4">Supervisor's Name</label>
<input class="form-control round" id="complaintinput4" name="supervisorname" placeholder="supervisor name" type="text"/>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="complaintinput5">Complaint Details</label>
<textarea class="form-control round" id="complaintinput5" name="complaintdetails" placeholder="details" rows="5"></textarea>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="complaintinput6">Signature</label>
<input class="form-control round" id="complaintinput6" name="signature" placeholder="signature" type="text"/>
</div>
</div>
</div>
<div class="form-actions center">
<button class="btn btn-warning mr-1" type="button">
<i class="ft-x"></i> Cancel
                        </button>
<button class="btn btn-primary" type="submit">
<i class="la la-check-square-o"></i> Save
                        </button>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="from-actions-center-search">Donation</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<input class="form-control round" name="form-search" placeholder="search" type="text"/>
</div>
</div>
<div class="card-content">
<div class="card-body">
<div class="card-text">
<div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-info"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Form Actions On Center With Search Form Action.</strong>
</div>
<p>To add form actions on bottom of the form add a div with <code>.form-actions</code>                        class to end the form. Add <code>.center</code> class to
                        align the form action buttons to center. We can also search
                        bar action of the form.</p>
</div>
<form class="form">
<div class="form-body">
<div class="row">
<div class="form-group col-12 mb-2">
<label for="donationinput1">Full Name</label>
<input class="form-control square" id="donationinput1" name="fullname" placeholder="name" type="text"/>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="donationinput2">Email</label>
<input class="form-control square" id="donationinput2" name="email" placeholder="email" type="email"/>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="donationinput3">Contact Number</label>
<input class="form-control square" id="donationinput3" name="contact" type="tel"/>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="donationinput4">Dontaion Type</label>
<input class="form-control square" id="donationinput4" name="donationtype" placeholder="type of donation" type="text"/>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label>Amount</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">$</span>
</div>
<input aria-label="Amount (to the nearest dollar)" class="form-control square" name="amount" placeholder="amount" type="text"/>
<div class="input-group-append">
<span class="input-group-text">.00</span>
</div>
</div>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="donationinput7">Comments</label>
<textarea class="form-control square" id="donationinput7" name="comments" placeholder="comments" rows="5"></textarea>
</div>
</div>
</div>
<div class="form-actions center">
<button class="btn btn-warning mr-1" type="button">
<i class="ft-x"></i> Cancel
                        </button>
<button class="btn btn-primary" type="submit">
<i class="la la-check-square-o"></i> Save
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
<h4 class="card-title" id="from-actions-multiple">Event Registration</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collpase show">
<div class="card-body">
<div class="card-text">
<div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-info"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Multiple Form Actions On Top And Bottom.</strong>
</div>
<p>To add form actions on top and bottom of the form add a div
                        with <code>.form-actions</code> class to start and end the
                        form. Add <code>.buttons-group</code> class along with <code>.float-*</code>                        class to pull the buttons group to either left or right.</p>
</div>
<form class="form">
<div class="form-actions top clearfix">
<div class="buttons-group float-left">
<button class="btn btn-warning mr-1" type="button">
<i class="ft-x"></i> Cancel
                          </button>
<button class="btn btn-primary mr-1" type="submit">
<i class="la la-check-square-o"></i> Save
                          </button>
</div>
<div class="buttons-group float-right">
<button class="btn btn-info mr-1" type="button">Action 1</button>
<button class="btn btn-danger mr-1" type="submit">Action 2</button>
<button class="btn btn-success" type="submit">Action 3</button>
</div>
</div>
<div class="row justify-content-md-center">
<div class="col-md-6">
<div class="form-body">
<div class="row">
<div class="form-group col-12 mb-2">
<label for="eventRegInput1">Full Name</label>
<input class="form-control" id="eventRegInput1" name="fullname" placeholder="name" type="text"/>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="eventRegInput2">Title</label>
<input class="form-control" id="eventRegInput2" name="title" placeholder="title" type="text"/>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="eventRegInput3">Company</label>
<input class="form-control" id="eventRegInput3" name="company" placeholder="company" type="text"/>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="eventRegInput4">Email</label>
<input class="form-control" id="eventRegInput4" name="email" placeholder="email" type="email"/>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="eventRegInput5">Contact Number</label>
<input class="form-control" id="eventRegInput5" name="contact" placeholder="contact number" type="tel"/>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label>Existing Customer</label>
<div class="input-group">
<div class="d-inline-block custom-control custom-radio mr-1">
<input class="custom-control-input" id="yes" name="customer1" type="radio"/>
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
</div>
</div>
<div class="form-actions clearfix">
<div class="buttons-group float-left">
<button class="btn btn-warning mr-1" type="button">
<i class="ft-x"></i> Cancel
                          </button>
<button class="btn btn-primary mr-1" type="submit">
<i class="la la-check-square-o"></i> Save
                          </button>
</div>
<div class="buttons-group float-right">
<button class="btn btn-info mr-1" type="button">Action 1</button>
<button class="btn btn-danger mr-1" type="submit">Action 2</button>
<button class="btn btn-success" type="submit">Action 3</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="row justify-content-md-center">
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="from-actions-top-bottom-center">Event Registration</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collpase show">
<div class="card-body">
<div class="card-text">
<div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-info"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Form Actions On Top And Bottom Center.</strong>
</div>
<p>To add form actions on top and bottom of the form add a div
                        with <code>.form-actions</code> class to start and end the
                        form. Add <code>.center</code> class to align the form action
                        buttons to center.</p>
</div>
<form class="form">
<div class="form-actions top center">
<button class="btn btn-warning mr-1" type="button">
<i class="ft-x"></i> Cancel
                        </button>
<button class="btn btn-primary" type="submit">
<i class="la la-check-square-o"></i> Save
                        </button>
</div>
<div class="form-body">
<div class="row">
<div class="form-group col-12 mb-2">
<label for="eventInput1">Full Name</label>
<input class="form-control" id="eventInput1" name="fullname" placeholder="name" type="text"/>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="eventInput2">Title</label>
<input class="form-control" id="eventInput2" name="title" placeholder="title" type="text"/>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="eventInput3">Company</label>
<input class="form-control" id="eventInput3" name="company" placeholder="company" type="text"/>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="eventInput4">Email</label>
<input class="form-control" id="eventInput4" name="email" placeholder="email" type="email"/>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label for="eventInput5">Contact Number</label>
<input class="form-control" id="eventInput5" name="contact" placeholder="contact number" type="tel"/>
</div>
</div>
<div class="row">
<div class="form-group col-12 mb-2">
<label>Existing Customer</label>
<div class="input-group">
<div class="d-inline-block custom-control custom-radio mr-1">
<input class="custom-control-input" id="yes1" name="customer2" type="radio"/>
<label class="custom-control-label" for="yes1">Yes</label>
</div>
<div class="d-inline-block custom-control custom-radio">
<input class="custom-control-input" id="no1" name="customer2" type="radio"/>
<label class="custom-control-label" for="no1">No</label>
</div>
</div>
</div>
</div>
</div>
<div class="form-actions center">
<button class="btn btn-warning mr-1" type="button">
<i class="ft-x"></i> Cancel
                        </button>
<button class="btn btn-primary" type="submit">
<i class="la la-check-square-o"></i> Save
                        </button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Form actions layout section end -->
</div>
</div>
</div>