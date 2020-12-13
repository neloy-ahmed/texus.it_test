<?php


class Front_application{
	
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
	
	public function process_form(){
        	
        $text_1 = $_POST['text_1'];
        $text_2 = $_POST['text_2'];
        $text_3 = $_POST['text_3'];
        $text_4 = $_POST['text_4'];
        $doctor_name = $_POST['doctor_name'];
		$schedule_date_time = $_POST['schedule_date_time'];			
        
		
		//foreach($time_arr as $value){
			//$time_arr[] = $
		//}

        $sql = "INSERT INTO appoinment (text_1, text_2, text_3, text_4, doctor_name, schedule_date_time)
        VALUES (?, ?, ?, ?, ?, ?)";
        
        $conn = $this->db_connect();
        $stmt= $conn->prepare($sql);
        
        $stmt->execute([$text_1, $text_2, $text_3, $text_4, $doctor_name, $schedule_date_time]);

        $conn = null;
		return 'success';
		
    }
	
	public function doc_name($doc_name){
		
		 //header( "Content-type: application/json" );
		$conn = $this->db_connect();
		$stmt = $conn->prepare("SELECT * FROM booking WHERE name='$doc_name' ");		
		$stmt->execute();
		
		$user = $stmt->fetch();
		echo json_encode($user);
	}
	
	public function get_all_doc(){
		$conn = $this->db_connect();
		
		$stmt = $conn->prepare("SELECT name FROM booking ");		
		$stmt->execute();
		
		$all_doc = $stmt->fetchAll();
		return $all_doc;
	}
}

$f_app = new Front_application;


if(isset($_POST["submit"])){
	//var_dump($f_app);
    
    $process_form = $f_app->process_form();
	if($process_form == 'success'){
		header("Location: success.php");
	}
}

if(isset($_GET['doc_name'])) {
	
    
	$f_app->doc_name($_GET['doc_name']);
}

?>