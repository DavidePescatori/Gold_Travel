<x-layout title="Dettaglio Annuncio"  header="{{__('ui.DettaglioAnnuncio')}}">
  
  <div class="container-fluid py-5">
    <div class="row">
      <div class="col-12 col-lg-6">
        <!-- Slider main container -->
        <h5 class="display-4 text-uppercase fw-bold text-center mb-3">{{$article->name}}</h5> 
        @if (!$article->images()->get()->isEmpty())
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            @foreach ($article->images as $image)
            <div class="swiper-slide @if($loop->first)active @endif">
              <img src="{{!$article->images()->get()->isEmpty() ? $image->getUrl(800,400) : 'https://picsum.photos/300'}}" class="img-fluid rounded" alt="immagine">
            </div>                                           
            @endforeach
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>    
        @else
          <div class="swiper">
              <div class="swiper-wrapper">

                  <div class="swiper-slide">
                    <img src="https://picsum.photos/800/400" class="img-fluid rounded" alt="foto di placeholder">
                  </div>
                  <div class="swiper-slide">
                    <img src="https://picsum.photos/800/401" class="img-fluid rounded" alt="foto di placeholder">
                  </div>
                  <div class="swiper-slide">
                    <img src="https://picsum.photos/800/402" class="img-fluid rounded" alt="foto di placeholder">
                  </div>
                </div>
                <div class="swiper-button-prev px-3 py-1"></div> 
                <div class="swiper-button-next px-3 py-1"></div> 

              </div>
        @endif
        <p class="card-text pt-5 ps-5">{{__('ui.Descrizione')}}: {{$article->description}}</p>
    </div>

    <div class="col-12 col-lg-6">
        <div class="card-body text-center padding-custom-show-detail">
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
            <a href="{{route('homepage')}}" class="btn btn-secondary lingue-custom mt-5">{{__('ui.TornaIndietro')}}</a>
          </div>
        </div>
   
        
      </div>
  </div>
</x-layout>

