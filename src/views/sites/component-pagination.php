<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ComponentPaginationAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Pagination</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="component-pagination.html#">Components</a>
</li>
<li class="breadcrumb-item active">Pagination
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="component-pagination.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="component-pagination.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="component-pagination.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="component-pagination.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Basic Pagination start -->
<section id="basic-pagination">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default Pagination</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
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
<p>Simple pagination for apps and search results. The large block
                      is hard to miss, easily scalable, and provides large click
                      areas.
                    </p>
<div class="row">
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Basic Pagination</h5>
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center">
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
</ul>
</nav>
<p class="text-center mb-3">Default pagination without next previous.</p>
</div>
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Pagination with Next/Prev Arrows</h5>
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center">
<li class="page-item"><a aria-label="Previous" class="page-link" href="component-pagination.html#">«</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">»</a>
</li>
</ul>
</nav>
<p class="text-center mb-3">Default pagination with next previous icons.</p>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Pagination with Next/Prev Link</h5>
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">Prev</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">Next</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
<p class="text-center mb-3">Default pagination with next previous links.</p>
</div>
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Pagination with Next/Prev Link &amp; Arrows</h5>
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">« Prev</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">Next »</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
<p class="text-center mb-3">Default pagination with next previous icons &amp; text.</p>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Separated Pagination with Next/Prev Arrows</h5>
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">«</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">»</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
<p class="text-center mb-3">For Separated pagination, use class <code>.pagination-separate</code>                          with Next Previous Icons.</p>
</div>
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Pagination with Next/Prev Link</h5>
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">« Prev</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">Next »</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
<p class="text-center mb-3">For Separated pagination, use class <code>.pagination-separate</code>                          with Next Previous Icons &amp; Text.</p>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Flat Pagination</h5>
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-flat">
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
</ul>
</nav>
<p class="text-center mb-3">Flat pagination need class <code>.pagination-flat</code>                          to <code>.pagination</code> class.</p>
</div>
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Flat Pagination with Next/Prev Arrows</h5>
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-flat">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">«</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">»</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
<p class="text-center mb-3">Flat pagination need class <code>.pagination-flat</code>                          to <code>.pagination</code> class.</p>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Flat Pagination with Next/Prev Link</h5>
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-flat">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">« Prev</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">Next »</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
<p class="text-center mb-3">Flat pagination need class <code>.pagination-flat</code>                          to <code>.pagination</code> class.</p>
</div>
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Flat Pagination with Next/Prev Text</h5>
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-flat">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">Prev</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">Next</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
<p class="text-center mb-3">Flat pagination need class <code>.pagination-flat</code>                          to <code>.pagination</code> class.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Basic Pagination end -->
<!-- Pagination Round Style start -->
<section id="round-pagination">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Pagination Round Style</h4>
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
<div class="card-content">
<div class="card-body">
<div class="row">
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Round Pagination</h5>
<div class="text-center mb-3">
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-round">
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
</ul>
</nav>
<p>Round Style pagination use <code>.pagination-round</code>                            to <code>.pagination</code> class.</p>
</div>
</div>
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Round Style Pagination with Next/Prev Arrows</h5>
<div class="text-center mb-3">
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-round">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">«</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">»</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
<p>Round Style pagination use <code>.pagination-round</code>                            to <code>.pagination</code> class with Previous Next
                            Icons.
                          </p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Round Style Pagination with Next/Prev Link</h5>
<div class="text-center mb-3">
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-round">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">« Prev</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">Next »</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
<p>Round Style pagination use <code>.pagination-round</code>                            to <code>.pagination</code> class with Previous Next
                            Icons &amp; Text.</p>
