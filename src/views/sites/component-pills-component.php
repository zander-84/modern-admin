<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\ComponentPillsComponentAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Pills</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="component-pills-component.html#">Components</a>
</li>
<li class="breadcrumb-item active">Pills
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="component-pills-component.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="component-pills-component.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="component-pills-component.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="component-pills-component.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Basic Pills start -->
<section id="basic-pills">
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Pills</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Takes the basic nav pills from above and adds the <code>.nav-pills</code>                      class to generate a pilled interface. </p>
<ul class="nav nav-pills">
<li class="nav-item">
<a aria-expanded="true" class="nav-link active" data-toggle="pill" href="component-pills-component.html#pill1" id="base-pill1">Pill 1</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pill2" id="base-pill2">Pill 2</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pill3" id="base-pill3">Pill 3</a>
</li>
<li class="nav-item">
<a class="nav-link disabled">Disabled</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="base-pill1" class="tab-pane active" id="pill1" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="base-pill2" class="tab-pane" id="pill2">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="base-pill3" class="tab-pane" id="pill3">
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
<h4 class="card-title">Pills with dropdown</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>You can activate a pill navigation by simply specifying <code>data-toggle="pill"</code>                      on an element.</p>
<ul class="nav nav-pills">
<li class="nav-item">
<a aria-expanded="true" class="nav-link" data-toggle="pill" href="component-pills-component.html#home" id="home-tab">Home</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link active" data-toggle="pill" href="component-pills-component.html#profile" id="profile-tab">Profile</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button">
								Dropdown
								</a>
<div class="dropdown-menu">
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdown1" id="dropdown1-tab">@fat</a>
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdown2" id="dropdown2-tab">@mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#about" id="about-tab">About</a>
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
<h4 class="card-title">Bordered Pills</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-pill-bordered</code> class to <code>.nav-pills</code>                      for bordered type pills. </p>
<ul class="nav nav-pills nav-pill-bordered">
<li class="nav-item">
<a aria-expanded="true" class="nav-link active" data-toggle="pill" href="component-pills-component.html#pill11" id="base-pill11">Pill 1</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pill12" id="base-pill12">Pill 2</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pill13" id="base-pill13">Pill 3</a>
</li>
<li class="nav-item">
<a class="nav-link disabled">Disabled</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="base-pill11" class="tab-pane active" id="pill11" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="base-pill12" class="tab-pane" id="pill12">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="base-pill13" class="tab-pane" id="pill13">
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
<h4 class="card-title">Bordered Pills with dropdown</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-pill-bordered</code> class to <code>.nav-pills</code>                      for bordered type pills. </p>
<ul class="nav nav-pills nav-pill-bordered">
<li class="nav-item">
<a aria-expanded="true" class="nav-link" data-toggle="pill" href="component-pills-component.html#home1" id="home1-tab">Home</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link active" data-toggle="pill" href="component-pills-component.html#profile1" id="profile1-tab">Profile</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button">
								Dropdown
								</a>
<div class="dropdown-menu">
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdown11" id="dropdown11-tab">@fat</a>
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdown12" id="dropdown12-tab">@mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#about1" id="about1-tab">About</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="home1-tab" class="tab-pane" id="home1" role="tabpanel">
<p>Candy canes donut chupa chups candy canes lemon drops oat
                          cake wafer. Cotton candy candy canes marzipan carrot cake.
                          Sesame snaps lemon drops candy marzipan donut brownie tootsie
                          roll. Icing croissant bonbon biscuit gummi bears.</p>
</div>
<div aria-expanded="false" aria-labelledby="profile1-tab" class="tab-pane active" id="profile1" role="tabpanel">
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
<div aria-expanded="false" aria-labelledby="about1-tab" class="tab-pane" id="about1" role="tabpanel">
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
<h4 class="card-title">Bordered Pills with Active Border</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-pill-with-active-bordered</code> class to <code>.nav-pills</code>                      for bordered type pills. </p>
<ul class="nav nav-pills nav-pill-with-active-bordered">
<li class="nav-item">
<a aria-expanded="true" class="nav-link active" data-toggle="pill" href="component-pills-component.html#pill21" id="base-pill21">Pill 1</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pill22" id="base-pill22">Pill 2</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pill23" id="base-pill23">Pill 3</a>
</li>
<li class="nav-item">
<a class="nav-link disabled">Disabled</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="base-pill21" class="tab-pane active" id="pill21" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="base-pill22" class="tab-pane" id="pill22">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="base-pill23" class="tab-pane" id="pill23">
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
<h4 class="card-title">Bordered Pills with active border and dropdown</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-pill-with-active-bordered</code> class to <code>.nav-pills</code>                      for bordered type pills. </p>
<ul class="nav nav-pills nav-pill-with-active-bordered">
<li class="nav-item">
<a aria-expanded="true" class="nav-link" data-toggle="pill" href="component-pills-component.html#home2" id="home2-tab">Home</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link active" data-toggle="pill" href="component-pills-component.html#profile2" id="profile2-tab">Profile</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button">
								Dropdown
								</a>
<div class="dropdown-menu">
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdown21" id="dropdown21-tab">@fat</a>
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdown22" id="dropdown22-tab">@mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#about2" id="about2-tab">About</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="home2-tab" class="tab-pane" id="home2" role="tabpanel">
<p>Candy canes donut chupa chups candy canes lemon drops oat
                          cake wafer. Cotton candy candy canes marzipan carrot cake.
                          Sesame snaps lemon drops candy marzipan donut brownie tootsie
                          roll. Icing croissant bonbon biscuit gummi bears.</p>
