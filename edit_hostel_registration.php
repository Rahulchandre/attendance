
<!-- Connection code start -->
<?php
include('header.php');
include('sidebar.php');
include('footer.php');
include('db.php');
 ?>


<!-- insert record start -->
<?php

 if (isset($_GET['delete']))
   {
        $id=$_GET['delete'];
        $sql=mysqli_query($con,"DELETE FROM hostel_reg WHERE id='$id'");
   }    

?>
<?php


if (isset($_GET['edit']))
{
$id = $_GET['edit'];

$query = mysqli_query($con, "SELECT * FROM hostel_reg WHERE id='$id'") or die(mysqli_error($query));
if ($n = mysqli_fetch_array($query)) 
{

    $user_type=$n["user_type"];
    $hostel_type=$n["hostel_type"];
    $class=$n["class"];
    $division=$n["division"];
     $student_name=$n["student_name"];
    $employee_name=$n["employee_name"];
    $hostel_name=$n["hostel_name"];
    $hostel_reg_date=$n["hostel_reg_date"];
    $check_out_date=$n["check_out_date"];

}


}

if (isset($_POST['update']))
{
    $user_type=$_POST["user_type"];
    $hostel_type=$_POST["hostel_type"];
    $class=$_POST["class"];
    $division=$_POST["division"];
     $student_name=$_POST["student_name"];
    $employee_name=$_POST["employee_name"];
    $hostel_name=$_POST["hostel_name"];
    $hostel_reg_date=$_POST["hostel_reg_date"];
    $check_out_date=$_POST["check_out_date"];



$id=$_GET['edit'];


$query=mysqli_query($con,"UPDATE hostel_reg SET 
user_type = '$user_type', 
hostel_type = '$hostel_type',
class = '$class',

division = '$division', 
student_name = '$student_name',
employee_name = '$employee_name',

hostel_name = '$hostel_name', 

hostel_reg_date = '$hostel_reg_date',
check_out_date = '$check_out_date' 
WHERE id ='$id'");

if($query)
{
echo "<script>alert('Vehicle details Updated successfully........!');
window.location='hostel_registration.php';
</script>";

} 

}

?>




<!-- insert record start -->




<!-- form code start -->
<div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"> </div>
            <div class="col-md-10">
            <div class="card mb-1">
              <div class="card-header">
                <i class="fa fa-table"></i> &nbsp;HOSTEL REGISTRATION</div>
                <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">

                      
                    <!-- START STUDENT TOGGLE CODE-->

<div class="row">
<div class="col-md-2">
    <label>User Type:</label>
</div>
<div class="col-md-4">
<select class="form-control" name="user_type" value="<?php echo $user_type ;?>"> 
<option value="<?php echo $user_type ;?>"><?php echo $user_type ;?></option>
<option value="student">Student</option>
<option value="employee">Employee</option>

</select>
</div>
 <div class="col-md-2">
                        <label>Hostel Type:</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="hostel_type" value="<?php echo $hostel_type ;?>" >
                          <option value="<?php echo $hostel_type ;?>"><?php echo $hostel_type ;?></option>
                             <option value="#">Employee</option>
                             <option value="#">BUS</option>
                               
                          </select>
</div>
</div>

<br>

<div class="student box">
    <div class="form-group row">
      <div class="col-md-2">
                            <label>Class :</label>
                        </div>
                        <div class="col-md-4">
                        <select class="form-control dropdown" name="class"  value="<?php echo $class ;?>">
                        <option value="<?php echo $class ;?>"><?php echo $class ;?></option>
                             <option value="#">2nd</option>
                             <option value="#">3rd</option>
                        </select>
                       </div>
                       <div class="col-md-2">
                            <label>Division :</label>
                        </div>
                        <div class="col-md-4">
                        <select class="form-control dropdown" name="division" value="<?php echo $division ;?>">
                              <option value="<?php echo $division ;?>"><?php echo $division ;?></option>
                              <option value="#">A</option>
                              <option value="#">B</option>
                        </select>
                      </div>
                      </div>

                      <div class="form-group row" > 
                      <div class="col-md-2">
                      <label>Student Name :</label>
                      </div>
                      <div class="col-md-10">
                           <input type="text" name="student_name" class="form-control" placeholder="Enter Full Name" value="<?php echo $student_name ;?>">
                         
                         </div>
                         </div>
                         </div>
<!-- END STUDENT TOGGLE CODE-->


 <!-- START EMPLOYEE TOGGLE CODE-->
                      <div class="employee box">
                          <div class="form-group row" > 
                                  <div class="col-md-2">
                                    <label>Employee Name :</label>
                                      </div>
                                      <div class="col-md-10">
                                        <input type="text" name="employee_name" class="form-control" value="<?php echo $employee_name ;?>" placeholder="Enter Full Name">       
                                      </div>
                                </div>
                                </div>
                                                    
<!-- END EMPLOYEE TOGGLE CODE-->

        <div class="form-group row">
                          <div class="col-md-2">
                              
                      
                              <label>Hostel Name:</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="hostel_name" value="<?php echo $hostel_name ;?>">
                          <option value="<?php echo $hostel_name ;?>"><?php echo $hostel_name ;?></option>
                             <option value="AUTO">Employee</option>
                             <option value="BUS">BUS</option>
                               
                          </select>
                         
                        </div>
                        <div class="col-md-2">
                        <label>Hostel Room:</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="hostel_room" value="<?php echo $hostel_room ;?>">
                          <option value="<?php echo $hostel_room ;?>"><?php echo $hostel_room ;?></option>
                             <option value="AUTO">AUTO</option>
                             <option value="BUS">BUS</option>
                               
                          </select>
                         
                        </div> 
                      </div>

                      
                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Hostel Reg. Date:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="Date" name="hostel_reg_date" class="form-control" placeholder="Enter Admission Date" value="<?php echo $hostel_reg_date ;?>">
                         
                        </div>
                            
             
                       
                          <div class="col-md-2">
                              <label>Check Out Date:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="Date" name="check_out_date" class="form-control" placeholder="Enter Admission Date" value="<?php echo $check_out_date ;?>">
                         
                        </div>
                        </div>
             
                      
      <div class="row">
          <div class="col-md-12" align="center" style="margin-bottom: 10px;">
               <button type="submit" name="update" class="btn btn-primary" style="width:150px">
               <i class="fa fa-save">&nbsp;</i>Submit</button>
               &nbsp;&nbsp;&nbsp;&nbsp;
           </div>
          </div>
          

          </form>
          </div>
          </div>
        
    </div>
  </div><!-- /col-md-3-->
</div><!-- wrapper class close-->           
             
                       

   
      
          







<!-- / JAVASCRIPT CODE-->


<script type="text/javascript">
$(document).ready(function(){
$("select").change(function(){
$(this).find("option:selected").each(function(){
var optionValue = $(this).attr("value");
if(optionValue){
$(".box").not("." + optionValue).hide();
$("." + optionValue).show();
} else{
$(".box").hide();
}
});
}).change();
});
</script>