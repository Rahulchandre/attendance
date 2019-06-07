
<!-- Connection code start -->
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



$query = mysqli_query($con,"SELECT * FROM hostel_visitors  WHERE id ='$id'") or die(mysqli_error($query));
if ($n = mysqli_fetch_array($query)) 
{
    $user_type=$n["user_type"];
    $visitor_name=$n["visitor_name"];
    $relation_name=$n["relation_name"];
    $student_name=$n["student_name"];
    $employee_name=$n["employee_name"];
    $date=$n["date"];
    $time=$n["time"];

}


}

if (isset($_POST['update']))
{
    $user_type=$_POST["user_type"];
    $visitor_name=$_POST["visitor_name"];
    $relation_name=$_POST["relation_name"];
    $student_name=$_POST["student_name"];
    $employee_name=$_POST["employee_name"];
    $date=$_POST["date"];
    $time=$_POST["time"];




$id=$_GET['edit'];


$query=mysqli_query($con,"UPDATE hostel_visitors SET user_type = '$user_type', visitor_name = '$visitor_name', relation_name = '$relation_name', 
student_name = '$student_name', employee_name = '$employee_name', date ='$date', time='$time'
WHERE id ='$id'");
 if($query)
 {
echo "<script>alert('  Leave Updated successfully........!');
window.location='hostel_visitor.php';
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
                <i class="fa fa-table"></i>&nbsp;HOSTEL REGISTER</div>
                <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">

                      
<!-- START STUDENT TOGGLE CODE-->

<div class="row">
<div class="col-md-2">
    <label>User Type:</label>
</div>
<div class="col-md-10">
<select class="form-control" name="user_type" value="<?php echo $user_type ;?>"> 
<option value="<?php echo $user_type ;?>"><?php echo $user_type ;?></option>
<option value="student">Student</option>
<option value="employee">Employee</option>

</select>
</div>
</div><br>

<div class="form-group row" > 
                      <div class="col-md-2">
                      <label>Visitor Name :</label>
                      </div>
                      <div class="col-md-4">
                           <input type="text" value="<?php echo $visitor_name ;?>"  name="visitor_name" class="form-control" placeholder="Enter Full Name">
                         
                         </div>


<div class="col-md-2">
                      <label>Relation Name :</label>
                      </div>
                      <div class="col-md-4">
                           <input type="text"  value="<?php echo $relation_name ;?>" name="relation_name" class="form-control" placeholder="Enter Full Name">
                         
                         </div>
</div>


<div class="student box">
    <div class="form-group row" > 
                      <div class="col-md-2">
                      <label>Student Name :</label>
                      </div>
                      <div class="col-md-10">
                           <input type="text" value="<?php echo $student_name ;?>" name="student_name" class="form-control" placeholder="Enter Full Name">
                         
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
                                        <input type="text" value="<?php echo $employee_name ;?>" name="employee_name" class="form-control" placeholder="Enter Full Name">       
                                      </div>
                                </div>
                                </div>
</div>

                    <div class="form-group row">
                    <div class="col-md-2">
                              <label>Date:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="date" value="<?php echo $date ;?>" name="date" class="form-control">
                         
                        </div>
                       
                        <div class="col-md-2">
                              <label> Time :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="time" name="time" value="<?php echo $time ;?>" class="form-control" placeholder="Enter Start Time">
                         
                        </div>
                    </div>
                   
                   
                                                    
<!-- END EMPLOYEE TOGGLE CODE-->

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
             
         
<br>


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