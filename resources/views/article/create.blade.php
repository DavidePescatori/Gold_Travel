<x-layout title="Inserisci Annuncio"  header="{{__('ui.CreaAnnuncioHeader')}}">

    <div class="container-fluid py-5 bg-article-create-custom">
        <div class="row">
           
                <div class="col-12 col-md-6">
                <div class="card card-casa-rem formLavora">
                    <div class="card-body">
                        <img src="/media/hotel.jpg" class="card-img-top casa-custom align-items-center d-flex shadow" alt="immagine casa">
                      <p class=" display-1 card-text text-center">{{__('ui.DiconoNoi')}}</p>

                      <div class="card mb-3 shadow">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="/media/5stelle.png" class="img-fluid rounded-start" alt="immagine">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Laura</h5>
                                <p class="card-text">Sito ottimo, ho affittato molte stanze grazie a loro!</p>
                                <p class="card-text">{{__('ui.CreatoDa')}} : Laura 25/05/2023</p>
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
                                    <h5 class="card-title">Louis</h5>
                                    <p class="card-text">Functional website. In line with my needs</p>
                                    <p class="card-text">{{__('ui.CreatoDa')}} : Louis 20/02/2023 </p>
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
                                    <h5 class="card-title">Rodriguez</h5>
                                    <p class="card-text">Una garantía cuando decida crear su empresa!
                                    </p>
                                    <p class="card-text">{{__('ui.CreatoDa')}} : Rodriguez 09/01/2023</p>
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
