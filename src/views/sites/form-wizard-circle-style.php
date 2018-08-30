<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\FormWizardCircleStyleAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Circle Style</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="form-wizard-circle-style.html#">Page</a>
</li>
<li class="breadcrumb-item active">Form Wizard Circle Steps
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="form-wizard-circle-style.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="form-wizard-circle-style.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="form-wizard-circle-style.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="form-wizard-circle-style.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<section id="demo">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Form wizard with number tabs</h4>
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
<form action="#" class="number-tab-steps wizard-circle">
<!-- Step 1 -->
<h6>Step 1</h6>
<fieldset>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="firstName1">First Name :</label>
<input class="form-control" id="firstName1" type="text"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="lastName1">Last Name :</label>
<input class="form-control" id="lastName1" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="emailAddress1">Email Address :</label>
<input class="form-control" id="emailAddress1" type="email"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="location1">Select City :</label>
<select class="custom-select form-control" id="location1" name="location">
<option value="">Select City</option>
<option value="Amsterdam">Amsterdam</option>
<option value="Berlin">Berlin</option>
<option value="Frankfurt">Frankfurt</option>
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="phoneNumber1">Phone Number :</label>
<input class="form-control" id="phoneNumber1" type="tel"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="date1">Date of Birth :</label>
<input class="form-control" id="date1" type="date"/>
</div>
</div>
</div>
</fieldset>
<!-- Step 2 -->
<h6>Step 2</h6>
<fieldset>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="proposalTitle1">Proposal Title :</label>
<input class="form-control" id="proposalTitle1" type="text"/>
</div>
<div class="form-group">
<label for="emailAddress2">Email Address :</label>
<input class="form-control" id="emailAddress2" type="email"/>
</div>
<div class="form-group">
<label for="videoUrl1">Video URL :</label>
<input class="form-control" id="videoUrl1" type="url"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="jobTitle1">Job Title :</label>
<input class="form-control" id="jobTitle1" type="text"/>
</div>
<div class="form-group">
<label for="shortDescription1">Short Description :</label>
<textarea class="form-control" id="shortDescription1" name="shortDescription" rows="4"></textarea>
</div>
</div>
</div>
</fieldset>
<!-- Step 3 -->
<h6>Step 3</h6>
<fieldset>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="eventName1">Event Name :</label>
<input class="form-control" id="eventName1" type="text"/>
</div>
<div class="form-group">
<label for="eventType1">Event Type :</label>
<select class="custom-select form-control" data-placeholder="Type to search cities" id="eventType1" name="eventType1">
<option value="Banquet">Banquet</option>
<option value="Fund Raiser">Fund Raiser</option>
<option value="Dinner Party">Dinner Party</option>
<option value="Wedding">Wedding</option>
</select>
</div>
<div class="form-group">
<label for="eventLocation1">Event Location :</label>
<select class="custom-select form-control" id="eventLocation1" name="location">
<option value="">Select City</option>
<option value="Amsterdam">Amsterdam</option>
<option value="Berlin">Berlin</option>
<option value="Frankfurt">Frankfurt</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="jobTitle2">Event Date - Time :</label>
<div class="input-group">
<input class="form-control datetime" id="jobTitle2" type="text"/>
<span class="input-group-addon">
<span class="ft-calendar"></span>
</span>
</div>
</div>
<div class="form-group">
<label for="eventStatus1">Event Status :</label>
<select class="custom-select form-control" id="eventStatus1" name="eventStatus">
<option value="Planning">Planning</option>
<option value="In Progress">In Progress</option>
<option value="Finished">Finished</option>
</select>
</div>
<div class="form-group">
<label>Requirements :</label>
<div class="c-inputs-stacked">
<div class="d-inline-block custom-control custom-checkbox">
<input class="custom-control-input" id="staffing" name="status" type="checkbox"/>
<label class="custom-control-label" for="staffing">Staffing</label>
</div>
<div class="d-inline-block custom-control custom-checkbox">
<input class="custom-control-input" id="catering" name="status" type="checkbox"/>
<label class="custom-control-label" for="catering">Catering</label>
</div>
</div>
</div>
</div>
</div>
</fieldset>
<!-- Step 4 -->
<h6>Step 4</h6>
<fieldset>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="meetingName1">Name of Meeting :</label>
<input class="form-control" id="meetingName1" type="text"/>
</div>
<div class="form-group">
<label for="meetingLocation1">Location :</label>
<input class="form-control" id="meetingLocation1" type="text"/>
</div>
<div class="form-group">
<label for="participants1">Names of Participants</label>
<textarea class="form-control" id="participants1" name="participants" rows="4"></textarea>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="decisions1">Decisions Reached</label>
<textarea class="form-control" id="decisions1" name="decisions" rows="4"></textarea>
</div>
<div class="form-group">
<label>Agenda Items :</label>
<div class="c-inputs-stacked">
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item1" name="agenda" type="checkbox"/>
<label class="custom-control-label" for="item1">1st item</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item2" name="agenda" type="checkbox"/>
<label class="custom-control-label" for="item2">2nd item</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item3" name="agenda" type="checkbox"/>
<label class="custom-control-label" for="item3">3rd item</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item4" name="agenda" type="checkbox"/>
<label class="custom-control-label" for="item4">4th item</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item5" name="agenda" type="checkbox"/>
<label class="custom-control-label" for="item5">5th item</label>
</div>
</div>
</div>
</div>
</div>
</fieldset>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Form wizard with number tabs section start -->
<section id="number-tabs">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Form wizard with number tabs</h4>
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
<form action="#" class="number-tab-steps wizard-circle">
<!-- Step 1 -->
<h6>Step 1</h6>
<fieldset>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="firstName1">First Name :</label>
<input class="form-control" id="firstName1" type="text"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="lastName1">Last Name :</label>
<input class="form-control" id="lastName1" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="emailAddress1">Email Address :</label>
<input class="form-control" id="emailAddress1" type="email"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="location1">Select City :</label>
<select class="custom-select form-control" id="location1" name="location">
<option value="">Select City</option>
<option value="Amsterdam">Amsterdam</option>
<option value="Berlin">Berlin</option>
<option value="Frankfurt">Frankfurt</option>
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="phoneNumber1">Phone Number :</label>
<input class="form-control" id="phoneNumber1" type="tel"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="date1">Date of Birth :</label>
<input class="form-control" id="date1" type="date"/>
</div>
</div>
</div>
</fieldset>
<!-- Step 2 -->
<h6>Step 2</h6>
<fieldset>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="proposalTitle1">Proposal Title :</label>
<input class="form-control" id="proposalTitle1" type="text"/>
</div>
<div class="form-group">
<label for="emailAddress2">Email Address :</label>
<input class="form-control" id="emailAddress2" type="email"/>
</div>
<div class="form-group">
<label for="videoUrl1">Video URL :</label>
<input class="form-control" id="videoUrl1" type="url"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="jobTitle1">Job Title :</label>
<input class="form-control" id="jobTitle1" type="text"/>
</div>
<div class="form-group">
<label for="shortDescription1">Short Description :</label>
<textarea class="form-control" id="shortDescription1" name="shortDescription" rows="4"></textarea>
</div>
</div>
</div>
</fieldset>
<!-- Step 3 -->
<h6>Step 3</h6>
<fieldset>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="eventName1">Event Name :</label>
<input class="form-control" id="eventName1" type="text"/>
</div>
<div class="form-group">
<label for="eventType1">Event Type :</label>
<select class="custom-select form-control" data-placeholder="Type to search cities" id="eventType1" name="eventType1">
<option value="Banquet">Banquet</option>
<option value="Fund Raiser">Fund Raiser</option>
<option value="Dinner Party">Dinner Party</option>
<option value="Wedding">Wedding</option>
</select>
</div>
<div class="form-group">
<label for="eventLocation1">Event Location :</label>
<select class="custom-select form-control" id="eventLocation1" name="location">
<option value="">Select City</option>
<option value="Amsterdam">Amsterdam</option>
<option value="Berlin">Berlin</option>
<option value="Frankfurt">Frankfurt</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="jobTitle2">Event Date - Time :</label>
<div class="input-group">
<input class="form-control datetime" id="jobTitle2" type="text"/>
<span class="input-group-addon">
<span class="ft-calendar"></span>
</span>
</div>
</div>
<div class="form-group">
<label for="eventStatus1">Event Status :</label>
<select class="custom-select form-control" id="eventStatus1" name="eventStatus">
<option value="Planning">Planning</option>
<option value="In Progress">In Progress</option>
<option value="Finished">Finished</option>
</select>
</div>
<div class="form-group">
<label>Requirements :</label>
<div class="c-inputs-stacked">
<div class="d-inline-block custom-control custom-checkbox">
<input class="custom-control-input" id="staffing1" name="status1" type="checkbox"/>
<label class="custom-control-label" for="staffing1">Staffing</label>
</div>
<div class="d-inline-block custom-control custom-checkbox">
<input class="custom-control-input" id="catering1" name="status1" type="checkbox"/>
<label class="custom-control-label" for="catering1">Catering</label>
</div>
</div>
</div>
</div>
</div>
</fieldset>
<!-- Step 4 -->
<h6>Step 4</h6>
<fieldset>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="meetingName1">Name of Meeting :</label>
<input class="form-control" id="meetingName1" type="text"/>
</div>
<div class="form-group">
<label for="meetingLocation1">Location :</label>
<input class="form-control" id="meetingLocation1" type="text"/>
</div>
<div class="form-group">
<label for="participants1">Names of Participants</label>
<textarea class="form-control" id="participants1" name="participants" rows="4"></textarea>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="decisions1">Decisions Reached</label>
<textarea class="form-control" id="decisions1" name="decisions" rows="4"></textarea>
</div>
<div class="form-group">
<label>Agenda Items :</label>
<div class="c-inputs-stacked">
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item11" name="agenda1" type="checkbox"/>
<label class="custom-control-label" for="item11">1st item</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item12" name="agenda1" type="checkbox"/>
<label class="custom-control-label" for="item12">2nd item</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item13" name="agenda1" type="checkbox"/>
<label class="custom-control-label" for="item13">3rd item</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item14" name="agenda1" type="checkbox"/>
<label class="custom-control-label" for="item14">4th item</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item15" name="agenda1" type="checkbox"/>
<label class="custom-control-label" for="item15">5th item</label>
</div>
</div>
</div>
</div>
</div>
</fieldset>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Form wizard with number tabs section end -->
<!-- Form wizard with icon tabs section start -->
<section id="icon-tabs">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Form wizard with icon tabs</h4>
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
<form action="#" class="icons-tab-steps wizard-circle">
<!-- Step 1 -->
<h6><i class="step-icon la la-home"></i> Step 1</h6>
<fieldset>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="firstName2">First Name :</label>
<input class="form-control" id="firstName2" type="text"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="lastName2">Last Name :</label>
<input class="form-control" id="lastName2" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="emailAddress3">Email Address :</label>
<input class="form-control" id="emailAddress3" type="email"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="location2">Select City :</label>
<select class="custom-select form-control" id="location2" name="location">
<option value="">Select City</option>
<option value="Amsterdam">Amsterdam</option>
<option value="Berlin">Berlin</option>
<option value="Frankfurt">Frankfurt</option>
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="phoneNumber2">Phone Number :</label>
<input class="form-control" id="phoneNumber2" type="tel"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="date2">Date of Birth :</label>
<input class="form-control" id="date2" type="date"/>
</div>
</div>
</div>
</fieldset>
<!-- Step 2 -->
<h6><i class="step-icon la la-pencil"></i>Step 2</h6>
<fieldset>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="proposalTitle2">Proposal Title :</label>
<input class="form-control" id="proposalTitle2" type="text"/>
</div>
<div class="form-group">
<label for="emailAddress4">Email Address :</label>
<input class="form-control" id="emailAddress4" type="email"/>
</div>
<div class="form-group">
<label for="videoUrl2">Video URL :</label>
<input class="form-control" id="videoUrl2" type="url"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="jobTitle3">Job Title :</label>
<input class="form-control" id="jobTitle3" type="text"/>
</div>
<div class="form-group">
<label for="shortDescription2">Short Description :</label>
<textarea class="form-control" id="shortDescription2" name="shortDescription" rows="4"></textarea>
</div>
</div>
</div>
</fieldset>
<!-- Step 3 -->
<h6><i class="step-icon la la-tv"></i>Step 3</h6>
<fieldset>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="eventName2">Event Name :</label>
<input class="form-control" id="eventName2" type="text"/>
</div>
<div class="form-group">
<label for="eventType2">Event Type :</label>
<select class="custom-select form-control" data-placeholder="Type to search cities" id="eventType2" name="eventType2">
<option value="Banquet">Banquet</option>
<option value="Fund Raiser">Fund Raiser</option>
<option value="Dinner Party">Dinner Party</option>
<option value="Wedding">Wedding</option>
</select>
</div>
<div class="form-group">
<label for="eventLocation2">Event Location :</label>
<select class="custom-select form-control" id="eventLocation2" name="location">
<option value="">Select City</option>
<option value="Amsterdam">Amsterdam</option>
<option value="Berlin">Berlin</option>
<option value="Frankfurt">Frankfurt</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Event Date - Time :</label>
<div class="input-group">
<input class="form-control datetime" type="text"/>
<span class="input-group-addon">
<span class="ft-calendar"></span>
</span>
</div>
</div>
<div class="form-group">
<label for="eventStatus2">Event Status :</label>
<select class="custom-select form-control" id="eventStatus2" name="eventStatus">
<option value="Planning">Planning</option>
<option value="In Progress">In Progress</option>
<option value="Finished">Finished</option>
</select>
</div>
<div class="form-group">
<label>Requirements :</label>
<div class="c-inputs-stacked">
<div class="d-inline-block custom-control custom-checkbox">
<input class="custom-control-input" id="staffing2" name="status2" type="checkbox"/>
<label class="custom-control-label" for="staffing2">Staffing</label>
</div>
<div class="d-inline-block custom-control custom-checkbox">
<input class="custom-control-input" id="catering2" name="status2" type="checkbox"/>
<label class="custom-control-label" for="catering2">Catering</label>
</div>
</div>
</div>
</div>
</div>
</fieldset>
<!-- Step 4 -->
<h6><i class="step-icon la la-image"></i>Step 4</h6>
<fieldset>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="meetingName2">Name of Meeting :</label>
<input class="form-control" id="meetingName2" type="text"/>
</div>
<div class="form-group">
<label for="meetingLocation2">Location :</label>
<input class="form-control" id="meetingLocation2" type="text"/>
</div>
<div class="form-group">
<label for="participants2">Names of Participants</label>
<textarea class="form-control" id="participants2" name="participants" rows="4"></textarea>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="decisions2">Decisions Reached</label>
<textarea class="form-control" id="decisions2" name="decisions" rows="4"></textarea>
</div>
<div class="form-group">
<label>Agenda Items :</label>
<div class="c-inputs-stacked">
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item21" name="agenda2" type="checkbox"/>
<label class="custom-control-label" for="item21">1st item</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item22" name="agenda2" type="checkbox"/>
<label class="custom-control-label" for="item22">2nd item</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item23" name="agenda2" type="checkbox"/>
<label class="custom-control-label" for="item23">3rd item</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item24" name="agenda2" type="checkbox"/>
<label class="custom-control-label" for="item24">4th item</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item25" name="agenda2" type="checkbox"/>
<label class="custom-control-label" for="item25">5th item</label>
</div>
</div>
</div>
</div>
</div>
</fieldset>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Form wizard with icon tabs section end -->
<!-- Form wizard with step validation section start -->
<section id="validation">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Validation Example</h4>
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
<form action="#" class="steps-validation wizard-circle">
<!-- Step 1 -->
<h6>Step 1</h6>
<fieldset>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="firstName3">
                                First Name :
                                <span class="danger">*</span>
