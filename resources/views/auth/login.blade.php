<x-layout>
    <div class="d-flex justify-content-center card-container">
        {{-- Inizio form login --}}
        <div class="login row ">
            <div class="col-12">
                <div class="heading">{{ __('authForm.login') }}</div>
                <form method="POST" action="/login" class="form">
                    @csrf
                    <input class="input" name="email" type="email" class="form-control" placeholder="E-mail">
                    @error('email')
                        <p class="fst-italic text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                    <input class="input" name="password" type="password" class="form-control" placeholder="Password">
                    @error('password')
                        <p class="fst-italic text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                    <span class="forgot-password">
                        <a href="{{ route('password.request') }}">{{ __('authForm.forgotten_pass') }}</a>
                    </span>
                    <span class="forgot-password">
                        <a href="{{ route('register') }}">{{ __('authForm.register_msg') }}</a>
                    </span>
                    <input class="login-button" type="submit" value="{{ __('authForm.sign_in') }}">
                </form>
            </div>
        </div>
    </div>


    {{-- Form js figo --}}

    {{-- <div class="container__login heightCustom">
        <div class="forms__container row">
            <div class="signin__signup"> --}}
    <!-- form login -->
    {{-- <form action="" class="signin__form">
                    <h2 class="title__form">Accedi</h2>
                    <div class="input__field">
                        <i class="bi bi-person-fill text-center"></i>
                        <input class="input__custom" type="text" placeholder="Username">
                    </div>
                    <div class="input__field">
                        <i class="bi bi-lock-fill text-center"></i>
                        <input class="input__custom" type="password" placeholder="Password">
                    </div>
                    <input type="submit" value="Accedi" class="btn btnCustom mt-2 mb-2">
                    <p class="social__text">Entra con un social network</p>
                    <div class="social__media justify-content-center row">
                        <div class="social__icon d-flex justify-content-center align-items-center">
                            <i class="bi bi-github"></i>
                        </div>
                        <div class="social__icon d-flex justify-content-center align-items-center">
                            <i class="bi bi-facebook"></i>
                        </div>
                        <div class="social__icon d-flex justify-content-center align-items-center">
                            <i class="bi bi-google"></i>
                        </div>
                    </div>
                </form>
     --}}
    <!-- form register -->
    {{-- <form action="" class="signup__form">
                    <h2 class="title__form">Registrati</h2>
                    <div class="input__field">
                        <i class="bi bi-person-fill text-center"></i>
                        <input class="input__custom" type="text" placeholder="Username">
                    </div>
                    <div class="input__field">
                        <i class="bi bi-envelope-fill text-center"></i>
                        <input class="input__custom" type="mail" placeholder="Email">
                    </div>
                    <div class="input__field">
                        <i class="bi bi-lock-fill text-center"></i>
                        <input class="input__custom" type="password" placeholder="Password">
                    </div>
                    <input type="submit" value="Registrati" class="btn btnCustom mt-2 mb-2">
                    <p class="social__text">Registrati con un social network</p>
                    <div class="social__media justify-content-center row">
                        <div class="social__icon d-flex justify-content-center align-items-center">
                            <i class="bi bi-github"></i>
                        </div>
                        <div class="social__icon d-flex justify-content-center align-items-center">
                            <i class="bi bi-facebook"></i>
                        </div>
                        <div class="social__icon d-flex justify-content-center align-items-center">
                            <i class="bi bi-google"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="panels__container">
            <div class="panel__custom left__panel">
                <div class="content">
                    <h3>Sei nuovo?</h3>
                    <p>Registrati per inserire nuovi annunci?</p>
                    <button class="btn btnCustom" id="sign-up-btn">Registrati</button>
                </div>
                <img src="{{ asset('img/login.svg') }}" class="img__auth" alt="">
            </div>
            <div class="panel__custom right__panel">
                <div class="content">
                    <h3>Sei già registrato?</h3>
                    <p>Accedi per inserire nuovi annunci?</p>
                    <button class="btn btnCustom" id="sign-in-btn">Accedi</button>
                </div>
                <img src="{{ asset('img/register.svg') }}" class="img__auth" alt="">
            </div>
        </div>
    </div>
     --}}

</x-layout>
