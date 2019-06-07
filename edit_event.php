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

$query = mysqli_query($con, "SELECT event_id, event_type, event_name, organizer_name, start_date, end_date, TIME_FORMAT(start_time, '%h:%i %p') as start_time, TIME_FORMAT(end_time, '%h:%i %p') as end_time, place, event_for, descriptions FROM event where event_id='$event_id'") or die(mysqli_error($query));
if ($n = mysqli_fetch_array($query)) 
{

$event_type=$n['event_type'];
$event_name=$n['event_name'];
$organizer_name=$n['organizer_name'];
$start_date=$n['start_date'];
$end_date=$n['end_date'];
$start_time=$n['start_time'];
$end_time=$n['end_time'];
$place=$n['place'];
$event_for=$n['event_for'];
$descriptions=$n['descriptions'];

}


}

if (isset($_POST['update']))
{
$event_type=$_POST['event_type'];
$event_name=$_POST['event_name'];
$organizer_name=$_POST['organizer_name'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
$start_time=$_POST['start_time'];
$end_time=$_POST['end_time'];
$place=$_POST['place'];
$event_for=$_POST['event_for'];
$descriptions=$_POST['descriptions'];



$event_id=$_GET['edit'];


$query=mysqli_query($con,"UPDATE event SET event_type = '$event_type', organizer_name = '$organizer_name', event_name = '$event_name',
start_date = '$start_date', end_date = '$end_date', start_time = '$start_time', 
end_time = '$end_time', place = '$place', event_for = '$event_for', descriptions = '$descriptions' 
WHERE event_id ='$event_id'");
if($query)
{
        echo "<script>alert('  Record Updated successfully........!');
        window.location='event.php';
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
                <i class="fa fa-table"></i> &nbsp;<b>EDIT EVENT</b></div>
                <div class="card-body">
  <form action="" method="post">
  <div class="form-group row">
                          <div class="col-md-2">
                              <label>Event Type :</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="event_type" value="<?php echo $event_type?>">
                                <option value="<?php echo $event_type?>"><?php echo $event_type?></option>
                                <option value="Cultural">Cultural</option>
                                <option value="Competition">Competition</option>
                          </select>
                         
                        </div>
                     
                          <div class="col-md-2">
                              <label>Event Name :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="event_name" class="form-control" placeholder="Enter Name" value="<?php echo $event_name  ?>">
                         
                        </div>
                      </div>

                        <div class="form-group row">
                          
                          <div class="col-md-2">
                              <label>Start Date :</label>
                              
                          </div>
                          <div class="col-md-4">
                          <input type="date" name="start_date" class="form-control" placeholder="start_date" value="<?php echo $start_date;  ?>">
                           
                          
                        </div>
                      
                        

                      <div class="col-md-2">
                              <label>End Date :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="date" name="end_date" class="form-control" placeholder="End Date" value="<?php echo $end_date;  ?>">
                         
                        </div>
                        </div>
                 


                     <div class="form-group row">
                          <div class="col-md-2">
                              <label>Start Time :</label>
                          </div>
                          <div class="col-md-4">
                          
                           <input type="text" name="start_time" class="form-control" placeholder="Enter Start Time" value="<?php echo $start_time  ?>">
                         
                         
                        </div>
                     

                        <div class="col-md-2">
                              <label>End Time :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="end_time" class="form-control" placeholder="Enter End Time" value="<?php echo $end_time ?>">
                         
                        </div>
                       
                        </div>
                        <div class="form-group row">
                          <div class="col-md-2">
                              <label>Place :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text"  name="place" class="form-control" placeholder="Place of Event" value="<?php echo $place  ?>">
                         
                        </div>
                        <div class="col-md-2">
                              <label>Organizer Name</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="organizer_name" class="form-control" placeholder="Organizer Name" value="<?php echo $organizer_name ?>">
                         
                        </div>
                     
                      </div>

                        <div class="form-group row">
                          <div class="col-md-2">
                              <label>Event For:</label>
                          </div>
                          <div class="col-md-10">
                          <select class="form-control dropdown" name="event_for" value="<?php echo $event_for?>">
                                <option value="<?php echo $event_for?>"><?php echo $event_for?></option>
                                <option value="Sports">Sports</option>
                                <option value="Cultural">Cultural</option>
                                <option value="Seminar">Seminar</option>
                          </select>
                         
                        </div>
                      </div>
                      

                      <div class="form-group row">
<div class="col-md-2">
<label>Description:</label>
</div>
<div class="col-md-10">
<textarea type="text" name="descriptions" value="" class="form-control"   placeholder="Enter Description"><?php echo $descriptions;?></textarea>
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