</div>
<div aria-expanded="false" aria-labelledby="profile2-tab" class="tab-pane active" id="profile2" role="tabpanel">
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
<div aria-expanded="false" aria-labelledby="about2-tab" class="tab-pane" id="about2" role="tabpanel">
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
<h4 class="card-title">Active Border Pills</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-active-bordered-pill</code> class to <code>.nav-pills</code>                      for bordered type pills. </p>
<ul class="nav nav-pills nav-active-bordered-pill">
<li class="nav-item">
<a aria-expanded="true" class="nav-link active" data-toggle="pill" href="component-pills-component.html#pill31" id="base-pill31">Pill 1</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pill32" id="base-pill32">Pill 2</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pill33" id="base-pill33">Pill 3</a>
</li>
<li class="nav-item">
<a class="nav-link disabled">Disabled</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="base-pill31" class="tab-pane active" id="pill31" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="base-pill32" class="tab-pane" id="pill32">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="base-pill33" class="tab-pane" id="pill33">
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
<h4 class="card-title">Active Pills with dropdown</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-active-bordered-pill</code> class to <code>.nav-pills</code>                      for bordered type pills. </p>
<ul class="nav nav-pills nav-active-bordered-pill">
<li class="nav-item">
<a aria-expanded="true" class="nav-link" data-toggle="pill" href="component-pills-component.html#home3" id="home3-tab">Home</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link active" data-toggle="pill" href="component-pills-component.html#profile3" id="profile3-tab">Profile</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button">
								Dropdown
								</a>
<div class="dropdown-menu">
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdown31" id="dropdown31-tab">@fat</a>
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdown32" id="dropdown32-tab">@mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#about3" id="about3-tab">About</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="home3-tab" class="tab-pane" id="home3" role="tabpanel">
<p>Candy canes donut chupa chups candy canes lemon drops oat
                          cake wafer. Cotton candy candy canes marzipan carrot cake.
                          Sesame snaps lemon drops candy marzipan donut brownie tootsie
                          roll. Icing croissant bonbon biscuit gummi bears.</p>
</div>
<div aria-expanded="false" aria-labelledby="profile3-tab" class="tab-pane active" id="profile3" role="tabpanel">
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
<div aria-expanded="false" aria-labelledby="about3-tab" class="tab-pane" id="about3" role="tabpanel">
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
<h4 class="card-title">Toolbar Pills</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-pill-toolbar</code> class to <code>.nav-pills</code>                      for bordered type pills. </p>
<ul class="nav nav-pills nav-pill-toolbar">
<li class="nav-item">
<a aria-expanded="true" class="nav-link active" data-toggle="pill" href="component-pills-component.html#pill41" id="base-pill41">Pill 1</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pill42" id="base-pill42">Pill 2</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pill43" id="base-pill43">Pill 3</a>
</li>
<li class="nav-item">
<a class="nav-link disabled">Disabled</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="base-pill41" class="tab-pane active" id="pill41" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="base-pill42" class="tab-pane" id="pill42">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="base-pill43" class="tab-pane" id="pill43">
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
<h4 class="card-title">Toolbar Pills with dropdown</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-pill-toolbar</code> class to <code>.nav-pills</code>                      for bordered type pills. </p>
<ul class="nav nav-pills nav-pill-toolbar">
<li class="nav-item">
<a aria-expanded="true" class="nav-link" data-toggle="pill" href="component-pills-component.html#home4" id="home4-tab">Home</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link active" data-toggle="pill" href="component-pills-component.html#profile4" id="profile4-tab">Profile</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button">
								Dropdown
								</a>
<div class="dropdown-menu">
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdown41" id="dropdown41-tab">@fat</a>
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdown42" id="dropdown42-tab">@mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#about4" id="about4-tab">About</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="home4-tab" class="tab-pane" id="home4" role="tabpanel">
<p>Candy canes donut chupa chups candy canes lemon drops oat
                          cake wafer. Cotton candy candy canes marzipan carrot cake.
                          Sesame snaps lemon drops candy marzipan donut brownie tootsie
                          roll. Icing croissant bonbon biscuit gummi bears.</p>
</div>
<div aria-expanded="false" aria-labelledby="profile4-tab" class="tab-pane active" id="profile4" role="tabpanel">
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
<div aria-expanded="false" aria-labelledby="about4-tab" class="tab-pane" id="about4" role="tabpanel">
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
<!-- Basic Pills end -->
<!-- Justified Pills start -->
<section id="justified-pills">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Justified Pills</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Justified Pills</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-justified</code> class to set Pills justified.</p>
<ul class="nav nav-pills nav-justified">
<li class="nav-item">
<a aria-expanded="true" class="nav-link active" data-toggle="pill" href="component-pills-component.html#active" id="active-pill">Active</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#link" id="link-pill">Link</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button">
								Dropdown
								</a>
<div class="dropdown-menu">
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownOpt1" id="dropdownOpt1-pill">dropdown 1</a>
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownOpt2" id="dropdownOpt2-pill">dropdown 2</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="pill" href="component-pills-component.html#linkOpt" id="linkOpt-pill">Another Link</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="active-pill" class="tab-pane active" id="active" role="tabpanel">
<p>Macaroon candy canes tootsie roll wafer lemon drops liquorice
                          jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton
                          candy jelly cake jelly-o sugar plum marshmallow. Dessert
                          cotton candy macaroon chocolate sugar plum cake donut.</p>
</div>
<div aria-expanded="false" aria-labelledby="link-pill" class="tab-pane" id="link" role="tabpanel">
<p>Chocolate bar gummies sesame snaps. Liquorice cake sesame
                          snaps cotton candy cake sweet brownie. Cotton candy candy
                          canes brownie. Biscuit pudding sesame snaps pudding pudding
                          sesame snaps biscuit tiramisu.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOpt1-pill" class="tab-pane" id="dropdownOpt1" role="tabpanel">
<p>Fruitcake marshmallow donut wafer pastry chocolate topping
                          cake. Powder powder gummi bears jelly beans. Gingerbread
                          cake chocolate lollipop. Jelly oat cake pastry marshmallow
                          sesame snaps.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOpt2-pill" class="tab-pane" id="dropdownOpt2" role="tabpanel">
