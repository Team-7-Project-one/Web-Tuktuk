<!DOCTYPE html>
<html lang="en">
    {{-- <link rel="icon" type="image/png" href="{{asset('img/logo_web.png')}}" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('css/aos.css')}}" />
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}" />
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/icomoon.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" /> --}}
    {{--  --}}
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
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/flaticon.css" />
        <link rel="stylesheet" href="css/icomoon.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
      </head>
  <body>
    
    @include('layouts.header')

    <div class="hero">
      <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(img/carousel2.jpg); background-size: cover; background-position: center center; width: 100%; height: 100%">
          <div class="overlay"></div> 
          <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-end">
              <div class="col-md-6 ftco-animate">
                <div class="text px-4">
                  <h2 >Tuktuk Tour Website</h2>
                  <br><br>
                  <h1 class="mb-3">Horas... <br>
                    Welcome To Tuktuk Tour Website
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="slider-item" style="background-image: url(img/carousel1.jpg); background-size: cover; background-position: center center; width: 100%; height: 100%">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-end">
              <div class="col-md-6 ftco-animate">
                <div class="text px-4">
                  <h2>Tuk-Tuk Tour Website</h2>
                  <br><br>
                  <h1 class="mb-3">It's feels like staying in your own home</h1>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="slider-item" style="background-image: url(img/carousel3.jpg); background-size: cover; background-position: center center; width: 100%; height: 100%">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-end">
              <div class="col-md-6 ftco-animate">
                <div class="text px-4">
                  <br><br>
                  <h2>Tuk-Tuk Tour Website</h2>
                  <br><br>
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
      <div class="container px-5">
        <p style="text-align: center">
        Tuk Tuk is an area that full of exotic landscapes. From this place anyway, you can enjoy the beauty of Lake Toba that is so magical. The place is become the center of tourists who want to spend the night in Samosir. There are numbers of hotels and villas that can be your best deal to stay. There are also several coffee shop that provide internet facilities for your business important. As a tourist destination village, in addition to its natural scenery, Tuk Tuk is also known for rich Batak culture. Therefore, when you took a visit to Tuk Tuk, you do not need to worry because there are plenty of attractions that will make your vacation more memorable.
        </p>
        <center>
          <style>
                .btn-about {
                background-color: #292D3E;
                border-radius: 4px;
                padding: 15px;
                cursor: pointer; 
                transition: all 0.2s ease-in-out;
                font-weight: bolder;
                border-radius: 50px;
                }
                .btn-about:hover {
                animation: swing 1s ease;
                animation-iteration-count: 1;
                }
                @keyframes swing {
                15% {
                transform: translateX(5px);
                }
                30% {
                transform: translateX(-5px);
                }
                50% {
                transform: translateX(3px);
                }
                65% {
                transform: translateX(-3px);
                }
                80% {
                transform: translateX(2px);
                }
                100% {
                transform: translateX(0);
                }
                }
          </style>
        <!-- <button  type="button" class="btn btn-primary btn-about" data-bs-toggle="modal" data-bs-target="#modalabout">
          More about Tuk-tuk
        </button> -->
        </center>
<style>
  .accordion-button{
    /* font-size: 20px; */
    border-radius: 10px;
    /* border: none; */
    border: 4px solid #2471A3;
    box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px;
  }
  #closemodal{
    border-radius: 5px;
    transition: 0.5s ease;
  }
</style>

