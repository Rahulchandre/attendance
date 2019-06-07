<?php
include('header.php');
include('sidebar.php');
include('footer.php');
include('db.php');
 ?>

<!-- START MAIN CODE HERE... -->

    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"> </div>
                    <div class="col-md-10">
                        <div class="card mb-1">
                            <div class="card-header">
                                <i class="fa fa-table"></i> &nbsp;ROUTE DETAILS</div>
                                    <div class="card-body">
                                        <form action="" method="post">

                                            <div class="form-group row">
                                                <div class="col-md-2">
                                                    <label>Class:</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <select class="form-control dropdown" name="division">
                                                        <option value="0">NA</option>
                                                        <option value="0">1st</option>
                                                        <option value="0">2nd</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-2">
                                                    <label>Section:</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <select class="form-control dropdown" name="division">
                                                        <option value="0">NA</option>
                                                        <option value="0">A</option>
                                                        <option value="0">B</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2">
                                                    <label>Student:</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <select class="form-control dropdown" name="division">
                                                        <option value="0">NA</option>
                                                        <option value="0">NA</option>
                                                        <option value="0">NA</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">    
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Sr. No</th>
                                                                            <th>Class</th>
                                                                            <th>Student Name</th>
                                                                            <th>Father Name</th>
                                                                            <th>Admission No</th>
                                                                            <th>Pick Up Route</th>
                                                                            <th>Pick Up Stoppage</th>
                                                                            <th>Drop Route</th>
                                                                            <th>Drop Stoppage</th>
                                                                            <th>Application Fee Head</th>
                                                                            <th>Application From Dtae</th>
                                                                            <th>Application Till Dtae</th>
                                                                        </tr>
                                                                    </thead>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                        <div class="form-group row">
                                            <div class="col-nd-2 offset-md-5">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="padding:5px">ADD</button>
                                            </div>
                                        </div>    

                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<!-- END MAIN CODE HERE... -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


