<x-layout>

    <div class="row">
        <div class="col-12">
            <form method="POST" action="/register">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input name="name" type="text" class="form-control">
                </div>
                @error('name')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control">
                </div>
                @error('email')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control">
                </div>
                @error('password')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Conferma Password</label>
                    <input name="password_confirmation" type="password" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Registrati</button>
            </form>
        </div>
    </div>

</x-layout>
