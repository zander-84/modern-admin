<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\SearchImagesAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Search Images</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/inde.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="search-images.html#">Search</a>
</li>
<li class="breadcrumb-item active">Search Images
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="search-images.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="search-images.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="search-images.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="search-images.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Search form-->
<section class="card overflow-hidden" id="search-images">
<div class="card-header">
<h4 class="card-title">Images search results</h4>
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
<div class="card-body pb-0">
<fieldset class="form-group position-relative mb-0">
<input class="form-control form-control-xl input-xl" id="iconLeft1" placeholder="Explore Modern ..." type="text"/>
<div class="form-control-position">
<i class="ft-mic font-medium-4"></i>
</div>
</fieldset>
</div>
<!--Search Navbar-->
<div class="card-body" id="search-nav">
<ul class="nav nav-inline">
<li class="nav-item">
<a class="nav-link" href="search-website.html"><i class="la la-link"></i> Website</a>
</li>
<li class="nav-item">
<a class="nav-link active" href="search-images.html"><i class="la la-file-image-o"></i> Images</a>
</li>
<li class="nav-item">
<a class="nav-link" href="search-videos.html"><i class="la la-file-video-o"></i> Videos</a>
</li>
<li class="nav-item">
<a class="nav-link" href="search-images.html#"><i class="la la-map-marker"></i> Maps</a>
</li>
<li class="dropdown nav-item float-right">
<a class="btn dropdown-toggle" data-toggle="dropdown" href="search-images.html#">
<i class="pe-li-settings"></i>
<span class="caret"></span>
</a>
<ul class="dropdown-menu">
<li class="dropdown-item"><a class="dropdown-link" href="search-images.html#">Languages</a></li>
<li class="dropdown-item"><a class="dropdown-link" href="search-images.html#">Search Settings</a></li>
<li class="dropdown-item"><a class="dropdown-link" href="search-images.html#">History</a></li>
<li class="dropdown-item"><a class="dropdown-link" href="search-images.html#">Search Help</a></li>
</ul>
</li>
</ul>
</div>
<!--/ Search Navbar-->
<!--Search Result-->
<div class="card-body" id="search-results">
<div class="my-gallery" itemscope="" itemtype="http://schema.org/ImageGallery">
<div class="card-deck-wrapper">
<div class="card-deck">
<figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="480x360" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/1.jpg" itemprop="contentUrl">
<img alt="Image description" class="gallery-thumbnail card-img-top" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/1.jpg"/>
</a>
<div class="card-body px-0">
<p>
<span class="text-bold-600">Maecenas</span> sollicitudin
                          <span class="font-small-2 text-muted float-right">720 x 600</span>
</p>
<p class="card-text">Nulla ac vulputate mauris. Nam tincidunt odio purus.</p>
</div>
</figure>
<figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="480x360" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/2.jpg" itemprop="contentUrl">
<img alt="Image description" class="gallery-thumbnail card-img-top" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/2.jpg"/>
</a>
<div class="card-body px-0">
<p>
<span class="text-bold-600">Aliquam </span> vel nib
                          <span class="font-small-2 text-muted float-right">480 x 360</span>
</p>
<p class="card-text">Phasellus vitae aliquam felis, et bibendum orci.</p>
</div>
</figure>
<figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="480x360" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/3.jpg" itemprop="contentUrl">
<img alt="Image description" class="gallery-thumbnail card-img-top" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/3.jpg"/>
</a>
<div class="card-body px-0">
<p>
<span class="text-bold-600">Molestie </span> accumsan
                          <span class="font-small-2 text-muted float-right">480 x 360</span>
</p>
<p class="card-text">Maecenas commodo odio sed nibh viverra vestibulum.</p>
</div>
</figure>
<figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="480x360" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/4.jpg" itemprop="contentUrl">
<img alt="Image description" class="gallery-thumbnail card-img-top" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/4.jpg"/>
</a>
<div class="card-body px-0">
<p>
<span class="text-bold-600">Nam eu </span> efficitur
                          <span class="font-small-2 text-muted float-right">500 x 360</span>
</p>
<p class="card-text">Donec porttitor massa vitae leo rutrum viverra.</p>
</div>
</figure>
</div>
</div>
<div class="card-deck-wrapper">
<div class="card-deck mt-1">
<figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="480x360" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/5.jpg" itemprop="contentUrl">
<img alt="Image description" class="gallery-thumbnail card-img-top" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/5.jpg"/>
</a>
<div class="card-body px-0">
<p>
<span class="text-bold-600">Porttitor </span> donec
                          <span class="font-small-2 text-muted float-right">560 x 360</span>
