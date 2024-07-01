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
            <input type="file" wire:model.live=>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-dark">Crea</button>
        </div>
    </form>
</div>
