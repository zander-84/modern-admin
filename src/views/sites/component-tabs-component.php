<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ComponentTabsComponentAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Tabs</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="component-tabs-component.html#">Components</a>
</li>
<li class="breadcrumb-item active">Tabs
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="component-tabs-component.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="component-tabs-component.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="component-tabs-component.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="component-tabs-component.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Basic tabs start -->
<section id="basic-tabs-components">
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Tabs</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Takes the basic nav from above and adds the <code>.nav-tabs</code>                      class to generate a tabbed interface. </p>
<ul class="nav nav-tabs">
<li class="nav-item">
<a aria-controls="tab1" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#tab1" id="base-tab1">Tab 1</a>
</li>
<li class="nav-item">
<a aria-controls="tab2" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tab2" id="base-tab2">Tab 2</a>
</li>
<li class="nav-item">
<a aria-controls="tab3" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tab3" id="base-tab3">Tab 3</a>
</li>
<li class="nav-item">
<a class="nav-link disabled">Disabled</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="base-tab1" class="tab-pane active" id="tab1" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="base-tab2" class="tab-pane" id="tab2">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="base-tab3" class="tab-pane" id="tab3">
<p>Biscuit ice cream halvah candy canes bear claw ice cream
                          cake chocolate bar donut. Toffee cotton candy liquorice.
                          Oat cake lemon drops gingerbread dessert caramels. Sweet
                          dessert jujubes powder sweet sesame snaps.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tabs with dropdown</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>You can activate a tab navigation by simply specifying <code>data-toggle="tab"</code>                      on an element.</p>
<ul class="nav nav-tabs">
<li class="nav-item">
<a aria-controls="home" aria-expanded="true" class="nav-link" data-toggle="tab" href="component-tabs-component.html#home" id="home-tab">Home</a>
</li>
<li class="nav-item">
<a aria-controls="profile" aria-expanded="false" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#profile" id="profile-tab">Profile</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
								Dropdown
								</a>
<div class="dropdown-menu">
<a aria-controls="dropdown1" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdown1" id="dropdown1-tab">@fat</a>
<a aria-controls="dropdown2" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdown2" id="dropdown2-tab">@mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="about" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#about" id="about-tab">About</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="home-tab" class="tab-pane" id="home" role="tabpanel">
<p>Candy canes donut chupa chups candy canes lemon drops oat
                          cake wafer. Cotton candy candy canes marzipan carrot cake.
                          Sesame snaps lemon drops candy marzipan donut brownie tootsie
                          roll. Icing croissant bonbon biscuit gummi bears.</p>
</div>
<div aria-expanded="false" aria-labelledby="profile-tab" class="tab-pane active" id="profile" role="tabpanel">
<p>Pudding candy canes sugar plum cookie chocolate cake powder
                          croissant. Carrot cake tiramisu danish candy cake muffin
                          croissant tart dessert. Tiramisu caramels candy canes chocolate
                          cake sweet roll liquorice icing cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdown1-tab" class="tab-pane" id="dropdown1" role="tabpanel">
<p>Cake croissant lemon drops gummi bears carrot cake biscuit
                          cupcake croissant. Macaroon lemon drops muffin jelly sugar
                          plum chocolate cupcake danish icing. Soufflé tootsie roll
                          lemon drops sweet roll cake icing cookie halvah cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdown2-tab" class="tab-pane" id="dropdown2" role="tabpanel">
<p>Chocolate croissant cupcake croissant jelly donut. Cheesecake
                          toffee apple pie chocolate bar biscuit tart croissant.
                          Lemon drops danish cookie. Oat cake macaroon icing tart
                          lollipop cookie sweet bear claw.</p>
</div>
<div aria-expanded="false" aria-labelledby="about-tab" class="tab-pane" id="about" role="tabpanel">
<p>Carrot cake dragée chocolate. Lemon drops ice cream wafer
                          gummies dragée. Chocolate bar liquorice cheesecake cookie
                          chupa chups marshmallow oat cake biscuit. Dessert toffee
                          fruitcake ice cream powder tootsie roll cake.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Top Border Tabs</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-top-border.no-hover-bg</code> class for top bordered
                      active type. </p>
<ul class="nav nav-tabs nav-top-border no-hover-bg">
<li class="nav-item">
<a aria-controls="tab11" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#tab11" id="base-tab11">Tab 1</a>
</li>
<li class="nav-item">
<a aria-controls="tab12" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tab12" id="base-tab12">Tab 2</a>
</li>
<li class="nav-item">
<a aria-controls="tab13" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tab13" id="base-tab13">Tab 3</a>
</li>
<li class="nav-item">
<a class="nav-link disabled">Disabled</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="base-tab11" class="tab-pane active" id="tab11" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="base-tab12" class="tab-pane" id="tab12">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="base-tab13" class="tab-pane" id="tab13">
<p>Biscuit ice cream halvah candy canes bear claw ice cream
                          cake chocolate bar donut. Toffee cotton candy liquorice.
                          Oat cake lemon drops gingerbread dessert caramels. Sweet
                          dessert jujubes powder sweet sesame snaps.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Top Border with dropdown</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-top-border.no-hover-bg</code> class for top borderd
                      active status type.</p>
<ul class="nav nav-tabs nav-top-border no-hover-bg">
<li class="nav-item">
<a aria-controls="home1" aria-expanded="true" class="nav-link" data-toggle="tab" href="component-tabs-component.html#home1" id="home-tab1">Home</a>
</li>
<li class="nav-item">
<a aria-controls="profile1" aria-expanded="false" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#profile1" id="profile-tab1">Profile</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
								Dropdown
								</a>
<div class="dropdown-menu">
<a aria-controls="dropdown11" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdown11" id="dropdown11-tab">@fat</a>
<a aria-controls="dropdown12" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdown12" id="dropdown12-tab">@mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="about1" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#about1" id="about-tab1">About</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="home-tab1" class="tab-pane" id="home1" role="tabpanel">
<p>Candy canes donut chupa chups candy canes lemon drops oat
                          cake wafer. Cotton candy candy canes marzipan carrot cake.
                          Sesame snaps lemon drops candy marzipan donut brownie tootsie
                          roll. Icing croissant bonbon biscuit gummi bears.</p>
</div>
<div aria-expanded="false" aria-labelledby="profile-tab1" class="tab-pane active" id="profile1" role="tabpanel">
<p>Pudding candy canes sugar plum cookie chocolate cake powder
                          croissant. Carrot cake tiramisu danish candy cake muffin
                          croissant tart dessert. Tiramisu caramels candy canes chocolate
                          cake sweet roll liquorice icing cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdown11-tab" class="tab-pane" id="dropdown11" role="tabpanel">
<p>Cake croissant lemon drops gummi bears carrot cake biscuit
                          cupcake croissant. Macaroon lemon drops muffin jelly sugar
                          plum chocolate cupcake danish icing. Soufflé tootsie roll
                          lemon drops sweet roll cake icing cookie halvah cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdown12-tab" class="tab-pane" id="dropdown12" role="tabpanel">
<p>Chocolate croissant cupcake croissant jelly donut. Cheesecake
                          toffee apple pie chocolate bar biscuit tart croissant.
                          Lemon drops danish cookie. Oat cake macaroon icing tart
                          lollipop cookie sweet bear claw.</p>
</div>
<div aria-expanded="false" aria-labelledby="about-tab1" class="tab-pane" id="about1" role="tabpanel">
<p>Carrot cake dragée chocolate. Lemon drops ice cream wafer
                          gummies dragée. Chocolate bar liquorice cheesecake cookie
                          chupa chups marshmallow oat cake biscuit. Dessert toffee
                          fruitcake ice cream powder tootsie roll cake.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Topline with box</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-topline</code> class for topline box active type.
                    </p>
<ul class="nav nav-tabs nav-topline">
<li class="nav-item">
<a aria-controls="tab21" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#tab21" id="base-tab21">Tab 1</a>
</li>
<li class="nav-item">
<a aria-controls="tab22" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tab22" id="base-tab22">Tab 2</a>
</li>
<li class="nav-item">
<a aria-controls="tab23" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tab23" id="base-tab23">Tab 3</a>
</li>
<li class="nav-item">
<a class="nav-link disabled">Disabled</a>
</li>
</ul>
<div class="tab-content px-1 pt-1 border-grey border-lighten-2 border-0-top">
<div aria-expanded="true" aria-labelledby="base-tab21" class="tab-pane active" id="tab21" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="base-tab22" class="tab-pane" id="tab22">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="base-tab23" class="tab-pane" id="tab23">
<p>Biscuit ice cream halvah candy canes bear claw ice cream
                          cake chocolate bar donut. Toffee cotton candy liquorice.
                          Oat cake lemon drops gingerbread dessert caramels. Sweet
                          dessert jujubes powder sweet sesame snaps.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Topline with dropdown</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-topline</code> class for topline box active status
                      type.
                    </p>
<ul class="nav nav-tabs nav-topline">
<li class="nav-item">
<a aria-controls="home2" aria-expanded="true" class="nav-link" data-toggle="tab" href="component-tabs-component.html#home2" id="home-tab2">Home</a>
</li>
<li class="nav-item">
<a aria-controls="profile2" aria-expanded="false" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#profile2" id="profile-tab2">Profile</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
								Dropdown
								</a>
<div class="dropdown-menu">
<a aria-controls="dropdown21" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdown21" id="dropdown21-tab">@fat</a>
<a aria-controls="dropdown22" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdown22" id="dropdown22-tab">@mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="about2" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#about2" id="about-tab2">About</a>
</li>
</ul>
<div class="tab-content px-1 pt-1 border-grey border-lighten-2 border-0-top">
<div aria-expanded="true" aria-labelledby="home-tab2" class="tab-pane" id="home2" role="tabpanel">
<p>Candy canes donut chupa chups candy canes lemon drops oat
                          cake wafer. Cotton candy candy canes marzipan carrot cake.
                          Sesame snaps lemon drops candy marzipan donut brownie tootsie
                          roll. Icing croissant bonbon biscuit gummi bears.</p>
</div>
<div aria-expanded="false" aria-labelledby="profile-tab2" class="tab-pane active" id="profile2" role="tabpanel">
<p>Pudding candy canes sugar plum cookie chocolate cake powder
                          croissant. Carrot cake tiramisu danish candy cake muffin
                          croissant tart dessert. Tiramisu caramels candy canes chocolate
                          cake sweet roll liquorice icing cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdown21-tab" class="tab-pane" id="dropdown21" role="tabpanel">
<p>Cake croissant lemon drops gummi bears carrot cake biscuit
                          cupcake croissant. Macaroon lemon drops muffin jelly sugar
                          plum chocolate cupcake danish icing. Soufflé tootsie roll
                          lemon drops sweet roll cake icing cookie halvah cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdown22-tab" class="tab-pane" id="dropdown22" role="tabpanel">
<p>Chocolate croissant cupcake croissant jelly donut. Cheesecake
                          toffee apple pie chocolate bar biscuit tart croissant.
                          Lemon drops danish cookie. Oat cake macaroon icing tart
                          lollipop cookie sweet bear claw.</p>
</div>
<div aria-expanded="false" aria-labelledby="about-tab2" class="tab-pane" id="about2" role="tabpanel">
<p>Carrot cake dragée chocolate. Lemon drops ice cream wafer
                          gummies dragée. Chocolate bar liquorice cheesecake cookie
                          chupa chups marshmallow oat cake biscuit. Dessert toffee
                          fruitcake ice cream powder tootsie roll cake.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Basic badge Input end -->
<!-- Justified With Top Border start -->
<section id="justified-top-border">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Justified With Top Border</h4>
<p>Different bottom border styles for active tabs.</p>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Justified Tab</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-justified</code> class to set tabs justified.</p>
<ul class="nav nav-tabs nav-justified">
<li class="nav-item">
<a aria-controls="active" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#active" id="active-tab">Active</a>
</li>
<li class="nav-item">
<a aria-controls="link" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#link" id="link-tab">Link</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
								Dropdown
								</a>
<div class="dropdown-menu">
<a aria-controls="dropdownOpt1" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOpt1" id="dropdownOpt1-tab">dropdown 1</a>
<a aria-controls="dropdownOpt2" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOpt2" id="dropdownOpt2-tab">dropdown 2</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="linkOpt" class="nav-link" data-toggle="tab" href="component-tabs-component.html#linkOpt" id="linkOpt-tab">Another Link</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="active-tab" class="tab-pane active" id="active" role="tabpanel">
<p>Macaroon candy canes tootsie roll wafer lemon drops liquorice
                          jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton
                          candy jelly cake jelly-o sugar plum marshmallow. Dessert
                          cotton candy macaroon chocolate sugar plum cake donut.</p>
