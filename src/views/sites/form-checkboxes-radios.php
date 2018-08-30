<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\FormCheckboxesRadiosAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Checkboxes and Radio Buttons</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="form-checkboxes-radios.html#">Form Components</a>
</li>
<li class="breadcrumb-item active">Checkboxes &amp; Radios
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="form-checkboxes-radios.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="form-checkboxes-radios.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="form-checkboxes-radios.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="form-checkboxes-radios.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Basic Checkbox start -->
<section class="basic-checkbox">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Simple Checkboxes</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Checkbox</h4>
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
<div class="card-content">
<div class="card-body">
<fieldset class="checkboxsas">
<label>
<input type="checkbox" value=""/> I am unchecked Checkbox
                      </label>
</fieldset>
<fieldset class="checkbox">
<label>
<input checked="" type="checkbox" value=""/> I am checked Checkbox
                      </label>
</fieldset>
<fieldset class="checkbox disabled">
<label>
<input disabled="" type="checkbox" value=""/> I am disabled Checkbox
                      </label>
</fieldset>
<fieldset class="checkbox disabled">
<label>
<input checked="" disabled="" type="checkbox" value=""/> I am checked &amp; disabled Checkbox
                      </label>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Right Checkbox</h4>
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
<div class="card-content">
<div class="card-body">
<p> Simple Right side checkboxes with <code>.right-checkbox</code>                      wrapper class.</p>
<fieldset class="right-checkbox">
<label>
<input type="checkbox" value=""/> I am unchecked Checkbox
                      </label>
</fieldset>
<fieldset class="right-checkbox">
<label>
<input checked="" type="checkbox" value=""/> I am checked Checkbox
                      </label>
</fieldset>
<fieldset class="right-checkbox disabled">
<label>
<input disabled="" type="checkbox" value=""/> I am disabled Checkbox
                      </label>
</fieldset>
<fieldset class="right-checkbox disabled">
<label>
<input checked="" disabled="" type="checkbox" value=""/> I am checked &amp; disabled Checkbox
                      </label>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Custom Checkbox</h4>
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
<div class="card-content">
<div class="card-body">
<p>Add <code>.custom-input.custom-checkbox</code> as a single wrapper
                      &amp; add <code>&lt;span class="custom-control-indicator"&gt;&lt;/span&gt;</code>                      for better output. Also use <code>.custom-control-description</code>                      class for checkbox description.</p>
<fieldset>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="customCheck1" name="customCheck" type="checkbox"/>
<label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
</div>
</fieldset>
<fieldset>
<div class="custom-control custom-checkbox">
<input checked="" class="custom-control-input" id="customCheck2" name="customCheck" type="checkbox"/>
<label class="custom-control-label" for="customCheck2">Custom checkbox checked</label>
</div>
</fieldset>
<fieldset>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" disabled="" id="customCheck3" name="customCheck" type="checkbox"/>
<label class="custom-control-label" for="customCheck3">Custom checkbox disabled</label>
</div>
</fieldset>
<fieldset>
<div class="custom-control custom-checkbox">
<input checked="" class="custom-control-input" disabled="" id="customCheck4" name="customCheck4" type="checkbox"/>
<label class="custom-control-label" for="fixed-layout">Custom checkbox checked &amp; disabled</label>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Custom Right Checkbox</h4>
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
<div class="card-content">
<div class="card-body">
<p>Add <code>.custom-input.custom-checkbox</code> as a single wrapper
                      &amp; add <code>&lt;span class="custom-control-indicator"&gt;&lt;/span&gt;</code>                      for better output &amp; wrap with <code>right-checkbox</code>                      for right aligned checkbox.</p>
<fieldset class="right-checkbox">
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="customCheckRight1" name="customCheckRight" type="checkbox"/>
<label class="custom-control-label" for="customCheckRight1">Custom checkbox</label>
</div>
</fieldset>
<fieldset class="right-checkbox">
<div class="custom-control custom-checkbox">
<input checked="" class="custom-control-input" id="customCheckRight2" name="customCheckRight" type="checkbox"/>
<label class="custom-control-label" for="customCheckRight2">Custom checkbox checked</label>
</div>
</fieldset>
<fieldset class="right-checkbox disabled">
<div class="custom-control custom-checkbox">
<input class="custom-control-input" disabled="" id="customCheckRight3" name="customCheckRight" type="checkbox"/>
<label class="custom-control-label" for="customCheckRight3">Custom checkbox disabled</label>
</div>
</fieldset>
<fieldset class="right-checkbox disabled">
<div class="custom-control custom-checkbox">
<input checked="" class="custom-control-input" disabled="" id="customCheckRight4" name="customCheckRight" type="checkbox"/>
<label class="custom-control-label" for="customCheckRight4">Custom checkbox checked &amp; disabled</label>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Basic Checkbox end -->
<!-- Basic Radio Buttons start -->
<section class="basic-radios">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Simple Radio Buttons</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Radio Buttons</h4>
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
<div class="card-content">
<div class="card-body">
<fieldset class="radio">
<label>
<input name="radio" type="radio" value=""/> I am unchecked Radio Button
                      </label>
</fieldset>
<fieldset class="radio">
<label>
<input checked="" name="radio" type="radio" value=""/> I am checked Radio Button
                      </label>
