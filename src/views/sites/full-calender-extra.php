<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\FullCalenderExtraAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Full Calendar Extra</h3>
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
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="full-calender-extra.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="full-calender-extra.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="full-calender-extra.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="full-calender-extra.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Full calendar extra example section start -->
<section id="extra-examples">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Gcal</h4>
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
<p class="card-text">FullCalendar can display events from a public google Calendar.
                      google Calendar can serve as a backend that manages and persistently
                      stores event data (a feature that FullCalendar currently lacks).
                      You must have google calendar API key, make your google calendar
                      public and obtain your google calendar's ID. Please visit this
                      <a href="http://fullcalendar.io/docs/google_calendar/" target="_blank">link</a>                      for all the documentation </p>
<div id="fc-gcal"></div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">JSON</h4>
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
<p class="card-text">A URL of a JSON feed that the calendar will fetch Event Objects
                      from. FullCalendar will visit the URL whenever it needs new
                      event data. This happens when the user clicks prev/next or
                      changes views. FullCalendar will determine the date-range it
                      needs events for and will pass that information along in GET
                      parameters.
                    </p>
<div id="fc-json"></div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Languages</h4>
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
<p class="card-text">Customize the language and localization options for the calendar.
                      This option affects many things such as: the text in buttons,
                      as defined by header, text that contains month or day-of-week
                      strings, date formatting strings, such as timeFormat, weekNumberCalculation,
                      firstDay.
                    </p>
<form>
<div class="form-group row">
<label class="col-sm-3 col-md-2 col-lg-1 col-form-label">Language:</label>
<div class="col-sm-9 col-md-10 col-lg-11">
<select class="custom-select form-control" id="lang-selector"></select>
</div>
</div>
</form>
<div id="fc-languages"></div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Timezones</h4>
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
<p class="card-text">Determines the timezone in which dates throughout the API are
                      parsed and rendered. <code>false (default), 'local', 'UTC', a timezone string ('America/Chicago')</code>                      Each of these possible values has an effect on (1) the way
                      event data requests are made, (2) the timezones that event
                      dates are represented in, and (3) the timezones that other
                      dates in the API are represented in.</p>
<form>
<div class="form-group row">
<label class="col-sm-3 col-md-2 col-lg-1 col-form-label">Timezone:</label>
<div class="col-sm-9 col-md-10 col-lg-11">
<select class="custom-select form-control" id="timezone-selector">
<option selected="" value="">none</option>
<option value="local">local</option>
<option value="UTC">UTC</option>
</select>
</div>
</div>
</form>
<div id="fc-timezones"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Full calendar extra example section end -->
</div>
</div>
</div>