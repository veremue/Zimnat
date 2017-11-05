<?php

include "top-page.php";
//Include database connection details
require_once('config.php');

$firstname = ucfirst($_POST['myfirstname']);
$lastname = ucfirst($_POST['mylastname']);
$email = $_POST['myemail'];

//Check if the username exists	
	$sql = "SELECT id,status FROM tbl_prospective_clients WHERE username = '$email'  ";
    $result_chk = mysqli_query($db,$sql);	
	//echo "SQL ".$sql;
		
	$row_chk = mysqli_fetch_array($result_chk,MYSQLI_ASSOC);      
    $count_chk = mysqli_num_rows($result_chk);
      
    // If result matched $myusername and $mypassword, table row must be 1 row
		
    if($count_chk > 0) {
		//echo 'Duplicate';
		header("location: failure.php?fname=$firstname&&sname=$lastname");
		exit();	
		
	}else{
	
?>

        <!-- Page Content -->

        <div id="page-wrapper">
        <hr>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <h4 class="page-header"> Zimnat | Sign Up </h4>

                        
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
                Zimnat | Register
                </div>
                <div class = "panel-body">
						<form class="form-header" action="register-confirm.php" method="POST" id="#" autocomplete="off">
						<input type="hidden" name="myEmail" value="503bdae81fde8612ff4944435">
						<input type="hidden" name="myPassword" value="bfdba52708">
					<div class = "col-sm-6">
                    <label>Title<b>*</b></label>
					<div class = "form-group">
					<select name="title" class="form-control" id="source" required>
					<option value="No Title Specified" selected >---- Choose Title ----</option>
					<option value="Mr">Mr.</option>
					<option value="Mrs">Mrs.</option>
					<option value="Ms">Ms.</option>
					<option value="Miss">Miss.</option>
					<option value="Dr">Dr.</option>
					</select>
					</div>
					</div>
					<div class = "col-sm-6">
                    <label> Firstname<b>*</b></label>
					<div class = "form-group">
					<input type = "text" name = "firstname" value="<?php echo $firstname ?>" class = "form-control" required />
					</div>
					</div>
                    <div class = "col-sm-6">
                    <label>Middlename</label>
					<div class = "form-group">
					<input type = "text" name = "middlename" value="" class = "form-control"  />
					</div>
					</div>
                   <div class = "col-sm-6">
                    <label>Surname<b>*</b></label>
					<div class = "form-group">
					<input type="text" name="surname" value="<?php echo $lastname ?>" class = "form-control"  required/>
					</div>
					</div>
                    <div class = "col-sm-6">
                    <label>Date of Birth<b>*</b></label>
					<div class = "form-group">
					<input type="date" name="dob" value="" class = "form-control" placeholder = "YYYY-MM-DD"required />
					</div>
					</div>
                    <div class = "col-sm-6">
                    <label>Gender<b>*</b></label>
					<div class = "form-group">
					<select name="gender" class="form-control" id="source" required>
					<option value="No Gender Specified" selected >---- Choose Gender ----</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					</select>
					</div>
					</div>
                   <div class = "col-sm-6">
                    <label>Home Phone</label>
					<div class = "form-group">
					<input type="phone" name="homephone" class = "form-control" />
					</div>
					</div>
                    <div class = "col-sm-6">
                    <label>Mobile Number<b>*</b></label>
					<div class = "form-group">
					<input type="phone" name="mobilenum" class = "form-control" required/>
					</div>
					</div>
                    
                    <div class = "col-sm-6">
					<label>Email<b>*</b></label>
					<div class = "form-group">
					<input type="email" name="email" value = "<?php echo $email ?>" class = "form-control" id = "email" required/>
					</div>
					</div>
					 <div class = "col-sm-6">
					<label>Confirm Email<b>*</b></label>
					<div class = "form-group">
					<input type="email" name="confirm email" value = "" placeholder = "Confirm Email"class = "form-control" id = "confirm_email" required/>
					</div>
					</div>
					<div class = "col-sm-6">
					<label>Password<b>*</b></label>
					<div class = "form-group">
					<input type="password" name="password" min = "5" max= "20" value = "" class = "form-control" id = "password" required/>
					</div>
					</div>
					<div class = "col-sm-6">
					<label>Confirm Password<b>*</b></label>
					<div class = "form-group">
					<input type="password" name="confirmpassword" min = "5" max= "20" value = "" class = "form-control" id = "confirm_password" required/>
					</div>
					</div>

					<div class = "col-sm-3 col-sm-offset-9">
					<button name = "register" type = "submit" class = "btn btn-success btn-block"> Register <i class = "fa fa-arrow-circle-right"></i></button>
					</div>
							<p class="privacy text-center"> <a href="#"></a>.</p>
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
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="reGassets/assets/js/jquery.js"></script>
    <script src="reGassets/assets/js/bootstrap.min.js"></script>

	<!-----Validate Password--->
	<script type = "text/javascript">
	var password = document.getElementById("password")
	,confirm_password = document.getElementById("confirm_password");

	function validatePassword(){
	if(password.value != confirm_password.value) {
	confirm_password.setCustomValidity("Passwords Don't Match");
	} else {
	confirm_password.setCustomValidity('');
	}
	}

	password.onchange = validatePassword;
	confirm_password.onkeyup = validatePassword;
	
	
	</script>
	<script type = "text/javascript">
	var email = document.getElementById("email")
	,confirm_email = document.getElementById("confirm_email");
	function validateEmail(){
	if(email.value != confirm_email.value) {
	confirm_email.setCustomValidity("Email Addresses Don't Match");
	} else {
	confirm_email.setCustomValidity('');
	}
	}

	email.onchange = validateEmail;
	confirm_email.onkeyup = validateEmail;
	
	</script>
	


  </body>
</html>

<?php
	}
?>
