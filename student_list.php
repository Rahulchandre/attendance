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
        $id=$_GET['delete'];
        $sql=mysqli_query($con,"DELETE FROM student WHERE id='$id'");
   }    

?>


<!-- table start -->

  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="card mb-3">
        <div class="card-body">
          <h5>STUDENT LIST</h5><hr>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Reg No</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Gender</th>
                  <th>Class</th>
                  <th>Division</th>
                   <th>Action</th>
                </tr>
              </thead>


          <tbody>
  <?php 
        $sql=mysqli_query($con,"SELECT * FROM  student ORDER BY id desc");
                 while($row=mysqli_fetch_array($sql))
                 {   
                   $class_name= $row['class_id'];  
                   $division_name=$row['division_id'];
                   $sql1=mysqli_query($con,"SELECT * FROM  class where id = $class_name");
                   $sql2=mysqli_query($con,"SELECT * FROM  division where id = $division_name");
                   $row1=mysqli_fetch_array($sql1);
                   $row2=mysqli_fetch_array($sql2);

    ?>  

                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['first_name']; ?></td>
                  <td><?php echo $row['last_name']; ?></td>
                  <td><?php echo $row['gender']; ?></td>
                  <td><?php echo $row1['class']; ?></td>
                  <td><?php echo $row2['division']; ?></td>
                 <td><a href="edit_student.php?edit=<?php echo $row["id"]; ?>"
              class="fa fa-edit edit"><u></u></a>&nbsp;&nbsp;

              <a href="student_list.php?delete=<?php echo $row["id"]; ?>"  onclick="return confirm('Are You Sure for delete')" class="fa fa-trash-o del"><u></u></a></td>
                </tr>

<?php } ?>
               
              </tbody>

            </table>
          </div>
  <!-- <form action="excel/student_excel.php">
<input type="submit" name="export" value="Excel" class="btn btn-success" >
 </form><br>
 <form action="pdf/pdf_excel.php">
<input type="submit" name="export" value="pdf" class="btn btn-success" >
 </form> -->
        </div><!--close card-body-->
      </div>
    </div>
  </div><!-- /col-md-3-->
</div><!-- wrapper class close-->
