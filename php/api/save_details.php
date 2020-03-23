<?php 
	//$conn = mysqli_connect('localhost', 'root', '', 'intersections');
    $conn = mysqli_connect("localhost", "root", "test", 'covid19');
    if ($conn)  
		$mobile_number = $_POST["mobile_number"];
        $description = $_POST["description"];
        $comment = $_POST["comment"];
        
        $latitude = $_POST["latitude"];
        $longitude = $_POST["longitude"];
        echo $latitude;
        if (empty($latitude) && empty($longitude)) {
            $latitude = '0';
            $longitude = '0';
        } else {
            $latitude = $_POST["latitude"];
            $longitude = $_POST["longitude"];
        }
            if(isset($mobile_number)) {
                $sql = "INSERT INTO covid19_tracker_mru (id, mobile_number, latitude, longitude, description, comment) 
                VALUES('', '$mobile_number', '$latitude', '$longitude', '$description', '$comment')";
                $query = mysqli_query($conn, $sql);

                if ($query) {
                    echo json_encode(array("OUTCOME" => "OK"));
                } else {
                    echo json_encode(array("OUTCOME" => "NOK"));
                }
            }
       

?>


