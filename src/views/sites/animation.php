<?php



$this->title = 'Modern';


$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
        \zander84\modernadmin\assets\AnimationAsset::class,
    ]
]);

?><div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Animations</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Animation
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <button class="btn btn-danger dropdown-toggle round btn-glow px-2" id="dropdownBreadcrumbButton"
                            type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownBreadcrumbButton"><a class="dropdown-item" href="animation.html#"><i class="la la-calendar-check-o"></i> Calender</a>
                        <a class="dropdown-item" href="animation.html#"><i class="la la-cart-plus"></i> Cart</a>
                        <a class="dropdown-item" href="animation.html#"><i class="la la-life-ring"></i> Support</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="animation.html#"><i class="la la-cog"></i> Settings</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Button animation start -->
            <section id="btnAnimation" class="btnAnimation">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Button Animation</h4>
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
                                    <p>Hover over the buttons to see animated buttons. Use <code>data-animation="animation"</code>                      to button to animate button.</p>
                                    <div class="row">
                                        <div class="col-md-4 text-center mb-2">
                                            <button type="button" class="btn btn-primary width-200 buttonAnimation" data-animation="rubberBand">Rubber Band</button>
                                        </div>
                                        <div class="col-md-4 text-center mb-2">
                                            <button type="button" class="btn btn-success width-200 buttonAnimation" data-animation="tada">Tada</button>
                                        </div>
                                        <div class="col-md-4 text-center mb-2">
                                            <button type="button" class="btn btn-info width-200 buttonAnimation" data-animation="pulse">Pulse</button>
                                        </div>
                                        <div class="col-md-4 text-center mb-2">
                                            <button type="button" class="btn btn-warning width-200 buttonAnimation" data-animation="jello">Jello</button>
                                        </div>
                                        <div class="col-md-4 text-center mb-2">
                                            <button type="button" class="btn btn-danger width-200 buttonAnimation" data-animation="bounce">Bounce</button>
                                        </div>
                                        <div class="col-md-4 text-center mb-2">
                                            <button type="button" class="btn bg-blue width-200 white buttonAnimation" data-animation="flash">Flash</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Button animation end-->
            <!-- Collapse animation start-->
            <section id="clpsAnimation" class="clpsAnimation">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h4>Collapse Animation</h4>
                        <p>Collapse below section for collapse content Animation. Use <code>data-animation="animation"</code>                to <code>&lt;a&gt;</code> tag to animate accordian text. It also
                            required <code>.collapseAnimation</code> class.</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div id="accordionWrap1" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div id="heading1" role="tab" class="card-header">
                                    <a data-toggle="collapse" data-parent="#accordionWrap1" href="animation.html#accordion1" aria-expanded="true"
                                       aria-controls="accordion1" class="card-title collapseAnimation lead"
                                       data-animation="pulse">Accordion Group Item #1</a>
                                </div>
                                <div id="accordion1" role="tabpanel" aria-labelledby="heading1" class="card-collapse collapse show"
                                     aria-expanded="true">
                                    <div class="card-body">
                                        <div class="card-body">
                                            Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels
                                            chocolate cake liquorice cake wafer jelly beans croissant
                                            apple pie. Oat cake blueie pudding jelly beans. Wafer liquorice
                                            chocolate bar chocolate bar liquorice. Tootsie roll gingerbread
                                            gingerbread chocolate bar tart chupa chups sugar plum toffee.
                                            Carrot cake macaroon sweet danish. Cupcake soufflé toffee
                                            marzipan candy canes pie jelly-o. Cotton candy bonbon powder
                                            topping carrot cake cookie caramels lemon drops liquorice.
                                            Dessert cookie ice cream toffee apple pie.
                                        </div>
                                    </div>
                                </div>
                                <div id="heading2" role="tab" class="card-header">
                                    <a data-toggle="collapse" data-parent="#accordionWrap1" href="animation.html#accordion2" aria-expanded="false"
                                       aria-controls="accordion2" class="card-title collapseAnimation lead collapsed"
                                       data-animation="pulse">Accordion Group Item #2</a>
                                </div>
                                <div id="accordion2" role="tabpanel" aria-labelledby="heading2" class="card-collapse collapse"
                                     aria-expanded="false">
                                    <div class="card-body">
                                        <div class="card-body">
                                            Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon
                                            muffin jelly marshmallow cake. Pastry oat cake chupa chups.
                                            Caramels marshmallow carrot cake topping donut sesame snaps
                                            toffee tootsie roll. Lollipop sweet jelly beans oat cake
                                            biscuit pastry chocolate cake. Cupcake chocolate biscuit
                                            lemon drops cotton candy marshmallow oat cake donut. Croissant
                                            chocolate cake oat cake blueie topping carrot cake jelly
                                            beans. Dessert gingerbread marshmallow pudding donut lemon
                                            drops cake. Cake topping gummi bears cake.
                                        </div>
                                    </div>
                                </div>
                                <div id="heading3" role="tab" class="card-header">
                                    <a data-toggle="collapse" data-parent="#accordionWrap1" href="animation.html#accordion3" aria-expanded="false"
                                       aria-controls="accordion3" class="card-title collapseAnimation lead collapsed"
                                       data-animation="pulse">Accordion Group Item #3</a>
                                </div>
                                <div id="accordion3" role="tabpanel" aria-labelledby="heading3" class="card-collapse collapse"
                                     aria-expanded="false">
                                    <div class="card-body">
                                        <div class="card-body">
                                            Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake
                                            dragée jujubes donut chocolate bar chocolate cake cupcake
                                            chocolate topping. Dessert jelly beans toffee muffin tiramisu
                                            sesame snaps blueie. Cake halvah pastry soufflé oat cake
                                            candy candy canes. Lemon drops gummies gingerbread toffee.
                                            Tart jelly candy pastry. Pastry cake jelly beans carrot cake
                                            marzipan lollipop muffin. Soufflé jujubes cupcake. Powder
                                            danish candy carrot cake pastry. Tart marshmallow caramels
                                            cake macaroon gummies lollipop.
                                        </div>
                                    </div>
                                </div>
                                <div id="heading4" role="tab" class="card-header">
                                    <a data-toggle="collapse" data-parent="#accordionWrap1" href="animation.html#accordion4" aria-expanded="false"
                                       aria-controls="accordion4" class="card-title collapseAnimation lead collapsed"
                                       data-animation="pulse">Accordion Group Item #4</a>
                                </div>
                                <div id="accordion4" role="tabpanel" aria-labelledby="heading4" class="card-collapse collapse"
                                     aria-expanded="false" style="height: 0px;">
                                    <div class="card-body">
                                        <div class="card-body">
                                            Sesame snaps chocolate lollipop sesame snaps apple pie chocolate cake sweet roll.
                                            Dragée candy canes carrot cake chupa chups danish cake sugar
                                            plum candy. Cake powder biscuit bear claw. Sesame snaps cotton
                                            candy cheesecake topping ice cream cookie tiramisu. Liquorice
                                            bonbon cookie pie halvah. Cookie toffee ice cream cotton
                                            candy lollipop fruitcake. Tart cheesecake tiramisu danish
                                            marzipan pie pastry chocolate cake. Pastry bonbon lollipop
                                            oat cake pastry halvah dessert jelly. Toffee caramels croissant
                                            apple pie chupa chups toffee muffin chupa chups apple pie.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div id="accordionWrap01" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div id="heading01" role="tab" class="card-header text-right">
                                    <a data-toggle="collapse" data-parent="#accordionWrap01" href="animation.html#accordion01" aria-expanded="true"
                                       aria-controls="accordion01" data-animation="zoomIn" class="collapseAnimation card-title lead">Accordion Group Item #1</a>
                                </div>
                                <div id="accordion01" role="tabpanel" aria-labelledby="heading01" class="card-collapse collapse show"
                                     aria-expanded="true">
                                    <div class="card-body">
                                        <div class="card-body">
                                            Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels
                                            chocolate cake liquorice cake wafer jelly beans croissant
                                            apple pie. Oat cake blueie pudding jelly beans. Wafer liquorice
                                            chocolate bar chocolate bar liquorice. Tootsie roll gingerbread
                                            gingerbread chocolate bar tart chupa chups sugar plum toffee.
                                            Carrot cake macaroon sweet danish. Cupcake soufflé toffee
                                            marzipan candy canes pie jelly-o. Cotton candy bonbon powder
                                            topping carrot cake cookie caramels lemon drops liquorice.
                                            Dessert cookie ice cream toffee apple pie.
                                        </div>
                                    </div>
                                </div>
                                <div id="heading02" role="tab" class="card-header text-right">
                                    <a data-toggle="collapse" data-parent="#accordionWrap01" href="animation.html#accordion02" aria-expanded="false"
                                       aria-controls="accordion02" data-animation="zoomIn" class="collapseAnimation card-title lead collapsed">Accordion Group Item #2</a>
                                </div>
                                <div id="accordion02" role="tabpanel" aria-labelledby="heading02" class="card-collapse collapse"
                                     aria-expanded="false">
                                    <div class="card-body">
                                        <div class="card-body">
                                            Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon
                                            muffin jelly marshmallow cake. Pastry oat cake chupa chups.
                                            Caramels marshmallow carrot cake topping donut sesame snaps
                                            toffee tootsie roll. Lollipop sweet jelly beans oat cake
                                            biscuit pastry chocolate cake. Cupcake chocolate biscuit
                                            lemon drops cotton candy marshmallow oat cake donut. Croissant
                                            chocolate cake oat cake blueie topping carrot cake jelly
                                            beans. Dessert gingerbread marshmallow pudding donut lemon
                                            drops cake. Cake topping gummi bears cake.
                                        </div>
                                    </div>
                                </div>
                                <div id="heading03" role="tab" class="card-header text-right">
                                    <a data-toggle="collapse" data-parent="#accordionWrap01" href="animation.html#accordion03" aria-expanded="false"
                                       aria-controls="accordion03" data-animation="zoomIn" class="collapseAnimation card-title lead collapsed">Accordion Group Item #3</a>
                                </div>
                                <div id="accordion03" role="tabpanel" aria-labelledby="heading03" class="card-collapse collapse"
                                     aria-expanded="false">
                                    <div class="card-body">
                                        <div class="card-body">
                                            Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake
                                            dragée jujubes donut chocolate bar chocolate cake cupcake
                                            chocolate topping. Dessert jelly beans toffee muffin tiramisu
                                            sesame snaps blueie. Cake halvah pastry soufflé oat cake
                                            candy candy canes. Lemon drops gummies gingerbread toffee.
                                            Tart jelly candy pastry. Pastry cake jelly beans carrot cake
                                            marzipan lollipop muffin. Soufflé jujubes cupcake. Powder
                                            danish candy carrot cake pastry. Tart marshmallow caramels
                                            cake macaroon gummies lollipop.
                                        </div>
                                    </div>
                                </div>
                                <div id="heading04" role="tab" class="card-header text-right">
                                    <a data-toggle="collapse" data-parent="#accordionWrap01" href="animation.html#accordion04" aria-expanded="false"
                                       aria-controls="accordion04" data-animation="zoomIn" class="collapseAnimation card-title lead collapsed">Accordion Group Item #4</a>
                                </div>
                                <div id="accordion04" role="tabpanel" aria-labelledby="heading04" class="card-collapse collapse"
                                     aria-expanded="false" style="height: 0px;">
                                    <div class="card-body">
                                        <div class="card-body">
                                            Sesame snaps chocolate lollipop sesame snaps apple pie chocolate cake sweet roll.
                                            Dragée candy canes carrot cake chupa chups danish cake sugar
                                            plum candy. Cake powder biscuit bear claw. Sesame snaps cotton
                                            candy cheesecake topping ice cream cookie tiramisu. Liquorice
                                            bonbon cookie pie halvah. Cookie toffee ice cream cotton
                                            candy lollipop fruitcake. Tart cheesecake tiramisu danish
                                            marzipan pie pastry chocolate cake. Pastry bonbon lollipop
                                            oat cake pastry halvah dessert jelly. Toffee caramels croissant
                                            apple pie chupa chups toffee muffin chupa chups apple pie.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Collapse animation end -->
            <!-- Alert animation start -->
            <section id="alertAnimation" class="alertAnimation">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Alert Animation</h4>
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
                                    <p>Click on 'Play' icon to animate alert. Use <code>data-animation="animation"</code>                      to <code>&lt;a&gt;</code> tag as icon wrapper to animate alert.
                                        It also required <code>.alertAnimation</code> class.</p>
                                    <div class="row">
                                        <div class="col-md-4 mb-2">
                                            <div class="alert alert-primary" role="alert">
                                                <strong>Good Morning!</strong> Start your day with some alerts.
                                                <a class="alertAnimation float-right" data-animation="bounceIn">
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <div class="alert alert-success" role="alert">
                                                <strong>Well done!</strong> You successfully read this important
                                                alert message.
                                                <a class="alertAnimation float-right" data-animation="fadeIn">
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <div class="alert alert-danger" role="alert">
                                                <strong>Oh snap!</strong> Change a few things up and try submitting
                                                again.
                                                <a class="alertAnimation float-right" data-animation="zoomIn">
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <div class="alert alert-warning" role="alert">
                                                <strong>Warning!</strong> Better check yourself, you're not looking
                                                too good.
                                                <a class="alertAnimation float-right" data-animation="slideInUp">
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <div class="alert alert-info" role="alert">
                                                <strong>Heads up!</strong> This alert needs your attention.
                                                <a class="alertAnimation float-right" data-animation="lightSpeedIn">
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <div class="alert alert-blue" role="alert">
                                                <strong>Great!</strong> You are using some gorgeous custom colors.
                                                <a class="alertAnimation float-right" data-animation="flipInY">
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Alert animation end -->
            <!-- Callout animation start-->
            <section id="calloutAnimation" class="calloutAnimation">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Callout Animation</h4>
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
                                    <p>Click on 'Play' button to animate callout. Use <code>data-animation="animation"</code>                      to <code>&lt;a&gt;</code> tag as icon wrapper to animate collout.
                                        It also required <code>.calloutAnimation</code> class.</p>
                                    <div class="row">
                                        <div class="col-md-4 mb-2">
                                            <div class="bs-callout-primary callout-bordered p-1">
                                                <strong>Good Morning!</strong>
                                                <p>Souffle topping bear claw sugar plum gummies jelly. Carrot
                                                    cake lemon drops gummies. Danish oat cake icing jelly
                                                    icing cookie gingerbread jelly beans. Tiramisu sweet
                                                    roll gummies cake carrot cake biscuit.</p>
                                                <a class="animationIcon calloutAnimation position-absolute float-right" data-animation="fadeInLeft">
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <div class="bs-callout-success callout-bordered p-1">
                                                <strong>Congratulations!</strong>
                                                <p>Cake chupa chups tootsie roll blueie pastry marzipan lollipop
                                                    sweet. Chocolate cake candy sweet macaroon sugar plum
                                                    tiramisu carrot cake. Cupcake ice cream gummies. Sugar
                                                    plum cupcake cotton candy jelly beans.</p>
                                                <a class="animationIcon calloutAnimation position-absolute float-right" data-animation="flipInX">
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <div class="bs-callout-danger callout-bordered p-1">
                                                <strong>Not Bad!</strong>
                                                <p>Croissant carrot cake sesame snaps dessert wafer dessert
                                                    wafer icing jelly. Halvah jelly beans dragée oat cake
                                                    sesame snaps. Pie carrot cake liquorice. Chocolate marzipan
                                                    chocolate gummi bears. Carrot cake lemon drops gummies.</p>
                                                <a class="animationIcon calloutAnimation position-absolute float-right" data-animation="pulse">
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <div class="bs-callout-warning callout-bordered p-1">
                                                <strong>Are You Sure?</strong>
                                                <p>Gummies cupcake donut wafer jelly croissant topping toffee.
                                                    Chocolate bar danish gummies macaroon bear claw oat cake
                                                    chocolate cake wafer cake. Cheesecake bear claw halvah
                                                    tiramisu pudding cupcake pie.</p>
                                                <a class="animationIcon calloutAnimation position-absolute float-right" data-animation="slideInDown">
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <div class="bs-callout-info callout-bordered p-1">
                                                <strong>Great Job!</strong>
                                                <p>Biscuit macaroon tootsie roll croissant. Dessert candy
                                                    canes halvah cookie liquorice. Candy canes muffin gummies
                                                    jujubes blueie. Carrot cake lemon drops gummies. Pie
                                                    cake pie pastry sugar plum jelly apple pie cotton candy.</p>
                                                <a class="animationIcon calloutAnimation position-absolute float-right" data-animation="fadeInUp">
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <div class="bs-callout-pink callout-bordered p-1">
                                                <strong>Are You Sure?</strong>
                                                <p>Gummies cupcake donut wafer jelly croissant topping toffee.
                                                    Chocolate bar danish gummies macaroon bear claw oat cake
                                                    chocolate cake wafer cake. Cheesecake bear claw halvah
                                                    tiramisu pudding cupcake pie.</p>
                                                <a class="animationIcon calloutAnimation position-absolute float-right" data-animation="lightSpeedIn">
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Callout animation end -->
            <!-- Card animation start -->
            <section id="cardAnimation" class="cardAnimation">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h4>Card Animation</h4>
                        <p>Card Animation on appear. Use <code>data-appear="appear"</code> and
                            <code>data-animation="animation"</code> to <code>.card</code> to
                            animate card on appear.</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="card box-shadow-0" data-appear="appear" data-animation="slideInDown">
                            <div class="card-header bg-primary white">
                                <h4 class="card-title white">Slide In Down</h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body border-bottom-primary">
                                    <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                                        roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card box-shadow-0" data-appear="appear" data-animation="zoomIn">
                            <div class="card-header white bg-success">
                                <h4 class="card-title white">Zoom In</h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body border-bottom-success">
                                    <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                                        roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card box-shadow-0" data-appear="appear" data-animation="fadeInDown">
                            <div class="card-header white bg-danger">
                                <h4 class="card-title white">Fade In Down</h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body border-bottom-danger">
                                    <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                                        roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card box-shadow-0" data-appear="appear" data-animation="slideInUp">
                            <div class="card-header white bg-warning">
                                <h4 class="card-title white">Slide In Up</h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body border-bottom-warning">
                                    <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                                        roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card box-shadow-0" data-appear="appear" data-animation="zoomInLeft">
                            <div class="card-header white bg-info">
                                <h4 class="card-title white">Zoom In Left</h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body border-bottom-info">
                                    <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                                        roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card box-shadow-0" data-appear="appear" data-animation="fadeInLeft">
                            <div class="card-header white bg-blue-grey">
                                <h4 class="card-title white">Fade In Left</h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body border-bottom-blue-grey">
                                    <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                                        roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Card animation end -->
        </div>
    </div>
</div>
