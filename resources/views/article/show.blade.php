<x-layout header="Dettaglio annuncio">
    <div class="container-fluid my-5">
        <div class="row justify-content-center">
                <div class="col-12 col-md-4 p-3">
                    <div class="card">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="https://picsum.photos/300" class="d-block w-100" alt="foto di {{$article->name}}">
                              </div>
                              <div class="carousel-item">
                                <img src="https://picsum.photos/301" class="d-block w-100" alt="foto di {{$article->name}}">
                              </div>
                              <div class="carousel-item">
                                <img src="https://picsum.photos/303" class="d-block w-100" alt="foto di {{$article->name}}">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                        <div class="card-body">
                          <h5 class="card-title">{{$article->name}}</h5>
                          <p class="card-text">Prezzo {{$article->price}}</p><br>
                          <p class="card-text">Descrizione: {{$article->description}}</p><br>
                          <p class="card-text">Creato il: {{$article->created_at->format('d/m/Y')}}</p><br>
                          <p class="card-text">Creato da: {{$article->user->name}}</p><br> 
                          <a href="{{route('homepage')}}" class="btn btn-secondary">Torna indietro</a>
                        </div>
                        </div>
                        </div>
                </div>
             </div>
                          {{-- @if (Auth::user() && Auth::user()->id == $article->user_id)
                            <a href="{{route('article.edit', compact('article'))}}" class="btn btn-dark">Modifica</a>
                          @endif --}}   
</x-layout>