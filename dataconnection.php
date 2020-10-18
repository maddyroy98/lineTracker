<?php
// database connection 
$con = mysqli_connect('localhost', 'root', '','linetrafficinfo');

$latitude = $_POST['latitude1'];
//$txtMessage = $_POST['txtMessage'];

// database insert SQL code
//$sql = "INSERT INTO `table1` (`place_name`, `place_location`, `latitude`, `longitude`, `wait_time` ) VALUES ('Frys', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

//if (!$con -> query("INSERT INTO `table1` (`place_name`, `place_location`, `latitude`, `longitude`, `wait_time`) VALUES ('$txtName', '$txtLoc', '$latitude', 112, 34)")) {
  //  echo("Error description: " . $con -> error);
 // }

$sql = "INSERT INTO `table1` (`latitude`, `longitude`, `wait_time`) VALUES (113, 112, 34)";

// insert in database 
$rs = mysqli_query($con, $sql);
//if($rs) {
	//echo "Thanks for the input";
//} else {
   // echo "Thanks";
//}

if(isset($_REQUEST["destination"])){
    header("Location: {$_REQUEST["destination"]}");
}else if(isset($_SERVER["HTTP_REFERER"])){
    header("Location: {$_SERVER["HTTP_REFERER"]}");
}else{
     /* some fallback, maybe redirect to index.php */
}
?>