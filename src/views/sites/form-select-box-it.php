<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\FormSelectBoxItAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Select Box It</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="form-select-box-it.html#">Form Components</a>
</li>
<li class="breadcrumb-item active">Select Box It
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="form-select-box-it.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="form-select-box-it.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="form-select-box-it.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="form-select-box-it.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!--					Basic SelectBoxIt				-->
<section class="input-groups">
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic SelectBoxIt</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body ">
<div class="form-group">
<h6>Basic SelectBoxIt</h6>
<p>Add <code>.selectBox</code> class to select for basic SelectBoxIt
                        field
                      </p>
<select class="selectBox">
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
<h6>SelectBoxIt with Label</h6>
<p>Use <code>.selectBox-label-default</code> class to add label
                        to Select field</p>
<select class="selectBox-label-default">
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
<h6>SelectBoxIt supports optgroup</h6>
<select class="optgroups selectBox" id="optgroups">
<option value="">No city selected</option>
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
<h6>Disabled SelectBoxIt</h6>
<select class="selectBox" disabled="">
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
<h6>SelectBoxIt with selected &amp; disabled options</h6>
<select class="selectBox">
<option value="1">Amsterdam</option>
<option value="2">Antwerp</option>
<option selected="" value="3">Athens</option>
<option value="4">Barcelona</option>
<option value="5">Berlin</option>
<option value="6">Birmingham</option>
<option value="7">Bradford</option>
<option disabled="" value="8">Bremen</option>
<option value="9">Brussels</option>
<option value="10">Bucharest</option>
<option value="11">Budapest</option>
<option value="12">Cologne</option>
<option value="13">Copenhagen</option>
<option value="14">Dortmund</option>
<option value="15">Dresden</option>
<option value="16">Dublin</option>
<option value="17">Düsseldorf</option>
<option disabled="" value="18">Essen</option>
<option disabled="" value="19">Frankfurt</option>
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
<option disabled="" value="33">Málaga</option>
<option value="34">Manchester</option>
<option value="35">Marseille</option>
<option value="36">Milan</option>
<option value="37">Munich</option>
<option value="38">Naples</option>
<option value="39">Palermo</option>
<option value="40">Paris</option>
<option value="41">Poznań</option>
<option value="42">Prague</option>
<option disabled="" value="43">Riga</option>
<option disabled="" value="44">Rome</option>
<option value="45">Rotterdam</option>
<option value="46">Seville</option>
<option value="47">Sheffield</option>
<option disabled="" value="48">Sofia</option>
<option value="49">Stockholm</option>
<option value="50">Stuttgart</option>
<option value="51">The Hague</option>
<option value="52">Turin</option>
<option value="53">Valencia</option>
<option disabled="" value="54">Vienna</option>
<option value="55">Vilnius</option>
<option value="56">Warsaw</option>
<option value="57">Wrocław</option>
<option value="58">Zagreb</option>
<option value="59">Zaragoza</option>
</select>
</div>
<div class="form-group">
<h6>SelectBoxIt Open/close Effects</h6>
<p>Add <code>.selectBox-effect</code> class to select for opening
                        &amp; Closing effects</p>
<select class="selectBox-effect">
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
<h6>SelectBoxIt Open/close Animations</h6>
<p>Add <code>.selectBox-animation</code> class to select for SelectBoxIt
                        field animation.</p>
<select class="selectBox-animation">
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
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">SelectBoxIt Options</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body ">
<div class="form-group">
<h6>Hide First option</h6>
<p>Add <code>.selectBox-hide-first</code> class to hide first
                        field of select</p>
<select class="selectBox-hide-first">
<option value="">Select your city</option>
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
<h6>Option size</h6>
<p>Add <code>data-size</code> attribute to select to show number
                        of options at a time</p>
<select class="selectBox" data-size="6">
<option value="">Select your city</option>
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
<h6>Custom text [Select Birmingham/Leeds]</h6>
<p>Add <code>data-selectedtext</code> attribute to select option
                        for custom text value</p>
<select class="selectBox">
<option value="">Select your city</option>
<option value="1">Amsterdam</option>
<option value="2">Antwerp</option>
<option value="3">Athens</option>
<option value="4">Barcelona</option>
<option value="5">Berlin</option>
<option data-selectedtext="This is custom text" value="Birmingham">Birmingham</option>
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
<option data-selectedtext="This is custom text 2" value="26">Leeds</option>
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
<h6>Prevent Closing [Clicking 'Berlin' option will not close the
                        options list. ]</h6>
