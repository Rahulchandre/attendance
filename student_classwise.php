
 <?php
include('header.php');
include('sidebar.php');
include('footer.php');
include('db.php');
 ?>



<!-- form code start -->
<div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3"> </div>
            <div class="col-md-6">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-table"></i> &nbsp;STUDENT CLASSWISE</div>
                <div class="card-body">
  <form action="" method="post">
    <div class="form-group row">
                          <div class="col-md-3">
                              <label>Class :</label>
                          </div>
                          <div class="col-md-9">
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
                      </div>

                        <div class="form-group row">
                          <div class="col-md-3">
                              <label>Division :</label>
                          </div>
                          <div class="col-md-9">
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



</form>
</div>
</div>

</div><!--close card-body-->
        </div>
      <div class="card mb-3">
        <div class="card-body">
          <h5>CLASSWISE STUDENT LIST</h5><hr>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable22" width="100%" cellspacing="0">
              <thead>
                <tr>
                
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Gender</th>
                  <th>Class</th>
                  <th>Division</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div><!--close card-body-->
      </div>
      </div><!-- /col-md-3-->
      </div><!-- wrapper class close-->