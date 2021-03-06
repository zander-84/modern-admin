<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\JqueryUiDialogTooltipAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">jQuery UI dialogs and tooltips</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="jquery-ui-dialog-tooltip.html#">jQuery UI</a>
</li>
<li class="breadcrumb-item active">Dialogs &amp; Tooltips
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="jquery-ui-dialog-tooltip.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="jquery-ui-dialog-tooltip.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="jquery-ui-dialog-tooltip.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="jquery-ui-dialog-tooltip.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- dialogs section start -->
<section id="dialogs">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4>Dialogs</h4>
<hr/>
</div>
</div>
<!-- Basic Dialogs -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Dialogs</h4>
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
<div class="row">
<!-- Default -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-primary font-medium-1 default-dialog-btn mt-1">Default</button>
<p class="font-small-3 mt-1">This is the default dialog which is useful for displaying
                            information. The dialog window can be moved, resized
                            and closed with the 'x' icon.</p>
<div class="default-dialog" title="Default">
<p>Pellentesque habitant morbi tristique senectus et netus
                              et malesuada fames ac turpis egestas. Vestibulum tortor
                              quam, feugiat vitae, ultricies eget, tempor sit amet,
                              ante.
                            </p>
<p>Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.
                              Quisque sit amet est et sapien ullamcorper pharetra.
                            </p>
</div>
</div>
</div>
<!-- Animation -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-success font-medium-1 animation-dialog-btn mt-1">Animation</button>
<p class="font-small-3 mt-1">Dialogs may be animated by specifying an effect for the
                            show and/or hide properties. You must include the individual
                            effects file for any effects you would like to use.</p>
<div class="animation-dialog" title="Animation">
<p>Pellentesque habitant morbi tristique senectus et netus
                              et malesuada fames ac turpis egestas. Vestibulum tortor
                              quam, feugiat vitae, ultricies eget, tempor sit amet,
                              ante.
                            </p>
<p>Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.
                              Quisque sit amet est et sapien ullamcorper pharetra.
                            </p>
</div>
</div>
</div>
<!-- Overlay -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-danger font-medium-1 overlay-dialog-btn mt-1">Overlay</button>
<p class="font-small-3 mt-1">If modal set to <code>true</code>, the dialog will have
                            modal behavior; other items on the page will be disabled,
                            i.e., cannot be interacted with. Modal dialogs create
                            an overlay below the dialog but above other page elements.</p>
<div class="overlay-dialog" title="Overlay">
<p>Pellentesque habitant morbi tristique senectus et netus
                              et malesuada fames ac turpis egestas. Vestibulum tortor
                              quam, feugiat vitae, ultricies eget, tempor sit amet,
                              ante.
                            </p>
<p>Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.
                              Quisque sit amet est et sapien ullamcorper pharetra.
                            </p>
</div>
</div>
</div>
</div>
<hr/>
<div class="row">
<!-- Append To -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-primary font-medium-1 append-to-dialog-btn mt-1">Append To</button>
<p class="font-small-3 mt-1">Which element the dialog (and overlay, if <code>modal</code>)
                            should be appended to.</p>
<p class="font-small-3 mt-1"><code>Note:</code> The <code>appendTo</code> option should
                            not be changed while the dialog is open.</p>
<div class="append-to-dialog" title="Append To">
<p>Pellentesque habitant morbi tristique senectus et netus
                              et malesuada fames ac turpis egestas. Vestibulum tortor
                              quam, feugiat vitae, ultricies eget, tempor sit amet,
                              ante.
                            </p>
<p>Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.
                              Quisque sit amet est et sapien ullamcorper pharetra.
                            </p>
</div>
</div>
</div>
<!-- Title -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-success font-medium-1 title-dialog-btn mt-1">Title</button>
<p class="font-small-3 mt-1">Specifies the title of the dialog. If the value is <code>null</code>,
                            the <code>title</code> attribute on the dialog source
                            element will be used.</p>
<div class="title-dialog">
<p>Pellentesque habitant morbi tristique senectus et netus
                              et malesuada fames ac turpis egestas. Vestibulum tortor
                              quam, feugiat vitae, ultricies eget, tempor sit amet,
                              ante.
                            </p>