</div>
<div aria-expanded="false" aria-labelledby="link-tab" class="tab-pane" id="link" role="tabpanel">
<p>Chocolate bar gummies sesame snaps. Liquorice cake sesame
                          snaps cotton candy cake sweet brownie. Cotton candy candy
                          canes brownie. Biscuit pudding sesame snaps pudding pudding
                          sesame snaps biscuit tiramisu.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOpt1-tab" class="tab-pane" id="dropdownOpt1" role="tabpanel">
<p>Fruitcake marshmallow donut wafer pastry chocolate topping
                          cake. Powder powder gummi bears jelly beans. Gingerbread
                          cake chocolate lollipop. Jelly oat cake pastry marshmallow
                          sesame snaps.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOpt2-tab" class="tab-pane" id="dropdownOpt2" role="tabpanel">
<p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet
                          roll dragée topping cotton candy cake jelly beans. Pie
                          lemon drops sweet pastry candy canes chocolate cake bear
                          claw cotton candy wafer.</p>
</div>
<div aria-expanded="false" aria-labelledby="linkOpt-tab" class="tab-pane" id="linkOpt" role="tabpanel">
<p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies
                          cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread
                          powder chocolate cake icing. Cheesecake gummi bears ice
                          cream marzipan.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Justified Tab with top border</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-justified.nav-top-border.no-hover-bg</code> classes
                      justified top bordered tabs. you can also use <code>.nav-topline</code>                      class in place of <code>.nav-top-border</code> class</p>
<ul class="nav nav-tabs nav-top-border no-hover-bg nav-justified">
<li class="nav-item">
<a aria-controls="active1" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#active1" id="active-tab1">Active</a>
</li>
<li class="nav-item">
<a aria-controls="link1" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#link1" id="link-tab1">Link</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
								Dropdown
								</a>
<div class="dropdown-menu">
<a aria-controls="dropdownOpt11" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOpt11" id="dropdownOpt1-tab1">dropdown 1</a>
<a aria-controls="dropdownOpt12" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOpt12" id="dropdownOpt2-tab1">dropdown 2</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="linkOpt1" class="nav-link" data-toggle="tab" href="component-tabs-component.html#linkOpt1" id="linkOpt-tab1">Another Link</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="active-tab1" class="tab-pane active" id="active1" role="tabpanel">
<p>Macaroon candy canes tootsie roll wafer lemon drops liquorice
                          jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton
                          candy jelly cake jelly-o sugar plum marshmallow. Dessert
                          cotton candy macaroon chocolate sugar plum cake donut.</p>
</div>
<div aria-expanded="false" aria-labelledby="link-tab1" class="tab-pane" id="link1" role="tabpanel">
<p>Chocolate bar gummies sesame snaps. Liquorice cake sesame
                          snaps cotton candy cake sweet brownie. Cotton candy candy
                          canes brownie. Biscuit pudding sesame snaps pudding pudding
                          sesame snaps biscuit tiramisu.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOpt1-tab1" class="tab-pane" id="dropdownOpt11" role="tabpanel">
<p>Fruitcake marshmallow donut wafer pastry chocolate topping
                          cake. Powder powder gummi bears jelly beans. Gingerbread
                          cake chocolate lollipop. Jelly oat cake pastry marshmallow
                          sesame snaps.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOpt2-tab1" class="tab-pane" id="dropdownOpt12" role="tabpanel">
<p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet
                          roll dragée topping cotton candy cake jelly beans. Pie
                          lemon drops sweet pastry candy canes chocolate cake bear
                          claw cotton candy wafer.</p>
</div>
<div aria-expanded="false" aria-labelledby="linkOpt-tab1" class="tab-pane" id="linkOpt1" role="tabpanel">
<p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies
                          cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread
                          powder chocolate cake icing. Cheesecake gummi bears ice
                          cream marzipan.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Justified With Top Border end -->
<!-- With Bottom Border start -->
<section id="bottom-border">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">With Bottom Border</h4>
<p>Different bottom border styles for active tabs.</p>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Bottomline with box</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-underline</code> class for bottom bordered active
                      type. </p>
<ul class="nav nav-tabs nav-underline no-hover-bg">
<li class="nav-item">
<a aria-controls="tab31" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#tab31" id="base-tab31">Tab 1</a>
</li>
<li class="nav-item">
<a aria-controls="tab32" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tab32" id="base-tab32">Tab 2</a>
</li>
<li class="nav-item">
<a aria-controls="tab33" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tab33" id="base-tab33">Tab 3</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="base-tab31" class="tab-pane active" id="tab31" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="base-tab32" class="tab-pane" id="tab32">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="base-tab33" class="tab-pane" id="tab33">
<p>Biscuit ice cream halvah candy canes bear claw ice cream
                          cake chocolate bar donut. Toffee cotton candy liquorice.
                          Oat cake lemon drops gingerbread dessert caramels. Sweet
                          dessert jujubes powder sweet sesame snaps.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tabs with dropdown</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-underline</code> class for bottom borderd active
                      status type.</p>
<ul class="nav nav-tabs nav-underline no-hover-bg">
<li class="nav-item">
<a aria-controls="home3" aria-expanded="true" class="nav-link" data-toggle="tab" href="component-tabs-component.html#home3" id="home-tab3">Home</a>
</li>
<li class="nav-item">
<a aria-controls="profile3" aria-expanded="false" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#profile3" id="profile-tab3">Profile</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
								Dropdown
								</a>
<div class="dropdown-menu">
<a aria-controls="dropdown31" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdown31" id="dropdown31-tab">@fat</a>
<a aria-controls="dropdown32" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdown32" id="dropdown32-tab">@mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="about3" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#about3" id="about-tab3">About</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="home-tab3" class="tab-pane" id="home3" role="tabpanel">
<p>Candy canes donut chupa chups candy canes lemon drops oat
                          cake wafer. Cotton candy candy canes marzipan carrot cake.
                          Sesame snaps lemon drops candy marzipan donut brownie tootsie
                          roll. Icing croissant bonbon biscuit gummi bears.</p>
</div>
<div aria-expanded="false" aria-labelledby="profile-tab3" class="tab-pane active" id="profile3" role="tabpanel">
<p>Pudding candy canes sugar plum cookie chocolate cake powder
                          croissant. Carrot cake tiramisu danish candy cake muffin
                          croissant tart dessert. Tiramisu caramels candy canes chocolate
                          cake sweet roll liquorice icing cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdown31-tab" class="tab-pane" id="dropdown31" role="tabpanel">
<p>Cake croissant lemon drops gummi bears carrot cake biscuit
                          cupcake croissant. Macaroon lemon drops muffin jelly sugar
                          plum chocolate cupcake danish icing. Soufflé tootsie roll
                          lemon drops sweet roll cake icing cookie halvah cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdown32-tab" class="tab-pane" id="dropdown32" role="tabpanel">
<p>Chocolate croissant cupcake croissant jelly donut. Cheesecake
                          toffee apple pie chocolate bar biscuit tart croissant.
                          Lemon drops danish cookie. Oat cake macaroon icing tart
                          lollipop cookie sweet bear claw.</p>
</div>
<div aria-expanded="false" aria-labelledby="about-tab3" class="tab-pane" id="about3" role="tabpanel">
<p>Carrot cake dragée chocolate. Lemon drops ice cream wafer
                          gummies dragée. Chocolate bar liquorice cheesecake cookie
                          chupa chups marshmallow oat cake biscuit. Dessert toffee
                          fruitcake ice cream powder tootsie roll cake.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Bottomline with Triangle</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-linetriangle</code> class for bottom triangle
                      active type. </p>
<ul class="nav nav-tabs nav-linetriangle no-hover-bg">
<li class="nav-item">
<a aria-controls="tab41" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#tab41" id="base-tab41">Tab 1</a>
</li>
<li class="nav-item">
<a aria-controls="tab42" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tab42" id="base-tab42">Tab 2</a>
</li>
<li class="nav-item">
<a aria-controls="tab43" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tab43" id="base-tab43">Tab 3</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="base-tab41" class="tab-pane active" id="tab41" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="base-tab42" class="tab-pane" id="tab42">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="base-tab43" class="tab-pane" id="tab43">
<p>Biscuit ice cream halvah candy canes bear claw ice cream
                          cake chocolate bar donut. Toffee cotton candy liquorice.
                          Oat cake lemon drops gingerbread dessert caramels. Sweet
                          dessert jujubes powder sweet sesame snaps.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tabs with dropdown</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-linetriangle</code> class for bottom triangle
                      active status type.</p>
<ul class="nav nav-tabs nav-linetriangle no-hover-bg">
<li class="nav-item">
<a aria-controls="home4" aria-expanded="true" class="nav-link" data-toggle="tab" href="component-tabs-component.html#home4" id="home-tab4">Home</a>
</li>
<li class="nav-item">
<a aria-controls="profile4" aria-expanded="false" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#profile4" id="profile-tab4">Profile</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
								Dropdown
								</a>
<div class="dropdown-menu">
<a aria-controls="dropdown41" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdown41" id="dropdown41-tab">@fat</a>
<a aria-controls="dropdown42" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdown42" id="dropdown42-tab">@mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="about4" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#about4" id="about-tab4">About</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="home-tab4" class="tab-pane" id="home4" role="tabpanel">
<p>Candy canes donut chupa chups candy canes lemon drops oat
                          cake wafer. Cotton candy candy canes marzipan carrot cake.
                          Sesame snaps lemon drops candy marzipan donut brownie tootsie
                          roll. Icing croissant bonbon biscuit gummi bears.</p>
</div>
<div aria-expanded="false" aria-labelledby="profile-tab4" class="tab-pane active" id="profile4" role="tabpanel">
<p>Pudding candy canes sugar plum cookie chocolate cake powder
                          croissant. Carrot cake tiramisu danish candy cake muffin
                          croissant tart dessert. Tiramisu caramels candy canes chocolate
                          cake sweet roll liquorice icing cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdown41-tab" class="tab-pane" id="dropdown41" role="tabpanel">
<p>Cake croissant lemon drops gummi bears carrot cake biscuit
                          cupcake croissant. Macaroon lemon drops muffin jelly sugar
                          plum chocolate cupcake danish icing. Soufflé tootsie roll
                          lemon drops sweet roll cake icing cookie halvah cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdown42-tab" class="tab-pane" id="dropdown42" role="tabpanel">
<p>Chocolate croissant cupcake croissant jelly donut. Cheesecake
                          toffee apple pie chocolate bar biscuit tart croissant.
                          Lemon drops danish cookie. Oat cake macaroon icing tart
                          lollipop cookie sweet bear claw.</p>
</div>
<div aria-expanded="false" aria-labelledby="about-tab4" class="tab-pane" id="about4" role="tabpanel">
<p>Carrot cake dragée chocolate. Lemon drops ice cream wafer
                          gummies dragée. Chocolate bar liquorice cheesecake cookie
                          chupa chups marshmallow oat cake biscuit. Dessert toffee
                          fruitcake ice cream powder tootsie roll cake.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- With Bottom Border end -->
<!-- Justified With Bottom Border start -->
<section id="justified-bottom-border">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Justified Tabs With Bottom Border</h4>
<p>Use class <code>.nav-justified</code> for justified tabs.</p>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tab with Underline</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-justified.nav-underline</code> classes justified
                      bottom bordered tabs.</p>
<ul class="nav nav-tabs nav-underline no-hover-bg nav-justified">
<li class="nav-item">
<a aria-controls="active32" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#active32" id="active-tab32">Active</a>
</li>
<li class="nav-item">
<a aria-controls="link32" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#link32" id="link-tab32">Link</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
								Dropdown
								</a>
<div class="dropdown-menu">
<a aria-controls="dropdownOpt21" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOpt21" id="dropdownOpt1-tab2">dropdown 1</a>
<a aria-controls="dropdownOpt22" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOpt22" id="dropdownOpt2-tab2">dropdown 2</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="linkOpt2" class="nav-link" data-toggle="tab" href="component-tabs-component.html#linkOpt2" id="linkOpt-tab2">Another Link</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="active-tab32" class="tab-pane active" id="active32" role="tabpanel">
<p>Macaroon candy canes tootsie roll wafer lemon drops liquorice
                          jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton
                          candy jelly cake jelly-o sugar plum marshmallow. Dessert
                          cotton candy macaroon chocolate sugar plum cake donut.</p>
