<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\FormSwitchAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Switch</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="form-switch.html#">Form Components</a>
</li>
<li class="breadcrumb-item active">Switch
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="form-switch.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="form-switch.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="form-switch.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="form-switch.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Checkbox Toggle start -->
<section class="bootstrap-checkbox" id="bootstrap-checkbox">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Bootstrap Checkbox Toggle</h4>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Simple Switch</label>
</div>
<div class="card-content">
<div class="card-body">
<p>Add <code>.switch</code>class to checkbox to set as switch</p>
<fieldset>
<div class="float-left">
<input checked="checked" class="switch" id="switch1" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Reverse Switch</label>
</div>
<div class="card-content">
<div class="card-body">
<p> Add <code>checked</code> to set checked bootstrap switch</p>
<fieldset>
<div class="float-left">
<input class="switch" data-reverse="" id="switch2" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Always toggle Switch</label>
</div>
<div class="card-content">
<div class="card-body">
<p>Add <code>data-switch-always</code> to switch on every click</p>
<fieldset>
<div class="float-left">
<input checked="" class="switch" data-switch-always="" id="switch3" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Disabled Switch</label>
</div>
<div class="card-content">
<div class="card-body">
<p>Checked &amp; Disabled toggle</p>
<fieldset>
<div class="float-left">
<input checked="" class="switch" disabled="" id="switch4" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Small Switch</label>
</div>
<div class="card-content">
<div class="card-body">
<p>Add <code>data-group-cls="btn-group-sm"</code> attribute for
                      small switch</p>
<fieldset>
<div class="float-left">
<input class="switch" data-group-cls="btn-group-sm" id="switch5" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Large Switch</label>
</div>
<div class="card-content">
<div class="card-body">
<p>Add <code>data-group-cls="btn-group-lg"</code> attribute for
                      large switch</p>
<fieldset>
<div class="float-left">
<input class="switch" data-group-cls="btn-group-lg" id="switch6" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Vertical Switch</label>
</div>
<div class="card-content">
<div class="card-body">
<p>Add <code>data-group-cls="btn-group-vertical"</code> attribute
                      for vertical switch</p>
<fieldset>
<div class="float-left">
<input class="switch" data-group-cls="btn-group-vertical" data-switch-always="" id="switch7" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Change Switch Title</label>
</div>
<div class="card-content">
<div class="card-body">
<p>Add <code>data-off-title="VALUE"</code> attribute for OFF hover
                      title and <code>data-on-title="VALUE"</code> attribute for
                      ON hover title</p>
<fieldset>
<div class="float-left">
<input checked="" class="switch" data-off-title="Don't Say NO!!" data-on-title="Say,Yes please!!" data-switch-always="" id="switch8" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Switch with Icons</label>
</div>
<div class="card-content">
<div class="card-body">
<p>Add <code>data-icon-cls="fa"</code> to set font family you are
                      using <code>data-off-icon-cls="fa FONT_AWESOME_ICON"</code>                      attribute for off switch icon &amp; <code>data-on-icon-cls="fa FONT_AWESOME_ICON"</code>                      attribute for on switch icon</p>
<fieldset>
<div class="float-left">
<input class="switch" data-icon-cls="fa" data-off-icon-cls="ft-thumbs-down" data-on-icon-cls="ft-thumbs-up" id="switch9" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Only Switch Icons</label>
</div>
<div class="card-content">
<div class="card-body">
<p>To set only icon switch set <code>data-off-label="false"</code>                      &amp; <code>data-off-label="false"</code>.</p>
<fieldset>
<div class="float-left">
<input checked="" class="switch" data-icon-cls="fa" data-off-icon-cls="icon-user" data-off-label="false" data-on-icon-cls="icon-user-female" data-on-label="false" id="switch10" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">OnLabel Click change</label>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="float-left">
<input class="switch" data-col-sm-3="" id="switch11" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Change Switch Labels</label>
</div>
<div class="card-content">
<div class="card-body">
<p>Add <code>data-off-label="OffValue"</code> attribute for off
                      switch label &amp; <code>data-on-label="OnValue"</code> attribute
                      for on switch label</p>