<p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet
                          roll dragée topping cotton candy cake jelly beans. Pie
                          lemon drops sweet pastry candy canes chocolate cake bear
                          claw cotton candy wafer.</p>
</div>
<div aria-expanded="false" aria-labelledby="linkOpt-pill" class="tab-pane" id="linkOpt" role="tabpanel">
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
<h4 class="card-title">Justified Bordered Pills</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-justified.nav-top-border.no-hover-bg</code> classes
                      justified top bordered tabs. you can also use <code>.nav-topline</code>                      class place of <code>.nav-top-border</code> class</p>
<ul class="nav nav-pills nav-pill-bordered nav-justified">
<li class="nav-item">
<a aria-expanded="true" class="nav-link active" data-toggle="pill" href="component-pills-component.html#active1" id="active-pill1">Active</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#link1" id="link-pill1">Link</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button">
								Dropdown
								</a>
<div class="dropdown-menu">
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownOpt11" id="dropdownOpt2-pill1">dropdown 1</a>
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownOpt12" id="dropdownOpt2-pill2">dropdown 2</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="pill" href="component-pills-component.html#linkOpt1" id="linkOpt-pill1">Another Link</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="active-pill1" class="tab-pane active" id="active1" role="tabpanel">
<p>Macaroon candy canes tootsie roll wafer lemon drops liquorice
                          jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton
                          candy jelly cake jelly-o sugar plum marshmallow. Dessert
                          cotton candy macaroon chocolate sugar plum cake donut.</p>
</div>
<div aria-expanded="false" aria-labelledby="link-pill1" class="tab-pane" id="link1" role="tabpanel">
<p>Chocolate bar gummies sesame snaps. Liquorice cake sesame
                          snaps cotton candy cake sweet brownie. Cotton candy candy
                          canes brownie. Biscuit pudding sesame snaps pudding pudding
                          sesame snaps biscuit tiramisu.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOpt2-pill1" class="tab-pane" id="dropdownOpt11" role="tabpanel">
<p>Fruitcake marshmallow donut wafer pastry chocolate topping
                          cake. Powder powder gummi bears jelly beans. Gingerbread
                          cake chocolate lollipop. Jelly oat cake pastry marshmallow
                          sesame snaps.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOpt2-pill2" class="tab-pane" id="dropdownOpt12" role="tabpanel">
<p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet
                          roll dragée topping cotton candy cake jelly beans. Pie
                          lemon drops sweet pastry candy canes chocolate cake bear
                          claw cotton candy wafer.</p>
</div>
<div aria-expanded="false" aria-labelledby="linkOpt-pill1" class="tab-pane" id="linkOpt1" role="tabpanel">
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
<h4 class="card-title">Active Bordered Justified Pills</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Use <code>.nav-justified.nav-active-bordered-pill</code> class
                      for justified active bordered pills.</p>
<ul class="nav nav-pills nav-active-bordered-pill nav-justified">
<li class="nav-item">
<a aria-expanded="true" class="nav-link active" data-toggle="pill" href="component-pills-component.html#active11" id="active11-pill">Active</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#link11" id="link11-pill">Link</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button">
								Dropdown
								</a>
<div class="dropdown-menu">
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownOpt011" id="dropdownOpt011-pill1">dropdown 1</a>
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownOpt012" id="dropdownOpt011-pill2">dropdown 2</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="pill" href="component-pills-component.html#linkOpt11" id="linkOpt11-pill">Another Link</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="active11-pill" class="tab-pane active" id="active11" role="tabpanel">
<p>Macaroon candy canes tootsie roll wafer lemon drops liquorice
                          jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton
                          candy jelly cake jelly-o sugar plum marshmallow. Dessert
                          cotton candy macaroon chocolate sugar plum cake donut.</p>
</div>
<div aria-expanded="false" aria-labelledby="link11-pill" class="tab-pane" id="link11" role="tabpanel">
<p>Chocolate bar gummies sesame snaps. Liquorice cake sesame
                          snaps cotton candy cake sweet brownie. Cotton candy candy
                          canes brownie. Biscuit pudding sesame snaps pudding pudding
                          sesame snaps biscuit tiramisu.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOpt011-pill1" class="tab-pane" id="dropdownOpt011" role="tabpanel">
<p>Fruitcake marshmallow donut wafer pastry chocolate topping
                          cake. Powder powder gummi bears jelly beans. Gingerbread
                          cake chocolate lollipop. Jelly oat cake pastry marshmallow
                          sesame snaps.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOpt011-pill2" class="tab-pane" id="dropdownOpt012" role="tabpanel">
<p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet
                          roll dragée topping cotton candy cake jelly beans. Pie
                          lemon drops sweet pastry candy canes chocolate cake bear
                          claw cotton candy wafer.</p>
</div>
<div aria-expanded="false" aria-labelledby="linkOpt11-pill" class="tab-pane" id="linkOpt11" role="tabpanel">
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
<h4 class="card-title">Justified Toolbar Pills</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Use <code>.nav-justified.nav-pill-toolbar</code> classes justified
                      toolbar pills.</p>
<ul class="nav nav-pills nav-pill-toolbar nav-justified">
<li class="nav-item">
<a aria-expanded="true" class="nav-link active" data-toggle="pill" href="component-pills-component.html#active21" id="active2-pill1">Active</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#link21" id="link2-pill1">Link</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button">
								Dropdown
								</a>
<div class="dropdown-menu">
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownOpt21" id="dropdownOpt1-pill1">dropdown 1</a>
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownOpt22" id="dropdownOpt1-pill2">dropdown 2</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="pill" href="component-pills-component.html#linkOpt21" id="linkOpt2-pill1">Another Link</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="active2-pill1" class="tab-pane active" id="active21" role="tabpanel">
<p>Macaroon candy canes tootsie roll wafer lemon drops liquorice
                          jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton
                          candy jelly cake jelly-o sugar plum marshmallow. Dessert
                          cotton candy macaroon chocolate sugar plum cake donut.</p>
