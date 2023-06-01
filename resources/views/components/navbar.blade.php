<nav class="navbar navbar-expand-lg bg-steelBlue fixed-top py-1" >
  <div class="container-fluid" id="navbar">
    <img class="logo-custom" src="/media/colosseo.png" alt="">
    
    <div class="navbar-toggler divTitleNav" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">        
      <h1 class="text-center color-Gold nome-navbar">Gold<span class="color-seagalBlue">Travel</span></h1>
    </div>
    
    <button class="navbar-toggler bg-gold" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link color-plumViolet @if(Route::currentRouteName() == 'homepage') active @endif" href="{{route('homepage')}}">Home</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link color-plumViolet @if(Route::currentRouteName() == 'article.create') active @endif" aria-current="page" href="{{route('article.create')}}">{{__('ui.Annuncio')}}</a>
        </li>
        @endauth
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle color-plumViolet" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" >
            {{__('ui.Dove')}}
          </a>
          <ul id="categorie" class="navbar-dropdown dropdown-menu bg-seagalBlue color-plumViolet" aria-labelledby="categoriesDropdown">
            <li class="nav-item">
              <a class="dropdown-item" href=" {{route('article.allarticle')}}">{{__('ui.TuttiAnnunci')}}</a>
            </li>
            @foreach($categories as $category)
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ route('category.show', compact('category')) }}">{{ ($category->name) }}</a></li>
            @endforeach
          </ul>
          
        </li>
      </ul>
      
      @if(Route::currentRouteName() != 'homepage')<h1 class="text-center color-Gold nomeSito-navbar">Gold<span class="color-seagalBlue">Travel</span></h1>@endif            
      
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">  
        @auth
        
        @if (Auth::user()->is_revisor)
        <li class="nav-item nav-numeretto-custom">
          <a class=" @if(Route::currentRouteName() == 'revisor.index') active @endif nav-link color-plumViolet position-relative" aria-current="page" href="{{route('revisor.index')}}">
            {{__('ui.Revisore')}}
            <span class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-success">
              {{App\Models\Article::toBeRevisionedCount()}}
              <span class="visually-hidden">Messaggi non letti</span>
            </span>
          </a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link color-plumViolet @if(Route::currentRouteName() == 'mail.become.revisor') active @endif" aria-current="page" href="{{route('mail.become.revisor')}}"> {{__('ui.Lavora')}}</a>
        </li>
        @endif
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle color-plumViolet" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{__('ui.Ciao')}} {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu bg-seagalBlue color-plumViolet">
            <li><a class="dropdown-item href="#">{{__('ui.Profilo')}}</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">{{__('ui.Logout')}}</a></li>
            <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@csrf</form>
          </ul>
        </li>
        
        
        
        
        @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle color-plumViolet" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{__('ui.Guest')}}
          </a>
          <ul class="dropdown-menu bg-seagalBlue color-plumViolet">
            <li><a class="dropdown-item color-plumViolet" href="{{route('register')}}">{{__('ui.Registrati')}}</a></li>
            <li><a class="dropdown-item color-plumViolet" href="{{route('login')}}">{{__('ui.Accedi')}}</a></li>
          </ul>
        </li>
        
        @endauth
        
      </ul>
      
      <form action="{{ route('articles.search') }}" method="GET" class="d-flex" role="search">
        <input name="searched" class="form-control me-2" type="search" placeholder="{{__('ui.Search')}}" aria-label="Search">
        <button class="btn bg-seagalBlue color-plumViolet" type="submit">{{__('ui.Search')}}</button>
      </form>
      
      
      <div class="nav-item dropdown mx-3 lingue-custom-dropdown">
        <a class="nav-link dropdown-toggle color-plumViolet" href="#" id="ddMenu" role="button" data-bs-toggle="dropdown">
          <i class="fa-solid fa-2x fa-earth-americas color-Gold"></i>
        </a>
        <div id="lingue" class="navbar-dropdown dropdown-menu bg-seagalBlue color-plumViolet" aria-labelledby="ddMenu">
          <a class="dropdown-item" href="#" onclick="translate('it')"><x-_locale lang="it" /><span>Italiano</span></a>
          <a class="dropdown-item" href="#" onclick="translate('en')"><x-_locale lang="en" /><span>English</span></a>
          <a class="dropdown-item" href="#" onclick="translate('es')"><x-_locale lang="es" /><span>Español</span></a>
        </div>
      </div>
      
      
      
    </div>
  </div>
</nav>


