<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\CardBootstrapAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Bootstrap Cards</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="card-bootstrap.html#">Components</a>
</li>
<li class="breadcrumb-item active">Bootstrap Cards
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="card-bootstrap.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="card-bootstrap.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="card-bootstrap.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="card-bootstrap.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Basic example section start -->
<section id="basic-examples">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Basic Examples</h4>
<p>Cards require a small amount of markup and classes to provide you with
                as much control as possible. These classes and markup are flexible
                though and can typically be remixed and extended with ease. For example,
                if your card has no flush content like images, feel free to put the
                <code>.card-body</code> class on the <code>.card</code> element to
                consolidate your markup.</p>
</div>
</div>
<div class="row match-height">
<div class="col-xl-3 col-md-6 col-sm-12">
<div class="card">
<div class="card-content">
<img alt="Card image cap" class="card-img-top img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/06.jpg"/>
<div class="card-body">
<h4 class="card-title">Card title</h4>
<p class="card-text">Icing powder caramels macaroon. Toffee sugar plum brownie pastry
                      gummies jelly.</p>
<a class="btn btn-outline-amber" href="card-bootstrap.html#">Go somewhere</a>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6 col-sm-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<img alt="Card image cap" class="card-img img-fluid mb-1" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/08.jpg"/>
<h4 class="card-title">Card title</h4>
<p class="card-text">Sweet halvah dragée jelly-o halvah carrot cake oat cake. Donut
                      jujubes jelly chocolate cake marzipan chocolate chocolate bar.</p>
<a class="btn btn-outline-teal" href="card-bootstrap.html#">Go somewhere</a>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6 col-sm-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Card title</h4>
<h6 class="card-subtitle text-muted">Support card subtitle</h6>
</div>
<img alt="Card image cap" class="img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/10.jpg"/>
<div class="card-body">
<p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
<a class="card-link pink" href="card-bootstrap.html#">Card link</a>
<a class="card-link pink" href="card-bootstrap.html#">Another link</a>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6 col-sm-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Card title</h4>
<h6 class="card-subtitle text-muted">Support card subtitle</h6>
<img alt="Card image cap" class="img-fluid my-1" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/09.jpg"/>
<p class="card-text">Topping dessert marshmallow gummi bears chupa chups marzipan.</p>
<a class="card-link blue darken-2" href="card-bootstrap.html#">Card link</a>
<a class="card-link blue darken-2" href="card-bootstrap.html#">Another link</a>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Basic example section end -->
<!-- Content types section start -->
<section id="content-types">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Content Types</h4>
<p>Cards support a wide variety of content, including images, text, list
                groups, links, and more. Mix and match multiple content types to
                create the card you need.</p>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-content">
<img alt="Card image cap" class="card-img-top img-fluid" src="<?=$baseUrl;?>/app-assets/images/carousel/05.jpg"/>
<div class="card-body">
<h4 class="card-title">Basic</h4>
<p class="card-text">Some quick example text to build on the card title and make up
                      the bulk of the card's content.</p>
<a class="btn btn-outline-pink" href="card-bootstrap.html#">Go somewhere</a>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<h4 class="card-title">List Group</h4>
<p class="card-text">Some quick example text to build on the card title and make up
                      the bulk of the card's content.</p>
</div>
<ul class="list-group list-group-flush">
<li class="list-group-item">
<span class="badge badge-default badge-pill bg-primary float-right">4</span>
                      Cras justo odio
                    </li>
<li class="list-group-item">
<span class="badge badge-default badge-pill bg-info float-right">2</span>
                      Dapibus ac facilisis in
                    </li>
<li class="list-group-item">
<span class="badge badge-default badge-pill bg-warning float-right">1</span>
                      Morbi leo risus
                    </li>
<li class="list-group-item">
<span class="badge badge-default badge-pill bg-success float-right">3</span>
                      Porta ac consectetur ac
                    </li>
<li class="list-group-item">
<span class="badge badge-default badge-pill bg-danger float-right">8</span>
                      Vestibulum at eros
                    </li>
