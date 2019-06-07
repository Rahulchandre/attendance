<!-- Connection code start -->
<?php
include('header.php');
include('sidebar.php');
include('footer.php');
include('db.php');
 ?>
 <script type="text/javascript">

$(function() {
    $("#datepicker1").datepicker({
        dateFormat: "yy-mm-dd"
    }).datepicker("setDate", "0");
});

 </script>

<?php

  if(isset($_POST["submit"]))
    {
        $holiday_name=$_POST["holiday_name"];
        $start_date=$_POST["start_date"];
        $end_date=$_POST["end_date"];
        $note=$_POST["note"];


    $query=mysqli_query($con,"INSERT INTO holiday(holiday_name, start_date, end_date, note)
  VALUES('$holiday_name', '$start_date', '$end_date', '$note')");
   
   if($query)
   {
  echo "<script>alert('  Record Insert successfully........!');
  window.location='holiday.php';
  </script>";
  
  } 

  }
    


?>
<?php

if (isset($_GET['delete']))
  {
       $id=$_GET['delete'];
       $sql=mysqli_query($con,"DELETE FROM holiday WHERE id='$id'");
  }    

?>


<!-- form code start -->
<div class="content-wrapper">
    <div class="container-fluid">
      <div class="row" >
        <div class="col-md-1"> </div>
            <div class="col-md-10">
            <div class="card mb-1">
              <div class="card-header">
                <i class="fa fa-table"></i> &nbsp;<b>HOLIDAY FORM</b></div>
                <div class="card-body">
  <form action="" method="post">
   <div class="form-group row">
                          <div class="col-md-2">
                              <label>Holiday Name :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text"  name="holiday_name" class="form-control" placeholder="Enter Holiday Name">
                         
                        </div>
                        <div class="col-md-2">
                              <label>Note :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="note" class="form-control" placeholder="Enter Note">
                         
                        </div>
                      </div>



                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Start Date :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="date" name="start_date" class="form-control" placeholder="Start Date">
                         <script>
                         </script>
                        </div>
                


                        
                          <div class="col-md-2">
                              <label>End Date :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="date" name="end_date" class="form-control" placeholder="End Date">
                         
                        </div>
                    </div>


                     
                          
                      

            <div class="row">
              <div class="col-md-12" align="center">
               <button type="submit" name="submit" class="btn btn-primary" style="width:150px" ><i class="fa fa-save">&nbsp;</i>Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
              </div>
            </div>


</form>
</div>
</div>
<br><br>
<div class="card mb-3">
<div class="card-body">
          <h5>HOLIDAY LIST</h5><hr>
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

              <a href="holiday.php?delete=<?php echo $row["id"]; ?>"  onclick="return confirm('Are You Sure for delete')" class="fa fa-trash-o del"><u></u></a></td>
                </tr>

<?php } ?>
               
              </tbody>

            </table>
          </div>



        </div><!--close card-body-->
        </div>
      </div><!-- /col-md-3-->
      </div><!-- wrapper class close-->