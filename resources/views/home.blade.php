<x-layout>
  
    @if (session()->has('message'))
        <div class="alert alert-success text-center shadow rounded w-50">
            {{ session('message') }}
        </div>
    @endif

  
  <div class="row rounded-gradient align-items-center m-auto">
    <div class="col-md-6">
      <h1>Benvenuti su {{ env('APP_NAME') }}</h1>
      <h4>Inserisci un annuncio per vendere ciò che speri possa regalare le stesse emozioni che hai avuto tu!</h4>
      
    </div>
    <div class="col-md-6 text-md-end text-center">
      <img src="{{ asset('img/codecommerce-sfondo.png') }}" class="logoSfondo" alt="Logo">
    </div>
  </div>
  
  
  <div class="row justify-content-center py-5">
    @if (session()->has('errorMessage'))
      <div class="alert alert-danger text-center shadow rounded w-50 mx-auto">
          {{ session('errorMessage') }}
      </div>
    @endif
    <div class="container">
      <div class="row justify-content-beetwen align-items-center">
          <div class="col-6">
            <h1>Articoli più recenti</h1>
          </div>
          <div class="col-6 text-end">
            <a href="{{ route('article.create') }}" class="btn btn-custom me-3"><i class="bi bi-plus-circle"></i> Inserisci un annuncio</a>
            <a href="{{ route('article.index') }}" class="btn btn-custom">Tutti gli articoli</a>
          </div>
      </div>
    </div>

    @forelse ($articles as $article)
        <div class="col-12 col-md-3 mb-4 mt-4">
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

</x-layout>