</ul>
<div class="card-body">
<a class="card-link" href="card-bootstrap.html#">Card link</a>
<a class="card-link" href="card-bootstrap.html#">Another link</a>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-12 col-sm-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Carousel</h4>
<h6 class="card-subtitle text-muted">Support card subtitle</h6>
</div>
<div class="carousel slide" data-ride="carousel" id="carousel-example-generic">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#carousel-example-generic"></li>
<li data-slide-to="1" data-target="#carousel-example-generic"></li>
<li data-slide-to="2" data-target="#carousel-example-generic"></li>
</ol>
<div class="carousel-inner" role="listbox">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-100" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/02.jpg"/>
</div>
<div class="carousel-item">
<img alt="Second slide" class="d-block w-100" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/03.jpg"/>
</div>
<div class="carousel-item">
<img alt="Third slide" class="d-block w-100" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/01.jpg"/>
</div>
</div>
<a class="carousel-control-prev" data-slide="prev" href="card-bootstrap.html#carousel-example-generic" role="button">
<span aria-hidden="true" class="la la-angle-left"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" data-slide="next" href="card-bootstrap.html#carousel-example-generic" role="button">
<span aria-hidden="true" class="la la-angle-right icon-next"></span>
<span class="sr-only">Next</span>
</a>
</div>
<div class="card-body">
<p class="card-text">Some quick example text to build on the card title and make up
                      the bulk of the card's content.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Collapse</h4>
<p class="card-text">Some quick example text to build on the card title and make up
                      the bulk of the card's content.</p>
</div>
<div aria-multiselectable="true" id="accordionWrap1" role="tablist">
<div class="card collapse-icon panel mb-0 box-shadow-0 border-0">
<div class="card-header border-bottom-blue-grey border-bottom-lighten-4" id="heading11" role="tab">
<a aria-controls="accordion11" aria-expanded="true" class="h6 blue" data-parent="#accordionWrap1" data-toggle="collapse" href="card-bootstrap.html#accordion11">Accordion Group Item #1</a>
</div>
<div aria-expanded="true" aria-labelledby="heading11" class="collapse show" id="accordion11" role="tabpanel">
<div class="card-body">
<p class="card-text">Caramels dessert chocolate cake pastry jujubes bonbon.
                            Jelly wafer jelly beans. Caramels chocolate cake liquorice
                            cake wafer jelly beans croissant apple pie.</p>
</div>
</div>
<div class="card-header border-bottom-blue-grey border-bottom-lighten-4" id="heading12" role="tab">
<a aria-controls="accordion12" aria-expanded="false" class="h6 blue collapsed" data-parent="#accordionWrap1" data-toggle="collapse" href="card-bootstrap.html#accordion12">Accordion Group Item #2</a>
</div>
<div aria-expanded="false" aria-labelledby="heading12" class="collapse" id="accordion12" role="tabpanel">
<div class="card-body">
<p class="card-text">Sugar plum bear claw oat cake chocolate jelly tiramisu
                            dessert pie. Tiramisu macaroon muffin jelly marshmallow
                            cake. Pastry oat cake chupa chups.</p>
</div>
</div>
<div class="card-header border-bottom-blue-grey border-bottom-lighten-4" id="heading13" role="tab">
<a aria-controls="accordion13" aria-expanded="false" class="h6 blue collapsed" data-parent="#accordionWrap1" data-toggle="collapse" href="card-bootstrap.html#accordion13">Accordion Group Item #3</a>
</div>
<div aria-expanded="false" aria-labelledby="heading13" class="collapse" id="accordion13" role="tabpanel">
<div class="card-body">
<p class="card-text">Candy cupcake sugar plum oat cake wafer marzipan jujubes
                            lollipop macaroon. Cake dragée jujubes donut chocolate
                            bar chocolate cake cupcake chocolate topping.</p>
</div>
</div>
<div class="card-header border-bottom-blue-grey border-bottom-lighten-4" id="heading14" role="tab">
<a aria-controls="accordion14" aria-expanded="false" class="h6 blue collapsed" data-parent="#accordionWrap1" data-toggle="collapse" href="card-bootstrap.html#accordion14">Accordion Group Item #4</a>
</div>
<div aria-expanded="false" aria-labelledby="heading14" class="card-collapse collapse" id="accordion14" role="tabpanel" style="height: 0px;">
<div class="card-body">
<p class="card-text">Sesame snaps chocolate lollipop sesame snaps apple pie
                            chocolate cake sweet roll. Dragée candy canes carrot
                            cake chupa chups danish cake sugar plum candy.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6 col-sm-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Video Embed</h4>
<h6 class="card-subtitle text-muted">Support card subtitle</h6>
</div>
<div class="embed-responsive embed-responsive-item embed-responsive-16by9">
<iframe allowfullscreen="" class="img-thumbnail" src="https://www.youtube.com/embed/SsE5U7ta9Lw?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
</div>
<div class="card-body">
<p class="card-text">Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop
                      macaroon. Cake dragée jujubes donut chocolate bar chocolate
                      cake cupcake chocolate topping. Dessert jelly beans toffee
                      muffin.
                    </p>
