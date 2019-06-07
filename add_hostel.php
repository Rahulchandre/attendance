
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
        $hostel_type=$_POST["hostel_type"];
        $contact_no=$_POST["contact_no"];
        $name=$_POST["name"];
        $address=$_POST["address"];
        $worden_contact=$_POST["worden_contact"];
        $worden_name=$_POST["worden_name"];
        $worden_address=$_POST["worden_address"];
    
        
        
 $query=mysqli_query($con,"INSERT INTO hostel(hostel_type,contact_no,name,address,worden_contact,worden_name,worden_address)
   VALUES('$hostel_type', '$contact_no', '$name', '$address', '$worden_contact', '$worden_name', '$worden_address')");
   

   if($query)
   {
   echo "<script>alert('  Record Insert successfully........!');
   window.location='add_hostel.php';
   </script>";
   
   }

  }

?>
<!-- insert record end -->

<!-- delete  start -->
<?php

 if (isset($_GET['delete']))
   {
        $id=$_GET['delete'];
        $query=mysqli_query($con,"DELETE FROM hostel WHERE id='$id'");
        if($query)
        {
        echo "<script>alert('  Record Delete successfully........!');
        window.location='add_hostel.php';
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
                <i class="fa fa-table"></i> &nbsp;ADD HOSTEL</div>
                <div class="card-body">
  <form action="" method="post" enctype="multipart/form-data">

                      
                      
                      
                      <div class="form-group row">
                      <div class="col-md-2">
                              <label>Hostel Type:</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="hostel_type">
                             <option value="NA">NA</option>
                             <option value="Boys">Boys</option>
                             <option value="Girls">Girls</option>  
                          </select>
                         
                        </div>
                     



                          <div class="col-md-2">
                              <label>Hostel Contact No:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="contact_no" class="form-control" placeholder="Hostel Contact Number">
                         
                        </div>
                      </div>
                      


                          <div class="form-group row">
                          <div class="col-md-2">
                              <label>Hostel Name:</label>
                          </div>
                          <div class="col-md-10">
                           <input type="text" name="name"  class="form-control" placeholder="Enter Full Name">
                         
                        </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-2">
                              <label>Hostel Address :</label>
                          </div>
                          <div class="col-md-10">
                           <textarea class="form-control" name="address" placeholder="Enter Address" cols="2" rows="0"></textarea>
                         
                        </div>
                      </div>
                        <div class="form-group row">
                        <div class="col-md-2">
                              <label>Worden Contact No:</label>
                          </div>
                          <div class="col-md-10">
                           <input type="text" name="worden_contact"  class="form-control" placeholder="Enter Contact Number">
                         
                        </div>
                      </div>



                  

                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Worden Name:</label>
                          </div>
                          <div class="col-md-10">
                           <input type="text"  name="worden_name" class="form-control" placeholder="Worden Name">
                         
                        </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Worden Address :</label>
                          </div>
                          <div class="col-md-10">
                           <textarea class="form-control" name="worden_address" placeholder="Worden Address" cols="2" rows="0"></textarea>
                         
                        </div>
                      </div>


            <div class="row">
              <div class="col-md-12" align="center">
               <button type="submit" name="submit" class="btn btn-primary" style="width:150px"><i class="fa fa-save">&nbsp;</i>Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
            

               

               
              </div>
            </div>
    
            


</div>
</div>
<br><br>      
      

<div class="card mb-3">
        <div class="card-body">
          <h5>HOSTEL LIST</h5><hr>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Hostel Type</th>
                  <th>Hostel Contact</th>
                  <th>Hostel Name</th>
                  <th>Hostel Address</th>
                  <th>Worden Contact</th>
                  <th>Worden Name</th>
                  <th>Worden Address</th>
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
        $sql=mysqli_query($con,"SELECT * FROM hostel ORDER BY id desc");
                 while($row=mysqli_fetch_array($sql))
                 {                                  
                  ?>   
                <tr>
                  <td><?php echo $row['hostel_type']; ?></td>
                  <td><?php echo $row['contact_no']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['address']; ?></td>
                  <td><?php echo $row['worden_contact']; ?></td>
                  <td><?php echo $row['worden_name']; ?></td>
                  <td><?php echo $row['worden_address']; ?></td>
                 <td><a href="edit_hostel.php?edit=<?php echo $row["id"]; ?>"
              class="fa fa-edit edit"><u></u></a>&nbsp;&nbsp;

              <a href="add_hostel.php?delete=<?php echo $row["id"]; ?>"  onclick="return confirm('Are You Sure for delete')" class="fa fa-trash-o del"><u></u></a></td>
                </tr>
<?php } ?>

               
              </tbody>

            </table>
          <!-- <form action="excel/event_excel.php">
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





