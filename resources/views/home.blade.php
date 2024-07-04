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
            <h1> {{ __('home.welcome') }} {{ env('APP_NAME') }}</h1>
            <h4>{{__('home.desc_welcome')}}</h4>
            <a href="{{ route('article.create') }}" class="btn btnCustom me-3"><i class="bi bi-plus-circle"></i> {{__('home.add_article')}}</a>

        </div>
        <div class="col-md-6 text-md-end text-center">
            <img src="{{ asset('img/codecommerce-sfondo.png') }}" class="logoSfondo" alt="Logo">
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center py-5">
            @if (session()->has('errorMessage'))
                <div class="alert alert-danger text-center shadow rounded w-50 mx-auto">
                    {{ session('errorMessage') }}
                </div>
            @endif
            
            <div class="col-12 col-md-6 pb-4">
                <h1>{{__('home.new_articles')}}</h1>
            </div>
            
            <div class="col-12 col-md-6 text-end">
                <a href="{{ route('article.index') }}" class="btn btnCustom">{{__('home.all_articles')}}</a>
            </div>

            @forelse ($articles as $article)
                <div class="col-md-6 col-lg-3 col-xs-12 pb-5">
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
