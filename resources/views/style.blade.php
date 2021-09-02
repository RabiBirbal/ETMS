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

        @foreach($homepage as $data)
        <style type="text/css">
            body{
                background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('{{asset('upload/images/'.$data->background_img)}}');
                background-size: 100%, 100%;
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
            }
            
            .parallax{
                background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('{{asset('upload/images/'.$data->parallax_img)}}');
                background-size: cover;
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                height: 500px;
            }
            .parallax1{
                background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('{{asset('upload/images/'.$data->background_img)}}');
                background-size: cover;
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                height: 600px;
            }
            @endforeach
        </style>