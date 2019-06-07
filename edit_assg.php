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
$as_id = $_GET['edit'];

$query = mysqli_query($con, "SELECT a.*, c.class, d.division FROM assignment a, class c, division d WHERE c.id=a.class_id and d.id=a.division_id and  as_id='$as_id'") or die(mysqli_error($query));
if ($n = mysqli_fetch_array($query)) 
{

$class=$n['class'];
$class_id=$n['class_id'];
$division=$n['division'];
$division_id=$n['division_id'];
$subject=$n['subject'];

$sub_teacher=$n['sub_teacher'];
$start_date=$n['start_date'];
$end_date=$n['end_date'];
$file=$n['file'];
$description=$n['description'];

}


}

if (isset($_POST['update']))
{
$class=$_POST['class'];
$division=$_POST['division'];
$subject=$_POST['subject'];

$sub_teacher=$_POST['sub_teacher'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
// $file=$_POST['file'];
$description=$_POST['description'];



$as_id=$_GET['edit'];


$query=mysqli_query($con,"UPDATE assignment SET class_id = '$class', division_id = '$division', subject = '$subject',
sub_teacher = '$sub_teacher', start_date = '$start_date', end_date = '$end_date', 
file = '$file', description = '$description' 
WHERE as_id ='$as_id'");
  if($query)
  {
  echo "<script>alert('  Stationary Updated successfully........!');
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
                          <option value="<?php echo $class_id;?>"><?php echo $class;?></option>
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
                          <option value="<?php echo $division_id;?>"><?php echo $division;?></option>
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
                          <select class="form-control dropdown" name="subject"  value="<?php echo $subject;?>">
                                <option value="<?php echo $subject;?>"><?php echo $subject;?></option>
                                <option value="Teaching">Teaching</option>
                                <option value="Non-Teaching">Non-Teaching</option>
                          </select>
                       </div>
                     
                          <div class="col-md-2">
                              <label>Subject Teacher :</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="sub_teacher"  value="<?php echo $sub_teacher;?>">
                                <option value="<?php echo $sub_teacher;?>"><?php echo $sub_teacher;?></option>
                                <option value="Teaching">Teaching</option>
                                <option value="Non-Teaching">Non-Teaching</option>
                          </select>
                       </div>
                      </div>


                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Start Date :</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="start_date"  value="<?php echo $start_date;?>">
                                <option value="<?php echo $start_date;?>"><?php echo $start_date;?></option>
                                <option value="Teaching">Teaching</option>
                                <option value="Non-Teaching">Non-Teaching</option>
                          </select>
                        </div>
                     
                          <div class="col-md-2">
                              <label>End Date :</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="end_date"  value="<?php echo $end_date;?>">
                                <option value="<?php echo $end_date;?>"><?php echo $end_date;?></option>
                                <option value="Teaching">Teaching</option>
                                <option value="Non-Teaching2">Non-Teaching</option>
                          </select>
                         
                        </div>
                      </div>


                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Choose File:</label>
                          </div>
                          <div class="col-md-10">
                          <input type="file" name="file" value="<?php echo $file;?>" class="form-control" placeholder="Enter Start Time">
                         
                        </div>
                      </div>

                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Description:</label>
                          </div>
                          <div class="col-md-10">
                           <textarea type="text"  value="" name="description" class="form-control" placeholder="Enter Specification"><?php echo $description;?>
                         </textarea>
                        </div>
                      </div>

  
              
            <div class="row">
              <div class="col-md-12" align="center">
               <button type="update" name="update" class="btn btn-primary" style="width=120px" ><i class="fa fa-save">&nbsp;</i>Update</button>&nbsp;&nbsp;&nbsp;&nbsp;
               
              </div>
            </div>


</form>
</div>
</div>
      
                 

        </div><!--close card-body-->
        </div>
      </div><!-- /col-md-3-->
      </div><!-- wrapper class close-->pper class close-->