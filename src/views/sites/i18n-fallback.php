<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\I18nFallbackAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">i18n Fallback</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="i18n-fallback.html#">Internationalization</a>
</li>
<li class="breadcrumb-item active">Fallback
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="i18n-fallback.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="i18n-fallback.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="i18n-fallback.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="i18n-fallback.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- fallback example section start -->
<section id="fallback-examples">
<!-- Fallback -->
<div class="card">
<h4 class="card-header">Set Fallback Language</h4>
<div class="card-body">
<p class="card-text">This example demonstrates how to set fallback language. Language to
                lookup key if not found on set language, can be a string <code>(en)</code>,
                an array <code>(['fe', 'en'])</code> or object defining fallbacks
                and a default <code>( { 'de-CH': ['fr', 'it'], 'zh-HANT': ['zh-HANS', 'en'], 'default': ['en'] } ).</code>                In this example Arabic, Dutch or Italian language files don't exist
                in /data/locales/ folder. When one of these languages is selected,
                English language specified in fallbackLng option will be loaded.</p>
<nav class="header-navbar navbar-expand-sm navbar navbar-with-menu navbar-dark navbar-shadow border-grey border-darken-2">
<div class="navbar-wrapper" id="lng-fallback">
<div class="navbar-header">
<ul class="nav navbar-nav">
<li class="nav-item mobile-menu d-md-none float-left">
<button class="nav-link menu-toggle hamburger hamburger--arrow js-hamburger is-active">
<span class="hamburger-box"></span>
<span class="hamburger-inner"></span>
</button>
</li>
<li class="nav-item">
<a class="navbar-brand nav-link" href="index.html">
<img alt="logo" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/logo/logo-light.png"/>
</a>
</li>
<li class="nav-item d-md-none float-right">
<a class="nav-link open-navbar-container" data-target="#navbar-mobile1" data-toggle="collapse"><i class="la la-ellipsis-h pe-2x icon-rotate-right"></i></a>
</li>
</ul>
</div>
<div class="navbar-container content">
<div class="collapse navbar-collapse" id="navbar-mobile1">
<ul class="nav navbar-nav lng-nav mr-auto">
<li class="nav-item"><a class="nav-link active" data-lng="en" href="i18n-fallback.html#"><i class="flag-icon flag-icon-gb"></i> English</a></li>
<li class="nav-item"><a class="nav-link" data-lng="ar" href="i18n-fallback.html#"><i class="flag-icon flag-icon-ar"></i> Arabic</a></li>
<li class="nav-item"><a class="nav-link" data-lng="nl" href="i18n-fallback.html#"><i class="flag-icon flag-icon-nl"></i> Dutch</a></li>
<li class="nav-item"><a class="nav-link" data-lng="it" href="i18n-fallback.html#"><i class="flag-icon flag-icon-it"></i> Italian</a></li>
</ul>
<ul class="nav navbar-nav lng-dropdown float-right">
<li class="dropdown dropdown-language nav-item">
<a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle nav-link" data-toggle="dropdown" href="i18n-fallback.html#" id="dropdown-active-item"><i class="flag-icon flag-icon-gb"></i> English<i class="caret"></i></a>
<div aria-labelledby="dropdown-flag" class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item active" data-lng="en" href="i18n-fallback.html#"><i class="flag-icon flag-icon-gb"></i> English</a>
<a class="dropdown-item" data-lng="ar" href="i18n-fallback.html#"><i class="flag-icon flag-icon-ar"></i> Arabic</a>
<a class="dropdown-item" data-lng="nl" href="i18n-fallback.html#"><i class="flag-icon flag-icon-nl"></i> Dutch</a>
<a class="dropdown-item" data-lng="it" href="i18n-fallback.html#"><i class="flag-icon flag-icon-it"></i> Italian</a>
</div>
</li>
</ul>
</div>
</div>
</div>
</nav>
<div class="row mt-2">
<div class="col-md-6">
<h5>Example Markup</h5>
<pre class="language-markup">
                        <code class="language-markup">
                            &lt;div aria-labelledby="dropdown-flag" class="dropdown-menu dropdown-menu-right"&gt;
                                &lt;a href="#" class="dropdown-item"&gt;
                                    &lt;i class="flag-icon flag-icon-gb"&gt;&lt;/i&gt; English
                                &lt;/a&gt;
                                &lt;a href="#" class="dropdown-item"&gt;
                                    &lt;i class="flag-icon flag-icon-ar"&gt;&lt;/i&gt; Arabic
                                &lt;/a&gt;
                                &lt;a href="#" class="dropdown-item"&gt;
                                    &lt;i class="flag-icon flag-icon-nl"&gt;&lt;/i&gt; Dutch
                                &lt;/a&gt;
                                &lt;a href="#" class="dropdown-item"&gt;
                                    &lt;i class="flag-icon flag-icon-it"&gt;&lt;/i&gt; Italian
                                &lt;/a&gt;
                            &lt;/div&gt;
                        </code>
                    </pre>
</div>
<div class="col-md-6">
<h5>Js Code For Switching</h5>
<pre class="language-javascript">
                        <code class="language-javascript">
                            i18next
                                .use(window.i18nextXHRBackend)
                                .init({
                                    debug: true,
                                    fallbackLng: 'en',
                                    backend: {
                                        loadPath: "<?=$baseUrl;?>/app-assets/data/locales/{{lng}}/{{ns}}.json",
                                    },
                                    returnObjects: true
                                },
                                function (err, t) {
                                    // Initialize Localization
                                    jqueryI18next.init(i18next, $);
                                });
                        </code>
                    </pre>
</div>
</div>
</div>
</div>
</section>
<!-- // fallback example section end -->
</div>
</div>
</div>