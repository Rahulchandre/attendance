
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



  if(isset($_POST["submit"]))
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

      
 $query=mysqli_query($con,"INSERT INTO hostel_reg(user_type, hostel_type, class, division, student_name, employee_name, hostel_name, hostel_reg_date, check_out_date)
   VALUES('$user_type', '$hostel_type', '$class', '$division', '$student_name', '$employee_name', '$hostel_name', '$hostel_reg_date', '$check_out_date')");
   
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
<select class="form-control" name="user_type"> 
<option>NA</option>
<option value="student">Student</option>
<option value="employee">Employee</option>

</select>
</div>
 <div class="col-md-2">
                        <label>Hostel Type:</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="hostel_type" >
                          <option value="Nones">None</option>
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
                        <select class="form-control dropdown" name="class" >
                        <option value="None">None</option>
                             <option value="#">2nd</option>
                             <option value="#">3rd</option>
                        </select>
                       </div>
                       <div class="col-md-2">
                            <label>Division :</label>
                        </div>
                        <div class="col-md-4">
                        <select class="form-control dropdown" name="division">
                              <option value="#">None</option>
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
                           <input type="text" name="student_name" class="form-control" placeholder="Enter Full Name">
                         
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
                                        <input type="text" name="employee_name" class="form-control" placeholder="Enter Full Name">       
                                      </div>
                                </div>
                                </div>
                                                    
<!-- END EMPLOYEE TOGGLE CODE-->

        <div class="form-group row">
                          <div class="col-md-2">
                              
                      
                              <label>Hostel Name:</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="hostel_name">
                          <option value="None">None</option>
                             <option value="AUTO">Employee</option>
                             <option value="BUS">BUS</option>
                               
                          </select>
                         
                        </div>
                        <div class="col-md-2">
                        <label>Hostel Room:</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="hostel_room">
                          <option value="None">None</option>
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
                           <input type="Date" name="hostel_reg_date" class="form-control" placeholder="Enter Admission Date">
                         
                        </div>
                            
             
                       
                          <div class="col-md-2">
                              <label>Check Out Date:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="Date" name="check_out_date" class="form-control" placeholder="Enter Admission Date">
                         
                        </div>
                        </div>
             
                      
      <div class="row">
          <div class="col-md-12" align="center" style="margin-bottom: 10px;">
               <button type="submit" name="submit" class="btn btn-primary" style="width:150px">
               <i class="fa fa-save">&nbsp;</i>Submit</button>
               &nbsp;&nbsp;&nbsp;&nbsp;
           </div>
          </div>

          </form>
          </div></div>
          <div class="card mb-3">
        <div class="card-body">
          <h5>ASSIGNMENT LIST</h5>
          
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  
                  <th>user_type</th>
                  <th>hostel_type</th>
                  <th>class</th>
                  <th>division</th>
                  <th>Start_Date</th>
                  <th>End_Date</th>
                  <th>File</th>
               
                 
                  <th>Action</th>
                   
                </tr>
              </thead>
             

          <tbody>
  <?php 
        $sql=mysqli_query($con,"SELECT * FROM  hostel_reg ORDER BY id desc");
                 while($row=mysqli_fetch_array($sql))
                 {     
                   
      
    ?>  

                <tr>
                  <td><?php echo $row['user_type']; ?></td>
                  <td><?php echo $row['hostel_type']; ?></td>
                  <td><?php echo $row['class']; ?></td>
                  <td><?php echo $row['division']; ?></td>
                  <td><?php echo $row['student_name']; ?></td>
                  <td><?php echo $row['employee_name']; ?></td>
                  <td><?php echo $row['hostel_name']; ?></td>
                  
                  
                  
                  <td><a href="edit_hostel_registration.php?edit=<?php echo $row["id"]; ?>"
              class="fa fa-edit edit"><u></u></a>&nbsp;&nbsp;

              <a href="hostel_registration.php?delete=<?php echo $row["id"]; ?>"  onclick="return confirm('Are You Sure for delete')" class="fa fa-trash-o del"><u></u></a>&nbsp;
                </tr>

<?php } ?>
               
              </tbody>

            </table>
          </div>

        
  <!-- <form action="excel/student_excel.php">
<input type="submit" name="export" value="Excel" class="btn btn-success" >
 </form>
 <form action="pdf/student_pdf.php">
<input type="submit" name="export" value="pdf" class="btn btn-success" >
 </form> -->
        </div><!--close card-body-->
      </div>
    </div>
  </div><!-- /col-md-3-->
</div><!-- wrapper class close-->           
             
                       

    
            
<br>


      
                 

        </div><!--close card-body-->
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