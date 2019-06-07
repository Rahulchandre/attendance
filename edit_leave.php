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
$l_id = $_GET['edit'];



$query = mysqli_query($con,"SELECT l.*, c.class, d.division FROM leaves l, class c, division d WHERE c.id= l.class_id and d.id= l.division_id and l.l_id ='$l_id'") or die(mysqli_error($query));
if ($n = mysqli_fetch_array($query)) 
{

$leave_form=$n['leave_form'];
$leave_to=$n['leave_to'];
$class=$n['class'];
$class_id=$n['class_id'];
// $first_name=$n['first_name'];
// $middle_name=$n['middle_name'];
// $last_name=$n['last_name'];
$division=$n['division'];
$division_id=$n['division_id'];

$description=$n['description'];

}


}

if (isset($_POST['update']))
{
$leave_form=$_POST['leave_form'];
$leave_to=$_POST['leave_to'];
$class=$_POST['class'];

$division=$_POST['division'];
$full_name=$_POST['full_name'];
$description=$_POST['description'];




$l_id=$_GET['edit'];


$query=mysqli_query($con,"UPDATE leaves SET leave_form = '$leave_form', leave_to = '$leave_to', class_id = '$class',
division_id ='$division', full_name = '$full_name', description = '$description' 
WHERE l_id ='$l_id'");
 if($query)
 {
echo "<script>alert('  Leave Updated successfully........!');
window.location='leave.php';
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
                <i class="fa fa-table"></i> &nbsp;<b>ADD LEAVE</b></div>
                <div class="card-body">
  <form action="" method="post">
  
<div class="form-group row">
                          <div class="col-md-2">
                              <label>Leave From :</label>
                          </div>
                          <div class="col-md-4">
                          <input type="text" class="form-control"  value="<?php echo $leave_form;?>"  name="leave_form" placeholder="Enter Full Name">
                         
                        </div>
                      
                          <div class="col-md-2">
                              <label>Leave To :</label>
                          </div>
                          <div class="col-md-4">
                          <input type="text" class="form-control"  value="<?php echo $leave_to;?>"  name="leave_to" placeholder="Enter Full Name">
                         
                        </div>
                      </div>

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
                              <label>Full Name :</label>
                          </div>
                          <div class="col-md-10">
                          <select class="form-control dropdown" name="full_name">
                      

                                <option value="">NA</option>
                                <option value="<?php echo $full_name?>"><?php echo $full_name?></option>
                                <?php
                                    $sql= mysqli_query($con,"SELECT id,first_name,middle_name,last_name FROM student");
                                    while ($row = mysqli_fetch_array($sql))
                                    {
                                        
                                    ?>
                                    <option value="<?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name']; ?>">
                                    <?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name']; ?></option>
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
<textarea type="text" name="description" value="" class="form-control"   placeholder="Enter Description"><?php echo $description;?></textarea>
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