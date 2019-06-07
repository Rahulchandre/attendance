<?php
include('header.php');
include('footer.php');
include('db.php');
include('staff_import.php');
$con=mysqli_connect("localhost","root","","db_school");
/*< php functionality for import student into database */ 
if(isset($_POST['upload']))
{

    $fileName=$_FILES['myfile']['name'];
    $fileTmpName=$_FILES['myfile']['tmp_name'];
    $fileExtension=pathinfo($fileName,PATHINFO_EXTENSION);
    //echo $fileExtension;

    $allowType=array('csv');
    if(!in_array($fileExtension,$allowType))
    {
        //echo "|Invalid file extension";
    }
else
{
    $handle= fopen($fileTmpName,'r');
    $count = 0;
    while(($myData=fgetcsv($handle,1000,","))!==false)
    {
        $count++;
        if ($count == 1) { continue; }

        $full_name=$myData[0];
        $address=$myData[1];
        $mobile_no=$myData[2];
        $email=$myData[3];
        $dob=$myData[4];
        $gender=$myData[5];
        $staff_type=$myData[6];
        $position=$myData[7];
        $joining_date=$myData[8];
        $licence_no=$myData[9];
        $specification=$myData[10];
        $qualification=$myData[11];
        $prev_emp=$myData[12];
        $prev_position=$myData[13];
        $prev_salary=$myData[14];
        $photo=$myData[15];
        

        $query="insert into staff_reg(full_name,address,mobile_no,email,dob,gender,staff_type,position,
        joining_date,licence_no,specification,qualification,prev_emp,prev_position,prev_salary,photo) 
        values('$full_name','$address','$mobile_no','$email','$dob','$gender','$staff_type','$position','$joining_date','$licence_no',
        '$specification','$qualification','$prev_emp','$prev_position','$prev_salary','$photo')";
        $run=mysqli_query($con,$query);
  }


  if(!$run)
  {
    echo "<script>alert('Failed to upload');</script>";	
  }
  else
  {
    echo "<script>alert('File Uploaded Successfully');</script>";	
  }
}


}

?>