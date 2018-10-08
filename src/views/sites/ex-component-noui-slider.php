<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ExComponentNouiSliderAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">noUiSlider</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="ex-component-noui-slider.html#">Extra Components</a>
</li>
<li class="breadcrumb-item active">noUiSlider
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="ex-component-noui-slider.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="ex-component-noui-slider.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="ex-component-noui-slider.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="ex-component-noui-slider.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Horizontal Sliders -->
<!-- Slider values section start -->
<section id="slider-values">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Slider Values</h4>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-sm-6 col-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<h4>Handles</h4>
<div class="form-group">
<div class="my-1" id="slider-handles"></div>
<p>The number of handles can be set using the <code>start</code>                        option.</p>
</div>
<h4>Stepping in non-linear sliders</h4>
<div class="form-group">
<div class="my-1" id="slider-non-linear-step"></div>
<p>For every subrange in a non-linear slider, stepping can be
                        set.
                      </p>
</div>
<h4>Stepping and snapping to values</h4>
<div class="form-group">
<div class="my-1" id="slider-step"></div>
<p>The amount the slider changes on movement can be set using
                        the <code>step</code> option.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-sm-6 col-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<h4>Non-linear sliders</h4>
<div class="form-group">
<div class="my-1" id="slider-non-linear"></div>
<p>noUiSlider offers some powerful mechanisms that allow a slider
                        to behave in a non-linear fashion.</p>
</div>
<h4>Range</h4>
<div class="form-group">
<div class="my-1" id="slider-range"></div>
<p>All values on the slider are part of a range. The range has
                        a minimum and maximum value.</p>
</div>
<h4>Snapping between steps</h4>
<div class="form-group">
<div class="my-1" id="slider-snap"></div>
<p>When a non-linear slider has been configured, the <code>snap</code>                        option can be set to <code>true</code> to force the slider
                        to jump between the specified values.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Slider values section end -->
<!-- Slider behavior section start -->
<section id="slider-behavior">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Slider behavior</h4>
<p>noUiSlider offers several ways to handle user interaction. The range
                can be set to drag, and handles can move to taps. All these effects
                are optional, and can be enable by adding their keyword to the behavior
                option. This option accepts a <code>"-"</code> separated list of
                <code>"drag"</code>, <code>"tap"</code>, <code>"fixed"</code>, <code>"snap"</code>                or <code>"none"</code>.</p>
</div>
</div>
<div class="row">
<!-- Simple Examples -->
<div class="col-lg-6 col-sm-6 col-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<h4>Tap</h4>
<div class="form-group">
<div class="my-1" id="tap"></div>
<p>A handle snaps to a clicked location. A smooth transition is
                        used. This option is <code>default</code>.</p>
</div>
<h4>Drag</h4>
<div class="form-group">
<div class="my-1" id="drag"></div>
<p>Makes the range draggable. Requires two handles. The <code>connect</code>                        option must be set to <code>true</code>.</p>
</div>
<h4>Fixed dragging</h4>
<div class="form-group">
<div class="my-1" id="drag-fixed"></div>
<p>Keeps the distance between handles fixed when the <code>'drag'</code>                        flag is set.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-sm-6 col-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<h4>Snap</h4>
<div class="form-group">
<div class="my-1" id="snap"></div>
<p>A handle snaps to a clicked location. It can immediately be
                        moved, without a <code>mouseup</code> + <code>mousedown</code>.</p>
</div>
<h4>Hover</h4>
<div class="form-group">
<div class="my-1" id="hover"></div>
<p>With this option set, the slider fires <code>hover</code> events
                        when a mouse or pen user hovers over the slider.</p>