</div>
</div>
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Separated Round Styled Pagination</h5>
<div class="text-center mb-3">
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-round">
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
</ul>
</nav>
<p>Separated Round Style pagination use <code>.pagination-round</code>                            &amp; <code>.pagination-separate</code> to <code>.pagination</code>                            class.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Separated Round Styled Pagination with Next/Prev Arrows</h5>
<div class="text-center mb-3">
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-round">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">«</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">»</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
<p>Separated Round Style pagination use <code>.pagination-round</code>                            &amp; <code>.pagination-separate</code> to <code>.pagination</code>                            class with Previous Next Icons.</p>
</div>
</div>
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Separated Round Styled Pagination with Next/Prev Link</h5>
<div class="text-center mb-3">
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-round">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">« Prev</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">Next »</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
<p>Separated Round Style pagination use <code>.pagination-round</code>                            &amp; <code>.pagination-separate</code> to <code>.pagination</code>                            class with Previous Next Icons &amp; text.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Separated Flat Round Styled Pagination</h5>
<div class="text-center mb-3">
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-round pagination-flat">
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
</ul>
</nav>
<p>Separated Flat Round Styled pagination need class <code>.pagination-flat</code>                            with round and separated styled classes.</p>
</div>
</div>
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Separated Flat Round Styled Pagination with Next/Prev Arrows</h5>
<div class="text-center mb-3">
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-round pagination-flat">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">«</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">»</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
<p>Separated Flat Round Styled pagination need class <code>.pagination-flat</code>                            with round and separated styled classes &amp; previous
                            next icons.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Separated Flat Round Styled Pagination with Next/Prev Link</h5>
<div class="text-center mb-3">
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-round pagination-flat">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">« Prev</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">Next »</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
<p>Separated Flat Round Styled pagination need class <code>.pagination-flat</code>                            with round and separated styled classes &amp; previous
                            next icons with Text.</p>
</div>
</div>
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Separated Flat Round Styled Pagination with Next/Prev Text</h5>
<div class="text-center mb-3">
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-round pagination-flat">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">Prev</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">Next</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
<p>Separated Flat Round Styled pagination need class <code>.pagination-flat</code>                            with round and separated styled classes &amp; previous
                            next icons with Text.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Round Style end -->
<!-- Curved Pagination Border Style start -->
<section id="curved-border-pagination">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Curved Pagination Border Style</h4>
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
<div class="card-content">
<div class="card-body">
<div class="row">
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Separated Curve Styled Pagination</h5>
<div class="text-center mb-3">
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-curved">
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
</ul>
</nav>
<p>Separated Curved pagination need class <code>.pagination-curved</code>                            with separated class.</p>
</div>
</div>
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Separated Curved Styled Pagination with Next/Prev Arrows</h5>
<div class="text-center mb-3">
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-curved">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">«</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">»</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
<p>Separated Curved pagination need class <code>.pagination-curved</code>                            with separated class &amp; Previous Next Icons.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Separated Curved Styled Pagination with Next/Prev Link</h5>
<div class="text-center mb-3">
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-curved">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">« Prev</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">Next »</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
<p>Separated Curved pagination need class <code>.pagination-curved</code>                            with separated class &amp; Previous Next Icons with Text.</p>
</div>
</div>
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Saperated Curved Flat Styled Pagination</h5>
<div class="text-center mb-3">
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-curved pagination-flat">
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
</ul>
</nav>
<p>Saperated Curved Flat pagination need class <code>.pagination-flat</code>                            with <code>.pagination-separate.pagination-curved</code>                            classes.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Saperated Curved Flat Styled Pagination with Next/Prev Arrows</h5>
<div class="text-center mb-3">
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-curved pagination-flat">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">«</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">»</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
<p>Saperated Curved Flat pagination need class <code>.pagination-flat</code>                            with <code>.pagination-separate.pagination-curved</code>                            classes with Previous Next Icons.</p>
</div>
</div>
<div class="col-lg-6 col-md-12">
<h5 class="text-center">Saperated Curved Flat Styled Pagination with Next/Prev Link</h5>
<div class="text-center mb-3">
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-curved pagination-flat">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">« Prev</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">Next »</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
<p>Saperated Curved Flat pagination need class <code>.pagination-flat</code>                            with <code>.pagination-separate.pagination-curved</code>                            classes with Previous Next Icons &amp; Text.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Border Style end -->
<!-- Pagination Positions start -->
<section id="pagination-positions">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Pagination Positions</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
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
<p>Use wrapper classes for pagination. To align left, use class
                      <code>.justify-content-start</code>. To align center, use class
                      <code>.justify-content-center</code>. To align right, use class
                      <code>.justify-content-end</code>.</p>
