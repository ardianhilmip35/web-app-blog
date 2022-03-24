@extends('/layout/main')

@section('title', 'Login')
@section('content')

<div class="container ">
    <form class="row justify-content-center fmreg shadow" novalidate>
    <img id="logo" class="mb-4" 
            src="img/LOGO TOK.png" width="50" height="50">
            

        <div class="col-md-8 mb-3">
          <input type="text" class="form-control mb-3" id="validationCustom03" value="" placeholder="Email" required>
          <input type="text" class="form-control" id="validationCustom03" value="" placeholder="Password" required>
        </div>

        <div id="ckbox" class="row mb-4">
              <div class="col d-flex justify-content-center">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="checkboxlogin"
                    checked
                  />
                  <label class="form-check-label"> Remember me </label>
                </div>
              </div>

              <div class="col">
                <a href="forgotpassword" id="forgotpassword">Forgot password?</a>
              </div>
            </div>

        <div class="col-md-8 text-center">
          <button id="btnlogin" class="btn btn-primary" type="submit">Login</button>
        </div>
      </form>
</div>

@endsection