<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\DtAdvancedInitializationAsset::class,
    ]
]);
?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">Advanced DataTable</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="dt-advanced-initialization.html#">DataTables</a>
</li>
<li class="breadcrumb-item active">Advanced DataTable
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="dt-advanced-initialization.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="dt-advanced-initialization.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="dt-advanced-initialization.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="dt-advanced-initialization.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- DOM - jQuery events table -->
<section id="dom">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">DOM / jQuery events</h4>
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
<div class="card-content collapse show">
<div class="card-body card-dashboard">
<p class="card-text">Events assigned to the table can be exceptionally useful for
                      user interaction, however you must be aware that DataTables
                      will add and remove rows from the DOM as they are needed (i.e.
                      when paging only the visible elements are actually available
                      in the DOM). As such, this can lead to the odd hiccup when
                      working with events.</p>
<table class="table table-striped table-bordered dom-jQuery-events">
<thead>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
<td>$320,800</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>$170,750</td>
</tr>
<tr>
<td>Ashton Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>$86,000</td>
</tr>
<tr>
<td>Cedric Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
<td>2012/03/29</td>
<td>$433,060</td>
</tr>
<tr>
<td>Airi Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>$162,700</td>
</tr>
<tr>
<td>Brielle Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>61</td>
<td>2012/12/02</td>
<td>$372,000</td>
</tr>
<tr>
<td>Herrod Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>$137,500</td>
</tr>
<tr>
<td>Rhona Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>55</td>
<td>2010/10/14</td>
<td>$327,900</td>
</tr>
<tr>
<td>Colleen Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>$205,500</td>
</tr>
<tr>
<td>Sonya Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>$103,600</td>
</tr>
<tr>
<td>Jena Gaines</td>
<td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
<td>$90,560</td>
</tr>
<tr>
<td>Quinn Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>$342,000</td>
</tr>
<tr>
<td>Charde Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
<td>36</td>
<td>2008/10/16</td>
<td>$470,600</td>
</tr>
<tr>
<td>Haley Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>$313,500</td>
</tr>
<tr>
<td>Tatyana Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>$385,750</td>
</tr>
<tr>
<td>Michael Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>$198,500</td>
</tr>
<tr>
<td>Paul Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>$725,000</td>
</tr>
<tr>
<td>Gloria Little</td>
<td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>$237,500</td>
</tr>
<tr>
<td>Bradley Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>$132,000</td>
</tr>
<tr>
<td>Dai Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>$217,500</td>
</tr>
<tr>
<td>Jenette Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>$345,000</td>
</tr>
<tr>
<td>Yuri Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
<td>$675,000</td>
</tr>
<tr>
<td>Caesar Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>$106,450</td>
</tr>
<tr>
<td>Doris Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>$85,600</td>
</tr>
<tr>
<td>Angelica Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>$1,200,000</td>
</tr>
<tr>
<td>Gavin Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>$92,575</td>
</tr>
<tr>
<td>Jennifer Chang</td>
<td>Regional Director</td>
<td>Singapore</td>
<td>28</td>
<td>2010/11/14</td>
<td>$357,650</td>
</tr>
<tr>
<td>Brenden Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>$206,850</td>
</tr>
<tr>
<td>Fiona Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>$850,000</td>
</tr>
<tr>
<td>Shou Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
<td>2011/08/14</td>
<td>$163,000</td>
</tr>
<tr>
<td>Michelle House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>$95,400</td>
</tr>
<tr>
<td>Suki Burks</td>
<td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>$114,500</td>
</tr>
<tr>
<td>Prescott Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>27</td>
<td>2011/05/07</td>
<td>$145,000</td>
</tr>
<tr>
<td>Gavin Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>$235,500</td>
</tr>
<tr>
<td>Martena Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>$324,050</td>
</tr>
<tr>
<td>Unity Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
<td>$85,675</td>
</tr>
<tr>
<td>Howard Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
<td>2008/12/16</td>
<td>$164,500</td>
</tr>
<tr>
<td>Hope Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>$109,850</td>
</tr>
<tr>
<td>Vivian Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>$452,500</td>
</tr>
<tr>
<td>Timothy Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
<td>2008/12/11</td>
<td>$136,200</td>
</tr>
<tr>
<td>Jackson Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>$645,750</td>
</tr>
<tr>
<td>Olivia Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>$234,500</td>
</tr>
<tr>
<td>Bruno Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>$163,500</td>
</tr>
<tr>
<td>Sakura Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>$139,575</td>
</tr>
<tr>
<td>Thor Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>$98,540</td>
</tr>
<tr>
<td>Finn Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>$87,500</td>
</tr>
<tr>
<td>Serge Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>$138,575</td>
</tr>
<tr>
<td>Zenaida Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>$125,250</td>
</tr>
<tr>
<td>Zorita Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>$115,000</td>
</tr>
<tr>
<td>Jennifer Acosta</td>
<td>Junior Javascript Developer</td>
<td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>$75,650</td>
</tr>
<tr>
<td>Cara Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>$145,600</td>
</tr>
<tr>
<td>Hermione Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>$356,250</td>
</tr>
<tr>
<td>Lael Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
<td>$103,500</td>
</tr>
<tr>
<td>Jonas Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>$86,500</td>
</tr>
<tr>
<td>Shad Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>$183,000</td>
</tr>
<tr>
<td>Michael Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>$183,000</td>
</tr>
<tr>
<td>Donna Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>$112,000</td>
</tr>
</tbody>
<tfoot>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- DOM - jQuery events table -->
<!-- Column rendering table -->
<section id="column">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Column rendering</h4>
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
<div class="card-content collapse show">
<div class="card-body card-dashboard">
<p class="card-text">Each column has an optional rendering control called columns.render
                      which can be used to process the content of each cell before
                      the data is used. columns.render has a wide array of options
                      available to it for rendering different types of data orthogonally
                      (ordering, searching, display etc), but it can be used very
                      simply to manipulate the content of a cell, as shown here.</p>
