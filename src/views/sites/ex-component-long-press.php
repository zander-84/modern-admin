<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ExComponentLongPressAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Long Press</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="ex-component-long-press.html#">Extra Components</a>
</li>
<li class="breadcrumb-item active">Long Press
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="ex-component-long-press.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="ex-component-long-press.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="ex-component-long-press.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="ex-component-long-press.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Long Press example section start -->
<section id="long-press-example">
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Long Press</h4>
</div>
<div class="card-body">
<div class="card-body">
<div class="height-250 form-group ">
<textarea class="long-press form-control" id="long-press" name="long-press" rows="10"></textarea>
</div>
<p>Write in the above field and
                      <strong>hold key</strong> to access alternate characters.
                      <br/> Try ‘a’, ‘e’, ‘u’, ‘i’, ‘o’ or ‘$’ for example.</p>
<div>
<p>Pick letter by:</p>
<ul>
<li>using mouse wheel;</li>
<li>hovering over it with your mouse;</li>
<li>using arrow keys.</li>
</ul>
<p>Release key to confirm choice.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Long Press example section end -->
</div>
