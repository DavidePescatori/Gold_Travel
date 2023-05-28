
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
        <div class="container-fluid">
                <div class="row">
                    <div class="col-4 color-steelBlue bg-gold">
                      <h5>Filtra per servizi</h5>
                        <div class="mb-3 mt-3">
                           <label for="bEb" class="form-label ">B&B</label>
                           <input type="checkbox" id="bEb">
                           @error('bEb') <span class="error">{{ $message }}</span> @enderror
                        </div>
               
                       <div class="mb-3 mt-3">
                           <label for="pranzo" class="form-label ">Mezza pensione</label>
                           <input type="checkbox" id="pranzo">
                           @error('pranzo') <span class="error">{{ $message }}</span> @enderror
                       </div>
               
               
                       <div class="mb-3 mt-3">
                           <label for="parcheggio" class="form-label ">Parcheggio</label>
                           <input type="checkbox" id="parcheggio">
                           @error('parcheggio') <span class="error">{{ $message }}</span> @enderror
                       </div>
               
                       <div class="mb-3 mt-3">
                           <label for="wifi" class="form-label ">wi-fi</label>
                           <input type="checkbox" id="wifi">
                           @error('wifi') <span class="error">{{ $message }}</span> @enderror
                       </div>

                    </div>           
                    <div class="col-4 color-steelBlue bg-gold">
                        <div class="mb-3 mt-3">
                            <label for="smoking" class="form-label ">Area fumatori</label>
                            <input type="checkbox" id="smoking">
                            @error('smoking') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="pulizia" class="form-label ">Pulizia della stanza</label>
                            <input type="checkbox" id="pulizia">
                            @error('pulizia') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="animali" class="form-label ">Animali ammessi</label>
                            <input type="checkbox" id="animali">
                            @error('animali') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="cancellazione" class="form-label ">Cancellazione Gratuita</label>
                            <input type="checkbox" id="cancellazione">
                            @error('cancellazione') <span class="error">{{ $message }}</span> @enderror
                        </div>       
                    </div>
                    <div class="col-4 color-steelBlue bg-gold">
                        <div class="mb-3 mt-3">
                            <label for="pagamento" class="form-label ">Pagamento Anticipato</label>
                            <input type="checkbox" id="pagamento">
                            @error('pagamento') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="servizio" class="form-label ">Servizio in camera</label>
                            <input type="checkbox" id="servizio">
                            @error('servizio') <span class="error">{{ $message }}</span> @enderror
                        </div> 
                    </div>
          
          @forelse ($category->articles as $article)
          <div class="col-12 col-md-4 p-3">
            
            <div class="card bg-transparent">
              <img src="https://picsum.photos/300" class="card-img-top p-3 rounded" alt="immagine">
              <div class="card-body">
                <h5 class="card-title">{{$article->name}}</h5>
                <p class="card-text">prezzo: {{$article->price}}</p>
                <p class="card-text">descrizione: {{$article->description}}</p>
                <a href="{{route('article.show', compact('article'))}}" class="btn btn-success">Più informazioni</a>
                <a href="{{route('homepage')}}" class="my-2 border-top card-link  btn btn-secondary">Torna Indietro</a>
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