@extends('/layout/main')

@section('title', 'Login')
@section('content')
<div class="container">
  <div class="card mb-3">
        <div id="card" class="card-body py-5 px-md-5">
          <form class="justify-content-center">
          <img id="logo" class="mb-4" 
            src="img/LOGO TOK.png"
            />

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" placeholder="Email" class="form-control" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" placeholder="Password" class="form-control" />
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
              <div class="col d-flex justify-content-center">
                  
                <!-- Checkbox -->
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
                <!-- Simple link -->
                <a href="forgotpassword" id="forgotpassword">Forgot password?</a>
              </div>
            </div>

            <!-- Submit button -->
            <button type="button" id= "btnlogin" class="btn">Login</button>

          </form>
        </div>
    </div>
</div>

@endsection