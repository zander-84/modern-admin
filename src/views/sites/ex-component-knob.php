<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ExComponentKnobAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Knob</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="ex-component-knob.html#">Extra Components</a>
</li>
<li class="breadcrumb-item active">Knob
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="ex-component-knob.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="ex-component-knob.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="ex-component-knob.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="ex-component-knob.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Knob example section start -->
<section id="knob-examples">
<div class="row">
<div class="col-xl-4 col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<input class="knob basic-dial" type="text" value="75"/>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Disable Display Input</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<input class="knob hide-value" data-displayinput="false" data-fgcolor="#666EE8" type="text" value="35"/>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Cursor Mode</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<input class="knob cursor-mode" data-cursor="true" data-fgcolor="#FF9149" data-thickness=".3" data-width="150" type="text" value="29"/>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Display Previous Value</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<input class="knob previous-val" data-displayprevious="true" data-fgcolor="#2196F3" data-min="-100" type="text" value="44"/>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Angle Offset</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<input class="knob angle-offset" data-angleoffset="90" data-fgcolor="#FF9149" data-linecap="round" type="text" value="35"/>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Angle Offset And Arc</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<input class="knob angle-offset-arc" data-anglearc="250" data-angleoffset="-125" data-fgcolor="#FF4961" data-rotation="anticlockwise" type="text" value="44"/>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">4 Digit, Step 0.1</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<input class="knob steps" data-displayprevious="true" data-max="10000" data-min="-10000" data-step=".1" type="text" value="0"/>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Overloaded Draw Method</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<input class="knob overload-draw" data-displayprevious="true" data-fgcolor="#666EE8" data-skin="tron" data-thickness=".2" type="text" value="44"/>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Overload Draw Thickness</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<input class="knob overload-draw-thick" data-angleoffset="180" data-fgcolor="#2196F3" data-skin="tron" data-thickness=".1" type="text" value="35"/>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Superpose Clock</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="mx-auto position-relative width-250 height-250">
<div style="position:absolute;left:10px;top:10px">
<input class="knob hour" data-bgcolor="#eeeeee" data-displayinput="false" data-fgcolor="#FF4961" data-height="200" data-max="24" data-min="0" data-thickness=".3" data-width="200"/>
</div>
<div style="position:absolute;left:50px;top:50px">
<input class="knob minute" data-bgcolor="#eeeeee" data-displayinput="false" data-fgcolor="#28D094" data-height="120" data-max="60" data-min="0" data-thickness=".45" data-width="120"/>
</div>
<div style="position:absolute;left:85px;top:85px">
<input class="knob second" data-bgcolor="#eeeeee" data-displayinput="false" data-fgcolor="#FF9149" data-height="50" data-max="60" data-min="0" data-thickness=".3" data-width="50"/>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Read Only</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<input class="knob read-only" data-fgcolor="#FF9149" data-readonly="true" data-thickness=".4" type="text" value="44"/>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Infinite</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<input class="infinite" data-bgcolor="#EEEEEE" data-cursor="true" data-displayinput="false" data-fgcolor="#28D094" data-thickness=".5" type="text" value="44"/>
<div class="infinite-val mx-auto width-100 mb-2">
<span class="idir float-right font-medium-3"></span>
<span class="ival font-medium-3"></span>
</div>
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
<h4 class="card-title">Responsive</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="row justify-content-md-center">
<div class="col-sm-12 col-md-6 text-center height-400">
<input class="knob responsive" data-fgcolor="#2196F3" data-width="80%" value="35"/>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Knob example section end -->
<!-- Knob behaviors, UI & hooks section start -->
<section id="knob-options">
<div class="row">
<div class="col-md-4 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Behaviors</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul>
<li>
<strong>min</strong> : min value (default=0)</li>
<li>
<strong>max</strong> : max value (default=100)</li>
<li>
<strong>step</strong> : step size (default=1)</li>
<li>
<strong>angleOffset</strong> : starting angle in degrees (default=0)</li>
<li>
<strong>angleArc</strong> : arc size in degrees (default=360)</li>
<li>
<strong>stopper</strong> : stop at min &amp; max on keydown/mousewheel
                        (default=true)
                      </li>
<li>
<strong>readOnly</strong> : disable input and events (default=false)</li>
<li>
<strong>rotation</strong> : direction of progression (default=clockwise)</li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-md-4 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">UI</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul>
<li>
<strong>cursor</strong> : display mode “cursor”, cursor size could
                        be changed passing a numeric value to the option, default
                        width is used when passing boolean value “true” (default=gauge)</li>
<li>
<strong>thickness</strong> : gauge thickness</li>
<li>
<strong>lineCap</strong> : gauge stroke endings (default=butt, round=rounded
                        line endings)</li>
<li>
<strong>width</strong> : dial width</li>
<li>
<strong>height</strong> : dial height</li>
<li>
<strong>displayInput</strong> : display input (default=true)</li>
<li>
<strong>displayPrevious</strong> : displays the previous value with
                        transparency (default=false)</li>
<li>
<strong>fgColor</strong> : foreground color</li>
<li>
<strong>inputColor</strong> : input value (number) color</li>
<li>
<strong>font</strong> : font family</li>
<li>
<strong>fontWeight</strong> : font weight</li>
<li>
<strong>bgColor</strong> : background color</li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-md-4 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Hooks</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul>
<li>
<p>
<strong>‘release’</strong> : executed on release</p>
<p>Parameters : + value : int, current value</p>
</li>
<li>
<p>
<strong>‘change’</strong> : executed at each change of the value</p>
<p>Parameters : + value : int, current value</p>
</li>
<li>
<p>
<strong>‘draw’</strong> : when drawing the canvas</p>
<p>Context : - this.g : canvas context 2D (see Canvas documentation)
                          - this.$ : jQuery wrapped element - this.o : options -
                          this.i : input - … console.log(this);</p>
</li>
<li>
<p>
<strong>‘cancel’</strong> : triggered on [esc] keydown</p>
</li>
<li>
<p>
<strong>‘format’</strong> : allows to format output (add unit %,
                          ms …)</p>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Knob behaviors, UI & hooks section end -->
</div>
</div>
</div>