</fieldset>
<fieldset class="radio disabled">
<label>
<input disabled="" name="radio" type="radio" value=""/> I am disabled Radio Button
                      </label>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Right Radio Buttons</h4>
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
<div class="card-content">
<div class="card-body">
<p>Simple Radio Button with right align using <code>.right-radio</code>                      class.</p>
<fieldset class="right-radio">
<label>
<input name="radio1" type="radio" value=""/> I am unchecked Radio Button
                      </label>
</fieldset>
<fieldset class="right-radio">
<label>
<input checked="" name="radio1" type="radio" value=""/> I am checked Radio Button
                      </label>
</fieldset>
<fieldset class="right-radio disabled">
<label>
<input disabled="" name="radio1" type="radio" value=""/> I am disabled Radio Button
                      </label>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Custom Radio Buttons</h4>
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
<div class="card-content">
<div class="card-body">
<p>Add <code>.custom-input.custom-radio</code> as a single wrapper
                      &amp; add <code>&lt;span class="custom-control-indicator"&gt;&lt;/span&gt;</code>                      for better output. Also use <code>.custom-control-description</code>                      class for radio description.</p>
<fieldset>
<div class="custom-control custom-radio">
<input class="custom-control-input" id="customRadio1" name="customRadio" type="radio"/>
<label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
</div>
</fieldset>
<fieldset>
<div class="custom-control custom-radio">
<input checked="" class="custom-control-input" id="customRadio2" name="customRadio" type="radio"/>
<label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
</div>
</fieldset>
<fieldset>
<div class="custom-control custom-radio">
<input class="custom-control-input" disabled="" id="customRadio3" name="customRadio" type="radio"/>
<label class="custom-control-label" for="customRadio3">Or toggle this other custom radio</label>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Custom Right Radio Buttons</h4>
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
<div class="card-content">
<div class="card-body">
<p>Add <code>.c-input.c-radio</code> as a single wrapper &amp; add
                      <code>&lt;span class="c-indicator"&gt;&lt;/span&gt;</code>                      for better output &amp; wrap with <code>right-radio</code>                      for right aligned radio.</p>
<fieldset class="right-radio">
<div class="custom-control custom-radio">
<input class="custom-control-input" id="customRadioRight1" name="customRadioRight" type="radio"/>
<label class="custom-control-label" for="customRadioRight1">Toggle this custom radio</label>
</div>
</fieldset>
<fieldset class="right-radio">
<div class="custom-control custom-radio">
<input checked="" class="custom-control-input" id="customRadioRight2" name="customRadioRight" type="radio"/>
<label class="custom-control-label" for="customRadioRight2">Or toggle this other custom radio</label>
</div>
</fieldset>
<fieldset class="right-radio disabled">
<div class="custom-control custom-radio">
<input class="custom-control-input" disabled="" id="customRadioRight3" name="customRadioRight" type="radio"/>
<label class="custom-control-label" for="customRadioRight3">Or toggle this other custom radio</label>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Basic Radio Buttons end -->
<!-- iCheck Checkbox start -->
<section class="icheck-checkbox">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">iCheck Checkbox</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Skin iCheck</h4>
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
<div class="card-content">
<div class="card-body">
<p>Wrap with <code>.icheck_minimal.skin</code> for this style of
                      checkbox.
                    </p>
<div class="row icheck_minimal skin">
<div class="col-md-6 col-sm-12">
<fieldset>
<input id="input-5" type="checkbox"/>
<label for="input-5">Checkbox</label>
</fieldset>
<fieldset>
<input checked="" id="input-6" type="checkbox"/>
<label for="input-6">Checkbox Checked</label>
</fieldset>
<fieldset>
<input disabled="" id="input-7" type="checkbox"/>
<label for="input-7">Checkbox Disabled</label>
</fieldset>
<fieldset>
<input checked="" disabled="" id="input-8" type="checkbox"/>
<label for="input-8">Checkbox Checked &amp; Disabled</label>
</fieldset>
</div>
<div class="col-md-6 col-sm-12">
<div class="skin-states">
<fieldset>
<div class="state icheckbox_minimal mr-1"></div>
<label>Normal State</label>
</fieldset>
<fieldset>
<div class="state icheckbox_minimal hover mr-1"></div>
<label>Hover State</label>
</fieldset>
<fieldset>
<div class="state icheckbox_minimal checked mr-1"></div>
<label>Checked State</label>
</fieldset>
<fieldset>
<div class="state icheckbox_minimal disabled mr-1"></div>
<label>Disabled State</label>
</fieldset>
<fieldset>
<div class="state icheckbox_minimal checked disabled mr-1"></div>
<label>Checked &amp; Disabled State</label>
</fieldset>
</div>
</div>
<div class="col-sm-12">
<fieldset class="colors clear">
<strong>Color schemes</strong>
<ul>
<li class="active" title="Black"></li>
<li class="red" title="Red"></li>
<li class="green" title="Green"></li>
<li class="blue" title="Blue"></li>
<li class="aero" title="Aero"></li>
<li class="grey" title="Grey"></li>
<li class="orange" title="Orange"></li>
<li class="yellow" title="Yellow"></li>
<li class="pink" title="Pink"></li>
<li class="purple" title="Purple"></li>
</ul>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Square Skin iCheck</h4>
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
<div class="card-content">
<div class="card-body">
<p>Wrap with <code>.skin.skin-square</code> for square and colored
                      checkbox. Have to do color changes using JS.</p>
