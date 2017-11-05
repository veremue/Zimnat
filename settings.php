<?php 
include "tops.php";
include "user.php";
?>

        <!-- Page Content -->

        <div id="page-wrapper">
        <hr>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <h4 class="page-header">Account Settings - <?php echo $user_full_name;?> </h4>

                        
                        <p></p>
                        <p></p>
                        <p></p>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->


                <div class = "row">
                <div class = "col-lg-2"></div>

                <div class = "col-lg-8">
                <div class = "panel panel-info">
                <div class = "panel-heading">
                User Account Details
                </div>
                <div class = "panel-body">
                 <?php
                 $sql = "SELECT * FROM tbl_prospective_clients WHERE username = '$email'";
				 //echo $sql;
                 $result = @mysqli_query($db, $sql);
                 if($result)
                 {
						$fullname = '';
						$passwordlastchanged = '';
                        $loginname = '';
                        $dob = '';
                        $phone = '';
                        $email = '';
                        $status = '';
                    echo '<table class="table table-bordered table-hover" >
                                    <tbody>
                                        ';
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $fullname = $row['firstname'].' '.$row['surname'];
						$passwordlastchanged = $row['pwdlastchanged'];
                        $loginname = $row['username'];
                        $dob = $row['dob'];
                        $phone = $row['mobilenum'];
                        $email = $row['email'];
                        $status = $row['status'];
                    }
                    echo '<tr>
                    <th> Your Name: </th>
                    <td> '.$fullname.'</td>
                    </tr>';
                    echo '<tr>
                    <th> Your password last changed: </th>
                    <td> '.$passwordlastchanged.'
                    <a href = "" class = "btn btn-success pull-right btn-circle pull-right" role="button" data-toggle="modal" data-target="#editpass">
                    <i class = "fa fa-edit"></i></a>
                    </td>
                    </tr>';
                    echo '<tr>
                    <th> Your usernme: </th>
                    <td> '.$loginname.'</td>
                    </tr>';
					echo '<tr>
                    <th> Your Account Status: </th>
                    <td> '.$status.'</td>
                    </tr>';
                    echo '<tr>
                    <th> Your Date of Birth: </th>
                    <td> '.$dob.'</td>
                    </tr>';
                    echo '<tr>
                    <th> Your Phone: </th>
                    <td> '.$phone.'</td>
                    </tr>';
                    echo '<tr>
                    <th> Your Email: </th>
                    <td> '.$email.'</td>
                    </tr>';
                    echo '</tbody></table>';
                 }

                ?>
                </div>
                </div>
               
                

                </div>
                <div class = "col-lg-12">

                <hr>
                </div>
                </div>

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


    <div class="modal fade" id="editpass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Edit your password</h4>
                                        </div>
                                        <form name = "myform" method = "POST" action = "save-password.php" autocomplete = "off">
                                        <div class="modal-body">
                                       
                                        <br>
                            <div class = "row">
                            <div class = "col-sm-2"></div>
                           
                             <div class = "col-sm-2"></div>

                            <div class = "col-sm-12">
                            <div class="form-group"> 
                             <label>New Password:</label>  
                            <input name="newpassword" type="password" class="form-control"  required />
                            </div>
                            </div>
                             <div class = "col-sm-2"></div>
                              <div class = "col-sm-2"></div>
                            <div class = "col-sm-12">
                            <div class="form-group"> 
                             <label>Confirm Password:</label>  
                            <input name="confirmpass" type="password" class="form-control"  required />
                            </div>
                            </div>               
                            </div>                            
                             </div>
                            <div class="modal-footer">
                            <div class = "row">
                            <div class = "col-sm-12">
                            
                            <button type="submit" class="btn btn-success"><i class = "fa fa-check"></i> Save Password </button>
                            </div>
                            
                            </div>
                            </form>
                             </div>
                             <!-- /.modal-content -->
                            </div>
                            </div>
                             <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->

  

</body>

</html>
