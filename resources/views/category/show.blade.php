
<x-layout header="{{$category->name}}">
  <span id="check" class="d-none id{{$category->id}}"></span>
  <div class="container py-5 circle-card-custom">
    <div class="row font-custom">
      <div class="col-6 col-md-3 ">
        <svg viewBox="0 0 36 36" class="circular-chart color-nature">
          <path class="circle-bg"
          d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
          />
          <path class="circle"
          stroke-dasharray="{{$category->nature}}, 100"
          d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
          />
          <image xlink:href="/media/nature.svg" x="6" y="6" width="25" height="25" />
        </svg>
        <h3 class="display-5 title-circle-custom text-center">{{__('ui.NaturaAvventura')}}</h3>
        <p class="color-nature text-center display-5 fw-bold">{{$category->nature}}%</p>
        
      </div>
      <div class="col-6 col-md-3">
        <svg viewBox="0 0 36 36" class="circular-chart color-relax">
          <path class="circle-bg"
          d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
          />
          <path class="circle"
          stroke-dasharray="{{$category->relax}}, 100"
          d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
          />
          <image xlink:href="/media/relax.svg" x="6" y="6" width="25" height="25" /> 
        </svg>
        <h3 class="text-center display-5 title-circle-custom">{{__('ui.RelaxMare')}}</h3>
        <p class="color-relax text-center display-5 fw-bold">{{$category->relax}}%</p>
        
      </div><div class="col-6 col-md-3">
        <svg viewBox="0 0 36 36" class="circular-chart color-history">
          <path class="circle-bg"
          d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
          />
          <path class="circle"
          stroke-dasharray="{{$category->history}}, 100"
          d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
          />
          <image xlink:href="/media/history.svg" x="7" y="5" width="23" height="25" /> 
          
        </svg>
        <h3 class="display-5 text-center title-circle-custom">{{__('ui.Monumenti')}}</h3>
        <p class="color-history text-center display-5 fw-bold">{{$category->history}}%</p>
        
      </div><div class="col-6 col-md-3">
        <svg viewBox="0 0 36 36" class="circular-chart color-culture">
          <path class="circle-bg"
          d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
          />
          <path class="circle"
          stroke-dasharray="{{$category->culture}}, 100"
          d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
          />
          <image xlink:href="/media/culture.svg" x="6" y="6" width="25" height="25" /> 
          
        </svg>
        <h3 class="display-5 text-center title-circle-custom">{{__('ui.Cultura')}}</h3>
        <p class="color-culture text-center display-5 fw-bold">{{$category->culture}}%</p>
        
      </div>
    </div>
  </div>
  
  
  <div class="min-vh-100">
    <!-- <div class="container my-5">
      <div class="row bg-gold divSmussati">
        @if ($services)
        
        
        
        <h5 class="color-steelBlue p-0 ps-3 m-0">Filtra per servizi</h5>
        
        @foreach ($services as $service)
        <div class="col-6 col-md-2 p-2 color-steelBlue">
          <div class="d-flex">
            <input id="services" type="checkbox" wire:model="selectedServices" value="{{$service->id}}">
            
            <i class="fa {{ $service->icon }} p-2 text-start"></i>
            
            <span  class="">{{$service->name}}</span>
          </div>
        </div> 
        @endforeach
        
        @endif
      </div> 
    </div>  -->
    
    <div class="container">
      <div class="row">
        @forelse ($category->articles as $article)
        <div class="col-12 col-md-4 p-3">
          
          <div class="card bg-transparent cardHover">
            <img src="https://picsum.photos/300" class="card-img-top p-3 rounded" alt="immagine">
            <div class="card-body">
              <h5 class="card-title">{{$article->name}}</h5>
              <p class="card-text">{{__('ui.Prezzo')}}: {{$article->price}}</p>
              <p class="card-text">{{__('ui.Descrizione')}}: {{$article->description}}</p>
              <a href="{{route('article.show', compact('article'))}}" class="btn btn-success">{{__('ui.PiùInfo')}}</a>
              <a href="{{route('homepage')}}" class="my-2 border-top card-link  btn btn-secondary">{{__('ui.TornaIndietro')}}</a>
            </div>
          </div>
        </div>
        
        
        @empty
        
        <div class="col-12 text-center">
          
          <h2>{{__('ui.NoAnnunci')}}</h2>
          <a href="{{route('article.create')}}" class="btn btn-warning">{{__('ui.Annuncio')}}</a>
        </div>
        @endforelse

      </div>
    </div>
  </div>
</div>

</div>
</x-layout>