<div class="row skin skin-square">
<div class="col-md-6 col-sm-12">
<fieldset>
<input id="input-11" type="checkbox"/>
<label for="input-11">Checkbox</label>
</fieldset>
<fieldset>
<input checked="" id="input-12" type="checkbox"/>
<label for="input-12">Checkbox Checked</label>
</fieldset>
<fieldset>
<input disabled="" id="input-13" type="checkbox"/>
<label for="input-13">Checkbox Disabled</label>
</fieldset>
<fieldset>
<input checked="" disabled="" id="input-14" type="checkbox"/>
<label for="input-14">Checkbox Checked &amp; Disabled</label>
</fieldset>
</div>
<div class="col-md-6 col-sm-12">
<div class="skin-states">
<fieldset>
<div class="state icheckbox_square-red mr-1"></div>
<label>Normal State</label>
</fieldset>
<fieldset>
<div class="state icheckbox_square-red hover mr-1"></div>
<label>Hover State</label>
</fieldset>
<fieldset>
<div class="state icheckbox_square-red checked mr-1"></div>
<label>Checked State</label>
</fieldset>
<fieldset>
<div class="state icheckbox_square-red disabled mr-1"></div>
<label>Disabled State</label>
</fieldset>
<fieldset>
<div class="state icheckbox_square-red checked disabled mr-1"></div>
<label>Checked &amp; Disabled State</label>
</fieldset>
</div>
</div>
<div class="col-sm-12">
<fieldset class="colors clear">
<strong>Color schemes</strong>
<ul>
<li title="Black"></li>
<li class="red active" title="Red"></li>
<li class="green" title="Green"></li>
<li class="blue" title="Blue"></li>
<li class="aero" title="Aero"></li>
<li class="grey" title="Grey"></li>
<li class="orange" title="Orange"></li>
<li class="yellow" title="Yellow"></li>
<li class="pink" title="Pink"></li>
<li class="purple" title="Purple"></li>
</ul>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Flat Skin iCheck</h4>
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
<div class="card-content">
<div class="card-body">
<p>Wrap with <code>.skin.skin-flat</code> for Flat colored checkbox.
                      Have to do color changes using JS.</p>
<div class="row skin skin-flat">
<div class="col-md-6 col-sm-12">
<fieldset>
<input id="input-15" type="checkbox"/>
<label for="input-15">Checkbox</label>
</fieldset>
<fieldset>
<input checked="" id="input-16" type="checkbox"/>
<label for="input-16">Checkbox Checked</label>
</fieldset>
<fieldset>
<input disabled="" id="input-17" type="checkbox"/>
<label for="input-17">Checkbox Disabled</label>
</fieldset>
<fieldset>
<input checked="" disabled="" id="input-18" type="checkbox"/>
<label for="input-18">Checkbox Checked &amp; Disabled</label>
</fieldset>
</div>
<div class="col-md-6 col-sm-12">
<div class="skin-states">
<fieldset>
<div class="state icheckbox_flat-green mr-1"></div>
<label>Normal State</label>
</fieldset>
<fieldset>
<div class="state icheckbox_flat-green hover mr-1"></div>
<label>Hover State</label>
</fieldset>
<fieldset>
<div class="state icheckbox_flat-green checked mr-1"></div>
<label>Checked State</label>
</fieldset>
<fieldset>
<div class="state icheckbox_flat-green disabled mr-1"></div>
<label>Disabled State</label>
</fieldset>
<fieldset>
<div class="state icheckbox_flat-green checked disabled mr-1"></div>
<label>Checked &amp; Disabled State</label>
</fieldset>
</div>
</div>
<div class="col-sm-12">
<fieldset class="colors clear">
<strong>Color schemes</strong>
<ul>
<li title="Black"></li>
<li class="red" title="Red"></li>
<li class="green active" title="Green"></li>
<li class="blue" title="Blue"></li>
<li class="aero" title="Aero"></li>
<li class="grey" title="Grey"></li>
<li class="orange" title="Orange"></li>
<li class="yellow" title="Yellow"></li>
<li class="pink" title="Pink"></li>
<li class="purple" title="Purple"></li>
</ul>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Line iCheck Checkbox</h4>
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
<div class="card-content">
<div class="card-body">
<p>Wrap with <code>.skin.skin-line</code> for line checkbox. Have
                      to do color changes using JS.</p>
<div class="row skin skin-line">
<div class="col-md-6 col-sm-12">
<fieldset>
<input id="input-1" type="checkbox"/>
<label for="input-1">Checkbox</label>
</fieldset>
<fieldset>
<input checked="" id="input-2" type="checkbox"/>
<label for="input-2">Checkbox Checked</label>
</fieldset>
<fieldset>
<input disabled="" id="input-3" type="checkbox"/>
<label for="input-3">Checkbox Disabled</label>
</fieldset>
<fieldset>
<input checked="" disabled="" id="input-4" type="checkbox"/>
<label for="input-4">Checkbox Checked &amp; Disabled</label>
</fieldset>
</div>
<div class="col-md-6 col-sm-12">
<div class="skin-states">
<fieldset>
<div class="state icheckbox_line-blue mr-1">
<div class="icheck_line-icon"></div>
                              Normal State
                            </div>