<table class="table table-striped table-bordered column-rendering">
<thead>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
<td>$320,800</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>$170,750</td>
</tr>
<tr>
<td>Ashton Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>$86,000</td>
</tr>
<tr>
<td>Cedric Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
<td>2012/03/29</td>
<td>$433,060</td>
</tr>
<tr>
<td>Airi Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>$162,700</td>
</tr>
<tr>
<td>Brielle Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>61</td>
<td>2012/12/02</td>
<td>$372,000</td>
</tr>
<tr>
<td>Herrod Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>$137,500</td>
</tr>
<tr>
<td>Rhona Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>55</td>
<td>2010/10/14</td>
<td>$327,900</td>
</tr>
<tr>
<td>Colleen Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>$205,500</td>
</tr>
<tr>
<td>Sonya Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>$103,600</td>
</tr>
<tr>
<td>Jena Gaines</td>
<td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
<td>$90,560</td>
</tr>
<tr>
<td>Quinn Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>$342,000</td>
</tr>
<tr>
<td>Charde Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
<td>36</td>
<td>2008/10/16</td>
<td>$470,600</td>
</tr>
<tr>
<td>Haley Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>$313,500</td>
</tr>
<tr>
<td>Tatyana Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>$385,750</td>
</tr>
<tr>
<td>Michael Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>$198,500</td>
</tr>
<tr>
<td>Paul Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>$725,000</td>
</tr>
<tr>
<td>Gloria Little</td>
<td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>$237,500</td>
</tr>
<tr>
<td>Bradley Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>$132,000</td>
</tr>
<tr>
<td>Dai Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>$217,500</td>
</tr>
<tr>
<td>Jenette Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>$345,000</td>
</tr>
<tr>
<td>Yuri Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
<td>$675,000</td>
</tr>
<tr>
<td>Caesar Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>$106,450</td>
</tr>
<tr>
<td>Doris Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>$85,600</td>
</tr>
<tr>
<td>Angelica Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>$1,200,000</td>
</tr>
<tr>
<td>Gavin Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>$92,575</td>
</tr>
<tr>
<td>Jennifer Chang</td>
<td>Regional Director</td>
<td>Singapore</td>
<td>28</td>
<td>2010/11/14</td>
<td>$357,650</td>
</tr>
<tr>
<td>Brenden Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>$206,850</td>
</tr>
<tr>
<td>Fiona Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>$850,000</td>
</tr>
<tr>
<td>Shou Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
<td>2011/08/14</td>
<td>$163,000</td>
</tr>
<tr>
<td>Michelle House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>$95,400</td>
</tr>
<tr>
<td>Suki Burks</td>
<td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>$114,500</td>
</tr>
<tr>
<td>Prescott Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>27</td>
<td>2011/05/07</td>
<td>$145,000</td>
</tr>
<tr>
<td>Gavin Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>$235,500</td>
</tr>
<tr>
<td>Martena Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>$324,050</td>
</tr>
<tr>
<td>Unity Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
<td>$85,675</td>
</tr>
<tr>
<td>Howard Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
<td>2008/12/16</td>
<td>$164,500</td>
</tr>
<tr>
<td>Hope Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>$109,850</td>
</tr>
<tr>
<td>Vivian Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>$452,500</td>
</tr>
<tr>
<td>Timothy Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
<td>2008/12/11</td>
<td>$136,200</td>
</tr>
<tr>
<td>Jackson Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>$645,750</td>
</tr>
<tr>
<td>Olivia Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>$234,500</td>
</tr>
<tr>
<td>Bruno Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>$163,500</td>
</tr>
<tr>
<td>Sakura Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>$139,575</td>
</tr>
<tr>
<td>Thor Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>$98,540</td>
</tr>
<tr>
<td>Finn Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>$87,500</td>
</tr>
<tr>
<td>Serge Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>$138,575</td>
</tr>
<tr>
<td>Zenaida Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>$125,250</td>
</tr>
<tr>
<td>Zorita Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>$115,000</td>
</tr>
<tr>
<td>Jennifer Acosta</td>
<td>Junior Javascript Developer</td>
<td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>$75,650</td>
</tr>
<tr>
<td>Cara Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>$145,600</td>
</tr>
<tr>
<td>Hermione Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>$356,250</td>
</tr>
<tr>
<td>Lael Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
<td>$103,500</td>
</tr>
<tr>
<td>Jonas Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>$86,500</td>
</tr>
<tr>
<td>Shad Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>$183,000</td>
</tr>
<tr>
<td>Michael Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>$183,000</td>
</tr>
<tr>
<td>Donna Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>$112,000</td>
</tr>
</tbody>
<tfoot>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Column rendering table -->
<!-- Multiple table control elements -->
<section id="multiple-table">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Multiple table control elements</h4>
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
<div class="card-content collapse show">
<div class="card-body card-dashboard">
<p class="card-text">As is described by the basic DOM positioning example you can
                      use the dom initialization parameter to move DataTables features
                      around the table to where you want them.</p>
<table class="table table-striped table-bordered multiple-control-elements">
<thead>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
<td>$320,800</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>$170,750</td>
</tr>
<tr>
<td>Ashton Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>$86,000</td>
</tr>
<tr>
<td>Cedric Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
<td>2012/03/29</td>
<td>$433,060</td>
</tr>
<tr>
<td>Airi Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>$162,700</td>
</tr>
<tr>
<td>Brielle Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>61</td>
<td>2012/12/02</td>
<td>$372,000</td>
</tr>
<tr>
<td>Herrod Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>$137,500</td>
</tr>
<tr>
<td>Rhona Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>55</td>
<td>2010/10/14</td>
<td>$327,900</td>
</tr>
<tr>
<td>Colleen Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>$205,500</td>
</tr>
<tr>
<td>Sonya Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>$103,600</td>
</tr>
<tr>
<td>Jena Gaines</td>
<td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
<td>$90,560</td>
</tr>
<tr>
<td>Quinn Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>$342,000</td>
</tr>
<tr>
<td>Charde Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
<td>36</td>
<td>2008/10/16</td>
<td>$470,600</td>
</tr>
<tr>
<td>Haley Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>$313,500</td>
</tr>
<tr>
<td>Tatyana Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>$385,750</td>
</tr>
<tr>
<td>Michael Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>$198,500</td>
</tr>
<tr>
<td>Paul Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>$725,000</td>
</tr>
<tr>
<td>Gloria Little</td>
<td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>$237,500</td>
</tr>
<tr>
<td>Bradley Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>$132,000</td>
</tr>
<tr>
<td>Dai Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>$217,500</td>
</tr>
<tr>
<td>Jenette Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>$345,000</td>
</tr>
<tr>
<td>Yuri Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
<td>$675,000</td>
</tr>
<tr>
<td>Caesar Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>$106,450</td>
</tr>
<tr>
<td>Doris Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>$85,600</td>
</tr>
<tr>
<td>Angelica Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>$1,200,000</td>
</tr>
<tr>
<td>Gavin Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>$92,575</td>
</tr>
<tr>
<td>Jennifer Chang</td>
<td>Regional Director</td>
<td>Singapore</td>
<td>28</td>
<td>2010/11/14</td>
<td>$357,650</td>
</tr>
<tr>
<td>Brenden Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>$206,850</td>
</tr>
<tr>
<td>Fiona Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>$850,000</td>
</tr>
<tr>
<td>Shou Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
<td>2011/08/14</td>
<td>$163,000</td>
</tr>
<tr>
<td>Michelle House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>$95,400</td>
</tr>
<tr>
<td>Suki Burks</td>
<td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>$114,500</td>
</tr>
<tr>
<td>Prescott Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>27</td>
<td>2011/05/07</td>
<td>$145,000</td>
</tr>
<tr>
<td>Gavin Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>$235,500</td>
</tr>
<tr>
<td>Martena Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>$324,050</td>
</tr>
<tr>
<td>Unity Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
<td>$85,675</td>
</tr>
<tr>
<td>Howard Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
<td>2008/12/16</td>
<td>$164,500</td>
</tr>
<tr>
<td>Hope Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>$109,850</td>
</tr>
<tr>
<td>Vivian Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>$452,500</td>
</tr>
<tr>
<td>Timothy Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
<td>2008/12/11</td>
<td>$136,200</td>
</tr>
<tr>
<td>Jackson Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>$645,750</td>
</tr>
<tr>
<td>Olivia Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>$234,500</td>
</tr>
<tr>
<td>Bruno Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>$163,500</td>
</tr>
<tr>
<td>Sakura Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>$139,575</td>
</tr>
<tr>
<td>Thor Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>$98,540</td>
</tr>
<tr>
<td>Finn Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>$87,500</td>
</tr>
<tr>
<td>Serge Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>$138,575</td>
</tr>
<tr>
<td>Zenaida Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>$125,250</td>
</tr>
<tr>
<td>Zorita Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>$115,000</td>
</tr>
<tr>
<td>Jennifer Acosta</td>
<td>Junior Javascript Developer</td>
<td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>$75,650</td>
</tr>
<tr>
<td>Cara Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>$145,600</td>
</tr>
<tr>
<td>Hermione Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>$356,250</td>
</tr>
<tr>
<td>Lael Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
<td>$103,500</td>
</tr>
<tr>
<td>Jonas Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>$86,500</td>
</tr>
<tr>
<td>Shad Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>$183,000</td>
</tr>
<tr>
<td>Michael Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>$183,000</td>
</tr>
<tr>
<td>Donna Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>$112,000</td>
</tr>
</tbody>
<tfoot>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Multiple table control elements -->
<!-- Complex headers with column visibility table -->
<section id="complex-header">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Complex headers with column visibility</h4>
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
<div class="card-content collapse show">
<div class="card-body card-dashboard">
<p class="card-text">Complex headers (using colspan / rowspan) can be used to group
                      columns of similar information in DataTables, creating a very
                      powerful visual effect.
                      <br/> In addition to the basic behaviour, DataTables can also take
                      colspan and rowspans into account when working with hidden
                      columns. The colspan and rowspan attributes for each cell are
                      automatically calculated and rendered on the page for you.
                      This allows the columns.visible option and column().visible()
                      method to take into account rowspan / colspan cells, drawing
                      the header correctly.</p>
