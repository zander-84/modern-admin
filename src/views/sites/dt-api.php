<?php

$this->title = 'Modern';
$baseUrl = \zander84\modernadmin\widgets\ModernRegisterAsset::widget([
    'assets' => [
            \zander84\modernadmin\assets\DtApiAsset::class,
    ]
]);
?>

<div class="content-header row">
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
<h3 class="content-header-title mb-0 d-inline-block">API DataTable</h3>
<div class="row breadcrumbs-top d-inline-block">
<div class="breadcrumb-wrapper col-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a>
</li>
<li class="breadcrumb-item"><a href="dt-api.html#">DataTables</a>
</li>
<li class="breadcrumb-item active">API DataTable
                </li>
</ol>
</div>
</div>
</div>
<div class="content-header-right col-md-6 col-12">
<div class="dropdown float-md-right">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle round btn-glow px-2" data-toggle="dropdown" id="dropdownBreadcrumbButton" type="button">Actions</button>
<div aria-labelledby="dropdownBreadcrumbButton" class="dropdown-menu"><a class="dropdown-item" href="dt-api.html#"><i class="la la-calendar-check-o"></i> Calender</a>
<a class="dropdown-item" href="dt-api.html#"><i class="la la-cart-plus"></i> Cart</a>
<a class="dropdown-item" href="dt-api.html#"><i class="la la-life-ring"></i> Support</a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="dt-api.html#"><i class="la la-cog"></i> Settings</a>
</div>
</div>
</div>
</div>
<div class="content-body">
<!-- Add rows table -->
<section id="add-row">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Add rows</h4>
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
<div class="card-body">
<p class="card-text">New rows can be added to a DataTable very easily using the (
                      row.add() ) API method. Simply call the API function with the
                      data that is to be used for the new row (be it an array or
                      object). Multiple rows can be added using the ( rows.add()
                      ) method (note the plural). Data can be likewise be updated
                      with the ( row().data() and row().remove() methods. )
                    </p>
<button class="btn btn-primary mb-2" id="addRow"><i class="ft-plus"></i>  Add new row</button>
<table class="table table-striped table-bordered add-rows">
<thead>
<tr>
<th>Column 1</th>
<th>Column 2</th>
<th>Column 3</th>
<th>Column 4</th>
<th>Column 5</th>
</tr>
</thead>
<tfoot>
<tr>
<th>Column 1</th>
<th>Column 2</th>
<th>Column 3</th>
<th>Column 4</th>
<th>Column 5</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
<!--/ Add rows table -->
<!-- Individual column searching (text inputs) table -->
<section id="text-inputs">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Individual column searching (text inputs)</h4>
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
<div class="card-body">
<p class="card-text">The searching functionality that is provided by DataTables is
                      very useful for quickly search through the information in the
                      table - however the search is global, and you may wish to present
                      controls to search on specific columns only. DataTables has
                      the ability to apply searching to a specific column through
                      the column().search() method (note that the name of the method
                      is search not filter since filter() is used to apply a filter
                      to a result set).
                    </p>
<table class="table table-striped table-bordered text-inputs-searching">
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
<!-- Individual column searching (text inputs) table -->
<!-- Individual column searching (select inputs) table -->
<section id="select-inputs">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Individual column searching (select inputs)</h4>
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
<div class="card-body">
<p class="card-text">This example is almost identical to text based individual column
                      example and provides the same functionality, but in this case
                      using select input controls. After the table is initialised,
                      the API is used to build the select inputs through the use
                      of the column().data() method to get the data for each column
                      in turn. The helper methods unique() and sort() are also used
                      to reduce the data for set input to unique and ordered elements.
                      Finally the change event from the select input is used to trigger
                      a column search using the column().search() method.
                    </p>
<div class="table-responsive">
<table class="table table-striped table-bordered datatable-select-inputs">
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
</div>
</section>
<!--/ Individual column searching (select inputs) table -->
<!-- Child rows (show extra / detailed information) table -->
<section id="child-row">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Child rows (show extra / detailed information)</h4>
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
<div class="card-body">
<p class="card-text">The DataTables API has a number of methods available for attaching
                      child rows to a parent row in the DataTable. This can be used
                      to show additional information about a row, useful for cases
                      where you wish to convey more information about a row than
                      there is space for in the host table.
                    </p>
