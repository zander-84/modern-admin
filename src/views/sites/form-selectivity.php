<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\FormSelectivityAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Selectivity select</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="form-selectivity.html#">Form Components</a>
</li>
<li class="breadcrumb-item active">Selectivity select
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="form-selectivity.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="form-selectivity.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="form-selectivity.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="form-selectivity.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Selectivity start-->
<section class="basic-selectivity">
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-body">
<div class="card-body">
<div class="form-group">
<h5>Basic Selectivity</h5>
<p>Add <code>.single-input</code> class to span/div for basic
                        Selectivity </p>
<span class="single-input selectivity-input"></span>
</div>
<div class="form-group">
<h5>Basic Selectivity without a search field</h5>
<p>Add <code>.without-search-box</code> class for without a search
                        field
                      </p>
<span class="single-input-without-search without-search-box selectivity-input"></span>
</div>
<div class="form-group">
<h5>Selectivity with labels and search</h5>
<p>Add <code>.single-input-with-labels</code> class to set select
                        with labels</p>
<span class="single-input-with-labels selectivity-input"></span>
</div>
<div class="form-group">
<h5>Selectivity with submenus</h5>
<p>Add <code>.single-input-with-submenus</code> class to get input
                        with submenu</p>
<span class="single-input-with-submenus selectivity-input"></span>
</div>
<div class="form-group">
<h5>Selectivity with multiple input</h5>
<p>Add <code>.multiple-input</code> class to select multiple options</p>
<span class="multiple-input selectivity-input"></span>
</div>
<div class="form-group">
<h5>Selectivity with tags input</h5>
<p>Add <code>.tags-input</code> class to set &amp; select tags</p>
<span class="tags-input selectivity-input"></span>
</div>
<div class="form-group">
<h5>Enter multiple emails</h5>
<p>Add <code>.emails-input</code> class to set multiple email
                        addresses
                      </p>
<span class="emails-input selectivity-input"></span>
</div>
<div class="form-group">
<h5>Select a GitHub repository</h5>
<p>Add <code>.repository-input</code> class to select a GitHub
                        repository </p>
<span class="repository-input selectivity-input"></span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-body">
<div class="card-body">
<fieldset class="form-group">
<h5>Selectivities with select box</h5>
<p>Add <code>.single-select-box</code> class to &lt;select&gt;
                        input
                      </p>
<select class="single-select-box selectivity-input" data-placeholder="No city selected" id="single-select-box" name="traditional[single]">
<option>Amsterdam</option>
<option>Antwerp</option>
<option>Athens</option>
<option>Barcelona</option>
<option>Berlin</option>
<option>Birmingham</option>
<option>Bradford</option>
<option>Bremen</option>
<option>Brussels</option>
<option>Bucharest</option>
<option>Budapest</option>
<option>Cologne</option>
<option>Copenhagen</option>
<option>Dortmund</option>
<option>Dresden</option>
<option>Dublin</option>
<option>Düsseldorf</option>
<option>Essen</option>
<option>Frankfurt</option>
<option>Genoa</option>
<option>Glasgow</option>
<option>Gothenburg</option>
<option>Hamburg</option>
<option>Hannover</option>
<option>Helsinki</option>
<option>Leeds</option>
<option>Leipzig</option>
<option>Lisbon</option>
<option>Łódź</option>
<option>London</option>
<option>Kraków</option>
<option>Madrid</option>
<option>Málaga</option>
<option>Manchester</option>
<option>Marseille</option>
<option>Milan</option>
<option>Munich</option>
<option>Naples</option>
<option>Palermo</option>
<option>Paris</option>
<option>Poznań</option>
<option>Prague</option>
<option>Riga</option>
<option>Rome</option>
<option>Rotterdam</option>
<option>Seville</option>
<option>Sheffield</option>
<option>Sofia</option>
<option>Stockholm</option>
<option>Stuttgart</option>
<option>The Hague</option>
<option>Turin</option>
<option>Valencia</option>
<option>Vienna</option>
<option>Vilnius</option>
<option>Warsaw</option>
<option>Wrocław</option>
<option>Zagreb</option>
<option>Zaragoza</option>
</select>
</fieldset>
<fieldset class="form-group">
<h5>Selectivities with select input and without search</h5>
<p>Add <code>.without-search-box</code> class to get field without
                        search box</p>
