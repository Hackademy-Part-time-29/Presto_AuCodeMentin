<x-layout>
    @if (session()->has('message'))
        <div class="row justify-content-center">
            <div class="col-5 alert alert-success text-center shadow rounded">
                {{ session('message') }}
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-3">
            <div class="rounded shadow bg-body-secondary">
                <h1 class="display-5 text-center pb-2">
                    {{__('revisor.dashboard')}}
                </h1>
            </div>
        </div>
        @if ($latest_article)
            <div class="col-3">
                <form action="{{ route('rollback', ['article' => $latest_article]) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <button class="btn btn-warning py-2 px-5 fw-bold">{{__('revisor.btn_last')}}</button>
                </form>
            </div>
        @endif
    </div>
    @if ($article_to_check)
        <div class="row justify-content-center pt-5">
            <div class="col-md-8">
                <div class="row justify-content-center">
                
                @if ($article_to_check->images->count())
                    @foreach ($article_to_check->images as $key => $image)
                        <div class="col-6 col-md-4 mb-4 text-center">
                            <img src="{{ $image->getUrl(300, 300) }}" class="img-fluid rounded shadow"
                                alt="immagine {{ $key + 1 }} dell'articolo '{{ $article_to_check->title }}'">
                        </div>
                    @endforeach
                @else    
                    @for ($i = 0; $i < 6; $i++)
                        <div class="col-6 col-md-4 mb-4 text-center">
                            <img src="https://picsum.photos/308"
                             class="img-fluid rounded shadow" alt="immagine segnaposto">
                        </div>
                    @endfor
                @endif
                </div>
            </div>
            <div class="col-md-4 ps-4 d-flex flex-column justify-content-between">
                <h1>{{ $article_to_check->title }}</h1>
                <h3>{{__('revisor.author')}}: {{ $article_to_check->user->name ?? null }}</h3>
                <h4>{{ $article_to_check->price }}€</h4>
                <h4 class="fst-italic text-muted">#{{ $article_to_check->category->name }}</h4>
                <p class="h6">{{ $article_to_check->description }}</p>
            </div>
            <div class="d-flex pb-4 justify-content-around">
                <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <button class="btn btn-danger py-2 px-5 fw-bold">{{__('revisor.btn_accept')}}</button>
                </form>

                <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <button class="btn btn-success py-2 px-5 fw-bold">{{__('revisor.btn_accept')}}</button>
                </form>
            </div>
        </div>
    @else
        <div class="row justify-content-center align-items-center height-custom text-center">
            <div class="col-12">
                <h1 class="fst-italic display-4">
                    {{__('revisor.head')}}
                </h1>
                <a href="{{ route('home') }}" class="mt-5 btn btn-custom">{{__('revisor.btn_back')}}</a>
            </div>
        </div>
    @endif
</x-layout>
