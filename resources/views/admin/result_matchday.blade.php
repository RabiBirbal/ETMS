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
                <h1>Update Results</h1>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Matchday Result</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form action="admin/result_matchday" method="post" onsubmit="return alert('Result updated successfully!!')" class="was-validated p-2">
                      @csrf
                      <div class="row">
                        <div class="form-group col-lg-6">
                          <label for="matchday">Matchday :</label>
                            <input type="number" class="form-control" id="matchday" name="matchday" value="" placeholder="Enter Matchday" required>
                            <!-- <div class="valid-feedback">Valid.</div> -->
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group col-lg-6">
                          <label for="teamName">Team Name :</label>
                            <input type="text" class="form-control" id="teamName" name="teamName" value="" placeholder="Enter Team Name" required>
                            <!-- <div class="valid-feedback">Valid.</div> -->
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group col-lg-6">
                          <label for="rank">Rank :</label>
                            <input type="number" class="form-control" id="rank" name="rank" value="" placeholder="Enter Rank" required>
                            <!-- <div class="valid-feedback">Valid.</div> -->
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group col-lg-6">
                          <label for="placePoints">Place Points :</label>
                            <input type="number" class="form-control" id="placePoints" name="placePoints" value="" placeholder="Enter Place Points" readonly>
                            <!-- <div class="valid-feedback">Valid.</div> -->
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group col-lg-6">
                          <label for="kills">Kills :</label>
                            <input type="number" class="form-control" id="kills" name="kills" value="" placeholder="Enter Number of Kills" required>
                            <!-- <div class="valid-feedback">Valid.</div> -->
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group col-lg-6">
                          <label for="killsPoints">Kills Points :</label>
                            <input type="number" class="form-control" id="killsPoints" name="killsPoints" value="" placeholder="Enter Kills Points" readonly>
                            <!-- <div class="valid-feedback">Valid.</div> -->
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group col-lg-6">
                          <label for="totalPoints">Total Points :</label>
                            <input type="number" class="form-control" id="totalPoints" name="totalPoints" value="" placeholder="Enter Total Points" readonly>
                            <!-- <div class="valid-feedback">Valid.</div> -->
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                      </div><!-- row finish -->
                      <div class="text-center pt-4">
                          <button type="submit" onclick="return confirm('Are you sure want to continue?')" class="btn btn-primary">Update Now</button>
                      </div>
                    </form>
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

    <script type="text/javascript">
            document.getElementById("placePoints").value=0;
            document.getElementById("killsPoints").value=0;
            document.getElementById("totalPoints").value=0;

            $('#rank').keyup(function(){
              var rank=document.getElementById("rank").value;
              if(rank==0){
                document.getElementById("placePoints").value=0;
              }
              else{
                document.getElementById("placePoints").value=25-rank;
                var placePoints=parseInt(document.getElementById("placePoints").value);
                var killsPoints=parseInt(document.getElementById("killsPoints").value);

                document.getElementById("totalPoints").value=placePoints+killsPoints;
              }
            });

            $('#kills').keyup(function(){
              var kills=document.getElementById("kills").value;
            
              document.getElementById("killsPoints").value=kills*2;
              var placePoints=parseInt(document.getElementById("placePoints").value);
              var killsPoints=parseInt(document.getElementById("killsPoints").value);

              document.getElementById("totalPoints").value=placePoints + killsPoints;
            });


        </script>
  </body>
</html>
