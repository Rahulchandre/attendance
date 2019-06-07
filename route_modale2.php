
<!-- ADD Data -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                   
                    <center><h4 class="modal-title" id="myModalLabel">Add New Route</h4></center>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel"></h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="post" id="insert_form">
    
     <span id="error"></span>
     <div class="table-responsive">
     <table class="table table-bordered" id="item_table">
      <tr>
       <th>Route_name</th>
       <th>vehicle_<br>code</th>
       <th>stop_type</th>
       <th>Pik-Up<br>Time</th>
       <th>Drop <br>Time</th>
       <th>Fees</th>
      
       
       <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button></th>
      </tr>
     </table>
     </div>
     <div align="center">
      <input type="submit" name="submit" class="btn btn-info" value="Insert" />
     </div>
    </div>
   </form>
                </div>
				
            </div>
        </div>
    </div>



    <!-- Edit -->
    
    

    

<?php
$connect = new PDO("mysql:host=localhost;dbname=db_school", "root", "");
function fill_unit_select_box1($connect)
{ 
 $output = '';
 $query = "SELECT * FROM vehicle_details ORDER BY vehicle_code ASC";
 $statement = $connect->prepare($query);
 $statement->execute();





 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output .= '<option value="'.$row["vehicle_code"].'">'.$row["vehicle_code"].'</option>';
 }
 return $output;
}

?>

<?php


$connect = new PDO("mysql:host=localhost;dbname=db_school", "root", "");
function fill_unit_select_box2($connect)
{ 
 $output = '';
 $query = "SELECT * FROM stoppage ORDER BY stop_name ASC";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output .= '<option value="'.$row["stop_name"].'">'.$row["stop_name"].'</option>';
 }
 return $output;
}

?>




    <script>

$(document).ready(function(){
 
 $(document).on('click', '.add', function(){
  var html = '';
  html += '<tr>';
  html += '<td><input type="text" name="route_name[]" class="form-control route_name" /></td>';
  html += '<td><select name="vehicle_code[]" class="form-control vehicle_code"><option value="">Select Unit</option><?php echo fill_unit_select_box1($connect); ?></select></td>';
  html += '<td><select name="stop_type[]" class="form-control stop_type"><option value="">Select Unit</option><?php echo fill_unit_select_box2($connect); ?></select></td>';

  html += '<td><input type="time" name="pick_up_time[]" class="form-control pick_up_time" /></td>';

  html += '<td><input type="time" name="drop_time[]" class="form-control drop_time" /></td>';
  html += '<td><input type="text" name="fees[]" class="form-control fees" /></td>';

  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
  $('#item_table').append(html);
 });
 
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });
 
 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  var error = '';
  $('.route_name').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Name at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.vehicle_code').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Quantity at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });

  $('.stop_type').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Quantity at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });

  $('.pick_up_time').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Quantity at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });

  $('.drop_time').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Quantity at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });

  $('.fees').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Quantity at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  
  
  var form_data = $(this).serialize();
  if(error == '')
  {
   $.ajax({
    url:"route_details_insert_operation.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     if(data == 'ok')
     {
      $('#item_table').find("tr:gt(0)").remove();
      $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
      
     }
    }
   });
  }
  else
  {
   $('#error').html('<div class="alert alert-danger">'+error+'</div>');
  }
 });
 
});
</script>