<table class="table table-striped table-bordered column-visibility">
<thead>
<tr>
<th rowspan="2">Name</th>
<th colspan="2">HR Information</th>
<th colspan="3">Contact</th>
</tr>
<tr>
<th>Position</th>
<th>Salary</th>
<th>Office</th>
<th>Extn.</th>
<th>E-mail</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger Nixon</td>
<td>System Architect</td>
<td>$320,800</td>
<td>Edinburgh</td>
<td>5421</td>
<td>t.nixon@datatables.net</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td>Accountant</td>
<td>$170,750</td>
<td>Tokyo</td>
<td>8422</td>
<td>g.winters@datatables.net</td>
</tr>
<tr>
<td>Ashton Cox</td>
<td>Junior Technical Author</td>
<td>$86,000</td>
<td>San Francisco</td>
<td>1562</td>
<td>a.cox@datatables.net</td>
</tr>
<tr>
<td>Cedric Kelly</td>
<td>Senior Javascript Developer</td>
<td>$433,060</td>
<td>Edinburgh</td>
<td>6224</td>
<td>c.kelly@datatables.net</td>
</tr>
<tr>
<td>Airi Satou</td>
<td>Accountant</td>
<td>$162,700</td>
<td>Tokyo</td>
<td>5407</td>
<td>a.satou@datatables.net</td>
</tr>
<tr>
<td>Brielle Williamson</td>
<td>Integration Specialist</td>
<td>$372,000</td>
<td>New York</td>
<td>4804</td>
<td>b.williamson@datatables.net</td>
</tr>
<tr>
<td>Herrod Chandler</td>
<td>Sales Assistant</td>
<td>$137,500</td>
<td>San Francisco</td>
<td>9608</td>
<td>h.chandler@datatables.net</td>
</tr>
<tr>
<td>Rhona Davidson</td>
<td>Integration Specialist</td>
<td>$327,900</td>
<td>Tokyo</td>
<td>6200</td>
<td>r.davidson@datatables.net</td>
</tr>
<tr>
<td>Colleen Hurst</td>
<td>Javascript Developer</td>
<td>$205,500</td>
<td>San Francisco</td>
<td>2360</td>
<td>c.hurst@datatables.net</td>
</tr>
<tr>
<td>Sonya Frost</td>
<td>Software Engineer</td>
<td>$103,600</td>
<td>Edinburgh</td>
<td>1667</td>
<td>s.frost@datatables.net</td>
</tr>
<tr>
<td>Jena Gaines</td>
<td>Office Manager</td>
<td>$90,560</td>
<td>London</td>
<td>3814</td>
<td>j.gaines@datatables.net</td>
</tr>
<tr>
<td>Quinn Flynn</td>
<td>Support Lead</td>
<td>$342,000</td>
<td>Edinburgh</td>
<td>9497</td>
<td>q.flynn@datatables.net</td>
</tr>
<tr>
<td>Charde Marshall</td>
<td>Regional Director</td>
<td>$470,600</td>
<td>San Francisco</td>
<td>6741</td>
<td>c.marshall@datatables.net</td>
</tr>
<tr>
<td>Haley Kennedy</td>
<td>Senior Marketing Designer</td>
<td>$313,500</td>
<td>London</td>
<td>3597</td>
<td>h.kennedy@datatables.net</td>
</tr>
<tr>
<td>Tatyana Fitzpatrick</td>
<td>Regional Director</td>
<td>$385,750</td>
<td>London</td>
<td>1965</td>
<td>t.fitzpatrick@datatables.net</td>
</tr>
<tr>
<td>Michael Silva</td>
<td>Marketing Designer</td>
<td>$198,500</td>
<td>London</td>
<td>1581</td>
<td>m.silva@datatables.net</td>
</tr>
<tr>
<td>Paul Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>$725,000</td>
<td>New York</td>
<td>3059</td>
<td>p.byrd@datatables.net</td>
</tr>
<tr>
<td>Gloria Little</td>
<td>Systems Administrator</td>
<td>$237,500</td>
<td>New York</td>
<td>1721</td>
<td>g.little@datatables.net</td>
</tr>
<tr>
<td>Bradley Greer</td>
<td>Software Engineer</td>
<td>$132,000</td>
<td>London</td>
<td>2558</td>
<td>b.greer@datatables.net</td>
</tr>
<tr>
<td>Dai Rios</td>
<td>Personnel Lead</td>
<td>$217,500</td>
<td>Edinburgh</td>
<td>2290</td>
<td>d.rios@datatables.net</td>
</tr>
<tr>
<td>Jenette Caldwell</td>
<td>Development Lead</td>
<td>$345,000</td>
<td>New York</td>
<td>1937</td>
<td>j.caldwell@datatables.net</td>
</tr>
<tr>
<td>Yuri Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>$675,000</td>
<td>New York</td>
<td>6154</td>
<td>y.berry@datatables.net</td>
</tr>
<tr>
<td>Caesar Vance</td>
<td>Pre-Sales Support</td>
<td>$106,450</td>
<td>New York</td>
<td>8330</td>
<td>c.vance@datatables.net</td>
</tr>
<tr>
<td>Doris Wilder</td>
<td>Sales Assistant</td>
<td>$85,600</td>
<td>Sidney</td>
<td>3023</td>
<td>d.wilder@datatables.net</td>
</tr>
<tr>
<td>Angelica Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>$1,200,000</td>
<td>London</td>
<td>5797</td>
<td>a.ramos@datatables.net</td>
</tr>
<tr>
<td>Gavin Joyce</td>
<td>Developer</td>
<td>$92,575</td>
<td>Edinburgh</td>
<td>8822</td>
<td>g.joyce@datatables.net</td>
</tr>
<tr>
<td>Jennifer Chang</td>
<td>Regional Director</td>
<td>$357,650</td>
<td>Singapore</td>
<td>9239</td>
<td>j.chang@datatables.net</td>
</tr>
<tr>
<td>Brenden Wagner</td>
<td>Software Engineer</td>
<td>$206,850</td>
<td>San Francisco</td>
<td>1314</td>
<td>b.wagner@datatables.net</td>
</tr>
<tr>
<td>Fiona Green</td>
<td>Chief Operating Officer (COO)</td>
<td>$850,000</td>
<td>San Francisco</td>
<td>2947</td>
<td>f.green@datatables.net</td>
</tr>
<tr>
<td>Shou Itou</td>
<td>Regional Marketing</td>
<td>$163,000</td>
<td>Tokyo</td>
<td>8899</td>
<td>s.itou@datatables.net</td>
</tr>
<tr>
<td>Michelle House</td>
<td>Integration Specialist</td>
<td>$95,400</td>
<td>Sidney</td>
<td>2769</td>
<td>m.house@datatables.net</td>
</tr>
<tr>
<td>Suki Burks</td>
<td>Developer</td>
<td>$114,500</td>
<td>London</td>
<td>6832</td>
<td>s.burks@datatables.net</td>
</tr>
<tr>
<td>Prescott Bartlett</td>
<td>Technical Author</td>
<td>$145,000</td>
<td>London</td>
<td>3606</td>
<td>p.bartlett@datatables.net</td>
</tr>
<tr>
<td>Gavin Cortez</td>
<td>Team Leader</td>
<td>$235,500</td>
<td>San Francisco</td>
<td>2860</td>
<td>g.cortez@datatables.net</td>
</tr>
<tr>
<td>Martena Mccray</td>
<td>Post-Sales support</td>
<td>$324,050</td>
<td>Edinburgh</td>
<td>8240</td>
<td>m.mccray@datatables.net</td>
</tr>
<tr>
<td>Unity Butler</td>
<td>Marketing Designer</td>
<td>$85,675</td>
<td>San Francisco</td>
<td>5384</td>
<td>u.butler@datatables.net</td>
</tr>
<tr>
<td>Howard Hatfield</td>
<td>Office Manager</td>
<td>$164,500</td>
<td>San Francisco</td>
<td>7031</td>
<td>h.hatfield@datatables.net</td>
</tr>
<tr>
<td>Hope Fuentes</td>
<td>Secretary</td>
<td>$109,850</td>
<td>San Francisco</td>
<td>6318</td>
<td>h.fuentes@datatables.net</td>
</tr>
<tr>
<td>Vivian Harrell</td>
<td>Financial Controller</td>
<td>$452,500</td>
<td>San Francisco</td>
<td>9422</td>
<td>v.harrell@datatables.net</td>
</tr>
<tr>
<td>Timothy Mooney</td>
<td>Office Manager</td>
<td>$136,200</td>
<td>London</td>
<td>7580</td>
<td>t.mooney@datatables.net</td>
</tr>
<tr>
<td>Jackson Bradshaw</td>
<td>Director</td>
<td>$645,750</td>
<td>New York</td>
<td>1042</td>
<td>j.bradshaw@datatables.net</td>
</tr>
<tr>
<td>Olivia Liang</td>
<td>Support Engineer</td>
<td>$234,500</td>
<td>Singapore</td>
<td>2120</td>
<td>o.liang@datatables.net</td>
</tr>
<tr>
<td>Bruno Nash</td>
<td>Software Engineer</td>
<td>$163,500</td>
<td>London</td>
<td>6222</td>
<td>b.nash@datatables.net</td>
</tr>
<tr>
<td>Sakura Yamamoto</td>
<td>Support Engineer</td>
<td>$139,575</td>
<td>Tokyo</td>
<td>9383</td>
<td>s.yamamoto@datatables.net</td>
</tr>
<tr>
<td>Thor Walton</td>
<td>Developer</td>
<td>$98,540</td>
<td>New York</td>
<td>8327</td>
<td>t.walton@datatables.net</td>
</tr>
<tr>
<td>Finn Camacho</td>
<td>Support Engineer</td>
<td>$87,500</td>
<td>San Francisco</td>
<td>2927</td>
<td>f.camacho@datatables.net</td>
</tr>
<tr>
<td>Serge Baldwin</td>
<td>Data Coordinator</td>
<td>$138,575</td>
<td>Singapore</td>
<td>8352</td>
<td>s.baldwin@datatables.net</td>
</tr>
<tr>
<td>Zenaida Frank</td>
<td>Software Engineer</td>
<td>$125,250</td>
<td>New York</td>
<td>7439</td>
<td>z.frank@datatables.net</td>
</tr>
<tr>
<td>Zorita Serrano</td>
<td>Software Engineer</td>
<td>$115,000</td>
<td>San Francisco</td>
<td>4389</td>
<td>z.serrano@datatables.net</td>
</tr>
<tr>
<td>Jennifer Acosta</td>
<td>Junior Javascript Developer</td>
<td>$75,650</td>
<td>Edinburgh</td>
<td>3431</td>
<td>j.acosta@datatables.net</td>
</tr>
<tr>
<td>Cara Stevens</td>
<td>Sales Assistant</td>
<td>$145,600</td>
<td>New York</td>
<td>3990</td>
<td>c.stevens@datatables.net</td>
</tr>
<tr>
<td>Hermione Butler</td>
<td>Regional Director</td>
<td>$356,250</td>
<td>London</td>
<td>1016</td>
<td>h.butler@datatables.net</td>
</tr>
<tr>
<td>Lael Greer</td>
<td>Systems Administrator</td>
<td>$103,500</td>
<td>London</td>
<td>6733</td>
<td>l.greer@datatables.net</td>
</tr>
<tr>
<td>Jonas Alexander</td>
<td>Developer</td>
<td>$86,500</td>
<td>San Francisco</td>
<td>8196</td>
<td>j.alexander@datatables.net</td>
</tr>
<tr>
<td>Shad Decker</td>
<td>Regional Director</td>
<td>$183,000</td>
<td>Edinburgh</td>
<td>6373</td>
<td>s.decker@datatables.net</td>
</tr>
<tr>
<td>Michael Bruce</td>
<td>Javascript Developer</td>
<td>$183,000</td>
<td>Singapore</td>
<td>5384</td>
<td>m.bruce@datatables.net</td>
</tr>
<tr>
<td>Donna Snider</td>
<td>Customer Support</td>
<td>$112,000</td>
<td>New York</td>
<td>4226</td>
<td>d.snider@datatables.net</td>
</tr>
</tbody>
<tfoot>
<tr>
<th>Name</th>
<th>Position</th>
<th>Salary</th>
<th>Office</th>
<th>Extn.</th>
<th>E-mail</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Complex headers with column visibility table -->
<!-- Language file table -->
<section id="language">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Language file</h4>
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
<div class="card-content collapse show">
<div class="card-body card-dashboard">
<p class="card-text">As well as being able to pass language information to DataTables
                      through the language initialization option, you can also store
                      the language information in a file, which DataTables can load
                      by Ajax using the language.url option.</p>
