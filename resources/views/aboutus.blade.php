<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tuk-Tuk Tour</title>
    <link rel="icon" type="image/png" href="{{asset('img/logo_web.png')}}" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.link')
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/jquery.timepicker.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/icomoon.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Chela+One&display=swap" rel="stylesheet">
    <style>
      .c4-izmir {
        --primary-color: #2b5876;  
        --secondary-color: #4e4376;
        --transition-duration: 500ms;
        --border-width: 6px;
        --overlay-opacity: .5;
        overflow: visible;
        height: 300px;
        width: 280px;
        cursor: pointer;
        border-radius: 10px;
        transform: scale(1.25);
        margin-bottom: 20px;
      }
      #mon{
        --primary-color: #cc2b5e;
        --secondary-color: #753a88;
      }
      #dan{
        --primary-color: #bdc3c7 ;
        --secondary-color: #2c3e50;
      }
      #nes{
        --primary-color: #ee9ca7;
        --secondary-color: #ffdde1;
      }
      #riz{
        --primary-color: #000428;
        --secondary-color: #004e92;
      }
      #els{
        --primary-color: #eecda3;
        --secondary-color: #ef629f;
      }
      #onai{
        --primary-color: #43cea2;
        --secondary-color: #185a9d;
      }
      .c4-izmir img{
      border-radius: 10px;
      box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
      /* transform: scale(1.25); */
      }
      .c4-izmir:hover img{
        transform: scale(1.25);
      }
      .c4-izmir:hover {
        transform: scale(1.25);
      }
      .c4-izmir:hover h4{
        display: none;
      }
      @font-face {
            font-family: fontku;
            src: url('dafont/ChocoladineDemo.ttf');
        }
        h5 a{
          color: white;
          font-size: 30px
        }
      .wor{
        position: absolute;
        margin-left: 200px;
        font-family: 'Chela One', cursive;
        font-size: 50px;
        text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.7);
        overflow: visible;
      }
    </style>
  
  </head>
  <body>

    @include('layouts.header')

    <div class="hero-wrap" style="background-image: url('img/aboutus2.jpg'); background-size: cover; background-position: center center;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
            <div class="text">
              <p class="breadcrumbs mb-2">
                <span class="mr-2"><a href="/">Home</a></span> <span>About Us</span>
              </p>
              <h1 class="bread" style="margin-bottom: 450px; font-size: 80px">About Us</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <br>
    <h1 class="text-center">Our Team</h1><br>
    <center>
    <div class="row container">
      <div class="col-md-12 container"><center>
        <figure class="c4-izmir c4-border-cc-1 c4-gradient-top animate__animated animate__flipInY animate__delay-1s">
          <img src="img/aboutus/wordyka.jpg" alt="Sample Image">
          <h4 class="wor2">Wordyka</h4>
          <figcaption>
            <div class="c4-rotate-down-right c4-delay-200">
              <h5>
                Wordyka Y Nainggolan
              </h5>
            </div>
            <div class="c4-fade-left c4-delay-600">
              <h5>
                11420041
              </h5>
            </div>
              <div class="c4-fade-right c4-delay-800">
              <h5>
                <a href="mailto:wordykanainggolan1212@gmail.com"><i class="far fa-envelope"></i></a>&nbsp; <a href="https://api.whatsapp.com/send?phone=6282283750861"><i class="fab fa-whatsapp"></i></a>&nbsp; <a href="https://www.instagram.com/wordykayn_/"><i class="fab fa-instagram"></i></a>
              </h5>
            </div>
          </figure>
        <h4 class="pb-5 text-dark mt-5">Project Manager</h4>
          </center>
            </div>
      </div>

          <div class="row">
            <div class="col-md-4">
              <center>
                <figure id="mon" class="c4-izmir c4-gradient-bottom c4-border-center animate__animated animate__flipInY animate__delay-1s">
                  <img src="img/aboutus/simon.jpg" alt="Sample Image" size="100px">
                  <h4 class="wor">Simon</h4>
                  <figcaption>
                    <div class="c4-rotate-down-right c4-delay-200">
                      <h5>
                        Simon Siahaan
                      </h5>
                    </div>
                    <div class="c4-fade-left c4-delay-600">
                      <h5>
                        11420049
                      </h5>
                    </div>
                      <div class="c4-fade-right c4-delay-800">
                      <h5>
                        <a href="mailto:simon061901@gmail.com"><i class="far fa-envelope"></i></a>&nbsp; <a href="https://api.whatsapp.com/send?phone=6281382074016"><i class="fab fa-whatsapp"></i></a>&nbsp; <a href="https://www.instagram.com/Simon.celi11/"><i class="fab fa-instagram"></i></a>
                      </h5>
                    </div>
                  </figure>
                <h4 class="pb-5 text-dark mt-5">System Analysis</h4>
                  </center>
            </div>

            <div class="col-md-4">
              <center>
                <figure id="dan" class="c4-izmir c4-gradient-right c4-border-corners-2 animate__animated animate__flipInY animate__delay-1s">
                  <img src="img/aboutus/daniel.jpg" alt="Sample Image">
                  <h4 class="wor" id="">Daniel</h4>
                  <figcaption>
                    <div class="c4-rotate-down-right c4-delay-200">
                      <h5>
                        Daniel Pasaribu
                      </h5>
                    </div>
                    <div class="c4-fade-left c4-delay-600">
                      <h5>
                        11420045
                      </h5>
                    </div>
                      <div class="c4-fade-right c4-delay-800">
                      <h5>
                        <a href="mailto:xdanielpasaribu@gmail.com"><i class="far fa-envelope"></i></a>&nbsp; <a href="https://api.whatsapp.com/send?phone=6282267507396"><i class="fab fa-whatsapp"></i></a>&nbsp; <a href="https://www.instagram.com/daniel_exaudi/"><i class="fab fa-instagram"></i></a>
                      </h5>
                    </div>
                  </figure>
                <h4 class="pb-5 text-dark mt-5">System Analysis</h4>
                  </center>
            </div>

            <div class="col-md-4">
              <center>
                <figure id="nes" class="c4-izmir c4-gradient-top-left c4-border-ccc-2 animate__animated animate__flipInY animate__delay-1s ">
                  <img src="img/aboutus/agnes.jpg" alt="Sample Image">
                  <h4 class="wor" id="">Agnes</h4>
                  <figcaption>
                    <div class="c4-rotate-down-right c4-delay-200">
                      <h5>
                        Agnes Naibaho
                      </h5>
                    </div>
                    <div class="c4-fade-left c4-delay-600">
                      <h5>
                        11420030
                      </h5>
                    </div>
                      <div class="c4-fade-right c4-delay-800">
                      <h5>
                        <a href="mailto:agnesfenirosalinanaibaho@gmail.com"><i class="far fa-envelope"></i></a>&nbsp; <a href="https://api.whatsapp.com/send?phone=6282172762595"><i class="fab fa-whatsapp"></i></a>&nbsp; <a href="https://www.instagram.com/agnes.fenny/"><i class="fab fa-instagram"></i></a>
                      </h5>
                    </div>
                  </figure>
                <h4 class="pb-5 text-dark mt-5">Technical Writer</h4>
                  </center>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
              <center>
                <figure id="riz" class="c4-izmir  c4-gradient-bottom-right c4-border-ccc-3 animate__animated animate__flipInY animate__delay-1s">
                  <img src="img/aboutus/rizki.jpg" alt="Sample Image">
                  <h4 class="wor" id="">Rizki</h4>
                  <figcaption>
                    <div class="c4-rotate-down-right c4-delay-200">
                      <h5>
                        Rizki Okto S
                      </h5>
                    </div>
                    <div class="c4-fade-left c4-delay-600">
                      <h5>
                        11420033
                      </h5>
                    </div>
                      <div class="c4-fade-right c4-delay-800">
                      <h5>
                        <a class="disabled" href="mailto:kikingar.567@gmail.com"><i class="far fa-envelope"></i></a>&nbsp; <a href="https://api.whatsapp.com/send?phone=628976832824"><i class="fab fa-whatsapp"></i></a>&nbsp;
                      </h5>
                    </div>
                  </figure>
                <h4 class="pb-5 text-dark mt-5">Programmer</h4>
                  </center>
            </div>

            <div class="col-md-4">
              <center>
                <figure id="els" class="c4-izmir c4-gradient-bottom-left c4-border-bottom-right animate__animated animate__flipInY animate__delay-1s">
                  <img src="img/aboutus/elsha.jpg" alt="Sample Image">
                  <h4 class="wor" id="">Elsha</h4>
                  <figcaption>
                    <div class="c4-rotate-down-right c4-delay-200">
                      <h5>
                        Elsha Sitorus
                      </h5>
                    </div>
                    <div class="c4-fade-left c4-delay-600">
                      <h5>
                        11420056
                      </h5>
                    </div>
                      <div class="c4-fade-right c4-delay-800">
                      <h5>
                        <a href="mailto:sitoruse710@gmail.com"><i class="far fa-envelope"></i></a>&nbsp; <a href="https://api.whatsapp.com/send?phone=6282167371510"><i class="fab fa-whatsapp"></i></a>&nbsp; <a href="https://www.instagram.com/ecchatps_/"><i class="fab fa-instagram"></i></a>
                      </h5>
                    </div>
                  </figure>
                <h4 class="pb-5 text-dark mt-5">Designer</h4>
                  </center>
            </div>

            <div class="col-md-4">
              <center>
                <figure id="onai" class="c4-izmir c4-gradient-top c4-border-left animate__animated animate__flipInY animate__delay-1s">
                <img src="img/aboutus/onai.jpg" alt="Sample Image">
                <h4 class="wor" id="">Onai</h4>
                <figcaption>
                  <div class="c4-rotate-down-right c4-delay-200">
                    <h5>
                      Onai Nadapdap
                    </h5>
                  </div>
                  <div class="c4-fade-left c4-delay-600">
                    <h5>
                      11420047
                    </h5>
                  </div>
                <div class="c4-fade-right c4-delay-800">
                  <h5>
                    <a href="mailto:nadapdaponai21@gmail.com"><i class="far fa-envelope"></i></a>&nbsp; <a href="https://api.whatsapp.com/send?phone=6285156870284"><i class="fab fa-whatsapp"></i></a>&nbsp;
                  </h5>
                </div>
               </figure>
                <h4 class="pb-5 text-dark mt-5">Tester</h4>
              </center>
            </div>
          </div>
    <br><br>
    </div>
  </div>
  </center>
    
    @include('layouts.footer')

    @include('layouts.log&reg')
    
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
      </svg>
    </div>

    <style>
      .c4-izmir {
        --primary-color: #2b5876;  
        --secondary-color: #4e4376;
        --transition-duration: 500ms;
        --border-width: 6px;
        --overlay-opacity: .5;
        overflow: visible;
        height: 300px;
        width: 280px;
        cursor: pointer;
        border-radius: 10px;
        transform: scale(1.25);
        margin-bottom: 20px;
      }
      #mon{
        --primary-color: #cc2b5e;
        --secondary-color: #753a88;
      }
      #dan{
        --primary-color: #bdc3c7 ;
        --secondary-color: #2c3e50;
      }
      #nes{
        --primary-color: #ee9ca7;
        --secondary-color: #ffdde1;
      }
      #riz{
        --primary-color: #000428;
        --secondary-color: #004e92;
      }
      #els{
        --primary-color: #eecda3;
        --secondary-color: #ef629f;
      }
      #onai{
        --primary-color: #43cea2;
        --secondary-color: #185a9d;
      }
      .c4-izmir img{
      border-radius: 10px;
      box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;
      /* transform: scale(1.25); */
      }
      .c4-izmir:hover img{
        transform: scale(1.25);
      }
      .c4-izmir:hover {
        transform: scale(1.25);
      }
      .c4-izmir:hover h4{
        display: none;
      }
      @font-face {
            font-family: fontku;
            src: url('dafont/ChocoladineDemo.ttf');
        }
        h5 a{
          color: white;
          font-size: 30px
        }
      .wor{
        position: absolute;
        margin-left: 200px;
        font-family: 'Chela One', cursive;
        font-size: 30px;
        text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.7);
        overflow: visible;
      }
      .wor2{
        position: absolute;
        margin-left: 175px;
        font-family: 'Chela One', cursive;
        font-size: 30px;
        text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.7);
        overflow: visible;
      }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/replyform.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
