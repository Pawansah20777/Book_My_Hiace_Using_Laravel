<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Information</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css1/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css1/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Please fill your details here</h1>
						</div>
						<form action="{{url('/')}}/index1" method="post">
                           @csrf
							<div class="form-group">
								<input class="form-control" type="text" name="name" placeholder="Enter your name" value="{{old('')}}">
								<span class="text-danger">
								@error('name')
								{{$message}}
								@enderror
								</span>
								<span class="form-label"> Name</span>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="email" name="email" placeholder="Enter your Email" value="{{old('')}}">
										<span class="text-danger">
								@error('email')
								{{$message}}
								@enderror
								</span>
										<span class="form-label">Email</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="tel" name="phone" placeholder="Enter you Phone" value="{{old('')}}">
										<span class="text-danger">
								@error('phone')
								{{$message}}
								@enderror
								</span>
										<span class="form-label">Phone</span>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" name="passengers" value="{{old('')}}">
											<option value="" selected hidden>no of passengers</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
										<span class="text-danger">
								@error('passengers')
								{{$message}}
								@enderror
								</span>
										<span class="select-arrow"></span>
										<span class="form-label">Passengers</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" name="adults" value="{{old('')}}">
											<option value="" selected hidden>no of adults</option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
										</select>
										<span class="text-danger">
								@error('adults')
								{{$message}}
								@enderror
								</span>
										<span class="select-arrow"></span>
										<span class="form-label">Adults</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" name="children" value="{{old('')}}">
											<option value="" selected hidden>no of children</option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
										</select>
										<span class="text-danger">
								@error('children')
								{{$message}}
								@enderror
								</span>

								</div>
							</div>
							<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" name="male" value="{{old('')}}">
											<option value="" selected hidden>no of Male</option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
										</select>
										<span class="text-danger">
								@error('male')
								{{$message}}
								@enderror
								</span>
										<span class="select-arrow"></span>
										<span class="form-label">Adults</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" name="female" value="{{old('')}}"">
											<option value="" selected hidden>no of Female</option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
										</select>
										<span class="text-danger">
								@error('female')
								{{$message}}
								@enderror
								</span>
								</div>
							</div>
							<div class="col-md-4">
									<div class="form-group">
										<select class="form-control">
											<option value="" selected hidden>Fare list:</option>
											<option>Janakpur-Kathmandu: 800</option>
											<option>Janakpur-Dhudikhel: 700</option>
											<option>Janakpur-Khurkot: 600 </option>
											<option>Janakpur-Sindhuli: 500</option>
											<option>Mahendranagar-Kathmandu: 700</option>
											<option>Bardibas-Khurkot: 600 </option>
										</select>

								</div>
							</div>
							<div class="form-btn">

								<button class="submit-btn" type="submit" id="submit" value="submit" name="submit" required><a href="http://127.0.0.1:8000/payment">Book Now</a></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
