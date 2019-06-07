<?php
include('database.php');



if(isset($_POST['view'])){

// $con = mysqli_connect("localhost", "root", "", "notif");

if($_POST["view"] != '')
{
    $update_query = "UPDATE student_reg SET student_status = 1 WHERE student_status=0";
    mysqli_query($con, $update_query);
}
$today = date("Y-m-d");


$query = "SELECT first_name, dob FROM student_reg WHERE MONTH(dob)= MONTH('$today') AND DAY(dob)= DAY('$today') ";
$result = mysqli_query($con, $query);
$output = '';
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
   $output .= '
   <li>
   <a href="#">
   <strong>'.$row["first_name"].' </strong><br />
  
   </a>
  
   ';
   $output .= '
   <a href="#" class="text-bold text-italic">has birthday today!!</a></li>';
 }
 
}

else{
     $output .= '
     <li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
}




$status_query = "SELECT first_name, dob FROM student_reg WHERE student_status=0";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
    'notification' => $output,
    'unseen_notification'  => $count
);

echo json_encode($data);

}

?>
//final backup
