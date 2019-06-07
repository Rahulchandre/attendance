<?php
include('db.php');
?>
<?php

//fetch student name classwise and division wise classandDivisionWise
if($_POST["callName"]=="classandDivisionWise"){

$query =("SELECT s.first_name,s.last_name,s.gender,c.class,d.division,s.id FROM student s JOIN class c ON c.id=s.class_id JOIN division d ON d.id=s.division_id  WHERE class_id LIKE '%".$_POST["classId"]."%' AND division_id LIKE '%".$_POST["divisionId"]."%'");

	$result= mysqli_query($con,$query);
	$myArray = array();
	while($row = mysqli_fetch_array($result)){
		$myArray[] = $row;
	}
	echo json_encode($myArray);
}


//insert attendance and update attendance 0 and 1 format addStudStatus
if($_POST["callName"]=="addStudStatus")
{

$query1= mysqli_query($con,"SELECT id FROM attendance WHERE student_id=".$_POST["studId"]."");
	$myArray = array();

	if($row = mysqli_fetch_array($query1))
	{

// record allready insert asel tr update krnar in attendance
		$query2=mysqli_query($con,"UPDATE `attendance` SET status=".$_POST["status"].", applicant=".$_POST["applicant"]." WHERE student_id=".$_POST["studId"]."");
		
// record complsory insert in another table in attendance_monthly
		$query4=mysqli_query($con,"INSERT INTO `attendance_monthly`(`student_id`, `status`, `applicant`) VALUES (".$_POST["studId"].",".$_POST["status"].",".$_POST["applicant"].")");
            
    }
	else // record allready insert nsel tr insert krnar in attendance
	{
     	$query3=mysqli_query($con,"INSERT INTO `attendance`(`student_id`, `status`, `applicant`) VALUES (".$_POST["studId"].",".$_POST["status"].",".$_POST["applicant"].")");
	 
	}
}


?>

<?php

//monthly record fetch name wise  classandDivisionWiseName
if($_POST["callName"]=="classandDivisionWiseName"){

$query =("SELECT s.first_name,s.last_name,s.gender,c.class,d.division,s.id FROM student s JOIN class c ON c.id=s.class_id JOIN division d ON d.id=s.division_id  WHERE class_id LIKE '%".$_POST["classId"]."%' AND division_id LIKE '%".$_POST["divisionId"]."%'");

	$result= mysqli_query($con,$query);
	$myArray = array();
	while($row = mysqli_fetch_array($result)){
		$myArray[] = $row;
	}
	echo json_encode($myArray);
}

?>

