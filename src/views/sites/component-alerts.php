<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ComponentAlertsAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Alerts</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="component-alerts.html#">Components</a>
</li>
<li class="breadcrumb-item active">Alerts
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="component-alerts.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="component-alerts.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="component-alerts.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="component-alerts.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Basic Alerts start -->
<section id="basic-alerts">
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Alerts</h4>
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
<p>Alerts are available for any length of text, as well as an optional
                      dismiss button. Add <code>.alert.alert-COLOR</code> classes
                      for alert with all theme colors.</p>
<h6>Primary Alert</h6>
<div class="alert alert-primary mb-2" role="alert">
<strong>Good Morning!</strong> Start your day with some alerts.
                    </div>
<h6>Secondary Alert</h6>
<div class="alert alert-secondary mb-2" role="alert">
<strong>Hello!</strong> This is secondary alert - check it out.
                    </div>
<h6>Success Alert</h6>
<div class="alert alert-success mb-2" role="alert">
<strong>Well done!</strong> You successfully read this important alert
                      message.
                    </div>
<h6>Danger Alert</h6>
<div class="alert alert-danger mb-2" role="alert">
<strong>Oh snap!</strong> Change a few things up and submit again.
                    </div>
<h6>Warning Alert</h6>
<div class="alert alert-warning mb-2" role="alert">
<strong>Warning!</strong> Better check yourself, you're not looking
                      too good.
                    </div>
<h6>Info Alert</h6>
<div class="alert alert-info mb-2" role="alert">
<strong>Heads up!</strong> This alert needs your attention, but it's
                      not super important.
                    </div>
<h6>Light Alert</h6>
<div class="alert alert-light mb-2" role="alert">
<strong>Hello!</strong> This is light alert - check it out.
                    </div>
<h6>Dark Alert</h6>
<div class="alert alert-dark mb-2" role="alert">
<strong>Hello!</strong> This is dark alert - check it out.
                    </div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Dismissible Alerts</h4>
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
<p>Add a dismiss button and the <code>.alert-dismissible</code>                      class, which adds extra padding to the right of the alert and
                      positions the <code>.close</code> button.</p>
<h6>Primary Alert</h6>
<div class="alert alert-primary alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Good Morning!</strong> Start <a class="alert-link" href="component-alerts.html#">your day</a>                      with some alerts.
                    </div>
<h6>Secondary Alert</h6>
<div class="alert alert-secondary alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Hello!</strong> This is <a class="alert-link" href="component-alerts.html#">secondary alert</a>                      - check it out.
                    </div>
<h6>Success Alert</h6>
<div class="alert alert-success alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Well done!</strong> You successfully read this <a class="alert-link" href="component-alerts.html#">important</a> alert message.
                    </div>
<h6>Danger Alert</h6>
<div class="alert alert-danger alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Oh snap!</strong> Change a <a class="alert-link" href="component-alerts.html#">few things up</a>                      and submit again.
                    </div>
<h6>Warning Alert</h6>
<div class="alert alert-warning alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Warning!</strong> Better check yourself, you're not <a class="alert-link" href="component-alerts.html#">looking too good</a>.
                    </div>
<h6>Info Alert</h6>
<div class="alert alert-info alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Heads up!</strong> This alert needs <a class="alert-link" href="component-alerts.html#">your attention</a>,
                      but it's not super important.
                    </div>
<h6>Light Alert</h6>
<div class="alert alert-light alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Hello!</strong> This is <a class="alert-link" href="component-alerts.html#">light alert</a>                      - check it out.
                    </div>
<h6>Dark Alert</h6>
<div class="alert alert-dark alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Hello!</strong> This is <a class="alert-link" href="component-alerts.html#">dark alert</a>                      - check it out.
                    </div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Basic Alerts end -->
<!-- Alerts with No Border start -->
<section class="mb-2" id="alert-border-0">
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Alerts with Links</h4>
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
<p> Add <code>.alert-link</code> class to add links to alerts.</p>
<h6>Primary Alert</h6>
<div class="alert alert-primary mb-2" role="alert">
<strong>Good Morning!</strong> Start <a class="alert-link" href="component-alerts.html#">your day</a>                      with some alerts.
                    </div>
<h6>Secondary Alert</h6>
<div class="alert alert-secondary mb-2" role="alert">
<strong>Hello!</strong> This is <a class="alert-link" href="component-alerts.html#">secondary alert</a>                      - check it out.
                    </div>
