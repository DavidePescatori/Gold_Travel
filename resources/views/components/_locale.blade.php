<form action="{{route('setLocale', $lang)}}" class="d-inline" method="POST">
  @csrf
  <button type="submit" class="btn">
    <img src="{{asset('vendor/blade-flags/language-' . $lang . '.svg')}}" width="50" height="32" alt=""><span class="ps-2 lingue-custom" >{{$name}}</span>
  </button>
          
</form>
