<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\TimelineCenterAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Timeline Center</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="timeline-center.html#">Gallery</a>
</li>
<li class="breadcrumb-item active">Responsive Timeline
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="timeline-center.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="timeline-center.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="timeline-center.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="timeline-center.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<section class="timeline-center timeline-wrapper" id="timeline">
<h3 class="page-title text-center">Timeline</h3>
<ul class="timeline">
<li class="timeline-line"></li>
<li class="timeline-group">
<a class="btn btn-primary" href="timeline-center.html#"><i class="la la-calendar-o"></i> Today</a>
</li>
</ul>
<ul class="timeline">
<li class="timeline-line"></li>
<li class="timeline-item">
<div class="timeline-badge">
<span class="bg-red bg-lighten-1" data-placement="right" data-toggle="tooltip" title="Portfolio project work"><i class="la la-plane"></i></span>
</div>
<div class="timeline-card card border-grey border-lighten-2">
<div class="card-header">
<h4 class="card-title"><a href="timeline-center.html#">Portfolio project work</a></h4>
<p class="card-subtitle text-muted mb-0 pt-1">
<span class="font-small-3">5 hours ago</span>
</p>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<img alt="Timeline Image 1" class="img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-1200/portfolio-1.jpg"/>
<div class="card-content">
<div class="card-body">
<p class="card-text">Nullam facilisis fermentum aliquam. Suspendisse ornare dolor
                        vitae libero hendrerit auctor lacinia a ligula. Curabitur
                        elit tellus, porta ut orci sed, fermentum bibendum nisi.</p>
<ul class="list-inline mb-1">
<li class="pr-1">
<a class="" href="timeline-center.html#">
<span class="la la-thumbs-o-up"></span> Like</a>
</li>
<li class="pr-1">
<a class="" href="timeline-center.html#">
<span class="la la-commenting-o"></span> Comment</a>
</li>
<li>
<a class="" href="timeline-center.html#">
<span class="la la-share-alt"></span> Share</a>
</li>
</ul>
</div>
</div>
<div class="card-footer px-0 py-0">
<div class="card-body">
<div class="media">
<div class="media-left pr-1">
<a href="timeline-center.html#">
<span class="avatar avatar-online">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png"/>
</span>
</a>
</div>
<div class="media-body">
<p class="text-bold-600 mb-0"><a href="timeline-center.html#">Jason Ansley</a></p>
<p class="m-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel
                            metus scelerisque ante sollicitudin commodo.</p>
<ul class="list-inline mb-1">
<li class="pr-1">
<a class="" href="timeline-center.html#">
<span class="la la-thumbs-o-up"></span> Like</a>
</li>
<li class="pr-1">
<a class="" href="timeline-center.html#">
<span class="la la-commenting-o"></span> Replay</a>
</li>
</ul>
<div class="media">
<div class="media-left pr-1">
<a href="timeline-center.html#">
<span class="avatar avatar-online">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-18.png"/>
</span>
</a>
</div>
<div class="media-body">
<p class="text-bold-600 mb-0"><a href="timeline-center.html#">Janice Johnston</a></p>
<p>Gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
<ul class="list-inline mb-1">
<li class="pr-1">
<a class="" href="timeline-center.html#">
<span class="la la-thumbs-o-up"></span> Like</a>
</li>
<li class="pr-1">
<a class="" href="timeline-center.html#">
<span class="la la-commenting-o"></span> Replay</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="card-body">
<fieldset class="form-group position-relative has-icon-left mb-0">
<input class="form-control" placeholder="Write comments..." type="text"/>
<div class="form-control-position">
<i class="la la-dashcube"></i>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</li>
<li class="timeline-item mt-3">
<div class="timeline-badge">
<span class="avatar avatar-online" data-placement="left" data-toggle="tooltip" title="Eu pid nunc urna integer">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-14.png"/>
</span>
</div>
<div class="timeline-card card border-grey border-lighten-2">
<div class="card-header">
<h4 class="card-title"><a href="timeline-center.html#">Sofia Orav</a></h4>
<p class="card-subtitle text-muted mb-0 pt-1">
<span class="font-small-3">8 hours ago</span>
</p>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="embed-responsive embed-responsive-4by3">
<iframe src="https://player.vimeo.com/video/118589137?title=0&amp;byline=0"></iframe>
</div>
<div class="card-content">
<div class="card-body">
<p class="card-text">Nullam facilisis fermentum aliquam. Suspendisse ornare dolor
                        vitae libero hendrerit auctor lacinia a ligula. Curabitur
                        elit tellus, porta ut orci sed, fermentum bibendum nisi.</p>
