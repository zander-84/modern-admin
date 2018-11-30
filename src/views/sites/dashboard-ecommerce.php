<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
        \zander84\modernadmin\assets\DashboardEcommerceAsset::class,
    ]
]);
?>

<div class="content-header row">
</div>
<div class="content-body">
    <!-- eCommerce statistic -->
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="info">850</h3>
                                <h6>Products Sold</h6>
                            </div>
                            <div>
                                <i class="icon-basket-loaded info font-large-2 float-right"></i>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80"
                                 class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="warning">$748</h3>
                                <h6>Net Profit</h6>
                            </div>
                            <div>
                                <i class="icon-pie-chart warning font-large-2 float-right"></i>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="65"
                                 class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="success">146</h3>
                                <h6>New Customers</h6>
                            </div>
                            <div>
                                <i class="icon-user-follow success font-large-2 float-right"></i>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75"
                                 class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="danger">99.89 %</h3>
                                <h6>Customer Satisfaction</h6>
                            </div>
                            <div>
                                <i class="icon-heart danger font-large-2 float-right"></i>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="85"
                                 class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ eCommerce statistic -->
    <!-- Products sell and New Orders -->
    <div class="row match-height">
        <div class="col-xl-8 col-12" id="ecommerceChartView">
            <div class="card card-shadow">
                <div class="card-header card-header-transparent py-20">
                    <div class="btn-group dropdown">
                        <a class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown"
                           href="dashboard-ecommerce.html#">PRODUCTS SALES</a>
                        <div class="dropdown-menu animate" role="menu">
                            <a class="dropdown-item" href="dashboard-ecommerce.html#" role="menuitem">Sales</a>
                            <a class="dropdown-item" href="dashboard-ecommerce.html#" role="menuitem">Total sales</a>
                            <a class="dropdown-item" href="dashboard-ecommerce.html#" role="menuitem">profit</a>
                        </div>
                    </div>
                    <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group" role="group">
                        <li class="nav-item"><a class="active nav-link" data-toggle="tab"
                                                href="dashboard-ecommerce.html#scoreLineToDay">Day</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                                href="dashboard-ecommerce.html#scoreLineToWeek">Week</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                                href="dashboard-ecommerce.html#scoreLineToMonth">Month</a></li>
                    </ul>
                </div>
                <div class="widget-content tab-content bg-white p-20">
                    <div class="ct-chart tab-pane active scoreLineShadow" id="scoreLineToDay"></div>
                    <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToWeek"></div>
                    <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToMonth"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">New Orders</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content">
                    <div class="media-list position-relative" id="new-orders">
                        <div class="table-responsive">
                            <table class="table table-hover table-xl mb-0" id="new-orders-table">
                                <thead>
                                <tr>
                                    <th class="border-top-0">Product</th>
                                    <th class="border-top-0">Customers</th>
                                    <th class="border-top-0">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-truncate">iPhone X</td>
                                    <td class="text-truncate p-1">
                                        <ul class="list-unstyled users-list m-0">
                                            <li class="avatar avatar-sm pull-up" data-original-title="John Doe"
                                                data-popup="tooltip-custom" data-toggle="tooltip">
                                                <img alt="Avatar" class="media-object rounded-circle"
                                                     src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-19.png"/>
                                            </li>
                                            <li class="avatar avatar-sm pull-up" data-original-title="Katherine Nichols"
                                                data-popup="tooltip-custom" data-toggle="tooltip">
                                                <img alt="Avatar" class="media-object rounded-circle"
                                                     src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-18.png"/>
                                            </li>
                                            <li class="avatar avatar-sm pull-up" data-original-title="Joseph Weaver"
                                                data-popup="tooltip-custom" data-toggle="tooltip">
                                                <img alt="Avatar" class="media-object rounded-circle"
                                                     src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-17.png"/>
                                            </li>
                                            <li class="avatar avatar-sm">
                                                <span class="badge badge-info">+4 more</span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="text-truncate">$8999</td>
                                </tr>
                                <tr>
                                    <td class="text-truncate">Pixel 2</td>
                                    <td class="text-truncate p-1">
                                        <ul class="list-unstyled users-list m-0">
                                            <li class="avatar avatar-sm pull-up" data-original-title="Alice Scott"
                                                data-popup="tooltip-custom" data-toggle="tooltip">
                                                <img alt="Avatar" class="media-object rounded-circle"
                                                     src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-16.png"/>
                                            </li>
                                            <li class="avatar avatar-sm pull-up" data-original-title="Charles Miller"
                                                data-popup="tooltip-custom" data-toggle="tooltip">
                                                <img alt="Avatar" class="media-object rounded-circle"
                                                     src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-15.png"/>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="text-truncate">$5550</td>
                                </tr>
                                <tr>
                                    <td class="text-truncate">OnePlus</td>
                                    <td class="text-truncate p-1">
                                        <ul class="list-unstyled users-list m-0">
                                            <li class="avatar avatar-sm pull-up" data-original-title="Christine Ramos"
                                                data-popup="tooltip-custom" data-toggle="tooltip">
                                                <img alt="Avatar" class="media-object rounded-circle"
                                                     src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-11.png"/>
                                            </li>
                                            <li class="avatar avatar-sm pull-up" data-original-title="Thomas Brewer"
                                                data-popup="tooltip-custom" data-toggle="tooltip">
                                                <img alt="Avatar" class="media-object rounded-circle"
                                                     src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-10.png"/>
                                            </li>
                                            <li class="avatar avatar-sm pull-up" data-original-title="Alice Chapman"
                                                data-popup="tooltip-custom" data-toggle="tooltip">
                                                <img alt="Avatar" class="media-object rounded-circle"
                                                     src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-9.png"/>
                                            </li>
                                            <li class="avatar avatar-sm">
                                                <span class="badge badge-info">+3 more</span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="text-truncate">$9000</td>
                                </tr>
                                <tr>
                                    <td class="text-truncate">Galaxy</td>
                                    <td class="text-truncate p-1">
                                        <ul class="list-unstyled users-list m-0">
                                            <li class="avatar avatar-sm pull-up" data-original-title="Ryan Schneider"
                                                data-popup="tooltip-custom" data-toggle="tooltip">
                                                <img alt="Avatar" class="media-object rounded-circle"
                                                     src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-14.png"/>
                                            </li>
                                            <li class="avatar avatar-sm pull-up" data-original-title="Tiffany Oliver"
                                                data-popup="tooltip-custom" data-toggle="tooltip">
                                                <img alt="Avatar" class="media-object rounded-circle"
                                                     src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-13.png"/>
                                            </li>
                                            <li class="avatar avatar-sm pull-up" data-original-title="Joan Reid"
                                                data-popup="tooltip-custom" data-toggle="tooltip">
                                                <img alt="Avatar" class="media-object rounded-circle"
                                                     src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-12.png"/>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="text-truncate">$7500</td>
                                </tr>
                                <tr>
                                    <td class="text-truncate">Moto Z2</td>
                                    <td class="text-truncate p-1">
                                        <ul class="list-unstyled users-list m-0">
                                            <li class="avatar avatar-sm pull-up" data-original-title="Kimberly Simmons"
                                                data-popup="tooltip-custom" data-toggle="tooltip">
                                                <img alt="Avatar" class="media-object rounded-circle"
                                                     src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-8.png"/>
                                            </li>
                                            <li class="avatar avatar-sm pull-up" data-original-title="Willie Torres"
                                                data-popup="tooltip-custom" data-toggle="tooltip">
                                                <img alt="Avatar" class="media-object rounded-circle"
                                                     src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-7.png"/>
                                            </li>
                                            <li class="avatar avatar-sm pull-up" data-original-title="Rebecca Jones"
                                                data-popup="tooltip-custom" data-toggle="tooltip">
                                                <img alt="Avatar" class="media-object rounded-circle"
                                                     src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-6.png"/>
                                            </li>
                                            <li class="avatar avatar-sm">
                                                <span class="badge badge-info">+1 more</span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="text-truncate">$8500</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Products sell and New Orders -->
    <!-- Recent Transactions -->
    <div class="row">
        <div class="col-12" id="recent-transactions">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Recent Transactions</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right"
                                   href="invoice-summary.html" target="_blank">Invoice Summary</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-hover table-xl mb-0" id="recent-orders">
                            <thead>
                            <tr>
                                <th class="border-top-0">Status</th>
                                <th class="border-top-0">Invoice#</th>
                                <th class="border-top-0">Customer Name</th>
                                <th class="border-top-0">Products</th>
                                <th class="border-top-0">Categories</th>
                                <th class="border-top-0">Shipping</th>
                                <th class="border-top-0">Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i>
                                    Paid
                                </td>
                                <td class="text-truncate"><a href="dashboard-ecommerce.html#">INV-001001</a></td>
                                <td class="text-truncate">
