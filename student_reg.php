<!-- Connection code start -->
 <?php
include('header.php');
include('sidebar.php');
include('footer.php');
include('db.php');
 ?>

<?php

if(isset($_POST["submit"]))
{


$first_name=$_POST["first_name"];
$middle_name=$_POST["middle_name"];
$last_name=$_POST["last_name"];
$mother_name=$_POST["mother_name"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$birth_place=$_POST["birth_place"];
$blood_group=$_POST["blood_group"];



$nationality=$_POST["nationality"];
$religion=$_POST["religion"];
$cast=$_POST["cast"];
$profession=$_POST["profession"];
$class=$_POST["class"];
$division=$_POST["division"];

$imagefile=$_FILES["photo"]["name"];
$tempfile=$_FILES["photo"]["tmp_name"];
$folder="image/".$imagefile;
move_uploaded_file($tempfile,$folder); 



// //contact Details

$permanent_address=$_POST["permanent_address"];
$present_address=$_POST["present_address"];
$contact_no=$_POST["contact_no"];
$alternate_contact=$_POST["alternate_contact"];
$email=$_POST["email"];
$city=$_POST["city"];
$state=$_POST["state"];



// //Parents Details:
$father_name=$_POST["father_name"];
$local_guardian=$_POST["local_guardian"];




// //Official Details:
$admission_date=$_POST["admission_date"];
$admission_type=$_POST["admission_type"];
$medium=$_POST["medium"];
$current_class=$_POST["current_class"];
$admission_class=$_POST["admission_class"];
$student_reg_no=$_POST["student_reg_no"];

$transport=$_POST["transport"];
$hostel_name=$_POST["hostel_name"];
$room_no=$_POST["room_no"];
$admit_date=$_POST["admit_date"];
$vacating_date=$_POST["vacating_date"];



$imagefile=$_FILES["photo"]["name"];
$tempfile=$_FILES["photo"]["tmp_name"];
$folder="image/".$imagefile;
move_uploaded_file($tempfile,$folder); 

$imagefile1=$_FILES["photo1"]["name"];
$tempfile1=$_FILES["photo1"]["tmp_name"];
$folder1="image/".$imagefile1;
move_uploaded_file($tempfile1,$folder1); 

 $imagefile2=$_FILES["photo2"]["name"];
$tempfile2=$_FILES["photo2"]["tmp_name"];
$folder2="image/".$imagefile2;
move_uploaded_file($tempfile2,$folder2); 

 $imagefile3=$_FILES["photo3"]["name"];
$tempfile3=$_FILES["photo3"]["tmp_name"];
$folder3="image/".$imagefile3;
move_uploaded_file($tempfile3,$folder3); 

 $imagefile4=$_FILES["photo4"]["name"];
$tempfile4=$_FILES["photo4"]["tmp_name"];
$folder4="image/".$imagefile4;
move_uploaded_file($tempfile4,$folder4); 

$imagefile5=$_FILES["photo5"]["name"];
$tempfile5=$_FILES["photo5"]["tmp_name"];
$folder5="image/".$imagefile5;
move_uploaded_file($tempfile5,$folder5); 



$query=mysqli_query($con,"INSERT INTO student(first_name, profession_id, middle_name, last_name, mother_name, birth_place, dob, gender, blood_group, class_id, division_id, nationality, cast_id, religion, photo, permanent_address, present_address, contact_no, 
alternate_contact, email, city, state, father_name, local_guardian, admission_date, admission_type, medium, current_class, admission_class, 
    student_reg_no,  transport, hostel_name, room_no, admit_date, vacating_date, birth_certificate, result_marksheet, leaving_certificate, resident_proof, aadhar_card)

VALUES('$first_name','$profession','$middle_name','$last_name','$mother_name','$birth_place','$dob','$gender','$blood_group','$class','$division', '$nationality','$cast', '$religion','$imagefile', '$permanent_address', '$present_address', '$contact_no', 
'$alternate_contact', '$email', '$city', '$state','$father_name', '$local_guardian', '$admission_date', '$admission_type', '$medium', '$current_class' , '$admission_class',
  '$student_reg_no', '$transport', '$hostel_name', '$room_no', '$admit_date', '$vacating_date', '$imagefile1', '$imagefile2', '$imagefile3', '$imagefile4', '$imagefile5')");

if($query)
    {
   echo "<script>alert('  Record Insert successfully........!');
   window.location='student_reg.php';
   </script>";
   
   } 
}
    


?>


<!-- form code start -->
<div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"> </div>
            <div class="col-md-10">
            <div class="card mb-1">
              <div class="card-header">
                <i class="fa fa-table"></i> &nbsp;<b>STUDENT REGISTRATION</b></div>
                <div class="card-body">
                   
                  <form action="" method="post" enctype="multipart/form-data">
                    <label><b>Student Details:</b></label>
                    <hr> 
                      <div class="form-group row">

                          <div class="col-md-2">
                              <label>First Name :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Enter First Name">
                         
                        </div>
                      
 
                      
                          

                      <div class="col-md-2">
                              <label>Middle Name :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="middle_name"  class="form-control" placeholder="Enter Father Name">
                         
                        </div>
                      </div>



                            <div class="form-group row">
                          <div class="col-md-2">
                              <label>Last Name :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="last_name"  class="form-control" placeholder="Enter Last Name">
                         
                        </div>
                 



                                            
                          <div class="col-md-2">
                              <label>Mother Name :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="mother_name"  class="form-control" placeholder="Enter Mother Name">
                         
                        </div>
                      </div>

                       <div class="form-group row">
                          <div class="col-md-2">
                              <label>Date of Birth :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="Date" name="dob" class="form-control">
                         
                        </div>
                 


                                            
                          <div class="col-md-2">
                              <label>Birth Place :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="birth_place" class="form-control" placeholder="Enter Birth Place">
                         
                        </div>
                      </div>

                      

                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Blood Group :</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="blood_group">
                                <option value="NA">NA</option>
                                <option value="O-">O-</option>
                                <option value="O+">O+</option>
                                <option value="A-">A-</option>
                                <option value="A+">A+</option>
                                <option value="B-">B-</option>
                                <option value="B+">B+</option>
                                <option value="AB-">AB-</option>
                                <option value="AB+">AB+</option>
                          </select>
                         
                        </div>
                   

                      
                 <div class="col-md-2">
                <label>Gender : 
                </label>
                </div>
                <div class="col-md-4">
                <label class="radio-inline radio-left" style="margin-left: unset;">
                  <input type="radio"  name="gender" id="optionsRadiosInline1" value="Male" >&nbsp;Male&nbsp;&nbsp;
                </label>
                <label class="radio-inline">
                  <input type="radio" name="gender" id="optionsRadiosInline2" value="Female">&nbsp;Female&nbsp;&nbsp;
                </label>
              </div>
              </div>
              

                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Class :</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="class">
                             <option value="0">NA</option>
                               <?php
                                    $sql= mysqli_query($con,"SELECT id,class FROM class");
                                    while ($row = mysqli_fetch_array($sql))
                                    {
                                        
                                    ?>
                                    <option value="<?php echo $row['id']; ?>">
                                    <?php echo $row['class']; ?></option>
                                    <?php
                                        
                                } ?>
                          </select>
                         
                        </div>
                  




                          <div class="col-md-2">
                              <label>Division :</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="division">
                               <option value="0">NA</option>
                               <?php
                                    $sql= mysqli_query($con,"SELECT id,division FROM division");
                                    while ($row = mysqli_fetch_array($sql))
                                    {
                                        
                                    ?>
                                    <option value="<?php echo $row['id']; ?>">
                                    <?php echo $row['division']; ?></option>
                                    <?php       
                                } ?>
                          </select>
                         
                        </div>
                      </div>

       <div class="form-group row">
                          <div class="col-md-2">
                              <label>Nationality :</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="nationality">
                             <option value="NA">NA</option>
                                 <option value="Indian">Indian</option>
                                 <option value="Bangladeshi">Bangladeshi</option>
                                 <option value="Chinese">Chinese</option>
                                 <option value="Nepalese">Nepalese</option>
                                  <option value="Other">Other</option>
                               <?php
                                    $sql= mysqli_query($con,"SELECT id,religion FROM religion");
                                    while ($row = mysqli_fetch_array($sql))
                                    {
                                        
                                    ?>
                                    <option value="<?php echo $row['religion']; ?>">
                                    <?php echo $row['religion']; ?></option>
                                    <?php       
                                } ?>
       
                          </select>
                         
                        </div>
                      




                                            
                          <div class="col-md-2">
                              <label>Religion :</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="religion">
                             <option value="NA">NA</option>
                                 <option value="Hinduism">Hinduism</option>
                                 <option value="Islam">Islam</option>
                                 <option value="Christianity">Christianity</option>
                                 <option value="Sikhism">Sikhism</option>
                                 <option value="Buddhism">Buddhism</option>
                                 <option value="Jainism">Jainism</option>
                                 <option value="Others">Others</option>
                               <?php
                                    $sql= mysqli_query($con,"SELECT id,religion FROM religion");
                                    while ($row = mysqli_fetch_array($sql))
                                    {
                                        
                                    ?>
                                    <option value="<?php echo $row['religion']; ?>">
                                    <?php echo $row['religion']; ?></option>
                                    <?php       
                                } ?>
       
                          </select>
                         
                        </div>
                              </div>

                                   

                              <div class="form-group row">
                          <div class="col-md-2">
                              <label>Caste :</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="cast" >
                             <option value="NA">NA</option>
                          
                               <?php
                                    $sql= mysqli_query($con,"SELECT id,cast FROM cast");
                                    while ($row = mysqli_fetch_array($sql))
                                    {
                                        
                                    ?>
                                    <option value="<?php echo $row['id']; ?>">
                                    <?php echo $row['cast']; ?></option>
                                    <?php       
                                } ?>
                        </select>
                         
                        </div>
                      






                                           
                          <div class="col-md-2">
                              <label>Photo :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="file" name="photo" placeholder="upload photo">
                         
                        </div>
                              </div>
                        

  <label><b>Contact Details:</b></label>
                    <hr> 
 <div class="form-group row">
                          <div class="col-md-2">
                              <label>Permanent Address:</label>
                          </div>
                          <div class="col-md-4">
                           <textarea class="form-control" name="permanent_address" placeholder="Enter Permanent Address" cols="" roes="4"></textarea>
                         
                        </div>
                      
                      
                          <div class="col-md-2">
                              <label>Present Address:</label>
                          </div>
                          <div class="col-md-4">
                           <textarea class="form-control" name="present_address" placeholder="Enter Present Address" cols="" roes="4"></textarea>
                         
                        </div>
                      </div>

                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Contact No :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="contact_no" class="form-control" placeholder="Enter Contact No">
                           
                        </div>
                   

                      
                          <div class="col-md-2">
                              <label>Parent Mob:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="alternate_contact" class="form-control" placeholder="Enter Contact No">
                         
                        </div>
                      </div>

                       


                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>State :</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="state">
                                <option value="0">NA</option>
                                <option value="2">1-</option>
                                <option value="3">2+</option>
                              
                          </select>
                         
                        </div>
                      

                       
                          <div class="col-md-2">
                              <label>City :</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="city">
                                <option value="0">NA</option>
                                <option value="2">1-</option>
                                <option value="3">2+</option>
                              
                          </select>
                         
                        </div>
                      </div>
                      


                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Email :</label>
                          </div>
                          <div class="col-md-10">
                           <input type="text"  name="email" class="form-control" placeholder="Enter email">
                         
                        </div>
                      </div>







                    <label><b>Official Details:</b></label>
                    <hr> 


                        <div class="form-group row">
                          <div class="col-md-2">
                              <label>Admission Date:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="Date" name="admission_date" class="form-control" placeholder="Enter Admission Date">
                         
                        </div>
             

                      
                          <div class="col-md-2">
                              <label>Admission Type:</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="admission_type">
                                <option value="0">NA</option>
                                <option value="New">New</option>
                                <option value="Old">Old</option>
                              
                          </select>
                         
                        </div>
                      </div>

                       <div class="form-group row">
                          <div class="col-md-2">
                              <label>Medium :</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="medium">
                                <option value="0">NA</option>
                                <option value="English">English</option>
                                <option value="Marathi">Marathi</option>
                                <option value="Semi">Semi</option>
                              
                          </select>
                         
                        </div>
                   

                       
                          <div class="col-md-2">
                              <label>Current Class :</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="current_class">
                                <option value="0">NA</option>
                                <?php
                                    $sql= mysqli_query($con,"SELECT id,class FROM class");
                                    while ($row = mysqli_fetch_array($sql))
                                    {
                                        
                                    ?>
                                    <option value="<?php echo $row['class']; ?>">
                                    <?php echo $row['class']; ?></option>
                                    <?php
                                        
                                } ?>
                              
                          </select>
                         
                        </div>
                      </div>

                       <div class="form-group row">
                          <div class="col-md-2">
                              <label>Admission Class:</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="admission_class">
                                   <?php
                                    $sql= mysqli_query($con,"SELECT id,class FROM class");
                                    while ($row = mysqli_fetch_array($sql))
                                    {
                                        
                                    ?>
                                    <option value="<?php echo $row['class']; ?>">
                                    <?php echo $row['class']; ?></option>
                                    <?php
                                        
                                } ?>
                              
                          </select>
                         
                        </div>
                    

                                        
                          <div class="col-md-2">
                              <label>Reg. Number:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="student_reg_no" class="form-control" placeholder="Enter Register Number">
                         
                        </div>
                      </div>



  <div class="form-group">
  
                <label>Do you want transport facility : 
                </label>
                <label class="radio-inline radio-left">
                  <input type="radio"  name="transport" id="optionsRadiosInline1" value="male">&nbsp;Yes&nbsp;&nbsp;
                </label>
                <label class="radio-inline">
                  <input type="radio" name="transport" id="optionsRadiosInline2" value="femail">&nbsp;No&nbsp;&nbsp;
                </label>
              </div>
              

              <label><b>Parent's Details:</b></label>
                    <hr> 
                    <div class="form-group row">
                          <div class="col-md-2">
                              <label>Father Name:</label>
                          </div>
                          <div class="col-md-10">
                           <input type="text"  name="father_name" class="form-control" placeholder="Enter Father Name">
                         
                        </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Guardian Name:</label>
                          </div>
                          <div class="col-md-10">
                           <input type="text"  name="local_guardian" class="form-control" placeholder="Enter Guardian Name">
                         
                        </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Profession:</label>
                          </div>
                          <div class="col-md-10">
                          <select class="form-control dropdown" name="profession" >
                             <option value="NA">NA</option>
                          
                               <?php
                                    $sql= mysqli_query($con,"SELECT id,profession FROM profession");
                                    while ($row = mysqli_fetch_array($sql))
                                    {
                                        
                                    ?>
                                    <option value="<?php echo $row['id']; ?>">
                                    <?php echo $row['profession']; ?></option>
                                    <?php       
                                } ?>
                         
                         </select>
                      </div>
                      </div>
           


<!-- /Hostel code-->

 <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="full_name" value="1" class="hostelclass" name="coupon_question" onchange="hostelCall()">
                  <b>Hostel</b>
                  </label>
                </div>

              </div><hr>

                  <div class="hostel" id="hostel11" style="display:none;">
                      <div class="form-group row">
                      
                          <div class=" col-md-2">
                              <label>Hostel Name :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="hostel_name" class="form-control" placeholder="Enter Hostel Name">
                         
                        </div>
                  

                      
                          <div class="col-md-2">
                              <label>Room No :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="room_no" class="form-control" placeholder="Enter Room No">
                         
                        </div>
                      </div>

                      <div class="form-group row" > 
                          <div class="col-md-2">
                              <label>Check In Date:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="date"  name="admit_date" class="form-control">
                         
                        </div>
                

                      
                          <div class="col-md-2">
                              <label>Check Out Date:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="date"  name="vacating_date" class="form-control" >
                         
                        </div>
                      </div>
                  </div>






<div class="form-group">
<label><b>Document Attached:</b></label><hr>
<div class="checkbox">
<label >
<input type="checkbox" value="1" class="coupon_question" name="coupon_question" onchange="attachFile()">
Birth certificate&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="file" name="photo1" class="fileupload" id="doc1" style="display:none; margin-top:5px;">

</label>
</div>


<div class="checkbox">
<label>
<input type="checkbox" value="2" class="coupon_question2" name="coupon_question2" onchange="attachFile2()">
Result Marksheet 
<input type="file" name="photo2" class="fileupload" id="doc2" style="display:none; margin-top:5px;margin-left: 37px;">
</label>
</div>


<div class="checkbox">
<label>
<input type="checkbox" value="3" class="coupon_question3" name="coupon_question3" onchange="attachFile3()">
Leaving certificate
<input type="file" name="photo3" class="fileupload" id="doc3" style="display:none;margin-top:5px; ">
</label>
</div>


<div class="checkbox">
<label>
<input type="checkbox" value="4" class="coupon_question4" name="coupon_question4" onchange="attachFile4()">
Resident Proof&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="file" name="photo4" class="fileupload" id="doc4" style="display:none; margin-top:5px;">
</label>
</div>


<div class="checkbox">
<label>
<input type="checkbox" value="5" class="coupon_question5" name="coupon_question5" onchange="attachFile5()">
Aadhar card&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="file" name="photo5" class="fileupload" id="doc5" style="display:none; margin-top:5px;">
</label>
</div>
</div>
              

              <div class="row">
              <div class="col-md-12" align="center" style="margin-bottom: 10px;">
               <button type="submit" name="submit" class="btn btn-primary" style="width:150px"><i class="fa fa-save">&nbsp;</i>Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
              </div>
            </div>


</form>

             

                      
                    
       
                </div>
              </div>
             
            </div>
          </div> <!-- /col-md-6-->
          <div class="col-md-3"> </div>

      </div><!-- /col-md-3-->
      </div><!-- wrapper class close-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- /HOSTEL JAVASCRIPT CODE-->

<script type="text/javascript">
function hostelCall()
{

    if($('.hostelclass').is(":checked"))
    {
        $("#hostel11").show();
        $("#radioBtn1").hide();
    }
    else
    {
        $("#hostel11").hide();
         $("#radioBtn1").show();
      }  
}
</script>
<!-- /HOSTEL HIDE SHOW CODE CLOZ-->
<script type="text/javascript">
function attachFile()
{
    if($('.coupon_question').is(":checked"))
    {
        $("#doc1").show();
        $("#radioBtn1").hide();
    }
    else
    {
        $("#doc1").hide();
         $("#radioBtn1").show();
      }  
}

function attachFile2()
{
    if($('.coupon_question2').is(":checked"))
    {
        $("#doc2").show();
        $("#radioBtn2").hide();
    }
    else
    {
        $("#doc2").hide();
         $("#radioBtn2").show();
      }  
}

function attachFile3()
{
    if($('.coupon_question3').is(":checked"))
    {
        $("#doc3").show();
        $("#radioBtn3").hide();
    }
    else
    {
        $("#doc3").hide();
         $("#radioBtn3").show();
      }  
}

function attachFile4()
{
    if($('.coupon_question4').is(":checked"))
    {
        $("#doc4").show();
        $("#radioBtn4").hide();
    }
    else
    {
        $("#doc4").hide();
         $("#radioBtn4").show();
      }  
}

function attachFile5()
{
    if($('.coupon_question5').is(":checked"))
    {
        $("#doc5").show();
        $("#radioBtn5").hide();
    }
    else
    {
        $("#doc5").hide();
         $("#radioBtn5").show();
      }  
}
</script>

<!-- CHECK BOX CODE close-->







   



