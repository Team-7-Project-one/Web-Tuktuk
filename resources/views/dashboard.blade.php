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
</head>
<body style="background-color: #E5E7E9;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg p-3 mb-5 bg-body rounded">
        <div class="container-fluid">
          <a class=" navbar-brand" href="#">TukTukTour</a>
          <div class="" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active text-danger"  href="{{ route('admin_logout') }}" href="#" style="font-weight: bold"><i class="fas fa-power-off"></i> Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <h1 class="text-center">Data Management</h1><br><br>
      
      <style>
          .card{
              border-radius: 18px;
          }
          #btn1{
              background-color: #EBF5FB;
          }
          #btn2{
              background-color: #FEF9E7;
          }
          #btn3{
              background-color: #E8F8F5;
          }
          #btn1 a{
              background-color: #AED6F1;
              color: #21618C;
              transition: 0.3s ease; 
              padding: 5px;
              padding-right: 10px;
          }
          #btn1 a:hover{
              padding-right: 20px;
              padding-left: 25px;
          }

          #btn2 a{
              background-color: #F9E79F;
              color: #B7950B;
              transition: 0.3s ease; 
              padding: 5px;
              padding-right: 10px;
          }
          #btn2 a:hover{
              padding-right: 20px;
              padding-left: 25px;
          }

          #btn3 a{
              background-color: #82E0AA;
              color: #1D8348;
              transition: 0.3s ease; 
              padding: 5px;
              padding-right: 10px;
          }
          #btn3 a:hover{
              padding-right: 20px;
              padding-left: 25px;
          }
          .card-title{
              font-weight: bolder;
          }
          .card{
              transition: 0.5s ease-out;
              box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
          }
          .card:hover{
              transform: scale(1.12);
          }

      </style>
      <div class="col-md-10 container">
      <div class="row container">
          <div class="col-md-4 mb-3 container">
            <div class="card container" id="btn1" style="width: 18rem;">
                <div class="card-body">
                <center>
                  <h3 class="card-title" style="color: #154360;">Hotel <i class="fas fa-hotel"></i></h3>
                  <h6 class="card-subtitle mb-2 text-muted">Management Data Hotel</h6>
                  <p class="card-text mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </center>
                    <a href="dashboard/hotel" class="btn rounded-pill mt-4"><b>&nbsp;&nbsp;&nbsp;<i class="fas fa-tasks"></i> Manage List</b></a>
                </div>
              </div>
          </div>

          <div class="col-md-4 mb-3">
            <div class="card container" id="btn2" style="width: 18rem;">
                <div class="card-body">
                <center>
                  <h3 class="card-title" style="color: #7D6608;">Souvenir <i class="fas fa-store"></i></h3>
                  <h6 class="card-subtitle mb-2 text-muted">Management Data Souvenir</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </center>
                    <a href="dashboard/souvenir" class="btn rounded-pill mt-4"><b>&nbsp;&nbsp;&nbsp;<i class="fas fa-tasks"></i> Manage List</b></a>
                </div>
              </div>
          </div>

          <div class="col-md-4 mb-3">
            <div class="card container" id="btn3" style="width: 18rem;">
                <div class="card-body">
                <center>
                  <h3 class="card-title" style="color: #145A32;">Event <i class="fas fa-calendar-alt"></i></h3>
                  <h6 class="card-subtitle mb-2 text-muted">Management Data Event</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </center>
                    <a href="dashboard/event" class="btn rounded-pill mt-4"><b>&nbsp;&nbsp;&nbsp;<i class="fas fa-tasks"></i> Manage List</b></a>
                </div>
              </div>
          </div>

      </div>
      <br><br><br>
    </div>
   
      <footer class="fixed-bottom bg-secondary p-3">
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