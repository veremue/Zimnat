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

                        <h4 class="page-header">Payment Details - <?php echo $user_full_name;?> </h4>

                        
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
                Payment Details
                </div>
                <div class = "panel-body">
                 <?php
                    if(!isset($_POST['selectpayment']))
						{
						?>
						<form class="form-header" action="payment-details.php" method="POST" id="#" autocomplete="off">
						
						<h4 class="form-title text-center">Choose Payment Method</h4>
					
					<div class = "col-sm-4">
                   
					
					<label>Direct Debit</label>
					<div class = "form-group">
					<input type = "radio" name = "payment" value="Direct Debit" class = "form-control"/>
					</div>
					<label>PayNow</label>
					<div class = "form-group">
					<input type = "radio" name = "payment" value="Direct Debit" class = "form-control" required />
					</div>
					<label>Zympay</label>
					<div class = "form-group">
					<input type = "radio" name = "payment" value="Direct Debit" class = "form-control" required />
					</div>
					</div>
					
					<div class = "col-sm-3 col-sm-offset-9">
					<button name = "selectpayment" type = "submit" class = "btn btn-success btn-block"> Continue <i class = "fa fa-arrow-circle-right"></i></button>
					</div>
							<p class="privacy text-center"> <a href="#"></a>.</p>
                   
                 
				<?php
						}
						elseif(isset($_POST['selectpayment'])){
							$payment = $_POST['payment'];
							if($payment == 'Direct Debit')
							{
								?>
								<form class="form-header" action="payment-exec.php" method="POST" id="#" autocomplete="off">
					
				
										<h4 class="form-title text-center">Direct Debit Details</h4>
										
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
										<div class = "col-sm-4">
										<label>Account Number<b>*</b></label>
										<div class = "form-group">
										<input type = "text" name = "account_number" value="" class = "form-control"  required/>
										</div>
										</div>
										<div class = "col-sm-4">
										<label>Branch Code<b>*</b></label>
										<div class = "form-group">
										<input type = "text" name = "branch_code" value="" class = "form-control"  required/>
										</div>
										</div>
										<div class = "col-sm-4">
										<label>Convenient Date<b>*</b></label>
										<div class = "form-group">
										<input type = "date" name = "branch_code" value="" class = "form-control"  required/>
										</div>
										</div>
										<div class = "col-sm-3 col-sm-offset-9">
										<input type="hidden" name="email" value="<?php echo $email ?>" class = "form-control"  required/>
										<input type="hidden" name="fullname" value="<?php echo $user_full_name ?>" class = "form-control"  required/>
										
											<button name = "savedetails" type = "submit" class = "btn btn-success btn-block"> Save <i class = "fa fa-check-circle-right"></i></button>
											</div>
												<p class="privacy text-center"> <a href="#"></a>.</p>
											</form>
								<?php
								
							}
							elseif($payment == 'PayNow')
							{
								
							}
							elseif($payment == 'Zympay')
							{
								
							}
							
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