<span class="avatar avatar-xs">
<img alt="avatar" class="box-shadow-2" src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-4.png"/>
</span>
                                    <span>Elizabeth W.</span>
                                </td>
                                <td class="text-truncate p-1">
                                    <ul class="list-unstyled users-list m-0">
                                        <li class="avatar avatar-sm pull-up" data-original-title="Kimberly Simmons"
                                            data-popup="tooltip-custom" data-toggle="tooltip">
                                            <img alt="Avatar"
                                                 class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                                                 src="<?= $baseUrl; ?>/app-assets/images/portfolio/portfolio-1.jpg"/>
                                        </li>
                                        <li class="avatar avatar-sm pull-up" data-original-title="Willie Torres"
                                            data-popup="tooltip-custom" data-toggle="tooltip">
                                            <img alt="Avatar"
                                                 class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                                                 src="<?= $baseUrl; ?>/app-assets/images/portfolio/portfolio-2.jpg"/>
                                        </li>
                                        <li class="avatar avatar-sm pull-up" data-original-title="Rebecca Jones"
                                            data-popup="tooltip-custom" data-toggle="tooltip">
                                            <img alt="Avatar"
                                                 class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                                                 src="<?= $baseUrl; ?>/app-assets/images/portfolio/portfolio-4.jpg"/>
                                        </li>
                                        <li class="avatar avatar-sm">
                                            <span class="badge badge-info">+1 more</span>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-outline-danger round" type="button">Food</button>
                                </td>
                                <td>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25"
                                             class="progress-bar bg-gradient-x-danger" role="progressbar"
                                             style="width: 25%"></div>
                                    </div>
                                </td>
                                <td class="text-truncate">$ 1200.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><i class="la la-dot-circle-o danger font-medium-1 mr-1"></i>
                                    Declined
                                </td>
                                <td class="text-truncate"><a href="dashboard-ecommerce.html#">INV-001002</a></td>
                                <td class="text-truncate">
