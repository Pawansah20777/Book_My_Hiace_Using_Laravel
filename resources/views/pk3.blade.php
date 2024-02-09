<!DOCTYPE html>
<html><head>
<title>Seat booking</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.block {
  display: block;
  width: 54%;
  margin: 15px;
  border: none;
  background-color:black;
  color: white;
  padding: 14px 30px;
  font-size: 12px;
  cursor: pointer;
  text-align: center;
}
.text-danger{
    color:red;

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#p").on({
    mouseenter: function(){
      $(this).css("background-color", "yellow");
    }
  });
});
</script>
</head>
</head>
<body style="background-color:powderblue;">
<form action="{{url('/')}}/pk3" method="post">
  @csrf

<div class="w3-container">
<h2>Please select your seats</h2>
<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label" id="p">Passengers</span>
												<select class="form-control" name="passengers" >
												    <option value=''>--select--</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select><br>
                        <span class="text-danger">
                          @error('passengers')
                          {{$message}}
                          @enderror
                          </span>
												<span class="select-arrow"></span>
												</div><br>

                        	
<div class="w3-btn w3-black" type="button">Seat
<span class="w3-badge w3-margin-left w3-white">1A</span>
<input name="a[]" value="1A" type="checkbox">
</div>
 
 <div class="w3-btn w3-black">Seat
<span class="w3-badge w3-margin-left w3-white">1B</span>
<input name="a[]" value="1B" type="checkbox">
</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
<div class="w3-btn w3-black">Seat
<span class="w3-badge w3-margin-left w3-white">2A</span>
<input name="a[]" value="2A" type="checkbox">
</div>
 
 <div class="w3-btn w3-black">Seat
<span class="w3-badge w3-margin-left w3-white">2B</span>
<input name="a[]" value="2B" type="checkbox">
</div><br><br>
 
<div class="w3-btn w3-black">Seat
<span class="w3-badge w3-margin-left w3-white">1C</span>
<input name="a[]" value="1C" type="checkbox">
</div>
 
 <div class="w3-btn w3-black">Seat
<span class="w3-badge w3-margin-left w3-white">1D</span>
<input name="a[]" value="1D" type="checkbox">
</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
 <div class="w3-btn w3-black">Seat
<span class="w3-badge w3-margin-left w3-white">2C</span>
<input name="a[]" value="2C" type="checkbox">
</div>
 
 <div class="w3-btn w3-black">Seat
<span class="w3-badge w3-margin-left w3-white">2D</span>
<input name="a[]" value="2D" type="checkbox">
</div><br><br>
 
 <div class="w3-btn w3-black">Seat
<span class="w3-badge w3-margin-left w3-white">1E</span>
<input name="a[]" value="1E" type="checkbox">
</div>

<div class="w3-btn w3-black">Seat
<span class="w3-badge w3-margin-left w3-white">1F</span>
<input name="a[]" value="1F" type="checkbox">
</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
<div class="w3-btn w3-black">Seat
<span class="w3-badge w3-margin-left w3-white">2E</span>
<input name="a[]" value="2E" type="checkbox">
</div>

<div class="w3-btn w3-black">Seat
<span class="w3-badge w3-margin-left w3-white">2F</span>
<input name="a[]" value="2F"type="checkbox">
</div><br><br>

<div class="w3-btn w3-black">Seat
<span class="w3-badge w3-margin-left w3-white">1G</span>
<input name="a[]" value="1G" type="checkbox">
</div>
 
<div class="w3-btn w3-black">Seat
<span class="w3-badge w3-margin-left w3-white">1H</span>
<input name="a[]" value="1H" type="checkbox">
</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
 <div class="w3-btn w3-black">Seat
<span class="w3-badge w3-margin-left w3-white">2G</span>
<input name="a[]" value="2G" type="checkbox">
</div>
 
 <div class="w3-btn w3-black">Seat
<span class="w3-badge w3-margin-left w3-white">2H</span>
<input name="a[]" value="2H" type="checkbox">
</div><br><br>
 
 <div class="w3-btn w3-black">Seat
<span class="w3-badge w3-margin-left w3-white">3A</span>
<input name="a[]" value="3A" type="checkbox">
</div>

<div class="w3-btn w3-black">Seat
<span class="w3-badge w3-margin-left w3-white">3B</span>
<input name="a[]" value="3B" type="checkbox">
</div>
 
 <div class="w3-btn w3-black">Seat
<span class="w3-badge w3-margin-left w3-white">3C</span>
<input name="a[]" value="3C" type="checkbox">
</div>

<div class="w3-btn w3-black">Seat
<span class="w3-badge w3-margin-left w3-white">3D</span>
<input name="a[]" value="3D" type="checkbox">
</div>

<div class="w3-btn w3-black">Seat
<span class="w3-badge w3-margin-left w3-white">3E</span>
<input name="a[]" value="3E" type="checkbox">
</div>
 </div>
 </div>
 <button class="block" class="submit-btn" class="block" type="submit" id="submit" value="submit" name="submit" required> <a href="http://127.0.0.1:8000/index1">PROCEED</a></button>
</body>
</html>
