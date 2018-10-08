<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ExComponentSweetAlertsAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Sweet Alerts</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="ex-component-sweet-alerts.html#">Extra Components</a>
</li>
<li class="breadcrumb-item active">Sweet Alerts
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="ex-component-sweet-alerts.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="ex-component-sweet-alerts.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="ex-component-sweet-alerts.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="ex-component-sweet-alerts.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Basic example section start -->
<section id="basic-examples">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Basic Examples</h4>
<p>SweetAlert automatically centers itself on the page and looks great
                no matter if you're using a desktop computer, mobile or tablet. It's
                even highly customizable, as you can see below!</p>
</div>
</div>
<div class="card">
<div class="card-content">
<div class="card-body">
<div class="row mt-1">
<div class="col-md-4 col-sm-12">
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="basic-alert" type="button">Basic</button>
</div>
<div class="col-md-4 col-sm-12">
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="with-title" type="button">With Title</button>
</div>
<div class="col-md-4 col-sm-12">
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="html-alert" type="button">HTML</button>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Basic example section end -->
<!-- Types section start -->
<section id="types">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Types</h4>
<p>The type of the modal. SweetAlert comes with 4 built-in types which
                will show a corresponding icon animation: "warning", "error", "success"
                and "info". You can also set it as "input" to get a prompt modal.
                It can either be put in the object under the key "icon" or passed
                as the third parameter of the function.</p>
</div>
</div>
<div class="card">
<div class="card-content">
<div class="card-body">
<div class="row mt-1">
<div class="col-md-6 col-sm-12">
<button class="btn btn-lg btn-block btn-outline-success mb-2" id="type-success" type="button">Success</button>
</div>
<div class="col-md-6 col-sm-12">
<button class="btn btn-lg btn-block btn-outline-info mb-2" id="type-info" type="button">Info</button>
</div>
</div>
<div class="row mt-2">
<div class="col-md-6 col-sm-12">
<button class="btn btn-lg btn-block btn-outline-warning mb-2" id="type-warning" type="button">Warning</button>
</div>
<div class="col-md-6 col-sm-12">
<button class="btn btn-lg btn-block btn-outline-danger mb-2" id="type-error" type="button">Error</button>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Types section end -->
<!-- Options section start -->
<section id="options">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Options</h4>
</div>
</div>
<div class="card">
<div class="card-content">
<div class="card-body">
<div class="row mt-1">
<div class="col-md-4 col-sm-12">
<h5>Custom Icon</h5>
<p><code>icon</code> is used to add a customized icon for the modal.
                      Should contain a string with the path to the image.</p>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="custom-icon" type="button">Custom Icon</button>
</div>
<div class="col-md-4 col-sm-12">
<h5>Auto Close Timer</h5>
<p>A message with auto close timer. <code>timer</code> is default
                      set to <code>null</code>. You can set timer in ms (milliseconds).</p>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="auto-close" type="button">Auto Close</button>
</div>
<div class="col-md-4 col-sm-12">
<h5>Close on click outside</h5>
<p>If <code>closeOnClickOutside</code> is set to <code>true</code>,
                      the user can dismiss the modal by clicking outside it.</p>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="outside-click" type="button">Click Outside</button>
</div>
</div>
<div class="row mt-2">
<div class="col-md-4 col-sm-12">
<h5>Show Cancel Button</h5>
<p>You can set <code>buttons: true</code> to show both buttons,
                      or <code>buttons: false</code> to hide all buttons. By default,
                      only the confirm button is shown.</p>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="cancel-button" type="button">Cancel Button</button>
</div>
<div class="col-md-4 col-sm-12">
<h5>Prompt Function</h5>
<p>A replacement for the "prompt" function. You can set <code>content</code>                      as "input" to get a prompt modal.</p>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="prompt-function" type="button">Prompt</button>
</div>
<div class="col-md-4 col-sm-12">
<h5>Ajax Request</h5>
<p>Search for a movie. e.g. "La La Land" to view the AJAX request
                      for example.</p>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="ajax-request" type="button">Ajax</button>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Options section end -->
<!-- Confirm option section start -->
<section id="confirm-option">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Confirm Options</h4>
</div>
</div>
<div class="card">
<div class="card-content">
<div class="card-body">
<div class="row mt-1">
<div class="col-md-6 col-sm-12">
<h5>Confirm Button Text</h5>
<p>Use this to change the text on the "Confirm"-button. If <code>showCancelButton</code>                      is set as <code>true</code>, the confirm button will automatically
                      show "Confirm" instead of "OK".</p>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="confirm-text" type="button">Confirm Text</button>
</div>
<div class="col-md-6 col-sm-12">
<h5>Confirm Button Color</h5>
<p>Use <code>className: "btn-warning"</code> option to change the
                      background color of the "Confirm"-button.</p>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="confirm-color" type="button">Confirm Button Color</button>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Confirm option section end -->
</div>
