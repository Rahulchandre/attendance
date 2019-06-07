<?php	

include('db.php');

$callName=$_POST["callName"];
if($callName=="insertClass"){

	$class=$_POST["class"];

$sql=mysqli_query($con,"INSERT INTO class (class) VALUES ('$class')");

}

$callName=$_POST["callName"];
if($callName=="insertProfession"){

	$profession=$_POST["profession"];

$sql=mysqli_query($con,"INSERT INTO profession (profession) VALUES ('$profession')");

}

$callName=$_POST["callName"];
if($callName=="insertRoute"){

	$route=$_POST["route"];

$sql=mysqli_query($con,"INSERT INTO route (route) VALUES ('$route')");

}

$callName=$_POST["callName"];
if($callName=="insertVehicle"){

	$vehicle=$_POST["vehicle"];

$sql=mysqli_query($con,"INSERT INTO vehicle (vehicle) VALUES ('$vehicle')");

}


$callName=$_POST["callName"];
if($callName=="insertDivision"){

	$division=$_POST["division"];

$sql=mysqli_query($con,"INSERT INTO division (division) VALUES ('$division')");

}



?>
