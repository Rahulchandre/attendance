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
$id = $_GET['edit'];

$query = mysqli_query($con,"SELECT * FROM hostel WHERE id='$id'") or die(mysqli_error($query));

if ($row = mysqli_fetch_array($query)) 
{

$hostel_type=$row["hostel_type"];
$contact_no=$row["contact_no"];
$name=$row["name"];
$address=$row["address"];
$worden_contact=$row["worden_contact"];
$worden_name=$row["worden_name"];
$worden_address=$row["worden_address"];


}

}

if (isset($_POST['update']))
  {
    $hostel_type=$_POST["hostel_type"];
    $contact_no=$_POST["contact_no"];
    $name=$_POST["name"];
    $address=$_POST["address"];
    $worden_contact=$_POST["worden_contact"];
    $worden_name=$_POST["worden_name"];
    $worden_address=$_POST["worden_address"];

$id=$_GET['edit'];
        
      
      $query=mysqli_query($con,"UPDATE hostel SET
       hostel_type = '$hostel_type', contact_no='$contact_no',
       name='$name', address = '$address', worden_contact = '$worden_contact', worden_name = '$worden_name',worden_address = '$worden_address' WHERE id ='$id'");

if($query)
        {
        echo "<script>alert(' Record Update successfully........!');
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
                          <select class="form-control dropdown" name="hostel_type" value="<?php echo $hostel_type;?>">
                             <option value="NA">NA</option>
                             <option value="Boys">Boys</option>
                             <option value="Girls">Girls</option>  
                          </select>
                         
                        </div>
                     



                          <div class="col-md-2">
                              <label>Hostel Contact No:</label>
                          </div>
                          <div class="col-md-4">
                           <input type="text" name="contact_no" class="form-control" placeholder="Hostel Contact Number" value="<?php echo $contact_no;?>">
                         
                        </div>
                      </div>
                      


                          <div class="form-group row">
                          <div class="col-md-2">
                              <label>Hostel Name:</label>
                          </div>
                          <div class="col-md-10">
                           <input type="text" name="name"  class="form-control" placeholder="Enter Full Name" value="<?php echo $name;?>">
                         
                        </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-2">
                              <label>Hostel Address :</label>
                          </div>
                          <div class="col-md-10">
                           <textarea class="form-control" name="address" placeholder="Enter Address" cols="2" rows="0" value="<?php echo $address;?>"></textarea>
                         
                        </div>
                      </div>
                        <div class="form-group row">
                        <div class="col-md-2">
                              <label>Worden Contact No:</label>
                          </div>
                          <div class="col-md-10">
                           <input type="text" name="worden_contact"  class="form-control" placeholder="Enter Contact Number" value="<?php echo $worden_contact;?>">
                         
                        </div>
                      </div>



                  

                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Worden Name:</label>
                          </div>
                          <div class="col-md-10">
                           <input type="text"  name="worden_name" class="form-control" placeholder="Worden Name" value="<?php echo $worden_name;?>">
                         
                        </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-md-2">
                              <label>Worden Address :</label>
                          </div>
                          <div class="col-md-10">
                           <textarea class="form-control" name="worden_address" placeholder="Worden Address" cols="2" rows="0" value="<?php echo $worden_address;?>"></textarea>
                         
                        </div>
                      </div>


            <div class="row">
              <div class="col-md-12" align="center">
               <button type="submit" name="update" class="btn btn-primary" style="width:150px"><i class="fa fa-save">&nbsp;</i>Update</button>&nbsp;&nbsp;&nbsp;&nbsp;
            

               

               
              </div>
            </div>

</div>
</div>

</div><!--close card-body-->
      </div>
    </div>
  </div><!-- /col-md-3-->
      </div><!-- wrapper class close-->