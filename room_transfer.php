
<!-- Connection code start -->
<?php
include('header.php');
include('sidebar.php');
include('footer.php');
include('db.php');
 ?>


<!-- insert record start -->
<?php
include('db.php');

if (isset($_GET['delete']))
	{
			 $id=$_GET['delete'];
			 $sql=mysqli_query($con,"DELETE FROM hostel_room_transfer WHERE id='$id'");
			 if($sql)
			 {
			echo "<script>alert('  Record Delete successfully........!');
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
     
      
       
        
        
 $query=mysqli_query($con,"INSERT INTO hostel_room_transfer(user_type,student_name, emplyee_name, hostel_type, hostel_name, hostel_room)
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
<select class="form-control" name="user_type"> 
<option>NA</option>
<option value="student">Student</option>
<option value="employee">Employee</option>

</select>
</div>
<div class="col-md-2">
    <label>Select:</label>
</div>
<div class="col-md-4">
<select class="form-control" name="select"> 
<option>NA</option>
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
                                        <input type="text" name="emplyee_name" class="form-control" placeholder="Enter Full Name">       
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
                          <select class="form-control dropdown" name="hostel_type">
                                <option value="#">NA</option>
                                <option value="#">English</option>
                                <option value="#">Marathi</option>
                                <option value="#">Semi</option>
                              
                          </select>
                         
                        </div>
                      
                         <div class="col-md-2">
                              <label>Hostel Name :</label>
                          </div>
                          <div class="col-md-2">
                          <select class="form-control dropdown" name="hostel_name">
                                <option value="#">NA</option>
                                <option value="#">English</option>
                                <option value="#">Marathi</option>
                                <option value="#">Semi</option>
                              
                          </select>
                         
                        </div>
                        <div class="col-md-2">
                              <label>Hostel Room :</label>
                          </div>
                          <div class="col-md-2">
                          <select class="form-control dropdown" name="hostel_room">
                                <option value="#">NA</option>
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
                                        <input type="text" name="student_name" class="form-control" placeholder="Enter Full Name">       
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
        </div><div class="card mb-3">
        <div class="card-body">
          <h5>HOSTEL ROOM TRANSFER</h5>
          
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  
                  <th>user_type</th>
                  <th>student_name</th>
                  <th>emplyee_name</th>
                  <th>hostel_type</th>
                  <th>hostel_name</th>
                  <th>hostel_room</th>
               
               
                 
                  <th>Action</th>
                   
                </tr>
              </thead>
             

          <tbody>
  <?php 
        $sql=mysqli_query($con,"SELECT * FROM  hostel_room_transfer ORDER BY id desc");
                 while($row=mysqli_fetch_array($sql))
                 {     
                   
      
    ?>  

                <tr>
                  <td><?php echo $row['user_type']; ?></td>
                  <td><?php echo $row['student_name']; ?></td>
                  <td><?php echo $row['emplyee_name']; ?></td>
                  <td><?php echo $row['hostel_type']; ?></td>
                  <td><?php echo $row['hostel_name']; ?></td>
                  <td><?php echo $row['hostel_room']; ?></td>
                  
                  
                  
                  
                  <td><a href="edit_room_transfer.php?edit=<?php echo $row["id"]; ?>"
              class="fa fa-edit edit"><u></u></a>&nbsp;&nbsp;

              <a href="room_transfer.php?delete=<?php echo $row["id"]; ?>"  onclick="return confirm('Are You Sure for delete')" class="fa fa-trash-o del"><u></u></a>&nbsp;
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