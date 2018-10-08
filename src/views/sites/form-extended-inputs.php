<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\FormExtendedInputsAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Extended Controls</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="form-extended-inputs.html#">Form Components</a>
</li>
<li class="breadcrumb-item active">Extended Controls
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="form-extended-inputs.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="form-extended-inputs.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="form-extended-inputs.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="form-extended-inputs.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Input Mask start -->
<section class="inputmask" id="inputmask">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Input Mask</h4>
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
<div class="row">
<div class="col-xl-6 col-lg-12">
<fieldset>
<h5>Date Mask
                            <small class="text-muted">dd/mm/yyyy</small>
</h5>
<div class="form-group">
<input class="form-control date-inputmask" id="date-mask" placeholder="Enter Date" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>Phone
                            <small class="text-muted">(999) 999-9999</small>
</h5>
<div class="form-group">
<input class="form-control phone-inputmask" id="phone-mask" placeholder="Enter Phone Number" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>International Number
                            <small class="text-muted">+19 999 999 999</small>
</h5>
<div class="form-group">
<input class="form-control international-inputmask" id="international-mask" placeholder="International Phone Number" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>Phone / xEx
                            <small class="text-muted">(999) 999-9999 / x999999</small>
</h5>
<div class="form-group">
<input class="form-control xphone-inputmask" id="xphone-mask" placeholder="Enter Phone Number" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>Purchase Order
                            <small class="text-muted">aaaa 9999-****</small>
</h5>
<div class="form-group">
<input class="form-control purchase-inputmask" id="purchase-mask" placeholder="Enter Purchase Order" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>Credit Card Number
                            <small class="text-muted">9999 9999 9999 9999</small>
</h5>
<div class="form-group">
<input class="form-control cc-inputmask" id="cc-mask" placeholder="Enter Credit Card Number" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>SSN
                            <small class="text-muted">999-99-9999</small>
</h5>
<div class="form-group">
<input class="form-control ssn-inputmask" id="ssn-mask" placeholder="Enter Social Security Number" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>ISBN
                            <small class="text-muted">999-99-999-9999-9</small>
</h5>
<div class="form-group">
<input class="form-control isbn-inputmask" id="isbn-mask" placeholder="Enter ISBN" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>Percentage
                            <small class="text-muted">99%</small>
</h5>
<div class="form-group">
<input class="form-control percentage-inputmask" id="percentage-mask" placeholder="Enter Value in %" type="text"/>
</div>
</fieldset>
</div>
<div class="col-xl-6 col-lg-12">
<fieldset>
<h5>Currency
                            <small class="text-muted">$9999</small>
</h5>
<div class="form-group">
<input class="form-control currency-inputmask" id="currency-mask" placeholder="Enter Currency in USD" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>Decimal using RadixPoint
                            <small class="text-muted">123.654658</small>
</h5>
<div class="form-group">
<input class="form-control decimal-inputmask" id="decimal-mask" placeholder="Enter Decimal Value" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>Email
                            <small class="text-muted">xxx@xxx.xxx</small>
</h5>
<div class="form-group">
<input class="form-control email-inputmask" id="email-mask" placeholder="Enter Email Address" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>Optional masks
                            <small class="text-muted">(99) 9999[9]-9999</small>
</h5>
<div class="form-group">
<input class="form-control optional-inputmask" id="optional-mask" placeholder="With Optional Mask" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>JIT Masking
                            <small class="text-muted">mm-dd-yyyy</small>
</h5>
<div class="form-group">
<input class="form-control jit-inputmask" id="jit-mask" placeholder="With Optional Mask" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>OnComplete State
                            <small class="text-muted">Execute a function when the mask is completed.</small>
</h5>
<div class="form-group">
<input class="form-control oncomplete-inputmask" id="oncomplete-mask" placeholder="Enter date" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>OnInComplete State
                            <small class="text-muted">Execute a function when the mask is incomplete. Executes
                              on blur.</small>
</h5>
<div class="form-group">
<input class="form-control onincomplete-inputmask" id="onincomplete-mask" placeholder="Enter date" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>OnCleared State
                            <small class="text-muted">Execute a function when the mask is cleared.</small>
</h5>
<div class="form-group">
<input class="form-control oncleared-inputmask" id="oncleared-mask" placeholder="Enter date" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>RTL attribute
                            <small class="text-muted">dd/mm/yyyy</small>
