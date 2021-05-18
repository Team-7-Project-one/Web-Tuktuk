<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tuk-Tuk Tour</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/jquery.timepicker.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/icomoon.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Tuktuk<span>Tour</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation"><span class="oi oi-menu"></span> Menu</button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="/hotel" class="nav-link">Hotel</a></li>
            <li class="nav-item"><a href="/souvenir" class="nav-link">Souvenir</a></li>
            <li class="nav-item"><a href="/event" class="nav-link">Event</a></li>
            <li class="nav-item"><a href="/about" class="nav-link">About Us</a></li>
            <li class="nav-item">
            @if(Auth::user())
              <a href="" class="nav-link"><i class="fas fa-user"></i>&nbsp;{{Auth::user()->name}}
            @else
              <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link"><i class="fas fa-user"></i>&nbsp;Login
            @endif
          </a></li>
          @if (Auth::user())
          <li class="nav-item fw-bold">
            <a class="badge bg-danger nav-link" style="margin-left: px;" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
          </a>
          </li>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>
          @endif
            {{-- <li class="nav-item">
              <div class="btn-group nav-link text-dark">
                <!-- <i class="far fa-user-circle fw-bold " style="font-size: 30px; color: #F9E79F;" data-bs-toggle="dropdown"></i>
                <button type="button" style="border: none; font-size: 20px" class="btn btn-light btn-sm dropdown-toggle bg-transparent text-dark fw-bold" data-bs-toggle="dropdown" aria-expanded="false"></button> -->
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
              </div>
            </li> --}}
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    <div class="hero">
      <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(img/carousel2.jpg)">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-end">
              <div class="col-md-6 ftco-animate">
                <div class="text">
                  <h2 >Tuktuk Tour Website</h2>
                  <h1 class="mb-3">Horas <br><br>
                    Welcome To Tuktuk Tour Website
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="slider-item" style="background-image: url(img/carousel1.jpg)">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-end">
              <div class="col-md-6 ftco-animate">
                <div class="text">
                  <h2>Tuk-Tuk Tour Website</h2>
                  <h1 class="mb-3">It's feels like staying in your own home</h1>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="slider-item" style="background-image: url(img/carousel3.jpg)">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-end">
              <div class="col-md-6 ftco-animate">
                <div class="text">
                  <h2>Tuk-Tuk Tour Website</h2>
                  <h1 class="mb-3">It has beautiful scenery and charming sight</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Welcome to Tuk-tuk</span>
            <h2 style="font-size: -webkit-calc(100% + 30px);" class="mb-4">You'll Never Want To Leave</h2>
          </div>
        </div>
        <div  class="row d-flex">
          <div class="col-md pr-md-1 d-flex align-self-stretch ftco-animate">
            <div id="undercar"  class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="flaticon-reception-bell"></span>
                </div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Good Service</h3>
                <h2 id="check"><i class="fas fa-check-circle text-light"></i></h2>
              </div>
            </div>
          </div>
          <div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
            <div id="undercar"  class="media block-6 services active py-4 d-block text-center">
              <div  class="d-flex justify-content-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="flaticon-serving-dish"></span>
                </div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Culinary Tour</h3>
                <h2 id="check"><i class="fas fa-check-circle text-light"></i></h2>
              </div>
            </div>
          </div>
          <div class="col-md px-md-1 d-flex align-sel Searchf-stretch ftco-animate">
            <div id="undercar"  class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="flaticon-car"></span>
                </div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Easy to Access</h3>
                <h2 id="check"><i class="fas fa-check-circle text-light"></i></h2>
              </div>
            </div>
          </div>
          <div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
            <div id="undercar"  class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="flaticon-spa"></span>
                </div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Facilities</h3>
                <h2 id="check"><i class="fas fa-check-circle text-light"></i></h2>
              </div>
            </div>
          </div>
          <div class="col-md pl-md-1 d-flex align-self-stretch ftco-animate">
            <div id="undercar"  class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="ion-ios-bed"></span>
                </div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Hotel & Restaurant</h3>
                <h2 id="check"><i class="fas fa-check-circle text-light"></i></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section class="ftco-section justify-content-center ftco-wrap-about ftco-no-pt ftco-no-pb">
      <div class="col-md-12  heading-section text-center ftco-animate">
        <span class="subheading">Welcome to Tuk-tuk</span>
        <h2 class="mb-4" style="font-size: -webkit-calc(100% + 30px);">About</h2>
      </div>
      <div class="container">
        <p style="text-align: center">
        Tuk Tuk is an area that full of exotic landscapes. From this place anyway, you can enjoy the beauty of Lake Toba that is so magical. The place is become the center of tourists who want to spend the night in Samosir. There are numbers of hotels and villas that can be your best deal to stay. There are also several coffee shop that provide internet facilities for your business important. As a tourist destination village, in addition to its natural scenery, Tuk Tuk is also known for rich Batak culture. Therefore, when you took a visit to Tuk Tuk, you do not need to worry because there are plenty of attractions that will make your vacation more memorable.
        </p>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ECF0F1"
          fill-opacity="1"
          d="M0,256L34.3,234.7C68.6,213,137,171,206,154.7C274.3,139,343,149,411,160C480,171,549,181,617,197.3C685.7,213,754,235,823,224C891.4,213,960,171,1029,170.7C1097.1,171,1166,213,1234,224C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
      <div style="background-color: #ecf0f1">
        <div class="container">
          <div class="row no-gutters">
            <div class="col-md-5 order-md-last d-flex">
              <!-- <div class="img img-1 mr-md-2 ftco-animate" style="background-image: url(img/rap.png); widh: 100px"></div> -->
              <img src="img/rap.png" alt="" />
              <!-- <div class="img img-2 ml-md-2 ftco-animate" style="background-image: url(images/about-2.jpg)"></div> -->
            </div>
            <div class="col-md-7 wrap-about pb-md-3 ftco-animate pr-md-5 pb-md-5 pt-md-4">
              <div class="heading-section mb-4 my-5 my-md-0">
                <span class="subheading">About Tuk-tuk Siadong</span>
                <h2 class="mb-4" style="font-size: -webkit-calc(100% + 30px);">Governance</h2>
              </div>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <p><a href="#" class="btn btn-secondary rounded">More</a></p>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ECF0F1" fill-opacity="1" d="M0,96L48,117.3C96,139,192,181,288,181.3C384,181,480,139,576,106.7C672,75,768,53,864,58.7C960,64,1056,96,1152,117.3C1248,139,1344,149,1392,154.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    </section>

    <section class="testimony-section" style="margin-top: -150px; font-weight: bold">
      <div class="container">
        <div class="row no-gutters ftco-animate justify-content-center">
          <!-- <div class="col-md-5 d-flex">
            <div class="testimony-img aside-stretch-2" style="background-image: url(images/testimony-img.jpg)"></div>
          </div> -->
          <div class="col-md-12 py-5 pl-md-7">            
            <div id="testimony"class="py-md-10" style="margin-top: -15px">
              <div class="heading-section ftco-animate mb-4" >
              <h2 class="mb-0 text-center" style="font-size: -webkit-calc(100% + 30px);">History</h2>
                <span class="subheading">About TUK-TUK Siadong</span>
                <h2 class="mb-0">Samosir, Sumatera Utara</h2>
              </div>
              <div class="carousel-testimony owl-carousel ftco-animate p-5">
                <div class="card p-3">
                  <div class="row ">
                    <div class="col-md-6">
                      <img class="border border-dark" src="img/samosir2.jpg" alt="" />
                    </div>
                    <div class="col-md-6"><br>
                      <h3 class="text-dark container">History and Origins</h3>
                     <p style="text-align:justify;" class="container">Toba people (also referred to as Batak Toba people or often simply "Batak") are the most numerous of the Batak people of North Sumatra, Indonesia, and often considered the classical 'Batak', most likely to willingly self-identify as Batak. The Toba people are ...</p>
                      <button type="button" id="carbut" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal1">More Details</button>
                    </div>

                  </div>
                </div>
                <div class="card p-3">
                  <div class="row ">
                    <div class="col-md-6">
                      <img class="border border-warning" src="img/kkultur.jpg" alt="" />
                    </div>
                    <div class="col-md-6"><br>
                      <h3 class="text-warning container">Culture</h3>
                     <p style="text-align:justify;" class="container">The Toba people practices a distinct culture. It is not a must for Toba people to live in Toba region, although their origin is from Toba. Just as it is with other ethnicities, the Toba people have also migrated to other places to look for better life. For example, majority of the Silindung natives are ....</p>
                      <button  type="button" id="carbut" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModal2">More Details</button>
                    </div>
                  </div>
                </div>
                <div class="card p-3">
                  <div class="row ">
                    <div class="col-md-6">
                      <img class="border border-danger" src="img/pemkab.jpg" alt="" />
                    </div>
                    <div class="col-md-6"><br>
                      <h3 class="text-danger container">District</h3>
                     <p style="text-align:justify;" class="container">Samosir, or Samosir Island, is a large volcanic island in Lake Toba, located in the north of the island of Sumatra in Indonesia. Administratively, Samosir Island is governed as six of the nine districts within Samosir Regency. Samosir is a popular tourist destination due to its exotic history and the vistas it offers. The tourist resorts are concentrated in the Tuktuk area.</p>
                      <a target="_blank" href="https://samosirkab.go.id/" id="carbut" class="btn btn-outline-danger">More Details</a>
                    </div>
                  </div>
                </div>
                <div class="card p-3">
                  <div class="row ">
                    <div class="col-md-6">
                      <img class="border border-primary" src="img/toba.jpg" alt="" />
                    </div>
                    <div class="col-md-6"><br>
                      <h3 style="color: #3498DB;" class="container">Lake Toba</h3>
                     <p style="text-align:justify;" class="container">Lake Toba (Indonesian: Danau Toba) is a large natural lake in North Sumatra, Indonesia, occupying the caldera of a supervolcano. The lake is located in the middle of the northern part of the island of Sumatra. The Origin of Lake Toba is a folk story about the lake, in which once upon a time, there was a fisherman who caught a golden fish. Samosir Island is believed to be the golden fish's son.</p>
                      <button id="carbut" class="btn btn-outline-primary">More Details</button>
                    </div>
                  </div>
                </div>
                <div class="card p-3">
                  <div class="row ">
                    <div class="col-md-6">
                      <img class="border border-success" src="img/alam.jpg" alt="" />
                    </div>
                    <div class="col-md-6"><br>
                      <h3 class="text-success container">Nature</h3>
                     <p style="text-align:justify;" class="container">Tuk Tuk is an area that full of exotic landscapes. From this place anyway, you can enjoy the beauty of Lake Toba that is so magical. The place is become the center of tourists who want to spend the night in Samosir. There are numbers of hotels and villas that can be your best deal to stay. There are also several coffee shop that provide internet facilities for your business important. As a tourist destination village, in addition to its natural scenery, Tuk Tuk is also known for rich Batak culture. Therefore, when you took a visit to Tuk Tuk, you do not need to worry because there are plenty of attractions that will make your vacation more memorable.</p>
                      <button id="carbut" class="btn btn-outline-success">More Details</button>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

     <!-- Modal -->
     <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <center><h3 class="modal-title fw-bold" id="exampleModalLabel">History and Origins</h3></center>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body row mx-3">
            <p style="text-align:justify">Toba people (also referred to as Batak Toba people or often simply "Batak") are the most numerous of the Batak people of North Sumatra, Indonesia, and often considered the classical 'Batak', most likely to willingly self-identify as Batak. The Toba people are found in Toba Samosir Regency, Humbang Hasundutan Regency, Samosir Regency, North Tapanuli Regency, part of Dairi Regency, Central Tapanuli Regency, Sibolga and its surrounding regions. The Batak Toba people speak in the Toba Batak language and are centered on Lake Toba and Samosir Island within the lake. Batak Toba people frequently build in traditional Batak architecture styles which are common on Samosir. Cultural demonstrations, performances and festivities such as Sigale Gale are often held for tourists.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

     <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <center><h3 class="modal-title fw-bold text-center" id="exampleModalLabel">History and Origins</h3></center>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body row mx-3">
          <p style="text-align:justify">The Toba people practices a distinct culture. It is not a must for Toba people to live in Toba region, although their origin is from Toba. Just as it is with other ethnicities, the Toba people have also migrated to other places to look for better life. For example, majority of the Silindung natives are the Hutabarat, Panggabean, Simorangkir, Hutagalung, Hutapea and Lumbantobing clans. Instead all those six clans are actually descendants of Guru Mangaloksa, one of Raja Hasibuan's sons from Toba region. So it is with the Nasution clan where most of them live in Padangsidimpuan, surely share a common ancestor with their relative, the Siahaan clan in Balige. It is certain that the Toba people as a distinct culture can be found beyond the boundaries of their geographical origins. The region of Toba, known as "the king of Batak" is precisely Sianjur village situated on the slopes of Mount Pusuk Buhit, about 45 minutes drive from Pangururan, the capital of Samosir Regency today.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