<a class="card-link" href="card-bootstrap.html#">Card link</a>
<a class="card-link" href="card-bootstrap.html#">Another link</a>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-12 col-sm-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Contact Form</h4>
<h6 class="card-subtitle text-muted">Support card subtitle</h6>
</div>
<div class="card-body">
<form class="form">
<div class="form-body">
<div class="form-group">
<label class="sr-only" for="donationinput1">Name</label>
<input class="form-control" id="donationinput1" name="name" placeholder="name" type="text"/>
</div>
<div class="form-group">
<label class="sr-only" for="donationinput2">Email</label>
<input class="form-control" id="donationinput2" name="email" placeholder="email" type="email"/>
</div>
<div class="form-group">
<label class="sr-only" for="donationinput7">Message</label>
<textarea class="form-control square" id="donationinput7" name="message" placeholder="message" rows="5"></textarea>
</div>
</div>
<div class="form-actions center">
<button class="btn btn-outline-primary" type="submit">Send</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Content types section end -->
<!-- Card sizing section start -->
<section id="sizing">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Sizing</h4>
<p>Constrain the width of cards via custom CSS, our predefined grid classes,
                or with custom styles using our grid mixins.</p>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h4 class="card-title">Project Info</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collpase show">
<div class="card-body">
<div class="card-text">
<p class="card-text">With supporting text below as a natural lead-in to additional
                        content.
                      </p>
</div>
<form class="form">
<div class="form-body">
<h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label class="sr-only" for="projectinput1">First Name</label>
<input class="form-control" id="projectinput1" name="fname" placeholder="First Name" type="text"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="sr-only" for="projectinput2">Last Name</label>
<input class="form-control" id="projectinput2" name="lname" placeholder="Last Name" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label class="sr-only" for="projectinput3">E-mail</label>
<input class="form-control" id="projectinput3" name="email" placeholder="E-mail" type="text"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="sr-only" for="projectinput4">Contact Number</label>
<input class="form-control" id="projectinput4" name="phone" placeholder="Phone" type="text"/>
</div>
</div>
</div>
<h4 class="form-section"><i class="ft-check-circle"></i> Requirements</h4>
<div class="form-group">
<label class="sr-only" for="companyName">Company</label>
<input class="form-control" id="companyName" name="company" placeholder="Company Name" type="text"/>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label class="sr-only" for="projectinput5">Interested in</label>
<select class="form-control" id="projectinput5" name="interested">
<option disabled="" selected="" value="none">Interested in</option>
<option value="design">design</option>
<option value="development">development</option>
<option value="illustration">illustration</option>
<option value="branding">branding</option>
<option value="video">video</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="sr-only" for="projectinput6">Budget</label>
<select class="form-control" id="projectinput6" name="budget">
<option disabled="" selected="" value="0">Budget</option>
<option value="less than 5000$">less than 5000$</option>
<option value="5000$ - 10000$">5000$ - 10000$</option>
<option value="10000$ - 20000$">10000$ - 20000$</option>
<option value="more than 20000$">more than 20000$</option>
</select>
</div>
</div>
</div>
<div class="form-group">
<label class="sr-only" for="projectinput8">About Project</label>
<textarea class="form-control" id="projectinput8" name="comment" placeholder="About Project" rows="5"></textarea>
</div>
</div>
<div class="form-actions">
<button class="btn btn-outline-warning mr-1" type="button">
<i class="ft-x"></i> Cancel
                        </button>
<button class="btn btn-outline-primary" type="submit">
<i class="ft-check"></i> Save
                        </button>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h4 class="card-title">User Profile</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collpase show">
<div class="card-body">
<div class="card-text">
<p class="card-text">With supporting text below as a natural lead-in to additional
                        content.
                      </p>
</div>
<form class="form">
<div class="form-body">
<h4 class="form-section"><i class="ft-eye"></i> About User</h4>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label class="sr-only" for="userinput1">Fist Name</label>
<input class="form-control" id="userinput1" name="name" placeholder="Name" type="text"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="sr-only" for="userinput2">Last Name</label>
<input class="form-control" id="userinput2" name="company" placeholder="Company" type="text"/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label class="sr-only" for="userinput3">Username</label>
<input class="form-control" id="userinput3" name="username" placeholder="Username" type="text"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="sr-only" for="userinput4">Nick Name</label>
<input class="form-control" id="userinput4" name="nickname" placeholder="Nick Name" type="text"/>
</div>
</div>
</div>
<h4 class="form-section"><i class="ft-mail"></i> Contact Info &amp; Bio</h4>
<div class="form-group">
<label class="sr-only" for="userinput5">Email</label>
<input class="form-control" id="userinput5" placeholder="email" type="email"/>
</div>
<div class="form-group">
<label class="sr-only" for="userinput6">Website</label>
<input class="form-control" id="userinput6" placeholder="http://" type="url"/>
</div>
<div class="form-group">
<label class="sr-only" for="userinput8">Bio</label>
<textarea class="form-control" id="userinput8" name="bio" placeholder="Bio" rows="5"></textarea>
</div>
</div>
<div class="form-actions right">
<button class="btn btn-outline-warning mr-1" type="button">
<i class="ft-x"></i> Cancel
                        </button>