</h5>
<div class="form-group">
<input class="form-control date-inputmask" dir="rtl" id="date-mask-rtl" placeholder="Enter Date" type="text"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Input Mask end -->
<!-- Formatter start -->
<section class="formatter" id="formatter">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Formatter</h4>
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
<div class="card-content">
<div class="card-body">
<div class="row">
<div class="col-xl-6 col-lg-12">
<fieldset>
<h5>Date Mask
                            <small class="text-muted">dd/mm/yyyy</small>
</h5>
<div class="form-group">
<input class="form-control date-formatter" id="date-format" placeholder="Enter Date" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>Phone
                            <small class="text-muted">(999) 999-9999</small>
</h5>
<div class="form-group">
<input class="form-control phone-formatter" id="phone-format" placeholder="Enter Phone Number" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>International Number
                            <small class="text-muted">+19 999 999 999</small>
</h5>
<div class="form-group">
<input class="form-control international-formatter" id="international-format" placeholder="International Phone Number" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>Phone / xEx
                            <small class="text-muted">(999) 999-9999 / x999999</small>
</h5>
<div class="form-group">
<input class="form-control xphone-formatter" id="xphone-format" placeholder="Enter Phone Number" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>Purchase Order
                            <small class="text-muted">aaaa 9999-****</small>
</h5>
<div class="form-group">
<input class="form-control purchase-formatter" id="purchase-format" placeholder="Enter Purchase Order" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>Credit Card Number
                            <small class="text-muted">9999 9999 9999 9999</small>
</h5>
<div class="form-group">
<input class="form-control cc-formatter" id="cc-format" placeholder="Enter Credit Card Number" type="text"/>
</div>
</fieldset>
</div>
<div class="col-xl-6 col-lg-12">
<fieldset>
<h5>Currency
                            <small class="text-muted">$9999</small>
</h5>
<div class="form-group">
<input class="form-control currency-formatter" id="currency-format" placeholder="Enter Currency in USD" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>Decimal using RadixPoint
                            <small class="text-muted">123.654658</small>
</h5>
<div class="form-group">
<input class="form-control decimal-formatter" id="decimal-format" placeholder="Enter Decimal Value" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>SSN
                            <small class="text-muted">999-99-9999</small>
</h5>
<div class="form-group">
<input class="form-control ssn-formatter" id="ssn-format" placeholder="Enter Social Security Number" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>ISBN
                            <small class="text-muted">999-99-999-9999-9</small>
</h5>
<div class="form-group">
<input class="form-control isbn-formatter" id="isbn-format" placeholder="Enter ISBN" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>Percentage
                            <small class="text-muted">99%</small>
</h5>
<div class="form-group">
<input class="form-control percentage-formatter" id="percentage-format" placeholder="Enter Value in %" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>RTL attribute
                            <small class="text-muted">dd/mm/yyyy</small>
</h5>
<div class="form-group">
<input class="form-control date-formatter" dir="rtl" id="date-format-rtl" placeholder="Enter Date" type="text"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Formatter end -->
<!-- Card start -->
<section class="createCard" id="createCard">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Card</h4>
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
<div class="card-content">
<div class="card-body">
<p>Card will take any credit card form and make it the best part
                      of the checkout process (without you changing anything). Everything
                      is created with pure CSS, HTML, and jQuery — no images required.</p>
<div class="row">
<div class="col-xl-6 col-lg-12">
<div class="card-wrapper"></div>
</div>
<div class="col-xl-6 col-lg-12">
<form action="#" class="card-form">
<fieldset class="mb-1">
<h5>Card Number</h5>
<div class="form-group">
<input class="form-control card-number" id="card-number" maxlength="19" name="number" placeholder="Card Number" type="text"/>
</div>
</fieldset>
<fieldset class="mb-1">
<h5>Card Name</h5>
<div class="form-group">
<input class="form-control card-name" id="card-name" name="name" placeholder="Card Holder Name" type="text"/>
</div>
</fieldset>
<div class="row">
<div class="col-md-6">
<fieldset class="mb-1">
<h5>Expiry Date</h5>
<div class="form-group">
<input class="form-control card-expiry" id="card-expiry" name="expiry" placeholder="Card Expiry Date" type="text"/>
</div>
</fieldset>
</div>
<div class="col-md-6">
<fieldset class="mb-1">
<h5>Card Number</h5>
<div class="form-group">
<input class="form-control card-cvc" id="card-cvc" maxlength="16" name="cvc" placeholder="Card CVC Number" type="text"/>
</div>
</fieldset>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Card end -->
<!-- Typeahead js start -->
<section class="typeahead" id="typeahead">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Typeahead</h4>
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
<div class="row">
<div class="col-xl-6 col-lg-12">
<fieldset>
<h5>Basic Typeahead</h5>
<p class="text-muted">When initializing a <code>typeahead</code>, you pass the
                            plugin method one or more datasets. The source of a dataset
                            is responsible for computing a set of suggestions for
                            a given query.</p>