<span class="avatar avatar-xs">
<img alt="avatar" class="box-shadow-2" src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-5.png"/>
</span>
                                    <span>Doris R.</span>
                                </td>
                                <td class="text-truncate p-1">
                                    <ul class="list-unstyled users-list m-0">
                                        <li class="avatar avatar-sm pull-up" data-original-title="Kimberly Simmons"
                                            data-popup="tooltip-custom" data-toggle="tooltip">
                                            <img alt="Avatar"
                                                 class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                                                 src="<?= $baseUrl; ?>/app-assets/images/portfolio/portfolio-5.jpg"/>
                                        </li>
                                        <li class="avatar avatar-sm pull-up" data-original-title="Willie Torres"
                                            data-popup="tooltip-custom" data-toggle="tooltip">
                                            <img alt="Avatar"
                                                 class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                                                 src="<?= $baseUrl; ?>/app-assets/images/portfolio/portfolio-6.jpg"/>
                                        </li>
                                        <li class="avatar avatar-sm">
                                            <span class="badge badge-info">+2 more</span>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-outline-warning round" type="button">Electronics
                                    </button>
                                </td>
                                <td>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="45"
                                             class="progress-bar bg-gradient-x-warning" role="progressbar"
                                             style="width: 45%"></div>
                                    </div>
                                </td>
                                <td class="text-truncate">$ 1850.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><i class="la la-dot-circle-o warning font-medium-1 mr-1"></i>
                                    Pending
                                </td>
                                <td class="text-truncate"><a href="dashboard-ecommerce.html#">INV-001003</a></td>
                                <td class="text-truncate">