<select class="single-select-box without-search-box selectivity-input" data-placeholder="No city selected" name="traditional[single]">
<option>Amsterdam</option>
<option>Antwerp</option>
<option>Athens</option>
<option>Barcelona</option>
<option>Berlin</option>
<option>Birmingham</option>
<option>Bradford</option>
<option>Bremen</option>
<option>Brussels</option>
<option>Bucharest</option>
<option>Budapest</option>
<option>Cologne</option>
<option>Copenhagen</option>
<option>Dortmund</option>
<option>Dresden</option>
<option>Dublin</option>
<option>Düsseldorf</option>
<option>Essen</option>
<option>Frankfurt</option>
<option>Genoa</option>
<option>Glasgow</option>
<option>Gothenburg</option>
<option>Hamburg</option>
<option>Hannover</option>
<option>Helsinki</option>
<option>Leeds</option>
<option>Leipzig</option>
<option>Lisbon</option>
<option>Łódź</option>
<option>London</option>
<option>Kraków</option>
<option>Madrid</option>
<option>Málaga</option>
<option>Manchester</option>
<option>Marseille</option>
<option>Milan</option>
<option>Munich</option>
<option>Naples</option>
<option>Palermo</option>
<option>Paris</option>
<option>Poznań</option>
<option>Prague</option>
<option>Riga</option>
<option>Rome</option>
<option>Rotterdam</option>
<option>Seville</option>
<option>Sheffield</option>
<option>Sofia</option>
<option>Stockholm</option>
<option>Stuttgart</option>
<option>The Hague</option>
<option>Turin</option>
<option>Valencia</option>
<option>Vienna</option>
<option>Vilnius</option>
<option>Warsaw</option>
<option>Wrocław</option>
<option>Zagreb</option>
<option>Zaragoza</option>
</select>
</fieldset>
<fieldset class="form-group">
<h5>Selectivities with placeholder</h5>
<p>Add <code>.multiple-select-box</code> class to get selectivity
                        multiple select box</p>
<select class="multiple-select-box selectivity-input" data-placeholder="Type to search cities" id="multiple-select-box" multiple="" name="traditional[multiple]">
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
</fieldset>
<fieldset class="form-group">
<h5>Selectivities with Multiple selection</h5>
<p>Add <code>multiple</code> attribute to select more than one
                        options
                      </p>
<select class="single-select-box selectivity-input" data-placeholder="Type to search cities" multiple="" name="traditional[multiple]">
<option>Amsterdam</option>
<option>Antwerp</option>
<option>Athens</option>
<option selected="">Barcelona</option>
<option>Berlin</option>
<option>Birmingham</option>
<option>Bradford</option>
<option>Bremen</option>
<option>Brussels</option>
<option>Bucharest</option>
<option>Budapest</option>
<option selected="">Cologne</option>
<option>Copenhagen</option>
<option>Dortmund</option>
<option>Dresden</option>
<option>Dublin</option>
<option>Düsseldorf</option>
<option>Essen</option>
<option>Frankfurt</option>
<option>Genoa</option>
<option>Glasgow</option>
<option>Gothenburg</option>
<option>Hamburg</option>
<option>Hannover</option>
<option>Helsinki</option>
<option>Leeds</option>
<option>Leipzig</option>
<option>Lisbon</option>
<option>Łódź</option>
<option>London</option>
<option>Kraków</option>
<option>Madrid</option>
<option>Málaga</option>
<option>Manchester</option>
<option>Marseille</option>
<option selected="">Milan</option>
<option>Munich</option>
<option>Naples</option>
<option>Palermo</option>
<option>Paris</option>
<option>Poznań</option>
<option>Prague</option>
<option>Riga</option>
<option>Rome</option>
<option>Rotterdam</option>
<option>Seville</option>
<option>Sheffield</option>
<option>Sofia</option>
<option>Stockholm</option>
<option>Stuttgart</option>
<option>The Hague</option>
<option>Turin</option>
<option>Valencia</option>
<option>Vienna</option>
<option>Vilnius</option>
<option>Warsaw</option>
<option>Wrocław</option>
<option>Zagreb</option>
<option>Zaragoza</option>
</select>
</fieldset>
<fieldset class="form-group">
<h5>Selectivities with Background Color</h5>
<p>Add <code>.bg-THEME_COLOR .border-THEME_COLOR</code> classes
                        to get background and border color for selectivity select
                        box
                      </p>