</fieldset>
<fieldset>
<div class="state icheckbox_line-blue hover mr-1">
<div class="icheck_line-icon"></div>
                              Hover State
                            </div>
</fieldset>
<fieldset>
<div class="state icheckbox_line-blue checked mr-1">
<div class="icheck_line-icon"></div>
                              Checked State
                            </div>
</fieldset>
<fieldset>
<div class="state icheckbox_line-blue disabled mr-1">
<div class="icheck_line-icon"></div>
                              Disabled State
                            </div>
</fieldset>
<fieldset>
<div class="state icheckbox_line-blue checked disabled mr-1">
<div class="icheck_line-icon"></div>
                              Checked &amp; Disabled State
                            </div>
</fieldset>
</div>
</div>
<div class="col-sm-12">
<fieldset class="colors clear">
<strong>Color schemes</strong>
<ul>
<li title="Black"></li>
<li class="red" title="Red"></li>
<li class="green" title="Green"></li>
<li class="blue active" title="Blue"></li>
<li class="aero" title="Aero"></li>
<li class="grey" title="Grey"></li>
<li class="orange" title="Orange"></li>
<li class="yellow" title="Yellow"></li>
<li class="pink" title="Pink"></li>
<li class="purple" title="Purple"></li>
</ul>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card text-white bg-blue-grey bg-darken-4">
<div class="card-header">
<h4 class="card-title bg-blue-grey bg-darken-4">Polaris Skin iCheck</h4>
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
<div class="card-content">
<div class="card-body">
<p class="white">Wrap with <code>.skin.skin-polaris</code> for polaris checkbox.</p>
<div class="row skin skin-polaris">
<div class="col-md-6 col-sm-12">
<fieldset>
<input id="input-21" type="checkbox"/>
<label class="white" for="input-21">Checkbox</label>
</fieldset>
<fieldset>
<input checked="" id="input-22" type="checkbox"/>
<label class="white" for="input-22">Checkbox Checked</label>
</fieldset>
<fieldset>
<input disabled="" id="input-23" type="checkbox"/>
<label class="white" for="input-23">Checkbox Disabled</label>
</fieldset>
<fieldset>
<input checked="" disabled="" id="input-24" type="checkbox"/>
<label class="white" for="input-24">Checkbox Checked &amp; Disabled</label>
</fieldset>
</div>
<div class="col-md-6 col-sm-12">
<div class="skin-states">
<fieldset>
<div class="state icheckbox_polaris mr-1"></div>
<label class="white">Normal State</label>
</fieldset>
<fieldset>
<div class="state icheckbox_polaris hover mr-1"></div>
<label class="white">Hover State</label>
</fieldset>
<fieldset>
<div class="state icheckbox_polaris checked mr-1"></div>
<label class="white">Checked State</label>
</fieldset>
<fieldset>
<div class="state icheckbox_polaris disabled mr-1"></div>
<label class="white">Disabled State</label>
</fieldset>
<fieldset>
<div class="state icheckbox_polaris checked disabled mr-1"></div>
<label class="white">Checked &amp; Disabled State</label>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card text-white bg-blue-grey bg-darken-4">
<div class="card-header">
<h4 class="card-title bg-blue-grey bg-darken-4">Futurico Skin iCheck</h4>
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
<div class="card-content">
<div class="card-body">
<p class="white">Wrap with <code>.skin.skin-futurico</code> for futurico checkbox.</p>
<div class="row skin skin-futurico">
<div class="col-md-6 col-sm-12">
<fieldset>
<input id="input-25" type="checkbox"/>
<label class="white" for="input-25">Checkbox</label>
</fieldset>
<fieldset>
<input checked="" id="input-26" type="checkbox"/>
<label class="white" for="input-26">Checkbox Checked</label>
</fieldset>
<fieldset>
<input disabled="" id="input-27" type="checkbox"/>
<label class="white" for="input-27">Checkbox Disabled</label>
</fieldset>
<fieldset>
<input checked="" disabled="" id="input-28" type="checkbox"/>
<label class="white" for="input-28">Checkbox Checked &amp; Disabled</label>
</fieldset>
</div>
<div class="col-md-6 col-sm-12">
<div class="skin-states">
<fieldset>
<div class="state icheckbox_futurico mr-1"></div>
<label class="white">Normal State</label>
</fieldset>
<fieldset>
<div class="state icheckbox_futurico hover mr-1"></div>
<label class="white">Hover State</label>
</fieldset>
<fieldset>
<div class="state icheckbox_futurico checked mr-1"></div>
<label class="white">Checked State</label>
</fieldset>
<fieldset>
<div class="state icheckbox_futurico disabled mr-1"></div>
<label class="white">Disabled State</label>
</fieldset>
<fieldset>
<div class="state icheckbox_futurico checked disabled mr-1"></div>
<label class="white">Checked &amp; Disabled State</label>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- iCheck Checkbox end -->
<!-- iCheck Radio start -->
<section class="icheck-radio">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">iCheck Radio Buttons</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Minimal iCheck Radio Option</h4>
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
<div class="card-content">
<div class="card-body">
<p>Wrap with <code>.icheck_minimal</code> with <code>.skin</code>                      to use another icheck radio style.</p>
<div class="row icheck_minimal skin">
<div class="col-md-6 col-sm-12">
<fieldset>
<input id="input-radio-5" name="input-radio-2" type="radio"/>
<label for="input-radio-5">Radio Button</label>
</fieldset>
<fieldset>
<input checked="" id="input-radio-6" name="input-radio-2" type="radio"/>
<label for="input-radio-6">Radio Button Checked</label>
</fieldset>
<fieldset>
<input disabled="" id="input-radio-7" name="input-radio-2" type="radio"/>
<label for="input-radio-7">Radio Button Disabled</label>
</fieldset>
<fieldset>
<input checked="" disabled="" id="input-radio-8" type="radio"/>
<label for="input-radio-8">Radio Button Checked &amp; Disabled</label>
</fieldset>
</div>
<div class="col-md-6 col-sm-12">
<div class="skin-states">
<fieldset>
<div class="state iradio_minimal mr-1"></div>
<label>Normal State</label>
</fieldset>
<fieldset>
<div class="state iradio_minimal hover mr-1"></div>
<label>Hover State</label>
</fieldset>
<fieldset>
<div class="state iradio_minimal checked mr-1"></div>
<label>Checked State</label>
</fieldset>
<fieldset>
<div class="state iradio_minimal disabled mr-1"></div>
<label>Disabled State</label>
</fieldset>
<fieldset>
<div class="state iradio_minimal checked disabled mr-1"></div>
<label>Checked &amp; Disabled State</label>
</fieldset>
</div>
</div>
<div class="col-sm-12">
<fieldset class="colors clear">
<strong>Color schemes</strong>
<ul>
<li class="active" title="Black"></li>
<li class="red" title="Red"></li>
<li class="green" title="Green"></li>
<li class="blue" title="Blue"></li>
<li class="aero" title="Aero"></li>
<li class="grey" title="Grey"></li>
<li class="orange" title="Orange"></li>
<li class="yellow" title="Yellow"></li>
<li class="pink" title="Pink"></li>
<li class="purple" title="Purple"></li>
</ul>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Filled Skin iCheck Radio</h4>
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
<div class="card-content">
<div class="card-body">
<p>Wrap with <code>.skin.skin-square</code> for square and colored
                      radio. Have to do color changes using JS.</p>
