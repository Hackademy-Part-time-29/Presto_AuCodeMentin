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
                <form action="#" class="sign-in-form">
                    <h2 class="title">Accedi</h2>
                    <div class="input-field">
                        <i class="bi bi-person-fill text-center"></i>
                        <input class="inputCustom" type="text" placeholder="Username" />
                    </div>
                    <div class="input-field">
                        <i class="bi bi-lock-fill text-center"></i>
                        <input class="inputCustom" type="password" placeholder="Password" />
                    </div>
                    <input type="submit" value="Login" class="btn primary-button" />
                    <p class="social-text">{{__('authForm.login-social')}}</p>
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
                <form action="#" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input class="inputCustom" type="text" placeholder="Username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input class="inputCustom" type="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input class="inputCustom" type="password" placeholder="Password" />
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
                    <h3>New here?</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                        ex ratione. Aliquid!
                    </p>
                    <button class="btn btnCustomLogin secondary-button" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="{{ asset('img/login.svg') }}" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>
                    <button class="btn btnCustomLogin secondary-button" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="{{ asset('img/register.svg') }}" class="image" alt="" />
            </div>
        </div>
    </div>

</x-layout>