<select class="single-select-box selectivity-input bg-warning border-warning border-darken-3" data-placeholder="Type to search cities" multiple="" name="traditional[multiple]">
<option>Amsterdam</option>
<option>Antwerp</option>
<option>Athens</option>
<option>Barcelona</option>
<option>Berlin</option>
<option>Birmingham</option>
<option>Bradford</option>
<option>Bremen</option>
<option>Brussels</option>
<option>Bucharest</option>
<option>Budapest</option>
<option>Cologne</option>
<option>Copenhagen</option>
<option>Dortmund</option>
<option>Dresden</option>
<option>Dublin</option>
<option>Düsseldorf</option>
<option selected="">Essen</option>
<option>Frankfurt</option>
<option>Genoa</option>
<option>Glasgow</option>
<option>Gothenburg</option>
<option>Hamburg</option>
<option>Hannover</option>
<option>Helsinki</option>
<option>Leeds</option>
<option>Leipzig</option>
<option>Lisbon</option>
<option>Łódź</option>
<option>London</option>
<option>Kraków</option>
<option>Madrid</option>
<option>Málaga</option>
<option>Manchester</option>
<option>Marseille</option>
<option>Milan</option>
<option>Munich</option>
<option>Naples</option>
<option>Palermo</option>
<option>Paris</option>
<option>Poznań</option>
<option>Prague</option>
<option selected="">Riga</option>
<option>Rome</option>
<option>Rotterdam</option>
<option>Seville</option>
<option>Sheffield</option>
<option>Sofia</option>
<option>Stockholm</option>
<option>Stuttgart</option>
<option>The Hague</option>
<option>Turin</option>
<option>Valencia</option>
<option>Vienna</option>
<option>Vilnius</option>
<option>Warsaw</option>
<option>Wrocław</option>
<option>Zagreb</option>
<option>Zaragoza</option>
</select>
</fieldset>
<fieldset class="form-group">
<h5>Selectivities with Custom Background Color</h5>
<p>Add <code>.bg-CUSTOM_COLOR .border-CUSTOM_COLOR</code> classes
                        to get custom background and border color for selectivity
                        select box</p>
<select class="single-select-box selectivity-input bg-indigo border-indigo border-darken-3" data-placeholder="Type to search cities" multiple="" name="traditional[multiple]">
<option>Amsterdam</option>
<option>Antwerp</option>
<option>Athens</option>
<option>Barcelona</option>
<option>Berlin</option>
<option>Birmingham</option>
<option>Bradford</option>
<option>Bremen</option>
<option>Brussels</option>
<option>Bucharest</option>
<option selected="">Budapest</option>
<option>Cologne</option>
<option>Copenhagen</option>
<option>Dortmund</option>
<option>Dresden</option>
<option>Dublin</option>
<option>Düsseldorf</option>
<option>Essen</option>
<option>Frankfurt</option>
<option>Genoa</option>
<option>Glasgow</option>
<option>Gothenburg</option>
<option>Hamburg</option>
<option>Hannover</option>
<option>Helsinki</option>
<option>Leeds</option>
<option>Leipzig</option>
<option>Lisbon</option>
<option>Łódź</option>
<option>London</option>
<option>Kraków</option>
<option>Madrid</option>
<option>Málaga</option>
<option>Manchester</option>
<option>Marseille</option>
<option>Milan</option>
<option>Munich</option>
<option>Naples</option>
<option>Palermo</option>
<option selected="">Paris</option>
<option>Poznań</option>
<option>Prague</option>
<option>Riga</option>
<option>Rome</option>
<option>Rotterdam</option>
<option>Seville</option>
<option>Sheffield</option>
<option>Sofia</option>
<option>Stockholm</option>
<option>Stuttgart</option>
<option>The Hague</option>
<option selected="">Turin</option>
<option>Valencia</option>
<option>Vienna</option>
<option>Vilnius</option>
<option>Warsaw</option>
<option>Wrocław</option>
<option>Zagreb</option>
<option>Zaragoza</option>
</select>
</fieldset>
<fieldset class="form-group">
<h5>Selectivities with Border Color</h5>
<p>Add <code>.border-THEME_CUSTOM_COLOR</code> class to get border
                        color for selectivity select box</p>