<h6>Success Alert</h6>
<div class="alert alert-success mb-2" role="alert">
<strong>Well done!</strong> You successfully read this <a class="alert-link" href="component-alerts.html#">important</a> alert message.
                    </div>
<h6>Danger Alert</h6>
<div class="alert alert-danger mb-2" role="alert">
<strong>Oh snap!</strong> Change a <a class="alert-link" href="component-alerts.html#">few things up</a>                      and submit again.
                    </div>
<h6>Warning Alert</h6>
<div class="alert alert-warning mb-2" role="alert">
<strong>Warning!</strong> Better check yourself, you're not <a class="alert-link" href="component-alerts.html#">looking too good</a>.
                    </div>
<h6>Info Alert</h6>
<div class="alert alert-info mb-2" role="alert">
<strong>Heads up!</strong> This alert needs <a class="alert-link" href="component-alerts.html#">your attention</a>,
                      but it's not super important.
                    </div>
<h6>Light Alert</h6>
<div class="alert alert-light mb-2" role="alert">
<strong>Hello!</strong> This is <a class="alert-link" href="component-alerts.html#">light alert</a>                      - check it out.
                    </div>
<h6>Dark Alert</h6>
<div class="alert alert-dark mb-2" role="alert">
<strong>Hello!</strong> This is <a class="alert-link" href="component-alerts.html#">dark alert</a>                      - check it out.
                    </div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Alerts with No Border</h4>
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
<p> Add <code>.border-0</code> class along with <code>.alert</code>                      class for alerts with no borders.</p>
<h6>Primary Alert</h6>
<div class="alert alert-primary border-0 mb-2" role="alert">
<strong>Good Morning!</strong> Start your day with some alerts.
                    </div>
<h6>Secondary Alert</h6>
<div class="alert alert-secondary border-0 mb-2" role="alert">
<strong>Hello!</strong> This is secondary alert - check it out.
                    </div>
<h6>Success Alert</h6>
<div class="alert alert-success border-0 mb-2" role="alert">
<strong>Well done!</strong> You successfully read this important alert
                      message.
                    </div>
<h6>Danger Alert</h6>
<div class="alert alert-danger border-0 mb-2" role="alert">
<strong>Oh snap!</strong> Change a few things up and submit again.
                    </div>
<h6>Warning Alert</h6>
<div class="alert alert-warning border-0 mb-2" role="alert">
<strong>Warning!</strong> Better check yourself, you're not looking
                      too good.
                    </div>
<h6>Info Alert</h6>
<div class="alert alert-info border-0 mb-2" role="alert">
<strong>Heads up!</strong> This alert needs your attention, but it's
                      not super important.
                    </div>
<h6>Light Alert</h6>
<div class="alert alert-light border-0 mb-2" role="alert">
<strong>Hello!</strong> This is light alert - check it out.
                    </div>
<h6>Dark Alert</h6>
<div class="alert alert-dark border-0 mb-2" role="alert">
<strong>Hello!</strong> This is dark alert - check it out.
                    </div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Alerts with No Border end -->
<!-- Alerts with icons start -->
<section class="mb-2" id="alerts-with-icons">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Alerts with icons</h4>
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
<p>To add left/right icons to the alert, use class <code>.alert-icon-left</code>                      or <code>alert-icon-right</code> with icon class <code>.alert-icon</code>.</p>
<div class="row">
<div class="col-xl-6 col-lg-12">
<h6>Primary Alert</h6>
<div class="alert alert-icon-left alert-primary alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-heart"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Good Morning!</strong> Start <a class="alert-link" href="component-alerts.html#">your day</a>                          with some alerts.
                        </div>
<h6>Success Alert</h6>
<div class="alert alert-icon-left alert-success alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-thumbs-o-up"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Well done!</strong> You successfully read this <a class="alert-link" href="component-alerts.html#">important</a> alert message.
                        </div>
<h6>Danger Alert</h6>
<div class="alert alert-icon-left alert-danger alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-thumbs-o-down"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Oh snap!</strong> Change a <a class="alert-link" href="component-alerts.html#">few things up</a>                          and submit again.
                        </div>
