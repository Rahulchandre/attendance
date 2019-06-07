
<!-- Connection code start -->
<?php
include('header.php');
include('sidebar.php');
include('footer.php');
include('db.php');
 ?>


<!-- insert record start -->

<?php



  if(isset($_POST["submit"]))
    {
        $full_name=$_POST["full_name"];
        $mobile_no=$_POST["mobile_no"];
        $dob=$_POST["dob"];
        $gender=$_POST["gender"];
        $staff_type=$_POST["staff_type"];
        $designation=$_POST["designation"];
        $joining_date=$_POST["joining_date"];
        $specification=$_POST["specification"];
        $qualification=$_POST["qualification"];
        $prev_emp=$_POST["prev_emp"];
        $prev_position=$_POST["prev_position"];
        $prev_salary=$_POST["prev_salary"];
        $address=$_POST["address"];
        $email=$_POST["email"];
      
      
      
      
      
      
        $imagefile=$_FILES["photo"]["name"];
        $tempfile=$_FILES["photo"]["tmp_name"];
        $folder="image/".$imagefile;
        move_uploaded_file($tempfile,$folder);
        
        
 $query=mysqli_query($con,"INSERT INTO staff_reg(full_name, 
 mobile_no,dob,
  gender, staff_type, 
  designation, joining_date,
  specification, 
   qualification , prev_emp, 
   prev_position, prev_salary,
   address,email,photo)
   VALUES('$full_name',
   '$mobile_no','$dob',
    '$gender', '$staff_type',
     '$designation', '$joining_date', 
     '$specification', 
     '$qualification', '$prev_emp', '$prev_position',
      '$prev_salary','$address','$email',  '$imagefile')");
   

  }

?>

<!-- insert record start -->




<!-- form code start -->
<div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"> </div>
            <div class="col-md-10">
            <div class="card mb-1">
              <div class="card-header">
                <i class="fa fa-table"></i> &nbsp;STAFF REGISTRATION</div>
                <div class="card-body">
  <form action="" method="post" enctype="multipart/form-data">
  <div class="form-group row">
                          <div class="col-md-2">
                              <label>Full Name :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" class="form-control"  name="full_name" placeholder="Enter Full Name">
                         
                        </div>
                      
                          <div class="col-md-2">
                              <label>Mob No :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="mobile_no"  class="form-control" placeholder="Enter Mobile No">
                         
                        </div>
                      </div>
  
  <div class="form-group row">
                          <div class="col-md-2">
                              <label>D.O.B:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="date"  name="dob" class="form-control">
                         
                        </div>
                        <div class="col-md-2">
                <label>Gender : 
                </label>
                </div>
                <div class="col-md-4">
                <label class="radio-inline radio-left" style="margin-left: unset;">
                  <input type="radio"  name="gender" id="optionsRadiosInline1" value="male" >&nbsp;Male&nbsp;&nbsp;
                </label>
                <label class="radio-inline">
                  <input type="radio" name="gender" id="optionsRadiosInline2" value="female">&nbsp;Female&nbsp;&nbsp;
                </label>
              </div>
              </div>







                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Staff Type:</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="staff_type">
                                <option value="NA">NA</option>
                                <option value="Teaching">Teaching</option>
                                <option value="Non-Teaching">Non-Teaching</option>
                          </select>
                         
                        </div>
                      
                          <div class="col-md-2">
                              <label>designation:</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="designation">
                            <option value="0">NA</option>
                               <?php
                                    $sql= mysqli_query($con,"SELECT id,designation FROM designation");
                                    while ($row = mysqli_fetch_array($sql))
                                    {
                                        
                                    ?>
                                    <option value="<?php echo $row['id']; ?>">
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
                           <input type="date" name="joining_date" class="form-control">
                         
                        </div>
                    
                           </div>

                       

                       <div class="form-group row">
                          <div class="col-md-2">
                              <label>Qualification:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="qualification" class="form-control"   placeholder="Enter Qualification">
                         
                        </div>
                      
                          <div class="col-md-2">
                              <label>Previous Employment:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="prev_emp" class="form-control"   placeholder="Enter Previous Employment">
                         
                        </div>
                      </div>

                       <div class="form-group row">
                          <div class="col-md-2">
                              <label>Previous Position:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="prev_position" class="form-control"  placeholder="Enter Previous Position">
                         
                        </div>
                    
                          <div class="col-md-2">
                              <label>Previous Salary :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="prev_salary" class="form-control"placeholder="Enter Previous Salary">
                         
                        </div>

                      </div>
                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Address :</label>
                          </div>
                          <div class="col-md-10">
                           <input type="text" name="address" class="form-control"  placeholder="Enter Address">
                         
                        </div>
                      </div>
  <div class="form-group row">
                          <div class="col-md-2">
                              <label>Email :</label>
                          </div>
                          <div class="col-md-10">
                           <input type="text" name="email" class="form-control" placeholder="Enter Email">
                         
                        </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Specification:</label>
                          </div>
                          <div class="col-md-10">
                          <textarea name="specification" class="form-control" placeholder="Enter Specification"></textarea>
                         
                        </div>
                      </div>
                         <div class="form-group row">
                          <div class="col-md-2">
                              <label>Photo :</label>
                          </div>
                          <div class="col-md-10">
                        <input type="file"  name="photo" class="form-control">
                         
                        </div>
                      </div>




            <div class="row">
              <div class="col-md-12" align="center">
               <button type="submit" name="submit" class="btn btn-primary" style="width:150px"><i class="fa fa-save">&nbsp;</i>Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
            

                <a class="btn btn-primary btn111" style="width:150px" href="staff_list.php" >Staff-List</a>
              </div>
            </div>


</form>
</div>
</div>
      
                 

        </div><!--close card-body-->
        </div>
      </div><!-- /col-md-3-->
      </div><!-- wrapper class close-->