<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\FormSelectizeAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Selectize select</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="form-selectize.html#">Form Components</a>
</li>
<li class="breadcrumb-item active">Selectize select
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="form-selectize.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="form-selectize.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="form-selectize.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="form-selectize.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Selectize selects start -->
<section class="basic-selectize">
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-body">
<div class="card-body">
<div class="form-group">
<h5>Basic Selectize input</h5>
<p>Add <code>.input-selectize</code> class to input field and
                        add value comma saperated. </p>
<input class="input-selectize" type="text" value="pretty,awesome"/>
</div>
<div class="form-group">
<h5>Basic Selectize select with Placeholder</h5>
<p>Add <code>.selectize-select</code> class to select for basic
                        Selectize select field</p>
<select class="selectize-select">
<option selected="" value="">No city selected</option>
<option value="1">Amsterdam</option>
<option value="2">Antwerp</option>
<option value="3">Athens</option>
<option value="4">Barcelona</option>
<option value="5">Berlin</option>
<option value="6">Birmingham</option>
<option value="7">Bradford</option>
<option value="8">Bremen</option>
<option value="9">Brussels</option>
<option value="10">Bucharest</option>
<option value="11">Budapest</option>
<option value="12">Cologne</option>
<option value="13">Copenhagen</option>
<option value="14">Dortmund</option>
<option value="15">Dresden</option>
<option value="16">Dublin</option>
<option value="17">Düsseldorf</option>
<option value="18">Essen</option>
<option value="19">Frankfurt</option>
<option value="20">Genoa</option>
<option value="21">Glasgow</option>
<option value="22">Gothenburg</option>
<option value="23">Hamburg</option>
<option value="24">Hannover</option>
<option value="25">Helsinki</option>
<option value="26">Leeds</option>
<option value="27">Leipzig</option>
<option value="28">Lisbon</option>
<option value="29">Łódź</option>
<option value="30">London</option>
<option value="31">Kraków</option>
<option value="32">Madrid</option>
<option value="33">Málaga</option>
<option value="34">Manchester</option>
<option value="35">Marseille</option>
<option value="36">Milan</option>
<option value="37">Munich</option>
<option value="38">Naples</option>
<option value="39">Palermo</option>
<option value="40">Paris</option>
<option value="41">Poznań</option>
<option value="42">Prague</option>
<option value="43">Riga</option>
<option value="44">Rome</option>
<option value="45">Rotterdam</option>
<option value="46">Seville</option>
<option value="47">Sheffield</option>
<option value="48">Sofia</option>
<option value="49">Stockholm</option>
<option value="50">Stuttgart</option>
<option value="51">The Hague</option>
<option value="52">Turin</option>
<option value="53">Valencia</option>
<option value="54">Vienna</option>
<option value="55">Vilnius</option>
<option value="56">Warsaw</option>
<option value="57">Wrocław</option>
<option value="58">Zagreb</option>
<option value="59">Zaragoza</option>
</select>
</div>
<div class="form-group">
<h5>Basic Selectize select without placeholder</h5>
<select class="selectize-select">
<option value="1">Amsterdam</option>
<option value="2">Antwerp</option>
<option value="3">Athens</option>
<option value="4">Barcelona</option>
<option value="5">Berlin</option>
<option value="6">Birmingham</option>
<option value="7">Bradford</option>
<option value="8">Bremen</option>
<option value="9">Brussels</option>
<option value="10">Bucharest</option>
<option value="11">Budapest</option>
<option value="12">Cologne</option>
<option value="13">Copenhagen</option>
<option value="14">Dortmund</option>
<option value="15">Dresden</option>
<option value="16">Dublin</option>
<option value="17">Düsseldorf</option>
<option value="18">Essen</option>
<option value="19">Frankfurt</option>
<option value="20">Genoa</option>
<option value="21">Glasgow</option>
<option value="22">Gothenburg</option>
<option value="23">Hamburg</option>
<option value="24">Hannover</option>
<option value="25">Helsinki</option>
<option value="26">Leeds</option>
<option value="27">Leipzig</option>
<option value="28">Lisbon</option>
<option value="29">Łódź</option>
<option value="30">London</option>
<option value="31">Kraków</option>
<option value="32">Madrid</option>
<option value="33">Málaga</option>
<option value="34">Manchester</option>
<option value="35">Marseille</option>
<option value="36">Milan</option>
<option value="37">Munich</option>
<option value="38">Naples</option>
<option value="39">Palermo</option>
<option value="40">Paris</option>
<option value="41">Poznań</option>
<option value="42">Prague</option>
<option value="43">Riga</option>
<option value="44">Rome</option>
<option value="45">Rotterdam</option>
<option value="46">Seville</option>
<option value="47">Sheffield</option>
<option value="48">Sofia</option>
<option value="49">Stockholm</option>
<option value="50">Stuttgart</option>
<option value="51">The Hague</option>
<option value="52">Turin</option>
<option value="53">Valencia</option>
<option value="54">Vienna</option>
<option value="55">Vilnius</option>
<option value="56">Warsaw</option>
<option value="57">Wrocław</option>
<option value="58">Zagreb</option>
<option value="59">Zaragoza</option>
</select>
</div>
<div class="form-group">
<h5>Disabled Selectize select</h5>
<select class="selectize-select" disabled="">
<option value="1">Amsterdam</option>
<option value="2">Antwerp</option>
<option value="3">Athens</option>
<option value="4">Barcelona</option>
<option value="5">Berlin</option>
<option value="6">Birmingham</option>
<option value="7">Bradford</option>
<option value="8">Bremen</option>
<option value="9">Brussels</option>
<option value="10">Bucharest</option>
<option value="11">Budapest</option>
<option value="12">Cologne</option>
<option value="13">Copenhagen</option>
<option value="14">Dortmund</option>
<option value="15">Dresden</option>
<option value="16">Dublin</option>
<option value="17">Düsseldorf</option>
<option value="18">Essen</option>
<option value="19">Frankfurt</option>
<option value="20">Genoa</option>
<option value="21">Glasgow</option>
<option value="22">Gothenburg</option>
<option selected="" value="23">Hamburg</option>
<option value="24">Hannover</option>
<option value="25">Helsinki</option>
<option value="26">Leeds</option>
<option value="27">Leipzig</option>
<option value="28">Lisbon</option>
<option value="29">Łódź</option>
<option value="30">London</option>
<option value="31">Kraków</option>
<option value="32">Madrid</option>
<option value="33">Málaga</option>
<option value="34">Manchester</option>
<option value="35">Marseille</option>
<option value="36">Milan</option>
<option value="37">Munich</option>
<option value="38">Naples</option>
<option value="39">Palermo</option>
<option value="40">Paris</option>
<option value="41">Poznań</option>
<option value="42">Prague</option>
<option value="43">Riga</option>
<option value="44">Rome</option>
<option value="45">Rotterdam</option>
<option value="46">Seville</option>
<option value="47">Sheffield</option>
<option value="48">Sofia</option>
<option value="49">Stockholm</option>
<option value="50">Stuttgart</option>
<option value="51">The Hague</option>
<option value="52">Turin</option>
<option value="53">Valencia</option>
<option value="54">Vienna</option>
<option value="55">Vilnius</option>
<option value="56">Warsaw</option>
<option value="57">Wrocław</option>
<option value="58">Zagreb</option>
<option value="59">Zaragoza</option>
</select>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-body">
<div class="card-body">
<div class="form-group">
<h5>Selectize multiple select</h5>
<p>Add <code>.selectize-multiple</code> class multiple selectize
                        field
                      </p>
