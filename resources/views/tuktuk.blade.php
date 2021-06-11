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
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/jquery.timepicker.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/icomoon.css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
<style type="text/css">
</style>
  </head>
  <body>

    @include('layouts.header')

    <div class="hero-wrap" style="background-image: url('img/carousel2.jpg'); background-size: cover; background-position: center center;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
            <div class="text">
              <p class="breadcrumbs mb-2">
                <span class="mr-2"><a href="/">Home</a></span> <span>About</span>
              </p>
              <h1 class="bread" style="margin-bottom: 450px; font-size: 80px">About</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <br>
    <h1 class="text-center fw-bold">Tuk - Tuk Siadong</h1><br>

    <center>
    <div class="row container">
      <div class="col-md-6">
        <img style="position: relatif; width: 100%;" src="{{ asset('img/aboutuktuk2.jpg') }}" class="">
      </div>
       <div class="col-md-6">
     <div class="accordion mt-5" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="btn btn-outline-primary rounded-pill ml-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <b class="container">I Gambaran Umum Kelurahan Tuktuk Siadong &nbsp;&nbsp;<i class="fas fa-info-circle"></i></b> 
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body" style="text-align: justify;">
                Secara Administratif Kelurahan Tuktuk Siadong termasuk ke dalam Kecamatan Simanindo Kabupaten Samosir dengan batas-batas wilayah terdiri dari: <br>1. Sebelah Timur berbatasan dengan Danau Toba <br>2. Sebelah Selatan berbatasan dengan Danau Toba  <br>3. Sebelah Barat berbatasan dengan Desa Garoga  <br>4. Sebelah Utara berbatasan dengan Desa Sialagan Kelurahan Tuktuk Siadong yang terbagi atas 3 lingkungan yakni lingkungan pertama, yaitu Huta Irnga, Lumban Holbung, Sibolopian, Jalan Gereja Atas, Lumban Nangka, dan Lumban Bakkara. Lingkungan Dua terdiri dari Jalan Gereja Bawah, Pandan, Lumban Manurung dan Kompleks Ambaroba. Lingkungan Tiga terdiri dari Tuktuk Pulo, Sosor Galung, dan Lumban Bakara.<br><br>Secara geografis, Kelurahan Tuktuk Siadong berada pada ketinggian 904 - 2.157 m diatas permukaan laut. Suhu rata-ratanya berkisar antara 18°- 24°C dan luas daratan Kelurahan Tuktuk Siadong 340 Ha dan luas perairan danau adalah 410 Ha Ketika kita pertama kali masuk ke Kelurahan Tuktuk Siadong maka akan disambut dengan gapura besar yang bermotif gorga dan bentang alam yang indah. Sebelah kanan Tuktuk Siadong langsung berbatasan dengan Danau Toba, jalanannya sedikit mendaki dan berbelok-belok ketika memasuki kelurahan ini. Setelah itu kita Universitas Sumatera Utara 35 langsung disuguhkan tempat-tempat penginapan, tempat penjual souvenir, restoran, rental sepeda dan sepeda motor pokonya khas tempat pariwisata.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="btn btn-outline-primary rounded-pill ml-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <b class="container">II Sejarah Kelurahan Tuktuk Siadong &nbsp;&nbsp;<i class="fas fa-info-circle"></i></b>
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body" style="text-align: justify;">
                Pada dasarnya Kelurahan Tuktuk Siadong sendiri merupakan semenanjung yang berada di sebelah Timur Pulau Samosir. Kelurahan Tuktuk Siadong merupakan sebuah daerah yang semua wilayahnya terdiri dari bebatuan. Menurut masyarakat sekitar dahulunya ketika bebatuan tersebut diketuk akan menghasilkan bunyi “tuktuk” dan dari sinilah awalnya nama Tuktuk digunakan. Secara administratif nama desa Tuktuk Siadong sebelumnya adalah Tuktuk si asu. Akan tetapi tidak diketahui secara pasti, sejak tahun berapa Tuktuk Siadong menjadikan nama kelurahan. Awalnya Kelurahan Tuktuk Siadong sama dengan kelurahan-kelurahan yang ada di Samosir, akan tetapi ketika kebutuhan masyarakat untuk merileksasikan diri dari kejenuhan rutinitas menjadikan Tuktuk Siadong sebagai tempat wisata. Hal ini disebabkan bentang alam Tuktuk Siadong yang merupakan dataran tinggi, sehingga memberikan pemandangan seperti lukisan yang indah. Lambat laun mereka yang berkunjung semakin banyak dan mulai mendirikan tenda tenda rekreasi ke tempat tersebut. Kemudian beberapa penduduk memprakarsai mendirikan beberapa rumah makan dan rumah persinggahan. 
              </div>
            </div>
          </div>
       <!--    <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="btn btn-outline-primary rounded-pill ml-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <b class="container">III Data Statistik Kelurahan Tuktuk Siadong &nbsp;&nbsp;<i class="fas fa-info-circle"></i></b>
              </button>
            </h2> -->
           <!--  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                
            -->     <div class="row">

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div> 
      </div>
    </div>


    <div class="col-10 container mt-4">
        <div class="list-group list-group-horizontal-sm " id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Pemerintahan</a>
          <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Penduduk</a>
          <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Komposisi</a>
          <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Sarana</a>
        </div>
      </div>
      <div class="container mt-2">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            <table class="table table-hover">
              <tr>
                <td>Kelurahan</td>
                <td>:</td>
                <td>Tuktuk Siadong</td>
              </tr>
              <tr>
                <td>Kecamatan</td>
                <td>:</td>
                <td>Simanindo</td>
              </tr>
              <tr>
                <td>Kabupaten</td>
                <td>:</td>
                <td>Samosir</td>
              </tr>
              <tr>
                <td>Provinsi</td>
                <td>:</td>
                <td>Sumatera Utara</td>
              </tr>
              <tr>
                <td>Negara</td>
                <td>:</td>
                <td>Indonesia</td>
              </tr>
            </table>
          </div>

          <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
            <h3 class="text-center">Jumlah Penduduk</h3>
            <table class="table table-hover">
              <tr>
                <td><i class="fas fa-users"></i> Jumlah Penduduk</td>
                <td>:</td>
                <td>707</td>
              </tr>
              <tr>
                <td><i class="fas fa-user"></i> Jumlah jiwa</td>
                <td>:</td>
                <td>2499</td>
              </tr>
              <tr>
                <td><i class="fas fa-male"></i> &nbsp;Laki - laki</td>
                <td>:</td>
                <td>1228</td>
              </tr>
              <tr>
                <td><i class="fas fa-female"></i> &nbsp;Perempuan</td>
                <td>:</td>
                <td>1271</td>
              </tr>
            </table>
          </div>
          <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
            <div class="container">
              <h3 class="text-center">Komposisi Penduduk Berdasarkan Agama</h3>
            Katolik<div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width:58%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">58%</div>&nbsp;1158&nbsp;orang
            </div>
            Kristen Protestan<div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 41.2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">41.2%</div> &nbsp;823&nbsp;orang
            </div>Islam
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 12%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0.8%</div> &nbsp;16&nbsp;orang
            </div>Hindu
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 3%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">0%</div> &nbsp;0&nbsp;orang
            </div>Buddha
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 3%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">0%</div> &nbsp;0&nbsp;orang
            </div><br>
          </div>
          <br>
          <h3 class="text-center">Komposisi Penduduk Berdasarkan Pekerjaan</h3>
          <table class="table">
            <tr>
              <tr>
                <th>No</th>
                <th>Mata Pencarian</th>
                <th>Jumlah (jiwa)</th>
              </tr>
              <tr>
                <td>1</td>
                <td>Petani</td>
                <td>291</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Buruh</td>
                <td>98</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Nelayan</td>
                <td>42</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Pedagang</td>
                <td>31</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Pengusaha</td>
                <td>14</td>
              </tr>
              <tr>
                <td>6</td>
                <td>PNS</td>
                <td>34</td>
              </tr>
              <tr>
                <td>7</td>
                <td>ABRI</td>
                <td>4</td>
              </tr>
              <tr>
                <td>8</td>
                <td>Pegawai Swasta</td>
                <td>287</td>
              </tr>
              <tr>
                <td>9</td>
                <td>Jasa</td>
                <td>57</td>
              </tr>
              <tr>
                <td>10</td>
                <td>Pensiunan</td>
                <td>5</td>
              </tr>
          </table>
          </div>
          <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
            <h3 class="text-center">Sarana Transportasi Kelurahan Tuk-tuk Siadong</h3>
            <table class="table">
              <tr>
                <tr>
                  <th>No</th>
                  <th>Sarana Transportasi</th>
                  <th>Jumlah (Unit)</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Bus Umum</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Sepeda Motor</td>
                  <td>120</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Kapal Umum</td>
                  <td>20</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Sampan</td>
                  <td>16</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Sepeda</td>
                  <td>53</td>
                </tr>
              </table>
              <br>
              <h3 class="text-center">Sarana Kesehatan Kelurahan Tuk-tuk Siadong</h3>
            <table class="table">
              <tr>
                <tr>
                  <th>No</th>
                  <th>Sarana Kesehatan</th>
                  <th>Jumlah (Unit)</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Rumah Sakit</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Puskesmas</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Apotek</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Posyandu</td>
                  <td>3</td>
                </tr>
              </table>
          </div>
        </div>
      </div>
    </div>
    </center>
    <br>
    <br><br>

    @include('layouts.footer')

    @include('layouts.log&reg')

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
