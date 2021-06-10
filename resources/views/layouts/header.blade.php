<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a id="title-web" class="navbar-brand" href="/" style="font-size: 2rem"><img src="{{asset('img/logo_web.png')}}" style="width: auto; max-width: 80%; height: auto; transform: scale(1.15); " alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation"><span class="oi oi-menu"></span> Menu</button>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item"><a href="/" class="nav-link" style="font-size: 1rem">Home</a></li>
        <li class="nav-item"><a href="/hotel" class="nav-link" style="font-size: 1rem">Hotel</a></li>
        <li class="nav-item"><a href="/souvenir" class="nav-link" style="font-size: 1rem">Souvenir</a></li>
        <li class="nav-item"><a href="/event" class="nav-link" style="font-size: 1rem">Event</a></li>
        <!-- <li class="nav-item"><a href="/aboutus" class="nav-link" style="font-size: 1rem">About Us</a></li> -->
        <li class="nav-item dropdown">
        @if(Auth::user())
          <a href="" style="font-size: 1rem" class="nav-link bg-transparent dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 1rem;">
            <i class="fas fa-user"></i>&nbsp; {{Auth::user()->username}}
          </a>
          @if (Auth::user())
            <ul style="border: 1px solid red; margin-top: -20px;" class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
              <li>
                <a class="badge dropdown-item text-danger fs-6" {{--style="background-color: red; transform: scale(0.5); border-radius: 40px;"--}}  href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                <i class="fas fa-power-off"></i> {{ __('Logout') }}
              </a>
              </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </ul>
      </li>
        @endif
          <li class="nav-item dropdown" style="font-size: 1rem; cursor:pointer">
        @else
          <a class="nav-link" style="cursor: pointer;" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user"></i>&nbsp;Login
          </a>
          
          <ul style="margin-top: -15px;" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li class="container"><a class="" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-size: 0.9rem; cursor:pointer"><i class="fas fa-user"></i>&nbsp;Login As User</a></li>
            <li class="container"><a href="{{ route('admin') }}" style="font-size: 0.9rem; cursor:pointer"><i class="fas fa-user-shield"></i> Login As Admin</a></li>

          </ul>

          {{-- <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link" style="font-size: 1rem; cursor:pointer"><i class="fas fa-user"></i>&nbsp;Login</a> --}}
        @endif
      </li>
      </ul>
</nav>
<!-- END nav -->