
<!-- Connection code start -->
 <?php
include('header.php');
include('sidebar.php');
include('footer.php');
include('db.php');

 ?>
<!-- delete  start -->
<?php

 if (isset($_GET['delete']))
   {
        $staff_reg_id=$_GET['delete'];
        $sql=mysqli_query($con,"DELETE FROM staff_reg WHERE staff_reg_id='$staff_reg_id'");
   }    

?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dataTable table tr {
border: solid 1px black;
}
</style>
</head>


<!-- table start -->

  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="card mb-3">
        <div class="card-body">
          <h5>STAFF LIST</h5><hr>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Staff No</th>
                  <th>Full Name</th>
                  <th>Mobile_no</th>
                  <th>Profession</th>
                  <th>Qualification</th>
                  <th>Joining Date</th>
                   <th>Action</th>
                </tr>
              </thead>
           

            <!-- TD START-->

              <tbody>


                
   <?php 
        $sql=mysqli_query($con,"SELECT * FROM  staff_reg ORDER BY staff_reg_id desc");
                 while($row=mysqli_fetch_array($sql))
                 {                                  
    ?>                     
 
                <tr>
                  <td><?php echo $row['staff_reg_id']; ?></td>
                  <td><?php echo $row['full_name']; ?></td>
                  <td><?php echo $row['mobile_no']; ?></td>
                  <td><?php echo $row['designation']; ?></td>
                  <td><?php echo $row['qualification']; ?></td>
                  <td><?php echo $row['joining_date']; ?></td>
                 <td><a href="edit_staff.php?edit=<?php echo $row["staff_reg_id"]; ?>"
              class="fa fa-edit edit"><u></u></a>&nbsp;&nbsp;

              <a href="staff_list.php?delete=<?php echo $row["staff_reg_id"]; ?>"  onclick="return confirm('Are You Sure for delete')" class="fa fa-trash-o del"><u></u></a>&nbsp;


              <a display="<?php echo $row["staff_reg_id"]; ?>" class="view_data"><i class="fa fa-eye"></i></a>
              
              </td>  
                </tr>

<?php } ?>
               
              </tbody>

            </table>
                    <!-- <form action="excel/staff_excel.php">
<input type="submit" name="export" value="Excel" class="btn btn-success" >
 </form><br>
 <form action="pdf/staff_pdf.php">
<input type="submit" name="export" value="pdf" class="btn btn-success" >
 </form> -->
          </div>
        </div><!--close card-body-->
      </div>
    </div>
  </div><!-- /col-md-3-->
</div><!-- wrapper class close-->


<div id="dataModal" class="modal fade">  
      <div class="modal-dialog" style="    margin-left: 300px">  
           <div class="modal-content"  style="width:190%">  
                <div class="modal-header">  
                     <h4 class="modal-title" >Staff Details</h4>  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  

                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  

 <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var staff_id = $(this).attr("display");  
           $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{staff_id:staff_id},  
                success:function(data){  
                     $('#employee_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>
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