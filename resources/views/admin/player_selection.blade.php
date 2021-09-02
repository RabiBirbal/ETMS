<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Dashboard</title>
    <link rel="shortcut icon" type="image" href="newfolder/images/favicon.ico">

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendors/fontawesome-free-5.15.1-web/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <!-- sidenav starts -->
      @include('/admin/sideNav')
      <!-- sidenav ends -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h1>Application of Players</h1>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>PMCO Tournament</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped table-hover projects">
                      <thead class="thead-dark">
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">Username</th>
                          <th style="width: 20%">Email</th>
                          <th style="width: 20%">Team name</th>
                          <th style="width: 20%">Leader</th>
                          <th style="width: 20%">Member 1</th>
                          <th style="width: 20%">Member 2</th>
                          <th style="width: 20%">Member 3</th>
                          <th style="width: 20%">Phone</th>
                          <th style="width: 20%">Payment SS</th>
                          <th style="width: 20%">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Haku </td>
                          <td>hakukaley@gmail.com</td>
                          <td>MadTempers</td>
                          <td>MT_Leader</td>
                          <td>MT_member</td>
                          <td>MT_member</td>
                          <td>MT_member</td>
                          <td>9841123456</td>
                          <td><img src="assets1/images/img.jpg" width="50%"></td>
                          <td>
                            <a href="/user_edit" class="btn btn-info btn-xs"><i class="fa fa-check"></i> Select </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> Reject </a>
                          </td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tournament 2</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped table-hover projects">
                      <thead class="thead-dark">
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">Username</th>
                          <th style="width: 20%">Email</th>
                          <th style="width: 20%">Team name</th>
                          <th style="width: 20%">Leader</th>
                          <th style="width: 20%">Member 1</th>
                          <th style="width: 20%">Member 2</th>
                          <th style="width: 20%">Member 3</th>
                          <th style="width: 20%">Phone</th>
                          <th style="width: 20%">Payment SS</th>
                          <th style="width: 20%">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Haku </td>
                          <td>hakukaley@gmail.com</td>
                          <td>MadTempers</td>
                          <td>MT_Leader</td>
                          <td>MT_member</td>
                          <td>MT_member</td>
                          <td>MT_member</td>
                          <td>9841123456</td>
                          <td><img src="assets1/images/img.jpg" width="50%"></td>
                          <td>
                            <a href="/user_edit" class="btn btn-info btn-xs"><i class="fa fa-check"></i> Select </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> Reject </a>
                          </td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- page content ends -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            RN Nepal - Bootstrap Admin Template
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awesome -->
    <script defer src="vendors/fontawesome-free-5.15.1-web/js/all.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="vendors/Flot/jquery.flot.js"></script>
    <script src="vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vendors/Flot/jquery.flot.time.js"></script>
    <script src="vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
