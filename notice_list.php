
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
    $notice_id = $_GET['edit'];

    $query = mysqli_query($con,"SELECT * FROM notice WHERE notice_id='$notice_id'") or die(mysqli_error($con));
    if (count($query) == 1 )
     {
      if ($n = mysqli_fetch_array($query)) 
      {
       
      $title=$n['title'];
      $date_form=$n['date_form'];
      $date_to=$n['date_to'];
      $description=$n['description'];
   
     }

    }
  }

?>


<style>
.dataTable table tr {
border: solid 1px black;
}
</style>




<!-- delete  start -->
<?php

 if (isset($_GET['delete']))
   {
        $notice_id=$_GET['delete'];
        $sql=mysqli_query($con,"DELETE FROM notice WHERE notice_id='$notice_id'");
   }    

?>


<!-- table start -->

<div class="content-wrapper">
    <div class="container-fluid">
       <div class="card mb-3">
        <div class="card-body">
          <h5>NOTICE LIST</h5><hr>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Form Date </th>
                  <th>To Date</th>
                  <th>Document Type</th>
                  <th>Description</th>
                  <th>Action</th>
                   
                </tr>
              </thead>
              <!-- <tfoot>
                <tr>
                  <th colspan="6">Grand Total</th>
                 <th></th>
                </tr>
              </tfoot> -->

            <!-- TD START-->



                   
 
              <tbody>

            <?php 

        $sql=mysqli_query($con,"SELECT * FROM  notice ORDER BY notice_id desc");

            
        
                 while($row=mysqli_fetch_array($sql))
                 {
                
                  ?>   
                <tr>
                  <td><?php echo $row['title']; ?></td>
                  <td><?php echo $row['date_form']; ?></td>
                  <td><?php echo $row['date_to']; ?></td>
                 <td>
                 <?php echo "<img style='width:50px;height:50px' src='image/".$row['photo']."'>"; ?></td>
                  <td><?php echo $row['description']; ?></td>
                 <td><a href="edit_notice.php?edit=<?php echo $row["notice_id"]; ?>"
              class="fa fa-edit edit"><u></u></a>&nbsp;&nbsp;

              <a href="notice_list.php?delete=<?php echo $row["notice_id"]; ?>"  onclick="return confirm
              ('Are You Sure for delete')" class="fa fa-trash-o del"><u></u></a>&nbsp;

              <a href="downlode.php?id=<?php echo $row['photo']; ?>"
              class="fa fa-download "><u></u></a>&nbsp;&nbsp;

             
              
              </td>

            

                </tr>
<?php } ?>

               
              </tbody>

            </table>
            <!-- <<form action="excel/event_excel.php">
<input type="submit" name="export" value="Excel" class="btn btn-success" >
 </form><br>
 <form action="pdf/event_pdf.php">
<input type="submit" name="export" value="pdf" class="btn btn-success" >
 </form> -->
          </div>
        </div><!--close card-body-->
      </div>
    </div>
  </div><!-- /col-md-3-->
</div><!-- wrapper class close-->

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