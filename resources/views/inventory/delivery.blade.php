<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>QuickTrack | Inventory Transaction</title>

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
    <h2 class="page-title" style="text-align: center;"><strong>Delivery Stock</strong></h2><br>
      <div class="row">
        <div class="col-lg-12">
          <div class="col-lg-1"></div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
            <div class="panel panel-default">
              <div class="panel-body delivery-panel" style="background-image: url('assets/img/Delivery Form.jpg'); background-position: center; background-repeat: no-repeat; background-size: 8.5in 11in;">
                <div class="row">
                  <div class="form-group">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="left: 4.4in; top: 1.9in;">
                      <input class="form-control input-sm" type="" name="" readonly="" disabled="">
                    </div>
                  </div>
                  <br><br><br><br><br><br><br><br><br>
                  <div class="form-group col-xs-4 col-sm-4 col-md-4 col-lg-4" style="left: 2in; top: .54in;">
                    <input class="form-control input-sm col-lg-4" type="" name="">
                    <input class="form-control input-sm" type="" name="">
                    <input class="form-control input-sm" type="" name="">
                    <input class="form-control input-sm" type="" name="">
                  </div>
                  <div class="form-group col-xs-3 col-sm-3 col-md-3 col-lg-3" style="left: 3.73in; top: .23in;">
                    <input class="form-control input-sm" type="" name="">
                    <input class="form-control input-sm" type="" name="">
                    <input class="form-control input-sm" type="" name="">
                    <input class="form-control input-sm" type="" name="">
                    <input class="form-control input-sm" type="" name="">
                  </div>
                  <br><br><br><br><br><br><br><br>
                  <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" style="left: .85in; top: .6in;">
                    <table class="table" style="border: hidden;">
                      <tbody>
                        <tr>
                          <td><input size="43" type="" name=""></td>
                          <td><input size="10" type="" name=""></td>
                          <td><input size="9" type="" name=""></td>
                          <td><input size="9" type="" name=""></td>
                        </tr>
                        <tr>
                          <td><input size="43" type="" name=""></td>
                          <td><input size="10" type="" name=""></td>
                          <td><input size="9" type="" name=""></td>
                          <td><input size="9" type="" name=""></td>
                        </tr>
                        <tr>
                          <td><input size="43" type="" name=""></td>
                          <td><input size="10" type="" name=""></td>
                          <td><input size="9" type="" name=""></td>
                          <td><input size="9" type="" name=""></td>
                        </tr>
                        <tr>
                          <td><input size="43" type="" name=""></td>
                          <td><input size="10" type="" name=""></td>
                          <td><input size="9" type="" name=""></td>
                          <td><input size="9" type="" name=""></td>
                        </tr>
                        <tr>
                          <td><input size="43" type="" name=""></td>
                          <td><input size="10" type="" name=""></td>
                          <td><input size="9" type="" name=""></td>
                          <td><input size="9" type="" name=""></td>
                        </tr>
                        <tr>
                          <td><input size="43" type="" name=""></td>
                          <td><input size="10" type="" name=""></td>
                          <td><input size="9" type="" name=""></td>
                          <td><input size="9" type="" name=""></td>
                        </tr>
                        <tr>
                          <td><input size="43" type="" name=""></td>
                          <td><input size="10" type="" name=""></td>
                          <td><input size="9" type="" name=""></td>
                          <td><input size="9" type="" name=""></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="form-group col-xs-3 col-sm-3 col-md-3 col-lg-3" style="left: 6.4in; top: .54in;">
                    <input class="form-control input-sm" type="" name="" readonly="" disabled="">
                    <input class="form-control input-sm" type="" name="" readonly="" disabled="">
                    <input class="form-control input-sm" type="" name="" readonly="" disabled="">
                  </div>
                  <div class="form-group col-xs-3 col-sm-3 col-md-3 col-lg-3" style="left: 4.01in; top: 1.6in;">
                    <input class="form-control input-sm" type="" name="" readonly="" disabled="">
                  </div>
                  <div class="form-group col-xs-3 col-sm-3 col-md-3 col-lg-6" style="right: 3.85in; top: .9in; width: 4in;">
                    <textarea class="form-control" rows="4"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
            <div class="row">
              <button type="button" class="btn btn-info btn-block"><i class="fa fa-print" aria-hidden="true"></i> Print</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>