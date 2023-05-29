<div>
            <form class="shadow p-5 bg-custom color-steelBlue formLavora" wire:submit.prevent="store">
            @csrf
        <div class="div-custom rounded">
        </div>

        <div class="insert-article-custom">
            
            @if (app()->getLocale() === 'it')
                <img src="{{ asset('media/AnnuncioDefinitivo.png') }}" alt="Immagine creazione form">

            @elseif (app()->getLocale() === 'en')
                <img src="{{ asset('media/InserYourAd.png') }}" alt="Image form creation">

            @elseif (app()->getLocale() === 'es')
                <img src="{{ asset('media/Annunciacion.png') }}" alt="Creación de formularios de imagen">

            @endif
        </div>

        
        <div class="">
            <label for="category" class="form-label">{{__('ui.regione')}}</label>
        <select id="category" class="form-select  @error('category') is-invalid @enderror" wire:model.defer="category"  aria-label="Default select example">
            <option value="">{{__('ui.regione')}}</option>
            @foreach ($categories as $category)

                <option value="{{$category->id}}">{{$category->name}}</option>
                
            @endforeach
            
        </select>
            @error('category') <span class="error">{{ $message }}</span> @enderror
        </div>
        
        <div>
            <label for="name" class="pb-1">{{__('ui.città')}}</label>
            <input type="text" type="hidden" id="name" wire:model="query" autocomplete="off" class="form-control @error('name') is-invalid @enderror" @focus="suggestionsOpen = true" @blur="suggestionsOpen = false ">
            @if (!empty($suggestions))
                <ul class="ulCittaCustom">
                @foreach ($suggestions as $suggestion)
                <li class="cittaCustom bold" wire:click="selectCity('{{ $suggestion }}')">{{ $suggestion }}</li>
                @endforeach
                </ul>
            @endif
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>

        
        <div class="mb-3">
            <label for="price" class="form-label">{{__('ui.prezzoNotte')}}</label>
            <input type="float" wire:model.lazy="price" class="form-control @error('price') is-invalid @enderror" id="price" wire:model.lazy="price">
            @error('price') <span class="error">{{ $message }}</span> @enderror
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">{{__('ui.Descrizione')}}</label>
            <textarea id="description" wire:model.lazy="description" cols="30" rows="7" class="form-control @error('description') is-invalid @enderror" wire:model.lazy="description"></textarea>
            @error('description') <span class="error">{{ $message }}</span> @enderror
        </div>
        
            @if ($services)

            <div class="mb-3">
                <label for="services" class="form-label">{{__('ui.Servizi')}}</label><br>
                @foreach ($services as $service)
                    <div class="d-flex">
                        <input id="services" type="checkbox" wire:model="selectedServices" value="{{$service->id}}">
                                                   
                        <i class="fa {{ $service->icon }} p-2 text-start"></i>
                        
                        <span  class="">{{$service->name}}</span>
                    </div>
                @endforeach
            </div>

            @endif

        
        
        
      
        <button class="btn btn-dark">{{__('ui.PubblicaAnnuncio')}}</button>


        
        @if (session()->has('articleCreated'))
            <div class="alert snippet alert-success my-4 p-2">
                {{ session('articleCreated') }}
            </div>
        @endif
      </form>
    </div>

