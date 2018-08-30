<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\EditorCkeditorAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">CKEditor</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="editor-ckeditor.html#">Editors</a>
</li>
<li class="breadcrumb-item active">CKEditor
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="editor-ckeditor.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="editor-ckeditor.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="editor-ckeditor.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="editor-ckeditor.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Basic CKEditor start -->
<section id="basic">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic CKEditor</h4>
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
<div class="card-content collapse show">
<div class="card-body">
<p>CKEditor is an Open source application, which means it can be
                      modified in any way you want. It benefits from an active community
                      that is constantly evolving the application with free add-ons
                      and a transparent development process.</p>
<div class="form-group">
<textarea class="ckeditor" cols="30" id="ckeditor" name="ckeditor" rows="15">
								<h1><img alt="Saturn V carrying Apollo 11" class="right" height="250" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/01.png"/> Apollo 11</h1>
								<p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="http://en.wikipedia.org/wiki/Neil_Armstrong">Neil Armstrong</a> and <a href="http://en.wikipedia.org/wiki/Buzz_Aldrin">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>
								<p>Armstrong spent about <s>three and a half</s> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5 kg) of lunar material for return to Earth. A third member of the mission, <a href="http://en.wikipedia.org/wiki/Michael_Collins_(astronaut)">Michael Collins</a>, piloted the <a href="http://en.wikipedia.org/wiki/Apollo_Command/Service_Module">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.</p>
								<h2>Broadcasting and <em>quotes</em> <a id="quotes" name="quotes"></a></h2>
								<p>Broadcast on live TV to a world-wide audience, Armstrong stepped onto the lunar surface and described the event as:</p>
								<blockquote>
								<p>One small step for [a] man, one giant leap for mankind.</p>
								</blockquote>
								<p>Apollo 11 effectively ended the <a href="http://en.wikipedia.org/wiki/Space_Race">Space Race</a> and fulfilled a national goal proposed in 1961 by the late U.S. President <a href="http://en.wikipedia.org/wiki/John_F._Kennedy">John F. Kennedy</a> in a speech before the United States Congress:</p>
								<blockquote>
								<p>[...] before this decade is out, of landing a man on the Moon and returning him safely to the Earth.</p>
								</blockquote>
								<h2>Technical details <a id="tech-details" name="tech-details"></a></h2>
								<table align="right" border="1" bordercolor="#ccc" cellpadding="5" cellspacing="0" style="border-collapse:collapse">
									<caption><strong>Mission crew</strong></caption>
									<thead>
										<tr>
											<th scope="col">Position</th>
											<th scope="col">Astronaut</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Commander</td>
											<td>Neil A. Armstrong</td>
										</tr>
										<tr>
											<td>Command Module Pilot</td>
											<td>Michael Collins</td>
										</tr>
										<tr>
											<td>Lunar Module Pilot</td>
											<td>Edwin "Buzz" E. Aldrin, Jr.</td>
										</tr>
									</tbody>
								</table>
								<p>Launched by a <strong>Saturn V</strong> rocket from <a href="http://en.wikipedia.org/wiki/Kennedy_Space_Center">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="http://en.wikipedia.org/wiki/NASA">NASA</a>'s Apollo program. The Apollo spacecraft had three parts:</p>
								<ol>
									<li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>
									<li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>
									<li><strong>Lunar Module</strong> for landing on the Moon.</li>
								</ol>
								<p>After being sent to the Moon by the Saturn V's upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="http://en.wikipedia.org/wiki/Mare_Tranquillitatis">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="http://en.wikipedia.org/wiki/Pacific_Ocean">Pacific Ocean</a> on July 24.</p>
								<hr/>
								<p><small>Source: <a href="http://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a></small></p>
							</textarea>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Basic CKEditor end -->
<!-- Readonly CKEditor start -->
<section id="readonly">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Readonly CKEditor</h4>
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
<div class="card-content collapse show">
<div class="card-body">
<p>CKEditor API makes it possible to put the editor into the read-only
                      mode. This mode renders the editor content non-editable and
                      the users will not be able to modify it.</p>
<div class="form-group">
<p>
<button class="btn btn-danger" id="readOnlyOn" style="display:none" value="Make it read-only"><i class="la la-eye"></i> Make CKEditor read-only</button>
<button class="btn btn-success" id="readOnlyOff" style="display:none" value="Make it editable"><i class="la la-pencil"></i> Make CKEditor editable again
                        </button>
