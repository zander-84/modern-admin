<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
        \zander84\modernadmin\assets\LoginSimpleAsset::class,
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
                                    <div class="p-1">
                                        <img alt="branding logo"
                                             src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/logo/logo-dark.png"/>
                                    </div>
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                    <span>Login with Modern</span>
                                </h6>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form action="index.html" class="form-horizontal form-simple" novalidate="">
                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                            <input class="form-control form-control-lg input-lg" id="user-name"
                                                   placeholder="Your Username" required="" type="text"/>
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input class="form-control form-control-lg input-lg" id="user-password"
                                                   placeholder="Enter Password" required="" type="password"/>
                                            <div class="form-control-position">
                                                <i class="la la-key"></i>
                                            </div>
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
                                        <button class="btn btn-info btn-lg btn-block" type="submit"><i
                                                    class="ft-unlock"></i> Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="">
                                    <p class="float-sm-left text-center m-0"><a class="card-link"
                                                                                href="recover-password.html">Recover
                                            password</a></p>
                                    <p class="float-sm-right text-center m-0">New to Moden Admin? <a class="card-link"
                                                                                                     href="register-simple.html">Sign
                                            Up</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>