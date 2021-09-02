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
                <h1>List of Schedules</h1>
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
                          <th style="width: 20%">Matchday</th>
                          <th style="width: 20%">Date</th>
                          <th style="width: 20%">Time</th>
                          <th style="width: 20%">Map</th>
                          <th style="width: 20%">#Edit</th>
                        </tr>
                      </thead>
                      <tbody id="myTable">
                        @foreach($schedules as $data)
                        <tr>
                          <td>{{$data['matchday']}} </td>
                          <td>{{$data['date']}} </td>
                          <td>{{$data['time']}} </td>
                          <td>{{$data['map']}} </td>
                          <td>
                            <a href="{{'edit_schedule/'.$data['id']}}" class="btn btn-info btn-xs" data-target="#userLoginModal" data-toggle="modal"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="{{'delete_schedule/'.$data['id']}}" onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>   

                    <div class="loginModal">
                      <div class="modal fade" id="userLoginModal">
                        <div class="modal-dialog">
                          <div class="modal-content" style="background-color: #1e272e;">

                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h2 class="text-center text-light">Edit Admin</h2>
                                <button class="bg-dark text-light" type="submit" data-dismiss="modal" style="cursor: pointer;">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                              <form action="edit_schedule" method="post" enctype="multipart/form-data" class="was-validated">
                                @csrf
                                @foreach($schedules as $data)
                                <input type="hidden" name="id" value="{{$data['id']}}">
                                <div class="form-group">
                                  <label for="matchday">Matchday :</label>
                                  <input type="number" class="form-control" id="matchday" name="matchday" value="{{$data['matchday']}}" placeholder="Enter Matchday" required>
                                  <!-- <div class="valid-feedback">Valid.</div> -->
                                  <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                  <label for="date">Date :</label>
                                    <input type="date" class="form-control" id="date" name="date" value="{{$data['date']}}" required>
                                    <!-- <div class="valid-feedback">Valid.</div> -->
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                  <label for="time">Time :</label>
                                  <input type="time" class="form-control" id="time" name="time" value="{{$data['time']}}" required>
                                  <!-- <div class="valid-feedback">Valid.</div> -->
                                  <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                  <label for="map">Map :</label>
                                  <div class="form-group">
                                        <select class="form-control" name="map" id="sel1">
                                          <option>Erangle</option>
                                          <option>Miramar</option>
                                          <option>Shanok</option>
                                          <option>Vikendi</option>
                                        </select>
                                      </div>
                                  <!-- <div class="valid-feedback">Valid.</div> -->
                                  <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="submit" onclick="return confirm('Are you sure want to update?')" class="btn btn-danger">Update</button>
                            </div>
                            @endforeach
                          </form>
                          </div>
                        </div>
                      </div>
                    </div>         
                    <!-- ends -->
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
