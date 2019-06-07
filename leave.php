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
        $leave_form=$_POST["leave_form"];
        $leave_to=$_POST["leave_to"];
        $class=$_POST["class"];
        $division=$_POST["division"];
         $full_name=$_POST["full_name"];
          $description=$_POST["description"];
           
//-- INSERT DATA QUERY--//
$query=mysqli_query($con,"INSERT INTO leaves(leave_form, leave_to, class_id,
  division_id, full_name, description)VALUES
  ('$leave_form','$leave_to','$class','$division','$full_name','$description')");
  if($query)
  {
 echo "<script>alert('  Record Insert successfully........!');
 
 ..location='leave.php';
 </script>";
 
 } 
}

?>
<?php

if (isset($_GET['delete']))
  {
       $l_id=$_GET['delete'];
       $sql=mysqli_query($con,"DELETE FROM leaves WHERE l_id='$l_id'");
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
                <i class="fa fa-table"></i> &nbsp;<b>ADD LEAVE</b></div>
                <div class="card-body">
  <form action="" method="post">
  
<div class="form-group row">
                          <div class="col-md-2">
                              <label>Leave From :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="date" name="leave_form" class="form-control" placeholder="Start Date">
                         
                        </div>
                      
                          <div class="col-md-2">
                              <label>Leave To :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="date" name="leave_to" class="form-control" placeholder="End Date">
                         
                        </div>
                      </div>

     <div class="form-group row">
                          <div class="col-md-2">
                              <label>Class :</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="class">
                             <option value="0">NA</option>
                               <?php
                                    $sql= mysqli_query($con,"SELECT id,class FROM class");
                                    while ($row = mysqli_fetch_array($sql))
                                    {
                                        
                                    ?>
                                    <option value="<?php echo $row['id']; ?>">
                                    <?php echo $row['class']; ?></option>
                                    <?php
                                        
                                } ?>
                          </select>
                         
                        </div>
                     
                          <div class="col-md-2">
                              <label>Division :</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="division">
                          <option value="0">NA</option>
                  
                              <?php
                                    $sql= mysqli_query($con,"SELECT id,division FROM division");
                                    while ($row = mysqli_fetch_array($sql))
                                    {
                                        
                                    ?>
                                    <option value="<?php echo $row['id']; ?>">
                                    <?php echo $row['division']; ?></option>
                                    <?php       
                                } ?>
                          </select>
                         
                        </div>
                      </div>

                       <div class="form-group row">
                          <div class="col-md-2">
                              <label>Full Name :</label>
                          </div>
                          <div class="col-md-10">
                          <select class="form-control dropdown" name="full_name">
                                <option value="">NA</option>
                                <?php
                                    $sql= mysqli_query($con,"SELECT id,first_name,middle_name,last_name FROM student");
                                    while ($row = mysqli_fetch_array($sql))
                                    {
                                        
                                    ?>
                                    <option value="<?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name']; ?>">
                                    <?php echo $row['first_name']."  ".$row['middle_name']."  ".$row['last_name']; ?></option>
                                    <?php       
                                } ?>
        
                          </select>
                         
                        </div>
                      </div>


                      <div class="form-group row">
<div class="col-md-2">
<label>Description:</label>
</div>
<div class="col-md-10">
<textarea type="text" name="description" class="form-control" placeholder="Enter Description">
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

              <a href="leave.php?delete=<?php echo $row["l_id"]; ?>"  onclick="return confirm('Are You Sure for delete')" class="fa fa-trash-o del"><u></u></a></td>
                </tr>

<?php } ?>
               
              </tbody>

            </table>
                    <!-- <form action="excel/staff_excel.php">
<input type="submit" name="export" value="Excel" class="btn btn-success" >
 </form>
 <form action="pdf/staff_pdf.php">
<input type="submit" name="export" value="pdf" class="btn btn-success" >
 </form> -->
          </div>
        </div><!--close card-body-->
      </div>
    </div>
  </div><!-- /col-md-3-->
      </div><!-- wrapper class close-->