<p>Add <code>data-preventclose</code> attribute to prevent closing</p>
<select class="selectBox">
<option value="">Select your city</option>
<option value="1">Amsterdam</option>
<option value="2">Antwerp</option>
<option value="3">Athens</option>
<option value="4">Barcelona</option>
<option data-preventclose="true" value="5">Berlin</option>
<option value="Birmingham">Birmingham</option>
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
<h6>Aggressive Change Mode</h6>
<p>Aggressive Change Mode will select a drop down option when
                        user navigates option using up and down arrow keys via the
                        keyboard </p>
<select class="selectBox-aggressive">
<option value="">Select your city</option>
<option value="1">Amsterdam</option>
<option value="2">Antwerp</option>
<option value="3">Athens</option>
<option value="4">Barcelona</option>
<option value="5">Berlin</option>
<option value="Birmingham">Birmingham</option>
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
<h6>Native Mousedown Mode </h6>
<p>Click and hold down your mouse, hover over a drop down option,
                        and then release the mouse to select that option. </p>
<select class="selectBox-native-mouse">
<option value="">Select your city</option>
<option value="1">Amsterdam</option>
<option value="2">Antwerp</option>
<option value="3">Athens</option>
<option value="4">Barcelona</option>
<option value="5">Berlin</option>
<option value="Birmingham">Birmingham</option>
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
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Section Ends -->
<!--			 Advance Options Manipulations			-->
<section class="advance-usage">
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Advance Options Manipulations</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body ">
<div class="form-group">
<h6>Add Option Dynamically</h6>
<p>Use <code>.options-dynamic</code> class with <code>.selectBox</code>                        class to add dynamic option</p>
<select class="selectBox options-dynamic">
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
</select>
</div>
<div class="form-group">
<h6>Remove First Option</h6>
<p>Use <code>.option-remove</code> class with <code>.selectBox</code>                        class to remove option dynamically</p>
<select class="selectBox option-remove">
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
</select>
</div>
<div class="form-group">
<h6>Remove Multiple Options</h6>
<p>Use <code>.options-remove</code> class with <code>.selectBox</code>                        class to remove multiple options</p>
<select class="selectBox options-remove">
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
</select>
</div>
<div class="form-group">
<h6>Remove Multiple Options</h6>
<p>Use <code>.remove-all</code> class with <code>.selectBox</code>                        class to select and id <code>#remove-all</code> to button
                        to remove all the options</p>
<select aria-label="Recipient's username" class="selectBox remove-all" id="inputGroupSelect02" placeholder="Recipient's username">
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
</select>
<button class="btn btn-danger mt-1" id="remove-all" type="button">Remove All Options</button>
</div>
<div class="form-group">
<h6>Hide Current Selected Options</h6>
<p>Use <code>.selectBox-hide-current</code> class to Hide Current
                        selected option</p>
<select class="selectBox-hide-current">
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
</select>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Advanced Object usage</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body ">
<p>This Advance Object will be more clear from it's javascript.</p>
<div class="form-group">
</div>
<div class="form-group">
<h6>Single Object</h6>
<select class="selectBox-single-object"></select>
</div>
<div class="form-group">
<h6>HTML String</h6>
<select class="selectBox-html-string"></select>
</div>
<div class="form-group">
<h6>Strings Array</h6>
<select class="selectBox-strings-array"></select>
</div>
<div class="form-group">
<h6>Array Of Objects</h6>
<select class="selectBox-objects-array"></select>
</div>
<div class="form-group">
<h6>JSON Array</h6>
<select class="selectBox-json-array"></select>
</div>
<div class="form-group">
<h6>SelectBox Deferred Object</h6>
<select class="selectBox-deferred-object"></select>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Section Ends -->
<!--			 Advance with icons & image			-->
<section class="advance-icon-image">
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">With Icons and Images</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body ">
<div class="form-group">
<h6>Change icon support</h6>
<p>Use <code>.selectBox-right-icon</code> class to change down
                        arrow icon.</p>
<select class="selectBox-right-icon">
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
</select>
</div>
<div class="form-group">
<h6>Custom Image support</h6>
<p>Use <code>data-iconurl</code> attribute and
                        <strong>Image URL</strong> as value to show Image.</p>
