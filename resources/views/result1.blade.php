<!DOCTYPE html>
<html>
    <head>
        <title>Results</title>

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
                        <h1 class="text-center">Results</h1>
                    </div>
                    <h2 class="text-center text-light" data-aos="zoom-in" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">PMCO Tournament</h2>
                    <hr class="w-25 border-danger">
                      <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #000; box-shadow: 0 5px 15px rgba(230, 126, 34, .5);">
                        <!-- Links -->
                        <ul class="navbar-nav">
                          <li class="nav-item {{'FinalResult' == request()->path() ? 'active' : ''}}">
                            <a class="nav-link" href="/FinalResult">Final Result</a>
                          </li>
                          <li class="nav-item ml-4 {{'MatchdayResult' == request()->path() ? 'active' : ''}}">
                            <a class="nav-link" href="/MatchdayResult">Matchday Result</a>
                          </li>
                        </ul>
                      </nav><br>
                      <input class="form-control" id="myInput" type="text" placeholder="Search..">
                        <br>
                        <table class="table table-dark table-hover table-bordered">
                            <thead>
                              <tr>
                                <th>Rank</th>
                                <th>Teams</th>
                                <th>Matches</th>
                                <th>WWCD</th>
                                <th>Place Points</th>
                                <th>Kills</th>
                                <th>Total Points</th>
                              </tr>
                            </thead>
                            <tbody id="myTable">
                              <tr data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                                <td>1</td>
                                <td>Elementrix</td>
                                <td>1</td>
                                <td>1</td>
                                <td>24</td>
                                <td>5</td>
                                <td>29</td>
                              </tr>
                              <tr data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                                <td>2</td>
                                <td>SOUL</td>
                                <td>1</td>
                                <td>0</td>
                                <td>15</td>
                                <td>5</td>
                                <td>29</td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="text-center pt-4">
                            <h2 class="text-warning" data-aos="zoom-out" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">Congratulation!!</h2>
                            <hr class="border-success">
                            <h2 class="text-danger" data-aos="zoom-in-right" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">1st Rank : <span class="text-success">Elementrix</span></h2>
                            <h2 class="text-danger" data-aos="zoom-in-left" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">Prize : <span class="text-success">Nrs. 50,000</span></h2>
                          </div>
                          <div class="text-center pt-4">
                              <h2 class="text-danger" data-aos="zoom-in-right" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">2nd Rank : <span class="text-success">SOUL</span></h2>
                              <h2 class="text-danger" data-aos="zoom-in-left" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">Prize : <span class="text-success">Nrs. 30,000</span></h2>
                          </div>
                          <div class="text-center pt-4 pb-4">
                              <h2 class="text-danger" data-aos="zoom-in-right" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">3rd Rank : <span class="text-success">MT8848</span></h2>
                              <h2 class="text-danger" data-aos="zoom-in-left" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">Prize : <span class="text-success">Nrs. 15,000</span></h2>
                          </div>
                          <hr class="w-25 border-danger pt-">
                          <hr class="w-25 border-warning">
                          <div class="text-center pt-4">
                              <h2 class="text-danger" data-aos="zoom-in-right" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">Highest kills : <span class="text-success">5</span></h2>
                              <h2 class="text-danger" data-aos="zoom-in" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">Team : <span class="text-success">Elementrix</span></h2>
                              <h2 class="text-danger" data-aos="zoom-in-left" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">Prize : <span class="text-success">Nrs. 5,000</span></h2>
                          </div>
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
