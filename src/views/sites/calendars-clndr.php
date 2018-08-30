<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\CalendarsClndrAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">CLNDR</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item active">CLNDR
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="calendars-clndr.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="calendars-clndr.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="calendars-clndr.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="calendars-clndr.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- clndr section start -->
<section id="clndr-examples">
<div class="row">
<!-- Default Setup -->
<div class="col-xl-6 col-lg-12 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default Setup</h4>
</div>
<div class="card-body">
<p class="card-text">This is the most basic eample with html template and events to
                    be shown on the calendar.</p>
<div class="overflow-hidden bg-grey bg-lighten-3" id="clndr-default"></div>
</div>
</div>
</div>
<!-- Adjacent -->
<div class="col-xl-6 col-lg-12 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Adjacent</h4>
</div>
<div class="card-body">
<p class="card-text">These two options are used to show show and change months <code>showAdjacentMonths</code>                    and <code>adjacentDaysChangeMonth</code>. Edges of other months
                    should be visible and clicking them should switch the month.</p>
<div class="overflow-hidden bg-grey bg-lighten-3" id="clndr-adjacent"></div>
</div>
</div>
</div>
</div>
<div class="row">
<!-- Multiday -->
<div class="col-xl-6 col-lg-12 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Multiday</h4>
</div>
<div class="card-body">
<p class="card-text">This example demonstrates multi-day events (12th - 17th, 24th -
                    27th).
                  </p>
<div class="overflow-hidden bg-grey bg-lighten-3" id="clndr-multiday"></div>
</div>
</div>
</div>
<!-- Constraints -->
<div class="col-xl-6 col-lg-12 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Constraints</h4>
</div>
<div class="card-body">
<p class="card-text">This example demonstrates start and end constraints. (the 4th of
                    this month to the 24th of this month).</p>
<div class="overflow-hidden bg-grey bg-lighten-3" id="clndr-constraints"></div>
</div>
</div>
</div>
</div>
<div class="row">
<!-- Six Rows -->
<div class="col-xl-6 col-lg-12 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Six Rows</h4>
</div>
<div class="card-body">
<p class="card-text">The <code>forceSixRows</code> option, which should make a six-row
                    calendar regardless of the length of each month.</p>
<div class="overflow-hidden bg-grey bg-lighten-3" id="clndr-six-rows"></div>
</div>
</div>
</div>
<!-- Selected Date -->
<div class="col-xl-6 col-lg-12 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Selected Date</h4>
</div>
<div class="card-body">
<p class="card-text">It Should highlight the last date you clicked on.</p>
<div class="overflow-hidden bg-grey bg-lighten-3" id="clndr-selected-date"></div>
</div>
</div>
</div>
</div>
<div class="clearfix" id="clndr">
<script id="clndr-template" type="text/template">
              <div class="clndr-controls">
                <div class="clndr-previous-button">&lt;</div>
                <div class="clndr-next-button">&gt;</div>
                <div class="current-month">
                  <%= month %>
                    <%= year %>
                </div>
              </div>
              <div class="clndr-grid">
                <div class="days-of-the-week clearfix">
                  <% _.each(daysOfTheWeek, function(day) { %>
                    <div class="header-day">
                      <%= day %>
                    </div>
                    <% }); %>
                </div>
                <div class="days">
                  <% _.each(days, function(day) { %>
                    <div class="<%= day.classes %>" id="<%= day.id %>">
                      <span class="day-number">
                        <%= day.day %>
                      </span>
                    </div>
                    <% }); %>
                </div>
              </div>
              <div class="event-listing">
                <div class="event-listing-title">Event this month</div>
                <% _.each(eventsThisMonth, function(event) { %>
                  <div class="event-item font-small-3">
                    <div class="event-item-day font-small-2">
                      <%= event.date %>
                    </div>
                    <div class="event-item-name text-bold-600">
                      <%= event.title %>
                    </div>
                    <div class="event-item-location">
                      <%= event.location %>
                    </div>
                  </div>
                  <% }); %>
              </div>
            </script>
</div>
</section>
<!-- // clndr example section end -->
</div>
</div>
</div>