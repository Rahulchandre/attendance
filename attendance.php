<?php
include('header.php');
include('sidebar.php');
include('footer.php');
include('db.php');
 ?>

<!-- form code start -->
<div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3"> </div>
            <div class="col-md-6">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-table"></i> &nbsp;STUDENT CLASSWISE</div>
                <div class="card-body">
  <form action="" method="post">
  
  <div class="form-group row">
                          <div class="col-md-3">
                              <label>Date:</label>
                          </div>
                          <div class="col-md-9">
                           <input type="date"  name="dob" class="form-control">
                         
                        </div>
                      </div>
  
    <div class="form-group row">
                          <div class="col-md-3">
                              <label>Class :</label>
                          </div>
                          <div class="col-md-9">
                          <select class="form-control dropdown" name="class" id="class" onchange="classWise();">
                             <option value="0">NA</option>
                               
                          </select>
                         
                        </div>
                      </div>

                        <div class="form-group row">
                          <div class="col-md-3">
                              <label>Division :</label>
                          </div>
                          <div class="col-md-9">
                          <select class="form-control dropdown" name="division" id="division" onchange="divisionWise();">
                               <option value="0">NA</option>
                               
                          </select>
                         
                        </div>
                      </div>
					  
					  <div class="form-group row">
                          <div class="col-md-3">
                              <label>Subject :</label>
                          </div>
                          <div class="col-md-9">
                          <select class="form-control dropdown" name="division" id="division" onchange="divisionWise();">
                               <option value="0">NA</option>
                               
                          </select>
                         
                        </div>
                      </div>
					  
					  
					  <button type="button" class="btn btn-primary" 
              style="font-size:18px;border-radius:10px;width: 87px;margin-left: 190px">
              View</button>




</form>
</div>
</div>
</div>
</div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<div class="row">

            <div class="col-md-12">
            
 <div class="card-header">
 <div class="card-body">
 
 <div class="row">
    <div class="col-sm-9">
	<div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                     <tr>
					 <th>Roll No</th>
                       <th>Student Reg No</th>
                       <th>First Name</th>
					    <th>Middle Name</th>
                       <th>Last Name</th>
                       <th>Attendence</th>
                       <th>Applicant</th>
                       <th>Remark</th>
                       
                     </tr>
					 
					  <tr>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td><input type="checkbox" checked="true"></td>
                  <td><input type="checkbox"></td>
                  <td><textarea style="width:100px;height:20px"></textarea></td>
             
                  <tr>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td><input type="checkbox" checked="true"></td>
                  <td><input type="checkbox"></td>
                  <td><textarea style="width:100px;height:20px;"></textarea></td>
				  </tr>
				  
				   <tr>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td><input type="checkbox" checked="true"></td>
                  <td><input type="checkbox"></td>
                  <td><textarea style="width:100px;height:20px;"></textarea></td>
				  </tr>
             
			 
			  <tr>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td><input type="checkbox" checked="true"></td>
                  <td><input type="checkbox"></td>
                  <td><textarea style="width:100px;height:20px;"></textarea></td>
				  </tr>
             
			 
			  <tr>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td><input type="checkbox" checked="true"></td>
                  <td><input type="checkbox"></td>
                  <td><textarea style="width:100px;height:20px;"></textarea></td>
				  </tr>
             
             
				  
                 </thead>
				 </table>
</div>
    
	</div>
	
	
	
	<div class="col-sm-3">
	
	
	<div id="calculation" >
                     <button type="button" class="btn btn-primary" 
                         style="font-size:18px;border-radius:10px;margin-left: 1px;">
                         Calculate Attendance</button>
                         <div id="para" style="margin-top: 11px">
                             <p>Total Students:</p>
                             <p>Present Students:</p>
                             <p>Absent Students:</p>
                             <p>With Application:</p>
                             <p>Without Application:</p>
                                 <button type="button" class="btn btn-primary" 
                                     style="font-size:18px;border-radius:10px;width:104px;margin-left: 5px;">
                                     Save</button>
                                     <button type="button" class="btn btn-primary" 
                                     style="font-size:18px;border-radius:10px; ">
                                     Send SMS</button>
                                     <button type="button" class="btn btn-primary" 
                                     style="width: 215px;font-size: 18px;border-radius: 10px; margin-top: 10px;margin-left: 6px;">
    
    
   
                                     Print Report</button>
 </div>
	</div>
	
	</div><!--calulation close-->
    
</div>

 
 </div>
 </div>
 </div>
 
 </div>
</div>

                

        </div><!--close card-body-->
     