</div>
<div class="col-xl-6 col-lg-12">
<h6>Warning Alert</h6>
<div class="alert alert-icon-right alert-warning alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-warning"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Warning!</strong> Better check yourself, you're not
                          <a class="alert-link" href="component-alerts.html#">looking too good</a>.
                        </div>
<h6>Info Alert</h6>
<div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-info-circle"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Heads up!</strong> This alert needs <a class="alert-link" href="component-alerts.html#">your attention</a>,
                          but it's not super important.
                        </div>
<h6>Custom Alert</h6>
<div class="alert alert-icon-right alert-blue-grey alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-photo"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Great!</strong> You are using some <a class="alert-link" href="component-alerts.html#">gorgeous</a>                          custom colors.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Alerts with icons end -->
<!-- Alerts with icons & Arrow start -->
<section class="mb-2" id="alerts-with-icons-arrow">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Alerts with icons &amp; Arrow</h4>
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
<p>To add left/right icons with arrow to the alert, use class <code>.alert-arrow-left</code>                      or <code>alert-arrow-right</code> as required.</p>
<div class="row">
<div class="col-xl-6 col-lg-12">
<h6>Primary Alert</h6>
<div class="alert alert-icon-left alert-arrow-left alert-primary alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-heart"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Good Morning!</strong> Start <a class="alert-link" href="component-alerts.html#">your day</a>                          with some alerts.
                        </div>
<h6>Success Alert</h6>
<div class="alert alert-icon-left alert-arrow-left alert-success alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-thumbs-o-up"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Well done!</strong> You successfully read this <a class="alert-link" href="component-alerts.html#">important</a> alert message.
                        </div>
<h6>Danger Alert</h6>
<div class="alert alert-icon-left alert-arrow-left alert-danger alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-thumbs-o-down"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Oh snap!</strong> Change a <a class="alert-link" href="component-alerts.html#">few things up</a>                          and submit again.
                        </div>
</div>
<div class="col-xl-6 col-lg-12">
<h6>Warning Alert</h6>
<div class="alert alert-icon-right alert-arrow-right alert-warning alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-warning"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Warning!</strong> Better check yourself, you're not
                          <a class="alert-link" href="component-alerts.html#">looking too good</a>.
                        </div>
<h6>Info Alert</h6>
<div class="alert alert-icon-right alert-arrow-right alert-info alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-info-circle"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Heads up!</strong> This alert needs <a class="alert-link" href="component-alerts.html#">your attention</a>,
                          but it's not super important.
                        </div>
<h6>Custom Alert</h6>
<div class="alert alert-icon-right alert-arrow-right alert-blue-grey alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-photo"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Great!</strong> You are using some <a class="alert-link" href="component-alerts.html#">gorgeous</a>                          custom colors.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Alerts with icons & Arrow end -->
<!-- Solid Alerts start -->
<section id="solid-alerts">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Solid Alerts</h4>
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
<p>To use solid alert, add background color class to the <code>.alert</code>                      container class. Alerts also support custom color classes from
                      theme color system. To use a custom color, add <code>.bg-*</code>                      to the <code>.alert</code> class.</p>
<div class="row">
<div class="col-xl-6 col-lg-12">
<h6>Primary Alert</h6>
<div class="alert bg-primary alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Good Morning!</strong> Start <a class="alert-link" href="component-alerts.html#">your day</a>                          with some alerts.
                        </div>
<h6>Success Alert</h6>
<div class="alert bg-success alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Well done!</strong> You successfully read this <a class="alert-link" href="component-alerts.html#">important</a> alert message.
                        </div>
<h6>Danger Alert</h6>
<div class="alert bg-danger alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Oh snap!</strong> Change a <a class="alert-link" href="component-alerts.html#">few things up</a>                          and submit again.
                        </div>
</div>
<div class="col-xl-6 col-lg-12">
<h6>Warning Alert</h6>
<div class="alert bg-warning alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Warning!</strong> Better check yourself, you're not
                          <a class="alert-link" href="component-alerts.html#">looking too good</a>.
                        </div>
<h6>Info Alert</h6>
<div class="alert bg-info alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Heads up!</strong> This alert needs <a class="alert-link" href="component-alerts.html#">your attention</a>,
                          but it's not super important.
                        </div>
