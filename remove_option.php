<!-- Connection code start -->
<?php
include('header.php');
include('sidebar.php');
include('footer.php');
include('db.php');
 ?>
<!-- delete  start -->
<?php

 if (isset($_GET['delete1']))
   {
        $id=$_GET['delete1'];
        $sql1=mysqli_query($con,"DELETE FROM class WHERE id = '$id'");
   }    

 if (isset($_GET['delete2']))
   {
        $id=$_GET['delete2'];
        $sql2=mysqli_query($con,"DELETE FROM profession WHERE id = '$id'");
   } 


    if (isset($_GET['delete3']))
   {
        $id=$_GET['delete3'];
        $sql3=mysqli_query($con,"DELETE FROM route WHERE id = '$id'");
   } 


    if (isset($_GET['delete4']))
   {
        $id=$_GET['delete4'];
        $sql4=mysqli_query($con,"DELETE FROM vehicle WHERE id = '$id'");
   } 

   if (isset($_GET['delete5']))
   {
        $id=$_GET['delete5'];
        $sql4=mysqli_query($con,"DELETE FROM division WHERE id = '$id'");
   } 

?>


<!-- table start -->
<div class="content-wrapper">
<div class="container-fluid">
  <div class="row">
            <div class="col-md-3">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-table"></i> &nbsp;REMOVE STUDENT CLASS</div>
                <div class="card-body">

          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Class</th>
                  <th>Action</th>

                </tr>
              </thead>
            <tbody>

    <?php 
        $sql=mysqli_query($con,"SELECT * FROM  class ORDER BY id desc");
            while($row=mysqli_fetch_array($sql))
            {                                  
    ?>  
            <tr>
                <td><?php echo $row['class']; ?></td>
            <td><a href="remove_option.php?delete1=<?php echo $row["id"];?>" class="fa fa-trash-o del"><u></u></a></td>
                </tr><?php } ?>
            </tbody>
          </table>
          </div></div></div></div>






          


          <div class="col-md-3">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-table"></i> &nbsp;REMOVE STUDENT DIVISION</div>
                <div class="card-body">

          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Division</th>
                  <th>Action</th>

                </tr>
              </thead>
            <tbody>

    <?php 
        $sql=mysqli_query($con,"SELECT * FROM  division ORDER BY id desc");
            while($row=mysqli_fetch_array($sql))
            {                                  
    ?>  
            <tr>
                <td><?php echo $row['division']; ?></td>
            <td><a href="remove_option.php?delete5=<?php echo $row["id"];?>" class="fa fa-trash-o del"><u></u></a></td>
                </tr><?php } ?>
            </tbody>
          </table>
          </div></div></div></div>




                      <div class="col-md-3">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-table"></i> &nbsp; DELETE PROFESSION</div>
                <div class="card-body">

          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Profession</th>
                  <th>Action</th>

                </tr>
              </thead>
            <tbody>

    <?php 
        $sql=mysqli_query($con,"SELECT * FROM  profession ORDER BY id desc");
            while($row=mysqli_fetch_array($sql))
            {                                  
    ?>  
            <tr>
                <td><?php echo $row['profession']; ?></td>
            <td><a href="remove_option.php?delete2=<?php echo $row["id"];?>" class="fa fa-trash-o del"><u></u></a></td>
                </tr><?php } ?>
            </tbody>
          </table>
          </div></div></div></div>


                      <div class="col-md-3">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-table"></i> &nbsp;REMOVE VEHICLE ROUTE</div>
                <div class="card-body">

          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Route</th>
                  <th>Action</th>

                </tr>
              </thead>
            <tbody>

    <?php 
        $sql=mysqli_query($con,"SELECT * FROM  route ORDER BY id desc");
            while($row=mysqli_fetch_array($sql))
            {                                  
    ?>  
            <tr>
                <td><?php echo $row['route']; ?></td>
            <td><a href="remove_option.php?delete3=<?php echo $row["id"];?>" class="fa fa-trash-o del"><u></u></a></td>
                </tr><?php } ?>
            </tbody>
          </table>
          </div></div></div></div>


                      <div class="col-md-3">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-table"></i> &nbsp;REMOVE VEHICLE TYPE</div>
                <div class="card-body">

          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Vehicle</th>
                  <th>Action</th>

                </tr>
              </thead>
            <tbody>

    <?php 
        $sql=mysqli_query($con,"SELECT * FROM  vehicle ORDER BY id desc");
            while($row=mysqli_fetch_array($sql))
            {                                  
    ?>  
            <tr>
                <td><?php echo $row['vehicle']; ?></td>
            <td><a href="remove_option.php?delete4=<?php echo $row["id"];?>" class="fa fa-trash-o del"><u></u></a></td>
                </tr><?php } ?>
            </tbody>
          </table>
          </div></div></div></div>









 
</div>
</div>
</div>