</div>
<div aria-expanded="false" aria-labelledby="link-tab32" class="tab-pane" id="link32" role="tabpanel">
<p>Chocolate bar gummies sesame snaps. Liquorice cake sesame
                          snaps cotton candy cake sweet brownie. Cotton candy candy
                          canes brownie. Biscuit pudding sesame snaps pudding pudding
                          sesame snaps biscuit tiramisu.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOpt1-tab2" class="tab-pane" id="dropdownOpt21" role="tabpanel">
<p>Fruitcake marshmallow donut wafer pastry chocolate topping
                          cake. Powder powder gummi bears jelly beans. Gingerbread
                          cake chocolate lollipop. Jelly oat cake pastry marshmallow
                          sesame snaps.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOpt2-tab2" class="tab-pane" id="dropdownOpt22" role="tabpanel">
<p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet
                          roll dragée topping cotton candy cake jelly beans. Pie
                          lemon drops sweet pastry candy canes chocolate cake bear
                          claw cotton candy wafer.</p>
</div>
<div aria-expanded="false" aria-labelledby="linkOpt-tab2" class="tab-pane" id="linkOpt2" role="tabpanel">
<p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies
                          cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread
                          powder chocolate cake icing. Cheesecake gummi bears ice
                          cream marzipan.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tab with line triangle</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-justified.nav-linetriangle</code> classes justified
                      bottom triangle tabs.</p>
<ul class="nav nav-tabs nav-linetriangle no-hover-bg nav-justified">
<li class="nav-item">
<a aria-controls="active3" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#active3" id="active-tab3">Active</a>
</li>
<li class="nav-item">
<a aria-controls="link3" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#link3" id="link-tab3">Link</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
								Dropdown
								</a>
<div class="dropdown-menu">
<a aria-controls="dropdownOpt31" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOpt31" id="dropdownOpt1-tab3">dropdown 1</a>
<a aria-controls="dropdownOpt32" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOpt32" id="dropdownOpt2-tab3">dropdown 2</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="linkOpt3" class="nav-link" data-toggle="tab" href="component-tabs-component.html#linkOpt3" id="linkOpt-tab3">Another Link</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="active-tab3" class="tab-pane active" id="active3" role="tabpanel">
<p>Macaroon candy canes tootsie roll wafer lemon drops liquorice
                          jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton
                          candy jelly cake jelly-o sugar plum marshmallow. Dessert
                          cotton candy macaroon chocolate sugar plum cake donut.</p>
</div>
<div aria-expanded="false" aria-labelledby="link-tab3" class="tab-pane" id="link3" role="tabpanel">
<p>Chocolate bar gummies sesame snaps. Liquorice cake sesame
                          snaps cotton candy cake sweet brownie. Cotton candy candy
                          canes brownie. Biscuit pudding sesame snaps pudding pudding
                          sesame snaps biscuit tiramisu.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOpt1-tab3" class="tab-pane" id="dropdownOpt31" role="tabpanel">
<p>Fruitcake marshmallow donut wafer pastry chocolate topping
                          cake. Powder powder gummi bears jelly beans. Gingerbread
                          cake chocolate lollipop. Jelly oat cake pastry marshmallow
                          sesame snaps.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOpt2-tab3" class="tab-pane" id="dropdownOpt32" role="tabpanel">
<p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet
                          roll dragée topping cotton candy cake jelly beans. Pie
                          lemon drops sweet pastry candy canes chocolate cake bear
                          claw cotton candy wafer.</p>
</div>
<div aria-expanded="false" aria-labelledby="linkOpt-tab3" class="tab-pane" id="linkOpt3" role="tabpanel">
<p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies
                          cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread
                          powder chocolate cake icing. Cheesecake gummi bears ice
                          cream marzipan.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Justified With Bottom Border end -->
<!-- Tabs with Icons start -->
<section id="tabs-with-icons">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Tabs with Icons</h4>
<p>Icon on left,right &amp; both side of the tab. Only icons tabs also
                available.
              </p>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Tabs</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav nav-tabs">
<li class="nav-item">
<a aria-controls="tabIcon1" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#tabIcon1" id="baseIcon-tab1"><i class="la la-play"></i> Tab 1</a>
</li>
<li class="nav-item">
<a aria-controls="tabIcon2" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabIcon2" id="baseIcon-tab2"><i class="la la-flag"></i> Tab 2</a>
</li>
<li class="nav-item">
<a aria-controls="tabIcon3" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabIcon3" id="baseIcon-tab3"><i class="la la-cog"></i> Tab 3</a>
</li>
<li class="nav-item">
<a class="nav-link disabled"><i class="la la-unlink"></i> Disabled</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="baseIcon-tab1" class="tab-pane active" id="tabIcon1" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="baseIcon-tab2" class="tab-pane" id="tabIcon2">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="baseIcon-tab3" class="tab-pane" id="tabIcon3">
<p>Biscuit ice cream halvah candy canes bear claw ice cream
                          cake chocolate bar donut. Toffee cotton candy liquorice.
                          Oat cake lemon drops gingerbread dessert caramels. Sweet
                          dessert jujubes powder sweet sesame snaps.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tabs with dropdown</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav nav-tabs">
<li class="nav-item">
<a aria-controls="homeIcon" aria-expanded="true" class="nav-link" data-toggle="tab" href="component-tabs-component.html#homeIcon" id="homeIcon-tab"><i class="la la-align-justify"></i> Home</a>
</li>
<li class="nav-item">
<a aria-controls="profileIcon" aria-expanded="false" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#profileIcon" id="profileIcon-tab"><i class="la la-header"></i> Profile</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
<i class="la la-bars"></i> Dropdown
                        </a>
<div class="dropdown-menu">
<a aria-controls="dropdownIcon1" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownIcon1" id="dropdownIcon1-tab">@fat</a>
<a aria-controls="dropdownIcon2" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownIcon2" id="dropdownIcon2-tab">@mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="about" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#about" id="aboutIcon-tab"><i class="la la-send-o"></i> About</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="homeIcon-tab" class="tab-pane" id="homeIcon" role="tabpanel">
<p>Candy canes donut chupa chups candy canes lemon drops oat
                          cake wafer. Cotton candy candy canes marzipan carrot cake.
                          Sesame snaps lemon drops candy marzipan donut brownie tootsie
                          roll. Icing croissant bonbon biscuit gummi bears.</p>
</div>
<div aria-expanded="false" aria-labelledby="profileIcon-tab" class="tab-pane active" id="profileIcon" role="tabpanel">
<p>Pudding candy canes sugar plum cookie chocolate cake powder
                          croissant. Carrot cake tiramisu danish candy cake muffin
                          croissant tart dessert. Tiramisu caramels candy canes chocolate
                          cake sweet roll liquorice icing cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownIcon1-tab" class="tab-pane" id="dropdownIcon1" role="tabpanel">
<p>Cake croissant lemon drops gummi bears carrot cake biscuit
                          cupcake croissant. Macaroon lemon drops muffin jelly sugar
                          plum chocolate cupcake danish icing. Soufflé tootsie roll
                          lemon drops sweet roll cake icing cookie halvah cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownIcon2-tab" class="tab-pane" id="dropdownIcon2" role="tabpanel">
<p>Chocolate croissant cupcake croissant jelly donut. Cheesecake
                          toffee apple pie chocolate bar biscuit tart croissant.
                          Lemon drops danish cookie. Oat cake macaroon icing tart
                          lollipop cookie sweet bear claw.</p>
</div>
<div aria-expanded="false" aria-labelledby="aboutIcon-tab" class="tab-pane" id="aboutIcon" role="tabpanel">
<p>Carrot cake dragée chocolate. Lemon drops ice cream wafer
                          gummies dragée. Chocolate bar liquorice cheesecake cookie
                          chupa chups marshmallow oat cake biscuit. Dessert toffee
                          fruitcake ice cream powder tootsie roll cake.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Tabs with Bottom Line</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav nav-tabs nav-top-border no-hover-bg">
<li class="nav-item">
<a aria-controls="tabIcon11" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#tabIcon11" id="baseIcon-tab11"><i class="la la-play"></i> Tab 1</a>
</li>
<li class="nav-item">
<a aria-controls="tabIcon12" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabIcon12" id="baseIcon-tab12"><i class="la la-flag"></i> Tab 2</a>
</li>
<li class="nav-item">
<a aria-controls="tabIcon13" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabIcon13" id="baseIcon-tab13"><i class="la la-cog"></i> Tab 3</a>
</li>
<li class="nav-item">
<a class="nav-link disabled"><i class="la la-unlink"></i> Disabled</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="baseIcon-tab11" class="tab-pane active" id="tabIcon11" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="baseIcon-tab12" class="tab-pane" id="tabIcon12">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="baseIcon-tab3" class="tab-pane" id="tabIcon13">
<p>Biscuit ice cream halvah candy canes bear claw ice cream
                          cake chocolate bar donut. Toffee cotton candy liquorice.
                          Oat cake lemon drops gingerbread dessert caramels. Sweet
                          dessert jujubes powder sweet sesame snaps.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tabs with dropdown &amp; top line</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav nav-tabs nav-top-border no-hover-bg">
<li class="nav-item">
<a aria-controls="homeIcon1" aria-expanded="true" class="nav-link" data-toggle="tab" href="component-tabs-component.html#homeIcon1" id="homeIcon-tab1"><i class="la la-align-justify"></i> Home</a>
</li>
<li class="nav-item">
<a aria-controls="profileIcon1" aria-expanded="false" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#profileIcon1" id="profileIcon-tab1"><i class="la la-header"></i> Profile</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
<i class="la la-bars"></i> Dropdown
                        </a>
<div class="dropdown-menu">
<a aria-controls="dropdownIcon01" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownIcon01" id="dropdownIcon2-tab1">@fat</a>
<a aria-controls="dropdownIcon02" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownIcon02" id="dropdownIcon2-tab2">@mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="aboutIcon1" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#aboutIcon1" id="aboutIcon1-tab"><i class="la la-send-o"></i> About</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="homeIcon-tab1" class="tab-pane" id="homeIcon1" role="tabpanel">
<p>Candy canes donut chupa chups candy canes lemon drops oat
                          cake wafer. Cotton candy candy canes marzipan carrot cake.
                          Sesame snaps lemon drops candy marzipan donut brownie tootsie
                          roll. Icing croissant bonbon biscuit gummi bears.</p>
</div>
<div aria-expanded="false" aria-labelledby="profileIcon-tab1" class="tab-pane active" id="profileIcon1" role="tabpanel">
<p>Pudding candy canes sugar plum cookie chocolate cake powder
                          croissant. Carrot cake tiramisu danish candy cake muffin
                          croissant tart dessert. Tiramisu caramels candy canes chocolate
                          cake sweet roll liquorice icing cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownIcon2-tab1" class="tab-pane" id="dropdownIcon01" role="tabpanel">
<p>Cake croissant lemon drops gummi bears carrot cake biscuit
                          cupcake croissant. Macaroon lemon drops muffin jelly sugar
                          plum chocolate cupcake danish icing. Soufflé tootsie roll
                          lemon drops sweet roll cake icing cookie halvah cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownIcon2-tab2" class="tab-pane" id="dropdownIcon02" role="tabpanel">
<p>Chocolate croissant cupcake croissant jelly donut. Cheesecake
                          toffee apple pie chocolate bar biscuit tart croissant.
                          Lemon drops danish cookie. Oat cake macaroon icing tart
                          lollipop cookie sweet bear claw.</p>
</div>
<div aria-expanded="false" aria-labelledby="aboutIcon1-tab" class="tab-pane" id="aboutIcon1" role="tabpanel">
<p>Carrot cake dragée chocolate. Lemon drops ice cream wafer
                          gummies dragée. Chocolate bar liquorice cheesecake cookie
                          chupa chups marshmallow oat cake biscuit. Dessert toffee
                          fruitcake ice cream powder tootsie roll cake.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Tabs with Bottom Line</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav nav-tabs nav-underline">
