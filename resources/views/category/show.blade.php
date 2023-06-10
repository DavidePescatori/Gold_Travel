
<x-layout title="Regione -> {{$category->name}}"  header="{{$category->name}}">
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
  
  
 
    
    <div class="container py-5">
      <div class="row">
        @forelse ($category->articles->where('is_accepted', true) as $article)
        <div class="col-12 col-md-4 p-3">
          
          <div class="card p-2 cardHover">
            <img src="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(400,300) : 'https://picsum.photos/400/300'}}" class="img-fluid rounded" alt="immagine">
            <div class="card-body">
              <h5 class="card-title">{{$article->name}}</h5>
              <p class="card-text">{{__('ui.Prezzo')}}: {{$article->price}}€</p>
              {{-- <p class="card-text">{{__('ui.Descrizione')}}: {{$article->description}}</p> --}}
              <a href="{{route('article.show', compact('article'))}}" class="btn btn-success lingue-custom">{{__('ui.PiùInfo')}}</a>
              <a href="{{route('homepage')}}" class="my-2 border-top card-link lingue-custom  btn btn-secondary">{{__('ui.TornaIndietro')}}</a>
            </div>
          </div>
        </div>
        
        
        @empty
        
        <div class="col-12 text-center">
          
          <h2 class="mb-3">{{__('ui.NoAnnunci')}}</h2>
          <a href="{{route('article.create')}}" class="btn btn-warning lingue-custom">{{__('ui.Annuncio')}}</a>
        </div>
        @endforelse

      </div>
    </div>
</div>

</div>
</x-layout>