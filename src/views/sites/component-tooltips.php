<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ComponentTooltipsAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Tooltip</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="component-tooltips.html#">Components</a>
</li>
<li class="breadcrumb-item active">Tooltip
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="component-tooltips.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="component-tooltips.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="component-tooltips.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="component-tooltips.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!--       Static demo	    -->
<section id="static-demo">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Static demo</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
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
<p>Four options are available: top, right, bottom, and left aligned.</p>
<div class="row">
<div class="col-xl-3 col-lg-6 col-6 mb-1 text-center">
<h5 class="text-center">Basic Top Tooltip</h5>
<div class="tooltip top show" role="tooltip" style="display: block; position: relative; margin: 0; padding: 0; z-index: 100;">
<div class="tooltip-arrow" style="bottom: -5px; left: 50%; margin-left: -5px; border-width: 5px 5px 0; border-top-color: #000;"></div>
<div class="tooltip-inner" style="max-width: none;">
<i style="bottom: -5px; left: 50%;margin-left: -5px;border-width: 5px 5px 0;border-top-color: #000;position: absolute;border-style: solid;"></i>                            Tooltip on Top</div>
</div>
<p class="text-center mt-1">Add <code>.top</code> class for top tooltip along with <code>.tooltip</code>                          class.</p>
</div>
<div class="col-xl-3 col-lg-6 col-6 mb-1 text-center">
<h5 class="text-center">Basic Right Tooltip</h5>
<div class="tooltip right show" role="tooltip" style="display: block; position: relative; margin: 0; padding: 0; z-index: 100;">
<div class="tooltip-arrow" style="left: -5px;top: 50%;border-width: 5px 5px 5px 0;border-right-color: #000;"></div>
<div class="tooltip-inner" style="max-width: none;">
<i style="left: -5px; top: 50%;margin-top: -5px;border-width: 5px 5px 5px 0;border-right-color: #000;position: absolute;border-style: solid;"></i>                            Tooltip on Right</div>
</div>
<p class="text-center mt-1">Add <code>.right</code> class for right tooltip along with
                          <code>.tooltip</code> class.</p>
</div>
<div class="col-xl-3 col-lg-6 col-6 mb-1 text-center">
<h5 class="text-center">Basic Bottom Tooltip</h5>
<div class="tooltip bottom show" role="tooltip" style="display: block; position: relative; margin: 0; padding: 0; z-index: 100;">
<div class="tooltip-arrow" style="top: -5px;left: 50%;margin-left: -5px;border-width: 0 5px 5px;border-bottom-color: #000;"></div>
<div class="tooltip-inner" style="max-width: none;">
<i style="top: -5px; left: 50%;margin-left: -5px;border-width:0 5px 5px;border-bottom-color: #000;position: absolute;border-style: solid;"></i>                            Tooltip on Bottom</div>
</div>
<p class="text-center mt-1">Add <code>.bottom</code> class for bottom tooltip along with
                          <code>.tooltip</code> class.</p>
</div>
<div class="col-xl-3 col-lg-6 col-6 mb-1 text-center">
<h5 class="text-center">Basic Left Tooltip</h5>
<div class="tooltip left show" role="tooltip" style="display: block; position: relative; margin: 0; padding: 0; z-index: 100;">
<div class="tooltip-arrow" style="right: -5px;top: 50%;border-width: 5px 0 5px 5px;border-left-color: #000;"></div>
<div class="tooltip-inner" style="max-width: none;">
<i style="right: -5px; top: 50%;margin-top: -5px;border-width: 5px 0 5px 5px;border-left-color: #000;position: absolute;border-style: solid;"></i>                            Tooltip on Left</div>
</div>
<p class="text-center mt-1">Add <code>.left</code> class for left tooltip along with
                          <code>.tooltip</code> class.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Section Ends -->
<!--       Tooltip Positions	  -->
<section id="tooltip-positions">
<div class="row ">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tooltip Positions</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
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
<p>Four options are available: top, right, bottom, and left aligned.</p>
<div class="row">
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
<h5 class="text-center">Basic Top Tooltip</h5>
<div class="text-center">
<button class="btn btn-secondary" data-placement="top" data-toggle="tooltip" title="Tooltip on top" type="button">
                            Tooltip on top
                          </button>
</div>
<p class="text-center mt-1">Add <code>data-toggle="tooltip"</code> &amp; <code>data-placement="top"</code>                          to add top tooltip.</p>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
<h5 class="text-center">Basic Right Tooltip</h5>
<div class="text-center">
<button class="btn btn-secondary" data-placement="right" data-toggle="tooltip" title="Tooltip on right" type="button">
                            Tooltip on right
                          </button>
</div>
<p class="text-center mt-1">Add <code>data-toggle="tooltip"</code> &amp; <code>data-placement="right"</code>                          to add right tooltip.</p>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
<h5 class="text-center">Basic Bottom Tooltip</h5>
<div class="text-center">
<button class="btn btn-secondary" data-placement="bottom" data-toggle="tooltip" title="Tooltip on bottom" type="button">
                            Tooltip on bottom
                          </button>
