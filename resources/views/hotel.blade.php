<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Tuk-Tuk Tour</title>
    <link rel="icon" type="image/png" href="{{asset('img/logo_web.png')}}" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
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

    @include('layouts.header')

    <div class="hero-wrap" style="background-image: url('img/hotel/carolina4.jpg'); background-size: cover; background-position: center center;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
            <div class="text">
              <p class="breadcrumbs mb-2">
                <span class="mr-2"><a href="/">Home</a></span> <span>Hotel</span>
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
              <input name="keyword" class="form-control me-2"  placeholder="Temukan Hotel Anda di Sini ..." aria-label="Search" value = "{{Request::get('keyword')}}" autocomplete="off"/>&nbsp;
              <button id="cari" class="btn btn-outline-warning rounded-circle" style="width: 55px ;" type="submit"><i class="fas fa-search"></i></button>
            </form>
          </div>
        </center>
        <br />
        <center><h1 class="ftco-animate">List Hotel</h1></center>
        <br />
        <div class="row d-flex shadow p-3 mb-5 bg-body rounded">
          @foreach ($data as $item)
          <div class="hotel-list col-md-4 d-flex ftco-animate container mt-3">
            <div class="blog-entry align-self-stretch">
            <center>
            <a href="img/hotel/{{ $item->gambar1 }}" class="insta-img image-popup" style="background-image: url(images/insta-1.jpg);">
              <p class="block-20 rounded container" style="background-image: url('img/hotel/{{ $item->gambar1 }}');"> </p>
            </a>
            </center>
              <div class="text mt-3">
                <div class="meta mb-2">
                </div>
                <h3 class="heading">{{ $item->nama_hotel }}</h3>
                <p class="hotel-title-list container"><i class="fas fa-map-marker-alt text-danger"></i>&nbsp;{{ $item->lokasi }}</p>
                <p class="container" style="text-align : justify">{{ $item->deskripsi }}</p>
                <a href="#" class="btn btn-outline-primary" style="font-weight: bold;" data-bs-toggle="modal" data-bs-target="#abc{{ $item['id'] }}">More info</a>
              </div>
            </div>
          </div>    
          @endforeach
        </div>
      </div>
    </section>

    
  <center>
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


    @if(Auth::user())
      <section class="komentar">
        <br />
        <div class="comment container">
          <h1 class="text-center">Comment & Suggestions</h1>
          <br />
          <div class="container col-md-10" id="inform">
            <div class="row">
              <div class="col-md-3">
                <center>
                  <p id="userimg" class="mt-3 fw-bold"> <img src="img/user.png" style="width: 35px; height: 35px" alt="" />&nbsp;{{Auth::user()->name}}</p>
                </center>
              </div>
              <div class="col-md-9 mt-2">
                <form action="/hotel/AddComment" enctype="multipart/form-data" method="post">
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
          <div class="user-comment container col-md-10">
            <div class="message row container pb-4">
              @foreach($comment as $user)
                <div class="col-md-8 fw-bold">
                  <br />
                  <p id="userimg"><img src="img/user.png" class="rounded-circle" style="width: 30px; height: 30px" alt="" />&nbsp;{{$user->name}} <b style="font-size: 10px; margin-left: 50px;"><i class="far fa-calendar-alt"></i> &nbsp;{{ Carbon\Carbon::parse($user->created_at)->diffForHumans()}} </b></p>
                </div>
                <div class="container mx-4 areareply">
                  <p id="usercomment" style="font-size: 1rem">{{$user->comment}}</p>
                  <div class="replyform{{$user->id}}" id="balaspesan{{$user->id}}">
                    <form action="/hotel/AddReply/" method="post" enctype="multipart/form-data">
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

                <h6 id="reply-message{{ $user->id }}" onclick="myFunction()" class="container text-secondary btn btn"><i class="fas fa-reply-all"></i> Balas</h6>

                  
                  @foreach ($reply as $user2)
                    @if($user->id == $user2->comment_id)
                      <div class="container mt-2" style="margin-top: -10px;">
                        <h5 class="container"><img src="img/user.png" style="width: 25px; height: 25px" alt="" />&nbsp;{{$user2->name}}<b style="font-size: 10px; margin-left: 50px;"><i class="far fa-calendar-alt"></i> &nbsp;{{ Carbon\Carbon::parse($user->created_at)->diffForHumans()}} </b></h5>
                        <p id="replyuser" class="ml-4" style="font-size: 1rem">{{$user2->comment}}</p>
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
    <section class="komentar">
        <br />
        <div class="comment container">
          <h1 class="text-center">Comment & Suggestions</h1>
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
          <div class="user-comment container col-md-10">
            <div class="message row container pb-4">
              @foreach($comment as $user)
                <div class="col-md-8">
                  <br />
                  <p id="userimg"><img src="img/user.png" class="rounded-circle" style="width: 30px; height: 30px" alt="" />&nbsp;{{$user->name}}<b style="font-size: 10px; margin-left: 50px;"><i class="far fa-calendar-alt"></i> &nbsp;{{ Carbon\Carbon::parse($user->created_at)->diffForHumans()}} </b></p>
                </div>
                <div class="container mx-4">
                  <p id="usercomment" style="font-size: 1rem">{{$user->comment}}</p>
                  
                  @foreach ($reply as $user2)
                    @if($user->id == $user2->comment_id)
                      <div class="container mt-2" style="margin-top: -10px;">
                        <h5 class="container"><img src="img/user.png" style="width: 25px; height: 25px" alt="" />&nbsp;{{$user2->name}}<b style="font-size: 10px; margin-left: 50px;"><i class="far fa-calendar-alt"></i> &nbsp;{{ Carbon\Carbon::parse($user->created_at)->diffForHumans()}} </b></h5>
                        <p id="replyuser" class="ml-4" style="font-size: 1rem">{{$user2->comment}}</p>
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
    <script src="js/balaspesan.js"></script>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>

</html>