</div>
<div aria-expanded="false" aria-labelledby="link2-pill1" class="tab-pane" id="link21" role="tabpanel">
<p>Chocolate bar gummies sesame snaps. Liquorice cake sesame
                          snaps cotton candy cake sweet brownie. Cotton candy candy
                          canes brownie. Biscuit pudding sesame snaps pudding pudding
                          sesame snaps biscuit tiramisu.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOpt1-pill1" class="tab-pane" id="dropdownOpt21" role="tabpanel">
<p>Fruitcake marshmallow donut wafer pastry chocolate topping
                          cake. Powder powder gummi bears jelly beans. Gingerbread
                          cake chocolate lollipop. Jelly oat cake pastry marshmallow
                          sesame snaps.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOpt1-pill2" class="tab-pane" id="dropdownOpt22" role="tabpanel">
<p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet
                          roll dragée topping cotton candy cake jelly beans. Pie
                          lemon drops sweet pastry candy canes chocolate cake bear
                          claw cotton candy wafer.</p>
</div>
<div aria-expanded="false" aria-labelledby="linkOpt2-pill1" class="tab-pane" id="linkOpt21" role="tabpanel">
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
<!-- Justified Pills end -->
<!-- Pills Animations start -->
<section id="pills-animations">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Pills Animations</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Pills with Fade</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Use class <code>.fade</code> for fade animation.</p>
<ul class="nav nav-pills">
<li class="nav-item">
<a aria-expanded="true" class="nav-link active" data-toggle="pill" href="component-pills-component.html#pillOpt1" id="base-pillOpt1">Pill 1</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pillOpt2" id="base-pillOpt2">Pill 2</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pillOpt3" id="base-pillOpt3">Pill 3</a>
</li>
<li class="nav-item">
<a class="nav-link disabled">Disabled</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="base-pillOpt1" class="tab-pane fade active in" id="pillOpt1" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="base-pillOpt2" class="tab-pane fade" id="pillOpt2">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="base-pillOpt3" class="tab-pane fade" id="pillOpt3">
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
<h4 class="card-title">Pills with dropdown &amp; fade</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Use class <code>.fade</code> for fade animation.</p>
<ul class="nav nav-pills nav-pill-bordered">
<li class="nav-item">
<a aria-expanded="true" class="nav-link" data-toggle="pill" href="component-pills-component.html#homeOpt" id="homeOpt-tab">Home</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link active" data-toggle="pill" href="component-pills-component.html#profileOpt" id="profileOpt-tab">Profile</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button">
								Dropdown
								</a>
<div class="dropdown-menu">
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownOption1" id="dropdownOption1-tab">@fat</a>
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownOption2" id="dropdownOption2-tab">@mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#aboutOpt" id="aboutOpt-tab">About</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="homeOpt-tab" class="tab-pane fade" id="homeOpt" role="tabpanel">
<p>Candy canes donut chupa chups candy canes lemon drops oat
                          cake wafer. Cotton candy candy canes marzipan carrot cake.
                          Sesame snaps lemon drops candy marzipan donut brownie tootsie
                          roll. Icing croissant bonbon biscuit gummi bears.</p>
</div>
<div aria-expanded="false" aria-labelledby="profileOpt-tab" class="tab-pane fade active in" id="profileOpt" role="tabpanel">
<p>Pudding candy canes sugar plum cookie chocolate cake powder
                          croissant. Carrot cake tiramisu danish candy cake muffin
                          croissant tart dessert. Tiramisu caramels candy canes chocolate
                          cake sweet roll liquorice icing cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOption1-tab" class="tab-pane fade" id="dropdownOption1" role="tabpanel">
<p>Cake croissant lemon drops gummi bears carrot cake biscuit
                          cupcake croissant. Macaroon lemon drops muffin jelly sugar
                          plum chocolate cupcake danish icing. Soufflé tootsie roll
                          lemon drops sweet roll cake icing cookie halvah cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOption2-tab" class="tab-pane fade" id="dropdownOption2" role="tabpanel">
<p>Chocolate croissant cupcake croissant jelly donut. Cheesecake
                          toffee apple pie chocolate bar biscuit tart croissant.
                          Lemon drops danish cookie. Oat cake macaroon icing tart
                          lollipop cookie sweet bear claw.</p>
</div>
<div aria-expanded="false" aria-labelledby="aboutOpt-tab" class="tab-pane fade" id="aboutOpt" role="tabpanel">
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
<h4 class="card-title">Pills with CSS Animation</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Use class <code>.animated</code> along with any animation for
                      css animation.</p>
<ul class="nav nav-pills">
<li class="nav-item">
<a aria-expanded="true" class="nav-link active" data-toggle="pill" href="component-pills-component.html#pillOpt11" id="base-pillOpt11">Pill 1</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pillOpt12" id="base-pillOpt12">Pill 2</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pillOpt13" id="base-pillOpt13">Pill 3</a>
</li>
<li class="nav-item">
<a class="nav-link disabled">Disabled</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="base-pillOpt11" class="tab-pane animated active zoomIn" id="pillOpt11" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="base-pillOpt12" class="tab-pane animated flipInX" id="pillOpt12">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="base-pillOpt13" class="tab-pane animated swing" id="pillOpt13">
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
<h4 class="card-title">Pills with dropdown &amp; CSS Amination</h4>
</div>
<div class="card-body">
<div class="card-block">
<p>Use class <code>.animated</code> along with any animation for
                      css animation.</p>
<ul class="nav nav-pills nav-pill-bordered">
<li class="nav-item">
<a aria-expanded="true" class="nav-link" data-toggle="pill" href="component-pills-component.html#homeOpt1" id="homeOpt1-tab">Home</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link active" data-toggle="pill" href="component-pills-component.html#profileOpt1" id="profileOpt1-tab">Profile</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button">
								Dropdown
								</a>
