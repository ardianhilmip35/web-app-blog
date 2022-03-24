@extends('/layout/main')

@section('title', 'Register')
@section('content')

<div class="container ">
    <form class="row justify-content-center fmreg shadow" novalidate>
        <div class="col-md-4 mb-3">
          <input type="text" class="form-control" id="validationCustom01" value="" placeholder="FIRST NAME" required>
        </div>
        <div class="col-md-4 mb-3">
          <input type="text" class="form-control" id="validationCustom02" value="" placeholder="LAST NAME" required>
        </div>
        <div class="col-md-8 mb-3">
          <input type="text" class="form-control mb-3" id="validationCustom03" value="" placeholder="Email" required>
          <input type="text" class="form-control" id="validationCustom03" value="" placeholder="Password" required>
        </div>
        <div class="col-md-8 mb-4">
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
</div>
@endsection