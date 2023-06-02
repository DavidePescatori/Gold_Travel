<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amaranth:ital@0;1&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amaranth:ital@0;1&family=Rancho&display=swap" rel="stylesheet">
        @vite(['resources/js/app.js', 'resources/css/app.css'])
        @livewireStyles
        <title>GoldTravel</title>
    </head>

<body>
    
    <x-navbar />
    
    @if(session('emailSent'))
    <div class="alert alert-success text-center  mt-5  mb-0">
        {{ session('emailSent') }}
    </div>
    @endif
    
    @if(session('emailError'))
    <div class="alert alert-danger text-center mt-5  mb-0">
        {{ session('emailError') }}
    </div>
    @endif
    
    @if(session('access.denied'))
    <div class="alert alert-danger text-center mt-5  mb-0">
        {{ session('access.denied') }}
    </div>
    @endif
    
    @if(session('message'))
    <div class="alert alert-success text- mt-5 mb-0">
        {{ session('message') }}
    </div>
    @endif
    
    
    <div class="container-fluid sfondoWelcome">
        <div class="row">
            <div id="divTitle" class="d-flex justify-content-center align-items-center divTitle">
                <h1 id="title" class="text-center titoloWelcome color-Gold bg-h1">Gold<span class="color-seagalBlue">Travel</span></h1>
            </div>
        </div>
    </div>
    
    
    <div class="container-fluid my-5 distanza-card-navbar-custom">
        <div class="row justify-content-center">
            <div class="col-12">
                <p class="h2 my-2 fw-bold text-center">{{__('ui.allArticles')}}</p>
                <div class="row justify-content-center">
                    @forelse ($articles as $article)
                    <div class="col-9 col-md-4 my-3">
                        <div class="card mb-3 shadow cardHover">
                            <div class="row g-0">
                                <div class="col-12 col-lg-5 p-3 d-flex justify-content-center">
                                    <img src="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(400,300) : 'https://picsum.photos/400/300'}}" class="img-fluid rounded" alt="immagine">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$article->name}}</h5>
                                        <p class="card-text">{{__('ui.Prezzo')}}: {{$article->price}}€</p>
                                        {{-- <p class="card-text">descrizione: {{$article->description}}</p> --}}
                                        <a href="{{route('article.show', compact('article'))}}" class="btn btn-secondary">{{__('ui.PiùInfo')}}</a>
                                        <div class="row g-0">
                                            <div class="col-md-8">
                                                <a href="{{ route('category.show', ['category'=>$article->category]) }}" class="my-2 border-top pt-2 border-dark card-link shadow btn btn-success">{{$article->category->name}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <x-footer />
    @livewireScripts
</body>
</html>