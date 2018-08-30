<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\TimelineHorizontalAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Horizontal Timeline</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="timeline-horizontal.html#">Gallery</a>
</li>
<li class="breadcrumb-item active">Timeline Horizontal
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="timeline-horizontal.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="timeline-horizontal.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="timeline-horizontal.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="timeline-horizontal.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Basic Horizontal Timeline -->
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Horizontal Timeline</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body">
<div class="card-text">
<p>This horizontal time line contain just date based post timeline.</p>
<section class="cd-horizontal-timeline">
<div class="timeline">
<div class="events-wrapper">
<div class="events">
<ol>
<li><a class="selected" data-date="16/01/2015" href="timeline-horizontal.html#0">16 Jan</a></li>
<li><a data-date="28/02/2015" href="timeline-horizontal.html#0">28 Feb</a></li>
<li><a data-date="20/04/2015" href="timeline-horizontal.html#0">20 Mar</a></li>
<li><a data-date="20/05/2015" href="timeline-horizontal.html#0">20 May</a></li>
<li><a data-date="09/07/2015" href="timeline-horizontal.html#0">09 Jul</a></li>
<li><a data-date="30/08/2015" href="timeline-horizontal.html#0">30 Aug</a></li>
<li><a data-date="15/09/2015" href="timeline-horizontal.html#0">15 Sep</a></li>
<li><a data-date="01/11/2015" href="timeline-horizontal.html#0">01 Nov</a></li>
<li><a data-date="10/12/2015" href="timeline-horizontal.html#0">10 Dec</a></li>
<li><a data-date="19/01/2016" href="timeline-horizontal.html#0">29 Jan</a></li>
<li><a data-date="03/03/2016" href="timeline-horizontal.html#0">3 Mar</a></li>
</ol>
<span aria-hidden="true" class="filling-line"></span>
</div>
<!-- .events -->
</div>
<!-- .events-wrapper -->
<ul class="cd-timeline-navigation">
<li><a class="prev inactive" href="timeline-horizontal.html#0">Prev</a></li>
<li><a class="next" href="timeline-horizontal.html#0">Next</a></li>
</ul>
<!-- .cd-timeline-navigation -->
</div>
<!-- .timeline -->
<div class="events-content">
<ol>
<li class="selected" data-date="16/01/2015">
<h2>Horizontal Timeline</h2>
<h3 class="text-muted mb-1">
<em>January 16th, 2015</em>
</h3>
<p class="lead">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                          fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                          aspernatur at, eaque hic repellendus sit dicta consequatur
                          quae, ut harum ipsam molestias maxime non nisi reiciendis
                          eligendi! Doloremque quia pariatur harum ea amet quibusdam
                          quisquam, quae, temporibus dolores porro doloribus.
                        </p>
</li>
<li data-date="28/02/2015">
<h2>Event title here</h2>
<h3 class="text-muted mb-1">
<em>February 28th, 2015</em>
</h3>
<p class="lead">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                          fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                          aspernatur at, eaque hic repellendus sit dicta consequatur
                          quae, ut harum ipsam molestias maxime non nisi reiciendis
                          eligendi! Doloremque quia pariatur harum ea amet quibusdam
                          quisquam, quae, temporibus dolores porro doloribus.
                        </p>
</li>
<li data-date="20/04/2015">
<h2>Event title here</h2>
<h3 class="text-muted mb-1">
<em>March 20th, 2015</em>
</h3>
<p class="lead">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                          fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                          aspernatur at, eaque hic repellendus sit dicta consequatur
                          quae, ut harum ipsam molestias maxime non nisi reiciendis
                          eligendi! Doloremque quia pariatur harum ea amet quibusdam
                          quisquam, quae, temporibus dolores porro doloribus.
                        </p>
