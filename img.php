<!-- Connection code start -->
<?php
include('header.php');
include('sidebar.php');
include('footer.php');
include('cc.php');

?>
<?php


if(isset($_POST["submit"]))
{
$target_file = $_FILES["photo"]["name"];
$tempfile=$_FILES["photo"]["tmp_name"];
$folder="image/".$target_file;
//move_uploaded_file($tempfile,$folder);


//$target_dir = "image/";

$uploadOk = 1;
if (move_uploaded_file($_FILES["photo"]["tmp_name"], $folder)) {

} else {
echo "Sorry, there was an error uploading your file.";
}
$photo=$target_file;







//-- INSERT DATA QUERY--//
$query=mysqli_query($con,"INSERT INTO images(photo)VALUES
('$photo')");
if($query)
{
echo "<script>alert('  Insert successfully........!');
window.location='img.php';
</script>";

}
}

?> 









  








  
  <?php



//  if (isset($_GET['delete']))
//    {
//         $id=$_GET['delete'];
//         $sql=mysqli_query($con,"DELETE FROM images WHERE id='$id'");
//    }    



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
<label>Photo:</label>
</div>
<div class="col-md-10">
<input type="file" name="photo" value="upload" accept=".doc, .docx, .jpg, .pdf" class="form-control" placeholder="">

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
                 
                  <th>Document Type</th>
                
                  <th>Action</th>
                   
                </tr>
              </thead>
           
  
 
              <tbody>

            <?php 

        $sql=mysqli_query($con,"SELECT * FROM  images ORDER BY id asc");

            
        
                 while($row=mysqli_fetch_array($sql))
                 {
                
                  ?>   
                <tr>
                 
                 <td>
                 <?php echo "<img style='width:50px;height:50px' src='image/".$row['photo']."'>"; ?></td>

                  
                 <td><a href="edit_notice.php?edit=<?php echo $row["notice_id"]; ?>"
              class="fa fa-edit edit"><u></u></a>&nbsp;&nbsp;

              <a href="img.php?delete=<?php echo $row["id"]; ?>"  onclick="return confirm
              ('Are You Sure for delete')" class="fa fa-trash-o del"><u></u></a>&nbsp;
              <a href="?deleteid=<?php echo $row["id"]?>" class="btn btn-primary">Delete</a>

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
		if(isset($errorMsg))
		{
		?>
			<div class="alert alert-danger">
				<?php 
					echo $errorMsg;
					unset($errorMsg);
				?>
			</div>
		<?php 
		}
		?>
		
		<?php 
		if(isset($_GET['success']) && $_GET['success'] == 'true')
		{
		?>
			<div class="alert alert-success">
				<?php 
					echo "Images has been deleted sucessfully";
				?>
			</div>
		<?php 
		}
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




<!-- delete  start -->
<?php 
if(isset($_GET['deleteid']))
	{
		$selectSql = "select * from images where id = ".$_GET['deleteid'];
		$rsSelect = mysqli_query($con,$selectSql);
		$getRow = mysqli_fetch_assoc($rsSelect);
		
		$getIamgeName = $getRow['photo'];
		
    $createDeletePath = "uploads/".$getIamgeName;
    
		
		if(unlink($createDeletePath))
		{
			$deleteSql = "delete from images where id = ".$getRow['id'];
			$rsDelete = mysqli_query($con, $deleteSql);	
			
			if($rsDelete)
			{
				header('location:img.php?success=true');
				exit();
			}
		}
		else
		{
			$errorMsg = "Unable to delete Image";
		}
		
	}
?>


