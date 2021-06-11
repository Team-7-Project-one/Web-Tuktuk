<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/png" href="{{asset('img/logo_web.png')}}" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <link rel="stylesheet" href="css/aos.css" />

    <link rel="stylesheet" href="css/ionicons.min.css" />

    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/jquery.timepicker.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/icomoon.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
    <style>
      *{
        font-family: 'Quicksand', sans-serif;
      }
    </style>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg shadow-lg p-3 mb-5 bg-body rounded ">
        <div class="container-fluid">
          <a class=" navbar-brand" href="#"><img src="{{asset('img/logo_web.png')}}" width="80%" alt=""></a>
          <div class="" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link btn btn-danger active p-2 rounded-pill"  href="{{ route('admin_logout') }}" href="#" style="font-weight: bold"><i class="fas fa-power-off"></i> Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <h1 class="text-center">Create Data Event</h1>
      <br>
      <style>
        .form-group{
          border-radius: 10px;
        }
        .col-md-6{
          margin-bottom: 10px;
        }
        .btnsu{
          border-radius: 20px;
        }
      </style>
 
      <div class="form-group container col-md-10 p-5 bg-secondary text-light mb-5">
      <form class="container" enctype="multipart/form-data" action="/dashboard/event/update/{{ $Event->id }}" method="post">
        {{ csrf_field() }}
        <div class="row">
          <div class="container mb-4">
            <a href="/dashboard/event" class="btn btn-success rounded-pill"><i class="fas fa-arrow-alt-circle-left"></i> back</a><br>
          </div><br><br>
          <div class="col-md-6">
            <label for="">Nama Event</label>
            <input type="text" name="nama_event" class="form-control" value="{{ $Event->nama_event }}">
          </div>
          <div class="col-md-6">
            <label for="">Kategori</label>
            <input type="text" name="kategori" class="form-control" value="{{ $Event->kategori }}">
          </div>
          <div class="col-md-6">
            <label for="">Tanggal Pelaksanaan</label>
            <input type="date" name="tgl_pelaksanaan" class="form-control" value="{{ $Event->tgl_pelaksanaan }}">
          </div>
          <div class="col-md-6">
            <label for="">Tanggal Selesai</label>
            <input type="date" name="tgl_selesai" class="form-control" value="{{ $Event->tgl_selesai }}">
          </div>
          <div class="col-md-6">
            <label for="">Waktu</label>
            <input type="time" name="waktu" class="form-control" value="{{ $Event->waktu }}">
          </div>
          <div class="col-md-6">
            <label for="">Harga</label>
            <input type="text" name="harga" class="form-control" value="{{ $Event->harga }}">
          </div>
          <div class="col-md-6">
            <label for="">Lokasi</label>
            <input type="text" name="lokasi" class="form-control" value="{{ $Event->lokasi }}">
          </div>
          <div class="col-md-6">
            <label for="">Map</label>
            <input type="text" name="map" class="form-control" value="{{ $Event->map }}">
          </div>
          <div class="col-md-6">
            <label for="">Gambar </label>
            <input type="file" name="gambar" class="form-control" value="{{ $Event->gambar }}" id="inputGroupFile02">
          </div>
          <div class="col-md-12">
            <label for="">Deskripisi</label>
            <textarea class="form-control" name='deskripsi' >{{ $Event->deskripsi }}</textarea>
          </div> <br>
          <div class="btn-group mt-3">
            <button type="submit" class="btn btnsu btn-primary "><i class="fas fa-save"></i> Save Change</button> 
          </div>
      </div>
      </form>
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