<p>Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.
                              Quisque sit amet est et sapien ullamcorper pharetra.
                            </p>
</div>
</div>
</div>
<!-- Confirm Modal -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-danger font-medium-1 conf-modal-dialog-btn mt-1">Confirm Modal</button>
<p class="font-small-3 mt-1">Confirm an action that may be destructive or important.
                            Set the <code>modal</code> option to true, and specify
                            primary and secondary user actions with the <code>buttons</code>                            option.</p>
<div class="conf-modal-dialog" title="Confirm Modal">
<p>Pellentesque habitant morbi tristique senectus et netus
                              et malesuada fames ac turpis egestas. Vestibulum tortor
                              quam, feugiat vitae, ultricies eget, tempor sit amet,
                              ante.
                            </p>
<p>Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.
                              Quisque sit amet est et sapien ullamcorper pharetra.
                            </p>
</div>
</div>
</div>
</div>
<hr/>
<div class="row">
<!-- Buttons -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-primary font-medium-1 buttons-dialog-btn mt-1">Buttons</button>
<p class="font-small-3 mt-1">Specifies which buttons should be displayed on the dialog.
                            The context of the callback is the dialog element; if
                            you need access to the button, it is available as the
                            target of the event object.</p>
<div class="buttons-dialog" title="Buttons">
<p>Pellentesque habitant morbi tristique senectus et netus
                              et malesuada fames ac turpis egestas. Vestibulum tortor
                              quam, feugiat vitae, ultricies eget, tempor sit amet,
                              ante.
                            </p>
<p>Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.
                              Quisque sit amet est et sapien ullamcorper pharetra.
                            </p>
</div>
</div>
</div>
<!-- Buttons With Icons -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-success font-medium-1 icons-buttons-dialog-btn mt-1">Buttons With Icons</button>
<p class="font-small-3 mt-1">A key of icons can be used to control button's icons option.</p>
<div class="icons-buttons-dialog" title="Icon Buttons">
<p>Pellentesque habitant morbi tristique senectus et netus
                              et malesuada fames ac turpis egestas. Vestibulum tortor
                              quam, feugiat vitae, ultricies eget, tempor sit amet,
                              ante.
                            </p>
<p>Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.
                              Quisque sit amet est et sapien ullamcorper pharetra.
                            </p>
</div>
</div>
</div>
<!-- Disable Close On Escape -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-danger font-medium-1 disable-escape-dialog-btn mt-1">Disable Close On Escape</button>
<p class="font-small-3 mt-1">Specifies whether the dialog should close when it has focus
                            and the user presses the <code>escape (ESC)</code> key.</p>
<div class="disable-escape-dialog" title="Disable Escape Button">
<p>Pellentesque habitant morbi tristique senectus et netus
                              et malesuada fames ac turpis egestas. Vestibulum tortor
                              quam, feugiat vitae, ultricies eget, tempor sit amet,
                              ante.
                            </p>
<p>Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.
                              Quisque sit amet est et sapien ullamcorper pharetra.
                            </p>
</div>
</div>
</div>
</div>
<hr/>
<div class="row">
<!-- Close Text -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-primary font-medium-1 close-text-dialog-btn mt-1">Close Text</button>
<p class="font-small-3 mt-1">Specifies the text for the close button. Note that the
                            close text is visibly hidden when using a standard theme.</p>
<div class="close-text-dialog" title="Close Text">
<p>Pellentesque habitant morbi tristique senectus et netus
                              et malesuada fames ac turpis egestas. Vestibulum tortor
                              quam, feugiat vitae, ultricies eget, tempor sit amet,
                              ante.
                            </p>
<p>Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.
                              Quisque sit amet est et sapien ullamcorper pharetra.
                            </p>
</div>
</div>
</div>
<!-- Disable Draggable -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-success font-medium-1 disable-drag-dialog-btn mt-1">Disable Draggable</button>
<p class="font-small-3 mt-1">If set to <code>true</code>, the dialog will be draggable
                            by the title bar. Requires the jQuery UI Draggable widget
                            to be included.</p>
