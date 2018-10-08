<?php



$this->title = 'Modern';


$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
        \zander84\modernadmin\assets\AddOnDragDropAsset::class,
    ]
]);

?>



        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Drag &amp; Drop Elements</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Drag &amp; Drop
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <button class="btn btn-danger dropdown-toggle round btn-glow px-2" id="dropdownBreadcrumbButton"
                            type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownBreadcrumbButton"><a class="dropdown-item" href="add-on-drag-drop.html#"><i class="la la-calendar-check-o"></i> Calender</a>
                        <a class="dropdown-item" href="add-on-drag-drop.html#"><i class="la la-cart-plus"></i> Cart</a>
                        <a class="dropdown-item" href="add-on-drag-drop.html#"><i class="la la-life-ring"></i> Support</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="add-on-drag-drop.html#"><i class="la la-cog"></i> Settings</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Draggable cards section start -->
            <section id="draggable-cards">
                <div class="row">
                    <div class="col-12 mt-1 mb-3">
                        <h4>Draggable Cards</h4>
                        <hr>
                    </div>
                </div>
                <div class="row" id="card-drag-area">
                    <div class="col-xl-3 col-lg-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Notification</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <a href="add-on-drag-drop.html#">
                      <span class="avatar avatar-online">
                        <img src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-21.png" alt="avatar">
                        <span class="badge badge-pill badge-danger badge-up badge-glow">3</span>
                      </span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title">Content title</h4>
                                    <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                                        roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                                        marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                    <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                                        roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Switchery</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <input type="checkbox" id="switcheryColor" class="switchery-info" checked/>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title">Content title</h4>
                                    <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                                        roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                                        marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                    <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                                        roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Actions</h4>
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
                                <div class="card-body">
                                    <h4 class="card-title">Content title</h4>
                                    <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                                        roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                                        marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                    <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                                        roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Select</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <fieldset class="form-group">
                                        <select class="form-control" id="basicSelect">
                                            <option>Select City</option>
                                            <option>Amsterdam</option>
                                            <option>Antwerp</option>
                                            <option>Athens</option>
                                            <option>Barcelona</option>
                                            <option>Berlin</option>
                                            <option>Birmingham</option>
                                            <option>Bradford</option>
                                            <option>Bremen</option>
                                            <option>Brussels</option>
                                            <option>Bucharest</option>
                                            <option>Budapest</option>
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title">Content title</h4>
                                    <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                                        roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                                        marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                    <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                                        roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Draggable cards section end -->
            <!-- Sortable lists section start -->
            <section id="sortable-lists">
                <div class="row">
                    <div class="col-12 mt-1 mb-3">
                        <h4>Sortable Lists</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <!-- Basic List Group -->
                    <div class="col-lg-6">
                        <div class="mb-1">
                            <h5 class="mb-0">Basic List Group</h5>
                            <small class="text-muted">The most basic list group is simply an unordered list with list items,
                                and the proper classes.</small>
                        </div>
                        <div class="card">
                            <ul class="list-group" id="basic-list-group">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                    </div>
                    <!-- List Group With Tags -->
                    <div class="col-lg-6">
                        <div class="mb-1">
                            <h5 class="mb-0">List Group With Tags</h5>
                            <small class="text-muted">The most basic list group is simply an unordered list with list items,
                                and the proper classes.</small>
                        </div>
                        <div class="card">
                            <ul class="list-group" id="list-group-tags">
                                <li class="list-group-item">
                                    <span class="badge badge-primary badge-pill float-right">14</span>
                                    Cras justo odio
                                </li>
                                <li class="list-group-item">
                                    <span class="badge badge-primary badge-pill float-right">2</span>
                                    Dapibus ac facilisis in
                                </li>
                                <li class="list-group-item">
                                    <span class="badge badge-primary badge-pill float-right">1</span>
                                    Morbi leo risus
                                </li>
                                <li class="list-group-item">
                                    <span class="badge badge-primary badge-pill float-right">6</span>
                                    Porta ac consectetur ac
                                </li>
                                <li class="list-group-item">
                                    <span class="badge badge-primary badge-pill float-right">3</span>
                                    Vestibulum at eros
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Anchors & Buttons -->
                    <div class="col-lg-6">
                        <div class="mb-1">
                            <h5 class="mb-0">Anchors & Buttons</h5>
                            <small class="text-muted">Use anchors or buttons to create actionable list group items with
                                hover, disabled, and active states by adding <code>.list-group-item-action</code>.</small>
                        </div>
                        <div class="card">
                            <div class="list-group" id="list-group-buttons">
                                <button type="button" class="list-group-item list-group-item-action active">
                                    Cras justo odio
                                </button>
                                <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
                                <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
                                <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
                                <button type="button" class="list-group-item list-group-item-action disabled">Vestibulum at eros</button>
                            </div>
                        </div>
                    </div>
                    <!-- Contextual Classes -->
                    <div class="col-lg-6">
                        <div class="mb-1">
                            <h5 class="mb-0">Contextual Classes</h5>
                            <small class="text-muted">Use contextual classes to style list items, default or linked. Also
                                includes <code>.active</code> state.</small>
                        </div>
                        <div class="card">
                            <div class="list-group" id="list-group-classes">
                                <a href="add-on-drag-drop.html#" class="list-group-item list-group-item-action list-group-item-primary">Cras justo odio</a>
                                <a href="add-on-drag-drop.html#" class="list-group-item list-group-item-action list-group-item-success">Dapibus ac facilisis in</a>
                                <a href="add-on-drag-drop.html#" class="list-group-item list-group-item-action list-group-item-info">Cras sit amet nibh libero</a>
                                <a href="add-on-drag-drop.html#" class="list-group-item list-group-item-action list-group-item-warning">Porta ac consectetur ac</a>
                                <a href="add-on-drag-drop.html#" class="list-group-item list-group-item-action list-group-item-danger">Vestibulum at eros</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Sortable lists section end -->
            <!-- Sortable tabs section start -->
            <section id="sortable-tabs">
                <div class="row">
                    <div class="col-12 mt-1 mb-3">
                        <h4>Sortable Tabs</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <!-- Tab with Icon -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tab with Icon</h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-justified" id="tabs-icon-drag">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="activeIcon-tab" data-toggle="tab" href="add-on-drag-drop.html#activeIcon"
                                           aria-controls="activeIcon" aria-expanded="true"><i class="la la-check"></i> Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="linkIcon-tab" data-toggle="tab" href="add-on-drag-drop.html#linkIcon" aria-controls="linkIcon"
                                           aria-expanded="false"><i class="la la-link"></i> Link</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="add-on-drag-drop.html#" role="button"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-angle-double-right"></i> Dropdown
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" id="dropdownOptIcon1-tab" href="add-on-drag-drop.html#dropdownOptIcon1" data-toggle="tab"
                                               aria-controls="dropdownOptIcon1" aria-expanded="true">dropdown 1</a>
                                            <a class="dropdown-item" id="dropdownOptIcon2-tab" href="add-on-drag-drop.html#dropdownOptIcon2" data-toggle="tab"
                                               aria-controls="dropdownOptIcon2" aria-expanded="true">dropdown 2</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="linkOptIcon-tab" data-toggle="tab" href="add-on-drag-drop.html#linkOptIcon" aria-controls="linkOptIcon"><i class="la la-share-alt-square"></i> Link</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1 pt-1">
                                    <div role="tabpanel" class="tab-pane active show" id="activeIcon" aria-labelledby="activeIcon-tab"
                                         aria-expanded="true">
                                        <p>Macaroon candy canes tootsie roll wafer lemon drops liquorice
                                            jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton
                                            candy jelly cake jelly-o sugar plum marshmallow. Dessert
                                            cotton candy macaroon chocolate sugar plum cake donut.</p>
                                    </div>
                                    <div class="tab-pane" id="linkIcon" role="tabpanel" aria-labelledby="linkIcon-tab"
                                         aria-expanded="false">
                                        <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps
                                            cotton candy cake sweet brownie. Cotton candy candy canes
                                            brownie. Biscuit pudding sesame snaps pudding pudding sesame
                                            snaps biscuit tiramisu.</p>
                                    </div>
                                    <div class="tab-pane" id="dropdownOptIcon1" role="tabpanel" aria-labelledby="dropdownOptIcon1-tab"
                                         aria-expanded="false">
                                        <p>Fruitcake marshmallow donut wafer pastry chocolate topping
                                            cake. Powder powder gummi bears jelly beans. Gingerbread
                                            cake chocolate lollipop. Jelly oat cake pastry marshmallow
                                            sesame snaps.</p>
                                    </div>
                                    <div class="tab-pane" id="dropdownOptIcon2" role="tabpanel" aria-labelledby="dropdownOptIcon2-tab"
                                         aria-expanded="false">
                                        <p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet
                                            roll dragée topping cotton candy cake jelly beans. Pie lemon
                                            drops sweet pastry candy canes chocolate cake bear claw cotton
                                            candy wafer.</p>
                                    </div>
                                    <div class="tab-pane" id="linkOptIcon" role="tabpanel" aria-labelledby="linkOptIcon-tab"
                                         aria-expanded="false">
                                        <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies
                                            cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread
                                            powder chocolate cake icing. Cheesecake gummi bears ice cream
                                            marzipan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Icon Tab with top line -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Icon Tab with top line</h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-top-border no-hover-bg nav-justified" id="tab-top-line-drag">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="activeIcon1-tab1" data-toggle="tab" href="add-on-drag-drop.html#activeIcon1"
                                           aria-controls="activeIcon1" aria-expanded="true"><i class="la la-check"></i> Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="linkIcon1-tab1" data-toggle="tab" href="add-on-drag-drop.html#linkIcon1" aria-controls="linkIcon1"
                                           aria-expanded="false"><i class="la la-link"></i> Link</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="add-on-drag-drop.html#" role="button"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-angle-double-right"></i> Dropdown
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" id="dropdownOptIcon1-tab1" href="add-on-drag-drop.html#dropdownOptIcon11" data-toggle="tab"
                                               aria-controls="dropdownOptIcon11" aria-expanded="true">dropdown 1</a>
                                            <a class="dropdown-item" id="dropdownOptIcon2-tab1" href="add-on-drag-drop.html#dropdownOptIcon12" data-toggle="tab"
                                               aria-controls="dropdownOptIcon12" aria-expanded="true">dropdown 2</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="linkIconOpt1-tab1" data-toggle="tab" href="add-on-drag-drop.html#linkIconOpt1"
                                           aria-controls="linkIconOpt1"><i class="la la-share-alt-square"></i> Link</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1 pt-1">
                                    <div role="tabpanel" class="tab-pane active show" id="activeIcon1" aria-labelledby="activeIcon1-tab1"
                                         aria-expanded="true">
                                        <p>Macaroon candy canes tootsie roll wafer lemon drops liquorice
                                            jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton
                                            candy jelly cake jelly-o sugar plum marshmallow. Dessert
                                            cotton candy macaroon chocolate sugar plum cake donut.</p>
                                    </div>
                                    <div class="tab-pane" id="linkIcon1" role="tabpanel" aria-labelledby="linkIcon1-tab1"
                                         aria-expanded="false">
                                        <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps
                                            cotton candy cake sweet brownie. Cotton candy candy canes
                                            brownie. Biscuit pudding sesame snaps pudding pudding sesame
                                            snaps biscuit tiramisu.</p>
                                    </div>
                                    <div class="tab-pane" id="dropdownOptIcon11" role="tabpanel" aria-labelledby="dropdownOptIcon1-tab1"
                                         aria-expanded="false">
                                        <p>Fruitcake marshmallow donut wafer pastry chocolate topping
                                            cake. Powder powder gummi bears jelly beans. Gingerbread
                                            cake chocolate lollipop. Jelly oat cake pastry marshmallow
                                            sesame snaps.</p>
                                    </div>
                                    <div class="tab-pane" id="dropdownOptIcon12" role="tabpanel" aria-labelledby="dropdownOptIcon2-tab1"
                                         aria-expanded="false">
                                        <p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet
                                            roll dragée topping cotton candy cake jelly beans. Pie lemon
                                            drops sweet pastry candy canes chocolate cake bear claw cotton
                                            candy wafer.</p>
                                    </div>
                                    <div class="tab-pane" id="linkIconOpt1" role="tabpanel" aria-labelledby="linkIconOpt1-tab1"
                                         aria-expanded="false">
                                        <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies
                                            cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread
                                            powder chocolate cake icing. Cheesecake gummi bears ice cream
                                            marzipan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Icon Tab with bottom line -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Icon Tab with bottom line</h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-underline nav-justified" id="tab-bottom-line-drag">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="activeIcon12-tab1" data-toggle="tab" href="add-on-drag-drop.html#activeIcon12"
                                           aria-controls="activeIcon12" aria-expanded="true"><i class="la la-check"></i> Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="linkIcon12-tab1" data-toggle="tab" href="add-on-drag-drop.html#linkIcon12" aria-controls="linkIcon12"
                                           aria-expanded="false"><i class="la la-link"></i> Link</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="add-on-drag-drop.html#" role="button"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-angle-double-right"></i> Dropdown
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" id="dropdownOptIcon21-tab1" href="add-on-drag-drop.html#dropdownOptIcon21" data-toggle="tab"
                                               aria-controls="dropdownOptIcon21" aria-expanded="true">dropdown 1</a>
                                            <a class="dropdown-item" id="dropdownOptIcon22-tab1" href="add-on-drag-drop.html#dropdownOptIcon22" data-toggle="tab"
                                               aria-controls="dropdownOptIcon22" aria-expanded="true">dropdown 2</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="linkIconOpt11-tab1" data-toggle="tab" href="add-on-drag-drop.html#linkIconOpt11"
                                           aria-controls="linkIconOpt11"><i class="la la-share-alt-square"></i> Link</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1 pt-1">
                                    <div role="tabpanel" class="tab-pane active show" id="activeIcon12" aria-labelledby="activeIcon12-tab1"
                                         aria-expanded="true">
                                        <p>Macaroon candy canes tootsie roll wafer lemon drops liquorice
                                            jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton
                                            candy jelly cake jelly-o sugar plum marshmallow. Dessert
                                            cotton candy macaroon chocolate sugar plum cake donut.</p>
                                    </div>
                                    <div class="tab-pane" id="linkIcon12" role="tabpanel" aria-labelledby="linkIcon12-tab1"
                                         aria-expanded="false">
                                        <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps
                                            cotton candy cake sweet brownie. Cotton candy candy canes
                                            brownie. Biscuit pudding sesame snaps pudding pudding sesame
                                            snaps biscuit tiramisu.</p>
                                    </div>
                                    <div class="tab-pane" id="dropdownOptIcon21" role="tabpanel" aria-labelledby="dropdownOptIcon21-tab1"
                                         aria-expanded="false">
                                        <p>Fruitcake marshmallow donut wafer pastry chocolate topping
                                            cake. Powder powder gummi bears jelly beans. Gingerbread
                                            cake chocolate lollipop. Jelly oat cake pastry marshmallow
                                            sesame snaps.</p>
                                    </div>
                                    <div class="tab-pane" id="dropdownOptIcon22" role="tabpanel" aria-labelledby="dropdownOptIcon22-tab1"
                                         aria-expanded="false">
                                        <p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet
                                            roll dragée topping cotton candy cake jelly beans. Pie lemon
                                            drops sweet pastry candy canes chocolate cake bear claw cotton
                                            candy wafer.</p>
                                    </div>
                                    <div class="tab-pane" id="linkIconOpt11" role="tabpanel" aria-labelledby="linkIconOpt11-tab1"
                                         aria-expanded="false">
                                        <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies
                                            cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread
                                            powder chocolate cake icing. Cheesecake gummi bears ice cream
                                            marzipan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Icon Tab with bottom Arrow -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Icon Tab with bottom Arrow</h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-linetriangle nav-justified" id="tab-bottom-arrow-drag">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="activeIcon22-tab1" data-toggle="tab" href="add-on-drag-drop.html#activeIcon22"
                                           aria-controls="activeIcon22" aria-expanded="true"><i class="la la-check"></i> Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="linkIcon22-tab1" data-toggle="tab" href="add-on-drag-drop.html#linkIcon22" aria-controls="linkIcon22"
                                           aria-expanded="false"><i class="la la-link"></i> Link</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="add-on-drag-drop.html#" role="button"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-angle-double-right"></i> Dropdown
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" id="dropdownOptIcon31-tab1" href="add-on-drag-drop.html#dropdownOptIcon31" data-toggle="tab"
                                               aria-controls="dropdownOptIcon31" aria-expanded="true">dropdown 1</a>
                                            <a class="dropdown-item" id="dropdownOptIcon32-tab1" href="add-on-drag-drop.html#dropdownOptIcon32" data-toggle="tab"
                                               aria-controls="dropdownOptIcon32" aria-expanded="true">dropdown 2</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="linkIconOpt21-tab1" data-toggle="tab" href="add-on-drag-drop.html#linkIconOpt21"
                                           aria-controls="linkIconOpt21"><i class="la la-share-alt-square"></i> Link</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1 pt-1">
                                    <div role="tabpanel" class="tab-pane active show" id="activeIcon22" aria-labelledby="activeIcon22-tab1"
                                         aria-expanded="true">
                                        <p>Macaroon candy canes tootsie roll wafer lemon drops liquorice
                                            jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton
                                            candy jelly cake jelly-o sugar plum marshmallow. Dessert
                                            cotton candy macaroon chocolate sugar plum cake donut.</p>
                                    </div>
                                    <div class="tab-pane" id="linkIcon22" role="tabpanel" aria-labelledby="linkIcon22-tab1"
                                         aria-expanded="false">
                                        <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps
                                            cotton candy cake sweet brownie. Cotton candy candy canes
                                            brownie. Biscuit pudding sesame snaps pudding pudding sesame
                                            snaps biscuit tiramisu.</p>
                                    </div>
                                    <div class="tab-pane" id="dropdownOptIcon31" role="tabpanel" aria-labelledby="dropdownOptIcon31-tab1"
                                         aria-expanded="false">
                                        <p>Fruitcake marshmallow donut wafer pastry chocolate topping
                                            cake. Powder powder gummi bears jelly beans. Gingerbread
                                            cake chocolate lollipop. Jelly oat cake pastry marshmallow
                                            sesame snaps.</p>
                                    </div>
                                    <div class="tab-pane" id="dropdownOptIcon32" role="tabpanel" aria-labelledby="dropdownOptIcon32-tab1"
                                         aria-expanded="false">
                                        <p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet
                                            roll dragée topping cotton candy cake jelly beans. Pie lemon
                                            drops sweet pastry candy canes chocolate cake bear claw cotton
                                            candy wafer.</p>
                                    </div>
                                    <div class="tab-pane" id="linkIconOpt21" role="tabpanel" aria-labelledby="linkIconOpt21-tab1"
                                         aria-expanded="false">
                                        <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies
                                            cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread
                                            powder chocolate cake icing. Cheesecake gummi bears ice cream
                                            marzipan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Tab with Icon Fall -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tab with Icon Fall</h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-iconfall nav-justified" id="tab-icon-fall-drag">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="activeIcon32-tab1" data-toggle="tab" href="add-on-drag-drop.html#activeIcon32"
                                           aria-controls="activeIcon32" aria-expanded="true"><i class="la la-check"></i> Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="linkIcon32-tab1" data-toggle="tab" href="add-on-drag-drop.html#linkIcon32" aria-controls="linkIcon32"
                                           aria-expanded="false"><i class="la la-link"></i> Link</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="add-on-drag-drop.html#" role="button"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-angle-double-right"></i> Dropdown
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" id="dropdownOptIcon41-tab1" href="add-on-drag-drop.html#dropdownOptIcon41" data-toggle="tab"
                                               aria-controls="dropdownOptIcon41" aria-expanded="true">dropdown 1</a>
                                            <a class="dropdown-item" id="dropdownOptIcon42-tab1" href="add-on-drag-drop.html#dropdownOptIcon42" data-toggle="tab"
                                               aria-controls="dropdownOptIcon42" aria-expanded="true">dropdown 2</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="linkIconOpt31-tab1" data-toggle="tab" href="add-on-drag-drop.html#linkIconOpt31"
                                           aria-controls="linkIconOpt31"><i class="la la-share-alt-square"></i> Link</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1 pt-1">
                                    <div role="tabpanel" class="tab-pane active show" id="activeIcon32" aria-labelledby="activeIcon32-tab1"
                                         aria-expanded="true">
                                        <p>Macaroon candy canes tootsie roll wafer lemon drops liquorice
                                            jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton
                                            candy jelly cake jelly-o sugar plum marshmallow. Dessert
                                            cotton candy macaroon chocolate sugar plum cake donut.</p>
                                    </div>
                                    <div class="tab-pane" id="linkIcon32" role="tabpanel" aria-labelledby="linkIcon32-tab1"
                                         aria-expanded="false">
                                        <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps
                                            cotton candy cake sweet brownie. Cotton candy candy canes
                                            brownie. Biscuit pudding sesame snaps pudding pudding sesame
                                            snaps biscuit tiramisu.</p>
                                    </div>
                                    <div class="tab-pane" id="dropdownOptIcon41" role="tabpanel" aria-labelledby="dropdownOptIcon41-tab1"
                                         aria-expanded="false">
                                        <p>Fruitcake marshmallow donut wafer pastry chocolate topping
                                            cake. Powder powder gummi bears jelly beans. Gingerbread
                                            cake chocolate lollipop. Jelly oat cake pastry marshmallow
                                            sesame snaps.</p>
                                    </div>
                                    <div class="tab-pane" id="dropdownOptIcon42" role="tabpanel" aria-labelledby="dropdownOptIcon42-tab1"
                                         aria-expanded="false">
                                        <p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet
                                            roll dragée topping cotton candy cake jelly beans. Pie lemon
                                            drops sweet pastry candy canes chocolate cake bear claw cotton
                                            candy wafer.</p>
                                    </div>
                                    <div class="tab-pane" id="linkIconOpt31" role="tabpanel" aria-labelledby="linkIconOpt31-tab1"
                                         aria-expanded="false">
                                        <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies
                                            cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread
                                            powder chocolate cake icing. Cheesecake gummi bears ice cream
                                            marzipan.
                                        </p>
                                    </div>
                                </div>
                                <small class="text-muted">Use <code>.nav-iconfall</code> class for icon fall for active state.</small>
                            </div>
                        </div>
                    </div>
                    <!-- Icon Tab with top line -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Icon Tab with top line</h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-only-icon nav-top-border no-hover-bg nav-justified" id="tab-icon-top-line-drag">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="activeOnlyIcon1-tab1" data-toggle="tab" href="add-on-drag-drop.html#activeOnlyIcon1"
                                           aria-controls="activeOnlyIcon1" aria-expanded="true"><i class="la la-check"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="linkOnlyIcon1-tab1" data-toggle="tab" href="add-on-drag-drop.html#linkOnlyIcon1"
                                           aria-controls="linkOnlyIcon1" aria-expanded="false"><i class="la la-link"></i></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="add-on-drag-drop.html#" role="button"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-angle-double-right"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" id="dropdownOptOnlyIcon1-tab1" href="add-on-drag-drop.html#dropdownOptOnlyIcon11"
                                               data-toggle="tab" aria-controls="dropdownOptOnlyIcon11" aria-expanded="true">dropdown 1</a>
                                            <a class="dropdown-item" id="dropdownOptOnlyIcon2-tab1" href="add-on-drag-drop.html#dropdownOptOnlyIcon12"
                                               data-toggle="tab" aria-controls="dropdownOptOnlyIcon12" aria-expanded="true">dropdown 2</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="linkOnlyIconOpt1-tab1" data-toggle="tab" href="add-on-drag-drop.html#linkOnlyIconOpt1"
                                           aria-controls="linkOnlyIconOpt1"><i class="la la-share-alt-square"></i></a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1 pt-1">
                                    <div role="tabpanel" class="tab-pane active show" id="activeOnlyIcon1" aria-labelledby="activeOnlyIcon1-tab1"
                                         aria-expanded="true">
                                        <p>Macaroon candy canes tootsie roll wafer lemon drops liquorice
                                            jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton
                                            candy jelly cake jelly-o sugar plum marshmallow. Dessert
                                            cotton candy macaroon chocolate sugar plum cake donut.</p>
                                    </div>
                                    <div class="tab-pane" id="linkOnlyIcon1" role="tabpanel" aria-labelledby="linkOnlyIcon1-tab1"
                                         aria-expanded="false">
                                        <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps
                                            cotton candy cake sweet brownie. Cotton candy candy canes
                                            brownie. Biscuit pudding sesame snaps pudding pudding sesame
                                            snaps biscuit tiramisu.</p>
                                    </div>
                                    <div class="tab-pane" id="dropdownOptOnlyIcon11" role="tabpanel" aria-labelledby="dropdownOptOnlyIcon1-tab1"
                                         aria-expanded="false">
                                        <p>Fruitcake marshmallow donut wafer pastry chocolate topping
                                            cake. Powder powder gummi bears jelly beans. Gingerbread
                                            cake chocolate lollipop. Jelly oat cake pastry marshmallow
                                            sesame snaps.</p>
                                    </div>
                                    <div class="tab-pane" id="dropdownOptOnlyIcon12" role="tabpanel" aria-labelledby="dropdownOptOnlyIcon2-tab1"
                                         aria-expanded="false">
                                        <p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet
                                            roll dragée topping cotton candy cake jelly beans. Pie lemon
                                            drops sweet pastry candy canes chocolate cake bear claw cotton
                                            candy wafer.</p>
                                    </div>
                                    <div class="tab-pane" id="linkOnlyIconOpt1" role="tabpanel" aria-labelledby="linkOnlyIconOpt1-tab1"
                                         aria-expanded="false">
                                        <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies
                                            cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread
                                            powder chocolate cake icing. Cheesecake gummi bears ice cream
                                            marzipan.
                                        </p>
                                    </div>
                                </div>
                                <small class="text-muted">Use <code>.nav-only-icon</code> class when you use only icons,
                                    So that will increase font size.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Sortable tabs section end -->
            <!-- Sortable pills section start -->
            <section id="sortable-pills">
                <div class="row">
                    <div class="col-12 mt-1 mb-3">
                        <h4>Sortable Pills</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <!-- Basic Pills -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Pills</h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills" id="basic-pills-drag">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="base-pill1" data-toggle="pill" aria-controls="pill1"
                                           href="add-on-drag-drop.html#pill1" aria-expanded="true">Pill 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-pill2" data-toggle="pill" aria-controls="pill2" href="add-on-drag-drop.html#pill2"
                                           aria-expanded="false">Pill 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-pill3" data-toggle="pill" aria-controls="pill3" href="add-on-drag-drop.html#pill3"
                                           aria-expanded="false">Pill 3</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled">Disabled</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1 pt-1" id="basicPillContent">
                                    <div role="tabpanel" class="tab-pane active" id="pill1" aria-expanded="true" aria-labelledby="base-pill1">
                                        <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans.
                                            Icing halvah chocolate cake carrot cake. Jelly beans carrot
                                            cake marshmallow gingerbread chocolate cake. Gummies cupcake
                                            croissant.
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="pill2" aria-labelledby="base-pill2">
                                        <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                                            pastry cotton candy oat cake fruitcake jelly chupa chups.
                                            Pudding caramels pastry powder cake soufflé wafer caramels.
                                            Jelly-o pie cupcake.</p>
                                    </div>
                                    <div class="tab-pane" id="pill3" aria-labelledby="base-pill3">
                                        <p>Biscuit ice cream halvah candy canes bear claw ice cream cake
                                            chocolate bar donut. Toffee cotton candy liquorice. Oat cake
                                            lemon drops gingerbread dessert caramels. Sweet dessert jujubes
                                            powder sweet sesame snaps.</p>
                                    </div>
                                </div>
                                <small class="text-muted">Takes the basic nav pills from above and adds the <code>.nav-pills</code>                    class to generate a pilledterface. </small>
                            </div>
                        </div>
                    </div>
                    <!-- Bordered Pills -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Bordered Pills</h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills nav-pill-bordered" id="bordered-pills-drag">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="base-pill11" data-toggle="pill" aria-controls="pill11"
                                           href="add-on-drag-drop.html#pill11" aria-expanded="true">Pill 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-pill12" data-toggle="pill" aria-controls="pill12" href="add-on-drag-drop.html#pill12"
                                           aria-expanded="false">Pill 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-pill13" data-toggle="pill" aria-controls="pill13" href="add-on-drag-drop.html#pill13"
                                           aria-expanded="false">Pill 3</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled">Disabled</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1 pt-1" id="borderedPillContent">
                                    <div role="tabpanel" class="tab-pane active" id="pill11" aria-expanded="true" aria-labelledby="base-pill11">
                                        <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans.
                                            Icing halvah chocolate cake carrot cake. Jelly beans carrot
                                            cake marshmallow gingerbread chocolate cake. Gummies cupcake
                                            croissant.
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="pill12" aria-labelledby="base-pill12">
                                        <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                                            pastry cotton candy oat cake fruitcake jelly chupa chups.
                                            Pudding caramels pastry powder cake soufflé wafer caramels.
                                            Jelly-o pie cupcake.</p>
                                    </div>
                                    <div class="tab-pane" id="pill13" aria-labelledby="base-pill13">
                                        <p>Biscuit ice cream halvah candy canes bear claw ice cream cake
                                            chocolate bar donut. Toffee cotton candy liquorice. Oat cake
                                            lemon drops gingerbread dessert caramels. Sweet dessert jujubes
                                            powder sweet sesame snaps.</p>
                                    </div>
                                </div>
                                <small class="text-muted">Use <code>.nav-pill-bordered</code> class to <code>.nav-pills</code>                    for bordered type pills. </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Toolbar Pills -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Toolbar Pills</h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills nav-pill-toolbar" id="toolbar-pills-drag">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="base-pill41" data-toggle="pill" aria-controls="pill41"
                                           href="add-on-drag-drop.html#pill41" aria-expanded="true">Pill 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-pill42" data-toggle="pill" aria-controls="pill42" href="add-on-drag-drop.html#pill42"
                                           aria-expanded="false">Pill 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-pill43" data-toggle="pill" aria-controls="pill43" href="add-on-drag-drop.html#pill43"
                                           aria-expanded="false">Pill 3</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled">Disabled</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1 pt-1" id="toolbarPillContent">
                                    <div role="tabpanel" class="tab-pane active" id="pill41" aria-expanded="true" aria-labelledby="base-pill41">
                                        <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans.
                                            Icing halvah chocolate cake carrot cake. Jelly beans carrot
                                            cake marshmallow gingerbread chocolate cake. Gummies cupcake
                                            croissant.
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="pill42" aria-labelledby="base-pill42">
                                        <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                                            pastry cotton candy oat cake fruitcake jelly chupa chups.
                                            Pudding caramels pastry powder cake soufflé wafer caramels.
                                            Jelly-o pie cupcake.</p>
                                    </div>
                                    <div class="tab-pane" id="pill43" aria-labelledby="base-pill43">
                                        <p>Biscuit ice cream halvah candy canes bear claw ice cream cake
                                            chocolate bar donut. Toffee cotton candy liquorice. Oat cake
                                            lemon drops gingerbread dessert caramels. Sweet dessert jujubes
                                            powder sweet sesame snaps.</p>
                                    </div>
                                </div>
                                <small class="text-muted">Use <code>.nav-pill-toolbar</code> class to <code>.nav-pills</code>                    for bordered type pills. </small>
                            </div>
                        </div>
                    </div>
                    <!-- Justified Pills -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Justified Pills</h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills nav-justified" id="justified-pills-drag">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="active-pill" data-toggle="pill" href="add-on-drag-drop.html#active" aria-controls="active"
                                           aria-expanded="true">Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="link-pill" data-toggle="pill" href="add-on-drag-drop.html#link" aria-controls="link"
                                           aria-expanded="false">Link</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="add-on-drag-drop.html#" role="button"
                                           aria-haspopup="true" aria-expanded="false">
                                            Dropdown
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" id="dropdownOpt1-pill" href="add-on-drag-drop.html#dropdownOpt1" data-toggle="pill"
                                               aria-controls="dropdownOpt1" aria-expanded="true">dropdown 1</a>
                                            <a class="dropdown-item" id="dropdownOpt2-pill" href="add-on-drag-drop.html#dropdownOpt2" data-toggle="pill"
                                               aria-controls="dropdownOpt2" aria-expanded="true">dropdown 2</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="linkOpt-pill" data-toggle="pill" href="add-on-drag-drop.html#linkOpt" aria-controls="linkOpt">Another Link</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1 pt-1">
                                    <div role="tabpanel" class="tab-pane active" id="active" aria-labelledby="active-pill"
                                         aria-expanded="true">
                                        <p>Macaroon candy canes tootsie roll wafer lemon drops liquorice
                                            jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton
                                            candy jelly cake jelly-o sugar plum marshmallow. Dessert
                                            cotton candy macaroon chocolate sugar plum cake donut.</p>
                                    </div>
                                    <div class="tab-pane" id="link" role="tabpanel" aria-labelledby="link-pill" aria-expanded="false">
                                        <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps
                                            cotton candy cake sweet brownie. Cotton candy candy canes
                                            brownie. Biscuit pudding sesame snaps pudding pudding sesame
                                            snaps biscuit tiramisu.</p>
                                    </div>
                                    <div class="tab-pane" id="dropdownOpt1" role="tabpanel" aria-labelledby="dropdownOpt1-pill"
                                         aria-expanded="false">
                                        <p>Fruitcake marshmallow donut wafer pastry chocolate topping
                                            cake. Powder powder gummi bears jelly beans. Gingerbread
                                            cake chocolate lollipop. Jelly oat cake pastry marshmallow
                                            sesame snaps.</p>
                                    </div>
                                    <div class="tab-pane" id="dropdownOpt2" role="tabpanel" aria-labelledby="dropdownOpt2-pill"
                                         aria-expanded="false">
                                        <p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet
                                            roll dragée topping cotton candy cake jelly beans. Pie lemon
                                            drops sweet pastry candy canes chocolate cake bear claw cotton
                                            candy wafer.</p>
                                    </div>
                                    <div class="tab-pane" id="linkOpt" role="tabpanel" aria-labelledby="linkOpt-pill"
                                         aria-expanded="false">
                                        <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies
                                            cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread
                                            powder chocolate cake icing. Cheesecake gummi bears ice cream
                                            marzipan.
                                        </p>
                                    </div>
                                </div>
                                <small class="text-muted">Use <code>.nav-justified</code> class to set Pills justified.</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Stacked Pills -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Stacked Pills</h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills d-block" id="stacked-pills-drag">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="base-pillOpt21" data-toggle="pill" href="add-on-drag-drop.html#pillOpt21"
                                           aria-expanded="true">Pill 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-pillOpt22" data-toggle="pill" href="add-on-drag-drop.html#pillOpt22" aria-expanded="false">Pill 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-pillOpt23" data-toggle="pill" href="add-on-drag-drop.html#pillOpt23" aria-expanded="false">Pill 3</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled">Disabled</a>
                                    </li>
                                </ul>
                                <small class="text-muted">Use <code>.d-block</code> class with <code>.nav.nav-pills</code>                    to stack them vertically. Each <code>.nav-link</code> becomes
                                    block-level, allowing for larger hit areas via mouse or tap.
                                </small>
                            </div>
                        </div>
                    </div>
                    <!-- Pills with Left Icon -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pills with Left Icon</h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills" id="left-icon-pills-drag">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="base-pillEle1" data-toggle="pill" aria-controls="pillEle1"
                                           href="add-on-drag-drop.html#pillEle1" aria-expanded="true"><i class="la la-sun-o"></i> Pill 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-pillEle2" data-toggle="pill" aria-controls="pillEle2"
                                           href="add-on-drag-drop.html#pillEle2" aria-expanded="false"><i class="la la-anchor"></i> Pill 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-pillEle3" data-toggle="pill" aria-controls="pillEle3"
                                           href="add-on-drag-drop.html#pillEle3" aria-expanded="false"><i class="la la-clock-o"></i> Pill 3</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled"><i class="la la-ban"></i> Disabled</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1 pt-1" id="iconPillContent">
                                    <div role="tabpanel" class="tab-pane active show" id="pillEle1" aria-expanded="true"
                                         aria-labelledby="base-pillEle1">
                                        <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans.
                                            Icing halvah chocolate cake carrot cake. Jelly beans carrot
                                            cake marshmallow gingerbread chocolate cake. Gummies cupcake
                                            croissant.
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="pillEle2" aria-labelledby="base-pillEle2">
                                        <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                                            pastry cotton candy oat cake fruitcake jelly chupa chups.
                                            Pudding caramels pastry powder cake soufflé wafer caramels.
                                            Jelly-o pie cupcake.</p>
                                    </div>
                                    <div class="tab-pane" id="pillEle3" aria-labelledby="base-pillEle3">
                                        <p>Biscuit ice cream halvah candy canes bear claw ice cream cake
                                            chocolate bar donut. Toffee cotton candy liquorice. Oat cake
                                            lemon drops gingerbread dessert caramels. Sweet dessert jujubes
                                            powder sweet sesame snaps.</p>
                                    </div>
                                </div>
                                <small class="text-muted">Use font icons before pill name to get pills with icon.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Sortable pills section end -->
            <!-- Sortable navs section start -->
            <section id="sortable-navs">
                <div class="row">
                    <div class="col-12 mt-1 mb-3">
                        <h4>Sortable Navs</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <!-- Base Nav -->
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Base nav</h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav d-block" id="base-nav-drag">
                                    <li class="nav-item">
                                        <a class="nav-link active">Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled">Disabled</a>
                                    </li>
                                </ul>
                                <small class="text-muted">Roll your own navigation style by extending the base <code>.nav</code>                    component. All Bootstrap’s nav components are built on top of
                                    this by specifying additional styles.</small>
                            </div>
                        </div>
                    </div>
                    <!-- Nav With Divider -->
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Nav with Divider</h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav d-block wrap-border" id="nav-divider-drag">
                                    <li class="nav-item">
                                        <a class="nav-link active">Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link">Link</a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled">Disabled</a>
                                    </li>
                                </ul>
                                <small class="text-muted">To add divider, use <code>.dropdown-divider</code> class to <code>&lt;li&gt;</code></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Heading With Icon -->
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Heading with Icon</h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav d-block wrap-border" id="heading-icon-drag">
                                    <li class="nav-header"><i class="la la-circle-o mr-1"></i> Heading Option 1</li>
                                    <li class="nav-item">
                                        <a class="nav-link active">Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link">Link</a>
                                    </li>
                                    <li class="nav-header"><i class="la la-circle-o mr-1"></i> Heading Option 2</li>
                                    <li class="nav-item">
                                        <a class="nav-link">Link</a>
                                    </li>
                                </ul>
                                <small class="text-muted">You can also add icon to the text in header section.</small>
                            </div>
                        </div>
                    </div>
                    <!-- Icon Both Sides Of Links -->
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Icon on both side of links</h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav d-block wrap-border" id="both-side-link-icons-drag">
                                    <li class="nav-header">Heading Option 1</li>
                                    <li class="nav-item">
                                        <a class="nav-link active"><i class="la la-lock"></i><i class="la la-clock-o float-right pl-1"></i> Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"><i class="la la-bell-o"></i><i class="la la-angle-double-right float-right pl-1"></i> Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"><i class="la la-map-marker"></i><i class="la la-glass float-right pl-1"></i> Link</a>
                                    </li>
                                    <li class="nav-header">Heading Option 2 </li>
                                    <li class="nav-item">
                                        <a class="nav-link"><i class="la la-thumbs-o-up"></i><i class="la la-heart-o float-right pl-1"></i> Link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Sortable navs section end -->
            <!-- Sortable collapsibles section start -->
            <section id="sortable-collapsibles">
                <div class="row">
                    <div class="col-12 mt-1 mb-3">
                        <h4>Sortable Collapsibles</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <div class="mb-1">
                            <h5 class="mb-0">Basic Accordion</h5>
                            <p>Basic accordion toggle.</p>
                        </div>
                        <div id="accordionWrapa1" role="tablist" aria-multiselectable="true">
                            <div class="card" id="basic-accordion-drag">
                                <div id="heading1" role="tabpanel" class="card-header">
                                    <a data-toggle="collapse" data-parent="#accordionWrapa1" href="add-on-drag-drop.html#accordion1" aria-expanded="true"
                                       aria-controls="accordion1" class="font-medium-1">Accordion Group Item #1</a>
                                </div>
                                <div id="accordion1" role="tabpanel" aria-labelledby="heading1" class="card-collapse collapse show"
                                     aria-expanded="true">
                                    <div class="card-body">
                                        Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels
                                        chocolate cake liquorice cake wafer jelly beans croissant apple
                                        pie. Oat cake brownie pudding jelly beans. Wafer liquorice
                                        chocolate bar chocolate bar liquorice. Tootsie roll gingerbread
                                        gingerbread chocolate bar tart chupa chups sugar plum toffee.
                                        Carrot cake macaroon sweet danish. Cupcake soufflé toffee marzipan
                                        candy canes pie jelly-o. Cotton candy bonbon powder topping
                                        carrot cake cookie caramels lemon drops liquorice. Dessert
                                        cookie ice cream toffee apple pie.
                                    </div>
                                </div>
                                <div id="heading2" role="tabpanel" class="card-header">
                                    <a data-toggle="collapse" data-parent="#accordionWrapa1" href="add-on-drag-drop.html#accordion2" aria-expanded="false"
                                       aria-controls="accordion2" class="font-medium-1 collapsed">Accordion Group Item #2</a>
                                </div>
                                <div id="accordion2" role="tabpanel" aria-labelledby="heading2" class="card-collapse collapse"
                                     aria-expanded="false">
                                    <div class="card-body">
                                        Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon
                                        muffin jelly marshmallow cake. Pastry oat cake chupa chups.
                                        Caramels marshmallow carrot cake topping donut sesame snaps
                                        toffee tootsie roll. Lollipop sweet jelly beans oat cake biscuit
                                        pastry chocolate cake. Cupcake chocolate biscuit lemon drops
                                        cotton candy marshmallow oat cake donut. Croissant chocolate
                                        cake oat cake brownie topping carrot cake jelly beans. Dessert
                                        gingerbread marshmallow pudding donut lemon drops cake. Cake
                                        topping gummi bears cake.
                                    </div>
                                </div>
                                <div id="heading3" role="tabpanel" class="card-header">
                                    <a data-toggle="collapse" data-parent="#accordionWrapa1" href="add-on-drag-drop.html#accordion3" aria-expanded="false"
                                       aria-controls="accordion3" class="font-medium-1 collapsed">Accordion Group Item #3</a>
                                </div>
                                <div id="accordion3" role="tabpanel" aria-labelledby="heading3" class="card-collapse collapse"
                                     aria-expanded="false">
                                    <div class="card-body">
                                        Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake
                                        dragée jujubes donut chocolate bar chocolate cake cupcake chocolate
                                        topping. Dessert jelly beans toffee muffin tiramisu sesame
                                        snaps brownie. Cake halvah pastry soufflé oat cake candy candy
                                        canes. Lemon drops gummies gingerbread toffee. Tart jelly candy
                                        pastry. Pastry cake jelly beans carrot cake marzipan lollipop
                                        muffin. Soufflé jujubes cupcake. Powder danish candy carrot
                                        cake pastry. Tart marshmallow caramels cake macaroon gummies
                                        lollipop.
                                    </div>
                                </div>
                                <div id="heading4" role="tabpanel" class="card-header">
                                    <a data-toggle="collapse" data-parent="#accordionWrapa1" href="add-on-drag-drop.html#accordion4" aria-expanded="false"
                                       aria-controls="accordion4" class="font-medium-1 collapsed">Accordion Group Item #4</a>
                                </div>
                                <div id="accordion4" role="tabpanel" aria-labelledby="heading4" class="card-collapse collapse"
                                     aria-expanded="false" style="height: 0px;">
                                    <div class="card-body">
                                        Sesame snaps chocolate lollipop sesame snaps apple pie chocolate cake sweet roll.
                                        Dragée candy canes carrot cake chupa chups danish cake sugar
                                        plum candy. Cake powder biscuit bear claw. Sesame snaps cotton
                                        candy cheesecake topping ice cream cookie tiramisu. Liquorice
                                        bonbon cookie pie halvah. Cookie toffee ice cream cotton candy
                                        lollipop fruitcake. Tart cheesecake tiramisu danish marzipan
                                        pie pastry chocolate cake. Pastry bonbon lollipop oat cake
                                        pastry halvah dessert jelly. Toffee caramels croissant apple
                                        pie chupa chups toffee muffin chupa chups apple pie.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="mb-1">
                            <h5 class="mb-0">Right Aligned Accordion</h5>
                            <p>Use <code>.text-right</code> to header for right aligned text to
                                basic accordion toggle.</p>
                        </div>
                        <div id="accordionWrap01" role="tablist" aria-multiselectable="true">
                            <div class="card" id="accordion-icon-drag">
                                <div id="heading01" role="tabpanel" class="card-header text-right">
                                    <a data-toggle="collapse" data-parent="#accordionWrap01" href="add-on-drag-drop.html#accordion01" aria-expanded="true"
                                       aria-controls="accordion01" class="font-medium-1">Accordion Group Item #1</a>
                                </div>
                                <div id="accordion01" role="tabpanel" aria-labelledby="heading01" class="card-collapse collapse show"
                                     aria-expanded="true">
                                    <div class="card-body">
                                        Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels
                                        chocolate cake liquorice cake wafer jelly beans croissant apple
                                        pie. Oat cake brownie pudding jelly beans. Wafer liquorice
                                        chocolate bar chocolate bar liquorice. Tootsie roll gingerbread
                                        gingerbread chocolate bar tart chupa chups sugar plum toffee.
                                        Carrot cake macaroon sweet danish. Cupcake soufflé toffee marzipan
                                        candy canes pie jelly-o. Cotton candy bonbon powder topping
                                        carrot cake cookie caramels lemon drops liquorice. Dessert
                                        cookie ice cream toffee apple pie.
                                    </div>
                                </div>
                                <div id="heading02" role="tabpanel" class="card-header text-right">
                                    <a data-toggle="collapse" data-parent="#accordionWrap01" href="add-on-drag-drop.html#accordion02" aria-expanded="false"
                                       aria-controls="accordion02" class="font-medium-1 collapsed">Accordion Group Item #2</a>
                                </div>
                                <div id="accordion02" role="tabpanel" aria-labelledby="heading02" class="card-collapse collapse"
                                     aria-expanded="false">
                                    <div class="card-body">
                                        Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon
                                        muffin jelly marshmallow cake. Pastry oat cake chupa chups.
                                        Caramels marshmallow carrot cake topping donut sesame snaps
                                        toffee tootsie roll. Lollipop sweet jelly beans oat cake biscuit
                                        pastry chocolate cake. Cupcake chocolate biscuit lemon drops
                                        cotton candy marshmallow oat cake donut. Croissant chocolate
                                        cake oat cake brownie topping carrot cake jelly beans. Dessert
                                        gingerbread marshmallow pudding donut lemon drops cake. Cake
                                        topping gummi bears cake.
                                    </div>
                                </div>
                                <div id="heading03" role="tabpanel" class="card-header text-right">
                                    <a data-toggle="collapse" data-parent="#accordionWrap01" href="add-on-drag-drop.html#accordion03" aria-expanded="false"
                                       aria-controls="accordion03" class="font-medium-1 collapsed">Accordion Group Item #3</a>
                                </div>
                                <div id="accordion03" role="tabpanel" aria-labelledby="heading03" class="card-collapse collapse"
                                     aria-expanded="false">
                                    <div class="card-body">
                                        Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake
                                        dragée jujubes donut chocolate bar chocolate cake cupcake chocolate
                                        topping. Dessert jelly beans toffee muffin tiramisu sesame
                                        snaps brownie. Cake halvah pastry soufflé oat cake candy candy
                                        canes. Lemon drops gummies gingerbread toffee. Tart jelly candy
                                        pastry. Pastry cake jelly beans carrot cake marzipan lollipop
                                        muffin. Soufflé jujubes cupcake. Powder danish candy carrot
                                        cake pastry. Tart marshmallow caramels cake macaroon gummies
                                        lollipop.
                                    </div>
                                </div>
                                <div id="heading04" role="tabpanel" class="card-header text-right">
                                    <a data-toggle="collapse" data-parent="#accordionWrap01" href="add-on-drag-drop.html#accordion04" aria-expanded="false"
                                       aria-controls="accordion04" class="font-medium-1 collapsed">Accordion Group Item #4</a>
                                </div>
                                <div id="accordion04" role="tabpanel" aria-labelledby="heading04" class="card-collapse collapse"
                                     aria-expanded="false" style="height: 0px;">
                                    <div class="card-body">
                                        Sesame snaps chocolate lollipop sesame snaps apple pie chocolate cake sweet roll.
                                        Dragée candy canes carrot cake chupa chups danish cake sugar
                                        plum candy. Cake powder biscuit bear claw. Sesame snaps cotton
                                        candy cheesecake topping ice cream cookie tiramisu. Liquorice
                                        bonbon cookie pie halvah. Cookie toffee ice cream cotton candy
                                        lollipop fruitcake. Tart cheesecake tiramisu danish marzipan
                                        pie pastry chocolate cake. Pastry bonbon lollipop oat cake
                                        pastry halvah dessert jelly. Toffee caramels croissant apple
                                        pie chupa chups toffee muffin chupa chups apple pie.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Basic Collapse -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="mb-1">
                            <h5 class="mb-0">Basic Collapse</h5>
                            <small class="text-muted">It will work as collapsible toggle by default.</small>
                        </div>
                        <div class="card" id="headingCollapse1">
                            <div role="tabpanel" class="card-header">
                                <a data-toggle="collapse" href="add-on-drag-drop.html#collapse1" aria-expanded="true" aria-controls="collapse1"
                                   class="font-medium-1">Collapsible Group Item #1</a>
                            </div>
                            <div id="collapse1" role="tabpanel" aria-labelledby="headingCollapse1" class="card-collapse collapse show"
                                 aria-expanded="true">
                                <div class="card-body">
                                    Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels
                                    chocolate cake liquorice cake wafer jelly beans croissant apple
                                    pie. Oat cake brownie pudding jelly beans. Wafer liquorice chocolate
                                    bar chocolate bar liquorice. Tootsie roll gingerbread gingerbread
                                    chocolate bar tart chupa chups sugar plum toffee. Carrot cake
                                    macaroon sweet danish. Cupcake soufflé toffee marzipan candy
                                    canes pie jelly-o. Cotton candy bonbon powder topping carrot
                                    cake cookie caramels lemon drops liquorice. Dessert cookie ice
                                    cream toffee apple pie.
                                </div>
                            </div>
                            <div id="headingCollapse2" role="tabpanel" class="card-header">
                                <a data-toggle="collapse" href="add-on-drag-drop.html#collapse2" aria-expanded="false" aria-controls="collapse2"
                                   class="font-medium-1 collapsed">Collapsible Group Item #2</a>
                            </div>
                            <div id="collapse2" role="tabpanel" aria-labelledby="headingCollapse2" class="card-collapse collapse"
                                 aria-expanded="false">
                                <div class="card-body">
                                    Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon
                                    muffin jelly marshmallow cake. Pastry oat cake chupa chups. Caramels
                                    marshmallow carrot cake topping donut sesame snaps toffee tootsie
                                    roll. Lollipop sweet jelly beans oat cake biscuit pastry chocolate
                                    cake. Cupcake chocolate biscuit lemon drops cotton candy marshmallow
                                    oat cake donut. Croissant chocolate cake oat cake brownie topping
                                    carrot cake jelly beans. Dessert gingerbread marshmallow pudding
                                    donut lemon drops cake. Cake topping gummi bears cake.
                                </div>
                            </div>
                            <div id="headingCollapse3" role="tabpanel" class="card-header">
                                <a data-toggle="collapse" href="add-on-drag-drop.html#collapse3" aria-expanded="false" aria-controls="collapse3"
                                   class="font-medium-1 collapsed">Collapsible Group Item #3</a>
                            </div>
                            <div id="collapse3" role="tabpanel" aria-labelledby="headingCollapse3" class="card-collapse collapse"
                                 aria-expanded="false">
                                <div class="card-body">
                                    Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake
                                    dragée jujubes donut chocolate bar chocolate cake cupcake chocolate
                                    topping. Dessert jelly beans toffee muffin tiramisu sesame snaps
                                    brownie. Cake halvah pastry soufflé oat cake candy candy canes.
                                    Lemon drops gummies gingerbread toffee. Tart jelly candy pastry.
                                    Pastry cake jelly beans carrot cake marzipan lollipop muffin.
                                    Soufflé jujubes cupcake. Powder danish candy carrot cake pastry.
                                    Tart marshmallow caramels cake macaroon gummies lollipop.
                                </div>
                            </div>
                            <div id="headingCollapse4" role="tabpanel" class="card-header">
                                <a data-toggle="collapse" href="add-on-drag-drop.html#collapse4" aria-expanded="false" aria-controls="collapse4"
                                   class="font-medium-1 collapsed">Collapsible Group Item #4</a>
                            </div>
                            <div id="collapse4" role="tabpanel" aria-labelledby="headingCollapse4" class="card-collapse collapse"
                                 aria-expanded="false" style="height: 0px;">
                                <div class="card-body">
                                    Sesame snaps chocolate lollipop sesame snaps apple pie chocolate cake sweet roll.
                                    Dragée candy canes carrot cake chupa chups danish cake sugar
                                    plum candy. Cake powder biscuit bear claw. Sesame snaps cotton
                                    candy cheesecake topping ice cream cookie tiramisu. Liquorice
                                    bonbon cookie pie halvah. Cookie toffee ice cream cotton candy
                                    lollipop fruitcake. Tart cheesecake tiramisu danish marzipan
                                    pie pastry chocolate cake. Pastry bonbon lollipop oat cake pastry
                                    halvah dessert jelly. Toffee caramels croissant apple pie chupa
                                    chups toffee muffin chupa chups apple pie.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Collapsible with Border Color -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="mb-1">
                            <h5 class="mb-0">Collapsible with Border Color</h5>
                            <small class="text-muted">Use class <code>.border-COLOR</code>to collapse toggle for Collapse
                                heading border color.</small>
                        </div>
                        <div class="card" id="headingCollapse51">
                            <div role="tabpanel" class="card-header border-success">
                                <a data-toggle="collapse" href="add-on-drag-drop.html#collapse51" aria-expanded="true" aria-controls="collapse51"
                                   class="font-medium-1 success">Collapsible Group Item #1</a>
                            </div>
                            <div id="collapse51" role="tabpanel" aria-labelledby="headingCollapse51" class="card-collapse collapse show"
                                 aria-expanded="true">
                                <div class="card-body">
                                    Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels
                                    chocolate cake liquorice cake wafer jelly beans croissant apple
                                    pie. Oat cake brownie pudding jelly beans. Wafer liquorice chocolate
                                    bar chocolate bar liquorice. Tootsie roll gingerbread gingerbread
                                    chocolate bar tart chupa chups sugar plum toffee. Carrot cake
                                    macaroon sweet danish. Cupcake soufflé toffee marzipan candy
                                    canes pie jelly-o. Cotton candy bonbon powder topping carrot
                                    cake cookie caramels lemon drops liquorice. Dessert cookie ice
                                    cream toffee apple pie.
                                </div>
                            </div>
                            <div id="headingCollapse52" role="tabpanel" class="card-header border-danger mt-1">
                                <a data-toggle="collapse" href="add-on-drag-drop.html#collapse52" aria-expanded="false" aria-controls="collapse52"
                                   class="font-medium-1 danger collapsed">Collapsible Group Item #2</a>
                            </div>
                            <div id="collapse52" role="tabpanel" aria-labelledby="headingCollapse52" class="card-collapse collapse"
                                 aria-expanded="false">
                                <div class="card-body">
                                    Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon
                                    muffin jelly marshmallow cake. Pastry oat cake chupa chups. Caramels
                                    marshmallow carrot cake topping donut sesame snaps toffee tootsie
                                    roll. Lollipop sweet jelly beans oat cake biscuit pastry chocolate
                                    cake. Cupcake chocolate biscuit lemon drops cotton candy marshmallow
                                    oat cake donut. Croissant chocolate cake oat cake brownie topping
                                    carrot cake jelly beans. Dessert gingerbread marshmallow pudding
                                    donut lemon drops cake. Cake topping gummi bears cake.
                                </div>
                            </div>
                            <div id="headingCollapse53" role="tabpanel" class="card-header border-info mt-1">
                                <a data-toggle="collapse" href="add-on-drag-drop.html#collapse53" aria-expanded="false" aria-controls="collapse53"
                                   class="font-medium-1 info collapsed">Collapsible Group Item #3</a>
                            </div>
                            <div id="collapse53" role="tabpanel" aria-labelledby="headingCollapse53" class="card-collapse collapse"
                                 aria-expanded="false">
                                <div class="card-body">
                                    Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake
                                    dragée jujubes donut chocolate bar chocolate cake cupcake chocolate
                                    topping. Dessert jelly beans toffee muffin tiramisu sesame snaps
                                    brownie. Cake halvah pastry soufflé oat cake candy candy canes.
                                    Lemon drops gummies gingerbread toffee. Tart jelly candy pastry.
                                    Pastry cake jelly beans carrot cake marzipan lollipop muffin.
                                    Soufflé jujubes cupcake. Powder danish candy carrot cake pastry.
                                    Tart marshmallow caramels cake macaroon gummies lollipop.
                                </div>
                            </div>
                            <div id="headingCollapse54" role="tabpanel" class="card-header border-warning mt-1">
                                <a data-toggle="collapse" href="add-on-drag-drop.html#collapse54" aria-expanded="false" aria-controls="collapse54"
                                   class="font-medium-1 warning collapsed">Collapsible Group Item #4</a>
                            </div>
                            <div id="collapse54" role="tabpanel" aria-labelledby="headingCollapse54" class="card-collapse collapse"
                                 aria-expanded="false" style="height: 0px;">
                                <div class="card-body">
                                    Sesame snaps chocolate lollipop sesame snaps apple pie chocolate cake sweet roll.
                                    Dragée candy canes carrot cake chupa chups danish cake sugar
                                    plum candy. Cake powder biscuit bear claw. Sesame snaps cotton
                                    candy cheesecake topping ice cream cookie tiramisu. Liquorice
                                    bonbon cookie pie halvah. Cookie toffee ice cream cotton candy
                                    lollipop fruitcake. Tart cheesecake tiramisu danish marzipan
                                    pie pastry chocolate cake. Pastry bonbon lollipop oat cake pastry
                                    halvah dessert jelly. Toffee caramels croissant apple pie chupa
                                    chups toffee muffin chupa chups apple pie.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Sortable collapsibles section end -->
        </div>

