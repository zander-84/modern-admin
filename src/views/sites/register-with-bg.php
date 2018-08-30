<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
        \zander84\modernadmin\assets\RegisterWithBgAsset::class,
    ],
    'fullPage' => true,
    'fullImg' => true
]);
?>
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-4 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0 pb-0">
                                <div class="card-title text-center">
                                    <img alt="branding logo"
                                         src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/logo/logo-dark.png"/>
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                    <span>Easily Using</span>
                                </h6>
                            </div>
                            <div class="card-content">
                                <div class="card-body text-center">
                                    <a class="btn btn-social mb-1 mr-1 btn-outline-facebook"
                                       href="register-with-bg.html#">
                                        <span class="la la-facebook"></span>
                                        <span class="px-1">facebook</span>
                                    </a>
                                    <a class="btn btn-social mb-1 btn-outline-google" href="register-with-bg.html#">
                                        <span class="la la-google-plus font-medium-4"></span>
                                        <span class="px-1">google</span>
                                    </a>
                                </div>
                                <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                                    <span>OR Using Email</span>
                                </p>
                                <div class="card-body pt-0">
                                    <form action="index.html" class="form-horizontal">
                                        <fieldset class="form-group floating-label-form-group">
                                            <label for="user-name">User Name</label>
                                            <input class="form-control" id="user-name" placeholder="User Name"
                                                   type="text"/>
                                        </fieldset>
                                        <fieldset class="form-group floating-label-form-group">
                                            <label for="user-email">Your Email Address</label>
                                            <input class="form-control" id="user-email" placeholder="Your Email Address"
                                                   type="email"/>
                                        </fieldset>
                                        <fieldset class="form-group floating-label-form-group mb-1">
                                            <label for="user-password">Enter Password</label>
                                            <input class="form-control" id="user-password" placeholder="Enter Password"
                                                   type="password"/>
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-12 text-center text-sm-left">
                                                <fieldset>
                                                    <input class="chk-remember" id="remember-me" type="checkbox"/>
                                                    <label for="remember-me"> Remember Me</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a
                                                        class="card-link" href="recover-password.html">Forgot
                                                    Password?</a></div>
                                        </div>
                                        <button class="btn btn-outline-info btn-block" type="submit"><i
                                                    class="ft-user"></i> Register
                                        </button>
                                    </form>
                                </div>
                                <div class="card-body pt-0">
                                    <a class="btn btn-outline-danger btn-block" href="login-with-bg.html"><i
                                                class="ft-unlock"></i> Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>