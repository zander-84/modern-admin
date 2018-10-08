<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
        \zander84\modernadmin\assets\PickersDateTimePickerAsset::class,
    ]
]);
?>

        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Date&amp;time picker</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="pickers-date-&amp;-time-picker.html#">Pickers</a>
                            </li>
                            <li class="breadcrumb-item active">Date&amp;time picker
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <button aria-expanded="false" aria-haspopup="true"
                            class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown"
                            id="dropdownBreadcrumbButton" type="button">Actions
                    </button>
                    <div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item"
                                                                                             href="pickers-date-&amp;-time-picker.html#"><i
                                    class="la la-calendar-check-o"></i> Calender</a>
                        <a class="dropdown-item" href="pickers-date-&amp;-time-picker.html#"><i
                                    class="la la-cart-plus"></i> Cart</a>
                        <a class="dropdown-item" href="pickers-date-&amp;-time-picker.html#"><i
                                    class="la la-life-ring"></i> Support</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="pickers-date-&amp;-time-picker.html#"><i class="la la-cog"></i>
                            Settings</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Pick-A-Date Picker start -->
            <section id="pick-a-date">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pick-A-Date Picker</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
                            <p>Pickadate.js is a mobile-friendly, responsive, and lightweight jQuery
                                date &amp; time input picker.</p>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Basic Pick-a-date</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
<span class="input-group-text">
<span class="la la-calendar-o"></span>
</span>
                                                </div>
                                                <input class="form-control pickadate" placeholder="Basic Pick-a-date"
                                                       type="text"/>
                                            </div>
                                            <small class="text-muted">Use <code>.pickadate</code> class for basic
                                                Pick-A-Date Picker.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Pick-a-date with short string</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
<span class="input-group-text">
<span class="la la-calendar-o"></span>
</span>
                                                </div>
                                                <input class="form-control pickadate-short-string"
                                                       placeholder="String Short of Month &amp; Week" type="text"/>
                                            </div>
                                            <small class="text-muted">Use <code>.pickadate-short-string</code> class for
                                                short
                                                Month &amp; Week String.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Select Year</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
<span class="input-group-text">
<span class="la la-calendar-o"></span>
</span>
                                                </div>
                                                <input class="form-control pickadate-select-year"
                                                       placeholder="Select Year" type="text"/>
                                            </div>
                                            <small class="text-muted">Use <code>.pickadate-select-year</code> class to
                                                allow user
                                                to select year.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Change First Weekday</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
<span class="input-group-text">
<span class="la la-calendar-o"></span>
</span>
                                                </div>
                                                <input class="form-control pickadate-firstday"
                                                       placeholder="First Weekday to Monday" type="text"/>
                                            </div>
                                            <small class="text-muted">Use <code>.pickadate-firstday</code> class to
                                                change first
                                                weekday to Monday.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Change/Hide Buttons</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
<span class="input-group-text">
<span class="la la-calendar-o"></span>
</span>
                                                </div>
                                                <input class="form-control pickadate-buttons"
                                                       placeholder="Hide/Change Buttons" type="text"/>
                                            </div>
                                            <small class="text-muted">Use <code>.pickadate-buttons</code> class to
                                                change/hide
                                                buttons.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Date Limits</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
<span class="input-group-text">
<span class="la la-calendar-o"></span>
</span>
                                                </div>
                                                <input class="form-control pickadate-limits" placeholder="Date Limits"
                                                       type="text"/>
                                            </div>
                                            <small class="text-muted">Use <code>.pickadate-limits</code> class to give
                                                selection
                                                from range of some dates.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Change Formats</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
<span class="input-group-text">
<span class="la la-calendar-o"></span>
</span>
                                                </div>
                                                <input class="form-control pickadate-format"
                                                       placeholder="Change Formats" type="text"/>
                                            </div>
                                            <small class="text-muted">Use <code>.pickadate-format</code> class to change
                                                date display
                                                formats.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Change Arrows</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
