<x-layout header="{{__('ui.contattaci')}}">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                    <div class="card card-body shadow card-tizi-rem bg-gold formStaff">
                        <img src="/media/lavoraconnoi.png" class="card-img-top casa-custom align-items-center d-flex shadow" alt="immagine casa">
                      <p class=" display-1 card-text text-center">{{__('ui.NostroStaff')}}</p>

                      <div class="card mb-3 shadow">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="/media/luisa.jpg" class="img-fluid rounded-start cardTiziStaff" alt="immagine">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold display-5">Luisa</h5>
                                <p class="card-text display-6">Sito ottimo, ho iniziato a lavorare con loro e mi trovo benissimo!</p>
                                
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
                                    <h5 class="card-title fw-bold display-5">Michael</h5>
                                    <p class="card-text display-6">In line with my needs and always understanding!</p>
                                    
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
                                    <h5 class="card-title fw-bold display-5">Alejandro</h5>
                                    <p class="card-text display-6">Una garantía cuando decidas poner en práctica lo que has aprendido.</p>
                                    
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                
            
            </div>
            <div class="col-12 col-md-6">
              <form method="POST" action="{{route('mail.contact.us.submit')}}" class="shadow formLavora mt-5 p-5 bg-steelBlue color-plumViolet">
                <h2 class="display-5 text-center py-4">{{__('ui.CompilaForm')}}</h2>
    
                    @if(session('emailError'))
                        <div class="alert alert-danger text-center">
                            {{ session('emailError') }}
                        </div>
                    @endif
    
                    @csrf
                    {{-- <div class="mb-3">
                        <h2>{{__('ui.TuoiDati')}}:</h2>
                        <ul>

                        <li>{{Auth::user()->name}}</li>

                        <li>{{Auth::user()->email}}</li>
                      

                        </ul>

                    </div> --}}

                    <div class="mb-3">
                      <label for="name" class="form-label">{{__('ui.NomeCognome')}}</label>
                      <input type="text" name="name" class="form-control" id="name" value="{{Auth::user()->name}}">
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input  type="text" name="email" class="form-control" id="email" value=" {{Auth::user()->email}}" placeholder=" {{Auth::user()->email}}">
                    </div>
                                        
                    <div class="mb-3">
                        <label for="messaggio" class="form-label">{{__('ui.Messaggio')}}</label>
                        <textarea name="messaggio" id="message" cols="30" rows="7" class="form-control" placeholder="{{__('ui.Messaggio')}}"></textarea>
                    </div>
                    
                      
                    <button type="submit" class="btn button-revisore btn-secondary">{{__('ui.Candidatura')}}</button>
                  
                </form>
            
            </div>
        </div>
    </div>
    
    
    
    </x-layout>