<li class="nav-item">
<a aria-controls="tabIcon21" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#tabIcon21" id="baseIcon-tab21"><i class="la la-play"></i> Tab 1</a>
</li>
<li class="nav-item">
<a aria-controls="tabIcon22" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabIcon22" id="baseIcon-tab22"><i class="la la-flag"></i> Tab 2</a>
</li>
<li class="nav-item">
<a aria-controls="tabIcon23" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabIcon23" id="baseIcon-tab23"><i class="la la-cog"></i> Tab 3</a>
</li>
<li class="nav-item">
<a class="nav-link disabled"><i class="la la-unlink"></i> Disabled</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="baseIcon-tab21" class="tab-pane active" id="tabIcon21" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="baseIcon-tab22" class="tab-pane" id="tabIcon22">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="baseIcon-tab23" class="tab-pane" id="tabIcon23">
<p>Biscuit ice cream halvah candy canes bear claw ice cream
                          cake chocolate bar donut. Toffee cotton candy liquorice.
                          Oat cake lemon drops gingerbread dessert caramels. Sweet
                          dessert jujubes powder sweet sesame snaps.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tabs with dropdown &amp; bottom line</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav nav-tabs nav-underline">
<li class="nav-item">
<a aria-controls="homeIcon11" aria-expanded="true" class="nav-link" data-toggle="tab" href="component-tabs-component.html#homeIcon11" id="homeIcon1-tab1"><i class="la la-align-justify"></i> Home</a>
</li>
<li class="nav-item">
<a aria-controls="profileIcon11" aria-expanded="false" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#profileIcon11" id="profileIcon1-tab1"><i class="la la-header"></i> Profile</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
<i class="la la-bars"></i> Dropdown
                        </a>
<div class="dropdown-menu">
<a aria-controls="dropdownIcon11" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownIcon11" id="dropdownIcon11-tab1">@fat</a>
<a aria-controls="dropdownIcon12" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownIcon12" id="dropdownIcon12-tab1">@mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="aboutIcon11" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#aboutIcon11" id="aboutIcon11-tab1"><i class="la la-send-o"></i> About</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="homeIcon1-tab1" class="tab-pane" id="homeIcon11" role="tabpanel">
<p>Candy canes donut chupa chups candy canes lemon drops oat
                          cake wafer. Cotton candy candy canes marzipan carrot cake.
                          Sesame snaps lemon drops candy marzipan donut brownie tootsie
                          roll. Icing croissant bonbon biscuit gummi bears.</p>
</div>
<div aria-expanded="false" aria-labelledby="profileIcon1-tab1" class="tab-pane active" id="profileIcon11" role="tabpanel">
<p>Pudding candy canes sugar plum cookie chocolate cake powder
                          croissant. Carrot cake tiramisu danish candy cake muffin
                          croissant tart dessert. Tiramisu caramels candy canes chocolate
                          cake sweet roll liquorice icing cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownIcon11-tab1" class="tab-pane" id="dropdownIcon11" role="tabpanel">
<p>Cake croissant lemon drops gummi bears carrot cake biscuit
                          cupcake croissant. Macaroon lemon drops muffin jelly sugar
                          plum chocolate cupcake danish icing. Soufflé tootsie roll
                          lemon drops sweet roll cake icing cookie halvah cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownIcon12-tab1" class="tab-pane" id="dropdownIcon12" role="tabpanel">
<p>Chocolate croissant cupcake croissant jelly donut. Cheesecake
                          toffee apple pie chocolate bar biscuit tart croissant.
                          Lemon drops danish cookie. Oat cake macaroon icing tart
                          lollipop cookie sweet bear claw.</p>
</div>
<div aria-expanded="false" aria-labelledby="aboutIcon11-tab1" class="tab-pane" id="aboutIcon11" role="tabpanel">
<p>Carrot cake dragée chocolate. Lemon drops ice cream wafer
                          gummies dragée. Chocolate bar liquorice cheesecake cookie
                          chupa chups marshmallow oat cake biscuit. Dessert toffee
                          fruitcake ice cream powder tootsie roll cake.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Tabs with Bottom Arrow</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav nav-tabs nav-linetriangle">
<li class="nav-item">
<a aria-controls="tabIcon31" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#tabIcon31" id="baseIcon-tab31"><i class="la la-play"></i> Tab 1</a>
</li>
<li class="nav-item">
<a aria-controls="tabIcon32" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabIcon32" id="baseIcon-tab32"><i class="la la-flag"></i> Tab 2</a>
</li>
<li class="nav-item">
<a aria-controls="tabIcon33" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabIcon33" id="baseIcon-tab33"><i class="la la-cog"></i> Tab 3</a>
</li>
<li class="nav-item">
<a class="nav-link disabled"><i class="la la-unlink"></i> Disabled</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="baseIcon-tab31" class="tab-pane active" id="tabIcon31" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="baseIcon-tab32" class="tab-pane" id="tabIcon32">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="baseIcon-tab33" class="tab-pane" id="tabIcon33">
<p>Biscuit ice cream halvah candy canes bear claw ice cream
                          cake chocolate bar donut. Toffee cotton candy liquorice.
                          Oat cake lemon drops gingerbread dessert caramels. Sweet
                          dessert jujubes powder sweet sesame snaps.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tabs with dropdown &amp; Bottom Arrow</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav nav-tabs nav-linetriangle">
<li class="nav-item">
<a aria-controls="homeIcon21" aria-expanded="true" class="nav-link" data-toggle="tab" href="component-tabs-component.html#homeIcon21" id="homeIcon2-tab1"><i class="la la-align-justify"></i> Home</a>
</li>
<li class="nav-item">
<a aria-controls="profileIcon21" aria-expanded="false" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#profileIcon21" id="profileIcon2-tab1"><i class="la la-header"></i> Profile</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
<i class="la la-bars"></i> Dropdown
                        </a>
<div class="dropdown-menu">
<a aria-controls="dropdownIcon21" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownIcon21" id="dropdownIcon21-tab1">@fat</a>
<a aria-controls="dropdownIcon22" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownIcon22" id="dropdownIcon22-tab1">@mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="aboutIcon21" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#aboutIcon21" id="aboutIcon21-tab1"><i class="la la-send-o"></i> About</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="homeIcon2-tab1" class="tab-pane" id="homeIcon21" role="tabpanel">
<p>Candy canes donut chupa chups candy canes lemon drops oat
                          cake wafer. Cotton candy candy canes marzipan carrot cake.
                          Sesame snaps lemon drops candy marzipan donut brownie tootsie
                          roll. Icing croissant bonbon biscuit gummi bears.</p>
</div>
<div aria-expanded="false" aria-labelledby="profileIcon2-tab1" class="tab-pane active" id="profileIcon21" role="tabpanel">
<p>Pudding candy canes sugar plum cookie chocolate cake powder
                          croissant. Carrot cake tiramisu danish candy cake muffin
                          croissant tart dessert. Tiramisu caramels candy canes chocolate
                          cake sweet roll liquorice icing cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownIcon21-tab1" class="tab-pane" id="dropdownIcon21" role="tabpanel">
<p>Cake croissant lemon drops gummi bears carrot cake biscuit
                          cupcake croissant. Macaroon lemon drops muffin jelly sugar
                          plum chocolate cupcake danish icing. Soufflé tootsie roll
                          lemon drops sweet roll cake icing cookie halvah cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownIcon22-tab1" class="tab-pane" id="dropdownIcon22" role="tabpanel">
<p>Chocolate croissant cupcake croissant jelly donut. Cheesecake
                          toffee apple pie chocolate bar biscuit tart croissant.
                          Lemon drops danish cookie. Oat cake macaroon icing tart
                          lollipop cookie sweet bear claw.</p>
</div>
<div aria-expanded="false" aria-labelledby="aboutIcon21-tab1" class="tab-pane" id="aboutIcon21" role="tabpanel">
<p>Carrot cake dragée chocolate. Lemon drops ice cream wafer
                          gummies dragée. Chocolate bar liquorice cheesecake cookie
                          chupa chups marshmallow oat cake biscuit. Dessert toffee
                          fruitcake ice cream powder tootsie roll cake.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Tabs with Icon Fall</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-iconfall</code> class for icon fall for active
                      state.
                    </p>
<ul class="nav nav-tabs nav-iconfall">
<li class="nav-item">
<a aria-controls="tabIcon41" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#tabIcon41" id="baseIcon-tab41"><i class="la la-play"></i> Tab 1</a>
</li>
<li class="nav-item">
<a aria-controls="tabIcon42" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabIcon42" id="baseIcon-tab42"><i class="la la-flag"></i> Tab 2</a>
</li>
<li class="nav-item">
<a aria-controls="tabIcon43" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabIcon43" id="baseIcon-tab43"><i class="la la-cog"></i> Tab 3</a>
</li>
<li class="nav-item">
<a class="nav-link disabled"><i class="la la-unlink"></i> Disabled</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="baseIcon-tab41" class="tab-pane active" id="tabIcon41" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="baseIcon-tab42" class="tab-pane" id="tabIcon42">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="baseIcon-tab43" class="tab-pane" id="tabIcon43">
<p>Biscuit ice cream halvah candy canes bear claw ice cream
                          cake chocolate bar donut. Toffee cotton candy liquorice.
                          Oat cake lemon drops gingerbread dessert caramels. Sweet
                          dessert jujubes powder sweet sesame snaps.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tabs with dropdown &amp; Icon Fall</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-iconfall</code> class for icon fall for active
                      state.
                    </p>
<ul class="nav nav-tabs nav-iconfall">
<li class="nav-item">
<a aria-controls="homeIcon31" aria-expanded="true" class="nav-link" data-toggle="tab" href="component-tabs-component.html#homeIcon31" id="homeIcon3-tab1"><i class="la la-align-justify"></i> Home</a>
</li>
<li class="nav-item">
<a aria-controls="profileIcon31" aria-expanded="false" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#profileIcon31" id="profileIcon3-tab1"><i class="la la-header"></i> Profile</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
<i class="la la-bars"></i> Dropdown
                        </a>
<div class="dropdown-menu">
<a aria-controls="dropdownIcon31" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownIcon31" id="dropdownIcon31-tab1">@fat</a>
<a aria-controls="dropdownIcon32" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownIcon32" id="dropdownIcon32-tab1">@mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="aboutIcon31" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#aboutIcon31" id="aboutIcon31-tab1"><i class="la la-send-o"></i> About</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="homeIcon3-tab1" class="tab-pane" id="homeIcon31" role="tabpanel">
<p>Candy canes donut chupa chups candy canes lemon drops oat
                          cake wafer. Cotton candy candy canes marzipan carrot cake.
                          Sesame snaps lemon drops candy marzipan donut brownie tootsie
                          roll. Icing croissant bonbon biscuit gummi bears.</p>
</div>
<div aria-expanded="false" aria-labelledby="profileIcon3-tab1" class="tab-pane active" id="profileIcon31" role="tabpanel">
<p>Pudding candy canes sugar plum cookie chocolate cake powder
                          croissant. Carrot cake tiramisu danish candy cake muffin
                          croissant tart dessert. Tiramisu caramels candy canes chocolate
                          cake sweet roll liquorice icing cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownIcon31-tab1" class="tab-pane" id="dropdownIcon31" role="tabpanel">
<p>Cake croissant lemon drops gummi bears carrot cake biscuit
                          cupcake croissant. Macaroon lemon drops muffin jelly sugar
                          plum chocolate cupcake danish icing. Soufflé tootsie roll
                          lemon drops sweet roll cake icing cookie halvah cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownIcon32-tab1" class="tab-pane" id="dropdownIcon32" role="tabpanel">
<p>Chocolate croissant cupcake croissant jelly donut. Cheesecake
                          toffee apple pie chocolate bar biscuit tart croissant.
                          Lemon drops danish cookie. Oat cake macaroon icing tart
                          lollipop cookie sweet bear claw.</p>
</div>
<div aria-expanded="false" aria-labelledby="aboutIcon31-tab1" class="tab-pane" id="aboutIcon31" role="tabpanel">
<p>Carrot cake dragée chocolate. Lemon drops ice cream wafer
                          gummies dragée. Chocolate bar liquorice cheesecake cookie
                          chupa chups marshmallow oat cake biscuit. Dessert toffee
                          fruitcake ice cream powder tootsie roll cake.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tabs with Only Icon</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-only-icon</code> class when you use only icons,
                      So that will increase font size.</p>
