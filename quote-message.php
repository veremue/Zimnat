<?php
 include "top-page.php";
$quote = $_GET['quote'];
$fname= $_GET['fname'];
$mname= $_GET['mname'];
$sname=$_GET['sname'];
$dob=$_GET['dob'];
$cover=$_GET['cover'];
$dependents=$_GET['dependents'];
$plan=$_GET['plan'];
$marital_status=$_GET['marital_status'];
$homephone = $_GET['homephone'];
$address = $_GET['address'];			
$country = $_GET['country'];
$plan_type = $_GET['plan_type'];			
$amount_covered = $_GET['amount_covered'];
$total_premium = $_GET['total_premium'];
$premium_dependents = $_GET['premium_dependents'];

?>

        <!-- Page Content -->

        <div id="page-wrapper">
        <hr>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <h4 class="page-header">Insurance Quote - <?php echo ucfirst($fname)." ".ucfirst($sname);?> </h4>

                        
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
                <div class = "panel panel-success">
                <div class = "panel-heading">
                Insurance Quote
                </div>
                <div class = "panel-body">
                 <?php
                    echo '<table class="table table-bordered table-hover" >
                                    <tbody>
                                        ';
                 
                    echo '<tr>
                    <th> Name: </th>
                    <td> '.$fname.' '.$sname.'</td>
                    </tr>';
                    echo '<tr>
                    <th> Date of Birth: </th>
                    <td> '.$dob.'
                    
                    </td>
                    </tr>';
                    echo '<tr>
                    <th> Marital Status:: </th>
                    <td> '.$marital_status.'</td>
                    </tr>';
                    echo '<tr>
                    <th> Number of Dependents: </th>
                    <td> '.$dependents.'</td>
                    </tr>';
                    echo '<tr>
                    <th> Amount Covered: </th>
                    <td> $'.$cover.'</td>
                    </tr>';
                    echo '<tr>
                    <th> Premium('.$plan.'): </th>
                    <td> '.round($quote,2).'</td>
                    </tr>';
					echo '<tr>
                    <th> Premium(dependants): </th>
                    <td> $'.round($premium_dependents,2).'</td>
                    </tr>';
					echo '<tr>
                    <th> Total Premium: </th>
                    <td> $'.round($total_premium,2).'</td>
                    </tr>';
                    echo '</tbody></table>';
  
                ?>
				<form class="form-header" action="application-form.php" method="POST" id="#" autocomplete="off">
						<div class = "col-sm-3 col-sm-offset-9">
						<input type="hidden" name="firstname" value="<?php echo $fname ?>" class = "form-control"  required/>
						<input type="hidden" name="middlename" value="<?php  echo $mname ?>" class = "form-control"  required/>
						<input type="hidden" name="surname" value="<?php  echo $sname ?>" class = "form-control"  required/>
						<input type="hidden" name="dob" value="<?php  echo $dob ?>" class = "form-control"  required/>
						<input type="hidden" name="marital_status" value="<?php  echo $marital_status ?>" class = "form-control"  required/>
						<input type="hidden" name="dependents" value="<?php  echo $dependents ?>" class = "form-control"  required/>
						<input type="hidden" name="address" value="<?php  echo $address ?>" class = "form-control"  required/>
						<input type="hidden" name="country" value="<?php  echo $country ?>" class = "form-control"  required/>
						<input type="hidden" name="postal_code" value="<?php  echo $postal_code ?>" class = "form-control"  required/>
						<input type="hidden" name="homephone" value="<?php  echo $homephone ?>" class = "form-control"  required/>
						<input type="hidden" name="amount_covered" value="<?php  echo $cover ?>" class = "form-control"  required/>
						<button name = "nextpage" type = "submit" class = "btn btn-success btn-block"> Apply <i class = "fa fa-check-circle-right"></i></button>
						</div>
						</form>
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



  

</body>

</html>
