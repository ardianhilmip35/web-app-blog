@extends('/layout/main')

@section('title', 'Login')
@section('content')
    <form class="row justify-content-center fmreg shadow" novalidate>
        <div class="col-md-8 text-center mb-4"> 
            <img class="mb-4" src="/img/LOGO TOK.png" alt="" id="logoreglog">
            <p class="txtreg">Please Login Your Account</p>  
        </div> 
        <div class="col-md-12 mb-3">
            <input type="text" class="form-control mb-4" id="validationCustom03" value="" placeholder="Email" required>
            <input type="text" class="form-control" id="validationCustom03" value="" placeholder="Password" required>
        </div>

        <div class="col-md-6">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Remember Me
                </label>
            </div>
        </div>

        <div class="col-md-6 pe-5">
                <a href="">Forgot Password!</a>
        </div>
        

        <div class="col-md-12">
            <button class="btn btnreglog" type="submit">Login</button>
        </div>
    </form>
@endsection