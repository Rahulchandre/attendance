
<?php
include('header.php');
include('sidebar.php');
include('footer.php');
include('db.php');
 ?>


<!-- insert record start -->
<?php

if (isset($_GET['edit']))
{
$id = $_GET['edit'];

$query = mysqli_query($con,"SELECT * FROM hostel_room_transfer WHERE id='$id'") or die(mysqli_error($query));

if ($row = mysqli_fetch_array($query)) 
{

    $user_type=$row["user_type"];
        
    $student_name=$row["student_name"];
    $emplyee_name=$row["emplyee_name"];
    $hostel_type=$row["hostel_type"];     
    $hostel_name=$row["hostel_name"];  
    $hostel_room=$row["hostel_room"]; 



}


}

if (isset($_POST['update']))
  {
    $user_type=$_POST["user_type"];
        
    $student_name=$_POST["student_name"];
    $emplyee_name=$_POST["emplyee_name"];
    $hostel_type=$_POST["hostel_type"];     
    $hostel_name=$_POST["hostel_name"];  
    $hostel_room=$_POST["hostel_room"]; 
   

    

        $id=$_GET['edit'];
        
      
      $query=mysqli_query($con,"UPDATE hostel_root_transfer SET
       user_type = '$user_type', emplyee_name = '$date_form', hostel_type ='$hostel_type',
       hostel_name ='$hostel_name', hostel_room ='$hostel_room' WHERE id ='$id'");
        if($query)
        {
        echo "<script>alert('  Notice Updated successfully........!');
        window.location='room_transfer.php';
        </script>";
        
        }
}


?>




<?php



  if(isset($_POST["submit"]))
    {
       
        $user_type=$_POST["user_type"];
        
        $student_name=$_POST["student_name"];
        $emplyee_name=$_POST["emplyee_name"];
        $hostel_type=$_POST["hostel_type"];     
        $hostel_name=$_POST["hostel_name"];  
        $hostel_room=$_POST["hostel_room"]; 
        
      
       
        
        
 $query=mysqli_query($con,"INSERT INTO hostel_room_transfer(user_type, student_name, emplyee_name, hostel_type, hostel_name, hostel_room)
   VALUES('$user_type', '$student_name',  '$emplyee_name', '$hostel_type', '$hostel_name', '$hostel_room')");
   if($query)
   {
   echo "<script>alert('  Record Insert successfully........!');
   window.location='room_transfer.php';
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
                <i class="fa fa-table"></i> &nbsp;ROOM TRANSFER</div>
                <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">

                      
 
            
 
<!-- START STUDENT TOGGLE CODE-->

<div class="row">
<div class="col-md-2">
    <label>User Type:</label>
</div>
<div class="col-md-4">
<select class="form-control" name="user_type" value="<?php echo $user_type;?>"> 
<option value="<?php echo $user_type;?>"><?php echo $user_type;?></option>
<option value="student">Student</option>
<option value="employee">Employee</option>

</select>
</div>
<div class="col-md-2">
    <label>Select:</label>
</div>
<div class="col-md-4">
<select class="form-control" name="select" value=""> 
<option value="">NA</option>
<option value="transfer">Transfer</option>
<option value="vacate">Vacate</option>

</select>
</div>

</div>
<br>


<!-- END STUDENT TOGGLE CODE-->


 <!-- START EMPLOYEE TOGGLE CODE-->
                      <div class="employee box">
                          <div class="form-group row" > 
                                  <div class="col-md-2">
                                    <label>Employee Name :</label>
                                      </div>
                                      <div class="col-md-10">
                                        <input type="text" value="<?php echo $emplyee_name;?>" name="emplyee_name" class="form-control" placeholder="Enter Full Name">       
                                      </div>
                                </div>
                                </div>
                                                    
<!-- END EMPLOYEE TOGGLE CODE-->


<div class="transfer box ">
 <div class="form-group row" > 
 <div class="col-md-2">
                              <label>Hostel Type :</label>
                          </div>
                          <div class="col-md-2">
                          <select class="form-control dropdown" name="hostel_type" value="<?php echo $hostel_type;?>">
                                <option value="<?php echo $hostel_type;?>"><?php echo $hostel_type;?></option>
                                <option value="#">English</option>
                                <option value="#">Marathi</option>
                                <option value="#">Semi</option>
                              
                          </select>
                         
                        </div>
                      
                         <div class="col-md-2">
                              <label>Hostel Name :</label>
                          </div>
                          <div class="col-md-2">
                          <select class="form-control dropdown" name="hostel_name" value="<?php echo $hostel_name;?>">
                                <option value="<?php echo $hostel_name;?>"><?php echo $hostel_name;?></option>
                                <option value="#">English</option>
                                <option value="#">Marathi</option>
                                <option value="#">Semi</option>
                              
                          </select>
                         
                        </div>
                        <div class="col-md-2">
                              <label>Hostel Room :</label>
                          </div>
                          <div class="col-md-2">
                          <select class="form-control dropdown" name="hostel_room" value="<?php echo $hostel_room;?>">
                                <option value="<?php echo $hostel_room;?>"><?php echo $hostel_room;?></option>
                                <option value="#">English</option>
                                <option value="#">Marathi</option>
                                <option value="#">Semi</option>
                              
                          </select>
                         
                        </div>
                    </div>
</div>
<!-- END STUDENT TOGGLE CODE-->


 <!-- START EMPLOYEE TOGGLE CODE-->
                      <div class="vacate box">
                          <div class="form-group row" > 
                                  <div class="col-md-2">
                                    <label>student Name :</label>
                                      </div>
                                      <div class="col-md-10">
                                        <input type="text" value="<?php echo $student_name;?>" name="student_name" class="form-control" placeholder="Enter Full Name">       
                                      </div>
                                </div>
                                </div>
                                                    
<!-- END EMPLOYEE TOGGLE CODE-->

          <div class="row">
          <div class="col-md-12" align="center" style="margin-bottom: 10px;">
               <button type="submit" name="submit" class="btn btn-primary" style="width:150px">
               <i class="fa fa-save">&nbsp;</i>Submit</button>
               &nbsp;&nbsp;&nbsp;&nbsp;
           </div>
          </div>


            
          </form>
            
<br>


      
                 

        </div><!--close card-body-->
        </div>

            
<br>


      
                 

        </div><!--close card-body-->
        </div>
      </div><!-- /col-md-3-->
      </div><!-- wrapper class close-->        
             
                       

    
            
<br>

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