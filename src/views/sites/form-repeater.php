<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\FormRepeaterAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Form Repeater</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item active"><a href="form-repeater.html#">Form Repeater</a>
</li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="form-repeater.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="form-repeater.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="form-repeater.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="form-repeater.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Form repeater section start -->
<section id="form-repeater">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="repeat-form">Repeating Forms</h4>
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
<div class="repeater-default">
<div data-repeater-list="car">
<div data-repeater-item="">
<form class="form row">
<div class="form-group mb-1 col-sm-12 col-md-2">
<label for="email-addr">Email address</label>
<br/>
<input class="form-control" id="email-addr" placeholder="Enter email" type="email"/>
</div>
<div class="form-group mb-1 col-sm-12 col-md-2">
<label for="pass">Password</label>
<br/>
<input class="form-control" id="pass" placeholder="Password" type="password"/>
</div>
<div class="form-group mb-1 col-sm-12 col-md-2">
<label class="cursor-pointer" for="bio">Bio</label>
<br/>
<textarea class="form-control" id="bio" rows="2"></textarea>
</div>
<div class="skin skin-flat form-group mb-1 col-sm-12 col-md-2">
<label for="tel-input">Gender</label>
<br/>
<input class="form-control" id="tel-input" type="tel" value="1-(555)-555-5555"/>
</div>
<div class="form-group mb-1 col-sm-12 col-md-2">
<label for="profession">Profession</label>
<br/>
<select class="form-control" id="profession">
<option>Select Option</option>
<option>Option 1</option>
<option>Option 2</option>
<option>Option 3</option>
<option>Option 4</option>
<option>Option 5</option>
</select>
</div>
<div class="form-group col-sm-12 col-md-2 text-center mt-2">
<button class="btn btn-danger" data-repeater-delete="" type="button"> <i class="ft-x"></i> Delete</button>
</div>
</form>
<hr/>
</div>
</div>
<div class="form-group overflow-hidden">
<div class="col-12">
<button class="btn btn-primary" data-repeater-create="">
<i class="ft-plus"></i> Add
                          </button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Form repeater section end -->
<!-- Form control repeater section start -->
<section id="form-control-repeater">
<div class="row">
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="file-repeater">Project Info</h4>
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
<form class="form row">
<div class="form-group col-md-6 mb-2">
<input class="form-control" name="name" placeholder="Name" type="text"/>
</div>
<div class="form-group col-md-6 mb-2">
<input class="form-control" name="company" placeholder="Company" type="text"/>
</div>
<div class="form-group col-md-6 mb-2">
<input class="form-control" name="email" placeholder="E-mail" type="text"/>
</div>
<div class="form-group col-md-6 mb-2">
<input class="form-control" name="phone" placeholder="Phone" type="text"/>
</div>
<div class="form-group col-md-6 mb-2">
<select class="form-control" name="interested">
<option disabled="" selected="" value="none">Interested in</option>
<option value="design">design</option>
<option value="development">development</option>
<option value="illustration">illustration</option>
<option value="branding">branding</option>
<option value="video">video</option>
</select>
</div>
<div class="form-group col-md-6 mb-2">
<select class="form-control" name="budget">
<option disabled="" selected="" value="0">Budget</option>
<option value="less than 5000$">less than 5000$</option>
<option value="5000$ - 10000$">5000$ - 10000$</option>
<option value="10000$ - 20000$">10000$ - 20000$</option>
<option value="more than 20000$">more than 20000$</option>
</select>
</div>
<div class="form-group col-12 mb-2 file-repeater">
<div data-repeater-list="repeater-list">
<div data-repeater-item="">
<div class="row mb-1">
<div class="col-9 col-xl-10">
<label class="file center-block">
<input id="file" type="file"/>
<span class="file-custom"></span>
</label>
</div>
<div class="col-2 col-xl-1">
<button class="btn btn-icon btn-danger mr-1" data-repeater-delete="" type="button"><i class="ft-x"></i></button>
</div>
</div>
</div>
</div>
<button class="btn btn-primary" data-repeater-create="" type="button">
<i class="ft-plus"></i> Add new file
                        </button>
</div>
<div class="form-group col-12 mb-2">
<textarea class="form-control" name="comment" placeholder="About Project" rows="5"></textarea>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="tel-repeater">User Profile</h4>
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
<form class="row">
<div class="form-group col-md-6 mb-2">
<input class="form-control" name="name" placeholder="Name" type="text"/>
</div>
<div class="form-group col-md-6 mb-2">
<input class="form-control" name="company" placeholder="Company" type="text"/>
</div>
<div class="form-group col-12 mb-2">
<input class="form-control" name="email" placeholder="E-mail" type="text"/>
</div>
<div class="form-group col-12 mb-2 contact-repeater">
<div data-repeater-list="repeater-group">
<div class="input-group mb-1" data-repeater-item="">
<input class="form-control" id="example-tel-input" placeholder="Telephone" type="tel"/>
<span class="input-group-append" id="button-addon2">
<button class="btn btn-danger" data-repeater-delete="" type="button"><i class="ft-x"></i></button>
</span>
</div>
</div>
<button class="btn btn-primary" data-repeater-create="" type="button">
<i class="ft-plus"></i> Add new telephone number
                        </button>
</div>
<div class="form-group col-12 mb-2">
<input class="form-control" name="occupation" placeholder="Occupation" type="text"/>
</div>
<div class="form-group col-12 mb-2">
<textarea class="form-control" name="bio" placeholder="Bio" rows="5"></textarea>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Form control repeater section end -->
</div>
