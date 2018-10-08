<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\CardWeatherAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Advance Weather Cards</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="card-weather.html#">Components</a>
</li>
<li class="breadcrumb-item active">Weather Cards
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="card-weather.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="card-weather.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="card-weather.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="card-weather.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Weather cards section start -->
<section id="weather-cards">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Weather Cards</h4>
<p>Animated weather cards.</p>
</div>
</div>
<div class="row">
<div class="col-xl-4 col-md-12 col-12">
<div class="card">
<div class="card-content">
<div class="weather-date position-relative">
<div class="date-info position-absolute bg-blue-grey bg-lighten-1 white mt-3 p-1 text-center">
<span class="date block">14</span>
<span class="month">Nov</span>
</div>
</div>
<div class="card-body bg-blue-grey bg-lighten-2 rounded-top">
<ul class="list-inline text-right">
<li><a data-action="reload"><i class="ft-rotate-cw font-medium-4 grey"></i></a></li>
</ul>
<div class="animated-weather-icons text-center">
<svg class="climacon climacon_cloudHailAlt climacon-blue-grey climacon-darken-2 height-200" id="cloudHailAlt1" version="1.1" viewbox="15 15 70 70">
<g class="climacon_iconWrap climacon_iconWrap-cloudHailAlt">
<g class="climacon_wrapperComponent climacon_wrapperComponent-hailAlt">
<g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
<circle cx="42" cy="65.498" r="2"></circle>
</g>
<g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
<circle cx="49.999" cy="65.498" r="2"></circle>
</g>
<g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
<circle cx="57.998" cy="65.498" r="2"></circle>
</g>
<g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
<circle cx="42" cy="65.498" r="2"></circle>
</g>
<g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
<circle cx="49.999" cy="65.498" r="2"></circle>
</g>
<g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
<circle cx="57.998" cy="65.498" r="2"></circle>
</g>
</g>
<g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
<path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.941v-4.381c2.39-1.384,3.999-3.961,3.999-6.92c0-4.417-3.581-8-7.998-8c-1.602,0-3.084,0.48-4.334,1.291c-1.23-5.317-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.998c0,3.549,1.55,6.728,3.999,8.924v4.916c-4.776-2.768-7.998-7.922-7.998-13.84c0-8.835,7.162-15.997,15.997-15.997c6.004,0,11.229,3.311,13.966,8.203c0.663-0.113,1.336-0.205,2.033-0.205c6.626,0,11.998,5.372,11.998,12C71.998,58.863,68.656,63.293,63.999,64.941z"></path>
</g>
</g>
</svg>
</div>
<div class="weather-details text-center">
<span class="mt-2 block blue-grey darken-3">Snow</span>
<span class="font-medium-4 text-bold-500 blue-grey darken-4">London, UK</span>
</div>
</div>
<div class="card-footer bg-blue-grey bg-darken-3 py-3 border-0">
<div class="row">
<div class="col-4 text-center display-table-cell">
<i class="me-wind font-large-1 white lighten-3 align-middle"></i>
<span class="white align-middle">2MPH</span>
</div>
<div class="col-4 text-center display-table-cell">
<i class="me-sun2 font-large-1 white lighten-3 align-middle"></i>
<span class="white align-middle">2%</span>
</div>
<div class="col-4 text-center display-table-cell">
<i class="me-thermometer font-large-1 white lighten-3 align-middle"></i>
<span class="white align-middle">13.0°</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-12 col-12">
<div class="card">
<div class="card-content">
<div class="weather-date position-relative">
<div class="date-info position-absolute bg-amber bg-lighten-1 white mt-3 p-1 text-center">
<span class="date block">14</span>
<span class="month">Nov</span>
</div>
</div>
<div class="card-body bg-amber bg-lighten-4 rounded-top">
<ul class="list-inline text-right">
<li><a data-action="reload"><i class="ft-rotate-cw font-medium-4 amber"></i></a></li>
</ul>
<div class="animated-weather-icons text-center">
<svg class="climacon climacon_wind climacon-amber climacon-darken-2 height-200" id="wind1" version="1.1" viewbox="15 15 70 70">
<g class="climacon_iconWrap climacon_iconWrap-wind">
<g class="climacon_wrapperComponent climacon_componentWrap-wind">
<path class="climacon_component climacon_component-stroke climacon_component-wind climacon_component-wind_curl" d="M65.999,52L65.999,52h-3c-1.104,0-2-0.895-2-1.999c0-1.104,0.896-2,2-2h3c1.104,0,2-0.896,2-1.999c0-1.105-0.896-2-2-2s-2-0.896-2-2s0.896-2,2-2c0.138,0,0.271,0.014,0.401,0.041c3.121,0.211,5.597,2.783,5.597,5.959C71.997,49.314,69.312,52,65.999,52z"></path>
<path class="climacon_component climacon_component-stroke climacon_component-wind" d="M55.999,48.001h-2h-6.998H34.002c-1.104,0-1.999,0.896-1.999,2c0,1.104,0.895,1.999,1.999,1.999h2h3.999h3h4h3h3.998h2c3.313,0,6,2.688,6,6c0,3.176-2.476,5.748-5.597,5.959C56.271,63.986,56.139,64,55.999,64c-1.104,0-2-0.896-2-2c0-1.105,0.896-2,2-2s2-0.896,2-2s-0.896-2-2-2h-2h-3.998h-3h-4h-3h-3.999h-2c-3.313,0-5.999-2.686-5.999-5.999c0-3.175,2.475-5.747,5.596-5.959c0.131-0.026,0.266-0.04,0.403-0.04l0,0h12.999h6.998h2c1.104,0,2-0.896,2-2s-0.896-2-2-2s-2-0.895-2-2c0-1.104,0.896-2,2-2c0.14,0,0.272,0.015,0.403,0.041c3.121,0.211,5.597,2.783,5.597,5.959C61.999,45.314,59.312,48.001,55.999,48.001z"></path>
</g>
</g>
</svg>
</div>
<div class="weather-details text-center">
<span class="mt-2 block amber darken-2">Windy</span>
<span class="font-medium-4 text-bold-500 amber darken-4">Beijing, China</span>
</div>
</div>
<div class="card-footer bg-amber bg-darken-3 py-3 text-center border-0">
<div class="row">
<div class="col-4 text-center display-table-cell">
<i class="me-wind font-large-1 white lighten-3 align-middle"></i>
<span class="white align-middle">2MPH</span>
</div>
<div class="col-4 text-center display-table-cell">
<i class="me-sun2 font-large-1 white lighten-3 align-middle"></i>
<span class="white align-middle">2%</span>
</div>
<div class="col-4 text-center display-table-cell">
<i class="me-thermometer font-large-1 white lighten-3 align-middle"></i>
<span class="white align-middle">13.0°</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-12 col-12">
<div class="card">
<div class="card-content">
<div class="weather-date position-relative">
<div class="date-info position-absolute bg-blue bg-lighten-1 white mt-3 p-1 text-center">
<span class="date block">14</span>
<span class="month">Nov</span>
</div>
</div>
<div class="card-body bg-blue bg-lighten-4 rounded-top">
<ul class="list-inline text-right">
<li><a data-action="reload"><i class="ft-rotate-cw font-medium-4 blue"></i></a></li>
</ul>
<div class="animated-weather-icons text-center">
<svg class="climacon climacon_cloudDrizzleAlt climacon-blue climacon-darken-2 height-200" id="cloudDrizzleAlt1" version="1.1" viewbox="15 15 70 70">
<g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleAlt">
<g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
<path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z" id="Drizzle-Left_1_1"></path>
<path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z"></path>
<path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z"></path>
</g>
<g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
<path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.943,41.642c-0.696,0-1.369,0.092-2.033,0.205c-2.736-4.892-7.961-8.203-13.965-8.203c-8.835,0-15.998,7.162-15.998,15.997c0,5.992,3.3,11.207,8.177,13.947c0.276-1.262,0.892-2.465,1.873-3.445l0.057-0.057c-3.644-2.061-6.106-5.963-6.106-10.445c0-6.626,5.372-11.998,11.998-11.998c5.691,0,10.433,3.974,11.666,9.29c1.25-0.81,2.732-1.291,4.332-1.291c4.418,0,8,3.581,8,7.999c0,3.443-2.182,6.371-5.235,7.498c0.788,1.146,1.194,2.471,1.222,3.807c4.666-1.645,8.014-6.077,8.014-11.305C71.941,47.014,66.57,41.642,59.943,41.642z"></path>
</g>
</g>
</svg>
</div>
<div class="weather-details text-center">
<span class="mt-2 block blue darken-2">Rain</span>
<span class="font-medium-4 text-bold-500 blue darken-4">Chicago, US</span>
</div>
</div>
<div class="card-footer bg-blue bg-darken-3 py-3 border-0">
<div class="row">
<div class="col-4 text-center display-table-cell">
<i class="me-wind font-large-1 white lighten-3 align-middle"></i>
<span class="white align-middle">2MPH</span>
</div>
<div class="col-4 text-center display-table-cell">
<i class="me-sun2 font-large-1 white lighten-3 align-middle"></i>
<span class="white align-middle">2%</span>
</div>
<div class="col-4 text-center display-table-cell">
<i class="me-thermometer font-large-1 white lighten-3 align-middle"></i>
<span class="white align-middle">13.0°</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-6 col-md-12 col-sm-12">
<div class="card">
<div class="card-content">
<div class="weather-img position-relative">
<div class="weather-date position-absolute position-bottom-0">
<div class="date-info bg-blue-grey bg-darken-4 white p-1 text-center">
<span class="month block">Nov</span>
<span class="date block">14</span>
</div>
</div>
<img alt="Card image cap" class="card-img-top img-fluid height-300" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/backgrounds/mountain.png"/>
</div>
<div class="card-body text-center">
<div class="row">
<div class="col-2">
<span class="block">Mon</span>
<i class="me-cloudy block font-large-1 my-1"></i>
<span class="block">13°</span>
</div>
<div class="col-2">
<span class="block">Tue</span>
<i class="me-lightning2 block font-large-1 my-1"></i>
<span class="block">12°</span>
</div>
<div class="col-2">
<span class="block">Wed</span>
<i class="me-windy3 block font-large-1 my-1"></i>
<span class="block">10°</span>
</div>
<div class="col-2">
<span class="block">Thu</span>
<i class="me-lightning3 block font-large-1 my-1"></i>
<span class="block">12°</span>
</div>
<div class="col-2">
<span class="block">Fri</span>
<i class="me-cloud4 block font-large-1 my-1"></i>
<span class="block">9°</span>
</div>
<div class="col-2">
<span class="block">Sat</span>
<i class="me-snowy3 block font-large-1 my-1"></i>
<span class="block">6°</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-md-12 col-sm-12">
<div class="card">
<div class="card-content">
<div class="weather-img position-relative">
<div class="weather-date position-absolute">
<div class="date-info bg-blue-grey bg-darken-4 white p-1 text-center">
<span class="month block">Nov</span>
<span class="date block">14</span>
</div>
</div>
<img alt="Card image cap" class="card-img-top img-fluid height-300" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/backgrounds/ice.png"/>
</div>
<div class="card-body text-center">
<div class="row">
<div class="col-2">
<span class="block">Now</span>
<i class="me-cloudy block font-large-1 my-1"></i>
<span class="block">13°</span>
</div>
<div class="col-2">
<span class="block">2pm</span>
<i class="me-lightning2 block font-large-1 my-1"></i>
<span class="block">12°</span>
</div>
<div class="col-2">
<span class="block">3pm</span>
<i class="me-windy3 block font-large-1 my-1"></i>
<span class="block">10°</span>
</div>
<div class="col-2">
<span class="block">4pm</span>
<i class="me-lightning3 block font-large-1 my-1"></i>
<span class="block">12°</span>
</div>
<div class="col-2">
<span class="block">5pm</span>
<i class="me-cloud4 block font-large-1 my-1"></i>
<span class="block">9°</span>
</div>
<div class="col-2">
<span class="block">6pm</span>
<i class="me-snowy3 block font-large-1 my-1"></i>
<span class="block">6°</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-3 col-md-6 col-sm-12">
<div class="card">
<div class="card-content">
<div class="card-body bg-blue-grey bg-lighten-2 rounded-top">
<div class="animated-weather-icons text-center float-left">
<svg class="climacon climacon_cloudHailAlt climacon-blue-grey climacon-darken-2 height-100" id="cloudHailAlt2" version="1.1" viewbox="15 15 70 70">
<g class="climacon_iconWrap climacon_iconWrap-cloudHailAlt">
<g class="climacon_wrapperComponent climacon_wrapperComponent-hailAlt">
<g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
<circle cx="42" cy="65.498" r="2"></circle>
</g>
<g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
<circle cx="49.999" cy="65.498" r="2"></circle>
</g>
<g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
<circle cx="57.998" cy="65.498" r="2"></circle>
</g>
<g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
<circle cx="42" cy="65.498" r="2"></circle>
</g>
<g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
<circle cx="49.999" cy="65.498" r="2"></circle>
</g>
<g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
<circle cx="57.998" cy="65.498" r="2"></circle>
</g>
</g>
<g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
<path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.941v-4.381c2.39-1.384,3.999-3.961,3.999-6.92c0-4.417-3.581-8-7.998-8c-1.602,0-3.084,0.48-4.334,1.291c-1.23-5.317-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.998c0,3.549,1.55,6.728,3.999,8.924v4.916c-4.776-2.768-7.998-7.922-7.998-13.84c0-8.835,7.162-15.997,15.997-15.997c6.004,0,11.229,3.311,13.966,8.203c0.663-0.113,1.336-0.205,2.033-0.205c6.626,0,11.998,5.372,11.998,12C71.998,58.863,68.656,63.293,63.999,64.941z"></path>
</g>
</g>
</svg>
</div>
<div class="weather-details text-center">
<span class="block blue-grey darken-3">Snow</span>
<span class="font-large-1 block blue-grey darken-4">-5°</span>
<span class="font-medium-4 text-bold-500 blue-grey darken-4">London, UK</span>
</div>
</div>
<div class="card-footer py-2 border-0">
<div class="row">
<div class="col-4 text-center display-table-cell">
<i class="me-wind font-large-1 lighten-3 align-middle"></i>
<span class="align-middle">12MPH</span>
</div>
<div class="col-4 text-center display-table-cell">
<i class="me-sun2 font-large-1 lighten-3 align-middle"></i>
<span class="align-middle">2%</span>
</div>
<div class="col-4 text-center display-table-cell">
<i class="me-thermometer font-large-1 lighten-3 align-middle"></i>
<span class="align-middle">13.0°</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6 col-sm-12">
<div class="card">
<div class="card-content">
<div class="card-body bg-amber bg-lighten-4 rounded-top">
<div class="animated-weather-icons text-center float-left">
<svg class="climacon climacon_wind climacon-amber climacon-darken-2 height-100" id="wind2" version="1.1" viewbox="15 15 70 70">
<g class="climacon_iconWrap climacon_iconWrap-wind">
<g class="climacon_wrapperComponent climacon_componentWrap-wind">
<path class="climacon_component climacon_component-stroke climacon_component-wind climacon_component-wind_curl" d="M65.999,52L65.999,52h-3c-1.104,0-2-0.895-2-1.999c0-1.104,0.896-2,2-2h3c1.104,0,2-0.896,2-1.999c0-1.105-0.896-2-2-2s-2-0.896-2-2s0.896-2,2-2c0.138,0,0.271,0.014,0.401,0.041c3.121,0.211,5.597,2.783,5.597,5.959C71.997,49.314,69.312,52,65.999,52z"></path>
<path class="climacon_component climacon_component-stroke climacon_component-wind" d="M55.999,48.001h-2h-6.998H34.002c-1.104,0-1.999,0.896-1.999,2c0,1.104,0.895,1.999,1.999,1.999h2h3.999h3h4h3h3.998h2c3.313,0,6,2.688,6,6c0,3.176-2.476,5.748-5.597,5.959C56.271,63.986,56.139,64,55.999,64c-1.104,0-2-0.896-2-2c0-1.105,0.896-2,2-2s2-0.896,2-2s-0.896-2-2-2h-2h-3.998h-3h-4h-3h-3.999h-2c-3.313,0-5.999-2.686-5.999-5.999c0-3.175,2.475-5.747,5.596-5.959c0.131-0.026,0.266-0.04,0.403-0.04l0,0h12.999h6.998h2c1.104,0,2-0.896,2-2s-0.896-2-2-2s-2-0.895-2-2c0-1.104,0.896-2,2-2c0.14,0,0.272,0.015,0.403,0.041c3.121,0.211,5.597,2.783,5.597,5.959C61.999,45.314,59.312,48.001,55.999,48.001z"></path>
</g>
</g>
</svg>
</div>
<div class="weather-details text-center">
<span class="block amber darken-2">Windy</span>
<span class="font-large-1 block amber darken-4">32°</span>
<span class="font-medium-4 text-bold-500 amber darken-4">Beijing, China</span>
</div>
</div>
<div class="card-footer py-2 text-center border-0">
<div class="row">
<div class="col-4 text-center display-table-cell">
<i class="me-wind font-large-1 lighten-3 align-middle"></i>
<span class="align-middle">12MPH</span>
</div>
<div class="col-4 text-center display-table-cell">
<i class="me-sun2 font-large-1 lighten-3 align-middle"></i>
<span class="align-middle">2%</span>
</div>
<div class="col-4 text-center display-table-cell">
<i class="me-thermometer font-large-1 lighten-3 align-middle"></i>
<span class="align-middle">13.0°</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6 col-sm-12">
<div class="card">
<div class="card-content">
<div class="card-body bg-blue-grey bg-lighten-4 rounded-top">
<div class="animated-weather-icons text-center float-left">
<svg class="climacon climacon_cloudSunFill climacon-blue-grey climacon-darken-2 height-100" id="cloudSunFill" version="1.1" viewbox="15 15 70 70">
<g class="climacon_iconWrap climacon_cloudSunFill-iconWrap">
<g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
<g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
<path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
<path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
<path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
<path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
<path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
<path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
<path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
<path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
</g>
<g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">
<circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
<circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" cx="58.033" cy="41.612" fill="#FFFFFF" r="7.999"></circle>
</g>
</g>
<g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
<path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M44.033,65.641c-8.836,0-15.999-7.162-15.999-15.998c0-8.835,7.163-15.998,15.999-15.998c6.006,0,11.233,3.312,13.969,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.26,65.641,47.23,65.641,44.033,65.641z"></path>
<path class="climacon_component climacon_component-fill climacon_component-fill_cloud" d="M60.035,61.641c4.418,0,8-3.582,8-7.998c0-4.418-3.582-8-8-8c-1.6,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.976-9.29-11.668-9.29c-6.627,0-11.999,5.372-11.999,11.999c0,6.627,5.372,11.998,11.999,11.998C47.65,61.641,57.016,61.641,60.035,61.641z" fill="#FFFFFF"></path>
</g>
</g>
</svg>
</div>
<div class="weather-details text-center">
<span class="block blue-grey darken-2">Cloudy</span>
<span class="font-large-1 block blue-grey darken-4">13°</span>
<span class="font-medium-4 text-bold-500 blue-grey darken-4">Chicago, US</span>
</div>
</div>
<div class="card-footer py-2 border-0">
<div class="row">
<div class="col-4 text-center display-table-cell">
<i class="me-wind font-large-1 lighten-3 align-middle"></i>
<span class="align-middle">12MPH</span>
</div>
<div class="col-4 text-center display-table-cell">
<i class="me-sun2 font-large-1 lighten-3 align-middle"></i>
<span class="align-middle">2%</span>
</div>
<div class="col-4 text-center display-table-cell">
<i class="me-thermometer font-large-1 lighten-3 align-middle"></i>
<span class="align-middle">13.0°</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6 col-sm-12">
<div class="card">
<div class="card-content">
<div class="card-body bg-blue bg-lighten-4 rounded-top">
<div class="animated-weather-icons text-center float-left">
<svg class="climacon climacon_cloudDrizzleAlt climacon-blue climacon-darken-2 height-100" id="cloudDrizzleAlt2" version="1.1" viewbox="15 15 70 70">
<g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleAlt">
<g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
<path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z" id="Drizzle-Left_1_2"></path>
<path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z"></path>
<path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z"></path>
</g>
<g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
<path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.943,41.642c-0.696,0-1.369,0.092-2.033,0.205c-2.736-4.892-7.961-8.203-13.965-8.203c-8.835,0-15.998,7.162-15.998,15.997c0,5.992,3.3,11.207,8.177,13.947c0.276-1.262,0.892-2.465,1.873-3.445l0.057-0.057c-3.644-2.061-6.106-5.963-6.106-10.445c0-6.626,5.372-11.998,11.998-11.998c5.691,0,10.433,3.974,11.666,9.29c1.25-0.81,2.732-1.291,4.332-1.291c4.418,0,8,3.581,8,7.999c0,3.443-2.182,6.371-5.235,7.498c0.788,1.146,1.194,2.471,1.222,3.807c4.666-1.645,8.014-6.077,8.014-11.305C71.941,47.014,66.57,41.642,59.943,41.642z"></path>
</g>
</g>
</svg>
</div>
<div class="weather-details text-center">
<span class="block blue darken-2">Rain</span>
<span class="font-large-1 block blue darken-4">8°</span>
<span class="font-medium-4 text-bold-500 blue darken-4">Berlin, Germany</span>
</div>
</div>
<div class="card-footer py-2 border-0">
<div class="row">
<div class="col-4 text-center display-table-cell">
<i class="me-wind font-large-1 lighten-3 align-middle"></i>
<span class="align-middle">12MPH</span>
</div>
<div class="col-4 text-center display-table-cell">
<i class="me-sun2 font-large-1 lighten-3 align-middle"></i>
<span class="align-middle">2%</span>
</div>
<div class="col-4 text-center display-table-cell">
<i class="me-thermometer font-large-1 lighten-3 align-middle"></i>
<span class="align-middle">13.0°</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-4 col-md-12 col-sm-12">
<div class="card">
<div class="card-content">
<div class="card-body bg-blue-grey bg-lighten-2 rounded-top">
<div class="animated-weather-icons text-center float-left">
<svg class="climacon climacon_cloudHailAlt climacon-blue-grey climacon-darken-2 height-150" id="cloudHailAlt3" version="1.1" viewbox="15 15 70 70">
<g class="climacon_iconWrap climacon_iconWrap-cloudHailAlt">
<g class="climacon_wrapperComponent climacon_wrapperComponent-hailAlt">
<g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
<circle cx="42" cy="65.498" r="2"></circle>
</g>
<g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
<circle cx="49.999" cy="65.498" r="2"></circle>
</g>
<g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
<circle cx="57.998" cy="65.498" r="2"></circle>
</g>
<g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
<circle cx="42" cy="65.498" r="2"></circle>
</g>
<g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
<circle cx="49.999" cy="65.498" r="2"></circle>
</g>
<g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
<circle cx="57.998" cy="65.498" r="2"></circle>
</g>
</g>
<g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
<path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.941v-4.381c2.39-1.384,3.999-3.961,3.999-6.92c0-4.417-3.581-8-7.998-8c-1.602,0-3.084,0.48-4.334,1.291c-1.23-5.317-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.998c0,3.549,1.55,6.728,3.999,8.924v4.916c-4.776-2.768-7.998-7.922-7.998-13.84c0-8.835,7.162-15.997,15.997-15.997c6.004,0,11.229,3.311,13.966,8.203c0.663-0.113,1.336-0.205,2.033-0.205c6.626,0,11.998,5.372,11.998,12C71.998,58.863,68.656,63.293,63.999,64.941z"></path>
</g>
</g>
</svg>
</div>
<div class="weather-details text-center">
<span class="block blue-grey darken-3">Snow</span>
<span class="font-large-3 block blue-grey darken-4">-5°</span>
<span class="font-medium-4 text-bold-500 blue-grey darken-4">London, UK</span>
</div>
</div>
<div class="card-footer p-0 border-0">
<div class="table-responsive">
<table class="table table-bordered mb-0">
<tbody>
<tr>
<td>
<div class="details-left float-left">
<span class="font-small-1 grey text-bold-600 block">WIND</span>
<span class="text-bold-500">&lt;12MPH</span>
</div>
<div class="float-right align-middle">
<i class="me-wind grey lighten-1 font-large-1"></i>
</div>
</td>
<td>
<div class="details-left float-left">
<span class="font-small-1 grey text-bold-600 block">REAL FEEL</span>
<span class="text-bold-500">36.5°</span>
</div>
<div class="float-right align-middle">
<i class="me-thermometer grey lighten-1 font-large-1"></i>
</div>
</td>
</tr>
<tr>
<td>
<div class="details-left float-left">
<span class="font-small-1 grey text-bold-600 block">UV INDEX</span>
<span class="text-bold-500">5%</span>
</div>
<div class="float-right align-middle">
<i class="me-sun grey lighten-1 font-large-1"></i>
</div>
</td>
<td>
<div class="details-left float-left">
<span class="font-small-1 grey text-bold-600 block">PRESSURE</span>
<span class="text-bold-500">30.19 in</span>
</div>
<div class="float-right align-middle">
<i class="me-compass grey lighten-1 font-large-1"></i>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-12 col-sm-12">
<div class="card">
<div class="card-content">
<div class="card-body bg-amber bg-lighten-4 rounded-top">
<div class="animated-weather-icons text-center float-left">
<svg class="climacon climacon_wind climacon-amber climacon-darken-2 height-150" id="wind3" version="1.1" viewbox="15 15 70 70">
<g class="climacon_iconWrap climacon_iconWrap-wind">
<g class="climacon_wrapperComponent climacon_componentWrap-wind">
<path class="climacon_component climacon_component-stroke climacon_component-wind climacon_component-wind_curl" d="M65.999,52L65.999,52h-3c-1.104,0-2-0.895-2-1.999c0-1.104,0.896-2,2-2h3c1.104,0,2-0.896,2-1.999c0-1.105-0.896-2-2-2s-2-0.896-2-2s0.896-2,2-2c0.138,0,0.271,0.014,0.401,0.041c3.121,0.211,5.597,2.783,5.597,5.959C71.997,49.314,69.312,52,65.999,52z"></path>
<path class="climacon_component climacon_component-stroke climacon_component-wind" d="M55.999,48.001h-2h-6.998H34.002c-1.104,0-1.999,0.896-1.999,2c0,1.104,0.895,1.999,1.999,1.999h2h3.999h3h4h3h3.998h2c3.313,0,6,2.688,6,6c0,3.176-2.476,5.748-5.597,5.959C56.271,63.986,56.139,64,55.999,64c-1.104,0-2-0.896-2-2c0-1.105,0.896-2,2-2s2-0.896,2-2s-0.896-2-2-2h-2h-3.998h-3h-4h-3h-3.999h-2c-3.313,0-5.999-2.686-5.999-5.999c0-3.175,2.475-5.747,5.596-5.959c0.131-0.026,0.266-0.04,0.403-0.04l0,0h12.999h6.998h2c1.104,0,2-0.896,2-2s-0.896-2-2-2s-2-0.895-2-2c0-1.104,0.896-2,2-2c0.14,0,0.272,0.015,0.403,0.041c3.121,0.211,5.597,2.783,5.597,5.959C61.999,45.314,59.312,48.001,55.999,48.001z"></path>
</g>
</g>
</svg>
</div>
<div class="weather-details text-center">
<span class="block amber darken-2">Windy</span>
<span class="font-large-3 block amber darken-4">32°</span>
<span class="font-medium-4 text-bold-500 amber darken-4">Beijing, China</span>
</div>
</div>
<div class="card-footer p-0 border-0">
<div class="table-responsive">
<table class="table table-bordered mb-0">
<tbody>
<tr>
<td>
<div class="details-left float-left">
<span class="font-small-1 grey text-bold-600 block">WIND</span>
<span class="text-bold-500">&lt;12MPH</span>
</div>
<div class="float-right align-middle">
<i class="me-wind amber lighten-1 font-large-1"></i>
</div>
</td>
<td>
<div class="details-left float-left">
<span class="font-small-1 grey text-bold-600 block">REAL FEEL</span>
<span class="text-bold-500">36.5°</span>
</div>
<div class="float-right align-middle">
<i class="me-thermometer amber lighten-1 font-large-1"></i>
</div>
</td>
</tr>
<tr>
<td>
<div class="details-left float-left">
<span class="font-small-1 grey text-bold-600 block">UV INDEX</span>
<span class="text-bold-500">5%</span>
</div>
<div class="float-right align-middle">
<i class="me-sun amber lighten-1 font-large-1"></i>
</div>
</td>
<td>
<div class="details-left float-left">
<span class="font-small-1 grey text-bold-600 block">PRESSURE</span>
<span class="text-bold-500">30.19 in</span>
</div>
<div class="float-right align-middle">
<i class="me-compass amber lighten-1 font-large-1"></i>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-12 col-sm-12">
<div class="card">
<div class="card-content">
<div class="card-body bg-blue bg-lighten-4 rounded-top">
<div class="animated-weather-icons text-center float-left">
<svg class="climacon climacon_cloudDrizzleAlt climacon-blue climacon-darken-2 height-150" id="cloudDrizzleAlt3" version="1.1" viewbox="15 15 70 70">
<g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleAlt">
<g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
<path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z" id="Drizzle-Left_1_3"></path>
<path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z"></path>
<path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z"></path>
</g>
<g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
<path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.943,41.642c-0.696,0-1.369,0.092-2.033,0.205c-2.736-4.892-7.961-8.203-13.965-8.203c-8.835,0-15.998,7.162-15.998,15.997c0,5.992,3.3,11.207,8.177,13.947c0.276-1.262,0.892-2.465,1.873-3.445l0.057-0.057c-3.644-2.061-6.106-5.963-6.106-10.445c0-6.626,5.372-11.998,11.998-11.998c5.691,0,10.433,3.974,11.666,9.29c1.25-0.81,2.732-1.291,4.332-1.291c4.418,0,8,3.581,8,7.999c0,3.443-2.182,6.371-5.235,7.498c0.788,1.146,1.194,2.471,1.222,3.807c4.666-1.645,8.014-6.077,8.014-11.305C71.941,47.014,66.57,41.642,59.943,41.642z"></path>
</g>
</g>
</svg>
</div>
<div class="weather-details text-center">
<span class="block blue darken-2">Rain</span>
<span class="font-large-3 block blue darken-4">8°</span>
<span class="font-medium-4 text-bold-500 blue darken-4">Berlin, Germany</span>
</div>
</div>
<div class="card-footer p-0 border-0">
<div class="table-responsive">
<table class="table table-bordered mb-0">
<tbody>
<tr>
<td>
<div class="details-left float-left">
<span class="font-small-1 grey text-bold-600 block">WIND</span>
<span class="text-bold-500">&lt;12MPH</span>
</div>
<div class="float-right align-middle">
<i class="me-wind blue lighten-1 font-large-1"></i>
</div>
</td>
<td>
<div class="details-left float-left">
<span class="font-small-1 grey text-bold-600 block">REAL FEEL</span>
<span class="text-bold-500">36.5°</span>
</div>
<div class="float-right align-middle">
<i class="me-thermometer blue lighten-1 font-large-1"></i>
</div>
</td>
</tr>
<tr>
<td>
<div class="details-left float-left">
<span class="font-small-1 grey text-bold-600 block">UV INDEX</span>
<span class="text-bold-500">5%</span>
</div>
<div class="float-right align-middle">
<i class="me-sun blue lighten-1 font-large-1"></i>
</div>
</td>
<td>
<div class="details-left float-left">
<span class="font-small-1 grey text-bold-600 block">PRESSURE</span>
<span class="text-bold-500">30.19 in</span>
</div>
<div class="float-right align-middle">
<i class="me-compass blue lighten-1 font-large-1"></i>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Weather cards section end -->
</div>
