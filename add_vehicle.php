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
			 $sql=mysqli_query($con,"DELETE FROM vehicle_details WHERE id='$id'");
			 if($sql)
			 {
			echo "<script>alert('  Record Delete successfully........!');
			window.location='add_vehicle.php';
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
                <i class="fa fa-table"></i> &nbsp;ADD VEHICLE DETAILS</div>
                <div class="card-body">
 

            


		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<th>Vehicle Code</th>
				<th>Vehicle No</th>
				<th>Register No</th>
       
				<th>Vehicle Type</th>
        <th>Active</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php
				include('db.php');
				
				$query=mysqli_query($con,"select * from `vehicle_details`");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $row['vehicle_code']; ?></td>
						<td><?php echo $row['vehicle_no']; ?></td>
						<td><?php echo $row['reg_no']; ?></td>
            <td><?php echo $row['vehicle_type']; ?></td>
						<td><?php echo $row['active']; ?></td>
						<td>
							<a href="#edit1<?php echo $row['id']; ?>" data-toggle="modal"><span  class="fa fa-edit edit"></span> </a> || 
				 			<?php include('transport_modales.php'); ?>

							<a href="add_vehicle.php?delete=<?php echo $row['id']; ?>" ><span class="fa fa-trash-o del"></span> </a>
						
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
																						<span class="pull-left"><a href="#addnew1" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
																						<?php include('transport_modales.php'); ?>







                                            </div>
                                        </div>
</div>
    </div>
            
                         </div><!--close card-body-->
                         </div>
                       </div><!-- /col-md-3-->
                       </div><!-- wrapper class close-->





