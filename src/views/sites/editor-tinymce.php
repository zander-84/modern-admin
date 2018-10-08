<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\EditorTinymceAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">tinyMCE</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="editor-tinymce.html#">Editors</a>
</li>
<li class="breadcrumb-item active">tinyMCE
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="editor-tinymce.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="editor-tinymce.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="editor-tinymce.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="editor-tinymce.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Basic Editor start -->
<section id="basic">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Editor</h4>
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
<textarea class="tinymce">
									<p style="text-align: center;">
										<img alt="TinyMCE Logo" height="97" src="https://www.tinymce.com/images/glyph-tinymce@2x.png" title="TinyMCE Logo" width="110"/>
									</p>
									<h1 style="text-align: center;">Welcome to the TinyMCE editor demo!</h1>
									<p>
										Please try out the features provided in this basic example.<br/>
										Note that any <strong>MoxieManager</strong> file and image management functionality in this example is part of our commercial offering – the demo is to show the integration.
									</p>
									<h2>Got questions or need help?</h2>
									<ul>
										<li>Our <a href="http://www.tinymce.com/docs/">documentation</a> is a great resource for learning how to configure TinyMCE.</li>
										<li>Have a specific question? Visit the <a href="http://community.tinymce.com/forum/">Community Forum</a>.</li>
										<li>We also offer enterprise grade support as part of <a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/www.tinymce.com/pricing">TinyMCE Enterprise</a>.</li>
									</ul>
									<h2>A simple table to play with</h2>
									<table style="text-align: center;">
										<thead>
											<tr>
												<th>Product</th>
												<th>Cost</th>
												<th>Really?</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>TinyMCE</td>
												<td>Free</td>
												<td>YES!</td>
											</tr>
											<tr>
												<td>Plupload</td>
												<td>Free</td>
												<td>YES!</td>
											</tr>
										</tbody>
									</table>
									<h2>Found a bug?</h2>
									<p>
										If you think you have found a bug please create an issue on the <a href="https://github.com/tinymce/tinymce/issues">GitHub repo</a> to report it to the developers.
									</p>
									<h2>Finally ...</h2>
									<p>
										Don't forget to check out our other product <a href="http://www.plupload.com" target="_blank">Plupload</a>, your ultimate upload solution featuring HTML5 upload support.
									</p>
									<p>
										Thanks for supporting TinyMCE! We hope it helps you and your users create great content.<br/>All the best from the TinyMCE team.
									</p>
								</textarea>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Basic Editor end -->
<!-- Inline Editor start -->
<section id="inline">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Inline Editor</h4>
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
<p>This example shows you the inline editing capabilities of TinyMCE.
                      Click on the "editable header" or "editable div element" below.</p>
<form action="#" class="form-horizontal">
<div class="form-group">
<h2 class="editable">Editable header</h2>
<div class="editable">
<p>
                            This is an editable div element.
                          </p>
<p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt est ac
                            dolor condimentum vitae laoreet ante accumsan. Nullam
                            tincidunt tincidunt ante tempus commodo. Duis rutrum,
                            magna non lacinia tincidunt, risus lacus tempus ipsum,
                            sit amet euismod justo metus ut metus. Donec feugiat
                            urna non leo laoreet in tincidunt lectus gravida. Sed
                            semper ante sed dui consectetur eget commodo eros imperdiet.
                            Mauris magna diam, scelerisque at ornare vel, dignissim
                            ac sem. Fusce id congue lacus. Duis sit amet tellus erat.
                            Cum sociis natoque penatibus et magnis dis parturient
                            montes, nascetur ridiculus mus. Phasellus mattis facilisis
                            pretium. In in nibh eu urna ornare semper. Sed imperdiet
                            felis vitae nibh sagittis eu pulvinar metus facilisis.
                            Sed dolor orci, aliquet sagittis auctor id, faucibus
                            at justo.
                          </p>
<p>
                            Vestibulum vestibulum velit nec magna lobortis elementum. Ut egestas ultrices tincidunt.
                            Sed vestibulum mi vitae dui interdum eget rhoncus neque
                            faucibus. Ut nec leo tellus. Nunc in metus sit amet purus
                            bibendum dignissim pulvinar quis erat. Quisque vel ultricies
                            nisi. Vestibulum eu ante risus. In ultrices dignissim
                            massa, vel luctus dui consequat quis. Cum sociis natoque
                            penatibus et magnis dis parturient montes, nascetur ridiculus
                            mus.
                          </p>
<p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dui nulla, venenatis
                            at porttitor nec, sagittis et urna. Nulla facilisi. Integer
                            bibendum porta urna porta suscipit. In condimentum quam
                            quis justo accumsan molestie. Fusce accumsan vulputate
                            mattis. Sed pharetra volutpat erat at convallis. Etiam
                            tempus, est ac tincidunt scelerisque, mi elit pretium
                            nulla, sit amet viverra nisl enim id lorem. Suspendisse
                            ut enim ullamcorper tellus eleifend sagittis. Aenean
                            mollis turpis eu nisl viverra laoreet. Mauris ante purus,
                            tempor ut viverra eu, vestibulum eget tellus. Morbi vitae
                            dolor tellus. Mauris sodales rutrum nunc, a imperdiet
                            augue egestas vel. Nulla facilisi. Nulla venenatis tristique
                            nisi ut blandit. Phasellus suscipit arcu adipiscing velit
                            posuere nec lacinia urna mattis.
                          </p>
