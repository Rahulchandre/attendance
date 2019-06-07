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
$e_id = $_GET['edit'];

$query = mysqli_query($con,"SELECT s.*, c.class FROM student_enquiry s, class c WHERE c.id = s.class_id and e_id='$e_id'") or die(mysqli_error($query));

if ($row = mysqli_fetch_array($query)) 
{

$first_name=$row['first_name'];
$middle_name=$row['middle_name'];
$last_name=$row['last_name'];
$address=$row['address'];
$contact_no=$row['contact_no'];
$parent_no=$row['parent_no'];
$class=$row['class'];
$class_id=$row['class_id'];
$email=$row['email'];
$dob=$row['dob'];
$gender=$row['gender'];


}


}

if (isset($_POST['update']))
  {
    $first_name=$_POST['first_name'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];
$address=$_POST['address'];
$contact_no=$_POST['contact_no'];
$parent_no=$_POST['parent_no'];
$class=$_POST['class'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$gender=$_POST['gender']; 
      

        $e_id=$_GET['edit'];
        
      
$query=mysqli_query($con,"UPDATE student_enquiry SET first_name = '$first_name',  class_id ='$class', middle_name='$middle_name', last_name='$last_name',  address = '$address', contact_no='$contact_no', parent_no='$parent_no', email='$email',  dob='$dob', gender='$gender' WHERE e_id ='$e_id'");
if($query)
{
echo "<script>alert('  Student Enquiry Updated successfully........!');
window.location='student_enquiry.php';
</script>";

}
}

?>


<!-- form code start -->
<div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"> </div>
            <div class="col-md-10">
            <div class="card mb-1">
              <div class="card-header">
                <i class="fa fa-table"></i> &nbsp;Student Enquiry</div>
                <div class="card-body">
  <form action="" method="post" enctype="multipart/form-data">

                      
                      
                      
                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>First Name :</label>
                          </div>
                          <div class="col-md-4">
                          <input type="text" class="form-control"  value="<?php echo $first_name;?>"  name="first_name" placeholder="Enter Full Name">
                         
                        </div>
                     



                          <div class="col-md-2">
                              <label>Last Name :</label>
                          </div>
                          <div class="col-md-4">
                            <input type="text" class="form-control" value="<?php echo $last_name;?>"  name="last_name" placeholder="Enter Full Name">
                         
                        </div>
                      </div>


                          <div class="form-group row">
                          <div class="col-md-2">
                              <label>Middle Name :</label>
                          </div>
                          <div class="col-md-4">
                          <input type="text" class="form-control" value="<?php echo $middle_name;?>"  name="middle_name" placeholder="Enter Full Name">                         
                        </div>
                       
                     



                        

                          <div class="col-md-2">
                              <label>Contact No :</label>
                          </div>
                          <div class="col-md-4">
                          <input type="text" name="contact_no" class="form-control" value="<?php echo $contact_no;?>" placeholder="Enter Mobile No">
                         
                        </div>
                        
                 </div>


                      
                 <div class="form-group row">
                          <div class="col-md-2">
                              <label>Parent No:</label>
                          </div>
                          <div class="col-md-4">
                          <input type="text" name="parent_no" class="form-control" value="<?php echo $parent_no;?>" placeholder="Enter Mobile No">
                         
                        </div>
                     
                          <div class="col-md-2">
                              <label>Date of Birth :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="Date" name="dob"  value="<?php echo $dob;?>" class="form-control" placeholder="Enter email">
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
                                    $sql= mysqli_query($con,"SELECT id, class FROM class");
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
                <label>Gender : 
                </label>
                </div>
                <div class="col-md-4">
                <label class="radio-inline radio-left" style="margin-left: unset;">
                <input type="radio"  name="gender"  value="Male"  id="optionsRadiosInline1" value="male" <?php if($gender=="Male"){echo "checked";}?> >&nbsp;Male&nbsp;&nbsp;
                </label>
                <label class="radio-inline">
                <input type="radio" name="gender"  value="Female" id="optionsRadiosInline2" value="female"   <?php if($gender=="Female"){echo "checked";}?> >&nbsp;Female&nbsp;&nbsp;                </label>
              </div>
                      </div>

                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Address :</label>
                          </div>
                          <div class="col-md-10">
                          <input type="text" name=" address" value="<?php echo $address;?>" class="form-control" placeholder="Enter Address">
                         
                        </div>
                      </div>
                  

                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Email :</label>
                          </div>
                          <div class="col-md-10">
                          <input type="text" name="email" class="form-control" value="<?php echo $email;?>" placeholder="Enter Email">
                         
                        </div>
                      </div>



                     
                      

                      <div class="row">
              <div class="col-md-12" align="center">
               <button type="submit" name="update" class="btn btn-primary" ><i class="fa fa-save">&nbsp;</i>Update</button>
              </div>
            </div>
</div>
      
                 

        </div><!--close card-body-->
        </div>
      </div><!-- /col-md-3-->
      </div><!-- wrapper class close-->