<button class="btn btn-outline-primary" type="submit">
<i class="ft-check"></i> Save
                        </button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Card sizing section end -->
<!-- Text alignment section start -->
<section id="text-alignment">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Text alignment</h4>
<p>You can quickly change the text alignment of any card—in its entirety
                or specific parts—with our text align classes.</p>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<h4 class="card-title info">Text Align Left</h4>
<p class="card-text">Gummi bears I love oat cake gingerbread donut cotton candy pie
                      biscuit tart. Chocolate cake chocolate cake I love marzipan
                      cookie macaroon. Tart I love I love carrot cake carrot cake
                      chupa chups caramels. Carrot cake pastry cotton candy.</p>
<p class="card-text">Dessert I love brownie biscuit topping I love chocolate cake
                      gingerbread jelly beans. Chocolate cake cake cheesecake. Chocolate
                      cake pastry macaroon.</p>
<a class="btn btn-outline-info" href="card-bootstrap.html#">Go somewhere</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="card text-center">
<div class="card-content">
<div class="card-body">
<h4 class="card-title success">Text Align Center</h4>
<p class="card-text">Gummi bears I love oat cake gingerbread donut cotton candy pie
                      biscuit tart. Chocolate cake chocolate cake I love marzipan
                      cookie macaroon. Tart I love I love carrot cake carrot cake
                      chupa chups caramels. Carrot cake pastry cotton candy.</p>
<p class="card-text">Dessert I love brownie biscuit topping I love chocolate cake
                      gingerbread jelly beans. Chocolate cake cake cheesecake. Chocolate
                      cake pastry macaroon.</p>
<a class="btn btn-outline-success" href="card-bootstrap.html#">Go somewhere</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="card text-right">
<div class="card-content">
<div class="card-body">
<h4 class="card-title danger">Text Align Right</h4>
<p class="card-text">Gummi bears I love oat cake gingerbread donut cotton candy pie
                      biscuit tart. Chocolate cake chocolate cake I love marzipan
                      cookie macaroon. Tart I love I love carrot cake carrot cake
                      chupa chups caramels. Carrot cake pastry cotton candy.</p>
<p class="card-text">Dessert I love brownie biscuit topping I love chocolate cake
                      gingerbread jelly beans. Chocolate cake cake cheesecake. Chocolate
                      cake pastry macaroon.</p>
<a class="btn btn-outline-danger" href="card-bootstrap.html#">Go somewhere</a>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Text alignment section end -->
<!-- Header footer section start -->
<section id="header-footer">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Header and footer</h4>
<p>Add an optional header and/or footer within a card.</p>
</div>
</div>
<div class="row match-height">
<div class="col-xl-4 col-md-6">
<div class="card">
<div class="card-header">
<h4 class="card-title">Basic Card</h4>
</div>
<div class="card-content">
<div class="card-body">
<h5>Basic Card With Header &amp; Footer</h5>
</div>
<img alt="Card image cap" class="img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/02.jpg"/>
<div class="card-body">
<p class="card-text">Some quick example text to build on the card title and make up
                      the bulk of the card's content.</p>
<a class="card-link" href="card-bootstrap.html#">Card link</a>
<a class="card-link" href="card-bootstrap.html#">Another link</a>
</div>
</div>
<div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
<span class="float-left">3 hours ago</span>
<span class="float-right">
<a class="card-link" href="card-bootstrap.html#">Read More <i class="la la-angle-right"></i></a>
</span>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6">
<div class="card">
<div class="card-header">
<h4 class="card-title">Video Embed</h4>
</div>
<div class="card-content">
<div class="card-body">
<h5>Video Embed Card With Header &amp; Footer</h5>
</div>
<div class="embed-responsive embed-responsive-item embed-responsive-4by3">
<iframe allowfullscreen="" class="img-thumbnail" src="https://www.youtube.com/embed/SsE5U7ta9Lw?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
</div>
<div class="card-body">
<p class="card-text">Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop
                      macaroon.
                    </p>
