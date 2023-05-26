<x-layout header="CONTATTACI">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                    <div class="card card-body shadow card-tizi-rem bg-gold formStaff">
                        <img src="/media/lavoraconnoi.jpg" class="card-img-top casa-custom align-items-center d-flex shadow" alt="immagine casa">
                      <p class=" display-1 card-text text-center">Il nostro Staff</p>

                      <div class="card mb-3 shadow">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="/media/luisa.jpg" class="img-fluid rounded-start cardTiziStaff" alt="immagine">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold display-5">Luisa</h5>
                                <p class="card-text display-6">Sito ottimo, ho iniziato a lavorare con loro ed è stato la cosa migliore della mia vita!</p>
                                
                            </div>
                          </div>
                            </div>
                        </div>

                        <div class="card mb-3 shadow">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="/media/lorenzo.jpg" class="img-fluid rounded-start cardTiziStaff" alt="immagine">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold display-5">Lorenzo</h5>
                                    <p class="card-text display-6">In linea con le mie esigenze e sempre comprensivi</p>
                                    
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="card mb-3 shadow">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="/media/luca.jpg" class="img-fluid rounded-start cardTiziStaff" alt="immagine">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold display-5">LolloBrigida</h5>
                                    <p class="card-text display-6">Una garanzia quando decidi di mettere a frutto ciò che hai imparato</p>
                                    
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                
            
            </div>
            <div class="col-12 col-md-6">
                <h2 class="display-5 text-center">Compila questo form e ti contatteremo al più presto!!</h2>
                <form method="POST" action="{{route('mail.contact.us.submit')}}" class="shadow formLavora mt-5 p-5 bg-steelBlue color-plumViolet">
    
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