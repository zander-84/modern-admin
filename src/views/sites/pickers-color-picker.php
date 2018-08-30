<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\PickersColorPickerAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Color picker</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="pickers-color-picker.html#">Pickers</a>
</li>
<li class="breadcrumb-item active">Color
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="pickers-color-picker.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="pickers-color-picker.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="pickers-color-picker.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="pickers-color-picker.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Bootstrap Color Picker start -->
<!-- <section id="bs-color">
	<div class="card">
		<div class="card-header">
			<h4 class="card-title">Bootstrap Color Picker</h4>
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
				<div class="row">
					<div class="col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label>Basic Color Picker</label>
							<input type='text' class="form-control colorpicker" value="#5367ce" />
						</div>
						<div class="form-group">
							<label>Picker as a component</label>
							<div class="input-group colorpicker-component">
								<input type="text" value="#00AABB" class="form-control" />
								<span class="input-group-addon"><i></i></span>
							</div>
						</div>
						<div class="form-group">
							<label>Picker with custom options</label>
							<div class="input-group colorpicker-custom">
								<input type="text" value="#00AABB" class="form-control" />
								<span class="input-group-addon"><i></i></span>
							</div>
						</div>
						<div class="form-group">
							<label>Working with events</label>
							<button class="btn btn-default block colorpicker-events">Change background color</button>
						</div>
						<div class="form-group">
							<label>Transparent color support</label>
							<input type="text" class="form-control transparent-color" />
						</div>
						<div class="form-group">
							<label>Horizontal ColorPicker</label>
							<input type="text" class="form-control colorpicker-horizontal" />
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label>Aliased color palette</label>
							<input type="text" data-format="hex" value="primary" class="form-control colorpicker-palette" />
						</div>
						<div class="form-group">
							<label>Customized widget size</label>
							<input type="text" data-format="hex" value="#f134bc" class="form-control colorpicker-size" />
						</div>
						<div class="form-group">
							<label>Disabled / enabled status</label>
							<div class="input-group colorpicker-disable">
								<input disabled type="text" value="" class="form-control" />
								<span class="input-group-addon"><i></i></span>
							</div>
							<a class="btn btn-sm btn-default enable-button" href="#">Enable</a>
							<a class="btn btn-sm btn-default disable-button" href="#">Disable</a>
						</div>
						<div class="form-group">
							<label>Inline mode</label>
							<div class="colorpicker-inline"></div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!-- Bootstrap Color Picker end -->
<!-- jQuery MiniColors start -->
<section id="minicolors">
<div class="card">
<div class="card-header">
<h4 class="card-title">jQuery MiniColors</h4>
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
<h5>Control Types</h5>
<div class="row">
<div class="col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="hue-demo">Hue (default)</label>
<input class="form-control minicolors" data-control="hue" id="hue-demo" type="text" value="#ff6161"/>
</div>
<div class="form-group">
<label for="saturation-demo">Saturation</label>
<input class="form-control minicolors" data-control="saturation" id="saturation-demo" type="text" value="#0088cc"/>
</div>
</div>
<div class="col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="brightness-demo">Brightness</label>
<input class="form-control minicolors" data-control="brightness" id="brightness-demo" type="text" value="#00ffff"/>
</div>
<div class="form-group">
<label for="wheel-demo">Wheel</label>
<input class="form-control minicolors" data-control="wheel" id="wheel-demo" type="text" value="#ff99ee"/>
</div>
</div>
</div>
<hr/>
<h5 class="mt-1">Positions</h5>
<div class="row">
<div class="col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="position-bottom-left">bottom left (default)</label>
<input class="form-control minicolors" data-position="bottom left" id="position-bottom-left" type="text" value="#0088cc"/>
</div>
<div class="form-group">
<label for="position-top-left">top left</label>
<input class="form-control minicolors" data-position="top left" id="position-top-left" type="text" value="#0088cc"/>
</div>
</div>
<div class="col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="position-bottom-right">bottom right</label>
<input class="form-control minicolors" data-position="bottom right" id="position-bottom-right" type="text" value="#0088cc"/>
</div>
<div class="form-group">
<label for="position-top-right">top right</label>
<input class="form-control minicolors" data-position="top right" id="position-top-right" type="text" value="#0088cc"/>
</div>
</div>
</div>
<hr/>
<h5 class="mt-1">Input Modes</h5>
<div class="row">
<div class="col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="text-field">Text field</label>
<br/>
<input class="form-control minicolors" id="text-field" type="text" value="#70c24a"/>
</div>
<div class="form-group">
<label>Hidden Input</label>
<br/>
<input class="minicolors" id="hidden-input" type="hidden" value="#db913d"/>
</div>
</div>
<div class="col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="inline">Inline</label>
<br/>
<input class="form-control minicolors" data-inline="true" id="inline" type="text" value="#4fc8db"/>
</div>
</div>
</div>
<hr/>
<h5>RGB(A)</h5>
<div class="row">
<div class="col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="rgb">RGB</label>
<br/>
<input class="form-control minicolors" data-format="rgb" id="rgb" type="text" value="rgb(33, 147, 58)"/>
<p>
                        RGB input can be assigned by setting the <code>format</code>                        option to <code>rgb</code>.
                      </p>