<select class="selectize-multiple" multiple="">
<option value="">No city selected</option>
<option value="1">Amsterdam</option>
<option value="2">Antwerp</option>
<option value="3">Athens</option>
<option value="4">Barcelona</option>
<option value="5">Berlin</option>
<option value="6">Birmingham</option>
<option value="7">Bradford</option>
<option value="8">Bremen</option>
<option value="9">Brussels</option>
<option value="10">Bucharest</option>
<option selected="" value="11">Budapest</option>
<option value="12">Cologne</option>
<option value="13">Copenhagen</option>
<option value="14">Dortmund</option>
<option value="15">Dresden</option>
<option value="16">Dublin</option>
<option value="17">Düsseldorf</option>
<option value="18">Essen</option>
<option value="19">Frankfurt</option>
<option value="20">Genoa</option>
<option value="21">Glasgow</option>
<option value="22">Gothenburg</option>
<option value="23">Hamburg</option>
<option value="24">Hannover</option>
<option value="25">Helsinki</option>
<option selected="" value="26">Leeds</option>
<option value="27">Leipzig</option>
<option value="28">Lisbon</option>
<option value="29">Łódź</option>
<option value="30">London</option>
<option value="31">Kraków</option>
<option value="32">Madrid</option>
<option value="33">Málaga</option>
<option value="34">Manchester</option>
<option value="35">Marseille</option>
<option value="36">Milan</option>
<option value="37">Munich</option>
<option value="38">Naples</option>
<option value="39">Palermo</option>
<option value="40">Paris</option>
<option value="41">Poznań</option>
<option value="42">Prague</option>
<option value="43">Riga</option>
<option value="44">Rome</option>
<option value="45">Rotterdam</option>
<option value="46">Seville</option>
<option value="47">Sheffield</option>
<option value="48">Sofia</option>
<option selected="" value="49">Stockholm</option>
<option value="50">Stuttgart</option>
<option value="51">The Hague</option>
<option value="52">Turin</option>
<option value="53">Valencia</option>
<option value="54">Vienna</option>
<option value="55">Vilnius</option>
<option value="56">Warsaw</option>
<option value="57">Wrocław</option>
<option value="58">Zagreb</option>
<option value="59">Zaragoza</option>
</select>
</div>
<div class="form-group">
<h5>Selectize multiple select with placeholder</h5>
<select class="selectize-multiple" multiple="">
<option selected="" value="">No city selected</option>
<option value="1">Amsterdam</option>
<option value="2">Antwerp</option>
<option value="3">Athens</option>
<option value="4">Barcelona</option>
<option value="5">Berlin</option>
<option value="6">Birmingham</option>
<option value="7">Bradford</option>
<option value="8">Bremen</option>
<option value="9">Brussels</option>
<option value="10">Bucharest</option>
<option value="11">Budapest</option>
<option value="12">Cologne</option>
<option value="13">Copenhagen</option>
<option value="14">Dortmund</option>
<option value="15">Dresden</option>
<option value="16">Dublin</option>
<option value="17">Düsseldorf</option>
<option value="18">Essen</option>
<option value="19">Frankfurt</option>
<option value="20">Genoa</option>
<option value="21">Glasgow</option>
<option value="22">Gothenburg</option>
<option value="23">Hamburg</option>
<option value="24">Hannover</option>
<option value="25">Helsinki</option>
<option value="26">Leeds</option>
<option value="27">Leipzig</option>
<option value="28">Lisbon</option>
<option value="29">Łódź</option>
<option value="30">London</option>
<option value="31">Kraków</option>
<option value="32">Madrid</option>
<option value="33">Málaga</option>
<option value="34">Manchester</option>
<option value="35">Marseille</option>
<option value="36">Milan</option>
<option value="37">Munich</option>
<option value="38">Naples</option>
<option value="39">Palermo</option>
<option value="40">Paris</option>
<option value="41">Poznań</option>
<option value="42">Prague</option>
<option value="43">Riga</option>
<option value="44">Rome</option>
<option value="45">Rotterdam</option>
<option value="46">Seville</option>
<option value="47">Sheffield</option>
<option value="48">Sofia</option>
<option value="49">Stockholm</option>
<option value="50">Stuttgart</option>
<option value="51">The Hague</option>
<option value="52">Turin</option>
<option value="53">Valencia</option>
<option value="54">Vienna</option>
<option value="55">Vilnius</option>
<option value="56">Warsaw</option>
<option value="57">Wrocław</option>
<option value="58">Zagreb</option>
<option value="59">Zaragoza</option>
</select>
</div>
<div class="form-group">
<h5>Selectize multiple select with label</h5>
<select class="selectize-multiple" multiple="">
<option selected="" value="">No city selected</option>
<optgroup label="Austria">
<option data-timezone="+01:00" value="54">Vienna</option>
</optgroup>
<optgroup label="Belgium">
<option data-timezone="+01:00" value="2">Antwerp</option>
<option data-timezone="+01:00" value="9">Brussels</option>
</optgroup>
<optgroup label="Bulgaria">
<option data-timezone="+02:00" value="48">Sofia</option>
</optgroup>
<optgroup label="Croatia">
<option data-timezone="+01:00" value="58">Zagreb</option>
</optgroup>
<optgroup label="Czech Republic">
<option data-timezone="+01:00" value="42">Prague</option>
</optgroup>
<optgroup label="Denmark">
<option data-timezone="+01:00" value="13">Copenhagen</option>
</optgroup>
<optgroup label="England">
<option data-timezone="+00:00" value="6">Birmingham</option>
<option data-timezone="+00:00" value="7">Bradford</option>
<option data-timezone="+00:00" value="26">Leeds</option>
<option data-timezone="+00:00" value="30">London</option>
<option data-timezone="+00:00" value="34">Manchester</option>
<option data-timezone="+00:00" value="47">Sheffield</option>
</optgroup>
<optgroup label="Finland">
<option data-timezone="+02:00" value="25">Helsinki</option>
</optgroup>
<optgroup label="France">
<option data-timezone="+01:00" value="35">Marseille</option>
<option data-timezone="+01:00" value="40">Paris</option>
</optgroup>
<optgroup label="Germany">
<option data-timezone="+01:00" value="5">Berlin</option>
<option data-timezone="+01:00" value="8">Bremen</option>
<option data-timezone="+01:00" value="12">Cologne</option>
<option data-timezone="+01:00" value="14">Dortmund</option>
<option data-timezone="+01:00" value="15">Dresden</option>
<option data-timezone="+01:00" value="17">Düsseldorf</option>
<option data-timezone="+01:00" value="18">Essen</option>
<option data-timezone="+01:00" value="19">Frankfurt</option>
<option data-timezone="+01:00" value="23">Hamburg</option>
<option data-timezone="+01:00" value="24">Hannover</option>
<option data-timezone="+01:00" value="27">Leipzig</option>
<option data-timezone="+01:00" value="37">Munich</option>
<option data-timezone="+01:00" value="50">Stuttgart</option>
</optgroup>
<optgroup label="Greece">
<option data-timezone="+02:00" value="3">Athens</option>
</optgroup>
<optgroup label="Hungary">
<option data-timezone="+01:00" value="11">Budapest</option>
</optgroup>
<optgroup label="Ireland">
<option data-timezone="+00:00" value="16">Dublin</option>
</optgroup>
<optgroup label="Italy">
<option data-timezone="+01:00" value="20">Genoa</option>
<option data-timezone="+01:00" value="36">Milan</option>
<option data-timezone="+01:00" value="38">Naples</option>
<option data-timezone="+01:00" value="39">Palermo</option>
<option data-timezone="+01:00" value="44">Rome</option>
<option data-timezone="+01:00" value="52">Turin</option>
</optgroup>
<optgroup label="Latvia">
<option data-timezone="+02:00" value="43">Riga</option>
</optgroup>
<optgroup label="Lithuania">
<option data-timezone="+02:00" value="55">Vilnius</option>
</optgroup>
<optgroup label="Netherlands">
<option data-timezone="+01:00" value="1">Amsterdam</option>
<option data-timezone="+01:00" value="45">Rotterdam</option>
<option data-timezone="+01:00" value="51">The Hague</option>
</optgroup>
<optgroup label="Poland">
<option data-timezone="+01:00" value="29">Łódź</option>
<option data-timezone="+01:00" value="31">Kraków</option>
<option data-timezone="+01:00" value="41">Poznań</option>
<option data-timezone="+01:00" value="56">Warsaw</option>
<option data-timezone="+01:00" value="57">Wrocław</option>
</optgroup>
<optgroup label="Portugal">
<option data-timezone="+00:00" value="28">Lisbon</option>
</optgroup>
<optgroup label="Romania">
<option data-timezone="+02:00" value="10">Bucharest</option>
</optgroup>
<optgroup label="Scotland">
<option data-timezone="+00:00" value="21">Glasgow</option>
</optgroup>
<optgroup label="Spain">
<option data-timezone="+00:00" value="4">Barcelona</option>
<option data-timezone="+00:00" value="32">Madrid</option>
<option data-timezone="+00:00" value="33">Málaga</option>
<option data-timezone="+00:00" value="46">Seville</option>
<option data-timezone="+00:00" value="53">Valencia</option>
<option data-timezone="+00:00" value="59">Zaragoza</option>
</optgroup>
<optgroup label="Sweden">
<option data-timezone="+01:00" value="22">Gothenburg</option>
<option data-timezone="+01:00" value="49">Stockholm</option>
</optgroup>
</select>
</div>
<div class="form-group">
<h5>Disabled Selectize multiple select</h5>
<select class="selectize-multiple" disabled="" multiple="">
<option value="">No city selected</option>
<option value="1">Amsterdam</option>
<option value="2">Antwerp</option>
<option value="3">Athens</option>
<option value="4">Barcelona</option>
<option value="5">Berlin</option>
<option value="6">Birmingham</option>
<option value="7">Bradford</option>
<option value="8">Bremen</option>
<option value="9">Brussels</option>
<option value="10">Bucharest</option>
<option value="11">Budapest</option>
<option selected="" value="12">Cologne</option>
<option value="13">Copenhagen</option>
<option value="14">Dortmund</option>
<option value="15">Dresden</option>
<option value="16">Dublin</option>
<option value="17">Düsseldorf</option>
<option selected="" value="18">Essen</option>
<option value="19">Frankfurt</option>
<option value="20">Genoa</option>
<option value="21">Glasgow</option>
<option value="22">Gothenburg</option>
<option value="23">Hamburg</option>
<option value="24">Hannover</option>
<option value="25">Helsinki</option>
<option value="26">Leeds</option>
<option value="27">Leipzig</option>
<option value="28">Lisbon</option>
<option value="29">Łódź</option>
<option value="30">London</option>
<option value="31">Kraków</option>
<option value="32">Madrid</option>
<option value="33">Málaga</option>
<option value="34">Manchester</option>
<option value="35">Marseille</option>
<option value="36">Milan</option>
<option value="37">Munich</option>
<option value="38">Naples</option>
<option value="39">Palermo</option>
<option value="40">Paris</option>
<option value="41">Poznań</option>
<option value="42">Prague</option>
<option value="43">Riga</option>
<option value="44">Rome</option>
<option value="45">Rotterdam</option>
<option value="46">Seville</option>
<option value="47">Sheffield</option>
<option value="48">Sofia</option>
<option value="49">Stockholm</option>
<option selected="" value="50">Stuttgart</option>
<option value="51">The Hague</option>
<option value="52">Turin</option>
<option value="53">Valencia</option>
<option value="54">Vienna</option>
<option value="55">Vilnius</option>
<option value="56">Warsaw</option>
<option value="57">Wrocław</option>
<option value="58">Zagreb</option>
<option value="59">Zaragoza</option>
</select>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Selectize selects end -->
<!-- Advance Selectize Options start -->
<section class="advance-options">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Advance Selectize Options</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-body">
<div class="card-body">
<div class="form-group">
<h5>Confirm On Remove</h5>
<p>Add <code>.confirm-selectize</code> class to confirm on remove
                        a value. </p>