<span class="avatar avatar-xs">
<img alt="avatar" class="box-shadow-2" src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-6.png"/>
</span>
                                    <span>Megan S.</span>
                                </td>
                                <td class="text-truncate p-1">
                                    <ul class="list-unstyled users-list m-0">
                                        <li class="avatar avatar-sm pull-up" data-original-title="Kimberly Simmons"
                                            data-popup="tooltip-custom" data-toggle="tooltip">
                                            <img alt="Avatar"
                                                 class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                                                 src="<?= $baseUrl; ?>/app-assets/images/portfolio/portfolio-2.jpg"/>
                                        </li>
                                        <li class="avatar avatar-sm pull-up" data-original-title="Willie Torres"
                                            data-popup="tooltip-custom" data-toggle="tooltip">
                                            <img alt="Avatar"
                                                 class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                                                 src="<?= $baseUrl; ?>/app-assets/images/portfolio/portfolio-5.jpg"/>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-outline-success round" type="button">Groceries
                                    </button>
                                </td>
                                <td>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75"
                                             class="progress-bar bg-gradient-x-success" role="progressbar"
                                             style="width: 75%"></div>
                                    </div>
                                </td>
                                <td class="text-truncate">$ 3200.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i>
                                    Paid
                                </td>
                                <td class="text-truncate"><a href="dashboard-ecommerce.html#">INV-001004</a></td>
                                <td class="text-truncate">
<span class="avatar avatar-xs">
<img alt="avatar" class="box-shadow-2" src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-7.png"/>
</span>
                                    <span>Andrew D.</span>
                                </td>
                                <td class="text-truncate p-1">
                                    <ul class="list-unstyled users-list m-0">
                                        <li class="avatar avatar-sm pull-up" data-original-title="Kimberly Simmons"
                                            data-popup="tooltip-custom" data-toggle="tooltip">
                                            <img alt="Avatar"
                                                 class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                                                 src="<?= $baseUrl; ?>/app-assets/images/portfolio/portfolio-6.jpg"/>
                                        </li>
                                        <li class="avatar avatar-sm pull-up" data-original-title="Willie Torres"
                                            data-popup="tooltip-custom" data-toggle="tooltip">
                                            <img alt="Avatar"
                                                 class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                                                 src="<?= $baseUrl; ?>/app-assets/images/portfolio/portfolio-1.jpg"/>
                                        </li>
                                        <li class="avatar avatar-sm">
                                            <span class="badge badge-info">+1 more</span>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-outline-info round" type="button">Apparels</button>
                                </td>
                                <td>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="65"
                                             class="progress-bar bg-gradient-x-info" role="progressbar"
                                             style="width: 65%"></div>
                                    </div>
                                </td>
                                <td class="text-truncate">$ 4500.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i>
                                    Paid
                                </td>
                                <td class="text-truncate"><a href="dashboard-ecommerce.html#">INV-001005</a></td>
                                <td class="text-truncate">
<span class="avatar avatar-xs">
<img alt="avatar" class="box-shadow-2" src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-9.png"/>
</span>
                                    <span>Walter R.</span>
                                </td>
                                <td class="text-truncate p-1">
                                    <ul class="list-unstyled users-list m-0">
                                        <li class="avatar avatar-sm pull-up" data-original-title="Kimberly Simmons"
                                            data-popup="tooltip-custom" data-toggle="tooltip">
                                            <img alt="Avatar"
                                                 class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                                                 src="<?= $baseUrl; ?>/app-assets/images/portfolio/portfolio-5.jpg"/>
                                        </li>
                                        <li class="avatar avatar-sm pull-up" data-original-title="Willie Torres"
                                            data-popup="tooltip-custom" data-toggle="tooltip">
                                            <img alt="Avatar"
                                                 class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                                                 src="<?= $baseUrl; ?>/app-assets/images/portfolio/portfolio-3.jpg"/>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-outline-danger round" type="button">Food</button>
                                </td>
                                <td>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35"
                                             class="progress-bar bg-gradient-x-danger" role="progressbar"
                                             style="width: 35%"></div>
                                    </div>
                                </td>
                                <td class="text-truncate">$ 1500.00</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Recent Transactions -->
    <!--Recent Orders & Monthly Sales -->
    <div class="row match-height">
        <div class="col-xl-8 col-lg-12">
            <div class="card">
                <div class="card-content ">
                    <div class="height-250 position-relative" id="cost-revenue"></div>
                </div>
                <div class="card-footer">
                    <div class="row mt-1">
                        <div class="col-3 text-center">
                            <h6 class="text-muted">Total Products</h6>
                            <h2 class="block font-weight-normal">18.6 k</h2>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70"
                                     class="progress-bar bg-gradient-x-info" role="progressbar"
                                     style="width: 70%"></div>
                            </div>
                        </div>
                        <div class="col-3 text-center">
                            <h6 class="text-muted">Total Sales</h6>
                            <h2 class="block font-weight-normal">64.54 M</h2>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60"
                                     class="progress-bar bg-gradient-x-warning" role="progressbar"
                                     style="width: 60%"></div>
                            </div>
                        </div>
                        <div class="col-3 text-center">
                            <h6 class="text-muted">Total Cost</h6>
                            <h2 class="block font-weight-normal">24.38 B</h2>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="40"
                                     class="progress-bar bg-gradient-x-danger" role="progressbar"
                                     style="width: 40%"></div>
                            </div>
                        </div>
                        <div class="col-3 text-center">
                            <h6 class="text-muted">Total Revenue</h6>
                            <h2 class="block font-weight-normal">36.72 M</h2>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="90"
                                     class="progress-bar bg-gradient-x-success" role="progressbar"
                                     style="width: 90%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body sales-growth-chart">
                        <div class="height-250" id="monthly-sales"></div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="chart-title mb-1 text-center">
                        <h6>Total monthly Sales.</h6>
                    </div>
                    <div class="chart-stats text-center">
                        <a class="btn btn-sm btn-danger box-shadow-2 mr-1" href="dashboard-ecommerce.html#">Statistics
                            <i class="ft-bar-chart"></i></a>
                        <span class="text-muted">for the last year.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Recent Orders & Monthly Sales -->
    <!-- Basic Horizontal Timeline -->
    <div class="row match-height">
        <div class="col-xl-4 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic Card</h4>
                </div>
                <div class="card-content">
                    <img alt="Card image cap" class="img-fluid"
                         src="<?= $baseUrl; ?>/app-assets/images/carousel/05.jpg"/>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>
                        <a class="card-link" href="dashboard-ecommerce.html#">Card link</a>
                        <a class="card-link" href="dashboard-ecommerce.html#">Another link</a>
                    </div>
                </div>
                <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                    <span class="float-left">3 hours ago</span>
                    <span class="float-right">
