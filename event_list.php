
<!-- Connection code start -->
<?php
include('header.php');
include('sidebar.php');
include('footer.php');
include('db.php');
 ?>

<?php

if (isset($_GET['edit']))
 {
    $event_id = $_GET['edit'];

    $query = mysqli_query($con,"SELECT * FROM event WHERE event_id='$event_id'") or die(mysqli_error($con));
    if (count($query) == 1 )
     {
      if ($n = mysqli_fetch_array($query)) 
      {
       
      $event_type=$n['event_type'];
      $event_name=$n['event_name'];
      $start_date=$n['start_date'];
      $end_date=$n['end_date'];
       $event_name=$n['start_time'];
      $start_date=$n['end_time'];
      $end_date=$n['place'];
     }

    }
  }

?>




<!-- delete  start -->
<?php

 if (isset($_GET['delete']))
   {
        $event_id=$_GET['delete'];
        $sql=mysqli_query($con,"DELETE FROM event WHERE event_id='$event_id'");
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
                  <th>Event Type</th>
                  <th>Event Name</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Start Time</th>
                  <th>End Time</th>
                   <th>Place</th>
                   <th>Action</th>
                </tr>
              </thead>
              <!-- <tfoot>
                <tr>
                  <th colspan="6">Grand Total</th>
                 <th></th>
                </tr>
              </tfoot> -->

            <!-- TD START-->



                   
 
              <tbody>

                  <?php 
        $sql=mysqli_query($con,"SELECT * FROM  event ORDER BY event_id desc");
                 while($row=mysqli_fetch_array($sql))
                 {                                  
                  ?>   
                <tr>
                  <td><?php echo $row['event_type']; ?></td>
                  <td><?php echo $row['event_name']; ?></td>
                  <td><?php echo $row['start_date']; ?></td>
                  <td><?php echo $row['end_date']; ?></td>
                  <td><?php echo $row['start_time']; ?></td>
                  <td><?php echo $row['end_time']; ?></td>
                  <td><?php echo $row['place']; ?></td>
                 <td><a href="edit_event.php?edit=<?php echo $row["event_id"]; ?>"
              class="fa fa-edit edit"><u></u></a>&nbsp;&nbsp;

              <a href="event_list.php?delete=<?php echo $row["event_id"]; ?>"  onclick="return confirm('Are You Sure for delete')" class="fa fa-trash-o del"><u></u></a></td>
                </tr>
<?php } ?>

               
              </tbody>

            </table>
            <form action="excel/event_excel.php">
<input type="submit" name="export" value="Excel" class="btn btn-success" >
 </form><br>
 <form action="pdf/event_pdf.php">
<input type="submit" name="export" value="pdf" class="btn btn-success" >
 </form>
          </div>
        </div><!--close card-body-->
      </div>
    </div>
  </div><!-- /col-md-3-->
</div><!-- wrapper class close-->