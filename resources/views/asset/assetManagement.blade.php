<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>QuickTrack | Asset Management</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Main Page CSS -->
    <link href="assets/css/main-page.css" rel="stylesheet">
    <!-- Font-awesome CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    @include('main.navbar')
    <div class="container">
    <h3 class="page-title">Asset Management</h3><br>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="row">
          <div class="panel panel-default left-panel">
            <div class="panel-body" style="height: 100%; margin: 0;">
              <div class="row">
                <div class="form-group"> <!-- calendar column -->
                  <div class="col-lg-2"></div>
                  <div class="col-lg-8">
                    <div class="row"> <!-- calendar row -->
                      <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                          <button type="button" style="font-size: 18px;" class="btn btn-sm btn-custom" data-toggle="popover" data-html="true" id="yearPopOver"><strong>2017</strong></button>
                        </div>
                      </div>
                      <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                          <button type="button" style="font-size: 17px;" class="btn btn-sm btn-custom" data-toggle="popover" data-html="true" id="monthPopOver"><strong>January</strong></button> 
                        </div>
                      </div>
                      <div id="monthPopUpContent" class="hide">  
                        <div class="btn-group btn-group-justified">
                          <a href="#" class="btn btn-sm btn-link monthButton">January</a>
                          <a href="#" class="btn btn-sm btn-link monthButton">February</a>
                        </div>
                        <div class="btn-group btn-group-justified">
                          <a href="#" class="btn btn-sm btn-link monthButton">March</a>
                          <a href="#" class="btn btn-sm btn-link monthButton">April</a>  
                        </div>
                        <div class="btn-group btn-group-justified">
                          <a href="#" class="btn btn-sm btn-link monthButton">May</a> 
                          <a href="#" class="btn btn-sm btn-link monthButton">June</a>
                        </div>
                        <div class="btn-group btn-group-justified">
                          <a href="#" class="btn btn-sm btn-link monthButton">July</a>
                          <a href="#" class="btn btn-sm btn-link monthButton">August</a>
                        </div>
                        <div class="btn-group btn-group-justified">
                          <a href="#" class="btn btn-sm btn-link monthButton">September</a>
                          <a href="#" class="btn btn-sm btn-link monthButton">October</a>                        
                        </div>
                        <div class="btn-group btn-group-justified">
                          <a href="#" class="btn btn-sm btn-link monthButton">November</a> 
                          <a href="#" class="btn btn-sm btn-link monthButton">December</a>
                        </div>
                      </div>
                      <div id="yearPopUpContent" class="hide">   
                        <div class="btn-group btn-group-justified">
                          <div class="btn-group">
                            <a href="#" class="btn btn-link yearButton">2010</a>
                            <a href="#" class="btn btn-link yearButton">2011</a>
                            <a href="#" class="btn btn-link yearButton">2012</a>
                            <a href="#" class="btn btn-link yearButton">2013</a>  
                            <a href="#" class="btn btn-link yearButton">2014</a>
                          </div>
                          <div class="btn-group">
                            <a href="#" class="btn btn-link yearButton">2015</a>         
                            <a href="#" class="btn btn-link yearButton">2016</a>
                            <a href="#" class="btn btn-link yearButton">2017</a>
                            <a href="#" class="btn btn-link yearButton">2018</a>
                            <a href="#" class="btn btn-link yearButton">2019</a>
                          </div>
                          <div class="btn-group">
                            <a href="#" class="btn btn-link yearButton">2020</a> 
                            <a href="#" class="btn btn-link yearButton">2021</a>
                            <a href="#" class="btn btn-link yearButton">2022</a>
                            <a href="#" class="btn btn-link yearButton">2023</a>
                            <a href="#" class="btn btn-link yearButton">2024</a>
                          </div>
                          <div class="btn-group">
                            <a href="#" class="btn btn-link yearButton">2025</a>  
                            <a href="#" class="btn btn-link yearButton">2026</a> 
                            <a href="#" class="btn btn-link yearButton">2027</a>         
                            <a href="#" class="btn btn-link yearButton">2028</a>
                            <a href="#" class="btn btn-link yearButton">2029</a>
                          </div>           
                        </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table table-striped table-bordered" style="text-align:center;">
                          <thead>
                            <tr>
                            <th style="color:#d51919;text-align: center;font-size: 15px; width: 14.2%">Sun</th>
                            <th style="text-align: center;font-size: 15px; width: 14.2%">Mon</th>
                            <th style="text-align: center;font-size: 15px; width: 14.2%">Tue</th>
                            <th style="text-align: center;font-size: 15px; width: 14.2%">Wed</th>
                            <th style="text-align: center;font-size: 15px; width: 14.2%">Thu</th>
                            <th style="text-align: center;font-size: 15px; width: 14.2%">Fri</th>
                            <th style="color:#d51919;text-align: center;font-size: 15px; width: 14.2%">Sat</th>
                            </tr>
                          </thead>

                          <tbody>
                            <tr class="">
                            <td style="color:#d51919;text-align: center;font-size: 16px;">1</td>
                            <td class="presentTd" style="font-size: 16px;">2</td>
                            <td class="presentTd" style="font-size: 16px;">3</td>
                            <td class="presentTd" style="font-size: 16px;">4</td>
                            <td class="presentTd" style="font-size: 16px;">5</td>
                            <td class="presentTd" style="font-size: 16px;">6</td>
                            <td style="color:#d51919;text-align: center;font-size: 16px;">7</td> 
                            </tr>

                            <tr class="">
                              <td style="color:#d51919;text-align: center;font-size: 16px;">8</td>
                              <td style="font-size: 16px;">9</td>
                              <td style="font-size: 16px; background-color: #ffbf80;">10</td>
                              <td style="font-size: 16px;">11</td>
                              <td style="font-size: 16px;">12</td>
                              <td style="font-size: 16px;">13</td>
                              <td style="color:#d51919;text-align: center;font-size: 16px;">14</td> 
                            </tr>

                            <tr class="">
                              <td style="color:#d51919;text-align: center;font-size: 16px;">15</td>
                              <td style="font-size: 16px;">16</td>
                              <td style="font-size: 16px;">17</td>
                              <td style="font-size: 16px;">18</td>
                              <td style="font-size: 16px;">19</td>
                              <td style="font-size: 16px;">20</td>
                              <td style="color:#d51919;text-align: center;font-size: 16px;">21</td> 
                            </tr>

                            <tr class="">
                              <td style="color:#d51919;text-align: center;font-size: 16px;">22</td>
                              <td style="font-size: 16px;">23</td>
                              <td style="font-size: 16px;">24</td>
                              <td style="font-size: 16px;">25</td>
                              <td style="font-size: 16px;">26</td>
                              <td style="font-size: 16px;">27</td> 
                              <td style="color:#d51919;text-align: center;font-size: 16px;">28</td>
                            </tr>   

                            <tr class="">
                              <td style="color:#d51919;text-align: center;font-size: 16px;">29</td>
                              <td style="font-size: 16px;">30</td>
                              <td style="font-size: 16px;">31</td>
                              <td ></td>
                              <td></td>
                              <td></td> 
                              <td></td>
                            </tr>   
                          </tbody>
                        </table>
                      </div>
                    </div> <!-- end of calendar row -->
                  </div> 
                </div> <!-- end of calendar column -->
              </div>

              <div class="row">
                <form>
                  <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a data-toggle="tab" href="#total-asset-investment">Total Asset Investment</a></li>
                    <li><a data-toggle="tab" href="#total-number">Total Number of Asset</a></li>
                  </ul>

                  <div class="tab-content">
                    <div id="total-asset-investment" class="tab-pane fade in active">
                      <div class="col-lg-2"></div>
                      <div class="col-lg-8"><br>
                        <div class="form-group">
                          <h5 class="col-lg-5">Hardware</h5>
                          <div class="input-group col-lg-7">
                            <span class="input-group-addon"><i class="fa fa-hdd-o fa-lg" style="width: 20px;" ></i></span>
                            <input id="" type="text" class="form-control" readonly="" disabled="">
                          </div>
                        </div>
                        <div class="form-group">
                          <h5 class="col-lg-5">Software</h5>
                          <div class="input-group col-lg-7">
                            <span class="input-group-addon"><i class="fa fa-paperclip fa-lg" style="width: 20px;" ></i></span>
                            <input id="" type="text" class="form-control" readonly="" disabled="">
                          </div>
                        </div>
                        <div class="form-group">
                          <h5 class="col-lg-5">Leased</h5>
                          <div class="input-group col-lg-7">
                            <span class="input-group-addon"><i class="fa fa-credit-card fa-lg" style="width: 20px;" ></i></span>
                            <input id="" type="text" class="form-control" readonly="" disabled="">
                          </div>
                        </div>
                        <div class="form-group">
                          <h5 class="col-lg-5">Maintenance</h5>
                          <div class="input-group col-lg-7">
                            <span class="input-group-addon"><i class="fa fa-wrench fa-lg" style="width: 20px;" ></i></span>
                            <input id="" type="text" class="form-control" readonly="" disabled="">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="total-number" class="tab-pane fade">
                      <div class="col-lg-2"></div>
                      <div class="col-lg-8"><br>
                        <div class="form-group">
                          <h5 class="col-lg-5">Check-In</h5>
                          <div class="input-group col-lg-7">
                            <span class="input-group-addon"><i class="fa fa-sign-in fa-lg" style="width: 20px;" ></i></span>
                            <input id="" type="text" class="form-control" readonly="" disabled="">
                          </div>
                        </div>
                        <div class="form-group">
                          <h5 class="col-lg-5">Check-Out</h5>
                          <div class="input-group col-lg-7">
                            <span class="input-group-addon"><i class="fa fa-sign-out fa-lg" style="width: 20px;" ></i></span>
                            <input id="" type="text" class="form-control" readonly="" disabled="">
                          </div>
                        </div>
                        <div class="form-group">
                          <h5 class="col-lg-5">Transfer</h5>
                          <div class="input-group col-lg-7">
                            <span class="input-group-addon"><i class="fa fa-share fa-lg" style="width: 20px;" ></i></span>
                            <input id="" type="text" class="form-control" readonly="" disabled="">
                          </div>
                        </div>
                        <div class="form-group">
                          <h5 class="col-lg-5">Asset Disposal</h5>
                          <div class="input-group col-lg-7">
                            <span class="input-group-addon"><i class="fa fa-trash fa-lg" style="width: 20px;" ></i></span>
                            <input id="" type="text" class="form-control" readonly="" disabled="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div><br>

            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="row">
          <div class="panel panel-default right-panel">
            <div class="panel-body" style="height: 100%; padding-bottom: 21px;">
              <br>  
              <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 center-block">
                  <div class="form-group">
                    <button type="button" class="btn btn-default btn-block custom-btn" data-toggle="modal" data-target="#reg-asset"><strong>REGISTER ASSET</strong></button>
                  </div>

                  <!--Register Asset Modal -->
                  <div id="reg-asset" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h3 class="modal-title">Register Assets</h3>
                        </div>
                        <div class="modal-body" id="printOnhand">
                          
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="form-inline pull-right">
                                <label>Asset Number: </label>
                                <input class="form-control" type="" name="" readonly="" disabled="" style="border: none; background: none; box-shadow: none;">
                              </div>
                            </div>
                            <div class="col-lg-12" style="text-align: center;">
                              <h3><strong>Enroll Assets</strong></h3>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-body">
                              <div class="row">
                                <div class="col-lg-3" style="text-align: center;">
                                  <h4>Item / Product</h4>
                                  <div class="form-group">
                                    <img id="blah" src="dist/img/item.png" height="160">
                                    <span class="btn btn-file">
                                      <input class="required input-sm" type="file" id="imgInp" name="file" style="width: 100px;">
                                    </span>
                                  </div>
                                </div>
                                <div class="col-lg-9">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <h5>RFID Tag / Barcode</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Brand / Model</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Type of Asset</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Amount of Purchase</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Asset Warranty Start</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Supplier Name</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Asset Quantity / Unit</h5>
                                      <input class="form-control" type="" name="">
                                    </div>  
                                    <div class="form-group">
                                      <h5>Contact Person</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Manufacturer</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <h5>Asset Name</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Asset Description</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Date of Purchase</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Product Condition</h5>
                                      <select class="form-control">
                                        <option disabled selected="">Choose your option</option>
                                        <option>Brand New</option>
                                        <option>Second Hand</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <h5>Asset Warranty Expiration</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Supplier Address</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Asset Serial Number</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Contact Number</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Asset Location</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-12" style="text-align: center;">
                              <h3><strong>Assign Custodian</strong></h3>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-body">
                              <div class="row">
                                <div class="col-lg-3" style="text-align: center;">
                                  <h4>Employee</h4>
                                  <div class="form-group">
                                    <img id="blah2" src="dist/img/employee.png" height="160">
                                    <span class="btn btn-file">
                                      <input class="required input-sm" type="file" id="imgInp2" name="file" style="width: 100px;">
                                    </span>
                                  </div>
                                </div>
                                <div class="col-lg-9">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <h5>ID Number</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Employee Name</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Section / Site</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Date of Received</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Department Head Name</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <h5>Date Hired</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Department</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Location</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Asset Cost</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Product Condition</h5>
                                      <select class="form-control">
                                        <option disabled selected="">Choose your option</option>
                                        <option>Brand New</option>
                                        <option>Second Hand</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <a href="#" class="btn btn-info pull-left" role="button">Transaction Details</a>
                          <button id="save" onclick="save()" class="btn btn-success" type="button" name="save-details">Save</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- End of Modal -->

                  <div class="form-group">
                    <button type="button" class="btn btn-default btn-block custom-btn" data-toggle="modal" data-target="#checkin-checkout"><strong>ASSET CHECK-IN &amp; CHECK-OUT</strong></button>
                  </div>

                  <!--Asset Check-in & Check-out Modal -->
                  <div id="checkin-checkout" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h3 class="modal-title">Asset Check-in &amp; Check-out</h3>
                        </div>
                        <div class="modal-body">

                          <div class="row">
                            <form class="col-lg-12">
                              <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a data-toggle="tab" href="#asset-check-in">Asset Check-in</a></li>
                                <li><a data-toggle="tab" href="#asset-check-out">Asset Check-out</a></li>
                              </ul>

                              <div class="tab-content">
                                <div id="asset-check-in" class="tab-pane fade in active"><br>
                                  <div class="col-lg-6">
                                      <a href="asset-check-in-transaction.html" class="btn btn-info" role="button">View Transactions</a>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-inline pull-right">
                                      <label>Check-in Number: </label>
                                      <input class="form-control" type="" name="" readonly="" disabled="">
                                    </div>
                                  </div>
                                  <br><br>
                                  <div class="col-lg-12">
                                    <div class="panel panel-default">
                                      <div class="panel-body">
                                        <div class="row">
                                          <div class="col-lg-3" style="text-align: center;">
                                            <h4>Item / Product</h4>
                                            <div class="form-group">
                                              <img id="blah" src="dist/img/item.png" height="160">
                                              <span class="btn btn-file">
                                                <input class="required input-sm" type="file" id="imgInp" name="file" style="width: 90px;">
                                              </span>
                                            </div>
                                          </div>
                                          <div class="col-lg-9">
                                            <div class="col-lg-6">
                                              <div class="form-group">
                                                <h5>Product Status</h5>
                                                <select class="form-control">
                                                  <option disabled selected="">Choose your option</option>
                                                  <option>Active</option>
                                                  <option>In-Active</option>
                                                </select>
                                              </div>
                                              <div class="form-group">
                                                <h5>Department Assign</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>Location</h5>
                                                <select class="form-control">
                                                  <option disabled selected="">Choose your option</option>
                                                  <option>Site</option>
                                                  <option>Warehouse</option>
                                                </select>
                                              </div>
                                              <div class="form-group">
                                                <h5>Date of Check-in</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>Items / Product Description</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>RFID Tag</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>Product Condition</h5>
                                                <select class="form-control">
                                                  <option disabled selected="">Choose your option</option>
                                                  <option>Poor</option>
                                                  <option>Good</option>
                                                  <option>Excellent</option>
                                                </select>
                                              </div> 
                                              <div class="form-group">
                                                <h5>Warranty Coverage</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>Warranty Date</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                            </div>
                                            <div class="col-lg-6">
                                              <div class="form-group">
                                                <h5>Name of Person In Charge</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>Department Head</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>Quantity / Units</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>Time of Check-in</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>Manufacturer</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>Brand / Model</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>Remarks</h5>
                                                <textarea class="form-control" rows="8"></textarea>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="asset-check-out" class="tab-pane fade"><br>
                                  <div class="col-lg-6">
                                    <a href="asset-check-out-transaction.html" class="btn btn-info" role="button">View Transactions</a>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-inline pull-right">
                                      <label>Check-out Number: </label>
                                      <input class="form-control" type="" name="" readonly="" disabled="">
                                    </div>
                                  </div>
                                  <br><br>
                                  <div class="col-lg-12">
                                    <div class="panel panel-default">
                                      <div class="panel-body">
                                        <div class="row">
                                          <div class="col-lg-3" style="text-align: center;">
                                            <h4>Item / Product</h4>
                                            <div class="form-group">
                                              <img id="blah" src="dist/img/item.png" height="160">
                                              <span class="btn btn-file">
                                                <input class="required input-sm" type="file" id="imgInp" name="file" style="width: 90px;">
                                              </span>
                                            </div>
                                          </div>
                                          <div class="col-lg-9">
                                            <div class="col-lg-6">
                                              <div class="form-group">
                                                <h5>Product Status</h5>
                                                <select class="form-control">
                                                  <option disabled selected="">Choose your option</option>
                                                  <option>Active</option>
                                                  <option>In-Active</option>
                                                </select>
                                              </div>
                                              <div class="form-group">
                                                <h5>Department Assign</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>Location</h5>
                                                <select class="form-control">
                                                  <option disabled selected="">Choose your option</option>
                                                  <option>Site</option>
                                                  <option>Warehouse</option>
                                                </select>
                                              </div>
                                              <div class="form-group">
                                                <h5>Date of Check-in</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>Items / Product Description</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>RFID Tag</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>Warranty Coverage</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>Warranty Date</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                            </div>
                                            <div class="col-lg-6">
                                              <div class="form-group">
                                                <h5>Name of Person In Charge</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>Department Head</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>Quantity / Units</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>Time of Check-in</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>Manufacturer</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>Brand / Model</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>Reasons of Check-out</h5>
                                                <textarea class="form-control" rows="5"></textarea>
                                              </div>
                                            </div>
                                          </div>
                                        </div><br>
                                        <div class="col-lg-12" style="border-top: 1px dotted #8c8b8b; border-bottom: 1px dotted #8c8b8b;">
                                          <div class="row"><br>
                                            <div class="col-lg-6">
                                              <div class="form-group">
                                                <h5>Name of Person Received Asset</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>Contact Number</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>Location of Received Asset</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                            </div>
                                            <div class="col-lg-6">
                                              <div class="form-group">
                                                <h5>Date Received Asset</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>Department Section</h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                              <div class="form-group">
                                                <h5>Product Condition</h5>
                                                <select class="form-control">
                                                  <option disabled selected="">Choose your option</option>
                                                  <option>Poor</option>
                                                  <option>Good</option>
                                                  <option>Excellent</option>
                                                </select>
                                              </div>
                                            </div>
                                          </div><br>
                                        </div>

                                        <div class="col-lg-12"><br>
                                          <div class="row">
                                            <button class="btn btn-info pull-right" type="button" ><i class="fa fa-print"></i> Print</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button id="save" onclick="save()" class="btn btn-success" type="button" name="save-details">Save</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Modal -->

                  <div class="form-group">
                    <button type="button" class="btn btn-default btn-block custom-btn" data-toggle="modal" data-target="#asset-transfer"><strong>ASSET TRANSFER</strong></button>
                  </div>

                  <!-- Asset Transfer Modal -->
                  <div id="asset-transfer" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h3 class="modal-title">Asset Transfer</h3>
                        </div><br>
                        <div class="col-lg-12">
                            <div class="form-inline pull-right">
                              <label>Transfer Number: </label>
                              <input class="form-control" type="" name="" readonly="" disabled="">
                            </div>
                        </div><br><br>
                        <div class="modal-body">

                          <div class="panel panel-default">
                            <div class="panel-body">
                              <div class="row">
                                <div class="col-lg-3" style="text-align: center;">
                                  <h4>Item / Product</h4>
                                  <div class="form-group">
                                    <img id="blah" src="dist/img/item.png" height="160">
                                    <span class="btn btn-file">
                                      <input class="required input-sm" type="file" id="imgInp" name="file" style="width: 100px;">
                                    </span>
                                  </div>
                                </div>
                                <div class="col-lg-9">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <h5>Asset Transfer From:</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Transferring Department / Unit</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Location of Asset (Transfer)</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Product / Items Description</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Serial Number</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Quantity / Unit</h5>
                                      <input class="form-control" type="" name="">
                                    </div>  
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <h5>Receiving Person of Transfer</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Job Description</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Contact Number</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Manufacturer</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>RFID Tag / Barcode</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Date &amp; Time Transfer</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                  </div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <h5>Reason for Transfer</h5>
                                      <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                  </div>
                                  <div class="col-lg-12" style="border-top: 1px dotted #8c8b8b; border-bottom: 1px dotted #8c8b8b;"><br>
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <h5>Asset Transfer To:</h5>
                                        <input class="form-control" type="" name="">
                                      </div>
                                      <div class="form-group">
                                        <h5>Contact Number</h5>
                                        <input class="form-control" type="" name="">
                                      </div>
                                      <div class="form-group">
                                        <h5>Product / Items Description</h5>
                                        <input class="form-control" type="" name="">
                                      </div>
                                      <div class="form-group">
                                        <h5>Serial Number</h5>
                                        <input class="form-control" type="" name="">
                                      </div>
                                      <div class="form-group">
                                        <h5>Manufacturer</h5>
                                        <input class="form-control" type="" name="">
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <h5>Receiving Department</h5>
                                        <input class="form-control" type="" name="">
                                      </div>
                                      <div class="form-group">
                                        <h5>Location Asset (Transfer)</h5>
                                        <input class="form-control" type="" name="">
                                      </div>
                                      <div class="form-group">
                                        <h5>Brand / Model</h5>
                                        <input class="form-control" type="" name="">
                                      </div>
                                      <div class="form-group">
                                        <h5>Quantity / Unit</h5>
                                        <input class="form-control" type="" name="">
                                      </div>
                                      <div class="form-group">
                                        <h5>RFID Tag / Barcode</h5>
                                        <input class="form-control" type="" name="">
                                      </div>
                                    </div>
                                  </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button id="save" onclick="save()" class="btn btn-success" type="button" name="save-details">Save</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- End of Modal -->

                  <div class="form-group">
                    <button type="button" class="btn btn-default btn-block custom-btn" data-toggle="modal" data-target="#asset-maintenance"><strong>ASSET MAINTENANCE</strong></button>
                  </div>

                  <!-- Asset Maintenance Modal -->
                  <div id="asset-maintenance" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h3 class="modal-title">Asset Maintenance</h3>
                        </div><br>
                        <div class="col-lg-12">
                          <div class="form-inline pull-right">
                            <label>Maintenance Number: </label>
                            <input class="form-control" type="" name="" readonly="" disabled="">
                          </div>
                        </div><br><br>
                        <div class="modal-body">
                          <div class="panel panel-default">
                            <div class="panel-body">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <h5>Request By</h5>
                                      <input class="form-control" type="" name="" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                      <h5>Contact Number</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Brand / Model</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <h5>Department</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                   <div class="form-group">
                                      <h5>Type of Product</h5>
                                      <select class="form-control">
                                        <option disabled selected="">Choose your option</option>
                                        <option>Hardware</option>
                                        <option>Software</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <h5>Product Condition</h5>
                                      <select class="form-control">
                                        <option disabled selected="">Choose your option</option>
                                        <option>Poor</option>
                                        <option>Good</option>
                                        <option>Excellent</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-lg-12">
                                    <div class="form-group" style="boder-top: 0;">
                                      <h5>Reason for Maintenance</h5>
                                      <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <h5>RFID Tag / Barcode</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Contact Person</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Department Head (for Approval)</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Cost of Maintenance</h5>
                                      <table class="table table-bordered">
                                        <tbody>
                                          <tr>
                                            <th style="width: 50%">Labor Cost </th>
                                            <td><input type="" name=""></td>
                                          </tr>
                                          <tr>
                                            <th style="width: 50%">Material Cost </th>
                                            <td><input type="" name=""></td>
                                          </tr>
                                          <tr>
                                            <th style="width: 50%">Software Cost</th>
                                            <td><input type="" name=""></td>
                                          </tr>
                                          <tr>
                                            <th style="width: 50%; color: red;">Total</th>
                                            <td><input type="" name="" disabled="" readonly=""></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <h5>Address</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Contact Number</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Date of Maintenance</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Lead Time of Maintenance</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Number of Manpower Needed</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button id="save" onclick="save()" class="btn btn-success" type="button" name="save-details">Save</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- End of Modal -->

                  <div class="form-group">
                    <button type="button" class="btn btn-default btn-block custom-btn" data-toggle="modal" data-target="#disposal-asset"><strong>ASSET DISPOSAL</strong></button>
                  </div>

                  <!-- Asset Disposal Modal -->
                  <div id="disposal-asset" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h3 class="modal-title">Asset Disposal</h3>
                        </div>
                        <div class="modal-body" id="printOnhand">
                          <div class="row">
                            <div class="col-lg-12" style="text-align: center;">
                              <h3><strong>Assign Disposal / Donate / Sold</strong></h3>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-body">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="form-inline pull-right">
                                    <label>Maintenance Number: </label>
                                    <input class="form-control" type="" name="" readonly="" disabled="">
                                  </div>
                                </div><br><br><br>
                                <div class="col-lg-3" style="text-align: center;">
                                  <h4>Item / Product</h4>
                                  <div class="form-group">
                                    <img id="blah" src="dist/img/item.png" height="160">
                                    <span class="btn btn-file">
                                      <input class="required input-sm" type="file" id="imgInp" name="file" style="width: 100px;">
                                    </span>
                                  </div>
                                </div>
                                <div class="col-lg-9">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <h5>Sold / Donate To</h5>
                                      <input class="form-control" type="" name="" placeholder="Name of Company">
                                    </div>
                                    <div class="form-group">
                                      <h5>Contact Person</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>RFID Tag / Barcode</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Brand / Model</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Method of Disposal</h5>
                                      <select class="form-control">
                                        <option disabled selected="">Choose your option</option>
                                        <option>Sold</option>
                                        <option>Scrapped</option>
                                        <option>Trade-In</option>
                                        <option>Donated</option>
                                        <option>Recycled</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <h5>Asset Location</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Source (Department)</h5>
                                      <input class="form-control" type="" name="">
                                    </div>  
                                    <div class="form-group">
                                      <h5>Asset Adjusted Book Value</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Asset Net Value</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Net of Head In-Charge</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <h5>Address</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Contact Number</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Serial Number</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Item / Product Description</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Date of Disposal</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Asset Quantity</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Asset Original Value</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Asset Accumulated Depreciated</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Authorized By</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Department</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                  </div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <h5>Remarks</h5>
                                      <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                  </div>  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <a href="#" class="btn btn-info pull-left" role="button">Transaction Details</a>
                          <button id="save" onclick="save()" class="btn btn-success" type="button" name="save-details">Save</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- End of Modal -->

                  <div class="form-group">
                    <button type="button" class="btn btn-default btn-block custom-btn" data-toggle="modal" data-target="#lease-asset"><strong>ASSET LEASE / RENT</strong></button>
                  </div>

                  <!-- Asset Disposal Modal -->
                  <div id="lease-asset" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h3 class="modal-title">Asset Lease / Rent</h3>
                        </div>
                        <div class="modal-body">
                          <div class="panel panel-default">
                            <div class="panel-body">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="form-inline pull-right">
                                    <label>Lease Number: </label>
                                    <input class="form-control" type="" name="" readonly="" disabled="">
                                  </div>
                                </div><br><br><br>
                                <div class="col-lg-3" style="text-align: center;">
                                  <h4>Item / Product</h4>
                                  <div class="form-group">
                                    <img id="blah" src="dist/img/item.png" style="height: 160px; width: 40px;">
                                    <span class="btn btn-file">
                                      <input class="required input-sm" type="file" id="imgInp" name="file" style="width: 100px;">
                                    </span>
                                  </div>
                                </div>
                                <div class="col-lg-9">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <h5>Name of Supplier</h5>
                                      <input class="form-control" type="" name="" placeholder="Name of Company">
                                    </div>
                                    <div class="form-group">
                                      <h5>Contact Person</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Description of Asset</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Duration of Asset Use</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Cost of Asset Lease / Rent</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Lease / Rent Rate</h5>
                                      <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group" role="group">
                                          <button type="button" class="btn btn-default">Daily</button>
                                        </div>
                                        <div class="btn-group" role="group">
                                          <button type="button" class="btn btn-default">Weekly</button>
                                        </div>
                                        <div class="btn-group" role="group">
                                          <button type="button" class="btn btn-default">Monthly</button>
                                        </div>
                                      </div>
                                    </div>  
                                    <div class="form-group">
                                      <h5>Manufacturer</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Mode of Payment</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <h5>Address</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Contact Number</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Location of Asset Use</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Date of Lease / Rent</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Lease / Rent Rate Article</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Brand / Model</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Terms of Payment</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Product Condition</h5>
                                      <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group" role="group">
                                          <button type="button" class="btn btn-default">Poor</button>
                                        </div>
                                        <div class="btn-group" role="group">
                                          <button type="button" class="btn btn-default">Good</button>
                                        </div>
                                        <div class="btn-group" role="group">
                                          <button type="button" class="btn btn-default">Excellent</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <h5>Remarks</h5>
                                      <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                  </div>  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <a href="#" class="btn btn-info pull-left" role="button">Transaction Details</a>
                          <button id="save" onclick="save()" class="btn btn-success" type="button" name="save-details">Save</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- End of Modal -->

                </div>
              </div>
              <br><br><br>
              <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                <h4 style="text-align: center;"><strong>Transaction Status</strong></h4>
                  <div class="form-group">
                    <button type="button" class="btn btn-success pull-left" style="width: 150px;"><strong>COMPLETE</strong></button>
                    <button type="button" class="btn btn-danger pull-right" style="width: 150px;"><strong>INCOMPLETE</strong></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(function() {
          var createMonthPopover = function (item, title) {
          var $pop = $(item);

          $pop.popover({
              placement: 'bottom',
              title: ( title || '&nbsp;' ) + ' <a class="close" href="#">&times;</a>',
              trigger: 'click',
              html: true,
              content: function () {
                  return $('#monthPopUpContent').html();
              }
          }).on('shown.bs.popover', function(e) {
              //console.log('shown triggered');
              // 'aria-describedby' is the id of the current popover
              var current_popover = '#' + $(e.target).attr('aria-describedby');
              var $cur_pop = $(current_popover);
            
              $cur_pop.find('.close').click(function(){
                  //console.log('close triggered');
                  $pop.popover('hide');
              });
            
              $cur_pop.find('.monthButton').click(function(){
                  //console.log('OK triggered');
                  $pop.popover('hide');
              });
          });

          return $pop;
          };
          createMonthPopover('#monthPopOver', 'Select a Month');
                   
          var createYearPopover = function (item, title) {

              var $pop = $(item);

              $pop.popover({
                  placement: 'top',
                  title: ( title || '&nbsp;' ) + ' <a class="close" href="#">&times;</a>',
                  trigger: 'click',
                  html: true,
                  content: function () {
                      return $('#yearPopUpContent').html();
                  }
              }).on('shown.bs.popover', function(e) {
                  //console.log('shown triggered');
                  // 'aria-describedby' is the id of the current popover
                  var current_popover = '#' + $(e.target).attr('aria-describedby');
                  var $cur_pop = $(current_popover);

                  $cur_pop.find('.close').click(function(){
                      //console.log('close triggered');
                      $pop.popover('hide');
                  });

                  $cur_pop.find('.yearButton').click(function(){
                      //console.log('OK triggered');
                      $pop.popover('hide');
                  });
              });

              return $pop;
          };

          // create popover
          createYearPopover('#yearPopOver', 'Select a Year');
        });
    </script>
    <script type="text/javascript">
     function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result)
                .width(190)
                .height(160);
            }

            reader.readAsDataURL(input.files[0]);
        }
      }

      $("#imgInp").change(function(){
          readURL(this);
      });
    </script>
    <script type="text/javascript">
     function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah2').attr('src', e.target.result)
                .width(190)
                .height(160);
            }

            reader.readAsDataURL(input.files[0]);
        }
      }

      $("#imgInp2").change(function(){
          readURL(this);
      });
    </script>
    <script> //for receive / on-hand stock
      function printDiv(printOnhand) {
      var printContents = document.getElementById('printOnhand').innerHTML;     
      var originalContents = document.body.innerHTML;       
      document.body.innerHTML = printContents;      
      window.print();      
      document.body.innerHTML = originalContents;
      }
    </script>

  </body>
</html>