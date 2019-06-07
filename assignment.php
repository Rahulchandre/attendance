<!-- Connection code start -->
<?php
include('header.php');
include('sidebar.php');
include('footer.php');
include('db.php');
 ?>

<?php

 if (isset($_GET['delete']))
   {
        $as_id=$_GET['delete'];
        $sql=mysqli_query($con,"DELETE FROM assignment WHERE as_id='$as_id'");
        if($sql)
        {
        echo "<script>alert('  Record Deleted successfully........!');
        window.location='assignment.php';
        </script>";
        
        }
      }    

?>

<?php

  if(isset($_POST["submit"]))
    {
  $target_file = $_FILES["photo"]["name"];
  $tempfile=$_FILES["photo"]["tmp_name"];
  $folder="image/".$target_file;
  //move_uploaded_file($tempfile,$folder);

        $class=$_POST["class"];
        $division=$_POST["division"];
        $subject=$_POST["subject"];
        $sub_teacher=$_POST["sub_teacher"];
        $start_date=$_POST["start_date"];
        
        $end_date=$_POST["end_date"];
        $file=$_POST["photo"];
//$target_dir = "image/";

$uploadOk = 1;
if (move_uploaded_file($_FILES["photo"]["tmp_name"], $folder)) {

} else {
echo "Sorry, there was an error uploading your file.";
}
$photo=$target_file;


        $description=$_POST["description"];



      
        
        
 $query=mysqli_query($con,"INSERT INTO assignment(class_id, division_id, subject, sub_teacher, start_date, end_date, file, description)
   VALUES('$class', '$division', '$subject', '$sub_teacher', '$start_date', '$end_date', '$file', '$description')");
if($query)
{
echo "<script>alert('  Record Insert successfully........!');
window.location='assignment.php';
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
                <i class="fa fa-table"></i> &nbsp;<b>Assignment Form</b></div>
                <div class="card-body">
  <form action="" method="post">
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
                              <label>Subject :</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="subject">
                                <option value="books">NA</option>
                                <option value="English">English</option>
                                <option value="Maths">Maths</option>
                                <option value="Science">Science</option>
                          </select>
                       </div>
                     
                          <div class="col-md-2">
                              <label>Subject Teacher :</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="sub_teacher">
                                <option value="books">NA</option>
                                <option value="Asha">Asha</option>
                                <option value="Pratibha">Pratibha</option>
                                <option value="Priya">Priya</option>
                          </select>
                       </div>
                      </div>


                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Start Date :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="date" name="start_date" class="form-control" placeholder="Enter Mobile No">
                         
                        </div>
                     
                          <div class="col-md-2">
                              <label>End Date :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="date" name="end_date" class="form-control" placeholder="Enter Email">
                         
                        </div>
                      </div>


                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Choose File:</label>
                          </div>
                          <div class="col-md-10">
                           <input type="file" name="photo" accept=".doc, .docx, .jpg, .pdf" class="form-control" >
                         
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
               <button type="submit" name="submit" class="btn btn-primary" style="width=120px" ><i class="fa fa-save">&nbsp;</i>Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
              </div>
            </div>


</form>
</div>
</div>
<br><br>      
<div class="card mb-3">
        <div class="card-body">
          <h5>ASSIGNMENT LIST</h5><hr>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Sr No</th>
                  <th>Class</th>
                  <th>Division</th>
                  <th>Subject</th>
                  <th>Subject_Teacher</th>
                  <th>Start_Date</th>
                  <th>End_Date</th>
                  <th>File</th>
                  <th>Description</th>
                 
                  <th>Action</th>
                   
                </tr>
              </thead>
             

          <tbody>
  <?php 
        $sql=mysqli_query($con,"SELECT * FROM  assignment ORDER BY as_id desc");
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
                  <td><?php echo $row['as_id']; ?></td>
                  <td><?php echo $row1['class']; ?></td>
                  <td><?php echo $row2['division']; ?></td>
                  <td><?php echo $row['subject']; ?></td>
                  <td><?php echo $row['sub_teacher']; ?></td>
                  <td><?php echo $row['start_date']; ?></td>
                  <td><?php echo $row['end_date']; ?></td>
                  <td>
                 <?php echo "<img style='width:50px;height:50px' src='image/".$row['file']."'>"; ?></td>
                  <td><?php echo $row['description']; ?></td>
                  
                  
                  <td><a href="edit_assg.php?edit=<?php echo $row["as_id"]; ?>"
              class="fa fa-edit edit"><u></u></a>&nbsp;&nbsp;

              <a href="assignment.php?delete=<?php echo $row["as_id"];?>"  onclick="return confirm('Are You Sure for delete')" class="fa fa-trash-o del"><u></u></a></td>
                </tr>

<?php } ?>
               
              </tbody>

            </table>
          </div>

        
  <!-- <form action="excel/student_excel.php">
<input type="submit" name="export" value="Excel" class="btn btn-success" >
 </form>
 <form action="pdf/student_pdf.php">
<input type="submit" name="export" value="pdf" class="btn btn-success" >
 </form> -->
        </div><!--close card-body-->
      </div>
    </div>
  </div><!-- /col-md-3-->
</div><!-- wrapper class close-->           