<select class="single-select-box selectivity-input border-pink border-darken-3" data-placeholder="Type to search cities" multiple="" name="traditional[multiple]">
<option>Amsterdam</option>
<option>Antwerp</option>
<option>Athens</option>
<option>Barcelona</option>
<option>Berlin</option>
<option>Birmingham</option>
<option>Bradford</option>
<option>Bremen</option>
<option>Brussels</option>
<option>Bucharest</option>
<option>Budapest</option>
<option>Cologne</option>
<option>Copenhagen</option>
<option>Dortmund</option>
<option>Dresden</option>
<option selected="">Dublin</option>
<option>Düsseldorf</option>
<option>Essen</option>
<option>Frankfurt</option>
<option>Genoa</option>
<option>Glasgow</option>
<option>Gothenburg</option>
<option>Hamburg</option>
<option>Hannover</option>
<option>Helsinki</option>
<option>Leeds</option>
<option>Leipzig</option>
<option>Lisbon</option>
<option>Łódź</option>
<option>London</option>
<option>Kraków</option>
<option>Madrid</option>
<option>Málaga</option>
<option>Manchester</option>
<option>Marseille</option>
<option>Milan</option>
<option>Munich</option>
<option>Naples</option>
<option>Palermo</option>
<option>Paris</option>
<option>Poznań</option>
<option>Prague</option>
<option>Riga</option>
<option>Rome</option>
<option>Rotterdam</option>
<option selected="">Seville</option>
<option>Sheffield</option>
<option>Sofia</option>
<option>Stockholm</option>
<option>Stuttgart</option>
<option>The Hague</option>
<option>Turin</option>
<option>Valencia</option>
<option>Vienna</option>
<option>Vilnius</option>
<option>Warsaw</option>
<option>Wrocław</option>
<option selected="">Zagreb</option>
<option>Zaragoza</option>
</select>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Selectivity end -->
<!-- Selectivity Sizing start-->
<section class="selectivity-sizing">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Selectivity Sizings</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-body">
<div class="card-body">
<div class="form-group">
<h5>Extra Large Selectivity</h5>
<p>Add <code>.select-xl</code> class to span/div for Extra Large
                        Selectivity field </p>
<span class="single-input select-xl selectivity-input"></span>
</div>
<div class="form-group">
<h5>Large Selectivity</h5>
<p>Add <code>.select-lg</code> class to span/div for Large Selectivity
                        field </p>
<span class="single-input select-lg selectivity-input"></span>
</div>
<div class="form-group">
<h5>Default Selectivity</h5>
<span class="single-input selectivity-input"></span>
</div>
<div class="form-group">
<h5>Small Selectivity</h5>
<p>Add <code>.select-sm</code> class to span/div for basic Selectivity
                      </p>
<span class="single-input select-sm selectivity-input"></span>
</div>
<div class="form-group">
<h5>Mini Selectivity</h5>
<p>Add <code>.select-xs</code> class to span/div for basic Selectivity
                      </p>
<span class="single-input select-xs selectivity-input"></span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-body">
<div class="card-body">
<fieldset class="form-group">
<h5>Extra Large Multiple Selectivity</h5>
<p>Add <code>.select-xl</code> class for extra large multiple
                        selectivity box</p>
<select class="multiple-select-box select-xl selectivity-input" data-placeholder="Type to search cities" multiple="" name="traditional[multiple]">
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
<option data-timezone="+01:00" selected="" value="58">Zagreb</option>
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
<option data-timezone="+02:00" selected="" value="25">Helsinki</option>
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
</fieldset>
<fieldset class="form-group">
<h5>Large Multiple Selectivity</h5>
<p>Add <code>.select-lg</code> class for large multiple selectivity
                        box
                      </p>
<select class="multiple-select-box select-lg selectivity-input" data-placeholder="Type to search cities" multiple="" name="traditional[multiple]">
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
<option data-timezone="+01:00" selected="" value="23">Hamburg</option>
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
<option data-timezone="+00:00" selected="" value="16">Dublin</option>
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
</fieldset>
<fieldset class="form-group">
<h5>Default Multiple Selectivity</h5>
<select class="multiple-select-box selectivity-input" data-placeholder="Type to search cities" multiple="" name="traditional[multiple]">
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
<option data-timezone="+01:00" selected="" value="40">Paris</option>
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
<option data-timezone="+00:00" selected="" value="21">Glasgow</option>
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
</fieldset>
<fieldset class="form-group">
<h5>Small Multiple Selectivity</h5>
<p>Add <code>.select-sm</code> class for small multiple selectivity
                        box
                      </p>
<select class="multiple-select-box select-sm selectivity-input" data-placeholder="Type to search cities" multiple="" name="traditional[multiple]">
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
<option data-timezone="+00:00" selected="" value="30">London</option>
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
<option data-timezone="+01:00" selected="" value="38">Naples</option>
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
</fieldset>
<fieldset class="form-group">
<h5>Mini Multiple Selectivity</h5>
<p>Add <code>.select-xs</code> class for extra small multiple
                        selectivity box</p>
<select class="multiple-select-box select-xs selectivity-input" data-placeholder="Type to search cities" multiple="" name="traditional[multiple]">
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
<option data-timezone="+01:00" selected="" value="15">Dresden</option>
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
<option data-timezone="+02:00" selected="" value="43">Riga</option>
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
</fieldset>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Selectivity Sizing end -->
</div>
