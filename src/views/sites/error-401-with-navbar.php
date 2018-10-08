<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\Error401WithNavbarAsset::class,
    ]
]);
?>

<div class="content-header row">
</div>
<div class="content-body">
<div class="col-sm-5 offset-sm-1 col-md-6 offset-md-3 col-lg-4 offset-lg-4 box-shadow-2">
<div class="card border-grey border-lighten-3 px-2 row mb-0">
<div class="card-header no-border pb-1">
<div class="card-body">
<h2 class="error-code text-center mb-2">401</h2>
<h3 class="text-uppercase text-center">Unauthorized</h3>
</div>
</div>
<div class="card-content px-2">
<fieldset class="row py-2">
<div class="input-group col-12">
<input aria-describedby="button-addon2" class="form-control border-grey border-lighten-1" placeholder="Search..." type="text"/>
<span class="input-group-append" id="button-addon2">
<button class="btn btn-lg btn-secondary border-grey border-lighten-1" type="button"><i class="la la-search"></i></button>
</span>
</div>
</fieldset>
<div class="row py-2">
<div class="col-12">
<a class="btn btn-primary btn-block btn-lg" href="index.html"><i class="la la-home"></i> Back to Home</a>
</div>
</div>
</div>
<div class="card-footer no-border pb-1">
<div class="text-center">
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook" href="error-401-with-navbar.html#">
<span class="la la-facebook"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter" href="error-401-with-navbar.html#">
<span class="la la-twitter"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin" href="error-401-with-navbar.html#">
<span class="la la-linkedin font-medium-4"></span>
</a>
<a class="btn btn-social-icon mr-1 mb-1 btn-outline-github" href="error-401-with-navbar.html#">
<span class="la la-github font-medium-4"></span>
</a>
</div>
</div>
</div>
</div>
</div>
