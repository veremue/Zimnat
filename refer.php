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

                        <h4 class="page-header">Refer and Earn  </h4>

                        
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
                Refer and Earn
                </div>
                <div class = "panel-body">
              
						<form class="form-header" action="refer-exec.php" method="POST" id="#" autocomplete="off">
						
						<h4 class="form-title text-center"> Details</h4>

										
										<div class = "col-sm-6">
										<label> Your Policy Number<b>*</b></label>
										<div class = "form-group">
										<input type = "text" name = "policynum" value="" class = "form-control" required />
										</div>
										</div>
										<div class = "col-sm-6">
										<label>Fullname<b>*</b></label>
										<div class = "form-group">
										<input type = "text" name = "ref_fullname" value="" class = "form-control"  required/>
										</div>
										</div>
										<div class = "col-sm-6">
										<label>Email Address<b>*</b></label>
										<div class = "form-group">
										<input type = "email" name = "email" value="" class = "form-control"  required/>
										</div>
										</div>
										<div class = "col-sm-6">
										<label>Phone Number<b>*</b></label>
										<div class = "form-group">
										<input type = "phone" name = "phonenum" value="" class = "form-control"  required/>
										</div>
										</div>
										
					
					<div class = "col-sm-3 col-sm-offset-9">
					
					<input type="hidden" name="fullname" value="<?php echo $user_full_name ?>" class = "form-control"  required/>
					<button name = "claim" type = "submit" class = "btn btn-success btn-block"> Refer <i class = "fa fa-arrow-circle-right"></i></button>
					</div>
							<p class="privacy text-center"> <a href="#"></a>.</p>
                  
				
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
