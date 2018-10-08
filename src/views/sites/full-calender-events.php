<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\FullCalenderEventsAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Full Calendar Events</h3>
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
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="full-calender-events.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="full-calender-events.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="full-calender-events.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="full-calender-events.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Full calendar events example section start -->
<section id="events-examples">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Background Events</h4>
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
<p class="card-text">Events that appear as background highlights can be achieved by
                      setting an Event Object's rendering property to <code>"background"</code>.
                      Background events that are <code>timed</code> will only be
                      rendered on the time slots in agenda view. Background events
                      that are <code>all-day</code> will only be rendered in month
                      view or the all-day slots of agenda view. The color of background
                      events can be manipulated by targeting the <code>fc-bgevent</code>                      className, one of your own custom classNames provided by the
                      Event Object's <code>className</code> property, or by explicitly
                      specifying a color with each Event Object's or Event Source's
                      <code>color</code> or <code>backgroundColor properties</code>.</p>
<div id="fc-bg-events"></div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Event Colors</h4>
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
<p class="card-text">You can change the color of all events on the calendar using
                      the <code>eventColor</code> option. The <code>eventBackgroundColor</code>,
                      <code>eventBorderColor</code>, and <code>eventTextColor</code>                      options can be used for more granularity. If you want to change
                      the color for events in a specific Event Source, please look
                      at the <a href="http://fullcalendar.io/docs/event_data/Event_Source_Object/#options" target="_blank">Event Source options</a> documentation. If
                      you want to change the color for individual events, please
                      look at the <a href="http://fullcalendar.io/docs/event_data/Event_Object/#color-options" target="_blank">Event Object color options</a>.</p>
<div id="fc-event-colors"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Full calendar events example section end -->
</div>