<ul class="nav nav-tabs nav-only-icon nav-top-border no-hover-bg">
<li class="nav-item">
<a aria-controls="tabOnlyIcon11" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#tabOnlyIcon11" id="baseOnlyIcon-tab11"><i class="la la-play"></i></a>
</li>
<li class="nav-item">
<a aria-controls="tabOnlyIcon12" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabOnlyIcon12" id="baseOnlyIcon-tab12"><i class="la la-flag"></i></a>
</li>
<li class="nav-item">
<a aria-controls="tabOnlyIcon13" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabOnlyIcon13" id="baseOnlyIcon-tab23"><i class="la la-cog"></i></a>
</li>
<li class="nav-item">
<a class="nav-link disabled"><i class="la la-unlink"></i></a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="baseOnlyIcon-tab11" class="tab-pane active" id="tabOnlyIcon11" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="baseOnlyIcon-tab12" class="tab-pane" id="tabOnlyIcon12">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="baseOnlyIcon-tab23" class="tab-pane" id="tabOnlyIcon13">
<p>Biscuit ice cream halvah candy canes bear claw ice cream
                          cake chocolate bar donut. Toffee cotton candy liquorice.
                          Oat cake lemon drops gingerbread dessert caramels. Sweet
                          dessert jujubes powder sweet sesame snaps.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tabs with dropdown &amp; top line</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-only-icon</code> class when you use only icons,
                      So that will increase font size.</p>
<ul class="nav nav-tabs nav-only-icon nav-top-border no-hover-bg">
<li class="nav-item">
<a aria-controls="homeOnlyIcon1" aria-expanded="true" class="nav-link" data-toggle="tab" href="component-tabs-component.html#homeOnlyIcon1" id="homeOnlyIcon-tab1"><i class="la la-align-justify"></i></a>
</li>
<li class="nav-item">
<a aria-controls="profileOnlyIcon1" aria-expanded="false" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#profileOnlyIcon1" id="profileOnlyIcon-tab1"><i class="la la-header"></i></a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
<i class="la la-bars"></i>
</a>
<div class="dropdown-menu">
<a aria-controls="dropdownOnlyIcon1" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOnlyIcon1" id="dropdownOnlyIcon1-tab">@fat</a>
<a aria-controls="dropdownOnlyIcon2" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOnlyIcon2" id="dropdownOnlyIcon2-tab">@mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="aboutOnlyIcon1" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#aboutOnlyIcon1" id="aboutOnlyIcon1-tab"><i class="la la-send-o"></i></a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="homeOnlyIcon-tab1" class="tab-pane" id="homeOnlyIcon1" role="tabpanel">
<p>Candy canes donut chupa chups candy canes lemon drops oat
                          cake wafer. Cotton candy candy canes marzipan carrot cake.
                          Sesame snaps lemon drops candy marzipan donut brownie tootsie
                          roll. Icing croissant bonbon biscuit gummi bears.</p>
</div>
<div aria-expanded="false" aria-labelledby="profileOnlyIcon-tab1" class="tab-pane active" id="profileOnlyIcon1" role="tabpanel">
<p>Pudding candy canes sugar plum cookie chocolate cake powder
                          croissant. Carrot cake tiramisu danish candy cake muffin
                          croissant tart dessert. Tiramisu caramels candy canes chocolate
                          cake sweet roll liquorice icing cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOnlyIcon1-tab" class="tab-pane" id="dropdownOnlyIcon1" role="tabpanel">
<p>Cake croissant lemon drops gummi bears carrot cake biscuit
                          cupcake croissant. Macaroon lemon drops muffin jelly sugar
                          plum chocolate cupcake danish icing. Soufflé tootsie roll
                          lemon drops sweet roll cake icing cookie halvah cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOnlyIcon2-tab" class="tab-pane" id="dropdownOnlyIcon2" role="tabpanel">
<p>Chocolate croissant cupcake croissant jelly donut. Cheesecake
                          toffee apple pie chocolate bar biscuit tart croissant.
                          Lemon drops danish cookie. Oat cake macaroon icing tart
                          lollipop cookie sweet bear claw.</p>
</div>
<div aria-expanded="false" aria-labelledby="aboutOnlyIcon1-tab" class="tab-pane" id="aboutOnlyIcon1" role="tabpanel">
<p>Carrot cake dragée chocolate. Lemon drops ice cream wafer
                          gummies dragée. Chocolate bar liquorice cheesecake cookie
                          chupa chups marshmallow oat cake biscuit. Dessert toffee
                          fruitcake ice cream powder tootsie roll cake.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Tabs with Icons end -->
<!-- Tabs with Icons start -->
<section id="justified-tabs-with-icons">
<div class="row">
<div class="col-12 mt-1">
<h4>Justified Tabs With Icon</h4>
<p>Use class <code>.nav-justified</code> for justified tabs.</p>
<hr/>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tab with Icon</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav nav-tabs nav-justified">
<li class="nav-item">
<a aria-controls="activeIcon" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#activeIcon" id="activeIcon-tab"><i class="ft-heart"></i> Active</a>
</li>
<li class="nav-item">
<a aria-controls="linkIcon" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#linkIcon" id="linkIcon-tab"><i class="ft-link"></i> Link</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
<i class="ft-anchor"></i> Dropdown
                        </a>
<div class="dropdown-menu">
<a aria-controls="dropdownOptIcon1" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOptIcon1" id="dropdownOptIcon1-tab">dropdown 1</a>
<a aria-controls="dropdownOptIcon2" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOptIcon2" id="dropdownOptIcon2-tab">dropdown 2</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="linkOptIcon" class="nav-link" data-toggle="tab" href="component-tabs-component.html#linkOptIcon" id="linkOptIcon-tab"><i class="ft-external-link"></i> Link</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="activeIcon-tab" class="tab-pane active" id="activeIcon" role="tabpanel">
<p>Macaroon candy canes tootsie roll wafer lemon drops liquorice
                          jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton
                          candy jelly cake jelly-o sugar plum marshmallow. Dessert
                          cotton candy macaroon chocolate sugar plum cake donut.</p>
</div>
<div aria-expanded="false" aria-labelledby="linkIcon-tab" class="tab-pane" id="linkIcon" role="tabpanel">
<p>Chocolate bar gummies sesame snaps. Liquorice cake sesame
                          snaps cotton candy cake sweet brownie. Cotton candy candy
                          canes brownie. Biscuit pudding sesame snaps pudding pudding
                          sesame snaps biscuit tiramisu.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOptIcon1-tab" class="tab-pane" id="dropdownOptIcon1" role="tabpanel">
<p>Fruitcake marshmallow donut wafer pastry chocolate topping
                          cake. Powder powder gummi bears jelly beans. Gingerbread
                          cake chocolate lollipop. Jelly oat cake pastry marshmallow
                          sesame snaps.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOptIcon2-tab" class="tab-pane" id="dropdownOptIcon2" role="tabpanel">
<p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet
                          roll dragée topping cotton candy cake jelly beans. Pie
                          lemon drops sweet pastry candy canes chocolate cake bear
                          claw cotton candy wafer.</p>
</div>
<div aria-expanded="false" aria-labelledby="linkOptIcon-tab" class="tab-pane" id="linkOptIcon" role="tabpanel">
<p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies
                          cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread
                          powder chocolate cake icing. Cheesecake gummi bears ice
                          cream marzipan.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Icon Tab with top line</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav nav-tabs nav-top-border no-hover-bg nav-justified">
<li class="nav-item">
<a aria-controls="activeIcon1" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#activeIcon1" id="activeIcon1-tab1"><i class="ft-heart"></i> Active</a>
</li>
<li class="nav-item">
<a aria-controls="linkIcon1" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#linkIcon1" id="linkIcon1-tab1"><i class="ft-link"></i> Link</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
<i class="ft-anchor"></i> Dropdown
                        </a>
<div class="dropdown-menu">
<a aria-controls="dropdownOptIcon11" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOptIcon11" id="dropdownOptIcon1-tab1">dropdown 1</a>
<a aria-controls="dropdownOptIcon12" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOptIcon12" id="dropdownOptIcon2-tab1">dropdown 2</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="linkIconOpt1" class="nav-link" data-toggle="tab" href="component-tabs-component.html#linkIconOpt1" id="linkIconOpt1-tab1"><i class="ft-external-link"></i> Link</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="activeIcon1-tab1" class="tab-pane active" id="activeIcon1" role="tabpanel">
<p>Macaroon candy canes tootsie roll wafer lemon drops liquorice
                          jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton
                          candy jelly cake jelly-o sugar plum marshmallow. Dessert
                          cotton candy macaroon chocolate sugar plum cake donut.</p>
</div>
<div aria-expanded="false" aria-labelledby="linkIcon1-tab1" class="tab-pane" id="linkIcon1" role="tabpanel">
<p>Chocolate bar gummies sesame snaps. Liquorice cake sesame
                          snaps cotton candy cake sweet brownie. Cotton candy candy
                          canes brownie. Biscuit pudding sesame snaps pudding pudding
                          sesame snaps biscuit tiramisu.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOptIcon1-tab1" class="tab-pane" id="dropdownOptIcon11" role="tabpanel">
<p>Fruitcake marshmallow donut wafer pastry chocolate topping
                          cake. Powder powder gummi bears jelly beans. Gingerbread
                          cake chocolate lollipop. Jelly oat cake pastry marshmallow
                          sesame snaps.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOptIcon2-tab1" class="tab-pane" id="dropdownOptIcon12" role="tabpanel">
<p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet
                          roll dragée topping cotton candy cake jelly beans. Pie
                          lemon drops sweet pastry candy canes chocolate cake bear
                          claw cotton candy wafer.</p>
</div>
<div aria-expanded="false" aria-labelledby="linkIconOpt1-tab1" class="tab-pane" id="linkIconOpt1" role="tabpanel">
<p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies
                          cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread
                          powder chocolate cake icing. Cheesecake gummi bears ice
                          cream marzipan.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Icon Tab with bottom line</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav nav-tabs nav-underline nav-justified">
<li class="nav-item">
<a aria-controls="activeIcon12" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#activeIcon12" id="activeIcon12-tab1"><i class="ft-heart"></i> Active</a>
</li>
<li class="nav-item">
<a aria-controls="linkIcon12" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#linkIcon12" id="linkIcon12-tab1"><i class="ft-link"></i> Link</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
<i class="ft-anchor"></i> Dropdown
                        </a>
<div class="dropdown-menu">
<a aria-controls="dropdownOptIcon21" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOptIcon21" id="dropdownOptIcon21-tab1">dropdown 1</a>
<a aria-controls="dropdownOptIcon22" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOptIcon22" id="dropdownOptIcon22-tab1">dropdown 2</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="linkIconOpt11" class="nav-link" data-toggle="tab" href="component-tabs-component.html#linkIconOpt11" id="linkIconOpt11-tab1"><i class="ft-external-link"></i> Link</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="activeIcon12-tab1" class="tab-pane active" id="activeIcon12" role="tabpanel">
<p>Macaroon candy canes tootsie roll wafer lemon drops liquorice
                          jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton
                          candy jelly cake jelly-o sugar plum marshmallow. Dessert
                          cotton candy macaroon chocolate sugar plum cake donut.</p>
</div>
<div aria-expanded="false" aria-labelledby="linkIcon12-tab1" class="tab-pane" id="linkIcon12" role="tabpanel">
<p>Chocolate bar gummies sesame snaps. Liquorice cake sesame
                          snaps cotton candy cake sweet brownie. Cotton candy candy
                          canes brownie. Biscuit pudding sesame snaps pudding pudding
                          sesame snaps biscuit tiramisu.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOptIcon21-tab1" class="tab-pane" id="dropdownOptIcon21" role="tabpanel">
<p>Fruitcake marshmallow donut wafer pastry chocolate topping
                          cake. Powder powder gummi bears jelly beans. Gingerbread
                          cake chocolate lollipop. Jelly oat cake pastry marshmallow
                          sesame snaps.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOptIcon22-tab1" class="tab-pane" id="dropdownOptIcon22" role="tabpanel">
<p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet
                          roll dragée topping cotton candy cake jelly beans. Pie
                          lemon drops sweet pastry candy canes chocolate cake bear
                          claw cotton candy wafer.</p>
</div>
<div aria-expanded="false" aria-labelledby="linkIconOpt11-tab1" class="tab-pane" id="linkIconOpt11" role="tabpanel">
<p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies
                          cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread
                          powder chocolate cake icing. Cheesecake gummi bears ice
                          cream marzipan.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Icon Tab with bottom Arrow</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav nav-tabs nav-linetriangle nav-justified">
<li class="nav-item">
<a aria-controls="activeIcon22" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#activeIcon22" id="activeIcon22-tab1"><i class="ft-heart"></i> Active</a>
</li>
<li class="nav-item">
<a aria-controls="linkIcon22" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#linkIcon22" id="linkIcon22-tab1"><i class="ft-link"></i> Link</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
<i class="ft-anchor"></i> Dropdown
                        </a>
