<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\JqueryUiDatePickersAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">jQuery UI date pickers</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="jquery-ui-date-pickers.html#">jQuery UI</a>
</li>
<li class="breadcrumb-item active">Date Pickers
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="jquery-ui-date-pickers.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="jquery-ui-date-pickers.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="jquery-ui-date-pickers.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="jquery-ui-date-pickers.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Date Picker section start -->
<section id="date-picker">
<div class="row">
<div class="col-lg-6 col-sm-12">
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
<fieldset class="form-group">
<label>Default Functionality</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-calendar"></i></span>
</div>
<input class="form-control datepicker-default" type="text"/>
</div>
<small>Choose a date, click elsewhere on the page (blur the input),
                        or hit the Esc key to close. If a date is chosen, feedback
                        is shown as the input's value.</small>
</fieldset>
<fieldset class="form-group">
<label>Animations</label>
<div class="row">
<div class="col-md-6">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-calendar"></i></span>
</div>
<input class="form-control datepicker-animation" type="text"/>
</div>
</div>
<div class="col-md-6">
<select class="form-control dp-animation">
<option>Select Animation</option>
<option value="show">Show (default)</option>
<option value="slideDown">Slide down</option>
<option value="fadeIn">Fade in</option>
<option value="blind">Blind (UI Effect)</option>
<option value="bounce">Bounce (UI Effect)</option>
<option value="clip">Clip (UI Effect)</option>
<option value="drop">Drop (UI Effect)</option>
<option value="fold">Fold (UI Effect)</option>
<option value="slide">Slide (UI Effect)</option>
<option value="">None</option>
</select>
</div>
</div>
<small>Use different animations when opening or closing the datepicker.
                        Choose an animation from the dropdown, then click on the
                        input to see its effect. You can use one of the three standard
                        animations or any of the UI Effects.</small>
</fieldset>
<fieldset class="form-group">
<label>Dates In Other Months</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-calendar"></i></span>
</div>
<input class="form-control dp-other-month" type="text"/>
</div>
<small>The datepicker can show dates that come from other than the
                        main month being displayed. These other dates can also be
                        made selectable.</small>
</fieldset>
<fieldset class="form-group">
<label>Display Button Bar</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-calendar"></i></span>
</div>
<input class="form-control dp-button-bar" type="text"/>
</div>
<small>Display a button for selecting Today's date and a Done button
                        for closing the calendar with the boolean showButtonPanel
                        option. Each button is enabled by default when the bar is
                        displayed, but can be turned off with additional options.
                        Button text is customizable.</small>
</fieldset>
<fieldset class="form-group">
<label>Display Month &amp; Year Menu</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-calendar"></i></span>
</div>
<input class="form-control dp-month-year" type="text"/>
</div>
<small>Show month and year dropdowns in place of the static month/year
                        header to facilitate navigation through large time frames.
                        Add the boolean <code>changeMonth</code> and <code>changeYear</code>                        options.</small>
</fieldset>
<fieldset class="form-group">
<label>Display Multiple Months</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-calendar"></i></span>
</div>
<input class="form-control dp-multiple-months" type="text"/>
</div>
<small>Set the <code>numberOfMonths</code> option to an integer of
                        2 or more to show multiple months in a single datepicker.</small>
</fieldset>
<fieldset class="form-group">
<label>Display Inline</label>
<div class="dp-inline"></div>
<small>Display the datepicker embedded in the page instead of in an
                        overlay. Simply call .datepicker() on a div instead of an
                        input.
                      </small>
</fieldset>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-sm-12">
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
<fieldset class="form-group">
<label>Constrain Input</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-calendar"></i></span>
</div>
<input class="form-control dp-constrain-input" type="text"/>
</div>
<small>When <code>true</code>, entry in the input field is constrained
                        to those characters allowed by the current <code>dateFormat</code>                        option.</small>
