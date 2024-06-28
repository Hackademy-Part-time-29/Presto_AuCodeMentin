<x-layout>

    <div class="d-flex justify-content-center">
        <div class="login row ">
            <div class="col-12">
                <div class="heading">Reimposta password</div>
                <form method="POST" action="/reset-password" class="form">
                    @csrf
                    <input name="token" type="hidden" value="{{request()->route('token')}}">                    
                    <input class="input" name="email" type="email" class="form-control" placeholder="E-mail">
                    <input class="input" name="password" type="password" class="form-control" placeholder="Password">
                    <input class="input" name="password_confirmation" type="password" class="form-control" placeholder="Ripeti password">                    
                    <input class="login-button" type="submit" value="Reimposta">
                </form>
            </div>
        </div>
    </div>

</x-layout>
