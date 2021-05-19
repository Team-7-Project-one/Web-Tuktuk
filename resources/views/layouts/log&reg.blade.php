 <!-- Modal login-->
 <div class="modal fade" style="background-image: url(/img/login.jpg); height: 100%;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
    <div class="modal-content" style="border: none; border-radius: 20px; background-color: rgba(255, 255, 255, 0.15); backdrop-filter: blur(5px); box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;">
        <div class="modal-body text-light">
        <center><br>
            <h3 class="fw-bold text-light"><i class="fas fa-user-alt"></i> LOGIN</h3>
        </center>
        <form method="POST" action="{{ route('login') }}" class="container">
            @csrf
            <label for="">{{ __('E-Mail') }}</label>
            <input id="loginput" type="email" style="background-color: transparent;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukkan Email anda ...."  />
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br />
            <label for="">Password</label>
            <input id="loginput" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Masukkan Password anda ...." />
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br />
            <center>
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label><br><br>
                    <button type="submit" id="login" class="btn fw-bold p-2 rounded-pill">
                        {{ __('Login') }}
                    </button><br>
        
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
            <p>Don't have account? <a href="" class="" {{--style="text-decoration: none"--}} data-bs-toggle="modal" data-bs-target="#registerModal">Register here</a></p>
            <p>OR</p>
            <button id="gogle" class="btn btn"><i class="fab fa-google-plus-g"></i></button>
            <button id="fb" class="btn btn"><i class="fab fa-facebook-f"></i></button>
            </center>
        </form>
        <br />
        </div>
    </div>
    </div>
</div>

    <!-- Modal registrasi-->
    <div class="modal fade" style="background-image: url(/img/login.jpg); height: 100%;" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
    <div class="modal-content" style="border: none; border-radius: 20px; background-color: rgba(255, 255, 255, 0.15); backdrop-filter: blur(5px); box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;">
        <div class="modal-body text-light">
        <center><br>
            <h3 class="fw-bold text-light"><i class="fas fa-registered"></i> REGISTER</h3>
        </center>
        <form action="{{ route('register') }}" method="POST" class="container">
            @csrf
            <label for="">Nama</label>
            <input id="loginput" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Masukkan Nama anda ...." />
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br />
            <label for="">Email</label>
            <input id="loginput" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukkan Email anda ...." />
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br />
            <label for="">Password</label>
            <input id="loginput" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Masukkan Password anda ...." /><br />
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label for="">Confirm Password</label>
            <input id="loginput" {{--id="password-confirm"--}} type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"/>
            <br />
            <center>
            <button id="register" class="btn fw-bold p-2 rounded-pill">Register</button><br /><br>
            </center>
        </form>

        <br><br>
        <br />
        </div>
    </div>
    </div>
</div>