<a class="card-link" href="card-bootstrap.html#">Card link</a>
<a class="card-link" href="card-bootstrap.html#">Another link</a>
</div>
</div>
<div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
<span class="float-left">1 day ago</span>
<span class="tags float-right">
<span class="badge badge-pill badge-success">Technology</span>
<span class="badge badge-pill badge-warning">Gaming</span>
</span>
</div>
</div>
</div>
<div class="col-xl-4 col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Carousel</h4>
</div>
<div class="card-content">
<div class="card-body">
<h5 class="card-title">Carousel Card With Header &amp; Footer</h5>
</div>
<div class="carousel slide" data-ride="carousel" id="carousel-example">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#carousel-example"></li>
<li data-slide-to="1" data-target="#carousel-example"></li>
<li data-slide-to="2" data-target="#carousel-example"></li>
</ol>
<div class="carousel-inner" role="listbox">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-100" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/08.jpg"/>
</div>
<div class="carousel-item">
<img alt="Second slide" class="d-block w-100" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/03.jpg"/>
</div>
<div class="carousel-item">
<img alt="Third slide" class="d-block w-100" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/01.jpg"/>
</div>
</div>
<a class="carousel-control-prev" data-slide="prev" href="card-bootstrap.html#carousel-example" role="button">
<span aria-hidden="true" class="la la-angle-left"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" data-slide="next" href="card-bootstrap.html#carousel-example" role="button">
<span aria-hidden="true" class="la la-angle-right icon-next"></span>
<span class="sr-only">Next</span>
</a>
</div>
<div class="card-body">
<p class="card-text">Some quick example text to build on the card title and make up
                      the bulk of the card's content.</p>
<a class="card-link" href="card-bootstrap.html#">Card link</a>
<a class="card-link" href="card-bootstrap.html#">Another link</a>
</div>
</div>
<div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
<span class="float-left">2 days ago</span>
<span class="tags float-right">
<span class="badge badge-pill badge-primary">Branding</span>
<span class="badge badge-pill badge-danger">Design</span>
</span>
</div>
</div>
</div>
</div>
</section>
<!-- Header footer section end -->
<!-- Card overlay section start -->
<section id="card-overlay">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Image caps, overlays &amp; Inverted text</h4>
<p>Similar to headers and footers, cards include top and bottom image
                caps.
              </p>
<p>Turn an image into a card background and overlay your card’s text.
                Depending on the image, you may or may not need <code>.text-white</code></p>
</div>
</div>
<div class="row match-height">
<div class="col-xl-6 col-md-6 col-sm-12">
<div class="card">
<div class="card-content">
<img alt="Card image cap" class="card-img-top img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/09.jpg"/>
<div class="card-body">
<h4 class="card-title">Top Image Cap</h4>
<p class="card-text">Jelly-o sesame snaps cheesecake topping. Cupcake fruitcake macaroon
                      donut pastry gummies tiramisu chocolate bar muffin. Dessert
                      bonbon caramels brownie chocolate bar chocolate tart dragée.</p>
<p class="card-text">Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate
                      bar muffin.</p>
<p class="card-text">
<small class="text-muted">Last updated 3 mins ago</small>
</p>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-md-6 col-sm-12">
<div class="card border-0 box-shadow-0">
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Bottom Image Cap</h4>
<p class="card-text">Jelly-o sesame snaps cheesecake topping. Cupcake fruitcake macaroon
                      donut pastry gummies tiramisu chocolate bar muffin. Dessert
                      bonbon caramels brownie chocolate bar chocolate tart dragée.</p>
<p class="card-text">Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate
                      bar muffin.</p>
<p class="card-text mt-1">
<small class="text-muted">Last updated 3 mins ago</small>
</p>
</div>
<img alt="Card image cap" class="card-img-bottom img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/15.jpg"/>
</div>
</div>
</div>
</div>
<div class="row match-height">
<div class="col-xl-3 col-lg-6 col-sm-12">
<div class="card border-0 box-shadow-0">
<div class="card-content">
<img alt="Card image" class="card-img img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/06.jpg"/>
<div class="card-img-overlay overlay-yellow">
<h4 class="card-title">Card Image Overlay</h4>
<p class="card-text">Sugar plum tiramisu sweet. Cake jelly marshmallow cotton candy
                      chupa chups.</p>
<p class="card-text">
<small class="text-muted">Last updated 3 mins ago</small>
</p>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-sm-12">
<div class="card border-0 box-shadow-0">
<div class="card-content">
<img alt="Card image" class="card-img img-fluid" src="<?=$baseUrl;?>/app-assets/images/carousel/05.jpg"/>
<div class="card-img-overlay overlay-danger overlay-lighten-2">
<h4 class="card-title">Card Image Overlay</h4>
<p class="card-text">Sugar plum tiramisu sweet. Cake jelly marshmallow cotton candy
                      chupa chups.</p>
