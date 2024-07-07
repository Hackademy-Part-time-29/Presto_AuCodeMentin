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
                    <h2 class="title">{{__('authForm.login')}}</h2>
                    <div class="input-field">
                        <i class="bi bi-person-fill text-center"></i>
                        <input class="inputCustom" name="email" type="email" placeholder="Username">
                    </div>
                    @error('email')
                        <p class="fst-italic text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class="input-field">
                        <i class="bi bi-lock-fill text-center"></i>
                        <input class="inputCustom" name="password" type="password" placeholder="Password">
                    </div>
                    <span class="forgot-password">
                        <a href="{{ route('password.request') }}">{{ __('authForm.forgotten_pass') }}</a>
                    </span>
                    <button class="primary-button" type="submit">Login</button>

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
                <form method="POST" action="/register" class="sign-up-form" id="loginRegisterForm">
                    @csrf
                    <h2 class="title">{{__('authForm.register')}}</h2>
                    <div class="input-field">
                        <i class="bi bi-person-fill text-center"></i>
                        <input class="inputCustom" name="name" type="text" placeholder="Username">
                    </div>
                    @error('name')
                        <p class="fst-italic text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class="input-field">
                        <i class="bi bi-envelope-fill text-center"></i>
                        <input class="inputCustom" name="email" type="email" placeholder="Email">
                    </div>
                    @error('email')
                        <p class="fst-italic text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class="input-field">
                        <i class="bi bi-lock-fill text-center"></i>
                        <input class="inputCustom" name="password" type="password" placeholder="Password">
                    </div>
                    @error('password')
                        <p class="fst-italic text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class="input-field">
                        <i class="bi bi-lock-fill text-center"></i>
                        <input class="inputCustom" name="password_confirmation" type="password" type="password" placeholder="Password">
                    </div>
                    <button class="primary-button" type="submit">{{__('authForm.register')}}</button>

                    
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
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>{{__('authForm.new-user')}}</h3>
                    <p>
                       {{__('authForm.desc-NewUser')}}
                    </p>
                    <button class="btn btnCustomLogin secondary-button" id="sign-up-btn">
                        {{__('authForm.register')}}
                    </button>
                </div>
                <img src="{{ asset('img/login.svg') }}" class="image" alt="">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>{{__('authForm.old-user')}}</h3>
                    <p class="text-center">
                        {{__('authForm.access')}}
                    </p>
                    <button class="btn btnCustomLogin secondary-button" id="sign-in-btn">
                        {{__('authForm.login')}}
                    </button>
                </div>
                <img src="{{ asset('img/register.svg') }}" class="image" alt="">
            </div>
        </div>
    </div>

</x-layout>
