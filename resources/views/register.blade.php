@extends('/layout/main')

@section('title', 'Register')
@section('content')

        <form method="POST" action="{{ route('register') }}" class="row justify-content-center fmreg shadow" novalidate>
            @csrf

        <div class="col-md-8 text-center mb-4"> 
            <img class="mb-4 mt-3" src="/img/LOGO TOK.png" alt="" id="logoreglog">
            <p class="txtreg">Please Create Your Account</p>  
        </div>

        <div class="col-md-6 mb-3">
            <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name') }}" placeholder="Nama Depan" required autocomplete="first_name" autofocus>
            @error('first_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name') }}" placeholder="Nama Belakang" required autocomplete="last_name" autofocus>
            @error('last_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-md-12 mb-3">
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}" placeholder="Password" required autocomplete="password" autofocus>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password" required autocomplete="new-password">
        </div>

        <div class="col-md-12 mb-2" id="terms">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
            <div class="col-md-12 mt-3 mb-2">
                <button type="submit" class="btn btnreglog">
                    {{ __('Register') }}
                </button>
            </div>
            <div class="mt-2 mb-3 text-center">
                <label class="form-check-label" for="invalidCheck">
                If you have account, please
                </label>
                <a href="{{ route('login') }}">{{ __('Login') }}</a>
            </div>
        </div>
    </form>
@endsection