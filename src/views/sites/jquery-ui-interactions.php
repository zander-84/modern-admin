<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\JqueryUiInteractionsAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">jQuery UI interactions</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="jquery-ui-interactions.html#">jQuery UI</a>
</li>
<li class="breadcrumb-item active">Interactions
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="jquery-ui-interactions.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="jquery-ui-interactions.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="jquery-ui-interactions.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="jquery-ui-interactions.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Draggable section start -->
<section id="draggable">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4>Draggable</h4>
<p>Enable draggable functionality on any DOM element. Move the draggable
                object by clicking on it with the mouse and dragging it anywhere
                within the viewport.</p>
<hr/>
</div>
</div>
<div class="row">
<!-- Draggable Default -->
<div class="col-xl-6 col-lg-12">
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
<div class="card-content collapse show draggable-container">
<div class="card-body">
<p class="card-text">
                      Enable draggable functionality on any DOM element. Move the draggable object by clicking
                      on it with the mouse and dragging it anywhere within the viewport.
                    </p>
<div class="jqueryui-ele-container text-center">
<div class="heart-shape app-shape draggable-ele">
<span>Drag</span>
</div>
<div class="heart-shape app-shape draggable-ele">
<span>Drag</span>
</div>
<div class="heart-shape app-shape draggable-ele">
<span>Drag</span>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Constrain Movement -->
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Constrain Movement</h4>
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
<div class="card-content collapse show constrain-movement-container">
<div class="card-body">
<p class="card-text">
                      Constrain the movement of each draggable by defining the boundaries of the draggable
                      area. Set the <code>axis</code> option
                      to limit the draggable's path to the x- or y-axis, or use the
                      <code>containment</code> option to specify a parent DOM element
                      or a jQuery selector, like 'document.'
                    </p>
<div class="jqueryui-ele-container text-center">
<div class="heart-shape app-shape draggable-vert">
<span>Vert</span>
</div>
<div class="heart-shape app-shape draggable-horz">
<span>Horz</span>
</div>
<div class="heart-shape app-shape draggable-both">
<span>Both</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<!-- Cursor Style -->
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Cursor Style</h4>
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
<div class="card-content collapse show draggable-cursor-style">
<div class="card-body">
<p class="card-text">
                      Position the cursor while dragging the object. By default the cursor appears in the
                      center of the dragged object; use the <code>cursorAt</code>                      option to specify another location relative to the draggable
                      (specify a pixel value from the top, right, bottom, and/or
                      left). Customize the cursor's appearance by supplying the <code>cursor</code>                      option with a valid CSS cursor value: default, move, pointer,
                      crosshair, etc.
                    </p>
<div class="jqueryui-ele-container text-center">
<div class="heart-shape app-shape draggable-move">
<span>Move</span>
</div>
<div class="heart-shape app-shape draggable-crosshair">
<span>Crosshair</span>
</div>
<div class="heart-shape app-shape draggable-help">
<span>Help</span>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Events -->
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Events</h4>
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
<div class="card-content collapse show events-container">
<div class="card-body">
<p class="card-text">
                      Layer functionality onto the draggable using the <code>start</code>,
                      <code>drag</code>, and <code>stop</code> events. Start is fired
                      at the start of the drag; drag during the drag; and stop when
                      dragging stops.
                    </p>
<div class="jqueryui-ele-container text-center">
<div class="heart-shape app-shape draggable-start">
<span>Start
                          <span class="count"></span>x</span>
</div>
<div class="heart-shape app-shape draggable-drag">
<span>Drag
                          <span class="count"></span>x</span>
</div>
<div class="heart-shape app-shape draggable-stop">
<span>Stop
                          <span class="count"></span>x</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<!-- Handles -->
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Handles</h4>
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
<div class="card-content collapse show draggable-handles-container">
<div class="card-body">
<p class="card-text">
                      Allow dragging only when the cursor is over a specific part of the draggable. Use
                      the <code>handle</code> option to specify
                      the jQuery selector of an element (or group of elements) used
                      to drag the object. Or prevent dragging when the cursor is
                      over a specific element (or group of elements) using <code>cancel</code>                      option.
                    </p>
