
<!-- Connection code start -->
<?php
include('header.php');
include('sidebar.php');
include('footer.php');
// include('cc.php');
 ?>
<?php
include('db.php');

if (isset($_GET['delete']))
	{
			 $id=$_GET['delete'];
			 $sql=mysqli_query($con,"DELETE FROM stoppage WHERE id='$id'");
			 if($sql)
			 {
			echo "<script>alert('  Record Delete successfully........!');
			window.location='add_stoppage.php';
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
                <i class="fa fa-table"></i> &nbsp;ADD STOP</div>
                <div class="card-body">
 

             


		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<th>Stop Name</th>
				<th>Stop Type</th>
				<th>Distance</th>
				<th>Fees</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php
				include('db.php');
				
				$query=mysqli_query($con,"SELECT * FROM stoppage ORDER BY id asc" );
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $row['stop_name']; ?></td>
						<td><?php echo $row['stop_type']; ?></td>
						
						<td><?php echo $row['distance']; ?></td>
						<td><?php echo $row['fees']; ?></td>
						<td>
							<a href="#edit<?php echo $row['id']; ?>" data-toggle="modal"><span  class="fa fa-edit edit"></span> </a> || 
							<?php include('transport_modales.php'); ?>

							<a href="add_stoppage.php?delete=<?php echo $row['id']; ?>" ><span class="fa fa-trash-o del"></span> </a>
						
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>






</div>
																					<div class="form-group row">
                                            <div class="col-nd-2 offset-md-5">
																						<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
																						<?php include('transport_modales.php'); ?>







                                            </div>
                                        </div>
</div>
    </div>
            
                         </div><!--close card-body-->
                         </div>
                       </div><!-- /col-md-3-->
                       </div><!-- wrapper class close-->







<!-- Edit -->
<div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($con,"select * from stoppage where id='".$row['id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['id']; ?>">
					<div class="row">
						<div class="col-lg-3">
							<label style="position:relative; top:7px;">stop_name:</label>
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
						<select class="form-control dropdown" name="stop_type">
                                                  <option  value="<?php echo $erow['stop_type']; ?>" style="display:block;"><?php echo $erow['stop_type']; ?></option>
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
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->



