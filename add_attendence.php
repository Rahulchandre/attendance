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
  <form action="" method="post">

  <div class="form-group row">
                          <div class="col-md-2">
                              <label>Date :</label>
                          </div>
                          <div class="col-md-4">
                           <input type="date"  name="date" id="date" class="form-control">
                         
                        </div>


                          <div class="col-md-2">
                              <label>Subject :</label>
                          </div>
                          <div class="col-md-4">
                          <select class="form-control dropdown" name="subject" id="subject" >
                               <option value="0">NA</option>
                               <option value="1">Science</option>
                               <option value="2">English</option>
                               <option value="3">Math</option>
                               
                          </select>
                         
                        </div>


                      </div>




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




</div>
</div>
</div>
</form>
</div><!-- wrapper class close-->
</div><!-- wrapper class close-->

 

<div class="row"> 
  <div class="col-md-8">
  
        <div class="card-body box-shadow">
          <h5>STUDENT LIST</h5><hr>
          <div class="table-responsive">
            <form action="#" method="POST">
            <table class="table table-bordered" id="dataTable22" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Gender</th>
                  <th>Class</th>
                  <th>Division</th>
                  <th>Status</th>
                  <th>Applicant</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
            </form>
          </div>
        </div>
      </div>


   
    <div class="col-md-4">
      <div class="card-body box-shadow">
        <form >
  <h5> TODAY REPORT</h5><hr>
 
<strong>Date &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;:</strong>
<?php
      echo date("d.m.Y") . "<br>";  

?>


<strong>Total Student &nbsp;&nbsp;&nbsp;&nbsp;:</strong>
<?php

$class_id=0;


 $query1=mysqli_query($con,"SELECT count(status) as presentStudent FROM `attendance` WHERE 1");
 while($row=mysqli_fetch_array($query1))
                 { 
      echo $row['presentStudent'];
    

   } 
?> 
<br>
      
  <strong>Present Student :</strong>
<?php

$class_id=0;


 $query2=mysqli_query($con,"SELECT count(status) as presentStudent  FROM attendance WHERE status='1'");
 while($row=mysqli_fetch_array($query2))
                 { 
      echo $row['presentStudent'];
    

   } 
?>







      <br>


      <strong>Absent Student &nbsp;:</strong>
<?php

$class_id=0;


 $query3=mysqli_query($con,"SELECT count(status) as presentStudent  FROM attendance WHERE status='0'");
 while($row=mysqli_fetch_array($query3))
                 { 
      echo $row['presentStudent'];
    

   } 
?>



      <br><br>
      <textarea name="input_sms" class="form-control" cols="37"></textarea><br>
     <center> 
      <input type="submit" class="btn btn-success" value="SAVE ATTENDANCE">
      <input type="submit" class="btn btn-danger" name="send" value="SEND SMS"></center>
</form>
    </div>
  </div>




<script>    

 function classDivisionWise()
{
  var classId = $("#class").val();
  var divisionId = $("#division").val();
  $.ajax({ 
    type: "POST",
    url: "fetch_classwise.php",
    data: {classId:classId,divisionId:divisionId,callName:"classandDivisionWise"},
    dataType:"json",
    success: function(jArray)
    {
      var boiler = '';for(var i=0;i<jArray.length;i++)
      {
        boiler += '<tr><td>'+jArray[i].first_name+'</td>'
        +'<td>'+jArray[i].last_name+'</td>'
        +'<td>'+jArray[i].gender+'</td>'
        +'<td>'+jArray[i].class+'</td>'
        +'<td>'+jArray[i].division+'</td>'

      +'<td>'+'<input type="checkbox" class="hello" value="'+jArray[i].id+'" id="status_'+i+'" onclick="addStudentStatus('+i+')">'+'</td>'

      +'<td>'+'<input type="checkbox" value="'+jArray[i].id+'" id="appl_'+i+'" onclick="addStudentStatus('+i+')">'+'</td>'+'</tr>';
      }
         $("#dataTable22 tbody").html(boiler);},
         error:function(e){   }});
}

function addStudentStatus(i){
  var studId = $("#status_"+i).val();
  var check = $("#status_"+i).is(':checked');
  var appl = $("#appl_"+i).is(':checked');

  $.ajax({ 
    type: "POST",
    url: "fetch_classwise.php",
    data: {studId:studId,status:check,applicant:appl, callName:"addStudStatus"},
    dataType:"text",
    success: function(jArray)
    {
      if($('.hello').is(":checked"))
    {
      Swal.fire({title: 'Present',timer:400});
    }
    else
    {
        Swal.fire({title: 'Absent',timer:400});
    }  
    }

  });
}

</script>


<?php

// $today = date("Y-m-d");
// $sql = "FIRE QUERY";
// $result = mysqli_query($con, $sql);

// if (mysqli_num_rows($result) > 0) {
// // output data of each row
// while($row = mysqli_fetch_array($result)) {

// $pp=$row["mob"];
// echo $pp;
// if(isset($_POST['send'])){
// $msg=$_POST['input_sms'];


// $apiKey = urlencode('zu8MmOYcBgA-UDwXgYOAlFI1xG1lhGC5JIueLwahgV');

// //Message details
// $numbers = array($pp);
// $sender = urlencode('TXTLCL');
// $message = rawurlencode($msg);

// $numbers = implode(',', $numbers);

//  //Prepare data for POST request
// $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

//  //Send the POST request with cURL
// $ch = curl_init('https://api.textlocal.in/send/');
// curl_setopt($ch, CURLOPT_POST, true);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $response = curl_exec($ch);
// curl_close($ch);

// //Process your response here
// echo $response;

// }
// }
// }
?>




