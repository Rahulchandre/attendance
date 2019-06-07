<?php
include('header.php');
include('sidebar.php');
include('footer.php');
include('db.php');
?>
<!-- php form for import student form -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- form code start -->
<div class="content-wrapper">
<div class="container-fluid">
<div class="row" id="bottomForm">
<div class="col-md-3"> </div>
<div class="col-md-6">
<div class="card mb-3">
<div class="card-header">
<i class="fa fa-table"></i> &nbsp;Import Staff</div>
<div class="card-body">
<div class="form-group row">
<div class="col-md-3">
<label>Upload Data :</label>
</div>
<div class="col-md-9">

</div>
</div>
<form action="staff_imp.php" id="upload_csv" method="post" enctype="multipart/form-data">

<input type="file" name="myfile" class="form-control"><br />
<button type="submit" name="upload" id="upload" class="btn btn-primary" ><i class="fa fa-save">&nbsp;</i>Upload</button>
<button type="submit" class="btn btn-danger" ><i class="fa fa-window-close">&nbsp;</i>Cancel</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div> <!-- /col-md-6-->
<div class="col-md-3"> </div>   
</div><!-- /col-md-3-->
</div><!-- wrapper class close-->