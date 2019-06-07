
<!-- Connection code start -->
<?php
include('header.php');
include('sidebar.php');
include('footer.php');
include('db.php');
 ?>


<!-- insert record start -->

<?php
 if (isset($_GET['delete']))
 {
      $e_id=$_GET['delete'];
      $sql=mysqli_query($con,"DELETE FROM student_enquiry WHERE e_id='$e_id'");
 }    

?>

<?php

if(isset($_POST["submit"]))
{
    $first_name=$_POST["first_name"];
    $middle_name=$_POST["middle_name"];
    $last_name=$_POST["last_name"];
    $address=$_POST["address"];
    $contact_no=$_POST["contact_no"];
    $parent_no=$_POST["parent_no"];
    $class=$_POST["class"];
    $email=$_POST["email"];
    $dob=$_POST["dob"];
    $gender=$_POST["gender"];
        
        
    $query=mysqli_query($con,"INSERT INTO student_enquiry(first_name,  middle_name, last_name, address, contact_no, parent_no, class_id,  email, dob, gender)
    VALUES('$first_name', '$middle_name', '$last_name', '$address', '$contact_no', '$parent_no', '$class', '$email', '$dob', '$gender')");
    if($query)
    {
   echo "<script>alert('  Record Insert successfully........!');
   window.location='student_enquiry.php';
   </script>";
   
   } 
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
                <i class="fa fa-table"></i> &nbsp;Student Enquiry</div>
                <div class="card-body">
  <form action="" method="post" enctype="multipart/form-data">

                      
                      
                      
                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>First Name :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="first_name" class="form-control" placeholder="Enter First Name">
                         
                        </div>
                     



                          <div class="col-md-2">
                              <label>Last Name :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name">
                         
                        </div>
                      </div>


                          <div class="form-group row">
                          <div class="col-md-2">
                              <label>Middle Name :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="middle_name"  class="form-control" placeholder="Enter Middle Name">
                         
                        </div>
                       
                     



                        

                          <div class="col-md-2">
                              <label>Contact No :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="contact_no" class="form-control" placeholder="Enter Contact No">
                         
                        </div>
                        
                 </div>


                      
                 <div class="form-group row">
                          <div class="col-md-2">
                              <label>Parent No:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="parent_no" class="form-control" placeholder="Enter Contact No">
                         
                        </div>
                     
                          <div class="col-md-2">
                              <label>Date of Birth :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="Date" name="dob" class="form-control" placeholder="Enter email">
                         
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
                <label>Gender : 
                </label>
                </div>
                <div class="col-md-4">
                <label class="radio-inline radio-left" style="margin-left: unset;">
                  <input type="radio"  name="gender" id="optionsRadiosInline1" value="Male" >&nbsp;Male&nbsp;&nbsp;
                </label>
                <label class="radio-inline">
                  <input type="radio" name="gender" id="optionsRadiosInline2" value="Female">&nbsp;Female&nbsp;&nbsp;
                </label>
              </div>
                      </div>

                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Address :</label>
                          </div>
                          <div class="col-md-10">
                           <textarea class="form-control" name="address" placeholder="Enter Address" cols="2" rows="0"></textarea>
                         
                        </div>
                      </div>
                  

                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Email :</label>
                          </div>
                          <div class="col-md-10">
                           <input type="text"  name="email" class="form-control" placeholder="Enter email">
                         
                        </div>
                      </div>



                     
                      

                      <div class="row">
              <div class="col-md-12" align="center">
               <button type="submit" name="submit" class="btn btn-primary" ><i class="fa fa-save">&nbsp;</i>Submit</button>
              </div>
            </div>
            </form>
</div>
 </div>     
   <br><br>              
 <div class="card mb-3">
        <div class="card-body">
          <h5>Student Enquiry List</h5><hr>
          <div class="table-responsive">
            <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Enquiry No</th>
                  <th>First Name</th>
                 
                  <th>Last Name</th>
                  <th>Contact No</th>
               
                  <th>Class</th>
                  <th>Email</th>
                  <th>Date of Birth</th>
                  <th>Gender</th>
                  <th>Action</th>
                   
                </tr>
              </thead>
             
          <tbody>
  <?php 
        $sql=mysqli_query($con,"SELECT * FROM  student_enquiry ORDER BY e_id desc");
                 while($row=mysqli_fetch_array($sql))
                 {         
                   
                  $class_name= $row['class_id'];  
                  
                  $sql1=mysqli_query($con,"SELECT * FROM  class where id = $class_name");
           
                  $row1=mysqli_fetch_array($sql1);
                                           
    ?>  

                <tr>
                  <td><?php echo $row['e_id']; ?></td>
                  <td><?php echo $row['first_name']; ?></td>
                
                  <td><?php echo $row['last_name']; ?></td>
                  <td><?php echo $row['contact_no']; ?></td>
                
                  <td><?php echo $row1['class']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['dob']; ?></td>
                  <td><?php echo $row['gender']; ?></td>
                  
                 <td><a href="edit_s_enquiry.php?edit=<?php echo $row["e_id"]; ?>"
              class="fa fa-edit edit"><u></u></a>&nbsp;&nbsp;

              <a href="student_enquiry.php?delete=<?php echo $row["e_id"]; ?>"  onclick="return confirm('Are You Sure for delete')" class="fa fa-trash-o del"><u></u></a></td>
                </tr>

<?php } ?>
               
              </tbody>

            </table>
          </div>

          <!-- <form action="excel/student_excel.php">
<input type="submit" name="export" value="Excel" class="btn btn-success" >
 </form>
  <form action="excel/student_excel.php">
<input type="submit" name="export" value="Excel" class="btn btn-success" >
 </form>
 <form action="pdf/student_pdf.php">
<input type="submit" name="export" value="pdf" class="btn btn-success" >
 </form> -->
        </div><!--close card-body-->
      </div>
    </div>
  </div><!-- /col-md-3-->

        </div><!--close card-body-->
        </div>
      </div><!-- /col-md-3-->
      </div><!-- wrapper class close-->



      <script type="text/javascript">

	
		
$(document).ready(function(){

//Apply the datatables plugin to your table
$('#myTable').DataTable(
{
"scrollY": 100,
"scrollX":true

});

});

</script>


