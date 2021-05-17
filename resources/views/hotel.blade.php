<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Harborlights - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/icomoon.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
    
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">TukTuk<span>Tour</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation"><span class="oi oi-menu"></span> Menu</button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item active"><a href="/hotel" class="nav-link">Hotel</a></li>
            <li class="nav-item"><a href="/souvenir" class="nav-link">Souvenir</a></li>
            <li class="nav-item"><a href="/event" class="nav-link">Event</a></li>
            <li class="nav-item"><a href="/about" class="nav-link">About Us</a></li>
            <li class="nav-item"><a href="" class="nav-link"> @if(Auth::user())
              <i class="fas fa-user"></i> {{Auth::user()->name}}
            @else
              <i class="fas fa-user"></i>
            @endif
          </a></li>
          @if (Auth::user())
          <li class="nav-item fw-bold">
            <a class="text-danger nav-link" style="margin-left: px;" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
          </a>
          </li>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>
          @endif
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    <div class="hero-wrap" style="background-image: url('img/hotel/carolina4.jpg'); background-size: 100%">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
            <div class="text">
              <p class="breadcrumbs mb-2">
                <span class="mr-2"><a href="index.html">Home</a></span> <span>Hotel</span>
              </p>
              <h1 class="bread" style="margin-bottom: 450px; font-size: 80px">Hotel</h1>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section">
      <div class="container">
        <center>
          <div class="searchotel col-md-10">
            <form class="d-flex">
              <input name="keyword" class="form-control me-2"  placeholder="Temukan Souvenir Anda Disini ..." aria-label="Search" value{{Request::get('keyword')}} />&nbsp;
              <button id="cari" class="btn btn-outline-warning rounded-circle" style="width: 55px ;" type="submit"><i class="fas fa-search"></i></button>
            </form>
          </div>
        </center>
        <br />
        <center><h1 class="ftco-animate">List Hotel</h1></center>
        <br />
        <div class="row d-flex">
          @foreach ($data as $item)
          <div class="hotel-list col-md-4 d-flex ftco-animate container">
            <div class="blog-entry align-self-stretch">
            <center>
            <a href="img/hotel/{{ $item->gambar1 }}" class="insta-img image-popup" style="background-image: url(images/insta-1.jpg);">
              <p class="block-20 rounded container" style="background-image: url('img/hotel/{{ $item->gambar1 }}')"> </p>
            </a>
          </center>
              <div class="text mt-3">
                <div class="meta mb-2">
                </div>
                <h3 class="heading">{{ $item->nama_hotel }}</h3>
                <p class="hotel-title-list container"><i class="fas fa-map-marker-alt text-danger"></i>&nbsp;{{ $item->lokasi }}</p>
                <p class="container" style="text-align = justify">{{ $item->deskripsi }}</p>
                <a href="#" class="btn btn-outline-primary" style="font-weight: bold;" data-bs-toggle="modal" data-bs-target="#abc{{ $item['id'] }}">More info</a>
              </div>
            </div>
          </div>    
          @endforeach
        </div>
      </div>
    </section>

  
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
              <input id="email" type="email" style="background-color: transparent;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukkan Email anda ...."  />
              @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
              <br />
              <label for="">Password</label>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Masukkan Password anda ...." />
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
            {{-- <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
            
                  <div class="col-md-6">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
            
              <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
            
                  <div class="col-md-6">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
            
              <div class="form-group row">
                  <div class="col-md-6 offset-md-4">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
                          <label class="form-check-label" for="remember">
                              {{ __('Remember Me') }}
                          </label>
                      </div>
                  </div>
              </div>
            
              <div class="form-group row mb-0">
                  <div class="col-md-8 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          {{ __('Login') }}
                      </button>
            
                      @if (Route::has('password.request'))
                          <a class="btn btn-link" href="{{ route('password.request') }}">
                              {{ __('Forgot Your Password?') }}
                          </a>
                      @endif
                  </div>
              </div>
            </form>
             --}}
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
            <form action="" class="container">
              <label for="">Nama</label>
              <input id="loginput" style="background: transparent;" class="form-control rounded-pill text-light" type="text" placeholder="Masukkan Nama anda ...." /><br />
              <label for="">Email</label>
              <input type="email" id="loginput" style="background: transparent;" class="form-control rounded-pill text-light" type="text" placeholder="Masukkan Email anda ...." /><br />
              <label for="">Username</label>
              <input id="loginput" style="background: transparent;" class="form-control rounded-pill text-light" type="text" placeholder="Masukkan Username anda ...." /><br />
              <label for="">Password</label>
              <input id="loginput" class="form-control rounded-pill text-light" type="password" placeholder="Masukkan Password anda ...." />
              <br />
              <center>
                <button id="register" class="btn fw-bold p-2 rounded-pill" ">Register</button><br /><br>

              </center>
            </form>
            <br />
          </div>
        </div>
      </div>
    </div>
    
    <center>
      <!-- <div class="paglink item rounded-3 fs-6">
        &nbsp;Menampilkan
        {{ $data->firstItem() }}
        -
        {{ $data->lastItem() }}
        dari
        {{ $data->total() }}
        entri data
    </div> -->
    <div class="pagination paglink2 mt-3 justify-content-center ">
        {{ $data->links() }}
    </div>
  </center>

  <style>
    .paglink{
      margin-top: -40px;
    }
    .paglink2{
      margin-bottom: 30px;
    }
    .w-5{
      width: 20px;
    }
    .text-sm{
      margin-top: 10px;
    }
    </style>

    <section class="komentar">
      <br />
      <div class="comment container">
        <h1 class="text-center">Comment & Suggestions</h1>
        <br />
        <div class="container col-md-10" id="inform">
          <form action="" method="GET">
            <div class="row">
              <div class="col-md-3"><center>
                <p id="userimg" class="mt-3 fw-bold"> <img src="img/user.png" style="width: 35px; height: 35px" alt="" /></i> &nbsp;Rizki Okto S</p>
              </center>
              </div>
              <div class="col-md-9 mt-2">
                <textarea type="text" class="form-control" placeholder="Tuliskan Pesan Anda Disini...."></textarea>
                <div class="button">
                  <button  id="kirim" class="btn btn-success mt-1" @if (Auth::user())
                      type="submit"
                  @else
                    data-bs-toggle="modal" data-bs-target="#exampleModal" type="button"
                  @endif>Kirim</button>
                  <button type="reset" id="reset" class="btn btn-danger mt-1">Reset</button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="user-comment container col-md-10">
          <div class="message row container">
            <div class="col-md-8">
              <br />
              <p id="userimg"><img src="img/user.png" class="rounded-circle" style="width: 30px; height: 30px" alt="" /> Rizki Okto S</p>
            </div>
            <div class="container">
              <p id="usercomment">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate totam accusantium aliquam dolore cum nemo sit consequatur, magni nesciunt doloremque a fugit dicta laudantium sapiente fuga alias repellat repudiandae sequi!
              </p>
              <div class="replyform">
                <form action="" method="">
                  <textarea type="text" class="form-control" placeholder="Tuliskan Pesan Anda Disini...."></textarea>
                  <div class="button">
                    <button type="button" id="balas" class="btn btn-primary mt-1 btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Balas</button>
                    <button type="reset" id="reset" class="btn btn-warning mt-1 btn-sm">Reset</button>
                  </div>
                </form>
              </div>
              <h6 id="reply-message" class="container text-secondary btn btn"><i class="fas fa-reply-all"></i> Balas</h6>
              <div class="container" style="margin-top: -10px;">
                <h6 class="container"><img src="img/user.png" style="width: 25px; height: 25px" alt="" /> Wordyka Nainggolan</h6>
                <p id="replyuser" class="ml-4">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate totam accusantium aliquam dolore cum nemo sit consequatur, magni nesciunt doloremque a fugit dicta laudantium sapiente fuga alias repellat repudiandae
                  sequi!
                </p>
              </div>
            </div>
          </div>
          <br />
        </div>
        <br />
      </div>
      <br /><br />
    </section>

