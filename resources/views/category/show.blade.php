<x-layout header="{{$category->name}}">

   <div class="container">
    <div class="row">
      <div class="col">
        <div class="circle-nature circle"><img class="rounded-circle" alt="avatar1" src="/media/nature.svg" /></div>
        <div><h4>Natura e avventura</h4></div>
        <strong class="color-nature">100%</strong>
      </div>
      <div class="col">
        <div class="circle-relax circle"><img class="rounded-circle" alt="avatar1" src="/media/relax.svg"/></div>
        <div class="ps-4"><h4>Relax e mare</h4></div>
        <strong class="ps-4 color-relax">80%</strong>
      </div>
      <div class="col">
        <div class="circle-history circle"><img class="rounded-circle" alt="avatar1" src="/media/history.svg" /></div>
        <div><h4>Monumenti e storia</h4></div>
        <strong class="color-history">20%</strong>
      </div>
      <div class="col">
        <div class="circle-culture circle"><img class="rounded-circle" alt="avatar1" src="/media/culture.svg" /></div>
        <div class="ps-4"><h4>Città e cultura</h4></div>
        <strong class="ps-4 color-culture">60%</strong>
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
                                        <a href="{{route('article.show', compact('article'))}}" class="btn btn-secondary">Più informazioni</a>
                                        <a href="{{route('homepage')}}" class="my-2 border-top pt-2 border-dark card-link shadow btn btn-danger">Torna Indietro</a>
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