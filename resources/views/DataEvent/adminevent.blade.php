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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
    <style>
      .btn-close1{
    /* position: absolute; */
    float: right;
    margin-top: -50px;
  }
</style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg p-3 mb-5 bg-body rounded">
        <div class="container-fluid">
          <a class=" navbar-brand" href="#">TukTukTour</a>
          <div class="" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active text-danger"  href="{{ route('admin_logout') }}" href="#"><i class="fas fa-power-off"></i> Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
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
      <h1 class="text-center">Event List</h1>
      <div class="container mb-2 btnadd">
        <a href="/dashboard" class="btn btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> back</a>
        <a href="/dashboard/event/tambah" class="btn  btn-primary "><i class="fas fa-plus-square"></i> Tambah Data</a>
      </div>
      <table class="table container table-hover">
        <thead>
        <tbody>
          <?php $i=1 ?>
          @foreach ($data as $item)
          <tr>
          <th>{{ $i++ }}</th>
          <th>{{ $item['nama_event'] }}</th>
          <th>{{ $item['kategori'] }}</th>
          <th>{{ $item['tgl_pelaksanaan'] }}</th>
          <th>{{ $item['tgl_selesai'] }}</th>
          <th>{{ $item['waktu'] }}</th>
          <th>{{ $item['harga'] }}</th>
          <td>
            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#abc{{ $item['id'] }}"><i class="fas fa-info-circle"></i> Detail</button>
              <a href="/dashboard/event/ubah/{{ $item['id'] }}" class="btn btn-warning btn-sm" ><i class="fas fa-edit"></i> Ubah</a>
              <a href="/dashboard/event/hapus/{{ $item['id'] }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
          </td>
        </tr>
          @endforeach
        </tbody>
      </table>
      

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