<fieldset>
<div class="float-left">
<input checked="" class="switch" data-off-label="Female" data-on-label="Male" id="switch12" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Checkbox Toggle end -->
<!-- Bootstrap Switch start -->
<section class="bootstrap-switch-toggle" id="bootstrap-switch-toggle">
<div class="row">
<div class="col-12">
<h4>Bootstrap Switch Toggle</h4>
<hr/>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Bootstrap Switch default</label>
</div>
<div class="card-content">
<div class="card-body">
<p> Add <code>.switchBootstrap</code> class to set bootstrap switch</p>
<fieldset>
<div class="float-left">
<input class="make-switch switchBootstrap" id="switchBootstrap1" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Bootstrap Switch checked</label>
</div>
<div class="card-content">
<div class="card-body">
<p> Add <code>checked</code> to set checked bootstrap switch</p>
<fieldset>
<div class="float-left">
<input checked="" class="switchBootstrap" id="switchBootstrap2" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Bootstrap Switch checked &amp; Disabled</label>
</div>
<div class="card-content">
<div class="card-body">
<p> Add <code>checked disabled</code> to set checked &amp; disabled
                      bootstrap switch</p>
<fieldset>
<div class="float-left">
<input checked="" class="switchBootstrap" disabled="" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Bootstrap Switch Checked &amp; readonly</label>
</div>
<div class="card-content">
<div class="card-body">
<p> Add <code>checked readonly</code> for checked &amp; readonly
                      switch direction.</p>
<fieldset>
<div class="float-left">
<input checked="" class="switchBootstrap" readonly="" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Bootstrap Switch with On Text</label>
</div>
<div class="card-content">
<div class="card-body">
<p> Add <code>data-on-text="TEXT"</code> to change text of the left
                      side of the switch</p>
<fieldset>
<div class="float-left">
<input checked="" class="switchBootstrap" data-on-text="Left" id="switchBootstrap5" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Bootstrap Switch with Off Text</label>
</div>
<div class="card-content">
<div class="card-body">
<p> Add <code>data-off-text="TEXT"</code> to change text of the right
                      side of the switch</p>
<fieldset>
<div class="float-left">
<input class="switchBootstrap" data-off-text="Right" id="switchBootstrap6" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Bootstrap Switch with custom Label</label>
</div>
<div class="card-content">
<div class="card-body">
<p>use <code>data-label-text="TEXT"</code> for text of the center
                      handle of the switch and that will work with <code>data-indeterminate="true"</code>                      attribute only.</p>
