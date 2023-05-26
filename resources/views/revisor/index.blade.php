 <x-layout header="">
    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 p-3">
                
                <h1 class="display-2">
                    {{$article_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
                </h1>
            </div>
        </div>
    </div>
    
    @if($article_to_check)
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6">
                
                
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
                    <div class="card-body">
                        <h5 class="card-title">{{$article_to_check->name}}</h5>
                        <p class="card-text">Prezzo {{$article_to_check->price}}</p><br>
                        <p class="card-text">Descrizione: {{$article_to_check->description}}</p><br>
                        <p class="card-text">Creato il: {{$article_to_check->created_at->format('d/m/Y')}}</p><br>
                        <p class="card-text">Creato da: {{$article_to_check->user->name}}</p><br> 
                        <a href="{{route('homepage')}}" class="btn btn-secondary">Torna indietro</a>
                    </div>
                </div>
                
                <div class="row py-5">
                    <div class="col-6 d-flex justify-content-start">
                        <form action="{{route('revisor.accept_article', ['article'=>$article_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-success shadow">Accetta</button>
                        </form>
                    </div>
                    
                    <div class="col-6 d-flex justify-content-end">
                        <form action="{{route('revisor.reject_article', ['article'=>$article_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                        </form>
                    </div>
                </div>
                
            </div>
            <div class="col-12 col-md-6">
                
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-interval="2000"  data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/300" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/301" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/302" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
    @endif
</x-layout>


{{-- @if (Auth::user() && Auth::user()->id == $article->user_id)
    <a href="{{route('article.edit', compact('article'))}}" class="btn btn-dark">Modifica</a>
    @endif --}}   
    
    
    {{-- 
        