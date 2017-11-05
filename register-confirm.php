<?php
include "top-page.php";
$title = "";
$firstname = "";
$middlename = "";
$surname = "";
$dob = "";
$gender = "";
$homephone = "";
$mobilenum = "";
$email = "";
$password = "";
if(isset($_POST['register']))
{
	$title = $_POST['title'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$surname = $_POST['surname'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$homephone = $_POST['homephone'];
	$mobilenum = $_POST['mobilenum'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
}

?>
<!-- Page Content -->

        <div id="page-wrapper">
        <hr>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <h4 class="page-header"> Zimnat | SignUp Confirmation </h4>

                        
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
                Zimnat | Register Confirmation
                </div>
                <div class = "panel-body">
						<form class="form-header" action="register-exec.php" method="POST" id="#" autocomplete="off">
						<input type="hidden" name="myEmail" value="503bdae81fde8612ff4944435">
						<input type="hidden" name="myPassword" value="bfdba52708">
					<div class = "col-sm-6">
                    <label>Title</label>
					<div class = "form-group">
					<input name="title" class="form-control" type="text" value="<?php echo $title ?>" required />
					</div>
					</div>
					<div class = "col-sm-6">
                    <label> Firstname</label>
					<div class = "form-group">
					<input type = "text" name = "firstname" value="<?php echo $firstname ?>" class = "form-control" required />
					</div>
					</div>
                    <div class = "col-sm-6">
                    <label>Middlename</label>
					<div class = "form-group">
					<input type = "text" name = "middlename" value="<?php echo $middlename ?>" class = "form-control"  />
					</div>
					</div>
                   <div class = "col-sm-6">
                    <label>Surname</label>
					<div class = "form-group">
					<input type="text" name="surname" value="<?php echo $surname ?>" class = "form-control"  required/>
					</div>
					</div>
                    <div class = "col-sm-6">
                    <label>Date of Birth</label>
					<div class = "form-group">
					<input type="text" name="dob" value="<?php echo $dob ?>" class = "form-control" required />
					</div>
					</div>
                    <div class = "col-sm-6">
                    <label>Gender</label>
					<div class = "form-group">
					<input name="gender" type="text" class="form-control" value="<?php echo $gender ?>" required /> 
					</div>
					</div>
                   <div class = "col-sm-6">
                    <label>Home Phone</label>
					<div class = "form-group">
					<input type="text" name="homephone" value="<?php echo $homephone ?>" class = "form-control" />
					</div>
					</div>
                    <div class = "col-sm-6">
                    <label>Mobile Number</label>
					<div class = "form-group">
					<input type="text" name="mobilenum" class = "form-control" value="<?php echo $mobilenum ?>"  />
					</div>
					</div>
                    
                    <div class = "col-sm-6">
					<label>Email</label>
					<div class = "form-group">
					<input type="email" name="email" value = "<?php echo $email ?>" class = "form-control" id = "email" />
					</div>
					</div>
					 
					
					<div class = "col-sm-6">
					<label> Password</label>
					<div class = "form-group">
					<input type="password" name="password" value = "<?php echo $password ?>" class = "form-control" id = "confirm_password" />
					</div>
					</div>

					<div class = "col-sm-3 col-sm-offset-9">
					<button name = "register" type = "submit" class = "btn btn-info btn-block"> Confirm <i class = "fa fa-arrow-circle-right"></i></button>
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
	<script>
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
	


  </body>
</html>