<fieldset>
<div class="float-left">
<input checked="" class="switchBootstrap" data-indeterminate="true" data-label-text="Gender" data-off-text="Male" data-on-text="Female" id="switchBootstrap7" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Bootstrap Switch Label Options</label>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="float-left">
<input class="switchBootstrap" data-off-text="No" data-on-text="Yes" id="switchBootstrap8" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Bootstrap Switch Label Options</label>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="float-left">
<input checked="" class="switchBootstrap" data-off-text="Offline" data-on-text="Online" id="switchBootstrap9" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Bootstrap Switch Label Options</label>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="float-left">
<input class="switchBootstrap" data-off-text="Disable" data-on-text="Enable" id="switchBootstrap10" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Bootstrap Switch with Icon</label>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="float-left">
<input checked="" class="switchBootstrap" data-off-text="&lt;i class='la la-thumbs-down'&gt;&lt;/i&gt;" data-on-text="&lt;i class='la la-thumbs-up'&gt;&lt;/i&gt;" id="switchBootstrap11" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Bootstrap Switch with Icon &amp; Text</label>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="float-left">
<input class="switchBootstrap" data-off-text="&lt;i class='la la-thumbs-down'&gt;&lt;/i&gt; &lt;br&gt; No" data-on-text="&lt;i class='la la-thumbs-up'&gt;&lt;/i&gt; &lt;br&gt;Yes" id="switchBootstrap12" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Bootstrap Switch Label with Icon</label>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="float-left">
<input checked="" class="switchBootstrap" data-indeterminate="true" data-label-text="Gender" data-off-text="Female &lt;i class='la la-venus'&gt;&lt;/i&gt;" data-on-text="Male &lt;i class='la la-mars'&gt;&lt;/i&gt;" id="switchBootstrap13" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Bootstrap Switch Label with Icon on top</label>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="float-left">
<input checked="" class="switchBootstrap" data-indeterminate="true" data-label-text="Gender" data-off-text="&lt;i class='la la-venus'&gt;&lt;/i&gt; &lt;br&gt; Female " data-on-text="&lt;i class='la la-mars'&gt;&lt;/i&gt; &lt;br&gt; Male " id="switchBootstrap14" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Bootstrap Switch Default Color</label>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="float-left">
<input checked="" class="switchBootstrap" data-on-color="default" id="switchBootstrap15" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Bootstrap Switch Primary Color</label>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="float-left">
<input checked="" class="switchBootstrap" data-on-color="primary" id="switchBootstrap16" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Bootstrap Switch Warning Color</label>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="float-left">
<input checked="" class="switchBootstrap" data-on-color="warning" id="switchBootstrap17" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Bootstrap Switch Success Color</label>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="float-left">
<input checked="" class="switchBootstrap" data-off-color="danger" data-on-color="success" id="switchBootstrap18" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Bootstrap Switch Danger Color</label>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="float-left">
<input class="switchBootstrap" data-off-color="danger" id="switchBootstrap19" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Bootstrap Switch Info Color</label>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="float-left">
<input checked="" class="switchBootstrap" data-on-color="info" id="switchBootstrap20" type="checkbox"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Bootstrap Switch Radio</label>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="float-left">
<input checked="" class="switchBootstrap" name="radio1" type="radio"/>
<input class="switchBootstrap" name="radio1" type="radio"/>
<input class="switchBootstrap" name="radio1" type="radio"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<label class="card-title">Bootstrap Switch Radio Icons</label>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="float-left">
<input checked="" class="switchBootstrap" data-radio-all-off="true" name="radio2" type="radio"/>
<input class="switchBootstrap" data-radio-all-off="true" name="radio2" type="radio"/>
<input class="switchBootstrap" data-radio-all-off="true" name="radio2" type="radio"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Bootstrap Switch end -->
<!-- Switchery Switch start -->
<section class="switchery-toggle" id="switchery-toggle">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Switchery Toggle</h4>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Switchery Toggle</h4>
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
<p>To set Switchery toggle, add <code>.switchery</code> class to
                      checkbox.
                    </p>
