
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
        $hostel_type=$_POST["hostel_type"];
        $hostel_name=$_POST["hostel_name"];
        $floor_name=$_POST["floor_name"];
        $room_no=$_POST["room_no"];
        $no_of_bed=$_POST["no_of_bed"];
     
        
        
 $query=mysqli_query($con,"INSERT INTO add_hostel_room( hostel_type, hostel_name, floor_name, room_no, no_of_bed)
   VALUES('$hostel_type', '$hostel_name', '$floor_name', '$room_no', '$no_of_bed')");
   
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
                <i class="fa fa-table"></i> &nbsp;ADD HOSTEL ROOM</div>
                <div class="card-body">

  <form action="" method="post" enctype="multipart/form-data">

                      
                      
                      
                      <div class="form-group row">
                      <div class="col-md-2">
                              <label>Hostel Type:</label>
                          </div>
                          <div class="col-md-10">
                          <select class="form-control dropdown" name="hostel_type">
                             <option value="0">NA</option>
                               
                          </select>
                         
                        </div>
                      </div>
                      


                          <div class="form-group row">
                          <div class="col-md-2">
                              <label>Hostel Name:</label>
                          </div>
                          <div class="col-md-10">
                           <input type="text" name="hostel_name"  class="form-control" placeholder="Enter Full Name">
                         
                        </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-md-2">
                              <label>Floor Name:</label>
                          </div>
                          <div class="col-md-10">
                           <input type="text" name="floor_name"  class="form-control" placeholder="Enter Floor Name">
                         
                        </div>
                      </div>




                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Room No:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text"  name="room_no" class="form-control" placeholder="Enter Room No">
                         
                        </div>
                        <div class="col-md-2">
                              <label>No Of Bed:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text"  name="no_of_bed" class="form-control" placeholder="Enter No Bed">
                         
                        </div>
                      </div>
                     




            <div class="row">
              <div class="col-md-12" align="center">
               <button type="submit" name="submit" class="btn btn-primary" style="width:150px"><i class="fa fa-save">&nbsp;</i>Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
            

              </div>
            </div>
    
            
</form>

</div>
</div>
<div class="card mb-3">
<div class="card-body">
          <h5>HOSTEL ROOM LIST</h5><hr>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Hostel_Type</th>
                  <th>Hostel_name</th>
                  <th>Floor_name</th>
                  <th>Room_no</th> 
                  <th>No_of_Bed</th> 
                  <th>Action</th>                  
                </tr>
              </thead>
          <tbody>
  <?php 
        $sql=mysqli_query($con,"SELECT * FROM add_hostel_room ORDER BY id desc");
                 while($row=mysqli_fetch_array($sql))
                 {                                  
    ?>  
 

                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['hostel_type']; ?></td>
                  <td><?php echo $row['hostel_name']; ?></td>
                  <td><?php echo $row['floor_name']; ?></td>
                  <td><?php echo $row['room_no']; ?></td>
                  <td><?php echo $row['no_of_bed']; ?></td>

                 <td><a href="edit_hostel_room.php?edit=<?php echo $row["id"]; ?>"
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






