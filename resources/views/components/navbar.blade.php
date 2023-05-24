<nav class="navbar navbar-expand-lg bg-steelBlue fixed-top py-0">
    <div class="container-fluid">
    <img class="logo-custom" src="/media/logo.png" alt="">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          
          <li class="nav-item">
            <a class="nav-link color-plumViolet @if(Route::currentRouteName() == 'homepage') active @endif" href="{{route('homepage')}}">Home</a>
          </li>

              <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle color-plumViolet" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Area geografica
                    </a>
                    <ul class="dropdown-menu bg-seagalBlue color-plumViolet" aria-labelledby="categoriesDropdown">
                      <li class="nav-item">
                        <a class="dropdown-item" href=" {{route('article.allarticle')}}">Tutti gli annunci</a>
                      </li><li><hr class="dropdown-divider"></li>
                      @foreach($categories as $category)
                        <li><a class="dropdown-item" href="{{ route('category.show', compact('category')) }}">{{ ($category->name) }}</a></li>
                        <li><hr class="dropdown-divider"></li>
                      @endforeach
                    </ul>
                </li>
        </ul>
       
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

               
          @auth
          <li class="nav-item">
            <a class="nav-link color-plumViolet @if(Route::currentRouteName() == 'article.create') active @endif" aria-current="page" href="{{route('article.create')}}">Inserisci annuncio</a>
          </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle color-plumViolet" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ciao {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu bg-seagalBlue color-plumViolet">
                    <li><a class="dropdown-item color-plumViolet" href="#">Profilo</a></li>
                    <li><a class="dropdown-item color-plumViolet" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
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
      </div>
    </div>
  </nav>