<div class="form-group">
<input class="form-control typeahead-basic" id="the-basic" placeholder="Start Typing.." type="text"/>
</div>
</fieldset>
<fieldset>
<h5>Prefetch Data</h5>
<p class="text-muted">Prefetched data is fetched and processed on initialization.
                            If the browser supports local storage, the processed
                            data will be cached there to prevent additional network
                            requests on subsequent page loads.</p>
<div class="form-group">
<input class="form-control typeahead-prefetch" id="the-prefetch" placeholder="Countries" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>Remote Data</h5>
<p class="text-muted">Remote data is only used when the data provided by local
                            and prefetch is insufficient. In order to prevent an
                            obscene number of requests being made to the remote endpoint,
                            requests are rate-limited.</p>
<div class="form-group">
<input class="form-control typeahead-remote" id="the-remote" placeholder="Oscar winners for Best Picture" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>Custom Templates</h5>
<p class="text-muted">Custom templates give you full control over how suggestions
                            get rendered making it easy to customize the look and
                            feel of your typeahead. This requires <code>Handlebars.js</code>                            extension for compilation.</p>
<div class="form-group">
<input class="form-control custom-template" id="custom-template" placeholder="Oscar winners for Best Picture" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>Default Suggestions</h5>
<p class="text-muted">Default suggestions can be shown for empty queries by setting
                            the <code>minLength</code> option to 0 and having the
                            source return suggestions for empty queries.</p>
<div class="form-group">
<input class="form-control default-suggestions" id="default-suggestions" placeholder="NFL Teams" type="text"/>
</div>
</fieldset>
</div>
<div class="col-xl-6 col-lg-12">
<fieldset>
<h5>Bloodhound Engine</h5>
<p class="text-muted">For more advanced use cases, rather than implementing the
                            source for your dataset yourself, you can take advantage
                            of <code>Bloodhound</code>, the <code>typeahead.js</code>                            suggestion engine.
                            <br/>Bloodhound is stack, flexible, and offers advanced functionalities
                            such as prefetching, intelligent caching, fast lookups,
                            and backfilling with remote data.</p>
<div class="form-group">
<input class="form-control typeahead-bloodhound" id="the-bloodhound" placeholder="Start Typing.." type="text"/>
</div>
</fieldset>
<fieldset>
<h5>Multiple Datasets</h5>
<p class="text-muted">Multiple datasets give you visually separated sets of data
                            inside Dropdown menu with <code>saperate titles</code>,
                            managed in <code>templates</code> option. This looks
                            like a <code>&lt;optgroup&gt;</code> titles in selects.</p>
<div class="form-group">
<input class="form-control multiple-datasets" id="multiple-datasets" placeholder="NBA and NHL teams" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>Scrollable Dropdown Menu</h5>
<p class="text-muted">To change the height of your dropdown menu, just wrap your
                            input in some <code>div</code> with <code>custom css</code>                            styles and change necessary css properties or change
                            it in css directly.</p>
<div class="form-group scrollable-dropdown">
<input class="form-control scrollable-dropdown-menu" id="scrollable-dropdown-menu" placeholder="Countries" type="text"/>
</div>
</fieldset>
<fieldset>
<h5>RTL Support</h5>
<p class="text-muted">Typeahead supports <code>RTL</code> also. Wrap your input
                            in any div with <code>text-align: right;</code> property
                            and add dir="rtl" to your input, now your dropdown menu
                            is right aligned.</p>
<div class="form-group rtl-typeahead">
<input class="form-control rtl-support" dir="rtl" id="rtl-support" placeholder="States" type="text"/>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Typeahead js end -->
<!-- Bootstrap Maxlength start -->
<section class="maxlength" id="maxlength">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Bootstrap Maxlength</h4>
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
<div class="row">
<div class="col-xl-6 col-lg-12">
<fieldset class="mb-1">
<h5>Basic Usage</h5>
<p class="text-muted">Default <code>threshold</code> value is 10. The badge will
                            show up right below the input after entering 10 or more
                            chars. This is default value and position for threshold.</p>