<table class="table table-striped table-bordered show-child-rows">
<thead>
<tr>
<th></th>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Salary</th>
</tr>
</thead>
<tfoot>
<tr>
<th></th>
<th>Name</th>
<th>Position</th>
<th>Office</th>
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
<!--/ Child rows (show extra / detailed information) table -->
<!-- Row selection (multiple rows) table -->
<section id="row-selection">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Row selection (multiple rows)</h4>
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
<div class="card-body">
<p class="card-text">It can be quite useful at times to provide the user with the
                      option to select rows in a DataTable. This can be done by simply
                      using a click event to add / remove a class on the table rows.
                      The rows().data() method can then be used to get the data for
                      the selected rows. In this case it is simply counting the number
                      of selected rows, but much more complex interactions can easily
                      be developed.
                    </p>
<button class="btn btn-primary mb-2" id="row-count"><i class="ft-filter"></i>  Row count</button>
<br/>
<br/>
<table class="table table-striped table-bordered selection-multiple-rows">
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
<!--/ Row selection (multiple rows) table -->
<!-- Row selection and deletion (single row) -->
<section id="selection-n-deletion">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Row selection and deletion (single row)</h4>
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
<div class="card-body">
<p class="card-text">This example shows a modification of the multiple row selection
                      example, where just a single can now be selected. This is done
                      simply by checking to see if the row already has a selected
                      class or not, and if so removing it, if not then the class
                      is removed from any other row in the table which does have
                      it and applied to the row to be selected.
                    </p>
<button class="btn btn-primary mr-1" id="delete-row"><i class="ft-trash"></i>  Delete selected row</button>
<br/>
<br/>
<table class="table table-striped table-bordered selection-deletion-row">
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
<!--/ Row selection and deletion (single row) -->
<!-- Form inputs table -->
<section id="form-inputs">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Form inputs</h4>
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
<div class="card-body">
<p class="card-text">In order to perform paging, ordering, searching etc, DataTables
                      can remove rows and cells from the document (i.e. those rows
                      / cells which are not needed are not inserted into the document).
                      This increases performance and compatibility, however, it means
                      that submitting forms which span multiple pages requires a
                      little bit of additional work to get the information that is
                      not in the document any longer.
                    </p>