<h6>Custom Alert</h6>
<div class="alert bg-cyan alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Great!</strong> You are using some <a class="alert-link" href="component-alerts.html#">gorgeous</a>                          custom colors.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Solid Alerts end -->
<!-- Solid Alerts with icons start -->
<section id="solid-alerts-with-icons">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Solid Alerts with icons</h4>
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
<p>To use solid alert with icons, add class <code>.alert-icon-left</code>                      or <code>alert-icon-right</code> to <code>.alert</code> container
                      class.
                    </p>
<div class="row">
<div class="col-xl-6 col-lg-12">
<h6>Primary Alert</h6>
<div class="alert bg-primary alert-icon-left alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-heart"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Good Morning!</strong> Start <a class="alert-link" href="component-alerts.html#">your day</a>                          with some alerts.
                        </div>
<h6>Success Alert</h6>
<div class="alert bg-success alert-icon-left alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-thumbs-o-up"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Well done!</strong> You successfully read this <a class="alert-link" href="component-alerts.html#">important</a> alert message.
                        </div>
<h6>Danger Alert</h6>
<div class="alert bg-danger alert-icon-left alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-thumbs-o-down"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Oh snap!</strong> Change a <a class="alert-link" href="component-alerts.html#">few things up</a>                          and submit again.
                        </div>
</div>
<div class="col-xl-6 col-lg-12">
<h6>Warning Alert</h6>
<div class="alert bg-warning alert-icon-right alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-warning"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Warning!</strong> Better check yourself, you're not
                          <a class="alert-link" href="component-alerts.html#">looking too good</a>.
                        </div>
<h6>Info Alert</h6>
<div class="alert bg-info alert-icon-right alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-info-circle"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Heads up!</strong> This alert needs <a class="alert-link" href="component-alerts.html#">your attention</a>,
                          but it's not super important.
                        </div>
<h6>Custom Alert</h6>
<div class="alert bg-cyan alert-icon-right alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-photo"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Great!</strong> You are using some <a class="alert-link" href="component-alerts.html#">gorgeous</a>                          custom colors.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Solid Alerts with icons end -->
<!-- Solid Alerts with icons & Arrow start -->
<section id="solid-alerts-with-icons-arrows">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Solid Alerts with icons &amp; arrow</h4>
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
<p>To use solid alert with icons, add class <code>.alert-arrow-left</code>                      or <code>alert-arrow-right</code> with icon classes to <code>.alert</code>                      container class.</p>
<div class="row">
<div class="col-xl-6 col-lg-12">
<h6>Primary Alert</h6>
<div class="alert bg-primary alert-icon-left alert-arrow-left alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-heart"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Good Morning!</strong> Start <a class="alert-link" href="component-alerts.html#">your day</a>                          with some alerts.
                        </div>
<h6>Success Alert</h6>
<div class="alert bg-success alert-icon-left alert-arrow-left alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-thumbs-o-up"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Well done!</strong> You successfully read this <a class="alert-link" href="component-alerts.html#">important</a> alert message.
                        </div>
<h6>Danger Alert</h6>
<div class="alert bg-danger alert-icon-left alert-arrow-left alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-thumbs-o-down"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Oh snap!</strong> Change a <a class="alert-link" href="component-alerts.html#">few things up</a>                          and submit again.
                        </div>
</div>
<div class="col-xl-6 col-lg-12">
<h6>Warning Alert</h6>
<div class="alert bg-warning alert-icon-right alert-arrow-right alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-warning"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Warning!</strong> Better check yourself, you're not
                          <a class="alert-link" href="component-alerts.html#">looking too good</a>.
                        </div>
<h6>Info Alert</h6>
<div class="alert bg-info alert-icon-right alert-arrow-right alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-info-circle"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Heads up!</strong> This alert needs <a class="alert-link" href="component-alerts.html#">your attention</a>,
                          but it's not super important.
                        </div>
<h6>Custom Alert</h6>
<div class="alert bg-cyan alert-icon-right alert-arrow-right alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-photo"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Great!</strong> You are using some <a class="alert-link" href="component-alerts.html#">gorgeous</a>                          custom colors.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Solid Alerts with icons & Arrow end -->
<!-- Round Alerts start -->
<section id="round-alerts">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Round Alerts</h4>
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
<p>To use round alert, add class <code>.round</code> to <code>.alert</code>                      container class.</p>
<div class="row">
<div class="col-xl-6 col-lg-12">
<h6>Primary Alert</h6>
<div class="alert round bg-primary alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Good Morning!</strong> Start <a class="alert-link" href="component-alerts.html#">your day</a>                          with some alerts.
                        </div>