<p class="card-text">
<small class="text-muted">Last updated 3 mins ago</small>
</p>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-sm-12">
<div class="card text-white border-0 box-shadow-0">
<div class="card-content">
<img alt="Card image" class="card-img img-fluid" src="<?=$baseUrl;?>/app-assets/images/carousel/05.jpg"/>
<div class="card-img-overlay overlay-warning">
<h4 class="card-title">Inverse Text</h4>
<p class="card-text">Sugar plum tiramisu sweet. Cake jelly marshmallow cotton candy
                      chupa chups.</p>
<p class="card-text">
<small class="text-muted">Last updated 3 mins ago</small>
</p>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-sm-12">
<div class="card text-white border-0 box-shadow-0">
<div class="card-content">
<img alt="Card image" class="card-img img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/09.jpg"/>
<div class="card-img-overlay overlay-blue">
<h4 class="card-title">Inverse Text</h4>
<p class="card-text">Sugar plum tiramisu sweet. Cake jelly marshmallow cotton candy
                      chupa chups.</p>
<p class="card-text">
<small class="text-muted">Last updated 3 mins ago</small>
</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Card overlay section end -->
<!-- Background variants section start -->
<section id="bg-variants">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Background variants</h4>
<p>Cards include their own variant classes for quickly changing the <code>background-color</code>                and <code>border-color</code> of a card. Darker colors require the
                use of <code>.text-white</code>.</p>
<p>Cards include a class for quickly toggling the text color. By default,
                cards use dark text and assume a light background. Add <code>.text-white</code>                for white text and specify the <code>background-color</code> and
                <code>border-color</code> to go with it.
                <br/>You can also use <code>.text-white</code> with the contextual backgrounds
                variants.
              </p>
</div>
</div>
<div class="row match-height">
<div class="col-md-6 col-sm-12">
<div class="card text-white bg-primary text-center">
<div class="card-content">
<div class="card-body pt-3">
<img alt="element 01" class="float-left" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/01.png" width="190"/>
<h4 class="card-title mt-3 text-white">Brand Minute</h4>
<p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
<button class="btn btn-primary btn-darken-3">Buy Now</button>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card text-white bg-success text-center">
<div class="card-content">
<div class="card-body">
<img alt="element 02" class="mb-1" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/06.png" width="225"/>
<h3 class="card-title text-white">Ceramic Bottle</h3>
<p class="card-text">456 items</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card text-white bg-danger text-center">
<div class="card-content">
<div class="card-body pt-3">
<img alt="element 03" class="float-right" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/14.png" width="170"/>
<h4 class="card-title mt-3 text-white">Brand Minute</h4>
<p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
<button class="btn btn-danger btn-darken-3">Buy Now</button>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card text-white bg-info text-center">
<div class="card-content">
<img alt="element 04" class="float-left mt-3" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/07.png" width="210"/>
<div class="card-body pt-3">
<h4 class="card-title mt-3 text-white">New Arriaval</h4>
<p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
<button class="btn btn-info btn-darken-3">Buy Now</button>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card text-white bg-warning text-center">
<div class="card-content">
<div class="card-body">
<img alt="element 05" class="mb-1" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/04.png" width="250"/>
<h4 class="card-title text-white">Storage Device</h4>
<p class="card-text">945 items</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card text-white bg-blue text-center">
<div class="card-content">
<div class="card-body pt-3">
<img alt="element 06" class="float-right" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/11.png" width="190"/>
<h4 class="card-title mt-3 text-white">New Arriaval</h4>
<p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
<button class="btn btn-blue btn-darken-3 white">Buy Now</button>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Background variants section end -->
<!-- Outline variants section start -->
<section id="outline-variants">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Outline variants</h4>
<p>In need of a colored card, but not the hefty background colors they
                bring? Replace the default modifier classes with the <code>.border-*</code>                ones to style just the <code>border-color</code> of a card.</p>
