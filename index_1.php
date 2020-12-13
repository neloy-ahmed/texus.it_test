<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/mark-your-calendar.css">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">-->
    

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
	
	<form>
	<div class="row">
		<div class="form-group col-md-6">
    
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group col-md-6">
    
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
	</div>
	
	<div class="row">
		<div class="form-group col-md-6">
    
    <input type="email" class="form-control" id="exampleInputEmail12" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group col-md-6">
    
    <input type="password" class="form-control" id="exampleInputPassword12" placeholder="Password">
  </div>
	</div>
	
	<div class="form-group">
    <label for="selectDoctor">Example select</label>
    <select class="form-control" id="selectDoctor">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  
  <div>
        <h1>jQuery Weekly Scheduler Demo</h1>
            <div id="target">
            </div>
        </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	
	<!--<div class="container" style="margin: 150px auto; width: 50%; height: 100%; display: flex; flex-direction: row; justify-content: center;">-->
	

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script src="jquery.weekly-schedule-plugin.min.js"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
	
	<script>
	
	$('#target').weekly_schedule({
				days: ["sun", "mon", "tue","wed", "thu", "fri", "sat"],
				hours: "10:00AM-7:00PM",			
			});
			
			
			
  $( "#selectDoctor" ).change(function() {

    $( "#target" ).empty()
  
    $('#target').weekly_schedule({
				days: ["sun", "mon", "tue","wed", "thu", "fri", "sat"],
				hours: "10:00AM-7:00PM",
			
			});

});


            
      
            $('.schedule').on('selectionmade', function() {
              
                console.log("Selection Made");
                console.log($('#target').weekly_schedule("getSelectedHour"));
            }).on('selectionremoved', function() {
                console.log("Selection Removed");
            });
        </script>
  </body>
</html>