<div class="form-group pb-1">
<input checked="" class="switchery" id="switchery" type="checkbox"/>
<label class="font-medium-2 text-bold-600 ml-1" for="switchery">Switchery Default</label>
</div>
<div class="form-group pb-1">
<input class="switchery" id="switchery1" type="checkbox"/>
<label class="font-medium-2 text-bold-600 ml-1" for="switchery1">Switchery Unchecked</label>
</div>
<div class="form-group pb-1">
<input checked="" class="switchery" disabled="" id="switchery2" type="checkbox"/>
<label class="font-medium-2 text-bold-600 ml-1" for="switchery2">Switchery Checked &amp; Disabled</label>
</div>
<div class="form-group">
<input class="switchery" disabled="" id="switchery3" type="checkbox"/>
<label class="font-medium-2 text-bold-600 ml-1" for="switchery3">Switchery Disable</label>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Right Switchery Toggle</h4>
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
<p> To set Switchery toggle to right, wrap checkbox with <code>.float-right</code>                      class.</p>
<div class="form-group pb-1">
<div class="float-right">
<input checked="" class="switchery" id="switchery0" name="switchery" type="checkbox"/>
</div>
<label class="font-medium-2 text-bold-600" for="switchery0">Switchery Default</label>
</div>
<div class="form-group pb-1">
<div class="float-right">
<input class="switchery" id="switchery01" name="switchery" type="checkbox"/>
</div>
<label class="font-medium-2 text-bold-600" for="switchery01">Switchery Unchecked</label>
</div>
<div class="form-group pb-1">
<div class="float-right">
<input checked="" class="switchery" disabled="" id="switchery02" name="switchery" type="checkbox"/>
</div>
<label class="font-medium-2 text-bold-600" for="switchery02">Switchery Checked &amp; Disabled</label>
</div>
<div class="form-group">
<div class="float-right">
<input class="switchery" disabled="" id="switchery03" name="switchery" type="checkbox"/>
</div>
<label class="font-medium-2 text-bold-600" for="switchery03">Switchery Disable</label>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Switchery Sizes</h4>
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
<div class="form-group ">
<input checked="" class="switchery" data-size="lg" id="switcherySize" type="checkbox"/>
<label class="font-medium-2 text-bold-600 ml-1" for="switcherySize">Large Switchery</label>
<p class="text-muted"> To set Large Switchery toggle, add <code>data-size="lg"</code>                        to checkbox with <code>.switchery</code> class.</p>
</div>
<div class="form-group mt-1">
<input checked="" class="switchery" id="switcherySize1" type="checkbox"/>
<label class="font-medium-2 text-bold-600 ml-1" for="switcherySize1">Default Switchery</label>
<p class="text-muted"> To set Default Switchery toggle, add <code>.switchery</code>                        class to checkbox.</p>
</div>
<div class="form-group mt-1">
<input checked="" class="switchery" data-size="sm" id="switcherySize2" type="checkbox"/>
<label class="font-medium-2 text-bold-600 ml-1" for="switcherySize2">Small Switchery</label>
<p class="text-muted"> To set Small Switchery toggle, add <code>data-size="sm"</code>                        to checkbox with <code>.switchery</code> class.</p>
</div>
<div class="form-group mt-1">
<input checked="" class="switchery" data-size="xs" id="switcherySize3" type="checkbox"/>
<label class="font-medium-2 text-bold-600 ml-1" for="switcherySize3">Extra Small Switchery</label>
<p class="text-muted"> To set Extra Small Switchery toggle, add <code>data-size="xs"</code>                        to checkbox with <code>.switchery</code> class.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Switchery Labels on both sides</h4>
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
<div class="form-group pb-1">
<label class="font-medium-2 text-bold-600 mr-1" for="switcherySize10">Left Label</label>
<input checked="" class="switchery" data-size="lg" id="switcherySize10" type="checkbox"/>
<label class="font-medium-2 text-bold-600 ml-1" for="switcherySize10">Right Label</label>
</div>
<div class="form-group mt-1 pb-1">
<label class="font-medium-2 text-bold-600 mr-1" for="switcherySize11">Left Label</label>
<input checked="" class="switchery" id="switcherySize11" type="checkbox"/>
<label class="font-medium-2 text-bold-600 ml-1" for="switcherySize11">Right Label</label>
</div>
<div class="form-group mt-1 pb-1">
<label class="font-medium-2 text-bold-600 mr-1" for="switcherySize12">Left Label</label>
<input checked="" class="switchery" data-size="sm" id="switcherySize12" type="checkbox"/>
<label class="font-medium-2 text-bold-600 ml-1" for="switcherySize12">Right Label</label>
</div>
<div class="form-group mt-1">
<label class="font-medium-2 text-bold-600 mr-1" for="switcherySize13">Left Label</label>
<input checked="" class="switchery" data-size="xs" id="switcherySize13" type="checkbox"/>
<label class="font-medium-2 text-bold-600 ml-1" for="switcherySize13">Right Label</label>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Switchery Switch end -->
<!-- Template Color Switchery start -->
<section class="theme-switchery" id="theme-switchery">
<div class="row">
<div class="col-12">
<h4>Template Color Switchery</h4>
<hr/>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Color Switchery</h4>
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
<div class="form-group ">
<input checked="" class="switchery" data-color="primary" id="switcheryColor" type="checkbox"/>
<label class="card-title ml-1" for="switcheryColor">Primary Color Switchery</label>
</div>
<div class="form-group mt-1">
<input checked="" class="switchery" data-color="success" id="switcheryColor4" type="checkbox"/>
<label class="card-title ml-1" for="switcheryColor4">Success Switchery</label>
</div>
<div class="form-group mt-1">
<input checked="" class="switchery" data-color="danger" id="switcheryColor3" type="checkbox"/>
<label class="card-title ml-1" for="switcheryColor3">Danger Switchery</label>
</div>
<div class="form-group mt-1">
<input checked="" class="switchery" data-color="info" id="switcheryColor2" type="checkbox"/>
<label class="card-title ml-1" for="switcheryColor2">Info Switchery</label>
</div>
<div class="form-group mt-1">
<input checked="" class="switchery" data-color="warning" id="switcheryColor1" type="checkbox"/>
<label class="card-title ml-1" for="switcheryColor1">Warning Switchery</label>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">COLOR SWITCHERY WITH LABELS ON BOTH SIDES</h4>
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
<div class="form-group row overflow-hidden">
<div class="col-sm-4 col-5">
<label class="card-title primary " for="switcheryColor10">Primary Color Label &amp; Switchery</label>
</div>
<div class="col-sm-4 col-2 text-center mb-1">
<input checked="" class="switchery" data-color="primary" id="switcheryColor10" type="checkbox"/>
</div>
<div class="col-sm-4 col-5">
<label class="card-title primary " for="switcheryColor10">Primary Color Label &amp; Switchery</label>
</div>
</div>
<div class="form-group row overflow-hidden mt-1">
<div class="col-sm-4 col-5">
<label class="card-title success" for="switcheryColor14">Success Color Label &amp; Switchery</label>
</div>
<div class="col-sm-4 col-2 text-center mb-1">
<input checked="" class="switchery" data-color="success" id="switcheryColor14" type="checkbox"/>
</div>
<div class="col-sm-4 col-5">
<label class="card-title success" for="switcheryColor14">Success Color Label &amp; Switchery</label>
</div>
</div>
<div class="form-group row overflow-hidden mt-1">
<div class="col-sm-4 col-5">
<label class="card-title danger" for="switcheryColor13">Danger Color Label &amp; Switchery</label>
</div>
<div class="col-sm-4 col-2 text-center mb-1">
<input checked="" class="switchery" data-color="danger" id="switcheryColor13" type="checkbox"/>
</div>
<div class="col-sm-4 col-5">
<label class="card-title danger" for="switcheryColor13">Danger Color Label &amp; Switchery</label>
</div>
</div>
<div class="form-group row overflow-hidden mt-1">
<div class="col-sm-4 col-5">
<label class="card-title info" for="switcheryColor12">Info Color Label &amp; Switchery</label>
</div>
<div class="col-sm-4 col-2 text-center mb-1">
<input checked="" class="switchery" data-color="info" id="switcheryColor12" type="checkbox"/>
</div>
<div class="col-sm-4 col-5">
<label class="card-title info" for="switcheryColor12">Info Color Label &amp; Switchery</label>
</div>
</div>
<div class="form-group row mt-1">
<div class="col-sm-4 col-5">
<label class="card-title warning" for="switcheryColor11">Warning Color Label &amp; Switchery</label>
</div>
<div class="col-sm-4 col-2 text-center overflow-hidden mb-1">
<input checked="" class="switchery" data-color="warning" id="switcheryColor11" type="checkbox"/>
</div>
<div class="col-sm-4 col-5">
<label class="card-title warning" for="switcheryColor11">Warning Color Label &amp; Switchery</label>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Template Color Switchery end-->
</div>
</div>
</div>