<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\UnlockUserAsset::class,
    ]
]);
?>

<div class="content-header row">
</div>
<div class="content-body">
<section class="flexbox-container">
<div class="col-12 d-flex align-items-center justify-content-center">
<div class="col-md-4 col-10 box-shadow-2 p-0">
<div class="card border-grey border-lighten-3 px-2 py-2 m-0">
<div class="card-header border-0 text-center">
<img alt="unlock-user" class="rounded-circle img-fluid center-block" src="<?=$baseUrl;?>/app-assets/images/portrait/small/avatar-s-1.png"/>
<h5 class="card-title mt-1">John Doe</h5>
</div>
<p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2">
<span>Unlock your account</span>
</p>
<div class="card-content">
<div class="card-body">
<form action="login-simple.html" class="form-horizontal" novalidate="">
<fieldset class="form-group position-relative has-icon-left">
<input class="form-control form-control-lg input-lg" id="password" placeholder="Enter Password" required="" type="password"/>
<div class="form-control-position">
<i class="la la-key"></i>
</div>
</fieldset>
<div class="form-group row">
<div class="col-md-6 col-12 text-center text-sm-left">
<fieldset>
<input class="chk-remember" id="remember-me" type="checkbox"/>
<label for="remember-me"> Remember Me</label>
</fieldset>
</div>
<div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a class="card-link" href="recover-password.html"><i class="ft-unlock"></i> Forgot Password?</a></div>
</div>
<a class="btn btn-outline-primary btn-lg btn-block" href="index.html"><i class="la la-lock"></i> Unlock</a>
<a class="btn btn-outline-danger btn-lg btn-block" href="login-simple.html"><i class="ft-power"></i> Logout</a>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