</label>
<input class="form-control required" id="firstName3" name="firstName" type="text"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="lastName3">
                                Last Name :
                                <span class="danger">*</span>
</label>
<input class="form-control required" id="lastName3" name="lastName" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="emailAddress5">
                                Email Address :
                                <span class="danger">*</span>
</label>
<input class="form-control required" id="emailAddress5" name="emailAddress" type="email"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="location">
                                Select City :
                                <span class="danger">*</span>
</label>
<select class="custom-select form-control required" id="location" name="location">
<option value="">Select City</option>
<option value="Amsterdam">Amsterdam</option>
<option value="Berlin">Berlin</option>
<option value="Frankfurt">Frankfurt</option>
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="phoneNumber3">Phone Number :</label>
<input class="form-control" id="phoneNumber3" type="tel"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="date3">Date of Birth :</label>
<input class="form-control" id="date3" type="date"/>
</div>
</div>
</div>
</fieldset>
<!-- Step 2 -->
<h6>Step 2</h6>
<fieldset>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="proposalTitle3">
                                Proposal Title :
                                <span class="danger">*</span>
</label>
<input class="form-control required" id="proposalTitle3" name="proposalTitle" type="text"/>
</div>
<div class="form-group">
<label for="emailAddress6">
                                Email Address :
                                <span class="danger">*</span>
