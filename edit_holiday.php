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

$query = mysqli_query($con,"SELECT * FROM holiday WHERE id='$id'") or die(mysqli_error($query));

if ($row = mysqli_fetch_array($query)) 
{

$holiday_name=$row['holiday_name'];
$start_date=$row['start_date'];
$end_date=$row['end_date'];
$note=$row['note'];


}

}

if (isset($_POST['update']))
  {
$holiday_name=$_POST['holiday_name'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
$note=$_POST['note'];


$id=$_GET['edit'];
        
      
      $query=mysqli_query($con,"UPDATE holiday SET
       holiday_name = '$holiday_name', start_date='$start_date',
       end_date='$end_date',  note = '$note' WHERE id ='$id'");
          if($query)
          {
          echo "<script>alert('  Holiday Updated successfully........!');
          window.location='holiday.php';
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
                <i class="fa fa-table"></i> &nbsp;<b>EDIT HOLIDAY</b></div>
                <div class="card-body">
  <form action="" method="post">
   <div class="form-group row">
                          <div class="col-md-2">
                              <label>Holiday Name :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text"  name="holiday_name" value="<?php echo $holiday_name;?>" class="form-control" placeholder="Enter Holiday Name">
                         
                        </div>
                        <div class="col-md-2">
                              <label>Note :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="note" value="<?php echo $note;?>" class="form-control" placeholder="Enter Note">
                         
                        </div>
                      </div>



                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Start Date :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="date" name="start_date" value="<?php echo $start_date;?>" class="form-control" placeholder="Start Date">
                         
                        </div>
                


                        
                          <div class="col-md-2">
                              <label>End Date :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="date" name="end_date" value="<?php echo $end_date;?>"  class="form-control" placeholder="End Date">
                         
                        </div>
                    </div>


                     
                          
                      

            <div class="row">
              <div class="col-md-12" align="center">
               <button type="submit" name="update" class="btn btn-primary" style="width:150px" ><i class="fa fa-save">&nbsp;</i>Update</button>&nbsp;&nbsp;&nbsp;&nbsp;
                
              </div>
            </div>


</form>
</div>
</div>
      
                 

        </div><!--close card-body-->
        </div>
      </div><!-- /col-md-3-->
      </div><!-- wrapper class close-->