 <?php
include('header.php');
include('sidebar.php');
include('footer.php');
include('db.php');
 ?>


<?php

 if (isset($_GET['delete1']))
   {
        $id=$_GET['delete1'];
        $sql1=mysqli_query($con,"DELETE FROM class WHERE id = '$id'");
   }    


   if (isset($_GET['delete5']))
   {
        $id=$_GET['delete5'];
        $sql4=mysqli_query($con,"DELETE FROM division WHERE id = '$id'");
   } 

?>
<!-- form code start -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 offset-md-4">
      <div class="alert alert-success" id="div3" style="display:none;" data-dismiss="alert">
            <strong>Record Add Successfully..!</strong>
        </div>
        </div>
         </div>
      <div class="row">
     
            <div class="col-md-6 addclassdiv">
            <div class="card mb-6"style="margin: 53px">
              <div class="card-header">
                <i class="fa fa-table"></i> &nbsp;ADD CLASS</div>
                <div class="card-body">
  <form action="" method="post">
  <div class="form-group row">
                      
                          <div class="col-md-12">
                           <input type="text" class="form-control" id="class" placeholder="Enter Full Name">
                         
                        </div>
                      </div>

 
            <div class="row">
              <div class="col-md-12" align="center">
               <button type="button"  class="btn btn-info" id="send1" ><i class="fa fa-save">&nbsp;</i>ADD</button>
              </div>
            </div>


</form>
</div>
</div>
</div>

<div class="col-md-6 addclassdiv">
            <div class="card mb-6"style="margin: 53px">
              <div class="card-header">
                <i class="fa fa-table"></i> &nbsp;ADD DIVISION</div>
                <div class="card-body">
  <form action="" method="post">
  <div class="form-group row">
                      
                          <div class="col-md-12">
                           <input type="text" class="form-control" id="division" placeholder="Enter Full Name">
                         
                        </div>
                      </div>

 
            <div class="row">
              <div class="col-md-12" align="center">
               <button type="button"  class="btn btn-info" id="send5" ><i class="fa fa-save">&nbsp;</i>ADD</button>
              </div>
            </div>


</form>
</div>
</div>
</div>


<br><br><br><br>
<div class="col-md-6 addclassdiv">
            <div class="card mb-6" >
              <div class="card-header">
                <i class="fa fa-table"></i> &nbsp;REMOVE CLASS</div>
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
            <td>
            <a href="add_option.php?delete1=<?php echo $row["id"];?>" class="fa fa-trash-o del"><u></u></a>
            <!-- <a href="add_option.php?delete1=<?php echo $row["id"];?>" class="fa fa-edit edit"><u></u></a> -->
            
            </td>
            
                </tr><?php } ?>
            </tbody>
          </table>
          </div></div></div></div>



          <div class="col-md-6  addclassdiv">
            <div class="card mb-6">
              <div class="card-header">
                <i class="fa fa-table"></i> &nbsp;REMOVE DIVISION</div>
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
            <td><a href="add_option.php?delete5=<?php echo $row["id"];?>" class="fa fa-trash-o del"><u></u></a></td>
                </tr><?php } ?>
            </tbody>
          </table>
          </div></div></div></div>






</div><!-- /col-md-3-->
      </div><!-- wrapper class close-->

<!-- START INSERT DATA AJAX CALL -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#div3").fadeIn();
  
    $("#div3").fadeOut(4000);
  });
});
</script>
<script>
$(document).ready(function()
{
   $("#send1").click(function()
   {
    var class1 = $('#class').val();

    $.ajax({
       
        url:'insert_option.php',
        dataType:'text',
        type:'post',
        data:{callName:"insertClass",class:class1},
 //send callname insertclass and feildname and var name another page and check post call      
        success:function(response)
                  {
               
                  $('#class').val("");
                  }
        })

  });



  $("#send5").click(function()
   {
    var division1 = $('#division').val();

    $.ajax({
       
        url:'insert_option.php',
        dataType:'text',
        type:'post',
        data:{callName:"insertDivision",division:division1},
       
        success:function(response)
                  {
               
                 $('#division').val("");
                  }
        })

  });


  
      
});

</script> 





     