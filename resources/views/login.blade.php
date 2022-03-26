@extends('/layout/main')

@section('title', 'Login')
@section('content')
    <form class="row justify-content-center fmreg shadow" method="POST" action="{{ route('login') }}" novalidate>
        @csrf

        <div class="col-md-8 text-center mb-4"> 
            <img class="mb-4 mt-3" src="/img/LOGO TOK.png" alt="" id="logoreglog">
            <p class="txtreg">Please Login Your Account</p>  
        </div> 
        <div class="col-md-12 mb-3">
            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Email" required autocomplete="email" autofocus>
            
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-md-12 mb-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password" name="password" required autocomplete="current-password">
        
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-md-7 ms-auto">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>

        <div class="col-md-5 me-auto">
            <div>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Password?') }}
                    </a>
                @endif
            </div>
        </div>

        <div class="col-md-12 mt-3">
            <button type="submit" class="btn btnreglog">
                {{ __('Login') }}
            </button>
        </div>

        <div class="mt-2 mb-3 text-center">
                <label class="form-check-label" for="invalidCheck">
                    Don't have an account?
                </label>
                <a href="{{ route('register') }}">{{ __('Register') }}</a>
        </div>
    </form>
@endsection