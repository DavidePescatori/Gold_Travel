<x-layout header="{{__('ui.DettaglioAnnuncio')}}">
  <div class="container-fluid py-5">
    <div class="row">
      <div class="col-12 col-md-6">
        
        
        
        
        <!-- Slider main container -->
        <h5 class="card-title display-4 text-uppercase fw-bold text-center mb-3">{{$article->name}}</h5> 
        
        @if (!$article->images()->get()->isEmpty())
        <div class="swiper">
          <!-- Additional required wrapper -->
          
          <div class="swiper-wrapper">
            @foreach ($article->images as $image)
            <div class="swiper-slide @if($loop->first)active @endif">
              <img class="img-fluid" src="{{Storage::url($image->path)}}" alt="foto di {{$article->name}}">
              {{-- <img src="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(400,300) : 'https://picsum.photos/300'}}" class="img-fluid rounded" alt="immagine"> --}}
            </div>                                           
            @endforeach
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>    
        @else
        
        <div class="card p-0">
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active ">
                <img src="https://picsum.photos/300" class="img-carousel-custom d-block " alt="foto di placeholder">
              </div>
              <div class="carousel-item">
                <img src="https://picsum.photos/301" class="img-carousel-custom d-block " alt="foto di placeholder">
              </div>
              <div class="carousel-item">
                <img src="https://picsum.photos/302" class="img-carousel-custom d-block " alt="foto di placeholder">
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
          <div class="card-body text-center pt-5 ">
            <p class="card-text pt-3">{{__('ui.Descrizione')}}: {{$article->description}}</p><br>
            <p class="card-text">{{__('ui.Prezzo')}}: {{$article->price}}€</p><br>
            <p class="card-text">{{__('ui.CreatoIl')}}: {{$article->created_at->format('d/m/Y')}}</p><br>
            <p class="card-text">{{__('ui.CreatoDa')}} {{$article->user->name}}</p><br> 
            
            @if (count($article->services))
            
            <h3>{{__('ui.Servizi')}}:</h3>
            
            @if (App::isLocale('it'))
            @foreach ($article->services as $service)
            <div>                           
              <i class="fa {{ $service->icon }} p-2 text-start"></i> {{ $service->name }}
            </div>
            @endforeach 
            
            @elseif(App::isLocale('en'))
            
            @foreach ($article->services as $service)
            <div>                           
              <i class="fa {{ $service->icon }} p-2 text-start"></i> {{ $service->en }}
            </div>
            @endforeach 
            
            @elseif(App::isLocale('es'))
            @foreach ($article->services as $service)
            <div>                           
              <i class="fa {{ $service->icon }} p-2 text-start"></i> {{ $service->es }}
            </div>
            @endforeach 
            @endif
            
            
            
            
            @endif
            
            <div class="text-center">
              <a href="{{route('homepage')}}" class="btn btn-secondary mt-4">{{__('ui.TornaIndietro')}}</a>
            </div>
            
            
          </div>
        </div>
      </div>
    </div>
  </x-layout>