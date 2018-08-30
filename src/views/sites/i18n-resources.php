<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\I18nResourcesAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">i18next Resources</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="i18n-resources.html#">Internationalization</a>
</li>
<li class="breadcrumb-item active">Resources
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="i18n-resources.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="i18n-resources.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="i18n-resources.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="i18n-resources.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Resources example section start -->
<section id="resources-examples">
<!-- Translate Using Resources -->
<div class="card">
<h4 class="card-header">Resources To Initialize With</h4>
<div class="card-body">
<p class="card-text">This is the most basic example to demonstrate direct language switching
                on click or change event. Just Pass resources to initialize with
                and every time the link is clicked i18next loads the translation
                text without page reload.</p>
<nav class="header-navbar navbar-expand-sm navbar navbar-with-menu navbar-dark navbar-shadow border-grey border-darken-2">
<div class="navbar-wrapper" id="lng-resources">
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
<li class="nav-item"><a class="nav-link active" data-lng="en" href="i18n-resources.html#"><i class="flag-icon flag-icon-gb"></i> English</a></li>
<li class="nav-item"><a class="nav-link" data-lng="es" href="i18n-resources.html#"><i class="flag-icon flag-icon-es"></i> Spanish</a></li>
<li class="nav-item"><a class="nav-link" data-lng="pt" href="i18n-resources.html#"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></li>
<li class="nav-item"><a class="nav-link" data-lng="fr" href="i18n-resources.html#"><i class="flag-icon flag-icon-fr"></i> French</a></li>
</ul>
<ul class="nav navbar-nav lng-dropdown float-right">
<li class="dropdown dropdown-language nav-item">
<a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle nav-link" data-toggle="dropdown" href="i18n-resources.html#" id="dropdown-active-item"><i class="flag-icon flag-icon-gb"></i> English<i class="caret"></i></a>
<div aria-labelledby="dropdown-flag" class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item active" data-lng="en" href="i18n-resources.html#"><i class="flag-icon flag-icon-gb"></i> English</a>
<a class="dropdown-item" data-lng="es" href="i18n-resources.html#"><i class="flag-icon flag-icon-es"></i> Spanish</a>
<a class="dropdown-item" data-lng="pt" href="i18n-resources.html#"><i class="flag-icon flag-icon-pt"></i> Portuguese</a>
<a class="dropdown-item" data-lng="fr" href="i18n-resources.html#"><i class="flag-icon flag-icon-fr"></i> French</a>
</div>
</li>
</ul>
</div>
</div>
</div>
</nav>
<div class="row mt-2">
<div class="col-12">
<h5>Translation Text</h5>
<div class="translate-text">
<p data-i18n="key">At ourselves direction believing do he departure. Celebrated
                      her had sentiments understood are projection set. Possession
                      ye no mr unaffected remarkably at. Wrote house in never fruit
                      up. Pasture imagine my garrets an he. However distant she request
                      behaved see nothing. Talking settled at pleased an of me brother
                      weather.
                    </p>
</div>
</div>
</div>
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
                                    &lt;i class="flag-icon flag-icon-es"&gt;&lt;/i&gt; Spanish
                                &lt;/a&gt;
                                &lt;a href="#" class="dropdown-item"&gt;
                                    &lt;i class="flag-icon flag-icon-pt"&gt;&lt;/i&gt; Portuguese
                                &lt;/a&gt;
                                &lt;a href="#" class="dropdown-item"&gt;
                                    &lt;i class="flag-icon flag-icon-fr"&gt;&lt;/i&gt; French
                                &lt;/a&gt;
                            &lt;/div&gt;
                        </code>
                    </pre>
</div>
<div class="col-md-6">
<h5>Js Code For Switching</h5>
<pre class="language-javascript">
                        <code class="language-javascript">
                            i18next.init({
                                resources: {
                                    en: {
                                        translation: {
                                            key: "At ourselves direction..."
                                        }
                                    },
                                    es: {
                                        translation: {
                                            key: "A nosotros mismos la dirección..."
                                        }
                                    },
                                    pt: {
                                        translation: {
                                            key: "Em nós mesmos..."
                                        }
                                    },
                                    fr: {
                                        translation: {
                                            key: "À nous-mêmes la direction..."
                                        }
                                    }
                                },
                                debug: true,
                                fallbackLng: false
                            }, function(err, t) {
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
<!-- // Resources example section end -->
</div>
</div>
</div>