<button class="btn btn-primary mr-1 inputs-submin"><i class="ft-file"></i>  Submit form</button>
<br/>
<br/>
<table class="table table-striped table-bordered submit-form-inputs">
<thead>
<tr>
<th>Name</th>
<th>Age</th>
<th>Position</th>
<th>Office</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger Nixon</td>
<td>
<input id="row-1-age" name="row-1-age" type="text" value="61"/>
</td>
<td>
<input id="row-1-position" name="row-1-position" type="text" value="System Architect"/>
</td>
<td>
<select id="row-1-office" name="row-1-office" size="1">
<option selected="selected" value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td>
<input id="row-2-age" name="row-2-age" type="text" value="63"/>
</td>
<td>
<input id="row-2-position" name="row-2-position" type="text" value="Accountant"/>
</td>
<td>
<select id="row-2-office" name="row-2-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option selected="selected" value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Ashton Cox</td>
<td>
<input id="row-3-age" name="row-3-age" type="text" value="66"/>
</td>
<td>
<input id="row-3-position" name="row-3-position" type="text" value="Junior Technical Author"/>
</td>
<td>
<select id="row-3-office" name="row-3-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option selected="selected" value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Cedric Kelly</td>
<td>
<input id="row-4-age" name="row-4-age" type="text" value="22"/>
</td>
<td>
<input id="row-4-position" name="row-4-position" type="text" value="Senior Javascript Developer"/>
</td>
<td>
<select id="row-4-office" name="row-4-office" size="1">
<option selected="selected" value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Airi Satou</td>
<td>
<input id="row-5-age" name="row-5-age" type="text" value="33"/>
</td>
<td>
<input id="row-5-position" name="row-5-position" type="text" value="Accountant"/>
</td>
<td>
<select id="row-5-office" name="row-5-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option selected="selected" value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Brielle Williamson</td>
<td>
<input id="row-6-age" name="row-6-age" type="text" value="61"/>
</td>
<td>
<input id="row-6-position" name="row-6-position" type="text" value="Integration Specialist"/>
</td>
<td>
<select id="row-6-office" name="row-6-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option selected="selected" value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Herrod Chandler</td>
<td>
<input id="row-7-age" name="row-7-age" type="text" value="59"/>
</td>
<td>
<input id="row-7-position" name="row-7-position" type="text" value="Sales Assistant"/>
</td>
<td>
<select id="row-7-office" name="row-7-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option selected="selected" value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Rhona Davidson</td>
<td>
<input id="row-8-age" name="row-8-age" type="text" value="55"/>
</td>
<td>
<input id="row-8-position" name="row-8-position" type="text" value="Integration Specialist"/>
</td>
<td>
<select id="row-8-office" name="row-8-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option selected="selected" value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Colleen Hurst</td>
<td>
<input id="row-9-age" name="row-9-age" type="text" value="39"/>
</td>
<td>
<input id="row-9-position" name="row-9-position" type="text" value="Javascript Developer"/>
</td>
<td>
<select id="row-9-office" name="row-9-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option selected="selected" value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Sonya Frost</td>
<td>
<input id="row-10-age" name="row-10-age" type="text" value="23"/>
</td>
<td>
<input id="row-10-position" name="row-10-position" type="text" value="Software Engineer"/>
</td>
<td>
<select id="row-10-office" name="row-10-office" size="1">
<option selected="selected" value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Jena Gaines</td>
<td>
<input id="row-11-age" name="row-11-age" type="text" value="30"/>
</td>
<td>
<input id="row-11-position" name="row-11-position" type="text" value="Office Manager"/>
</td>
<td>
<select id="row-11-office" name="row-11-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option selected="selected" value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Quinn Flynn</td>
<td>
<input id="row-12-age" name="row-12-age" type="text" value="22"/>
</td>
<td>
<input id="row-12-position" name="row-12-position" type="text" value="Support Lead"/>
</td>
<td>
<select id="row-12-office" name="row-12-office" size="1">
<option selected="selected" value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Charde Marshall</td>
<td>
<input id="row-13-age" name="row-13-age" type="text" value="36"/>
</td>
<td>
<input id="row-13-position" name="row-13-position" type="text" value="Regional Director"/>
</td>
<td>
<select id="row-13-office" name="row-13-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option selected="selected" value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Haley Kennedy</td>
<td>
<input id="row-14-age" name="row-14-age" type="text" value="43"/>
</td>
<td>
<input id="row-14-position" name="row-14-position" type="text" value="Senior Marketing Designer"/>
</td>
<td>
<select id="row-14-office" name="row-14-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option selected="selected" value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Tatyana Fitzpatrick</td>
<td>
<input id="row-15-age" name="row-15-age" type="text" value="19"/>
</td>
<td>
<input id="row-15-position" name="row-15-position" type="text" value="Regional Director"/>
</td>
<td>
<select id="row-15-office" name="row-15-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option selected="selected" value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Michael Silva</td>
<td>
<input id="row-16-age" name="row-16-age" type="text" value="66"/>
</td>
<td>
<input id="row-16-position" name="row-16-position" type="text" value="Marketing Designer"/>
</td>
<td>
<select id="row-16-office" name="row-16-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option selected="selected" value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Paul Byrd</td>
<td>
<input id="row-17-age" name="row-17-age" type="text" value="64"/>
</td>
<td>
<input id="row-17-position" name="row-17-position" type="text" value="Chief Financial Officer (CFO)"/>
</td>
<td>
<select id="row-17-office" name="row-17-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option selected="selected" value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Gloria Little</td>
<td>
<input id="row-18-age" name="row-18-age" type="text" value="59"/>
</td>
<td>
<input id="row-18-position" name="row-18-position" type="text" value="Systems Administrator"/>
</td>
<td>
<select id="row-18-office" name="row-18-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option selected="selected" value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Bradley Greer</td>
<td>
<input id="row-19-age" name="row-19-age" type="text" value="41"/>
</td>
<td>
<input id="row-19-position" name="row-19-position" type="text" value="Software Engineer"/>
</td>
<td>
<select id="row-19-office" name="row-19-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option selected="selected" value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Dai Rios</td>
<td>
<input id="row-20-age" name="row-20-age" type="text" value="35"/>
</td>
<td>
<input id="row-20-position" name="row-20-position" type="text" value="Personnel Lead"/>
</td>
<td>
<select id="row-20-office" name="row-20-office" size="1">
<option selected="selected" value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Jenette Caldwell</td>
<td>
<input id="row-21-age" name="row-21-age" type="text" value="30"/>
</td>
<td>
<input id="row-21-position" name="row-21-position" type="text" value="Development Lead"/>
</td>
<td>
<select id="row-21-office" name="row-21-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option selected="selected" value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Yuri Berry</td>
<td>
<input id="row-22-age" name="row-22-age" type="text" value="40"/>
</td>
<td>
<input id="row-22-position" name="row-22-position" type="text" value="Chief Marketing Officer (CMO)"/>
</td>
<td>
<select id="row-22-office" name="row-22-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option selected="selected" value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Caesar Vance</td>
<td>
<input id="row-23-age" name="row-23-age" type="text" value="21"/>
</td>
<td>
<input id="row-23-position" name="row-23-position" type="text" value="Pre-Sales Support"/>
</td>
<td>
<select id="row-23-office" name="row-23-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option selected="selected" value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Doris Wilder</td>
<td>
<input id="row-24-age" name="row-24-age" type="text" value="23"/>
</td>
<td>
<input id="row-24-position" name="row-24-position" type="text" value="Sales Assistant"/>
</td>
<td>
<select id="row-24-office" name="row-24-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Angelica Ramos</td>
<td>
<input id="row-25-age" name="row-25-age" type="text" value="47"/>
</td>
<td>
<input id="row-25-position" name="row-25-position" type="text" value="Chief Executive Officer (CEO)"/>
</td>
<td>
<select id="row-25-office" name="row-25-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option selected="selected" value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Gavin Joyce</td>
<td>
<input id="row-26-age" name="row-26-age" type="text" value="42"/>
</td>
<td>
<input id="row-26-position" name="row-26-position" type="text" value="Developer"/>
</td>
<td>
<select id="row-26-office" name="row-26-office" size="1">
<option selected="selected" value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Jennifer Chang</td>
<td>
<input id="row-27-age" name="row-27-age" type="text" value="28"/>
</td>
<td>
<input id="row-27-position" name="row-27-position" type="text" value="Regional Director"/>
</td>
<td>
<select id="row-27-office" name="row-27-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Brenden Wagner</td>
<td>
<input id="row-28-age" name="row-28-age" type="text" value="28"/>
</td>
<td>
<input id="row-28-position" name="row-28-position" type="text" value="Software Engineer"/>
</td>
<td>
<select id="row-28-office" name="row-28-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option selected="selected" value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Fiona Green</td>
<td>
<input id="row-29-age" name="row-29-age" type="text" value="48"/>
</td>
<td>
<input id="row-29-position" name="row-29-position" type="text" value="Chief Operating Officer (COO)"/>
</td>
<td>
<select id="row-29-office" name="row-29-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option selected="selected" value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Shou Itou</td>
<td>
<input id="row-30-age" name="row-30-age" type="text" value="20"/>
</td>
<td>
<input id="row-30-position" name="row-30-position" type="text" value="Regional Marketing"/>
</td>
<td>
<select id="row-30-office" name="row-30-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option selected="selected" value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Michelle House</td>
<td>
<input id="row-31-age" name="row-31-age" type="text" value="37"/>
</td>
<td>
<input id="row-31-position" name="row-31-position" type="text" value="Integration Specialist"/>
</td>
<td>
<select id="row-31-office" name="row-31-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Suki Burks</td>
<td>
<input id="row-32-age" name="row-32-age" type="text" value="53"/>
</td>
<td>
<input id="row-32-position" name="row-32-position" type="text" value="Developer"/>
</td>
<td>
<select id="row-32-office" name="row-32-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option selected="selected" value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Prescott Bartlett</td>
<td>
<input id="row-33-age" name="row-33-age" type="text" value="27"/>
</td>
<td>
<input id="row-33-position" name="row-33-position" type="text" value="Technical Author"/>
</td>
<td>
<select id="row-33-office" name="row-33-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option selected="selected" value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Gavin Cortez</td>
<td>
<input id="row-34-age" name="row-34-age" type="text" value="22"/>
</td>
<td>
<input id="row-34-position" name="row-34-position" type="text" value="Team Leader"/>
</td>
<td>
<select id="row-34-office" name="row-34-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option selected="selected" value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Martena Mccray</td>
<td>
<input id="row-35-age" name="row-35-age" type="text" value="46"/>
</td>
<td>
<input id="row-35-position" name="row-35-position" type="text" value="Post-Sales support"/>
</td>
<td>
<select id="row-35-office" name="row-35-office" size="1">
<option selected="selected" value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Unity Butler</td>
<td>
<input id="row-36-age" name="row-36-age" type="text" value="47"/>
</td>
<td>
<input id="row-36-position" name="row-36-position" type="text" value="Marketing Designer"/>
</td>
<td>
<select id="row-36-office" name="row-36-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option selected="selected" value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Howard Hatfield</td>
<td>
<input id="row-37-age" name="row-37-age" type="text" value="51"/>
</td>
<td>
<input id="row-37-position" name="row-37-position" type="text" value="Office Manager"/>
</td>
<td>
<select id="row-37-office" name="row-37-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option selected="selected" value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Hope Fuentes</td>
<td>
<input id="row-38-age" name="row-38-age" type="text" value="41"/>
</td>
<td>
<input id="row-38-position" name="row-38-position" type="text" value="Secretary"/>
</td>
<td>
<select id="row-38-office" name="row-38-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option selected="selected" value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Vivian Harrell</td>
<td>
<input id="row-39-age" name="row-39-age" type="text" value="62"/>
</td>
<td>
<input id="row-39-position" name="row-39-position" type="text" value="Financial Controller"/>
</td>
<td>
<select id="row-39-office" name="row-39-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option selected="selected" value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Timothy Mooney</td>
<td>
<input id="row-40-age" name="row-40-age" type="text" value="37"/>
</td>
<td>
<input id="row-40-position" name="row-40-position" type="text" value="Office Manager"/>
</td>
<td>
<select id="row-40-office" name="row-40-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option selected="selected" value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Jackson Bradshaw</td>
<td>
<input id="row-41-age" name="row-41-age" type="text" value="65"/>
</td>
<td>
<input id="row-41-position" name="row-41-position" type="text" value="Director"/>
</td>
<td>
<select id="row-41-office" name="row-41-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option selected="selected" value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Olivia Liang</td>
<td>
<input id="row-42-age" name="row-42-age" type="text" value="64"/>
</td>
<td>
<input id="row-42-position" name="row-42-position" type="text" value="Support Engineer"/>
</td>
<td>
<select id="row-42-office" name="row-42-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Bruno Nash</td>
<td>
<input id="row-43-age" name="row-43-age" type="text" value="38"/>
</td>
<td>
<input id="row-43-position" name="row-43-position" type="text" value="Software Engineer"/>
</td>
<td>
<select id="row-43-office" name="row-43-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option selected="selected" value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Sakura Yamamoto</td>
<td>
<input id="row-44-age" name="row-44-age" type="text" value="37"/>
</td>
<td>
<input id="row-44-position" name="row-44-position" type="text" value="Support Engineer"/>
</td>
<td>
<select id="row-44-office" name="row-44-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option selected="selected" value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Thor Walton</td>
<td>
<input id="row-45-age" name="row-45-age" type="text" value="61"/>
</td>
<td>
<input id="row-45-position" name="row-45-position" type="text" value="Developer"/>
</td>
<td>
<select id="row-45-office" name="row-45-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option selected="selected" value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Finn Camacho</td>
<td>
<input id="row-46-age" name="row-46-age" type="text" value="47"/>
</td>
<td>
<input id="row-46-position" name="row-46-position" type="text" value="Support Engineer"/>
</td>
<td>
<select id="row-46-office" name="row-46-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option selected="selected" value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Serge Baldwin</td>
<td>
<input id="row-47-age" name="row-47-age" type="text" value="64"/>
</td>
<td>
<input id="row-47-position" name="row-47-position" type="text" value="Data Coordinator"/>
</td>
<td>
<select id="row-47-office" name="row-47-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Zenaida Frank</td>
<td>
<input id="row-48-age" name="row-48-age" type="text" value="63"/>
</td>
<td>
<input id="row-48-position" name="row-48-position" type="text" value="Software Engineer"/>
</td>
<td>
<select id="row-48-office" name="row-48-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option selected="selected" value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Zorita Serrano</td>
<td>
<input id="row-49-age" name="row-49-age" type="text" value="56"/>
</td>
<td>
<input id="row-49-position" name="row-49-position" type="text" value="Software Engineer"/>
</td>
<td>
<select id="row-49-office" name="row-49-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option selected="selected" value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Jennifer Acosta</td>
<td>
<input id="row-50-age" name="row-50-age" type="text" value="43"/>
</td>
<td>
<input id="row-50-position" name="row-50-position" type="text" value="Junior Javascript Developer"/>
</td>
<td>
<select id="row-50-office" name="row-50-office" size="1">
<option selected="selected" value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Cara Stevens</td>
<td>
<input id="row-51-age" name="row-51-age" type="text" value="46"/>
</td>
<td>
<input id="row-51-position" name="row-51-position" type="text" value="Sales Assistant"/>
</td>
<td>
<select id="row-51-office" name="row-51-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option selected="selected" value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Hermione Butler</td>
<td>
<input id="row-52-age" name="row-52-age" type="text" value="47"/>
</td>
<td>
<input id="row-52-position" name="row-52-position" type="text" value="Regional Director"/>
</td>
<td>
<select id="row-52-office" name="row-52-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option selected="selected" value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Lael Greer</td>
<td>
<input id="row-53-age" name="row-53-age" type="text" value="21"/>
</td>
<td>
<input id="row-53-position" name="row-53-position" type="text" value="Systems Administrator"/>
</td>
<td>
<select id="row-53-office" name="row-53-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option selected="selected" value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Jonas Alexander</td>
<td>
<input id="row-54-age" name="row-54-age" type="text" value="30"/>
</td>
<td>
<input id="row-54-position" name="row-54-position" type="text" value="Developer"/>
</td>
<td>
<select id="row-54-office" name="row-54-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option selected="selected" value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Shad Decker</td>
<td>
<input id="row-55-age" name="row-55-age" type="text" value="51"/>
</td>
<td>
<input id="row-55-position" name="row-55-position" type="text" value="Regional Director"/>
</td>
<td>
<select id="row-55-office" name="row-55-office" size="1">
<option selected="selected" value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Michael Bruce</td>
<td>
<input id="row-56-age" name="row-56-age" type="text" value="29"/>
</td>
<td>
<input id="row-56-position" name="row-56-position" type="text" value="Javascript Developer"/>
</td>
<td>
<select id="row-56-office" name="row-56-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
<tr>
<td>Donna Snider</td>
<td>
<input id="row-57-age" name="row-57-age" type="text" value="27"/>
</td>
<td>
<input id="row-57-position" name="row-57-position" type="text" value="Customer Support"/>
</td>
<td>
<select id="row-57-office" name="row-57-office" size="1">
<option value="Edinburgh">
                                Edinburgh
                              </option>
