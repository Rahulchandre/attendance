<!-- Connection code start -->
<?php
include('header.php');
include('sidebar.php');
include('footer.php');
include('db.php');

?>
<?php


if(isset($_POST["submit"]))
{
$target_file = $_FILES["photo"]["name"];
$tempfile=$_FILES["photo"]["tmp_name"];
$folder="image/".$target_file;
//move_uploaded_file($tempfile,$folder);

$title=$_POST["title"];
$date_form=$_POST["date_form"];
$date_to=$_POST["date_to"];
//$target_dir = "image/";

$uploadOk = 1;
if (move_uploaded_file($_FILES["photo"]["tmp_name"], $folder)) {

} else {
echo "Sorry, there was an error uploading your file.";
}
$photo=$target_file;


$description=$_POST["description"];




//-- INSERT DATA QUERY--//
$query=mysqli_query($con,"INSERT INTO notice(title, date_form, date_to,
photo, description)VALUES
('$title','$date_form','$date_to','$photo','$description')");
if($query)
{
echo "<script>alert('  Insert successfully........!');
window.location='notice.php';
</script>";

}
}

?> 


<!-- form code start -->
<div class="content-wrapper">
<div class="container-fluid">
<div class="row" >
<div class="col-md-1"> </div>
<div class="col-md-10">
<div class="card mb-1">
<div class="card-header">
<i class="fa fa-table"></i> &nbsp;<b>NOTICE FORM</b></div>
<div class="card-body">
<form action="" method="post" enctype="multipart/form-data">

<div class="form-group row">
<div class="col-md-2">
<label>Title :</label>
</div>
<div class="col-md-10">
<input type="text" name="title" class="form-control" placeholder="Enter Title">

</div>
</div>


<div class="form-group row">
<div class="col-md-2">
<label>From Date :</label>
</div>
<div class="col-md-4">
<input type="date" name="date_form" class="form-control" placeholder="Start Date">

</div>

<div class="col-md-2">
<label>To Date :</label>
</div>
<div class="col-md-4">
<input type="date" name="date_to" class="form-control" placeholder="End Date">

</div>
</div>

<div class="form-group row">
<div class="col-md-2">
<label>Photo:</label>
</div>
<div class="col-md-10">
<input type="file" name="photo" value="upload" accept=".doc, .docx, .jpg, .pdf" class="form-control" placeholder="">

</div>
</div>




<div class="form-group row">
<div class="col-md-2">
<label>Description:</label>
</div>
<div class="col-md-10">
<textarea type="text" name="description" class="form-control" placeholder="Enter Description">
</textarea>
</div>
</div>

<div class="row">
<div class="col-md-12" align="center">
<button type="submit" name="submit" class="btn btn-primary" style="width:120px"><i class="fa fa-save">&nbsp;</i>Submit</button>
</div>
</div>

</form>
</div>
</div>



<div class="card mb-3" style="margin-top: 31px">
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
           
  
 
              <tbody>

            <?php 

        $sql=mysqli_query($con,"SELECT * FROM  notice ORDER BY notice_id asc");

            
        
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

              <a href="notice.php?deleteid=<?php echo $row["notice_id"]; ?>" class="fa fa-trash-o del"><u></u></a>&nbsp;

              <a href="downlode.php?id=<?php echo $row['photo']; ?>"
              class="fa fa-download "><u></u></a>&nbsp;&nbsp;

             
              
              </td>

            

                </tr>
<?php } ?>

               
              </tbody>

            </table>
     
          </div>
        </div><!--close card-body-->
      </div>
    </div>
  </div><!-- /col-md-3-->
</div><!-- wrapper class close-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
function attachFile()
{
if($('.coupon_question').is(":checked"))
{
$("#doc").show();
$("#radioBtn1").hide();
}
else
{
$("#doc").hide();
$("#radioBtn1").show();
} 
}

</script>






<!--Notice List -->


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




<!-- delete  start -->



<?php 
 
if(!$con)
{
  die(mysqli_error());
}


$sql = "select * from notice";

$rs = mysqli_query($con, $sql);


	if(isset($_GET['deleteid']))
	{
    $selectSql = "select * from notice where notice_id = ".$_GET['deleteid'];
    if($selectSql)
{
echo "<script>alert('  Delete Record successfully........!');
window.location='notice.php';
</script>";

}
 
    $rsSelect = mysqli_query($con,$selectSql);
    
		$getRow = mysqli_fetch_assoc($rsSelect);
		
		$getIamgeName = $getRow['photo'];
    
		$createDeletePath = "image/".$getIamgeName;
		
		if(unlink($createDeletePath))
		{
      $deleteSql = "delete from notice where notice_id = ".$getRow['notice_id'];
    
			$rsDelete = mysqli_query($con, $deleteSql);	
			
			if($rsDelete)
			{
				
				exit();
			}
		}
		else
		{
			$errorMsg = "Unable to delete Image";
		}
		
	}
 
	
?>
 