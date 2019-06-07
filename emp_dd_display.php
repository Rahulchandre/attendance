<span style="font-family: Georgia, 'Times New Roman', 'Bitstream Charter', Times, serif;font-size: small"><span style="line-height: 19px"> </span></span><?php
      include "config.php";  // including configuration file
?>
 <html>
 <body>
 <form name="frmdropdown" method="post" action="emp_dd_display.php">
     <center>
            <h2 align="center">Employee Data</h2>
<div>

         
              <select name="empName"> 
               <option value=""> -----------ALL----------- </option> 
            <?php
  
                 $dd_res=mysql_query("Select DISTINCT class from student_reg");
                 while($r=mysql_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
              </select>


     <input type="submit" name="find" value="find"/> 
     <br><br>
  
   <table border="1">
 <tr align="center">
     <th>stud_id </th>      <th>first_name </th>     <th>dob</th>    <th>class</th>    <th>division</th>
 </tr> 
 </div>
 <?php
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
         $des=$_POST["empName"]; 
         if($des=="")  // if ALL is selected in Dropdown box
         { 
             $res=mysql_query("Select * from student_reg");
         }
         else
         { 
            

             $res=mysql_query("Select * from student_reg where class='".$des."'");
            

         }
  
         
         while($r=mysql_fetch_row($res))
         {
                 echo "<tr>";
                 echo "<td align='center'>$r[0]</td>";
                 echo "<td width='200'>$r[2]" . " $r[4]</td>";
                 echo "<td alig='center' width='40'> $r[9]</td>";
                 echo "<td align='center' width='200'>$r[13]</td>";
                 echo "<td width='100' align='center'>$r[14]</td>";
                 echo "</tr>";
        }
    }
?>
  </table>
 </center>
</form>
</body>
</html>