</div>
</div>
<div class="col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="rgba">RGBA</label>
<br/>
<input class="form-control minicolors" data-format="rgb" data-opacity=".5" id="rgba" type="text" value="rgba(52, 64, 158, 0.5)"/>
<p>
                        RGBA input can be assigned by setting the <code>format</code>                        option to <code>rgb</code> and <code>opacity</code> option
                        to
                        <code>true</code>.
                      </p>
</div>
</div>
</div>
<hr/>
<h5>More Options</h5>
<div class="row">
<div class="col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="opacity">Opacity</label>
<input class="form-control minicolors" data-opacity=".5" id="opacity" type="text" value="#766fa8"/>
<p>
                        Opacity can be assigned by including the <code>data-opacity</code>                        attribute or by setting the <code>opacity</code> option to
                        <code>true</code>.
                      </p>
</div>
<div class="form-group">
<label for="default-value">Default Value</label>
<input class="form-control minicolors" data-defaultvalue="#ff6600" id="default-value" type="text"/>
<p>
                        This field has a default value assigned to it, so it will never be empty.
                      </p>
</div>
<div class="form-group">
<label for="letter-case">Swatches</label>
<input class="form-control minicolors" data-swatches="#fff|#000|#f00|#0f0|#00f|#ff0|#0ff" id="swatches" type="text" value="#abcdef"/>
<p>
                        Example with swatches.
                      </p>
</div>
</div>
<div class="col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="keywords">Keywords</label>
<input class="form-control minicolors" data-keywords="transparent, initial, inherit" id="keywords" type="text" value="transparent"/>
<p>
                        CSS-wide keywords can be assigned by setting the <code>keywords</code>                        option to a comma-separated list of valid keywords: <code>transparent,
								initial, inherit</code>.
                      </p>
</div>
<div class="form-group">
<label for="letter-case">Letter Case</label>
<input class="form-control minicolors" data-lettercase="uppercase" id="letter-case" type="text" value="#abcdef"/>
<p>
                        This field will always be uppercase.
                      </p>
</div>
<div class="form-group">
<label for="letter-case">Swatches and opacity</label>
<input class="form-control minicolors" data-format="rgb" data-opacity="1" data-swatches="#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)" id="swatches-opacity" type="text" value="rgba(14, 206, 235, .5)"/>
<p>
                        Example with swatches and opacity.
                      </p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- jQuery MiniColors end -->
