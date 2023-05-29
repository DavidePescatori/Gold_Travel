<x-layout header="Dettaglio annuncio">
  <div class="container-fluid py-5">
    <div class="row">
      <div class="col-12 col-md-6">
        
        
        
        
        <!-- Slider main container -->
        <h5 class="card-title display-4 text-uppercase fw-bold text-center mb-3">{{$article->name}}</h5> 
        @if ($article->images)
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        
                        <div class="swiper-wrapper">
                            @foreach ($article->images as $image)
                            <div class="swiper-slide @if($loop->first)active @endif">
                                <img src="{{Storage::url($image->path)}}" alt="foto di {{$article->name}}">
                            </div>                                           
                           @endforeach
                        </div>
                    </div>    
                    @else
                    <div class="card p-0">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active ">
                                    <img src="https://picsum.photos/300"  class=" img-carousel-custom d-block " alt="foto di {{$article_to_check->name}}">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/301" class="img-carousel-custom d-block " alt="foto di {{$article_to_check->name}}">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/302" class="img-carousel-custom d-block " alt="foto di {{$article_to_check->name}}">
                            </div>
                        </div>
                        <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    @endif    
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