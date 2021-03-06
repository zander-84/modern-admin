<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\CodeEditorCodemirrorAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">CodeMirror</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="code-editor-codemirror.html#">Editors</a>
</li>
<li class="breadcrumb-item active">CodeMirror
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="code-editor-codemirror.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="code-editor-codemirror.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="code-editor-codemirror.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="code-editor-codemirror.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Basic code editor start -->
<section id="basic">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Code Editor</h4>
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
<p>It has the ability to convert HTML textarea fields or other HTML
                      elements to editor instances.</p>
<form action="#" class="form-horizontal">
<div class="form-group">
<textarea id="codemirror" name="code" rows="5">
	// The start state contains the rules that are initially used
	start: [
	// The regex matches the token, the token property contains the type
	{regex: /"(?:[^\\]|\\.)*?"/, token: "string"},
	// You can match multiple tokens at once. Note that the captured
	// groups must span the whole string in this case
	{regex: /(function)(\s+)([a-z$][\w$]*)/,
	 token: ["keyword", null, "variable-2"]},
	// Rules are matched in the order in which they appear, so there is
	// no ambiguity between this one and the one above
	{regex: /(?:function|var|return|if|for|while|else|do|this)\b/,
	 token: "keyword"},
	{regex: /true|false|null|undefined/, token: "atom"},
	{regex: /0x[a-f\d]+|[-+]?(?:\.\d+|\d+\.?\d*)(?:e[-+]?\d+)?/i,
	 token: "number"},
	{regex: /\/\/.*/, token: "comment"},
	{regex: /\/(?:[^\\]|\\.)*?\//, token: "variable-3"},
	// A next property will cause the mode to move to a different state
	{regex: /\/\*/, token: "comment", next: "comment"},
	{regex: /[-+\/*=&lt;&gt;!]+/, token: "operator"},
	// indent and dedent properties guide auto indentation
	{regex: /[\{\[\(]/, indent: true},
	{regex: /[\}\]\)]/, dedent: true},
	{regex: /[a-z$][\w$]*/, token: "variable"},
	// You can embed other modes with the mode property. This rule
	// causes all code between &lt;&lt; and &gt;&gt; to be highlighted with the XML
	// mode.
	{regex: /&lt;, token: "meta", mode: {spec: "xml", end: /&gt;&gt;/}}
	],
	// The multi-line comment state.
	comment: [
	{regex: /.*?\*\//, token: "comment", next: "start"},
	{regex: /.*/, token: "comment"}
	],
	// The meta property contains global information about the mode. It
	// can contain properties like lineComment, which are supported by
	// all modes, and also directives like dontIndentStates, which are
	// specific to simple modes.
	meta: {
	dontIndentStates: ["comment"],
	lineComment: "//"
	}
	});</textarea>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Basic code editor end -->
<!-- Codemirror theme start -->
<section id="themes">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Themes</h4>
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
<form>
<textarea id="codemirror-theme" name="code" rows="5">
	function findSequence(goal) {
	function find(start, history) {
	if (start == goal)
	  return history;
	else if (start &gt; goal)
	  return null;
	else
	  return find(start + 5, "(" + history + " + 5)") ||
	         find(start * 3, "(" + history + " * 3)");
	}
	return find(1, "1");
	}
							</textarea></form>
<p class="mt-1">Select a theme:
                        <select id="select">
<option>3024-day</option>
<option>3024-night</option>
<option>abcdef</option>
<option>ambiance</option>
<option>base16-dark</option>
<option>base16-light</option>
<option>bespin</option>
<option>blackboard</option>
<option>cobalt</option>
<option>colorforth</option>
<option>dracula</option>
<option>eclipse</option>
<option>elegant</option>
<option>erlang-dark</option>
<option>hopscotch</option>
<option>icecoder</option>
<option>isotope</option>
<option>lesser-dark</option>
<option>liquibyte</option>
<option>material</option>
<option>mbo</option>
<option>mdn-like</option>
<option>midnight</option>
<option>monokai</option>
<option>neat</option>
<option>neo</option>
<option>night</option>
<option>paraiso-dark</option>
<option>paraiso-light</option>
<option>pastel-on-dark</option>
<option>railscasts</option>
<option>rubyblue</option>
<option>seti</option>
<option>solarized dark</option>
<option>solarized light</option>
<option>the-matrix</option>
<option>tomorrow-night-bright</option>
<option>tomorrow-night-eighties</option>
<option>ttcn</option>
<option>twilight</option>
<option>vibrant-ink</option>
<option>xq-dark</option>
<option>xq-light</option>
<option>yeti</option>
<option>zenburn</option>
</select>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Codemirror theme end -->
<!-- Lazy mode loading start -->
<section id="lazy-mode">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Lazy Mode Loading</h4>
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
<p>It has the ability to convert HTML textarea fields or other HTML
                      elements to editor instances.</p>
<div class="form-group">
<b>Current mode:</b> <code><span id="modeinfo">text/plain</span></code>
<br/>
<textarea id="codemirror-loadmode" name="code" rows="5">
	This is the editor.
	// It starts out in plain text mode,
	#	use the control below to load and apply a mode
	"you'll see the highlighting of" this text /*change*/.</textarea>
<br/>
<p>Filename, mime, or mode name:
                        <input id="mode" type="text" value="foo.js"/>
<button id="change" type="button">change mode</button>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Lazy mode loading end -->
<!-- Sublime text bindings start -->
<section id="sublime">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Sublime Text bindings</h4>
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
<textarea id="codemirror-sublime" name="code" rows="5">
	// The bindings defined specifically in the Sublime Text mode
	var bindings = {
	"Alt-Left": "goSubwordLeft",
	"Alt-Right": "goSubwordRight",
	"Ctrl-Up": "scrollLineUp",
	"Ctrl-Down": "scrollLineDown",
	"Shift-Ctrl-L": "splitSelectionByLine",
	"Shift-Tab": "indentLess",
	"Esc": "singleSelectionTop",
	"Ctrl-L": "selectLine",
	"Shift-Ctrl-K": "deleteLine",
	"Ctrl-Enter": "insertLineAfter",
	"Shift-Ctrl-Enter": "insertLineBefore",
	"Ctrl-D": "selectNextOccurrence",
	"Shift-Ctrl-Space": "selectScope",
	"Shift-Ctrl-M": "selectBetweenBrackets",
	"Ctrl-M": "goToBracket",
	"Shift-Ctrl-Up": "swapLineUp",
	"Shift-Ctrl-Down": "swapLineDown",
	"Ctrl-/": "toggleCommentIndented",
	"Ctrl-J": "joinLines",
	"Shift-Ctrl-D": "duplicateLine",
	"Ctrl-T": "transposeChars",
	"F9": "sortLines",
	"Ctrl-F9": "sortLinesInsensitive",
	"F2": "nextBookmark",
	"Shift-F2": "prevBookmark",
	"Ctrl-F2": "toggleBookmark",
	"Shift-Ctrl-F2": "clearBookmarks",
	"Alt-F2": "selectBookmarks",
	"Alt-Q": "wrapLines",
	"Ctrl-K Ctrl-Backspace": "delLineLeft",
	"Backspace": "smartBackspace",
	"Ctrl-K Ctrl-K": "delLineRight",
	"Ctrl-K Ctrl-U": "upcaseAtCursor",
	"Ctrl-K Ctrl-L": "downcaseAtCursor",
	"Ctrl-K Ctrl-Space": "setSublimeMark",
	"Ctrl-K Ctrl-A": "selectToSublimeMark",
	"Ctrl-K Ctrl-W": "deleteToSublimeMark",
	"Ctrl-K Ctrl-X": "swapWithSublimeMark",
	"Ctrl-K Ctrl-Y": "sublimeYank",
	"Ctrl-K Ctrl-G": "clearBookmarks",
	"Ctrl-K Ctrl-C": "showInCenter",
	"Shift-Alt-Up": "selectLinesUpward",
	"Shift-Alt-Down": "selectLinesDownward",
	"Ctrl-F3": "findUnder",
	"Shift-Ctrl-F3": "findUnderPrevious",
	"Shift-Ctrl-[": "fold",
	"Shift-Ctrl-]": "unfold",
	"Ctrl-K Ctrl-j": "unfoldAll",
	"Ctrl-K Ctrl-0": "unfoldAll",
	"Ctrl-H": "replace",
	}
	// The implementation of joinLines
	function joinLines(cm) {
	var ranges = cm.listSelections(), joined = [];
	for (var i = 0; i &lt; ranges.length; i++) {
	var range = ranges[i], from = range.from();
	var start = from.line, end = range.to().line;
	while (i &lt; ranges.length - 1 &amp;&amp; ranges[i + 1].from().line == end)
		end = ranges[++i].to().line;
	joined.push({start: start, end: end, anchor: !range.empty() &amp;&amp; from});
	}
	cm.operation(function() {
	var offset = 0, ranges = [];
	for (var i = 0; i &lt; joined.length; i++) {
		var obj = joined[i];
		var anchor = obj.anchor &amp;&amp; Pos(obj.anchor.line - offset, obj.anchor.ch), head;
		for (var line = obj.start; line &lt;= obj.end; line++) {
		var actual = line - offset;
		if (line == obj.end) head = Pos(actual, cm.getLine(actual).length + 1);
		if (actual &lt; cm.lastLine()) {
			cm.replaceRange(" ", Pos(actual), Pos(actual + 1, /^\s*/.exec(cm.getLine(actual + 1))[0].length));
			++offset;
		}
		}
		ranges.push({anchor: anchor || head, head: head});
	}
	cm.setSelections(ranges, 0);
	});
	}</textarea>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Sublime text bindings end -->
<!-- Code folding demo start -->
<section id="code-folding">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Code Folding Demo</h4>
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
<label for="codemirror-js">JavaScript:</label>
<textarea id="codemirror-js" name="code" rows="5">
	window.onload = function() {
	var te = document.getElementById("code");
	var sc = document.getElementById("script");
	te.value = (sc.textContent || sc.innerText || sc.innerHTML).replace(/^\s*/, "");
	sc.innerHTML = "";
	var te_html = document.getElementById("code-html");
	te_html.value = document.documentElement.innerHTML;
	var te_markdown = document.getElementById("code-markdown");
	te_markdown.value = "# Foo\n## Bar\n\nblah blah\n\n## Baz\n\nblah blah\n\n# Quux\n\nblah blah\n"
	window.editor = CodeMirror.fromTextArea(te, {
	mode: "javascript",
	lineNumbers: true,
	lineWrapping: true,
	extraKeys: {"Ctrl-Q": function(cm){ cm.foldCode(cm.getCursor()); }},
	foldGutter: true,
	gutters: ["CodeMirror-linenumbers", "CodeMirror-foldgutter"]
	});
	editor.foldCode(CodeMirror.Pos(13, 0));
	window.editor_html = CodeMirror.fromTextArea(te_html, {
	mode: "text/html",
	lineNumbers: true,
	lineWrapping: true,
	extraKeys: {"Ctrl-Q": function(cm){ cm.foldCode(cm.getCursor()); }},
	foldGutter: true,
	gutters: ["CodeMirror-linenumbers", "CodeMirror-foldgutter"]
	});
	editor_html.foldCode(CodeMirror.Pos(0, 0));
	editor_html.foldCode(CodeMirror.Pos(21, 0));
	window.editor_markdown = CodeMirror.fromTextArea(te_markdown, {
	mode: "markdown",
	lineNumbers: true,
	lineWrapping: true,
	extraKeys: {"Ctrl-Q": function(cm){ cm.foldCode(cm.getCursor()); }},
	foldGutter: true,
	gutters: ["CodeMirror-linenumbers", "CodeMirror-foldgutter"]
	});
	};</textarea>
</div>
<div class="form-group">
<label for="codemirror-html">HTML:</label>
<textarea id="codemirror-html" name="code" rows="5">
	&lt;head&gt;
	&lt;style type="text/css"&gt;
	.CodeMirror {border-top: 1px solid black; border-bottom: 1px solid black;}
	&lt;/style&gt;
	&lt;/head&gt;
	&lt;body&gt;
	&lt;div id="nav"&gt;
	&lt;a href="http://codemirror.net"&gt;&lt;h1&gt;CodeMirror&lt;/h1&gt;&lt;img id="logo" src="../doc/logo.png"&gt;&lt;/a&gt;
	&lt;ul&gt;
	&lt;li&gt;&lt;a href="../index.html"&gt;Home&lt;/a&gt;
	&lt;/li&gt;&lt;li&gt;&lt;a href="../doc/manual.html"&gt;Manual&lt;/a&gt;
	&lt;/li&gt;&lt;li&gt;&lt;a href="https://github.com/codemirror/codemirror"&gt;Code&lt;/a&gt;
	&lt;/li&gt;&lt;/ul&gt;
	&lt;ul&gt;
	&lt;li&gt;&lt;a class="active" href="#"&gt;Code Folding&lt;/a&gt;
	&lt;/li&gt;&lt;/ul&gt;
	&lt;/div&gt;
	&lt;article&gt;
	&lt;h2&gt;Code Folding Demo&lt;/h2&gt;
	&lt;form&gt;
	&lt;div style="max-width: 50em; margin-bottom: 1em"&gt;JavaScript:&lt;br&gt;
		&lt;textarea id="code"&gt;&lt;/textarea&gt;
	&lt;/div&gt;
	&lt;/form&gt;
	&lt;/article&gt;
	&lt;/body&gt;
							</textarea>
</div>
<div class="form-group">
<label for="codemirror-markdown">Markdown:</label>
<textarea id="codemirror-markdown" name="code" rows="5">
	# Foo
	## Bar
	blah blah
	## Baz
	blah blah
	# Quux
	blah blah
							</textarea>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Code folding demo end -->
<!-- Selection marking & highlighter start -->
<section id="selection">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Selection Marking &amp; Highlighter </h4>
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
<textarea id="codemirror-marker" name="code" rows="5">
	Select something from here. You'll see that the selection's foreground
	color changes to white! Since, by default, CodeMirror only puts an
	independent "marker" layer behind the text, you'll need something like
	this to change its color.
	Also notice that turning this addon on (with the default style) allows
	you to safely give text a background color without screwing up the
	visibility of the selection.
							</textarea>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Selection marking & highlighter end -->
<!-- HTML5 preview start -->
<section id="html5">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">HTML5 preview</h4>
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
<div class="col-lg-6 col-12">
<textarea id="codemirror-preview" name="code" rows="5">
	<!DOCTYPE html>

	
	
	<meta charset="utf-8"/>
	<title>HTML5 canvas demo</title>
	<style>p {font-family: monospace;}</style>
	
	
	<p>Canvas pane goes here:</p>
	<canvas height="200" id="pane" width="300"></canvas>
	<script>
		var canvas = document.getElementById('pane');
		var context = canvas.getContext('2d');
		context.fillStyle = 'rgb(250,0,0)';
		context.fillRect(10, 10, 55, 50);
		context.fillStyle = 'rgba(0, 0, 250, 0.5)';
		context.fillRect(30, 30, 55, 50);
	</script>
	
	
									</textarea>
</div>
<div class="col-lg-6 col-12">
<iframe id="preview"></iframe>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- HTML5 preview end -->
<!-- Ruler & visible tabs start -->
<section id="ruler">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Ruler &amp; Visible tabs </h4>
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
<div class="col-lg-6 col-12">
<div id="codemirror-ruler"></div>
</div>
<div class="col-lg-6 col-12">
<textarea id="codemirror-tabs" name="code1">
	
	<p>Canvas pane goes here:</p>
	<canvas height="200" id="pane" width="300"></canvas>
	<script>
		var canvas = document.getElementById('pane');
		var context = canvas.getContext('2d');
		context.fillStyle = 'rgb(250,0,0)';
		context.fillRect(10, 10, 55, 50);
		context.fillStyle = 'rgba(0, 0, 250, 0.5)';
		context.fillRect(30, 30, 55, 50);
	</script>
	
	</textarea>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Ruler & visible tabs end -->
</div>
