<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
        \zander84\modernadmin\assets\MorrisChartsAsset::class,
    ]
]);
?>

<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
        <h3 class="content-header-title mb-0 d-inline-block">Morris Charts</h3>
        <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Morris Charts
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
                                                                                     href="morris-charts.html#"><i
                            class="la la-calendar-check-o"></i> Calender</a>
                <a class="dropdown-item" href="morris-charts.html#"><i class="la la-cart-plus"></i> Cart</a>
                <a class="dropdown-item" href="morris-charts.html#"><i class="la la-life-ring"></i> Support</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="morris-charts.html#"><i class="la la-cog"></i> Settings</a>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <!-- Morris charts section start -->
    <section id="morris-charts">
        <!-- Line Chart -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Line Chart</h4>
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
                            <ul class="list-inline text-right pr-2">
                                <li>
                                    <h6><i class="ft-circle purple"></i> iPhone</h6>
                                </li>
                                <li>
                                    <h6><i class="ft-circle cyan"></i> Samsung</h6>
                                </li>
                                <li>
                                    <h6><i class="ft-circle amber"></i> HTC</h6>
                                </li>
                            </ul>
                            <div class="height-400" id="line-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Smooth Line Chart -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Smooth Line Chart</h4>
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
                            <ul class="list-inline text-center">
                                <li>
                                    <h6><i class="ft-circle purple"></i> iPhone</h6>
                                </li>
                                <li>
                                    <h6><i class="ft-circle cyan"></i> Samsung</h6>
                                </li>
                                <li>
                                    <h6><i class="ft-circle amber"></i> HTC</h6>
                                </li>
                            </ul>
                            <div class="height-400" id="smooth-line-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Area Chart -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Area Chart</h4>
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
                            <ul class="list-inline text-right pr-2">
                                <li>
                                    <h6><i class="ft-circle grey lighten-1"></i> iPhone</h6>
                                </li>
                                <li>
                                    <h6><i class="ft-circle pink"></i> Samsung</h6>
                                </li>
                            </ul>
                            <div class="height-400" id="area-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Smooth Area Chart -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Smooth Area Chart</h4>
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
                            <ul class="list-inline text-center">
                                <li>
                                    <h6><i class="ft-circle grey lighten-1"></i> iPhone</h6>
                                </li>
                                <li>
                                    <h6><i class="ft-circle pink"></i> Samsung</h6>
                                </li>
                            </ul>
                            <div class="height-400" id="smooth-area-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bar Chart -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bar Chart</h4>
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
                            <ul class="list-inline text-center">
                                <li>
                                    <h6><i class="ft-circle purple"></i> Data 1</h6>
                                </li>
                                <li>
                                    <h6><i class="ft-circle pink"></i> Data 2</h6>
                                </li>
                            </ul>
                            <div class="height-400" id="bar-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Donut Chart -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Donut Chart</h4>
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
                            <div class="height-400" id="donut-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Morris charts section end -->
</div>
