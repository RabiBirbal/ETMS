<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>

        <link rel="shortcut icon" type="image" href="images/logo.png">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap-4.0.0-dist/css/bootstrap.css">


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.1-web/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" />

        <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


        <!-- swiper -->
        <link rel="stylesheet" type="text/css" href="swiper-slider/swiper-bundle.css">
        <link rel="stylesheet" type="text/css" href="swiper-slider/swiper-bundle.min.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

        <!-- animate on scroll -->
        <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"> -->
        <link rel="stylesheet" type="text/css" href="swiper-slider/aos.css">

        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/NoticeStyle.css">
        <link rel="stylesheet" type="text/css" href="css/all.css">
        
    </head>
    <body>
      <!-- header starts -->
      <div class="container-fluid">
          @include('header')
      </div>     
      <!-- header ends -->
      
      <div class="container-fluid p-sm-3 mainpage">
          <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 box">
                    <div class="mb-4">
                        <h1 class="text-center">Become-A-Sponosr</h1>
                    </div>
                    <div class="sponsor pt-4">
                      <h2>Sponsorship Types</h2>
                      <hr class="border-danger">
                      <dl class="text-white">
                        <li class="platinum">
                          Platinum - 2 Months : <span> Nrs 1000</span>
                        </li>
                        <li class="gold">
                          Gold - 1 Month : <span> Nrs 500</span> 
                        </li>
                        <li class="silver">
                          Silver - 15 days : <span> Nrs 300</span> 
                        </li>
                      </dl>
                    </div>
                    <form action="sponsor" method="post" enctype="multipart/form-data" onsubmit="return alert('Sponsorship has be submitted successfully!!')" class="was-validated p-2">
                      @csrf
                    <div class="row">
                      <div class="form-group col-lg-6">
                        <label for="fname">Full Name :</label>
                        <input type="text" class="form-control" id="fname" value="{{old('fname')}}" placeholder="Enter Fullname" name="fname" required>
                        <!-- <div class="valid-feedback">Valid.</div> -->
                        <div class="invalid-feedback">Please fill out this field.</div>
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="email">Email :</label>
                        <input type="email" class="form-control" id="email" value="{{old('email')}}" placeholder="Enter Email" name="email" required>
                        <!-- <div class="valid-feedback">Valid.</div> -->
                        <div class="invalid-feedback">Please fill out this field.</div>
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="banner">Banner :</label>
                          <input type="file" id="file-ip-1" accept="image/*" class="form-control-file border text-white" onchange="showPreview1(event);" name="banner" required>
                          <div class="preview">
                          <img src="" id="file-ip-1-preview" width="100%;">
                      </div>
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="url">URL :</label>
                        <input type="url" class="form-control" id="url" value="{{old('url')}}" placeholder="Enter URL" name="url" required>
                        <!-- <div class="valid-feedback">Valid.</div> -->
                        <div class="invalid-feedback">Please fill out this field.</div>
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="address">Address :</label>
                        <input type="text" class="form-control" id="address" value="{{old('address')}}" placeholder="Enter Address" name="address" required>
                        <!-- <div class="valid-feedback">Valid.</div> -->
                        <div class="invalid-feedback">Please fill out this field.</div>
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="text">Phone :</label>
                        <input type="text" class="form-control" id="phone" value="{{old('phone')}}" placeholder="Enter Phone" name="phone" required>
                        <!-- <div class="valid-feedback">Valid.</div> -->
                        <div class="invalid-feedback">Please fill out this field.</div>
                        <span style="color: red;">@error('phone'){{$message}}@enderror </span>
                        <div id="showErrorPhone"></div>
                      </div> 
                      <div class="form-group col-lg-6">
                        <label for="sel1">Select Sponsorship :</label>
                        <select class="form-control bg-dark text-white" id="type" onclick="getValue();" name="type" required>type
                          <option class="bg-dark platinum">Platinum</option>
                          <option class="gold">Gold</option>
                          <option class="silver">Silver</option>
                        </select>
                        <div class="invalid-feedback">Please fill out this field.</div>
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="fee">Fee Nrs.:</label>
                        <input type="text" class="form-control" id="fee" name="fee" readonly>
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="esewa">eSewa ID :</label>
                        <input type="text" class="form-control" id="esewa" name="esewa" value="9841234567" readonly>
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="payment">Payment Screenshot :</label>
                          <input type="file" id="file-ip-2" accept="image/*" class="form-control-file border text-white" onchange="showPreview(event);" name="payment" required>
                          <div class="preview">
                          <img src="" id="file-ip-2-preview" width="100%;">
                          </div>
                      </div> 
                      <div class="form-group form-check col-lg-12 pl-4">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" name="remember" required> I agree all the <a href="" data-target="#sponsorModal" data-toggle="modal">terms and conditions.</a> 
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback"><small>Check this checkbox to continue.</small></div>
                        </label>
                      </div>  
                      <!-- modal -->
                      <div class="sponsorModal">
                      <div class="modal fade" id="sponsorModal">
                        <div class="modal-dialog">
                          <div class="modal-content" style="background-color: #1e272e;">

                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h2 class="text-center text-light">Terms and Conditions</h2>
                                <button class="bg-dark text-light" type="submit" data-dismiss="modal" style="cursor: pointer;">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                              <p class="text-justify text-white">
                                Vivamus suscipit tortor eget felis porttitor volutpat. Nulla quis lorem ut libero malesuada feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Cras ultricies ligula sed magna dictum porta.
                              </p>
                            </div>
                             <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- modal ends -->
                      <div class="text-center col-sm-12 p-4">
                          <a data-toggle="tooltip" title="Click Me!"><button type="submit" onclick="return confirm('Are you sure want to continue?')" class="btn btn-primary">Submit</button></a>
                      </div>
                    </div>
                    </form>                                  
                </div> 
                    <!-- right news starts -->
                    @include('right')
                    <!-- right news ends       -->           
                </div>
            </div>
        <!-- footer starts -->
        <section>
            @include('footer')  
        </section>  
        <!-- footer ends   -->

        <!-- script starts -->
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <!-- bootstrap -->
        <script src="bootstrap/bootstrap-4.0.0-dist/js/bootstrap.min.js">
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous"></script>
        </script>
        
        <!-- aos -->
        <script src="swiper-slider/aos.js">
        </script>
        <script>
            AOS.init();
        </script>
        <!-- image preview -->
        <script type="text/javascript">
            function showPreview1(event){
                if(event.target.files.length > 0){
                    var src = URL.createObjectURL(event.target.files[0]);
                    var preview = document.getElementById("file-ip-1-preview");
                    preview.src=src;
                    preview.style.display="block";
                }
            }

            function showPreview(event){
                if(event.target.files.length > 0){
                    var src = URL.createObjectURL(event.target.files[0]);
                    var preview = document.getElementById("file-ip-2-preview");
                    preview.src=src;
                    preview.style.display="block";
                }
            }

            document.getElementById("fee").value=1000;
            function getValue(){
              var type=document.getElementById("type").value;
              
              if(type=="Platinum"){
                document.getElementById("fee").value=1000;
              }
              else if(type=="Gold"){
                document.getElementById("fee").value=400;
              }
              else if(type=="Silver"){
                document.getElementById("fee").value=200;
              }
              // var txt=document.getElementById("fee").value;
              
            }

            $(document).ready(function(){
              $('[data-toggle="popover"]').popover();
            });
        </script>
        <script src="JavaScript/script.js"></script>

        <script type="text/javascript">
          $(document).ready(function(){
            $('#phone').keyup(function(){
              var phone=$('#phone').val();
              if(isNaN(phone)){
                $('#showErrorPhone').html('Password must be a number');
                 $('#showErrorPhone').css('color','red');
                return false;
              }
              else if(phone.length!=10){
                $('#showErrorPhone').html('Phone number must be of 10 characters');
                 $('#showErrorPhone').css('color','red');
                 return false;
              }
              else{
                $('#showErrorPhone').html('');
                return true;
              }
            });
          });
        </script>
    </body>
</html>