<div class="dropdown-menu">
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownOption11" id="dropdownOption11-tab">@fat</a>
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownOption12" id="dropdownOption12-tab">@mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#aboutOpt1" id="aboutOpt1-tab">About</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="homeOpt1-tab" class="tab-pane animated flipInY" id="homeOpt1" role="tabpanel">
<p>Candy canes donut chupa chups candy canes lemon drops oat
                          cake wafer. Cotton candy candy canes marzipan carrot cake.
                          Sesame snaps lemon drops candy marzipan donut brownie tootsie
                          roll. Icing croissant bonbon biscuit gummi bears.</p>
</div>
<div aria-expanded="false" aria-labelledby="profileOpt1-tab" class="tab-pane animated active bounceIn" id="profileOpt1" role="tabpanel">
<p>Pudding candy canes sugar plum cookie chocolate cake powder
                          croissant. Carrot cake tiramisu danish candy cake muffin
                          croissant tart dessert. Tiramisu caramels candy canes chocolate
                          cake sweet roll liquorice icing cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOption11-tab" class="tab-pane animated rubberBand" id="dropdownOption11" role="tabpanel">
<p>Cake croissant lemon drops gummi bears carrot cake biscuit
                          cupcake croissant. Macaroon lemon drops muffin jelly sugar
                          plum chocolate cupcake danish icing. Soufflé tootsie roll
                          lemon drops sweet roll cake icing cookie halvah cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownOption12-tab" class="tab-pane animated wobble" id="dropdownOption12" role="tabpanel">
<p>Chocolate croissant cupcake croissant jelly donut. Cheesecake
                          toffee apple pie chocolate bar biscuit tart croissant.
                          Lemon drops danish cookie. Oat cake macaroon icing tart
                          lollipop cookie sweet bear claw.</p>
</div>
<div aria-expanded="false" aria-labelledby="aboutOpt1-tab" class="tab-pane animated rollIn" id="aboutOpt1" role="tabpanel">
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
<!-- Pills Animations end -->
<!-- Stacked Pills start -->
<section id="stacked-pills">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Stacked Pills</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Stacked Pills</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.flex-column</code> class with <code>.nav.nav-pills</code>                      to stack them vertically. Each <code>.nav-link</code> becomes
                      block-level, allowing for larger hit areas via mouse or tap.
                    </p>
<ul class="nav nav-pills flex-column">
<li class="nav-item">
<a aria-expanded="true" class="nav-link active" data-toggle="pill" href="component-pills-component.html#pillOpt21" id="base-pillOpt21">Pill 1</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pillOpt22" id="base-pillOpt22">Pill 2</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pillOpt23" id="base-pillOpt23">Pill 3</a>
</li>
<li class="nav-item">
<a class="nav-link disabled">Disabled</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Stacked Pills with dropdown</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.flex-column</code> class with <code>.nav.nav-pills</code>                      to stack them vertically. Each <code>.nav-link</code> becomes
                      block-level, allowing for larger hit areas via mouse or tap.
                    </p>
<ul class="nav nav-pills flex-column">
<li class="nav-item">
<a aria-expanded="true" class="nav-link active" data-toggle="pill" href="component-pills-component.html#homeOpt21" id="homeOpt21-tab">Home</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#profileOpt21" id="profileOpt21-tab">Profile</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button">
								Dropdown
								</a>
<div class="dropdown-menu">
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownOption21" id="dropdownOption21-tab">@fat</a>
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownOption22" id="dropdownOption22-tab">@mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#aboutOpt21" id="aboutOpt21-tab">About</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Stacked Pills Toolbar</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use <code>.nav-pill-toolbar</code> class to <code>.flex-column</code>                      for bordered type pills.</p>
<ul class="nav nav-pills flex-column nav-pill-toolbar">
<li class="nav-item">
<a aria-expanded="true" class="nav-link active" data-toggle="pill" href="component-pills-component.html#pillOpt31" id="base-pillOpt31">Pill 1</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pillOpt32" id="base-pillOpt32">Pill 2</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pillOpt33" id="base-pillOpt33">Pill 3</a>
</li>
<li class="nav-item">
<a class="nav-link disabled">Disabled</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Stacked Pills Toolbar with dropdown</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav nav-pills flex-column nav-pill-toolbar">
<li class="nav-item">
<a aria-expanded="true" class="nav-link active" data-toggle="pill" href="component-pills-component.html#homeOpt31" id="homeOpt31-tab">Home</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#profileOpt31" id="profileOpt31-tab">Profile</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button">
								Dropdown
								</a>
<div class="dropdown-menu">
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownOption31" id="dropdownOption31-tab">@fat</a>
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownOption32" id="dropdownOption32-tab">@mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#aboutOpt31" id="aboutOpt31-tab">About</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Stacked Pills end -->
<!-- Pills Elements start -->
<section id="pills-elements">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Pills Elements</h4>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Pills with Left Icon</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use font icons before pill name to get pills with icon.</p>
<ul class="nav nav-pills">
<li class="nav-item">
<a aria-expanded="true" class="nav-link active" data-toggle="pill" href="component-pills-component.html#pillEle1" id="base-pillEle1"><i class="la la-asterisk"></i> Pill 1</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pillEle2" id="base-pillEle2"><i class="la la-bars"></i> Pill 2</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pillEle3" id="base-pillEle3"><i class="la la-refresh"></i> Pill 3</a>
</li>
<li class="nav-item">
<a class="nav-link disabled"><i class="la la-ban"></i> Disabled</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="base-pillEle1" class="tab-pane active show" id="pillEle1" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="base-pillEle2" class="tab-pane" id="pillEle2">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="base-pillEle3" class="tab-pane" id="pillEle3">
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
<h4 class="card-title">Pills with dropdown &amp; Left Icon</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use font icons before pill name to get pills with icon.</p>
<ul class="nav nav-pills nav-justified">
<li class="nav-item">
<a aria-expanded="true" class="nav-link" data-toggle="pill" href="component-pills-component.html#homeEle" id="homeEle-tab"><i class="la la-home"></i> Home</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link active" data-toggle="pill" href="component-pills-component.html#profileEle" id="profileEle-tab"><i class="la la-user"></i> Profile</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button">
<i class="la la-bars"></i> Dropdown
                        </a>
