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
                        <h1 class="text-center">Tournament Registration</h1>
                    </div>
                    <form action="tournamentRegister" method="POST" class="was-validated p-2">
                      @csrf 
                    <div class="row">
                      <div class="form-group col-lg-6">
                        <label for="uname">Username :</label>
                        <input type="text" class="form-control" id="uname" value="{{old('uname')}}" placeholder="Enter Username" name="uname" required>
                        <!-- <div class="valid-feedback">Valid.</div> -->
                        <div class="invalid-feedback">Please fill out this field.</div>
                        <span style="color: red;">@error('uname'){{$message}}@enderror </span>
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="email">Email :</label>
                        <input type="email" class="form-control" id="email" value="{{old('email')}}" placeholder="Enter Email" name="email" required>
                        <!-- <div class="valid-feedback">Valid.</div> -->
                        <div class="invalid-feedback">Please fill out this field.</div>
                        <span style="color: red;">@error('email'){{$message}}@enderror </span>
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="tName">Team Name :</label>
                        <input type="text" class="form-control" id="tName" value="{{old('tname')}}" placeholder="Enter Team Name" name="tname" required>
                        <!-- <div class="valid-feedback">Valid.</div> -->
                        <div class="invalid-feedback">Please fill out this field.</div>
                        <span style="color: red;">@error('tname'){{$message}}@enderror </span>
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="leader">Leader : (Game Name)</label>
                        <input type="text" class="form-control" id="leader" value="{{old('leader')}}" placeholder="Enter Leader Name" name="leader" required>
                        <!-- <div class="valid-feedback">Valid.</div> -->
                        <div class="invalid-feedback">Please fill out this field.</div>
                        <span style="color: red;">@error('leader'){{$message}}@enderror </span>
                      </div>
                      <div class="form-group col-lg-4">
                        <label for="member1">Member 1 : (Game Name)</label>
                        <input type="text" class="form-control" id="member1" value="{{old('member1')}}" placeholder="Enter Member 1" name="member1" required>
                        <!-- <div class="valid-feedback">Valid.</div> -->
                        <div class="invalid-feedback">Please fill out this field.</div>
                        <span style="color: red;">@error('member1'){{$message}}@enderror </span>
                      </div>
                      <div class="form-group col-lg-4">
                        <label for="member2">Member 2 : (Game Name)</label>
                        <input type="text" class="form-control" id="member2" value="{{old('member2')}}" placeholder="Enter Member 2" name="member2" required>
                        <!-- <div class="valid-feedback">Valid.</div> -->
                        <div class="invalid-feedback">Please fill out this field.</div>
                        <span style="color: red;">@error('member2'){{$message}}@enderror </span>
                      </div>
                      <div class="form-group col-lg-4">
                        <label for="member3">Member 3 : (Game Name)</label>
                        <input type="text" class="form-control" id="member3" value="{{old('member3')}}" placeholder="Enter Member 3" name="member3" required>
                        <!-- <div class="valid-feedback">Valid.</div> -->
                        <div class="invalid-feedback">Please fill out this field.</div>
                        <span style="color: red;">@error('member3'){{$message}}@enderror </span>
                      </div>
                      <div class="form-group col-lg-4">
                        <label for="phone">Phone :</label>
                        <input type="text" class="form-control" id="phone" value="{{old('phone')}}" placeholder="Enter Phone" name="phone" required>
                        <!-- <div class="valid-feedback">Valid.</div> -->
                        <div class="invalid-feedback">Please fill out this field.</div>
                        <span style="color: red;">@error('phone'){{$message}}@enderror </span>
                      </div>
                      <div class="form-group col-lg-4">
                        <label for="esewa">eSewa ID :</label>
                        <input type="text" class="form-control" id="esewa" name="esewa" value="9841234567" readonly>
                      </div>
                      <div class="form-group col-lg-4">
                        <label for="esewa">Registration Fee(Nrs) :</label>
                        <input type="text" class="form-control" id="esewa" name="esewa" value="1000" readonly>
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="payment">Payment Screenshot :</label>
                          <input type="file" id="file-ip-1" accept="image/*" class="form-control-file border text-white" onchange="showPreview(event);" name="payment Screenshot"  required>
                      </div> 
                      <div class="preview col-lg-6">
                          <img src="" id="file-ip-1-preview" width="100%;">
                      </div>
                    </div> <!-- row ends -->
                      <div class="form-group form-check col-lg-12 pl-4">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" name="remember" required> I agree all the <a href="" data-target="#tRegisterModal" data-toggle="modal">terms and conditions.</a> 
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback"><small>Check this checkbox to continue.</small></div>
                        </label>
                      </div>
                      <!-- modal -->
                      <div class="tRegisterModal">
                      <div class="modal fade" id="tRegisterModal">
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
                      <div class="text-center text-white">
                          <label>Already has an Account?</label><a href="#" data-toggle="modal" data-target="#userLoginModal"> Login</a>
                      </div> 
                      <div class="text-center p-4">
                          <button type="submit" class="btn btn-primary">Submit</button>
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
            function showPreview(event){
                if(event.target.files.length > 0){
                    var src = URL.createObjectURL(event.target.files[0]);
                    var preview = document.getElementById("file-ip-1-preview");
                    preview.src=src;
                    preview.style.display="block";
                }
            }
        </script>
        <script src="JavaScript/script.js"></script>
    </body>
</html>
