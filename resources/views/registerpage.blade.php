<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Register</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
<body class="p-3 m-0 border-0 bd-example" style="background-color:black;">
<div class="card mx-auto" class="card" style="width:40rem; height:48rem" >
<img src="https://thumbs.dreamstime.com/b/registration-hand-pressing-button-interface-blue-background-49410297.jpg" height="50%">
<div class="card-body">
 
<<form action="{{url('/')}}/registerpage" method="post">
            @csrf
					
   <div>
      <p style="text-align:center; color:blue"><i><b>Register</b></i></p>
        <p><i><b><u>Kindly fill in this form to register:</u></b></i></p>
       <table><tr><td> <label for="username"><b>Username</b></label>
        <input 
          type="text"
          placeholder="Enter username"
          name="a"
          id="username"
          />
        </td>
        

         
       <td> <label for="email"><b>Email</b></label>
        <input
          type="text"
          placeholder="Enter Email"
          name="b"
          id="email"
          /></td></tr>
          
        <tr><td><label for="pwd"><b>Password</b></label>
        <input 
          type="password"
          placeholder="Enter Password"
          name="c"
          id="pwd"
          /></td>
          

        <td><label for="pwd-repeat"><b>Repeat Password</b></label>
        <input
          type="password"
          placeholder="Repeat Password"
          name="d"
          id="pwd-repeat"
          /></td></tr>
          
		   <tr><td><label for="email"><b>Date of Birth</b></label>
        <input
          type="date"
          placeholder="Enter date of birth"
          name="e"
          id="birthday"
          /></td>
          

		   <td><label for="email"><b>Country</b></label>
        <input
          type="text"
          placeholder="Enter Country"
          name="f"
          id="email"
          /><br></td></tr>
          
                
		   <tr><td><label for="email"><b>State</b></label>
        <input
          type="text"
          placeholder="Enter state"
          name="g"
          id="email"
          /></td>
          
		   <td><label for="email"><b>City</b></label>
        <input
          type="text"
          placeholder="Enter City"
          name="h"
          id="email"
          /><br></td></tr></table><br>
          
<form>
  <div class="form-group">
    <label for="exampleFormControlFile1"><b>Profile picture</b></label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form><br>
	<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">By creating an account you agree to our Terms & Privacy.</label></br>
  </div>
<div class="d-grid gap-2">
  <input type="submit" class="btn btn-primary" value="Register" name="submit">
</div>
      </div><div></div>
    </form>
	</form>
</div></div>
</body>
</html>
