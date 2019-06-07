
<?php  
 if(isset($_POST["staff_id"]))  
 {  
      $output = '';  
      $con=mysqli_connect("localhost","root","","db_school");
      $sql = "SELECT * FROM staff_reg WHERE staff_reg_id = '".$_POST["staff_id"]."'";  
      $result = mysqli_query($con, $sql);  
      
      
      while($row = mysqli_fetch_array($result))  
      { ?> 
    
      <div class="table-responsive" >  
           <table class="table table-bordered">
        
            <center>
            <?php echo "<img style='width:100px;height:100px' src='image/".$row['photo']."'>";?>
            </center><br>

            
            <tr>
               <div>
                    <td  style="width:15%;"><b> <label>Full name</label></td>
                    <td  style="width:22%;"><?php echo $row["full_name"];?></td>
                    <td  style="width:15%;"><b> <label>Mobile No</label></td>
                    <td  style="width:22%;"><?php echo $row["mobile_no"];?></td>
               </div>
            </tr>
           

            <tr>
               <div>
                     <td  style="width:15%;"><b> <label>Date of Birth</label></td>
                     <td  style="width:15%;"><?php echo $row["dob"];?></td>
                     <td  style="width:15%;"><b><label>Gender</label></td>
                     <td  style="width:15%;"><?php echo $row["gender"];?></td>
                </div>
            </tr>
          
         
   
            <tr>
            <td style="width:15%;"><b><label>Staff Tpye</label></td>
            <td style="width:15%;"><?php echo $row["staff_type"];?></td>
            <td style="width:15%;"><b> <label>Designation</label></td>
            <td style="width:15%;"><?php echo $row["designation"];?></td>
            </tr>



            <tr>
            <td style="width:15%;"><b><label>Address</label></td>
            <td style="width:15%;"><?php echo $row["address"];?></td>
            <td style="width:15%;"><b><label>Joining Date</label></td>
            <td style="width:15%;"><?php echo $row["joining_date"];?></td>
            </tr>
            </tr>


            <tr>
            <td style="width:15%;">  <b><label>Specification</label></td>
            <td style="width:15%;"><?php echo $row["specification"];?></td>
            <td style="width:15%;"><b> <label>Qualification</label></td>
            <td style="width:15%;"><?php echo $row["qualification"];?></td>
            </tr>

            <tr>
            <td style="width:15%;"><b> <label>Previous Employment</label></td>
            <td style="width:15%;"><?php echo $row["prev_emp"];?></td>

            <td style="width:15%;"> <b><label>Previous Position</label></td>
            <td style="width:15%;"><?php echo $row["prev_position"];?></td>
            </tr>

            <tr>
            <td style="width:15%;"><b><label>Previous Salary</label></td>
            <td style="width:15%;"><?php echo $row["prev_salary"];?></td>

            <td style="width:15%;"><b><label>Email</label></td>
            <td style="width:15%;"><?php echo $row["email"];?></td>
            </tr>

            </table>
    </div>
    
    
    <?php
 }  
}
 ?>
