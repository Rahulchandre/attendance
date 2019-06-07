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
$staff_reg_id = $_GET['edit'];

$query = mysqli_query($con,"SELECT * FROM staff_reg WHERE staff_reg_id='$staff_reg_id'") or die(mysqli_error($query));


if ($row = mysqli_fetch_array($query)) 
{

$full_name=$row['full_name'];
$mobile_no=$row['mobile_no'];
$dob=$row['dob'];
$gender=$row['gender'];
$staff_type=$row['staff_type'];
$designation=$row['designation'];
$joining_date=$row['joining_date'];

$specification=$row['specification'];
$qualification=$row['qualification'];
$prev_emp=$row['prev_emp'];
$prev_position=$row['prev_position'];
$prev_salary=$row['prev_salary'];
$address=$row['address'];
$email=$row['email'];

$photo=$row['photo'];
}


}

if (isset($_POST['update']))
  {
    $full_name=$_POST['full_name'];
    $mobile_no=$_POST['mobile_no'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $staff_type=$_POST['staff_type'];
    $designation=$_POST['designation'];
    $joining_date=$_POST['joining_date'];
    
    $specification=$_POST['specification'];
    $qualification=$_POST['qualification'];
    $prev_emp=$_POST['prev_emp'];
    $prev_position=$_POST['prev_position'];
    $prev_salary=$_POST['prev_salary'];
    $address=$_POST['address'];
    $email=$_POST['email'];

    
      

        $staff_reg_id=$_GET['edit'];
        
      
      $query=mysqli_query($con,"UPDATE staff_reg SET
       full_name = '$full_name', mobile_no='$mobile_no',
        dob='$dob', gender='$gender', staff_type='$staff_type', designation='$designation',
        joining_date = '$joining_date', 
        specification = '$specification', qualification = '$qualification', prev_emp = '$prev_emp', 
        prev_position = '$prev_position', prev_salary = '$prev_salary', address = '$address', email='$email', photo='$photo'  WHERE staff_reg_id ='$staff_reg_id'");
        if($query)
        {
        echo "<script>alert(' Staff Updated successfully........!');
        window.location='staff_list.php';
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
                <i class="fa fa-table"></i> &nbsp; EDIT STAFF </div>
                <div class="card-body">
  <form action="" method="post" enctype="multipart/form-data">
  <div class="form-group row">
                          <div class="col-md-2">
                              <label>Full Name :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" class="form-control"  name="full_name" value="<?php echo $full_name;?>" placeholder="Enter Full Name">
                         
                        </div>
                      
                          <div class="col-md-2">
                              <label>Mob No :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="mobile_no"value="<?php echo $mobile_no;?>"  class="form-control" placeholder="Enter Mobile No">
                         
                        </div>
                      </div>
  
  <div class="form-group row">
                          <div class="col-md-2">
                              <label>D.O.B:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="date"  name="dob" value="<?php echo $dob;?>" class="form-control">
                         
                        </div>
                        <div class="col-md-2">
                <label>Gender : 
                </label>
                </div>
                <div class="col-md-4">
                <label class="radio-inline radio-left" style="margin-left: unset;">
                  <input type="radio"  name="gender" value="<?php echo $gender;?>" id="optionsRadiosInline1" value="male" checked>&nbsp;Male&nbsp;&nbsp;
                </label>
                <label class="radio-inline">
                  <input type="radio" name="gender" value="<?php echo $gender;?>" id="optionsRadiosInline2" value="female">&nbsp;Female&nbsp;&nbsp;
                </label>
              </div>
              </div>







                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Staff Type:</label>
                          </div>
                          
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="staff_type" value="<?php echo $staff_type;?>">
                                <option value="<?php echo $staff_type;?>"><?php echo $staff_type;?></option>
                                <option value="Technical">Technical</option>
                                <option value="Non-Technical">Non-Technical</option>
                          </select>
                         
                        </div>
                      
                          <div class="col-md-2">
                              <label>Designation:</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="designation" value="<?php echo $designation;?>">
                            <option value="<?php echo $designation;?>"><?php echo $designation;?></option>
                               <?php
                                    $sql= mysqli_query($con,"SELECT id,designation FROM designation");
                                    while ($row = mysqli_fetch_array($sql))
                                    {
                                        
                                    ?>
                                    <option value="<?php echo $row['designation']; ?>">
                                    <?php echo $row['designation']; ?></option>
                                    <?php       
                                } ?>
       

                          </select>
                         
                        </div>
                      </div>

                       <div class="form-group row">
                          <div class="col-md-2">
                              <label>Joining Date :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="date" name="joining_date" value="<?php echo $joining_date;?>" class="form-control">
                         
                        </div>
                    
                          
                           </div>

                       

                       <div class="form-group row">
                          <div class="col-md-2">
                              <label>Qualification:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="qualification" value="<?php echo $qualification;?>" class="form-control"   placeholder="Enter Qualification">
                         
                        </div>
                      
                          <div class="col-md-2">
                              <label>Previous Employment:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="prev_emp" value="<?php echo $prev_emp;?>" class="form-control"   placeholder="Enter Previous Employment">
                         
                        </div>
                      </div>

                       <div class="form-group row">
                          <div class="col-md-2">
                              <label>Previous Position:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="prev_position" value="<?php echo $prev_position;?>" class="form-control"  placeholder="Enter Previous Position">
                         
                        </div>
                    
                          <div class="col-md-2">
                              <label>Previous Salary :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="prev_salary" value="<?php echo $prev_salary;?>" class="form-control"placeholder="Enter Previous Salary">
                         
                        </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Address :</label>
                          </div>
                          <div class="col-md-10">
                           <input type="text" name="address" value="<?php echo $address;?>" class="form-control"  placeholder="Enter Address">
                         
                        </div>
                      </div>
  <div class="form-group row">
                          <div class="col-md-2">
                              <label>Email :</label>
                          </div>
                          <div class="col-md-10">
                           <input type="text" name="email" value="<?php echo $email;?>" class="form-control" placeholder="Enter Email">
                         
                        </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Specification:</label>
                          </div>
                          <div class="col-md-10">
                          <textarea name="specification"class="form-control" placeholder="Enter Specification" cols="" roes="4"> <?php echo $specification;?></textarea>
                         
                        </div>
                      </div>




                      
                         <div class="form-group row">
                          <div class="col-md-2">
                              <label>Photo :</label>
                          </div>
                          <div class="col-md-10">
                        <input type="file"  name="photo"cvalue="<?php echo $photo;?>" class="form-control">
                         
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