<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\JqueryUiButtonsSelectAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">jQuery UI buttons &amp; select</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="jquery-ui-buttons-select.html#">jQuery UI</a>
</li>
<li class="breadcrumb-item active">Buttons &amp; Selects
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="jquery-ui-buttons-select.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="jquery-ui-buttons-select.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="jquery-ui-buttons-select.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="jquery-ui-buttons-select.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Buttons section start -->
<section id="buttons">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4>Buttons</h4>
<p>Enhances standard form elements like buttons, inputs and anchors to
                themeable buttons with appropriate hover and active styles.</p>
<hr/>
</div>
</div>
<!-- Widget Buttons -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Widget Buttons</h4>
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
<div class="row">
<div class="col-md-4 col-sm-12">
<fieldset class="text-center">
<button class="jui-btn-default mb-2">A button element</button>
</fieldset>
</div>
<div class="col-md-4 col-sm-12">
<fieldset class="text-center">
<input class="jui-input-btn-default mb-2" type="submit" value="A submit button"/>
</fieldset>
</div>
<div class="col-md-4 col-sm-12">
<fieldset class="text-center">
<a class="jui-anchor-default mb-2" href="jquery-ui-buttons-select.html#">An anchor</a>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- CSS Buttons -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">CSS Buttons</h4>
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
<div class="row">
<div class="col-md-4 col-sm-12">
<fieldset class="text-center">
<button class="ui-button ui-widget ui-corner-all mb-2">A button element</button>
</fieldset>
</div>
<div class="col-md-4 col-sm-12">
<fieldset class="text-center">
<input class="ui-button ui-widget ui-corner-all mb-2" type="submit" value="A submit button"/>
</fieldset>
</div>
<div class="col-md-4 col-sm-12">
<fieldset class="text-center">
<a class="ui-button ui-widget ui-corner-all mb-2" href="jquery-ui-buttons-select.html#">An anchor</a>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Button Styles -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Button Styles</h4>
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
<div class="row">
<div class="col-md-4 col-sm-12">
<fieldset class="text-center">
<h6>Default Style</h6>
<small>Default Button Styling</small>
<div class="form-group">
<button class="ui-button ui-widget ui-corner-all mb-2">Default</button>
</div>
</fieldset>
</div>
<div class="col-md-4 col-sm-12">
<fieldset class="text-center">
<h6>Button Colors</h6>
<small><code>btn-*</code> add class to apply color to the button</small>
<div class="form-group">
<button class="ui-button ui-widget ui-corner-all btn-primary mb-2">Primary</button>
<button class="ui-button ui-widget ui-corner-all btn-info mb-2">Info</button>
<button class="ui-button ui-widget ui-corner-all btn-warning mb-2">Warning</button>
<button class="ui-button ui-widget ui-corner-all btn-success mb-2">Success</button>
<button class="ui-button ui-widget ui-corner-all btn-danger mb-2">Danger</button>
</div>
</fieldset>
</div>
<div class="col-md-4 col-sm-12">
<fieldset class="text-center">
<h6>Transparent Anchor</h6>
<small>Anchor Styling</small>
<div class="form-group">
<a class="ui-button ui-button-link ui-widget ui-corner-all mb-2" href="jquery-ui-buttons-select.html#">An anchor</a>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Icon Buttons -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Icon Buttons</h4>
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
<div class="row">
<div class="col-md-3 col-sm-12">
<fieldset class="text-center">
<h6>Left Icon</h6>
<button class="ui-button ui-widget ui-corner-all mb-2">
<span class="ui-icon ft-settings"></span>Left Icon</button>
</fieldset>
</div>
<div class="col-md-3 col-sm-12">
<fieldset class="text-center">
<h6>Right Icon</h6>
<button class="ui-button ui-widget ui-corner-all mb-2">Right Icon
                            <span class="ui-icon ft-settings"></span>
</button>
</fieldset>
</div>
<div class="col-md-3 col-sm-12">
<fieldset class="text-center">
<h6>Top Icon</h6>
<button class="ui-button ui-widget ui-corner-all mb-2">
<span class="ui-icon ft-settings ui-widget-icon-block"></span>Top Icon</button>
</fieldset>
</div>
<div class="col-md-3 col-sm-12">
<fieldset class="text-center">
<h6>Bottom Icon</h6>
<button class="ui-button ui-widget ui-corner-all mb-2">Bottom Icon
                            <span class="ui-icon ft-settings ui-widget-icon-block"></span>