<select class="selectBox">
<option data-iconurl="<?=$baseUrl;?>/app-assets/images/icons/browser.png" value="Select Browser">Select Browser</option>
<option data-iconurl="<?=$baseUrl;?>/app-assets/images/icons/chrome.png" value="chrome">Chrome</option>
<option data-iconurl="<?=$baseUrl;?>/app-assets/images/icons/firefox.png" value="firefox">Firefox</option>
<option data-iconurl="<?=$baseUrl;?>/app-assets/images/icons/ie.png" value="ie">Internet Explorer</option>
<option data-iconurl="<?=$baseUrl;?>/app-assets/images/icons/safari.png" value="safari">Safari</option>
<option data-iconurl="<?=$baseUrl;?>/app-assets/images/icons/opera.png" value="opera">Opera</option>
</select>
</div>
<div class="form-group">
<h6>Change icon support</h6>
<p>Use <code>data-icon</code> attribute and
                        <strong>icon name</strong> as value to show Icon.</p>
<select class="selectBox">
<option data-icon="la la-bank" value="Bank">Bank</option>
<option data-icon="la la-balance-scale" value="Court">Court</option>
<option data-icon="la la-bed" value="Bed">Bed</option>
<option data-icon="la la-ambulance" value="Ambulance">Ambulance</option>
<option data-icon="la la-bicycle" value="Bicycle">Bicycle</option>
<option data-icon="la la-heartbeat" value="Heart Beat">Heart Beat</option>
<option data-icon="la la-home" value="Home">Home</option>
<option data-icon="la la-birthday-cake" value="Birthday Cake">Birthday Cake</option>
</select>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Advance Options</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body ">
<div class="form-group">
<h6>HTML support</h6>
<select class="selectBox">
<option data-text="&lt;b&gt;HTML&lt;/b&gt; select boxes">&lt;b&gt;HTML&lt;/b&gt; select boxes</option>
<option data-text="SelectBoxIt &lt;i&gt;just&lt;/i&gt; works">SelectBoxIt &lt;i&gt;just&lt;/i&gt; works</option>
<option data-text="Feel free to &lt;u&gt;customize&lt;/u&gt;">Feel free to &lt;u&gt;customize&lt;/u&gt;</option>
</select>
</div>
<div class="form-group">
<h6>Bootstrap Option Popovers</h6>
<p>Use <code>data-toggle="popover"</code> attribute so it will
                        popover <code>title &amp; data-content</code>text </p>
<select class="selectBox selectBox-fixed">
<option data-content="A jQuery Select Box Plugin for Mobile, Tablet, and Desktop" data-toggle="popover" title="SelectBoxIt" value="SelectBoxIt is:">
                          SelectBoxIt is:
                        </option>
<option data-content="a jQuery plugin" data-toggle="popover" title="SelectBoxIt" value="a jQuery Plugin">
                          a jQuery Plugin
                        </option>
<option data-content="a SelectBox Replacement" data-toggle="popover" title="SelectBoxIt" value="a Select Box Replacement">
                          a Select Box Replacement
                        </option>
<option data-content="a Stateful UI Widget" data-toggle="popover" title="SelectBoxIt" value="a Stateful UI Widget">
                          a Stateful UI Widget
                        </option>
</select>
</div>
<div class="form-group">
<h6>Bootstrap Arrow support</h6>
<p>Use <code>.selectBox .bootstrap-icon</code> class to change
                        down arrow icon as bootstrap icon.</p>
<select class="selectBox bootstrap-icon">
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
</select>
</div>
<div class="form-group">
<h6>Custom Bootstrap Arrow support</h6>
<p>Use <code>.custom-bootstrap-icon</code> class to change down
                        arrow icon as bootstrap icon.</p>