<div class="disable-drag-dialog" title="Disable Drag">
<p>Pellentesque habitant morbi tristique senectus et netus
                              et malesuada fames ac turpis egestas. Vestibulum tortor
                              quam, feugiat vitae, ultricies eget, tempor sit amet,
                              ante.
                            </p>
<p>Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.
                              Quisque sit amet est et sapien ullamcorper pharetra.
                            </p>
</div>
</div>
</div>
<!-- Disable Resizable -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-danger font-medium-1 disable-resize-dialog-btn mt-1">Disable Resizable</button>
<p class="font-small-3 mt-1">If set to <code>true</code>, the dialog will be resizable.
                            Requires the jQuery UI Resizable widget to be included.</p>
<div class="disable-resize-dialog" title="Disable Resize">
<p>Pellentesque habitant morbi tristique senectus et netus
                              et malesuada fames ac turpis egestas. Vestibulum tortor
                              quam, feugiat vitae, ultricies eget, tempor sit amet,
                              ante.
                            </p>
<p>Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.
                              Quisque sit amet est et sapien ullamcorper pharetra.
                            </p>
</div>
</div>
</div>
</div>
<hr/>
<div class="row">
<!-- Left Top Position -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-primary font-medium-1 position-left-top-dialog-btn mt-1">Left Top Position</button>
<p class="font-small-3 mt-1">Specifies where the dialog should be displayed when opened.
                            The dialog will handle collisions such that as much of
                            the dialog is visible as possible.</p>
<p class="font-small-3 mt-1">The of property defaults to the window, but you can specify
                            another element to position against.</p>
<div class="position-left-top-dialog" title="Position Left Top">
<p>Pellentesque habitant morbi tristique senectus et netus
                              et malesuada fames ac turpis egestas. Vestibulum tortor
                              quam, feugiat vitae, ultricies eget, tempor sit amet,
                              ante.
                            </p>
<p>Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.
                              Quisque sit amet est et sapien ullamcorper pharetra.
                            </p>
</div>
</div>
</div>
<!-- Right Top Position -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-success font-medium-1 position-right-top-dialog-btn mt-1">Right Top Position</button>
<p class="font-small-3 mt-1">Specifies where the dialog should be displayed when opened.
                            The dialog will handle collisions such that as much of
                            the dialog is visible as possible.</p>
<p class="font-small-3 mt-1">The of property defaults to the window, but you can specify
                            another element to position against.</p>
<div class="position-right-top-dialog" title="Position Right Top">
<p>Pellentesque habitant morbi tristique senectus et netus
                              et malesuada fames ac turpis egestas. Vestibulum tortor
                              quam, feugiat vitae, ultricies eget, tempor sit amet,
                              ante.
                            </p>
<p>Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.
                              Quisque sit amet est et sapien ullamcorper pharetra.
                            </p>
</div>
</div>
</div>
<!-- Left Bottom Position -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-danger font-medium-1 position-left-bottom-dialog-btn mt-1">Left Bottom Position</button>
<p class="font-small-3 mt-1">Specifies where the dialog should be displayed when opened.
                            The dialog will handle collisions such that as much of
                            the dialog is visible as possible.</p>
<p class="font-small-3 mt-1">The of property defaults to the window, but you can specify
                            another element to position against.</p>
<div class="position-left-bottom-dialog" title="Positio Left Bottom">
<p>Pellentesque habitant morbi tristique senectus et netus
                              et malesuada fames ac turpis egestas. Vestibulum tortor
                              quam, feugiat vitae, ultricies eget, tempor sit amet,
                              ante.
                            </p>
<p>Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.
                              Quisque sit amet est et sapien ullamcorper pharetra.
                            </p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Dialogs Height - Width -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Dialogs Height &amp; Width Configurations</h4>
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
<div class="row">
<!-- Height -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-primary font-medium-1 height-dialog-btn mt-1">Height</button>
<p class="font-small-3 mt-1">The height of the dialog.</p>
<div class="height-dialog" title="Height">
<p>Pellentesque habitant morbi tristique senectus et netus
                              et malesuada fames ac turpis egestas. Vestibulum tortor
                              quam, feugiat vitae, ultricies eget, tempor sit amet,
                              ante.
                            </p>