<div class="row">
<div class="col-xl-4 col-lg-12">
<h5 class="text-left">Left Align</h5>
<nav aria-label="Page navigation">
<ul class="pagination justify-content-start">
<li class="page-item"></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item"></li>
</ul>
</nav>
</div>
<div class="col-xl-4 col-lg-12">
<h5 class="text-center">Center Align</h5>
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center">
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
</ul>
</nav>
</div>
<div class="col-xl-4 col-lg-12">
<h5 class="text-right">Right Align</h5>
<nav aria-label="Page navigation">
<ul class="pagination justify-content-end">
<li class="page-item"></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item"></li>
</ul>
</nav>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Pagination Positions end -->
<!-- Pagination Sizes start -->
<section id="pagination-sizes">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Pagination Sizes</h4>
<p>Use class <code>.pagination-lg</code> for large size pagination &amp;
                use <code>.pagination-sm</code> for small size pagination. For Default
                size no classes required.</p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Pagination Sizes With Border</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="row">
<div class="col-xl-6 col-lg-12">
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-lg mb-1">
<li class="page-item"></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item"></li>
</ul>
</nav>
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center mb-1">
<li class="page-item"></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item"></li>
</ul>
</nav>
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-sm">
<li class="page-item"></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item"></li>
</ul>
</nav>
</div>
<div class="col-xl-6 col-lg-12">
<div class="text-center">
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-round pagination-lg mb-1">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">« Prev</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">Next »</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-round mb-1">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">« Prev</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">Next »</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-round pagination-sm">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">« Prev</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">Next »</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Flat Styled Pagination Sizes</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="row">
<div class="col-xl-6 col-lg-12">
<div class="text-center">
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-curved pagination-flat pagination-lg mb-1">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">« Prev</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">Next »</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-curved pagination-flat mb-1">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">« Prev</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">Next »</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-curved pagination-flat pagination-sm">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">« Prev</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">Next »</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="text-center">
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-round pagination-flat pagination-lg mb-1">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">« Prev</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">Next »</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-round pagination-flat mb-1">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">« Prev</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">Next »</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center pagination-separate pagination-round pagination-flat pagination-sm">
<li class="page-item">
<a aria-label="Previous" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">« Prev</span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
<li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
<li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
<li class="page-item">
<a aria-label="Next" class="page-link" href="component-pagination.html#">
<span aria-hidden="true">Next »</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Pagination Sizes end -->
<!-- Pager Pagination start -->
<section id="pager-pagination">
<div class="row">
<div class="col-12 mt-1">
<h4>Pager Pagination</h4>
<p>Quick previous and next links for simple pagination implementations.
                It's great for simple sites like blogs or magazines.</p>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Basic Pager</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<ul class="pager">
<li>
<a href="component-pagination.html#"><i class="ft-arrow-left"></i> Previous</a>
</li>
<li>
<a href="component-pagination.html#">Next <i class="ft-arrow-right"></i></a>
</li>
</ul>
<p>Use class <code>.pager</code> for basic pager pagination.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">square Pager</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<ul class="pager pager-square">
<li>
<a href="component-pagination.html#"><i class="ft-arrow-left"></i> Previous</a>
</li>
<li>
<a href="component-pagination.html#">Next <i class="ft-arrow-right"></i></a>
</li>
</ul>
<p>Use class <code>.pager.pager-square</code> for square pager
                        pagination.
                      </p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Round Pager</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<ul class="pager pager-round">
<li>
<a href="component-pagination.html#"><i class="ft-arrow-left"></i> Previous</a>
</li>
<li>
<a href="component-pagination.html#">Next <i class="ft-arrow-right"></i></a>
</li>
</ul>
<p>Use class <code>.pager.pager-round</code> for pager pagination
                        with Round border.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Flat Pager</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<ul class="pager pager-flat">
<li>
<a href="component-pagination.html#"><i class="ft-arrow-left"></i> Previous</a>
</li>
<li>
<a href="component-pagination.html#">Next <i class="ft-arrow-right"></i></a>
</li>
</ul>
<p>Use class <code>.pager.pager-flat</code> for pager pagination
                        without border.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Aligned to side Pager</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<ul class="pager">
