<x-layout header="{{$category->name}}">
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
          <h3 class="display-5 title-circle-custom text-center">Natura e avventura</h3>
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
          <h3 class="text-center display-5 title-circle-custom">Relax e mare</h3>
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
          <h3 class="display-5 text-center title-circle-custom">Monumenti e storia</h3>
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
          <h3 class="display-5 text-center title-circle-custom">Città e cultura</h3>
          <p class="color-culture text-center display-5 fw-bold">{{$category->culture}}%</p>

        </div>
      </div>
    </div>
    
    
    <div class="min-vh-100">
      <div class="container-fluid my-5">
        <div class="row justify-content-center">
          
          @forelse ($category->articles as $article)
          <div class="col-12 col-md-4 p-3">
            
            <div class="card bg-transparent">
              <img src="https://picsum.photos/300" class="card-img-top p-3 rounded" alt="immagine">
              <div class="card-body">
                <h5 class="card-title">{{$article->name}}</h5>
                <p class="card-text">prezzo: {{$article->price}}</p>
                <p class="card-text">descrizione: {{$article->description}}</p>
                <a href="{{route('article.show', compact('article'))}}" class="btn btn-success">Più informazioni</a>
                <a href="{{route('homepage')}}" class="my-2 border-top card-link  btn btn-info">Torna Indietro</a>
              </div>
            </div>
          </div>
          
          
          @empty
          
          <div class="col-12 text-center">
            
            <h2>Non ci sono ancora annunci inseriti</h2>
            <a href="{{route('article.create')}}" class="btn btn-warning">Inserisci il tuo annuncio</a>
          </div>
          @endforelse
        </div>
      </div>
      
    </div>
  </x-layout>