<input class="confirm-selectize" type="text" value="you,are,pretty,awesome"/>
</div>
<div class="form-group">
<h5>Contact selector like Email apps</h5>
<p>Add <code>.select-contact</code> class to create contact selector
                        like Email apps. </p>
<select class="select-contact contacts">
<option selected="" value="">Pick some people...</option>
</select>
</div>
<div class="form-group">
<h5>Integrate third-party repository</h5>
<p>Add <code>.repositories</code> class to Integrate github repository
                      </p>
<select class="repositories" id="selectize-repo">
<option selected="" value="">Pick some repository...</option>
</select>
</div>
<div class="form-group">
<h5>Lock Single select</h5>
<p>Add <code>.selectize-locked</code> class to lock single select
                      </p>
<select class="selectize-locked">
<option value="">No input allowed...</option>
<option value="A">Option A</option>
<option selected="" value="B">Option B</option>
<option value="C">Option C</option>
</select>
</div>
<div class="form-group">
<h5>Selectize with 25,000 random items</h5>
<p>Add <code>.selectize-junk</code> class to lock single select
                      </p>
<select class="selectize-junk">
<option selected="" value="">Start Typing...</option>
</select>
</div>
<div class="form-group">
<h5>Selectize with Remove Button tags</h5>
<p>Add <code>.remove-tags</code> class to get select with remove
                        button
                      </p>