<p>Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.
                              Quisque sit amet est et sapien ullamcorper pharetra.
                            </p>
</div>
</div>
</div>
<!-- Width -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-success font-medium-1 width-dialog-btn mt-1">Width</button>
<p class="font-small-3 mt-1">The width of the dialog, in pixels.</p>
<div class="width-dialog" title="Width">
<p>Pellentesque habitant morbi tristique senectus et netus
                              et malesuada fames ac turpis egestas. Vestibulum tortor
                              quam, feugiat vitae, ultricies eget, tempor sit amet,
                              ante.
                            </p>
<p>Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.
                              Quisque sit amet est et sapien ullamcorper pharetra.
                            </p>
</div>
</div>
</div>
<!-- Max Height -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-danger font-medium-1 max-height-dialog-btn mt-1">Max Height</button>
<p class="font-small-3 mt-1">The maximum height to which the dialog can be resized,
                            in pixels.</p>
<div class="max-height-dialog" title="Max Height">
<p>Pellentesque habitant morbi tristique senectus et netus
                              et malesuada fames ac turpis egestas. Vestibulum tortor
                              quam, feugiat vitae, ultricies eget, tempor sit amet,
                              ante.
                            </p>
<p>Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.
                              Quisque sit amet est et sapien ullamcorper pharetra.
                            </p>
</div>
</div>
</div>
</div>
<hr/>
<div class="row">
<!-- Max Width -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-primary font-medium-1 max-width-dialog-btn mt-1">Max Width</button>
<p class="font-small-3 mt-1">The maximum width to which the dialog can be resized, in
                            pixels.
                          </p>
<div class="max-width-dialog" title="Max Width">
<p>Pellentesque habitant morbi tristique senectus et netus
                              et malesuada fames ac turpis egestas. Vestibulum tortor
                              quam, feugiat vitae, ultricies eget, tempor sit amet,
                              ante.
                            </p>
<p>Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.
                              Quisque sit amet est et sapien ullamcorper pharetra.
                            </p>
</div>
</div>
</div>
<!-- Min Height -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-success font-medium-1 min-height-dialog-btn mt-1">Min Height</button>
<p class="font-small-3 mt-1">The minimum height to which the dialog can be resized,
                            in pixels.</p>
<div class="min-height-dialog" title="Min Height">
<p>Pellentesque habitant morbi tristique senectus et netus
                              et malesuada fames ac turpis egestas. Vestibulum tortor
                              quam, feugiat vitae, ultricies eget, tempor sit amet,
                              ante.
                            </p>
<p>Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.
                              Quisque sit amet est et sapien ullamcorper pharetra.
                            </p>
</div>
</div>
</div>
<!-- Min Width -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-danger font-medium-1 min-width-dialog-btn mt-1">Min Width</button>
<p class="font-small-3 mt-1">The minimum width to which the dialog can be resized, in
                            pixels.
                          </p>
<div class="min-width-dialog" title="Min Width">
<p>Pellentesque habitant morbi tristique senectus et netus
                              et malesuada fames ac turpis egestas. Vestibulum tortor
                              quam, feugiat vitae, ultricies eget, tempor sit amet,
                              ante.
                            </p>
<p>Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.
                              Quisque sit amet est et sapien ullamcorper pharetra.
                            </p>
</div>
</div>
</div>
</div>
<hr/>
<div class="row">
<!-- Percentage Width -->
<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-primary font-medium-1 percent-width-dialog-btn mt-1">Percentage Width</button>
<p class="font-small-3 mt-1">Width in percentage to keep the dialog fluid with window
                            width.
                          </p>
<div class="percent-width-dialog" title="Percent Width">
<p>Pellentesque habitant morbi tristique senectus et netus
                              et malesuada fames ac turpis egestas. Vestibulum tortor
                              quam, feugiat vitae, ultricies eget, tempor sit amet,
                              ante.
                            </p>
