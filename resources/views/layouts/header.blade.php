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
        <li class="nav-item"><a href="/aboutus" class="nav-link" style="font-size: 1rem">About Us</a></li>
        <li class="nav-item" style="font-size: 1rem; cursor:pointer">
        @if(Auth::user())
          <a href="" class="nav-link"><i class="fas fa-user"></i>&nbsp; {{Auth::user()->username}}
        @else
          <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link"><i class="fas fa-user"></i>&nbsp;Login
        @endif
      </a></li>
      @if (Auth::user())
      <li class="nav-item fw-bold" style="font-size: 1rem">
        <a class="btn btn-sm nav-link" style="background-color: red; transform: scale(0.5); font-size: 25px; border-radius: 40px; margin-top: -6%;"  href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         <i class="fas fa-power-off"></i> {{ __('Logout') }}
      </a>
      </li>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
         @csrf
     </form>
      @endif
      </ul>
    </div>
  </div>
</nav>
<!-- END nav -->