<div class="row skin skin-square">
<div class="col-md-6 col-sm-12">
<fieldset>
<input id="input-radio-11" name="input-radio-3" type="radio"/>
<label for="input-radio-11">Radio Button</label>
</fieldset>
<fieldset>
<input checked="" id="input-radio-12" name="input-radio-3" type="radio"/>
<label for="input-radio-12">Radio Button Checked</label>
</fieldset>
<fieldset>
<input disabled="" id="input-radio-13" name="input-radio-3" type="radio"/>
<label for="input-radio-13">Radio Button Disabled</label>
</fieldset>
<fieldset>
<input checked="" disabled="" id="input-radio-14" type="radio"/>
<label for="input-radio-14">Radio Button Checked &amp; Disabled</label>
</fieldset>
</div>
<div class="col-md-6 col-sm-12">
<div class="skin-states">
<fieldset>
<div class="state iradio_square-red mr-1"></div>
<label>Normal State</label>
</fieldset>
<fieldset>
<div class="state iradio_square-red hover mr-1"></div>
<label>Hover State</label>
</fieldset>
<fieldset>
<div class="state iradio_square-red checked mr-1"></div>
<label>Checked State</label>
</fieldset>
<fieldset>
<div class="state iradio_square-red disabled mr-1"></div>
<label>Disabled State</label>
</fieldset>
<fieldset>
<div class="state iradio_square-red checked disabled mr-1"></div>
<label>Checked &amp; Disabled State</label>
</fieldset>
</div>
</div>
<div class="col-sm-12">
<fieldset class="colors clear">
<strong>Color schemes</strong>
<ul>
<li title="Black"></li>
<li class="red active" title="Red"></li>
<li class="green" title="Green"></li>
<li class="blue" title="Blue"></li>
<li class="aero" title="Aero"></li>
<li class="grey" title="Grey"></li>
<li class="orange" title="Orange"></li>
<li class="yellow" title="Yellow"></li>
<li class="pink" title="Pink"></li>
<li class="purple" title="Purple"></li>
</ul>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Flat Skin iCheck Radio</h4>
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
<div class="card-content">
<div class="card-body">
<p>Wrap with <code>.skin.skin-flat</code> for Flat colored radio.
                      Have to do color changes using JS.</p>
