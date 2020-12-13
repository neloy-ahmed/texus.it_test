<?php 
require 'front_application.php';
$f_app= new Front_application;
$all_doc = $f_app->get_all_doc();

//var_dump($all_doc);
?>
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
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">-->
    

    <title>Texus.it</title>
  </head>
  <body>
    <!--Nav start-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!--<a class="navbar-brand" href="#">Navbar</a>-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="booking.php">Booking</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>-->
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
  </div>
</nav>
    <!--Nav end-->
	<h1>Resigstration Form</h1>
	<form method="post" action="front_application.php">
	<div class="row">
		<div class="form-group col-md-6">
    
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="text_1" placeholder="Enter text">
    
  </div>
  <div class="form-group col-md-6">
    
    <input type="text" class="form-control" id="exampleInputPassword1" name="text_2" placeholder="Enter text 2">
  </div>
	</div>
	
	<div class="row">
		<div class="form-group col-md-6">
    
    <input type="text" class="form-control" id="exampleInputEmail12" aria-describedby="emailHelp" name="text_3" placeholder="Enter text 3">
    
  </div>
  <div class="form-group col-md-6">
    
    <input type="text" class="form-control" id="exampleInputPassword12" name="text_4" placeholder="Enter text 4">
  </div>
	</div>
	
	<div class="form-group">
    <label for="selectDoctor">Select a doctor</label>
    <select class="form-control" name="doctor_name" id="selectDoctor">
      <option>Select an option</option>
	  <?php 
	  foreach($all_doc as $value){
		  ?>
		<option value="<?php echo $value['name'] ?>"><?php echo $value['name'] ?></option>
<?php	
	  }
	  ?>
      
    </select>
  </div>
  
  <div>
        <!--<h1>jQuery Weekly Scheduler Demo</h1>-->
            <div id="picker">
            </div>
			
			<div>
        
        <input type="hidden" id="selected-dates" name="schedule_date_time" value="">
    </div>
        </div>
  
  
  <input  name='submit' type="submit" class="btn btn-primary" value="Submit">
</form>
	
	<!--<div class="container" style="margin: 150px auto; width: 50%; height: 100%; display: flex; flex-direction: row; justify-content: center;">-->
	

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<!--<script src="jquery.weekly-schedule-plugin.min.js"></script>-->
	<script type="text/javascript" src="js/mark-your-calendar.js"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
	
	<script>
	/*
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
			*/
        </script>
		
		<script type="text/javascript">
	
        (function($) {
		var curr = new Date; // get current date
var first = curr.getDate() - curr.getDay();
//var firstday = new Date(curr.setDate(first)).toUTCString();
var availability_arr = [
	
	[],
	[],
	[],
	[],
	[],
	[]
	
	]

//Ajax start


$( "#selectDoctor" ).change(function() {
var selected_doctor = this.value;

   $.ajax({
    url: `front_application.php?doc_name=${selected_doctor}`,
    type: 'GET',
    success: function(res) {
	
	var res_obj = JSON.parse(res);
	
	var week_days = JSON.parse(res_obj.weekdays);
	
	
	
	var arrayLength = week_days.length;
for (var i = 0; i < arrayLength; i++) {
    
    availability_arr[week_days[i]] = JSON.parse(res_obj.time_arr);
}
	
//console.log(availability_arr);	

//Calander starts
$('#picker').markyourcalendar({
            availability: availability_arr,
			
            isMultiple: false,
			
			startDate:new Date(curr.setDate(first)),
            onClick: function(ev, data) {
              // data is a list of datetimes
              console.log(data);
              var html = ``;
              $.each(data, function() {
                var d = this.split(' ')[0];
                var t = this.split(' ')[1];
                //html += `<p>` + d + ` ` + t + `</p>`;
                html += d + ` ` + t;
              });
             // $('#selected-dates').html(html);              
			  $('#selected-dates').val(html);
            },
            onClickNavigator: function(ev, instance) {
              
              instance.setAvailability(availability_arr);
            }
          });
        
//Calander ends



        
    }
	
});

});



//Ajax end

})(jQuery);


          
    </script>
  </body>
</html>