<div class="dropdown-menu">
<a aria-controls="dropdownOptIcon31" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOptIcon31" id="dropdownOptIcon31-tab1">dropdown 1</a>
<a aria-controls="dropdownOptIcon32" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOptIcon32" id="dropdownOptIcon32-tab1">dropdown 2</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="linkIconOpt21" class="nav-link" data-toggle="tab" href="component-tabs-component.html#linkIconOpt21" id="linkIconOpt21-tab1"><i class="ft-external-link"></i> Link</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="activeIcon22-tab1" class="tab-pane active" id="activeIcon22" role="tabpanel">
<p>Macaroon candy canes tootsie roll wafer lemon drops liquorice
                          jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton
                          candy jelly cake jelly-o sugar plum marshmallow. Dessert
                          cotton candy macaroon chocolate sugar plum cake donut.</p>
</div>
<div aria-expanded="false" aria-labelledby="linkIcon22-tab1" class="tab-pane" id="linkIcon22" role="tabpanel">
<p>Chocolate bar gummies sesame snaps. Liquorice cake sesame
                          snaps cotton candy cake sweet brownie. Cotton candy candy
                          canes brownie. Biscuit pudding sesame snaps pudding pudding
                          sesame snaps biscuit tiramisu.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOptIcon31-tab1" class="tab-pane" id="dropdownOptIcon31" role="tabpanel">
<p>Fruitcake marshmallow donut wafer pastry chocolate topping
                          cake. Powder powder gummi bears jelly beans. Gingerbread
                          cake chocolate lollipop. Jelly oat cake pastry marshmallow
                          sesame snaps.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOptIcon32-tab1" class="tab-pane" id="dropdownOptIcon32" role="tabpanel">
<p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet
                          roll dragée topping cotton candy cake jelly beans. Pie
                          lemon drops sweet pastry candy canes chocolate cake bear
                          claw cotton candy wafer.</p>
</div>
<div aria-expanded="false" aria-labelledby="linkIconOpt21-tab1" class="tab-pane" id="linkIconOpt21" role="tabpanel">
<p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies
                          cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread
                          powder chocolate cake icing. Cheesecake gummi bears ice
                          cream marzipan.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tab with Icon Fall</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-iconfall</code> class for icon fall for active
                      state.
                    </p>
<ul class="nav nav-tabs nav-iconfall nav-justified">
<li class="nav-item">
<a aria-controls="activeIcon32" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#activeIcon32" id="activeIcon32-tab1"><i class="ft-heart"></i> Active</a>
</li>
<li class="nav-item">
<a aria-controls="linkIcon32" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#linkIcon32" id="linkIcon32-tab1"><i class="ft-link"></i> Link</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
<i class="ft-anchor"></i> Dropdown
                        </a>
<div class="dropdown-menu">
<a aria-controls="dropdownOptIcon41" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOptIcon41" id="dropdownOptIcon41-tab1">dropdown 1</a>
<a aria-controls="dropdownOptIcon42" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOptIcon42" id="dropdownOptIcon42-tab1">dropdown 2</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="linkIconOpt31" class="nav-link" data-toggle="tab" href="component-tabs-component.html#linkIconOpt31" id="linkIconOpt31-tab1"><i class="ft-external-link"></i> Link</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="activeIcon32-tab1" class="tab-pane active" id="activeIcon32" role="tabpanel">
<p>Macaroon candy canes tootsie roll wafer lemon drops liquorice
                          jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton
                          candy jelly cake jelly-o sugar plum marshmallow. Dessert
                          cotton candy macaroon chocolate sugar plum cake donut.</p>
</div>
<div aria-expanded="false" aria-labelledby="linkIcon32-tab1" class="tab-pane" id="linkIcon32" role="tabpanel">
<p>Chocolate bar gummies sesame snaps. Liquorice cake sesame
                          snaps cotton candy cake sweet brownie. Cotton candy candy
                          canes brownie. Biscuit pudding sesame snaps pudding pudding
                          sesame snaps biscuit tiramisu.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOptIcon41-tab1" class="tab-pane" id="dropdownOptIcon41" role="tabpanel">
<p>Fruitcake marshmallow donut wafer pastry chocolate topping
                          cake. Powder powder gummi bears jelly beans. Gingerbread
                          cake chocolate lollipop. Jelly oat cake pastry marshmallow
                          sesame snaps.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOptIcon42-tab1" class="tab-pane" id="dropdownOptIcon42" role="tabpanel">
<p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet
                          roll dragée topping cotton candy cake jelly beans. Pie
                          lemon drops sweet pastry candy canes chocolate cake bear
                          claw cotton candy wafer.</p>
</div>
<div aria-expanded="false" aria-labelledby="linkIconOpt31-tab1" class="tab-pane" id="linkIconOpt31" role="tabpanel">
<p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies
                          cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread
                          powder chocolate cake icing. Cheesecake gummi bears ice
                          cream marzipan.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Icon Tab with top line</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-only-icon</code> class when you use only icons,
                      So that will increase font size.</p>
<ul class="nav nav-tabs nav-only-icon nav-top-border no-hover-bg nav-justified">
<li class="nav-item">
<a aria-controls="activeOnlyIcon1" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#activeOnlyIcon1" id="activeOnlyIcon1-tab1"><i class="ft-heart"></i></a>
</li>
<li class="nav-item">
<a aria-controls="linkOnlyIcon1" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#linkOnlyIcon1" id="linkOnlyIcon1-tab1"><i class="ft-link"></i></a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
<i class="ft-anchor"></i>
</a>
<div class="dropdown-menu">
<a aria-controls="dropdownOptOnlyIcon11" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOptOnlyIcon11" id="dropdownOptOnlyIcon1-tab1">dropdown 1</a>
<a aria-controls="dropdownOptOnlyIcon12" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOptOnlyIcon12" id="dropdownOptOnlyIcon2-tab1">dropdown 2</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="linkOnlyIconOpt1" class="nav-link" data-toggle="tab" href="component-tabs-component.html#linkOnlyIconOpt1" id="linkOnlyIconOpt1-tab1"><i class="ft-external-link"></i></a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="activeOnlyIcon1-tab1" class="tab-pane active" id="activeOnlyIcon1" role="tabpanel">
<p>Macaroon candy canes tootsie roll wafer lemon drops liquorice
                          jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton
                          candy jelly cake jelly-o sugar plum marshmallow. Dessert
                          cotton candy macaroon chocolate sugar plum cake donut.</p>
</div>
<div aria-expanded="false" aria-labelledby="linkOnlyIcon1-tab1" class="tab-pane" id="linkOnlyIcon1" role="tabpanel">
<p>Chocolate bar gummies sesame snaps. Liquorice cake sesame
                          snaps cotton candy cake sweet brownie. Cotton candy candy
                          canes brownie. Biscuit pudding sesame snaps pudding pudding
                          sesame snaps biscuit tiramisu.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOptOnlyIcon1-tab1" class="tab-pane" id="dropdownOptOnlyIcon11" role="tabpanel">
<p>Fruitcake marshmallow donut wafer pastry chocolate topping
                          cake. Powder powder gummi bears jelly beans. Gingerbread
                          cake chocolate lollipop. Jelly oat cake pastry marshmallow
                          sesame snaps.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOptOnlyIcon2-tab1" class="tab-pane" id="dropdownOptOnlyIcon12" role="tabpanel">
<p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet
                          roll dragée topping cotton candy cake jelly beans. Pie
                          lemon drops sweet pastry candy canes chocolate cake bear
                          claw cotton candy wafer.</p>
</div>
<div aria-expanded="false" aria-labelledby="linkOnlyIconOpt1-tab1" class="tab-pane" id="linkOnlyIconOpt1" role="tabpanel">
<p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies
                          cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread
                          powder chocolate cake icing. Cheesecake gummi bears ice
                          cream marzipan.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Tabs with Icons end -->
<!-- Tabs with Labels & Pills start -->
<section id="tabs-with-labels-pills">
<div class="row">
<div class="col-12 mt-1">
<h4>Tabs with Labels &amp; Pills</h4>
<p>Labels &amp; pills on left &amp; right side of the tab.</p>
<hr/>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tabs with label</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>You can also use <code>.badge.badge-COLOR</code> classes to add
                      label to the tab.</p>
<ul class="nav nav-tabs">
<li class="nav-item">
<a aria-controls="tabLable1" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#tabLable1" id="baseLable-tab1">
<span class="badge badge-default badge-success">New</span> Tab 1</a>
</li>
<li class="nav-item">
<a aria-controls="tabLable2" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabLable2" id="baseLable-tab2">Tab 2</a>
</li>
<li class="nav-item">
<a aria-controls="tabLable3" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabLable3" id="baseLable-tab3">
<span class="badge badge-default badge-info float-right">info</span> Tab 3 </a>
</li>
<li class="nav-item">
<a class="nav-link disabled"><i class="ft-link-2"></i> Disabled</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="baseLable-tab1" class="tab-pane active" id="tabLable1" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="baseLable-tab2" class="tab-pane" id="tabLable2">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="baseLable-tab3" class="tab-pane" id="tabLable3">
<p>Biscuit ice cream halvah candy canes bear claw ice cream
                          cake chocolate bar donut. Toffee cotton candy liquorice.
                          Oat cake lemon drops gingerbread dessert caramels. Sweet
                          dessert jujubes powder sweet sesame snaps.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tabs with dropdown</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>You can also use <code>.badge.badge-COLOR</code> classes to add
                      label to the tab.</p>
<ul class="nav nav-tabs">
<li class="nav-item">
<a aria-controls="homeLable" aria-expanded="true" class="nav-link" data-toggle="tab" href="component-tabs-component.html#homeLable" id="homeLable-tab">
<span class="badge badge-default badge-danger">bug</span> Home</a>
</li>
<li class="nav-item">
<a aria-controls="profileLable" aria-expanded="false" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#profileLable" id="profileLable-tab">
<span class="badge badge-default badge-primary float-right">latest</span> Profile </a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
								Dropdown
								</a>
<div class="dropdown-menu">
<a aria-controls="dropdownLable1" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownLable1" id="dropdownLable1-tab">@fat</a>
<a aria-controls="dropdownLable2" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownLable2" id="dropdownLable2-tab">@mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="aboutLable" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#aboutLable" id="aboutLable-tab">About</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="homeLable-tab" class="tab-pane" id="homeLable" role="tabpanel">
<p>Candy canes donut chupa chups candy canes lemon drops oat
                          cake wafer. Cotton candy candy canes marzipan carrot cake.
                          Sesame snaps lemon drops candy marzipan donut brownie tootsie
                          roll. Icing croissant bonbon biscuit gummi bears.</p>
</div>
<div aria-expanded="false" aria-labelledby="profileLable-tab" class="tab-pane active" id="profileLable" role="tabpanel">
<p>Pudding candy canes sugar plum cookie chocolate cake powder
                          croissant. Carrot cake tiramisu danish candy cake muffin
                          croissant tart dessert. Tiramisu caramels candy canes chocolate
                          cake sweet roll liquorice icing cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownLable1-tab" class="tab-pane" id="dropdownLable1" role="tabpanel">
<p>Cake croissant lemon drops gummi bears carrot cake biscuit
                          cupcake croissant. Macaroon lemon drops muffin jelly sugar
                          plum chocolate cupcake danish icing. Soufflé tootsie roll
                          lemon drops sweet roll cake icing cookie halvah cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownLable2-tab" class="tab-pane" id="dropdownLable2" role="tabpanel">
<p>Chocolate croissant cupcake croissant jelly donut. Cheesecake
                          toffee apple pie chocolate bar biscuit tart croissant.
                          Lemon drops danish cookie. Oat cake macaroon icing tart
                          lollipop cookie sweet bear claw.</p>
</div>
<div aria-expanded="false" aria-labelledby="aboutLable-tab" class="tab-pane" id="aboutLable" role="tabpanel">
<p>Carrot cake dragée chocolate. Lemon drops ice cream wafer
                          gummies dragée. Chocolate bar liquorice cheesecake cookie
                          chupa chups marshmallow oat cake biscuit. Dessert toffee
                          fruitcake ice cream powder tootsie roll cake.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tabs with pills</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>You can also use <code>.badge.badge-pill.badge-COLOR</code> classes
                      to add label pill to the tab.</p>
