<x-layout header="Tutti gli annunci">
        <!-- <div class="container my-5 ">
                    <div class="row bg-gold divSmussati">
                        
                        @if ($services)           
                        <h5 class=" color-steelBlue p-0 ps-3 m-0">Filtra per servizi</h5>
                        @foreach ($services as $service)
                                <div class="col-6 col-md-2 p-2 color-steelBlue">
                                    <div class="d-flex">
                                        <input id="services" type="checkbox" wire:model="selectedServices" value="{{$service->id}}">
                                                                  
                                        <i class="fa {{ $service->icon }} p-2 text-start"></i>
                                        
                                        <span  class="">{{$service->name}}</span>
                                    </div>
                                </div> 
                                @endforeach
                            
                          @endif
                      </div> 
        </div>  -->
                            @forelse ($articles as $article)
                                <div class="col-12 col-md-6 col-lg-4 col-xl-2 p-3 d-flex justify-content-center cardHover">
                                    <div class="card card-custom-rem text-center shadow">
                                        <img src="https://picsum.photos/{{300 + $loop->index}}" class="card-img-top p-3 rounded" alt="immagine">
                                        <div class="card-body">
                                        <h5 class="card-title">{{$article->name}}</h5>
                                        <p class="card-text">prezzo: {{$article->price}}</p>
                                        <a href="{{route('article.show', compact('article'))}}" class="btn btn-secondary">Più informazioni</a> <br>
                                        <a href="{{ route('category.show', ['category'=>$article->category]) }}" class="my-2 border-top pt-2 border-dark card-link shadow btn btn-success">{{$article->category->name}}</a>
                                        </div>
                                    </div>
                                </div>
                            @empty
    
                            <div class="col-12 text-center">
                                <h2>Non ci sono ancora annunci inseriti</h2>
                                <a href="{{route('article.create')}}" class="btn btn-warning">Inserisci il tuo annuncio</a>
                            </div>
                            @endforelse
                            {{$articles->links()}}
                   
        
        

</x-layout>