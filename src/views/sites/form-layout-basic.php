<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\FormLayoutBasicAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Basic Forms</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="form-layout-basic.html#">Form Layouts</a>
</li>
<li class="breadcrumb-item active"><a href="form-layout-basic.html#">Basic Forms</a>
</li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="form-layout-basic.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="form-layout-basic.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="form-layout-basic.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="form-layout-basic.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Basic form layout section start -->
<section id="basic-form-layouts">
<div class="row match-height">
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="basic-layout-form">Project Info</h4>
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
<div class="card-content collapse show">
<div class="card-body">
<div class="card-text">
<p>This is the most basic and default form having form sections.
                        To add form section use <code>.form-section</code> class
                        with any heading tags. This form has the buttons on the bottom
                        left corner which is the default position.</p>
</div>
<form class="form">
<div class="form-body">
<h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="projectinput1">First Name</label>
<input class="form-control" id="projectinput1" name="fname" placeholder="First Name" type="text"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="projectinput2">Last Name</label>
<input class="form-control" id="projectinput2" name="lname" placeholder="Last Name" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="projectinput3">E-mail</label>
<input class="form-control" id="projectinput3" name="email" placeholder="E-mail" type="text"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="projectinput4">Contact Number</label>
<input class="form-control" id="projectinput4" name="phone" placeholder="Phone" type="text"/>
</div>
</div>
</div>
<h4 class="form-section"><i class="la la-paperclip"></i> Requirements</h4>
<div class="form-group">
<label for="companyName">Company</label>
<input class="form-control" id="companyName" name="company" placeholder="Company Name" type="text"/>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="projectinput5">Interested in</label>
<select class="form-control" id="projectinput5" name="interested">
<option disabled="" selected="" value="none">Interested in</option>
<option value="design">design</option>
<option value="development">development</option>
<option value="illustration">illustration</option>
<option value="branding">branding</option>
<option value="video">video</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="projectinput6">Budget</label>
<select class="form-control" id="projectinput6" name="budget">
<option disabled="" selected="" value="0">Budget</option>
<option value="less than 5000$">less than 5000$</option>
<option value="5000$ - 10000$">5000$ - 10000$</option>
<option value="10000$ - 20000$">10000$ - 20000$</option>
<option value="more than 20000$">more than 20000$</option>
</select>
</div>
</div>
</div>
<div class="form-group">
<label>Select File</label>
<label class="file center-block" id="projectinput7">
<input id="file" type="file"/>
<span class="file-custom"></span>
</label>
</div>
<div class="form-group">
<label for="projectinput8">About Project</label>
<textarea class="form-control" id="projectinput8" name="comment" placeholder="About Project" rows="5"></textarea>
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
<h4 class="card-title" id="basic-layout-colored-form-control">User Profile</h4>
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
<div class="card-content collapse show">
<div class="card-body">
<div class="card-text">
<p>You can always change the border color of the form controls
                        using <code>border-*</code> class. In this example we have
                        user <code>border-primary</code> class for form controls.
                        Form action buttons are on the bottom right position.</p>
</div>
<form class="form">
<div class="form-body">
<h4 class="form-section"><i class="la la-eye"></i> About User</h4>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="userinput1">Fist Name</label>
<input class="form-control border-primary" id="userinput1" name="name" placeholder="Name" type="text"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="userinput2">Last Name</label>
<input class="form-control border-primary" id="userinput2" name="company" placeholder="Company" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="userinput3">Username</label>
<input class="form-control border-primary" id="userinput3" name="username" placeholder="Username" type="text"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="userinput4">Nick Name</label>
<input class="form-control border-primary" id="userinput4" name="nickname" placeholder="Nick Name" type="text"/>
</div>
</div>
</div>
<h4 class="form-section"><i class="ft-mail"></i> Contact Info &amp; Bio</h4>
<div class="form-group">
<label for="userinput5">Email</label>
<input class="form-control border-primary" id="userinput5" placeholder="email" type="email"/>
</div>
<div class="form-group">
<label for="userinput6">Website</label>
<input class="form-control border-primary" id="userinput6" placeholder="http://" type="url"/>
</div>
<div class="form-group">
<label>Contact Number</label>
<input class="form-control border-primary" id="userinput7" placeholder="Contact Number" type="tel"/>
</div>
<div class="form-group">
<label for="userinput8">Bio</label>
<textarea class="form-control border-primary" id="userinput8" name="bio" placeholder="Bio" rows="5"></textarea>
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
<h4 class="card-title" id="basic-layout-tooltip">Issue Tracking</h4>
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
<div class="card-content collapse show">
<div class="card-body">
<div class="card-text">
<p>This form shows tooltips on hover to provide useful information
                        while user is filling the form. Use data attributes like
                        toggle <code>data-toggle</code>, trigger <code>data-trigger</code>,
                        placement <code>data-placement</code>, title <code>data-title</code>                        to show tooltips on form controls.</p>