<div class="dropdown-menu">
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownEle1" id="dropdownEle1-tab"><i class="la la-fighter-jet"></i> @fat</a>
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownEle2" id="dropdownEle2-tab"><i class="la la-fighter-jet"></i> @mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#aboutEle" id="aboutEle-tab"><i class="la la-envelope"></i> About</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="homeEle-tab" class="tab-pane" id="homeEle" role="tabpanel">
<p>Candy canes donut chupa chups candy canes lemon drops oat
                          cake wafer. Cotton candy candy canes marzipan carrot cake.
                          Sesame snaps lemon drops candy marzipan donut brownie tootsie
                          roll. Icing croissant bonbon biscuit gummi bears.</p>
</div>
<div aria-expanded="false" aria-labelledby="profileEle-tab" class="tab-pane active show" id="profileEle" role="tabpanel">
<p>Pudding candy canes sugar plum cookie chocolate cake powder
                          croissant. Carrot cake tiramisu danish candy cake muffin
                          croissant tart dessert. Tiramisu caramels candy canes chocolate
                          cake sweet roll liquorice icing cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownEle1-tab" class="tab-pane" id="dropdownEle1" role="tabpanel">
<p>Cake croissant lemon drops gummi bears carrot cake biscuit
                          cupcake croissant. Macaroon lemon drops muffin jelly sugar
                          plum chocolate cupcake danish icing. Soufflé tootsie roll
                          lemon drops sweet roll cake icing cookie halvah cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownEle2-tab" class="tab-pane" id="dropdownEle2" role="tabpanel">
<p>Chocolate croissant cupcake croissant jelly donut. Cheesecake
                          toffee apple pie chocolate bar biscuit tart croissant.
                          Lemon drops danish cookie. Oat cake macaroon icing tart
                          lollipop cookie sweet bear claw.</p>
</div>
<div aria-expanded="false" aria-labelledby="aboutEle-tab" class="tab-pane" id="aboutEle" role="tabpanel">
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
<h4 class="card-title">Pills with Right Icon</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav nav-pills">
<li class="nav-item">
<a aria-expanded="true" class="nav-link active" data-toggle="pill" href="component-pills-component.html#pillEle11" id="base-pillEle11">Pill 1 <i class="ml-1 la la-asterisk"></i></a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pillEle12" id="base-pillEle12">Pill 2 <i class="ml-1 la la-bars"></i></a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pillEle13" id="base-pillEle13">Pill 3 <i class="ml-1 la la-refresh"></i></a>
</li>
<li class="nav-item">
<a class="nav-link disabled">Disabled <i class="ml-1 la la-ban"></i></a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="base-pillEle11" class="tab-pane active show" id="pillEle11" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="base-pillEle12" class="tab-pane" id="pillEle12">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="base-pillEle13" class="tab-pane" id="pillEle13">
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
<h4 class="card-title">Pills with dropdown &amp; Right Icon</h4>
</div>
<div class="card-content">
<div class="card-body">
<ul class="nav nav-pills nav-justified">
<li class="nav-item">
<a aria-expanded="true" class="nav-link" data-toggle="pill" href="component-pills-component.html#homeEle1" id="homeEle1-tab">Home <i class="ml-1 la la-home"></i></a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link active" data-toggle="pill" href="component-pills-component.html#profileEle1" id="profileEle1-tab">Profile <i class="ml-1 la la-user"></i></a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button">
								Dropdown <i class="ml-1 la la-bars"></i>
</a>
<div class="dropdown-menu">
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownEle11" id="dropdownEle11-tab">@fat <i class="ml-1 la la-fighter-jet"></i></a>
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownEle12" id="dropdownEle12-tab">@mdo <i class="ml-1 la la-fighter-jet"></i></a>
</div>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#aboutEle1" id="aboutEle1-tab">About <i class="ml-1 la la-envelope"></i></a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="homeEle1-tab" class="tab-pane" id="homeEle1" role="tabpanel">
<p>Candy canes donut chupa chups candy canes lemon drops oat
                          cake wafer. Cotton candy candy canes marzipan carrot cake.
                          Sesame snaps lemon drops candy marzipan donut brownie tootsie
                          roll. Icing croissant bonbon biscuit gummi bears.</p>
</div>
<div aria-expanded="false" aria-labelledby="profileEle1-tab" class="tab-pane active show" id="profileEle1" role="tabpanel">
<p>Pudding candy canes sugar plum cookie chocolate cake powder
                          croissant. Carrot cake tiramisu danish candy cake muffin
                          croissant tart dessert. Tiramisu caramels candy canes chocolate
                          cake sweet roll liquorice icing cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownEle11-tab" class="tab-pane" id="dropdownEle11" role="tabpanel">
<p>Cake croissant lemon drops gummi bears carrot cake biscuit
                          cupcake croissant. Macaroon lemon drops muffin jelly sugar
                          plum chocolate cupcake danish icing. Soufflé tootsie roll
                          lemon drops sweet roll cake icing cookie halvah cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownEle12-tab" class="tab-pane" id="dropdownEle12" role="tabpanel">
<p>Chocolate croissant cupcake croissant jelly donut. Cheesecake
                          toffee apple pie chocolate bar biscuit tart croissant.
                          Lemon drops danish cookie. Oat cake macaroon icing tart
                          lollipop cookie sweet bear claw.</p>