<span class="input-group-text">
<span class="la la-calendar-o"></span>
</span>
                                                </div>
                                                <input class="form-control pickadate-arrow" placeholder="Change Formats"
                                                       type="text"/>
                                            </div>
                                            <small class="text-muted">Use <code>.pickadate-arrow</code> class to change
                                                date display
                                                formats.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Picker Translation</label>
                                            <div class="input-group">
                                                <input class="form-control pickadate-translations"
                                                       placeholder="In Another Language" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="la la-calendar-o"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">Use <code>.pickadate-translations</code> class for
                                                language
                                                translation.
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Disable days of the week</label>
                                            <div class="input-group">
                                                <input class="form-control pickadate-disable-weekday"
                                                       placeholder="Disable days of the week" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="la la-calendar-o"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">Disable certain days of the week, such as all
                                                Saturdays (7th
                                                day of week) and Sundays (1st day of week), by passing
                                                an integer between 1 and 7
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Disable arbitrary dates</label>
                                            <div class="input-group">
                                                <input class="form-control pickadate-disable-dates"
                                                       placeholder="Disable Dates" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="la la-calendar-o"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">Pass an array of arbitrary dates (each formatted
                                                as [ yyyy,
                                                mm, dd ]) to disable them..
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Month &amp; Year Selectors</label>
                                            <div class="input-group">
                                                <input class="form-control pickadate-selectors"
                                                       placeholder="Month &amp; Year Selector" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="la la-calendar-o"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">Use <code>.pickadate-selectors</code> class to set
                                                month
                                                &amp; year selectable.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Month &amp; Year Dropdown</label>
                                            <div class="input-group">
                                                <input class="form-control pickadate-dropdown"
                                                       placeholder="Month &amp; Year Dropdown" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="la la-calendar-o"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">Use <code>.pickadate-dropdown</code> class to set
                                                <code>select</code> to month and year selection
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Picker Events</label>
                                            <div class="input-group">
                                                <input class="form-control pickadate-events"
                                                       placeholder="Open console to check events" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="la la-calendar-o"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">Use <code>.pickadate-events</code> class to check
                                                events
                                                as the user interacts with the picker.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Minimum and maximum date range</label>
                                            <div class="input-group">
                                                <input class="form-control pickadate-minmax"
                                                       placeholder="In Another Language" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="la la-calendar-o"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">Use <code>.pickadate-minmax</code> class for
                                                language translation.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Disable picker for native calendar</label>
                                            <div class="row">
                                                <div class="col-lg-12 mb-1">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
<span class="input-group-text">
<span class="la la-calendar-o"></span>
</span>
                                                        </div>
                                                        <input class="form-control datepicker" id="picker_from"
                                                               type="date"/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
<span class="input-group-text">
<span class="la la-calendar-o"></span>
</span>
                                                        </div>
                                                        <input class="form-control datepicker" id="picker_to"
                                                               type="date"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <small class="text-muted">Use <code>.pickadate-nativ</code> class to change
                                                date display
                                                formats.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Pick-A-Date Picker end -->
            <!-- Pick-A-Time Picker start -->
            <section id="pick-a-time">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pick-A-Time Picker</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Basic Pick-a-time</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
<span class="input-group-text">
<span class="ft-clock"></span>
</span>
                                                </div>
                                                <input class="form-control pickatime" placeholder="Basic Pick-a-time"
                                                       type="text"/>
                                            </div>
                                            <small class="text-muted">Use <code>.pickatime</code> class for basic
                                                Pick-A-Date Picker.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Clear Button</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
<span class="input-group-text">
<span class="ft-clock"></span>
</span>
                                                </div>
                                                <input class="form-control pickatime-button" placeholder="Clear Button"
                                                       type="text"/>
                                            </div>
                                            <small class="text-muted">Use <code>.pickatime-button</code> class to hide
                                                clear button.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Change Formats</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
<span class="input-group-text">
<span class="ft-clock"></span>
</span>
                                                </div>
                                                <input class="form-control pickatime-format"
                                                       placeholder="Change Formats" type="text"/>
                                            </div>
                                            <small class="text-muted">Use <code>.pickatime-format</code> class to change
                                                time display
                                                formats.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Format Time Display</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
