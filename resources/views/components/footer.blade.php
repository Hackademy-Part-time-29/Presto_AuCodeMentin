<footer class="footer bg-light text-center text-lg-start mt-auto">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">{{env('APP_NAME')}}</h5>
          <p>Il tuo negozio online di fiducia.</p>
        </div>
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Contatti</h5>
          <ul class="list-unstyled mb-0">
            <li><a href="#!" class="text-dark">Email: info@codecommerce.com</a></li>
            <li><a href="#!" class="text-dark">Telefono: 123-456-7890</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5>Vuoi diventare revisore?</h5>
          <p>Cliccando il bottone sottostante farai richiesta al nostro admin</p>

          <a href="{{route('become.revisor')}}" class="btn btn-custom">Diventa revisore</a>
        </div>
      </div>
    </div>
    <div class="text-center p-3 bg-dark text-white">
      © 2024 {{env('APP_NAME')}}
    </div>
</footer>