</p>
<textarea class="ckeditor-readonly" cols="30" id="ckeditor-readonly" name="ckeditor-readonly" rows="15">
								<h1><img alt="Saturn V carrying Apollo 11" class="right" height="250" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/01.png"/> Apollo 11</h1>
								<p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="http://en.wikipedia.org/wiki/Neil_Armstrong">Neil Armstrong</a> and <a href="http://en.wikipedia.org/wiki/Buzz_Aldrin">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>
								<p>Armstrong spent about <s>three and a half</s> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5 kg) of lunar material for return to Earth. A third member of the mission, <a href="http://en.wikipedia.org/wiki/Michael_Collins_(astronaut)">Michael Collins</a>, piloted the <a href="http://en.wikipedia.org/wiki/Apollo_Command/Service_Module">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.</p>
								<h2>Technical details <a id="tech-details" name="tech-details"></a></h2>
								<table align="right" border="1" bordercolor="#ccc" cellpadding="5" cellspacing="0" style="border-collapse:collapse">
									<caption><strong>Mission crew</strong></caption>
									<thead>
										<tr>
											<th scope="col">Position</th>
											<th scope="col">Astronaut</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Commander</td>
											<td>Neil A. Armstrong</td>
										</tr>
										<tr>
											<td>Command Module Pilot</td>
											<td>Michael Collins</td>
										</tr>
										<tr>
											<td>Lunar Module Pilot</td>
											<td>Edwin "Buzz" E. Aldrin, Jr.</td>
										</tr>
									</tbody>
								</table>
								<p>Launched by a <strong>Saturn V</strong> rocket from <a href="http://en.wikipedia.org/wiki/Kennedy_Space_Center">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="http://en.wikipedia.org/wiki/NASA">NASA</a>'s Apollo program. The Apollo spacecraft had three parts:</p>
								<ol>
									<li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>
									<li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>
									<li><strong>Lunar Module</strong> for landing on the Moon.</li>
								</ol>
								<p>After being sent to the Moon by the Saturn V's upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="http://en.wikipedia.org/wiki/Mare_Tranquillitatis">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="http://en.wikipedia.org/wiki/Pacific_Ocean">Pacific Ocean</a> on July 24.</p>
								<hr/>
								<p><small>Source: <a href="http://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a></small></p>
							</textarea>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Read only CKEditor end -->
<!-- CKEditor UI Color start -->
<section id="ui-color">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">CKEditor UI Color</h4>
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
<div class="card-content collapse show">
<div class="card-body">
<p>The editor UI color can be adjusted by the developer to match
                      the look and feel of a website or an application. In order
                      to define the color of the user interface, use the <code>config.uiColor </code>configuration
                      setting which accepts an RGB color code. In the editor instance
                      below the UI color was set to the
                      <kbd>#CCEAEE</kbd> RGB value.</p>
<div class="form-group">
<textarea class="ckeditor-color" cols="30" id="ckeditor-color" name="ckeditor-color" rows="15">
								<h1><img alt="Saturn V carrying Apollo 11" class="right" height="250" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/01.png"/> Apollo 11</h1>
								<p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="http://en.wikipedia.org/wiki/Neil_Armstrong">Neil Armstrong</a> and <a href="http://en.wikipedia.org/wiki/Buzz_Aldrin">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>
								<p>Armstrong spent about <s>three and a half</s> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5 kg) of lunar material for return to Earth. A third member of the mission, <a href="http://en.wikipedia.org/wiki/Michael_Collins_(astronaut)">Michael Collins</a>, piloted the <a href="http://en.wikipedia.org/wiki/Apollo_Command/Service_Module">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.</p>
								<h2>Broadcasting and <em>quotes</em> <a id="quotes" name="quotes"></a></h2>
								<p>Broadcast on live TV to a world-wide audience, Armstrong stepped onto the lunar surface and described the event as:</p>
								<blockquote>
								<p>One small step for [a] man, one giant leap for mankind.</p>
								</blockquote>
								<p>Apollo 11 effectively ended the <a href="http://en.wikipedia.org/wiki/Space_Race">Space Race</a> and fulfilled a national goal proposed in 1961 by the late U.S. President <a href="http://en.wikipedia.org/wiki/John_F._Kennedy">John F. Kennedy</a> in a speech before the United States Congress:</p>
								<blockquote>
								<p>[...] before this decade is out, of landing a man on the Moon and returning him safely to the Earth.</p>
								</blockquote>
								<h2>Technical details <a id="tech-details" name="tech-details"></a></h2>
								<table align="right" border="1" bordercolor="#ccc" cellpadding="5" cellspacing="0" style="border-collapse:collapse">
									<caption><strong>Mission crew</strong></caption>
									<thead>
										<tr>
											<th scope="col">Position</th>
											<th scope="col">Astronaut</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Commander</td>
											<td>Neil A. Armstrong</td>
										</tr>
										<tr>
											<td>Command Module Pilot</td>
											<td>Michael Collins</td>
										</tr>
										<tr>
											<td>Lunar Module Pilot</td>
											<td>Edwin "Buzz" E. Aldrin, Jr.</td>
										</tr>
									</tbody>
								</table>
								<p>Launched by a <strong>Saturn V</strong> rocket from <a href="http://en.wikipedia.org/wiki/Kennedy_Space_Center">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="http://en.wikipedia.org/wiki/NASA">NASA</a>'s Apollo program. The Apollo spacecraft had three parts:</p>
								<ol>
									<li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>
									<li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>
									<li><strong>Lunar Module</strong> for landing on the Moon.</li>
								</ol>
								<p>After being sent to the Moon by the Saturn V's upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="http://en.wikipedia.org/wiki/Mare_Tranquillitatis">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="http://en.wikipedia.org/wiki/Pacific_Ocean">Pacific Ocean</a> on July 24.</p>
								<hr/>
								<p><small>Source: <a href="http://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a></small></p>
							</textarea>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- CKEditor UI Color end -->
