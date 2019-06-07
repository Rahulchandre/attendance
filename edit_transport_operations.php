

<?php

include('db.php');

if(isset($_POST["submit"]))
  {
	$stop_name=$_POST['stop_name'];
	$stop_type=$_POST['stop_type'];
	$distance=$_POST['distance'];
	$fees=$_POST['fees'];
	
	
	mysqli_query($con,"insert into stoppage (stop_name, stop_type, distance, fees) values ('$stop_name', '$stop_type', '$distance', '$fees')");
	header('location:add_stoppage.php');
  }

?>

 
<?php
	include('db.php');
	if(isset($_POST["update"]))
	{
	$id=$_GET['id'];
	
	$stop_name=$_POST['stop_name'];
	$stop_type=$_POST['stop_type'];
	$distance=$_POST['distance'];
	$fees=$_POST['fees'];
	
	mysqli_query($con,"update stoppage set stop_name='$stop_name', stop_type='$stop_type', distance='$distance', fees='$fees' where id='$id'");
	header('location:add_stoppage.php');
}
	
?>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->




<?php

include('db.php');

if(isset($_POST["insert"]))
  {
	$vehicle_code=$_POST['vehicle_code'];
	$vehicle_no=$_POST['vehicle_no'];
	$reg_no=$_POST['reg_no'];

	$vehicle_type=$_POST['vehicle_type'];
	$active=$_POST['active'];
	mysqli_query($con,"insert into vehicle_details (vehicle_code, vehicle_no, reg_no, vehicle_type, active) values ('$vehicle_code', '$vehicle_no', '$reg_no', '$vehicle_type', '$active')");
	header('location:add_vehicle.php');
  }

?>


<?php
	include('db.php');
	if(isset($_POST["update1"]))
	{
	$id=$_GET['id'];
	
	$vehicle_code=$_POST['vehicle_code'];
	$vehicle_no=$_POST['vehicle_no'];
	$reg_no=$_POST['reg_no'];
	$vehicle_type=$_POST['vehicle_type'];
	$active=$_POST['active'];

	
	mysqli_query($con, "update vehicle_details set vehicle_code='$vehicle_code', vehicle_no='$vehicle_no', reg_no='$reg_no', vehicle_type='$vehicle_type', active='$active' where id='$id'");
	header('location:add_vehicle.php');
}
	
?>


<?php
if (isset($_POST['update2']))
{
    $route_name=$_POST["route_name"];
    $vehicle_code=$_POST["vehicle_code"];
    $stop_type=$_POST["stop_type"];
    $pick_up_time=$_POST["pick_up_time"];
    $drop_time=$_POST["drop_time"];
		$fees=$_POST["fees"];


$id=$_GET['id'];


$query=mysqli_query($con,"UPDATE route_details SET route_name = '$route_name', vehicle_code = '$vehicle_code', stop_type = '$stop_type', pick_up_time = '$pick_up_time', drop_time = '$drop_time', fees = '$fees' WHERE id ='$id'");

if($query)
{
echo "<script>alert('Vehicle details Updated successfully........!');
window.location='route_details.php';
</script>";

} 

}

?>