<div class="cardCustom">
    <div class="card__container">
        <article class="card__article">
            <img src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl() : 'https://picsum.photos/200' }}" class="card__img" alt="Immagine dell'articolo {{ $article->title }}">

            <div class="card__data">
                <h5 class="cardTitle">{{ $article->title }}</h5>
                <h6 class="price">{{$article->price}} €</h6>
                <a href="{{route('article.show', compact('article'))}}" class="btn btnCustom">Dettagli</a>
                <a href="{{ route('byCategory', ['category' => $article->category]) }}" class="btn btn-outline-info ms-2">{{ $article->category->name }}</a>
            </div>
        </article>
    </div>
</div>