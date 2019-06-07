
<!-- Connection code start -->
<?php
include('header.php');
include('sidebar.php');
include('footer.php');
include('db.php');
 ?>

<?php

   if(isset($_POST["submit"]))
      {
        $event_type=$_POST["event_type"];
        $event_name=$_POST["event_name"];
        $organizer_name=$_POST["organizer_name"];
        $start_date=$_POST["start_date"];
        $end_date=$_POST["end_date"];
        $start_time=$_POST["start_time"];
        $start_time1=$_POST["start_time1"];
        $start=$start_time.$start_time1;
        $end_time=$_POST["end_time"];
        $end_time1=$_POST["end_time1"];
        $end=$end_time.$end_time1;
        $place=$_POST["place"];
        $event_for=$_POST["event_for"];
        $descriptions=$_POST["descriptions"];

//-- INSERT DATA QUERY--//
$query=mysqli_query($con,"INSERT INTO event(event_type,event_name,organizer_name,
  start_date,end_date,start_time,end_time,place,event_for,descriptions)VALUES
  ('$event_type','$event_name','$organizer_name','$start_date','$end_date','$start','$end','$place','$event_for','$descriptions')");
   
if($query)
  {
  echo "<script>alert('  Record Insert successfully........!');
  window.location='event.php';
  </script>";
  
  }
}

?>

<!-- delete  start -->
<?php

 if (isset($_GET['delete']))
   {
        $event_id=$_GET['delete'];
        $query=mysqli_query($con,"DELETE FROM event WHERE event_id='$event_id'");
        if($query)
        {
        echo "<script>alert('  Record Delete successfully........!');
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
                <i class="fa fa-table"></i> &nbsp;<b>EVENT FORM</b></div>
                <div class="card-body">
  <form action="" method="post">
  <div class="form-group row">
                          <div class="col-md-2">
                              <label>Event Type :</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="event_type">
                                <option value="books">NA</option>
                                <option value="Cultural">Cultural</option>
                                <option value="Competition">Competition</option>
                          </select>
                         
                        </div>
                     
                          <div class="col-md-2">
                              <label>Event Name :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="event_name" class="form-control" placeholder="Enter Name">
                         
                        </div>
                      </div>

                        <div class="form-group row">
                          
                          <div class="col-md-2">
                              <label>Start Date :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="date" name="start_date" id="theDate" class="form-control" placeholder="Start Date">
                         
                        </div>
                      
                        

                      <div class="col-md-2">
                              <label>End Date :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="date" name="end_date" class="form-control" placeholder="End Date">
                         
                        </div>
                        </div>
                 


                     <div class="form-group row">
                          <div class="col-md-2">
                              <label>Start Time :</label>
                          </div>
                          <div class="col-md-2">
                          <input type="time"  name="start_time" class="form-control" placeholder="Enter End Time" >
                           </span>
                        </div>
                        <div class="col-md-2">    
                          <select class="form-control dropdown" name="start_time1">
                                <option value="">NA</option>
                                <option value="AM">AM</option>
                                <option value="PM">PM</option>
                          </select>
                         
                        </div>

                        <div class="col-md-2">          
                              <label>End Time :</label>
                          </div>
                          <div class="col-md-2">
                           <input type="time" id="lblTime" name="end_time" class="form-control" placeholder="Enter End Time" >
                         
                        </div>
                        <div class="col-md-2">
                          <select class="form-control dropdown" name="end_time1">
                                <option value="">NA</option>
                                <option value="AM">AM</option>
                                <option value="PM">PM</option>
                          </select>
                         
                        </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-2">
                              <label>Place :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text"  name="place" class="form-control" placeholder="Place of Event">
                         
                        </div>
                        <div class="col-md-2">
                              <label>Organizer Name</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="organizer_name" class="form-control" placeholder="Organizer Name">
                         
                        </div>
                     
                      </div>

                        <div class="form-group row">
                          <div class="col-md-2">
                              <label>Event For:</label>
                          </div>
                          <div class="col-md-10">
                          <select class="form-control dropdown" name="event_for">
                                <option value="books">NA</option>
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
<textarea type="text" name="descriptions" class="form-control" placeholder="Enter Description">
</textarea>
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
<br><br>
      

<div class="card mb-3">
        <div class="card-body">
          <h5>EVENT LIST</h5><hr>
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
              <script>
function myFunction() {
  var x = document.getElementById("myTime").value;
  document.getElementById("demo").innerHTML = x;
}
</script>
                  <?php 
        $sql=mysqli_query($con,"SELECT event_id, event_type, event_name, start_date, end_date,  TIME_FORMAT(start_time, '%h:%i %p') as start_time, TIME_FORMAT(end_time, '%h:%i %p') as end_time, place  FROM  event ORDER BY event_id desc");
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

              <a href="event.php?delete=<?php echo $row["event_id"]; ?>"  onclick="return confirm('Are You Sure for delete')" class="fa fa-trash-o del"><u></u></a></td>
                </tr>
<?php } ?>

               
              </tbody>

            </table>
          <!-- <form action="excel/event_excel.php">
<input type="submit" name="export" value="Excel" class="btn btn-success" >
 </form><br>
 <form action="pdf/event_pdf.php">
<input type="submit" name="export" value="pdf" class="btn btn-success" >
 </form> -->
          </div>
        </div><!--close card-body-->
      </div>
    </div>
  </div><!-- /col-md-3-->
      </div><!-- wrapper class close-->
      <script type="text/javascript">
var date = new Date();

var day = date.getDate();
var month = date.getMonth() + 1;
var year = date.getFullYear();

if (month < 10) month = "0" + month;
if (day < 10) day = "0" + day;

var today = year + "-" + month + "-" + day;


document.getElementById('theDate').value = today;

</script>


