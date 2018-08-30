<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
        \zander84\modernadmin\assets\RegisterSimpleAsset::class,
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
                        <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                    <img alt="branding logo"
                                         src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/logo/logo-dark.png"/>
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                    <span>Create Account</span>
                                </h6>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form action="index.html" class="form-horizontal form-simple" novalidate="">
                                        <fieldset class="form-group position-relative has-icon-left mb-1">
                                            <input class="form-control form-control-lg input-lg" id="user-name"
                                                   placeholder="User Name" type="text"/>
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left mb-1">
                                            <input class="form-control form-control-lg input-lg" id="user-email"
                                                   placeholder="Your Email Address" required="" type="email"/>
                                            <div class="form-control-position">
                                                <i class="ft-mail"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input class="form-control form-control-lg input-lg" id="user-password"
                                                   placeholder="Enter Password" required="" type="password"/>
                                            <div class="form-control-position">
                                                <i class="la la-key"></i>
                                            </div>
                                        </fieldset>
                                        <button class="btn btn-info btn-lg btn-block" type="submit"><i
                                                    class="ft-unlock"></i> Register
                                        </button>
                                    </form>
                                </div>
                                <p class="text-center">Already have an account ? <a class="card-link"
                                                                                    href="login-simple.html">Login</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>