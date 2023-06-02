<!-- Footer -->
<footer class="bg-steelBlue text-center color-plumViolet">
  
    <!-- Grid container -->
    <div class="container p-4">
      <br>
  
  
  
      <!-- Section: Text -->
      {{-- <section class="mb-4">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
          distinctio earum repellat quaerat voluptatibus placeat nam,
          commodi optio pariatur est quia magnam eum harum corrupti dicta,
          aliquam sequi voluptate quas.
        </p>
      </section> --}}
      <!-- Section: Text -->
  
  
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
            {{-- <h5 class="text-uppercase">Links</h5> --}}
            {{-- <img class="logo-custom py-1" src="/media/colosseo.png" alt=""> --}}
            <h1 class="text-center color-Gold nome-navbar">Gold<span class=" color-seagalBlue">Travel</span></h1><br>

            <div class="lh-lg">
            <p>{{__('ui.BB')}}
            </p>
            <p>{{__('ui.Proprietario')}}</p>
            </div>
            {{-- <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="color-plumViolet">Link 1</a>
              </li>
              <li>
                <a href="#!" class="color-plumViolet">Link 2</a>
              </li>
              <li>
                <a href="#!" class="color-plumViolet">Link 3</a>
              </li>
              <li>
                <a href="#!" class="color-plumViolet">Link 4</a>
              </li>
            </ul> --}}
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0 py-4">
            <h4 class="text-center">{{__('ui.Info')}}</h4>
  
            <ul class="list-unstyled mb-0">
              <li class="py-2">
                <a href="{{route('homepage')}}" class="color-plumViolet">Home</a>
              </li>
              <li class="py-2">
                <a href="{{route('article.allarticle')}}" class="color-plumViolet">{{__('ui.TuttiAnnunci')}}</a>
              </li>
              <li class="py-2">
                <a href="{{route('register')}}" class="color-plumViolet">{{__('ui.Registrati')}}</a>
              </li>
              <li class="py-2">
                <a href="{{route('mail.become.revisor')}}" class="color-plumViolet">{{__('ui.Lavora')}}</a>
              </li>
            </ul>
          </div>
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0 py-4">
            <h4 class="text-center">{{__('ui.Collegamenti')}}</h4>
  
            <ul class="list-unstyled mb-0">
              <li class="py-2">
                <a target="_blank" href="https://www.google.com/travel/flights?hl=it" class="color-plumViolet">{{__('ui.Aerei')}}</a>
              </li>
              <li class="py-2">
                <a target="_blank" href="https://www.omio.it/" class="color-plumViolet">{{__('ui.Treni')}}</a>
              </li>
              <li class="py-2">
                <a target="_blank" href="https://www.rentalcars.com/it/" class="color-plumViolet">{{__('ui.Auto')}}</a>
              </li>
              <li class="py-2">
                <a target="_blank" href="https://www.traghettitalia.it/" class="color-plumViolet">{{__('ui.Navi')}}</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
  
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3">
      {{__('ui.IVA')}}
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->