</div>
<form class="form">
<div class="form-body">
<div class="form-group">
<label for="issueinput1">Issue Title</label>
<input class="form-control" data-placement="top" data-title="Issue Title" data-toggle="tooltip" data-trigger="hover" id="issueinput1" name="issuetitle" placeholder="issue title" type="text"/>
</div>
<div class="form-group">
<label for="issueinput2">Opened By</label>
<input class="form-control" data-placement="top" data-title="Opened By" data-toggle="tooltip" data-trigger="hover" id="issueinput2" name="openedby" placeholder="opened by" type="text"/>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="issueinput3">Date Opened</label>
<input class="form-control" data-placement="top" data-title="Date Opened" data-toggle="tooltip" data-trigger="hover" id="issueinput3" name="dateopened" type="date"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="issueinput4">Date Fixed</label>
<input class="form-control" data-placement="top" data-title="Date Fixed" data-toggle="tooltip" data-trigger="hover" id="issueinput4" name="datefixed" type="date"/>
</div>
</div>
</div>
<div class="form-group">
<label for="issueinput5">Priority</label>
<select class="form-control" data-placement="top" data-title="Priority" data-toggle="tooltip" data-trigger="hover" id="issueinput5" name="priority">
<option value="low">Low</option>
<option value="medium">Medium</option>
<option value="high">High</option>
</select>
</div>
<div class="form-group">
<label for="issueinput6">Status</label>
<select class="form-control" data-placement="top" data-title="Status" data-toggle="tooltip" data-trigger="hover" id="issueinput6" name="status">
<option value="not started">Not Started</option>
<option value="started">Started</option>
<option value="fixed">Fixed</option>
</select>
</div>
<div class="form-group">
<label for="issueinput8">Comments</label>
<textarea class="form-control" data-placement="top" data-title="Comments" data-toggle="tooltip" data-trigger="hover" id="issueinput8" name="comments" placeholder="comments" rows="5"></textarea>
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
<h4 class="card-title" id="basic-layout-icons">Timesheet</h4>
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
<div class="card-content collapse show">
<div class="card-body">
<div class="card-text">
<p>This form shows the use of icons with form controls. Define
                        the position of the icon using <code>has-icon-left</code>                        or <code>has-icon-right</code> class. Use <code>icon-*</code>                        class to define the icon for the form control. See Icons
                        sections for the list of icons you can use. </p>
</div>
<form class="form">
<div class="form-body">
<div class="form-group">
<label for="timesheetinput1">Employee Name</label>
<div class="position-relative has-icon-left">
<input class="form-control" id="timesheetinput1" name="employeename" placeholder="employee name" type="text"/>
<div class="form-control-position">
<i class="ft-user"></i>
</div>
</div>
</div>
<div class="form-group">
<label for="timesheetinput2">Project Name</label>
<div class="position-relative has-icon-left">
<input class="form-control" id="timesheetinput2" name="projectname" placeholder="project name" type="text"/>
<div class="form-control-position">
<i class="la la-briefcase"></i>
</div>
</div>
</div>
<div class="form-group">
<label for="timesheetinput3">Date</label>
<div class="position-relative has-icon-left">
<input class="form-control" id="timesheetinput3" name="date" type="date"/>
<div class="form-control-position">
<i class="ft-message-square"></i>
</div>
</div>
</div>
<div class="form-group">
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
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="timesheetinput5">Start Time</label>
<div class="position-relative has-icon-left">
<input class="form-control" id="timesheetinput5" name="starttime" type="time"/>
<div class="form-control-position">
<i class="ft-clock"></i>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="timesheetinput6">End Time</label>
<div class="position-relative has-icon-left">
<input class="form-control" id="timesheetinput6" name="endtime" type="time"/>
<div class="form-control-position">
<i class="ft-clock"></i>
</div>
</div>
</div>
</div>
</div>
<div class="form-group">
<label for="timesheetinput7">Notes</label>
<div class="position-relative has-icon-left">
<textarea class="form-control" id="timesheetinput7" name="notes" placeholder="notes" rows="5"></textarea>
<div class="form-control-position">
<i class="ft-file"></i>
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
<h4 class="card-title" id="basic-layout-round-controls">Complaint Form</h4>
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
<div class="card-content collapse show">
<div class="card-body">
<div class="card-text">
<p>This is a variation to the default form control styling. In
                        this example all the form controls has round styling. To
                        apply round style add class <code>round</code> to any form
                        control.
                      </p>