</label>
<input class="form-control required" id="emailAddress6" name="emailAddress" type="email"/>
</div>
<div class="form-group">
<label for="videoUrl3">Video URL :</label>
<input class="form-control" id="videoUrl3" name="videoUrl" type="url"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="jobTitle5">
                                Job Title :
                                <span class="danger">*</span>
</label>
<input class="form-control required" id="jobTitle5" name="jobTitle" type="text"/>
</div>
<div class="form-group">
<label for="shortDescription3">Short Description :</label>
<textarea class="form-control" id="shortDescription3" name="shortDescription" rows="4"></textarea>
</div>
</div>
</div>
</fieldset>
<!-- Step 3 -->
<h6>Step 3</h6>
<fieldset>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="eventName3">
                                Event Name :
                                <span class="danger">*</span>
</label>
<input class="form-control required" id="eventName3" name="eventName" type="text"/>
</div>
<div class="form-group">
<label for="eventType3">
                                Event Type :
                                <span class="danger">*</span>
</label>
<select class="custom-select form-control required" id="eventType3" name="eventType">
<option value="Banquet">Banquet</option>
<option value="Fund Raiser">Fund Raiser</option>
<option value="Dinner Party">Dinner Party</option>
<option value="Wedding">Wedding</option>
</select>
</div>
<div class="form-group">
<label for="eventLocation3">Event Location :</label>
<select class="custom-select form-control" id="eventLocation3" name="eventLocation">
<option value="">Select City</option>
<option value="Amsterdam">Amsterdam</option>
<option value="Berlin">Berlin</option>
<option value="Frankfurt">Frankfurt</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="eventDate">
                                Event Date - Time :
                                <span class="danger">*</span>
