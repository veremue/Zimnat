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

                        <h4 class="page-header">Claim Intimation  </h4>

                        
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
                Claim Intimation
                </div>
                <div class = "panel-body">
                 <?php
                    if(!isset($_POST['claim']))
						{
						?>
						<form class="form-header" action="claim-intimation.php" method="POST" id="#" autocomplete="off">
						
						<h4 class="form-title text-center">Claim Form</h4>

										
										<div class = "col-sm-6">
										<label> Policy Number<b>*</b></label>
										<div class = "form-group">
										<input type = "text" name = "policy_number" value="" class = "form-control" required />
										</div>
										</div>
										<div class = "col-sm-6">
										<label>Name of Deceased<b>*</b></label>
										<div class = "form-group">
										<input type = "text" name = "deceased_name" value="" class = "form-control"  required/>
										</div>
										</div>
										<div class = "col-sm-6">
										<label>Date of Death<b>*</b></label>
										<div class = "form-group">
										<input type = "date" name = "dod" value="" class = "form-control"  required/>
										</div>
										</div>
										<div class = "col-sm-6">
										<label>Place of Death<b>*</b></label>
										<div class = "form-group">
										<input type = "text" name = "death_place" value="" class = "form-control"  required/>
										</div>
										</div>
										<div class = "col-sm-6">
										<label>Principal Death Cause<b>*</b></label>
										<div class = "form-group">
										<input type = "text" name = "death_cause" value="" class = "form-control"  required/>
										</div>
										</div>
										<div class = "col-sm-6">
										<label>Residential Address at Death<b>*</b></label>
										<div class = "form-group">
										<input type = "text" name = "address_at_death" value="" class = "form-control"  required/>
										</div>
										</div>
										<div class = "col-sm-6">
										<label>Occupation at time of Death<b>*</b></label>
										<div class = "form-group">
										<input type = "text" name = "occupation_at_death" value="" class = "form-control"  required/>
										</div>
										</div>
										<div class = "col-sm-6">
										<label>Did the deceased die by suicide or violation of law?</label>
										<div class = "form-group">
										<select name="suicidal" class="form-control" id="source" required>
										<option value="Not Specified" selected >---- Select ----</option>
										<option value="YES">YES</option>
										<option value="NO">NO</option>
										</select>
										</div>
										</div>
					
					<div class = "col-sm-3 col-sm-offset-9">
					<button name = "claim" type = "submit" class = "btn btn-success btn-block"> Continue <i class = "fa fa-arrow-circle-right"></i></button>
					</div>
							<p class="privacy text-center"> <a href="#"></a>.</p>
                   
                 
				<?php
						}
						elseif(isset($_POST['claim'])){
							$policy_number = $_POST['policy_number'];
							$deceased_name = $_POST['deceased_name'];
							$dod = $_POST['dod'];
							$death_place = $_POST['death_place'];
							$death_cause = $_POST['death_cause'];
							$address_at_death = $_POST['address_at_death'];
							$occupation_at_death = $_POST['occupation_at_death'];
							$suicidal = $_POST['suicidal'];
							
								?>
								<form class="form-header" action="claim-exec.php" method="POST" id="#" autocomplete="off" enctype="multipart/form-data" >
					
				
										<h4 class="form-title text-center">Plan Beneficiary Bank Details</h4>
										
										<div class = "col-sm-6">
										<label> Bank Name<b>*</b></label>
										<div class = "form-group">
										<input type = "text" name = "bank_name" value="" class = "form-control" required />
										</div>
										</div>
										<div class = "col-sm-6">
										<label>Account Name<b>*</b></label>
										<div class = "form-group">
										<input type = "text" name = "account_name" value="" class = "form-control"  required/>
										</div>
										</div>
										<div class = "col-sm-6">
										<label>Bank Address<b>*</b></label>
										<div class = "form-group">
										<input type = "text" name = "bank_address" value="" class = "form-control"  required/>
										</div>
										</div>
										<div class = "col-sm-6">
										<label>Account Number<b>*</b></label>
										<div class = "form-group">
										<input type = "text" name = "account_number" value="" class = "form-control"  required/>
										</div>
										</div>
										<div class = "col-sm-6">
										<label>Branch Name/Code<b>*</b></label>
										<div class = "form-group">
										<input type = "text" name = "branch_code" value="" class = "form-control"  required/>
										</div>
										</div>
										<div class = "col-sm-6">
										<label>IBAN/SWIFT CODE<b>*</b></label>
										<div class = "form-group">
										<input type = "text" name = "swift_code" value="" class = "form-control"  required/>
										</div>
										</div>
										<h4 class="form-title text-center">Supporting Documents</h4>
										<div class = "col-sm-6">
										<label>Type of Document 1</label>
										<div class = "form-group">
										<select name="document1" class="form-control" id="source" required>
										<option value="Document Type Not Specified" selected >---- Choose Document Type ----</option>
										<option value="Death_Certificate">Death Certificate</option>
										<option value="National_ID">National ID of Deceased</option>
										</select>
										</div>
										</div>
										<div class = "col-sm-6">
										<label>Select Document 1<b>*</b></label>
										<div class = "form-group">
										<input type = "file" name = "file1" value="" class = "form-control"  required/>
										</div>
										</div>
										<div class = "col-sm-6">
										<label>Type of Document 2</label>
										<div class = "form-group">
										<select name="document2" class="form-control" id="source" required>
										<option value="Document Type Not Specified" selected >---- Choose Document Type ----</option>
										<option value="Death_Certificate">Death Certificate</option>
										<option value="National_ID">National ID of Deceased</option>
										</select>
										</div>
										</div>
										<div class = "col-sm-6">
										<label>Select Document 2<b>*</b></label>
										<div class = "form-group">
										<input type = "file" name = "file2" value="" class = "form-control"  required/>
										</div>
										</div>
										
										<div class = "col-sm-3 col-sm-offset-9">
										<input type="hidden" name="email" value="<?php echo $email ?>" class = "form-control"  required/>
										<input type="hidden" name="fullname" value="<?php echo $user_full_name ?>" class = "form-control"  required/>
										<input type="hidden" name="policy_number" value="<?php echo $policy_number ?>" class = "form-control"  required/>
										<input type="hidden" name="deceased_name" value="<?php echo $deceased_name ?>" class = "form-control"  required/>
										<input type="hidden" name="dod" value="<?php echo $dod ?>" class = "form-control"  required/>
										<input type="hidden" name="death_place" value="<?php echo $death_place ?>" class = "form-control"  required/>
										<input type="hidden" name="death_cause" value="<?php echo $death_cause ?>" class = "form-control"  required/>
										<input type="hidden" name="address_at_death" value="<?php echo $address_at_death ?>" class = "form-control"  required/>
										<input type="hidden" name="occupation_at_death" value="<?php echo $occupation_at_death ?>" class = "form-control"  required/>
										<input type="hidden" name="suicidal" value="<?php echo $suicidal ?>" class = "form-control"  required/>
										
											<button name = "savedetails" type = "submit" class = "btn btn-success btn-block"> Claim <i class = "fa fa-check-circle-right"></i></button>
											</div>
												<p class="privacy text-center"> <a href="#"></a>.</p>
											</form>
								<?php
								
							
							
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



  

</body>

</html>
