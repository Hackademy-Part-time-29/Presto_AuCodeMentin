<x-layout>
    {{-- <div class="d-flex justify-content-center card-container">
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
    </div> --}}

    {{-- Form js --}}
    <div class="containerCustom heightCustom">
        <div class="formsContainer">
            <div class="loginRegister">
                <form method="POST" action="/login" class="sign-in-form" id="loginRegisterForm">
                    @csrf
                    <h2 class="title">Accedi</h2>
                    <div class="input-field">
                        <i class="bi bi-person-fill text-center"></i>
                        <input class="inputCustom" name="email" type="email" placeholder="Username" />
                    </div>
                    @error('email')
                        <p class="fst-italic text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class="input-field">
                        <i class="bi bi-lock-fill text-center"></i>
                        <input class="inputCustom" name="password" type="password" placeholder="Password" />
                    </div>
                    @error('password')
                        <p class="fst-italic text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                    <span class="forgot-password">
                        <a href="{{ route('password.request') }}">{{ __('authForm.forgotten_pass') }}</a>
                    </span>
                    <input type="submit" value="Login" class="btn primary-button mt-2 mb-3" />
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="bi bi-github"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="bi bi-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </div>
                </form>
                <form method="POST" action="/register" class="sign-up-form" id="loginRegisterForm">
                    @csrf
                    <h2 class="title">Registrati</h2>
                    <div class="input-field">
                        <i class="bi bi-person-fill text-center"></i>
                        <input class="inputCustom" name="name" type="text" placeholder="Username" />
                    </div>
                    @error('name')
                        <p class="fst-italic text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class="input-field">
                        <i class="bi bi-envelope-fill text-center"></i>
                        <input class="inputCustom" name="email" type="email" placeholder="Email" />
                    </div>
                    @error('email')
                        <p class="fst-italic text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class="input-field">
                        <i class="bi bi-lock-fill text-center"></i>
                        <input class="inputCustom" name="password" type="password" placeholder="Password" />
                    </div>
                    @error('password')
                        <p class="fst-italic text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class="input-field">
                        <i class="bi bi-lock-fill text-center"></i>
                        <input class="inputCustom" name="password_confirmation" type="password" type="password" placeholder="Password" />
                    </div>
                    <input type="submit" class="btn primary-button" value="Sign up" />
                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="bi bi-github"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="bi bi-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Non sei registrato?</h3>
                    <p class="text-center">
                        Se non sei registrato, fallo subito!
                    </p>
                    <button class="btn btnCustomLogin secondary-button" id="sign-up-btn">
                        Registrati
                    </button>
                </div>
                <img src="{{ asset('img/login.svg') }}" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Hai già un'account?</h3>
                    <p class="text-center">
                        Effettua l'accesso, vendi e compra ciò che vuoi!
                    </p>
                    <button class="btn btnCustomLogin secondary-button" id="sign-in-btn">
                        Accedi
                    </button>
                </div>
                <img src="{{ asset('img/register.svg') }}" class="image" alt="" />
            </div>
        </div>
    </div>

</x-layout>
