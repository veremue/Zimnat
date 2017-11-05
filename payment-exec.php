			<?php
			require_once('config.php');
			

			$fullname = $_POST['fullname'];
			$email = $_POST['email'];
			$bank_name = $_POST['bank_name'];
			$account_name = $_POST['account_name'];
			$account_number = $_POST['account_number'];
			$branch_code = $_POST['branch_code'];
			$convenient_date = $_POST['convenient_date'];
			
			//Insert inquiry into db.
			
			$qry = "INSERT INTO  tbl_direct_debits SET fullname = '$fullname', email = '$email', bank_name = '$bank_name',
								account_name = '$account_name', account_number = '$account_number', branch_code = '$branch_code', convenient_date = '$convenient_date'
								";
				//echo $qry;
			$resu = @mysqli_query($db,$qry);
			//if inquiry successfully saved in db, send email
			if($resu)
			{
					
				
					//redirect to inquiry success page
					header("location: payment-success.php?email=$email");
					exit;
			}
			
			
			
			
			?>