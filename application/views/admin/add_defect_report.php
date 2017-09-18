<div class="layout-content">
    <div class="layout-content-body">
        <div class="row gutter-xs">
            <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-actions">
                    <button type="button" class="card-action card-toggler" title="Collapse"></button>
                    <button type="button" class="card-action card-reload" title="Reload"></button>
                </div>
                <strong>Please Provide Report Details</strong>
            </div>

                <div class="card-body" data-toggle="match-height">
                    <?php if(isset($errors)){?>
                        <div class="alert alert-danger">
                            <?php print_r($errors);?>
                        </div>
                    <?php }?>
                    <?php if(isset($success)){?>
                        <div class="alert alert-success">
                            <?php print_r($success);?>
                        </div>
                    <?php }?>

                    <form class="form form-horizontal" style="margin-top: 30px" method="POST">
                        <div class="row" style="padding-bottom: 10px;">
                            <div class="col-md-2"><label>Style #</label></div>
                            <div class="col-md-4"><input type="text" id="form-control-1" class="form-control" name="style_no"> </div>
                            <div class="col-md-2"><label>Order Qty</label></div>
                            <div class="col-md-4"><input type="text" id="form-control-1" class="form-control" name="order_qty"> </div>
                        </div>
                        <div class="row" style="padding-bottom: 10px;">
                            <div class="col-md-2"><label>Job #</label></div>
                            <div class="col-md-4"><input type="text" id="form-control-1" class="form-control" name="job_no"> </div>
                            <div class="col-md-2"><label>Total Audits</label></div>
                            <div class="col-md-4"><input type="text" id="form-control-1" class="form-control " name="total_audits"> </div>
                        </div>
                        <div class="row" style="padding-bottom: 10px;">
                            <div class="col-md-2"><label>Finish Name</label></div>
                            <div class="col-md-4"><input type="text" id="form-control-1" class="form-control" name="finish_name"> </div>
                            <div class="col-md-2"><label>Check Qty</label></div>
                            <div class="col-md-4"><input type="text" id="form-control-1" class="form-control" name="check_qty" disabled> </div>
                        </div>
                        <div class="row" style="padding-bottom: 10px;">
                            <div class="col-md-2"><label>Fabric</label></div>
                            <div class="col-md-4"><input type="text" id="form-control-1" class="form-control" name="fabric"> </div>
                            <div class="col-md-2"><label>Report Date</label></div>
                            <div class="col-md-4"><input type="text" id="form-control-1" class="form-control" name="created_at" value="<?php echo date('Y-m-d',now())?>"> </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12"><strong>Select Departments</strong></div>
                            <hr>
                            <?php for($i=0;$i<count($categories);$i++){ ?>
                                <div class="col-md-3" style="padding-bottom: 10px;">
                                    <input type="checkbox" name="categories[]" value="<?php echo $categories[$i]['id']?>"/>
                                    <span><strong><?php echo $categories[$i]['name']?></strong></span>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="row">
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary"> Create Report </button>
                    </div>
                </div>
                    </form>

                <!--<table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th class="text-left">#</th>
                        <th class="text-left">Defects Name</th>
                        <th class="text-right">Major</th>
                        <th class="text-right">Minor</th>
                        <th class="text-center">Brand/Approval</th>
                        <th class="text-center">Remarks</th>
                        <th class="text-center">Area Of Defects</th>

                    </tr>
                    </thead>
                    <tbody>
                    <form action="" class="form form-horizontal">
                        <div class="form-group">

                            <tr>
                                <td class="text-left">1</td>
                                <td class="text-left">Fly Frey</td>
                                <td class="text-right"><input id="form-control-1" class="form-control" type="text"></td>
                                <td class="text-right"><input id="form-control-1" class="form-control" type="text"></td>
                                <td class="text-center"><input id="form-control-1" class="form-control" type="text"></td>
                                <td class="text-center"><input id="form-control-1" class="form-control" type="text"></td>
                                <td class="text-center"><input id="form-control-1" class="form-control" type="text"></td>
                            </tr>
                            <tr>
                                <td class="text-left">2</td>
                                <td class="text-left">Loops Frey</td>
                                <td class="text-right"><input id="form-control-1" class="form-control" type="text"></td>
                                <td class="text-right"><input id="form-control-1" class="form-control" type="text"></td>
                                <td class="text-center"><input id="form-control-1" class="form-control" type="text"></td>
                                <td class="text-center"><input id="form-control-1" class="form-control" type="text"></td>
                                <td class="text-center"><input id="form-control-1" class="form-control" type="text"></td>
                            </tr>
                            <tr>
                                <td class="text-left">3</td>
                                <td class="text-left">Pilling & PKT Linning</td>
                                <td class="text-right"><input id="form-control-1" class="form-control" type="text"></td>
                                <td class="text-right"><input id="form-control-1" class="form-control" type="text"></td>
                                <td class="text-center"><input id="form-control-1" class="form-control" type="text"></td>
                                <td class="text-center"><input id="form-control-1" class="form-control" type="text"></td>
                                <td class="text-center"><input id="form-control-1" class="form-control" type="text"></td>
                            </tr>
                            <tr>
                                <td class="text-left">4</td>
                                <td class="text-left">Pilling & Inside Garment</td>
                                <td class="text-right"><input id="form-control-1" class="form-control" type="text"></td>
                                <td class="text-right"><input id="form-control-1" class="form-control" type="text"></td>
                                <td class="text-center"><input id="form-control-1" class="form-control" type="text"></td>
                                <td class="text-center"><input id="form-control-1" class="form-control" type="text"></td>
                                <td class="text-center"><input id="form-control-1" class="form-control" type="text"></td>
                            </tr>
                            <tr>
                                <td class="text-left">5</td>
                                <td class="text-left">Product catalog</td>
                                <td class="text-right"><input id="form-control-1" class="form-control" type="text"></td>
                                <td class="text-right"><input id="form-control-1" class="form-control" type="text"></td>
                                <td class="text-center"><input id="form-control-1" class="form-control" type="text"></td>
                                <td class="text-center"><input id="form-control-1" class="form-control" type="text"></td>
                                <td class="text-center"><input id="form-control-1" class="form-control" type="text"></td>
                            </tr>
                        </div>
                    </form>

                    </tbody>

                </table>-->
                <!--Numeric Value Table Start-->
                <!--<div class="text-center">
                    <h4>Result in numeric</h4>
                </div>-->

                <!--Result in numeric values table-->
                <!--<table class="table table-hover table-bordered">
                    <thead>
                    <tr>

                        <th class="text-left">Defects Name</th>
                        <th class="text-right">Major</th>
                        <th class="text-right">Minor</th>
                        <th class="text-center">Brand/Approval</th>
                        <th class="text-center">Remarks</th>
                        <th class="text-center">Area Of Defects</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-left">Cropping Major/Minor</td>
                        <td class="text-right">186,21</td>
                        <td class="text-right">186,21</td>
                        <td class="text-right">186,21</td>
                        <td class="text-right">186,21</td>
                        <td class="text-right">186,21</td>
                    </tr>
                    </tbody>
                </table>-->
                <!--Numeric Values Table End-->

                <!--Result In % Table Start-->
                <!--<div class="text-center">
                    <h4>Result In Percentage</h4>
                </div>-->

                <!--Result in numeric values table-->
                <!--<table class="table table-hover table-bordered">
                    <thead>
                    <tr>

                        <th class="text-left">Defects Name</th>
                        <th class="text-right">Major</th>
                        <th class="text-right">Minor</th>
                        <th class="text-center">Brand/Approval</th>

                        <th class="text-center">Remarks</th>

                        <th class="text-center">Area Of Defects</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>

                        <td class="text-left">Cropping Major/Minor</td>
                        <td class="text-right">0.01%</td>
                        <td class="text-right">0,4%%</td>
                        <td class="text-right">1%</td>
                        <td class="text-right">0.5%</td>
                        <td class="text-right">0.7%</td>
                    </tr>
                    </tbody>
                </table>-->
                <!--Result in %  Table End-->

                <!--<div class="text-center" style="margin: 40px 0">
                    <h2>Previous Result</h2>
                </div>-->

                <!--Prevoius Result Table Starts-->
                <!--<table id="demo-datatables-scroller-2" class="table table-striped table-bordered table-nowrap dataTable" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Defects Name</th>
                        <th>Major</th>
                        <th>Minor</th>
                        <th>Brand/Approval</th>
                        <th>Remarks</th>
                        <th>Area Of Defects</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>2</td>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                        <td>$86,000</td>
                    </tr>
                    <tr>
                        <td>41</td>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>2012/03/29</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                    </tr>
                    <tr>
                        <td>55</td>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>2008/11/28</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>New York</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                    </tr>
                    <tr>
                        <td>46</td>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>San Francisco</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                    </tr>
                    <tr>
                        <td>50</td>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>Tokyo</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>2009/09/15</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                        <td>$90,560</td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>2008/10/16</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>London</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                    </tr>
                    <tr>
                        <td>54</td>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>London</td>
                        <td>2010/03/17</td>
                        <td>$385,750</td>
                    </tr>
                    <tr>
                        <td>37</td>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>2012/11/27</td>
                        <td>2012/11/27</td>
                        <td>$198,500</td>
                    </tr>
                    <tr>
                        <td>32</td>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>2010/06/09</td>
                        <td>$725,000</td>
                        <td>$725,000</td>
                    </tr>
                    <tr>
                        <td>35</td>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>2009/04/10</td>
                        <td>$237,500</td>
                    </tr>
                    <tr>
                        <td>48</td>
                        <td>Bradley Greer</td>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>2012/10/13</td>
                        <td>$132,000</td>
                    </tr>
                    <tr>
                        <td>45</td>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>2012/09/26</td>
                        <td>2012/09/26</td>
                        <td>$217,500</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Jenette Caldwell</td>
                        <td>Development Lead</td>
                        <td>New York</td>
                        <td>New York</td>
                        <td>2011/09/03</td>
                        <td>$345,000</td>
                    </tr>
                    <tr>
                        <td>57</td>
                        <td>Yuri Berry</td>
                        <td>Chief Marketing Officer (CMO)</td>
                        <td>New York</td>
                        <td>2009/06/25</td>
                        <td>2009/06/25</td>
                        <td>$675,000</td>
                    </tr>
                    <tr>
                        <td>29</td>
                        <td>Caesar Vance</td>
                        <td>Pre-Sales Support</td>
                        <td>New York</td>
                        <td>2011/12/12</td>
                        <td>$106,450</td>
                        <td>$106,450</td>
                    </tr>
                    <tr>
                        <td>56</td>
                        <td>Doris Wilder</td>
                        <td>Sales Assistant</td>
                        <td>Sidney</td>
                        <td>2010/09/20</td>
                        <td>2010/09/20</td>
                        <td>$85,600</td>
                    </tr>
                    <tr>
                        <td>36</td>
                        <td>Angelica Ramos</td>
                        <td>Chief Executive Officer (CEO)</td>
                        <td>London</td>
                        <td>2009/10/09</td>
                        <td>$1,200,000</td>
                        <td>$1,200,000</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Gavin Joyce</td>
                        <td>Developer</td>
                        <td>Edinburgh</td>
                        <td>Edinburgh</td>
                        <td>2010/12/22</td>
                        <td>$92,575</td>
                    </tr>
                    <tr>
                        <td>51</td>
                        <td>Jennifer Chang</td>
                        <td>Regional Director</td>
                        <td>Singapore</td>
                        <td>Singapore</td>
                        <td>2010/11/14</td>
                        <td>$357,650</td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>Brenden Wagner</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>2011/06/07</td>
                        <td>2011/06/07</td>
                        <td>$206,850</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Fiona Green</td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>San Francisco</td>
                        <td>2010/03/11</td>
                        <td>2010/03/11</td>
                        <td>$850,000</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Shou Itou</td>
                        <td>Regional Marketing</td>
                        <td>Tokyo</td>
                        <td>2011/08/14</td>
                        <td>2011/08/14</td>
                        <td>$163,000</td>
                    </tr>
                    <tr>
                        <td>39</td>
                        <td>Michelle House</td>
                        <td>Integration Specialist</td>
                        <td>Sidney</td>
                        <td>2011/06/02</td>
                        <td>$95,400</td>
                        <td>$95,400</td>
                    </tr>
                    <tr>
                        <td>40</td>
                        <td>Suki Burks</td>
                        <td>Developer</td>
                        <td>London</td>
                        <td>London</td>
                        <td>2009/10/22</td>
                        <td>$114,500</td>
                    </tr>
                    <tr>
                        <td>47</td>
                        <td>Prescott Bartlett</td>
                        <td>Technical Author</td>
                        <td>London</td>
                        <td>London</td>
                        <td>2011/05/07</td>
                        <td>$145,000</td>
                    </tr>
                    <tr>
                        <td>52</td>
                        <td>Gavin Cortez</td>
                        <td>Team Leader</td>
                        <td>Team Leader</td>
                        <td>San Francisco</td>
                        <td>2008/10/26</td>
                        <td>$235,500</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Martena Mccray</td>
                        <td>Post-Sales support</td>
                        <td>Edinburgh</td>
                        <td>2011/03/09</td>
                        <td>2011/03/09</td>
                        <td>$324,050</td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>Unity Butler</td>
                        <td>Marketing Designer</td>
                        <td>San Francisco</td>
                        <td>2009/12/09</td>
                        <td>$85,675</td>
                        <td>$85,675</td>
                    </tr>
                    <tr>
                        <td>38</td>
                        <td>Howard Hatfield</td>
                        <td>Office Manager</td>
                        <td>San Francisco</td>
                        <td>2008/12/16</td>
                        <td>2008/12/16</td>
                        <td>$164,500</td>
                    </tr>
                    <tr>
                        <td>53</td>
                        <td>Hope Fuentes</td>
                        <td>Secretary</td>
                        <td>Secretary</td>
                        <td>San Francisco</td>
                        <td>2010/02/12</td>
                        <td>$109,850</td>
                    </tr>
                    <tr>
                        <td>30</td>
                        <td>Vivian Harrell</td>
                        <td>Financial Controller</td>
                        <td>San Francisco</td>
                        <td>2009/02/14</td>
                        <td>2009/02/14</td>
                        <td>$452,500</td>
                    </tr>
                    <tr>
                        <td>28</td>
                        <td>Timothy Mooney</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>2008/12/11</td>
                        <td>$136,200</td>
                        <td>$136,200</td>
                    </tr>
                    <tr>
                        <td>34</td>
                        <td>Jackson Bradshaw</td>
                        <td>Director</td>
                        <td>New York</td>
                        <td>2008/09/26</td>
                        <td>2008/09/26</td>
                        <td>$645,750</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Olivia Liang</td>
                        <td>Support Engineer</td>
                        <td>Singapore</td>
                        <td>Singapore</td>
                        <td>2011/02/03</td>
                        <td>$234,500</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Bruno Nash</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>2011/05/03</td>
                        <td>$163,500</td>
                        <td>$163,500</td>
                    </tr>
                    <tr>
                        <td>31</td>
                        <td>Sakura Yamamoto</td>
                        <td>Support Engineer</td>
                        <td>Tokyo</td>
                        <td>Tokyo</td>
                        <td>2009/08/19</td>
                        <td>$139,575</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Thor Walton</td>
                        <td>Developer</td>
                        <td>New York</td>
                        <td>2013/08/11</td>
                        <td>2013/08/11</td>
                        <td>$98,540</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Finn Camacho</td>
                        <td>Support Engineer</td>
                        <td>San Francisco</td>
                        <td>2009/07/07</td>
                        <td>2009/07/07</td>
                        <td>$87,500</td>
                    </tr>
                    <tr>
                        <td>44</td>
                        <td>Serge Baldwin</td>
                        <td>Data Coordinator</td>
                        <td>Singapore</td>
                        <td>2012/04/09</td>
                        <td>2012/04/09</td>
                        <td>$138,575</td>
                    </tr>
                    <tr>
                        <td>42</td>
                        <td>Zenaida Frank</td>
                        <td>Software Engineer</td>
                        <td>Software Engineer</td>
                        <td>New York</td>
                        <td>2010/01/04</td>
                        <td>$125,250</td>
                    </tr>
                    <tr>
                        <td>27</td>
                        <td>Zorita Serrano</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>2012/06/01</td>
                        <td>2012/06/01</td>
                        <td>$115,000</td>
                    </tr>
                    <tr>
                        <td>49</td>
                        <td>Jennifer Acosta</td>
                        <td>Junior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>2013/02/01</td>
                        <td>2013/02/01</td>
                        <td>$75,650</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Cara Stevens</td>
                        <td>Sales Assistant</td>
                        <td>New York</td>
                        <td>New York</td>
                        <td>2011/12/06</td>
                        <td>$145,600</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Hermione Butler</td>
                        <td>Regional Director</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>2011/03/21</td>
                        <td>$356,250</td>
                    </tr>
                    <tr>
                        <td>25</td>
                        <td>Lael Greer</td>
                        <td>Systems Administrator</td>
                        <td>London</td>
                        <td>London</td>
                        <td>2009/02/27</td>
                        <td>$103,500</td>
                    </tr>
                    <tr>
                        <td>33</td>
                        <td>Jonas Alexander</td>
                        <td>Developer</td>
                        <td>San Francisco</td>
                        <td>2010/07/14</td>
                        <td>2010/07/14</td>
                        <td>$86,500</td>
                    </tr>
                    <tr>
                        <td>43</td>
                        <td>Shad Decker</td>
                        <td>Regional Director</td>
                        <td>Edinburgh</td>
                        <td>2008/11/13</td>
                        <td>2008/11/13</td>
                        <td>$183,000</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Michael Bruce</td>
                        <td>Javascript Developer</td>
                        <td>Javascript Developer</td>
                        <td>Singapore</td>
                        <td>2011/06/27</td>
                        <td>$183,000</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>2011/01/25</td>
                        <td>2011/01/25</td>
                        <td>$112,000</td>
                    </tr>
                    </tbody>
                </table>-->
                <!--Prevoius Result Table Ends-->

            </div>
        </div>
    </div>
        </div>
    </div>
</div>
