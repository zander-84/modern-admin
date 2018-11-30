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
                    <li class="breadcrumb-item"><a href="#">Components</a>
                    </li>
                    <li class="breadcrumb-item active">Tabs
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content-header-right col-md-6 col-12">
        <div class="btn-group float-md-right">
            <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu arrow"><a class="dropdown-item" href="#"><i class="fa fa-calendar-check mr-1"></i> Calender</a><a class="dropdown-item" href="#"><i class="fa fa-cart-plus mr-1"></i> Cart</a><a class="dropdown-item" href="#"><i class="fa fa-life-ring mr-1"></i> Support</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fa fa-cog mr-1"></i> Settings</a>
            </div>
        </div>
    </div>
</div>
<div class="content-body"><!-- Basic tabs start -->
    <section id="basic-tabs-components">
        <div class="row match-height">
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic Tabs</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>Takes the basic nav from above and adds the <code>.nav-tabs</code> class to generate a tabbed interface. </p>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">Tab 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">Tab 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#tab3" aria-expanded="false">Tab 3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled">Disabled</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
                                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                </div>
                                <div class="tab-pane" id="tab2" aria-labelledby="base-tab2">
                                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                </div>
                                <div class="tab-pane" id="tab3" aria-labelledby="base-tab3">
                                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                            <p>You can activate a tab navigation by simply specifying <code>data-toggle="tab"</code> on an element.</p>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" aria-controls="home" aria-expanded="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" aria-controls="profile" aria-expanded="false">Profile</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdown1-tab" href="#dropdown1" data-toggle="tab" aria-controls="dropdown1" aria-expanded="true">@fat</a>
                                        <a class="dropdown-item" id="dropdown2-tab" href="#dropdown2" data-toggle="tab" aria-controls="dropdown2" aria-expanded="true">@mdo</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" aria-controls="about" aria-expanded="false">About</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane" id="home" aria-labelledby="home-tab" aria-expanded="true">
                                    <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                </div>
                                <div class="tab-pane active" id="profile" role="tabpanel" aria-labelledby="profile-tab" aria-expanded="false">
                                    <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdown1" role="tabpanel" aria-labelledby="dropdown1-tab" aria-expanded="false">
                                    <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdown2" role="tabpanel" aria-labelledby="dropdown2-tab" aria-expanded="false">
                                    <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                </div>
                                <div class="tab-pane" id="about" role="tabpanel" aria-labelledby="about-tab" aria-expanded="false">
                                    <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
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
                            <p>Use <code>.nav-top-border.no-hover-bg</code> class for top bordered active type. </p>
                            <ul class="nav nav-tabs nav-top-border no-hover-bg">
                                <li class="nav-item">
                                    <a class="nav-link active" id="base-tab11" data-toggle="tab" aria-controls="tab11" href="#tab11" aria-expanded="true">Tab 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-tab12" data-toggle="tab" aria-controls="tab12" href="#tab12" aria-expanded="false">Tab 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-tab13" data-toggle="tab" aria-controls="tab13" href="#tab13" aria-expanded="false">Tab 3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled">Disabled</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="tab11" aria-expanded="true" aria-labelledby="base-tab11">
                                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                </div>
                                <div class="tab-pane" id="tab12" aria-labelledby="base-tab12">
                                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                </div>
                                <div class="tab-pane" id="tab13" aria-labelledby="base-tab13">
                                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                            <p>Use <code>.nav-top-border.no-hover-bg</code> class for top borderd active status type.</p>
                            <ul class="nav nav-tabs nav-top-border no-hover-bg">
                                <li class="nav-item">
                                    <a class="nav-link" id="home-tab1" data-toggle="tab" href="#home1" aria-controls="home1" aria-expanded="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="profile-tab1" data-toggle="tab" href="#profile1" aria-controls="profile1" aria-expanded="false">Profile</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdown11-tab" href="#dropdown11" data-toggle="tab" aria-controls="dropdown11" aria-expanded="true">@fat</a>
                                        <a class="dropdown-item" id="dropdown12-tab" href="#dropdown12" data-toggle="tab" aria-controls="dropdown12" aria-expanded="true">@mdo</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="about-tab1" data-toggle="tab" href="#about1" aria-controls="about1" aria-expanded="false">About</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane" id="home1" aria-labelledby="home-tab1" aria-expanded="true">
                                    <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                </div>
                                <div class="tab-pane active" id="profile1" role="tabpanel" aria-labelledby="profile-tab1" aria-expanded="false">
                                    <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdown11" role="tabpanel" aria-labelledby="dropdown11-tab" aria-expanded="false">
                                    <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdown12" role="tabpanel" aria-labelledby="dropdown12-tab" aria-expanded="false">
                                    <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                </div>
                                <div class="tab-pane" id="about1" role="tabpanel" aria-labelledby="about-tab1" aria-expanded="false">
                                    <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
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
                            <p>Use <code>.nav-topline</code> class for topline box active type. </p>
                            <ul class="nav nav-tabs nav-topline">
                                <li class="nav-item">
                                    <a class="nav-link active" id="base-tab21" data-toggle="tab" aria-controls="tab21" href="#tab21" aria-expanded="true">Tab 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-tab22" data-toggle="tab" aria-controls="tab22" href="#tab22" aria-expanded="false">Tab 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-tab23" data-toggle="tab" aria-controls="tab23" href="#tab23" aria-expanded="false">Tab 3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled">Disabled</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1 border-grey border-lighten-2 border-0-top">
                                <div role="tabpanel" class="tab-pane active" id="tab21" aria-expanded="true" aria-labelledby="base-tab21">
                                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                </div>
                                <div class="tab-pane" id="tab22" aria-labelledby="base-tab22">
                                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                </div>
                                <div class="tab-pane" id="tab23" aria-labelledby="base-tab23">
                                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                            <p>Use <code>.nav-topline</code> class for topline box active status type.</p>
                            <ul class="nav nav-tabs nav-topline">
                                <li class="nav-item">
                                    <a class="nav-link" id="home-tab2" data-toggle="tab" href="#home2" aria-controls="home2" aria-expanded="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="profile-tab2" data-toggle="tab" href="#profile2" aria-controls="profile2" aria-expanded="false">Profile</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdown21-tab" href="#dropdown21" data-toggle="tab" aria-controls="dropdown21" aria-expanded="true">@fat</a>
                                        <a class="dropdown-item" id="dropdown22-tab" href="#dropdown22" data-toggle="tab" aria-controls="dropdown22" aria-expanded="true">@mdo</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="about-tab2" data-toggle="tab" href="#about2" aria-controls="about2" aria-expanded="false">About</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1 border-grey border-lighten-2 border-0-top">
                                <div role="tabpanel" class="tab-pane" id="home2" aria-labelledby="home-tab2" aria-expanded="true">
                                    <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                </div>
                                <div class="tab-pane active" id="profile2" role="tabpanel" aria-labelledby="profile-tab2" aria-expanded="false">
                                    <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdown21" role="tabpanel" aria-labelledby="dropdown21-tab" aria-expanded="false">
                                    <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdown22" role="tabpanel" aria-labelledby="dropdown22-tab" aria-expanded="false">
                                    <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                </div>
                                <div class="tab-pane" id="about2" role="tabpanel" aria-labelledby="about-tab2" aria-expanded="false">
                                    <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
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
                                    <a class="nav-link active" id="active-tab" data-toggle="tab" href="#active" aria-controls="active" aria-expanded="true">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="link-tab" data-toggle="tab" href="#link" aria-controls="link" aria-expanded="false">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdownOpt1-tab" href="#dropdownOpt1" data-toggle="tab" aria-controls="dropdownOpt1" aria-expanded="true">dropdown 1</a>
                                        <a class="dropdown-item" id="dropdownOpt2-tab" href="#dropdownOpt2" data-toggle="tab" aria-controls="dropdownOpt2" aria-expanded="true">dropdown 2</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="linkOpt-tab" data-toggle="tab" href="#linkOpt" aria-controls="linkOpt">Another Link</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="active" aria-labelledby="active-tab" aria-expanded="true">
                                    <p>Macaroon candy canes tootsie roll wafer lemon drops liquorice jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton candy jelly cake jelly-o sugar plum marshmallow. Dessert cotton candy macaroon chocolate sugar plum cake donut.</p>
                                </div>
                                <div class="tab-pane" id="link" role="tabpanel" aria-labelledby="link-tab" aria-expanded="false">
                                    <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps cotton candy cake sweet brownie. Cotton candy candy canes brownie. Biscuit pudding sesame snaps pudding pudding sesame snaps biscuit tiramisu.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOpt1" role="tabpanel" aria-labelledby="dropdownOpt1-tab" aria-expanded="false">
                                    <p>Fruitcake marshmallow donut wafer pastry chocolate topping cake. Powder powder gummi bears jelly beans. Gingerbread cake chocolate lollipop. Jelly oat cake pastry marshmallow sesame snaps.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOpt2" role="tabpanel" aria-labelledby="dropdownOpt2-tab" aria-expanded="false">
                                    <p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet roll dragée topping cotton candy cake jelly beans. Pie lemon drops sweet pastry candy canes chocolate cake bear claw cotton candy wafer.</p>
                                </div>
                                <div class="tab-pane" id="linkOpt" role="tabpanel" aria-labelledby="linkOpt-tab" aria-expanded="false">
                                    <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread powder chocolate cake icing. Cheesecake gummi bears ice cream marzipan.</p>
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
                            <p>Use <code>.nav-justified.nav-top-border.no-hover-bg</code> classes justified top bordered tabs. you can also use <code>.nav-topline</code> class in place of <code>.nav-top-border</code> class</p>
                            <ul class="nav nav-tabs nav-top-border no-hover-bg nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" id="active-tab1" data-toggle="tab" href="#active1" aria-controls="active1" aria-expanded="true">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="link-tab1" data-toggle="tab" href="#link1" aria-controls="link1" aria-expanded="false">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdownOpt1-tab1" href="#dropdownOpt11" data-toggle="tab" aria-controls="dropdownOpt11" aria-expanded="true">dropdown 1</a>
                                        <a class="dropdown-item" id="dropdownOpt2-tab1" href="#dropdownOpt12" data-toggle="tab" aria-controls="dropdownOpt12" aria-expanded="true">dropdown 2</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="linkOpt-tab1" data-toggle="tab" href="#linkOpt1" aria-controls="linkOpt1">Another Link</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="active1" aria-labelledby="active-tab1" aria-expanded="true">
                                    <p>Macaroon candy canes tootsie roll wafer lemon drops liquorice jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton candy jelly cake jelly-o sugar plum marshmallow. Dessert cotton candy macaroon chocolate sugar plum cake donut.</p>
                                </div>
                                <div class="tab-pane" id="link1" role="tabpanel" aria-labelledby="link-tab1" aria-expanded="false">
                                    <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps cotton candy cake sweet brownie. Cotton candy candy canes brownie. Biscuit pudding sesame snaps pudding pudding sesame snaps biscuit tiramisu.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOpt11" role="tabpanel" aria-labelledby="dropdownOpt1-tab1" aria-expanded="false">
                                    <p>Fruitcake marshmallow donut wafer pastry chocolate topping cake. Powder powder gummi bears jelly beans. Gingerbread cake chocolate lollipop. Jelly oat cake pastry marshmallow sesame snaps.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOpt12" role="tabpanel" aria-labelledby="dropdownOpt2-tab1" aria-expanded="false">
                                    <p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet roll dragée topping cotton candy cake jelly beans. Pie lemon drops sweet pastry candy canes chocolate cake bear claw cotton candy wafer.</p>
                                </div>
                                <div class="tab-pane" id="linkOpt1" role="tabpanel" aria-labelledby="linkOpt-tab1" aria-expanded="false">
                                    <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread powder chocolate cake icing. Cheesecake gummi bears ice cream marzipan.</p>
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
                            <p>Use <code>.nav-underline</code> class for bottom bordered active type. </p>
                            <ul class="nav nav-tabs nav-underline no-hover-bg">
                                <li class="nav-item">
                                    <a class="nav-link active" id="base-tab31" data-toggle="tab" aria-controls="tab31" href="#tab31" aria-expanded="true">Tab 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-tab32" data-toggle="tab" aria-controls="tab32" href="#tab32" aria-expanded="false">Tab 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-tab33" data-toggle="tab" aria-controls="tab33" href="#tab33" aria-expanded="false">Tab 3</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="tab31" aria-expanded="true" aria-labelledby="base-tab31">
                                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                </div>
                                <div class="tab-pane" id="tab32" aria-labelledby="base-tab32">
                                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                </div>
                                <div class="tab-pane" id="tab33" aria-labelledby="base-tab33">
                                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                            <p>Use <code>.nav-underline</code> class for bottom borderd active status type.</p>
                            <ul class="nav nav-tabs nav-underline no-hover-bg">
                                <li class="nav-item">
                                    <a class="nav-link" id="home-tab3" data-toggle="tab" href="#home3" aria-controls="home3" aria-expanded="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="profile-tab3" data-toggle="tab" href="#profile3" aria-controls="profile3" aria-expanded="false">Profile</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdown31-tab" href="#dropdown31" data-toggle="tab" aria-controls="dropdown31" aria-expanded="true">@fat</a>
                                        <a class="dropdown-item" id="dropdown32-tab" href="#dropdown32" data-toggle="tab" aria-controls="dropdown32" aria-expanded="true">@mdo</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="about-tab3" data-toggle="tab" href="#about3" aria-controls="about3" aria-expanded="false">About</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane" id="home3" aria-labelledby="home-tab3" aria-expanded="true">
                                    <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                </div>
                                <div class="tab-pane active" id="profile3" role="tabpanel" aria-labelledby="profile-tab3" aria-expanded="false">
                                    <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdown31" role="tabpanel" aria-labelledby="dropdown31-tab" aria-expanded="false">
                                    <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdown32" role="tabpanel" aria-labelledby="dropdown32-tab" aria-expanded="false">
                                    <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                </div>
                                <div class="tab-pane" id="about3" role="tabpanel" aria-labelledby="about-tab3" aria-expanded="false">
                                    <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
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
                            <p>Use <code>.nav-linetriangle</code> class for bottom triangle active type. </p>
                            <ul class="nav nav-tabs nav-linetriangle no-hover-bg">
                                <li class="nav-item">
                                    <a class="nav-link active" id="base-tab41" data-toggle="tab" aria-controls="tab41" href="#tab41" aria-expanded="true">Tab 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-tab42" data-toggle="tab" aria-controls="tab42" href="#tab42" aria-expanded="false">Tab 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-tab43" data-toggle="tab" aria-controls="tab43" href="#tab43" aria-expanded="false">Tab 3</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="tab41" aria-expanded="true" aria-labelledby="base-tab41">
                                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                </div>
                                <div class="tab-pane" id="tab42" aria-labelledby="base-tab42">
                                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                </div>
                                <div class="tab-pane" id="tab43" aria-labelledby="base-tab43">
                                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                            <p>Use <code>.nav-linetriangle</code> class for bottom triangle active status type.</p>
                            <ul class="nav nav-tabs nav-linetriangle no-hover-bg">
                                <li class="nav-item">
                                    <a class="nav-link" id="home-tab4" data-toggle="tab" href="#home4" aria-controls="home4" aria-expanded="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="profile-tab4" data-toggle="tab" href="#profile4" aria-controls="profile4" aria-expanded="false">Profile</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdown41-tab" href="#dropdown41" data-toggle="tab" aria-controls="dropdown41" aria-expanded="true">@fat</a>
                                        <a class="dropdown-item" id="dropdown42-tab" href="#dropdown42" data-toggle="tab" aria-controls="dropdown42" aria-expanded="true">@mdo</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="about-tab4" data-toggle="tab" href="#about4" aria-controls="about4" aria-expanded="false">About</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane" id="home4" aria-labelledby="home-tab4" aria-expanded="true">
                                    <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                </div>
                                <div class="tab-pane active" id="profile4" role="tabpanel" aria-labelledby="profile-tab4" aria-expanded="false">
                                    <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdown41" role="tabpanel" aria-labelledby="dropdown41-tab" aria-expanded="false">
                                    <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdown42" role="tabpanel" aria-labelledby="dropdown42-tab" aria-expanded="false">
                                    <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                </div>
                                <div class="tab-pane" id="about4" role="tabpanel" aria-labelledby="about-tab4" aria-expanded="false">
                                    <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
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
                            <p>Use <code>.nav-justified.nav-underline</code> classes justified bottom bordered tabs.</p>
                            <ul class="nav nav-tabs nav-underline no-hover-bg nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" id="active-tab32" data-toggle="tab" href="#active32" aria-controls="active32" aria-expanded="true">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="link-tab32" data-toggle="tab" href="#link32" aria-controls="link32" aria-expanded="false">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdownOpt1-tab2" href="#dropdownOpt21" data-toggle="tab" aria-controls="dropdownOpt21" aria-expanded="true">dropdown 1</a>
                                        <a class="dropdown-item" id="dropdownOpt2-tab2" href="#dropdownOpt22" data-toggle="tab" aria-controls="dropdownOpt22" aria-expanded="true">dropdown 2</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="linkOpt-tab2" data-toggle="tab" href="#linkOpt2" aria-controls="linkOpt2">Another Link</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="active32" aria-labelledby="active-tab32" aria-expanded="true">
                                    <p>Macaroon candy canes tootsie roll wafer lemon drops liquorice jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton candy jelly cake jelly-o sugar plum marshmallow. Dessert cotton candy macaroon chocolate sugar plum cake donut.</p>
                                </div>
                                <div class="tab-pane" id="link32" role="tabpanel" aria-labelledby="link-tab32" aria-expanded="false">
                                    <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps cotton candy cake sweet brownie. Cotton candy candy canes brownie. Biscuit pudding sesame snaps pudding pudding sesame snaps biscuit tiramisu.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOpt21" role="tabpanel" aria-labelledby="dropdownOpt1-tab2" aria-expanded="false">
                                    <p>Fruitcake marshmallow donut wafer pastry chocolate topping cake. Powder powder gummi bears jelly beans. Gingerbread cake chocolate lollipop. Jelly oat cake pastry marshmallow sesame snaps.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOpt22" role="tabpanel" aria-labelledby="dropdownOpt2-tab2" aria-expanded="false">
                                    <p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet roll dragée topping cotton candy cake jelly beans. Pie lemon drops sweet pastry candy canes chocolate cake bear claw cotton candy wafer.</p>
                                </div>
                                <div class="tab-pane" id="linkOpt2" role="tabpanel" aria-labelledby="linkOpt-tab2" aria-expanded="false">
                                    <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread powder chocolate cake icing. Cheesecake gummi bears ice cream marzipan.</p>
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
                            <p>Use <code>.nav-justified.nav-linetriangle</code> classes justified bottom triangle tabs.</p>
                            <ul class="nav nav-tabs nav-linetriangle no-hover-bg nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" id="active-tab3" data-toggle="tab" href="#active3" aria-controls="active3" aria-expanded="true">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="link-tab3" data-toggle="tab" href="#link3" aria-controls="link3" aria-expanded="false">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdownOpt1-tab3" href="#dropdownOpt31" data-toggle="tab" aria-controls="dropdownOpt31" aria-expanded="true">dropdown 1</a>
                                        <a class="dropdown-item" id="dropdownOpt2-tab3" href="#dropdownOpt32" data-toggle="tab" aria-controls="dropdownOpt32" aria-expanded="true">dropdown 2</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="linkOpt-tab3" data-toggle="tab" href="#linkOpt3" aria-controls="linkOpt3">Another Link</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="active3" aria-labelledby="active-tab3" aria-expanded="true">
                                    <p>Macaroon candy canes tootsie roll wafer lemon drops liquorice jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton candy jelly cake jelly-o sugar plum marshmallow. Dessert cotton candy macaroon chocolate sugar plum cake donut.</p>
                                </div>
                                <div class="tab-pane" id="link3" role="tabpanel" aria-labelledby="link-tab3" aria-expanded="false">
                                    <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps cotton candy cake sweet brownie. Cotton candy candy canes brownie. Biscuit pudding sesame snaps pudding pudding sesame snaps biscuit tiramisu.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOpt31" role="tabpanel" aria-labelledby="dropdownOpt1-tab3" aria-expanded="false">
                                    <p>Fruitcake marshmallow donut wafer pastry chocolate topping cake. Powder powder gummi bears jelly beans. Gingerbread cake chocolate lollipop. Jelly oat cake pastry marshmallow sesame snaps.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOpt32" role="tabpanel" aria-labelledby="dropdownOpt2-tab3" aria-expanded="false">
                                    <p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet roll dragée topping cotton candy cake jelly beans. Pie lemon drops sweet pastry candy canes chocolate cake bear claw cotton candy wafer.</p>
                                </div>
                                <div class="tab-pane" id="linkOpt3" role="tabpanel" aria-labelledby="linkOpt-tab3" aria-expanded="false">
                                    <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread powder chocolate cake icing. Cheesecake gummi bears ice cream marzipan.</p>
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
                <p>Icon on left,right &amp; both side of the tab. Only icons tabs also available.</p>
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
                                    <a class="nav-link active" id="baseIcon-tab1" data-toggle="tab" aria-controls="tabIcon1" href="#tabIcon1" aria-expanded="true"><i class="la la-play"></i> Tab 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="baseIcon-tab2" data-toggle="tab" aria-controls="tabIcon2" href="#tabIcon2" aria-expanded="false"><i class="la la-flag"></i> Tab 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="baseIcon-tab3" data-toggle="tab" aria-controls="tabIcon3" href="#tabIcon3" aria-expanded="false"><i class="la la-cog"></i> Tab 3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled"><i class="la la-unlink"></i> Disabled</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="tabIcon1" aria-expanded="true" aria-labelledby="baseIcon-tab1">
                                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                </div>
                                <div class="tab-pane" id="tabIcon2" aria-labelledby="baseIcon-tab2">
                                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                </div>
                                <div class="tab-pane" id="tabIcon3" aria-labelledby="baseIcon-tab3">
                                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                                    <a class="nav-link" id="homeIcon-tab" data-toggle="tab" href="#homeIcon" aria-controls="homeIcon" aria-expanded="true"><i class="la la-align-justify"></i> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="profileIcon-tab" data-toggle="tab" href="#profileIcon" aria-controls="profileIcon" aria-expanded="false"><i class="la la-header"></i> Profile</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-bars"></i> Dropdown
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdownIcon1-tab" href="#dropdownIcon1" data-toggle="tab" aria-controls="dropdownIcon1" aria-expanded="true">@fat</a>
                                        <a class="dropdown-item" id="dropdownIcon2-tab" href="#dropdownIcon2" data-toggle="tab" aria-controls="dropdownIcon2" aria-expanded="true">@mdo</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="aboutIcon-tab" data-toggle="tab" href="#about" aria-controls="about" aria-expanded="false"><i class="la la-send-o"></i> About</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane" id="homeIcon" aria-labelledby="homeIcon-tab" aria-expanded="true">
                                    <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                </div>
                                <div class="tab-pane active" id="profileIcon" role="tabpanel" aria-labelledby="profileIcon-tab" aria-expanded="false">
                                    <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdownIcon1" role="tabpanel" aria-labelledby="dropdownIcon1-tab" aria-expanded="false">
                                    <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdownIcon2" role="tabpanel" aria-labelledby="dropdownIcon2-tab" aria-expanded="false">
                                    <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                </div>
                                <div class="tab-pane" id="aboutIcon" role="tabpanel" aria-labelledby="aboutIcon-tab" aria-expanded="false">
                                    <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
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
                                    <a class="nav-link active" id="baseIcon-tab11" data-toggle="tab" aria-controls="tabIcon11" href="#tabIcon11" aria-expanded="true"><i class="la la-play"></i> Tab 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="baseIcon-tab12" data-toggle="tab" aria-controls="tabIcon12" href="#tabIcon12" aria-expanded="false"><i class="la la-flag"></i> Tab 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="baseIcon-tab13" data-toggle="tab" aria-controls="tabIcon13" href="#tabIcon13" aria-expanded="false"><i class="la la-cog"></i> Tab 3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled"><i class="la la-unlink"></i> Disabled</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="tabIcon11" aria-expanded="true" aria-labelledby="baseIcon-tab11">
                                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                </div>
                                <div class="tab-pane" id="tabIcon12" aria-labelledby="baseIcon-tab12">
                                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                </div>
                                <div class="tab-pane" id="tabIcon13" aria-labelledby="baseIcon-tab3">
                                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                                    <a class="nav-link" id="homeIcon-tab1" data-toggle="tab" href="#homeIcon1" aria-controls="homeIcon1" aria-expanded="true"><i class="la la-align-justify"></i> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="profileIcon-tab1" data-toggle="tab" href="#profileIcon1" aria-controls="profileIcon1" aria-expanded="false"><i class="la la-header"></i> Profile</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-bars"></i> Dropdown
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdownIcon2-tab1" href="#dropdownIcon01" data-toggle="tab" aria-controls="dropdownIcon01" aria-expanded="true">@fat</a>
                                        <a class="dropdown-item" id="dropdownIcon2-tab2" href="#dropdownIcon02" data-toggle="tab" aria-controls="dropdownIcon02" aria-expanded="true">@mdo</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="aboutIcon1-tab" data-toggle="tab" href="#aboutIcon1" aria-controls="aboutIcon1" aria-expanded="false"><i class="la la-send-o"></i> About</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane" id="homeIcon1" aria-labelledby="homeIcon-tab1" aria-expanded="true">
                                    <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                </div>
                                <div class="tab-pane active" id="profileIcon1" role="tabpanel" aria-labelledby="profileIcon-tab1" aria-expanded="false">
                                    <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdownIcon01" role="tabpanel" aria-labelledby="dropdownIcon2-tab1" aria-expanded="false">
                                    <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdownIcon02" role="tabpanel" aria-labelledby="dropdownIcon2-tab2" aria-expanded="false">
                                    <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                </div>
                                <div class="tab-pane" id="aboutIcon1" role="tabpanel" aria-labelledby="aboutIcon1-tab" aria-expanded="false">
                                    <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
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
                                    <a class="nav-link active" id="baseIcon-tab21" data-toggle="tab" aria-controls="tabIcon21" href="#tabIcon21" aria-expanded="true"><i class="la la-play"></i> Tab 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="baseIcon-tab22" data-toggle="tab" aria-controls="tabIcon22" href="#tabIcon22" aria-expanded="false"><i class="la la-flag"></i> Tab 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="baseIcon-tab23" data-toggle="tab" aria-controls="tabIcon23" href="#tabIcon23" aria-expanded="false"><i class="la la-cog"></i> Tab 3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled"><i class="la la-unlink"></i> Disabled</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="tabIcon21" aria-expanded="true" aria-labelledby="baseIcon-tab21">
                                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                </div>
                                <div class="tab-pane" id="tabIcon22" aria-labelledby="baseIcon-tab22">
                                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                </div>
                                <div class="tab-pane" id="tabIcon23" aria-labelledby="baseIcon-tab23">
                                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                                    <a class="nav-link" id="homeIcon1-tab1" data-toggle="tab" href="#homeIcon11" aria-controls="homeIcon11" aria-expanded="true"><i class="la la-align-justify"></i> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="profileIcon1-tab1" data-toggle="tab" href="#profileIcon11" aria-controls="profileIcon11" aria-expanded="false"><i class="la la-header"></i> Profile</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-bars"></i> Dropdown
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdownIcon11-tab1" href="#dropdownIcon11" data-toggle="tab" aria-controls="dropdownIcon11" aria-expanded="true">@fat</a>
                                        <a class="dropdown-item" id="dropdownIcon12-tab1" href="#dropdownIcon12" data-toggle="tab" aria-controls="dropdownIcon12" aria-expanded="true">@mdo</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="aboutIcon11-tab1" data-toggle="tab" href="#aboutIcon11" aria-controls="aboutIcon11" aria-expanded="false"><i class="la la-send-o"></i> About</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane" id="homeIcon11" aria-labelledby="homeIcon1-tab1" aria-expanded="true">
                                    <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                </div>
                                <div class="tab-pane active" id="profileIcon11" role="tabpanel" aria-labelledby="profileIcon1-tab1" aria-expanded="false">
                                    <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdownIcon11" role="tabpanel" aria-labelledby="dropdownIcon11-tab1" aria-expanded="false">
                                    <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdownIcon12" role="tabpanel" aria-labelledby="dropdownIcon12-tab1" aria-expanded="false">
                                    <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                </div>
                                <div class="tab-pane" id="aboutIcon11" role="tabpanel" aria-labelledby="aboutIcon11-tab1" aria-expanded="false">
                                    <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
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
                                    <a class="nav-link active" id="baseIcon-tab31" data-toggle="tab" aria-controls="tabIcon31" href="#tabIcon31" aria-expanded="true"><i class="la la-play"></i> Tab 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="baseIcon-tab32" data-toggle="tab" aria-controls="tabIcon32" href="#tabIcon32" aria-expanded="false"><i class="la la-flag"></i> Tab 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="baseIcon-tab33" data-toggle="tab" aria-controls="tabIcon33" href="#tabIcon33" aria-expanded="false"><i class="la la-cog"></i> Tab 3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled"><i class="la la-unlink"></i> Disabled</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="tabIcon31" aria-expanded="true" aria-labelledby="baseIcon-tab31">
                                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                </div>
                                <div class="tab-pane" id="tabIcon32" aria-labelledby="baseIcon-tab32">
                                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                </div>
                                <div class="tab-pane" id="tabIcon33" aria-labelledby="baseIcon-tab33">
                                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                                    <a class="nav-link" id="homeIcon2-tab1" data-toggle="tab" href="#homeIcon21" aria-controls="homeIcon21" aria-expanded="true"><i class="la la-align-justify"></i> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="profileIcon2-tab1" data-toggle="tab" href="#profileIcon21" aria-controls="profileIcon21" aria-expanded="false"><i class="la la-header"></i> Profile</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-bars"></i> Dropdown
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdownIcon21-tab1" href="#dropdownIcon21" data-toggle="tab" aria-controls="dropdownIcon21" aria-expanded="true">@fat</a>
                                        <a class="dropdown-item" id="dropdownIcon22-tab1" href="#dropdownIcon22" data-toggle="tab" aria-controls="dropdownIcon22" aria-expanded="true">@mdo</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="aboutIcon21-tab1" data-toggle="tab" href="#aboutIcon21" aria-controls="aboutIcon21" aria-expanded="false"><i class="la la-send-o"></i> About</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane" id="homeIcon21" aria-labelledby="homeIcon2-tab1" aria-expanded="true">
                                    <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                </div>
                                <div class="tab-pane active" id="profileIcon21" role="tabpanel" aria-labelledby="profileIcon2-tab1" aria-expanded="false">
                                    <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdownIcon21" role="tabpanel" aria-labelledby="dropdownIcon21-tab1" aria-expanded="false">
                                    <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdownIcon22" role="tabpanel" aria-labelledby="dropdownIcon22-tab1" aria-expanded="false">
                                    <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                </div>
                                <div class="tab-pane" id="aboutIcon21" role="tabpanel" aria-labelledby="aboutIcon21-tab1" aria-expanded="false">
                                    <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
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
                            <p>Use <code>.nav-iconfall</code> class for icon fall for active state.</p>
                            <ul class="nav nav-tabs nav-iconfall">
                                <li class="nav-item">
                                    <a class="nav-link active" id="baseIcon-tab41" data-toggle="tab" aria-controls="tabIcon41" href="#tabIcon41" aria-expanded="true"><i class="la la-play"></i> Tab 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="baseIcon-tab42" data-toggle="tab" aria-controls="tabIcon42" href="#tabIcon42" aria-expanded="false"><i class="la la-flag"></i> Tab 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="baseIcon-tab43" data-toggle="tab" aria-controls="tabIcon43" href="#tabIcon43" aria-expanded="false"><i class="la la-cog"></i> Tab 3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled"><i class="la la-unlink"></i> Disabled</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="tabIcon41" aria-expanded="true" aria-labelledby="baseIcon-tab41">
                                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                </div>
                                <div class="tab-pane" id="tabIcon42" aria-labelledby="baseIcon-tab42">
                                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                </div>
                                <div class="tab-pane" id="tabIcon43" aria-labelledby="baseIcon-tab43">
                                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                            <p>Use <code>.nav-iconfall</code> class for icon fall for active state.</p>
                            <ul class="nav nav-tabs nav-iconfall">
                                <li class="nav-item">
                                    <a class="nav-link" id="homeIcon3-tab1" data-toggle="tab" href="#homeIcon31" aria-controls="homeIcon31" aria-expanded="true"><i class="la la-align-justify"></i> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="profileIcon3-tab1" data-toggle="tab" href="#profileIcon31" aria-controls="profileIcon31" aria-expanded="false"><i class="la la-header"></i> Profile</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-bars"></i> Dropdown
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdownIcon31-tab1" href="#dropdownIcon31" data-toggle="tab" aria-controls="dropdownIcon31" aria-expanded="true">@fat</a>
                                        <a class="dropdown-item" id="dropdownIcon32-tab1" href="#dropdownIcon32" data-toggle="tab" aria-controls="dropdownIcon32" aria-expanded="true">@mdo</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="aboutIcon31-tab1" data-toggle="tab" href="#aboutIcon31" aria-controls="aboutIcon31" aria-expanded="false"><i class="la la-send-o"></i> About</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane" id="homeIcon31" aria-labelledby="homeIcon3-tab1" aria-expanded="true">
                                    <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                </div>
                                <div class="tab-pane active" id="profileIcon31" role="tabpanel" aria-labelledby="profileIcon3-tab1" aria-expanded="false">
                                    <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdownIcon31" role="tabpanel" aria-labelledby="dropdownIcon31-tab1" aria-expanded="false">
                                    <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdownIcon32" role="tabpanel" aria-labelledby="dropdownIcon32-tab1" aria-expanded="false">
                                    <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                </div>
                                <div class="tab-pane" id="aboutIcon31" role="tabpanel" aria-labelledby="aboutIcon31-tab1" aria-expanded="false">
                                    <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
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
                            <p>Use <code>.nav-only-icon</code> class when you use only icons, So that will increase font size.</p>
                            <ul class="nav nav-tabs nav-only-icon nav-top-border no-hover-bg">
                                <li class="nav-item">
                                    <a class="nav-link active" id="baseOnlyIcon-tab11" data-toggle="tab" aria-controls="tabOnlyIcon11" href="#tabOnlyIcon11" aria-expanded="true"><i class="la la-play"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="baseOnlyIcon-tab12" data-toggle="tab" aria-controls="tabOnlyIcon12" href="#tabOnlyIcon12" aria-expanded="false"><i class="la la-flag"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="baseOnlyIcon-tab23" data-toggle="tab" aria-controls="tabOnlyIcon13" href="#tabOnlyIcon13" aria-expanded="false"><i class="la la-cog"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled"><i class="la la-unlink"></i></a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="tabOnlyIcon11" aria-expanded="true" aria-labelledby="baseOnlyIcon-tab11">
                                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                </div>
                                <div class="tab-pane" id="tabOnlyIcon12" aria-labelledby="baseOnlyIcon-tab12">
                                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                </div>
                                <div class="tab-pane" id="tabOnlyIcon13" aria-labelledby="baseOnlyIcon-tab23">
                                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                            <p>Use <code>.nav-only-icon</code> class when you use only icons, So that will increase font size.</p>
                            <ul class="nav nav-tabs nav-only-icon nav-top-border no-hover-bg">
                                <li class="nav-item">
                                    <a class="nav-link" id="homeOnlyIcon-tab1" data-toggle="tab" href="#homeOnlyIcon1" aria-controls="homeOnlyIcon1" aria-expanded="true"><i class="la la-align-justify"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="profileOnlyIcon-tab1" data-toggle="tab" href="#profileOnlyIcon1" aria-controls="profileOnlyIcon1" aria-expanded="false"><i class="la la-header"></i></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-bars"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdownOnlyIcon1-tab" href="#dropdownOnlyIcon1" data-toggle="tab" aria-controls="dropdownOnlyIcon1" aria-expanded="true">@fat</a>
                                        <a class="dropdown-item" id="dropdownOnlyIcon2-tab" href="#dropdownOnlyIcon2" data-toggle="tab" aria-controls="dropdownOnlyIcon2" aria-expanded="true">@mdo</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="aboutOnlyIcon1-tab" data-toggle="tab" href="#aboutOnlyIcon1" aria-controls="aboutOnlyIcon1" aria-expanded="false"><i class="la la-send-o"></i></a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane" id="homeOnlyIcon1" aria-labelledby="homeOnlyIcon-tab1" aria-expanded="true">
                                    <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                </div>
                                <div class="tab-pane active" id="profileOnlyIcon1" role="tabpanel" aria-labelledby="profileOnlyIcon-tab1" aria-expanded="false">
                                    <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOnlyIcon1" role="tabpanel" aria-labelledby="dropdownOnlyIcon1-tab" aria-expanded="false">
                                    <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOnlyIcon2" role="tabpanel" aria-labelledby="dropdownOnlyIcon2-tab" aria-expanded="false">
                                    <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                </div>
                                <div class="tab-pane" id="aboutOnlyIcon1" role="tabpanel" aria-labelledby="aboutOnlyIcon1-tab" aria-expanded="false">
                                    <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
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
                <hr>
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
                                    <a class="nav-link active" id="activeIcon-tab" data-toggle="tab" href="#activeIcon" aria-controls="activeIcon" aria-expanded="true"><i class="ft-heart"></i> Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="linkIcon-tab" data-toggle="tab" href="#linkIcon" aria-controls="linkIcon" aria-expanded="false"><i class="ft-link"></i> Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="ft-anchor"></i> Dropdown
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdownOptIcon1-tab" href="#dropdownOptIcon1" data-toggle="tab" aria-controls="dropdownOptIcon1" aria-expanded="true">dropdown 1</a>
                                        <a class="dropdown-item" id="dropdownOptIcon2-tab" href="#dropdownOptIcon2" data-toggle="tab" aria-controls="dropdownOptIcon2" aria-expanded="true">dropdown 2</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="linkOptIcon-tab" data-toggle="tab" href="#linkOptIcon" aria-controls="linkOptIcon"><i class="ft-external-link"></i> Link</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="activeIcon" aria-labelledby="activeIcon-tab" aria-expanded="true">
                                    <p>Macaroon candy canes tootsie roll wafer lemon drops liquorice jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton candy jelly cake jelly-o sugar plum marshmallow. Dessert cotton candy macaroon chocolate sugar plum cake donut.</p>
                                </div>
                                <div class="tab-pane" id="linkIcon" role="tabpanel" aria-labelledby="linkIcon-tab" aria-expanded="false">
                                    <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps cotton candy cake sweet brownie. Cotton candy candy canes brownie. Biscuit pudding sesame snaps pudding pudding sesame snaps biscuit tiramisu.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOptIcon1" role="tabpanel" aria-labelledby="dropdownOptIcon1-tab" aria-expanded="false">
                                    <p>Fruitcake marshmallow donut wafer pastry chocolate topping cake. Powder powder gummi bears jelly beans. Gingerbread cake chocolate lollipop. Jelly oat cake pastry marshmallow sesame snaps.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOptIcon2" role="tabpanel" aria-labelledby="dropdownOptIcon2-tab" aria-expanded="false">
                                    <p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet roll dragée topping cotton candy cake jelly beans. Pie lemon drops sweet pastry candy canes chocolate cake bear claw cotton candy wafer.</p>
                                </div>
                                <div class="tab-pane" id="linkOptIcon" role="tabpanel" aria-labelledby="linkOptIcon-tab" aria-expanded="false">
                                    <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread powder chocolate cake icing. Cheesecake gummi bears ice cream marzipan.</p>
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
                                    <a class="nav-link active" id="activeIcon1-tab1" data-toggle="tab" href="#activeIcon1" aria-controls="activeIcon1" aria-expanded="true"><i class="ft-heart"></i> Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="linkIcon1-tab1" data-toggle="tab" href="#linkIcon1" aria-controls="linkIcon1" aria-expanded="false"><i class="ft-link"></i> Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="ft-anchor"></i> Dropdown
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdownOptIcon1-tab1" href="#dropdownOptIcon11" data-toggle="tab" aria-controls="dropdownOptIcon11" aria-expanded="true">dropdown 1</a>
                                        <a class="dropdown-item" id="dropdownOptIcon2-tab1" href="#dropdownOptIcon12" data-toggle="tab" aria-controls="dropdownOptIcon12" aria-expanded="true">dropdown 2</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="linkIconOpt1-tab1" data-toggle="tab" href="#linkIconOpt1" aria-controls="linkIconOpt1"><i class="ft-external-link"></i> Link</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="activeIcon1" aria-labelledby="activeIcon1-tab1" aria-expanded="true">
                                    <p>Macaroon candy canes tootsie roll wafer lemon drops liquorice jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton candy jelly cake jelly-o sugar plum marshmallow. Dessert cotton candy macaroon chocolate sugar plum cake donut.</p>
                                </div>
                                <div class="tab-pane" id="linkIcon1" role="tabpanel" aria-labelledby="linkIcon1-tab1" aria-expanded="false">
                                    <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps cotton candy cake sweet brownie. Cotton candy candy canes brownie. Biscuit pudding sesame snaps pudding pudding sesame snaps biscuit tiramisu.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOptIcon11" role="tabpanel" aria-labelledby="dropdownOptIcon1-tab1" aria-expanded="false">
                                    <p>Fruitcake marshmallow donut wafer pastry chocolate topping cake. Powder powder gummi bears jelly beans. Gingerbread cake chocolate lollipop. Jelly oat cake pastry marshmallow sesame snaps.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOptIcon12" role="tabpanel" aria-labelledby="dropdownOptIcon2-tab1" aria-expanded="false">
                                    <p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet roll dragée topping cotton candy cake jelly beans. Pie lemon drops sweet pastry candy canes chocolate cake bear claw cotton candy wafer.</p>
                                </div>
                                <div class="tab-pane" id="linkIconOpt1" role="tabpanel" aria-labelledby="linkIconOpt1-tab1" aria-expanded="false">
                                    <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread powder chocolate cake icing. Cheesecake gummi bears ice cream marzipan.</p>
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
                                    <a class="nav-link active" id="activeIcon12-tab1" data-toggle="tab" href="#activeIcon12" aria-controls="activeIcon12" aria-expanded="true"><i class="ft-heart"></i> Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="linkIcon12-tab1" data-toggle="tab" href="#linkIcon12" aria-controls="linkIcon12" aria-expanded="false"><i class="ft-link"></i> Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="ft-anchor"></i> Dropdown
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdownOptIcon21-tab1" href="#dropdownOptIcon21" data-toggle="tab" aria-controls="dropdownOptIcon21" aria-expanded="true">dropdown 1</a>
                                        <a class="dropdown-item" id="dropdownOptIcon22-tab1" href="#dropdownOptIcon22" data-toggle="tab" aria-controls="dropdownOptIcon22" aria-expanded="true">dropdown 2</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="linkIconOpt11-tab1" data-toggle="tab" href="#linkIconOpt11" aria-controls="linkIconOpt11"><i class="ft-external-link"></i> Link</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="activeIcon12" aria-labelledby="activeIcon12-tab1" aria-expanded="true">
                                    <p>Macaroon candy canes tootsie roll wafer lemon drops liquorice jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton candy jelly cake jelly-o sugar plum marshmallow. Dessert cotton candy macaroon chocolate sugar plum cake donut.</p>
                                </div>
                                <div class="tab-pane" id="linkIcon12" role="tabpanel" aria-labelledby="linkIcon12-tab1" aria-expanded="false">
                                    <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps cotton candy cake sweet brownie. Cotton candy candy canes brownie. Biscuit pudding sesame snaps pudding pudding sesame snaps biscuit tiramisu.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOptIcon21" role="tabpanel" aria-labelledby="dropdownOptIcon21-tab1" aria-expanded="false">
                                    <p>Fruitcake marshmallow donut wafer pastry chocolate topping cake. Powder powder gummi bears jelly beans. Gingerbread cake chocolate lollipop. Jelly oat cake pastry marshmallow sesame snaps.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOptIcon22" role="tabpanel" aria-labelledby="dropdownOptIcon22-tab1" aria-expanded="false">
                                    <p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet roll dragée topping cotton candy cake jelly beans. Pie lemon drops sweet pastry candy canes chocolate cake bear claw cotton candy wafer.</p>
                                </div>
                                <div class="tab-pane" id="linkIconOpt11" role="tabpanel" aria-labelledby="linkIconOpt11-tab1" aria-expanded="false">
                                    <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread powder chocolate cake icing. Cheesecake gummi bears ice cream marzipan.</p>
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
                                    <a class="nav-link active" id="activeIcon22-tab1" data-toggle="tab" href="#activeIcon22" aria-controls="activeIcon22" aria-expanded="true"><i class="ft-heart"></i> Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="linkIcon22-tab1" data-toggle="tab" href="#linkIcon22" aria-controls="linkIcon22" aria-expanded="false"><i class="ft-link"></i> Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="ft-anchor"></i> Dropdown
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdownOptIcon31-tab1" href="#dropdownOptIcon31" data-toggle="tab" aria-controls="dropdownOptIcon31" aria-expanded="true">dropdown 1</a>
                                        <a class="dropdown-item" id="dropdownOptIcon32-tab1" href="#dropdownOptIcon32" data-toggle="tab" aria-controls="dropdownOptIcon32" aria-expanded="true">dropdown 2</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="linkIconOpt21-tab1" data-toggle="tab" href="#linkIconOpt21" aria-controls="linkIconOpt21"><i class="ft-external-link"></i> Link</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="activeIcon22" aria-labelledby="activeIcon22-tab1" aria-expanded="true">
                                    <p>Macaroon candy canes tootsie roll wafer lemon drops liquorice jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton candy jelly cake jelly-o sugar plum marshmallow. Dessert cotton candy macaroon chocolate sugar plum cake donut.</p>
                                </div>
                                <div class="tab-pane" id="linkIcon22" role="tabpanel" aria-labelledby="linkIcon22-tab1" aria-expanded="false">
                                    <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps cotton candy cake sweet brownie. Cotton candy candy canes brownie. Biscuit pudding sesame snaps pudding pudding sesame snaps biscuit tiramisu.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOptIcon31" role="tabpanel" aria-labelledby="dropdownOptIcon31-tab1" aria-expanded="false">
                                    <p>Fruitcake marshmallow donut wafer pastry chocolate topping cake. Powder powder gummi bears jelly beans. Gingerbread cake chocolate lollipop. Jelly oat cake pastry marshmallow sesame snaps.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOptIcon32" role="tabpanel" aria-labelledby="dropdownOptIcon32-tab1" aria-expanded="false">
                                    <p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet roll dragée topping cotton candy cake jelly beans. Pie lemon drops sweet pastry candy canes chocolate cake bear claw cotton candy wafer.</p>
                                </div>
                                <div class="tab-pane" id="linkIconOpt21" role="tabpanel" aria-labelledby="linkIconOpt21-tab1" aria-expanded="false">
                                    <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread powder chocolate cake icing. Cheesecake gummi bears ice cream marzipan.</p>
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
                            <p>Use <code>.nav-iconfall</code> class for icon fall for active state.</p>
                            <ul class="nav nav-tabs nav-iconfall nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" id="activeIcon32-tab1" data-toggle="tab" href="#activeIcon32" aria-controls="activeIcon32" aria-expanded="true"><i class="ft-heart"></i> Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="linkIcon32-tab1" data-toggle="tab" href="#linkIcon32" aria-controls="linkIcon32" aria-expanded="false"><i class="ft-link"></i> Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="ft-anchor"></i> Dropdown
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdownOptIcon41-tab1" href="#dropdownOptIcon41" data-toggle="tab" aria-controls="dropdownOptIcon41" aria-expanded="true">dropdown 1</a>
                                        <a class="dropdown-item" id="dropdownOptIcon42-tab1" href="#dropdownOptIcon42" data-toggle="tab" aria-controls="dropdownOptIcon42" aria-expanded="true">dropdown 2</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="linkIconOpt31-tab1" data-toggle="tab" href="#linkIconOpt31" aria-controls="linkIconOpt31"><i class="ft-external-link"></i> Link</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="activeIcon32" aria-labelledby="activeIcon32-tab1" aria-expanded="true">
                                    <p>Macaroon candy canes tootsie roll wafer lemon drops liquorice jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton candy jelly cake jelly-o sugar plum marshmallow. Dessert cotton candy macaroon chocolate sugar plum cake donut.</p>
                                </div>
                                <div class="tab-pane" id="linkIcon32" role="tabpanel" aria-labelledby="linkIcon32-tab1" aria-expanded="false">
                                    <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps cotton candy cake sweet brownie. Cotton candy candy canes brownie. Biscuit pudding sesame snaps pudding pudding sesame snaps biscuit tiramisu.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOptIcon41" role="tabpanel" aria-labelledby="dropdownOptIcon41-tab1" aria-expanded="false">
                                    <p>Fruitcake marshmallow donut wafer pastry chocolate topping cake. Powder powder gummi bears jelly beans. Gingerbread cake chocolate lollipop. Jelly oat cake pastry marshmallow sesame snaps.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOptIcon42" role="tabpanel" aria-labelledby="dropdownOptIcon42-tab1" aria-expanded="false">
                                    <p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet roll dragée topping cotton candy cake jelly beans. Pie lemon drops sweet pastry candy canes chocolate cake bear claw cotton candy wafer.</p>
                                </div>
                                <div class="tab-pane" id="linkIconOpt31" role="tabpanel" aria-labelledby="linkIconOpt31-tab1" aria-expanded="false">
                                    <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread powder chocolate cake icing. Cheesecake gummi bears ice cream marzipan.</p>
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
                            <p>Use <code>.nav-only-icon</code> class when you use only icons, So that will increase font size.</p>
                            <ul class="nav nav-tabs nav-only-icon nav-top-border no-hover-bg nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" id="activeOnlyIcon1-tab1" data-toggle="tab" href="#activeOnlyIcon1" aria-controls="activeOnlyIcon1" aria-expanded="true"><i class="ft-heart"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="linkOnlyIcon1-tab1" data-toggle="tab" href="#linkOnlyIcon1" aria-controls="linkOnlyIcon1" aria-expanded="false"><i class="ft-link"></i></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="ft-anchor"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdownOptOnlyIcon1-tab1" href="#dropdownOptOnlyIcon11" data-toggle="tab" aria-controls="dropdownOptOnlyIcon11" aria-expanded="true">dropdown 1</a>
                                        <a class="dropdown-item" id="dropdownOptOnlyIcon2-tab1" href="#dropdownOptOnlyIcon12" data-toggle="tab" aria-controls="dropdownOptOnlyIcon12" aria-expanded="true">dropdown 2</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="linkOnlyIconOpt1-tab1" data-toggle="tab" href="#linkOnlyIconOpt1" aria-controls="linkOnlyIconOpt1"><i class="ft-external-link"></i></a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="activeOnlyIcon1" aria-labelledby="activeOnlyIcon1-tab1" aria-expanded="true">
                                    <p>Macaroon candy canes tootsie roll wafer lemon drops liquorice jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton candy jelly cake jelly-o sugar plum marshmallow. Dessert cotton candy macaroon chocolate sugar plum cake donut.</p>
                                </div>
                                <div class="tab-pane" id="linkOnlyIcon1" role="tabpanel" aria-labelledby="linkOnlyIcon1-tab1" aria-expanded="false">
                                    <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps cotton candy cake sweet brownie. Cotton candy candy canes brownie. Biscuit pudding sesame snaps pudding pudding sesame snaps biscuit tiramisu.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOptOnlyIcon11" role="tabpanel" aria-labelledby="dropdownOptOnlyIcon1-tab1" aria-expanded="false">
                                    <p>Fruitcake marshmallow donut wafer pastry chocolate topping cake. Powder powder gummi bears jelly beans. Gingerbread cake chocolate lollipop. Jelly oat cake pastry marshmallow sesame snaps.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOptOnlyIcon12" role="tabpanel" aria-labelledby="dropdownOptOnlyIcon2-tab1" aria-expanded="false">
                                    <p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet roll dragée topping cotton candy cake jelly beans. Pie lemon drops sweet pastry candy canes chocolate cake bear claw cotton candy wafer.</p>
                                </div>
                                <div class="tab-pane" id="linkOnlyIconOpt1" role="tabpanel" aria-labelledby="linkOnlyIconOpt1-tab1" aria-expanded="false">
                                    <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread powder chocolate cake icing. Cheesecake gummi bears ice cream marzipan.</p>
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
                <hr>
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
                            <p>You can also use <code>.badge.badge-COLOR</code> classes to add label to the tab.</p>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" id="baseLable-tab1" data-toggle="tab" aria-controls="tabLable1" href="#tabLable1" aria-expanded="true"><span class="badge badge-default badge-success">New</span> Tab 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="baseLable-tab2" data-toggle="tab" aria-controls="tabLable2" href="#tabLable2" aria-expanded="false">Tab 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="baseLable-tab3" data-toggle="tab" aria-controls="tabLable3" href="#tabLable3" aria-expanded="false"><span class="badge badge-default badge-info float-right">info</span> Tab 3 </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled"><i class="ft-link-2"></i> Disabled</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="tabLable1" aria-expanded="true" aria-labelledby="baseLable-tab1">
                                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                </div>
                                <div class="tab-pane" id="tabLable2" aria-labelledby="baseLable-tab2">
                                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                </div>
                                <div class="tab-pane" id="tabLable3" aria-labelledby="baseLable-tab3">
                                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                            <p>You can also use <code>.badge.badge-COLOR</code> classes to add label to the tab.</p>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link" id="homeLable-tab" data-toggle="tab" href="#homeLable" aria-controls="homeLable" aria-expanded="true"><span class="badge badge-default badge-danger">bug</span> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="profileLable-tab" data-toggle="tab" href="#profileLable" aria-controls="profileLable" aria-expanded="false"><span class="badge badge-default badge-primary float-right">latest</span> Profile </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdownLable1-tab" href="#dropdownLable1" data-toggle="tab" aria-controls="dropdownLable1" aria-expanded="true">@fat</a>
                                        <a class="dropdown-item" id="dropdownLable2-tab" href="#dropdownLable2" data-toggle="tab" aria-controls="dropdownLable2" aria-expanded="true">@mdo</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="aboutLable-tab" data-toggle="tab" href="#aboutLable" aria-controls="aboutLable" aria-expanded="false">About</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane" id="homeLable" aria-labelledby="homeLable-tab" aria-expanded="true">
                                    <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                </div>
                                <div class="tab-pane active" id="profileLable" role="tabpanel" aria-labelledby="profileLable-tab" aria-expanded="false">
                                    <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdownLable1" role="tabpanel" aria-labelledby="dropdownLable1-tab" aria-expanded="false">
                                    <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdownLable2" role="tabpanel" aria-labelledby="dropdownLable2-tab" aria-expanded="false">
                                    <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                </div>
                                <div class="tab-pane" id="aboutLable" role="tabpanel" aria-labelledby="aboutLable-tab" aria-expanded="false">
                                    <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
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
                            <p>You can also use <code>.badge.badge-pill.badge-COLOR</code> classes to add label pill to the tab.</p>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" id="baseLable1-tab1" data-toggle="tab" aria-controls="tabLable11" href="#tabLable11" aria-expanded="true"><span class="badge badge-pill badge-glow badge-default badge-success">3</span> Tab 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="baseLable1-tab2" data-toggle="tab" aria-controls="tabLable12" href="#tabLable12" aria-expanded="false">Tab 2<span class="badge badge-pill badge-glow badge-default badge-warning float-right">2</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="baseLable1-tab3" data-toggle="tab" aria-controls="tabLable13" href="#tabLable13" aria-expanded="false"><span class="badge badge-pill badge-glow badge-default badge-info float-right">5</span> Tab 3 </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled"><i class="ft-link-2ft-link-2ft-link-2ft-link-2ft-link-2ft-link-2ft-link-2ft-link-2"></i> Disabled</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="tabLable11" aria-expanded="true" aria-labelledby="baseLable1-tab1">
                                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                </div>
                                <div class="tab-pane" id="tabLable12" aria-labelledby="baseLable1-tab2">
                                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                </div>
                                <div class="tab-pane" id="tabLable13" aria-labelledby="baseLable1-tab3">
                                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                            <p>You can also use <code>.badge.badge-pill.badge-COLOR</code> classes to add label pill to the tab.</p>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link" id="homeLable1-tab1" data-toggle="tab" href="#homeLable1" aria-controls="homeLable1" aria-expanded="true"><span class="badge badge-pill badge-glow badge-default badge-danger">4</span> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="profileLable1-tab1" data-toggle="tab" href="#profileLable1" aria-controls="profileLable1" aria-expanded="false"><span class="badge badge-pill badge-glow badge-default badge-primary float-right">3</span> Profile </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <span class="badge badge-pill badge-glow badge-default badge-success">2</span> Dropdown
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdownLable11-tab" href="#dropdownLable11" data-toggle="tab" aria-controls="dropdownLable11" aria-expanded="true">@fat</a>
                                        <a class="dropdown-item" id="dropdownLable12-tab" href="#dropdownLable12" data-toggle="tab" aria-controls="dropdownLable12" aria-expanded="true">@mdo</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="aboutLable1-tab1" data-toggle="tab" href="#aboutLable1" aria-controls="aboutLable1" aria-expanded="false"><span class="badge badge-pill badge-glow badge-default badge-warning">3</span> About</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane" id="homeLable1" aria-labelledby="homeLable1-tab1" aria-expanded="true">
                                    <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                </div>
                                <div class="tab-pane active" id="profileLable1" role="tabpanel" aria-labelledby="profileLable1-tab1" aria-expanded="false">
                                    <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdownLable11" role="tabpanel" aria-labelledby="dropdownLable11-tab" aria-expanded="false">
                                    <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                </div>
                                <div class="tab-pane" id="dropdownLable12" role="tabpanel" aria-labelledby="dropdownLable12-tab" aria-expanded="false">
                                    <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                </div>
                                <div class="tab-pane" id="aboutLable1" role="tabpanel" aria-labelledby="aboutLable1-tab1" aria-expanded="false">
                                    <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
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
                            <p>You can also use <code>.nav-justified.badge.badge-COLOR</code> classes to add label to justified tab.</p>
                            <ul class="nav nav-tabs nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" id="activeLable-tab" data-toggle="tab" href="#activeLable" aria-controls="activeLable" aria-expanded="true"><span class="badge badge-default badge-success">new</span> Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="linkLable-tab" data-toggle="tab" href="#linkLable" aria-controls="linkLable" aria-expanded="false">Link </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdownOptLable1-tab" href="#dropdownOptLable1" data-toggle="tab" aria-controls="dropdownOptLable1" aria-expanded="true">dropdown 1</a>
                                        <a class="dropdown-item" id="dropdownOptLable2-tab" href="#dropdownOptLable2" data-toggle="tab" aria-controls="dropdownOptLable2" aria-expanded="true">dropdown 2</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="linkOptLable-tab" data-toggle="tab" href="#linkOptLable" aria-controls="linkOptLable"><span class="badge badge-default badge-danger">more</span> Link </a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="activeLable" aria-labelledby="activeLable-tab" aria-expanded="true">
                                    <p>Macaroon candy canes tootsie roll wafer lemon drops liquorice jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton candy jelly cake jelly-o sugar plum marshmallow. Dessert cotton candy macaroon chocolate sugar plum cake donut.</p>
                                </div>
                                <div class="tab-pane" id="linkLable" role="tabpanel" aria-labelledby="linkLable-tab" aria-expanded="false">
                                    <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps cotton candy cake sweet brownie. Cotton candy candy canes brownie. Biscuit pudding sesame snaps pudding pudding sesame snaps biscuit tiramisu.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOptLable1" role="tabpanel" aria-labelledby="dropdownOptLable1-tab" aria-expanded="false">
                                    <p>Fruitcake marshmallow donut wafer pastry chocolate topping cake. Powder powder gummi bears jelly beans. Gingerbread cake chocolate lollipop. Jelly oat cake pastry marshmallow sesame snaps.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOptLable2" role="tabpanel" aria-labelledby="dropdownOptLable2-tab" aria-expanded="false">
                                    <p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet roll dragée topping cotton candy cake jelly beans. Pie lemon drops sweet pastry candy canes chocolate cake bear claw cotton candy wafer.</p>
                                </div>
                                <div class="tab-pane" id="linkOptLable" role="tabpanel" aria-labelledby="linkOptLable-tab" aria-expanded="false">
                                    <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread powder chocolate cake icing. Cheesecake gummi bears ice cream marzipan.</p>
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
                            <p>You can also use <code>.nav-justified.badge.badge-pill.badge-COLOR</code> classes  to add label pill to justified tab.</p>
                            <ul class="nav nav-tabs nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" id="activeLable1-tab1" data-toggle="tab" href="#activeLable1" aria-controls="activeLable1" aria-expanded="true"><span class="badge badge-pill badge-glow badge-default badge-success">2</span> Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="linkLable1-tab1" data-toggle="tab" href="#linkLable1" aria-controls="linkLable1" aria-expanded="false"><span class="badge badge-pill badge-glow badge-default badge-info float-right">1</span> Link </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <span class="badge badge-pill badge-glow badge-default badge-danger">3</span> Dropdown
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" id="dropdownOptLable11-tab" href="#dropdownOptLable11" data-toggle="tab" aria-controls="dropdownOptLable11" aria-expanded="true">dropdown 1</a>
                                        <a class="dropdown-item" id="dropdownOptLable12-tab" href="#dropdownOptLable12" data-toggle="tab" aria-controls="dropdownOptLable12" aria-expanded="true">dropdown 2</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="linkOptLable1-tab1" data-toggle="tab" href="#linkOptLable1" aria-controls="linkOptLable1"><span class="badge badge-pill badge-glow badge-default badge-primary float-right">5</span> Link </a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="activeLable1" aria-labelledby="activeLable1-tab1" aria-expanded="true">
                                    <p>Macaroon candy canes tootsie roll wafer lemon drops liquorice jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton candy jelly cake jelly-o sugar plum marshmallow. Dessert cotton candy macaroon chocolate sugar plum cake donut.</p>
                                </div>
                                <div class="tab-pane" id="linkLable1" role="tabpanel" aria-labelledby="linkLable1-tab1" aria-expanded="false">
                                    <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps cotton candy cake sweet brownie. Cotton candy candy canes brownie. Biscuit pudding sesame snaps pudding pudding sesame snaps biscuit tiramisu.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOptLable11" role="tabpanel" aria-labelledby="dropdownOptLable11-tab" aria-expanded="false">
                                    <p>Fruitcake marshmallow donut wafer pastry chocolate topping cake. Powder powder gummi bears jelly beans. Gingerbread cake chocolate lollipop. Jelly oat cake pastry marshmallow sesame snaps.</p>
                                </div>
                                <div class="tab-pane" id="dropdownOptLable12" role="tabpanel" aria-labelledby="dropdownOptLable12-tab" aria-expanded="false">
                                    <p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet roll dragée topping cotton candy cake jelly beans. Pie lemon drops sweet pastry candy canes chocolate cake bear claw cotton candy wafer.</p>
                                </div>
                                <div class="tab-pane" id="linkOptLable1" role="tabpanel" aria-labelledby="linkOptLable1-tab1" aria-expanded="false">
                                    <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread powder chocolate cake icing. Cheesecake gummi bears ice cream marzipan.</p>
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
                            <p>Wrap tabs and tab content with <code>.nav-vertical</code> class. To add left navigation use <code>.nav-left</code> class to <code>.nav.nav-tabs</code>.</p>
                            <div class="nav-vertical">
                                <ul class="nav nav-tabs nav-left flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="baseVerticalLeft-tab1" data-toggle="tab" aria-controls="tabVerticalLeft1" href="#tabVerticalLeft1" aria-expanded="true">Tab 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="baseVerticalLeft-tab2" data-toggle="tab" aria-controls="tabVerticalLeft2" href="#tabVerticalLeft2" aria-expanded="false">Tab 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="baseVerticalLeft-tab3" data-toggle="tab" aria-controls="tabVerticalLeft3" href="#tabVerticalLeft3" aria-expanded="false">Tab 3 </a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1">
                                    <div role="tabpanel" class="tab-pane active" id="tabVerticalLeft1" aria-expanded="true" aria-labelledby="baseVerticalLeft-tab1">
                                        <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                    </div>
                                    <div class="tab-pane" id="tabVerticalLeft2" aria-labelledby="baseVerticalLeft-tab2">
                                        <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                    </div>
                                    <div class="tab-pane" id="tabVerticalLeft3" aria-labelledby="baseVerticalLeft-tab3">
                                        <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                            <p>Wrap tabs and tab content with <code>.nav-vertical</code> class. To add right navigation use <code>.nav-right</code> class to <code>.nav.nav-tabs</code>.</p>
                            <div class="nav-vertical">
                                <ul class="nav nav-tabs nav-right flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="baseVerticalRight-tab1" data-toggle="tab" aria-controls="tabVerticalRight1" href="#tabVerticalRight1" aria-expanded="true">Tab 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="baseVerticalRight-tab2" data-toggle="tab" aria-controls="tabVerticalRight2" href="#tabVerticalRight2" aria-expanded="false">Tab 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="baseVerticalRight-tab3" data-toggle="tab" aria-controls="tabVerticalRight3" href="#tabVerticalRight3" aria-expanded="false">Tab 3 </a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1">
                                    <div role="tabpanel" class="tab-pane active" id="tabVerticalRight1" aria-expanded="true" aria-labelledby="baseVerticalRight-tab1">
                                        <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                    </div>
                                    <div class="tab-pane" id="tabVerticalRight2" aria-labelledby="baseVerticalRight-tab2">
                                        <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                    </div>
                                    <div class="tab-pane" id="tabVerticalRight3" aria-labelledby="baseVerticalRight-tab3">
                                        <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                            <p>Wrap tabs and tab content with <code>.nav-vertical</code> class. To add left navigation use <code>.nav-left</code> &amp; use <code>nav-border-left</code>class to <code>.nav.nav-tabs</code> for leftside border effect to tab.</p>
                            <div class="nav-vertical">
                                <ul class="nav nav-tabs nav-left nav-border-left">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="baseVerticalLeft1-tab1" data-toggle="tab" aria-controls="tabVerticalLeft11" href="#tabVerticalLeft11" aria-expanded="true">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="baseVerticalLeft1-tab2" data-toggle="tab" aria-controls="tabVerticalLeft12" href="#tabVerticalLeft12" aria-expanded="false">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="baseVerticalLeft1-tab3" data-toggle="tab" aria-controls="tabVerticalLeft13" href="#tabVerticalLeft13" aria-expanded="false">About</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1">
                                    <div role="tabpanel" class="tab-pane active" id="tabVerticalLeft11" aria-expanded="true" aria-labelledby="baseVerticalLeft1-tab1">
                                        <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                    </div>
                                    <div class="tab-pane" id="tabVerticalLeft12" aria-labelledby="baseVerticalLeft1-tab2">
                                        <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                    </div>
                                    <div class="tab-pane" id="tabVerticalLeft13" aria-labelledby="baseVerticalLeft1-tab3">
                                        <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                            <p>Wrap tabs and tab content with <code>.nav-vertical</code> class. To add right navigation use <code>.nav-right</code> &amp; use <code>nav-border-right</code>class to <code>.nav.nav-tabs</code> for leftside border effect to tab.</p>
                            <div class="nav-vertical">
                                <ul class="nav nav-tabs nav-right nav-border-right">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="baseVerticalRight1-tab1" data-toggle="tab" aria-controls="tabVerticalRight11" href="#tabVerticalRight11" aria-expanded="true">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="baseVerticalRight1-tab2" data-toggle="tab" aria-controls="tabVerticalRight12" href="#tabVerticalRight12" aria-expanded="false">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="baseVerticalRight1-tab3" data-toggle="tab" aria-controls="tabVerticalRight13" href="#tabVerticalRight13" aria-expanded="false">About</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1">
                                    <div role="tabpanel" class="tab-pane active" id="tabVerticalRight11" aria-expanded="true" aria-labelledby="baseVerticalRight1-tab1">
                                        <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                    </div>
                                    <div class="tab-pane" id="tabVerticalRight12" aria-labelledby="baseVerticalRight1-tab2">
                                        <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                    </div>
                                    <div class="tab-pane" id="tabVerticalRight13" aria-labelledby="baseVerticalRight1-tab3">
                                        <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                                        <a class="nav-link active" id="baseVerticalLeft2-tab1" data-toggle="tab" aria-controls="tabVerticalLeft21" href="#tabVerticalLeft21" aria-expanded="true"><i class="la la-align-justify"></i> Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="baseVerticalLeft2-tab2" data-toggle="tab" aria-controls="tabVerticalLeft22" href="#tabVerticalLeft22" aria-expanded="false"><i class="la la-header"></i> Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="baseVerticalLeft2-tab3" data-toggle="tab" aria-controls="tabVerticalLeft23" href="#tabVerticalLeft23" aria-expanded="false"><i class="la la-send-o"></i> About</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1">
                                    <div role="tabpanel" class="tab-pane active" id="tabVerticalLeft21" aria-expanded="true" aria-labelledby="baseVerticalLeft2-tab1">
                                        <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                    </div>
                                    <div class="tab-pane" id="tabVerticalLeft22" aria-labelledby="baseVerticalLeft2-tab2">
                                        <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                    </div>
                                    <div class="tab-pane" id="tabVerticalLeft23" aria-labelledby="baseVerticalLeft2-tab3">
                                        <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                                        <a class="nav-link active" id="baseVerticalRight2-tab1" data-toggle="tab" aria-controls="tabVerticalRight21" href="#tabVerticalRight21" aria-expanded="true"><i class="la la-align-justify float-right"></i> Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="baseVerticalRight2-tab2" data-toggle="tab" aria-controls="tabVerticalRight22" href="#tabVerticalRight22" aria-expanded="false"><i class="la la-header float-right"></i> Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="baseVerticalRight2-tab3" data-toggle="tab" aria-controls="tabVerticalRight23" href="#tabVerticalRight23" aria-expanded="false"><i class="la la-send-o float-right"></i> About</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1">
                                    <div role="tabpanel" class="tab-pane active" id="tabVerticalRight21" aria-expanded="true" aria-labelledby="baseVerticalRight2-tab1">
                                        <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                    </div>
                                    <div class="tab-pane" id="tabVerticalRight22" aria-labelledby="baseVerticalRight2-tab2">
                                        <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                    </div>
                                    <div class="tab-pane" id="tabVerticalRight23" aria-labelledby="baseVerticalRight2-tab3">
                                        <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                                        <a class="nav-link active" id="baseVerticalLeft3-tab1" data-toggle="tab" aria-controls="tabVerticalLeft31" href="#tabVerticalLeft31" aria-expanded="true"><span class="mr-1 badge badge-default badge-success">New</span> Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="baseVerticalLeft3-tab2" data-toggle="tab" aria-controls="tabVerticalLeft32" href="#tabVerticalLeft32" aria-expanded="false"><span class="mr-1 badge badge-default badge-info">info</span> Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="baseVerticalLeft3-tab3" data-toggle="tab" aria-controls="tabVerticalLeft33" href="#tabVerticalLeft33" aria-expanded="false"><span class="mr-1 badge badge-default badge-warning badge-pill badge-glow">5</span> About</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1">
                                    <div role="tabpanel" class="tab-pane active" id="tabVerticalLeft31" aria-expanded="true" aria-labelledby="baseVerticalLeft3-tab1">
                                        <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                    </div>
                                    <div class="tab-pane" id="tabVerticalLeft32" aria-labelledby="baseVerticalLeft3-tab2">
                                        <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                    </div>
                                    <div class="tab-pane" id="tabVerticalLeft33" aria-labelledby="baseVerticalLeft3-tab3">
                                        <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                                        <a class="nav-link active" id="baseVerticalRight3-tab1" data-toggle="tab" aria-controls="tabVerticalRight31" href="#tabVerticalRight31" aria-expanded="true"><span class="ml-1 badge badge-pill badge-glow badge-default badge-danger float-right">2</span>Home </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="baseVerticalRight3-tab2" data-toggle="tab" aria-controls="tabVerticalRight32" href="#tabVerticalRight32" aria-expanded="false"><span class="ml-1 badge badge-pill badge-glow badge-default badge-primary float-right">3</span>Profile </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="baseVerticalRight3-tab3" data-toggle="tab" aria-controls="tabVerticalRight33" href="#tabVerticalRight33" aria-expanded="false"><span class="ml-1 badge badge-default badge-warning float-right">New</span>About </a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1">
                                    <div role="tabpanel" class="tab-pane active" id="tabVerticalRight31" aria-expanded="true" aria-labelledby="baseVerticalRight3-tab1">
                                        <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                    </div>
                                    <div class="tab-pane" id="tabVerticalRight32" aria-labelledby="baseVerticalRight3-tab2">
                                        <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                    </div>
                                    <div class="tab-pane" id="tabVerticalRight33" aria-labelledby="baseVerticalRight3-tab3">
                                        <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
