<x-layout  header="Crea il tuo annuncio">

    <div class="container-fluid py-5 bg-article-create-custom">
        <div class="row">
            {{-- <div class="col-12 col-md-6 mt-5">
                <div class="card card-areo">
                    <div class="card-body">
                        <img src="/media/aereo.png" class="card-img-top img-aereo align-items-center d-flex" alt="immagine aereo">
                      <p class=" display-1 card-text text-center text-white">Preparati a viaggiare</p>
                  </div>
                </div>
            </div> --}}
                <div class="col-12 col-md-6">
                <div class="card card-casa-rem">
                    <div class="card-body">
                        <img src="/media/hotel.jpg" class="card-img-top casa-custom align-items-center d-flex shadow" alt="immagine casa">
                      <p class=" display-1 card-text text-center">Dicono di noi</p>

                      <div class="card mb-3 shadow">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="/media/5stelle.png" class="img-fluid rounded-start" alt="immagine">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Laura</h5>
                                <p class="card-text">Sito ottimo, ho affittato molte stanze grazie a loro!</p>
                                <p class="card-text">Creato Da : Laura 25/05/2023</p>
                            </div>
                          </div>
                            </div>
                        </div>

                        <div class="card mb-3 shadow">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="/media/5stelle.png" class="img-fluid rounded-start" alt="immagine">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Luca</h5>
                                    <p class="card-text">Sito funzionale. In linea con le mie esigenze</p>
                                    <p class="card-text">Creato Da : Luca 09/01/2023</p>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="card mb-3 shadow">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="/media/5stelle.png" class="img-fluid rounded-start" alt="immagine">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Luigi</h5>
                                    <p class="card-text">Una garanzia quando decidi di mettere a reddito la tua attività</p>
                                    <p class="card-text">Creato Da : Luigi 20/02/2023</p>
                                </div>
                              </div>
                            </div>
                          </div>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-2">
                @livewire('create-form')
            </div>
        </div>
    </div>
</x-layout>