<h6>Success Alert</h6>
<div class="alert round bg-success alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Well done!</strong> You successfully read this <a class="alert-link" href="component-alerts.html#">important</a> alert message.
                        </div>
<h6>Danger Alert</h6>
<div class="alert round bg-danger alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Oh snap!</strong> Change a <a class="alert-link" href="component-alerts.html#">few things up</a>                          and submit again.
                        </div>
</div>
<div class="col-xl-6 col-lg-12">
<h6>Warning Alert</h6>
<div class="alert round bg-warning alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Warning!</strong> Better check yourself, you're not
                          <a class="alert-link" href="component-alerts.html#">looking too good</a>.
                        </div>
<h6>Info Alert</h6>
<div class="alert round bg-info alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Heads up!</strong> This alert needs <a class="alert-link" href="component-alerts.html#">your attention</a>,
                          but it's not super important.
                        </div>
<h6>Custom Alert</h6>
<div class="alert round bg-cyan alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Great!</strong> You are using some <a class="alert-link" href="component-alerts.html#">gorgeous</a>                          custom colors.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Round Alerts end -->
<!-- Round Alerts with icons start -->
<section id="round-alerts-with-icons">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Round Alerts with icons</h4>
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
<p>To use round alert, add class <code>.round</code> to <code>.alert</code>                      container class. To use Icons, add class <code>.alert-icon-left</code>                      or <code>alert-icon-right</code> to <code>.alert</code> container
                      class.
                    </p>
<div class="row">
<div class="col-xl-6 col-lg-12">
<h6>Primary Alert</h6>
<div class="alert round bg-primary alert-icon-left alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-heart"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Good Morning!</strong> Start <a class="alert-link" href="component-alerts.html#">your day</a>                          with some alerts.
                        </div>
<h6>Success Alert</h6>
<div class="alert round bg-success alert-icon-left alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-thumbs-o-up"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Well done!</strong> You successfully read this <a class="alert-link" href="component-alerts.html#">important</a> alert message.
                        </div>
<h6>Danger Alert</h6>
<div class="alert round bg-danger alert-icon-left alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-thumbs-o-down"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Oh snap!</strong> Change a <a class="alert-link" href="component-alerts.html#">few things up</a>                          and submit again.
                        </div>
</div>
<div class="col-xl-6 col-lg-12">
<h6>Warning Alert</h6>
<div class="alert round bg-warning alert-icon-right alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-warning"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Warning!</strong> Better check yourself, you're not
                          <a class="alert-link" href="component-alerts.html#">looking too good</a>.
                        </div>
<h6>Info Alert</h6>
<div class="alert round bg-info alert-icon-right alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-info-circle"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Heads up!</strong> This alert needs <a class="alert-link" href="component-alerts.html#">your attention</a>,
                          but it's not super important.
                        </div>
<h6>Custom Alert</h6>
<div class="alert round bg-cyan alert-icon-right alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-photo"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Great!</strong> You are using some <a class="alert-link" href="component-alerts.html#">gorgeous</a>                          custom colors.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Round Alerts with icons end -->
<!-- Round Alerts with icons & Arrow start -->
<section id="round-alerts-with-icons-arrows">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Round Alerts with icons &amp; arrow</h4>
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
<p>To use round alert, add class <code>.round</code> to <code>.alert</code>                      container class. To add left/right icons with arrow to the
                      alert, use class <code>.alert-arrow-left</code> or <code>alert-arrow-right</code>                      with icon classes.</p>
<div class="row">
<div class="col-xl-6 col-lg-12">
<h6>Primary Alert</h6>
<div class="alert round bg-primary alert-icon-left alert-arrow-left alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-heart"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Good Morning!</strong> Start <a class="alert-link" href="component-alerts.html#">your day</a>                          with some alerts.
                        </div>
<h6>Success Alert</h6>
<div class="alert round bg-success alert-icon-left alert-arrow-left alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-thumbs-o-up"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Well done!</strong> You successfully read this <a class="alert-link" href="component-alerts.html#">important</a> alert message.
                        </div>
<h6>Danger Alert</h6>
<div class="alert round bg-danger alert-icon-left alert-arrow-left alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-thumbs-o-down"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Oh snap!</strong> Change a <a class="alert-link" href="component-alerts.html#">few things up</a>                          and submit again.
                        </div>