</div>
<p class="text-center mt-1">Add <code>data-toggle="tooltip"</code> &amp; <code>data-placement="bottom"</code>                          to add bottom tooltip.</p>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
<h5 class="text-center">Basic Left Tooltip</h5>
<div class="text-center">
<button class="btn btn-secondary" data-placement="left" data-toggle="tooltip" title="Tooltip on left" type="button">
                            Tooltip on left
                          </button>
</div>
<p class="text-center mt-1">Add <code>data-toggle="tooltip"</code> &amp; <code>data-placement="left"</code>                          to add left tooltip.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Section Ends -->
<!--       Tooltip Events	  -->
<section id="tooltip-events">
<div class="row ">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tooltip Events</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
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
<div class="row">
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
<h5 class="text-center">Show Event</h5>
<div class="text-center">
<button class="btn btn-success" id="show-tooltip" type="button">
                            Show Event Tooltip
                          </button>
</div>
<p class="text-center mt-1">This event fires immediately when the <code>show</code> instance
                          method is called.</p>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
<h5 class="text-center">Shown Event</h5>
<div class="text-center">
<button class="btn btn-success" id="shown-tooltip" type="button">
                            Shown Event Tooltip
                          </button>
</div>
<p class="text-center mt-1">This event is fired when the tooltip has been made visible
                          to the user (will wait for CSS transitions to complete).</p>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
<h5 class="text-center">Hide Event</h5>
<div class="text-center">
<button class="btn btn-success" id="hide-tooltip" type="button">
                            Hide Event Tooltip
                          </button>
</div>
<p class="text-center mt-1">This event is fired immediately when the <code>hide</code>                          instance method has been called.</p>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
<h5 class="text-center">Hidden Event</h5>
<div class="text-center">
<button class="btn btn-success" id="hidden-tooltip" type="button">
                            Hidden Event Tooltip
                          </button>
</div>
<p class="text-center mt-1">This event is fired when the tooltip has finished being hidden
                          from the user (will wait for CSS transitions to complete).</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Section Ends -->
<!--       Tooltip Methods	  -->
<section id="tooltip-methods">
<div class="row ">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tooltip Methods</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
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
<p>This is considered a “manual” triggering of the tooltip. Tooltips
                      with zero-length titles are never displayed.</p>
<div class="row">
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
<h5 class="text-center">Show</h5>
<div class="text-center">
<button class="btn btn-danger" data-original-title="Show Method Tooltip" data-popup="tooltip" data-trigger="manual" id="show-method" type="button">
                            Show Method <i class="la la-play-circle ml-1"></i>
</button>
</div>
<p class="text-center mt-1">Reveals an element’s tooltip. Returns to the caller before
                          the tooltip has actually been shown.(i.e. before the <code>shown.bs.tooltip</code>                          event occurs)</p>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
<h5 class="text-center">Hide</h5>
<div class="text-center">
<button class="btn btn-danger" data-original-title="Hide Method Tooltip" data-popup="tooltip" data-trigger="manual" id="hide-method" type="button">
                            Hide Method <i class="la la-play-circle ml-1"></i>
</button>
</div>
<p class="text-center mt-1">Hides an element’s tooltip. Returns to the caller before
                          the tooltip has actually been hidden (i.e. before the <code>hidden.bs.tooltip</code>                          event occurs).</p>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
<h5 class="text-center">Toggle</h5>
<div class="text-center">
<button class="btn btn-danger" data-original-title="Toggle Method Tooltip" data-popup="tooltip" data-trigger="manual" id="toggle-method" type="button">
                            Toggle Method <i class="la la-play-circle ml-1"></i>
</button>
</div>
<p class="text-center mt-1">Toggles an element’s tooltip. Returns to the caller before
                          the tooltip has actually been shown or hidden (i.e. before
                          the <code>shown.bs.tooltip</code> or <code>hidden.bs.tooltip</code>                          event occurs).</p>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
<h5 class="text-center">Dispose</h5>
<div class="text-center">
<div class="btn-group">
<button class="btn btn-danger" data-original-title="Dispose Method Tooltip" data-toggle="tooltip" data-trigger="click" id="dispose-method" type="button">
                              Dispose
                            </button>
<button class="btn btn-danger" id="dispose" type="button">
<i class="la la-play-circle"></i>
</button>
</div>
</div>
<p class="text-center mt-1">Hides and destroys an element’s tooltip. Tooltips that use
                          delegation cannot be individually destroyed on descendant
                          trigger elements.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Section Ends -->
<!--       Tooltip Triggers	  -->
<section id="tooltip-triggers">
<div class="row ">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tooltip Triggers</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
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
<p>Tooltip is triggered using - click | hover | focus | manual options.
                      You may pass multiple triggers; separate them with a space.
                      "manual" cannot be combined with any other trigger.</p>
<div class="row">
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
<h5 class="text-center">Click</h5>
<div class="text-center">
<button class="btn btn-info" data-original-title="Click Triggered" data-toggle="tooltip" data-trigger="click" type="button">
                            On Click Trigger
                          </button>
