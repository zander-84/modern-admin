<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\JqueryUiSliderSpinnerAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">jQuery UI slider and spinner</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="jquery-ui-slider-spinner.html#">jQuery UI</a>
</li>
<li class="breadcrumb-item active">Slider &amp; Spinner
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="jquery-ui-slider-spinner.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="jquery-ui-slider-spinner.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="jquery-ui-slider-spinner.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="jquery-ui-slider-spinner.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- basic horizontal sliders section start -->
<section id="horz-slider-basic">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4>Basic Horizontal Sliders</h4>
<hr/>
</div>
</div>
<div class="row">
<!-- Simple Examples -->
<div class="col-lg-6 col-sm-6 col-12">
<div class="card">
<div class="card-content collapse show">
<div class="card-body">
<fieldset>
<label>Default Functionality</label>
<div class="form-group">
<div class="jui-slider-default"></div>
<small>Default slider.</small>
</div>
</fieldset>
<fieldset>
<label>Custom Start</label>
<div class="form-group">
<div class="jui-slider-custom-start"></div>
<small>Determines the value of the slider, if there's only one handle.
                          If there is more than one handle, determines the value
                          of the first handle.</small>
</div>
</fieldset>
<fieldset>
<label>Increment Steps</label>
<div class="form-group">
<div class="jui-slider-increment-steps"></div>
<small>Increment slider values with the <code>step</code> option
                          set to an integer, commonly a dividend of the slider's
                          maximum value. The default increment is 1.</small>
</div>
</fieldset>
<fieldset>
<label>Animation</label>
<div class="form-group">
<div class="jui-slider-animation"></div>
<small>Whether to slide the handle smoothly when the user clicks
                          on the slider track. Also accepts any valid animation duration.</small>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-sm-6 col-12">
<div class="card">
<div class="card-content collapse show">
<div class="card-body">
<fieldset>
<label>Min</label>
<div class="form-group">
<div class="jui-slider-min"></div>
<small>The minimum value of the slider.</small>
</div>
</fieldset>
<fieldset>
<label>Max</label>
<div class="form-group">
<div class="jui-slider-max"></div>
<small>The maximum value of the slider.</small>
</div>
</fieldset>
<fieldset>
<label>Range Slider</label>
<div class="form-group">
<div class="jui-slider-range"></div>
<small>Increment slider values with the <code>step</code> option
                          set to an integer, commonly a dividend of the slider's
                          maximum value. The default increment is 1.</small>
</div>
</fieldset>
<fieldset>
<label>Disabled</label>
<div class="form-group">
<div class="jui-slider-disabled"></div>
<small>Whether to slide the handle smoothly when the user clicks
                          on the slider track. Also accepts any valid animation duration.</small>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // basic horizontal sliders section end -->
<!-- advance horizontal sliders section start -->
<section id="horz-slider-advance">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4>Advance Horizontal Sliders</h4>
<hr/>
</div>
</div>
<!-- Advance Horizontal Sliders -->
<div class="row">
<!-- Advance Sliders -->
<div class="col-lg-6 col-sm-6 col-12">
<div class="card">
<div class="card-content collapse show">
<div class="card-body">
<fieldset>
<label>Show All Labels</label>
<div class="form-group">
<div class="ui-slider-success jui-slider-all-labels"></div>
<small>By default we only show the labels for the <code>first</code>                          and <code>last</code> points, shown below is an example
                          of labels being applied to all pips.</small>
</div>
</fieldset>
<fieldset>
<label>Hide Labels &amp; Pips</label>
<div class="form-group">
<div class="ui-slider-danger jui-slider-hide-labels-pips"></div>
<small>It is possible to hide all the pips if we want a slider to
                          show just the <code>min/max</code> values.</small>
