<!DOCTYPE html>
<html>
    <head>
        <title>RN Nepal</title>

        @include('style')
        
    </head>
    <body>
      <!-- header starts -->
      <div class="container-fluid">
          @include('header')
      </div>     
      <!-- header ends -->
      <div class="container-fluid">
        <div class="parallax1">
          <h1 class="animate__animated animate__bounceInDown" style="animation-delay: 0.5s;" data-text="welcome to rn nepal">welcome to rn nepal</h1>
            <p class="animate__animated animate__fadeInLeft" style="animation-delay: 1s;">join the tournament and win the prize</p>
                <p class="animate__animated animate__zoomIn" style="animation-delay: 1s;">
                    <a href="/register">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Register now
                    </a>
                </p>
        </div>
  </div>
      <!-- slider starts -->
      <!-- <section class="bg-light z-index-3">
      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/1.jpg" alt="Los Angeles" width="100%" height="508px">
            <div class="carousel-caption">
              <h5 class="animate__animated animate__bounceInDown" style="animation-delay: 0.5s;">Los Angeles</h5>
              <p class="animate__animated animate__fadeInUp" style="animation-delay: 1.5s;">We had such a great time in LA!</p>
              <p class="animate__animated animate__zoomIn" style="animation-delay: 2.5s;">
                <a href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    More Info</a></p>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="images/2.png" alt="Chicago" width="100%" height="508px">
            <div class="carousel-caption">
              <h5 class="animate__animated animate__bounceInDown" style="animation-delay: 0.5s;">Chicago</h5>
              <p class="animate__animated animate__fadeInUp" style="animation-delay: 1.5s;">We had such a great time in LA!</p>
              <p class="animate__animated animate__zoomIn" style="animation-delay: 2.5s;"><a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                More Info</a></p>
            </div>   
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>  
      </section>  -->
      <!-- slider ends    -->

      <!-- Tournaments starts -->
      <!-- <section>
        <div class="tournament1 mt-4">
            <h1 class="text-center text-light">Tournaments</h1>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card">
                        <div class="sliderText">
                            <a href="#"><img class="card-img-top" src="images/4.jpg" alt="Card image cap"height="200"></a>
                        </div>
                        <div class="content">
                            <h3>Slider one</h3>
                            <p>Pool Prize: Nrs. 1,00,000<br>
                            Start Date: 01/12/2020<br>
                            End Date: 01/01/2021<br></p>
                                <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="sliderText">
                            <h3>Slider two</h3>
                        </div>
                        <div class="content">
                            <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla quis lorem ut libero malesuada feugiat.</p>
                                <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="sliderText">
                            <h3>Slider three</h3>
                        </div>
                        <div class="content">
                            <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla quis lorem ut libero malesuada feugiat.</p>
                                <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="sliderText">
                            <h3>Slider four</h3>
                        </div>
                        <div class="content">
                            <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla quis lorem ut libero malesuada feugiat.</p>
                                <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
        <section>
            <div class="container-fluid p-sm-3">
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="tournament1 mt-4" data-aos="zoom-in">
                        <h1 class="text-center text-light">Tournaments</h1>
                    </div>
                    <div class="swiper-container" data-aos="fade-right" data-aos-duration="2000">
                        <div class="swiper-wrapper">
                            @foreach($tournaments as $tournament_data)
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="sliderText">
                                        <a href="tournamentDetail"><img class="card-img-top" src="images/4.jpg" alt="Card image cap"height="200"></a>
                                    </div>
                                    <div class="content">
                                        <h3>{{$tournament_data->name}}</h3>
                                        <span class="badge badge-success" style="width: 100px;"><h7>{{$tournament_data->status}}</h7></span>
                                        <p>Pool Prize: Nrs. {{$tournament_data->pool_prize}}<br>
                                        Start Date: {{$tournament_data->start_date}}<br>
                                        End Date: {{$tournament_data->end_date}}<br></p>
                                            <a href="tournamentDetail/{{$tournament_data->id}}" class="btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    </div> 
                    <!-- right news starts -->
                    @include('right_notice') 
                    <!-- right news ends -->
                </div>
            </div>
      </section>
      <!-- Tournaments ends -->
      <!-- Upcoming Matches starts -->
      <section>
          <div class="container-fluid p-sm-3">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 bg-light">
                    <div class="um" data-aos="zoom-in">
                    <h1 class="text-center text-light">Tournament Schedule</h1>
                        </div><br><br>
                        <div class="container">
                          <h2 class="text-center" data-aos="zoom-in" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">PMCO Tournament</h2>
                            <br><br>
                          <table class="table table-hover" data-aos="fade-up" data-aos-duration="2000">
                            <thead>
                              <tr>
                                <th>Matchday</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Map</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($schedules as $schedule_data)
                              <tr>
                                <td>{{$schedule_data->matchday}}</td>
                                <td>{{$schedule_data->date}}</td>
                                <td>{{$schedule_data->time}}</td>
                                <td>{{$schedule_data->map}}</td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>                     
                    </div>
                    <!-- right recent post starts  -->
                    <!-- @include('right_recent')  -->
                    <!-- right recent post ends -->
                  </div>
          </div>
      </section>
      <!-- Upcoming Matches ends -->
      <!-- advertisement starts -->
      <section class="container-fluid p-sm-3">
          <div class="parallax">
          </div>
      </section><br><br>
      <!-- advertisement ends -->
      <!-- Tournament result starts -->
      <section>
        <div class="container-fluid p-sm-3">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="box">
                        <div class="tr" data-aos="zoom-in">
                        <h1 class="text-center text-light">Tournament Result</h1>
                        </div>
                        <h2 class="text-light text-center" data-aos="fade-up-left" data-aos-duration="1000">PMCO Tournament</h2>
                        <h1 class="text-center text-light" data-aos="fade-up-right" data-aos-duration="1000">***** CONGRATULATIONS!! *****</h1>
                        <hr class="w-25 border-danger">
                        <hr>
                        <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 mt-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2500">
                            <img src="images/winner.png" alt="winner" style="width:50%;"> 
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mt-5 mb-2" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2500">
                            <h3 class="text-light ">Team Name: Elememtrix </h3> 
                            <h3 class="text-light animate__animated animate__heartBeat">Prize: Nrs. 50,000</h3>
                        </div> 
                        <div class="col-lg-6 col-md-6 col-sm-12 mt-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2500">
                            <img src="images/2nd.png" alt="winner" style="width:50%;"> 
                        </div> 
                        <div class="col-lg-6 col-md-6 col-sm-12 mt-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2500">
                            <h3 class="text-light">The Slayer </h3> 
                            <h3 class="text-light animate__animated animate__heartBeat">Prize: Nrs. 30,000</h3>
                        </div> 
                        <div class="col-lg-6 col-md-6 col-sm-12 mt-4 mb-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2500">
                            <img src="images/3rd.png" alt="winner" style="width:50%;"> 
                        </div>  
                        <div class="col-lg-6 col-md-6 col-sm-12 mt-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2500">
                            <h3 class="text-light">Solti Squad </h3> 
                            <h3 class="text-light animate__animated animate__heartBeat">Prize: Nrs. 15,000</h3>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mt-4 mb-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2500">
                            <h1 class="p-4" style="color: #ffa502;">Highest Killer</h1> 
                        </div>  
                        <div class="col-lg-6 col-md-6 col-sm-12 mt-2" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2500">
                            <h3 class="text-light">Solti Squad </h3> 
                            <h3 class="text-light animate__animated animate__heartBeat">Prize: Nrs. 5,000</h3>
                        </div>
                    </div>
                </div>
                </div>
                <!-- left ads starts -->
                @include('right_ads') 
                <!-- left ads ends -->
            </div>    
        </div>         
      </section>
      <!-- Tournament result ends -->
      <!-- about us starts -->
      <section>
            <div class="container-fluid p-sm-3">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 bg-light">
                    <div class="about_us">
                        <h1 class="text-center text-light">About Us</h1>
                    </div>
                        <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="aboutusImage" data-aos="fade-up-right" data-aos-duration="1000">
                    <a href="images/logo.png" target="_blank"><img src="images/logo.png" class="img-thumbnail img-fluid" width="100%"></a>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 bg-light">
                    <h1 class="text-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">Who are we?</h1>
                    <hr>
                    <p class="text-justify" data-aos="zoom-in-left" data-aos-duration="2000">
                      Sed porttitor lectus nibh. Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus.
                    </p>
                    <p>
                      <a class="btn btn-success" data-toggle="collapse" href="#find_us" role="button" aria-expanded="false" aria-controls="find_us">
                      See More
                      </a>
                    </p>
              <div class="collapse" id="find_us">
                <div class="card card-body">
                  <h3>You can find us at:</h3>
                    <ul>
                        <li><p class="font-weight-bold">eSewa ID: <strong>9841234567</strong> </p></li>
                        <li><p class="font-weight-bold">Address: <strong>Tridevi Sadak, Kathmandu</strong> </p></li>
                        <li><p class="font-weight-bold">Email: <strong>info@rn_nepal.com</strong> </p></li>
                        <li><p class="font-weight-bold">Secondary Email: <strong>pubg@rnnepal.com></strong></p></li>
                  </ul>
                </div>
              </div>
              
                  </div>
                </div>
                </div>
            </div>
        </div>
        </section>
        <!-- about us ends -->
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
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

        <!-- bootstrap -->
        <script src="bootstrap/bootstrap-4.0.0-dist/js/bootstrap.min.js">
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous"></script>

        <!-- swiper -->
        <script src="swiper-slider/swiper-bundle.js">
        </script>
        <script src="swiper-slider/swiper-bundle.min.js">
        </script>
        <script src="swiper-slider/aos.js">
        </script>
        <!-- <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->

        <!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->

        <!-- scrolled navbar change -->
        <script src="JavaScript/script.js"></script>
        <!-- <script type="text/javascript">
            $(window).scroll(function(){
                $('nav').toggleClass('scrolled',$(this).scrollTop()>100);
            })
        </script> -->
    </body>
</html>