</div>
<h4>Combined options</h4>
<div class="form-group">
<div class="my-1" id="combined"></div>
<p>Most <code>'behavior'</code> flags can be combined.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Slider values section end -->
<!-- Slider Scales / Pips section start -->
<section id="slider-scales-pips">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Slider Scales / Pips</h4>
<p>This feature allows you to generate points along the slider. Five options
                can be set: <code>mode</code> to determine where to place pips, <code>values</code>                as additional options for <code>mode</code>, <code>stepped</code>                to round pip values to the slider stepping, <code>density</code>                to pre-scale the number of pips, and <code>filter</code> to manually
                modify pip size.</p>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-sm-6 col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Range</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>The <code>range</code> mode uses the slider range to determine
                      where the pips should be. A pip is generated for every percentage
                      specified.
                    </p>
<h4>Left to right</h4>
<div class="form-group">
<div class="mt-1 mb-3" id="pips-range"></div>
</div>
<h4>Right to left</h4>
<div class="form-group">
<div class="mt-1 mb-3" id="pips-range-rtl"></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-sm-6 col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Positions</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>In <code>positions</code> mode, pips are generated at percentage-based
                      positions on the slider. Optionally, the <code>stepped</code>                      option can be set to <code>true</code> to match the pips to
                      the slider steps.</p>
<h4>Positions</h4>
<div class="form-group">
<div class="mt-1 mb-3" id="pips-positions"></div>
</div>
<h4>Stepped Positions</h4>
<div class="form-group">
<div class="mt-1 mb-3" id="pips-positions-stepped"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-sm-6 col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Count</h4>
</div>
<div class="card-content">
<div class="card-body">
<h4>Count</h4>
<div class="form-group">
<div class="mt-1 mb-3" id="pips-count"></div>
</div>
<h4>Stepped Count</h4>
<div class="form-group">
<div class="mt-1 mb-3" id="pips-count-stepped"></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-sm-6 col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Values</h4>
</div>
<div class="card-content">
<div class="card-body">
<h4>Values</h4>
<div class="form-group">
<div class="mt-1 mb-3" id="pips-values"></div>
</div>
<h4>Stepped Values</h4>
<div class="form-group">
<div class="mt-1 mb-3" id="pips-values-stepped"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Steps</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Like <code>range</code>, the <code>steps</code> mode uses the
                      slider range. In <code>steps</code> mode, a pip is generated
                      for every step. The <code>filter</code> option can be used
                      to filter the generated pips. The <code>filter</code> function
                      must return <code>0</code> (no value), <code>1</code> (large
                      value) or <code>2</code> (small value).</p>
