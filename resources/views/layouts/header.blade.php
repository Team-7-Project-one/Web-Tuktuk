<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Tuktuk<span>Tour</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation"><span class="oi oi-menu"></span> Menu</button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="/hotel" class="nav-link">Hotel</a></li>
            <li class="nav-item"><a href="/souvenir" class="nav-link">Souvenir</a></li>
            <li class="nav-item"><a href="/event" class="nav-link">Event</a></li>
            <li class="nav-item"><a href="/about" class="nav-link">About Us</a></li>
            <li class="nav-item">
            @if(Auth::user())
              <a href="" class="nav-link"><i class="fas fa-user"></i>&nbsp;{{Auth::user()->name}}
            @else
              <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link"><i class="fas fa-user"></i>&nbsp;Login
            @endif
          </a></li>
          @if (Auth::user())
          <li class="nav-item fw-bold">
            <a class="badge bg-danger nav-link px-2" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
          </a>
          </li>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>
          @endif
            {{-- <li class="nav-item">
              <div class="btn-group nav-link text-dark">
                <!-- <i class="far fa-user-circle fw-bold " style="font-size: 30px; color: #F9E79F;" data-bs-toggle="dropdown"></i>
                <button type="button" style="border: none; font-size: 20px" class="btn btn-light btn-sm dropdown-toggle bg-transparent text-dark fw-bold" data-bs-toggle="dropdown" aria-expanded="false"></button> -->
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
              </div>
            </li> --}}
          </ul>
        </div>
      </div>
    </nav>
<!-- END nav -->