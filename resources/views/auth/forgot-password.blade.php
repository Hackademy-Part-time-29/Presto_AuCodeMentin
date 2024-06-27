<x-layout>
    <div class="d-flex justify-content-center">
        <div class="login row ">
            <div class="col-12">
                <div class="heading">Recupera password</div>
                <form method="POST" action="/forgot-password" class="form">
                    @csrf
                    <input class="input" name="email" type="email" class="form-control" placeholder="E-mail">
                    <input class="login-button" type="submit" value="Reimposta password">
                </form>
            </div>
        </div>
    </div>
</x-layout>
