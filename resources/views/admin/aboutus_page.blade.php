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
                <h1>Edit About Us page</h1>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>About Us</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form action="edit_aboutus" method="post" onsubmit="return alert('Updated Successfully!!')" class="was-validated p-2">
                      @csrf
                      @foreach($aboutus as $data)
                      <div class="row">
                        <div class="form-group col-lg-6">
                          <label for="para1">1st Paragraph :</label>
                          <textarea class="form-control" row="5" id="para1" name="para1" placeholder="Enter 1st Paragraph" required> {{$data['first_paragraph']}} </textarea> 
                          <!-- <div class="valid-feedback">Valid.</div> -->
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group col-lg-6">
                          <label for="para2">2nd Paragraph :</label>
                          <textarea class="form-control" row="15" id="para2" name="para2" placeholder="Enter 2nd Paragraph" required>{{$data['second_paragraph']}}</textarea> 
                          <!-- <div class="valid-feedback">Valid.</div> -->
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group col-lg-6">
                          <label for="eSewa">eSewa ID :</label>
                            <input type="number" class="form-control" id="eSewa" name="eSewa" value="{{$data['esewa_id']}}" placeholder="Enter eSewa ID" required>
                            <!-- <div class="valid-feedback">Valid.</div> -->
                            <div class="invalid-feedback">Please fill out this field.</div>
                            <div id="showErrorEsewa"></div>
                        </div>
                        <div class="form-group col-lg-6">
                          <label for="address">Address :</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{$data['address']}}" placeholder="Enter Address" required>
                            <!-- <div class="valid-feedback">Valid.</div> -->
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group col-lg-6">
                          <label for="email">Email :</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$data['email']}}" placeholder="Enter Email" required>
                            <!-- <div class="valid-feedback">Valid.</div> -->
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group col-lg-6">
                          <label for="semail">Secondary Email :</label>
                            <input type="email" class="form-control" id="semail" name="semail" value="{{$data['secondary_email']}}" placeholder="Enter Secondary Email" required>
                            <!-- <div class="valid-feedback">Valid.</div> -->
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                      </div><!-- row finish -->
                      <div class="text-center pt-4">
                            <button type="submit" onclick="return confirm('Are you sure want to update?')" class="btn btn-primary">Update Now</button>
                          </div>
                          @endforeach
                    </form>
                    <hr class="border-danger">
                    <hr class="border-danger">
                    <h1>Logo</h1>
                    <div class="pt-4">
                      <img src="images/1.jpg" width="100%">
                    </div>
                      <div class="text-center p-4">
                        <button type="submit" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Change Logo</button>
                      </div>
                      <div id="demo" class="collapse">
                        <form action="#" class="was-validated p-2">
                          <div>
                            <input type="file" class="text-dark" id="file-ip-1" style="font-size: 20px;" accept="image/*" class="form-control-file border text-white" onchange="showPreview(event);" required>
                            <div class="preview pt-4">
                              <img src="" id="file-ip-1-preview" width="100%;">
                            </div>
                          </div>
                          <div class="text-center pt-4">
                            <button type="submit" class="btn btn-primary">Change Now</button>
                          </div>
                           
                    </form>
                      </div>
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
            $('#eSewa').keyup(function(){
              var eSewa=$('#eSewa').val();
              if(isNaN(eSewa)){
                $('#showErrorEswea').html('eSewa id must be a number');
                 $('#showErrorEsewa').css('color','red');
                return false;
              }
              else if(eSewa.length!=10){
                $('#showErrorEsewa').html('eSewa must be of 10 characters');
                 $('#showErrorEsewa').css('color','red');
                 return false;
              }
              else{
                $('#showErrorEsewa').html('');
                return true;
              }
            });
          });
        </script>
  </body>
</html>
