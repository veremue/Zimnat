<?php
/*CONNECT TO DATABASE*/
require_once('config.php');
require_once('Sendmail.php');


/*RECEIVE ALL PARAMETERS FROM FORM*/
			$title = $_POST['title'];
			$firstname = $_POST['firstname'];
			$middlename = $_POST['middlename']; 
			$surname = $_POST['surname'];
			$dob = $_POST['dob'];
			$email = $_POST['email'];
			$idnum = $_POST['idnum'];
			$marital_status = $_POST['marital_status'];
			$dependents = $_POST['dependents'];
			$home_phone = $_POST['home_phone'];
			$mobile_num = $_POST['mobile_num'];
			$address = $_POST['address'];			
			$country = $_POST['country'];
			$postal_code = $_POST['postal_code'];
			$plan_type = $_POST['plan_type'];			
			$amount_covered = $_POST['amount_covered'];
			
			$beneficiary_title = $_POST['beneficiary_title'];
			$beneficiary_firstname = $_POST['beneficiary_firstname'];
			$beneficiary_surname = $_POST['beneficiary_surname'];
			$beneficiary_relationship = $_POST['beneficiary_relationship'];
			
			$beneficiary2_title = $_POST['beneficiary2_title'];
			$beneficiary2_firstname = $_POST['beneficiary2_firstname'];
			$beneficiary2_surname = $_POST['beneficiary2_surname'];
			$beneficiary2_relationship = $_POST['beneficiary2_relationship'];
			
			$qry = "INSERT INTO  tbl_application_details SET title ='$title',firstname='$firstname',middlename='$middlename',
					surname='$surname',dob='$dob',dependants='$dependents',home_phone='$home_phone',mobile_num='$mobile_num',marital_status = '$marital_status',
					amount_covered='$amount_covered',plan_type = '$plan_type',idnum_passport = '$idnum',email='$email',
					address='$address',country='$country',postal_code='$postal_code'";
			echo $qry;		
			$result = mysqli_query($db,$qry);
			
			/*PRINCIPAL BENEFICIARY*/
			$qrys = "INSERT INTO tbl_principal_beneficiary SET title ='$beneficiary_title',firstname='$beneficiary_firstname',surname ='$beneficiary_surname',principal_idnum_passport = '$idnum',relationship='$beneficiary_relationship'";
			echo $qrys."</br></br>";	
			$results = mysqli_query($db,$qrys);
			
			
			/*SECONDARY BENEFICIARY*/
			$qry2 = "INSERT INTO tbl_secondary_beneficiary SET title ='$beneficiary2_title',firstname='$beneficiary2_firstname',surname ='$beneficiary2_surname',principal_idnum_passport = '$idnum',relationship='$beneficiary2_relationship'";
			echo $qry2."</br></br>";
			$result2 = mysqli_query($db,$qry2);
				
			/*FAMILY MEMBERS*/
			if($dependents == 1)
			{
				$title1 = $_POST['title1'];
				$firstname1 = $_POST['firstname1'];
				$middlename1 = $_POST['middlename1']; 
				$surname1 = $_POST['surname1'];
				$dob1 = $_POST['dob1'];
				$gender1 = $_POST['gender1'];
				$country1 = $_POST['country1'];
				$relationship1 = $_POST['relationship1'];
				$amount_covered1 = $_POST['amount_covered1'];
				$plan_type1 = $_POST['plan_type1'];
				
				$qry1 = "INSERT INTO tbl_family_members SET title ='$title1',firstname='$firstname1',middlename='$middlename1',
				surname='$surname1',dob='$dob1',gender='$gender1',relationship='$relationship1',country='$country1',amount_covered='$amount_covered1',plan_type = '$plan_type1',principal_idnum_passport = '$idnum' ";
				$result1 = mysqli_query($db,$qry1);

				
			}
			elseif($dependents == 2)
			{
				$title1 = $_POST['title1'];
				$firstname1 = $_POST['firstname1'];
				$middlename1 = $_POST['middlename1']; 
				$surname1 = $_POST['surname1'];
				$dob1 = $_POST['dob1'];
				$gender1 = $_POST['gender1'];
				$country1 = $_POST['country1'];
				$relationship1 = $_POST['relationship1'];
				$amount_covered1 = $_POST['amount_covered1'];
				$plan_type1 = $_POST['plan_type1'];
				
				$title2 = $_POST['title2'];
				$firstname2 = $_POST['firstname2'];
				$middlename2 = $_POST['middlename2']; 
				$surname2 = $_POST['surname2'];
				$dob2 = $_POST['dob2'];
				$gender2 = $_POST['gender2'];
				$country2 = $_POST['country2'];
				$relationship2 = $_POST['relationship2'];
				$amount_covered2 = $_POST['amount_covered2'];
				$plan_type2 = $_POST['plan_type2'];
				
				$qry1 = "INSERT INTO tbl_family_members SET title ='$title1',firstname='$firstname1',middlename='$middlename1',
				surname='$surname1',dob='$dob1',gender='$gender1',relationship='$relationship1',country='$country1',amount_covered='$amount_covered1',plan_type = '$plan_type1',principal_idnum_passport = '$idnum' ";
				$result1 = mysqli_query($db,$qry1);
				
				$qry2 = "INSERT INTO tbl_family_members SET title ='$title2',firstname='$firstname2',middlename='$middlename2',
				surname='$surname2',dob='$dob2',gender='$gender2',relationship='$relationship2',country='$country2',amount_covered='$amount_covered2',plan_type = '$plan_type2',principal_idnum_passport = '$idnum' ";
				$result2 = mysqli_query($db,$qry2);
				echo $qry1."</br></br>";
				echo $qry2."</br></br>";
				
				
			}
			elseif($dependents == 3)
			{
				$title1 = $_POST['title1'];
				$firstname1 = $_POST['firstname1'];
				$middlename1 = $_POST['middlename1']; 
				$surname1 = $_POST['surname1'];
				$dob1 = $_POST['dob1'];
				$gender1 = $_POST['gender1'];
				$country1 = $_POST['country1'];
				$relationship1 = $_POST['relationship1'];
				$amount_covered1 = $_POST['amount_covered1'];
				$plan_type1 = $_POST['plan_type1'];
				
				$title2 = $_POST['title2'];
				$firstname2 = $_POST['firstname2'];
				$middlename2 = $_POST['middlename1']; 
				$surname2 = $_POST['surname1'];
				$dob2 = $_POST['dob1'];
				$gender2 = $_POST['gender1'];
				$country2 = $_POST['country1'];
				$relationship2 = $_POST['relationship2'];
				$amount_covered2 = $_POST['amount_covered2'];
				$plan_type2 = $_POST['plan_type2'];
				
				$title3 = $_POST['title3'];
				$firstname3 = $_POST['firstname3'];
				$middlename3 = $_POST['middlename3']; 
				$surname3 = $_POST['surname3'];
				$dob3 = $_POST['dob3'];
				$gender3 = $_POST['gender3'];
				$country3 = $_POST['country3'];
				$relationship3 = $_POST['relationship3'];
				$amount_covered3 = $_POST['amount_covered3'];
				$plan_type3 = $_POST['plan_type3'];
				
				$qry1 = "INSERT INTO tbl_family_members SET title ='$title1',firstname='$firstname1',middlename='$middlename1',
				surname='$surname1',dob='$dob1',gender='$gender1',relationship='$relationship1',country='$country1',amount_covered='$amount_covered1',plan_type = '$plan_type1',principal_idnum_passport = '$idnum' ";
				$result1 = mysqli_query($db,$qry1);
				
				$qry2 = "INSERT INTO tbl_family_members SET title ='$title2',firstname='$firstname2',middlename='$middlename2',
				surname='$surname2',dob='$dob2',gender='$gender2',relationship='$relationship2',country='$country2',amount_covered='$amount_covered2',plan_type = '$plan_type2',principal_idnum_passport = '$idnum' ";
				$result2 = mysqli_query($db,$qry2);
				
				$qry3 = "INSERT INTO tbl_family_members SET title ='$title2',firstname='$firstname2',middlename='$middlename2',
				surname='$surname3',dob='$dob3',gender='$gender3',relationship='$relationship3',country='$country3',amount_covered='$amount_covered3',plan_type = '$plan_type3',principal_idnum_passport = '$idnum' ";
				$result3 = mysqli_query($db,$qry3);
				
				
				
				
			}
			elseif($dependents == 4)
			{
				$title1 = $_POST['title1'];
				$firstname1 = $_POST['firstname1'];
				$middlename1 = $_POST['middlename1']; 
				$surname1 = $_POST['surname1'];
				$dob1 = $_POST['dob1'];
				$gender1 = $_POST['gender1'];
				$country1 = $_POST['country1'];
				$relationship1 = $_POST['relationship1'];
				$amount_covered1 = $_POST['amount_covered1'];
				$plan_type1 = $_POST['plan_type1'];
				
				$title2 = $_POST['title2'];
				$firstname2 = $_POST['firstname2'];
				$middlename2 = $_POST['middlename1']; 
				$surname2 = $_POST['surname1'];
				$dob2 = $_POST['dob1'];
				$gender2 = $_POST['gender1'];
				$country2 = $_POST['country1'];
				$relationship2 = $_POST['relationship2'];
				$amount_covered2 = $_POST['amount_covered2'];
				$plan_type2 = $_POST['plan_type2'];
				
				$title3 = $_POST['title3'];
				$firstname3 = $_POST['firstname3'];
				$middlename3 = $_POST['middlename3']; 
				$surname3 = $_POST['surname3'];
				$dob3 = $_POST['dob3'];
				$gender3 = $_POST['gender3'];
				$country3 = $_POST['country3'];
				$relationship3 = $_POST['relationship3'];
				$amount_covered3 = $_POST['amount_covered3'];
				$plan_type3 = $_POST['plan_type3'];
				
				$title4 = $_POST['title4'];
				$firstname4 = $_POST['firstname4'];
				$middlename4 = $_POST['middlename4']; 
				$surname4 = $_POST['surname4'];
				$dob4 = $_POST['dob4'];
				$gender4 = $_POST['gender4'];
				$country4 = $_POST['country4'];
				$relationship4 = $_POST['relationship4'];
				$amount_covered4 = $_POST['amount_covered4'];
				$plan_type4 = $_POST['plan_type4'];
				
				$qry1 = "INSERT INTO tbl_family_members SET title ='$title1',firstname='$firstname1',middlename='$middlename1',
				surname='$surname1',dob='$dob1',gender='$gender1',relationship='$relationship1',country='$country1',amount_covered='$amount_covered1',plan_type = '$plan_type1',principal_idnum_passport = '$idnum' ";
				$result1 = mysqli_query($db,$qry1);
				
				$qry2 = "INSERT INTO tbl_family_members SET title ='$title2',firstname='$firstname2',middlename='$middlename2',
				surname='$surname2',dob='$dob2',gender='$gender2',relationship='$relationship2',country='$country2',amount_covered='$amount_covered2',plan_type = '$plan_type2',principal_idnum_passport = '$idnum' ";
				$result2 = mysqli_query($db,$qry2);
				
				$qry3 = "INSERT INTO tbl_family_members SET title ='$title3',firstname='$firstname3',middlename='$middlename3',
				surname='$surname3',dob='$dob3',gender='$gender3',relationship='$relationship3',country='$country3',amount_covered='$amount_covered3',plan_type = '$plan_type3',principal_idnum_passport = '$idnum' ";
				$result3 = mysqli_query($db,$qry3);
				
				$qry4 = "INSERT INTO tbl_family_members SET title ='$title4',firstname='$firstname4',middlename='$middlename4',
				surname='$surname4',dob='$dob4',gender='$gender4',relationship='$relationship4',country='$country4',amount_covered='$amount_covered4',plan_type = '$plan_type4',principal_idnum_passport = '$idnum' ";
				$result4 = mysqli_query($db,$qry4);
				
			}
			elseif($dependents == 5)
			{
				$title1 = $_POST['title1'];
				$firstname1 = $_POST['firstname1'];
				$middlename1 = $_POST['middlename1']; 
				$surname1 = $_POST['surname1'];
				$dob1 = $_POST['dob1'];
				$gender1 = $_POST['gender1'];
				$country1 = $_POST['country1'];
				$relationship1 = $_POST['relationship1'];
				$amount_covered1 = $_POST['amount_covered1'];
				$plan_type1 = $_POST['plan_type1'];
				
				$title2 = $_POST['title2'];
				$firstname2 = $_POST['firstname2'];
				$middlename2 = $_POST['middlename1']; 
				$surname2 = $_POST['surname1'];
				$dob2 = $_POST['dob1'];
				$gender2 = $_POST['gender1'];
				$country2 = $_POST['country1'];
				$relationship2 = $_POST['relationship2'];
				$amount_covered2 = $_POST['amount_covered2'];
				$plan_type2 = $_POST['plan_type2'];
				
				$title3 = $_POST['title3'];
				$firstname3 = $_POST['firstname3'];
				$middlename3 = $_POST['middlename3']; 
				$surname3 = $_POST['surname3'];
				$dob3 = $_POST['dob3'];
				$gender3 = $_POST['gender3'];
				$country3 = $_POST['country3'];
				$relationship3 = $_POST['relationship3'];
				$amount_covered3 = $_POST['amount_covered3'];
				$plan_type3 = $_POST['plan_type3'];
				
				$title4 = $_POST['title4'];
				$firstname4 = $_POST['firstname4'];
				$middlename4 = $_POST['middlename4']; 
				$surname4 = $_POST['surname4'];
				$dob4 = $_POST['dob4'];
				$gender4 = $_POST['gender4'];
				$country4 = $_POST['country4'];
				$relationship4 = $_POST['relationship4'];
				$amount_covered4 = $_POST['amount_covered4'];
				$plan_type4 = $_POST['plan_type4'];
				
				
				$title5 = $_POST['title5'];
				$firstname5 = $_POST['firstname5'];
				$middlename5 = $_POST['middlename5']; 
				$surname5 = $_POST['surname5'];
				$dob5 = $_POST['dob5'];
				$gender5 = $_POST['gender5'];
				$country5 = $_POST['country5'];
				$relationship5 = $_POST['relationship5'];
				$amount_covered5 = $_POST['amount_covered5'];
				$plan_type5 = $_POST['plan_type5'];
				
				$qry1 = "INSERT INTO tbl_family_members SET title ='$title1',firstname='$firstname1',middlename='$middlename1',
				surname='$surname1',dob='$dob1',gender='$gender1',relationship='$relationship1',country='$country1',amount_covered='$amount_covered1',plan_type = '$plan_type1',principal_idnum_passport = '$idnum' ";
				$result1 = mysqli_query($db,$qry1);
				
				$qry2 = "INSERT INTO tbl_family_members SET title ='$title2',firstname='$firstname2',middlename='$middlename2',
				surname='$surname2',dob='$dob2',gender='$gender2',relationship='$relationship2',country='$country2',amount_covered='$amount_covered2',plan_type = '$plan_type2',principal_idnum_passport = '$idnum' ";
				$result2 = mysqli_query($db,$qry2);
				
				$qry3 = "INSERT INTO tbl_family_members SET title ='$title3',firstname='$firstname3',middlename='$middlename3',
				surname='$surname3',dob='$dob3',gender='$gender3',relationship='$relationship3',country='$country3',amount_covered='$amount_covered3',plan_type = '$plan_type3',principal_idnum_passport = '$idnum' ";
				$result3 = mysqli_query($db,$qry3);
				
				$qry4 = "INSERT INTO tbl_family_members SET title ='$title4',firstname='$firstname4',middlename='$middlename4',
				surname='$surname4',dob='$dob4',gender='$gender4',relationship='$relationship4',country='$country4',amount_covered='$amount_covered4',plan_type = '$plan_type4',principal_idnum_passport = '$idnum' ";
				$result4 = mysqli_query($db,$qry4);
				
				$qry5 = "INSERT INTO tbl_family_members SET title ='$title5',firstname='$firstname5',middlename='$middlename5',
				surname='$surname5',dob='$dob5',gender='$gender5',relationship='$relationship5',country='$country5',amount_covered='$amount_covered5',plan_type = '$plan_type5',principal_idnum_passport = '$idnum' ";
				$result5 = mysqli_query($db,$qry5);
				
				
			}
			elseif($dependents == 6)
			{
				$title1 = $_POST['title1'];
				$firstname1 = $_POST['firstname1'];
				$middlename1 = $_POST['middlename1']; 
				$surname1 = $_POST['surname1'];
				$dob1 = $_POST['dob1'];
				$gender1 = $_POST['gender1'];
				$country1 = $_POST['country1'];
				$relationship1 = $_POST['relationship1'];
				$amount_covered1 = $_POST['amount_covered1'];
				$plan_type1 = $_POST['plan_type1'];
				
				$title2 = $_POST['title2'];
				$firstname2 = $_POST['firstname2'];
				$middlename2 = $_POST['middlename1']; 
				$surname2 = $_POST['surname1'];
				$dob2 = $_POST['dob1'];
				$gender2 = $_POST['gender1'];
				$country2 = $_POST['country1'];
				$relationship2 = $_POST['relationship2'];
				$amount_covered2 = $_POST['amount_covered2'];
				$plan_type2 = $_POST['plan_type2'];
				
				$title3 = $_POST['title3'];
				$firstname3 = $_POST['firstname3'];
				$middlename3 = $_POST['middlename3']; 
				$surname3 = $_POST['surname3'];
				$dob3 = $_POST['dob3'];
				$gender3 = $_POST['gender3'];
				$country3 = $_POST['country3'];
				$relationship3 = $_POST['relationship3'];
				$amount_covered3 = $_POST['amount_covered3'];
				$plan_type3 = $_POST['plan_type3'];
				
				$title4 = $_POST['title4'];
				$firstname4 = $_POST['firstname4'];
				$middlename4 = $_POST['middlename4']; 
				$surname4 = $_POST['surname4'];
				$dob4 = $_POST['dob4'];
				$gender4 = $_POST['gender4'];
				$country4 = $_POST['country4'];
				$relationship4 = $_POST['relationship4'];
				$amount_covered4 = $_POST['amount_covered4'];
				$plan_type4 = $_POST['plan_type4'];
				
				
				$title5 = $_POST['title5'];
				$firstname5 = $_POST['firstname5'];
				$middlename5 = $_POST['middlename5']; 
				$surname5 = $_POST['surname5'];
				$dob5 = $_POST['dob5'];
				$gender5 = $_POST['gender5'];
				$country5 = $_POST['country5'];
				$relationship5 = $_POST['relationship5'];
				$amount_covered5 = $_POST['amount_covered5'];
				$plan_type5 = $_POST['plan_type5'];
				
				$title6 = $_POST['title6'];
				$firstname6 = $_POST['firstname6'];
				$middlename6 = $_POST['middlename6']; 
				$surname6 = $_POST['surname6'];
				$dob6 = $_POST['dob6'];
				$gender6 = $_POST['gender6'];
				$country6 = $_POST['country6'];
				$relationship6 = $_POST['relationship6'];
				$amount_covered6 = $_POST['amount_covered6'];
				$plan_type6 = $_POST['plan_type6'];
				
				$qry1 = "INSERT INTO tbl_family_members SET title ='$title1',firstname='$firstname1',middlename='$middlename1',
				surname='$surname1',dob='$dob1',gender='$gender1',relationship='$relationship1',country='$country1',amount_covered='$amount_covered1',plan_type = '$plan_type1',principal_idnum_passport = '$idnum' ";
				$result1 = mysqli_query($db,$qry1);
				
				$qry2 = "INSERT INTO tbl_family_members SET title ='$title2',firstname='$firstname2',middlename='$middlename2',
				surname='$surname2',dob='$dob2',gender='$gender2',relationship='$relationship2',country='$country2',amount_covered='$amount_covered2',plan_type = '$plan_type2',principal_idnum_passport = '$idnum' ";
				$result2 = mysqli_query($db,$qry2);
				
				$qry3 = "INSERT INTO tbl_family_members SET title ='$title3',firstname='$firstname3',middlename='$middlename3',
				surname='$surname3',dob='$dob3',gender='$gender3',relationship='$relationship3',country='$country3',amount_covered='$amount_covered3',plan_type = '$plan_type3',principal_idnum_passport = '$idnum' ";
				$result3 = mysqli_query($db,$qry3);
				
				$qry4 = "INSERT INTO tbl_family_members SET title ='$title4',firstname='$firstname4',middlename='$middlename4',
				surname='$surname4',dob='$dob4',gender='$gender4',relationship='$relationship4',country='$country4',amount_covered='$amount_covered4',plan_type = '$plan_type4',principal_idnum_passport = '$idnum' ";
				$result4 = mysqli_query($db,$qry4);
				
				$qry5 = "INSERT INTO tbl_family_members SET title ='$title5',firstname='$firstname5',middlename='$middlename5',
				surname='$surname5',dob='$dob5',gender='$gender5',relationship='$relationship5',country='$country5',amount_covered='$amount_covered5',plan_type = '$plan_type5',principal_idnum_passport = '$idnum' ";
				$result5 = mysqli_query($db,$qry5);
				
				$qry6 = "INSERT INTO tbl_family_members SET title ='$title6',firstname='$firstname6',middlename='$middlename6',
				surname='$surname6',dob='$dob6',gender='$gender6',relationship='$relationship6',country='$country6',amount_covered='$amount_covered6',plan_type = '$plan_type6',principal_idnum_passport = '$idnum' ";
				$result6 = mysqli_query($db,$qry6);
				
				
			
			}
			elseif($dependents == 7)
			{
				$title1 = $_POST['title1'];
				$firstname1 = $_POST['firstname1'];
				$middlename1 = $_POST['middlename1']; 
				$surname1 = $_POST['surname1'];
				$dob1 = $_POST['dob1'];
				$gender1 = $_POST['gender1'];
				$country1 = $_POST['country1'];
				$relationship1 = $_POST['relationship1'];
				$amount_covered1 = $_POST['amount_covered1'];
				$plan_type1 = $_POST['plan_type1'];
				
				$title2 = $_POST['title2'];
				$firstname2 = $_POST['firstname2'];
				$middlename2 = $_POST['middlename1']; 
				$surname2 = $_POST['surname1'];
				$dob2 = $_POST['dob1'];
				$gender2 = $_POST['gender1'];
				$country2 = $_POST['country1'];
				$relationship2 = $_POST['relationship2'];
				$amount_covered2 = $_POST['amount_covered2'];
				$plan_type2 = $_POST['plan_type2'];
				
				$title3 = $_POST['title3'];
				$firstname3 = $_POST['firstname3'];
				$middlename3 = $_POST['middlename3']; 
				$surname3 = $_POST['surname3'];
				$dob3 = $_POST['dob3'];
				$gender3 = $_POST['gender3'];
				$country3 = $_POST['country3'];
				$relationship3 = $_POST['relationship3'];
				$amount_covered3 = $_POST['amount_covered3'];
				$plan_type3 = $_POST['plan_type3'];
				
				$title4 = $_POST['title4'];
				$firstname4 = $_POST['firstname4'];
				$middlename4 = $_POST['middlename4']; 
				$surname4 = $_POST['surname4'];
				$dob4 = $_POST['dob4'];
				$gender4 = $_POST['gender4'];
				$country4 = $_POST['country4'];
				$relationship4 = $_POST['relationship4'];
				$amount_covered4 = $_POST['amount_covered4'];
				$plan_type4 = $_POST['plan_type4'];
				
				
				$title5 = $_POST['title5'];
				$firstname5 = $_POST['firstname5'];
				$middlename5 = $_POST['middlename5']; 
				$surname5 = $_POST['surname5'];
				$dob5 = $_POST['dob5'];
				$gender5 = $_POST['gender5'];
				$country5 = $_POST['country5'];
				$relationship5 = $_POST['relationship5'];
				$amount_covered5 = $_POST['amount_covered5'];
				$plan_type5 = $_POST['plan_type5'];
				
				$title6 = $_POST['title6'];
				$firstname6 = $_POST['firstname6'];
				$middlename6 = $_POST['middlename6']; 
				$surname6 = $_POST['surname6'];
				$dob6 = $_POST['dob6'];
				$gender6 = $_POST['gender6'];
				$country6 = $_POST['country6'];
				$relationship6 = $_POST['relationship6'];
				$amount_covered6 = $_POST['amount_covered6'];
				$plan_type6 = $_POST['plan_type6'];
				
				$title7 = $_POST['title7'];
				$firstname7 = $_POST['firstname7'];
				$middlename7 = $_POST['middlename7']; 
				$surname7 = $_POST['surname7'];
				$dob7 = $_POST['dob7'];
				$gender7 = $_POST['gender7'];
				$country7 = $_POST['country7'];
				$relationship7 = $_POST['relationship7'];
				$amount_covered7 = $_POST['amount_covered7'];
				$plan_type7 = $_POST['plan_type7'];
				
				$qry1 = "INSERT INTO tbl_family_members SET title ='$title1',firstname='$firstname1',middlename='$middlename1',
				surname='$surname1',dob='$dob1',gender='$gender1',relationship='$relationship1',country='$country1',amount_covered='$amount_covered1',plan_type = '$plan_type1',principal_idnum_passport = '$idnum' ";
				$result1 = mysqli_query($db,$qry1);
				
				$qry2 = "INSERT INTO tbl_family_members SET title ='$title2',firstname='$firstname2',middlename='$middlename2',
				surname='$surname2',dob='$dob2',gender='$gender2',relationship='$relationship2',country='$country2',amount_covered='$amount_covered2',plan_type = '$plan_type2',principal_idnum_passport = '$idnum' ";
				$result2 = mysqli_query($db,$qry2);
				
				$qry3 = "INSERT INTO tbl_family_members SET title ='$title3',firstname='$firstname3',middlename='$middlename3',
				surname='$surname3',dob='$dob3',gender='$gender3',relationship='$relationship3',country='$country3',amount_covered='$amount_covered3',plan_type = '$plan_type3',principal_idnum_passport = '$idnum' ";
				$result3 = mysqli_query($db,$qry3);
				
				$qry4 = "INSERT INTO tbl_family_members SET title ='$title4',firstname='$firstname4',middlename='$middlename4',
				surname='$surname4',dob='$dob4',gender='$gender4',relationship='$relationship4',country='$country4',amount_covered='$amount_covered4',plan_type = '$plan_type4',principal_idnum_passport = '$idnum' ";
				$result4 = mysqli_query($db,$qry4);
				
				$qry5 = "INSERT INTO tbl_family_members SET title ='$title5',firstname='$firstname5',middlename='$middlename5',
				surname='$surname5',dob='$dob5',gender='$gender5',relationship='$relationship5',country='$country5',amount_covered='$amount_covered5',plan_type = '$plan_type5',principal_idnum_passport = '$idnum' ";
				$result5 = mysqli_query($db,$qry5);
				
				$qry6 = "INSERT INTO tbl_family_members SET title ='$title6',firstname='$firstname6',middlename='$middlename6',
				surname='$surname6',dob='$dob6',gender='$gender6',relationship='$relationship6',country='$country6',amount_covered='$amount_covered6',plan_type = '$plan_type6',principal_idnum_passport = '$idnum' ";
				$result6 = mysqli_query($db,$qry6);
				
				$qry7 = "INSERT INTO tbl_family_members SET title ='$title7',firstname='$firstname7',middlename='$middlename7',
				surname='$surname7',dob='$dob7',gender='$gender7',relationship='$relationship7',country='$country7',amount_covered='$amount_covered7',plan_type = '$plan_type7',principal_idnum_passport = '$idnum' ";
				$result7 = mysqli_query($db,$qry7);
				
				
			}
			elseif($dependents == 8)
			{
				$title1 = $_POST['title1'];
				$firstname1 = $_POST['firstname1'];
				$middlename1 = $_POST['middlename1']; 
				$surname1 = $_POST['surname1'];
				$dob1 = $_POST['dob1'];
				$gender1 = $_POST['gender1'];
				$country1 = $_POST['country1'];
				$relationship1 = $_POST['relationship1'];
				$amount_covered1 = $_POST['amount_covered1'];
				$plan_type1 = $_POST['plan_type1'];
				
				$title2 = $_POST['title2'];
				$firstname2 = $_POST['firstname2'];
				$middlename2 = $_POST['middlename1']; 
				$surname2 = $_POST['surname1'];
				$dob2 = $_POST['dob1'];
				$gender2 = $_POST['gender1'];
				$country2 = $_POST['country1'];
				$relationship2 = $_POST['relationship2'];
				$amount_covered2 = $_POST['amount_covered2'];
				$plan_type2 = $_POST['plan_type2'];
				
				$title3 = $_POST['title3'];
				$firstname3 = $_POST['firstname3'];
				$middlename3 = $_POST['middlename3']; 
				$surname3 = $_POST['surname3'];
				$dob3 = $_POST['dob3'];
				$gender3 = $_POST['gender3'];
				$country3 = $_POST['country3'];
				$relationship3 = $_POST['relationship3'];
				$amount_covered3 = $_POST['amount_covered3'];
				$plan_type3 = $_POST['plan_type3'];
				
				$title4 = $_POST['title4'];
				$firstname4 = $_POST['firstname4'];
				$middlename4 = $_POST['middlename4']; 
				$surname4 = $_POST['surname4'];
				$dob4 = $_POST['dob4'];
				$gender4 = $_POST['gender4'];
				$country4 = $_POST['country4'];
				$relationship4 = $_POST['relationship4'];
				$amount_covered4 = $_POST['amount_covered4'];
				$plan_type4 = $_POST['plan_type4'];
				
				
				$title5 = $_POST['title5'];
				$firstname5 = $_POST['firstname5'];
				$middlename5 = $_POST['middlename5']; 
				$surname5 = $_POST['surname5'];
				$dob5 = $_POST['dob5'];
				$gender5 = $_POST['gender5'];
				$country5 = $_POST['country5'];
				$relationship5 = $_POST['relationship5'];
				$amount_covered5 = $_POST['amount_covered5'];
				$plan_type5 = $_POST['plan_type5'];
				
				$title6 = $_POST['title6'];
				$firstname6 = $_POST['firstname6'];
				$middlename6 = $_POST['middlename6']; 
				$surname6 = $_POST['surname6'];
				$dob6 = $_POST['dob6'];
				$gender6 = $_POST['gender6'];
				$country6 = $_POST['country6'];
				$relationship6 = $_POST['relationship6'];
				$amount_covered6 = $_POST['amount_covered6'];
				$plan_type6 = $_POST['plan_type6'];
				
				$title7 = $_POST['title7'];
				$firstname7 = $_POST['firstname7'];
				$middlename7 = $_POST['middlename7']; 
				$surname7 = $_POST['surname7'];
				$dob7 = $_POST['dob7'];
				$gender7 = $_POST['gender7'];
				$country7 = $_POST['country7'];
				$relationship7 = $_POST['relationship7'];
				$amount_covered7 = $_POST['amount_covered7'];
				$plan_type7 = $_POST['plan_type7'];
				
				$title8 = $_POST['title8'];
				$firstname8 = $_POST['firstname8'];
				$middlename8 = $_POST['middlename8']; 
				$surname8 = $_POST['surname8'];
				$dob8 = $_POST['dob8'];
				$gender8 = $_POST['gender8'];
				$country8 = $_POST['country8'];
				$relationship8 = $_POST['relationship8'];
				$amount_covered8 = $_POST['amount_covered8'];
				$plan_type8 = $_POST['plan_type8'];
				
				$qry1 = "INSERT INTO tbl_family_members SET title ='$title1',firstname='$firstname1',middlename='$middlename1',
				surname='$surname1',dob='$dob1',gender='$gender1',relationship='$relationship1',country='$country1',amount_covered='$amount_covered1',plan_type = '$plan_type1',principal_idnum_passport = '$idnum' ";
				$result1 = mysqli_query($db,$qry1);
				
				$qry2 = "INSERT INTO tbl_family_members SET title ='$title2',firstname='$firstname2',middlename='$middlename2',
				surname='$surname2',dob='$dob2',gender='$gender2',relationship='$relationship2',country='$country2',amount_covered='$amount_covered2',plan_type = '$plan_type2',principal_idnum_passport = '$idnum' ";
				$result2 = mysqli_query($db,$qry2);
				
				$qry3 = "INSERT INTO tbl_family_members SET title ='$title3',firstname='$firstname3',middlename='$middlename3',
				surname='$surname3',dob='$dob3',gender='$gender3',relationship='$relationship3',country='$country3',amount_covered='$amount_covered3',plan_type = '$plan_type3',principal_idnum_passport = '$idnum' ";
				$result3 = mysqli_query($db,$qry3);
				
				$qry4 = "INSERT INTO tbl_family_members SET title ='$title4',firstname='$firstname4',middlename='$middlename4',
				surname='$surname4',dob='$dob4',gender='$gender4',relationship='$relationship4',country='$country4',amount_covered='$amount_covered4',plan_type = '$plan_type4',principal_idnum_passport = '$idnum' ";
				$result4 = mysqli_query($db,$qry4);
				
				$qry5 = "INSERT INTO tbl_family_members SET title ='$title5',firstname='$firstname5',middlename='$middlename5',
				surname='$surname5',dob='$dob5',gender='$gender5',relationship='$relationship5',country='$country5',amount_covered='$amount_covered5',plan_type = '$plan_type5',principal_idnum_passport = '$idnum' ";
				$result5 = mysqli_query($db,$qry5);
				
				$qry6 = "INSERT INTO tbl_family_members SET title ='$title6',firstname='$firstname6',middlename='$middlename6',
				surname='$surname6',dob='$dob6',gender='$gender6',relationship='$relationship6',country='$country6',amount_covered='$amount_covered6',plan_type = '$plan_type6',principal_idnum_passport = '$idnum' ";
				$result6 = mysqli_query($db,$qry6);
				
				$qry7 = "INSERT INTO tbl_family_members SET title ='$title7',firstname='$firstname7',middlename='$middlename7',
				surname='$surname7',dob='$dob7',gender='$gender7',relationship='$relationship7',country='$country7',amount_covered='$amount_covered7',plan_type = '$plan_type7',principal_idnum_passport = '$idnum' ";
				$result7 = mysqli_query($db,$qry7);
				
				$qry8 = "INSERT INTO tbl_family_members SET title ='$title8',firstname='$firstname8',middlename='$middlename8',
				surname='$surname8',dob='$dob8',gender='$gender8',relationship='$relationship8',country='$country8',amount_covered='$amount_covered8',plan_type = '$plan_type8',principal_idnum_passport = '$idnum' ";
				$result8 = mysqli_query($db,$qry8);
				
			
			}
			elseif($dependents == 9)
			{
				$title1 = $_POST['title1'];
				$firstname1 = $_POST['firstname1'];
				$middlename1 = $_POST['middlename1']; 
				$surname1 = $_POST['surname1'];
				$dob1 = $_POST['dob1'];
				$gender1 = $_POST['gender1'];
				$country1 = $_POST['country1'];
				$relationship1 = $_POST['relationship1'];
				$amount_covered1 = $_POST['amount_covered1'];
				$plan_type1 = $_POST['plan_type1'];
				
				$title2 = $_POST['title2'];
				$firstname2 = $_POST['firstname2'];
				$middlename2 = $_POST['middlename1']; 
				$surname2 = $_POST['surname1'];
				$dob2 = $_POST['dob1'];
				$gender2 = $_POST['gender1'];
				$country2 = $_POST['country1'];
				$relationship2 = $_POST['relationship2'];
				$amount_covered2 = $_POST['amount_covered2'];
				$plan_type2 = $_POST['plan_type2'];
				
								$title3 = $_POST['title3'];
				$firstname3 = $_POST['firstname3'];
				$middlename3 = $_POST['middlename3']; 
				$surname3 = $_POST['surname3'];
				$dob3 = $_POST['dob3'];
				$gender3 = $_POST['gender3'];
				$country3 = $_POST['country3'];
				$relationship3 = $_POST['relationship3'];
				$amount_covered3 = $_POST['amount_covered3'];
				$plan_type3 = $_POST['plan_type3'];
				
				$title4 = $_POST['title4'];
				$firstname4 = $_POST['firstname4'];
				$middlename4 = $_POST['middlename4']; 
				$surname4 = $_POST['surname4'];
				$dob4 = $_POST['dob4'];
				$gender4 = $_POST['gender4'];
				$country4 = $_POST['country4'];
				$relationship4 = $_POST['relationship4'];
				$amount_covered4 = $_POST['amount_covered4'];
				$plan_type4 = $_POST['plan_type4'];
				
				
				$title5 = $_POST['title5'];
				$firstname5 = $_POST['firstname5'];
				$middlename5 = $_POST['middlename5']; 
				$surname5 = $_POST['surname5'];
				$dob5 = $_POST['dob5'];
				$gender5 = $_POST['gender5'];
				$country5 = $_POST['country5'];
				$relationship5 = $_POST['relationship5'];
				$amount_covered5 = $_POST['amount_covered5'];
				$plan_type5 = $_POST['plan_type5'];
				
				$title6 = $_POST['title6'];
				$firstname6 = $_POST['firstname6'];
				$middlename6 = $_POST['middlename6']; 
				$surname6 = $_POST['surname6'];
				$dob6 = $_POST['dob6'];
				$gender6 = $_POST['gender6'];
				$country6 = $_POST['country6'];
				$relationship6 = $_POST['relationship6'];
				$amount_covered6 = $_POST['amount_covered6'];
				$plan_type6 = $_POST['plan_type6'];
				
				$title7 = $_POST['title7'];
				$firstname7 = $_POST['firstname7'];
				$middlename7 = $_POST['middlename7']; 
				$surname7 = $_POST['surname7'];
				$dob7 = $_POST['dob7'];
				$gender7 = $_POST['gender7'];
				$country7 = $_POST['country7'];
				$relationship7 = $_POST['relationship7'];
				$amount_covered7 = $_POST['amount_covered7'];
				$plan_type7 = $_POST['plan_type7'];
				
				$title8 = $_POST['title8'];
				$firstname8 = $_POST['firstname8'];
				$middlename8 = $_POST['middlename8']; 
				$surname8 = $_POST['surname8'];
				$dob8 = $_POST['dob8'];
				$gender8 = $_POST['gender8'];
				$country8 = $_POST['country8'];
				$relationship8 = $_POST['relationship8'];
				$amount_covered8 = $_POST['amount_covered8'];
				$plan_type8 = $_POST['plan_type8'];
				
				
				$title9 = $_POST['title9'];
				$firstname9 = $_POST['firstname9'];
				$middlename9 = $_POST['middlename9']; 
				$surname9 = $_POST['surname9'];
				$dob9 = $_POST['dob9'];
				$gender9 = $_POST['gender9'];
				$country9 = $_POST['country9'];
				$relationship9 = $_POST['relationship9'];
				$amount_covered9 = $_POST['amount_covered9'];
				$plan_type9 = $_POST['plan_type9'];
				
				$qry1 = "INSERT INTO tbl_family_members SET title ='$title1',firstname='$firstname1',middlename='$middlename1',
				surname='$surname1',dob='$dob1',gender='$gender1',relationship='$relationship1',country='$country1',amount_covered='$amount_covered1',plan_type = '$plan_type1',principal_idnum_passport = '$idnum' ";
				$result1 = mysqli_query($db,$qry1);
				
				$qry2 = "INSERT INTO tbl_family_members SET title ='$title2',firstname='$firstname2',middlename='$middlename2',
				surname='$surname2',dob='$dob2',gender='$gender2',relationship='$relationship2',country='$country2',amount_covered='$amount_covered2',plan_type = '$plan_type2',principal_idnum_passport = '$idnum' ";
				$result2 = mysqli_query($db,$qry2);
				
				$qry3 = "INSERT INTO tbl_family_members SET title ='$title3',firstname='$firstname3',middlename='$middlename3',
				surname='$surname3',dob='$dob3',gender='$gender3',relationship='$relationship3',country='$country3',amount_covered='$amount_covered3',plan_type = '$plan_type3',principal_idnum_passport = '$idnum' ";
				$result3 = mysqli_query($db,$qry3);
				
				$qry4 = "INSERT INTO tbl_family_members SET title ='$title4',firstname='$firstname4',middlename='$middlename4',
				surname='$surname4',dob='$dob4',gender='$gender4',relationship='$relationship4',country='$country4',amount_covered='$amount_covered4',plan_type = '$plan_type4',principal_idnum_passport = '$idnum' ";
				$result4 = mysqli_query($db,$qry4);
				
				$qry5 = "INSERT INTO tbl_family_members SET title ='$title5',firstname='$firstname5',middlename='$middlename5',
				surname='$surname5',dob='$dob5',gender='$gender5',relationship='$relationship5',country='$country5',amount_covered='$amount_covered5',plan_type = '$plan_type5',principal_idnum_passport = '$idnum' ";
				$result5 = mysqli_query($db,$qry5);
				
				$qry6 = "INSERT INTO tbl_family_members SET title ='$title6',firstname='$firstname6',middlename='$middlename6',
				surname='$surname6',dob='$dob6',gender='$gender6',relationship='$relationship6',country='$country6',amount_covered='$amount_covered6',plan_type = '$plan_type6',principal_idnum_passport = '$idnum' ";
				$result6 = mysqli_query($db,$qry6);
				
				$qry7 = "INSERT INTO tbl_family_members SET title ='$title7',firstname='$firstname7',middlename='$middlename7',
				surname='$surname7',dob='$dob7',gender='$gender7',relationship='$relationship7',country='$country7',amount_covered='$amount_covered7',plan_type = '$plan_type7',principal_idnum_passport = '$idnum' ";
				$result7 = mysqli_query($db,$qry7);
				
				$qry8 = "INSERT INTO tbl_family_members SET title ='$title8',firstname='$firstname8',middlename='$middlename8',
				surname='$surname8',dob='$dob8',gender='$gender8',relationship='$relationship8',country='$country8',amount_covered='$amount_covered8',plan_type = '$plan_type8',principal_idnum_passport = '$idnum' ";
				$result8 = mysqli_query($db,$qry8);
				
				$qry9 = "INSERT INTO tbl_family_members SET title ='$title9',firstname='$firstname9',middlename='$middlename9',
				surname='$surname9',dob='$dob9',gender='$gender9',relationship='$relationship9',country='$country9',amount_covered='$amount_covered9',plan_type = '$plan_type9',principal_idnum_passport = '$idnum' ";
				$result9 = mysqli_query($db,$qry9);
				

			}

			if($result)
			{
					$send = new Sendmail;
					$subject = "Application Form Received";
					$alt_subject = "Application Form";
					
					//send to applicant
					$message = "Hi ".ucfirst($firstname)." ".ucfirst($surname).",<br/><br/>Thank you for choosing Zimnat Insurance Solutions for Zimbabweans living in the Diaspora.
					Your application has been received and we will get back to you once it has been processed.<br/></br> Visit www.zimnat.co.zw today! <br/></br> Kind Regards, <br/></br> Zimnat Team.";
					$send->send_mail($email,$subject,$message,$alt_subject);
					header("location: application-success.php?title=$title&&fname=$firstname&&sname=$surname");
					exit();	
			}
			
?>			