<p class="card-text">Eu pid nunc urna integer, sed, cras tortor scelerisque penatibus
                        facilisis a pulvinar, rhoncus sagittis ut nunc elit! Sociis
                        in et? Rhoncus, vel dignissim in scelerisque. Dolor lacus
                        pulvinar adipiscing adipiscing montes! Elementum risus adipiscing
                        non, cras scelerisque risus penatibus? Massa vut, habitasse,
                        tincidunt!
                      </p>
<ul class="list-inline mb-1">
<li class="pr-1">
<a class="" href="timeline-center.html#">
<span class="la la-thumbs-o-up"></span> Like</a>
</li>
<li class="pr-1">
<a class="" href="timeline-center.html#">
<span class="la la-commenting-o"></span> Comment</a>
</li>
<li>
<a class="" href="timeline-center.html#">
<span class="la la-share-alt"></span> Share</a>
</li>
</ul>
</div>
</div>
<div class="card-footer px-0 py-0">
<div class="card-body">
<fieldset class="form-group position-relative has-icon-left mb-0">
<input class="form-control" placeholder="Write comments..." type="text"/>
<div class="form-control-position">
<i class="la la-dashcube"></i>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</li>
<li class="timeline-item block">
<div class="timeline-badge">
<a class="border-silc" data-container="body" data-context="inverse" data-original-title="block highlight" href="timeline-center.html#" title=""></a>
</div>
<div class="timeline-card card border-grey border-lighten-2">
<div class="card-header">
<div class="text-center">
<p><i class="la la-bar-chart font-medium-4"></i></p>
<h4>Campaign Report</h4>
<p class="timeline-date">18 hours ago</p>
<p>Rhoncus, vel dignissim in scelerisque. Dolor lacus pulvinar adipiscing
                      adipiscing montes! Elementum risus adipiscing non, cras scelerisque
                      risus penatibus? Massa vut, habitasse, tincidunt!</p>
</div>
</div>
<div class="card-content">
<div class="card-body">
<div class="chart-container">
<div class="height-400 echart-container overflow-hidden" id="stacked-column"></div>
</div>
</div>
</div>
</div>
</li>
</ul>
<!-- 2016 -->
<ul class="timeline">
<li class="timeline-line"></li>
<li class="timeline-group">
<a class="btn btn-primary" href="timeline-center.html#"><i class="la la-calendar-o"></i> 2016</a>
</li>
</ul>
<ul class="timeline">
<li class="timeline-line"></li>
<!-- /.timeline-line -->
<li class="timeline-item">
<div class="timeline-badge">
<span class="avatar avatar-online" data-placement="right" data-toggle="tooltip" title="Eu pid nunc urna integer">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-5.png"/>
</span>
</div>
<div class="timeline-card card text-white">
<img alt="Card image" class="card-img img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-1200/portfolio-2.jpg"/>
<div class="card-img-overlay bg-overlay">
<h4 class="card-title white">Good Morning</h4>
<p class="card-text">
<small>26 Aug, 2016 at 2.00 A.M</small>
</p>
<p class="card-text">This is a wider card with supporting text below as a natural lead-in
                    to additional content. This content is a little bit longer.</p>