</div>
</div>
<div class="row match-height">
<div class="col-md-6 col-sm-12">
<div class="card border-primary text-center bg-transparent">
<div class="card-content">
<div class="card-body pt-3">
<img alt="element 01" class="float-left" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/01.png" width="190"/>
<h4 class="card-title mt-3 text-white">Brand Minute</h4>
<p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
<button class="btn btn-primary">Buy Now</button>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card border-success text-center bg-transparent">
<div class="card-content">
<div class="card-body">
<img alt="element 02" class="mb-1" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/06.png" width="225"/>
<h3 class="card-title">Ceramic Bottle</h3>
<p class="card-text">456 items</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card border-danger text-center bg-transparent">
<div class="card-content">
<div class="card-body pt-3">
<img alt="element 03" class="float-right" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/01.png" width="190"/>
<h4 class="card-title mt-3">Brand Minute</h4>
<p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
<button class="btn btn-danger">Buy Now</button>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card border-info text-center bg-transparent">
<div class="card-content">
<img alt="element 04" class="float-left mt-3" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/07.png" width="210"/>
<div class="card-body pt-3">
<h4 class="card-title mt-3">New Arriaval</h4>
<p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
<button class="btn btn-info">Buy Now</button>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card border-warning text-center bg-transparent">
<div class="card-content">
<div class="card-body">
<img alt="element 05" class="mb-1" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/04.png" width="250"/>
<h4 class="card-title">Storage Device</h4>
<p class="card-text">945 items</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="card border-blue text-center bg-transparent">
<div class="card-content">
<div class="card-body pt-3">
<img alt="element 06" class="float-right" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/11.png" width="190"/>
<h4 class="card-title mt-3">New Arriaval</h4>
<p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
<button class="btn btn-blue">Buy Now</button>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Outline variants section end -->
<!-- Groups section start -->
<section id="groups">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Groups</h4>
<p>Use card groups to render cards as a single, attached element with
                equal width and height columns. By default, card groups use <code>display: table;</code>                and <code>table-layout: fixed;</code> to achieve their uniform sizing.
                However, enabling flexbox mode can switch that to use <code>display: flex;</code>                and provide the same effect.</p>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="card-group">
<div class="card">
<div class="card-content">
<img alt="Card image cap" class="card-img-top img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/04.jpg"/>
<div class="card-body">
<h4 class="card-title">Card title</h4>
<p class="card-text">This card has supporting text below as a natural lead-in to
                        additional content.</p>
<p class="card-text">
<small class="text-muted">Last updated 3 mins ago</small>
</p>
</div>
</div>
</div>
<div class="card">
<div class="card-content">
<img alt="Card image cap" class="card-img-top img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/01.jpg"/>
<div class="card-body">
<h4 class="card-title">Card title</h4>
<p class="card-text">This card has supporting text below as a natural lead-in to
                        additional content.</p>
<p class="card-text">
<small class="text-muted">Last updated 3 mins ago</small>
</p>
</div>
</div>
</div>
<div class="card">
<div class="card-content">
<img alt="Card image cap" class="card-img-top img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/06.jpg"/>
<div class="card-body">
<h4 class="card-title">Card title</h4>
<p class="card-text">This card has supporting text below as a natural lead-in to
                        additional content.</p>
<p class="card-text">
<small class="text-muted">Last updated 3 mins ago</small>
</p>
</div>
</div>
</div>
<div class="card">
<div class="card-content">
<img alt="Card image cap" class="card-img-top img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/02.jpg"/>
<div class="card-body">
<h4 class="card-title">Card title</h4>
<p class="card-text">This card has supporting text below as a natural lead-in to
                        additional content.</p>
<p class="card-text">
<small class="text-muted">Last updated 3 mins ago</small>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Groups section end -->
<!-- Decks section start -->
<section id="decks">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Decks</h4>
<p>Need a set of equal width and height cards that aren’t attached to
                one another? Use card decks. By default, card decks require two wrapping
                elements: <code>.card-deck-wrapper</code> and a <code>.card-deck</code>.
                We use table styles for the sizing and the gutters on <code>.card-deck</code>.
                The <code>.card-deck-wrapper</code> is used to negative margin out
                the <code>border-spacing</code> on the <code>.card-deck</code>.</p>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="card-deck-wrapper">
<div class="card-deck">
<div class="card">
<div class="card-content">
<img alt="Card image cap" class="card-img-top img-fluid" src="<?=$baseUrl;?>/app-assets/images/carousel/05.jpg"/>
<div class="card-body">
<h4 class="card-title">Card title</h4>
<p class="card-text">This card has supporting text below as a natural lead-in
                          to additional content.</p>
<p class="card-text">
<small class="text-muted">Last updated 3 mins ago</small>
</p>
</div>
</div>
</div>
<div class="card">
<div class="card-content">
<img alt="Card image cap" class="card-img-top img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/09.jpg"/>
<div class="card-body">
<h4 class="card-title">Card title</h4>
<p class="card-text">This card has supporting text below as a natural lead-in
                          to additional content.</p>
<p class="card-text">
<small class="text-muted">Last updated 3 mins ago</small>
</p>
</div>
</div>
</div>
<div class="card">
<div class="card-content">
<img alt="Card image cap" class="card-img-top img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/02.jpg"/>
<div class="card-body">
<h4 class="card-title">Card title</h4>
<p class="card-text">This card has supporting text below as a natural lead-in
                          to additional content.</p>
<p class="card-text">
<small class="text-muted">Last updated 3 mins ago</small>
</p>
</div>
</div>
</div>
<div class="card">
<div class="card-content">
<img alt="Card image cap" class="card-img-top img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/03.jpg"/>
<div class="card-body">
<h4 class="card-title">Card title</h4>
<p class="card-text">This card has supporting text below as a natural lead-in
                          to additional content.</p>
