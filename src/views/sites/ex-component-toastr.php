<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ExComponentToastrAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Toastr</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="ex-component-toastr.html#">Extra Components</a>
</li>
<li class="breadcrumb-item active">Toastr
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="ex-component-toastr.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="ex-component-toastr.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="ex-component-toastr.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="ex-component-toastr.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Types section start -->
<section id="types">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Types</h4>
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
<div class="row">
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
<!-- Position section start -->
<section id="position">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Position</h4>
</div>
</div>
<div class="card">
<div class="card-content">
<div class="card-body">
<div class="row mt-1">
<div class="col-md-6 col-sm-12">
<h5>Top Positions</h5>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="position-top-left" type="button">Top Left</button>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="position-top-center" type="button">Top Center</button>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="position-top-right" type="button">Top Right</button>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="position-top-full" type="button">Top Full Width</button>
</div>
<div class="col-md-6 col-sm-12">
<h5>Bottom Positions</h5>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="position-bottom-left" type="button">Bottom Left</button>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="position-bottom-center" type="button">Bottom Center</button>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="position-bottom-right" type="button">Bottom Right</button>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="position-bottom-full" type="button">Bottom Full Width</button>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Position section end -->
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
<div class="col-md-3 col-sm-12">
<h5>Text Notifications</h5>
<p>This notification just includes text.</p>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="text-notification" type="button">Show Toast</button>
</div>
<div class="col-md-3 col-sm-12">
<h5>Close Button</h5>
<p>Close this notification clicking on close button.</p>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="close-button" type="button">Show Toast</button>
</div>
<div class="col-md-3 col-sm-12">
<h5>Progress Bar</h5>
<p>Visually indicate how long before a toast expires.</p>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="progress-bar" type="button">Show Toast</button>
</div>
<div class="col-md-3 col-sm-12">
<h5>Clear Toast</h5>
<p>Add button to force clearing a toast, ignoring focus.</p>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="clear-toast-btn" type="button">Show Toast</button>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Options section end -->
<!-- Clear toasts section start -->
<section id="clear-toasts">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Clear Toasts</h4>
</div>
</div>
<div class="card">
<div class="card-content">
<div class="card-body">
<div class="row mt-1">
<div class="col-md-6 col-sm-12">
<h5>Remove</h5>
<p>Immediately remove current toasts without using animation.</p>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="show-remove-toast" type="button">Show Toast</button>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="remove-toast" type="button">Remove Toast</button>
</div>
<div class="col-md-6 col-sm-12">
<h5>Clear</h5>
<p>Remove current toasts using animation.</p>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="show-clear-toast" type="button">Show Toast</button>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="clear-toast" type="button">Clear Toast</button>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Clear toasts section end -->
<!-- Duration & Timeout section start -->
<section id="duration-timeout">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Duration &amp; Timeout</h4>
</div>
</div>
<div class="card">
<div class="card-content">
<div class="card-body">
<div class="row mt-1">
<div class="col-md-6 col-sm-12">
<h5>Show .5s</h5>
<p>You can define via <code>showDuration</code> what amount of time
                      will it take to show a message.</p>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="fast-duration" type="button">Show Toast</button>
</div>
<div class="col-md-6 col-sm-12">
<h5>Hide 3s</h5>
<p>You can define via <code>hideDuration</code> what amount of time
                      will it take to hide a message.</p>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="slow-duration" type="button">Show Toast</button>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<h5>Timeout 5s</h5>
<p>You can define via <code>timeout</code> for what amount of time
                      in milliseconds a message is visible.</p>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="timeout" type="button">Show Toast</button>
</div>
<div class="col-md-6 col-sm-12">
<h5>Sticky</h5>
<p>You can also create a sticky message by setting the <code>timeout</code>                      to <code>0</code>.</p>
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="sticky" type="button">Show Toast</button>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Duration & Timeout section end -->
<!-- Animation section start -->
<section id="animation">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Show / Hide Animation</h4>
<p>Use the jQuery <code>show/hide</code> method of your choice. These
                default to <code>fadeIn/fadeOut</code>. The methods <code>fadeIn/fadeOut</code>,
                <code>slideDown/slideUp</code>, and <code>show/hide</code> are built
                into jQuery.</p>
</div>
</div>
<div class="card">
<div class="card-content">
<div class="card-body">
<div class="row mt-1">
<div class="col-md-6 col-sm-12">
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="slide-toast" type="button">slideDown - slideUp</button>
</div>
<div class="col-md-6 col-sm-12">
<button class="btn btn-lg btn-block btn-outline-primary mb-2" id="fade-toast" type="button">fadeIn - fadeOut</button>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Animation section end -->
</div>
