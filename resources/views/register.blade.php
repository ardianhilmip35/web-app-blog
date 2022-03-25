@extends('/layout/main')

@section('title', 'Register')
@section('content')

    <form class="row justify-content-center fmreg shadow" novalidate> 
        <div class="col-md-8 text-center mb-4"> 
            <img class="mb-4 mt-3" src="/img/LOGO TOK.png" alt="" id="logoreglog">
            <p class="txtreg">Please Create Your Account</p>  
        </div>
        <div class="col-md-6 mb-3">
            <input type="text" class="form-control" id="validationCustom01" value="" placeholder="Nama Depan" required>
        </div>
        <div class="col-md-6 mb-3">
            <input type="text" class="form-control" id="validationCustom02" value="" placeholder="Nama Belakang" required>
        </div>
        <div class="col-md-12 mb-3">
            <input type="text" class="form-control" id="validationCustom03" value="" placeholder="Email" required>
        </div>
        <div class="col-md-6 mb-3">
            <input type="text" class="form-control" id="validationCustom04" value="" placeholder="Password" required>
        </div>
        <div class="col-md-6 mb-3">
            <input type="text" class="form-control" id="validationCustom05" value="" placeholder="Confirm Password" required>
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
                <button class="btn btnreglog" type="submit">Register</button>
            </div>
        </div>
    </form>
@endsection