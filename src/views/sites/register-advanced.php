<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
        \zander84\modernadmin\assets\RegisterAdvancedAsset::class,
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
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="card-header border-0 pb-0">
                                <div class="card-title text-center">
                                    <img alt="branding logo"
                                         src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/logo/logo-dark.png"/>
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                    <span>Please Sign Up</span>
                                </h6>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form action="index.html" class="form-horizontal" novalidate="">
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-md-6">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input class="form-control input-lg" id="first_name"
                                                           name="first_name" placeholder="First Name" tabindex="1"
                                                           type="text"/>
                                                    <div class="form-control-position">
                                                        <i class="ft-user"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-6">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input class="form-control input-lg" id="last_name" name="last_name"
                                                           placeholder="Last Name" tabindex="2" type="text"/>
                                                    <div class="form-control-position">
                                                        <i class="ft-user"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input class="form-control input-lg"
                                                   data-validation-required-message="Please enter display name."
                                                   id="display_name" name="display_name" placeholder="Display Name"
                                                   required="" tabindex="3" type="text"/>
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>
                                            <div class="help-block font-small-3"></div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input class="form-control input-lg"
                                                   data-validation-required-message="Please enter email address."
                                                   id="email" name="email" placeholder="Email Address" required=""
                                                   tabindex="4" type="email"/>
                                            <div class="form-control-position">
                                                <i class="ft-mail"></i>
                                            </div>
                                            <div class="help-block font-small-3"></div>
                                        </fieldset>
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-md-6">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input class="form-control input-lg" id="password" name="password"
                                                           placeholder="Password" required="" tabindex="5"
                                                           type="password"/>
                                                    <div class="form-control-position">
                                                        <i class="la la-key"></i>
                                                    </div>
                                                    <div class="help-block font-small-3"></div>
                                                </fieldset>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-6">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input class="form-control input-lg"
                                                           data-validation-matches-match="password"
                                                           data-validation-matches-message="Password &amp; Confirm Password must be the same."
                                                           id="password_confirmation" name="password_confirmation"
                                                           placeholder="Confirm Password" tabindex="6" type="password"/>
                                                    <div class="form-control-position">
                                                        <i class="la la-key"></i>
                                                    </div>
                                                    <div class="help-block font-small-3"></div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-4 col-sm-3 col-md-3">
                                                <fieldset>
                                                    <input class="chk-remember" id="remember-me" type="checkbox"/>
                                                    <label for="remember-me"> I Agree</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-8 col-sm-9 col-md-9">
                                                <p class="font-small-3">By clicking Register, you agree to the <a
                                                            data-target="#t_and_c_m" data-toggle="modal"
                                                            href="register-advanced.html#">Terms and Conditions</a> set
                                                    out by this site, including our Cookie Use.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-md-6">
                                                <button class="btn btn-info btn-lg btn-block" type="submit"><i
                                                            class="ft-user"></i> Register
                                                </button>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-6">
                                                <a class="btn btn-danger btn-lg btn-block" href="login-advanced.html"><i
                                                            class="ft-unlock"></i> Login</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