<div class="row skin skin-flat">
<div class="col-md-6 col-sm-12">
<fieldset>
<input id="input-radio-15" name="input-radio-4" type="radio"/>
<label for="input-radio-15">Radio Button</label>
</fieldset>
<fieldset>
<input checked="" id="input-radio-16" name="input-radio-4" type="radio"/>
<label for="input-radio-16">Radio Button Checked</label>
</fieldset>
<fieldset>
<input disabled="" id="input-radio-17" name="input-radio-4" type="radio"/>
<label for="input-radio-17">Radio Button Disabled</label>
</fieldset>
<fieldset>
<input checked="" disabled="" id="input-radio-18" type="radio"/>
<label for="input-radio-18">Radio Button Checked &amp; Disabled</label>
</fieldset>
</div>
<div class="col-md-6 col-sm-12">
<div class="skin-states">
<fieldset>
<div class="state iradio_flat-green mr-1"></div>
<label>Normal State</label>
</fieldset>
<fieldset>
<div class="state iradio_flat-green hover mr-1"></div>
<label>Hover State</label>
</fieldset>
<fieldset>
<div class="state iradio_flat-green checked mr-1"></div>
<label>Checked State</label>
</fieldset>
<fieldset>
<div class="state iradio_flat-green disabled mr-1"></div>
<label>Disabled State</label>
</fieldset>
<fieldset>
<div class="state iradio_flat-green checked disabled mr-1"></div>
<label>Checked &amp; Disabled State</label>
</fieldset>
</div>
</div>
<div class="col-sm-12">
<fieldset class="colors clear">
<strong>Color schemes</strong>
<ul>
<li title="Black"></li>
<li class="red" title="Red"></li>
<li class="green active" title="Green"></li>
<li class="blue" title="Blue"></li>
<li class="aero" title="Aero"></li>
<li class="grey" title="Grey"></li>
<li class="orange" title="Orange"></li>
<li class="yellow" title="Yellow"></li>
<li class="pink" title="Pink"></li>
<li class="purple" title="Purple"></li>
</ul>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Line iCheck Radio</h4>
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
<div class="card-content">
<div class="card-body">
<p>Wrap with <code>.skin.skin-line</code> for line Radio. Have to
                      do color changes using JS.</p>
<div class="row skin skin-line">
<div class="col-md-6 col-sm-12">
<fieldset>
<input id="input-radio-1" name="input-radio-1" type="radio"/>
<label for="input-radio-1">Radio Button</label>
</fieldset>
<fieldset>
<input checked="" id="input-radio-2" name="input-radio-1" type="radio"/>
<label for="input-radio-2">Radio Button Checked</label>
</fieldset>
<fieldset>
<input disabled="" id="input-radio-3" type="radio"/>
<label for="input-radio-3">Radio Button Disabled</label>
</fieldset>
<fieldset>
<input checked="" disabled="" id="input-radio-4" type="radio"/>
<label for="input-radio-4">Radio Button Checked &amp; Disabled</label>
</fieldset>
</div>
<div class="col-md-6 col-sm-12">
<div class="skin-states">
<fieldset>
<div class="state iradio_line-blue mr-1">
<div class="icheck_line-icon"></div>
                              Normal State
                            </div>
</fieldset>
<fieldset>
<div class="state iradio_line-blue hover mr-1">
<div class="icheck_line-icon"></div>
                              Hover State
                            </div>
</fieldset>
<fieldset>
<div class="state iradio_line-blue checked mr-1">
<div class="icheck_line-icon"></div>
                              Checked State
                            </div>
</fieldset>
<fieldset>
<div class="state iradio_line-blue disabled mr-1">
<div class="icheck_line-icon"></div>
                              Disabled State
                            </div>
</fieldset>
<fieldset>
<div class="state iradio_line-blue checked disabled mr-1">
<div class="icheck_line-icon"></div>
                              Checked &amp; Disabled State
                            </div>