<input class="remove-tags" type="text" value="awesome,neat"/>
</div>
<div class="form-group">
<h5>Selectize with Remove Button tags Disabled</h5>
<p>Add <code>.remove-tags</code> class to get select with remove
                        button &amp; disabled field</p>
<input class="remove-tags" disabled="" type="text" value="you,are,awesome"/>
</div>
<div class="form-group">
<h5>Selectize with restore on backspace</h5>
<p>Add <code>.backup-restore</code> class to restore on backspace</p>
<input class="backup-restore" type="text" value="you,are,awesome"/>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-body">
<div class="card-body">
<div class="form-group">
<h5>Sort options of group</h5>
<p>Add <code>.selectize-sort</code> class to sort select options
                      </p>
<select class="selectize-sort" multiple="">
<option selected="" value="">Select gear...</option>
<optgroup label="Climbing">
<option value="pitons">Pitons</option>
<option value="cams">Cams</option>
<option value="nuts">Nuts</option>
<option value="bolts">Bolts</option>
<option value="stoppers">Stoppers</option>
<option value="sling">Sling</option>
</optgroup>
<optgroup label="Skiing">
<option value="skis">Skis</option>
<option value="skins">Skins</option>
<option value="poles">Poles</option>
</optgroup>
</select>
</div>
<div class="form-group">
<div id="wrapper">
<h5>Details about each event</h5>
<p>Add <code>.selectize-event</code> class to find which event
                          fire. </p>
