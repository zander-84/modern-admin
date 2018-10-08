<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\CodeEditorAceAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Ace</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/incex.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="code-editor-ace.html#">Editors</a>
</li>
<li class="breadcrumb-item active">Ace
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="code-editor-ace.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="code-editor-ace.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="code-editor-ace.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="code-editor-ace.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Javascript & HTML start -->
<section id="jsHTML">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Editor with Javascript &amp; HTML </h4>
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
<div class="row">
<div class="col-lg-6 col-md-12">
<div class="form-group">
<div id="editor_basic">/** * In fact, you're looking at ACE right now. Go ahead
                            and play with it! * * We are currently showing off the
                            JavaScript mode. ACE has support for 45 * language modes
                            and 24 color themes! */ function add(x, y) { var resultString
                            = "Hello, ACE! The result of your math is: "; var result
                            = x + y; return resultString + result; } var addResult
                            = add(3, 2); console.log(addResult);
                          </div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="form-group">
<div id="editor_basic_theme">&lt;html&gt; &lt;head&gt; &lt;title&gt;Demo&lt;/title&gt;
                            &lt;/head&gt; &lt;body&gt; &lt;nav&gt; &lt;ul&gt; &lt;li&gt;&lt;a
                            href="#"&gt;Home&lt;/a&gt;&lt;/li&gt; &lt;li&gt;&lt;a
                            href="#"&gt;About&lt;/a&gt;&lt;/li&gt; &lt;li&gt;&lt;a
                            href="#"&gt;Clients&lt;/a&gt;&lt;/li&gt; &lt;li&gt;&lt;a
                            href="#"&gt;Contact Us&lt;/a&gt;&lt;/li&gt; &lt;/ul&gt;
                            &lt;ul&gt; &lt;li&gt;&lt;a href="#nowhere" title="Lorum
                            ipsum dolor sit amet"&gt;Lorem&lt;/a&gt;&lt;/li&gt; &lt;li&gt;&lt;a
                            href="#nowhere" title="Aliquam tincidunt mauris eu risus"&gt;Aliquam&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href="#nowhere" title="Morbi in sem quis
                            dui placerat ornare"&gt;Morbi&lt;/a&gt;&lt;/li&gt; &lt;li&gt;&lt;a
                            href="#nowhere" title="Praesent dapibus, neque id cursus
                            faucibus"&gt;Praesent&lt;/a&gt;&lt;/li&gt; &lt;li&gt;&lt;a
                            href="#nowhere" title="Pellentesque fermentum dolor"&gt;Pellentesque&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt; &lt;/nav&gt; &lt;/body&gt; &lt;/html&gt;
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
<!-- Javascript & HTML end -->
<!-- Auto resize & keyboard shortcuts start -->
<section id="auto-resize">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Auto Resize &amp; Keyboard Shortcuts</h4>
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
<p>Get all keyboard shortcut options from <a href="https://ace.c9.io/demo/keyboard_shortcuts.html" target="_blank">here</a></p>
<div class="row">
<div class="col-lg-6 col-md-12">
<h4>Auto Resize</h4>
<div class="form-group">
<div id="editor_autoresize">&lt;html&gt; &lt;head&gt; &lt;title&gt;Demo&lt;/title&gt;
                            &lt;/head&gt; &lt;body&gt; &lt;nav&gt; &lt;ul&gt; &lt;li&gt;&lt;a
                            href="#"&gt;Home&lt;/a&gt;&lt;/li&gt; &lt;li&gt;&lt;a
                            href="#"&gt;About&lt;/a&gt;&lt;/li&gt; &lt;li&gt;&lt;a
                            href="#"&gt;Clients&lt;/a&gt;&lt;/li&gt; &lt;li&gt;&lt;a
                            href="#"&gt;Contact Us&lt;/a&gt;&lt;/li&gt; &lt;/ul&gt;
                            &lt;ul&gt; &lt;li&gt;&lt;a href="#nowhere" title="Lorum
                            ipsum dolor sit amet"&gt;Lorem&lt;/a&gt;&lt;/li&gt; &lt;li&gt;&lt;a
                            href="#nowhere" title="Aliquam tincidunt mauris eu risus"&gt;Aliquam&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href="#nowhere" title="Morbi in sem quis
                            dui placerat ornare"&gt;Morbi&lt;/a&gt;&lt;/li&gt; &lt;li&gt;&lt;a
                            href="#nowhere" title="Praesent dapibus, neque id cursus
                            faucibus"&gt;Praesent&lt;/a&gt;&lt;/li&gt; &lt;li&gt;&lt;a
                            href="#nowhere" title="Pellentesque fermentum dolor"&gt;Pellentesque&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt; &lt;/nav&gt; &lt;/body&gt; &lt;/html&gt;
                          </div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="form-group">
