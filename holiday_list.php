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
        $sql=mysqli_query($con,"DELETE FROM holiday WHERE id='$id'");
   }    

?>


<!-- table start -->

<div class="content-wrapper">
    <div class="container-fluid">
       <div class="card mb-3">
        <div class="card-body">
          <h5>STAFF LIST</h5><hr>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Holiday Name</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Note</th> 
                  <th>Action</th>                  
                </tr>
              </thead>
          <tbody>
  <?php 
        $sql=mysqli_query($con,"SELECT * FROM holiday ORDER BY id desc");
                 while($row=mysqli_fetch_array($sql))
                 {                                  
    ?>  

                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['holiday_name']; ?></td>
                  <td><?php echo $row['start_date']; ?></td>
                  <td><?php echo $row['end_date']; ?></td>
                  <td><?php echo $row['note']; ?></td>

                 <td><a href="edit_holiday.php?edit=<?php echo $row["id"]; ?>"
              class="fa fa-edit edit"><u></u></a>&nbsp;&nbsp;

              <a href="holiday_list.php?delete=<?php echo $row["id"]; ?>"  onclick="return confirm('Are You Sure for delete')" class="fa fa-trash-o del"><u></u></a></td>
                </tr>

<?php } ?>
               
              </tbody>

            </table>
          </div>



        </div><!--close card-body-->
      </div>
    </div>
  </div><!-- /col-md-3-->
</div><!-- wrapper class close-->