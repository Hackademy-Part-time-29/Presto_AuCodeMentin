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

    <form class="bg-body-tertiary shadow rounded p-5 my-5" wire:submit="store">

        <div class="mb-3">
            <label for="title" class="form-label">Titolo :</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                wire:model.blur="title">
        </div>
        @error('title')
            <p class="fst-italic text-danger">
                {{ $message }}
            </p>
        @enderror

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione :</label>
            <textarea id="description" cols="30" rows="10" class="form-control @error('title') is-invalid @enderror"
                wire:model.blur="description"></textarea>
        </div>
        @error('description')
            <p class="fst-italic text-danger">
                {{ $message }}
            </p>
        @enderror

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo in € :</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="price"
                wire:model.blur="price">
        </div>
        @error('price')
            <p class="fst-italic text-danger">
                {{ $message }}
            </p>
        @enderror

        <div class="mb-3">
            <label for="category">Seleziona una categoria :</label>
            <select id="category" wire:model.blur="category" class="form-control @error('title') is-invalid @enderror">
                <option label>-- Seleziona --</option>
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

        <div class="mb-3">
            <input type="file" wire:model.live="temporary_images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img/">
            @error('temporary_images.*')
                <p class="fst-italic text-danger">{{$message}}</p>
            @enderror
            @error('temporary_images')
                <p class="fst-italic text-danger">{{$message}}</p>
            @enderror
        </div>

        @if (!empty($images))
            <div class="row">
                <div class="col-12">
                    <p>Preview Foto: </p>
                    <div class="row border border-4 border-success rounded shadow py-4">
                        @foreach ($images as $key=>$image)
                            <div class="col d-flex flex-column align-items-center my-3">
                                <div class="img-preview mx-auto shadow rounded"  style="background-image: url({{ $image->temporaryUrl()}});"></div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
        @endif

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-dark">Crea</button>
        </div>
    </form>
</div>