</div>
<p class="text-center mt-1">Use <code>data-trigger="click"</code> for click trigger.</p>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
<h5 class="text-center">Focus</h5>
<div class="text-center">
<button class="btn btn-info" data-original-title="Focus Triggered" data-toggle="tooltip" data-trigger="focus" type="button">
                            On Focus Trigger
                          </button>
</div>
<p class="text-center mt-1">Use <code>data-trigger="focus"</code> for focus trigger.</p>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
<h5 class="text-center">Hover</h5>
<div class="text-center">
<button class="btn btn-info" data-original-title="Hover Triggered" data-toggle="tooltip" type="button">
                            On Hover Trigger
                          </button>
</div>
<p class="text-center mt-1">Use <code>data-trigger="hover"</code> for hover trigger.
                          This is a default trigger.</p>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
<h5 class="text-center">Manual</h5>
<div class="text-center">
<button class="btn btn-info manual" data-original-title="Manual Triggered" data-toggle="tooltip" data-trigger="manual" type="button">
                            On Manual Trigger
                          </button>
</div>
<p class="text-center mt-1">Use <code>data-trigger="manual"</code> for manual trigger.
                          You can do show/hide using js</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Section Ends -->
<!--       Tooltip Options	  -->
<section id="tooltip-options">
<div class="row ">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tooltip Options</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
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
<div class="row">
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
<h5 class="text-center">Disabled Animaition</h5>
<div class="text-center">
<button class="btn btn-warning" data-animation="false" data-original-title="Without Fade Animation" data-toggle="tooltip" type="button">
                            No animation
                          </button>
</div>
<p class="text-center mt-1">Use <code>data-animation="false"</code> to remove fade animation.
                          Default is true.</p>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
<h5 class="text-center">Delay Show/Hide</h5>
<div class="text-center">
<button class="btn btn-warning delay" data-delay="500" data-original-title="Click Triggered" data-toggle="tooltip" type="button">
                            Delay Tooltip
                          </button>
</div>
<p class="text-center mt-1">Delay showing and hiding the tooltip (<code>ms</code>) -
                          does not apply to manual trigger type.</p>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
<h5 class="text-center">Supports HTML</h5>
<div class="text-center">
<button class="btn btn-warning" data-html="true" data-original-title="&lt;b&gt;This&lt;/b&gt; is &lt;i&gt;HTML&lt;/i&gt; &lt;u&gt;tooltip&lt;/u&gt;" data-toggle="tooltip" type="button">
                            HTML Tooltip
                          </button>
</div>
<p class="text-center mt-1">Use <code>data-html="true"</code> for HTML supported trigger.</p>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
<h5 class="text-center">Tooltip Template</h5>
<div class="text-center">
<button class="btn btn-warning template" data-original-title="Check console for default template structure" data-toggle="tooltip" data-trigger="click" type="button">
                            Tooltip Template
                          </button>
</div>
<p class="text-center mt-1">Base HTML to use when creating the tooltip. The tooltip's
                          title will be injected into the <code>.tooltip-inner</code>.
                          <code>.tooltip-arrow</code> will become the tooltip's arrow.The
                          outermost wrapper element should have the <code>.tooltip</code>                          class.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Section Ends -->
<!--       Tooltip Colot Options	  -->
<section id="tooltip-color-options">
<div class="row ">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tooltip Color Options</h4>
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
<div class="card-collapse">
<div class="card-body">
<div class="row">
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
<h5 class="text-center">Custom Tooltip Backround Color</h5>
<div class="text-center">
<button class="btn btn-primary" data-bg-color="pink" data-original-title="Custom Background Color" data-popup="tooltip-custom" data-toggle="tooltip" type="button">
                            Custom Bg
                          </button>
</div>
<p class="text-center mt-1">Use <code>data-popup="tooltip-custom"</code> for Custom tooltip.
                          You can change tooltip color using <code>data-bg-color</code>                          attribute.</p>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
<h5 class="text-center">Custom Tooltip Text Color</h5>
<div class="text-center">
<button class="btn btn-primary" data-original-title="Custom Background Color" data-popup="tooltip-custom" data-text-color="info" data-toggle="tooltip" type="button">
                            Custom Text
                          </button>
</div>
<p class="text-center mt-1">Use <code>data-popup="tooltip-custom"</code> for Custom tooltip.
                          You can change tooltip text color using <code>data-text-color</code>                          attribute.</p>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
<h5 class="text-center">Custom Tooltip Background &amp; Text Color</h5>
<div class="text-center">
<button class="btn btn-primary" data-bg-color="red" data-html="true" data-original-title="Custom Bg &amp; Text Color&lt;/span&gt;" data-placement="top" data-popup="tooltip-custom" data-text-color="black" data-toggle="tooltip" type="button">
                            Custom bg &amp; Text
                          </button>
</div>
<p class="text-center mt-1">Use <code>data-popup="tooltip-custom"</code> for Custom bordered
                          colored tooltip. You can change tooltip background and
                          text color using <code>data-bg-color</code> and <code>data-text-color</code>                          attributes.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Section Ends -->
</div>
