<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>login</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
<body class="p-3 m-0 border-0 bd-example" style="background-color:black;">
<div class="card mx-auto" class="card" style="width:25rem; height:38rem" >
<img src="https://t3.ftcdn.net/jpg/03/39/70/90/360_F_339709048_ZITR4wrVsOXCKdjHncdtabSNWpIhiaR7.jpg" height="50%">
<div class="card-body">
<div class="column">

  <form action="{{url('/')}}/loginpage" method="post">
  @csrf
    <div class="form-group">
      <label for="Email"></label>
      <input type="email" class="form-control" id="em" placeholder="Enter email" name="email" value="{{old('')}}">
      <span class="text-danger">
        @error('email')
        {{$message}}
        @enderror
        </span>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">please enter valid Email.</div>
    </div>

    <div class="form-group">
      <label for="pswd"></label>
      <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="password">
      <span class="text-danger">
        @error('password')
        {{$message}}
        @enderror
        </span>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">this is required.</div>
      <span class="text-danger">
    </div><br>

 <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label></br>
  </div>

 <div class="d-grid gap-2">
  <input type="submit" class="btn btn-primary" value="Submit" name="submit">
</div>
<h7>forgot password?</h7><br>
<h7>Don't have an account?</h7>

<a class="btn btn-primary" href="http://127.0.0.1:8000/registerpage" role="button">Register here</a>

</form>
</div></div>
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>
