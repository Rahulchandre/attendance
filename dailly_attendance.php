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
        <div class="col-md-1"> </div>
            <div class="col-md-10">
            <div class="card mb-1">
              <div class="card-header">
                <i class="fa fa-table"></i> &nbsp;SMS ALLERT ATTENDENCE</div>
                <div class="card-body">
  <form action="" method="post">
  
  <div class="form-group row">
                          <div class="col-md-3">
                              <label>Attendence Date :</label>
                          </div>
                          <div class="col-md-9">
                           <input type="date"  name="dob" class="form-control">
                         
                        </div>
                      </div>
  <div class="form-group row">
                         <div class="col-md-3">
                              <label>Start Time :</label>
                          </div>
                          <div class="col-md-9">    
                        <input type="time" name="start_time" class="form-control">
                        </div>
                      </div>
<div class="form-group row">
                         <div class="col-md-3">
                              <label>End Time :</label>
                          </div>
                          <div class="col-md-9">    
                        <input type="time" name="start_time" class="form-control">
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
              style="font-size:18px;border-radius:10px;width: 87px;margin-left: 501px">
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
                       <th>All Over Attendence</th>
                       <th>Parents Contact No</th>
                       <th>Select Student</th>
                       
                     </tr>
					 
					  <tr>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td><input type="checkbox" checked="true"></td>
             
                  <tr>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td><input type="checkbox" checked="true"></td>
				  </tr>
				  
				   <tr>
                   <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td><input type="checkbox" checked="true"></td>
				  </tr>
             
			 
			  <tr>
              <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td><input type="checkbox" checked="true"></td>
				  </tr>
             
			 
			  <tr>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td><input type="checkbox" checked="true"></td>
				  </tr>
             
             
				  
                 </thead>
				 </table>
</div>
    
	</div>
	
	
	
	<div class="col-sm-3">
	<div id="calculation" >
        <div style="border:1px solid black; width:240px; border-radius: 5px; margin-right: 25px">
    &nbsp;<label><input type="checkbox">&nbsp;<b>Select All Students To Here..</b></label><br><br>
    <textarea style="width:240px;height:200px;"></textarea>
                                     <button type="button" class="btn btn-primary" 
                                     style="width: 215px;font-size: 18px;border-radius: 20px; margin-top: -5px;margin-left: 15px;">Send Message</button>
                                    </div>
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
     