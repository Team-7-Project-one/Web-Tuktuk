<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tuk-Tuk Tour</title>
    <link rel="icon" type="image/png" href="{{asset('img/logo_web.png')}}" />
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
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/icomoon.css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
    <style>
       @font-face {
            font-family: fontgua;
            src: url('dafont/Neons_demo.otf');
        }
        .list-event{
          font-family: fontgua;
        }
    </style>
  </head>
  <body class="text-light bg-dark" {{--style="background-color: #5b81a4;"--}}>

    @include('layouts.header')

    <div class="hero-wrap" style="background-image: url('img/hotel/backgroundevent.jpg'); background-size: cover; background-position: center center;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
            <div class="text">
              <p class="breadcrumbs mb-2">
                <span class="mr-2"><a href="/">Home</a></span> <span>Event</span>
              </p>
              <h1 class="bread" style="margin-bottom: 450px; font-size: 80px">Event</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section container">
      <h1 class="list-event text-center text-light ">List Event</h1><br>
      @foreach ($data as $data)
        <center>
        <div class="container row">
            <div class="hero-wrap  event-card" style="background-image: url(img/event/{{$data['gambar']}});  border-radius: 30px; overflow: hidden;">
              <div class="overlay" id="eventdark"></div>
              <div class="container">
                <div class="row  ">
                  <div class=" ftco-animate text-center  justify-content-center container">
                    <div class="text event-caption container"><br>
                      <h3 class="text-center event-title text-light" style=" font-size: 80px">{{ $data['nama_event'] }}</h3>
                      <h2 class="text-light tanggal">{{ $data['tgl_pelaksanaan'] }}</h2>
                      <p>
                        {{ $data['deskripsi'] }}jnjnjnjn
                      </p>
                      <a class="event-detail" href="#" data-bs-toggle="modal" data-bs-target="#abc{{ $data['id'] }}">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <b> More Details </b>
                      </a>
                    </div><br>
                  </div>
                </div>
            </div>
        </div>
        </center>
    </section>
    
    <!-- Event Modal -->
    <div class="modal fade" id="abc{{ $data['id'] }}"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog  modal-xl">
        <div class="modal-content">
          <div class="modal-body">
            <center><h1 id="hotel-info-title" class="text-success">Details</h1></center><br>
            <div class="row container">

              <div class="col-md-7">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div id="carbut2" class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  </div>
                  <div class="carousel-inner" id="hotel-carousel">
                    <div class="carousel-item active">
                      <a href="img/event/{{$data['gambar']}}" class="insta-img image-popup" style="">
                      <img src="img/event/{{$data['gambar']}}" class="d-block w-100" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>

              <div style="margin-top: -30px;" class="container col-md-5 fade show active mt-3" id="home" role="tabpanel" aria-labelledby="home-tab"><br>
                <center>
                <h4 class="text-primary" style="font-weight: bold !important;">{{ $data['nama_event'] }}</h4><p style="font-style: italic; color: gray;">{{ $data['deskripsi'] }}</p>
                </center>
                <table class="table">
                  <tr>
                    <td><i class="fab fa-elementor text-primary"></i> Category</td>
                    <td>:</td>
                    <td>{{ $data['kategori'] }}</td>
                  </tr>
                  <tr>
                    <td><i class="far fa-calendar-check text-primary"></i> Tanggal Mulai</td>
                    <td>:</td>
                    <td>{{ $data['tgl_pelaksanaan'] }}</td>
                  </tr>
                  <tr>
                    <td><i class="far fa-calendar-minus text-primary"></i> Tanggal Berakhir</td>
                    <td>:</td>
                    <td>{{ $data['tgl_selesai'] }}</td>
                  </tr>
                  <tr>
                    <td><i class="fas fa-clock text-primary"></i> Waktu</td>
                    <td>:</td>
                    <td>{{ $data['waktu'] }}</td>
                  </tr>
                  <tr>
                    <td><i class="fas fa-ticket-alt text-primary"></i> Harga Tiket</td>
                    <td>:</td>
                    <td class="text-success">{{ $data['harga'] }}</td>
                  </tr>
                  <tr>
                    <td><i class="fas fa-map-marker-alt text-primary"></i> Lokasi</td>
                    <td>:</td>
                    <td class="text-success">{{ $data['lokasi'] }}</td>
                  </tr>
                </table>
              </div>
              
              <div class="map-hotel container col-md-8 mt-4">
                <center>
                  <h3>Detail Location</h3>
                  <iframe src="{{ $data['map'] }}" style="border: 5px solid; border-radius: 10px" width="600" height="450" allowfullscreen="" loading="lazy" class="responsive-iframe"></iframe>
                </center>
              </div>

            </div>

          </div>

          <div class="modal-footer mt-4">
            <button type="button" class="btn btn-danger col-md-12" data-bs-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
    @endforeach
    

  @if(Auth::user())
      <section class="komentar mt-4">
        <br />
        <div class="comment container">
          <h1 style="color: white;" class="text-center">Comment & Suggestions</h1>
          <br />
          <div class="container col-md-10" id="inform">
            <div class="row">
              <div class="col-md-3">
                <center>
                  <p id="userimg" class="mt-3 fw-bold"> <img src="img/user.png" style="width: 35px; height: 35px" alt="" />&nbsp;{{Auth::user()->name}}</p>
                </center>
              </div>
              <div class="col-md-9 mt-2">
                <form action="/event/AddComment" enctype="multipart/form-data" method="post">
                {{ method_field('POST') }}
                @csrf
                    <input type="hidden" name="nama" class="form-control" value="{{Auth::user()->name}}">
                  <div class="form-group">
                    <label for="comment">Comment : </label>
                    <textarea type="text" name="comment" class="form-control" placeholder="Tuliskan Pesan Anda Disini...." required></textarea>
                  </div>
                  <div class="button">
                    <button  id="kirim" class="btn btn-success mt-1" type="submit">Kirim</button>
                    <button type="reset" id="reset" class="btn btn-danger mt-1">Reset</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="user-comment container col-md-10 mt-4">
            <div class="message row container pb-4">
            @foreach($comment as $user)
                <div class="col-md-8">
                  <br />
                  <p id="userimg"><img src="img/user.png" class="rounded-circle" style="width: 30px; height: 30px" alt="" />&nbsp;{{$user->name}}<b style="font-size: 10px; margin-left: 50px;"><i class="far fa-calendar-alt"></i> &nbsp;{{ Carbon\Carbon::parse($user->created_at)->diffForHumans()}} </b></p>
                </div>
                <div class="container mx-4">
                  <p id="usercomment" style="font-size: 1rem">{{$user->comment}}</p>

                <div class="replyform{{$user->id}}">
                  <form action="/event/AddReply" method="post" enctype="multipart/form-data">
                  {{ method_field('POST') }}
                  @csrf
                  <div class="form-group pb-4">
                    <input type="hidden" name="nama" class="form-control" value="{{Auth::user()->name}}">
                    <input type="hidden" name="comment_id" value="{{ $user->id }}">
                    <label for="comment">Comment : </label>
                    <textarea type="text" name="comment" class="form-control" placeholder="Tuliskan Pesan Anda Disini...." required></textarea>
                  </div>
                  <div class="button">
                        <button  type="submit" id="balas" class="btn btn-primary btn-sm">Balas</button>
                        <button type="reset" id="reset" class="btn btn-warning btn-sm">Reset</button>
                    </div>
                  </form> 
                </div>

                <h6 id="reply-message{{ $user->id }}" class="container text-secondary btn btn text-light"><i class="fas fa-reply-all text-light"></i> Balas</h6>
                  
                  @foreach ($reply as $user2)
                    @if($user->id == $user2->comment_id)
                      <div class="container mt-2" style="margin-top: -10px;">
                        <h5 class="container" style="color: white"><img src="img/user.png" style="width: 25px; height: 25px" alt="" />&nbsp;{{$user2->name}}<b style="font-size: 10px; margin-left: 50px;"><i class="far fa-calendar-alt"></i> &nbsp;{{ Carbon\Carbon::parse($user->created_at)->diffForHumans()}} </b></h5>
                        <p id="replyuser" class="ml-4" style="color: white;">{{$user2->comment}}</p>
                      </div>
                    @endif
                  @endforeach
                </div>
              @endforeach
            </div>
            <br />
          </div>
          <br />
        </div>
        <br /><br />
      </section>

    @else
    <section class="komentar mt-4">
        <br />
        <div class="comment container">
          <h1 style="color: white;" class="text-center">Comment & Suggestions</h1>
          <br />
          <div class="container col-md-10" id="inform">
            <div class="row">
              <div class="col-md-3">
                <center>
                <img src="img/user.png" style="width: 35px; height: 35px" alt="" />
                </center>
              </div>
              <div class="col-md-9 mt-2">
                <form action="" enctype="multipart/form-data" method="post">
                @csrf
                  <div class="form-group">
                    <label for="comment">Comment : </label>
                    <textarea type="text" name="comment" class="form-control" placeholder="Tuliskan Pesan Anda Disini...."></textarea>
                  </div>
                  <div class="button">
                    <a style="color: white" class="btn btn-success mt-1 "  data-bs-toggle="modal" data-bs-target="#exampleModal">Kirim</a>
                    <button type="reset" id="reset" class="btn btn-danger mt-1">Reset</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="user-comment container col-md-10 mt-4">
            <div class="message row container pb-4">
              @foreach($comment as $user)
                <div class="col-md-8">
                  <br />
                  <p id="userimg"><img src="img/user.png" class="rounded-circle" style="width: 30px; height: 30px" alt="" />&nbsp;{{$user->name}}<b style="font-size: 10px; margin-left: 50px;"><i class="far fa-calendar-alt"></i> &nbsp;{{ Carbon\Carbon::parse($user->created_at)->diffForHumans()}} </b></p>
                </div>
                <div class="container mx-4">
                  <p id="usercomment">{{$user->comment}}</p>
                  <div class="replyform">

                  
                  @foreach ($reply as $user2)
                    @if($user->id == $user2->comment_id)
                      <div class="container mt-2" style="margin-top: -10px;">
                        <h5 class="container" style="color:white"><img src="img/user.png" style="width: 25px; height: 25px" alt="" />&nbsp;{{$user2->name}}<b style="font-size: 10px; margin-left: 50px;"><i class="far fa-calendar-alt"></i> &nbsp;{{ Carbon\Carbon::parse($user->created_at)->diffForHumans()}} </b></h5>
                        <p id="replyuser" style="color:white" class="ml-4">{{$user2->comment}}</p>
                      </div>
                    @endif
                  @endforeach
                </div>
              @endforeach
            </div>
            <br />
          </div>
          <br />
        </div>
        <br /><br />
      </section>

    @endif



    @include('layouts.footer')

    @include('layouts.log&reg')

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
    @foreach ($comment as $user)
    <script>
      $(document).ready(function () {
        $('.replyform{{$user->id}}').hide();

        $('#reply-message{{$user->id}}').click(function () {
          $('.replyform{{$user->id}}').slideToggle();
        });
      });
      
    </script>
    @endforeach
  </body>
</html>

