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
$id = $_GET['edit'];

$query = mysqli_query($con,"SELECT * FROM add_hostel_room WHERE id='$id'") or die(mysqli_error($query));

if ($row = mysqli_fetch_array($query)) 
{

$hostel_type=$row['hostel_type'];
$hostel_name=$row['hostel_name'];
$floor_name=$row['floor_name'];

$room_no=$row['room_no'];
$no_of_bed=$row['no_of_bed'];


}

}

if (isset($_POST['update']))
  {
$hostel_type=$_POST['hostel_type'];
$hostel_name=$_POST['hostel_name'];
$floor_name=$_POST['floor_name'];
$room_no=$_POST['room_no'];
$no_of_bed=$_POST['no_of_bed'];


$id=$_GET['edit'];
        
      
      $query=mysqli_query($con,"UPDATE add_hostel_room SET
       hostel_type = '$hostel_type', hostel_name='$hostel_name',
       floor_name='$floor_name',  room_no = '$room_no', no_of_bed='$no_of_bed' WHERE id ='$id'");
          if($query)
          {
          echo "<script>alert('  Holiday Updated successfully........!');
          window.location='add_hostel_room.php';
          </script>";
          
          }
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
                <i class="fa fa-table"></i> &nbsp;<b>Edit Hostel Room</b></div>
                <div class="card-body">
  <form action="" method="post" enctype="multipart/form-data">

                      
                      
                      
                      <div class="form-group row">
                      <div class="col-md-2">
                              <label>Hostel Type:</label>
                          </div>
                          <div class="col-md-10">
                          <select class="form-control dropdown" value="<?php echo $hostel_type;?>"  name="hostel_type">
                             <option value="<?php echo $hostel_type;?>"><?php echo $hostel_type;?></option>
                               
                          </select>
                         
                        </div>
                      </div>
                      


                          <div class="form-group row">
                          <div class="col-md-2">
                              <label>Hostel Name:</label>
                          </div>
                          <div class="col-md-10">
                           <input type="text" name="hostel_name"  value="<?php echo $hostel_name;?>"  class="form-control" placeholder="Enter Full Name">
                         
                        </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-md-2">
                              <label>Floor Name:</label>
                          </div>
                          <div class="col-md-10">
                           <input type="text" name="floor_name" value="<?php echo $floor_name;?>"   class="form-control" placeholder="Enter Floor Name">
                         
                        </div>
                      </div>




                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Room No:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text"  name="room_no" class="form-control" value="<?php echo $room_no;?>"  placeholder="Enter Room No">
                         
                        </div>
                        <div class="col-md-2">
                              <label>No Of Bed:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text"  name="no_of_bed" class="form-control" value="<?php echo $no_of_bed;?>"  placeholder="Enter No Bed">
                         
                        </div>
                      </div>
                     




            <div class="row">
              <div class="col-md-12" align="center">
               <button type="submit" name="update" class="btn btn-primary" style="width:150px"><i class="fa fa-save">&nbsp;</i>Update</button>&nbsp;&nbsp;&nbsp;&nbsp;
            

              </div>
            </div>
    
            
</form>
</div>
</div>
      
                 

        </div><!--close card-body-->
        </div>
      </div><!-- /col-md-3-->
      </div><!-- wrapper class close-->