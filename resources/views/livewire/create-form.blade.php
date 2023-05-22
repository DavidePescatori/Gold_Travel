<div>
    <form class="shadow p-5 rounded bg-secondary" wire:submit.prevent="">
        @csrf

        @if (session()->has('articleCreated'))
            <div class="alert alert-success">
                {{ session('articleCreated') }}
            </div>
        @endif

        <div class="mb-3">
          <label for="name" class="form-label text-white">Destinazione</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" wire:model.lazy="name">
          @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label text-white">Prezzo per notte</label>
            <input type="float" class="form-control @error('price') is-invalid @enderror" id="price" wire:model.lazy="price">
            @error('price') <span class="error">{{ $message }}</span> @enderror
        </div>
        
        {{-- @if ($image)
            <p class="text-white">Antrepima immagine:</p>
            <div class="mt-3">
                <img src="{{ $image->temporaryUrl() }}">
            </div>
        @endif


        <div class="mb-3">
            <label for="image" class="form-label text-white">Immagine libreria</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" wire:model.lazy="image">
            @error('image') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="best_sellers" class="form-label text-white">Libri più venduti</label><br>
            @foreach ($books as $book)
                <div class="d-flex">
                    <input id="best_sellers" type="checkbox" wire:model="best_sellers" value="{{$book->id}}">
                    <span  class="ps-3 text-white">{{$book->title}}, {{$book->author}}</span>
                </div>
            @endforeach 
                

         </div>



         <div class="mb-3">
            <label for="bEb" class="form-label text-white">B&B</label>
            <input type="checkbox" id="bEb">
            @error('bEb') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="pranzo" class="form-label text-white">Mezza pensione</label>
            <input type="checkbox" id="pranzo">
            @error('pranzo') <span class="error">{{ $message }}</span> @enderror
        </div>


        <div class="mb-3">
            <label for="parcheggio" class="form-label text-white">parcheggio</label>
            <input type="checkbox" id="parcheggio">
            @error('parcheggio') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="wifi" class="form-label text-white">wi-fi</label>
            <input type="checkbox" id="wifi">
            @error('wifi') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="smoking" class="form-label text-white">Area fumatori</label>
            <input type="checkbox" id="smoking">
            @error('smoking') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="pulizia" class="form-label text-white">Pulizia della stanza</label>
            <input type="checkbox" id="pulizia">
            @error('pulizia') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="animali" class="form-label text-white">Animali ammessi</label>
            <input type="checkbox" id="animali">
            @error('animali') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="cancellazione" class="form-label text-white">Cancellazione Gratuita</label>
            <input type="checkbox" id="cancellazione">
            @error('cancellazione') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="pagamento" class="form-label text-white">Pagamento Anticipato</label>
            <input type="checkbox" id="pagamento">
            @error('pagamento') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="servizio" class="form-label text-white">Servizio in camera</label>
            <input type="checkbox" id="servizio">
            @error('servizio') <span class="error">{{ $message }}</span> @enderror
        </div> --}}

        <div class="mb-3">
            <label for="description" class="form-label text-white">Descrizione</label>
            <textarea id="description" cols="30" rows="7" class="form-control @error('description') is-invalid @enderror" wire:model.lazy="description"></textarea>
            @error('description') <span class="error">{{ $message }}</span> @enderror
        </div>

        
        
        
      
        <button class="btn btn-dark">Pubblica Annuncio</button>
          
      </form>
</div>
