<?php
include('header.php');
include('footer.php');
include('db.php');
include('student_import.php');

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
      
        $firstName=$myData[0];
        $middleName=$myData[1];
        $lastName=$myData[2];
        $motherName=$myData[3];
        $address=$myData[4];
        $contactNo=$myData[5];
        $email=$myData[6];
        $dob=$myData[7];
        $gender=$myData[8];
        $birthPlace=$myData[9];
        $bloodGroup=$myData[10];
        $class=$myData[11];
        $division=$myData[12];
        $religion=$myData[13];
        $cast=$myData[14];
        $photo=$myData[15];
        $hostelName=$myData[16];
        $roomNo=$myData[17];
        $admissionDate=$myData[18];
        $vacatingDate=$myData[19];
        $birthCertificate=$myData[20];
        $result=$myData[21];
        $leavingCertificate=$myData[22];
        $residentProof=$myData[23];
        $aadharCard=$myData[24];

        $query="insert into student_reg(first_name,middle_name,last_name,mother_name,address,contact_no,email,dob,
             gender,birth_place,blood_group,class,division,religion,cast,photo,hostel_name,room_no,admission_date,vacating_date,birth_certificate,
        result,leaving_certificate,resident_proof,aadhar_card) 
        values('$firstName','$middleName','$lastName','$motherName','$address','$contactNo','$email','$dob','$gender','$birthPlace',
        '$bloodGroup','$class','$division','$religion','$cast','$photo','$hostelName','$roomNo','$admissionDate','$vacatingDate','$birthCertificate',
        '$result','$leavingCertificate','$residentProof','$aadharCard')";
        $run=mysqli_query($con,$query);
  }

  
  if(!$run)
  {
    echo "<script>alert('Failed to upload');</script>";	
  }
  else{

    echo "<script>alert('File Uploaded Successfully');</script>";	
  }

}

}

?>
