<x-layout>

    <div class="container mt-5">
        <h2 class="mb-4">Inserisci Annuncio</h2>
        <form method="POST">
            @csrf
            <div class="mb-3">
                <label for="inputTitle" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="inputTitle" placeholder="Inserisci il titolo dell'annuncio" required>
            </div>
            <div class="mb-3">
                <label for="inputDescription" class="form-label">Descrizione</label>
                <textarea class="form-control" id="inputDescription" rows="3" placeholder="Inserisci una descrizione dell'annuncio" required></textarea>
            </div>
            <div class="mb-3">
                <label for="inputPrice" class="form-label">Prezzo</label>
                <input type="number" class="form-control" id="inputPrice" placeholder="Inserisci il prezzo dell'annuncio" required>
            </div>
            <div class="mb-3">
                <label for="inputCategory" class="form-label">Categoria</label>
                <select class="form-select" id="inputCategory" required>
                    <option selected disabled>Seleziona una categoria</option>
                    <option value="auto">Auto</option>
                    <option value="immobili">Immobili</option>
                    <option value="elettronica">Elettronica</option>
                    <option value="abbigliamento">Abbigliamento</option>
                    <option value="altro">Altro</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Invia Annuncio</button>
        </form>
    </div>

</x-layout>