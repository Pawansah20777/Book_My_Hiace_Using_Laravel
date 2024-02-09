<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Ticket Reservation Service</title>

	<!-- Google font -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("input").focus(function(){
    $(this).css("background-color", "yellow");
  });
  $("select").focus(function(){
    $(this).css("background-color", "yellow");
  });
  $("select").blur(function(){
    $(this).focus("background-color", "yellow");
  });
});
</script>
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#booking"><p>Home</p></a></li>
	  <li class="active"><a href="#About"><p>Contact Us</p></a></li>
      <li class="active"><a href="{{url('/datapage')}}"><p>Table Crud</p></a></li>


    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="http://127.0.0.1:8000/registerpage"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="http://127.0.0.1:8000/loginpage"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Book My Hiace</h1>
						</div>

            <form action="{{'/'}}" method="post">
            @csrf

							<div class="row">

							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">

										<span class="form-label">Journey Date</span>

										<input class="form-control" type="date" id="date" name="date">
                    <span class="text-danger">
                    @error('date')
                    {{$message}}
                    @enderror
                    </span>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label" >From</span>
												<select  class="form-control"  type="text" id="from" name="from">
                        <option value=''>--select--</option>
													<option value="Janakpur">Janakpur</option>
													<option value="Mahendranagar">Mahendranagar</option>
													<option value="Dhalkewar">Dhalkewar</option>
													<option value="Bardibas">Bardibas</option>
												</select>
                        <span class="text-danger">
                    @error('from')
                    {{$message}}
                    @enderror
                    </span>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">To</span>
												<select  class="form-control"  type="text" id="to" name="to">
                        <option value=''>--select--</option>
													<option value="Sindhuli">Sindhuli</option>
													<option value="Khurkot">Khurkot</option>
													<option value="Dhudikhel">Dhudikhel</option>
													<option value="Kathmandu">Kathmandu</option>
												</select>
                        <span class="text-danger">
                    @error('to')
                    {{$message}}
                    @enderror
                    </span>
												<span class="select-arrow"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-btn">
							<button class="submit-btn" type="submit" id="submit" value="submit" name="submit" required> <a href="http://127.0.0.1:8000/pk3">Search Now</a></button>
							 </div>
	</form>

    @if (session()->has('status'))
<div class="alert alert-sucess">
    {{session('status')}}
</div >
@endif

</div>


</div></div></div>
	</section>
	</div></div>
	<!-- Footer -->
<footer class="text-left text-lg-start bg-white text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-left justify-content-lg-between p-4 border-bottom">
    <!-- Left -->

    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="" id="About">
    <div class="container text-center text-md-start mt-5 text-justify">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4 text-">
            <i class="fas fa-gem me-3 text-secondary"></i><u>About us</u>
          </h6>
          <p>

		   Welcome to Hiace comfortzone.If you are traveling from Janakpur to Kathmandu then the HIACE is the best option because of the conformable drive with the safety perspectives although there are many local regular Hiaces. We provide tourist Hiace tickets for all category Hiace with their different fare.
        </div>



	   <!-- Grid column -->
          <section>
        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
          <h6><u>OVERVIEW</u></h6>
		<p><b>Manufacture: Toyata</b></p>
		<p><b>Production: oct 1970</b></p>
		<p><b><u>Body and Chassis</u></b></p>
		<p><b>Class: Light commercial Vehicle</b></p>

          </div></section>
		  <section>
        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 ">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
          <u> Features</u>
          </h6>
          <p>
            <a class="text-reset">Leather seats.</a>
          </p>
          <p>
            <a hclass="text-reset"> comfortable seating.</a>
          </p>
          <p>
            <a class="text-reset">Save time</a>
          </p>
          <p>
            <a class="text-reset">save money</a>
          </p><div>

          </section>


							<section>
							<p><u>Contact us</u></p>
								<span class="fa fa-map-marker"></span>&nbsp;Address:Janakpurdham,Nepal-Province no.2(45700)
							</p>

						<div class="dbox w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-phone"></span>&nbsp;Phone:+977-9807638919
							<div class="text">

							</div>
						</div><br>
						<div class="dbox w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-paper-plane"></span>&nbsp;Email<a href="mailto:psah770@rku.ac.in">psah770@rku.ac.in</a></span>
							</div>
							<div class="text">

							</div>
						</div><br>
						<div class="dbox w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-globe"></span>&nbsp;Website <a href="#">pawankumarsah.rf.gd</a></p>
					 </div></div></div></div></section></br>
					 <footer class="bg-light text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
	<p>connect on Social Media</p>
      <!-- Facebook -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color:#3B5998;"
        href="https://www.facebook.com/profile.php?id=100009289262051"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="pawankumarsah.rf.gd"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color:rgb( 251, 173, 80);"
        href="https://www.instagram.com/pawankumarsah84/"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color:white;"
        href="https://www.linkedin.com/in/pawan-kumar-645b59258/"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

	  <a
        class="btn text-white btn-floating m-1"
        style="background-color:#dd4b39;"
        href="https://www.youtube.com/channel/UChUmZhpyPj_3LTp7Vndr6fQ"
        role="button"
        ><i class="fab fa-youtube"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>

</footer>
	</body>

</html>
