<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
	
    
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">-->
    

    <title>Texus.it</title>
  </head>
  <body>
    <h1>Welcome, admin!</h1>
	
	<form method="post" action="Application.php">
	
	<div class="form-group">
    
    <input type="text" name="name" class="form-control" id="name"  placeholder="Enter name">
    
  </div>
  
	
	
	<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="weekday[]" value="6">
  <label class="form-check-label" for="inlineCheckbox1">Saturday</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="weekday[]" value="0">
  <label class="form-check-label" for="inlineCheckbox2">Sunday</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="weekday[]" value="1" >
  <label class="form-check-label" for="inlineCheckbox3">Monday </label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="weekday[]" value="2" >
  <label class="form-check-label" for="inlineCheckbox3">Tuesday </label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="weekday[]" value="3" >
  <label class="form-check-label" for="inlineCheckbox3">Wednedsay </label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="weekday[]" value="4" >
  <label class="form-check-label" for="inlineCheckbox3">Thursday </label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="weekday[]" value="5" >
  <label class="form-check-label" for="inlineCheckbox3">Friday </label>
</div>
	
<div class="row">
    <div class="col-md-6">

    <div class="form-group">
    <label for="start_time">Start Time</label>
    <select name="start_time" class="form-control" id="start_time">
      <option value="7">7:00</option>
      <option value="8">8:00</option>
      <option value="9">9:00</option>
      <option value="10">10:00</option>
      <option value="11">11:00</option>
      <option value="12">12:00</option>
      <option value="13">13:00</option>
      <option value="14">14:00</option>
      <option value="15">15:00</option>
      <option value="16">16:00</option>
      <option value="17">17:00</option>
      <option value="18">18:00</option>
      <option value="19">19:00</option>
      <option value="20">20:00</option>
      <option value="21">21:00</option>
      <option value="22">22:00</option>
      
    </select>
  </div>

    </div>

    <div class="col-md-6">

    <div class="form-group">
    <label for="end_time">End Time</label>
    <select name="end_time" class="form-control" id="end_time">
      <option value="7">7:00</option>
      <option value="8">8:00</option>
      <option value="9">9:00</option>
      <option value="10">10:00</option>
      <option value="11">11:00</option>
      <option value="12">12:00</option>
      <option value="13">13:00</option>
      <option value="14">14:00</option>
      <option value="15">15:00</option>
      <option value="16">16:00</option>
      <option value="17">17:00</option>
      <option value="18">18:00</option>
      <option value="19">19:00</option>
      <option value="20">20:00</option>
      <option value="21">21:00</option>
      <option value="22">22:00</option>
      
    </select>
  </div>

    </div>

  </div>
  
  
  
  
  <input  name='submit' type="submit" class="btn btn-primary" value="Submit">
</form>
	
	<!--<div class="container" style="margin: 150px auto; width: 50%; height: 100%; display: flex; flex-direction: row; justify-content: center;">-->
	

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
	
	
  </body>
</html>