</div>
</fieldset>
<fieldset>
<label>Only Show Pips</label>
<div class="form-group">
<div class="jui-slider-only-pips"></div>
<small>Instead of having the values shown for the <code>first/last</code>                          point, we could only show pips. This might be good when
                          we just need to show the user how many options they have
                          without showing explicit values.</small>
</div>
</fieldset>
<fieldset>
<label>Prefix / Suffix</label>
<div class="form-group">
<div class="ui-slider-info jui-slider-prefix-suffix"></div>
<small>If we need to add some content/context to our values, we
                          can specify a <code>prefix</code> and/or <code>suffix</code>                          to spice things up. It would not be possible with css <code>:before</code>                          and <code>:after</code> because we already use these pseudo-elements
                          for styling.</small>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-sm-6 col-12">
<div class="card">
<div class="card-content collapse show">
<div class="card-body">
<fieldset>
<label>Months</label>
<div class="form-group">
<div class="ui-slider-primary jui-slider-months"></div>
<small>It's possible with <code>rest: "tag"</code> to set some custom
                          <code>labels</code> to the slider instead of the default
                          values. It's important to note here that the slider will
                          still return its integer value when <code>$(".slider").slider("value");</code>                          is called.</small>
</div>
</fieldset>
<fieldset>
<label>More Custom Labels</label>
<div class="form-group">
<div class="ui-slider-warning jui-slider-more-custom-labels"></div>
<small>Here's another example using labels except here we replace
                          roman numbers with the Chinese/Hanzi equivalent.</small>
</div>
</fieldset>
<fieldset>
<label>Steps</label>
<div class="form-group">
<div class="ui-slider-info jui-slider-pip-steps"></div>
<small>Steps can be a little complicated. The default slider allows
                          us to skip along the slider in a pattern. eg: <code>0, 20, 40...</code></small>
<small>Steps are hard-wired in to the slider and so the <code>pips</code>                          and <code>labels</code> will match the <code>step</code>                          value.</small>
</div>
</fieldset>
<fieldset>
<label>Multiplicative Steps</label>
<div class="form-group">
<div class="ui-slider-danger jui-slider-multiplicative-steps"></div>
<small>When a slider has the <code>.slider("pips");</code> method
                          applied to it, the <code>pips</code> method may also take
                          a <code>step</code> option to allow additional control
                          over the way <code>pips</code> are stepped visually. This
                          option has no effect on the slider's functionality.</small>
<small>The <code>step</code> value on the <code>.slider("pips");</code>                          method is multiplicative; meaning it will only show every
                          <code>nth</code> step that exists from the main <code>.slider();</code>                          method.</small>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // advance horizontal sliders section end -->
