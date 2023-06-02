<x-layout header="{{__('ui.Revisioni')}}">
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12 p-3 d-flex justify-content-center">
                
                <h1 class="display-5 revisor-title-custom">
                    
                    @if ($article_to_check)
                    
                    <p>{{__('ui.AnnuncioRevisionare')}}</p>
                    
                    @else
                    
                    <p>{{__('ui.NonRevisionare')}}</p>
                    
                    @endif
                    
                </h1>
            </div>
        </div>
    </div>
    @if(session('message'))
    <div class="alert alert-success text-center my-5">
        {{ session('message')}}
    </div>
    @endif
    @if($article_to_check)
    
    <div class="container-fluid">
        <div class="row">
                
                
                <!-- Slider main container -->
                <h5 class="card-title display-4 text-uppercase fw-bold text-center mb-3">{{$article_to_check->name}}</h5> 
                @if ($article_to_check->images)
                <div class="col-12 col-md-6 border-end">
                    <div class="swiper">
                    <!-- Additional required wrapper -->
                        
                        <div class="swiper-wrapper">
                            @foreach ($article_to_check->images as $image)
                            <div class="swiper-slide @if($loop->first)active @endif">
                                <img src="{{!$article_to_check->images()->get()->isEmpty() ? $image->getUrl(800,400) : 'https://picsum.photos/300'}}" class="img-fluid rounded" alt="immagine">
                            </div>   
                            @endforeach

                        </div>
                        

                            <div class="swiper-button-prev px-3 py-1"></div> 
                            <div class="swiper-button-next px-3 py-1"></div> 

                    </div> 
                </div>
            

                        <div class="col-md-3 border-end">
                            <h5 class="tc-accent mt-3">Tags</h5>
                            <div class="p-2">
                                @if ($image->labels)
                                    @foreach ($image->labels as $label)
                                        <p class="d-inline">{{ $label }},</p>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        

                        
                        <div class="col-md-3 border-end">
                            <div class="card-body mt-3">
                                <h5 class="tc-accent">Revisione immagini</h5>
                                <p>Adulti: <span class="{{$image->adult}}"></span></p>
                                <p>Satira: <span class="{{$image->spoof}}"></span></p>
                                <p>Medicina: <span class="{{$image->medical}}"></span></p>
                                <p>Violenza: <span class="{{$image->violence}}"></span></p>
                                <p>Contenuto ammiccante: <span class="{{$image->racy}}"></span></p>
                            </div>
                        </div>

                  
                        
                        


                        
                    
                    
                   
                @else
                <div class="card p-0">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active ">
                                <img src="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(400,300) : 'https://picsum.photos/300'}}" class="img-fluid rounded" alt="immagine">
                            </div>
                            <div class="carousel-item">
                                <img src="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(400,300) : 'https://picsum.photos/300'}}" class="img-fluid rounded" alt="immagine">
                            </div>
                            <div class="carousel-item">
                                <img src="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(400,300) : 'https://picsum.photos/300'}}" class="img-fluid rounded" alt="immagine">
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
                    @endif    
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6 card-body text-center">
                            <p class="card-text pt-3 fs-4">{{__('ui.Descrizione')}}: {{$article_to_check->description}}</p><br>
                            <p class="card-text fs-3">€  {{$article_to_check->price}}</p><br>
                            <p class="card-text fw-lighter">{{__('ui.CreatoDa')}} {{$article_to_check->user->name}}</p>
                            <p class="card-text fw-lighter fst-italic">{{__('ui.CreatoIl')}} {{$article_to_check->created_at->format('d/m/Y')}}</p><br>
                        </div>
                    <div class="card-body text-center mt-4 col-12 col-md-6">
                        @if (count($article_to_check->services))
                        
                        <h3>{{__('ui.Servizi')}}:</h3>
                        
                        @if (App::isLocale('it'))
                        @foreach ($article_to_check->services as $service)
                        <div>                           
                            <i class="fa {{ $service->icon }} p-2 text-start"></i> {{ $service->name }}
                        </div>
                        @endforeach 
                        
                        @elseif(App::isLocale('en'))
                        
                        @foreach ($article_to_check->services as $service)
                        <div>                           
                            <i class="fa {{ $service->icon }} p-2 text-start"></i> {{ $service->en }}
                        </div>
                        @endforeach 
                        
                        @elseif(App::isLocale('es'))
                        @foreach ($article_to_check->services as $service)
                        <div>                           
                            <i class="fa {{ $service->icon }} p-2 text-start"></i> {{ $service->es }}
                        </div>
                        @endforeach 
                        @endif
                        
                        
                        
                        
                        @endif
                    </div>
                    </div>   
                    
                </div>

        </div>
                
                
           
                
                <div class="row py-5">
                    <div class="col-12 d-flex justify-content-center">
                        <form class="mx-3" action="{{route('revisor.accept_article', ['article'=>$article_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="seville-green shadow d-block text-center mt-1">{{__('ui.Accetta')}}</button>
                        </form>
                        <form action="{{route('revisor.reject_article', ['article'=>$article_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="seville-red shadow d-block text-center mt-1 ">{{__('ui.Rifiuta')}}</button>
                        </form>
                    </div>
                    
                    
                    
                </div>
            
                
            
        
        
        
    </div>
    @endif
    
    
    
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mb-5">
                <a href="{{route('homepage')}}" class="btn-indietro-custom text-center btn seville-grey mx-3 mt-1">{{__('ui.TornaIndietro')}}</a>
                @if (App\Models\Article::toBeRevisionedCount() != App\Models\Article::all()->count() )
                <form action="{{ route('revisor.rollbackArticle') }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="seville-yellow text-center mt-1">{{__('ui.AnnullaOperazione')}}</button>
                </form>
                @endif
            </div>
        </div>
    </div>
</x-layout>



        