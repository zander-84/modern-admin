<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
        \zander84\modernadmin\assets\RegisterWithNavbarAsset::class,
    ],
    'fullPage' => true,
    'fullImg' => true
]);
?>

        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="col-md-4 offset-md-4 col-8 offset-2 box-shadow-2 p-0">
                <div class="card border-grey border-lighten-3 px-2 py-2 row mb-0">
                    <div class="card-header no-border pb-0">
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
                               href="register-with-navbar.html#">
                                <span class="la la-facebook"></span>
                            </a>
                            <a class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"
                               href="register-with-navbar.html#">
                                <span class="la la-twitter"></span>
                            </a>
                            <a class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"
                               href="register-with-navbar.html#">
                                <span class="la la-linkedin font-medium-4"></span>
                            </a>
                            <a class="btn btn-social-icon mr-1 mb-1 btn-outline-github"
                               href="register-with-navbar.html#">
                                <span class="la la-github font-medium-4"></span>
                            </a>
                        </div>
                        <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-2">
                            <span>OR Using Account Details</span>
                        </p>
                        <div class="card-body pt-0">
                            <form action="index.html" class="form-horizontal" novalidate="">
                                <fieldset class="form-group position-relative has-icon-left">
                                    <input class="form-control" id="user-name" placeholder="User Name" type="text"/>
                                    <div class="form-control-position">
                                        <i class="la la-user"></i>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group position-relative has-icon-left">
                                    <input class="form-control" id="email" placeholder="Your Email Address" required=""
                                           type="email"/>
                                    <div class="form-control-position">
                                        <i class="la la-envelope-o"></i>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group position-relative has-icon-left">
                                    <input class="form-control" id="user-password" placeholder="Enter Password"
                                           required="" type="password"/>
                                    <div class="form-control-position">
                                        <i class="la la-key"></i>
                                    </div>
                                </fieldset>
                                <button class="btn btn-info btn-block" type="submit">Register</button>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer pb-0">
                        <p class="text-center"><a class="card-link" href="recover-password.html">Recover password</a>
                        </p>
                        <p class="text-center">Already have an account ? <a class="card-link"
                                                                            href="login-with-navbar.html">Login</a></p>
                    </div>
                </div>
            </section>
        </div>
