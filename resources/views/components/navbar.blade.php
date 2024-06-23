<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                    <a class="nav-link" href="{{route('article.index')}}">Annunci</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu">
                        
                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item text-capitalize" href="{{route('byCategory', ['category' => $category->id])}}">{{ $category->name }}</a>
                                @if (!$loop->last)
                                    <hr class="dropdown-divider">
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </li>
                
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-cart"></i> Carrello</a>
                </li> --}}
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><i class="bi bi-person"></i> {{auth()->user()->name ?? "Utente"}}</a>
                        <ul class="dropdown-menu dropdown-menu-end">
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
                        <a class="nav-link" href="/login">Accedi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Registrati</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