<br><br>

    <section><center>
      <div class="heading-section mb-4 my-5 my-md-0">
        <span class="subheading">About Tuk-tuk Siadong</span>
        <h2 class="mb-4" style="font-size: -webkit-calc(100% + 30px);">Location</h2>
      </div>
      <div class=" container location row">
        <div class="col-md-5">
          <p style="text-align:justify">Tuktuk Siadong is located between the villages of Ambarita and Tomok... </p>
        </div>
        <div class="col-md-7">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16481.696988169602!2d98.84488082822975!3d2.6664429689172593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031ea1e1cfd2cf3%3A0xc7a6307559b9f4d3!2sTuktuk%20Siadong%2C%20Simanindo%2C%20Kabupaten%20Samosir%2C%20Sumatera%20Utara%2C%20Indonesia!5e1!3m2!1sid!2sus!4v1618405352690!5m2!1sid!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div></center>
    </section><br><br>

    <footer class="ftco-footer ftco-section img" style="background-image: url(images/bg_4.jpg)">
      <div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Harbor Lights</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate">
                  <a href="#"><span class="icon-twitter"></span></a>
                </li>
                <li class="ftco-animate">
                  <a href="#"><span class="icon-facebook"></span></a>
                </li>
                <li class="ftco-animate">
                  <a href="#"><span class="icon-instagram"></span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Useful Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Rooms</a></li>
                <li><a href="#" class="py-2 d-block">Amenities</a></li>
                <li><a href="#" class="py-2 d-block">Gift Card</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Privacy</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Career</a></li>
                <li><a href="#" class="py-2 d-block">About Us</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                  <li>
                    <a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a>
                  </li>
                  <li>
                    <a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              Kelompok PA 1 | made with <i class="icon-heart color-danger" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank"></a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
      </svg>
    </div>

    
    <!-- Modal login-->
    <div class="modal fade" style="background-image: url(/img/login.jpg); height: 100%;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog ">
        <div class="modal-content" style="border: none; border-radius: 20px; background-color: rgba(255, 255, 255, 0.15); backdrop-filter: blur(5px); box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;">
          <div class="modal-body text-light">
            <center><br>
              <h3 class="fw-bold text-light"><i class="fas fa-user-alt"></i> LOGIN</h3>
            </center>
            <form method="POST" action="{{ route('login') }}" class="container">
              @csrf
              <label for="">{{ __('E-Mail') }}</label>
              <input id="loginput" type="email" style="background-color: transparent;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukkan Email anda ...."  />
              @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
              <br />
              <label for="">Password</label>
              <input id="loginput" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Masukkan Password anda ...." />
              @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
              <br />
              <center>
                 <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
                          <label class="form-check-label" for="remember">
                              {{ __('Remember Me') }}
                          </label><br><br>
                        <button type="submit" id="login" class="btn fw-bold p-2 rounded-pill">
                          {{ __('Login') }}
                      </button><br>
            
                      @if (Route::has('password.request'))
                          <a class="btn btn-link" href="{{ route('password.request') }}">
                              {{ __('Forgot Your Password?') }}
                          </a>
                      @endif
                <p>Don't have account? <a href="" class="" {{--style="text-decoration: none"--}} data-bs-toggle="modal" data-bs-target="#registerModal">Register here</a></p>
                <p>OR</p>
                <button id="gogle" class="btn btn"><i class="fab fa-google-plus-g"></i></button>
                <button id="fb" class="btn btn"><i class="fab fa-facebook-f"></i></button>
              </center>
            </form>
            <br />
          </div>
        </div>
      </div>
    </div>

     <!-- Modal registrasi-->
     <div class="modal fade" style="background-image: url(/img/login.jpg); height: 100%;" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog ">
        <div class="modal-content" style="border: none; border-radius: 20px; background-color: rgba(255, 255, 255, 0.15); backdrop-filter: blur(5px); box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;">
          <div class="modal-body text-light">
            <center><br>
              <h3 class="fw-bold text-light"><i class="fas fa-registered"></i> REGISTER</h3>
            </center>
            <form action="{{ route('register') }}" method="POST" class="container">
              @csrf
              <label for="">Nama</label>
              <input id="loginput" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Masukkan Nama anda ...." />
              @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
              <br />
              <label for="">Email</label>
              <input id="loginput" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukkan Email anda ...." />
              @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
              <br />
              <label for="">Password</label>
              <input id="loginput" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Masukkan Password anda ...." /><br />
              @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
              <label for="">Confirm Password</label>
              <input id="loginput" {{--id="password-confirm"--}} type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"/>
              <br />
              <center>
                <button id="register" class="btn fw-bold p-2 rounded-pill">Register</button><br /><br>
              </center>
            </form>

            <br><br>
            <br />
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
