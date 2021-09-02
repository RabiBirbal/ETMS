<!DOCTYPE html>
<html>
    <head>
        <title>News</title>

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
                        <h1 class="text-center">News</h1>
                    </div>
                    <a href="#" class="card-link">
                    <div class="card mb-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                      <div class="card-body card1">
                        <h3>Date: 12/02/2020</h3>
                        <hr class="border-danger">
                        <h4 class="card-title">PMCO Tournament</h4>
                        <p class="card-text">Schedule of matchday 2 has been published.</p>
                      </div>
                    </div> </a>  
                    <a href="#" class="card-link">
                    <div class="card mb-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                      <div class="card-body card1">
                        <h3>Date: 12/02/2020</h3>
                        <hr class="border-danger">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some example text. Some example text.</p>
                      </div>
                    </div> </a>  
                    <a href="#" class="card-link">
                    <div class="card mb-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                      <div class="card-body card1">
                        <h3>Date: 12/02/2020</h3>
                        <hr class="border-danger">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some example text. Some example text.</p>
                      </div>
                    </div> </a>  
                    <a href="#" class="card-link">
                    <div class="card mb-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                      <div class="card-body card1">
                        <h3>Date: 12/02/2020</h3>
                        <hr class="border-danger">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some example text. Some example text.</p>
                      </div>
                    </div> </a>  
                    <a href="#" class="card-link">
                    <div class="card mb-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                      <div class="card-body card1">
                        <h3>Date: 12/02/2020</h3>
                        <hr class="border-danger">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some example text. Some example text.</p>
                      </div>
                    </div> </a>                 
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