<table class="table table-striped table-bordered language-file">
<thead>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
<td>$320,800</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>$170,750</td>
</tr>
<tr>
<td>Ashton Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>$86,000</td>
</tr>
<tr>
<td>Cedric Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
<td>2012/03/29</td>
<td>$433,060</td>
</tr>
<tr>
<td>Airi Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>$162,700</td>
</tr>
<tr>
<td>Brielle Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>61</td>
<td>2012/12/02</td>
<td>$372,000</td>
</tr>
<tr>
<td>Herrod Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>$137,500</td>
</tr>
<tr>
<td>Rhona Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>55</td>
<td>2010/10/14</td>
<td>$327,900</td>
</tr>
<tr>
<td>Colleen Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>$205,500</td>
</tr>
<tr>
<td>Sonya Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>$103,600</td>
</tr>
<tr>
<td>Jena Gaines</td>
<td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
<td>$90,560</td>
</tr>
<tr>
<td>Quinn Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>$342,000</td>
</tr>
<tr>
<td>Charde Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
<td>36</td>
<td>2008/10/16</td>
<td>$470,600</td>
</tr>
<tr>
<td>Haley Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>$313,500</td>
</tr>
<tr>
<td>Tatyana Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>$385,750</td>
</tr>
<tr>
<td>Michael Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>$198,500</td>
</tr>
<tr>
<td>Paul Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>$725,000</td>
</tr>
<tr>
<td>Gloria Little</td>
<td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>$237,500</td>
</tr>
<tr>
<td>Bradley Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>$132,000</td>
</tr>
<tr>
<td>Dai Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>$217,500</td>
</tr>
<tr>
<td>Jenette Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>$345,000</td>
</tr>
<tr>
<td>Yuri Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
<td>$675,000</td>
</tr>
<tr>
<td>Caesar Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>$106,450</td>
</tr>
<tr>
<td>Doris Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>$85,600</td>
</tr>
<tr>
<td>Angelica Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>$1,200,000</td>
</tr>
<tr>
<td>Gavin Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>$92,575</td>
</tr>
<tr>
<td>Jennifer Chang</td>
<td>Regional Director</td>
<td>Singapore</td>
<td>28</td>
<td>2010/11/14</td>
<td>$357,650</td>
</tr>
<tr>
<td>Brenden Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>$206,850</td>
</tr>
<tr>
<td>Fiona Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>$850,000</td>
</tr>
<tr>
<td>Shou Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
<td>2011/08/14</td>
<td>$163,000</td>
</tr>
<tr>
<td>Michelle House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>$95,400</td>
</tr>
<tr>
<td>Suki Burks</td>
<td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>$114,500</td>
</tr>
<tr>
<td>Prescott Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>27</td>
<td>2011/05/07</td>
<td>$145,000</td>
</tr>
<tr>
<td>Gavin Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>$235,500</td>
</tr>
<tr>
<td>Martena Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>$324,050</td>
</tr>
<tr>
<td>Unity Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
<td>$85,675</td>
</tr>
<tr>
<td>Howard Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
<td>2008/12/16</td>
<td>$164,500</td>
</tr>
<tr>
<td>Hope Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>$109,850</td>
</tr>
<tr>
<td>Vivian Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>$452,500</td>
</tr>
<tr>
<td>Timothy Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
<td>2008/12/11</td>
<td>$136,200</td>
</tr>
<tr>
<td>Jackson Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>$645,750</td>
</tr>
<tr>
<td>Olivia Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>$234,500</td>
</tr>
<tr>
<td>Bruno Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>$163,500</td>
</tr>
<tr>
<td>Sakura Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>$139,575</td>
</tr>
<tr>
<td>Thor Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>$98,540</td>
</tr>
<tr>
<td>Finn Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>$87,500</td>
</tr>
<tr>
<td>Serge Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>$138,575</td>
</tr>
<tr>
<td>Zenaida Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>$125,250</td>
</tr>
<tr>
<td>Zorita Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>$115,000</td>
</tr>
<tr>
<td>Jennifer Acosta</td>
<td>Junior Javascript Developer</td>
<td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>$75,650</td>
</tr>
<tr>
<td>Cara Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>$145,600</td>
</tr>
<tr>
<td>Hermione Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>$356,250</td>
</tr>
<tr>
<td>Lael Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
<td>$103,500</td>
</tr>
<tr>
<td>Jonas Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>$86,500</td>
</tr>
<tr>
<td>Shad Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>$183,000</td>
</tr>
<tr>
<td>Michael Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>$183,000</td>
</tr>
<tr>
<td>Donna Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>$112,000</td>
</tr>
</tbody>
<tfoot>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Language file table -->
<!-- Setting defaults table -->
<section id="setting">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Setting defaults</h4>
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
<div class="card-content collapse show">
<div class="card-body card-dashboard">
<p class="card-text">When working with DataTables over multiple pages it is often
                      useful to set the initialization defaults to common values
                      (for example you might want to set dom to a common value so
                      all tables get the same layout). This can be done using the
                      $.fn.dataTable.defaults object. This object will take all of
                      the same parameters as the DataTables initialization object,
                      but in this case you are setting the default for all future
                      initializations of DataTables.</p>
