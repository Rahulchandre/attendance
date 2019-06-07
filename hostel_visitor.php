
<!-- Connection code start -->
<?php
include('header.php');
include('sidebar.php');
include('footer.php');
include('db.php');
 ?>


<!-- insert record start -->

<?php



  if(isset($_POST["submit"]))
    {
       
        $user_type=$_POST["user_type"];
        $visitor_name=$_POST["visitor_name"];
        $relation_name=$_POST["relation_name"];
        $student_name=$_POST["student_name"];
        $employee_name=$_POST["employee_name"];
        $date=$_POST["date"];
        $time=$_POST["time"];
       
        
        
 $query=mysqli_query($con,"INSERT INTO hostel_visitors(user_type, visitor_name, relation_name, student_name, employee_name, date, time )
   VALUES('$user_type', '$visitor_name', '$relation_name', '$student_name', '$employee_name', '$date', '$time')");
   
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
<select class="form-control" name="user_type"> 
<option>NA</option>
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
                           <input type="text"  name="visitor_name" class="form-control" placeholder="Enter Full Name">
                         
                         </div>


<div class="col-md-2">
                      <label>Relation Name :</label>
                      </div>
                      <div class="col-md-4">
                           <input type="text"  name="relation_name" class="form-control" placeholder="Enter Full Name">
                         
                         </div>
</div>


<div class="student box">
    <div class="form-group row" > 
                      <div class="col-md-2">
                      <label>Student Name :</label>
                      </div>
                      <div class="col-md-10">
                           <input type="text" name="student_name" class="form-control" placeholder="Enter Full Name">
                         
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
</div>

                    <div class="form-group row">
                    <div class="col-md-2">
                              <label>Date:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="date"  name="date" class="form-control">
                         
                        </div>
                       
                        <div class="col-md-2">
                              <label> Time :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="time" name="time" class="form-control" placeholder="Enter Start Time">
                         
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
</div>
</div>

            


<div class="card mb-3">
        <div class="card-body">
          <h5>ASSIGNMENT LIST</h5>
          
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  
                  <th>user_type</th>
                  <th>visitor_name</th>
                  <th>relation_name</th>
                  <th>student_name</th>
                  <th>employee_name</th>
                  <th>date</th>
                  <th>time</th>
               
                 
                  <th>Action</th>
                   
                </tr>
              </thead>
             

          <tbody>
  <?php 
        $sql=mysqli_query($con,"SELECT * FROM  hostel_visitors ORDER BY id desc");
                 while($row=mysqli_fetch_array($sql))
                 {     
                   
      
    ?>  

                <tr>
                  <td><?php echo $row['user_type']; ?></td>
                  <td><?php echo $row['visitor_name']; ?></td>
                  <td><?php echo $row['relation_name']; ?></td>
                  <td><?php echo $row['student_name']; ?></td>
                  <td><?php echo $row['employee_name']; ?></td>
                  <td><?php echo $row['date']; ?></td>
                  <td><?php echo $row['time']; ?></td>
                  
                  
                  
                  <td><a href="edit_hostel_visitors.php?edit=<?php echo $row["id"]; ?>"
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