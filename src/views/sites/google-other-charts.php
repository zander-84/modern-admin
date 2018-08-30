<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\GoogleOtherChartsAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Other Charts</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="google-other-charts.html#">Google Charts</a>
</li>
<li class="breadcrumb-item active">Other Charts
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="google-other-charts.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="google-other-charts.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="google-other-charts.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="google-other-charts.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Google other charts section start -->
<section id="google-other-charts">
<!-- Sankey Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Sankey Chart</h4>
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
<div class="card-body">
<div class="card-body">
<p class="card-text">A sankey diagram is a visualization used to depict a flow from
                      one set of values to another. The things being connected are
                      called nodes and the connections are called links. Sankeys
                      are best used when you want to show a many-to-many mapping
                      between two domains (e.g., universities and majors) or multiple
                      paths through a set of stages (for instance, google Analytics
                      uses sankeys to show how traffic flows from pages to other
                      pages on your web site).</p>
<div id="sankey-chart"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Treemap Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Treemap</h4>
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
<div class="card-body">
<div class="card-body">
<p class="card-text">A visual representation of a data tree, where each node can have
                      zero or more children, and one parent (except for the root,
                      which has no parents). Each node is displayed as a rectangle,
                      sized and colored according to values that you assign. Sizes
                      and colors are valued relative to all other nodes in the graph.
                      You can specify how many levels to display simultaneously,
                      and optionally to display deeper levels in a hinted fashion.
                      If a node is a leaf node, you can specify a size and color;
                      if it is not a leaf, it will be displayed as a bounding box
                      for leaf nodes. The default behavior is to move down the tree
                      when a user left-clicks a node, and to move back up the tree
                      when a user right-clicks the graph.</p>
<p class="card-text">The total size of the graph is determined by the size of the
                      containing element that you insert in your page. If you have
                      leaf nodes with names too long to show, the name will be truncated
                      with an ellipsis (...).</p>
<div id="treemap"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Geo Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Geo Chart</h4>
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
<div class="card-body">
<div class="card-body">
<p class="card-text">A geochart is a map of a country, a continent, or a region with
                      areas identified in one of three ways:</p>
<ul>
<li>The region mode colors whole regions, such as countries, provinces,
                        or states.</li>
<li>The markers mode uses circles to designate regions that are
                        scaled according to a value that you specify.</li>
<li>The text mode labels the regions with identifiers (e.g., "Russia"
                        or "Asia").</li>
</ul>
<p class="card-text">A geochart is rendered within the browser using SVG or VML. Note
                      that the geochart is not scrollable or draggable, and it's
                      a line drawing rather than a terrain map; if you want any of
                      that, consider a map visualization instead.</p>
<div id="geo-chart"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Candlestick Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Candlestick Chart</h4>
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
<div class="card-body">
<div class="card-body">
<p class="card-text">A candlestick chart is used to show an opening and closing value
                      overlaid on top of a total variance. Candlestick charts are
                      often used to show stock value behavior. In this chart, items
                      where the opening value is less than the closing value (a gain)
                      are drawn as filled boxes, and items where the opening value
                      is more than the closing value (a loss) are drawn as hollow
                      boxes.
                    </p>
<div id="candlestick-chart"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Diff Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Diff Chart</h4>
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
<div class="card-body">
<div class="card-body">
<p class="card-text">A diff chart is a chart designed to highlight the differences
                      between two charts with comparable data. By making the changes
                      between analogous values prominent, they can reveal variations
                      between datasets.</p>
<p class="card-text">You create a diff chart by calling the computeDiff method with
                      two datasets to generate a third dataset representing the diff,
                      and then drawing that.</p>
<div id="diff-chart"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Trendlines Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Trendlines</h4>
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
<div class="card-body">
<div class="card-body">
<p class="card-text">A trendline is a line superimposed on a chart revealing the overall
                      direction of the data. google Charts can automatically generate
                      trendlines for Scatter Charts, Bar Charts, Column Charts, and
                      Line Charts.</p>
<p class="card-text">google Charts supports three types of trendlines: linear, polynomial,
                      and exponential.</p>
<div id="trendlines"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Sticks Interval Chart -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Sticks Interval</h4>
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
<div class="card-body">
<div class="card-body">
<p class="card-text">Stick intervals display pairs of columns as a set of sticks parallel
                      to the target axis. A stick of zero height is rendered as a
                      point, which can be suppressed by setting the pointSize option
                      to zero.</p>
<div id="sticks-interval"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Guage Charts -->
<div class="row">
<!-- Guage Chart 1 -->
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h4 class="card-title">Guage Network Chart</h4>
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
<div class="card-body">
<div class="card-body">
<p class="card-text">A gauge with a dial, rendered within the browser using SVG or
                      VML.
                    </p>
<div id="guage-network-chart"></div>
</div>
</div>
</div>
</div>
<!-- Guage Chart 2 -->
<div class="col-md-6">
<div class="card">
<div class="card-header">
<h4 class="card-title">Guage Earning Chart</h4>
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
<div class="card-body">
<div class="card-body">
<p class="card-text">A gauge with a dial, rendered within the browser using SVG or
                      VML.
                    </p>
<div id="guage-earning-chart"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Google other charts section end -->
</div>
</div>
</div>