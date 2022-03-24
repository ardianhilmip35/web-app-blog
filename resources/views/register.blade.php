@extends('/layout/main')

@section('title', 'Register')
@section('content')

    <form class="row justify-content-center fmreg shadow" novalidate> 
        <div class="col-md-8 text-center mb-1"> 
            <img class="mb-3" src="/img/LOGO TOK.png" alt="" id="logoreglog">
            <p class="txtreg">Please Register Your Account</p>  
        </div>
        <div class="col-md-5 mb-3">
            <input type="text" class="form-control" id="validationCustom01" value="" placeholder="Nama Depan" required>
        </div>
        <div class="col-md-5 mb-3">
            <input type="text" class="form-control" id="validationCustom02" value="" placeholder="Nama Belakang" required>
        </div>
        <div class="col-md-10 mb-3">
            <input type="text" class="form-control mb-3" id="validationCustom03" value="" placeholder="Email" required>
            <input type="text" class="form-control" id="validationCustom03" value="" placeholder="Password" required>
        </div>
        <div class="col-md-10 mb-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
        </div>
        <div class="col-md-8 text-center">
            <button class="btn btn-primary" type="submit">Register</button>
        </div>
    </form>
@endsection