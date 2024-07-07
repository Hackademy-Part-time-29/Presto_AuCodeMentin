<div class="cardCustom">
    <div class="card__container">
        <article class="card__article">
            <img src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl() : 'https://picsum.photos/200' }}"
                class="card__img" alt="Immagine dell'articolo {{ $article->title }}">

            <div class="card__data">
                <h5 class="cardTitle">{{ $article->title }}</h5>
                <h6 class="price">{{ $article->price }} €</h6>
                <div class="row">
                    <div class="col-md-6 col-12"><a href="{{ route('article.show', compact('article')) }}"
                            class="btn primary-button mb-2">{{ __('articles.btn_detail') }}</a></div>
                    <div class="col-md-6 col-12"><a href="{{ route('byCategory', ['category' => $article->category]) }}"
                            class="btn secondary-button">{{ __('categories.' . $article->category->name) }}</a></div>
                </div>


            </div>
        </article>
    </div>
</div>