<!-- Enter Key Configuration start -->
<section id="enter-key">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Enter Key Configuration</h4>
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
<div class="card-content collapse show">
<div class="card-body">
<p>This sample shows how to configure the
                      <kbd>Enter</kbd> and
                      <kbd>Shift+Enter</kbd> keys to perform actions specified in the
                      <code>config.enterMode</code> and <code>config.shiftEnterMode</code>                      settings, respectively.</p>
<div class="form-group">
<textarea class="ckeditor-config" cols="30" id="ckeditor-config" name="ckeditor-config" rows="15">
								<h1><img alt="Saturn V carrying Apollo 11" class="right" height="250" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/01.png"/> Apollo 11</h1>
								<p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="http://en.wikipedia.org/wiki/Neil_Armstrong">Neil Armstrong</a> and <a href="http://en.wikipedia.org/wiki/Buzz_Aldrin">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>
								<p>Armstrong spent about <s>three and a half</s> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5 kg) of lunar material for return to Earth. A third member of the mission, <a href="http://en.wikipedia.org/wiki/Michael_Collins_(astronaut)">Michael Collins</a>, piloted the <a href="http://en.wikipedia.org/wiki/Apollo_Command/Service_Module">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.</p>
								<h2>Broadcasting and <em>quotes</em> <a id="quotes" name="quotes"></a></h2>
								<p>Broadcast on live TV to a world-wide audience, Armstrong stepped onto the lunar surface and described the event as:</p>
								<blockquote>
								<p>One small step for [a] man, one giant leap for mankind.</p>
								</blockquote>
							</textarea>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Enter Key Configuration end -->
<!-- Multilingual Content start -->
<section id="multilingual">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Multilingual Content</h4>
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
<div class="card-content collapse show">
<div class="card-body">
<p>CKEditor is well-suited for multilingual environment. Its UI
                      is translated into <code>over 60 languages</code> and by default
                      it is displayed in user's language. Additionally, it makes
                      working with multilingual content very convenient by providing
                      the ability to set the text direction as well as mark the language
                      of selected text fragments.</p>
