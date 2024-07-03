<x-layout>

    @if (session()->has('message'))
        <div class="col-12 d-flex justify-content-center">
            <div class="alert alert-success text-center shadow rounded w-50 self">
                {{ session('message') }}
            </div>
        </div>
    @endif

    <div class="row rounded-gradient align-items-center m-auto">
        <div class="col-md-6">
            <h1>Benvenuti su {{ env('APP_NAME') }}</h1>
            <h4>Inserisci un annuncio per vendere ciò che speri possa regalare le stesse emozioni che hai avuto tu!</h4>
            <a href="{{ route('article.create') }}" class="btn btnCustom me-3"><i class="bi bi-plus-circle"></i> Inserisci un annuncio</a>

        </div>
        <div class="col-md-6 text-md-end text-center">
            <img src="{{ asset('img/codecommerce-sfondo.png') }}" class="logoSfondo" alt="Logo">
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center">
            @if (session()->has('errorMessage'))
                <div class="alert alert-danger text-center shadow rounded w-50 mx-auto">
                    {{ session('errorMessage') }}
                </div>
            @endif
            
            <div class="col-12 col-md-6">
                <h1>Articoli più recenti</h1>
            </div>
            
            <div class="col-12 col-md-6 text-end">
                <a href="{{ route('article.index') }}" class="btn btnCustom">Tutti gli articoli</a>
            </div>

            @forelse ($articles as $article)
                <div class="col-md-6 col-lg-3 col-xs-12 ">
                    <x-card :article="$article" :categories="$categories" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        Non sono ancora stati creati articoli
                    </h3>
                </div>
            @endforelse

        </div>
    </div>


</x-layout>