</div>
</div>
</li>
<li class="timeline-item mt-3">
<div class="timeline-badge">
<span class="bg-teal bg-lighten-1" data-placement="left" data-toggle="tooltip" title="Nullam facilisis fermentum"><i class="la la-check-square-o"></i></span>
</div>
<div class="timeline-card card border-grey border-lighten-2">
<div class="card-header">
<h4 class="card-title"><a href="timeline-center.html#">Sofia Orav</a></h4>
<p class="card-subtitle text-muted mb-0 pt-1">
<span class="font-small-3">18 June, 2016 at 4.50 P.M</span>
</p>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-content">
<div class="card-body">
<p class="card-text">Nullam facilisis fermentum aliquam. Suspendisse ornare dolor
                        vitae libero hendrerit auctor lacinia a ligula. Curabitur
                        elit tellus, porta ut orci sed, fermentum bibendum nisi.</p>
<ul class="list-group icheck-task">
<li class="list-group-item">
<input id="input-1" type="checkbox"/> Cras justo odio</li>
<li class="list-group-item">
<input checked="" id="input-2" type="checkbox"/> Dapibus ac facilisis in</li>
<li class="list-group-item">
<input id="input-3" type="checkbox"/> Morbi leo risus</li>
<li class="list-group-item">
<input checked="" disabled="" id="input-4" type="checkbox"/> Porta ac consectetur ac</li>
<li class="list-group-item">
<input id="input-5" type="checkbox"/> Vestibulum at eros</li>
</ul>
</div>
</div>
<div class="card-footer px-0 py-0">
<div class="card-body">
<fieldset class="form-group position-relative has-icon-left mb-0">
<input class="form-control" placeholder="Write comments..." type="text"/>
<div class="form-control-position">
<i class="la la-dashcube"></i>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</li>
<li class="timeline-item">
<div class="timeline-badge">
<span class="bg-purple bg-lighten-1" data-placement="right" data-toggle="tooltip" title="Nullam facilisis fermentum"><i class="la la la-area-chart"></i></span>
</div>
<div class="timeline-card card border-grey border-lighten-2">
<div class="card-header">
<h4 class="card-title"><a href="timeline-center.html#">Non-ribbon Chord Chart</a></h4>
<p class="card-subtitle text-muted mb-0 pt-1">
<span class="font-small-3">6 Feb, 2016 at 6.00 A.M</span>
</p>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-content">
<div class="card-body">
<p class="card-text">Nullam facilisis fermentum aliquam. Suspendisse ornare dolor
                        vitae libero hendrerit auctor lacinia a ligula. Curabitur
                        elit tellus, porta ut orci sed, fermentum bibendum nisi.</p>
<div class="chart-container">
<div class="height-400 echart-container overflow-hidden" id="non-ribbon-chord"></div>
</div>
</div>
</div>
<div class="card-footer px-0 py-0">
<div class="card-body">
<fieldset class="form-group position-relative has-icon-left mb-0">
<input class="form-control" placeholder="Write comments..." type="text"/>
<div class="form-control-position">
<i class="la la-dashcube"></i>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</li>
</ul>
<!-- 2015 -->
<ul class="timeline">
<li class="timeline-line"></li>
<li class="timeline-group">
<a class="btn btn-primary" href="timeline-center.html#"><i class="la la-calendar-o"></i> 2015</a>
</li>
</ul>
<ul class="timeline">
<li class="timeline-line"></li>
<!-- /.timeline-line -->
<li class="timeline-item block">
<div class="timeline-badge">
<a class="border-silc" data-container="body" data-context="inverse" data-original-title="block highlight" href="timeline-center.html#" title=""></a>
</div>
<div class="timeline-card card border-grey border-lighten-2">
<div class="card-header">
<div class="text-center">
<p class="mt-1"><i class="la la-file-image-o font-medium-4"></i></p>
<h4>Media Gallery</h4>
<p class="timeline-date">July 1, 2015</p>
<p>Eu pid nunc urna integer, sed, cras tortor scelerisque penatibus
                      facilisis a pulvinar, rhoncus sagittis ut nunc elit! Sociis
                      in et?</p>
