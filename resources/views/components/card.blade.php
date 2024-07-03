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


<div class="cardCustom">
    <div class="card__container">
        <article class="card__article">
            <img src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl() : 'https://picsum.photos/200' }}" class="card__img" alt="Immagine dell'articolo {{ $article->title }}">

            <div class="card__data">
                <h5 class="card__title">{{ $article->title }}</h5>
                <h6 class="price">{{$article->price}} €</h6>
                <a href="{{route('article.show', compact('article'))}}" class="btn btnCustom">Dettagli</a>
                <a href="{{ route('byCategory', ['category' => $article->category]) }}" class="btn btn-outline-info ms-2">{{ $article->category->name }}</a>
            </div>
        </article>
    </div>
</div>