</div>
<div class="col-xl-6 col-lg-12">
<h6>Warning Alert</h6>
<div class="alert round bg-warning alert-icon-right alert-arrow-right alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-warning"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Warning!</strong> Better check yourself, you're not
                          <a class="alert-link" href="component-alerts.html#">looking too good</a>.
                        </div>
<h6>Info Alert</h6>
<div class="alert round bg-info alert-icon-right alert-arrow-right alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-info-circle"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Heads up!</strong> This alert needs <a class="alert-link" href="component-alerts.html#">your attention</a>,
                          but it's not super important.
                        </div>
<h6>Custom Alert</h6>
<div class="alert round bg-cyan alert-icon-right alert-arrow-right alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="la la-photo"></i></span>
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<strong>Great!</strong> You are using some <a class="alert-link" href="component-alerts.html#">gorgeous</a>                          custom colors.
                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Round Alerts with icons & Arrow end -->
<!-- Alerts with Additional Content start -->
<section id="additional-content-alerts">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Alerts with Additional Content</h4>
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
<p>Alerts can also contain additional HTML elements like headings
                      and paragraphs.</p>
<div class="row">
<div class="col-xl-6 col-lg-12">
<h6>Primary Alert</h6>
<div class="alert alert-primary alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<h4 class="alert-heading mb-2">Good Morning!</h4>
<p>Aww yeah, you successfully read this <a class="alert-link" href="component-alerts.html#">important alert</a>                            message. This example text is going to run a bit longer
                            so that you can see how spacing within an alert works
                            with this kind of content.</p>
<p class="mb-0">Whenever you need to, be sure to use margin utilities to
                            keep things nice and tidy.</p>
</div>
<h6>No Border Success Alert</h6>
<div class="alert alert-success border-0 alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<h4 class="alert-heading mb-2">Well done!</h4>
<p>Aww yeah, you successfully read this important alert message.
                            This example text is going to run a bit longer so that
                            you can see how <a class="alert-link" href="component-alerts.html#">spacing within</a>                            an alert works with this kind of content.</p>
<p class="mb-0">Whenever you need to, be sure to use margin utilities to
                            keep things nice and tidy.</p>
</div>
<h6>Solid Danger Alert</h6>
<div class="alert alert-danger alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<h4 class="alert-heading mb-2">Oh snap!</h4>
<p>Aww yeah, you successfully read this important alert message.
                            This example text is going to run a bit longer so that
                            you can see how spacing within an alert works with this
                            kind of content.</p>
<p class="mb-0">Whenever you need to, be sure to use margin utilities to
                            keep things <a class="alert-link" href="component-alerts.html#">nice and tidy</a>.</p>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<h6>Warning Alert</h6>
<div class="alert alert-warning alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<h4 class="alert-heading mb-2">Warning!</h4>
<p>Aww yeah, you successfully read this important alert message.
                            This example text is <a class="alert-link" href="component-alerts.html#">going to run</a>                            a bit longer so that you can see how spacing within an
                            alert works with this kind of content.</p>
<p class="mb-0">Whenever you need to, be sure to use margin utilities to
                            keep things nice and tidy.</p>
</div>
<h6>No Border Info Alert</h6>
<div class="alert alert-info border-0 alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<h4 class="alert-heading mb-2">Heads up!</h4>
<p>Aww yeah, you successfully read this important alert message.
                            This example text is going to run a bit longer so that
                            you can see how spacing within <a class="alert-link" href="component-alerts.html#">an alert</a>                            works with this kind of content.</p>
<p class="mb-0">Whenever you need to, be sure to use margin utilities to
                            keep things nice and tidy.</p>
</div>
<h6>Solid Custom Alert</h6>
<div class="alert alert-amber alert-dismissible mb-2" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
</button>
<h4 class="alert-heading mb-2">Great!</h4>
<p>Aww yeah, you successfully read this important alert message.
                            This example text is going to run a bit longer so that
                            you can see how spacing within an alert works with this
                            kind of content.</p>
<p class="mb-0">Whenever you need to, be sure to use margin <a class="alert-link" href="component-alerts.html#">utilities</a> to keep things nice
                            and tidy.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Alerts with Additional Content end -->
</div>
</div>
</div>