<div class="form-group">
<input class="form-control basic-maxlength" id="maxlength-basic" maxlength="20" placeholder="Type 10 Claracters.." type="text"/>
</div>
</fieldset>
<fieldset class="mb-1">
<h5>Show Indicator after 6 chars</h5>
<p class="text-muted">Use the <code>threshold</code> option to show up badge
                            when there are 15 chars or less</p>
<div class="form-group">
<input class="form-control threshold-maxlength" id="maxlength-threshold" maxlength="30" placeholder="Type 15 Claracters.." type="text"/>
</div>
</fieldset>
<fieldset class="mb-1">
<h5>Always Show Indicator</h5>
<p class="text-muted"> if <code>alwaysShow: true</code> the threshold will be
                            ignored and the remaining length indication will be always
                            showing up while typing or on focus on the input.</p>
<div class="form-group">
<input class="form-control always-show-maxlength" id="maxlength-always-show" maxlength="25" placeholder="Type 10 Claracters.." type="text"/>
</div>
</fieldset>
<fieldset class="mb-1">
<h5>Change Indicator Color</h5>
<p class="text-muted"><code>warningClass</code> is the class of the element with
                            the indicator. By default is <code>badge badge-success</code>                            but can be changed to anything you'd like.</p>
<p><code>limitReachedClass</code> is the class the element
                            gets when the limit is reached. By default is <code>badge badge-important badge-danger</code>                            but can be changed to anything you'd like.</p>
<div class="form-group">
<input class="form-control badge-maxlength" id="maxlength-badge" maxlength="25" placeholder="Type 10 Claracters.." type="text"/>
</div>
</fieldset>
<fieldset class="mb-1">
<h5>Change Indicator Format</h5>
<p class="text-muted">Some attributes are used to change badge format. Attributes
                            : <code>separator</code>,<code>preText</code>,<code>postText</code>,and<code>validate</code>.</p>
<div class="form-group">
<input class="form-control badge-text-maxlength" id="maxlength-badge-text" maxlength="25" placeholder="Type 10 Claracters.." type="text"/>
</div>
</fieldset>
</div>
<div class="col-xl-6 col-lg-12">
<fieldset class="mb-1">
<h5>Indicator Position</h5>
<p class="text-muted">The field counter can be positioned at the <code>top</code>,
                            bottom, left or right. All you need to do is specify
                            the placement option, with one of those strings. If none
                            is specified, the positioning will be defauted to 'bottom'.</p>
<div class="form-group">
<input class="form-control position-maxlength" id="maxlength-position" maxlength="25" placeholder="Type 10 Claracters.." type="text"/>
</div>
</fieldset>
<fieldset class="mb-1">
<h5>Indicator on the corners</h5>
<p class="text-muted">You can also place the maxlength indicator on the corners:
                            bottom-right, top-right, <code>top-left</code> and bottom-left.</p>
<div class="form-group">
<input class="form-control position-corner-maxlength" id="maxlength-position-corner" maxlength="25" placeholder="Type 10 Claracters.." type="text"/>
</div>
</fieldset>
<fieldset class="mb-1">
<h5>Indicator Inside</h5>
<p class="text-muted">You can also place the maxlength indicator inside the input:
                            <code>centered-right</code>.</p>
<div class="form-group">
<input class="form-control position-inside-maxlength" id="maxlength-position-inside" maxlength="25" placeholder="Type 10 Claracters.." type="text"/>
</div>
</fieldset>
<fieldset class="mb-1">
<h5>Fully Featured</h5>
<div class="form-group">
<input class="form-control featured-maxlength" id="maxlength-featured" maxlength="50" placeholder="Type 10 Claracters.." type="text"/>
</div>
</fieldset>
<fieldset class="mb-1">
<h5>Support Textarea</h5>
<p class="text-muted">Bootstrap maxlength supports textarea as well as inputs.</p>
<div class="form-group">
<textarea class="form-control textarea-maxlength" id="maxlength-textarea" maxlength="250" name="maxlength-textarea" placeholder="Enter upto 250 characters.." rows="5"></textarea>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Bootstrap Maxlength end -->
</div>