<ul class="nav nav-tabs">
<li class="nav-item">
<a aria-controls="tabLable11" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#tabLable11" id="baseLable1-tab1">
<span class="badge badge-pill badge-glow badge-default badge-success">3</span> Tab 1</a>
</li>
<li class="nav-item">
<a aria-controls="tabLable12" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabLable12" id="baseLable1-tab2">Tab 2<span class="badge badge-pill badge-glow badge-default badge-warning float-right">2</span></a>
</li>
<li class="nav-item">
<a aria-controls="tabLable13" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabLable13" id="baseLable1-tab3">
<span class="badge badge-pill badge-glow badge-default badge-info float-right">5</span> Tab 3 </a>
</li>
<li class="nav-item">
<a class="nav-link disabled"><i class="ft-link-2ft-link-2ft-link-2ft-link-2ft-link-2ft-link-2ft-link-2ft-link-2"></i> Disabled</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="baseLable1-tab1" class="tab-pane active" id="tabLable11" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="baseLable1-tab2" class="tab-pane" id="tabLable12">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="baseLable1-tab3" class="tab-pane" id="tabLable13">
<p>Biscuit ice cream halvah candy canes bear claw ice cream
                          cake chocolate bar donut. Toffee cotton candy liquorice.
                          Oat cake lemon drops gingerbread dessert caramels. Sweet
                          dessert jujubes powder sweet sesame snaps.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tabs with dropdown</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>You can also use <code>.badge.badge-pill.badge-COLOR</code> classes
                      to add label pill to the tab.</p>
<ul class="nav nav-tabs">
<li class="nav-item">
<a aria-controls="homeLable1" aria-expanded="true" class="nav-link" data-toggle="tab" href="component-tabs-component.html#homeLable1" id="homeLable1-tab1">
<span class="badge badge-pill badge-glow badge-default badge-danger">4</span> Home</a>
</li>
<li class="nav-item">
<a aria-controls="profileLable1" aria-expanded="false" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#profileLable1" id="profileLable1-tab1">
<span class="badge badge-pill badge-glow badge-default badge-primary float-right">3</span> Profile </a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
<span class="badge badge-pill badge-glow badge-default badge-success">2</span> Dropdown
                        </a>
<div class="dropdown-menu">
<a aria-controls="dropdownLable11" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownLable11" id="dropdownLable11-tab">@fat</a>
<a aria-controls="dropdownLable12" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownLable12" id="dropdownLable12-tab">@mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="aboutLable1" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#aboutLable1" id="aboutLable1-tab1">
<span class="badge badge-pill badge-glow badge-default badge-warning">3</span> About</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="homeLable1-tab1" class="tab-pane" id="homeLable1" role="tabpanel">
<p>Candy canes donut chupa chups candy canes lemon drops oat
                          cake wafer. Cotton candy candy canes marzipan carrot cake.
                          Sesame snaps lemon drops candy marzipan donut brownie tootsie
                          roll. Icing croissant bonbon biscuit gummi bears.</p>
</div>
<div aria-expanded="false" aria-labelledby="profileLable1-tab1" class="tab-pane active" id="profileLable1" role="tabpanel">
<p>Pudding candy canes sugar plum cookie chocolate cake powder
                          croissant. Carrot cake tiramisu danish candy cake muffin
                          croissant tart dessert. Tiramisu caramels candy canes chocolate
                          cake sweet roll liquorice icing cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownLable11-tab" class="tab-pane" id="dropdownLable11" role="tabpanel">
<p>Cake croissant lemon drops gummi bears carrot cake biscuit
                          cupcake croissant. Macaroon lemon drops muffin jelly sugar
                          plum chocolate cupcake danish icing. Soufflé tootsie roll
                          lemon drops sweet roll cake icing cookie halvah cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownLable12-tab" class="tab-pane" id="dropdownLable12" role="tabpanel">
<p>Chocolate croissant cupcake croissant jelly donut. Cheesecake
                          toffee apple pie chocolate bar biscuit tart croissant.
                          Lemon drops danish cookie. Oat cake macaroon icing tart
                          lollipop cookie sweet bear claw.</p>
</div>
<div aria-expanded="false" aria-labelledby="aboutLable1-tab1" class="tab-pane" id="aboutLable1" role="tabpanel">
<p>Carrot cake dragée chocolate. Lemon drops ice cream wafer
                          gummies dragée. Chocolate bar liquorice cheesecake cookie
                          chupa chups marshmallow oat cake biscuit. Dessert toffee
                          fruitcake ice cream powder tootsie roll cake.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Justified Tab with Label</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>You can also use <code>.nav-justified.badge.badge-COLOR</code>                      classes to add label to justified tab.</p>
<ul class="nav nav-tabs nav-justified">
<li class="nav-item">
<a aria-controls="activeLable" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#activeLable" id="activeLable-tab">
<span class="badge badge-default badge-success">new</span> Active</a>
</li>
<li class="nav-item">
<a aria-controls="linkLable" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#linkLable" id="linkLable-tab">Link </a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
								Dropdown
								</a>
<div class="dropdown-menu">
<a aria-controls="dropdownOptLable1" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOptLable1" id="dropdownOptLable1-tab">dropdown 1</a>
<a aria-controls="dropdownOptLable2" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOptLable2" id="dropdownOptLable2-tab">dropdown 2</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="linkOptLable" class="nav-link" data-toggle="tab" href="component-tabs-component.html#linkOptLable" id="linkOptLable-tab">
<span class="badge badge-default badge-danger">more</span> Link </a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="activeLable-tab" class="tab-pane active" id="activeLable" role="tabpanel">
<p>Macaroon candy canes tootsie roll wafer lemon drops liquorice
                          jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton
                          candy jelly cake jelly-o sugar plum marshmallow. Dessert
                          cotton candy macaroon chocolate sugar plum cake donut.</p>
</div>
<div aria-expanded="false" aria-labelledby="linkLable-tab" class="tab-pane" id="linkLable" role="tabpanel">
<p>Chocolate bar gummies sesame snaps. Liquorice cake sesame
                          snaps cotton candy cake sweet brownie. Cotton candy candy
                          canes brownie. Biscuit pudding sesame snaps pudding pudding
                          sesame snaps biscuit tiramisu.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOptLable1-tab" class="tab-pane" id="dropdownOptLable1" role="tabpanel">
<p>Fruitcake marshmallow donut wafer pastry chocolate topping
                          cake. Powder powder gummi bears jelly beans. Gingerbread
                          cake chocolate lollipop. Jelly oat cake pastry marshmallow
                          sesame snaps.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOptLable2-tab" class="tab-pane" id="dropdownOptLable2" role="tabpanel">
<p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet
                          roll dragée topping cotton candy cake jelly beans. Pie
                          lemon drops sweet pastry candy canes chocolate cake bear
                          claw cotton candy wafer.</p>
</div>
<div aria-expanded="false" aria-labelledby="linkOptLable-tab" class="tab-pane" id="linkOptLable" role="tabpanel">
<p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies
                          cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread
                          powder chocolate cake icing. Cheesecake gummi bears ice
                          cream marzipan.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Justified Tab with pills</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>You can also use <code>.nav-justified.badge.badge-pill.badge-COLOR</code>                      classes to add label pill to justified tab.</p>
<ul class="nav nav-tabs nav-justified">
<li class="nav-item">
<a aria-controls="activeLable1" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#activeLable1" id="activeLable1-tab1">
<span class="badge badge-pill badge-glow badge-default badge-success">2</span> Active</a>
</li>
<li class="nav-item">
<a aria-controls="linkLable1" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#linkLable1" id="linkLable1-tab1">
<span class="badge badge-pill badge-glow badge-default badge-info float-right">1</span> Link </a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" role="button">
<span class="badge badge-pill badge-glow badge-default badge-danger">3</span> Dropdown
                        </a>
<div class="dropdown-menu">
<a aria-controls="dropdownOptLable11" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOptLable11" id="dropdownOptLable11-tab">dropdown 1</a>
<a aria-controls="dropdownOptLable12" aria-expanded="true" class="dropdown-item" data-toggle="tab" href="component-tabs-component.html#dropdownOptLable12" id="dropdownOptLable12-tab">dropdown 2</a>
</div>
</li>
<li class="nav-item">
<a aria-controls="linkOptLable1" class="nav-link" data-toggle="tab" href="component-tabs-component.html#linkOptLable1" id="linkOptLable1-tab1">
<span class="badge badge-pill badge-glow badge-default badge-primary float-right">5</span> Link </a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="activeLable1-tab1" class="tab-pane active" id="activeLable1" role="tabpanel">
<p>Macaroon candy canes tootsie roll wafer lemon drops liquorice
                          jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton
                          candy jelly cake jelly-o sugar plum marshmallow. Dessert
                          cotton candy macaroon chocolate sugar plum cake donut.</p>
</div>
<div aria-expanded="false" aria-labelledby="linkLable1-tab1" class="tab-pane" id="linkLable1" role="tabpanel">
<p>Chocolate bar gummies sesame snaps. Liquorice cake sesame
                          snaps cotton candy cake sweet brownie. Cotton candy candy
                          canes brownie. Biscuit pudding sesame snaps pudding pudding
                          sesame snaps biscuit tiramisu.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOptLable11-tab" class="tab-pane" id="dropdownOptLable11" role="tabpanel">
<p>Fruitcake marshmallow donut wafer pastry chocolate topping
                          cake. Powder powder gummi bears jelly beans. Gingerbread
                          cake chocolate lollipop. Jelly oat cake pastry marshmallow
                          sesame snaps.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOptLable12-tab" class="tab-pane" id="dropdownOptLable12" role="tabpanel">
<p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet
                          roll dragée topping cotton candy cake jelly beans. Pie
                          lemon drops sweet pastry candy canes chocolate cake bear
                          claw cotton candy wafer.</p>
</div>
<div aria-expanded="false" aria-labelledby="linkOptLable1-tab1" class="tab-pane" id="linkOptLable1" role="tabpanel">
<p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies
                          cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread
                          powder chocolate cake icing. Cheesecake gummi bears ice
                          cream marzipan.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Tabs with Labels & Pills end -->
<!-- Vertical Tabs start -->
<section id="vertical-tabs">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Vertical Tabs</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Vertical Left Tabs</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Wrap tabs and tab content with <code>.nav-vertical</code> class.
                      To add left navigation use <code>.nav-left</code> class to
                      <code>.nav.nav-tabs</code>.</p>
<div class="nav-vertical">
<ul class="nav nav-tabs nav-left flex-column">
<li class="nav-item">
<a aria-controls="tabVerticalLeft1" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#tabVerticalLeft1" id="baseVerticalLeft-tab1">Tab 1</a>
</li>
<li class="nav-item">
<a aria-controls="tabVerticalLeft2" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabVerticalLeft2" id="baseVerticalLeft-tab2">Tab 2</a>
</li>
<li class="nav-item">
<a aria-controls="tabVerticalLeft3" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabVerticalLeft3" id="baseVerticalLeft-tab3">Tab 3 </a>
</li>
</ul>
<div class="tab-content px-1">
<div aria-expanded="true" aria-labelledby="baseVerticalLeft-tab1" class="tab-pane active" id="tabVerticalLeft1" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                            beans. Icing halvah chocolate cake carrot cake. Jelly
                            beans carrot cake marshmallow gingerbread chocolate cake.
                            Gummies cupcake croissant.</p>
</div>
<div aria-labelledby="baseVerticalLeft-tab2" class="tab-pane" id="tabVerticalLeft2">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                            pastry cotton candy oat cake fruitcake jelly chupa chups.
                            Pudding caramels pastry powder cake soufflé wafer caramels.
                            Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="baseVerticalLeft-tab3" class="tab-pane" id="tabVerticalLeft3">
<p>Biscuit ice cream halvah candy canes bear claw ice cream
                            cake chocolate bar donut. Toffee cotton candy liquorice.
                            Oat cake lemon drops gingerbread dessert caramels. Sweet
                            dessert jujubes powder sweet sesame snaps.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Vertical Right Tabs</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Wrap tabs and tab content with <code>.nav-vertical</code> class.
                      To add right navigation use <code>.nav-right</code> class to
                      <code>.nav.nav-tabs</code>.</p>