<div id="log"></div>
<select class="selectize-event" id="selectize-state" multiple="" name="state[]">
<option value="">Select a state...</option>
<option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="DC">District of Columbia</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="HI">Hawaii</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="IA">Iowa</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="ME">Maine</option>
<option value="MD">Maryland</option>
<option value="MA">Massachusetts</option>
<option value="MI">Michigan</option>
<option value="MN">Minnesota</option>
<option value="MS">Mississippi</option>
<option value="MO">Missouri</option>
<option value="MT">Montana</option>
<option value="NE">Nebraska</option>
<option value="NV">Nevada</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NY">New York</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="RI">Rhode Island</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UT">Utah</option>
<option value="VT">Vermont</option>
<option value="VA">Virginia</option>
<option value="WA">Washington</option>
<option value="WV">West Virginia</option>
<option value="WI">Wisconsin</option>
<option selected="" value="WY">Wyoming</option>
</select>
</div>
</div>
<div class="form-group">
<h5>Get Movies List by API</h5>
<p>Add <code>.selectize-movie</code> class to get movies API.
                      </p>
<select class="selectize-movie movies">
<option selected="" value="">Find a movie...</option>
</select>
</div>
<div class="form-group">
<h5>Options with Links</h5>
<p>Add <code>.selectize-movie</code> class to get movies API.
                      </p>
<select class="selectize-links">
<option selected="" value="">Find Here..</option>
</select>
</div>
<div class="form-group">
<h5>Drag &amp; Drop options</h5>
<p>Add <code>.selectise-drap-drop</code> class to sort options
                        by drag and drop. </p>
<input class="selectise-drap-drop" type="text" value="drag,these,items,around"/>
</div>
<div class="form-group" dir="rtl">
<h5>RTL Input Selectize</h5>
<p>Add <code>.selectize-rtl-input</code> class supports RTL to
                        input. </p>
<input class="selectize-rtl-input" type="text" value="drag,these,items,around"/>
</div>
<div class="form-group" dir="rtl">
<h5>RTL Select field Selectize</h5>
<p>Add <code>.selectize-rtl-select</code> class supports RTL to
                        select </p>
<select class="selectize-rtl-select">
<option selected="" value="">Select a person...</option>
<option value="4">Thomas Edison</option>
<option value="1">Nikola</option>
<option value="3">Nikola Tesla</option>
<option value="5">Arnold Schwarzenegger</option>
</select>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Advance Selectize Options end -->
</div>
</div>
</div>