
<!-- Edit -->
<div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
				<h4> Edit Stop Page</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel"></h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($con,"select * from stoppage where id='".$row['id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit_transport_operations.php?id=<?php echo $erow['id']; ?>">
					<div class="row">
						<div class="col-lg-3">
							<label style="position:relative; top:7px;">Stop Name:</label>
						</div>
						<div class="col-lg-9">
		 					<input type="text" name="stop_name" class="form-control" value="<?php echo $erow['stop_name']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label style="position:relative; top:7px;">Stop Type:</label>
						</div>
						<div class="col-lg-9">
						<select class="form-control dropdown" name="stop_type" >
                                                                                    <option value="<?php echo $erow['stop_type']; ?>"><?php echo $erow['stop_type']; ?></option>
																				    <option value="Pick Up">Pick Up</option>
                                                                                    <option value="Drop">Drop</option>
                                                                                    <option value="Pick Up & Drop">Pick Up & Drop</option>
                                                                                </select>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label style="position:relative; top:7px;">Distance:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" name="distance" class="form-control" value="<?php echo $erow['distance']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label style="position:relative; top:7px;">Fees:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" name="fees" class="form-control" value="<?php echo $erow['fees']; ?>">
						</div>
					</div>


                </div> 
				</div>
				
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" name="update"  class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
	
<!-- /.modal  add stoppage-->

<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                   
                    <center><h4 class="modal-title" id="myModalLabel">Add New Record</h4></center>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel"></h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="edit_transport_operations.php">
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">Stop Name:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="stop_name">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">Stop Type:</label>
						</div>
						<div class="col-lg-9">
						<select class="form-control dropdown" name="stop_type">
                          <option value="0">NA</option>
                           <option value="Pick Up">Pick Up</option>
                             <option value="Drop">Drop</option>
                                 <option value="Pick Up & Drop">Pick Up & Drop</option>
                                   </select>

						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">Distance:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="distance">
						</div>
					</div>


					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">Fees:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="fees">
						</div>
					</div>



                </div> 
				</div>
				
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>


<!-- /////////////////////////////////////////////////////////////////////Vehicle Model///////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- edit Vehicle -->

	<div class="modal fade" id="addnew1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
				
                   
                    <center><h4 class="modal-title" id="myModalLabel">Add New Record </h4></center>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel"></h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="edit_transport_operations.php">
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Vehicle Code:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="vehicle_code">
						</div>
					</div>
				
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Vehicle No:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="vehicle_no">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Regisater No:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="reg_no">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Vehicle Type:</label>
						</div>
						<div class="col-lg-8">
						<select class="form-control dropdown" name="vehicle_type" >
																				<option value="0">NA</option>
																				    <option value="Pick Up">Pick Up</option>
                                                                                    <option value="Drop">Drop</option>
                                                                                    <option value="Pick Up & Drop">Pick Up & Drop</option>
                                                                                </select>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Active:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="active">
						</div>
					</div>
					
				
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" name="insert" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>


<!-- EDIT MODAL -->


<div class="modal fade" id="edit1<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
				<h4> Edit Vehicle Page</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel"></h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($con,"select * from vehicle_details where id='".$row['id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit_transport_operations.php?id=<?php echo $erow['id']; ?>">
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Vehicle Code:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="vehicle_code" class="form-control" value="<?php echo $erow['vehicle_code']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Vehicle No:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="vehicle_no" class="form-control" value="<?php echo $erow['vehicle_no']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Register No:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="reg_no" class="form-control" value="<?php echo $erow['reg_no']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Vehicle Type:</label>
						</div>
						<div class="col-lg-8">
						<select class="form-control dropdown" name="vehicle_type" >
                                                                                    <option value="<?php echo $erow['vehicle_type']; ?>"><?php echo $erow['vehicle_type']; ?></option>
																				    <option value="Pick Up">Pick Up</option>
                                                                                    <option value="Drop">Drop</option>
                                                                                    <option value="Pick Up & Drop">Pick Up & Drop</option>
                                                                                </select>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Active:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="active" class="form-control" value="<?php echo $erow['active']; ?>">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" name="update1"  class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>