<span class="input-group-text">
<span class="ft-clock"></span>
</span>
                                                </div>
                                                <input class="form-control pickatime-formatTime"
                                                       placeholder="Format Label" type="text"/>
                                            </div>
                                            <small class="text-muted">Use <code>.pickatime-formatTime</code> class to
                                                display time
                                                format.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Format with Label</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
<span class="input-group-text">
<span class="ft-clock"></span>
</span>
                                                </div>
                                                <input class="form-control pickatime-formatlabel"
                                                       placeholder="Format Label" type="text"/>
                                            </div>
                                            <small class="text-muted">Use <code>.pickatime-formatlabel</code> class to
                                                display
                                                time label format.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Minimum and maximum time range</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
<span class="input-group-text">
<span class="ft-clock"></span>
</span>
                                                </div>
                                                <input class="form-control pickatime-minmax"
                                                       placeholder="Start &amp; End Time" type="text"/>
                                            </div>
                                            <small class="text-muted">Use <code>.pickatime-minmax</code> class for Start
                                                Time &amp;
                                                End Time.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>From Current Time Limit</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
<span class="input-group-text">
<span class="ft-clock"></span>
</span>
                                                </div>
                                                <input class="form-control pickatime-limits" placeholder="Select Time"
                                                       type="text"/>
                                            </div>
                                            <small class="text-muted">Show previous 5 time limits and also shows current
                                                time Limit.
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Intervals</label>
                                            <div class="input-group">
                                                <input class="form-control pickatime-intervals"
                                                       placeholder="Date Intervals" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="ft-clock"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">Use <code>.pickatime-intervals</code> class to
                                                display time
                                                in Intervals.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Disable set of Time</label>
                                            <div class="input-group">
                                                <input class="form-control pickatime-disable"
                                                       placeholder="Disable set of Time" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="ft-clock"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">Disable a specific or arbitrary set of times
                                                selectable on
                                                the picker.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Disable set of time using Integers</label>
                                            <div class="input-group">
                                                <input class="form-control pickatime-disable-integer"
                                                       placeholder="Disable set of Time" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="ft-clock"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">Using integers as hours (0 to 23)</small>
                                        </div>
                                        <div class="form-group">
                                            <label>Disable set of time using Object</label>
                                            <div class="input-group">
                                                <input class="form-control pickatime-disable-object"
                                                       placeholder="Disable set of Time" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="ft-clock"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">Using objects as a range of times</small>
                                        </div>
                                        <div class="form-group">
                                            <label>Disable All with exceptions</label>
                                            <div class="input-group">
                                                <input class="form-control pickatime-disable-all"
                                                       placeholder="Disable All with exceptions" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="ft-clock"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">Enable only a specific or arbitrary set of times
                                                by setting
                                                true as the first item in the collection
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Close on a user action</label>
                                            <div class="input-group">
                                                <input class="form-control pickatime-close-action"
                                                       placeholder="Close on Action" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="ft-clock"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">When a time is selected or the "clear" button is
                                                pressed,
                                                the picker closes.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Picker Events</label>
                                            <div class="input-group">
                                                <input class="form-control pickatime-events"
                                                       placeholder="Open console to check events" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="ft-clock"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">The onSet event is the only callback that is
                                                passed a context
                                                argument that provides details as to which properties are
                                                being "set".
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Pick-A-Time Picker end -->
            <!-- Bootstrap DateRange Picker start -->
            <section id="daterange">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bootstrap DateRange Picker</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
                            <div class="form">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Basic Date Range Picker</label>
                                            <div class="input-group">
                                                <input class="form-control daterange" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="la la-calendar"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">The Date Range Picker is attached to a text input.
                                                It will
                                                use the current value of the input to initialize, and update
                                                the input if new dates are chosen.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Date and Time</label>
                                            <div class="input-group">
                                                <input class="form-control datetime" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="la la-calendar"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">The Date Range Picker can also be used to select
                                                times. Hour,
                                                minute and (optional) second dropdowns are added below
                                                the calendars. An option exists to set the increment count
                                                of the minutes dropdown to e.g. offer only 15-minute or
                                                30-minute increments.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>24 hour Time Picker with Seconds</label>
                                            <div class="input-group">
                                                <input class="form-control timeseconds" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="la la-calendar"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">Use 24-hour instead of 12-hour times, removing the
                                                AM/PM
                                                selection. Show seconds in the timePicker
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Single Date Picker</label>
                                            <div class="input-group">
                                                <input class="form-control singledate" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="la la-calendar"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">The Date Range Picker can be turned into a single
                                                date picker
                                                widget with only one calendar. In this example, dropdowns
                                                to select a month and year have also been enabled at the
                                                top of the calendar to quickly jump to different months.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Auto Apply Date Range</label>
                                            <div class="input-group">
                                                <input class="form-control autoapply" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="la la-calendar"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted"> Hide the apply and cancel buttons, and
                                                automatically apply
                                                a new date range as soon as two dates or a predefined range
                                                is selected
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Not Linked Calendars</label>
                                            <div class="input-group">
                                                <input class="form-control linkedCalendars" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="la la-calendar"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">When enabled, the two calendars displayed will
                                                always be
                                                for two sequential months (i.e. January and February),
                                                and both will be advanced when clicking the left or right
                                                arrows above the calendars. When disabled, the two calendars
                                                can be individually advanced and display any month/year.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Not Linked Calendars</label>
                                            <div class="input-group">
                                                <input class="form-control linkedCalendars" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="la la-calendar"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">When enabled, the two calendars displayed will
                                                always be
                                                for two sequential months (i.e. January and February),
                                                and both will be advanced when clicking the left or right
                                                arrows above the calendars. When disabled, the two calendars
                                                can be individually advanced and display any month/year.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Date Limit</label>
                                            <div class="input-group">
                                                <input class="form-control dateLimit" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="la la-calendar"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">The maximum span between the selected start and
                                                end dates
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Show Dropdowns</label>
                                            <div class="input-group">
                                                <input class="form-control showdropdowns" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="la la-calendar"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">Show year and month select boxes above calendars
                                                to jump
                                                to a specific month and year
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Show Week Numbers</label>
                                            <div class="input-group">
                                                <input class="form-control showweeknumbers" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="la la-calendar"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">Show localized week numbers at the start of each
                                                week on
                                                the calendars
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Predefined Ranges</label>
                                            <div class="input-group">
                                                <input class="form-control dateranges" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="la la-calendar"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">Set predefined date ranges the user can select
                                                from. Each
                                                key is the label for the range, and its value an array
                                                with two dates representing the bounds of the range
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Always Show Calendar</label>
                                            <div class="input-group">
                                                <input class="form-control shawCalRanges" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="la la-calendar"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">Normally, if you use the ranges option to specify
                                                pre-defined
                                                date ranges, calendars for choosing a custom date range
                                                are not shown until the user clicks "Custom Range". When
                                                this option is set to true, the calendars for choosing
                                                a custom date range are always shown instead.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Localization</label>
                                            <div class="input-group">
                                                <input class="form-control localeRange" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="la la-calendar"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">Allows you to provide localized strings for
                                                buttons and labels,
                                                customize the date display format, and change the first
                                                day of week for the calendars.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Picker Alignment</label>
                                            <div class="input-group">
                                                <input class="form-control openRight" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="la la-calendar"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">Whether the picker appears aligned to the left, to
                                                the right,
                                                or centered under the HTML element it's attached to.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Open Picker on top</label>
                                            <div class="input-group">
                                                <input class="form-control drops" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="la la-calendar"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">Whether the picker appears below (default) or
                                                above the HTML
                                                element it's attached to.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Button Class Options</label>
                                            <div class="input-group">
                                                <input class="form-control buttonClass" type="text"/>
                                                <div class="input-group-append">
<span class="input-group-text">
<span class="la la-calendar"></span>
</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">CSS class names that will be added to all buttons
                                                in the
                                                picker.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Bootstrap DateRange Picker end -->
        </div>
