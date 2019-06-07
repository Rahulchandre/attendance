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

$query = mysqli_query($con,"SELECT * FROM notice WHERE notice_id='$notice_id'") or die(mysqli_error($query));

if ($row = mysqli_fetch_array($query)) 
{

$title=$row['title'];
$date_form=$row['date_form'];
$date_to=$row['date_to'];
$photo=$row['photo'];
$description=$row['description'];



}


}

if (isset($_POST['update']))
  {
    $title=$_POST['title'];
    $date_form=$_POST['date_form'];
    $date_to=$_POST['date_to'];
    // $photo=$_POST['photo'];
    $description=$_POST['description'];
   

    

        $notice_id=$_GET['edit'];
        
      
      $query=mysqli_query($con,"UPDATE notice SET
       title = '$title', date_form = '$date_form', date_to ='$date_to',
       photo ='$photo', description ='$description' WHERE notice_id ='$notice_id'");
        if($query)
        {
        echo "<script>alert('  Notice Updated successfully........!');
        window.location='notice.php';
        </script>";
        
        }
}


?>


<!-- form code start -->
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
<input type="text" name="title" value="<?php echo $title;?>" class="form-control" placeholder="Enter Title">

</div>
</div>


<div class="form-group row">
<div class="col-md-2">
<label>From Date :</label>
</div>
<div class="col-md-4">
<input type="date" name="date_form" value="<?php echo $date_form;?>" class="form-control" placeholder="Start Date">

</div>

<div class="col-md-2">
<label>To Date :</label>
</div>
<div class="col-md-4">
<input type="date" name="date_to" value="<?php echo $date_to;?>" class="form-control" placeholder="End Date">

</div>
</div>

<div class="form-group row">
<div class="col-md-2">
<label>Photo:</label>
</div>
<div class="col-md-10">
<input type="file" name="photo" value="<?php echo $photo;?>" accept=".doc,.docx,.jpg, .pdf" class="form-control" placeholder="">

</div>
</div>




<div class="form-group row">
<div class="col-md-2">
<label>Description:</label>
</div>
<div class="col-md-10">
<textarea type="text" name="description" value="" class="form-control" placeholder="Enter Description"><?php echo $description;?>
</textarea>
</div>
</div>

<div class="row">
<div class="col-md-12" align="center">
<button type="submit" name="update" class="btn btn-primary" style="width:120px"><i class="fa fa-save">&nbsp;</i>Update</button>&nbsp;&nbsp;&nbsp;&nbsp;


</div>
</div>

</form>
</div>
</div>



</div><!--close card-body-->
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