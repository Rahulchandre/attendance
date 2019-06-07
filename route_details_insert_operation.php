<?php
//insert.php;
include('db.php');
if(isset($_POST["route_name"]))
{
 $connect = new PDO("mysql:host=localhost;dbname=db_school", "root", "");
 
 for($count = 0; $count < count($_POST["route_name"]); $count++)
 {  
  $query = "INSERT INTO route_details(route_name, vehicle_code, stop_type, pick_up_time, drop_time, fees) VALUES ( :route_name, :vehicle_code, :stop_type, :pick_up_time, :drop_time, :fees)";
  
  $statement = $connect->prepare($query);
 
  $statement->execute(
   array(
   

    
    ':route_name'  => $_POST["route_name"][$count], 
    ':vehicle_code' => $_POST["vehicle_code"][$count], 
    ':stop_type'  => $_POST["stop_type"][$count],
    ':pick_up_time' => $_POST["pick_up_time"][$count],
    ':drop_time'  => $_POST["drop_time"][$count], 
    ':fees'  => $_POST["fees"][$count], 
    
    
   )
   

  
  );
  
 }
 $result = $statement->fetchAll();
 if(isset($result))
 {
  echo 'ok';
 }
}

?>
