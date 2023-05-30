<x-layout header="{{__('ui.TuttiAnnunci')}}">
    {{-- <div class="container my-5 ">
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
    </div>  --}}
    
    <div class="container py-5">
        <div class="row">

            @forelse ($articles as $article)
            <div class="col-12 col-md-6 col-lg-3  p-3 d-flex justify-content-center cardHover">
                <div class="card card-custom-rem text-center shadow">
                    <img src="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(400,300) : 'https://picsum.photos/300'}}" class="img-fluid rounded" alt="immagine">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->name}}</h5>
                        <p class="card-text">{{__('ui.Prezzo')}}: {{$article->price}}</p>
                        <a href="{{route('article.show', compact('article'))}}" class="btn btn-secondary">{{__('ui.PiùInfo')}}</a> <br>
                        <a href="{{ route('category.show', ['category'=>$article->category]) }}" class="my-2 border-top pt-2 border-dark card-link shadow btn btn-success">{{$article->category->name}}</a>
                    </div>
                </div>
            </div>
            @empty
            
            <div class="col-12 text-center">
                <h2>{{__('ui.NoAnnunci')}}</h2>
                <a href="{{route('article.create')}}" class="btn btn-warning">{{__('ui.Annuncio')}}</a>
            </div>
            @endforelse
            {{$articles->links()}}
        </div>
    </div>
    
    
    
    
</x-layout>