<!-- Modal about tuktuk-->
<!-- <div class="modal fade" id="modalabout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button"  id="closemodal" class="btn btn-close btn-outline-danger btn-sm ml-auto" data-bs-dismiss="modal" aria-label="Close"> <i class="fas fa-times"></i> </button>
      </div>
      <div class="modal-body">
        <div class="container col-8">
          <h2 class="text-center">About Tuk-tuk Siadong</h2>
          <img class="container" src="img/aboutuktuk2.jpg" alt="" style="border-radius: 10px">
        </div>
        <br><br>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="btn btn-outline-primary rounded-pill ml-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <b class="container">I Gambaran Umum Kelurahan Tuktuk Siadong &nbsp;&nbsp;<i class="fas fa-info-circle"></i></b> 
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body" style="text-align: justify;">
                <strong>Gambaran Umum :</strong><br> Secara Administratif Kelurahan Tuktuk Siadong termasuk ke dalam Kecamatan Simanindo Kabupaten Samosir dengan batas-batas wilayah terdiri dari: <br>1. Sebelah Timur berbatasan dengan Danau Toba <br>2. Sebelah Selatan berbatasan dengan Danau Toba  <br>3. Sebelah Barat berbatasan dengan Desa Garoga  <br>4. Sebelah Utara berbatasan dengan Desa Sialagan Kelurahan Tuktuk Siadong yang terbagi atas 3 lingkungan yakni lingkungan pertama, yaitu Huta Irnga, Lumban Holbung, Sibolopian, Jalan Gereja Atas, Lumban Nangka, dan Lumban Bakkara. Lingkungan Dua terdiri dari Jalan Gereja Bawah, Pandan, Lumban Manurung dan Kompleks Ambaroba. Lingkungan Tiga terdiri dari Tuktuk Pulo, Sosor Galung, dan Lumban Bakara.<br><br>Secara geografis, Kelurahan Tuktuk Siadong berada pada ketinggian 904 - 2.157 m diatas permukaan laut. Suhu rata-ratanya berkisar antara 18°- 24°C dan luas daratan Kelurahan Tuktuk Siadong 340 Ha dan luas perairan danau adalah 410 Ha Ketika kita pertama kali masuk ke Kelurahan Tuktuk Siadong maka akan disambut dengan gapura besar yang bermotif gorga dan bentang alam yang indah. Sebelah kanan Tuktuk Siadong langsung berbatasan dengan Danau Toba, jalanannya sedikit mendaki dan berbelok-belok ketika memasuki kelurahan ini. Setelah itu kita Universitas Sumatera Utara 35 langsung disuguhkan tempat-tempat penginapan, tempat penjual souvenir, restoran, rental sepeda dan sepeda motor pokonya khas tempat pariwisata.
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
                <strong>Sejarah :</strong><br> Pada dasarnya Kelurahan Tuktuk Siadong sendiri merupakan semenanjung yang berada di sebelah Timur Pulau Samosir. Kelurahan Tuktuk Siadong merupakan sebuah daerah yang semua wilayahnya terdiri dari bebatuan. Menurut masyarakat sekitar dahulunya ketika bebatuan tersebut diketuk akan menghasilkan bunyi “tuktuk” dan dari sinilah awalnya nama Tuktuk digunakan. Secara administratif nama desa Tuktuk Siadong sebelumnya adalah Tuktuk si asu. Akan tetapi tidak diketahui secara pasti, sejak tahun berapa Tuktuk Siadong menjadikan nama kelurahan. Awalnya Kelurahan Tuktuk Siadong sama dengan kelurahan-kelurahan yang ada di Samosir, akan tetapi ketika kebutuhan masyarakat untuk merileksasikan diri dari kejenuhan rutinitas menjadikan Tuktuk Siadong sebagai tempat wisata. Hal ini disebabkan bentang alam Tuktuk Siadong yang merupakan dataran tinggi, sehingga memberikan pemandangan seperti lukisan yang indah. Lambat laun mereka yang berkunjung semakin banyak dan mulai mendirikan tenda tenda rekreasi ke tempat tersebut. Kemudian beberapa penduduk memprakarsai mendirikan beberapa rumah makan dan rumah persinggahan. 
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="btn btn-outline-primary rounded-pill ml-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <b class="container">III Data Statistik Kelurahan Tuktuk Siadong &nbsp;&nbsp;<i class="fas fa-info-circle"></i></b>
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                
                <div class="row">
                  <div class="col-12">
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

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->
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
              <img src="img/bupati.png" alt="" style="width: auto; max-width: 100%; height: auto"/>
            </div>

            <div class="col-md-7 wrap-about pb-md-3 ftco-animate pr-md-5 pb-md-5 pt-md-4 px-5">
              <div class="heading-section mb-4 my-5 my-md-0">
                <span class="subheading">About Samosir</span>
                <h2 class="mb-4" style="font-size: -webkit-calc(100% + 30px);">Governance</h2>
              </div>
              <p style="text-align: justify">Samosir Regency consists of 9 sub-districts, of which 6 sub-districts are on Samosir Island and 3 sub-districts in the outer ring area of Lake Toba right on the ridge of the Bukit Barisan mountains. The sub-districts are Harian, Nainggolan, Onan Runggu, Palipi, Pangururan, Ronggur Nihuta, Sianjur Mulamula, Simanindo, Sitiotio. Tuktuk Siadong is one of the urban villages of Simanindo sub-districts.</p>
              <p><a target="_blank" href="https://samosirkab.go.id/" class="btn btn-secondary rounded">More Information</a></p>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ECF0F1" fill-opacity="1" d="M0,96L48,117.3C96,139,192,181,288,181.3C384,181,480,139,576,106.7C672,75,768,53,864,58.7C960,64,1056,96,1152,117.3C1248,139,1344,149,1392,154.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    </section>

      <div class="container">
        <div class="row no-gutters ftco-animate justify-content-center">
          <div class="col-md-12 py-5 pl-md-7 px-5 mt-5">            
            <div id="testimony"class="py-md-10" style="margin-top: -15px">
              <div class="heading-section ftco-animate mb-4" >
                <h2 class="mb-0 text-center" style="font-size: -webkit-calc(100% + 30px);">History</h2>
                <span class="subheading container">About Samosir</span>
                <h2 class="mb-0 container">Samosir, Sumatera Utara</h2>
              </div>

              <center>
              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" style="width: 75vw;">
                  <div class="carousel-item active">
                    <div class="card p-2">
                      <div class="row ">
                        <div class="col-md-5">
                          <img class="d-block w-100 border shadow p-3 mb-5 bg-body rounded mt-5" src="img/samosir2.jpg" style="width: auto; max-width: 100%; height: auto; border-radius: 10px" alt="" />
                        </div>
                        <div class="col-md-7"><br>
                          <center><h3 class="text-dark container">History and Origins</h3></center>
                        <p style="text-align:justify;" class="container">Toba people (commonly call as "Batak") are the most numerous of the Batak people of North Sumatra, Indonesia. The Toba people are found in Toba Samosir Regency, Humbang Hasundutan Regency, Samosir Regency, North Tapanuli Regency, part of Dairi Regency, Central Tapanuli Regency, Sibolga and Its surrounding regions. The Batak Toba people speak in the Toba Batak language and are centered on Lake Toba and Samosir Island within the lake. Batak Toba people frequently build in traditional Batak architecture styles which are common on Samosir. Cultural demonstrations, performances and festivities such as Sigale Gale are often held for tourists.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card p-2">
                      <div class="row ">
                        <div class="col-md-4">
                          <img class="d-block w-100 border shadow p-3 mb-5 bg-body rounded mt-5" src="img/kkultur.jpg" alt="" style="width: auto; max-width: 100%; height: auto; border-radius: 10px"/>
                        </div>
                        <div class="col-md-8 mt-5"><br>
                          <center><h3 class="text-warning container">Culture</h3></center>
                          <p style="text-align:justify;" class="container">The Toba people practices a distinct culture. It is not a must for Toba people to live in Toba region, although their origin is from Toba. Just as it is with other ethnicities, the Toba people have also migrated to other places to look for better life. For example, majority of the Silindung natives are the Hutabarat, Panggabean, Simorangkir, Hutagalung, Hutapea and Lumbantobing clans. It is certain that the Toba people as a distinct culture can be found beyond the boundaries of their geographical origins.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card p-2">
                      <div class="row ">
                        <div class="col-md-4">
                          <img class="d-block w-100 border shadow p-3 mb-5 bg-body rounded mt-5" src="img/pemkab.jpg" alt="" style="width: auto; max-width: 100%; height: auto; border-radius: 10px"/>
                        </div>
                        <div class="col-md-8 mt-4"><br>
                          <center><h3 class="text-danger container">District</h3></center>
                          <p style="text-align:justify;" class="container">Samosir, or Samosir Island, is a large volcanic island in Lake Toba, located in the north of the island of Sumatra in Indonesia. Administratively, Samosir Island is governed as six of the nine districts within Samosir Regency. Samosir is a popular tourist destination due to its exotic history and the vistas it offers. The tourist resorts are concentrated in the Tuktuk area.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card p-2">
                      <div class="row ">
                        <div class="col-md-5">
                          <img class="d-block w-100 border shadow p-3 mb-5 bg-body rounded mt-5" src="img/toba.jpg" alt="" style="width: auto; max-width: 100%; height: auto; border-radius: 10px"/>
                        </div>
                        <div class="col-md-7 mt-3"><br>
                          <center><h3 style="color: #3498DB;" class="container">Lake Toba</h3></center>
                        <p style="text-align:justify;" class="container">Lake Toba (Indonesian: Danau Toba) is a large natural lake in North Sumatra, Indonesia, occupying the caldera of a supervolcano. The lake is located in the middle of the northern part of the island of Sumatra. The Origin of Lake Toba is a folk story about the lake, in which once upon a time, there was a fisherman who caught a golden fish. Samosir Island is believed to be the golden fish's son.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card p-2">
                      <div class="row ">
                        <div class="col-md-5 mt-5">
                          <img class="d-block w-100 border shadow p-3 mb-5 bg-body rounded mt-2" src="img/alam.jpg" alt="" style="width: auto; max-width: 100%; height: auto; border-radius: 10px"/>
                        </div>
                        <div class="col-md-7 "><br>
                          <center><h3 class="text-success container">Nature</h3></center>
                        <p style="text-align:justify;" class="container">Tuk Tuk is an area that full of exotic landscapes. From this place anyway, you can enjoy the beauty of Lake Toba that is so magical. The place is become the center of tourists who want to spend the night in Samosir. There are numbers of hotels and villas that can be your best deal to stay. There are also several coffee shop that provide internet facilities for your business important. As a tourist destination village, in addition to its natural scenery, Tuk Tuk is also known for rich Batak culture.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <button id="carbut2" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden"></span>
                </button>
                <button id="carbut2" class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden"></span>
                </button>
              </div>
            </center>
            
            </div>
          </div>
        </div>
      </div>
    </section>


