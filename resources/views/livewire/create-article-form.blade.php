<div>
    @if (session()->has('success'))
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            </div>
        </div>
    @endif

    <form class="container-custom form shadow rounded p-5 my-5" wire:submit="store">

        <div class="mb-3">
            <label for="title" class="text">{{__('create-article.title')}} :</label>
            <input type="text" class="input @error('title') is-invalid @enderror" id="title"
                wire:model.blur="title">
        </div>
        @error('title')
            <p class="fst-italic text-danger">
                {{ $message }}
            </p>
        @enderror

        <div class="mb-3">
            <label for="description" class="text">{{__('create-article.description')}} :</label>
            <textarea id="description" cols="30" rows="10" class="input @error('title') is-invalid @enderror"
                wire:model.blur="description"></textarea>
        </div>
        @error('description')
            <p class="fst-italic text-danger">
                {{ $message }}
            </p>
        @enderror

        <div class="mb-3">
            <label for="price" class="text">{{__('create-article.price_in')}} :</label>
            <input type="text" class="input @error('title') is-invalid @enderror" id="price"
                wire:model.blur="price">
        </div>
        @error('price')
            <p class="fst-italic text-danger">
                {{ $message }}
            </p>
        @enderror

        <div class="mb-3">
            <label for="category" class="text">{{__('create-article.select_cat')}} :</label>
            <select id="category" wire:model.blur="category" class="input @error('title') is-invalid @enderror">
                <option label> --{{__('create-article.selezione')}}-- </option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        @error('category')
            <p class="fst-italic text-danger">
                {{ $message }}
            </p>
        @enderror

        <label class="primary-button" for="file">
            <div>
            <span class="input-group"><i class="bi bi-images"></i> </span>
            <input type="file" id="file" wire:model.live="temporary_images" multiple class=" input @error('temporary_images.*') is-invalid @enderror" placeholder="Img/">
            @error('temporary_images.*')
                <p class="fst-italic text-danger">{{$message}}</p>
            @enderror
            @error('temporary_images')
                <p class="fst-italic text-danger">{{$message}}</p>
            @enderror
        </div>
        </label>
        

        @if (!empty($images))
            <div class="row">
                <div class="col-12">
                    <p>{{__('create-article.prev-photo')}}: </p>
                    <div class="row  rounded shadow py-4">
                        @foreach ($images as $key=>$image)
                            <div class="col d-flex flex-column align-items-center my-3">
                                <div class="img-preview mx-auto shadow rounded" style="background-image: url({{ $image->temporaryUrl()}});"></div>
                                <button type="button" class="btn mt-1 btn-danger" wire:click="removeImage({{$key}})">X</button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
        @endif

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn primary-button">{{__('create-article.btn_create')}}</button>
        </div>
    </form>
</div>