@foreach ($data as $item)  
<!-- Modal hotel -->
<div class="modal fade" id="abc{{ $item['id'] }}"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <center><h1 id="hotel-info-title" class="">Description</h1></center><br>
        <div class="row container">
        
          <div class="container">
            <b class="hotel-name">{{ $item['nama_hotel'] }}</b>
            <section class="home-slider owl-carousel mt-3">
              <div class="slider-item" style="background-image: url(img/hotel/{{ $item['gambar1'] }}); border-radius: 10px;"></div>
              <div class="slider-item" style="background-image: url(img/hotel/{{ $item['gambar2'] }}); border-radius: 10px;"></div>
              <div class="slider-item" style="background-image: url(img/hotel/{{ $item['gambar3'] }}); border-radius: 10px;"></div>
            </section>
          </div>
            
          <div class="container">
            <table class="table mt-4">
              <tr>
                <td class="w-25"><i class="fas fa-map-marker-alt text-danger"></i>&nbsp;Location</td>
                <td>:</td>
                <td>{{ $item['lokasi'] }}</td>
              </tr>
              <tr>
                <td><i class="fas fa-star text-warning"></i>&nbsp;Rating</td>
                <td>:</td>
                <td>{{ $item['rating'] }}</td>
              </tr>
              <tr>
                <td><i class="fas fa-bed"></i>&nbsp;Fasilitas</td>
                <td>:</td>
                <td>{{ $item['fasilitas'] }}</td>
              </tr>
              <tr>
                <td><i class="fas fa-address-book text-primary"></i>&nbsp;Contact</td>
                <td>:</td>
                <td>{{ $item['kontak'] }}</td>
              </tr>
              <tr>
                <td><i class="fas fa-tags"></i>&nbsp;Price</td>
                <td>:</td>
                <td>{{ $item['harga'] }}</td>
              </tr>
            </table>
          </div>
            <div class="map-hotel container col-md-12 mt-4" style="border: 1px solid;" ><center><h3>Location</h3>
              <iframe src="{{ $item['map'] }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="responsive-iframe"></iframe>
              </center>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <a href="{{ $item['link'] }}" target="_blank" class="btn btn-primary container col-md-6">Kunjungi</a>
        <button type="button" class="btn btn-danger col-md-6" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endforeach


{{-- <form method="POST" action="{{ route('login') }}">
  @csrf
  <div class="form-group row">
      <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

      <div class="col-md-6">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="form-group row">
      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

      <div class="col-md-6">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="form-group row">
      <div class="col-md-6 offset-md-4">
          <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

              <label class="form-check-label" for="remember">
                  {{ __('Remember Me') }}
              </label>
          </div>
      </div>
  </div>

  <div class="form-group row mb-0">
      <div class="col-md-8 offset-md-4">
          <button type="submit" class="btn btn-primary">
              {{ __('Login') }}
          </button>

          @if (Route::has('password.request'))
              <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
              </a>
          @endif
      </div>
  </div>
</form> --}}







    <footer class="ftco-footer ftco-section img" style="background-image: url(images/bg_4.jpg)">
      <div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Tuk-Tuk Tour</h2>
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
              All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