</fieldset>
</div>
</div>
<div class="col-sm-12">
<fieldset class="colors clear">
<strong>Color schemes</strong>
<ul>
<li title="Black"></li>
<li class="red" title="Red"></li>
<li class="green" title="Green"></li>
<li class="blue active" title="Blue"></li>
<li class="aero" title="Aero"></li>
<li class="grey" title="Grey"></li>
<li class="orange" title="Orange"></li>
<li class="yellow" title="Yellow"></li>
<li class="pink" title="Pink"></li>
<li class="purple" title="Purple"></li>
</ul>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card text-white bg-blue-grey bg-darken-4">
<div class="card-header">
<h4 class="card-title bg-blue-grey bg-darken-4">Polaris Skin iCheck Radio</h4>
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
<div class="card-content">
<div class="card-body">
<p class="white">Wrap with <code>.skin.skin-polaris</code> for polaris radio.</p>
<div class="row skin skin-polaris">
<div class="col-md-6 col-sm-12">
<fieldset>
<input id="input-radio-21" name="input-radio-5" type="radio"/>
<label class="white" for="input-radio-21">Radio Button</label>
</fieldset>
<fieldset>
<input checked="" id="input-radio-22" name="input-radio-5" type="radio"/>
<label class="white" for="input-radio-22">Radio Button Checked</label>
</fieldset>
<fieldset>
<input disabled="" id="input-radio-23" name="input-radio-5" type="radio"/>
<label class="white" for="input-radio-23">Radio Button Disabled</label>
</fieldset>
<fieldset>
<input checked="" disabled="" id="input-radio-24" type="radio"/>
<label class="white" for="input-radio-24">Radio Button Checked &amp; Disabled</label>
</fieldset>
</div>
<div class="col-md-6 col-sm-12">
<div class="skin-states">
<fieldset>
<div class="state iradio_polaris mr-1"></div>
<label class="white">Normal State</label>
</fieldset>
<fieldset>
<div class="state iradio_polaris hover mr-1"></div>
<label class="white">Hover State</label>
</fieldset>
<fieldset>
<div class="state iradio_polaris checked mr-1"></div>
<label class="white">Checked State</label>
</fieldset>
<fieldset>
<div class="state iradio_polaris disabled mr-1"></div>
<label class="white">Disabled State</label>
</fieldset>
<fieldset>
<div class="state iradio_polaris checked disabled mr-1"></div>
<label class="white">Checked &amp; Disabled State</label>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card text-white bg-blue-grey bg-darken-4">
<div class="card-header">
<h4 class="card-title bg-blue-grey bg-darken-4">Futurico Skin iCheck Radio</h4>
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
<div class="card-content">
<div class="card-body">
<p class="white">Wrap with <code>.skin.skin-futurico</code> for futurico radio.</p>
<div class="row skin skin-futurico">
<div class="col-md-6 col-sm-12">
<fieldset>
<input id="input-radio-25" name="input-radio-6" type="radio"/>
<label class="white" for="input-radio-25">Radio Button</label>
</fieldset>
<fieldset>
<input checked="" id="input-radio-26" name="input-radio-6" type="radio"/>
<label class="white" for="input-radio-26">Radio Button Checked</label>
</fieldset>
<fieldset>
<input disabled="" id="input-radio-27" name="input-radio-6" type="radio"/>
<label class="white" for="input-radio-27">Radio Button Disabled</label>
</fieldset>
<fieldset>
<input checked="" disabled="" id="input-radio-28" type="radio"/>
<label class="white" for="input-radio-28">Radio Button Checked &amp; Disabled</label>
</fieldset>
</div>
<div class="col-md-6 col-sm-12">
<div class="skin-states">
<fieldset>
<div class="state iradio_futurico mr-1"></div>
<label class="white">Normal State</label>
</fieldset>
<fieldset>
<div class="state iradio_futurico hover mr-1"></div>
<label class="white">Hover State</label>
</fieldset>
<fieldset>
<div class="state iradio_futurico checked mr-1"></div>
<label class="white">Checked State</label>
</fieldset>
<fieldset>
<div class="state iradio_futurico disabled mr-1"></div>
<label class="white">Disabled State</label>
</fieldset>
<fieldset>
<div class="state iradio_futurico checked disabled mr-1"></div>
<label class="white">Checked &amp; Disabled State</label>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- iCheck Radio end -->
<!-- Color Checkboxes start -->
<section class="input-type-options">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Color Checkboxes</h4>
<p>Add <code>.bg-COLOR</code> to span to set according to theme color.</p>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Template Color Checkbox</h4>
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
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="d-inline-block custom-control custom-checkbox mr-1">
<input class="custom-control-input bg-primary" id="colorCheck1" name="colorCheck" type="checkbox"/>
<label class="custom-control-label" for="colorCheck1">Primary Checkbox</label>
</div>
<div class="d-inline-block custom-control custom-checkbox mr-1">
<input checked="" class="custom-control-input bg-success" id="colorCheck2" name="colorCheck" type="checkbox"/>
<label class="custom-control-label" for="colorCheck2">Success Checkbox</label>
</div>
<div class="d-inline-block custom-control custom-checkbox mr-1">
<input class="custom-control-input bg-danger" id="colorCheck3" name="colorCheck" type="checkbox"/>
<label class="custom-control-label" for="colorCheck3">Danger Checkbox</label>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Another Template color checkbox example</h4>
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
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="d-inline-block custom-control custom-checkbox mr-1">
<input checked="" class="custom-control-input bg-info" id="colorCheck4" name="colorCheck" type="checkbox"/>
<label class="custom-control-label" for="colorCheck4">Information Checkbox</label>
</div>
<div class="d-inline-block custom-control custom-checkbox mr-1">
<input class="custom-control-input bg-warning" id="colorCheck5" name="colorCheck" type="checkbox"/>
<label class="custom-control-label" for="colorCheck5">Warning Checkbox</label>
</div>
<div class="d-inline-block custom-control custom-checkbox mr-1">
<input class="custom-control-input bg-purple" id="colorCheck6" name="colorCheck" type="checkbox"/>
<label class="custom-control-label" for="colorCheck6">Custom color purple</label>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Color Checkboxes end -->
<!-- Color Radio start -->
<section class="color-radio">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Custom Bootstrap Color Radio Buttons</h4>
<p>Add <code>.bg-COLOR</code> to span to set according to theme color.</p>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Template color Radio Button</h4>
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
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="d-inline-block custom-control custom-radio mr-1">
<input class="custom-control-input bg-primary" id="colorRadio1" name="colorRadio" type="radio"/>
<label class="custom-control-label" for="colorRadio1">Primary Radio</label>
</div>
<div class="d-inline-block custom-control custom-radio mr-1">
<input class="custom-control-input bg-success" id="colorRadio2" name="colorRadio" type="radio"/>
<label class="custom-control-label" for="colorRadio2">Success Radio</label>
</div>
<div class="d-inline-block custom-control custom-radio mr-1">
<input class="custom-control-input bg-danger" id="colorRadio3" name="colorRadio" type="radio"/>
<label class="custom-control-label" for="colorRadio3">Danger Radio</label>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Another Template color Radio example</h4>
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
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="d-inline-block custom-control custom-radio mr-1">
<input class="custom-control-input bg-info" id="colorRadio4" name="colorRadio" type="radio"/>
<label class="custom-control-label" for="colorRadio4">Information Radiobox</label>
</div>
<div class="d-inline-block custom-control custom-radio mr-1">
<input checked="" class="custom-control-input bg-warning" id="colorRadio5" name="colorRadio" type="radio"/>
<label class="custom-control-label" for="colorRadio5">Warning Radiobox</label>
</div>
<div class="d-inline-block custom-control custom-radio mr-1">
<input class="custom-control-input bg-pink" id="colorRadio6" name="colorRadio" type="radio"/>
<label class="custom-control-label" for="colorRadio6">Custom color pink</label>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Color Radio end -->
<!-- Inline Checkbox start -->
<section class="inline-checkbox">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Inline Checkboxes</h4>
<p>Add <code>.inline</code> class to the checkbox wrapper for inline checkbox.</p>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Custom Inline Checkboxes</h4>
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
<div class="card-content">
<div class="card-body">
<div class="d-inline-block custom-control custom-checkbox mr-1">
<input class="custom-control-input" id="checkbox1" name="colorCheck" type="checkbox"/>
<label class="custom-control-label" for="checkbox1">Unchecked custom checkbox</label>
</div>
<div class="d-inline-block custom-control custom-checkbox mr-1">
<input checked="" class="custom-control-input" id="checkbox2" name="colorCheck" type="checkbox"/>
<label class="custom-control-label" for="checkbox2">Checked custom checkbox</label>
</div>
<div class="d-inline-block custom-control custom-checkbox mr-1">
<input class="custom-control-input" disabled="" id="checkbox3" name="colorCheck" type="checkbox"/>
<label class="custom-control-label" for="checkbox3">Disabled custom checkbox</label>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Inline Checkbox end -->
<!-- Inline Radio start -->
<section class="inline-radio">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Inline Radio Buttons</h4>
<p>Add <code>.inline</code> class to the radio wrapper.</p>
</div>
</div>
<div class="row match-height">
<div class="col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Custom Inline Radio</h4>
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
<div class="card-content">
<div class="card-body">
<div class="d-inline-block custom-control custom-radio mr-1">
<input class="custom-control-input" id="radio1" name="colorRadio" type="radio"/>
<label class="custom-control-label" for="radio1">Unchecked custom radio</label>
</div>
<div class="d-inline-block custom-control custom-radio mr-1">
<input checked="" class="custom-control-input" id="radio2" name="colorRadio" type="radio"/>
<label checked="" class="custom-control-label" for="radio2">Checked custom radio</label>
</div>
<div class="d-inline-block custom-control custom-radio mr-1">
<input class="custom-control-input" disabled="" id="radio3" name="colorRadio" type="radio"/>
<label class="custom-control-label" disabled="" for="radio3">Disabled custom radio</label>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Inline Radio end -->
<!-- Image Checkbox start -->
<section class="image-checkbox">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Image Checkbox</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default Image Checkbox</h4>
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
<div class="card-content">
<div class="card-body">
<p>Add <code>.img-thumbnail</code> class to &lt;img&gt; tag after
                      input type checkbox.</p>