</div>
<div aria-expanded="false" aria-labelledby="aboutEle1-tab" class="tab-pane" id="aboutEle1" role="tabpanel">
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
<h4 class="card-title">Pills with Only Icon</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use font icons as pill name to get Icon pills.</p>
<ul class="nav nav-pills">
<li class="nav-item">
<a aria-expanded="true" class="nav-link active" data-toggle="pill" href="component-pills-component.html#pillEle21" id="base-pillEle21"><i class="la la-asterisk"></i></a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pillEle22" id="base-pillEle22"><i class="la la-bars"></i></a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pillEle23" id="base-pillEle23"><i class="la la-refresh"></i></a>
</li>
<li class="nav-item">
<a class="nav-link disabled"><i class="la la-ban"></i></a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="base-pillEle21" class="tab-pane active show" id="pillEle21" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="base-pillEle22" class="tab-pane" id="pillEle22">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="base-pillEle23" class="tab-pane" id="pillEle23">
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
<h4 class="card-title">Pills with dropdown &amp; Left Icon</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>Use font icons as pill name to get only Icon pills.</p>
<ul class="nav nav-pills nav-justified">
<li class="nav-item">
<a aria-expanded="true" class="nav-link" data-toggle="pill" href="component-pills-component.html#homeEle2" id="homeEle2-tab"><i class="la la-home"></i></a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link active" data-toggle="pill" href="component-pills-component.html#profileEle2" id="profileEle2-tab"><i class="la la-user"></i></a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button">
<i class="la la-bars"></i>
</a>
<div class="dropdown-menu">
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownEle21" id="dropdownEle21-tab"><i class="la la-fighter-jet"></i> @fat</a>
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownEle22" id="dropdownEle22-tab"><i class="la la-fighter-jet"></i> @mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#aboutEle2" id="aboutEle2-tab"><i class="la la-envelope"></i></a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="homeEle2-tab" class="tab-pane" id="homeEle2" role="tabpanel">
<p>Candy canes donut chupa chups candy canes lemon drops oat
                          cake wafer. Cotton candy candy canes marzipan carrot cake.
                          Sesame snaps lemon drops candy marzipan donut brownie tootsie
                          roll. Icing croissant bonbon biscuit gummi bears.</p>
</div>
<div aria-expanded="false" aria-labelledby="profileEle2-tab" class="tab-pane active show" id="profileEle2" role="tabpanel">
<p>Pudding candy canes sugar plum cookie chocolate cake powder
                          croissant. Carrot cake tiramisu danish candy cake muffin
                          croissant tart dessert. Tiramisu caramels candy canes chocolate
                          cake sweet roll liquorice icing cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownEle21-tab" class="tab-pane" id="dropdownEle21" role="tabpanel">
<p>Cake croissant lemon drops gummi bears carrot cake biscuit
                          cupcake croissant. Macaroon lemon drops muffin jelly sugar
                          plum chocolate cupcake danish icing. Soufflé tootsie roll
                          lemon drops sweet roll cake icing cookie halvah cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownEle22-tab" class="tab-pane" id="dropdownEle22" role="tabpanel">
<p>Chocolate croissant cupcake croissant jelly donut. Cheesecake
                          toffee apple pie chocolate bar biscuit tart croissant.
                          Lemon drops danish cookie. Oat cake macaroon icing tart
                          lollipop cookie sweet bear claw.</p>
</div>
<div aria-expanded="false" aria-labelledby="aboutEle2-tab" class="tab-pane" id="aboutEle2" role="tabpanel">
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
<h4 class="card-title">Pills with Label</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>You can also use <code>.badge.badge-COLOR</code> classes to add
                      label to pill.</p>
<ul class="nav nav-pills">
<li class="nav-item">
<a aria-expanded="true" class="nav-link active" data-toggle="pill" href="component-pills-component.html#pillEle31" id="base-pillEle31">
<span class="badge badge-default badge-success">New</span> Pill 1</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pillEle32" id="base-pillEle32">Pill 2 <span class="badge badge-default badge-primary ml-1">Latest</span></a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pillEle33" id="base-pillEle33">Pill 3 <span class="badge badge-default badge-danger ml-1">Bug</span></a>
</li>
<li class="nav-item">
<a class="nav-link disabled">
<span class="badge badge-default badge-info">Info</span> Disabled</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="base-pillEle31" class="tab-pane fade active in" id="pillEle31" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="base-pillEle32" class="tab-pane fade" id="pillEle32">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="base-pillEle33" class="tab-pane fade" id="pillEle33">
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
<h4 class="card-title">Pills with dropdown &amp; Label</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>You can also use <code>.badge.badge-COLOR</code> classes to add
                      label to pill.</p>
<ul class="nav nav-pills nav-justified">
<li class="nav-item">
<a aria-expanded="true" class="nav-link" data-toggle="pill" href="component-pills-component.html#homeEle3" id="homeEle3-tab">
<span class="badge badge-default badge-primary">Latest</span> Home </a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link active" data-toggle="pill" href="component-pills-component.html#profileEle3" id="profileEle3-tab">Profile <span class="badge badge-default badge-success ml-1">New</span></a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button">
<span class="badge badge-default badge-warning">Fixed</span>
                          Dropdown
                        </a>
<div class="dropdown-menu">
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownEle31" id="dropdownEle31-tab"><i class="la la-fighter-jet"></i> @fat</a>
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownEle32" id="dropdownEle32-tab"><i class="la la-fighter-jet"></i> @mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#aboutEle3" id="aboutEle3-tab">About <span class="badge badge-default badge-info ml-1">Info</span></a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="homeEle3-tab" class="tab-pane fade" id="homeEle3" role="tabpanel">
<p>Candy canes donut chupa chups candy canes lemon drops oat
                          cake wafer. Cotton candy candy canes marzipan carrot cake.
                          Sesame snaps lemon drops candy marzipan donut brownie tootsie
                          roll. Icing croissant bonbon biscuit gummi bears.</p>
</div>
<div aria-expanded="false" aria-labelledby="profileEle3-tab" class="tab-pane fade active in" id="profileEle3" role="tabpanel">
<p>Pudding candy canes sugar plum cookie chocolate cake powder
                          croissant. Carrot cake tiramisu danish candy cake muffin
                          croissant tart dessert. Tiramisu caramels candy canes chocolate
                          cake sweet roll liquorice icing cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownEle31-tab" class="tab-pane fade" id="dropdownEle31" role="tabpanel">