<h4>Keyboard Shortcuts</h4>
<div id="editor_keyboard">&lt;html&gt; &lt;head&gt; &lt;title&gt;Demo&lt;/title&gt;
                            &lt;/head&gt; &lt;body&gt; &lt;nav&gt; &lt;ul&gt; &lt;li&gt;&lt;a
                            href="#"&gt;Home&lt;/a&gt;&lt;/li&gt; &lt;li&gt;&lt;a
                            href="#"&gt;About&lt;/a&gt;&lt;/li&gt; &lt;li&gt;&lt;a
                            href="#"&gt;Clients&lt;/a&gt;&lt;/li&gt; &lt;li&gt;&lt;a
                            href="#"&gt;Contact Us&lt;/a&gt;&lt;/li&gt; &lt;/ul&gt;
                            &lt;ul&gt; &lt;li&gt;&lt;a href="#nowhere" title="Lorum
                            ipsum dolor sit amet"&gt;Lorem&lt;/a&gt;&lt;/li&gt; &lt;li&gt;&lt;a
                            href="#nowhere" title="Aliquam tincidunt mauris eu risus"&gt;Aliquam&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href="#nowhere" title="Morbi in sem quis
                            dui placerat ornare"&gt;Morbi&lt;/a&gt;&lt;/li&gt; &lt;li&gt;&lt;a
                            href="#nowhere" title="Praesent dapibus, neque id cursus
                            faucibus"&gt;Praesent&lt;/a&gt;&lt;/li&gt; &lt;li&gt;&lt;a
                            href="#nowhere" title="Pellentesque fermentum dolor"&gt;Pellentesque&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt; &lt;/nav&gt; &lt;/body&gt; &lt;/html&gt;
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
<!-- Auto resize & keyboard shortcuts end -->
<!-- CSS & SASS editor start -->
<section id="cssSass">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">CSS &amp; SASS Editor</h4>
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
<div class="row">
<div class="col-lg-6 col-md-12">
<h4>CSS Editor</h4>
<div class="form-group">
<div id="editor_css">body { overflow: hidden; } #editor { margin: 0; position:
                            absolute; top: 0; bottom: 20px; left: 0; right: 0; }
                            #statusBar { margin: 0; padding: 0; position: absolute;
                            left: 0; right: 0; bottom: 0; height: 20px; background-color:
                            rgb(245, 245, 245); color: gray; } .ace_status-indicator
                            { color: gray; position: absolute; right: 0; border-left:
                            1px solid; }
                          </div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="form-group">
<h4>SASS</h4>
<div id="editor_sass">// sass ace mode; @import url(http://fonts.googleapis.com/css?family=Ace:700)
                            html, body :background-color #ace text-align: center
                            height: 100% .toggle $size: 14px :background url(http://subtlepatterns.com/patterns/dark_stripes.png)
                            border-radius: 8px height: $size &amp;:before $radius: $size
                            * 0.845 $glow: $size * 0.125 box-shadow: 0 0 $glow $glow
                            / 2 #fff border-radius: $radius &amp;:active ~ .button box-shadow:
                            0 15px 25px -4px rgba(0,0,0,0.4) ~ .tag font-size: 40px
                            color: rgba(0,0,0,0.45) &amp;:checked ~ .button box-shadow:
                            0 15px 25px -4px #ace ~ .tag font-size: 40px color: #c9c9c9</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- CSS & SASS editor end -->
<!-- JSON & PHP editor start -->
<section id="jSonPHP">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">JSON &amp; PHP Editor</h4>
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
<div class="row">
<div class="col-lg-6 col-md-12">
<h4>JSON Editor</h4>
<div class="form-group">
<div id="editor_json">
                            {"widget": { "debug": "on", "window": { "title": "Sample Konfabulator Widget", "name":
                            "main_window", "width": 500, "height": 500 }, "image":
                            { "src": "Images/Sun.png", "name": "sun1", "hOffset":
                            250, "vOffset": 250, "alignment": "center" }, "text":
                            { "data": "Click Here", "size": 36, "style": "bold",
                            "name": "text1", "hOffset": 250, "vOffset": 100, "alignment":
                            "center", "onMouseUp": "sun1.opacity = (sun1.opacity
                            / 100) * 90;" } }}
                          </div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="form-group">
<h4>PHP Code Editor</h4>
<div id="editor_php">
                            &lt;?php $referenceTable = array(); $referenceTable['val1'] = array(1, 2); $referenceTable['val2']
                            = 3; $referenceTable['val3'] = array(4, 5); $testArray
                            = array(); $testArray = array_merge($testArray, $referenceTable['val1']);
                            var_dump($testArray); $testArray = array_merge($testArray,
                            $referenceTable['val2']); var_dump($testArray); $testArray
                            = array_merge($testArray, $referenceTable['val3']); var_dump($testArray);
                            ?&gt;
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
<!-- JSON & PHP editor end -->
</div>
