<x-layout header="Dettaglio annuncio">
  <div class="container-fluid py-5">
    <div class="row">
      <div class="col-12 col-md-6">
        
        
        
        
        <!-- Slider main container -->
        <h5 class="card-title display-4 text-uppercase fw-bold text-center mb-3">{{$article->name}}</h5> 
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><img src="https://picsum.photos/800/600" alt="foto di {{$article->name}}"></div>
            <div class="swiper-slide"><img src="https://picsum.photos/801/601" alt="foto di {{$article->name}}"></div>
            <div class="swiper-slide"><img src="https://picsum.photos/802/602" alt="foto di {{$article->name}}"></div>
            
          </div>
          
          
          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev px-3 py-1"></div> 
          <div class="swiper-button-next px-3 py-1"></div> 
          
        </div>
        <div class="card-body text-center ">
          <p class="card-text pt-3">Descrizione: {{$article->description}}</p><br>
          <p class="card-text">Prezzo {{$article->price}}€</p><br>
          <p class="card-text">Creato il: {{$article->created_at->format('d/m/Y')}}</p><br>
          <p class="card-text">Creato da: {{$article->user->name}}</p><br> 

          @if (count($article->services))

          <h3>Servizi aggiuntivi:</h3>

          @foreach ($article->services as $service)
              <div>
                  <i class="fa {{ $service->icon }} p-2 text-start"></i> {{ $service->name }}
              </div>
          @endforeach

          
          @endif

          <div class="text-center">
            <a href="{{route('homepage')}}" class="btn btn-secondary mt-4">Torna indietro</a>
          </div>


        </div>
      </div>
    </div>
  </div>
</x-layout>