<div class="form-group">
<textarea cols="30" id="ckeditor-language" name="ckeditor-language" rows="15">		
								<p><strong>Language</strong>&amp;nbsp;is the&amp;nbsp;<a href="http://en.wikipedia.org/wiki/Human">human</a>&amp;nbsp;ability to acquire and use complex systems of&amp;nbsp;<a href="http://en.wikipedia.org/wiki/Communication">communication</a>, and&amp;nbsp;<strong>a language</strong>&amp;nbsp;is any specific example of such a system. The scientific study of language is called&amp;nbsp;<a href="http://en.wikipedia.org/wiki/Linguistics">linguistics</a>.</p>		
								<p><span dir="rtl" lang="he"><strong>שפה</strong>&amp;nbsp;היא דרך&amp;nbsp;<a href="http://he.wikipedia.org/wiki/%D7%AA%D7%A7%D7%A9%D7%95%D7%A8%D7%AA">תקשורת</a>&amp;nbsp;המבוססת על&amp;nbsp;<a href="http://he.wikipedia.org/wiki/%D7%9E%D7%A2%D7%A8%D7%9B%D7%AA">מערכת</a>&amp;nbsp;<a href="http://he.wikipedia.org/wiki/%D7%A1%D7%9E%D7%9C">סמלים</a>&amp;nbsp;מורכבת בעלת חוקיות, המאפשרת לקודד&amp;nbsp;<a href="http://he.wikipedia.org/wiki/%D7%90%D7%A8%D7%92%D7%95%D7%9F_(%D7%A4%D7%A2%D7%95%D7%9C%D7%94)">ולארגן</a>&amp;nbsp;<a href="http://he.wikipedia.org/wiki/%D7%9E%D7%99%D7%93%D7%A2">מידע</a>&amp;nbsp;בעל&amp;nbsp;<a href="http://he.wikipedia.org/wiki/%D7%9E%D7%A9%D7%9E%D7%A2%D7%95%D7%AA">משמעויות</a>&amp;nbsp;רבות ומגוונות. נהוג להבדיל בין הסמל השפתי ה<a href="http://he.wikipedia.org/wiki/%D7%9E%D7%A1%D7%9E%D7%9F">מסמן</a>&amp;nbsp;לבין המושג או התוכן ה<a href="http://he.wikipedia.org/wiki/%D7%9E%D7%A1%D7%95%D7%9E%D7%9F">מסומן</a>&amp;nbsp;בו, אשר יכול להיות&amp;nbsp;<a href="http://he.wikipedia.org/wiki/%D7%9E%D7%A6%D7%99%D7%90%D7%95%D7%AA">מציאותי</a>&amp;nbsp;או&amp;nbsp;<a href="http://he.wikipedia.org/wiki/%D7%94%D7%A4%D7%A9%D7%98%D7%94">מופשט</a>.</span></p>		<p><span dir="ltr" lang="es">Un&amp;nbsp;<strong>lenguaje</strong>&amp;nbsp;(del&amp;nbsp;<a href="http://es.wikipedia.org/wiki/Idioma_occitano">provenzal</a>&amp;nbsp;<em>lenguatge</em>&amp;nbsp;y este del&amp;nbsp;<a href="http://es.wikipedia.org/wiki/Lat%C3%ADn">lat&amp;iacute;n</a>&amp;nbsp;<em>lingua</em>) es un sistema de&amp;nbsp;<a href="http://es.wikipedia.org/wiki/Comunicaci%C3%B3n">comunicaci&amp;oacute;n</a>&amp;nbsp;estructurado para el que existe un&amp;nbsp;<a href="http://es.wikipedia.org/wiki/Significado">contexto</a>&amp;nbsp;de uso y ciertos principios combinatorios formales. Existen contextos tanto naturales como artificiales.</span></p>		
								<p><span dir="rtl" lang="ar"><strong>اللغة</strong>&amp;nbsp;نسق من الإشارات والرموز، يشكل أداة من أدوات&amp;nbsp;<a href="http://ar.wikipedia.org/wiki/%D8%A7%D9%84%D9%85%D8%B9%D8%B1%D9%81%D8%A9">المعرفة</a>، وتعتبر اللغة أهم وسائل التفاهم والاحتكاك بين أفراد المجتمع في جميع ميادين الحياة. وبدون اللغة يتعذر نشاط الناس المعرفي.</span></p>
							</textarea>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Multilingual Content end -->
<!-- Inline editing start -->
<section id="inline-ckeditor">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Inline editing</h4>
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
<div class="card-content collapse show">
<div class="card-body">
<div class="form-group">
<div class="row">
<div class="col-12">
<div id="ckeditor-inline">
<h1>Inline Editor</h1>
<p>
<strong>Inline Editing</strong> allows you to edit any element
                              on the page in-place. Inline editor provides a real
                              <abbr title="What You See is What You Get">WYSIWYG</abbr> experience "out of the box", because
                              unlike in <a href="http://sdk.ckeditor.com/samples/classic.html">classic editor</a>,
                              there is no <code>&lt;iframe&gt;</code> element surrounding
                              the editing area. The CSS styles used for editor content
                              are exactly the same as on the target page where this
                              content is rendered!
                            </p>
<h2 class="editor-title">Inline Editing Enabled by Code</h2>
<p>
                              Press the "Start editing" button below. An editor will be created using the
                              <code><a href="http://docs.ckeditor.com/#!/api/CKEDITOR-method-inline">CKEDITOR.inline()</a></code>                              method with
                              <code><a href="http://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-startupFocus">config.startupFocus</a></code>                              set to <code>true</code>.
                            </p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Inline editing end -->
</div>
</div>
</div>