<!-- slider colors section start -->
<section id="slider-colors">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4>Slider Colors</h4>
<hr/>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-content collapse show">
<div class="card-body">
<fieldset>
<label>Default Color Slider</label>
<div class="form-group">
<div class="jui-default-color-slider"></div>
</div>
</fieldset>
<fieldset>
<label>Success Color Slider</label>
<div class="form-group">
<div class="ui-slider-success jui-success-color-slider"></div>
</div>
</fieldset>
<fieldset>
<label>Info Color Slider</label>
<div class="form-group">
<div class="ui-slider-info jui-info-color-slider"></div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-content collapse show">
<div class="card-body">
<fieldset>
<label>Warning Color Slider</label>
<div class="form-group">
<div class="ui-slider-warning jui-warning-color-slider"></div>
</div>
</fieldset>
<fieldset>
<label>Primary Color Slider</label>
<div class="form-group">
<div class="ui-slider-primary jui-primary-color-slider"></div>
</div>
</fieldset>
<fieldset>
<label>Danger Color Slider</label>
<div class="form-group">
<div class="ui-slider-danger jui-danger-color-slider"></div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // slider colors section end -->
<!-- slider sizing section start -->
<section id="slider-sizing">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4>Slider Sizing</h4>
<hr/>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-content collapse show">
<div class="card-body">
<fieldset>
<label>Extra Large Size</label>
<div class="form-group">
<div class="ui-slider-xl ui-slider-primary jui-slider-sizing-xl"></div>
</div>
</fieldset>
<fieldset>
<label>Large Size</label>
<div class="form-group">
<div class="ui-slider-lg ui-slider-success jui-slider-sizing-lg"></div>
</div>
</fieldset>
<fieldset>
<label>Default</label>
<div class="form-group">
<div class="jui-slider-sizing-default"></div>
</div>
</fieldset>
<fieldset>
<label>Small Size</label>
<div class="form-group">
<div class="ui-slider-sm ui-slider-info jui-slider-sizing-sm"></div>
</div>
</fieldset>
<fieldset>
<label>Extra Small</label>
<div class="form-group">
<div class="ui-slider-xs ui-slider-danger jui-slider-sizing-xs"></div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-content collapse show">
<div class="card-body">
<fieldset>
<label>Extra Large Size</label>
<div class="form-group">
<div class="ui-slider-xl ui-slider-primary jui-slider-sizing-pips-xl"></div>
</div>
</fieldset>
<fieldset>
<label>Large Size</label>
<div class="form-group">
<div class="ui-slider-lg ui-slider-success jui-slider-sizing-pips-lg"></div>
</div>
</fieldset>
<fieldset>
<label>Default</label>
<div class="form-group">
<div class="jui-slider-sizing-pips-default"></div>
</div>
</fieldset>
<fieldset>
<label>Small Size</label>
<div class="form-group">
<div class="ui-slider-sm ui-slider-info jui-slider-sizing-pips-sm"></div>
</div>
</fieldset>
<fieldset>
<label>Extra Small</label>
<div class="form-group">
<div class="ui-slider-xs ui-slider-danger jui-slider-sizing-pips-xs"></div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // slider sizing section end -->
<!-- vertical sliders section start -->
<section id="vertical-sliders">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4>Vertical Sliders</h4>
<hr/>
</div>
</div>
<!-- Basic Vertical Sliders -->
<div class="row">
<div class="col-lg-4 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default Vertical Slider</h4>
</div>
<div class="card-content collapse show">
<div class="card-body">
<fieldset>
<div class="form-group text-center">
<div class="jui-vert-slider-default">
<span>25</span>
<span>60</span>
<span>40</span>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Fixed Minimum Range</h4>
</div>
<div class="card-content collapse show">
<div class="card-body">
<fieldset>
<div class="form-group text-center">
<div class="jui-vert-min-range-slider">
<span class="ui-slider-primary">25</span>
<span class="ui-slider-success">60</span>
<span class="ui-slider-danger">40</span>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Fixed Maximum Range</h4>
</div>
<div class="card-content collapse show">
<div class="card-body">
<fieldset>
<div class="form-group text-center">
<div class="jui-vert-max-range-slider">
<span class="ui-slider-primary">25</span>
<span class="ui-slider-success">60</span>
<span class="ui-slider-danger">40</span>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
<!-- Advance Vertical Sliders -->
<div class="row">
<div class="col-lg-4 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Vertical Slider With Pips</h4>
</div>
<div class="card-content collapse show">
<div class="card-body">
<fieldset>
<div class="form-group text-center">
<div class="jui-vert-slider-pips">
<span class="ui-slider-primary">20</span>
<span class="ui-slider-warning">6</span>
<span class="ui-slider-info">12</span>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Vertical Slider With Labels</h4>
</div>
<div class="card-content collapse show">
<div class="card-body">
<fieldset>
<div class="form-group text-center">
<div class="jui-vert-slider-pips-lables">
<span class="ui-slider-primary">2</span>
<span class="ui-slider-warning">8</span>
<span class="ui-slider-success">5</span>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Hide Labels &amp; Pips</h4>
</div>
<div class="card-content collapse show">
<div class="card-body">
<fieldset>
<div class="form-group text-center">
<div class="jui-vert-hide-label-pip">
<span class="ui-slider-primary">5</span>
<span class="ui-slider-success">2</span>
<span class="ui-slider-danger">8</span>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
<!-- Vertical Slider Sizing -->
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default Style</h4>
</div>
<div class="card-content collapse show">
<div class="card-body">
<fieldset>
<div class="form-group text-center">
<div class="jui-vert-slider-size-default">
<span class="ui-slider-xl ui-slider-primary">25</span>
<span class="ui-slider-lg ui-slider-success">60</span>
<span>40</span>
<span class="ui-slider-sm ui-slider-warning">40</span>
<span class="ui-slider-xs ui-slider-danger">40</span>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Pip Style</h4>
</div>
<div class="card-content collapse show">
<div class="card-body">
<fieldset>
<div class="form-group text-center">
<div class="jui-vert-slider-size-pips">
<span class="ui-slider-xl ui-slider-primary">5</span>
<span class="ui-slider-lg ui-slider-success">2</span>
<span>8</span>
<span class="ui-slider-sm ui-slider-warning">6</span>
<span class="ui-slider-xs ui-slider-danger">3</span>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // vertical sliders section end -->
<!-- progress bars section start -->
<section id="progress-bars">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4>Progress Bars</h4>
<hr/>
</div>
</div>
<div class="row">
<!-- Simple Examples -->
<div class="col-xl-6 col-lg-12">
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
<fieldset>
<div class="form-group">
<label>Default</label>
<p class="font-small-3">Default determinate progress bar.</p>
<div class="pgbar-basic"></div>
</div>
</fieldset>
<fieldset>
<div class="form-group">
<label>Striped Progressbar</label>
<p class="font-small-3">This example shows progress bar with progress stripes. To
                          add stripes, use <code>.ui-progressbar-striped</code> class
                          to the bar container.</p>
