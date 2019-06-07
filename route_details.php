
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
			 $sql=mysqli_query($con,"DELETE FROM route_details WHERE id='$id'");
			 if($sql)
			 {
			echo "<script>alert('  Record Delete successfully........!');
			window.location='route_details.php';
			</script>";
			
			} 
	}    

?>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 10%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 1px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>


<!-- form code start -->
<div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"> </div>
            <div class="col-md-10">
            <div class="card mb-1">
              <div class="card-header">
                <i class="fa fa-table"></i> &nbsp;Route Details</div>
                <div class="card-body">
 

             


		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
                <tr>
                <th>Route_name</th>
       <th>vehicle_code</th>
       <th>stop_type</th>
       <th>Pik-Up Time</th>
       <th>Drop Time</th>
       <th>Fees</th>
       <th>Action</th>
      
                </tr>
              </thead>
			<tbody>
            <?php 

        $sql=mysqli_query($con,"SELECT id, route_name, vehicle_code, stop_type,  TIME_FORMAT(pick_up_time, '%h:%i %p') as pick_up_time,  TIME_FORMAT(drop_time, '%h:%i %p') as drop_time, fees FROM  route_details ORDER BY id desc");
                 while($row=mysqli_fetch_array($sql))
                 {                                  
    ?> 
					<tr>
                  
                  <td><?php echo $row['route_name']; ?></td>
                  <td><?php echo $row['vehicle_code']; ?></td>
                  <td><?php echo $row['stop_type']; ?></td>
                  <td><?php echo $row['pick_up_time']; ?></td>
                  <td><?php echo $row['drop_time']; ?></td>
                  <td><?php echo $row['fees']; ?></td>
                 <td><a href="#edit2<?php echo $row['id']; ?>" data-toggle="modal"><span  class="fa fa-edit edit"></span> </a> || 
                 <?php include('route_modale1.php'); ?>

              <a href="route_details.php?delete=<?php echo $row["id"]; ?>"  onclick="return confirm('Are You Sure for delete')" class="fa fa-trash-o del"><u></u></a>&nbsp;


              
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
											<?php include('route_modale2.php'); ?>







                                            </div>
                                        </div>
</div>
    </div>
            
                         </div><!--close card-body-->
                         </div>
                       </div><!-- /col-md-3-->
                       </div><!-- wrapper class close-->