<p>Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.
                              Quisque sit amet est et sapien ullamcorper pharetra.
                            </p>
</div>
</div>
</div>
<!-- Full Width -->
<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-success font-medium-1 full-width-dialog-btn mt-1">Full Width</button>
<p class="font-small-3 mt-1">full width dialog.</p>
<div class="full-width-dialog" title="Full Width">
<p>Pellentesque habitant morbi tristique senectus et netus
                              et malesuada fames ac turpis egestas. Vestibulum tortor
                              quam, feugiat vitae, ultricies eget, tempor sit amet,
                              ante.
                            </p>
<p>Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.
                              Quisque sit amet est et sapien ullamcorper pharetra.
                            </p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Dialog Forms -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Dialog Forms</h4>
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
<div class="row">
<!-- Basic Form -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-primary font-medium-1 basic-form-dialog-btn mt-1">Basic Form</button>
<p class="font-small-3 mt-1"></p>
<div class="basic-form-dialog" title="Basic Form">
<form>
<div class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input aria-describedby="emailHelp" class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email"/>
<small class="form-text text-muted" id="emailHelp">We'll never share your email with anyone else.</small>
</div>
<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password"/>
</div>
<div class="form-group">
<label for="exampleSelect1">Example select</label>
<select class="form-control" id="exampleSelect1">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</div>
<div class="form-group">
<label for="exampleSelect2">Example multiple select</label>
<select class="form-control" id="exampleSelect2" multiple="">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</div>
<div class="form-group">
<label for="exampleTextarea">Example textarea</label>
<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
</div>
</form>
</div>
</div>
</div>
<!-- Grid Form -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-success font-medium-1 grid-form-dialog-btn mt-1">Grid Form</button>
<p class="font-small-3 mt-1"></p>
<div class="grid-form-dialog" title="Grid Form">
<div class="container">
<form>
<div class="form-group row">
<label class="col-sm-2 col-form-label" for="inputEmail3">Email</label>
<div class="col-sm-10">
<input class="form-control" id="inputEmail3" placeholder="Email" type="email"/>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label" for="inputPassword3">Password</label>
<div class="col-sm-10">
<input class="form-control" id="inputPassword3" placeholder="Password" type="password"/>
</div>
</div>
<div class="form-group row">
<div class="offset-sm-2 col-sm-10">
<button class="btn btn-primary" type="submit">Sign in</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<!-- Inline Form -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-danger font-medium-1 inline-form-dialog-btn mt-1">Inline Form</button>
<p class="font-small-3 mt-1"></p>
<div class="inline-form-dialog" title="Inline Form">
<form class="form-inline">
<div class="form-group">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input class="form-control" id="exampleInputEmail3" placeholder="Enter email" type="email"/>
</div>
<div class="form-group">
<label class="sr-only" for="exampleInputPassword3">Password</label>
<input class="form-control" id="exampleInputPassword3" placeholder="Password" type="password"/>
</div>
<button class="btn btn-primary" type="submit">Sign in</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // dialogs section end -->
<!-- tooltips section start -->
<section id="tooltips">
<div class="row">
<div class="col-12 mt-1 mb-3">
<h4>Tooltips</h4>
<hr/>
</div>
</div>
<!-- Basic Dialogs -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Examples</h4>
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
<div class="row">
<!-- Default -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-primary font-medium-1 default-tooltip mt-1" title="Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.">Default</button>
<p class="font-small-3 mt-1">Tooltips can be attached to any element. When you hover
                            the element with your mouse, the title attribute is displayed
                            in a little box next to the element, just like a native
                            tooltip.
                          </p>
</div>
</div>
<!-- Tooltip Content -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-primary font-medium-1 tooltip-content mt-1" title="">Tooltip Content</button>
<p class="font-small-3 mt-1">The content of the tooltip.When changing this option, you
                            likely need to also change the <code>items</code> option.</p>