</button>
</fieldset>
</div>
</div>
<div class="row">
<div class="col-md-3 col-sm-12">
<fieldset class="text-center">
<h6>Only Icon</h6>
<button class="ui-button ui-widget ui-corner-all mb-2">
<span class="ui-icon ft-disc"></span>
</button>
</fieldset>
</div>
<div class="col-md-3 col-sm-12">
<fieldset class="text-center">
<h6>Both Icons With Text</h6>
<button class="ui-button ui-widget ui-corner-all mb-2">
<span class="ui-icon ft-wifi"></span>Both Icons
                            <span class="ui-icon ft-airplay"></span>
</button>
</fieldset>
</div>
<div class="col-md-3 col-sm-12">
<fieldset class="text-center">
<h6>Both Icons Without Text</h6>
<button class="ui-button ui-widget ui-corner-all mb-2">
<span class="ui-icon ft-unlock"></span>
<span class="ui-icon ft-camera"></span>
</button>
</fieldset>
</div>
<div class="col-md-3 col-sm-12">
<fieldset class="text-center">
<h6>Transparent Icon Anchor</h6>
<a class="ui-button ui-button-link ui-widget ui-corner-all mb-2" href="jquery-ui-buttons-select.html#">
<span class="ui-icon ft-clock"></span>
</a>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Buttons section end -->
<!-- Select Menu section start -->
<section id="select-menu">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4>Select Menu</h4>
<p>Enable a DOM element (or group of elements) to be selectable. Draw
                a box with your cursor to select items. Hold down the Ctrl key to
                make multiple non-adjacent selections</p>
<hr/>
</div>
</div>
<div class="row">
<!-- Examples -->
<div class="col-lg-6 col-sm-6 col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Examples</h4>
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
<!-- Default Functionality -->
<fieldset>
<label>Default Functionality</label>
<div class="form-group">
<select class="jui-select-default form-control" name="speed">
<option>Slower</option>
<option>Slow</option>
<option selected="selected">Medium</option>
<option>Fast</option>
<option>Faster</option>
</select>
</div>
</fieldset>
<!-- Categories -->
<fieldset>
<label>Categories</label>
<div class="form-group">
<select class="jui-select-categories" name="files">
<optgroup label="Scripts">
<option value="jquery">jQuery.js</option>
<option value="jqueryui">ui.jQuery.js</option>
</optgroup>
<optgroup label="Other files">
<option value="somefile">Some unknown file</option>
<option value="someotherfile">Some other file with a very long option text</option>
</optgroup>
</select>
</div>
</fieldset>
<!-- Select Number -->
<fieldset>
<label>Select Number</label>
<div class="form-group">
<select class="jui-select-number" name="number">
<option>1</option>
<option selected="selected">2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
</select>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<!-- Examples -->
<div class="col-lg-6 col-sm-6 col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Examples</h4>
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
<!-- Select Title -->
<fieldset>
<label>Select Title</label>
<div class="form-group">
<select class="jui-select-salutation" name="salutation">
<option disabled="" selected="">Please pick one</option>
<option>Mr.</option>
<option>Mrs.</option>
<option>Dr.</option>
<option>Prof.</option>
<option>Other</option>
</select>
</div>
</fieldset>
<fieldset>
<label>Custom Icon:</label>
<div class="form-group">
<select class="jui-select-podcasts" name="podcasts">
<option data-class="ft-video" value="mypodcast">Video</option>
<option data-class="ft-unlock" value="myvideo">Unlock</option>
<option data-class="ft-credit-card" value="myrss">Card</option>
</select>
</div>
</fieldset>
<!-- Disabled -->
<fieldset>
<label>Disabled</label>
<div class="form-group">
<select class="jui-select-disabled form-control" name="speed">
<option>Slower</option>
<option>Slow</option>
<option selected="selected">Medium</option>
<option>Fast</option>
<option>Faster</option>
</select>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Select Menu section end -->
<!-- checkbox & radio buttons section start -->
<section id="chkbox-radio">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4>Checkbox &amp; Radio Buttons</h4>
<p>Enhances standard checkbox and radio input element to themeable buttons
                with appropriate hover and active styles.</p>
