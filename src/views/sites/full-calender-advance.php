<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\FullCalenderAdvanceAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Full Calendar Advance</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item active">Full Calendar
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="full-calender-advance.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="full-calender-advance.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="full-calender-advance.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="full-calender-advance.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Full calendar advance example section start -->
<section id="advance-examples">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">External Dragging</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Add extended dragging functionality with droppable option. Data
                      can be attached to the element in order to specify its duration
                      when dropped. A <code>Duration</code>-ish value can be provided.
                      This can either be done via jQuery or via an <code>data-duration</code>                      attribute. This option operates with jQuery UI draggables.
                      You must <code>download</code> the appropriate jQuery UI files
                      and initialize a <code>draggable</code> element. Additionally,
                      you must set the calendar's <code>droppable</code> option to
                      <code>true</code>.</p>
<div class="row">
<div class="col-md-3">
<div id="external-events">
<h4>Draggable Events</h4>
<div class="fc-events-container">
<div class="fc-event" data-color="#2D95BF">All Day Event</div>
<div class="fc-event" data-color="#48CFAE">Long Event</div>
<div class="fc-event" data-color="#50C1E9">Meeting</div>
<div class="fc-event" data-color="#FB6E52">Birthday party</div>
<div class="fc-event" data-color="#ED5564">Lunch</div>
<div class="fc-event" data-color="#F8B195">Conference Meeting</div>
<div class="fc-event" data-color="#6C5B7B">Party</div>
<div class="fc-event" data-color="#355C7D">Happy Hour</div>
<div class="fc-event" data-color="#547A8B">Dance party</div>
<div class="fc-event" data-color="#3EACAB">Dinner</div>
<p>
<input id="drop-remove" type="checkbox"/>
<label for="drop-remove">remove after drop</label>
</p>
</div>
</div>
</div>
<div class="col-md-9">
<div id="fc-external-drag"></div>
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
<h4 class="card-title">Selectable</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<p class="card-text">Allows a user to highlight multiple days or timeslots by clicking
                      and dragging. To let the user make selections by clicking and
                      dragging, <code>selectable</code> option must be set to <code>true</code>.
                      The <code>select</code> and <code>unselect</code> callbacks
                      will be useful for monitoring when selections are made and
                      cleared.
                    </p>
<div id="fc-selectable"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Full calendar advance example section end -->
</div>
