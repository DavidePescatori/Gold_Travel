<nav class="navbar navbar-expand-lg bg-steelBlue fixed-top py-1">
    <div class="container-fluid">
    <img class="logo-custom" src="/media/colosseo.png" alt="">
      <button class="navbar-toggler bg-gold" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          
          <li class="nav-item">
            <a class="nav-link color-plumViolet @if(Route::currentRouteName() == 'homepage') active @endif" href="{{route('homepage')}}">Home</a>
          </li>

              <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle color-plumViolet" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" >
                    Dove vuoi andare?
                    </a>
                    <ul id="categorie" class="navbar-dropdown dropdown-menu bg-seagalBlue color-plumViolet" aria-labelledby="categoriesDropdown">
                      <li class="nav-item">
                        <a class="dropdown-item" href=" {{route('article.allarticle')}}">Tutti gli annunci</a>
                      </li>
                      @foreach($categories as $category)
                      <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('category.show', compact('category')) }}">{{ ($category->name) }}</a></li>
                      @endforeach
                    </ul>
                </li>

              
        </ul>

       
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

               
          @auth
          <li class="nav-item">
            <a class="nav-link color-plumViolet @if(Route::currentRouteName() == 'article.create') active @endif" aria-current="page" href="{{route('article.create')}}">Inserisci annuncio</a>
          </li>

          @if (Auth::user()->is_revisor)
            <li class="nav-item">
                <a class=" @if(Route::currentRouteName() == 'revisor.index') active @endif nav-link btn btn-sm color-plumViolet position-relative" aria-current="page" href="{{route('revisor.index')}}">
                Zona revisore
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                  {{App\Models\Article::toBeRevisionedCount()}}
                  <span class="visually-hidden">Messaggi non letti</span>
                </span>
              </a>
            </li>
            @else
                <li class="nav-item">
                    <a class="nav-link color-plumViolet @if(Route::currentRouteName() == 'mail.become.revisor') active @endif" aria-current="page" href="{{route('mail.become.revisor')}}">Lavora con noi</a>
                </li>
          @endif

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle color-plumViolet" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ciao {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu bg-seagalBlue color-plumViolet">
                    <li><a class="dropdown-item href="#">Profilo</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
                    <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@csrf</form>
                    </ul>
                </li>



                
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle color-plumViolet" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ciao Ospite
                    </a>
                    <ul class="dropdown-menu bg-seagalBlue color-plumViolet">
                    <li><a class="dropdown-item color-plumViolet" href="{{route('register')}}">Registrati</a></li>
                    <li><a class="dropdown-item color-plumViolet" href="{{route('login')}}">Accedi</a></li>
                    </ul>
                </li>

            @endauth

        </ul>
      
        <form action="{{ route('articles.search') }}" method="GET" class="d-flex" role="search">
          <input name="searched" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Cerca</button>
        </form>
  
      </div>
    </div>
  </nav>