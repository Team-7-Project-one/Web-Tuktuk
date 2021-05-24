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
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
  </head>
  <body>
    
    @include('layouts.header')

    <div class="hero-wrap" style="background-image: url('img/carousel1.jpg'); background-size: cover; background-position: center center;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
            <div class="text">
              <p class="breadcrumbs mb-2">
                <span class="mr-2"><a href="/">Home</a></span> <span>Souvenir</span>
              </p>
              <h1 class="bread" style="margin-bottom: 450px; font-size: 80px">Souvenir</h1>
            </div>
          </div>
        </div>
      </div>
    </div>


<br><br>
<h1 class="ftco-animate text-center ">Category</h1><br>
<center>
  <form action="" method="GET">
    <div class="category container row">
        <div class=" col-md-4 btncategory">
          <button name="keyword" id="btnpatung" type="submit" value="patung" class="btn btn-outline-warning mr-5 rounded-pill">Ukiran</button>
        </div>
        <div class=" col-md-4 btncategory">
          <button name="keyword" id="btnulos" value="ulos" class="btn btn-outline-danger mr-5 rounded-pill">Ulos</button>
        </div>
        <div class=" col-md-4 btncategory">
          <button name="keyword" id="btnbaju" value="baju" class="btn btn-outline-primary rounded-pill">Baju</button>
        </div>
      </div>
    </form>
    </center>
      <br><br><br><center>
    <div class="searchotel container col-md-10">
      <form class="d-flex" method="GET">
      <input name="keyword" class="form-control me-2"  placeholder="Temukan Souvenir Anda di sini ..." aria-label="Search" value = "{{Request::get('keyword')}}" autocomplete="off"/>&nbsp;
      <button id="cari" class="btn btn-outline-warning rounded-circle" style="width: 55px ;" type="submit"><i class="fas fa-search"></i></button>
      </form>
    </div>
  </center>
    <br />

  
	<section class="ftco-section container"> <center>
		 <h1 class="ftco-animate">List Souvenir</h1>
		  <br />
      <div class="row container ftco-animate">
        @foreach ($data as $item)
        <div class="col-md-4 mt-4">
            <div class="container card card-product" style="width: 18rem;">
              <img src="img/souvenir/{{ $item['gambar1'] }}" class="card-img-top mt-2" alt="...">
              <div class="card-body product-desc">
                <h5 class="card-title mt-2">{{ $item['nama_souvenir'] }}<br></h5>
                <b class="product-price text-warning"><i class="fas fa-tags"></i> {{ $item['harga'] }}</b>
                <p><i class="fas fa-store text-primary"></i> {{ $item['nama_toko'] }}</p>
                <button id="modalbtn" href="#" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#abc{{ $item['id'] }}"><i class="fas fa-info-circle"></i> Detail</button>
              </div>
            </div>
          </div>
        @endforeach
        
      </div>
        

      <!-- Modal souvenir -->
      @foreach ($data as $item)
      <div class="modal fade shadow p-3 mb-5 bg-body rounded" id="abc{{ $item['id'] }}"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-xl">
          <div class="modal-content">
            <div class="modal-body">
              <center><h1 id="hotel-info-title" class="text-success">Details</h1></center><br>
              
              <h4 class="text-primary" style="font-weight: bold !important;">{{ $item['nama_souvenir'] }}</h4><p style="font-style: italic;" class="pb-3">{{ $item['deskripsi'] }}</p>

              <div class="row container">
                <div class="col-md-7">
                  <div id="carouselExampleIndicators{{ $item['id'] }}" class="carousel slide" data-bs-ride="carousel">
                    <div id="carbut2" class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner" id="hotel-carousel">
                      <div class="carousel-item active">
                        <a href="img/souvenir/{{ $item['gambar1'] }}" class="insta-img image-popup" style="background-image: url(images/insta-1.jpg);">
                        <img src="img/souvenir/{{ $item['gambar1'] }}" class="d-block w-50" alt=""></a>
                      </div>
                      <div class="carousel-item">
                        <a href="img/souvenir/{{ $item['gambar2'] }}" class="insta-img image-popup" style="background-image: url(images/insta-1.jpg);">
                        <img src="img/souvenir/{{ $item['gambar2'] }}" class="d-block w-50" alt=""></a>
                      </div>
                      <div class="carousel-item">
                        <a href="img/souvenir/{{ $item['gambar3'] }}" class="insta-img image-popup" style="background-image: url(images/insta-1.jpg);">
                        <img src="img/souvenir/{{ $item['gambar3'] }}" class="d-block w-50" alt="">
                        </a>
                      </div>
                    </div>
                    <button id="carbut2"  class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators{{ $item['id'] }}" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden"></span>
                    </button>
                    <button id="carbut2" class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators{{ $item['id'] }}" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden"></span>
                    </button>
                  </div>
                </div>
                <div style="margin-top: -30px;" class="container col-md-5 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><br>
                      <p class="text-dark"><i class="fas fa-store " style="color: #1A5276;"></i> {{ $item['nama_toko'] }}</p>
                    <p class="text-dark"><i class="fas fa-user" style="color: #D35400;"></i> {{$item['pemilik']}}</p>
                  <table class="table">
                    <tr>
                      <td><i class="fas fa-wrench text-primary"></i> Bahan</td>
                      <td>:</td>
                      <td>{{ $item['bahan'] }}</td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-dharmachakra text-primary"></i> Tipe</td>
                      <td>:</td>
                      <td>{{ $item['tipe'] }}</td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-search-plus text-primary"></i> Ukuran</td>
                      <td>:</td>
                      <td>{{ $item['ukuran'] }}</td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-palette text-primary"></i> Warna</td>
                      <td>:</td>
                      <td>{{ $item['warna'] }}</td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-tags text-warning"></i> Harga</td>
                      <td>:</td>
                      <td class="text-success">{{ $item['harga'] }}</td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-phone-volume text-primary"></i> Contact</td>
                      <td>:</td>
                      <td class="text-success "></i> {{ $item['kontak'] }}</td>
                    </tr>
                  </table>
                  <center><a href="https://api.whatsapp.com/send?phone={{$item['kontak']}}" class="btn btn-success"><i class="fab fa-whatsapp mt-2"></i> Hubungi Penjual</a></center>
                  <div>
                </div>
              </div>
              
              <div class="map-hotel container col-md-8 mt-4">
              <center>
                <h3>Detail Location</h3>
                <iframe src="{{ $item['map'] }}" style="border: 5px solid; border-radius: 5px" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="responsive-iframe"></iframe>
              </center>
              </div
            </div>
          </div>
          <div class="modal-footer mt-4">
            <button type="button" class="btn btn-danger col-md-12" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
      @endforeach
