<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
        \zander84\modernadmin\assets\LoginAdvancedAsset::class,
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
                                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                    <span>Login with Modern</span>
                                </h6>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form action="index.html" class="form-horizontal" novalidate="">
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input class="form-control input-lg"
                                                   data-validation-required-message="Please enter your username."
                                                   id="user-name" placeholder="Your Username" required="" tabindex="1"
                                                   type="text"/>
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>
                                            <div class="help-block font-small-3"></div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input class="form-control input-lg"
                                                   data-validation-required-message="Please enter valid passwords."
                                                   id="password" placeholder="Enter Password" required="" tabindex="2"
                                                   type="password"/>
                                            <div class="form-control-position">
                                                <i class="la la-key"></i>
                                            </div>
                                            <div class="help-block font-small-3"></div>
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-12 text-center text-md-left">
                                                <fieldset>
                                                    <input class="chk-remember" id="remember-me" type="checkbox"/>
                                                    <label for="remember-me"> Remember Me</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-12 text-center text-md-right"><a class="card-link"
                                                                                                      href="recover-password.html">Forgot
                                                    Password?</a></div>
                                        </div>
                                        <button class="btn btn-danger btn-block btn-lg" type="submit"><i
                                                    class="ft-unlock"></i> Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="card-footer border-0">
                                <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                                    <span>New to Modern ?</span>
                                </p>
                                <a class="btn btn-info btn-block btn-lg mt-3" href="register-advanced.html"><i
                                            class="ft-user"></i> Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>