<table class="table table-striped table-bordered setting-defaults">
<thead>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
<td>$320,800</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>$170,750</td>
</tr>
<tr>
<td>Ashton Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>$86,000</td>
</tr>
<tr>
<td>Cedric Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
<td>2012/03/29</td>
<td>$433,060</td>
</tr>
<tr>
<td>Airi Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>$162,700</td>
</tr>
<tr>
<td>Brielle Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>61</td>
<td>2012/12/02</td>
<td>$372,000</td>
</tr>
<tr>
<td>Herrod Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>$137,500</td>
</tr>
<tr>
<td>Rhona Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>55</td>
<td>2010/10/14</td>
<td>$327,900</td>
</tr>
<tr>
<td>Colleen Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>$205,500</td>
</tr>
<tr>
<td>Sonya Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>$103,600</td>
</tr>
<tr>
<td>Jena Gaines</td>
<td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
<td>$90,560</td>
</tr>
<tr>
<td>Quinn Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>$342,000</td>
</tr>
<tr>
<td>Charde Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
<td>36</td>
<td>2008/10/16</td>
<td>$470,600</td>
</tr>
<tr>
<td>Haley Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>$313,500</td>
</tr>
<tr>
<td>Tatyana Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>$385,750</td>
</tr>
<tr>
<td>Michael Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>$198,500</td>
</tr>
<tr>
<td>Paul Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>$725,000</td>
</tr>
<tr>
<td>Gloria Little</td>
<td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>$237,500</td>
</tr>
<tr>
<td>Bradley Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>$132,000</td>
</tr>
<tr>
<td>Dai Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>$217,500</td>
</tr>
<tr>
<td>Jenette Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>$345,000</td>
</tr>
<tr>
<td>Yuri Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
<td>$675,000</td>
</tr>
<tr>
<td>Caesar Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>$106,450</td>
</tr>
<tr>
<td>Doris Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>$85,600</td>
</tr>
<tr>
<td>Angelica Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>$1,200,000</td>
</tr>
<tr>
<td>Gavin Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>$92,575</td>
</tr>
<tr>
<td>Jennifer Chang</td>
<td>Regional Director</td>
<td>Singapore</td>
<td>28</td>
<td>2010/11/14</td>
<td>$357,650</td>
</tr>
<tr>
<td>Brenden Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>$206,850</td>
</tr>
<tr>
<td>Fiona Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>$850,000</td>
</tr>
<tr>
<td>Shou Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
<td>2011/08/14</td>
<td>$163,000</td>
</tr>
<tr>
<td>Michelle House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>$95,400</td>
</tr>
<tr>
<td>Suki Burks</td>
<td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>$114,500</td>
</tr>
<tr>
<td>Prescott Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>27</td>
<td>2011/05/07</td>
<td>$145,000</td>
</tr>
<tr>
<td>Gavin Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>$235,500</td>
</tr>
<tr>
<td>Martena Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>$324,050</td>
</tr>
<tr>
<td>Unity Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
<td>$85,675</td>
</tr>
<tr>
<td>Howard Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
<td>2008/12/16</td>
<td>$164,500</td>
</tr>
<tr>
<td>Hope Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>$109,850</td>
</tr>
<tr>
<td>Vivian Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>$452,500</td>
</tr>
<tr>
<td>Timothy Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
<td>2008/12/11</td>
<td>$136,200</td>
</tr>
<tr>
<td>Jackson Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>$645,750</td>
</tr>
<tr>
<td>Olivia Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>$234,500</td>
</tr>
<tr>
<td>Bruno Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>$163,500</td>
</tr>
<tr>
<td>Sakura Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>$139,575</td>
</tr>
<tr>
<td>Thor Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>$98,540</td>
</tr>
<tr>
<td>Finn Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>$87,500</td>
</tr>
<tr>
<td>Serge Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>$138,575</td>
</tr>
<tr>
<td>Zenaida Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>$125,250</td>
</tr>
<tr>
<td>Zorita Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>$115,000</td>
</tr>
<tr>
<td>Jennifer Acosta</td>
<td>Junior Javascript Developer</td>
<td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>$75,650</td>
</tr>
<tr>
<td>Cara Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>$145,600</td>
</tr>
<tr>
<td>Hermione Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>$356,250</td>
</tr>
<tr>
<td>Lael Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
<td>$103,500</td>
</tr>
<tr>
<td>Jonas Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>$86,500</td>
</tr>
<tr>
<td>Shad Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>$183,000</td>
</tr>
<tr>
<td>Michael Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>$183,000</td>
</tr>
<tr>
<td>Donna Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>$112,000</td>
</tr>
</tbody>
<tfoot>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Setting defaults table -->
<!-- Row grouping -->
<section id="row-grouping">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Row grouping</h4>
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
<div class="card-content collapse show">
<div class="card-body card-dashboard">
<p class="card-text">Although DataTables doesn't have row grouping built-in (picking
                      one of the many methods available would overly limit the DataTables
                      core), it is most certainly possible to give the look and feel
                      of row grouping.</p>