<h4>Filtered Steps</h4>
<div class="form-group">
<div class="my-3" id="pips-steps-filter"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Slider Scales / Pips section end -->
<!-- Slider Colors - Handles section start -->
<section id="slider-colors-handles">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Slider Colors - Handles</h4>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<fieldset>
<label>Default / Primary Color Slider</label>
<div class="form-group">
<div class="my-1" id="default-color-slider"></div>
</div>
</fieldset>
<fieldset>
<label>Success Color Slider</label>
<div class="form-group">
<div class="circle-filled slider-success my-1" id="success-color-slider"></div>
</div>
</fieldset>
<fieldset>
<label>Info Color Slider</label>
<div class="form-group">
<div class="square slider-info my-1" id="info-color-slider"></div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<fieldset>
<label>Warning Color Slider</label>
<div class="form-group">
<div class="slider-warning my-1" id="warning-color-slider"></div>
</div>
</fieldset>
<fieldset>
<label>Danger Color Slider</label>
<div class="form-group">
<div class="circle-filled slider-danger my-1" id="danger-color-slider"></div>
</div>
</fieldset>
<fieldset>
<label>Custom Color Slider</label>
<div class="form-group">
<div class="square slider-purple my-1" id="custom-color-slider"></div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Slider Colors - Handles section end -->
<!-- Slider sizing section start -->
<section id="slider-sizing">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Slider Sizing</h4>
</div>
</div>
<div class="row">
<!-- Default Handle Sizing -->
<div class="col-lg-4 col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default Handle</h4>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<label>Extra Large Size</label>
<div class="form-group">
<div class="slider-xl my-1" id="extra-large-slider"></div>
</div>
</fieldset>
<fieldset>
<label>Large Size</label>
<div class="form-group">
<div class="slider-lg slider-success my-1" id="large-slider"></div>
</div>
</fieldset>
<fieldset>
<label>Default</label>
<div class="form-group">
<div class="slider-info my-1" id="default-slider"></div>
</div>
</fieldset>
<fieldset>
<label>Small Size</label>
<div class="form-group">
<div class="slider-sm slider-warning my-1" id="small-slider"></div>
</div>
</fieldset>
<fieldset>
<label>Extra Small</label>
<div class="form-group">
<div class="slider-xs slider-danger my-1" id="extra-small-slider"></div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<!-- Circle filled handle sizing -->
<div class="col-lg-4 col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Circle Filled Handle</h4>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<label>Extra Large Size</label>
<div class="form-group">
<div class="circle-filled slider-xl my-1" id="circle-extra-large-slider"></div>
</div>
</fieldset>
<fieldset>
<label>Large Size</label>
<div class="form-group">
<div class="circle-filled slider-lg slider-success my-1" id="circle-large-slider"></div>
</div>
</fieldset>
<fieldset>
<label>Default</label>
<div class="form-group">
<div class="circle-filled slider-info my-1" id="circle-default-slider"></div>
</div>
</fieldset>
<fieldset>
<label>Small Size</label>
<div class="form-group">
<div class="circle-filled slider-sm slider-warning my-1" id="circle-small-slider"></div>
</div>
</fieldset>
<fieldset>
<label>Extra Small</label>
<div class="form-group">
<div class="circle-filled slider-xs slider-danger my-1" id="circle-extra-small-slider"></div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<!-- Square handle sizing -->
<div class="col-lg-4 col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Square Handle</h4>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<label>Extra Large Size</label>
<div class="form-group">
<div class="square slider-xl my-1" id="square-extra-large-slider"></div>
</div>
</fieldset>
<fieldset>
<label>Large Size</label>
<div class="form-group">
<div class="square slider-lg slider-success my-1" id="square-large-slider"></div>
</div>
</fieldset>
<fieldset>
<label>Default</label>
<div class="form-group">
<div class="square slider-info my-1" id="square-default-slider"></div>
</div>
</fieldset>
<fieldset>
<label>Small Size</label>
<div class="form-group">
<div class="square slider-sm slider-warning my-1" id="square-small-slider"></div>
</div>
</fieldset>
<fieldset>
<label>Extra Small</label>
<div class="form-group">
<div class="square slider-xs slider-danger my-1" id="square-extra-small-slider"></div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Slider sizing section end -->
<!-- Vertical Sliders section start -->
<section id="vsliders">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Vertical Sliders</h4>
<p>The orientation setting can be used to set the slider to <code>"vertical"</code></p>
<p>
<strong>Set dimensions!</strong> Vertical sliders don't assume a default
                <code>height</code>, so you'll need to set one. You can use any unit
                you want, including <code>%</code> or <code>px</code>.</p>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default Vertical Slider</h4>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="form-group text-center">