<br><br>

    <section><center>
      <div class="heading-section mb-4 my-5 my-md-0">
        <span class="subheading">About Tuk-tuk Siadong</span>
        <h2 class="mb-4" style="font-size: -webkit-calc(100% + 30px);">Location</h2>
      </div>
      <div class=" container location row">
        <div class="col-md-7 px-4" style="margin-top: 10%;">
          <p style="text-align:justify">Tuktuk Siadong is a sub-district located in Simanindo District, Samosir Regency, North Sumatra Province, Indonesia. Tuktuk Siadong is located between the villages of Ambarita and Tomok. Geographically, Tuktuk Siadong Village is located on an area of 245 hectares with a topography in the form of a promontory jutting out towards Lake Toba.</p>
        </div>
        <div class="col-md-5 px-4 mt-5">
        <center>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16481.696988169602!2d98.84488082822975!3d2.6664429689172593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031ea1e1cfd2cf3%3A0xc7a6307559b9f4d3!2sTuktuk%20Siadong%2C%20Simanindo%2C%20Kabupaten%20Samosir%2C%20Sumatera%20Utara%2C%20Indonesia!5e1!3m2!1sid!2sus!4v1618405352690!5m2!1sid!2sus" max-width="600" height="450" style="border: 5px solid;  border-radius: 10px;" allowfullscreen="" loading="lazy"></iframe>
        </center>
        </div>
      </div></center>
    </section><br><br>

    @include('layouts.footer')

    @include('layouts.log&reg')
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
  </body>
</html>