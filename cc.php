
<?php
 
$conn = mysqli_connect('localhost','root','','db_school');
 
	if(!$conn)
	{
		die(mysqli_error());
	}
	
	
	$sql = "select * from images";
    $rs = mysqli_query($conn, $sql);
    
    ?>