<option value="London">
                                London
                              </option>
<option selected="selected" value="New York">
                                New York
                              </option>
<option value="San Francisco">
                                San Francisco
                              </option>
<option value="Tokyo">
                                Tokyo
                              </option>
</select>
</td>
</tr>
</tbody>
<tfoot>
<tr>
<th>Name</th>
<th>Age</th>
<th>Position</th>
<th>Office</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
<!--/ Form inputs table -->
<!-- Show & hide columns dynamically table -->
<section id="show-hide-columns">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Show / hide columns dynamically</h4>
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
<div class="card-body">
<p class="card-text">This example shows how you can make use of the column().visible()
                      API method to dynamically show and hide columns in a table.
                      Also included here is scrolling, just to show it enabled with
                      this API method, although that is not required for the API
                      function to work.
                    </p>
<div>
                      Toggle column: <a class="toggle-vis" data-column="0">Name</a>                      - <a class="toggle-vis" data-column="1">Position</a> - <a class="toggle-vis" data-column="2">Office</a> - <a class="toggle-vis" data-column="3">Age</a>                      - <a class="toggle-vis" data-column="4">Start date</a> -
                      <a class="toggle-vis" data-column="5">Salary</a>
</div>
<table class="table table-striped table-bordered hide-columns-dynamically">
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
<!--/ Show & hide columns dynamically table -->
<!-- Search API (regular expressions) table -->
<section id="search-api">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Search API (regular expressions)</h4>
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
<div class="card-body">
<p class="card-text">Searching a table is one of the most common user interactions
                      with a DataTables table, and DataTables provides a number of
                      methods for you to control this interaction. There are APIs
                      for the global search (search()) and for each individual column
                      (column().search()).
                      <br/> Note also that you must call the draw() method after performing
                      the search, in order for the results to be displayed.
                    </p>