<div id="slider-vertical-1"></div>
<div class="ml-2 slider-info" id="slider-vertical-2"></div>
<div class="ml-2 slider-success" id="slider-vertical-3"></div>
<div class="ml-2 slider-warning" id="slider-vertical-4"></div>
<div class="ml-2 slider-danger" id="slider-vertical-5"></div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Connect to lower</h4>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="form-group text-center">
<div id="connect-lower-1"></div>
<div class="ml-2 slider-info" id="connect-lower-2"></div>
<div class="ml-2 slider-success" id="connect-lower-3"></div>
<div class="ml-2 slider-warning" id="connect-lower-4"></div>
<div class="ml-2 slider-danger" id="connect-lower-5"></div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Connect to upper</h4>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="form-group text-center">
<div id="connect-upper-1"></div>
<div class="ml-2 slider-info" id="connect-upper-2"></div>
<div class="ml-2 slider-success" id="connect-upper-3"></div>
<div class="ml-2 slider-warning" id="connect-upper-4"></div>
<div class="ml-2 slider-danger" id="connect-upper-5"></div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tooltips</h4>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="form-group text-center">
<div class="mr-2" id="slider-tooltips-1"></div>
<div class="ml-3 mr-2 slider-info" id="slider-tooltips-2"></div>
<div class="ml-3 slider-warning" id="slider-tooltips-3"></div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Direction Top To Bottom</h4>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="form-group text-center">
<div class="mr-2" id="slider-direction-top-bottom-1"></div>
<div class="ml-3 mr-2 slider-warning" id="slider-direction-top-bottom-2"></div>
<div class="ml-3 slider-danger" id="slider-direction-top-bottom-3"></div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Direction Bottom To Top</h4>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="form-group text-center">
<div class="mr-2" id="slider-direction-bottom-top-1"></div>
<div class="ml-3 mr-2 slider-info" id="slider-direction-bottom-top-2"></div>
<div class="ml-3 slider-success" id="slider-direction-bottom-top-3"></div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Margin</h4>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="form-group text-center">
<div id="vertical-margin-1"></div>
<div class="ml-2 slider-info" id="vertical-margin-2"></div>
<div class="ml-2 slider-success" id="vertical-margin-3"></div>
<div class="ml-2 slider-warning" id="vertical-margin-4"></div>
<div class="ml-2 slider-danger" id="vertical-margin-5"></div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Limit</h4>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="form-group text-center">
<div id="vertical-limit-1"></div>
<div class="ml-2 slider-info" id="vertical-limit-2"></div>
<div class="ml-2 slider-success" id="vertical-limit-3"></div>
<div class="ml-2 slider-warning" id="vertical-limit-4"></div>
<div class="ml-2 slider-danger" id="vertical-limit-5"></div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Steps</h4>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="form-group text-center">
<div id="vertical-steps-1"></div>
<div class="ml-2 slider-info" id="vertical-steps-2"></div>
<div class="ml-2 slider-success" id="vertical-steps-3"></div>
<div class="ml-2 slider-warning" id="vertical-steps-4"></div>
<div class="ml-2 slider-danger" id="vertical-steps-5"></div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Vertical Sliders section end -->
<!-- Vertical Slider Colors - Handles section start -->
<section id="vslider-colors-handles">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Vertical Slider Colors - Handles</h4>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default Handle</h4>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="form-group text-center">
<div id="vert-extra-large-slider"></div>
<div class="ml-2 slider-info" id="vert-large-slider"></div>
<div class="ml-2 slider-success" id="vert-default-slider"></div>
<div class="ml-2 slider-warning" id="vert-small-slider"></div>
<div class="ml-2 slider-danger" id="vert-extra-small-slider"></div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Circle Filled Handle</h4>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="form-group text-center">
<div class="circle-filled" id="vert-circle-extra-large-slider"></div>
<div class="circle-filled ml-2 slider-info" id="vert-circle-large-slider"></div>
<div class="circle-filled ml-2 slider-success" id="vert-circle-default-slider"></div>
<div class="circle-filled ml-2 slider-warning" id="vert-circle-small-slider"></div>
<div class="circle-filled ml-2 slider-danger" id="vert-circle-extra-small-slider"></div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Square Handle</h4>
</div>
<div class="card-content">
<div class="card-body">
<fieldset>
<div class="form-group text-center">
<div class="square" id="vert-square-extra-large-slider"></div>
<div class="square ml-2 slider-info" id="vert-square-large-slider"></div>
<div class="square ml-2 slider-success" id="vert-square-default-slider"></div>
<div class="square ml-2 slider-warning" id="vert-square-small-slider"></div>
<div class="square ml-2 slider-danger" id="vert-square-extra-small-slider"></div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Vertical Slider Colors - Handles section end -->
</div>
