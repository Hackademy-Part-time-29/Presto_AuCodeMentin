<footer class="footer bg-light text-center text-lg-start mt-auto">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">{{env('APP_NAME')}}</h5>
          <p>Il tuo negozio online di fiducia.</p>
        </div>
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">{{__('ui.contacts')}}</h5>
          <ul class="list-unstyled mb-0">
            <li><a href="#!" class="text-dark">{{__('ui.info')}}</a></li>
            <li><a href="#!" class="text-dark">{{__('ui.phone')}}</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5>{{__('ui.call_revisor')}}</h5>
          <p>{{__('ui.desc_evisor')}}</p>

          <a href="{{route('become.revisor')}}" class="btn btn-custom">{{__('ui.btn_revisor')}}</a>
        </div>
      </div>
    </div>
    <div class="text-center p-3 bg-dark text-white">
      © 2024 {{env('APP_NAME')}}
    </div>
</footer>
