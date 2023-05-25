<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @livewireStyles
    <title>GoldTravel</title>



</head>

<body class="">

    <x-navbar />

        @if(session('emailSent'))
        <div class="alert alert-success text-center my-5">
            {{ session('emailSent') }}
        </div>
        @endif

        @if(session('emailError'))
        <div class="alert alert-danger text-center my-5">
            {{ session('emailError') }}
        </div>
        @endif

        @if(session('access.denied'))
        <div class="alert alert-danger text-center my-5">
            {{ session('access.denied') }}
        </div>
        @endif


 <div class="container-fluid">
    <div class="row">
        <div id="divTitle" class="d-flex justify-content-center align-items-center divTitle">
            <h1 id="title" class="text-center color-Gold">Gold<span class="color-seagalBlue">Travel</span></h1>
        </div>
        

    </div>
 </div>

<div class="min-vh-100">
    <div class="container-fluid my-5">
                <div class="row justify-content-center">

                        @forelse ($articles as $article)
                            <div class="col-12 col-md-4 p-3">

                                <div class="card bg-transparent">
                                    <img src="https://picsum.photos/{{300 + $loop->index}}" class="card-img-top p-3 rounded" alt="immagine">
                                    <div class="card-body">
                                    <h5 class="card-title">{{$article->name}}</h5>
                                    <p class="card-text">prezzo: {{$article->price}}€</p>
                                    <p class="card-text">descrizione: {{$article->description}}</p>
                                    <a href="{{route('article.show', compact('article'))}}" class="btn btn-secondary">Più informazioni</a>
                                    <a href="{{ route('category.show', ['category'=>$article->category]) }}" class="my-2 border-top pt-2 border-dark card-link shadow btn btn-success">Area geografica: {{$article->category->name}}</a>
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

       



<x-footer />


   @livewireScripts
</body>
</html>