</div>
</div>
<!-- Track The Mouse -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-primary font-medium-1 tooltip-track-mouse mt-1" title="Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.">Track The Mouse</button>
<p class="font-small-3 mt-1">Here the tooltips are positioned relative to the mouse,
                            and follow the mouse while it moves above the element,
                            using the <code>track</code> option.</p>
</div>
</div>
</div>
<hr/>
<div class="row">
<!-- Show Animation -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-primary font-medium-1 show-tooltip-animation mt-1" title="Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.">Show Animation</button>
<p class="font-small-3 mt-1">If and how to animate the showing of the tooltip.</p>
</div>
</div>
<!-- Hide Animation -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-primary font-medium-1 hide-tooltip-animation mt-1" title="Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.">Hide Animation</button>
<p class="font-small-3 mt-1">If and how to animate the hiding of the tooltip.</p>
</div>
</div>
<!-- Custom Animation -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-primary font-medium-1 custom-tooltip-animation mt-1" title="Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.">Custom Animation</button>
<p class="font-small-3 mt-1">This demo shows how to customize animations using the open
                            event.
                          </p>
</div>
</div>
</div>
<hr/>
<div class="row">
<!-- Position Top -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-primary font-medium-1 tooltip-position-top mt-1" title="Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.">Position Top</button>
<p class="font-small-3 mt-1">Identifies the position of the tooltip in relation to the
                            associated target element. The of option defaults to
                            the target element, but you can specify another element
                            to position against. Here we have set tooltip on top
                            of the button.</p>
</div>
</div>
<!-- Postion Right -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-primary font-medium-1 tooltip-position-right mt-1" title="Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.">Postion Right</button>
<p class="font-small-3 mt-1">Identifies the position of the tooltip in relation to the
                            associated target element. The of option defaults to
                            the target element, but you can specify another element
                            to position against. Here we have set tooltip on right
                            of the button.</p>
</div>
</div>
<!-- Position Bottom -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-primary font-medium-1 tooltip-position-bottom mt-1" title="Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.">Position Bottom</button>
<p class="font-small-3 mt-1">Identifies the position of the tooltip in relation to the
                            associated target element. The of option defaults to
                            the target element, but you can specify another element
                            to position against. Here we have set tooltip on bottom
                            of the button.</p>
</div>
</div>
</div>
<hr/>
<div class="row">
<!-- Position Left -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-primary font-medium-1 tooltip-position-left mt-1" title="Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.">Position Left</button>
<p class="font-small-3 mt-1">Identifies the position of the tooltip in relation to the
                            associated target element. The of option defaults to
                            the target element, but you can specify another element
                            to position against. Here we have set tooltip on left
                            of the button.</p>
</div>
</div>
<!-- Tooltip Primary -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-primary font-medium-1 tooltip-primary mt-1" title="Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.">Tooltip Primary</button>
<p class="font-small-3 mt-1">Display tooltip with primary background color using the
                            tooltipClass option.</p>
</div>
</div>
<!-- Tooltip Info -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-primary font-medium-1 tooltip-info mt-1" title="Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.">Tooltip Info</button>
<p class="font-small-3 mt-1">Display tooltip with Info background color using the tooltipClass
                            option.
                          </p>
</div>
</div>
</div>
<hr/>
<div class="row">
<!-- Tooltip Warning -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-primary font-medium-1 tooltip-warning mt-1" title="Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.">Tooltip Warning</button>
<p class="font-small-3 mt-1">Display tooltip with Warning background color using the
                            tooltipClass option.</p>
</div>
</div>
<!-- Tooltip Success -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-primary font-medium-1 tooltip-success mt-1" title="Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.">Tooltip Success</button>
<p class="font-small-3 mt-1">Display tooltip with Success background color using the
                            tooltipClass option.</p>
</div>
</div>
<!-- Tooltip Danger -->
<div class="col-lg-4 col-sm-4 col-12">
<div class="form-group text-center">
<button class="btn btn-lg btn-primary font-medium-1 tooltip-danger mt-1" title="Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.">Tooltip Danger</button>
<p class="font-small-3 mt-1">Display tooltip with Danger background color using the
                            tooltipClass option.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // tooltips section end -->
</div>
