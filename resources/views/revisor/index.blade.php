<x-layout>
    <div class="container-fluid">

        @if (session()->has('message'))
            <div class="row justify-content-center">
                <div class="col-5 alert alert-success text-center shadow rounded">
                    {{ session('message') }}
                </div>
            </div>
        @endif

        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="display-5 text-center heading pb-2">
                    {{ __('revisor.dashboard') }}
                </h1>
            </div>
        </div>

        <div class="row">

            @if ($article_to_check)
                @if (count($article_to_check->images) < 1)
                    <div class="col-12 col-md-6 container-custom mx-auto">
                        <div class="row g-0">
                            <div class="col-md-12 rounded">
                                <img src="{{'/img/img_cat/cat'.($article_to_check->category->id).'.jpeg'}}" width="400" height="400" class="img-fluid rounded-start"
                                    alt="Immagine utente mancante">
                            </div>
                        </div>
                    </div>
                @endif
                <div class="col-12 col-md-6 ps-4 d-flex flex-column justify-content-between">
                    <h1>{{ $article_to_check->title }}</h1>
                    <h3>{{ __('revisor.author') }} : {{ $article_to_check->user->name ?? null }}</h3>
                    <h4>{{ __('categories.price') }} {{ $article_to_check->price }}€</h4>
                    <h4 class="fst-italic text-muted">{{ __('categories.category') }}
                        {{ $article_to_check->category->name }}</h4>
                    <p class="h6">{{ __('categories.description') }}
                        {{ $article_to_check->description }}</p>
                </div>
                
                @foreach ($article_to_check->images as $key => $image)
                    <div class="col-4 container-custom mx-auto">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ $image->getUrl(400, 400) ?? '/img/img_cat/cat'.($article_to_check->category->id).'.jpeg'}}" class="img-fluid rounded-start"
                                    alt="Immagine {{ $key + 1 }} dell'articolo '{{ $article_to_check->title }}'">
                            </div>
                            <div class="col-md-8 ps-3">
                                <div class="card-body">
                                    <h5 class="card-title">Ratings</h5>
                                    <div class="row justify-content-center">
                                        <div class="col-2">
                                            <div class="text-center mx-auto {{ $image->adult }}">
                                            </div>
                                        </div>
                                        <div class="col-10">adult</div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-2">
                                            <div class="text-center mx-auto {{ $image->violence }}">
                                                <!-- Icon or symbol for 'violence' rating -->
                                            </div>
                                        </div>
                                        <div class="col-10">violence</div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-2">
                                            <div class="text-center mx-auto {{ $image->spoof }}">
                                                <!-- Icon or symbol for 'spoof' rating -->
                                            </div>
                                        </div>
                                        <div class="col-10">spoof</div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-2">
                                            <div class="text-center mx-auto {{ $image->racy }}">
                                                <!-- Icon or symbol for 'racy' rating -->
                                            </div>
                                        </div>
                                        <div class="col-10">racy</div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-2">
                                            <div class="text-center mx-auto {{ $image->medical }}">
                                                <!-- Icon or symbol for 'medical' rating -->
                                            </div>
                                        </div>
                                        <div class="col-10">medical</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>





        <div class="d-flex flex-column text-center flex-md-row margin-custom">
            <div class="col-md-4 col-12 my-5 mb-5">
                <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <button class="btn delate-button py-2 px-5 fw-bold">{{ __('revisor.btn_delete') }}</button>
                </form>
            </div>
            <div class="col-md-4 col-12 my-5 mb-5">
                @if ($latest_article)
                    <form action="{{ route('rollback', ['article' => $latest_article]) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <button class="btn thertiry-button fw-bold">{{ __('revisor.btn_last') }}</button>
                    </form>
                @endif
            </div>
            <div class="col-md-4 col-12 my-5 mb-5">
                <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <button class="btn success-button py-2 px-5 fw-bold">{{ __('revisor.btn_accept') }}</button>
                </form>
            </div>
        </div>
    </div>
@else
    <div class="row justify-content-center align-items-center height-custom text-center">
        <div class="col-12">
            <h1 class="fst-italic display-4">
                {{ __('revisor.head') }}
            </h1>
        </div>
    </div>

    @if ($latest_article)
        <div class="row mt-5">
            <div class="d-flex flex-column text-center flex-md-row margin-custom">
                <div class="col-md-6 col-12 mb-4">
                    <a href="{{ route('home') }}" class="btn primary-button">{{ __('revisor.btn_back') }}</a>
                </div>

                <div class="col-md-6 col-12">
                    <form action="{{ route('rollback', ['article' => $latest_article]) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <button class="thertiry-button">{{ __('revisor.btn_last') }}</button>
                    </form>
                </div>
            </div>
        </div>
    @endif

    @endif
    </div>
</x-layout>