<div class="pgbar-striped ui-progressbar-striped"></div>
</div>
</fieldset>
<fieldset>
<div class="form-group">
<label>Animated Striped Progressbar</label>
<p class="font-small-3">In this example progress bar uses animated stripes. To add
                          stripes, use <code>.ui-progressbar-striped-animated</code>                          class to the bar container.</p>
<div class="pgbar-striped-animated ui-progressbar-striped-animated"></div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<!-- Advance Examples -->
<div class="col-xl-6 col-lg-12">
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
<fieldset>
<div class="form-group">
<label>Custom Label</label>
<p class="font-small-3">In this example the progress amount is visually represented
                          with animated percentage values and message when complete.
                          Progress : <code class="pgbar-custom-label">Complete!</code></p>
<div class="pgbar-custom-label-bar"></div>
</div>
</fieldset>
<fieldset>
<div class="form-group">
<label>Max</label>
<p class="font-small-3">In this example the maximum value is set to 1024 and value
                          is set to 840 so the width is calculated accordingly.</p>
<div class="pgbar-max"></div>
</div>
</fieldset>
<fieldset>
<div class="form-group">
<label>Disabled</label>
<p class="font-small-3">Disables the progressbar if set to true.</p>
<div class="pgbar-disabled"></div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // progress bars section end -->
<!-- spinner section start -->
<section id="spinner">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4>Spinner</h4>
<hr/>
</div>
</div>
<div class="row">
<!-- Simple Examples -->
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Simple Examples</h4>
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
<fieldset>
<label>Default Functionality</label>
<div class="form-group">
<input class="form-control jui-spinner-default" type="text" value="5"/>
<small>Default spinner.</small>
</div>
</fieldset>
<fieldset>
<label>Decimal</label>
<div class="form-group">
<div class="row">
<div class="col-md-6">
<input class="form-control jui-spinner-decimal" type="text" value="5.06"/>
</div>
<div class="col-md-6">
<select class="form-control change-decimal-culture">
<option selected="selected" value="en-EN">English</option>
<option value="de-DE">German</option>
<option value="ja-JP">Japanese</option>
</select>
</div>
</div>
<small>Example of a decimal spinner. Step is set to 0.01.</small>
<small>The code handling the culture change reads the current spinner
                          value, then changes the culture, then sets the value again,
                          resulting in an updated formatting, based on the new culture.</small>