</p>
<p class="card-text">Sed suscipit velit vitae justo pharetra.</p>
</div>
</figure>
<figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="480x360" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/6.jpg" itemprop="contentUrl">
<img alt="Image description" class="gallery-thumbnail card-img-top" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/6.jpg"/>
</a>
<div class="card-body px-0">
<p>
<span class="text-bold-600">Velit et </span> interdum
                          <span class="font-small-2 text-muted float-right">500 x 360</span>
</p>
<p class="card-text"> Duis auctor velit et interdum maximus.</p>
</div>
</figure>
<figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="480x360" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/7.jpg" itemprop="contentUrl">
<img alt="Image description" class="gallery-thumbnail card-img-top" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/7.jpg"/>
</a>
<div class="card-body px-0">
<p>
<span class="text-bold-600">Natoque </span> efficitur
                          <span class="font-small-2 text-muted float-right">800 x 600</span>
</p>
<p class="card-text">Cum sociis natoque penatibus et magnis dis.</p>
</div>
</figure>
<figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="480x360" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/8.jpg" itemprop="contentUrl">
<img alt="Image description" class="gallery-thumbnail card-img-top" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/8.jpg"/>
</a>
<div class="card-body px-0">
<p>
<span class="text-bold-600">Pharetra </span> enim id
                          <span class="font-small-2 text-muted float-right">500 x 360</span>
</p>
<p class="card-text">Mauris imperdiet enim id urna pharetra.</p>
</div>
</figure>
</div>
</div>
<div class="card-deck-wrapper">
<div class="card-deck mt-1">
<figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="480x360" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/9.jpg" itemprop="contentUrl">
<img alt="Image description" class="gallery-thumbnail card-img-top" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/9.jpg"/>
</a>
<div class="card-body px-0">
<p>
<span class="text-bold-600">Integer </span> fermentum
                          <span class="font-small-2 text-muted float-right">380 x 360</span>
</p>
<p class="card-text">Vel lacinia cursus, est dui tincidunt sem.</p>
</div>
</figure>
<figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="480x360" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/10.jpg" itemprop="contentUrl">
<img alt="Image description" class="gallery-thumbnail card-img-top" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/10.jpg"/>
</a>
<div class="card-body px-0">
<p>
<span class="text-bold-600">Donec congue </span> nec
                          <span class="font-small-2 text-muted float-right">500 x 360</span>
</p>
<p class="card-text">Morbi laoreet ultrices mi ut imperdiet.</p>
</div>
</figure>
<figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="480x360" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/11.jpg" itemprop="contentUrl">
<img alt="Image description" class="gallery-thumbnail card-img-top" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/11.jpg"/>
</a>
<div class="card-body px-0">
<p>
<span class="text-bold-600">Vivamus </span> eget
                          <span class="font-small-2 text-muted float-right">500 x 360</span>
</p>
<p class="card-text">Lorem ipsum dolor sit amet.</p>
</div>
</figure>
<figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
<a data-size="480x360" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/12.jpg" itemprop="contentUrl">
<img alt="Image description" class="gallery-thumbnail card-img-top" itemprop="thumbnail" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/12.jpg"/>
</a>
<div class="card-body px-0">
<p>
<span class="text-bold-600">Aenean </span> pharetra
                          <span class="font-small-2 text-muted float-right">500 x 360</span>
</p>
<p class="card-text">Ligula ornare velit porttitor viverra et a felis.</p>
</div>
</figure>
</div>
</div>
<div class="text-center">
<nav aria-label="Page navigation">
<ul class="pagination pagination-separate pagination-round pagination-flat">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="search-images.html#">
<span aria-hidden="true">« Prev</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="search-images.html#">1</a></li>
<li class="page-item"><a class="page-link" href="search-images.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="search-images.html#">3</a></li>
<li class="page-item"><a class="page-link" href="search-images.html#">4</a></li>
<li class="page-item"><a class="page-link" href="search-images.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="search-images.html#">
<span aria-hidden="true">Next »</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
</div>
</div>
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
<!--/ PhotoSwipe -->
</div>
</div>
<!--/ Search Result-->
</section>
<!--/ Search form-->
</div>
</div>
</div>