</label>
<div class="input-group">
<input class="form-control datetime required" id="eventDate" name="eventDate" type="text"/>
<span class="input-group-addon">
<span class="ft-calendar"></span>
</span>
</div>
</div>
<div class="form-group">
<label for="eventStatus3">
                                Event Status :
                                <span class="danger">*</span>
</label>
<select class="custom-select form-control required" id="eventStatus3" name="eventStatus">
<option value="Planning">Planning</option>
<option value="In Progress">In Progress</option>
<option value="Finished">Finished</option>
</select>
</div>
<div class="form-group">
<label>Requirements :</label>
<div class="c-inputs-stacked">
<div class="d-inline-block custom-control custom-checkbox">
<input class="custom-control-input" id="staffing3" name="status3" type="checkbox"/>
<label class="custom-control-label" for="staffing3">Staffing</label>
</div>
<div class="d-inline-block custom-control custom-checkbox">
<input class="custom-control-input" id="catering3" name="status3" type="checkbox"/>
<label class="custom-control-label" for="catering3">Catering</label>
</div>
</div>
</div>
</div>
</div>
</fieldset>
<!-- Step 4 -->
<h6>Step 4</h6>
<fieldset>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="meetingName3">
                                Name of Meeting :
                                <span class="danger">*</span>
</label>
<input class="form-control required" id="meetingName3" name="meetingName" type="text"/>
</div>
<div class="form-group">
<label for="meetingLocation3">
                                Location :
                                <span class="danger">*</span>
