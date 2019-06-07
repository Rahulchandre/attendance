<!-- Connection code start -->
<?php
include('header.php');
include('sidebar.php');
include('footer.php');
include('db.php');
 ?>
<!-- delete  start -->
<?php

 if (isset($_GET['delete']))
   {
        $e_id=$_GET['delete'];
        $sql=mysqli_query($con,"DELETE FROM student_enquiry WHERE e_id='$e_id'");
   }    

?>


<!-- table start -->

  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="card mb-3">
        <div class="card-body">
          <h5>Student Enquiry List</h5><hr>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Enquiry No</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Last Name</th>
                  <th>Contact No</th>
                  <th>Parent No</th>
                  <th>Class</th>
                  <th>Email</th>
                  <th>Date of Birth</th>
                  <th>Gender</th>
                  <th>Action</th>
                   
                </tr>
              </thead>
             
          <tbody>
  <?php 
        $sql=mysqli_query($con,"SELECT * FROM  student_enquiry ORDER BY e_id desc");
                 while($row=mysqli_fetch_array($sql))
                 {         
                   
                  $class_name= $row['class_id'];  
                  
                  $sql1=mysqli_query($con,"SELECT * FROM  class where id = $class_name");
           
                  $row1=mysqli_fetch_array($sql1);
                                           
    ?>  

                <tr>
                  <td><?php echo $row['e_id']; ?></td>
                  <td><?php echo $row['first_name']; ?></td>
                  <td><?php echo $row['middle_name']; ?></td>
                  <td><?php echo $row['last_name']; ?></td>
                  <td><?php echo $row['contact_no']; ?></td>
                  <td><?php echo $row['parent_no']; ?></td>
                  <td><?php echo $row1['class']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['dob']; ?></td>
                  <td><?php echo $row['gender']; ?></td>
                  
                 <td><a href="edit_s_enquiry.php?edit=<?php echo $row["e_id"]; ?>"
              class="fa fa-edit edit"><u></u></a>&nbsp;&nbsp;

              <a href="student_enquiry_list.php?delete=<?php echo $row["e_id"]; ?>"  onclick="return confirm('Are You Sure for delete')" class="fa fa-trash-o del"><u></u></a></td>
                </tr>

<?php } ?>
               
              </tbody>

            </table>
          </div>

          <!-- <form action="excel/student_excel.php">
<input type="submit" name="export" value="Excel" class="btn btn-success" >
 </form>
  <form action="excel/student_excel.php">
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