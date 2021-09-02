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
                <h1>List of Admins</h1>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" id="myInput" placeholder="Search for...">
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Admins</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start project list -->
                    <table class="table table-striped table-hover projects">
                      <thead class="thead-dark">
                        <tr>
                          <th style="width: 20%">Username</th>
                          <th style="width: 20%">Profile Picture</th>
                          <th style="width: 20%">Password</th>
                          <th style="width: 20%">Email</th>
                          <th style="width: 20%">Status</th>
                          <th style="width: 20%">#Edit</th>
                        </tr>
                      </thead>
                      <tbody id="myTable">
                        @foreach($admins as $admin)
                        <tr>
                          <td>{{$admin['username']}} </td>
                          <td><img src="{{asset('upload/images/'.$admin->profile_pic)}}" width="100%"></td>
                          <td>{{$admin['password']}} </td>
                          <td>{{$admin['email']}} </td>
                          <td>
                            <form>
                            <div class="form-group">
                              <select class="form-control" id="sel1" style="width: 100px;">
                                <option>Active</option>
                                <option>Deactive</option>
                              </select>
                            </div>
                          </form>
                          </td>
                          <td>
                            <a href="{{'delete_admin/'.$admin['id']}}" onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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
                              <form action="edit_admin" method="post" enctype="multipart/form-data" class="was-validated">
                                @csrf
                                @foreach($admins as $admin)
                                <input type="hidden" name="id" value="{{$admin['id']}}">
                                <div class="form-group">
                                  <label for="uname">Username:</label>
                                  <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" value="{{$admin['username']}}" required>
                                  <!-- <div class="valid-feedback">Valid.</div> -->
                                  <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                  <label for="pswd">Password:</label>
                                  <input type="password" class="form-control" id="pswd" value="{{$admin['password']}}" placeholder="Enter password" name="pswd" required>
                                  <!-- <div class="valid-feedback">Valid.</div> -->
                                  <div class="invalid-feedback">Please fill out this field.</div>
                                  <span style="color: red;">@error('pswd'){{$message}}@enderror </span>
                                  <div id="showErrorpswd"></div>
                                </div>
                                <div class="form-group">
                                  <label for="email">Email Address:</label>
                                  <input type="email" class="form-control" id="email" value="{{$admin['email']}}" placeholder="Enter Email Address" name="email" required>
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
                    <!-- end project list -->

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
    <script>
            $(document).ready(function(){
              $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });
      </script> 

      <!-- image preview -->
        <script type="text/javascript">
            function showPreview(event){
                if(event.target.files.length > 0){
                    var src = URL.createObjectURL(event.target.files[0]);
                    var preview = document.getElementById("file-ip-1-preview");
                    preview.src=src;
                    preview.style.display="block";
                }
            }
        </script>
        <script type="text/javascript">
          $(document).ready(function(){

            $('#pswd').keyup(function(){
              var pswd=$('#pswd').val();
              if(pswd.length>15){
                $('#showErrorpswd').html('Password must be less than 16 characters');
                 $('#showErrorpswd').css('color','red');
                 return false;
              }
              else if(pswd.length<5){
                $('#showErrorpswd').html('Password must be greater than 6 characters');
                 $('#showErrorpswd').css('color','red');
                 return false;
              }
              else{
                $('#showErrorpswd').html('');
                 return true;
              }
            });
          });
        </script>
  </body>
</html>