</li>
<li data-date="20/05/2015">
<h2>Event title here</h2>
<h3 class="text-muted mb-1">
<em>May 20th, 2015</em>
</h3>
<p class="lead">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                          fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                          aspernatur at, eaque hic repellendus sit dicta consequatur
                          quae, ut harum ipsam molestias maxime non nisi reiciendis
                          eligendi! Doloremque quia pariatur harum ea amet quibusdam
                          quisquam, quae, temporibus dolores porro doloribus.
                        </p>
</li>
<li data-date="09/07/2015">
<h2>Event title here</h2>
<h3 class="text-muted mb-1">
<em>July 9th, 2015</em>
</h3>
<p class="lead">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                          fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                          aspernatur at, eaque hic repellendus sit dicta consequatur
                          quae, ut harum ipsam molestias maxime non nisi reiciendis
                          eligendi! Doloremque quia pariatur harum ea amet quibusdam
                          quisquam, quae, temporibus dolores porro doloribus.
                        </p>
</li>
<li data-date="30/08/2015">
<h2>Event title here</h2>
<h3 class="text-muted mb-1">
<em>August 30th, 2015</em>
</h3>
<p class="lead">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                          fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                          aspernatur at, eaque hic repellendus sit dicta consequatur
                          quae, ut harum ipsam molestias maxime non nisi reiciendis
                          eligendi! Doloremque quia pariatur harum ea amet quibusdam
                          quisquam, quae, temporibus dolores porro doloribus.
                        </p>
</li>
<li data-date="15/09/2015">
<h2>Event title here</h2>
<h3 class="text-muted mb-1">
<em>September 15th, 2015</em>
</h3>
<p class="lead">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                          fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                          aspernatur at, eaque hic repellendus sit dicta consequatur
                          quae, ut harum ipsam molestias maxime non nisi reiciendis
                          eligendi! Doloremque quia pariatur harum ea amet quibusdam
                          quisquam, quae, temporibus dolores porro doloribus.
                        </p>
</li>
<li data-date="01/11/2015">
<h2>Event title here</h2>
<h3 class="text-muted mb-1">
<em>November 1st, 2015</em>
</h3>
<p class="lead">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                          fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                          aspernatur at, eaque hic repellendus sit dicta consequatur
                          quae, ut harum ipsam molestias maxime non nisi reiciendis
                          eligendi! Doloremque quia pariatur harum ea amet quibusdam
                          quisquam, quae, temporibus dolores porro doloribus.
                        </p>
</li>
<li data-date="10/12/2015">
<h2>Event title here</h2>
<h3 class="text-muted mb-1">
<em>December 10th, 2015</em>
</h3>
<p class="lead">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                          fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                          aspernatur at, eaque hic repellendus sit dicta consequatur
                          quae, ut harum ipsam molestias maxime non nisi reiciendis
                          eligendi! Doloremque quia pariatur harum ea amet quibusdam
                          quisquam, quae, temporibus dolores porro doloribus.
                        </p>
</li>
<li data-date="19/01/2016">
<h2>Event title here</h2>
<h3 class="text-muted mb-1">
<em>January 19th, 2016</em>
</h3>
<p class="lead">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                          fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                          aspernatur at, eaque hic repellendus sit dicta consequatur
                          quae, ut harum ipsam molestias maxime non nisi reiciendis
                          eligendi! Doloremque quia pariatur harum ea amet quibusdam
                          quisquam, quae, temporibus dolores porro doloribus.
                        </p>
</li>
<li data-date="03/03/2016">
<h2>Event title here</h2>
<h3 class="text-muted mb-1">
<em>March 3rd, 2016</em>
</h3>
<p class="lead">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                          fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                          aspernatur at, eaque hic repellendus sit dicta consequatur
                          quae, ut harum ipsam molestias maxime non nisi reiciendis
                          eligendi! Doloremque quia pariatur harum ea amet quibusdam
                          quisquam, quae, temporibus dolores porro doloribus.
                        </p>
</li>
</ol>
</div>
<!-- .events-content -->
</section>
</div>
</div>
</div>
</div>
<!--/ Basic Horizontal Timeline -->
</div>
</div>
</div>