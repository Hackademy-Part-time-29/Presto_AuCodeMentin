<x-layout>

    <div class="row">
        <div class="col-12">
            <form method="POST" action="/login">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" required>
                    <div class="form-text">Non condivideremo la tua email mai con nessuno.</div>
                </div>
                @error('email')
                    <p class="fst-italic text-danger">
                        {{ $message }}
                    </p>
                @enderror

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" required>
                </div>
                @error('password')
                    <p class="fst-italic text-danger">
                        {{ $message }}
                    </p>
                @enderror

                <div class="mb-3 form-check">
                    <input name="remember" type="checkbox" class="form-check-input">
                    <label class="form-check-label" for="remember">Ricordami</label>
                </div>

                <button type="submit" class="btn btn-primary">Accedi</button>
            </form>

            <a class="btn btn-link" href="{{ route('register') }}">Se non sei registrato, subito!</a>
        </div>
    </div>

</x-layout>