</div>
</div>
<!-- Image grid -->
<div class="card-content">
<div class="card-body my-gallery" itemscope="" itemtype="http://schema.org/ImageGallery">
<div class="row">
<figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="480x360" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/1.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail img-fluid" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/1.jpg"/>
</a>
</figure>
<figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="480x360" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/2.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail img-fluid" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/2.jpg"/>
</a>
</figure>
<figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="480x360" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/3.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail img-fluid" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/3.jpg"/>
</a>
</figure>
<figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="480x360" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/4.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail img-fluid" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/4.jpg"/>
</a>
</figure>
</div>
<div class="row">
<figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="480x360" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/5.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail img-fluid" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/5.jpg"/>
</a>
</figure>
<figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="480x360" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/6.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail img-fluid" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/6.jpg"/>
</a>
</figure>
<figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="480x360" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/7.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail img-fluid" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/7.jpg"/>
</a>
</figure>
<figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="480x360" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/8.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail img-fluid" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/8.jpg"/>
</a>
</figure>
</div>
<div class="row">
<figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="480x360" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/9.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail img-fluid" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/9.jpg"/>
</a>
</figure>
<figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="480x360" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/10.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail img-fluid" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/10.jpg"/>
</a>
</figure>
<figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="480x360" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/11.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail img-fluid" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/11.jpg"/>
</a>
</figure>
<figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="480x360" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/12.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail img-fluid" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/12.jpg"/>
</a>
</figure>
</div>
</div>
<!--/ Image grid -->
<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">
<!-- Background of PhotoSwipe. 
                     It's a separate element as animating opacity is faster than rgba(). -->
<div class="pswp__bg"></div>
<!-- Slides wrapper with overflow:hidden. -->
<div class="pswp__scroll-wrap">
<!-- Container that holds slides. 
                        PhotoSwipe keeps only 3 of them in the DOM to save memory.
                        Don't modify these 3 pswp__item elements, data is added later on. -->
<div class="pswp__container">
<div class="pswp__item"></div>
<div class="pswp__item"></div>
<div class="pswp__item"></div>
</div>
<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
<div class="pswp__ui pswp__ui--hidden">
<div class="pswp__top-bar">
<!--  Controls are self-explanatory. Order can be changed. -->
<div class="pswp__counter"></div>
<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
<button class="pswp__button pswp__button--share" title="Share"></button>
<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
<!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
<!-- element will get class pswp__preloader-active when preloader is running -->
<div class="pswp__preloader">
<div class="pswp__preloader__icn">
<div class="pswp__preloader__cut">
<div class="pswp__preloader__donut"></div>
</div>
</div>
</div>
</div>
<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
<div class="pswp__share-tooltip"></div>
</div>
<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
</button>
<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
</button>
<div class="pswp__caption">
<div class="pswp__caption__center"></div>
</div>
</div>
</div>
</div>
</div>
<!--/ PhotoSwipe -->
</div>
</li>
<li class="timeline-item">
<div class="timeline-badge">
<span class="bg-warning bg-darken-1" data-placement="right" data-toggle="tooltip" title="Application API Support"><i class="la la-life-ring"></i></span>
</div>
<div class="timeline-card card border-grey border-lighten-2">
<div class="card-header">
<div class="media">
<div class="media-left pr-1">
<a href="timeline-center.html#">
<span class="avatar avatar-md avatar-busy">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-18.png"/>
</span>
<i></i>
</a>
</div>
<div class="media-body">
<h4 class="card-title"><a href="timeline-center.html#">Application API Support</a></h4>
<p class="card-subtitle text-muted mb-0 pt-1">
<span class="font-small-3">15 Oct, 2015 at 8.00 A.M</span>
<span class="badge badge-pill badge-default badge-warning float-right">High</span>
</p>
</div>
</div>
</div>
<div class="card-content">
<img alt="Timeline Image 1" class="img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-1200/portfolio-3.jpg"/>
<div class="card-content">
<div class="card-body">
<p class="card-text">Nullam facilisis fermentum aliquam. Suspendisse ornare dolor
                        vitae libero hendrerit auctor lacinia a ligula. Curabitur
                        elit tellus, porta ut orci sed, fermentum bibendum nisi.</p>
