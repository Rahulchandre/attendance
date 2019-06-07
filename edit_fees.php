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
$id = $_GET['edit'];

$query = mysqli_query($con,"SELECT * FROM fees WHERE id='$id'") or die(mysqli_error($query));
if (count($query) == 1 )
{
if ($row = mysqli_fetch_array($query)) 
{

$student_reg_no=$row['student_reg_no'];
$full_name=$row['full_name'];
$address=$row['address'];
$mobile_no=$row['mobile_no'];
$email=$row['email'];
$class=$row['class'];
$division=$row['division'];
$type_of_fees=$row['type_of_fees'];
$due=$row['due'];
$pay_amount=$row['pay_amount'];
$total_paid_amount=$row['total_paid_amount'];
$remaining_amount=$row['remaining_amount'];
$mode_of_payment=$row['mode_of_payment'];
$cheque=$row['cheque'];
$remark=$row['remark'];




}

}
}

if (isset($_POST['update']))
  {
    $student_reg_no=$_POST['student_reg_no'];
    $full_name=$_POST['full_name'];
    $address=$_POST['address'];
    $mobile_no=$_POST['mobile_no'];
    $email=$_POST['email'];
    $class=$_POST['class'];
    $division=$_POST['division'];
    $type_of_fees=$_POST['type_of_fees'];
    $due=$_POST['due'];
    $pay_amount=$_POST['pay_amount'];
    $total_paid_amount=$_POST['total_paid_amount'];
    $remaining_amount=$_POST['remaining_amount'];
    $mode_of_payment=$_POST['mode_of_payment'];
    $cheque=$_POST['cheque'];
    $remark=$_POST['remark'];
   

    

        $notice_id=$_GET['edit'];
        
      
      $query=mysqli_query($con,"UPDATE notice SET
       student_reg_no = '$student_reg_no', full_name = '$full_name', address ='$address',
       mobile_no ='$mobile_no', email ='$email',class ='$class', division ='$division',
        type_of_fees ='$type_of_fees',due ='$due',
        total_paid_amount ='$total_paid_amount',
         remaining_amount ='$remaining_amount', mode_of_payment ='$mode_of_payment', cheque ='$cheque',
         remark ='$remark',  WHERE notice_id ='$notice_id'");
         if($query)
         {
         echo "<script>alert('  Stationary Updated successfully........!');
         window.location='notice_list.php';
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
                <i class="fa fa-table"></i> &nbsp;STUDENT ADMISSION FEES</div>
                <div class="card-body">
  <form action="" method="post" enctype="multipart/form-data">
   
   
                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Student Reg. No:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text"  name="student_reg_no" value="<?php echo $full_name;?>" class="form-control"  placeholder="Enter Registration No">
                         
                        </div>
                           
  
  
                          <div class="col-md-2">
                              <label>Full Name :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" class="form-control"  name="full_name" value="<?php echo $full_name;?>" placeholder="Enter Full Name">
                         
                        </div>
                      </div>
					  
					  

  <div class="form-group row">
                          <div class="col-md-2">
                              <label>Address :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="address" value="<?php echo $address;?>"  class="form-control" placeholder="Enter Address">
                         
                        </div>
                   
                          <div class="col-md-2">
                              <label>Mobile No :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="mobile_no" value="<?php echo $mobile_no;?>" class="form-control"  placeholder="Enter Mobile No">
                         
                        </div>
                      </div>
  <div class="form-group row">
                          <div class="col-md-2">
                              <label>Email :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="email" value="<?php echo $email;?>" class="form-control" placeholder="Enter Email">
                         
                        </div>
                   
                          <div class="col-md-2">
                              <label>Class:</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="class" value="<?php echo $class;?>">
                                <option value="0">None</option>						  
                                <option value="1">LKG</option>
                                <option value="2">UKG</option>
                                <option value="0">1st</option>
								<option value="1">2nd</option>
                                <option value="2">3rd</option>
                                <option value="0">4th</option>
								<option value="1">5th</option>
                                <option value="2">6th</option>
                                <option value="0">7th</option>
								<option value="1">8th</option>
                                <option value="2">9th</option>
                                <option value="0">10th</option>
                          </select>
                         
                        </div>
                      </div>

   <div class="form-group row">
                          <div class="col-md-2">
                              <label>Division:</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="division" value="<?php echo $division;?>">
                                <option value="0">None</option>						  
                                <option value="1">A</option>
                                <option value="2">B</option>
                                <option value="0">C</option>
								<option value="0">D</option>
                          </select>
                         
                        </div>
                      
                          <div class="col-md-2">
                              <label>Type of Fees:</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="type_of_fees" value="<?php echo $type_of_fees;?>">
						  <option value="0">None</option>
                            <option value="1">New Admission Fees</option>
							<option value="2">Tution Fees</option>
                                <option value="0">Examination Fees</option>
                                <option value="1">Extra Activity Fees (Visit,Events,Functions,Sports)</option>
								<option value="2">Transport Fees</option>
                                <option value="0">Laboratory Fees</option>
                                <option value="1">Library Fees</option>
								<option value="2">Gym Fees</option>
                                <option value="0">Hostel Fees</option>
                                <option value="1">Fine</option>
								<option value="2">Other</option>
                                
                               <?php
                                    $sql= mysqli_query($con,"SELECT id,type_of_fees FROM type_of_fees");
                                    while ($row = mysqli_fetch_array($sql))
                                    {
                                        
                                    ?>
                                    <option value="<?php echo $row['id']; ?>">
                                    <?php echo $row['type_of_fees']; ?></option>
                                    <?php       
                                } ?>
       

                          </select>
                         
                        </div>
                      </div>



					<div class="form-group row">
                          <div class="col-md-2">
                              <label>Installment/Due:</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="due" value="<?php echo $due;?>">
                            <option value="0">None</option>
							<option value="0">1st</option>
							<option value="0">2nd</option>
							<option value="0">3rd</option>
                               <?php
                                    $sql= mysqli_query($con,"SELECT id,due FROM due");
                                    while ($row = mysqli_fetch_array($sql))
                                    {
                                        
                                    ?>
                                    <option value="<?php echo $row['id']; ?>">
                                    <?php echo $row['due']; ?></option>
                                    <?php       
                                } ?>
       

                          </select>
                         
                        </div>
                      
                          <div class="col-md-2">
                              <label>Pay Amount :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="pay_amount" value="<?php echo $pay_amount;?>"  class="form-control">
                         
                        </div>
                      </div>
					  
					  
					  <div class="form-group row">
                          <div class="col-md-2">
                              <label>Total Paid Amount:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="total_paid_amount" value="<?php echo $total_paid_amount;?>"  class="form-control" >
                         
                        </div>
                    
                          <div class="col-md-2">
                              <label>Remaining Amount :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="remaining_amount" value="<?php echo $remaining_amount;?>"  class="form-control" >
                         
                        </div>
                      </div>
					  
					  
					  <div class="form-group row">
                          <div class="col-md-2">
                              <label>Mode of Payment:</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="mode_of_payment" value="<?php echo $mode_of_payment;?>">
                            <option value="0">None</option>
							<option value="0">Cash</option>
							<option value="0">Cheque</option>
							<option value="0">Online</option>
  <?php
                                    $sql= mysqli_query($con,"SELECT id,mode_of_payment FROM mode_of_payment");
                                    while ($row = mysqli_fetch_array($sql))
                                    {
                                        
                                    ?>
                                    <option value="<?php echo $row['id']; ?>">
                                    <?php echo $row['mode_of_payment']; ?></option>
                                    <?php       
                                } ?>
       

                          </select>
                         
                        </div>
                     
                          <div class="col-md-2">
                              <label>Cheque No / Transaction Id:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="cheque" value="<?php echo $cheque;?>"  class="form-control" placeholder="00##00">
                         
                        </div>
                      </div>
                       

                     

                       <div class="form-group row">
                          <div class="col-md-2">
                              <label>Remark:</label>
                          </div>
                          <div class="col-md-10">
                          <textarea name="remark"  class="form-control" placeholder="Enter Specification" cols="" roes="4"> <?php echo $remark;?></textarea>
                         
                         
                        </div>
                      </div>

                      

               


            <div class="row">
              <div class="col-md-12" align="center">
               <button type="submit" name="submit" class="btn btn-primary" style="width:150px"><i class="fa fa-save">&nbsp;</i>Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
            
                <button type="button" class="btn btn-danger" style="width:150px"><i class="fa fa-window-close">&nbsp;</i>Cancel</button>
              </div>
            </div>


</form>
</div>
</div>
      
                 

        </div><!--close card-body-->
        </div>
      </div><!-- /col-md-3-->
      </div><!-- wrapper class close-->

      