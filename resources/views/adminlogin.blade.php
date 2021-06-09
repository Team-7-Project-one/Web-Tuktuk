<!DOCTYPE html>
<html lang="en">
<head>
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
    <style>
        body {
            background-image: url('img/carousel2.jpg'); 
            background-size: cover;
        }
        .loginadmin{
            margin: 0 auto;
            background-color: rgba(0, 0, 0, 0.5);
            width: max-content;
            /* padding: 30px; */
            border-radius: 20px;
            box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
        }
        button{
            width: 100%;
        }
    </style>
</head>
</head>
<body>
    
    {{-- Alert for failed login --}}
     @if (session('message')) {
          <br>
        <div class="col-md-10 container">
    <div class="alert alert-danger container" role="alert">
        <h4 class="alert-heading"><i class="fas fa-exclamation-triangle"></i> Ooops!!</h4>
        <p>
            {{ session('message') }}
        </p>
        <hr>
      </div>
    </div>
        } 
    @endif
      {{--End of Alert--}}
  

    <br><br><br>
    <div class="loginadmin container justify-content-center mt-5">
        <div class="text-right">
            <a href="/" class="px-4"><i class="fa fa-times fa-lg fa-danger mt-3" style="color: white" aria-hidden="true"></i></a>
        </div>
        <form action="{{ route('admin') }}" method="POST" class="container" style="color: white">
            <center>
            <h4 class="mt-4"><i class="fas fa-user-shield"></i>&nbsp;LOGIN ADMIN</h4>
            </center><br>
            @csrf
            <label class="mt-3" for="username">USERNAME</label>
            <input id="username" type="text" name="username" class="form-control" size="30" required>
            <label for="password" class="mt-3">PASSWORD</label>
            <input id="password" type="password" name="password" class="form-control" size="30" required>
            <br>
            <button class="btn btn-success btn-sm rounded-pill mt-3" style="font-size: 1rem; font-weight: bold;">Login</button>
            <br><br><br>
        </form>
    </div>





    {{-- javascript link --}}
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