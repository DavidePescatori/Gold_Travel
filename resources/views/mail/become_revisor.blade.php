<x-layout header="CONTATTACI">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{route('mail.contact.us.submit')}}" class="shadow">
    
                    @if(session('emailError'))
                        <div class="alert alert-danger text-center">
                            {{ session('emailError') }}
                        </div>
                    @endif
    
                    @csrf
    
                    <div class="mb-3">
                      <label for="name" class="form-label">Nome e Cognome</label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Mario Rossi">
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="tua-email@email.com">
                    </div>
                    
                    <div class="mb-3">
                        <label for="messaggio" class="form-label">Il tuo messaggio</label>
                        <textarea name="messaggio" id="message" cols="30" rows="7" class="form-control" placeholder="inserisci messaggio"></textarea>
                    </div>
                    
                      
                    <button type="submit" class="btn btn-secondary">Invia candidatura</button>
                  
                </form>
            
            </div>
        </div>
    </div>
    
    
    
    </x-layout>