<!-- Spectrum Color Picker start -->
<section id="spectrum">
<div class="card">
<div class="card-header">
<h4 class="card-title">Spectrum Color Picker</h4>
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
<div class="row">
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Basic Picker</label>
<p>
<input class="form-control spectrum" type="text" value="#2D95BF"/>
</p>
<p>Default Color Picker</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Hide Buttons</label>
<p>
<input class="form-control spectrum" data-show-buttons="false" type="text" value="#2D95BF"/>
</p>
<p>Display Color Picker without buttons</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Disable/Enable Picker</label>
<p>
<input class="form-control spectrum-disabled" type="text" value="#2D95BF"/>
<span class="disable-toggle btn btn-link"><i class="la la-refresh"></i></span>
</p>
<p>Disable / Enable Color Picker</p>
</div>
</div>
</div>
<hr/>
<div class="row">
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Change button text</label>
<p>
<input class="form-control spectrum" data-cancel-text="Not this" data-choose-text="Perfect!" type="text" value="#F44336"/>
</p>
<p>Specify custom button text</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Picker Color Option</label>
<p>
<input class="form-control spectrum-container-class" type="text" value="#F44336"/>
</p>
<p>Change picker color using custom container color class</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Change selector color</label>
<p>
<input class="form-control spectrum-replacer-class" type="text" value="#F44336"/>
</p>
<p>Change selector color using custom replacer color class</p>
</div>
</div>
</div>
<hr/>
<div class="row">
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Clear Selection</label>
<p>
<input class="form-control spectrum-clear" type="text" value="#48CFAE"/>
</p>
<p>Clear current color selection</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Show initial color</label>
<p>
<input class="form-control spectrum-initial-color" type="text" value="#48CFAE"/>
</p>
<p>Show color that was set at the time of initialization</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Show initial color &amp; input field</label>
<p>
<input class="form-control spectrum-with-input" type="text" value="#48CFAE"/>
</p>
<p>Add input to type color code or select any color</p>
</div>
</div>
</div>
<hr/>
<div class="row">
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Color Transparency</label>
<p>
<input class="form-control spectrum-transparancy" type="text" value="#FB6E52"/>
</p>
<p>Allow color transparency selection</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Full Featured</label>
<p>
<input class="form-control spectrum-featured" type="text" value="#FB6E52"/>
</p>
<p>Fully featured color picker example</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Show color palette</label>
<p>
<input class="form-control spectrum-palette" type="text" value="#FB6E52"/>
</p>
<p>Color palette will display recently used colors</p>
</div>
</div>
</div>
<hr/>
<div class="row">
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Show Palette Only</label>
<p>
<input class="form-control showPaletteOnly" type="text" value="#50C1E9"/>
</p>
<p>Show the palettes you specify, and nothing else.</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Toggle Palette Only</label>
<p>
<input class="form-control togglePaletteOnly" type="text" value="#50C1E9"/>
</p>
<p>Show a button to toggle the color picker next to the palette.</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Selection Palette</label>
<p>
<input class="form-control showSelectionPalette" type="text" value="#50C1E9"/>
</p>
<p>Color palette will display recently used colors</p>
</div>
</div>
</div>
<hr/>
<div class="row">
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Color Format HEX</label>
<p>
<input class="form-control preferredHex" type="text" value="#8bc34a"/>
</p>
<p>Preferred Format HEX</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Color Format HEX3</label>
<p>
<input class="form-control preferredHex3" type="text" value="#8bc34a"/>
</p>
<p>Preferred Format HEX3</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Color Format HSL</label>
<p>
<input class="form-control preferredHsl" type="text" value="#8bc34a"/>
</p>
<p>Preferred Format HSL</p>
</div>
</div>
</div>
<hr/>
<div class="row">
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Color Format RGB</label>
<p>
<input class="form-control preferredRgb" type="text" value="orangered"/>
</p>
<p>Preferred Format RGB</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Color Format NAME</label>
<p>
<input class="form-control preferredName" type="text" value="orangered"/>
</p>
<p>Preferred Format NAME (Falls back to hex)</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Color Format None</label>
<p>
<input class="form-control preferredNone" type="text" value="orangered"/>
</p>
<p>Preferred Format None (Depends on input - try changing formats
                        with the text box)</p>
</div>
</div>
</div>
<hr/>
<div class="row">
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Show event</label>
<p>
<input class="form-control showEvent" type="text" value="#9c27b0"/>
</p>
<div class="hidden show-result"></div>
<p>Called after the picker is opened</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Drag start event</label>
<p>
<input class="form-control dragStart" type="text" value="#9c27b0"/>
</p>
<div class="hidden drag-result"></div>
<p>Called as the drag event starts</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Move event</label>
<p>
<input class="form-control moveEvent" type="text" value="#9c27b0"/>
</p>
<div class="hidden move-result"></div>
<p>Called as the user moves around</p>
</div>
</div>
</div>
<hr/>
<div class="row">
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Basic flat picker</label>
<p>
<input class="form-control flatPicker" type="text" value="#607d8b"/>
</p>
<p>Basic full size color picker</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Flat color palette</label>
<p>
<input class="form-control flatPalette" type="text" value="#607d8b"/>
</p>
<p>Display both palette with show/hide picker toggle</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-12">
<div class="form-group text-center">
<label>Full featured</label>
<p>
<input class="form-control flatFeaturedPicker" type="text" value="#607d8b"/>
</p>
<p>Full featured flat picker</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Spectrum Color Picker end -->
</div>
</div>
</div>