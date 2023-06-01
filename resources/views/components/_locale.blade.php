<form action="{{ route('setLocale', $lang) }}" class="d-inline" method="POST">
  @csrf
  <button type="submit" class="btn">
      <img class="" src="{{ asset('vendor/blade-flags/language-' . $lang . '.svg') }}" width="32" height="32" alt="">
  </button>
</form>