<p>Cake croissant lemon drops gummi bears carrot cake biscuit
                          cupcake croissant. Macaroon lemon drops muffin jelly sugar
                          plum chocolate cupcake danish icing. Soufflé tootsie roll
                          lemon drops sweet roll cake icing cookie halvah cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownEle32-tab" class="tab-pane fade" id="dropdownEle32" role="tabpanel">
<p>Chocolate croissant cupcake croissant jelly donut. Cheesecake
                          toffee apple pie chocolate bar biscuit tart croissant.
                          Lemon drops danish cookie. Oat cake macaroon icing tart
                          lollipop cookie sweet bear claw.</p>
</div>
<div aria-expanded="false" aria-labelledby="aboutEle3-tab" class="tab-pane fade" id="aboutEle3" role="tabpanel">
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
<h4 class="card-title">Pills with Label</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>You can also use <code>.badge.badge-pill.badge-glow.badge-COLOR</code>                      classes to add label pill(badge) to pill.</p>
<ul class="nav nav-pills">
<li class="nav-item">
<a aria-expanded="true" class="nav-link active" data-toggle="pill" href="component-pills-component.html#pillEle41" id="base-pillEle41">
<span class="badge badge-pill badge-glow badge-default badge-success">2</span> Pill 1</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pillEle42" id="base-pillEle42">Pill 2 <span class="badge badge-pill badge-glow badge-default badge-primary ml-1">3</span></a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#pillEle43" id="base-pillEle43">Pill 3 <span class="badge badge-pill badge-glow badge-default badge-danger ml-1">7</span></a>
</li>
<li class="nav-item">
<a class="nav-link disabled">
<span class="badge badge-pill badge-glow badge-default badge-info">1</span> Disabled</a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="base-pillEle41" class="tab-pane fade active in" id="pillEle41" role="tabpanel">
<p>Oat cake marzipan cake lollipop caramels wafer pie jelly
                          beans. Icing halvah chocolate cake carrot cake. Jelly beans
                          carrot cake marshmallow gingerbread chocolate cake. Gummies
                          cupcake croissant.</p>
</div>
<div aria-labelledby="base-pillEle42" class="tab-pane fade" id="pillEle42">
<p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
</div>
<div aria-labelledby="base-pillEle43" class="tab-pane fade" id="pillEle43">
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
<h4 class="card-title">Pills with dropdown &amp; Label</h4>
</div>
<div class="card-content">
<div class="card-body">
<p>You can also use <code>.badge.badge-pill.badge-glow.badge-COLOR</code>                      classes to add label pill(badge) to pill.</p>
<ul class="nav nav-pills nav-justified">
<li class="nav-item">
<a aria-expanded="true" class="nav-link" data-toggle="pill" href="component-pills-component.html#homeEle4" id="homeEle4-tab">
<span class="badge badge-pill badge-glow badge-default badge-primary">5</span> Home</a>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link active" data-toggle="pill" href="component-pills-component.html#profileEle4" id="profileEle4-tab">Profile <span class="badge badge-pill badge-glow badge-default badge-success ml-1">2</span></a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button">
<span class="badge badge-pill badge-glow badge-default badge-warning">1</span> Dropdown
                        </a>
<div class="dropdown-menu">
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownEle41" id="dropdownEle41-tab"><i class="la la-fighter-jet"></i> @fat</a>
<a aria-expanded="true" class="dropdown-item" data-toggle="pill" href="component-pills-component.html#dropdownEle42" id="dropdownEle42-tab"><i class="la la-fighter-jet"></i> @mdo</a>
</div>
</li>
<li class="nav-item">
<a aria-expanded="false" class="nav-link" data-toggle="pill" href="component-pills-component.html#aboutEle4" id="aboutEle4-tab">About <span class="badge badge-pill badge-glow badge-default badge-info ml-1">6</span></a>
</li>
</ul>
<div class="tab-content px-1 pt-1">
<div aria-expanded="true" aria-labelledby="homeEle4-tab" class="tab-pane fade" id="homeEle4" role="tabpanel">
<p>Candy canes donut chupa chups candy canes lemon drops oat
                          cake wafer. Cotton candy candy canes marzipan carrot cake.
                          Sesame snaps lemon drops candy marzipan donut brownie tootsie
                          roll. Icing croissant bonbon biscuit gummi bears.</p>
</div>
<div aria-expanded="false" aria-labelledby="profileEle4-tab" class="tab-pane fade active in" id="profileEle4" role="tabpanel">
<p>Pudding candy canes sugar plum cookie chocolate cake powder
                          croissant. Carrot cake tiramisu danish candy cake muffin
                          croissant tart dessert. Tiramisu caramels candy canes chocolate
                          cake sweet roll liquorice icing cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownEle41-tab" class="tab-pane fade" id="dropdownEle41" role="tabpanel">
<p>Cake croissant lemon drops gummi bears carrot cake biscuit
                          cupcake croissant. Macaroon lemon drops muffin jelly sugar
                          plum chocolate cupcake danish icing. Soufflé tootsie roll
                          lemon drops sweet roll cake icing cookie halvah cupcake.</p>
</div>
<div aria-expanded="false" aria-labelledby="dropdownEle42-tab" class="tab-pane fade" id="dropdownEle42" role="tabpanel">
<p>Chocolate croissant cupcake croissant jelly donut. Cheesecake
                          toffee apple pie chocolate bar biscuit tart croissant.
                          Lemon drops danish cookie. Oat cake macaroon icing tart
                          lollipop cookie sweet bear claw.</p>
</div>
<div aria-expanded="false" aria-labelledby="aboutEle4-tab" class="tab-pane fade" id="aboutEle4" role="tabpanel">
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
<!-- Pills Elements end -->
</div>