<table class="table table-striped table-bordered row-grouping">
<thead>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
<td>$320,800</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>$170,750</td>
</tr>
<tr>
<td>Ashton Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>$86,000</td>
</tr>
<tr>
<td>Cedric Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
<td>2012/03/29</td>
<td>$433,060</td>
</tr>
<tr>
<td>Airi Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>$162,700</td>
</tr>
<tr>
<td>Brielle Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>61</td>
<td>2012/12/02</td>
<td>$372,000</td>
</tr>
<tr>
<td>Herrod Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>$137,500</td>
</tr>
<tr>
<td>Rhona Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>55</td>
<td>2010/10/14</td>
<td>$327,900</td>
</tr>
<tr>
<td>Colleen Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>$205,500</td>
</tr>
<tr>
<td>Sonya Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>$103,600</td>
</tr>
<tr>
<td>Jena Gaines</td>
<td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
<td>$90,560</td>
</tr>
<tr>
<td>Quinn Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>$342,000</td>
</tr>
<tr>
<td>Charde Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
<td>36</td>
<td>2008/10/16</td>
<td>$470,600</td>
</tr>
<tr>
<td>Haley Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>$313,500</td>
</tr>
<tr>
<td>Tatyana Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>$385,750</td>
</tr>
<tr>
<td>Michael Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>$198,500</td>
</tr>
<tr>
<td>Paul Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>$725,000</td>
</tr>
<tr>
<td>Gloria Little</td>
<td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>$237,500</td>
</tr>
<tr>
<td>Bradley Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>$132,000</td>
</tr>
<tr>
<td>Dai Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>$217,500</td>
</tr>
<tr>
<td>Jenette Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>$345,000</td>
</tr>
<tr>
<td>Yuri Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
<td>$675,000</td>
</tr>
<tr>
<td>Caesar Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>$106,450</td>
</tr>
<tr>
<td>Doris Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>$85,600</td>
</tr>
<tr>
<td>Angelica Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>$1,200,000</td>
</tr>
<tr>
<td>Gavin Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>$92,575</td>
</tr>
<tr>
<td>Jennifer Chang</td>
<td>Regional Director</td>
<td>Singapore</td>
<td>28</td>
<td>2010/11/14</td>
<td>$357,650</td>
</tr>
<tr>
<td>Brenden Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>$206,850</td>
</tr>
<tr>
<td>Fiona Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>$850,000</td>
</tr>
<tr>
<td>Shou Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
<td>2011/08/14</td>
<td>$163,000</td>
</tr>
<tr>
<td>Michelle House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>$95,400</td>
</tr>
<tr>
<td>Suki Burks</td>
<td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>$114,500</td>
</tr>
<tr>
<td>Prescott Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>27</td>
<td>2011/05/07</td>
<td>$145,000</td>
</tr>
<tr>
<td>Gavin Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>$235,500</td>
</tr>
<tr>
<td>Martena Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>$324,050</td>
</tr>
<tr>
<td>Unity Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
<td>$85,675</td>
</tr>
<tr>
<td>Howard Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
<td>2008/12/16</td>
<td>$164,500</td>
</tr>
<tr>
<td>Hope Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>$109,850</td>
</tr>
<tr>
<td>Vivian Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>$452,500</td>
</tr>
<tr>
<td>Timothy Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
<td>2008/12/11</td>
<td>$136,200</td>
</tr>
<tr>
<td>Jackson Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>$645,750</td>
</tr>
<tr>
<td>Olivia Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>$234,500</td>
</tr>
<tr>
<td>Bruno Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>$163,500</td>
</tr>
<tr>
<td>Sakura Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>$139,575</td>
</tr>
<tr>
<td>Thor Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>$98,540</td>
</tr>
<tr>
<td>Finn Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>$87,500</td>
</tr>
<tr>
<td>Serge Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>$138,575</td>
</tr>
<tr>
<td>Zenaida Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>$125,250</td>
</tr>
<tr>
<td>Zorita Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>$115,000</td>
</tr>
<tr>
<td>Jennifer Acosta</td>
<td>Junior Javascript Developer</td>
<td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>$75,650</td>
</tr>
<tr>
<td>Cara Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>$145,600</td>
</tr>
<tr>
<td>Hermione Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>$356,250</td>
</tr>
<tr>
<td>Lael Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
<td>$103,500</td>
</tr>
<tr>
<td>Jonas Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>$86,500</td>
</tr>
<tr>
<td>Shad Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>$183,000</td>
</tr>
<tr>
<td>Michael Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>$183,000</td>
</tr>
<tr>
<td>Donna Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>$112,000</td>
</tr>
</tbody>
<tfoot>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Row grouping -->
<!-- Footer callback table -->
<section id="footer">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Footer callback</h4>
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
<div class="card-content collapse show">
<div class="card-body card-dashboard">
<p class="card-text">Through the use of the header and footer callback manipulation
                      functions provided by DataTables (headerCallback and footerCallback),
                      it is possible to perform some powerful and useful data manipulation
                      functions, such as summarising data in the table.</p>
<div class="table-responsive">
<table class="table table-striped table-bordered footer-callback">
<thead>
<tr>
<th>First name</th>
<th>Last name</th>
<th>Position</th>
<th>Office</th>
<th>Salary</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger</td>
<td>Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>$320,800</td>
</tr>
<tr>
<td>Garrett</td>
<td>Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>$170,750</td>
</tr>
<tr>
<td>Ashton</td>
<td>Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>$86,000</td>
</tr>
<tr>
<td>Cedric</td>
<td>Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>$433,060</td>
</tr>
<tr>
<td>Airi</td>
<td>Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>$162,700</td>
</tr>
<tr>
<td>Brielle</td>
<td>Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>$372,000</td>
</tr>
<tr>
<td>Herrod</td>
<td>Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>$137,500</td>
</tr>
<tr>
<td>Rhona</td>
<td>Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>$327,900</td>
</tr>
<tr>
<td>Colleen</td>
<td>Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>$205,500</td>
</tr>
<tr>
<td>Sonya</td>
<td>Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>$103,600</td>
</tr>
<tr>
<td>Jena</td>
<td>Gaines</td>
<td>Office Manager</td>
<td>London</td>
<td>$90,560</td>
</tr>
<tr>
<td>Quinn</td>
<td>Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>$342,000</td>
</tr>
<tr>
<td>Charde</td>
<td>Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
<td>$470,600</td>
</tr>
<tr>
<td>Haley</td>
<td>Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>$313,500</td>
</tr>
<tr>
<td>Tatyana</td>
<td>Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>$385,750</td>
</tr>
<tr>
<td>Michael</td>
<td>Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>$198,500</td>
</tr>
<tr>
<td>Paul</td>
<td>Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>$725,000</td>
</tr>
<tr>
<td>Gloria</td>
<td>Little</td>
<td>Systems Administrator</td>
<td>New York</td>
<td>$237,500</td>
</tr>
<tr>
<td>Bradley</td>
<td>Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>$132,000</td>
</tr>
<tr>
<td>Dai</td>
<td>Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>$217,500</td>
</tr>
<tr>
<td>Jenette</td>
<td>Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>$345,000</td>
</tr>
<tr>
<td>Yuri</td>
<td>Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>$675,000</td>
</tr>
<tr>
<td>Caesar</td>
<td>Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>$106,450</td>
</tr>
<tr>
<td>Doris</td>
<td>Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>$85,600</td>
</tr>
<tr>
<td>Angelica</td>
<td>Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>$1,200,000</td>
</tr>
<tr>
<td>Gavin</td>
<td>Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>$92,575</td>
</tr>
<tr>
<td>Jennifer</td>
<td>Chang</td>
<td>Regional Director</td>
<td>Singapore</td>
<td>$357,650</td>
</tr>
<tr>
<td>Brenden</td>
<td>Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>$206,850</td>
</tr>
<tr>
<td>Fiona</td>
<td>Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>$850,000</td>
</tr>
<tr>
<td>Shou</td>
<td>Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>$163,000</td>
</tr>
<tr>
<td>Michelle</td>
<td>House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>$95,400</td>
</tr>
<tr>
<td>Suki</td>
<td>Burks</td>
<td>Developer</td>
<td>London</td>
<td>$114,500</td>
</tr>
<tr>
<td>Prescott</td>
<td>Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>$145,000</td>
</tr>
<tr>
<td>Gavin</td>
<td>Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>$235,500</td>
</tr>
<tr>
<td>Martena</td>
<td>Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>$324,050</td>
</tr>
<tr>
<td>Unity</td>
<td>Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>$85,675</td>
</tr>
<tr>
<td>Howard</td>
<td>Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>$164,500</td>
</tr>
<tr>
<td>Hope</td>
<td>Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>$109,850</td>
</tr>
<tr>
<td>Vivian</td>
<td>Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>$452,500</td>
</tr>
<tr>
<td>Timothy</td>
<td>Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>$136,200</td>
</tr>
<tr>
<td>Jackson</td>
<td>Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>$645,750</td>
</tr>
<tr>
<td>Olivia</td>
<td>Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>$234,500</td>
</tr>
<tr>
<td>Bruno</td>
<td>Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>$163,500</td>
</tr>
<tr>
<td>Sakura</td>
<td>Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>$139,575</td>
</tr>
<tr>
<td>Thor</td>
<td>Walton</td>
<td>Developer</td>
<td>New York</td>
<td>$98,540</td>
</tr>
<tr>
<td>Finn</td>
<td>Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>$87,500</td>
</tr>
<tr>
<td>Serge</td>
<td>Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>$138,575</td>
</tr>
<tr>
<td>Zenaida</td>
<td>Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>$125,250</td>
</tr>
<tr>
<td>Zorita</td>
<td>Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>$115,000</td>
</tr>
<tr>
<td>Jennifer</td>
<td>Acosta</td>
<td>Junior Javascript Developer</td>
<td>Edinburgh</td>
<td>$75,650</td>
</tr>
<tr>
<td>Cara</td>
<td>Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>$145,600</td>
</tr>
<tr>
<td>Hermione</td>
<td>Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>$356,250</td>
</tr>
<tr>
<td>Lael</td>
<td>Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>$103,500</td>
</tr>
<tr>
<td>Jonas</td>
<td>Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>$86,500</td>
</tr>
<tr>
<td>Shad</td>
<td>Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>$183,000</td>
</tr>
<tr>
<td>Michael</td>
<td>Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>$183,000</td>
</tr>
<tr>
<td>Donna</td>
<td>Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>$112,000</td>
</tr>
</tbody>
<tfoot>
<tr>
<th colspan="4" style="text-align:right">Total:</th>
<th></th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Footer callback table -->
<!-- Custom toolbar elements table -->
<section id="custom-toolbar">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Custom toolbar elements</h4>
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
<div class="card-content collapse show">
<div class="card-body card-dashboard">
<p class="card-text">DataTables inserts DOM elements around the table to control DataTables
                      features, and you can make use of this mechanism as well to
                      insert your own custom elements. In this example a div with
                      a class of '-string toolbar' is created using dom, and jQuery
                      then used to insert HTML into that element to create the toolbar.
                      You could put whatever HTML you want into the toolbar!</p>
