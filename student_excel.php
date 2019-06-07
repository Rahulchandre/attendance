<?php 
require('./PHPExcel/db.php');

// if(isset($_POST['generate']))
// {

$sql = "SELECT * from student_reg"; 
$setRec = mysqli_query($con, $sql); 
$columnHeader = ''; 
$columnHeader = "stud_id" . "\t" . "first_name" . "\t" . "middle_name" . "\t" . "last_name" . "\t" . "mother_name" . "\t" . "dob" . "\t" . "address" . "\t" . "contact_no" . "\t" . "email" . "\t" . "dob" . "\t" . "joining_date" . "\t" . "licence_no" . "\t" . "specification" . "\t" . "dob" . "\t" . "gender" . "\t" . "birth_place" . "\t" . "blood_group" . "\t" . "class" . "\t" . "division" . "\t" . "religion" . "\t" . "cast" . "\t" . "photo" . "\t" . "hostel_name" . "\t" . "room_no" . "\t" . "admission_date" . "\t" . "vacating_date" . "\t" . "birth_certificate" . "\t"  . "result" . "\t" . "leaving_certificate" . "\t" . "resident_proof" . "\t" . "aadhar_card" . "\t" . "created_at" . "\t" . "updated_at" . "\t";
$setData = ''; 
while ($rec = mysqli_fetch_row($setRec)) { 
$rowData = ''; 
foreach ($rec as $value) { 
$value = '"' . $value . '"' . "\t"; 
$rowData .= $value; 
} 
$setData .= trim($rowData) . "\n"; 
} 
header("Content-Type: application/vnd.ms-excel");
header("Content-disposition: attachment; filename=spreadsheet.xls");
echo ucwords($columnHeader) . "\n" . $setData . "\n"; 

?>