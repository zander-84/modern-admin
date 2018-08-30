<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
        \zander84\modernadmin\assets\LoginWithNavbarAsset::class,
    ],
    'fullPage' => true,
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
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                    <img alt="branding logo"
                                         src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/logo/logo-dark.png"/>
                                </div>
                                <p class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                    <span>Easily Using</span>
                                </p>
                            </div>
                            <div class="card-content">
                                <div class="text-center">
                                    <a class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"
                                       href="login-with-navbar.html#">
                                        <span class="la la-facebook"></span>
                                    </a>
                                    <a class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"
                                       href="login-with-navbar.html#">
                                        <span class="la la-twitter"></span>
                                    </a>
                                    <a class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"
                                       href="login-with-navbar.html#">
                                        <span class="la la-linkedin font-medium-4"></span>
                                    </a>
                                    <a class="btn btn-social-icon mr-1 mb-1 btn-outline-github"
                                       href="login-with-navbar.html#">
                                        <span class="la la-github font-medium-4"></span>
                                    </a>
                                </div>
                                <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-2">
                                    <span>OR Using Account Details</span>
                                </p>
                                <div class="card-body pt-0">
                                    <form action="index.html" class="form-horizontal" novalidate="">
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input class="form-control input-lg" id="user-name"
                                                   placeholder="Your Username" required="" type="text"/>
                                            <div class="form-control-position">
                                                <i class="la la-user"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input class="form-control input-lg" id="user-password"
                                                   placeholder="Enter Password" required="" type="password"/>
                                            <div class="form-control-position">
                                                <i class="la la-key"></i>
                                            </div>
                                        </fieldset>
                                        <button class="btn btn-info btn-lg btn-block" type="submit"><i
                                                    class="ft-unlock"></i> Login
                                        </button>
                                    </form>
                                </div>
                                <div class="card-body pb-0">
                                    <p class="text-center"><a class="card-link" href="recover-password.html">Recover
                                            password</a></p>
                                    <p class="text-center">New to Modern Admin? <a class="card-link"
                                                                                   href="register-with-navbar.html">Create
                                            Account</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>