
<?php
include('header.php');
include('sidebar.php');
include('footer.php');
include('db.php');
 ?>

<style type="text/css">
  
    
    .box-shadow{
       margin-left: 15px;
      margin-right: 15px;
        background: #7a9ff32e;
        box-shadow: 14px 9px 12px rgba(0, 0, 0, 0.3);
        padding: 30px;
       height: 350px;
    }

  
</style>

<!-- form code start -->
<div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2"> </div>
            <div class="col-md-8">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-table"></i> &nbsp;ADD ATTENDANCE</div>
                <div class="card-body">
  <form action="" method="post" enctype="multipart/form-data">

    <div class="form-group row">
                          <div class="col-md-2">
                              <label>Class :</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="class" id="class" onchange="classWise();">
                             <option value="0">NA</option>
                               <?php
                                    $sql= mysqli_query($con,"SELECT id,class FROM class");
                                    while ($row = mysqli_fetch_array($sql))
                                    {
                                        
                                    ?>
                                    <option value="<?php echo $row['id']; ?>">
                                    <?php echo $row['class']; ?></option>
                                    <?php       
                                } ?>
                          </select>
                         
                        </div>
              

                          <div class="col-md-2">
                              <label>Division :</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="division" id="division" onchange="classDivisionWise();">
                               <option value="0">NA</option>
                               <?php
                                    $sql= mysqli_query($con,"SELECT id,division FROM division");
                                    while ($row = mysqli_fetch_array($sql))
                                    {
                                        
                                    ?>
                                    <option value="<?php echo $row['id']; ?>">
                                    <?php echo $row['division']; ?></option>
                                    <?php       
                                } ?>
                          </select>
                         
                        </div>
                      </div>

                        <div class="form-group row">
                          <div class="col-md-2">
                              <label>Name</label>
                          </div>
                          <div class="col-md-4">
                           <select id="first_name" name="first_name" class="form-control">
                            <option value="">Name</option>
     <?php
      $query2 = $con->query("select * from student") or die(mysqli_error());
             while($row = mysqli_fetch_assoc($query2)){ ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['first_name']; ?></option>
       <?php } ?>
    </select>
                         
                        </div>
                      </div>


                       <div class="form-group row">
                          <div class="col-md-2">
                              <label>From Date :</label>
                          </div>
                          <div class="col-md-4">
                          <input type="date" class="form-control" name="from_date">
                         
                        </div>
              

                          <div class="col-md-2">
                              <label>To Date :</label>
                          </div>
                          <div class="col-md-4">
                          <input type="date" class="form-control" name="to_date">
                         
                        </div>
                      </div>
       <div class="row" align="middle">              
  <input type="submit" class="btn btn-success" name="submit" value="View" align="center">
      </div>


</div>
</div>
</div>
</form>
</div><!-- wrapper class close-->
</div><!-- wrapper class close-->

 <div class="row"> 
  <div class="col-md-12">
  
        <div class="card-body box-shadow">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Status</th>
                  
                </tr>
              </thead>
           

            <!-- TD START-->

              <tbody>
 <?php 

   if(isset($_POST['submit'])){


    $class=$_POST['class'];
    $division=$_POST['division'];
    $first_name=$_POST['first_name'];
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];

  echo"<h5>&nbsp;Student Name : <strong>$first_name</strong><h5>";


        $sql=mysqli_query($con,"SELECT s.first_name,s.id,am.status,am.today_date From attendance_monthly am JOIN student s ON s.id=am.student_id WHERE s.first_name='$first_name' and (am.today_date BETWEEN '$from_date' and '$to_date')");
                 while($row=mysqli_fetch_array($sql))
                 {                                  
    ?>                     
 
                <tr>
                  <td><?php echo $row['today_date']; ?></td>
                  <td><?php echo $row['status']; ?></td>
            
                 
                </tr>

<?php } } ?>
               
    </tbody>

  </table>
  </div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

 function classDivisionWise()
{
  var classId = $("#class").val();
  var divisionId = $("#division").val();
  $.ajax({ 
    type: "POST",
    url: "fetch_classwise.php",
    data: {classId:classId,divisionId:divisionId,callName:"classandDivisionWiseName"},
    dataType:"json",
    success: function(jArray)
    {
      var boiler = '';for(var i=0;i<jArray.length;i++)
      {
        boiler += '<option>'+jArray[i].first_name+'</option>';
      }
         $("#first_name").html(boiler);},
    
    });
}
</script>