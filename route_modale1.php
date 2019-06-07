<div class="modal fade" id="edit2<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
				<h4> Edit Route Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel"></h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($con,"select * from route_details where id='".$row['id']."'");
				
				
	
	
	
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit_transport_operations.php?id=<?php echo $erow['id']; ?>">
					<div class="row">
			 			<div class="col-lg-3">
							<label style="position:relative; top:7px;">Route Name:</label>
						</div>
						<div class="col-lg-9">
		 					<input type="text" name="route_name" class="form-control" value="<?php echo $erow['route_name']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label style="position:relative; top:7px;">vehicle Code:</label>
						</div>
						<div class="col-lg-9">
                        <input type="text" name="vehicle_code" class="form-control" value="<?php echo $erow['vehicle_code']; ?>">

						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label style="position:relative; top:7px;">Stop Type:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" name="stop_type" class="form-control" value="<?php echo $erow['stop_type']; ?>">
						</div>
					</div>





					
					<div style="height:10px;"></div>


   					<div class="row">
						<div class="col-lg-3">
							<label style="position:relative; top:7px;">Pick up:</label>
						</div>
						<div class="col-lg-9">
							<input type="time" name="pick_up_time" class="form-control" value="<?php echo $erow['pick_up_time']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label style="position:relative; top:7px;">Drop Time:</label>
						</div>
						<div class="col-lg-9">
							<input type="time" name="drop_time" class="form-control" value="<?php echo $erow['drop_time']; ?>">
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
                    <button type="submit" name="update2"  class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
	
	
	<?php