<ul class="list-inline mb-1">
<li class="pr-1">
<a class="" href="timeline-center.html#">
<span class="la la-commenting-o"></span> Comment</a>
</li>
</ul>
</div>
</div>
<div class="card-footer px-0 py-0">
<div class="card-body">
<div class="media">
<div class="media-left pr-1">
<a href="timeline-center.html#">
<span class="avatar avatar-online">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-4.png"/>
</span>
</a>
</div>
<div class="media-body">
<p class="text-bold-600 mb-0"><a href="timeline-center.html#">Crystal Lawson</a></p>
<p class="m-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel
                            metus scelerisque ante sollicitudin commodo.</p>
<div class="media">
<div class="media-left pr-1">
<a href="timeline-center.html#">
<span class="avatar avatar-online">
<img alt="avatar" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-6.png"/>
</span>
</a>
</div>
<div class="media-body">
<p class="text-bold-600 mb-0"><a href="timeline-center.html#">Rafila Găitan</a></p>
<p>Gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
</div>
</div>
</div>
</div>
<fieldset class="form-group position-relative has-icon-left mb-0">
<input class="form-control" placeholder="Write comments..." type="text"/>
<div class="form-control-position">
<i class="la la-dashcube"></i>
</div>
</fieldset>
</div>
</div>
</div>
</div>
</li>
<li class="timeline-item mt-3">
<div class="timeline-badge">
<span class="bg-amber bg-darken-1" data-placement="left" data-toggle="tooltip" title="Quote of the day"><i class="la la-smile-o"></i></span>
</div>
<div class="timeline-card card border-grey border-lighten-2">
<div class="card-header">
<h4 class="card-title"><a href="timeline-center.html#">Quote of the day</a></h4>
<p class="card-subtitle text-muted mb-0 pt-1">
<span class="font-small-3">03 March, 2015 at 5 P.M</span>
</p>
</div>
<div class="card-content">
<img alt="Timeline Image 1" class="img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-3.jpg"/>
<div class="card-body">
<blockquote class="card-bodyquote">
<p class="card-text">Eu pid nunc urna integer, sed, cras tortor scelerisque penatibus
                        facilisis a pulvinar, rhoncus sagittis ut nunc elit! Sociis
                        in et?</p>
<footer>Someone famous in
                        <cite title="Source Title"> - Source Title</cite>
</footer>
</blockquote>
</div>
</div>
</div>
</li>
</ul>
<!-- 2014 -->
<ul class="timeline">
<li class="timeline-line"></li>
<li class="timeline-group">
<a class="btn btn-primary" href="timeline-center.html#"><i class="la la-calendar-o"></i> 2014</a>
</li>
</ul>
<ul class="timeline">
<li class="timeline-line"></li>
<!-- /.timeline-line -->
<li class="timeline-item block">
<div class="timeline-badge">
<a class="border-silc" data-container="body" data-context="inverse" data-original-title="block highlight" href="timeline-center.html#" title=""></a>
</div>
<div class="timeline-card card border-grey border-lighten-2">
<div class="card-header">
<div class="text-center">
<p><i class="la la-map-marker font-medium-4"></i></p>
<h4>Moved to Brooklyn</h4>
<p class="timeline-date">Jan 1, 2014</p>
<p>Eu pid nunc urna integer, sed, cras tortor scelerisque penatibus
                      facilisis a pulvinar, rhoncus sagittis ut nunc elit! Sociis
                      in et? Rhoncus, vel dignissim in scelerisque. Dolor lacus pulvinar
                      adipiscing adipiscing montes! Elementum risus adipiscing non,
                      cras scelerisque risus penatibus? Massa vut, habitasse, tincidunt!</p>
</div>
</div>
<div class="card-content">
<div class="card-body">
<div class="height-450" id="moved-brooklyn"></div>
</div>
</div>
</div>
</li>
</ul>
<!-- 2014 -->
<ul class="timeline">
<li class="timeline-line"></li>
<li class="timeline-group">
<a class="btn btn-primary" href="timeline-center.html#"><i class="la la-calendar-o"></i> Founded in 2012</a>
</li>
</ul>
</section>
</div>
</div>
</div>