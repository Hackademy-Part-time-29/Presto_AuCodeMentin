<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('img/logo.png') }}" alt="CodeCommerce Logo" class="logo">
            {{ env('APP_NAME') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('article.index') }}">{{__('ui.article')}}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{__('ui.categories')}}
                    </a>
                    <ul class="dropdown-menu">

                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item text-capitalize"
                                    href="{{ route('byCategory', ['category' => $category->id]) }}">{{ $category->name }}</a>
                                @if (!$loop->last)
                                    <hr class="dropdown-divider">
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </li>

            </ul>
            <ul class="navbar-nav">
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-cart"></i> Carrello</a>
                </li> --}}

                {{-- <form role="search" action="{{ route('article.search') }}" method="GET" class="d-flex"
                    role="search">
                    <button class="btn btn-outline-secondary" type="submit" id="basic-addon2">Search</button>
                    <input class="form-control ms-2" type="search" name="query" placeholder="Search"
                        aria-label="Search">
                </form> --}}

                <livewire:search />

                <x-_locale lang="it" />
                <x-_locale lang="en" />
                <x-_locale lang="es" />

                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><i
                                class="bi bi-person"></i> {{ auth()->user()->name ?? 'Utente' }}</a>
                                
                            @if (Auth::user()->is_revisor)
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    {{ \App\Models\Article::toBeRevisedCount() }}
                                </span>
                            @endif
                        <ul class="dropdown-menu dropdown-menu-end">
                            @if (Auth::user()->is_revisor)
                                <li class="nav-item">
                                    <a class="dropdown-item"
                                        href="{{ route('revisor.index') }}">Zona revisore
                                    </a>
                                </li>
                            @endif
                            <li><hr class="dropdown-divider"></li>
                            {{-- <li><a class="dropdown-item" href="#">Impostazioni</a></li>
                            <li><a class="dropdown-item" href="#">Gestione account</a></li> --}}
                            {{-- <li><hr class="dropdown-divider"></li> --}}
                            <li>
                                <a class="dropdown-item" href="#"
                                    onclick="
                                event.preventDefault();
                                  getElementById('form-logout').submit();
                                ">
                                    Logout
                                </a>
                            </li>

                            <form id="form-logout" method="POST" action="/logout" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
<<<<<<< HEAD
                        <a class="nav-link" href="/login">Accedi/Registrati</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="/register">Registrati</a>
                    </li> --}}
=======
                        <a class="nav-link" href="/login">{{__('ui.login')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">{{__('ui.signup')}}</a>
                    </li>
>>>>>>> 8599e96453aa8643d8622e1e39bdcafd773431bb
                @endauth
            </ul>
        </div>
    </div>
</nav>
