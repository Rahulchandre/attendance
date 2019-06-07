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
        $l_id=$_GET['delete'];
        $sql=mysqli_query($con,"DELETE FROM leaves WHERE l_id='$l_id'");
   }    

?>


<!-- table start -->

  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="card mb-3">
        <div class="card-body">
          <h5>Leave List</h5><hr>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>L No</th>
                  <th>leave from</th>
                  <th>leave to</th>
                  <th>class</th>
                  <th>division</th>
                  <th>Full Name</th>
                  <th>Discription</th>
                   <th>Action</th>
                </tr>
              </thead>
              

            <!-- TD START-->

              <tbody>


                
   <?php 
        $sql=mysqli_query($con,"SELECT * FROM  leaves ORDER BY l_id desc");
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
                  <td><?php echo $row['l_id']; ?></td>
                  <td><?php echo $row['leave_form']; ?></td>
                  <td><?php echo $row['leave_to']; ?></td>
                  <td><?php echo $row1['class']; ?></td>
                  <td><?php echo $row2['division']; ?></td>
                  <td><?php echo $row['full_name']; ?></td>
                  <td><?php echo $row['description']; ?></td>
                 <td><a href="edit_leave.php?edit=<?php echo $row["l_id"]; ?>"
              class="fa fa-edit edit"><u></u></a>&nbsp;&nbsp;

              <a href="leave_list.php?delete=<?php echo $row["l_id"]; ?>"  onclick="return confirm('Are You Sure for delete')" class="fa fa-trash-o del"><u></u></a></td>
                </tr>

<?php } ?>
               
              </tbody>

            </table>
                    <form action="excel/staff_excel.php">
<input type="submit" name="export" value="Excel" class="btn btn-success" >
 </form>
 <form action="pdf/staff_pdf.php">
<input type="submit" name="export" value="pdf" class="btn btn-success" >
 </form>
          </div>
        </div><!--close card-body-->
      </div>
    </div>
  </div><!-- /col-md-3-->
</div><!-- wrapper class close-->




<script type="text/javascript">

	
		
$(document).ready(function(){

//Apply the datatables plugin to your table
$('#myTable').DataTable(
{
"scrollY": 100,
"scrollX":true

});

});

</script>