<br><br>
  <center>
    <div class="pagination mt-3 justify-content-center ">
        {{ $data->links() }}
    </div>
  </center>

  <style>
    .w-5{
      width: 20px;
    }
    .text-sm{
      margin-top: 10px;
    }
  </style>
			  
		  {{-- <div class="row mt-5">
			<div class="col text-center">
			  <div class="block-27">
				<ul>
				  <li><a href="#">&lt;</a></li>
				  <li class="active"><span>1</span></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">&gt;</a></li>
				</ul>
			  </div>
			</div>
		  </div> --}}
	  </section>



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
                <form action="souvenir/AddComment" enctype="multipart/form-data" method="post">
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
                <div class="col-md-8">
                  <br />
                  <p id="userimg"><img src="img/user.png" class="rounded-circle" style="width: 30px; height: 30px" alt="" />&nbsp;{{$user->name}}</p>
                </div>
                <div class="container mx-4">
                  <p id="usercomment">{{$user->comment}}<b style="font-size: 10px; margin-left: 50px;"><i class="far fa-calendar-alt"></i> &nbsp;{{ Carbon\Carbon::parse($user->created_at)->diffForHumans()}} </b></p>

                  <div class="replyform{{$user->id}}">
                    <form action="souvenir/AddReply/" method="post" enctype="multipart/form-data">
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

                <h6 id="reply-message{{ $user->id }}" class="container text-secondary btn btn"><i class="fas fa-reply-all"></i> Balas</h6>
                  
                  @foreach ($reply as $user2)
                    @if($user->id == $user2->comment_id)
                      <div class="container mt-5" style="margin-top: -10px;">
                        <h5 class="container"><img src="img/user.png" style="width: 25px; height: 25px" alt="" />&nbsp;{{$user2->name}}</h5>
                        <p id="replyuser" class="ml-4">{{$user2->comment}}<b style="font-size: 10px; margin-left: 50px;"><i class="far fa-calendar-alt"></i> &nbsp;{{ Carbon\Carbon::parse($user->created_at)->diffForHumans()}} </b></p>
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
                  <p id="userimg"><img src="img/user.png" class="rounded-circle" style="width: 30px; height: 30px" alt="" />&nbsp;{{$user->name}}</p>
                </div>
                <div class="container mx-4">
                  <p id="usercomment">{{$user->comment}}<b style="font-size: 10px; margin-left: 50px;"><i class="far fa-calendar-alt"></i> &nbsp;{{ Carbon\Carbon::parse($user->created_at)->diffForHumans()}} </b></p>
                  <div class="replyform">

                  
                  @foreach ($reply as $user2)
                    @if($user->id == $user2->comment_id)
                      <div class="container mt-2" style="margin-top: -10px;">
                        <h5 class="container"><img src="img/user.png" style="width: 25px; height: 25px" alt="" />&nbsp;{{$user2->name}}</h5>
                        <p id="replyuser" class="ml-4">{{$user2->comment}}<b style="font-size: 10px; margin-left: 50px;"><i class="far fa-calendar-alt"></i> &nbsp;{{ Carbon\Carbon::parse($user->created_at)->diffForHumans()}} </b></p>
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
