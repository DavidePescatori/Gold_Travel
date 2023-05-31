<x-layout header="{{__('ui.Accedi')}}">
    <div class="container my-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <form method="POST" action="{{route('login')}}" class="main-card-login p-5">

                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    {{-- <li>Dati non corrispondenti!</li> --}}
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="mb-3">
                      <label for="email" class="form-label">{{__('ui.Email')}} <span class="text-danger text-small">*</span></label>
                      <input type="email" name="email" class="form-control" id="email">
                    </div>

                    <div class="mb-3">
                      <label for="password" class="form-label">{{__('ui.Password')}} <span class="text-danger text-small">*</span></label>
                      <input type="password" name="password" class="form-control" id="password">
                    </div>

                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="remember" name="remember">
                      <label class="form-check-label" for="remember">{{__('ui.Ricordami')}} </label>
                    </div>

                    <button type="submit" class="btn btn-secondary button-login">{{__('ui.Accedi')}} </button><br>
                    <div class="d-flex justify-content-end">
                        <a href="{{route('register')}}">{{__('ui.NonRegistrato')}}</a>
                    </div>


                </form>
            </div>
        </div>
    </div>
    
</x-layout>