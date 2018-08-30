<?php



$this->title = 'Modern';


$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\AddOnBlockUiAsset::class,
    ]
]);

?>

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Block UI</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Block UI
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <button class="btn btn-danger dropdown-toggle round btn-glow px-2" id="dropdownBreadcrumbButton"
                            type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownBreadcrumbButton"><a class="dropdown-item" href="add-on-block-ui.html#"><i class="la la-calendar-check-o"></i> Calender</a>
                        <a class="dropdown-item" href="add-on-block-ui.html#"><i class="la la-cart-plus"></i> Cart</a>
                        <a class="dropdown-item" href="add-on-block-ui.html#"><i class="la la-life-ring"></i> Support</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="add-on-block-ui.html#"><i class="la la-cog"></i> Settings</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- block examples section start -->
            <section id="block-examples">
                <div class="row">
                    <div class="col-12 mt-1 mb-3">
                        <h4>Block Examples</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h5>Block Element</h5>
                                        <p>Block content components.</p>
                                        <button class="btn btn-lg btn-block font-medium-1 btn-outline-success mb-1 block-element">Block Card</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h5>Block Layout Area</h5>
                                        <p>Block layout areas.</p>
                                        <button class="btn btn-lg btn-block font-medium-1 btn-outline-warning mb-1 block-sidebar">Block Sidebar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h5>Block Whole Page</h5>
                                        <p>Block Whole Page</p>
                                        <button class="btn btn-lg btn-block font-medium-1 btn-outline-danger mb-1 block-page">Block Page</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // block examples section end -->
            <!-- message options section start -->
            <section id="message-options">
                <div class="row">
                    <div class="col-12 mt-1 mb-3">
                        <h4>Message Options</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h5>Block With Spinner Only</h5>
                                        <p>Block card with spinner only.</p>
                                        <button class="btn btn-lg btn-block font-medium-1 btn-outline-success mb-1 block-spinner-only">Only Spinner</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h5>Block With Default Message</h5>
                                        <p>Block With Default Message.</p>
                                        <button class="btn btn-lg btn-block font-medium-1 btn-outline-warning mb-1 block-default-message">Default Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h5>Block With Custom Message</h5>
                                        <p>Block With Custom Message.</p>
                                        <button class="btn btn-lg btn-block font-medium-1 btn-outline-danger mb-1 block-custom-message">Custom Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h5>Message Animation</h5>
                                        <p>Message Animation</p>
                                        <button class="btn btn-lg btn-block font-medium-1 btn-outline-danger mb-1 block-msg-animation">Animation</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h5>Multiple Messages</h5>
                                        <p>Block layout areas.</p>
                                        <button class="btn btn-lg btn-block font-medium-1 btn-outline-warning mb-1 block-multiple-msgs">Multiple Messages</button>
                                        <div class="multiple-msgs" style="display:none; padding: 15px 0;">
                                            <div class="text-bold-600">
                                                <span class="ft-refresh-cw icon-spin text-left"></span>&nbsp; Loading ...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h5>Non centered Message</h5>
                                        <p>Non centered Message</p>
                                        <button class="btn btn-lg btn-block font-medium-1 btn-outline-success mb-1 block-non-centered-msg">Non centered</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // message options section end -->
            <!-- overlay options section start -->
            <section id="overlay-options">
                <div class="row">
                    <div class="col-12 mt-1 mb-3">
                        <h4>Overlay Options</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h5>Light overlay</h5>
                                        <p>Light overlay.</p>
                                        <button class="btn btn-lg btn-block font-medium-1 btn-outline-success mb-1 block-light-overlay">Light overlay</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h5>Opaque Overlay</h5>
                                        <p>Opaque Overlay</p>
                                        <button class="btn btn-lg btn-block font-medium-1 btn-outline-warning mb-1 block-opaque-overlay">Opaque Overlay</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h5>Custom Overlay</h5>
                                        <p>Custom Overlay</p>
                                        <button class="btn btn-lg btn-block font-medium-1 btn-outline-danger mb-1 block-custom-overlay">Custom Overlay</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // overlay options section end -->
            <!-- callback options section start -->
            <section id="callback-options">
                <div class="row">
                    <div class="col-12 mt-1 mb-3">
                        <h4>Callback Options</h4>
                        <hr>
                    </div>
                </div>
                <div class="row match-height">
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h5>OnBlock Callback</h5>
                                        <p>OnBlock Callback</p>
                                        <button class="btn btn-lg btn-block font-medium-1 btn-outline-success mb-1 onblock-callback">OnBlock</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h5>OnUnblock Callback</h5>
                                        <p>useful when using fadeOut option as it is invoked when all
                                            the blocking elements have been removed.</p>
                                        <button class="btn btn-lg btn-block font-medium-1 btn-outline-warning mb-1 onunblock-callback">OnUnblock</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h5>OnOverlay Click Callback</h5>
                                        <p>OnOverlay Click Callback.</p>
                                        <button class="btn btn-lg btn-block font-medium-1 btn-outline-danger mb-1 onoverlay-click-callback">OnOverlay Click</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // callback options section end -->
            <!-- other options section start -->
            <section id="other-options">
                <div class="row">
                    <div class="col-12 mt-1 mb-3">
                        <h4>Other Options</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h5>Block Without Message</h5>
                                        <p>Block Wihtout Message.</p>
                                        <button class="btn btn-lg btn-block font-medium-1 btn-outline-cyan mb-1 block-without-msg">Block Wihtout Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h5>Block Without Overlay</h5>
                                        <p>Block Without Overlay.</p>
                                        <button class="btn btn-lg btn-block font-medium-1 btn-outline-warning mb-1 block-without-overlay">Block Without Overlay</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h5>Click Overlay To Unblock</h5>
                                        <p>Click Overlay To Unblock</p>
                                        <button class="btn btn-lg btn-block font-medium-1 btn-outline-danger mb-1 overlay-unblock">Click Overlay To Unblock</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h5>Growl Notification</h5>
                                        <p>Growl Notification.</p>
                                        <button class="btn btn-lg btn-block font-medium-1 btn-outline-success mb-1 growl-notification">Growl Notification</button>
                                        <div class="growl-notification-example" style="display:none;">
                                            <i class="ft-check-circle"></i> Growl Notification Example
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // other options section end -->
        </div>
    </div>
</div>