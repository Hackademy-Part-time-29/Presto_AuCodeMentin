<x-layout>

    <div class="containerCustom heightCustom">
        <div class="formsContainer">
            <div class="loginRegister">
                <form method="POST" action="{{ route('password.email') }}" id="loginRegisterForm">
                    @csrf
                    <h2 class="title">Recupera password</h2>
                    <div class="input-field">
                        <i class="bi bi-lock-fill text-center"></i>
                        <input name="email" type="email" class="inputCustom" placeholder="E-mail">
                    </div>
                    <input class="primary-button" type="submit" value="Reimposta password">
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel right-panel">
                <div class="content">
                    <h3>Hai dimenticato la password?</h3>
                    <p>
                        Recuperala al volo, ma mi raccomando, non dimenticarla ancora!
                    </p>
                </div>
                <img src="{{ asset('img/forgot-password.svg') }}" class="image" alt="" />
            </div>
        </div>
    </div>

</x-layout>