<table class="table table-striped table-bordered custom-toolbar-elements">
<thead>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
<td>$320,800</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>$170,750</td>
</tr>
<tr>
<td>Ashton Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>$86,000</td>
</tr>
<tr>
<td>Cedric Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
<td>2012/03/29</td>
<td>$433,060</td>
</tr>
<tr>
<td>Airi Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>$162,700</td>
</tr>
<tr>
<td>Brielle Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>61</td>
<td>2012/12/02</td>
<td>$372,000</td>
</tr>
<tr>
<td>Herrod Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>$137,500</td>
</tr>
<tr>
<td>Rhona Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>55</td>
<td>2010/10/14</td>
<td>$327,900</td>
</tr>
<tr>
<td>Colleen Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>$205,500</td>
</tr>
<tr>
<td>Sonya Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>$103,600</td>
</tr>
<tr>
<td>Jena Gaines</td>
<td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
<td>$90,560</td>
</tr>
<tr>
<td>Quinn Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>$342,000</td>
</tr>
<tr>
<td>Charde Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
<td>36</td>
<td>2008/10/16</td>
<td>$470,600</td>
</tr>
<tr>
<td>Haley Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>$313,500</td>
</tr>
<tr>
<td>Tatyana Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>$385,750</td>
</tr>
<tr>
<td>Michael Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>$198,500</td>
</tr>
<tr>
<td>Paul Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>$725,000</td>
</tr>
<tr>
<td>Gloria Little</td>
<td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>$237,500</td>
</tr>
<tr>
<td>Bradley Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>$132,000</td>
</tr>
<tr>
<td>Dai Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>$217,500</td>
</tr>
<tr>
<td>Jenette Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>$345,000</td>
</tr>
<tr>
<td>Yuri Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
<td>$675,000</td>
</tr>
<tr>
<td>Caesar Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>$106,450</td>
</tr>
<tr>
<td>Doris Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>$85,600</td>
</tr>
<tr>
<td>Angelica Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>$1,200,000</td>
</tr>
<tr>
<td>Gavin Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>$92,575</td>
</tr>
<tr>
<td>Jennifer Chang</td>
<td>Regional Director</td>
<td>Singapore</td>
<td>28</td>
<td>2010/11/14</td>
<td>$357,650</td>
</tr>
<tr>
<td>Brenden Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>$206,850</td>
</tr>
<tr>
<td>Fiona Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>$850,000</td>
</tr>
<tr>
<td>Shou Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
<td>2011/08/14</td>
<td>$163,000</td>
</tr>
<tr>
<td>Michelle House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>$95,400</td>
</tr>
<tr>
<td>Suki Burks</td>
<td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>$114,500</td>
</tr>
<tr>
<td>Prescott Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>27</td>
<td>2011/05/07</td>
<td>$145,000</td>
</tr>
<tr>
<td>Gavin Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>$235,500</td>
</tr>
<tr>
<td>Martena Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>$324,050</td>
</tr>
<tr>
<td>Unity Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
<td>$85,675</td>
</tr>
<tr>
<td>Howard Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
<td>2008/12/16</td>
<td>$164,500</td>
</tr>
<tr>
<td>Hope Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>$109,850</td>
</tr>
<tr>
<td>Vivian Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>$452,500</td>
</tr>
<tr>
<td>Timothy Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
<td>2008/12/11</td>
<td>$136,200</td>
</tr>
<tr>
<td>Jackson Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>$645,750</td>
</tr>
<tr>
<td>Olivia Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>$234,500</td>
</tr>
<tr>
<td>Bruno Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>$163,500</td>
</tr>
<tr>
<td>Sakura Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>$139,575</td>
</tr>
<tr>
<td>Thor Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>$98,540</td>
</tr>
<tr>
<td>Finn Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>$87,500</td>
</tr>
<tr>
<td>Serge Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>$138,575</td>
</tr>
<tr>
<td>Zenaida Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>$125,250</td>
</tr>
<tr>
<td>Zorita Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>$115,000</td>
</tr>
<tr>
<td>Jennifer Acosta</td>
<td>Junior Javascript Developer</td>
<td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>$75,650</td>
</tr>
<tr>
<td>Cara Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>$145,600</td>
</tr>
<tr>
<td>Hermione Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>$356,250</td>
</tr>
<tr>
<td>Lael Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
<td>$103,500</td>
</tr>
<tr>
<td>Jonas Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>$86,500</td>
</tr>
<tr>
<td>Shad Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>$183,000</td>
</tr>
<tr>
<td>Michael Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>$183,000</td>
</tr>
<tr>
<td>Donna Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>$112,000</td>
</tr>
</tbody>
<tfoot>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Custom toolbar elements table -->
<!-- Row created callback -->
<section id="row-callback">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Row created callback</h4>
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
<div class="card-content collapse show">
<div class="card-body card-dashboard">
<p class="card-text">The following example shows how a callback function can be used
                      to format a particular row at draw time. For each row that
                      is generated for display, the createdRow function is called
                      once and once only. It is passed the create row node which
                      can then be modified.</p>
