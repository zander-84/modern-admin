<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\InvoiceTemplateAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Invoice Template</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="invoice-template.html#">Invoice</a>
</li>
<li class="breadcrumb-item active">Invoice Template
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="invoice-template.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="invoice-template.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="invoice-template.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="invoice-template.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<section class="card">
<div class="card-body" id="invoice-template">
<!-- Invoice Company Details -->
<div class="row" id="invoice-company-details">
<div class="col-md-6 col-sm-12 text-center text-md-left">
<div class="media">
<img alt="company logo" class="" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/logo/logo-80x80.png"/>
<div class="media-body">
<ul class="ml-2 px-0 list-unstyled">
<li class="text-bold-800">Modern Creative Studio</li>
<li>4025 Oak Avenue,</li>
<li>Melbourne,</li>
<li>Florida 32940,</li>
<li>USA</li>
</ul>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12 text-center text-md-right">
<h2>INVOICE</h2>
<p class="pb-3"># INV-001001</p>
<ul class="px-0 list-unstyled">
<li>Balance Due</li>
<li class="lead text-bold-800">$ 12,000.00</li>
</ul>
</div>
</div>
<!--/ Invoice Company Details -->
<!-- Invoice Customer Details -->
<div class="row pt-2" id="invoice-customer-details">
<div class="col-sm-12 text-center text-md-left">
<p class="text-muted">Bill To</p>
</div>
<div class="col-md-6 col-sm-12 text-center text-md-left">
<ul class="px-0 list-unstyled">
<li class="text-bold-800">Mr. Bret Lezama</li>
<li>4879 Westfall Avenue,</li>
<li>Albuquerque,</li>
<li>New Mexico-87102.</li>
</ul>
</div>
<div class="col-md-6 col-sm-12 text-center text-md-right">
<p>
<span class="text-muted">Invoice Date :</span> 06/05/2017</p>
<p>
<span class="text-muted">Terms :</span> Due on Receipt</p>
<p>
<span class="text-muted">Due Date :</span> 10/05/2017</p>
</div>
</div>
<!--/ Invoice Customer Details -->
<!-- Invoice Items Details -->
<div class="pt-2" id="invoice-items-details">
<div class="row">
<div class="table-responsive col-sm-12">
<table class="table">
<thead>
<tr>
<th>#</th>
<th>Item &amp; Description</th>
<th class="text-right">Rate</th>
<th class="text-right">Hours</th>
<th class="text-right">Amount</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
<td>
<p>Create PSD for mobile APP</p>
<p class="text-muted">Simply dummy text of the printing and typesetting industry.</p>
</td>
<td class="text-right">$ 20.00/hr</td>
<td class="text-right">120</td>
<td class="text-right">$ 2400.00</td>
</tr>
<tr>
<th scope="row">2</th>
<td>
<p>iOS Application Development</p>
<p class="text-muted">Pellentesque maximus feugiat lorem at cursus.</p>
</td>
<td class="text-right">$ 25.00/hr</td>
<td class="text-right">260</td>
<td class="text-right">$ 6500.00</td>
</tr>
<tr>
<th scope="row">3</th>
<td>
<p>WordPress Template Development</p>
<p class="text-muted">Vestibulum euismod est eu elit convallis.</p>
</td>
<td class="text-right">$ 20.00/hr</td>
<td class="text-right">300</td>
<td class="text-right">$ 6000.00</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="row">
<div class="col-md-7 col-sm-12 text-center text-md-left">
<p class="lead">Payment Methods:</p>
<div class="row">
<div class="col-md-8">
<table class="table table-borderless table-sm">
<tbody>
<tr>
<td>Bank name:</td>
<td class="text-right">ABC Bank, USA</td>
</tr>
<tr>
<td>Acc name:</td>
<td class="text-right">Amanda Orton</td>
</tr>
<tr>
<td>IBAN:</td>
<td class="text-right">FGS165461646546AA</td>
</tr>
<tr>
<td>SWIFT code:</td>
<td class="text-right">BTNPP34</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div class="col-md-5 col-sm-12">
<p class="lead">Total due</p>
<div class="table-responsive">
<table class="table">
<tbody>
<tr>
<td>Sub Total</td>
<td class="text-right">$ 14,900.00</td>
</tr>
<tr>
<td>TAX (12%)</td>
<td class="text-right">$ 1,788.00</td>
</tr>
<tr>
<td class="text-bold-800">Total</td>
<td class="text-bold-800 text-right"> $ 16,688.00</td>
</tr>
<tr>
<td>Payment Made</td>
<td class="pink text-right">(-) $ 4,688.00</td>
</tr>
<tr class="bg-grey bg-lighten-4">
<td class="text-bold-800">Balance Due</td>
<td class="text-bold-800 text-right">$ 12,000.00</td>
</tr>
</tbody>
</table>
</div>
<div class="text-center">
<p>Authorized person</p>
<img alt="signature" class="height-100" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/pages/signature-scan.png"/>
<h6>Amanda Orton</h6>
<p class="text-muted">Managing Director</p>
</div>
</div>
</div>
</div>
<!-- Invoice Footer -->
<div id="invoice-footer">
<div class="row">
<div class="col-md-7 col-sm-12">
<h6>Terms &amp; Condition</h6>
<p>You know, being a test pilot isn't always the healthiest business
                    in the world. We predict too much for the next year and yet far
                    too little for the next 10.</p>
</div>
<div class="col-md-5 col-sm-12 text-center">
<button class="btn btn-info btn-lg my-1" type="button"><i class="la la-paper-plane-o"></i> Send Invoice</button>
</div>
</div>
</div>
<!--/ Invoice Footer -->
</div>
</section>
</div>
</div>
</div>