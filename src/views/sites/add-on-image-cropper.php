<?php



$this->title = 'Modern';


$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
        \zander84\modernadmin\assets\AddOnImageCropperAsset::class,
    ]
]);

?>

        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Image Cropper</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Image Cropper
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <button class="btn btn-danger dropdown-toggle round btn-glow px-2" id="dropdownBreadcrumbButton"
                            type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownBreadcrumbButton"><a class="dropdown-item" href="add-on-image-cropper.html#"><i class="la la-calendar-check-o"></i> Calender</a>
                        <a class="dropdown-item" href="add-on-image-cropper.html#"><i class="la la-cart-plus"></i> Cart</a>
                        <a class="dropdown-item" href="add-on-image-cropper.html#"><i class="la la-life-ring"></i> Support</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="add-on-image-cropper.html#"><i class="la la-cog"></i> Settings</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Image cropper section start -->
            <section id="image-cropper">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Cropper Demo</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p class="font-small-3">This example covers image prviews with different preview sizes,
                                        Also shows X & Y co-ordinates and width - height of the cropper.
                                        With Rotate buttons you can rotate the image clockwise and
                                        anti-clockwise. You can also scale the image with horizontal
                                        flip and vertical flip buttons. You can get all data, image
                                        data, container data, canvas data and cropbox data clicking
                                        on respective buttons.</p>
                                    <div class="row mb-1">
                                        <div class="col-md-9">
                                            <div class="img-container overflow-hidden">
                                                <img class="main-demo-image img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/crop-pic.jpg"
                                                     alt="Picture">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="docs-preview clearfix">
                                                    <div class="img-preview preview-lg img-fluid"></div>
                                                    <div class="img-preview preview-md img-fluid"></div>
                                                    <div class="img-preview preview-sm img-fluid"></div>
                                                    <div class="img-preview preview-xs img-fluid"></div>
                                                </div>
                                            </div>
                                            <!-- <h3 class="page-header">Data:</h3> -->
                                            <div class="docs-data">
                                                <fieldset class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">X</span>
                                                        </div>
                                                        <input type="text" class="form-control main-demo-dataX" placeholder="x">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">px</span>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Y</span>
                                                        </div>
                                                        <input type="text" class="form-control main-demo-dataY" placeholder="y">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">px</span>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Width</span>
                                                        </div>
                                                        <input type="text" class="form-control main-demo-dataWidth" placeholder="width">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">px</span>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Height</span>
                                                        </div>
                                                        <input type="text" class="form-control main-demo-dataHeight" placeholder="height">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">px</span>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-md-2 col-sm-12">
                                            <fieldset class="form-group text-center">
                                                <button class="btn btn-outline-blue rotate-m45-deg" type="button">Rotate -45&deg;</button>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-2 col-sm-12">
                                            <fieldset class="form-group text-center">
                                                <button class="btn btn-outline-pink rotate-45-deg" type="button">Rotate 45&deg;</button>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-2 col-sm-12">
                                            <fieldset class="form-group text-center">
                                                <button class="btn btn-outline-teal rotate-180-deg" type="button">Rotate 180&deg;</button>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-2 col-sm-12">
                                            <fieldset class="form-group text-center">
                                                <button class="btn btn-outline-blue flip-horizontal" type="button" data-option="1">Flip Horizontal</button>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-2 col-sm-12">
                                            <fieldset class="form-group text-center">
                                                <button class="btn btn-outline-pink flip-vertical" type="button" data-option="1">Flip Vertical</button>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-2 col-sm-12">
                                            <fieldset class="form-group text-center">
                                                <button class="btn btn-outline-teal zoom-in" type="button">Zoom In</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-md-4">
                                            <fieldset class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control get-data">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-blue get-data-btn" type="button">Get Data</button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4">
                                            <fieldset class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control get-image-data">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-pink get-image-data-btn" type="button">Get Image Data</button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4">
                                            <fieldset class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control get-container-data">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-teal get-container-data-btn" type="button">Get Container Data</button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control get-canvas-data">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-blue get-canvas-data-btn" type="button">Get Canvas Data</button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control get-cropbox-data">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-teal get-cropbox-data-btn" type="button">Get Crop Box Data</button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Basic Cropper -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Cropper</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body overflow-hidden">
                                    <p class="font-small-3">This is the most basic example with cropper shown with overlay
                                        on the image.</p>
                                    <img class="basic-cropper" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/1.jpg" alt="Picture">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- No Overlay -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">No Overlay</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body overflow-hidden">
                                    <p class="font-small-3">This is the most basic example with cropper shown on the image
                                        but without overlay.</p>
                                    <img class="no-overlay" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/5.jpg" alt="Picture">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- 16:9 Aspect Ratio -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">16:9 Aspect Ratio</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body overflow-hidden">
                                    <p class="font-small-3">This example demonstrate the cropper ratio fixed to <code>16:9</code>.
                                        This must be set using the <code>aspectRatio</code> option.</p>
                                    <img class="aspect-ratio-16-9" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/15.jpg" alt="Picture">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 4:3 Aspect Ratio -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">4:3 Aspect Ratio</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body overflow-hidden">
                                    <p class="font-small-3">This example demonstrate the cropper ratio fixed to <code>4:3</code>.
                                        This must be set using the <code>aspectRatio</code> option.</p>
                                    <img class="aspect-ratio-4-3" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/14.jpg" alt="Picture">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Fixed Crop Box -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Fixed Crop Box</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body overflow-hidden">
                                    <p class="font-small-3">This example demonstrate the fixed cropper that you can not move
                                        but you can increase - decrease the size of the cropper by
                                        dragging.
                                    </p>
                                    <img class="fixed-crop-box" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/3.jpg" alt="Picture">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Full Crop Box -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Fixed Size Crop Box</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body overflow-hidden">
                                    <p class="font-small-3">This example demonstrate the fixed size of the cropper. You can
                                        move the crop box but can not increase or decrease the size
                                        of the cropper.</p>
                                    <img class="fixed-size-crop-box" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/33.jpg"
                                         alt="Picture">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Disable Guides -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Disable Guides</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body overflow-hidden">
                                    <p class="font-small-3">This example demonstrate the guides being turned off.</p>
                                    <img class="disable-guides" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/7.jpg" alt="Picture">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Disable Center Indicator -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Disable Center Indicator</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body overflow-hidden">
                                    <p class="font-small-3">This example demonstrate how to disable the center indicator
                                        while still showing the guides.</p>
                                    <img class="disable-center-indicator" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/28.jpg"
                                         alt="Picture">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Disable Auto Crop -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Disable Auto Crop</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body overflow-hidden">
                                    <p class="font-small-3">This example demonstrate how to disable the autocrop feature.
                                        You need to set <code>autoCrop</code> option to <code>false</code>                      in order to disable.</p>
                                    <img class="disable-auto-crop" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/15.jpg" alt="Picture">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Disable New Crop Box Creation -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Disable New Crop Box Creation</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body overflow-hidden">
                                    <p class="font-small-3">This example demonstrate how to restrict a user from creating
                                        a new cropbox and just allowing to work with pre-defined cropbox.</p>
                                    <img class="disable-new-crop-box" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/17.jpg"
                                         alt="Picture">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Movable Image -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Movable Image</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body overflow-hidden">
                                    <p class="font-small-3">This example demonstrate how to enable the image movement while
                                        keeping the cropbox fixed.</p>
                                    <img class="movable-image" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/21.jpg" alt="Picture">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Zoomable Image -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Zoomable Image</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body overflow-hidden">
                                    <p class="font-small-3">This example demonstrate how to enable zoom functionality on
                                        mousewheel scroll.</p>
                                    <img class="zoomable-image" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/27.jpg" alt="Picture">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Minimum Crop Area -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Minimum Crop Area</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body overflow-hidden">
                                    <p class="font-small-3">In this example we have set minimum crop area size to <code>100 X 100</code>.
                                        User can not make smaller cropbox than limit applied.</p>
                                    <img class="min-crop-area" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/29.jpg" alt="Picture">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Disable background -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Disable background</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body overflow-hidden">
                                    <p class="font-small-3">This example demonstrate how to disable the default background.
                                        Set <code>background</code> option to <code>false</code> in
                                        order to disable default background.</p>
                                    <img class="disable-background" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/28.jpg" alt="Picture">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Rotate Image -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Rotate Image</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body overflow-hidden">
                                    <p class="font-small-3">This example demonstrate how to rotate the default image. Required
                                        to use <code>built</code> function to rotate image after setting
                                        all the options. </p>
                                    <img class="rotate-image" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/33.jpg" alt="Picture">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Scale Image -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Scale Image</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body overflow-hidden">
                                    <p class="font-small-3">This example demonstrate how to scale the default image. Required
                                        to use <code>built</code> function to scale image after setting
                                        all the options.</p>
                                    <img class="scale-image" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/32.jpg" alt="Picture">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Image cropper section end -->
        </div>