<div class="nav-vertical">
<ul class="nav nav-tabs nav-right flex-column">
<li class="nav-item">
<a aria-controls="tabVerticalRight1" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#tabVerticalRight1" id="baseVerticalRight-tab1">Tab 1</a>
</li>
<li class="nav-item">
<a aria-controls="tabVerticalRight2" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabVerticalRight2" id="baseVerticalRight-tab2">Tab 2</a>
</li>
<li class="nav-item">
<a aria-controls="tabVerticalRight3" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabVerticalRight3" id="baseVerticalRight-tab3">Tab 3 </a>
</li>
</ul>
<div class="tab-content px-1">
<div aria-expanded="true" aria-labelledby="baseVerticalRight-tab1" class="tab-pane active" id="tabVerticalRight1" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                            beans. Icing halvah chocolate cake carrot cake. Jelly
                            beans carrot cake marshmallow gingerbread chocolate cake.
                            Gummies cupcake croissant.</p>
</div>
<div aria-labelledby="baseVerticalRight-tab2" class="tab-pane" id="tabVerticalRight2">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                            pastry cotton candy oat cake fruitcake jelly chupa chups.
                            Pudding caramels pastry powder cake soufflé wafer caramels.
                            Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="baseVerticalRight-tab3" class="tab-pane" id="tabVerticalRight3">
<p>Biscuit ice cream halvah candy canes bear claw ice cream
                            cake chocolate bar donut. Toffee cotton candy liquorice.
                            Oat cake lemon drops gingerbread dessert caramels. Sweet
                            dessert jujubes powder sweet sesame snaps.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tabs with Left Border</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Wrap tabs and tab content with <code>.nav-vertical</code> class.
                      To add left navigation use <code>.nav-left</code> &amp; use
                      <code>nav-border-left</code>class to <code>.nav.nav-tabs</code>                      for leftside border effect to tab.</p>
<div class="nav-vertical">
<ul class="nav nav-tabs nav-left nav-border-left">
<li class="nav-item">
<a aria-controls="tabVerticalLeft11" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#tabVerticalLeft11" id="baseVerticalLeft1-tab1">Home</a>
</li>
<li class="nav-item">
<a aria-controls="tabVerticalLeft12" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabVerticalLeft12" id="baseVerticalLeft1-tab2">Profile</a>
</li>
<li class="nav-item">
<a aria-controls="tabVerticalLeft13" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabVerticalLeft13" id="baseVerticalLeft1-tab3">About</a>
</li>
</ul>
<div class="tab-content px-1">
<div aria-expanded="true" aria-labelledby="baseVerticalLeft1-tab1" class="tab-pane active" id="tabVerticalLeft11" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                            beans. Icing halvah chocolate cake carrot cake. Jelly
                            beans carrot cake marshmallow gingerbread chocolate cake.
                            Gummies cupcake croissant.</p>
</div>
<div aria-labelledby="baseVerticalLeft1-tab2" class="tab-pane" id="tabVerticalLeft12">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                            pastry cotton candy oat cake fruitcake jelly chupa chups.
                            Pudding caramels pastry powder cake soufflé wafer caramels.
                            Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="baseVerticalLeft1-tab3" class="tab-pane" id="tabVerticalLeft13">
<p>Biscuit ice cream halvah candy canes bear claw ice cream
                            cake chocolate bar donut. Toffee cotton candy liquorice.
                            Oat cake lemon drops gingerbread dessert caramels. Sweet
                            dessert jujubes powder sweet sesame snaps.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tabs with Right Border</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Wrap tabs and tab content with <code>.nav-vertical</code> class.
                      To add right navigation use <code>.nav-right</code> &amp; use
                      <code>nav-border-right</code>class to <code>.nav.nav-tabs</code>                      for leftside border effect to tab.</p>
<div class="nav-vertical">
<ul class="nav nav-tabs nav-right nav-border-right">
<li class="nav-item">
<a aria-controls="tabVerticalRight11" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#tabVerticalRight11" id="baseVerticalRight1-tab1">Home</a>
</li>
<li class="nav-item">
<a aria-controls="tabVerticalRight12" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabVerticalRight12" id="baseVerticalRight1-tab2">Profile</a>
</li>
<li class="nav-item">
<a aria-controls="tabVerticalRight13" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabVerticalRight13" id="baseVerticalRight1-tab3">About</a>
</li>
</ul>
<div class="tab-content px-1">
<div aria-expanded="true" aria-labelledby="baseVerticalRight1-tab1" class="tab-pane active" id="tabVerticalRight11" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                            beans. Icing halvah chocolate cake carrot cake. Jelly
                            beans carrot cake marshmallow gingerbread chocolate cake.
                            Gummies cupcake croissant.</p>
</div>
<div aria-labelledby="baseVerticalRight1-tab2" class="tab-pane" id="tabVerticalRight12">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                            pastry cotton candy oat cake fruitcake jelly chupa chups.
                            Pudding caramels pastry powder cake soufflé wafer caramels.
                            Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="baseVerticalRight1-tab3" class="tab-pane" id="tabVerticalRight13">
<p>Biscuit ice cream halvah candy canes bear claw ice cream
                            cake chocolate bar donut. Toffee cotton candy liquorice.
                            Oat cake lemon drops gingerbread dessert caramels. Sweet
                            dessert jujubes powder sweet sesame snaps.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tabs with Icon</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>You can also add icons to the tab name.</p>
<div class="nav-vertical">
<ul class="nav nav-tabs nav-left">
<li class="nav-item">
<a aria-controls="tabVerticalLeft21" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#tabVerticalLeft21" id="baseVerticalLeft2-tab1"><i class="la la-align-justify"></i> Home</a>
</li>
<li class="nav-item">
<a aria-controls="tabVerticalLeft22" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabVerticalLeft22" id="baseVerticalLeft2-tab2"><i class="la la-header"></i> Profile</a>
</li>
<li class="nav-item">
<a aria-controls="tabVerticalLeft23" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabVerticalLeft23" id="baseVerticalLeft2-tab3"><i class="la la-send-o"></i> About</a>
</li>
</ul>
<div class="tab-content px-1">
<div aria-expanded="true" aria-labelledby="baseVerticalLeft2-tab1" class="tab-pane active" id="tabVerticalLeft21" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                            beans. Icing halvah chocolate cake carrot cake. Jelly
                            beans carrot cake marshmallow gingerbread chocolate cake.
                            Gummies cupcake croissant.</p>
</div>
<div aria-labelledby="baseVerticalLeft2-tab2" class="tab-pane" id="tabVerticalLeft22">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                            pastry cotton candy oat cake fruitcake jelly chupa chups.
                            Pudding caramels pastry powder cake soufflé wafer caramels.
                            Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="baseVerticalLeft2-tab3" class="tab-pane" id="tabVerticalLeft23">
<p>Biscuit ice cream halvah candy canes bear claw ice cream
                            cake chocolate bar donut. Toffee cotton candy liquorice.
                            Oat cake lemon drops gingerbread dessert caramels. Sweet
                            dessert jujubes powder sweet sesame snaps.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tabs with Icon</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>You can also add icons to the tab name.</p>
<div class="nav-vertical">
<ul class="nav nav-tabs nav-right">
<li class="nav-item">
<a aria-controls="tabVerticalRight21" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#tabVerticalRight21" id="baseVerticalRight2-tab1"><i class="la la-align-justify float-right"></i> Home</a>
</li>
<li class="nav-item">
<a aria-controls="tabVerticalRight22" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabVerticalRight22" id="baseVerticalRight2-tab2"><i class="la la-header float-right"></i> Profile</a>
</li>
<li class="nav-item">
<a aria-controls="tabVerticalRight23" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabVerticalRight23" id="baseVerticalRight2-tab3"><i class="la la-send-o float-right"></i> About</a>
</li>
</ul>
<div class="tab-content px-1">
<div aria-expanded="true" aria-labelledby="baseVerticalRight2-tab1" class="tab-pane active" id="tabVerticalRight21" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                            beans. Icing halvah chocolate cake carrot cake. Jelly
                            beans carrot cake marshmallow gingerbread chocolate cake.
                            Gummies cupcake croissant.</p>
</div>
<div aria-labelledby="baseVerticalRight2-tab2" class="tab-pane" id="tabVerticalRight22">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                            pastry cotton candy oat cake fruitcake jelly chupa chups.
                            Pudding caramels pastry powder cake soufflé wafer caramels.
                            Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="baseVerticalRight2-tab3" class="tab-pane" id="tabVerticalRight23">
<p>Biscuit ice cream halvah candy canes bear claw ice cream
                            cake chocolate bar donut. Toffee cotton candy liquorice.
                            Oat cake lemon drops gingerbread dessert caramels. Sweet
                            dessert jujubes powder sweet sesame snaps.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tabs with Labels, Pills &amp; Left Border</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="nav-vertical">
<ul class="nav nav-tabs nav-left nav-border-left">
<li class="nav-item">
<a aria-controls="tabVerticalLeft31" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#tabVerticalLeft31" id="baseVerticalLeft3-tab1">
<span class="mr-1 badge badge-default badge-success">New</span> Home</a>
</li>
<li class="nav-item">
<a aria-controls="tabVerticalLeft32" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabVerticalLeft32" id="baseVerticalLeft3-tab2">
<span class="mr-1 badge badge-default badge-info">info</span> Profile</a>
</li>
<li class="nav-item">
<a aria-controls="tabVerticalLeft33" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabVerticalLeft33" id="baseVerticalLeft3-tab3">
<span class="mr-1 badge badge-default badge-warning badge-pill badge-glow">5</span> About</a>
</li>
</ul>
<div class="tab-content px-1">
<div aria-expanded="true" aria-labelledby="baseVerticalLeft3-tab1" class="tab-pane active" id="tabVerticalLeft31" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                            beans. Icing halvah chocolate cake carrot cake. Jelly
                            beans carrot cake marshmallow gingerbread chocolate cake.
                            Gummies cupcake croissant.</p>
</div>
<div aria-labelledby="baseVerticalLeft3-tab2" class="tab-pane" id="tabVerticalLeft32">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                            pastry cotton candy oat cake fruitcake jelly chupa chups.
                            Pudding caramels pastry powder cake soufflé wafer caramels.
                            Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="baseVerticalLeft3-tab3" class="tab-pane" id="tabVerticalLeft33">
<p>Biscuit ice cream halvah candy canes bear claw ice cream
                            cake chocolate bar donut. Toffee cotton candy liquorice.
                            Oat cake lemon drops gingerbread dessert caramels. Sweet
                            dessert jujubes powder sweet sesame snaps.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tabs with Labels, Pills &amp; Right Border</h4>
</div>
<div class="card-content">
<div class="card-body">
<div class="nav-vertical">
<ul class="nav nav-tabs nav-right nav-border-right">
<li class="nav-item">
<a aria-controls="tabVerticalRight31" aria-expanded="true" class="nav-link active" data-toggle="tab" href="component-tabs-component.html#tabVerticalRight31" id="baseVerticalRight3-tab1">
<span class="ml-1 badge badge-pill badge-glow badge-default badge-danger float-right">2</span>Home </a>
</li>
<li class="nav-item">
<a aria-controls="tabVerticalRight32" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabVerticalRight32" id="baseVerticalRight3-tab2">
<span class="ml-1 badge badge-pill badge-glow badge-default badge-primary float-right">3</span>Profile </a>
</li>
<li class="nav-item">
<a aria-controls="tabVerticalRight33" aria-expanded="false" class="nav-link" data-toggle="tab" href="component-tabs-component.html#tabVerticalRight33" id="baseVerticalRight3-tab3">
<span class="ml-1 badge badge-default badge-warning float-right">New</span>About </a>
</li>
</ul>
<div class="tab-content px-1">
<div aria-expanded="true" aria-labelledby="baseVerticalRight3-tab1" class="tab-pane active" id="tabVerticalRight31" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                            beans. Icing halvah chocolate cake carrot cake. Jelly
                            beans carrot cake marshmallow gingerbread chocolate cake.
                            Gummies cupcake croissant.</p>
</div>
<div aria-labelledby="baseVerticalRight3-tab2" class="tab-pane" id="tabVerticalRight32">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                            pastry cotton candy oat cake fruitcake jelly chupa chups.
                            Pudding caramels pastry powder cake soufflé wafer caramels.
                            Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="baseVerticalRight3-tab3" class="tab-pane" id="tabVerticalRight33">
<p>Biscuit ice cream halvah candy canes bear claw ice cream
                            cake chocolate bar donut. Toffee cotton candy liquorice.
                            Oat cake lemon drops gingerbread dessert caramels. Sweet
                            dessert jujubes powder sweet sesame snaps.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Vertical Tabs end -->
</div>