<li class="previous">
<a href="component-pagination.html#"><i class="ft-arrow-left"></i> Previous</a>
</li>
<li class="next">
<a href="component-pagination.html#">Next <i class="ft-arrow-right"></i></a>
</li>
</ul>
<p>Use class <code>.previous</code> &amp; <code>.next</code> for
                        links aligned to sides.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Aligned to side square Pager</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<ul class="pager pager-square">
<li class="previous">
<a href="component-pagination.html#"><i class="ft-arrow-left"></i> Previous</a>
</li>
<li class="next">
<a href="component-pagination.html#">Next <i class="ft-arrow-right"></i></a>
</li>
</ul>
<p>Use class <code>.previous</code> &amp; <code>.next</code> for
                        links aligned to sides.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Align to side Round Pager</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<ul class="pager pager-round">
<li class="previous">
<a href="component-pagination.html#"><i class="ft-arrow-left"></i> Previous</a>
</li>
<li class="next">
<a href="component-pagination.html#">Next <i class="ft-arrow-right"></i></a>
</li>
</ul>
<p>Use class <code>.previous</code> &amp; <code>.next</code> for
                        links aligned to sides.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Align to side Flat Pager</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<ul class="pager pager-flat">
<li class="previous">
<a href="component-pagination.html#"><i class="ft-arrow-left"></i> Previous</a>
</li>
<li class="next">
<a href="component-pagination.html#">Next <i class="ft-arrow-right"></i></a>
</li>
</ul>
<p>Use class <code>.previous</code> &amp; <code>.next</code> for
                        links aligned to sides.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Disabled Pager</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<ul class="pager">
<li class="disabled">
<a href="component-pagination.html#"><i class="ft-arrow-left"></i> Previous</a>
</li>
<li>
<a href="component-pagination.html#">Next <i class="ft-arrow-right"></i></a>
</li>
</ul>
<p>Use class <code>.disabled</code> for disabled pager.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Disabled square Pager</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<ul class="pager pager-square">
<li class="disabled">
<a href="component-pagination.html#"><i class="ft-arrow-left"></i> Previous</a>
</li>
<li>
<a href="component-pagination.html#">Next <i class="ft-arrow-right"></i></a>
</li>
</ul>
<p>Use class <code>.disabled</code> for disabled pager.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Disabled Round Pager</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<ul class="pager pager-round">
<li class="disabled">
<a href="component-pagination.html#"><i class="ft-arrow-left"></i> Previous</a>
</li>
<li>
<a href="component-pagination.html#">Next <i class="ft-arrow-right"></i></a>
</li>
</ul>
<p>Use class <code>.disabled</code> for disabled pager.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Disabled Flat Pager</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<ul class="pager pager-flat">
<li class="disabled">
<a href="component-pagination.html#"><i class="ft-arrow-left"></i> Previous</a>
</li>
<li>
<a href="component-pagination.html#">Next <i class="ft-arrow-right"></i></a>
</li>
</ul>
<p>Use class <code>.disabled</code> for disabled pager.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Aligned to side disabled Pager</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<ul class="pager">
<li class="previous disabled">
<a href="component-pagination.html#"><i class="ft-arrow-left"></i> Previous</a>
</li>
<li class="next">
<a href="component-pagination.html#">Next <i class="ft-arrow-right"></i></a>
</li>
</ul>
<p>Use class <code>.previous</code> &amp; <code>.next</code> for
                        links aligned to sides &amp; <code>.disabled</code> to disabled
                        pager.
                      </p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Aligned to side disabled square Pager</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<ul class="pager pager-square">
<li class="previous disabled">
<a href="component-pagination.html#"><i class="ft-arrow-left"></i> Previous</a>
</li>
<li class="next">
<a href="component-pagination.html#">Next <i class="ft-arrow-right"></i></a>
</li>
</ul>
<p>Use class <code>.previous</code> &amp; <code>.next</code> for
                        links aligned to sides &amp; <code>.disabled</code> to disabled
                        pager.
                      </p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Align to side disabled Round Pager</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<ul class="pager pager-round">
