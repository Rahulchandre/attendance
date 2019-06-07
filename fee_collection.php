
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
       
        $class=$_POST["class"];
       
        
        
 $query=mysqli_query($con,"INSERT INTO student_enquiry(class_id)
   VALUES('$class')");
   
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
                <i class="fa fa-table"></i>&nbsp;FEE COLLECTION</div>
                <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">

                      
<!-- START STUDENT TOGGLE CODE-->

<div class="row">
<div class="col-md-2">
    <label>User Type:</label>
</div>
<div class="col-md-4">
<select class="form-control"> 
<option>NA</option>
<option value="student">Student</option>
<option value="employee">Employee</option>

</select>
</div>
<div class="col-md-2">
    <label>Fee Type:</label>
</div>
<div class="col-md-4">
<select class="form-control"> 
<option>NA</option>
<option value="#">Student</option>
<option value="#">Employee</option>

</select>
</div>

</div>
<br>

<div class="student box">
    <div class="form-group row" > 
                      <div class="col-md-2">
                      <label>Student Name :</label>
                      </div>
                      <div class="col-md-10">
                           <input type="text" name="room_no" class="form-control" placeholder="Enter Full Name">
                         
                         </div>
</div>
</div>
        
<!-- END STUDENT TOGGLE CODE-->


 <!-- START EMPLOYEE TOGGLE CODE-->
                      <div class="employee box">
                          <div class="form-group row" > 
                                  <div class="col-md-2">
                                    <label>Employee Name :</label>
                                      </div>
                                      <div class="col-md-10">
                                        <input type="text" name="room_no" class="form-control" placeholder="Enter Full Name">       
                                      </div>
                                </div>
                              
</div>

    <div class="form-group row" > 
                      <div class="col-md-2">
                      <label>Total Amount :</label>
                      </div>
                      <div class="col-md-4">
                           <input type="text" name="room_no" class="form-control" placeholder="Enter Full Name">
                         
                         </div>


<div class="col-md-2">
                      <label>Pay Amount :</label>
                      </div>
                      <div class="col-md-4">
                           <input type="text" name="room_no" class="form-control" placeholder="Enter Full Name">
                         
                         </div>
</div>

<div class="form-group row" > 
                      <div class="col-md-2">
                      <label>Remaining Amount:</label>
                      </div>
                      <div class="col-md-4">
                           <input type="text" name="room_no" class="form-control" placeholder="Enter Full Name">
                         
                         </div>


<div class="col-md-2">
                      <label>Fine:</label>
                      </div>
                      <div class="col-md-4">
                           <input type="text" name="room_no" class="form-control" placeholder="Enter Full Name">
                         
                         </div>
</div>


<div class="form-group row">
                          <div class="col-md-2">
                              <label>Remark:</label>
                          </div>
                          <div class="col-md-4">
                           <textarea class="form-control" name="permanent_address" placeholder="Enter Permanent Address" cols="" roes="4"></textarea>
                         
                        </div>
                        
    
<div class="col-md-2">
    <label>Payment:</label>
</div>
<div class="col-md-4">
<select class="form-control"> 
<option>NA</option>
<option value="cash">Cash</option>
<option value="cheque">Cheque</option>

</select>
</div>
</div>

<div class="cheque box">
    <div class="form-group row" > 
                      <div class="col-md-2">
                      <label>Bank Name:</label>
                      </div>
                      <div class="col-md-4">
                           <input type="text" name="room_no" class="form-control" placeholder="Enter Full Name">
                         
                         </div>

<div class="col-md-2">
                      <label>Cheque No:</label>
                      </div>
                      <div class="col-md-4">
                           <input type="text" name="room_no" class="form-control" placeholder="Enter Full Name">
                         
                         </div>
</div>
</div>




                
                                                    
<!-- END EMPLOYEE TOGGLE CODE-->

          <div class="row">
          <div class="col-md-12" align="center" style="margin-bottom: 10px;">
               <button type="submit" name="submit" class="btn btn-primary" style="width:150px">
               <i class="fa fa-save">&nbsp;</i>Submit</button>
               &nbsp;&nbsp;&nbsp;&nbsp;
           </div>
          </div>


            
    
            
<br>


      
                 

        </div><!--close card-body-->
        </div>
      </div><!-- /col-md-3-->
      </div><!-- wrapper class close-->


<!-- / JAVASCRIPT CODE-->

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$("select").change(function(){
$(this).find("option:selected").each(function(){
var optionValue = $(this).attr("value");
if(optionValue){
$(".box").not("." + optionValue).hide();
$("." + optionValue).show();
} else{
$(".box").hide();
}
});
}).change();
});
</script>