<p class="card-text">
<small class="text-muted">Last updated 3 mins ago</small>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Decks section end -->
<!-- Columns section start -->
<section id="columns">
<div class="row">
<div class="col-12 mt-3 mb-1">
<h4 class="text-uppercase">Columns</h4>
<p>Cards can be organized into Masonry-like columns with just CSS by wrapping
                them in <code>.card-columns</code>. Only applies to small devices
                and above.</p>
<p>
<strong>Heads up!</strong> This is
                <strong>not available in IE9</strong> and below as they have no support for
                the column-* CSS properties.</p>
</div>
</div>
<div class="row">
<div class="col-md-12 mt-1">
<div class="card-columns">
<div class="card">
<div class="card-content">
<img alt="Card image cap" class="card-img-top img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/06.jpg"/>
<div class="card-body">
<h4 class="card-title">Card title</h4>
<p class="card-text">Some quick example text to build on the card title and make
                        up the bulk of the card's content.</p>
<a class="btn btn-outline-primary" href="card-bootstrap.html#">Go somewhere</a>
</div>
</div>
</div>
<div class="card text-white bg-primary text-center">
<div class="card-content">
<div class="card-body pt-3">
<img alt="element 01" class="float-left img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/01.png" width="190"/>
<h4 class="card-title mt-3 text-white">Brand Minute</h4>
<p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
<button class="btn btn-primary btn-darken-3">Buy Now</button>
</div>
</div>
</div>
<div class="card text-white bg-warning text-center border-0 box-shadow-0">
<div class="card-content">
<div class="card-body">
<img alt="element 05" class="mb-1 img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/04.png" width="250"/>
<h4 class="card-title text-white">Storage Device</h4>
<p class="card-text">945 items</p>
</div>
</div>
</div>
<div class="card text-white bg-success text-center border-0 box-shadow-0">
<div class="card-content">
<div class="card-body">
<img alt="element 02" class="mb-1 img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/06.png" width="225"/>
<h3 class="card-title text-white">Ceramic Bottle</h3>
<p class="card-text">456 items</p>
</div>
</div>
</div>
<div class="card border-0 box-shadow-0">
<div class="card-content">
<div class="card-body">
<h4 class="card-title">Bottom Image Cap</h4>
<p class="card-text">Jelly-o sesame snaps cheesecake topping. Cupcake fruitcake
                        macaroon donut pastry gummies tiramisu chocolate bar muffin.
                        Dessert bonbon caramels brownie chocolate bar chocolate tart
                        dragée.
                      </p>
<p class="card-text">Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate
                        bar muffin.</p>
<p class="card-text mt-1">
<small class="text-muted">Last updated 3 mins ago</small>
</p>
</div>
<img alt="Card image cap" class="card-img-bottom img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/15.jpg"/>
</div>
</div>
<div class="card text-white border-0 box-shadow-0">
<div class="card-content">
<img alt="Card image" class="card-img img-fluid" src="<?=$baseUrl;?>/app-assets/images/carousel/05.jpg"/>
<div class="card-img-overlay overlay-cyan">
<h4 class="card-title text-white">Inverse Text</h4>
<p class="card-text">Sugar plum tiramisu sweet. Cake jelly marshmallow cotton candy
                        chupa chups carrot cake topping chupa chups.</p>
<p class="card-text">
<small class="text-muted">Last updated 3 mins ago</small>
</p>
</div>
</div>
</div>
<div class="card text-white border-0 box-shadow-0">
<div class="card-content">
<img alt="Card image" class="card-img img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/09.jpg"/>
<div class="card-img-overlay overlay-blue-grey">
<h4 class="card-title text-white">Inverse Text</h4>
<p class="card-text">Sugar plum tiramisu sweet. Cake jelly marshmallow cotton candy
                        chupa chups carrot cake topping chupa chups.</p>
<p class="card-text">
<small class="text-muted">Last updated 3 mins ago</small>
</p>
</div>
</div>
</div>
<div class="card border-info text-center box-shadow-0 bg-transparent">
<div class="card-content">
<img alt="element 04" class="float-left mt-3 img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/07.png" width="210"/>
<div class="card-body pt-3">
<h4 class="card-title mt-3">New Arriaval</h4>
<p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
<button class="btn btn-info">Buy Now</button>
</div>
</div>
</div>
<div class="card border-0 box-shadow-0">
<div class="card-content">
<img alt="Card image cap" class="card-img img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/carousel/02.jpg"/>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Columns section end -->
</div>
</div>
</div>