			<?php
			require_once('config.php');
			require_once('Sendmail.php');
			
			$policy_number = $_POST['policy_number'];
			$deceased_name = $_POST['deceased_name'];
			$dod = $_POST['dod'];
			$death_place = $_POST['death_place'];
			$death_cause = $_POST['death_cause'];
			$address_at_death = $_POST['address_at_death'];
			$occupation_at_death = $_POST['occupation_at_death'];
			$suicidal = $_POST['suicidal'];
			$fullname = $_POST['fullname'];
			$email = $_POST['email'];
			$bank_name = $_POST['bank_name'];
			$account_name = $_POST['account_name'];
			$account_number = $_POST['account_number'];
			$branch_code = $_POST['branch_code'];
			$swift_code = $_POST['swift_code'];
			$bank_address = $_POST['bank_address'];
			$document1 = $_POST['document1'];
			$document2 = $_POST['document2'];
			
			//process file 1
			$file = rand(1000,100000)."-".$_FILES['file1']['name'];
			$file_loc = $_FILES['file1']['tmp_name'];
			$file_size = $_FILES['file1']['size'];
			$file_type = $_FILES['file1']['type'];
			$folder="uploads/";
			
			move_uploaded_file($file_loc,$folder.$file);
			$sql_upload1 = "INSERT INTO tbl_claim_documents SET principal_email = '$email', principal_fullname = '$fullname', policy_number = '$policy_number',
								file_name = '$file', file_type = '$file_type', file_size = '$file_size',
								document_type = '$document1'";
								echo $sql_upload1;
			$result = @mysqli_query($db,$sql_upload1);
			
			//process file 2
			$files = rand(1000,100000)."-".$_FILES['file2']['name'];
			$files_loc = $_FILES['file2']['tmp_name'];
			$files_size = $_FILES['file2']['size'];
			$files_type = $_FILES['file2']['type'];
			
			move_uploaded_file($files_loc,$folder.$files);
			$sql_upload2 = "INSERT INTO tbl_claim_documents SET principal_email = '$email', principal_fullname = '$fullname', policy_number = '$policy_number',
								file_name = '$files', file_type = '$files_type', file_size = '$files_size',
								document_type = '$document2'";
								echo $sql_upload2;
			$results = @mysqli_query($db,$sql_upload2);
			
					
			//Insert inquiry into db.
			
			$qry = "INSERT INTO tbl_claims SET policy_number = '$policy_number', deceased_name = '$deceased_name', death_date = '$dod',
								death_place = '$death_place', death_cause = '$death_cause', address_at_death = '$address_at_death',
								occupation_at_death = '$occupation_at_death',suicidal = '$suicidal',principal_name = '$fullname',
								principal_email = '$email',bank_name = '$bank_name',account_name = '$account_name',account_number = '$account_number',
								branch_code = '$branch_code',swift_code = '$swift_code',bank_address = '$bank_address'
								";
			echo $qry;
			$resu = @mysqli_query($db,$qry);
			//if inquiry successfully saved in db, send email
			if($resu)
			{
				    $send = new Sendmail;
					$subject1 = "Condolence Message";
					$alt_subject = "Condolences";
					
					//send to inquirer
					$message1 = "Dear ".ucfirst($fullname).",<br/><br/> There’s no word that can express how sorry we are to hear about your loss. 
					During this difficult moment, our thoughts and prayers are with you.May our Lord bless and comfort you and your family during this time of grief.
					
					<br/></br>  <br/></br> Please accept our sincere condolences, <br/></br> Zimnat Team.";
					$send->send_mail($email,$subject1,$message1,$alt_subject);
					
					
					
					
				
					//redirect to inquiry success page
					header("location: claim-success.php?fullname=$fullname");
					exit;
			}
			
			
			
			
			?>