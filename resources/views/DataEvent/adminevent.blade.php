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
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/jquery.timepicker.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/icomoon.css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
    <style>
      *{
        font-family: 'Quicksand', sans-serif;
      }
          .btn-close1{
        /* position: absolute; */
        float: right;
        margin-top: -50px;
      }
      td,th{
        color: white;
      }
      h1{
        font-weight: bolder;
      }
    </style>
  </head>
  <body style="background-color: #34495E;">
    <nav style="background-color: #212F3C;" class="navbar navbar-expand-lg shadow-lg p-3 mb-5 bg-body rounded">
      <div class="container-fluid">
        <a class=" navbar-brand text-light" style="font-family: 'Quicksand', sans-serif;" href="#">TukTukTour</a>
        <div class="" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link btn btn-danger active p-2"  href="{{ route('admin_logout') }}" href="#" style="font-weight: bold"><i class="fas fa-power-off"></i> Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      @if(session('success'))
        <div class="col-md-10 container">
        <div class="alert alert-success container" role="alert">
        <h3 class="alert-heading"><i class="fas fa-calendar-check"></i> {{ session('success') }}</h3>
        <div class="btn-close1">
        <button type="button" class="btn btn-close ml-auto" data-bs-dismiss="alert" aria-label="Close"><h4 style="color: #196F3D;"><i class="fas fa-window-close"></i></h4></button>
        </div>  
      </div>
    </div>
        } 
    @endif
      <h1 class="text-center text-light"><i class="fas fa-calendar-alt"></i> Event Data</h1>
      <div class="container mb-2 btnadd mt-3">
        <a href="/dashboard" class="btn btn-secondary"><i class="fas fa-arrow-alt-circle-left rounded-pill"></i> back</a>
        <a href="/dashboard/event/tambah" class="btn  btn-primary rounded-pill"><i class="fas fa-plus-square"></i> Tambah Data</a>
      </div>
      <table class="table container table-hover mt-5">
        <thead>
          <th>No</th>
          <th>Nama Event</th>
          <th>Kategori</th>
          <th>Tanggal Mulai</th>
          <th>Tanggal Selesai</th>
          <th>Waktu Mulai</th>
          <th>Harga</th>
          <th>Action</th>
        </thead>
        <tbody>
          <?php $i=0 ?>
          @foreach ($data as $item)
          <tr>
          <th>{{ $data->firstItem() + $i }}</th>
          <th>{{ $item['nama_event'] }}</th>
          <th>{{ $item['kategori'] }}</th>
          <th>{{ $item['tgl_pelaksanaan'] }}</th>
          <th>{{ $item['tgl_selesai'] }}</th>
          <th>{{ $item['waktu'] }}</th>
          <th>{{ $item['harga'] }}</th>
          <td>
            <button class="btn btn-success btn-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#abc{{ $item['id'] }}"><i class="fas fa-info-circle"></i> Detail</button>
              <a href="/dashboard/event/ubah/{{ $item['id'] }}" class="btn btn-warning btn-sm rounded-pill" ><i class="fas fa-edit"></i> Ubah</a>
              <a href="/dashboard/event/hapus/{{ $item['id'] }}" class="btn btn-danger btn-sm rounded-pill"><i class="fas fa-trash"></i> Hapus</a>
          </td>
        </tr>
          <?php $i++; ?>
          @endforeach
        </tbody>
      </table>
      
      @foreach($data as $item)
       <!-- Event Modal -->
    <div class="modal fade" id="abc{{ $item['id'] }}"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                      <a href="{{asset('img_event')}}/{{ $item->gambar }}" class="insta-img image-popup" style="">
                      <img src="{{asset('img_event')}}/{{ $item->gambar }}" class="d-block w-100" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>

              <div style="margin-top: -30px;" class="container col-md-5 fade show active mt-3" id="home" role="tabpanel" aria-labelledby="home-tab"><br>
                <center>
                <h4 class="text-primary" style="font-weight: bold !important;">{{ $item['nama_event'] }}</h4><p style="font-style: italic; color: gray;">{{ $item['deskripsi'] }}</p>
                </center>
                <table class="table">
                  <tr>
                    <td class="text-dark"><i class="fab fa-elementor text-primary"></i> Category</td>
                    <td class="text-dark">:</td>
                    <td class="text-dark">{{ $item['kategori'] }}</td>
                  </tr>
                  <tr>
                    <td class="text-dark"><i class="far fa-calendar-check text-primary"></i> Tanggal Mulai</td>
                    <td class="text-dark">:</td>
                    <td class="text-dark">{{ $item['tgl_pelaksanaan'] }}</td>
                  </tr>
                  <tr>
                    <td class="text-dark"><i class="far fa-calendar-minus text-primary"></i> Tanggal Berakhir</td>
                    <td class="text-dark">:</td>
                    <td class="text-dark">{{ $item['tgl_selesai'] }}</td>
                  </tr>
                  <tr>
                    <td class="text-dark"><i class="fas fa-clock text-primary"></i> Waktu</td>
                    <td class="text-dark">:</td>
                    <td class="text-dark">{{ $item['waktu'] }}</td>
                  </tr>
                  <tr>
                    <td class="text-dark"><i class="fas fa-ticket-alt text-primary"></i> Harga Tiket</td>
                    <td class="text-dark">:</td>
                    <td class="text-success">{{ $item['harga'] }}</td>
                  </tr>
                  <tr>
                    <td class="text-dark"><i class="fas fa-map-marker-alt text-primary"></i> Lokasi</td>
                    <td class="text-dark">:</td>
                    <td class="text-success">{{ $item['lokasi'] }}</td>
                  </tr>
                </table>
              </div>
              
              <div class="map-hotel container col-md-8 mt-4">
                <center>
                  <h3>Detail Location</h3>
                  <iframe src="{{ $item['map'] }}" style="border: 5px solid; border-radius: 10px" width="600" height="450" allowfullscreen="" loading="lazy" class="responsive-iframe"></iframe>
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
    
    <center>
      <div class="pagination mt-3 justify-content-center">
          {{ $data->links() }}
      </div>
    </center>
  
    <style>
      .flex .relative{
      }
      .w-5{
        width: 20px;
      }
      .text-sm{
        margin-top: 10px;
      }
    </style><br><br><br><br><br><br>
         <footer class=" bg-secondary p-3">
          <div>
            <h5 class="text-center text-light"><b>TUK-TUK TOUR WEBSITE</b></h5>
          </div>
      </footer>

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