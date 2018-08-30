<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\GalleryMasonryAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Gallery Masonry Grid</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="gallery-masonry.html#">Gallery</a>
</li>
<li class="breadcrumb-item active">Gallery Masonry Grid
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="gallery-masonry.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="gallery-masonry.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="gallery-masonry.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="gallery-masonry.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Description -->
<section class="card" id="description">
<div class="card-header">
<h4 class="card-title">Description</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body">
<div class="card-text">
<p>Masonry is a JavaScript grid layout library. It works by placing
                  elements in optimal position based on available vertical space,
                  sort of like a mason fitting stones in a wall. You’ve probably
                  seen it in use all over the Internet.</p>
<p>Please read the Masonry Cascading grid layout library <a href="http://masonry.desandro.com/" target="_blank">documentation</a> for usage information.</p>
</div>
</div>
</div>
</section>
<!--/ Description -->
<!-- Image grid -->
<section class="card" id="image-grid">
<div class="card-header">
<h4 class="card-title">Masonry image gallery</h4>
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
<div class="card-content">
<div class="card-body">
<div class="card-text">
<p>Masonry Image gallery grid with photo-swipe integration. Auto arrange
                  images based on device screen size.</p>
</div>
</div>
<div class="masonry-grid my-gallery mx-1" itemscope="" itemtype="http://schema.org/ImageGallery">
<!-- width of .grid-sizer used for columnWidth -->
<div class="grid-sizer"></div>
<div class="grid-item">
<figure class="card" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="600x441" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-10.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-10.jpg"/>
</a>
</figure>
</div>
<div class="grid-item">
<figure class="card" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="600x446" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-8.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-8.jpg"/>
</a>
</figure>
</div>
<div class="grid-item">
<figure class="card" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="600x798" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-21.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-21.jpg"/>
</a>
</figure>
</div>
<div class="grid-item">
<figure class="card" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="600x401" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-14.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-14.jpg"/>
</a>
</figure>
</div>
<div class="grid-item">
<figure class="card" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="600x404" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-1.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-1.jpg"/>
</a>
</figure>
</div>
<div class="grid-item">
<figure class="card" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="600x400" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-2.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-2.jpg"/>
</a>
</figure>
</div>
<div class="grid-item">
<figure class="card" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="600x452" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-3.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-3.jpg"/>
</a>
</figure>
</div>
<div class="grid-item">
<figure class="card" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="600x453" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-4.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-4.jpg"/>
</a>
</figure>
</div>
<div class="grid-item">
<figure class="card" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="600x450" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-5.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-5.jpg"/>
</a>
</figure>
</div>
<div class="grid-item">
<figure class="card" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="600x447" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-6.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-6.jpg"/>
</a>
</figure>
</div>
<div class="grid-item">
<figure class="card" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="600x868" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-18.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-18.jpg"/>
</a>
</figure>
</div>
<div class="grid-item">
<figure class="card" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="600x453" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-7.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-7.jpg"/>
</a>
</figure>
</div>
<div class="grid-item">
<figure class="card" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="600x450" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-9.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-9.jpg"/>
</a>
</figure>
</div>
<div class="grid-item">
<figure class="card" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="600x446" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-11.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-11.jpg"/>
</a>
</figure>
</div>
<div class="grid-item">
<figure class="card" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="600x856" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-17.jpg" itemprop="contentUrl">
<img alt="Image description" class="img-thumbnail" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-600/portfolio-17.jpg"/>
</a>
</figure>
</div>
</div>
</div>
</section>
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
<!--/ Image grid -->
<!-- Video grid -->
<section class="card" id="video-grid">
<div class="card-header">
<h4 class="card-title">Masonry video gallery</h4>
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
<div class="card-content">
<div class="card-body">
<div class="card-text">
<p>This section contain responsive embedded Masonry video gallery with
                  grid 3-2-1 columns with title &amp; description. This demo contain
                  vimeo and youtube embedded videos.</p>
</div>
</div>
<div class="card-body">
<div class="masonry-grid">
<!-- width of .grid-sizer used for columnWidth -->
<div class="grid-sizer"></div>
<div class="grid-item">
<div class="card">
<div class="card-img-top embed-responsive embed-responsive-item embed-responsive-16by9">
<iframe class="img-thumbnail" height="360" src="https://player.vimeo.com/video/118589137?title=0&amp;byline=0" width="640"></iframe>
</div>
</div>
</div>
<div class="grid-item">
<div class="card">
<div class="card-img-top embed-responsive embed-responsive-item embed-responsive-16by9">
<iframe class="img-thumbnail" height="360" src="https://player.vimeo.com/video/173541384?color=ff9933&amp;title=0&amp;byline=0" width="640"></iframe>
</div>
</div>
</div>
<div class="grid-item">
<div class="card">
<div class="card-img-top embed-responsive embed-responsive-item embed-responsive-16by9">
<iframe class="img-thumbnail" height="360" src="https://player.vimeo.com/video/161753790?color=ff9933&amp;title=0&amp;byline=0" width="640"></iframe>
</div>
</div>
</div>
<div class="grid-item">
<div class="card">
<div class="card-img-top embed-responsive embed-responsive-item embed-responsive-16by9">
<iframe class="img-thumbnail" src="https://www.youtube.com/embed/SsE5U7ta9Lw?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
</div>
</div>
</div>
<div class="grid-item">
<div class="card">
<div class="card-img-top embed-responsive embed-responsive-item embed-responsive-16by9">
<iframe class="img-thumbnail" src="https://www.youtube.com/embed/zqDxfHvZ3DU?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
</div>
</div>
</div>
<div class="grid-item">
<div class="card">
<div class="card-img-top embed-responsive embed-responsive-item embed-responsive-16by9">
<iframe class="img-thumbnail" src="https://www.youtube.com/embed/hunYLg8I1Os?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Video grid -->
</div>
</div>
</div>