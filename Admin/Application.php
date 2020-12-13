<?php

// echo $_POST['k']; 

class Application{
    public function process_form(){
        $name = $_POST['name'];
        $week_days = json_encode($_POST['weekday']);
        $start_time = $_POST['start_time'];
        $end_time = $_POST['end_time'];
		$time_arr = json_encode(range($start_time, $end_time));
		
		//foreach($time_arr as $value){
			//$time_arr[] = $
		//}

        $sql = "INSERT INTO booking (name, weekdays, start_time, end_time, time_arr)
        VALUES (?, ?, ?, ?, ?)";
        
        $conn = $this->db_connect();
        $stmt= $conn->prepare($sql);
        
        $stmt->execute([$name, $week_days, $start_time, $end_time, $time_arr]);

        $conn = null;
		return 'success';
    }

    private function db_connect(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "data_storage";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
            return $conn;
          } catch(PDOException $e) {
            die("Connection failed: " . $e->getMessage());
          }

    }
}


if(isset($_POST["submit"])){
    $app = new Application;
    $process_form = $app->process_form();
	if($process_form == 'success'){
		header("Location: adm_success.php");
	}
}

?>