</label>
<input class="form-control required" id="meetingLocation3" name="meetingLocation" type="text"/>
</div>
<div class="form-group">
<label for="participants3">Names of Participants</label>
<textarea class="form-control" id="participants3" name="participants" rows="4"></textarea>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="decisions3">Decisions Reached</label>
<textarea class="form-control" id="decisions3" name="decisions" rows="4"></textarea>
</div>
<div class="form-group">
<label>Agenda Items :</label>
<div class="c-inputs-stacked">
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item31" name="agenda3" type="checkbox"/>
<label class="custom-control-label" for="item31">1st item</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item32" name="agenda3" type="checkbox"/>
<label class="custom-control-label" for="item32">2nd item</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item33" name="agenda3" type="checkbox"/>
<label class="custom-control-label" for="item33">3rd item</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item34" name="agenda3" type="checkbox"/>
<label class="custom-control-label" for="item34">4th item</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item35" name="agenda3" type="checkbox"/>
<label class="custom-control-label" for="item35">5th item</label>
</div>
</div>
</div>
</div>
</div>
</fieldset>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Form wizard with step validation section end -->
<!-- Form wizard with vertical tabs section start -->
<section id="vertical-tabs">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Form wizard with vertical tabs</h4>
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
<form action="#" class="vertical-tab-steps wizard-circle">
<!-- Step 1 -->
<h6>Step 1</h6>
<fieldset>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="firstName4">First Name :</label>
<input class="form-control" id="firstName4" type="text"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="lastName4">Last Name :</label>
<input class="form-control" id="lastName4" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="emailAddress7">Email Address :</label>
<input class="form-control" id="emailAddress7" type="email"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="location3">Select City :</label>
<select class="custom-select form-control" id="location3" name="location">
<option value="">Select City</option>
<option value="Amsterdam">Amsterdam</option>
<option value="Berlin">Berlin</option>
<option value="Frankfurt">Frankfurt</option>
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="phoneNumber4">Phone Number :</label>
<input class="form-control" id="phoneNumber4" type="tel"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="date4">Date of Birth :</label>
<input class="form-control" id="date4" type="date"/>
</div>
</div>
</div>
</fieldset>
<!-- Step 2 -->
<h6>Step 2</h6>
<fieldset>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="proposalTitle4">Proposal Title :</label>
<input class="form-control" id="proposalTitle4" type="text"/>
</div>
<div class="form-group">
<label for="emailAddress8">Email Address :</label>
<input class="form-control" id="emailAddress8" type="email"/>
</div>
<div class="form-group">
<label for="videoUrl4">Video URL :</label>
<input class="form-control" id="videoUrl4" type="url"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="jobTitle6">Job Title :</label>
<input class="form-control" id="jobTitle6" type="text"/>
</div>
<div class="form-group">
<label for="shortDescription4">Short Description :</label>
<textarea class="form-control" id="shortDescription4" name="shortDescription" rows="4"></textarea>
</div>
</div>
</div>
</fieldset>
<!-- Step 3 -->
<h6>Step 3</h6>
<fieldset>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="eventName4">Event Name :</label>
<input class="form-control" id="eventName4" type="text"/>
</div>
<div class="form-group">
<label for="eventType4">Event Type :</label>
<select class="custom-select form-control" data-placeholder="Type to search cities" id="eventType4" name="eventType4">
<option value="Banquet">Banquet</option>
<option value="Fund Raiser">Fund Raiser</option>
<option value="Dinner Party">Dinner Party</option>
<option value="Wedding">Wedding</option>
</select>
</div>
<div class="form-group">
<label for="eventLocation4">Event Location :</label>
<select class="custom-select form-control" id="eventLocation4" name="location">
<option value="">Select City</option>
<option value="Amsterdam">Amsterdam</option>
<option value="Berlin">Berlin</option>
<option value="Frankfurt">Frankfurt</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Event Date - Time :</label>
<div class="input-group">
<input class="form-control datetime" type="text"/>
<span class="input-group-addon">
<span class="ft-calendar"></span>
</span>
</div>
</div>
<div class="form-group">
<label for="eventStatus4">Event Status :</label>
<select class="custom-select form-control" id="eventStatus4" name="eventStatus">
<option value="Planning">Planning</option>
<option value="In Progress">In Progress</option>
<option value="Finished">Finished</option>
</select>
</div>
<div class="form-group">
<label>Requirements :</label>
<div class="c-inputs-stacked">
<div class="d-inline-block custom-control custom-checkbox">
<input class="custom-control-input" id="staffing4" name="status4" type="checkbox"/>
<label class="custom-control-label" for="staffing4">Staffing</label>
</div>
<div class="d-inline-block custom-control custom-checkbox">
<input class="custom-control-input" id="catering4" name="status4" type="checkbox"/>
<label class="custom-control-label" for="catering4">Catering</label>
</div>
</div>
</div>
</div>
</div>
</fieldset>
<!-- Step 4 -->
<h6>Step 4</h6>
<fieldset>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="meetingName4">Name of Meeting :</label>
<input class="form-control" id="meetingName4" type="text"/>
</div>
<div class="form-group">
<label for="meetingLocation4">Location :</label>
<input class="form-control" id="meetingLocation4" type="text"/>
</div>
<div class="form-group">
<label for="participants4">Names of Participants</label>
<textarea class="form-control" id="participants4" name="participants" rows="4"></textarea>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="decisions4">Decisions Reached</label>
<textarea class="form-control" id="decisions4" name="decisions" rows="4"></textarea>
</div>
<div class="form-group">
<label>Agenda Items :</label>
<div class="c-inputs-stacked">
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item41" name="agenda4" type="checkbox"/>
<label class="custom-control-label" for="item41">1st item</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item42" name="agenda4" type="checkbox"/>
<label class="custom-control-label" for="item42">2nd item</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item43" name="agenda4" type="checkbox"/>
<label class="custom-control-label" for="item43">3rd item</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item44" name="agenda4" type="checkbox"/>
<label class="custom-control-label" for="item44">4th item</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="item45" name="agenda4" type="checkbox"/>
<label class="custom-control-label" for="item45">5th item</label>
</div>
</div>
</div>
</div>
</div>
</fieldset>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Form wizard with vertical tabs section end -->
</div>
</div>
</div>