</div>
<form class="form">
<div class="form-body">
<div class="form-group">
<label for="complaintinput1">Company Name</label>
<input class="form-control round" id="complaintinput1" name="companyname" placeholder="company name" type="text"/>
</div>
<div class="form-group">
<label for="complaintinput2">Employee Name</label>
<input class="form-control round" id="complaintinput2" name="employeename" placeholder="employee name" type="text"/>
</div>
<div class="form-group">
<label for="complaintinput3">Date of Complaint</label>
<input class="form-control round" id="complaintinput3" name="complaintdate" type="date"/>
</div>
<div class="form-group">
<label for="complaintinput4">Supervisor's Name</label>
<input class="form-control round" id="complaintinput4" name="supervisorname" placeholder="supervisor name" type="text"/>
</div>
<div class="form-group">
<label for="complaintinput5">Complaint Details</label>
<textarea class="form-control round" id="complaintinput5" name="complaintdetails" placeholder="details" rows="5"></textarea>
</div>
<div class="form-group">
<label for="complaintinput6">Signature</label>
<input class="form-control round" id="complaintinput6" name="signature" placeholder="signature" type="text"/>
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
<h4 class="card-title" id="basic-layout-square-controls">Donation</h4>
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
<div class="card-content collapse show">
<div class="card-body">
<div class="card-text">
<p>This is another variation to the default form control styling.
                        In this example all the form controls has square styling.
                        To apply square style add class <code>square</code> to any
                        form control.</p>
</div>
<form class="form">
<div class="form-body">
<div class="form-group">
<label for="donationinput1">Full Name</label>
<input class="form-control square" id="donationinput1" name="fullname" placeholder="name" type="text"/>
</div>
<div class="form-group">
<label for="donationinput2">Email</label>
<input class="form-control square" id="donationinput2" name="email" placeholder="email" type="email"/>
</div>
<div class="form-group">
<label for="donationinput3">Contact Number</label>
<input class="form-control square" id="donationinput3" name="contact" type="tel"/>
</div>
<div class="form-group">
<label for="donationinput4">Dontaion Type</label>
<input class="form-control square" id="donationinput4" name="donationtype" placeholder="type of donation" type="text"/>
</div>
<div class="form-group">
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
<div class="form-group">
<label for="donationinput7">Comments</label>
<textarea class="form-control square" id="donationinput7" name="comments" placeholder="comments" rows="5"></textarea>
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
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="basic-layout-form-center">Event Registration</h4>
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
<div class="card-content collapse show">
<div class="card-body">
<div class="card-text">
<p>This example shows a way to center your form in the card. Here
                        we have used <code>col-md-6 ml-auto</code> classes to center
                        the form in a full width card. User can always change those
                        classes according to width and offset requirements. This
                        example also uses form action buttons in the center bottom
                        position of the card.</p>
</div>
<form class="form">
<div class="row justify-content-md-center">
<div class="col-md-6">
<div class="form-body">
<div class="form-group">
<label for="eventInput1">Full Name</label>
<input class="form-control" id="eventInput1" name="fullname" placeholder="name" type="text"/>
</div>
<div class="form-group">
<label for="eventInput2">Title</label>
<input class="form-control" id="eventInput2" name="title" placeholder="title" type="text"/>
</div>
<div class="form-group">
<label for="eventInput3">Company</label>
<input class="form-control" id="eventInput3" name="company" placeholder="company" type="text"/>
</div>
<div class="form-group">
<label for="eventInput4">Email</label>
<input class="form-control" id="eventInput4" name="email" placeholder="email" type="email"/>
</div>
<div class="form-group">
<label for="eventInput5">Contact Number</label>
<input class="form-control" id="eventInput5" name="contact" placeholder="contact number" type="tel"/>
</div>
<div class="form-group">
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
<div class="row justify-content-md-center">
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="basic-layout-card-center">Event Registration</h4>
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
<div class="card-content collapse show">
<div class="card-body">
<div class="card-text">
<p>This example shows a ways to center your card with form. Here
                        we have used <code>col-md-6 ml-auto</code> classes to center
                        the card as its not full width. User can always change those
                        classes according to width and offset requirements. This
                        example also uses form action buttons in the center bottom
                        position of the card.</p>
</div>
<form class="form">
<div class="form-body">
<div class="form-group">
<label for="eventRegInput1">Full Name</label>
<input class="form-control" id="eventRegInput1" name="fullname" placeholder="name" type="text"/>
</div>
<div class="form-group">
<label for="eventRegInput2">Title</label>
<input class="form-control" id="eventRegInput2" name="title" placeholder="title" type="text"/>
</div>
<div class="form-group">
<label for="eventRegInput3">Company</label>
<input class="form-control" id="eventRegInput3" name="company" placeholder="company" type="text"/>
</div>
<div class="form-group">
<label for="eventRegInput4">Email</label>
<input class="form-control" id="eventRegInput4" name="email" placeholder="email" type="email"/>
</div>
<div class="form-group">
<label for="eventRegInput5">Contact Number</label>
<input class="form-control" id="eventRegInput5" name="contact" placeholder="contact number" type="tel"/>
</div>
<div class="form-group">
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
<!-- // Basic form layout section end -->
</div>
</div>
</div>