<p>
                            Nulla ullamcorper magna sit amet leo porta blandit. Aliquam sed nulla ac arcu vehicula
                            feugiat. Fusce eget accumsan dui. Vestibulum vel leo
                            tellus. Sed dignissim justo in nunc interdum tempor vehicula
                            neque egestas. Fusce lacinia turpis sit amet leo consequat
                            laoreet. Cras nec erat ac purus volutpat consequat. Vestibulum
                            iaculis tincidunt purus eget blandit. Cras consectetur
                            tellus libero. Vestibulum eros orci, volutpat vitae lobortis
                            sit amet, porta quis felis. In a lacus ac neque luctus
                            mollis. Nulla elementum nunc ac ante porttitor id venenatis
                            augue venenatis. In aliquam magna non dolor convallis
                            consequat.
                          </p>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Inline Editor end -->
<!-- Classic Editor start -->
<section id="classic">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Classic Editor</h4>
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
<p>This example shows you how to configure TinyMCE editor without
                      menu items on top.</p>
<form action="#" class="form-horizontal">
<div class="form-group">
<textarea class="tinymce-classic">
									<p style="text-align: center;">
										<img alt="TinyMCE Logo" height="97" src="https://www.tinymce.com/images/glyph-tinymce@2x.png" title="TinyMCE Logo" width="110"/>
									</p>
									<h1 style="text-align: center;">Welcome to the TinyMCE editor demo!</h1>
									<h1><img alt="Tiny Husky" height="320" src="https://www.tinymce.com/docs/images/tiny-husky.jpg" style="float: right; padding: 0 0 10px 10px;" title="Tiny Husky" width="304"/></h1>
									<p>
										Please try out the features provided in this basic example.<br/>
										Note that any <strong>MoxieManager</strong> file and image management functionality in this example is part of our commercial offering – the demo is to show the integration.
									</p>
									<h2>Got questions or need help?</h2>
									<ul>
										<li>Our <a href="http://www.tinymce.com/docs/">documentation</a> is a great resource for learning how to configure TinyMCE.</li>
										<li>Have a specific question? Visit the <a href="http://community.tinymce.com/forum/">Community Forum</a>.</li>
										<li>We also offer enterprise grade support as part of <a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/www.tinymce.com/pricing">TinyMCE Enterprise</a>.</li>
									</ul>
									<h2>A simple table to play with</h2>
									<table style="text-align: center;">
										<thead>
											<tr>
												<th>Product</th>
												<th>Cost</th>
												<th>Really?</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>TinyMCE</td>
												<td>Free</td>
												<td>YES!</td>
											</tr>
											<tr>
												<td>Plupload</td>
												<td>Free</td>
												<td>YES!</td>
											</tr>
										</tbody>
									</table>
									<h2>Found a bug?</h2>
									<p>
										If you think you have found a bug please create an issue on the <a href="https://github.com/tinymce/tinymce/issues">GitHub repo</a> to report it to the developers.
									</p>
									<h2>Finally ...</h2>
									<p>
										Don't forget to check out our other product <a href="http://www.plupload.com" target="_blank">Plupload</a>, your ultimate upload solution featuring HTML5 upload support.
									</p>
									<p>
										Thanks for supporting TinyMCE! We hope it helps you and your users create great content.<br/>All the best from the TinyMCE team.
									</p>
								</textarea>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Classic Editor end -->
<!-- Custom Toolbar start -->
<section id="custom-toolbar">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Custom Toolbar</h4>
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
<p>This example shows you how to add a simple <code>listbox</code>                      to the toolbar. You can also add
                      <em>Button, Menu Button, Split Button &amp; Menu Item</em> as per
                      your requirement.</p>
<form action="#" class="form-horizontal">
<div class="form-group">
<textarea class="tinymce-toolbar">
									<p style="text-align: center; font-size: 15px;"><img alt="TinyMCE Logo" height="97" src="https://www.tinymce.com/images/glyph-tinymce@2x.png" title="TinyMCE Logo" width="110"/>
									</p>
									<h1 style="text-align: center;">Welcome to the TinyMCE editor demo!</h1>
									<p>Please try out the features provided in this example. Check out the next paragraph's HTML. You'll see html tags not rendered in the editor's WYSIWYG output. Next, play with the Codepen JS to see what you can change in the editor.</p>
									<p>Note that any <strong>MoxieManager</strong> file and image management <em>functionality</em> in this example is part of our commercial offering – the demo is to show the integration.
									</p><h2>Got questions or need help?</h2>
									<ul>
										<li>Our <a href="https://www.tinymce.com/docs/">documentation</a> is a great resource for learning how to configure TinyMCE.</li>
										<li>Have a specific question? Visit the <a href="http://community.tinymce.com/forum/">Community Forum</a>.</li>
										<li>We also offer enterprise grade support as part of <a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/www.tinymce.com/pricing">TinyMCE Enterprise</a>.</li>
									</ul>
									<h2>A simple table to play with</h2>
									<table style="text-align: center;">
										<thead>
											<tr>
												<th>Product</th>
												<th>Cost</th>
												<th>Really?</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>TinyMCE</td>
												<td>Free</td>
												<td>YES!</td>
											</tr>
											<tr>
												<td>Plupload</td>
												<td>Free</td>
												<td>YES!</td>
											</tr>
										</tbody>
									</table>
									<h2>Found a bug?</h2>
									<p>If you think you have found a bug please create an issue on the <a href="https://github.com/tinymce/tinymce/issues">GitHub repo</a> to report it to the developers.</p>
									<h2>Finally ...</h2>
									<p>Don't forget to check out our other product <a href="http://www.plupload.com" target="_blank">Plupload</a>, your ultimate upload solution featuring HTML5 upload support.</p>
									<p>Thanks for supporting TinyMCE! We hope it helps you and your users create great content.<br/>All the best from the TinyMCE team.</p>
								</textarea>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Custom Toolbar end -->
</div>
