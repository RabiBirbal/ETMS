<!DOCTYPE html>
<html>
    <head>
        <title>About Us</title>

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
                        <h1 class="text-center">About Us</h1>
                    </div>
                    <div class="aboutusImage">
                    <a href="images/logo.png" target="_blank"><img src="images/logo.png" class="img-thumbnail img-fluid p-2" width="100%"></a>
                    </div>
                    <!-- <div class="aboutusImage">
                        <a href="images/logo.png" target="_blank"><img src="images/logo.png" class="img-thumbnail img-fluid p-2" width="100%"></a>
                    </div> -->
                    <div>
                        <h2 class="text-center text-white pt-4">Who are we ?</h2>
                        <hr class="w-25 border-danger">
                        <hr class="w-25 border-danger">
                        <p class="text-light">
                      Sed porttitor lectus nibh. Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus.
                    </p>
                    <p class="text-light">
                        Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis porttitor volutpat. Donec sollicitudin molestie malesuada.
                    </p>

                  <h3 class="text-success">You can find us at:</h3>
                    <ul class="text-light">
                        <li><p class="font-weight-bold">eSewa ID: <strong>9841234567</strong> </p></li>
                      <li><p class="font-weight-bold">Address: <strong>Tridevi Sadak, Kathmandu</strong> </p></li>
                        <li><p class="font-weight-bold">Email: <strong>info@rn_nepal.com</strong> </p></li>
                        <li><p class="font-weight-bold">Secondary Email: <strong>pubg@rnnepal.com></strong></p></li>
                  </ul>
                    </div> 
                    <div class="googlemap pt-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.1066608902606!2d85.31154171422118!3d27.713992882789203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19385256b6e1%3A0xb883a32039a36a07!2sRock%20Nation%20Nepal%20Pvt.Ltd!5e0!3m2!1sen!2snp!4v1606933331018!5m2!1sen!2snp" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