<select class="custom-bootstrap-icon">
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
</select>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Section Ends -->
<!--			 Grid Based Sizing			-->
<section class="grid-based-sizing">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Grid Based Sizing</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body ">
<div class="form-group">
<div class="row">
<div class="col-6">
<h6>SelectBox Label</h6>
<select class="selectBox">
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
</select>
</div>
<div class="col-6">
<h6>SelectBox Label</h6>
<select class="selectBox">
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
</select>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-5">
<h6>SelectBox Label</h6>
<select class="selectBox">
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
</select>
</div>
<div class="col-7">
<h6>SelectBox Label</h6>
<select class="selectBox">
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
</select>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-4">
<h6>SelectBox Label</h6>
<select class="selectBox">
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
</select>
</div>
<div class="col-8">
<h6>SelectBox Label</h6>
<select class="selectBox">
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
</select>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-3">
<h6>SelectBox Label</h6>
<select class="selectBox">
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
</select>
</div>
<div class="col-9">
<h6>SelectBox Label</h6>
<select class="selectBox">
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
</select>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-2">
<h6>SelectBox Label</h6>
<select class="selectBox">
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
</select>
</div>
<div class="col-10">
<h6>SelectBox Label</h6>
<select class="selectBox">
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
</select>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-1">
<h6>SelectBox Label</h6>
<select class="selectBox">
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
</select>
</div>
<div class="col-11">
<h6>SelectBox Label</h6>
<select class="selectBox">
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
</select>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Section Ends -->
<!--			 Width and Hight Option			 -->
<section class="width-height">
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Selectbox Width Options</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body ">
<div class="form-group">
<h6>Full width (Default)</h6>
<select class="selectBox">
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
</select>
</div>
<div class="form-group">
<h6>Grid Based Width</h6>
<p>This is in 8 column grid</p>
<div class="row">
<div class="col-8">
<select class="selectBox">
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
</select>
</div>
</div>
</div>
<div class="form-group">
<h6>Fixed Width</h6>
<p>Use <code>.selectBox-fixed</code> class for fixed width.</p>
<select class="selectBox selectBox-fixed">
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
</select>
</div>
<div class="form-group">
<h6>Auto Width</h6>
<p>Use <code>.selectBox-auto</code> class for Auto width of selectBox</p>
<div>
<select class="selectBox selectBox-auto">
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
</select>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Selectbox Height Options</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body ">
<div class="form-group">
<h6>XLarge SelectBox</h6>
<p>Use <code>.selectBox-xl</code> class for Extra Large selectBox</p>
<select class="selectBox selectBox-xl">
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
</select>
</div>
<div class="form-group">
<h6>Large selectBox</h6>
<p>Use <code>.selectBox-lg</code> class for Large selectBox</p>
<div>
<select class="selectBox selectBox-lg">
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
</select>
</div>
</div>
<div class="form-group">
<h6>Default selectBox</h6>
<select class="selectBox">
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
</select>
</div>
<div class="form-group">
<h6>Small selectBox</h6>
<p>Use <code>.selectBox-sm</code> class for small selectBox</p>
<div>
<select class="selectBox selectBox-sm">
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
</select>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Section Ends -->
<!--			 Border Color Options			-->
<section class="border-color-options">
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Border Color Options</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body ">
<div class="form-group">
<h6>Primary selectBox</h6>
<p>Use <code>.border-primary</code> class for primary color selectBox</p>
<div>
<select class="selectBox border-primary bg-white">
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
</select>
</div>
</div>
<div class="form-group">
<h6>Success selectBox</h6>
<p>Use <code>.border-success</code> class for success color selectBox</p>
<select class="selectBox border-success bg-white">
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
</select>
</div>
<div class="form-group">
<h6>Danger selectBox</h6>
<p>Use <code>.border-danger</code> class for danger color selectBox</p>
<div>
<select class="selectBox border-danger bg-white">
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
</select>
</div>
</div>
<div class="form-group">
<h6>Info selectBox</h6>
<p>Use <code>.border-info</code> class for info color selectBox</p>
<div>
<select class="selectBox border-info bg-white">
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
</select>
</div>
</div>
<div class="form-group">
<h6>Warning selectBox</h6>
<p>Use <code>.border-warning</code> class for warning color selectBox</p>
<div>
<select class="selectBox border-warning bg-white">
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
</select>
</div>
</div>
<div class="form-group">
<h6>Custom Border SelectBox</h6>
<select class="selectBox border-pink bg-white">
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
</select>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">SelectBox Color Options</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content">
<div class="card-body ">
<div class="form-group">
<h6>Primary selectBox</h6>
<p>Use <code>.bg-primary</code> class for primary color selectBox</p>
<div>
<select class="selectBox bg-primary white">
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
</select>
</div>
</div>
<div class="form-group">
<h6>Success selectBox</h6>
<p>Use <code>.bg-success</code> class for success color selectBox</p>
<select class="selectBox bg-success white">
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
</select>
</div>
<div class="form-group">
<h6>Danger selectBox</h6>
<p>Use <code>.bg-danger</code> class for danger color selectBox</p>
<div>
<select class="selectBox bg-danger white">
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
</select>
</div>
</div>
<div class="form-group">
<h6>Info selectBox</h6>
<p>Use <code>.bg-info</code> class for info color selectBox</p>
<div>
<select class="selectBox bg-info white">
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
</select>
</div>
</div>
<div class="form-group">
<h6>Warning selectBox</h6>
<p>Use <code>.bg-warning</code> class for warning color selectBox</p>
<div>
<select class="selectBox bg-warning white">
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
</select>
</div>
</div>
<div class="form-group">
<h6>Custom Color SelectBox</h6>
<select class="selectBox bg-pink white">
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
</select>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Section Ends -->
</div>