<li class="previous disabled">
<a href="component-pagination.html#"><i class="ft-arrow-left"></i> Previous</a>
</li>
<li class="next">
<a href="component-pagination.html#">Next <i class="ft-arrow-right"></i></a>
</li>
</ul>
<p>Use class <code>.previous</code> &amp; <code>.next</code> for
                        links aligned to sides &amp; <code>.disabled</code> to disabled
                        pager.
                      </p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Align to side disabled Flat Pager</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<ul class="pager pager-flat">
<li class="previous disabled">
<a href="component-pagination.html#"><i class="ft-arrow-left"></i> Previous</a>
</li>
<li class="next">
<a href="component-pagination.html#">Next <i class="ft-arrow-right"></i></a>
</li>
</ul>
<p>Use class <code>.previous</code> &amp; <code>.next</code> for
                        links aligned to sides &amp; <code>.disabled</code> to disabled
                        pager.
                      </p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Pager Pagination end -->
<!-- Pager Positions start -->
<section id="pager-positions">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Pager Positions</h4>
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
<div class="card-content">
<div class="card-body">
<p>Use wrapper classes for pager. To align left, use class <code>.float-left</code>.
                      Default is center align. To align right, use class <code>.float-right</code>.</p>
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-12">
<h5 class="text-left">Left Align</h5>
<div class="float-left my-1">
<ul class="pager">
<li>
<a href="component-pagination.html#"><i class="ft-arrow-left"></i> Previous</a>
</li>
<li>
<a href="component-pagination.html#">Next <i class="ft-arrow-right"></i></a>
</li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<h5 class="text-center">Center Align</h5>
<div class="my-1">
<ul class="pager">
<li>
<a href="component-pagination.html#"><i class="ft-arrow-left"></i> Previous</a>
</li>
<li>
<a href="component-pagination.html#">Next <i class="ft-arrow-right"></i></a>
</li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<h5 class="text-right">Right Align</h5>
<div class="float-right my-1">
<ul class="pager">
<li>
<a href="component-pagination.html#"><i class="ft-arrow-left"></i> Previous</a>
</li>
<li>
<a href="component-pagination.html#">Next <i class="ft-arrow-right"></i></a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Pager Positions end -->
<!-- Dynamic Pagination start -->
<section id="dynamic-pagination">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Dynamic Pagination</h4>
<p>We are using
                <strong>jQuery Pagination plugin</strong>. This jQuery plugin simplifies
                the usage of Bootstrap Pagintion. It uses appropriate classes: <code>.pagination</code>,
                <code>.active</code> and <code>.disabled</code>.</p>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default Pagination</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="border-blue-grey border-lighten-4 p-1 mb-1" id="page1-content">You are on page 1</div>
<div class="text-center">
<ul class="pagination page1-links"></ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Separate Styled Pagination</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="border-blue-grey border-lighten-4 p-1 mb-1" id="page2-content">You are on page 1</div>
<div class="text-center">
<ul class="pagination pagination-separate pagination-curved page2-links"></ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Separate Round Styled Pagination</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="border-blue-grey border-lighten-4 p-1 mb-1" id="page3-content">You are on page 1</div>
<div class="text-center">
<ul class="pagination pagination-flat pagination-round page3-links"></ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Default Pagination with last &amp; first</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="border-blue-grey border-lighten-4 p-1 mb-1" id="firstLast1-content">You are on page 1</div>
<div class="text-center">
<ul class="pagination firstLast1-links"></ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Separate Styled Pagination with last &amp; first</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="border-blue-grey border-lighten-4 p-1 mb-1" id="firstLast2-content">You are on page 1</div>
<div class="text-center">
<ul class="pagination pagination-separate pagination-curved firstLast2-links"></ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Separate Round Styled Pagination with last &amp; first</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="border-blue-grey border-lighten-4 p-1 mb-1" id="firstLast3-content">You are on page 1</div>
<div class="text-center">
<ul class="pagination pagination-flat pagination-round firstLast3-links"></ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">URL Pagination Link</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="alert alert-warning">
<strong>Warning!</strong> Page will be reload.
                    </div>