<hr/>
</div>
</div>
<!-- Default Functionality -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default Functionality</h4>
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
<div class="row">
<div class="col-md-4 col-sm-12">
<fieldset class="text-center">
<h6>Radio Buttons</h6>
<label for="radio-1">New York</label>
<input class="jui-radio-buttons" id="radio-1" name="jui-radio-buttons" type="radio"/>
<label for="radio-2">Paris</label>
<input class="jui-radio-buttons" id="radio-2" name="jui-radio-buttons" type="radio"/>
<label for="radio-3">London</label>
<input class="jui-radio-buttons" id="radio-3" name="jui-radio-buttons" type="radio"/>
</fieldset>
</div>
<div class="col-md-4 col-sm-12">
<fieldset class="text-center">
<h6>Checkbox</h6>
<label for="checkbox-1">2 Star</label>
<input class="jui-checkbox" id="checkbox-1" name="jui-checkbox1" type="checkbox"/>
<label for="checkbox-2">3 Star</label>
<input class="jui-checkbox" id="checkbox-2" name="jui-checkbox2" type="checkbox"/>
<label for="checkbox-3">4 Star</label>
<input class="jui-checkbox" id="checkbox-3" name="jui-checkbox3" type="checkbox"/>
<label for="checkbox-4">5 Star</label>
<input class="jui-checkbox" id="checkbox-4" name="jui-checkbox4" type="checkbox"/>
</fieldset>
</div>
<div class="col-md-4 col-sm-12">
<fieldset class="text-center">
<h6>Checkbox nested in label</h6>
<label for="checkbox-nested-1">2 Double
                            <input class="jui-nested-checkbox" id="checkbox-nested-1" name="checkbox-nested-1" type="checkbox"/>
</label>
<label for="checkbox-nested-2">2 Queen
                            <input class="jui-nested-checkbox" id="checkbox-nested-2" name="checkbox-nested-2" type="checkbox"/>
</label>
<label for="checkbox-nested-3">1 Queen
                            <input class="jui-nested-checkbox" id="checkbox-nested-3" name="checkbox-nested-3" type="checkbox"/>
</label>
<label for="checkbox-nested-4">1 King
                            <input class="jui-nested-checkbox" id="checkbox-nested-4" name="checkbox-nested-4" type="checkbox"/>
</label>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- No Icons -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">No Icons</h4>
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
<div class="row">
<div class="col-md-4 col-sm-12">
<fieldset class="text-center">
<h6>Radio Buttons</h6>
<label for="radio-i1">New York</label>
<input class="jui-ni-radio-buttons" id="radio-i1" name="jui-radio-buttons" type="radio"/>
<label for="radio-i2">Paris</label>
<input class="jui-ni-radio-buttons" id="radio-i2" name="jui-radio-buttons" type="radio"/>
<label for="radio-i3">London</label>
<input class="jui-ni-radio-buttons" id="radio-i3" name="jui-radio-buttons" type="radio"/>
</fieldset>
</div>
<div class="col-md-4 col-sm-12">
<fieldset class="text-center">
<h6>Checkbox</h6>
<label for="checkbox-i1">2 Star</label>
<input class="jui-ni-checkbox" id="checkbox-i1" name="jui-checkbox1" type="checkbox"/>
<label for="checkbox-i2">3 Star</label>
<input class="jui-ni-checkbox" id="checkbox-i2" name="jui-checkbox2" type="checkbox"/>
<label for="checkbox-i3">4 Star</label>
<input class="jui-ni-checkbox" id="checkbox-i3" name="jui-checkbox3" type="checkbox"/>
<label for="checkbox-i4">5 Star</label>
<input class="jui-ni-checkbox" id="checkbox-i4" name="jui-checkbox4" type="checkbox"/>
</fieldset>
</div>
<div class="col-md-4 col-sm-12">
<fieldset class="text-center">
<h6>Checkbox nested in label</h6>
<label for="checkbox-nested-i1">2 Double
                            <input class="jui-ni-nested-checkbox" id="checkbox-nested-i1" name="checkbox-nested-i1" type="checkbox"/>
</label>
<label for="checkbox-nested-i2">2 Queen
                            <input class="jui-ni-nested-checkbox" id="checkbox-nested-i2" name="checkbox-nested-i2" type="checkbox"/>
</label>
<label for="checkbox-nested-i3">1 Queen
                            <input class="jui-ni-nested-checkbox" id="checkbox-nested-i3" name="checkbox-nested-i3" type="checkbox"/>
</label>
<label for="checkbox-nested-i4">1 King
                            <input class="jui-ni-nested-checkbox" id="checkbox-nested-i4" name="checkbox-nested-i4" type="checkbox"/>
</label>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // checkbox & radio buttons section end -->
</div>