<table class="table table-striped table-bordered search-api" style="margin: 0 auto 2em auto;">
<thead>
<tr>
<th>Target</th>
<th>Search text</th>
<th>Treat as regex</th>
<th>Use smart search</th>
</tr>
</thead>
<tbody>
<tr id="filter_global">
<td>Global search</td>
<td class="text-center">
<input class="global_filter_search" id="global_filter_search" type="text"/>
</td>
<td class="text-center">
<input class="global_filter_search" id="global_regex" type="checkbox"/>
</td>
<td class="text-center">
<input checked="checked" class="global_filter_search" id="global_smart" type="checkbox"/>
</td>
</tr>
<tr data-column="0" id="filter_col1">
<td>Column - Name</td>
<td class="text-center">
<input class="column_filter_search" id="col0_filter" type="text"/>
</td>
<td class="text-center">
<input class="column_filter_search" id="col0_regex" type="checkbox"/>
</td>
<td class="text-center">
<input checked="checked" class="column_filter_search" id="col0_smart" type="checkbox"/>
</td>
</tr>
<tr data-column="1" id="filter_col2">
<td>Column - Position</td>
<td class="text-center">
<input class="column_filter_search" id="col1_filter" type="text"/>
</td>
<td class="text-center">
<input class="column_filter_search" id="col1_regex" type="checkbox"/>
</td>
<td class="text-center">
<input checked="checked" class="column_filter_search" id="col1_smart" type="checkbox"/>
</td>
</tr>
<tr data-column="2" id="filter_col3">
<td>Column - Office</td>
<td class="text-center">
<input class="column_filter_search" id="col2_filter" type="text"/>
</td>
<td class="text-center">
<input class="column_filter_search" id="col2_regex" type="checkbox"/>
</td>
<td class="text-center">
<input checked="checked" class="column_filter_search" id="col2_smart" type="checkbox"/>
</td>
</tr>
<tr data-column="3" id="filter_col4">
<td>Column - Age</td>
<td class="text-center">
<input class="column_filter_search" id="col3_filter" type="text"/>
</td>
<td class="text-center">
<input class="column_filter_search" id="col3_regex" type="checkbox"/>
</td>
<td class="text-center">
<input checked="checked" class="column_filter_search" id="col3_smart" type="checkbox"/>
</td>
</tr>
<tr data-column="4" id="filter_col5">
<td>Column - Start date</td>
<td class="text-center">
<input class="column_filter_search" id="col4_filter" type="text"/>
</td>
<td class="text-center">
<input class="column_filter_search" id="col4_regex" type="checkbox"/>
</td>
<td class="text-center">
<input checked="checked" class="column_filter_search" id="col4_smart" type="checkbox"/>
</td>
</tr>
<tr data-column="5" id="filter_col6">
<td>Column - Salary</td>
<td class="text-center">
<input class="column_filter_search" id="col5_filter" type="text"/>
</td>
<td class="text-center">
<input class="column_filter_search" id="col5_regex" type="checkbox"/>
</td>
<td class="text-center">
<input checked="checked" class="column_filter_search" id="col5_smart" type="checkbox"/>
</td>
</tr>
</tbody>
</table>
<table class="display table table-striped table-bordered search-api">
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
<!--/ Search API (regular expressions) table -->
</div>