<div class="jqueryui-ele-container text-center">
<div class="oval-shape app-shape draggable-text-ele">
<span class="draggable-text">Text</span>
</div>
<div class="oval-shape app-shape draggable-elem">
<span>Element</span>
</div>
<div class="oval-shape app-shape draggable-cancel">
<span>Cancel</span>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Revert Positions -->
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Revert Positions</h4>
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
<div class="card-content collapse show return-draggable">
<div class="card-body">
<p class="card-text">
                      Return the draggable (or it's helper) to its original location when dragging stops
                      with the boolean <code>revert</code>                      option.
                    </p>
<div class="jqueryui-ele-container text-center">
<div class="egg-shape app-shape draggable-revert-orgi">
<span>Original</span>
</div>
<div class="egg-shape app-shape draggable-revert-helper ml-3">
<span>Helper</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Draggable section end -->
<!-- Droppable section start -->
<section id="droppable">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4>Droppable</h4>
<p>Enable any DOM element to be droppable, a target for draggable elements.</p>
<hr/>
</div>
</div>
<div class="row">
<!-- Droppable Default -->
<div class="col-xl-6 col-lg-12">
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
<div class="card-content collapse show droppable-container">
<div class="card-body">
<p class="card-text">
                      Enable any DOM element to be droppable, a target for draggable elements.
                    </p>
<div class="jqueryui-ele-container text-center">
<div class="heart-shape app-shape draggable-drop-ele">
<span>Drag</span>
</div>
<div class="egg-shape app-shape drop-area droppable-ele ml-3">
<span>Drop Here</span>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Accept Drop -->
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Accept Drop</h4>
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
<div class="card-content collapse show accept-drop-container">
<div class="card-body">
<p class="card-text">
                      Specify using the <code>accept</code> option which element
                      (or group of elements) is accepted by the target droppable.
                    </p>
<div class="jqueryui-ele-container text-center">
<div class="heart-shape app-shape droppable-accept">
<span>Accept</span>
</div>
<div class="heart-shape app-shape droppable-reject">
<span>Reject</span>
</div>
<div class="egg-shape app-shape drop-area droppable-accept-ele ml-3">
<span>Drop Here</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<!-- Revert draggable position -->
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Revert draggable position</h4>
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
<div class="card-content collapse show revert-droppable-container">
<div class="card-body">
<p class="card-text">
                      Return the draggable (or it's helper) to its original location when dragging stops
                      with the boolean <code>revert</code>                      option set on the draggable.
                    </p>
<div class="jqueryui-ele-container text-center">
<div class="heart-shape app-shape valid-drop-revert">
<span>Revert</span>
</div>
<div class="heart-shape app-shape invalid-drop-revert">
<span>Drop</span>
</div>
<div class="egg-shape app-shape drop-area revert-droppable-ele ml-3">
<span>Drop Here</span>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Visual Feedback -->
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Visual Feedback</h4>
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
<div class="card-content collapse show visual-feedback-container">
<div class="card-body">
<p class="card-text">
                      Change the droppable's appearance on hover, or when the droppable is active (an acceptable
                      draggable is dropped on it). Set the values of the <code>ui-droppable-hover</code>                      or <code>ui-droppable-active</code> properties on the <code>classes</code>                      option to specify the respective classes.
                    </p>
<div class="jqueryui-ele-container text-center">
<div class="heart-shape app-shape draggable-feedback">
<span>Drag</span>
</div>
<div class="egg-shape app-shape drop-area droppable-hover-feedback ml-3">
<span>On Hover</span>
</div>
<div class="egg-shape app-shape drop-area droppable-active-feedback ml-3">
<span>On Activating Draggable</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Droppable section end -->
<!-- Resizable section start -->
<section id="resizable">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4>Resizable</h4>
<p>Enable any DOM element to be resizable. With the cursor grab the right
                or bottom border and drag to the desired width or height.</p>
<hr/>
</div>
</div>
<div class="row">
<!-- Default Functionality -->
<div class="col-12">
<div class="card">
<div class="card-header">
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
<div class="col-xl-6 col-lg-12 mb-2">
<h5>Resize</h5>
<p>
                          Enable any DOM element to be resizable. With the cursor grab the right or bottom
                          border and drag to the desired width or height.
                        </p>
<div class="jqueryui-ele-container text-center">
<div class="square-shape app-shape resize-ele">
<span>Resize</span>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<h5>Animate</h5>
<p>
                          Animate the resize action using the <code>animate</code>                          option (boolean). When this option is set to true, drag
                          the outline to the desired location; the element animates
                          to that size on drag stop.
                        </p>
<div class="jqueryui-ele-container text-center">
<div class="square-shape app-shape resize-animate">
<span>Resize</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<!-- Constrain Resize Area -->
<div class="col-12">
<div class="card">
<div class="card-header">
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
<div class="card-content collapse show resize-container">
<div class="card-body">
<div class="row">
<div class="col-xl-6 col-lg-12 mb-2">
<h5>Constrain Resize Area</h5>
<p>
                          Define the boundaries of the resizable area. Use the <code>containment</code>                          option to specify a parent DOM element or a jQuery selector,
                          like 'document.'
                        </p>
<div class="jqueryui-ele-container text-center">
<div class="square-shape app-shape resize-constrain">
<span>Resize</span>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<h5>Preserve Aspect Ratio</h5>
<p class="card-text">
                          Display only an outline of the element while resizing by setting the <code>helper</code>                          option to a CSS class.
                        </p>
<div class="jqueryui-ele-container text-center">
<div class="square-shape app-shape resize-aspect-ratio">
<span>Resize</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Resizable section end -->
<!-- Selectable section start -->
<section id="selectable">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4>Selectable</h4>
<p>Enable a DOM element (or group of elements) to be selectable. Draw
                a box with your cursor to select items. Hold down the Ctrl key to
                make multiple non-adjacent selections.</p>
<hr/>
</div>
</div>
<div class="row">
<!-- Default Functionality -->
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
<div class="col-xl-6 col-lg-12 mb-2">
<h5>Default</h5>
<p>
                          Enable a DOM element (or group of elements) to be selectable. Draw a box with your
                          cursor to select items. Hold down the <code>Ctrl</code>                          key to make multiple non-adjacent selections.
                        </p>
<div class="jqueryui-ele-container text-center">
<ol class="selectable list-group">
<li class="ui-widget-content list-group-item">Item 1</li>
<li class="ui-widget-content list-group-item">Item 2</li>
<li class="ui-widget-content list-group-item">Item 3</li>
<li class="ui-widget-content list-group-item">Item 4</li>
<li class="ui-widget-content list-group-item">Item 5</li>
<li class="ui-widget-content list-group-item">Item 6</li>
<li class="ui-widget-content list-group-item">Item 7</li>
</ol>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<h5>Serialize</h5>
<p class="card-text">
                          Write a function that fires on the <code>stop</code> event
                          to collect the index values of selected items. Present
                          values as feedback, or pass as a data string.
                        </p>
<div class="jqueryui-ele-container text-center">
<h4>You have selected :
                            <span class="select-result"></span>
</h4>
<ol class="selectable-serialize list-group">
<li class="ui-widget-content list-group-item">Item 1</li>
<li class="ui-widget-content list-group-item">Item 2</li>
<li class="ui-widget-content list-group-item">Item 3</li>
<li class="ui-widget-content list-group-item">Item 4</li>
<li class="ui-widget-content list-group-item">Item 5</li>
<li class="ui-widget-content list-group-item">Item 6</li>
<li class="ui-widget-content list-group-item">Item 7</li>
</ol>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Selectable section end -->
<!-- Sortable section start -->
<section id="sortable">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4>Sortable</h4>
<p>Enable a group of DOM elements to be sortable. Click on and drag an
                element to a new spot within the list, and the other items will adjust
                to fit. By default, sortable items share <code>draggable</code> properties.</p>
<hr/>
</div>
</div>
<div class="row">
<div class="col-12">
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
<div class="row">
<div class="col-xl-6 col-lg-12 mb-2">
<h5>Default</h5>
<p class="card-text">
                          Enable a group of DOM elements to be sortable. Click on and drag an element to a
                          new spot within the list, and the other items will adjust
                          to fit. By default, sortable items share <code>draggable</code>                          properties.
                        </p>
<div class="jqueryui-ele-container text-center">
<ul class="sortable list-group">
<li class="ui-widget-content list-group-item">Item 1</li>
<li class="ui-widget-content list-group-item">Item 2</li>
<li class="ui-widget-content list-group-item">Item 3</li>
<li class="ui-widget-content list-group-item">Item 4</li>
<li class="ui-widget-content list-group-item">Item 5</li>
</ul>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<h5>Drop Placeholder</h5>
<p class="card-text">
                          When dragging a sortable item to a new location, other items will make room for the
                          that item by shifting to allow white space between them.
                          Pass a class into the <code>placeholder</code>                          option to style that space to be visible. Use the boolean
                          <code>forcePlaceholderSize</code> option to set dimensions
                          on the placeholder.
                        </p>
<div class="jqueryui-ele-container text-center">
<ul class="sortable-placeholder list-group">
<li class="list-group-item">Item 1</li>
<li class="list-group-item">Item 2</li>
<li class="list-group-item">Item 3</li>
<li class="list-group-item">Item 4</li>
<li class="list-group-item">Item 5</li>
</ul>
</div>
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
<div class="row">
<div class="col-xl-6 col-lg-12 mb-2">
<h5>Connect Lists</h5>
<p class="card-text">
                          Sort items from one list into another and vice versa, by passing a selector into
                          the <code>connectWith</code>                          option. The simplest way to do this is to group all related
                          lists with a CSS class, and then pass that class into the
                          sortable function (i.e., connectWith: '.myclass').
                        </p>
<div class="jqueryui-ele-container text-center">
<ul class="connect-list1 list-group connectedSortable">
<li class="list-group-item">Item 1</li>
<li class="list-group-item">Item 2</li>
<li class="list-group-item">Item 3</li>
<li class="list-group-item">Item 4</li>
<li class="list-group-item">Item 5</li>
</ul>
<ul class="connect-list2 list-group connectedSortable ml-1">
<li class="list-group-item list-group-item-warning">Item 1</li>
<li class="list-group-item list-group-item-warning">Item 2</li>
<li class="list-group-item list-group-item-warning">Item 3</li>
<li class="list-group-item list-group-item-warning">Item 4</li>
<li class="list-group-item list-group-item-warning">Item 5</li>
</ul>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<h5>Include / Exclude items</h5>
<p class="card-text">
                          Specify which items are eligible to sort by passing a jQuery selector into the <code>items</code>                          option. Items excluded from this option are not sortable,
                          nor are they valid targets for sortable items. To only
                          prevent sorting on certain items, pass a jQuery selector
                          into the <code>cancel</code> option. Cancelled items remain
                          valid sort targets for others.
                        </p>
<div class="jqueryui-ele-container text-center">
<ul class="sortable-list1 list-group connectedSortable">
<li class="list-group-item list-group-item-info">Item 1</li>
<li class="list-group-item list-group-item-info ui-state-disabled">not sortable or a drop target</li>
<li class="list-group-item list-group-item-info ui-state-disabled">not sortable or a drop target</li>
<li class="list-group-item list-group-item-info">Item 4</li>
</ul>
<ul class="sortable-list2 list-group connectedSortable ml-1">
<li class="list-group-item list-group-item-warning">Item 1</li>
<li class="list-group-item list-group-item-warning ui-state-disabled">not sortable</li>
<li class="list-group-item list-group-item-warning ui-state-disabled">not sortable</li>
<li class="list-group-item list-group-item-warning">Item 4</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Sortable section end -->
</div>
