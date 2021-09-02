<!DOCTYPE html>
<html>
    <head>
        <title>Tournaments</title>

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
                        <h1 class="text-center">Tournaments</h1>
                    </div>
                    <h2 class="text-center text-light" data-aos="zoom-in" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">PUBG Mobile</h2>
                    <hr class="w-25 border-danger">
                      <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #000; box-shadow: 0 5px 15px rgba(230, 126, 34, .5);">
                        <!-- Links -->
                        <ul class="navbar-nav">
                          <li class="nav-item {{'PastTournament' == request()->path() ? 'active' : ''}}">
                            <a class="nav-link" href="/PastTournament">Past Tournament</a>
                          </li>
                          <li class="nav-item ml-4 {{'tournaments' == request()->path() ? 'active' : ''}}">
                            <a class="nav-link" href="/tournaments">Ongoing Tournament</a>
                          </li>
                          <li class="nav-item ml-4 {{'UpcomingTournament' == request()->path() ? 'active' : ''}}">
                            <a class="nav-link" href="/UpcomingTournament">Upcoming Tournament</a>
                          </li>
                        </ul>
                      </nav><br>
                      <a href="/tournamentDetail" class="card-link">
                        <div class="card mb-3" data-aos="zoom-in" data-aos-anchor-placement="top-bottom" data-aos-duration="1500" style="max-width: 100%;">
                          <div class="row no-gutters">
                            <div class="col-md-5" data-aos="zoom-in-right" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                              <img src="images/4.jpg" class="card-img" alt="" height="215px;">
                            </div>
                            <div class="col-md-7">
                              <div class="card-body" data-aos="zoom-in-left" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                                <h4 class="card-title">PMCO Tournament <span class="badge badge-success" style="margin-left: 170px; width: 100px;"><h7>Upcoming</h7></span></h4>
                                <hr class="border-danger">
                                
                                <p>Pool Prize: Nrs. 1,00,000<br>
                                        Start Date: 01/12/2020<br>
                                        End Date: 01/01/2021<br></p>
                              </div>
                            </div>
                          </div>
                        </div>                            
                     </a> 
                     <a href="/tournamentDetail" class="card-link">
                        <div class="card mb-3" data-aos="zoom-in" data-aos-anchor-placement="top-bottom" data-aos-duration="1500" style="max-width: 100%;">
                          <div class="row no-gutters">
                            <div class="col-md-5" data-aos="zoom-in-right" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                              <img src="images/4.jpg" class="card-img" alt="" height="215px;">
                            </div>
                            <div class="col-md-7">
                              <div class="card-body" data-aos="zoom-in-left" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                                <h4 class="card-title">PMCO Tournament <span class="badge badge-success" style="margin-left: 170px; width: 100px;"><h7>Upcoming</h7></span></h4>
                                <hr class="border-danger">
                                
                                <p>Pool Prize: Nrs. 1,00,000<br>
                                        Start Date: 01/12/2020<br>
                                        End Date: 01/01/2021<br></p>
                              </div>
                            </div>
                          </div>
                        </div>                            
                     </a> 
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
            <script src="JavaScript/script.js"></script>
    </body>
</html>
