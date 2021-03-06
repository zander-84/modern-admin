<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\EditorQuillAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Quill Editor</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="editor-quill.html#">Form Components</a>
</li>
<li class="breadcrumb-item active">Quill Editor
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="editor-quill.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="editor-quill.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="editor-quill.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="editor-quill.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Bubble Editor start -->
<section class="quill-editor">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Bubble Editor</h4>
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
<p><code>Bubble</code> is a simple tooltip based theme. Try double
                      clicking on text, you should see bubble with toolbars for editing.</p>
<div class="row">
<div class="offset-md-2 col-md-8">
<div id="bubble-wrapper">
<div id="bubble-container">
<div class="editor">
<h1 class="ql-align-center">Quill Rich Text Editor</h1>
<p>
<br/>
</p>
<p>Quill is a free, <a href="https://github.com/quilljs/quill/">open source</a>                                WYSIWYG editor built for the modern web. With its
                                <a href="http://quilljs.com/docs/modules/">modular architecture</a>                                and expressive <a href="http://quilljs.com/docs/api/">API</a>,
                                it is completely customizable to fit any need.</p>
<p>
<br/>
</p>
<iframe class="ql-video ql-align-center" height="238" src="https://www.youtube.com/embed/QHH3iSeDBLo?showinfo=0" width="560"></iframe>
<p>
<br/>
</p>
<p>
<br/>
</p>
<h2 class="ql-align-center">Getting Started is Easy</h2>
<p>
<br/>
</p>
<pre>// &lt;link href="https://cdn.quilljs.com/1.0.5/quill.snow.css" rel="stylesheet"&gt;
	// &lt;script src="https://cdn.quilljs.com/1.0.5/quill.min.js" type="text/javascript"&gt;&lt;/script&gt;
	var quill = new Quill('#editor', {
	modules: {
		toolbar: '#toolbar'
	},
	theme: 'snow'
	});
	// Open your browser's developer console to try out the API!
											</pre>
<p>
<br/>
</p>
<p>
<br/>
</p>
<p class="ql-align-center">
<strong>Built with</strong>
</p>
<p class="ql-align-center"> 
                                <span class="ql-formula" data-value="x^2 + (y - \sqrt[3]{x^2})^2 = 1"></span> </p>
<p>
<br/>
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
</div>
</section>
<!-- Bubble Editor end -->
<!-- Snow Editor start -->
<section class="snow-editor">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Snow Editor</h4>
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
<p>Snow is a clean, flat toolbar theme.</p>
<div class="row">
<div class="offset-md-2 col-md-8">
<div id="snow-wrapper">
<div id="snow-container">
<div class="quill-toolbar">
<span class="ql-formats">
<select class="ql-header">
<option value="1">Heading</option>
<option value="2">Subheading</option>
<option selected="">Normal</option>
</select>
<select class="ql-font">
<option selected="">Sailec Light</option>
<option value="sofia">Sofia Pro</option>
<option value="slabo">Slabo 27px</option>
<option value="roboto">Roboto Slab</option>
<option value="inconsolata">Inconsolata</option>
<option value="ubuntu">Ubuntu Mono</option>
</select>
</span>
<span class="ql-formats">
<button class="ql-bold"></button>
<button class="ql-italic"></button>
<button class="ql-underline"></button>
</span>
<span class="ql-formats">
<button class="ql-list" value="ordered"></button>
<button class="ql-list" value="bullet"></button>
</span>
<span class="ql-formats">
<button class="ql-link"></button>
<button class="ql-image"></button>
<button class="ql-video"></button>
</span>
<span class="ql-formats">
<button class="ql-formula"></button>
<button class="ql-code-block"></button>
</span>
<span class="ql-formats">
<button class="ql-clean"></button>
</span>
</div>
<div class="editor">
<h1 class="ql-align-center">Quill Rich Text Editor</h1>
<p>
<br/>
</p>
<p>Quill is a free, <a href="https://github.com/quilljs/quill/">open source</a>                                WYSIWYG editor built for the modern web. With its
                                <a href="http://quilljs.com/docs/modules/">modular architecture</a>                                and expressive <a href="http://quilljs.com/docs/api/">API</a>,
                                it is completely customizable to fit any need.</p>
<p>
<br/>
</p>
<iframe class="ql-video ql-align-center" height="238" src="https://www.youtube.com/embed/QHH3iSeDBLo?showinfo=0" width="560"></iframe>
<p>
<br/>
</p>
<p>
<br/>
</p>
<h2 class="ql-align-center">Getting Started is Easy</h2>
<p>
<br/>
</p>
<pre>// &lt;link href="https://cdn.quilljs.com/1.0.5/quill.snow.css" rel="stylesheet"&gt;
	// &lt;script src="https://cdn.quilljs.com/1.0.5/quill.min.js" type="text/javascript"&gt;&lt;/script&gt;
	var quill = new Quill('#editor', {
	modules: {
		toolbar: '#toolbar'
	},
	theme: 'snow'
	});
	// Open your browser's developer console to try out the API!
											</pre>
<p>
<br/>
</p>
<p>
<br/>
</p>
<p class="ql-align-center">
<strong>Built with</strong>
</p>
<p class="ql-align-center"> 
                                <span class="ql-formula" data-value="x^2 + (y - \sqrt[3]{x^2})^2 = 1"></span> </p>
<p>
<br/>
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
</div>
</section>
<!-- Snow Editor end -->
<!-- Snow Editor start -->
<section class="full-editor">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Full Editor</h4>
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
<p>By default all formats are enabled and allowed to exist within
                      a Quill editor and can be configured with the <code>formats</code>                      option. This is separate from adding a control in the <code>Toolbar</code>.
                      For example, you can configure Quill to allow bolded content
                      to be pasted into an editor that has no bold button in the
                      toolbar.
                    </p>
<div class="row">
<div class="offset-md-2 col-md-8">
<div id="full-wrapper">
<div id="full-container">
<div class="editor">
<h1 class="ql-align-center">Quill Rich Text Editor</h1>
<p>
<br/>
</p>
<p>Quill is a free, <a href="https://github.com/quilljs/quill/">open source</a>                                WYSIWYG editor built for the modern web. With its
                                <a href="http://quilljs.com/docs/modules/">modular architecture</a>                                and expressive <a href="http://quilljs.com/docs/api/">API</a>,
                                it is completely customizable to fit any need.</p>
<p>
<br/>
</p>
<iframe class="ql-video ql-align-center" height="238" src="https://www.youtube.com/embed/QHH3iSeDBLo?showinfo=0" width="560"></iframe>
<p>
<br/>
</p>
<p>
<br/>
</p>
<h2 class="ql-align-center">Getting Started is Easy</h2>
<p>
<br/>
</p>
<pre>// &lt;link href="https://cdn.quilljs.com/1.0.5/quill.snow.css" rel="stylesheet"&gt;
	// &lt;script src="https://cdn.quilljs.com/1.0.5/quill.min.js" type="text/javascript"&gt;&lt;/script&gt;
	var quill = new Quill('#editor', {
	modules: {
		toolbar: '#toolbar'
	},
	theme: 'snow'
	});
	// Open your browser's developer console to try out the API!
											</pre>
<p>
<br/>
</p>
<p>
<br/>
</p>
<p class="ql-align-center">
<strong>Built with</strong>
</p>
<p class="ql-align-center"> 
                                <span class="ql-formula" data-value="x^2 + (y - \sqrt[3]{x^2})^2 = 1"></span> </p>
<p>
<br/>
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
</div>
</section>
<!-- Snow Editor end -->
</div>
