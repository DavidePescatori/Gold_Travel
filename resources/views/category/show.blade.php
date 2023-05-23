<x-layout header="Stai visualizzando {{$category->name}}">
    <div class="min-vh-100">
        <div class="container-fluid my-5">
                    <div class="row justify-content-center">
    
                            @forelse ($category->articles as $article)
                                <div class="col-12 col-md-4 p-3">
    
                                    <div class="card">
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