<a class="card-link" href="dashboard-ecommerce.html#">Read More <i class="fa fa-angle-right"></i></a>
</span>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Horizontal Timeline</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="card-text">
                            <section class="cd-horizontal-timeline">
                                <div class="timeline">
                                    <div class="events-wrapper">
                                        <div class="events">
                                            <ol>
                                                <li><a class="selected" data-date="16/01/2015"
                                                       href="dashboard-ecommerce.html#0">16 Jan</a></li>
                                                <li><a data-date="28/02/2015" href="dashboard-ecommerce.html#0">28
                                                        Feb</a></li>
                                                <li><a data-date="20/04/2015" href="dashboard-ecommerce.html#0">20
                                                        Mar</a></li>
                                                <li><a data-date="20/05/2015" href="dashboard-ecommerce.html#0">20
                                                        May</a></li>
                                                <li><a data-date="09/07/2015" href="dashboard-ecommerce.html#0">09
                                                        Jul</a></li>
                                                <li><a data-date="30/08/2015" href="dashboard-ecommerce.html#0">30
                                                        Aug</a></li>
                                                <li><a data-date="15/09/2015" href="dashboard-ecommerce.html#0">15
                                                        Sep</a></li>
                                            </ol>
                                            <span aria-hidden="true" class="filling-line"></span>
                                        </div>
                                        <!-- .events -->
                                    </div>
                                    <!-- .events-wrapper -->
                                    <ul class="cd-timeline-navigation">
                                        <li><a class="prev inactive" href="dashboard-ecommerce.html#0">Prev</a></li>
                                        <li><a class="next" href="dashboard-ecommerce.html#0">Next</a></li>
                                    </ul>
                                    <!-- .cd-timeline-navigation -->
                                </div>
                                <!-- .timeline -->
                                <div class="events-content">
                                    <ol>
                                        <li class="selected" data-date="16/01/2015">
                                            <blockquote class="blockquote border-0">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img alt="Generic placeholder image"
                                                             class="media-object img-xl mr-1"
                                                             src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-5.png"/>
                                                    </div>
                                                    <div class="media-body">
                                                        Sometimes life is going to hit you in the head with a brick.
                                                        Don't lose faith.
                                                    </div>
                                                </div>
                                                <footer class="blockquote-footer text-right">Steve Jobs
                                                    <cite title="Source Title">Entrepreneur</cite>
                                                </footer>
                                            </blockquote>
                                            <p class="lead mt-2">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum
                                                praesentium officia,
                                                fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                                                aspernatur at.
                                            </p>
                                        </li>
                                        <li data-date="28/02/2015">
                                            <blockquote class="blockquote border-0">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img alt="Generic placeholder image"
                                                             class="media-object img-xl mr-1"
                                                             src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-6.png"/>
                                                    </div>
                                                    <div class="media-body">
                                                        Sometimes life is going to hit you in the head with a brick.
                                                        Don't lose faith.
                                                    </div>
                                                </div>
                                                <footer class="blockquote-footer text-right">Steve Jobs
                                                    <cite title="Source Title">Entrepreneur</cite>
                                                </footer>
                                            </blockquote>
                                            <p class="lead mt-2">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum
                                                praesentium officia,
                                                fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                                                aspernatur at.
                                            </p>
                                        </li>
                                        <li data-date="20/04/2015">
                                            <blockquote class="blockquote border-0">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img alt="Generic placeholder image"
                                                             class="media-object img-xl mr-1"
                                                             src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-7.png"/>
                                                    </div>
                                                    <div class="media-body">
                                                        Sometimes life is going to hit you in the head with a brick.
                                                        Don't lose faith.
                                                    </div>
                                                </div>
                                                <footer class="blockquote-footer text-right">Steve Jobs
                                                    <cite title="Source Title">Entrepreneur</cite>
                                                </footer>
                                            </blockquote>
                                            <p class="lead mt-2">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum
                                                praesentium officia,
                                                fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                                                aspernatur at.
                                            </p>
                                        </li>
                                        <li data-date="20/05/2015">
                                            <blockquote class="blockquote border-0">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img alt="Generic placeholder image"
                                                             class="media-object img-xl mr-1"
                                                             src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-8.png"/>
                                                    </div>
                                                    <div class="media-body">
                                                        Sometimes life is going to hit you in the head with a brick.
                                                        Don't lose faith.
                                                    </div>
                                                </div>
                                                <footer class="blockquote-footer text-right">Steve Jobs
                                                    <cite title="Source Title">Entrepreneur</cite>
                                                </footer>
                                            </blockquote>
                                            <p class="lead mt-2">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum
                                                praesentium officia,
                                                fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                                                aspernatur at.
                                            </p>
                                        </li>
                                        <li data-date="09/07/2015">
                                            <blockquote class="blockquote border-0">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img alt="Generic placeholder image"
                                                             class="media-object img-xl mr-1"
                                                             src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-9.png"/>
                                                    </div>
                                                    <div class="media-body">
                                                        Sometimes life is going to hit you in the head with a brick.
                                                        Don't lose faith.
                                                    </div>
                                                </div>
                                                <footer class="blockquote-footer text-right">Steve Jobs
                                                    <cite title="Source Title">Entrepreneur</cite>
                                                </footer>
                                            </blockquote>
                                            <p class="lead mt-2">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum
                                                praesentium officia,
                                                fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                                                aspernatur at.
                                            </p>
                                        </li>
                                        <li data-date="30/08/2015">
                                            <blockquote class="blockquote border-0">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img alt="Generic placeholder image"
                                                             class="media-object img-xl mr-1"
                                                             src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-6.png"/>
                                                    </div>
                                                    <div class="media-body">
                                                        Sometimes life is going to hit you in the head with a brick.
                                                        Don't lose faith.
                                                    </div>
                                                </div>
                                                <footer class="blockquote-footer text-right">Steve Jobs
                                                    <cite title="Source Title">Entrepreneur</cite>
                                                </footer>
                                            </blockquote>
                                            <p class="lead mt-2">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum
                                                praesentium officia,
                                                fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                                                aspernatur at.
                                            </p>
                                        </li>
                                        <li data-date="15/09/2015">
                                            <blockquote class="blockquote border-0">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img alt="Generic placeholder image"
                                                             class="media-object img-xl mr-1"
                                                             src="<?= $baseUrl; ?>/app-assets/images/portrait/small/avatar-s-7.png"/>
                                                    </div>
                                                    <div class="media-body">
                                                        Sometimes life is going to hit you in the head with a brick.
                                                        Don't lose faith.
                                                    </div>
                                                </div>
                                                <footer class="blockquote-footer text-right">Steve Jobs
                                                    <cite title="Source Title">Entrepreneur</cite>
                                                </footer>
                                            </blockquote>
                                            <p class="lead mt-2">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum
                                                praesentium officia,
                                                fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                                                aspernatur at.
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
        </div>
    </div>
    <!--/ Basic Horizontal Timeline -->
</div>