<div class="border-blue-grey border-lighten-4 p-1 mb-1" id="url-content">You are on page 1</div>
<div class="text-center">
<ul class="pagination pagination-flat pagination-round url-links"></ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Pagination drop you here after reload</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="alert alert-warning">
<strong>Warning!</strong> Page will be reload.
                    </div>
<div class="border-blue-grey border-lighten-4 p-1 mb-1" id="url1-content">You are on page 1</div>
<div class="text-center">
<ul class="pagination url1-links"></ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Set Start Page Of Pagination</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="border-blue-grey border-lighten-4 p-1 mb-1" id="start-content">Your start Page 5</div>
<div class="text-center">
<ul class="pagination start-links"></ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Pagination Loop</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="border-blue-grey border-lighten-4 p-1 mb-1" id="loop-content">You are on page 1</div>
<div class="text-center">
<ul class="pagination pagination-separate pagination-curved loop-links"></ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Synchronized Pagination</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="text-center">
<ul class="pagination pagination-separate pagination-curved synchronized-links"></ul>
</div>
<div class="border-blue-grey border-lighten-4 p-1 my-1" id="synchronized-content">You are on page 1</div>
<div class="text-center">
<ul class="pagination pagination-separate pagination-curved synchronized-links"></ul>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Dynamic Pagination end -->
<!-- Bootstrap Date Paginator start -->
<section id="date-paginator">
<div class="row">
<div class="col-12 mt-1">
<h4>Bootstrap Date Paginator</h4>
</div>
</div>
<div class="row match-height">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Default Date Paginator</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="default-paginator">
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Date Paginator Format</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="paginator-format">
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Highlight Today's Selected Date</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>A jQuery plugin which takes Twitter Bootstrap's already great
                      pagination component and injects a bit of date based magic.
                      In the process creating a hugely simplified and modularised
                      way of paging date based results in your application.</p>
<div class="paginator-highlight-today"></div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Highlight Selected Date</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>For this example, you can use <code>highlightSelectedDate</code>                      option. That will descibe whether or not to distinguish visually
                      the selected date. It's Default value is <code>true</code></p>
<div class="paginator-highlight"></div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Hide Paginator Calendar</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>For this example, you can use <code>showCalendar</code> option.Whether
                      or not to display the clickable calendar icon visible on selected
                      date. By setting to false you are effectively removing the
                      calendar date select functionality from the user. It's Default
                      value is <code>true</code></p>
<div class="paginator-calendar"></div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Change Selected Date</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>For this example, you can use <code>selectedDate</code> option.Sets
                      the initial selected date, provided as either a Moment.js moment
                      object or String.
                      <strong>If you're planning on providing a String, please ensure you
                        review the dateFormat option.</strong> It's Default value
                      is <code>moment(), equivalent to new Date()</code></p>
<div class="paginator-selectedDate"></div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Hide Off Days</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>For this example, you can use <code>showOffDays</code> option.Whether
                      or not to display off days. It's Default value is <code>true</code></p>
<div class="paginator-showoffDays"></div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Change Off Days</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>For this example, you can use <code>offDays</code> option.Sets
                      days of the week to be considered off days, visually greyed
                      out. It's Default value is <code>'Sat,Sun'</code></p>
<div class="paginator-offDays"></div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Hide Start Of Week</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>For this example, you can use <code>showStartOfWeek</code> option.Whether
                      or not to display the start of week divider. It's Default value
                      is <code>true</code></p>
<div class="paginator-showStartOfWeek"></div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Date Hover Hint</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>For this example, you can use <code>hint</code> option.Format
                      used for on hover hint. String tokens are parsed against a
                      given date. It's Default value is <code>'dddd, Do MMMM YYYY'</code></p>
<div class="paginator-hint"></div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Small Size Paginator</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>For this example, you can use <code>size</code> option.Sets the
                      height of the paginator component. Accepts small, normal, large.
                      It's Default value is <code>normal</code></p>
<div class="paginator-small"></div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Large Size Paginator</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>For this example, you can use <code>size</code> option.Sets the
                      height of the paginator component. Accepts small, normal, large.
                      It's Default value is <code>normal</code></p>
<div class="paginator-large"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Date Paginator end -->
</div>
