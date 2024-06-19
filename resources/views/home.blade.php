<x-layout>

  <div class="container">
    <div class="row rounded-gradient align-items-center">
      <div class="col-md-6">
        <h1>Benvenuti su {{ env('APP_NAME') }}</h1>
        <h4>Inserisci un annuncio per vendere ciò che speri possa regalare le stesse emozioni che hai avuto tu!</h4>
        <div class="center-button-container">
          <a href="{{ route('article.create') }}" class="btn btn-custom"><i class="bi bi-plus-circle"></i> Inserisci un annuncio</a> 
        </div>
      </div>
      <div class="col-md-6 text-md-end text-center">
        <img src="{{ asset('img/codecommerce-sfondo.png') }}" class="logoSfondo" alt="Logo">
      </div>
    </div>
  </div>
  
</x-layout>