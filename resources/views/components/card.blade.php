<x-layout>

    <div class="col-md-4 mb-3">
      <div class="card mx-auto shadow text-center">
          <img src="https://picsum.photos/200" class="card-img-top" alt="Immagine dell'articolo {{ $article->title }}">
          <div class="card-body">
              <h5 class="card-title">{{ $article->title }}</h5>
              <h6 class="card-subtitle text-muted">{{ $article->price }} €</h6>
              <div class="mt-4">
                  <a href="{{route('article.show', compact ('article'))}}" class="btn btn-primary">Dettaglio</a>
                  <a href="{{route('byCategory', ['category' => $category])}}" class="btn btn-outline-info ms-2">Categoria</a>
              </div>
          </div>
      </div>
    </div>
  
</x-layout>