<table class="table table-striped table-bordered created-callback">
<thead>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
<td>$320,800</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>$170,750</td>
</tr>
<tr>
<td>Ashton Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>$86,000</td>
</tr>
<tr>
<td>Cedric Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
<td>2012/03/29</td>
<td>$433,060</td>
</tr>
<tr>
<td>Airi Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>$162,700</td>
</tr>
<tr>
<td>Brielle Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>61</td>
<td>2012/12/02</td>
<td>$372,000</td>
</tr>
<tr>
<td>Herrod Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>$137,500</td>
</tr>
<tr>
<td>Rhona Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>55</td>
<td>2010/10/14</td>
<td>$327,900</td>
</tr>
<tr>
<td>Colleen Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>$205,500</td>
</tr>
<tr>
<td>Sonya Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>$103,600</td>
</tr>
<tr>
<td>Jena Gaines</td>
<td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
<td>$90,560</td>
</tr>
<tr>
<td>Quinn Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>$342,000</td>
</tr>
<tr>
<td>Charde Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
<td>36</td>
<td>2008/10/16</td>
<td>$470,600</td>
</tr>
<tr>
<td>Haley Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>$313,500</td>
</tr>
<tr>
<td>Tatyana Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>$385,750</td>
</tr>
<tr>
<td>Michael Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>$198,500</td>
</tr>
<tr>
<td>Paul Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>$725,000</td>
</tr>
<tr>
<td>Gloria Little</td>
<td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>$237,500</td>
</tr>
<tr>
<td>Bradley Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>$132,000</td>
</tr>
<tr>
<td>Dai Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>$217,500</td>
</tr>
<tr>
<td>Jenette Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>$345,000</td>
</tr>
<tr>
<td>Yuri Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
<td>$675,000</td>
</tr>
<tr>
<td>Caesar Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>$106,450</td>
</tr>
<tr>
<td>Doris Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>$85,600</td>
</tr>
<tr>
<td>Angelica Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>$1,200,000</td>
</tr>
<tr>
<td>Gavin Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>$92,575</td>
</tr>
<tr>
<td>Jennifer Chang</td>
<td>Regional Director</td>
<td>Singapore</td>
<td>28</td>
<td>2010/11/14</td>
<td>$357,650</td>
</tr>
<tr>
<td>Brenden Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>$206,850</td>
</tr>
<tr>
<td>Fiona Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>$850,000</td>
</tr>
<tr>
<td>Shou Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
<td>2011/08/14</td>
<td>$163,000</td>
</tr>
<tr>
<td>Michelle House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>$95,400</td>
</tr>
<tr>
<td>Suki Burks</td>
<td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>$114,500</td>
</tr>
<tr>
<td>Prescott Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>27</td>
<td>2011/05/07</td>
<td>$145,000</td>
</tr>
<tr>
<td>Gavin Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>$235,500</td>
</tr>
<tr>
<td>Martena Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>$324,050</td>
</tr>
<tr>
<td>Unity Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
<td>$85,675</td>
</tr>
<tr>
<td>Howard Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
<td>2008/12/16</td>
<td>$164,500</td>
</tr>
<tr>
<td>Hope Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>$109,850</td>
</tr>
<tr>
<td>Vivian Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>$452,500</td>
</tr>
<tr>
<td>Timothy Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
<td>2008/12/11</td>
<td>$136,200</td>
</tr>
<tr>
<td>Jackson Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>$645,750</td>
</tr>
<tr>
<td>Olivia Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>$234,500</td>
</tr>
<tr>
<td>Bruno Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>$163,500</td>
</tr>
<tr>
<td>Sakura Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>$139,575</td>
</tr>
<tr>
<td>Thor Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>$98,540</td>
</tr>
<tr>
<td>Finn Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>$87,500</td>
</tr>
<tr>
<td>Serge Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>$138,575</td>
</tr>
<tr>
<td>Zenaida Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>$125,250</td>
</tr>
<tr>
<td>Zorita Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>$115,000</td>
</tr>
<tr>
<td>Jennifer Acosta</td>
<td>Junior Javascript Developer</td>
<td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>$75,650</td>
</tr>
<tr>
<td>Cara Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>$145,600</td>
</tr>
<tr>
<td>Hermione Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>$356,250</td>
</tr>
<tr>
<td>Lael Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
<td>$103,500</td>
</tr>
<tr>
<td>Jonas Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>$86,500</td>
</tr>
<tr>
<td>Shad Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>$183,000</td>
</tr>
<tr>
<td>Michael Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>$183,000</td>
</tr>
<tr>
<td>Donna Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>$112,000</td>
</tr>
</tbody>
<tfoot>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Row created callback -->
<!-- File export table -->
<section id="file-export">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">File export</h4>
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
<div class="card-content collapse show">
<div class="card-body card-dashboard">
<p class="card-text">Exporting data from a table can often be a key part of a complex
                      application. The Buttons extension for DataTables provides
                      three plug-ins that provide overlapping functionality for data
                      export.
                    </p>
<table class="table table-striped table-bordered file-export">
<thead>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
<td>$320,800</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>$170,750</td>
</tr>
<tr>
<td>Ashton Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>$86,000</td>
</tr>
<tr>
<td>Cedric Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
<td>2012/03/29</td>
<td>$433,060</td>
</tr>
<tr>
<td>Airi Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>$162,700</td>
</tr>
<tr>
<td>Brielle Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>61</td>
<td>2012/12/02</td>
<td>$372,000</td>
</tr>
<tr>
<td>Herrod Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>$137,500</td>
</tr>
<tr>
<td>Rhona Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>55</td>
<td>2010/10/14</td>
<td>$327,900</td>
</tr>
<tr>
<td>Colleen Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>$205,500</td>
</tr>
<tr>
<td>Sonya Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>$103,600</td>
</tr>
<tr>
<td>Jena Gaines</td>
<td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
<td>$90,560</td>
</tr>
<tr>
<td>Quinn Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>$342,000</td>
</tr>
<tr>
<td>Charde Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
<td>36</td>
<td>2008/10/16</td>
<td>$470,600</td>
</tr>
<tr>
<td>Haley Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>$313,500</td>
</tr>
<tr>
<td>Tatyana Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>$385,750</td>
</tr>
<tr>
<td>Michael Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>$198,500</td>
</tr>
<tr>
<td>Paul Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>$725,000</td>
</tr>
<tr>
<td>Gloria Little</td>
<td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>$237,500</td>
</tr>
<tr>
<td>Bradley Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>$132,000</td>
</tr>
<tr>
<td>Dai Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>$217,500</td>
</tr>
<tr>
<td>Jenette Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>$345,000</td>
</tr>
<tr>
<td>Yuri Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
<td>$675,000</td>
</tr>
<tr>
<td>Caesar Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>$106,450</td>
</tr>
<tr>
<td>Doris Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>$85,600</td>
</tr>
<tr>
<td>Angelica Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>$1,200,000</td>
</tr>
<tr>
<td>Gavin Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>$92,575</td>
</tr>
<tr>
<td>Jennifer Chang</td>
<td>Regional Director</td>
<td>Singapore</td>
<td>28</td>
<td>2010/11/14</td>
<td>$357,650</td>
</tr>
<tr>
<td>Brenden Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>$206,850</td>
</tr>
<tr>
<td>Fiona Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>$850,000</td>
</tr>
<tr>
<td>Shou Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
<td>2011/08/14</td>
<td>$163,000</td>
</tr>
<tr>
<td>Michelle House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>$95,400</td>
</tr>
<tr>
<td>Suki Burks</td>
<td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>$114,500</td>
</tr>
<tr>
<td>Prescott Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>27</td>
<td>2011/05/07</td>
<td>$145,000</td>
</tr>
<tr>
<td>Gavin Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>$235,500</td>
</tr>
<tr>
<td>Martena Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>$324,050</td>
</tr>
<tr>
<td>Unity Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
<td>$85,675</td>
</tr>
<tr>
<td>Howard Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
<td>2008/12/16</td>
<td>$164,500</td>
</tr>
<tr>
<td>Hope Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>$109,850</td>
</tr>
<tr>
<td>Vivian Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>$452,500</td>
</tr>
<tr>
<td>Timothy Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
<td>2008/12/11</td>
<td>$136,200</td>
</tr>
<tr>
<td>Jackson Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>$645,750</td>
</tr>
<tr>
<td>Olivia Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>$234,500</td>
</tr>
<tr>
<td>Bruno Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>$163,500</td>
</tr>
<tr>
<td>Sakura Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>$139,575</td>
</tr>
<tr>
<td>Thor Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>$98,540</td>
</tr>
<tr>
<td>Finn Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>$87,500</td>
</tr>
<tr>
<td>Serge Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>$138,575</td>
</tr>
<tr>
<td>Zenaida Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>$125,250</td>
</tr>
<tr>
<td>Zorita Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>$115,000</td>
</tr>
<tr>
<td>Jennifer Acosta</td>
<td>Junior Javascript Developer</td>
<td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>$75,650</td>
</tr>
<tr>
<td>Cara Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>$145,600</td>
</tr>
<tr>
<td>Hermione Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>$356,250</td>
</tr>
<tr>
<td>Lael Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
<td>$103,500</td>
</tr>
<tr>
<td>Jonas Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>$86,500</td>
</tr>
<tr>
<td>Shad Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>$183,000</td>
</tr>
<tr>
<td>Michael Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>$183,000</td>
</tr>
<tr>
<td>Donna Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>$112,000</td>
</tr>
</tbody>
<tfoot>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- File export table -->
</div>
</div>
</div>