{{-- <div class="card-custom mx-auto shadow text-center">
    <img src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl(300, 300) : 'https://picsum.photos/200' }}"
    class="card-img-top" alt="Immagine dell'articolo {{ $article->title }}">
    <div class="card__content">
        <h5 class="card__title">{{ $article->title }}</h5>
        <h6 class="price">{{$article->price}} €</h6>
        <div class="mt-4">
            <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary">Dettaglio</a>
            <a href="{{ route('byCategory', ['category' => $article->category]) }}"
                class="btn btn-outline-info ms-2">{{ $article->category->name }}</a>
        </div>
    </div>
</div> --}}


<div class="card-custom-2">
    <div class="card-container-2">
        <article class="card-article">
            <img src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl() : 'https://picsum.photos/200' }}" class="card-img" alt="Immagine dell'articolo {{ $article->title }}">

            <div class="cart-content">
                <h5 class="card-title">{{ $article->title }}</h5>
                <h6 class="price">{{$article->price}} €</h6>
                <a href="{{route('article.show', compact('article'))}}" class="btn btn-custom">Dettagli</a>
                <a href="{{ route('byCategory', ['category' => $article->category]) }}" class="btn btn-outline-info ms-2">{{ $article->category->name }}</a>
            </div>
        </article>
    </div>
</div>