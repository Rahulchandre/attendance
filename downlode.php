<?php
include('db.php');
//$path='/opt/lampp/htdocs/admin/uploads';


if(isset($_GET["id"])){
    $file = $_GET["id"];
   //$path = $_GET["path"];
    //$fullfile = $path.$file;

    header("Content-Type: application/octet-stream");
    header("Content-Disposition: attachment; filename=" . Urlencode($file));   
    header("Content-Type: application/force-download");
    header("Content-Type: application/octet-stream");
    header("Content-Type: application/download");
    header("Content-Description: File Transfer");            
    $fp = fopen($file,'r');
      while ($line = fgets($fp)) {
      echo($line);
    }
    fclose($fp);
  }

?>