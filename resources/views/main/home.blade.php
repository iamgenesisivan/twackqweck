<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>QuickTrack | Main</title>

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

  <style>
    body {
      background-color: #ffe6e6;
    }
  </style>

  <body>

    @include('main.navbar')

    <div class="container">
      <br><br>
      <div class="col-lg-12 center-block">
        <div class="form-group">
          <button type="button" class="btn btn-lg btn-info center-block custom"><span class="fa fa-bar-chart fa-2x pull-left custom-chart"></span> DASHBOARD</button> 
        </div>
      </div>
      <div class="col-lg-6 center-block">
        <div class="form-group">
          <a  type="button" class="btn btn-lg btn-info center-block custom"><span class="fa fa-list fa-2x pull-left custom-list"></span> INVENTORY MANAGEMENT</a>
        </div>
        <div class="form-group">
          <a type="button" class="btn btn-lg btn-info center-block custom"><span class="fa fa-map-marker fa-2x pull-left custom-marker"></span> ASSET MANAGEMENT</a> 
        </div>
        <div class="form-group">
          <a type="button" class="btn btn-lg btn-info center-block custom"><span class="fa fa-wrench fa-2x pull-left custom-wrench"></span> PREVENTIVE MANAGEMENT</a>
        </div>
      </div>
      <div class="col-lg-6 center-block">
        <div class="form-group">
          <a type="button" class="btn btn-lg btn-info center-block custom"><span class="fa fa-truck fa-2x pull-left custom-truckx"></span> DISPATCH MANAGEMENT</a>
        </div>
        <div class="form-group">
          <a type="button" class="btn btn-lg btn-info center-block custom"><span class="fa fa-tablet fa-2x pull-left custom-tablet"></span> E.P.O.D MANAGEMENT</a>
        </div>
        <div class="form-group">
          <a href="#" type="button" class="btn btn-lg btn-info center-block custom"><span class="fa fa-list-alt fa-2x pull-left custom-list-alt"></span> REPORTS</a>
        </div>
      </div>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>