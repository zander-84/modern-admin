<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
        \zander84\modernadmin\assets\RegisterWithBgImageAsset::class,
    ],
    'fullPage' => true,
    'fullImg' => true
]);
?>

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
                                <div class="text-center">
                                    <a class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"
                                       href="register-with-bg-image.html#">
                                        <span class="la la-facebook"></span>
                                    </a>
                                    <a class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"
                                       href="register-with-bg-image.html#">
                                        <span class="la la-twitter"></span>
                                    </a>
                                    <a class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"
                                       href="register-with-bg-image.html#">
                                        <span class="la la-linkedin font-medium-4"></span>
                                    </a>
                                    <a class="btn btn-social-icon mr-1 mb-1 btn-outline-github"
                                       href="register-with-bg-image.html#">
                                        <span class="la la-github font-medium-4"></span>
                                    </a>
                                </div>
                                <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                                    <span>OR Using Email</span>
                                </p>
                                <div class="card-body">
                                    <form action="index.html" class="form-horizontal" novalidate="">
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input class="form-control" id="user-name" placeholder="User Name"
                                                   type="text"/>
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input class="form-control" id="user-email" placeholder="Your Email Address"
                                                   required="" type="email"/>
                                            <div class="form-control-position">
                                                <i class="ft-mail"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input class="form-control" id="user-password" placeholder="Enter Password"
                                                   required="" type="password"/>
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
                                            <div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a
                                                        class="card-link" href="recover-password.html">Forgot
                                                    Password?</a></div>
                                        </div>
                                        <button class="btn btn-outline-info btn-block" type="submit"><i
                                                    class="ft-user"></i> Register
                                        </button>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <a class="btn btn-outline-danger btn-block" href="login-with-bg-image.html"><i
                                                class="ft-unlock"></i> Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