</div>
</fieldset>
<fieldset>
<label>Currency</label>
<div class="form-group">
<div class="row">
<div class="col-md-6">
<input class="form-control jui-spinner-currency" type="text" value="5"/>
</div>
<div class="col-md-6">
<select class="form-control change-currency">
<option value="en-US">US $</option>
<option value="de-DE">EUR €</option>
<option value="ja-JP">YEN ¥</option>
</select>
</div>
</div>
<small>Example of a donation form, with currency selection and amount
                          spinner.
                        </small>
</div>
</fieldset>
<fieldset>
<label>Min - Max Limits</label>
<div class="form-group">
<div class="row">
<div class="col-md-6">
<label>Min Limit Set To 5</label>
<input class="form-control jui-spinner-min" type="text" value="50"/>
</div>
<div class="col-md-6">
<label>Max Limit Set To 50</label>
<input class="form-control jui-spinner-max" type="text" value="5"/>
</div>
</div>
<small>The minimum allowed value. The element's min attribute is
                          used if it exists and the option is not explicitly set.
                          If null, there is no minimum enforced.</small>
<small>The maximum allowed value. The element's max attribute is
                          used if it exists and the option is not explicitly set.
                          If null, there is no maximum enforced.</small>
</div>
</fieldset>
<fieldset>
<label>Change Spinner Buttons</label>
<div class="form-group">
<input class="form-control jui-spinner-color-buttons" type="text" value="5"/>
<small>Change Button HTML using <code>_buttonHtml()</code> function.</small>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<!-- Advance Examples -->
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Advance Examples</h4>
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
<fieldset>
<label>Overflow</label>
<div class="form-group">
<input class="form-control jui-spinner-overflow" type="text" value="5"/>
<small>Overflowing spinner restricted to a range of -10 to 10. For
                          anything above 10, it'll overflow to -10, and the other
                          way round.</small>
</div>
</fieldset>
<fieldset>
<label>Time</label>
<div class="form-group">
<div class="row">
<div class="col-md-6">
<input class="form-control jui-spinner-time" type="text" value="5"/>
</div>
<div class="col-md-6">
<select class="form-control change-time-culture">
<option selected="selected" value="en-EN">English</option>
<option value="de-DE">German</option>
</select>
</div>
</div>
<small>A custom widget extending spinner. Use the Globalization
                          plugin to parse and output a timestamp, with custom step
                          and page options. Cursor up/down spins minutes, page up/down
                          spins hours.</small>
</div>
</fieldset>
<fieldset>
<label>Set Value</label>
<div class="form-group">
<div class="row">
<div class="col-md-8">
<input class="form-control jui-spinner-set-value" type="text" value="25"/>
</div>
<div class="col-md-4">
<button class="btn btn-primary spinner-set-value-btn" type="button">Set Value To 5</button>
</div>
</div>
<small>Dynamically set the value of the spinner to 5.</small>
</div>
</fieldset>
<fieldset>
<label>Steps</label>
<div class="form-group">
<input class="form-control jui-spinner-steps" type="text" value="10"/>
<small>The size of the step to take when spinning via buttons or
                          via the <code>stepUp()/stepDown()</code> methods. The element's
                          step attribute is used if it exists and the option is not
                          explicitly set.</small>
</div>
</fieldset>
<fieldset>
<label>Disabled</label>
<div class="form-group">
<input class="form-control jui-spinner-disabled" type="text" value="5"/>
<small>Add option <code>disabled: true</code> to disable the spinner.</small>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // spinner section end -->
</div>