</fieldset>
<fieldset class="form-group">
<label>Year Range</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-calendar"></i></span>
</div>
<input class="form-control dp-year-range" type="text"/>
</div>
<small>The range of years displayed in the year drop-down: either
                        relative to today's year ("-nn:+nn"), relative to the currently
                        selected year ("c-nn:c+nn"), absolute ("nnnn:nnnn"), or combinations
                        of these formats ("nnnn:-nn"). Note that this option only
                        affects what appears in the drop-down, to restrict which
                        dates may be selected use the minDate and/or maxDate options.</small>
</fieldset>
<fieldset class="form-group">
<label>Step Months</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-calendar"></i></span>
</div>
<input class="form-control dp-step-months" type="text"/>
</div>
<small>Set how many months to move when clicking the previous/next
                        links. Currently its set to step 3 months. Default is 1.</small>
</fieldset>
<fieldset class="form-group">
<label>Formate Date</label>
<div class="row">
<div class="col-md-6">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-calendar"></i></span>
</div>
<input class="form-control dp-format-date" type="text"/>
</div>
</div>
<div class="col-md-6">
<select class="form-control date-formats">
<option value="mm/dd/yy">Default - mm/dd/yy</option>
<option value="yy-mm-dd">ISO 8601 - yy-mm-dd</option>
<option value="d M, y">Short - d M, y</option>
<option value="d MM, y">Medium - d MM, y</option>
<option value="DD, d MM, yy">Full - DD, d MM, yy</option>
<option value="'day' d 'of' MM 'in the year' yy">With text - 'day' d 'of' MM 'in the year' yy</option>
</select>
</div>
</div>
<small>Display date feedback in a variety of ways. Choose a date format
                        from the dropdown, then click on the input and select a date
                        to see it in that format.</small>
</fieldset>
<fieldset class="form-group">
<label>Icon Trigger</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-calendar"></i></span>
</div>
<input class="form-control dp-icon-trigger" type="text"/>
</div>
<small>Click the icon next to the input field to show the datepicker.
                        Set the datepicker to open on focus (default behavior), on
                        icon click, or both.</small>
</fieldset>
<fieldset class="form-group">
<label>Populate Alternate Field</label>
<div class="row">
<div class="col-md-6">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-calendar"></i></span>
</div>
<input class="form-control dp-for-alternate" type="text"/>
</div>
</div>
<div class="col-md-6">
<input class="form-control dp-alternate" type="text"/>
</div>
</div>
<small>Populate an alternate field with its own date format whenever
                        a date is selected using the <code>altField</code> and <code>altFormat</code>                        options. This feature could be used to present a human-friendly
                        date for user selection, while passing a more computer-friendly
                        date through for further processing.</small>
</fieldset>
<fieldset class="form-group">
<label>Restrict Date Range</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-calendar"></i></span>
</div>
<input class="form-control dp-date-range" type="text"/>
</div>
<small>Restrict the range of selectable dates with the minDate and
                        maxDate options. Set the beginning and end dates as actual
                        dates (new Date(2009, 1 - 1, 26)), as a numeric offset from
                        today (-20), or as a string of periods and units ('+1M +10D').
                        For the last, use 'D' for days, 'W' for weeks, 'M' for months,
                        or 'Y' for years.</small>
</fieldset>
<fieldset class="form-group">
<label>Show Week Of The Year</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-calendar"></i></span>
</div>
<input class="form-control dp-week-year" type="text"/>
</div>
<small>The datepicker can show the week of the year. The default calculation
                        follows the ISO 8601 definition: the week starts on Monday,
                        the first week of the year contains the first Thursday of
                        the year. This means that some days from one year may be
                        placed into weeks 'belonging' to another year.</small>
</fieldset>
<fieldset class="form-group">
<label>Select A Date Range</label>
<div class="row">
<div class="col-md-6">
<h4>From</h4>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-calendar"></i></span>
</div>
<input class="form-control dp-date-range-from" type="text"/>
</div>
</div>
<div class="col-md-6">
<h4>To</h4>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="ft-calendar"></i></span>
</div>
<input class="form-control dp-date-range-to" type="text"/>
</div>
</div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Date Picker section end -->
</div>