<fieldset class="form-group">
<label class="btn">
<input class="hidden" id="item1" name="chk1" type="checkbox" value="val1"/>
<img alt="..." class="check img-thumbnail" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png"/>
</label>
<label class="btn">
<input checked="" class="hidden" id="item2" name="chk2" type="checkbox" value="val2"/>
<img alt="..." class="img-thumbnail" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-2.png"/>
</label>
<label class="btn">
<input class="hidden" id="item3" name="chk3" type="checkbox" value="val3"/>
<img alt="..." class="check img-thumbnail" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-3.png"/>
</label>
<label class="btn">
<input class="hidden" id="item4" name="chk4" type="checkbox" value="val4"/>
<img alt="..." class="img-thumbnail" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-4.png"/>
</label>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Image Checkbox</h4>
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
<div class="card-content">
<div class="card-body">
<p>Add <code>.btn-COLORNAME</code> class to wrapper to use theme
                      colors.
                    </p>
<fieldset class="form-group">
<label class="btn">
<input class="hidden" id="item5" name="chk5" type="checkbox" value="val1"/>
<img alt="..." class="img-thumbnail" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-5.png"/>
</label>
<label class="btn">
<input class="hidden" id="item6" name="chk6" type="checkbox" value="val2"/>
<img alt="..." class="check img-thumbnail" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-6.png"/>
</label>
<label class="btn">
<input checked="" class="hidden" id="item7" name="chk7" type="checkbox" value="val3"/>
<img alt="..." class="img-thumbnail" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-7.png"/>
</label>
<label class="btn">
<input class="hidden" id="item8" name="chk8" type="checkbox" value="val4"/>
<img alt="..." class="img-thumbnail" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-8.png"/>
</label>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Image Checkbox end -->
</div>
</div>
</div>