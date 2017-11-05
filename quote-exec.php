<?php
/*CONNECT TO DATABASE*/
require_once('config.php');
require_once('util.php');

/*RECEIVE ALL PARAMETERS FOR CALCULATIONS FROM FORM*/
			$firstname = $_POST['firstname'];
			$middlename = $_POST['middlename']; 
			$surname = $_POST['surname'];
			$dob = $_POST['dob'];
			$marital_status = $_POST['marital_status'];
			$dependents = $_POST['dependents'];
			$homephone = $_POST['homephone'];
			$address = $_POST['address'];			
			$country = $_POST['country'];
			$postal_code = $_POST['postal_code'];
			$plan_type = $_POST['plan_type'];			
			$amount_covered = $_POST['amount_covered'];
			$total_premium = 0;
			$premium_dependents = 0;
			
			$premium_policy_owner = CalculatePremium($dob, $amount_covered,$plan_type,$db);
			$premium_dependent1 = 0;
			$premium_dependent2 = 0;
			$premium_dependent3 = 0;
			$premium_dependent4 = 0;
			$premium_dependent5 = 0;
			$premium_dependent6 = 0;
			$premium_dependent7 = 0;
			$premium_dependent8 = 0;
			$premium_dependent9 = 0;
			
			
			if($dependents == 0)
			{
				$total_premium = $premium_policy_owner ;
			}
			elseif($dependents == 1)
			{
				$relationship1 = $_POST['relationship1'];
				$dob1 = $_POST['dob1'];
				$amount_covered1 = $_POST['amount_covered1'];
				$plan_type1 = $_POST['plan_type1'];
				
				$premium_dependent1 = CalculatePremium($dob1, $amount_covered1,$plan_type1,$db);
				$total_premium = $premium_policy_owner + $premium_dependent1;
			}
			elseif($dependents == 2)
			{
				$relationship1 = $_POST['relationship1'];
				$dob1 = $_POST['dob1'];
				$amount_covered1 = $_POST['amount_covered1'];
				$plan_type1 = $_POST['plan_type1'];
				
				$relationship2 = $_POST['relationship2'];
				$dob2 = $_POST['dob2'];
				$amount_covered2 = $_POST['amount_covered2'];
				$plan_type2 = $_POST['plan_type2'];
				
				$premium_dependent1 = CalculatePremium($dob1, $amount_covered1,$plan_type1,$db);
				$premium_dependent2 = CalculatePremium($dob2, $amount_covered2,$plan_type2,$db);
				$total_premium = $premium_policy_owner + $premium_dependent1 +$premium_dependent2;
			}
			elseif($dependents == 3)
			{
				$relationship1 = $_POST['relationship1'];
				$dob1 = $_POST['dob1'];
				$amount_covered1 = $_POST['amount_covered1'];
				$plan_type1 = $_POST['plan_type1'];
				
				$relationship2 = $_POST['relationship2'];
				$dob2 = $_POST['dob2'];
				$amount_covered3 = $_POST['amount_covered3'];
				$plan_type3 = $_POST['plan_type3'];
				
				$relationship3 = $_POST['relationship3'];
				$dob3 = $_POST['dob3'];
				$amount_covered3 = $_POST['amount_covered3'];
				$plan_type3 = $_POST['plan_type3'];
				
				$premium_dependent1 = CalculatePremium($dob1, $amount_covered1,$plan_type1,$db);
				$premium_dependent2 = CalculatePremium($dob2, $amount_covered2,$plan_type2,$db);
				$premium_dependent3 = CalculatePremium($dob3, $amount_covered3,$plan_type3,$db);
				$total_premium = $premium_policy_owner + $premium_dependent1 + $premium_dependent2  + $premium_dependent3;
				
				
			}
			elseif($dependents == 4)
			{
				$relationship1 = $_POST['relationship1'];
				$dob1 = $_POST['dob1'];
				$amount_covered1 = $_POST['amount_covered1'];
				$plan_type1 = $_POST['plan_type1'];
				
				$relationship2 = $_POST['relationship2'];
				$dob2 = $_POST['dob2'];
				$amount_covered3 = $_POST['amount_covered3'];
				$plan_type3 = $_POST['plan_type3'];
				
				$relationship3 = $_POST['relationship3'];
				$dob3 = $_POST['dob3'];
				$amount_covered3 = $_POST['amount_covered3'];
				$plan_type3 = $_POST['plan_type3'];
				
				$relationship4 = $_POST['relationship4'];
				$dob4 = $_POST['dob4'];
				$amount_covered4 = $_POST['amount_covered4'];
				$plan_type4 = $_POST['plan_type4'];
				
				$premium_dependent1 = CalculatePremium($dob1, $amount_covered1,$plan_type1,$db);
				$premium_dependent2 = CalculatePremium($dob2, $amount_covered2,$plan_type2,$db);
				$premium_dependent3 = CalculatePremium($dob3, $amount_covered3,$plan_type3,$db);
				$premium_dependent4 = CalculatePremium($dob4, $amount_covered4,$plan_type4,$db);
				$total_premium = $premium_policy_owner + $premium_dependent1 + $premium_dependent2  + $premium_dependent3 + $premium_dependent4;
				
			}
			elseif($dependents == 5)
			{
				$relationship1 = $_POST['relationship1'];
				$dob1 = $_POST['dob1'];
				$amount_covered1 = $_POST['amount_covered1'];
				$plan_type1 = $_POST['plan_type1'];
				
				$relationship2 = $_POST['relationship2'];
				$dob2 = $_POST['dob2'];
				$amount_covered3 = $_POST['amount_covered3'];
				$plan_type3 = $_POST['plan_type3'];
				
				$relationship3 = $_POST['relationship3'];
				$dob3 = $_POST['dob3'];
				$amount_covered3 = $_POST['amount_covered3'];
				$plan_type3 = $_POST['plan_type3'];
				
				$relationship4 = $_POST['relationship4'];
				$dob4 = $_POST['dob4'];
				$amount_covered4 = $_POST['amount_covered4'];
				$plan_type4 = $_POST['plan_type4'];
				
				$relationship5 = $_POST['relationship5'];
				$dob5 = $_POST['dob5'];
				$amount_covered5 = $_POST['amount_covered5'];
				$plan_type5 = $_POST['plan_type5'];
				
				$premium_dependent1 = CalculatePremium($dob1, $amount_covered1,$plan_type1,$db);
				$premium_dependent2 = CalculatePremium($dob2, $amount_covered2,$plan_type2,$db);
				$premium_dependent3 = CalculatePremium($dob3, $amount_covered3,$plan_type3,$db);
				$premium_dependent4 = CalculatePremium($dob4, $amount_covered4,$plan_type4,$db);
				$premium_dependent5 = CalculatePremium($dob5, $amount_covered5,$plan_type5,$db);
				$total_premium = $premium_policy_owner + $premium_dependent1 + $premium_dependent2  + $premium_dependent3 + $premium_dependent4 + $premium_dependent5 ;
			}
			elseif($dependents == 6)
			{
				$relationship1 = $_POST['relationship1'];
				$dob1 = $_POST['dob1'];
				$amount_covered1 = $_POST['amount_covered1'];
				$plan_type1 = $_POST['plan_type1'];
				
				$relationship2 = $_POST['relationship2'];
				$dob2 = $_POST['dob2'];
				$amount_covered3 = $_POST['amount_covered3'];
				$plan_type3 = $_POST['plan_type3'];
				
				$relationship3 = $_POST['relationship3'];
				$dob3 = $_POST['dob3'];
				$amount_covered3 = $_POST['amount_covered3'];
				$plan_type3 = $_POST['plan_type3'];
				
				$relationship4 = $_POST['relationship4'];
				$dob4 = $_POST['dob4'];
				$amount_covered4 = $_POST['amount_covered4'];
				$plan_type4 = $_POST['plan_type4'];
				
				$relationship5 = $_POST['relationship5'];
				$dob5 = $_POST['dob5'];
				$amount_covered5 = $_POST['amount_covered5'];
				$plan_type5 = $_POST['plan_type5'];
				
				$relationship6 = $_POST['relationship6'];
				$dob6 = $_POST['dob6'];
				$amount_covered6 = $_POST['amount_covered6'];
				$plan_type6 = $_POST['plan_type6'];
				
				
				$premium_dependent1 = CalculatePremium($dob1, $amount_covered1,$plan_type1,$db);
				$premium_dependent2 = CalculatePremium($dob2, $amount_covered2,$plan_type2,$db);
				$premium_dependent3 = CalculatePremium($dob3, $amount_covered3,$plan_type3,$db);
				$premium_dependent4 = CalculatePremium($dob4, $amount_covered4,$plan_type4,$db);
				$premium_dependent5 = CalculatePremium($dob5, $amount_covered5,$plan_type5,$db);
				$premium_dependent6 = CalculatePremium($dob6, $amount_covered6,$plan_type6,$db);
				$total_premium = $premium_policy_owner + $premium_dependent1 + $premium_dependent2  + $premium_dependent3 + $premium_dependent4 + $premium_dependent5 +$premium_dependent6  ;
			}
			elseif($dependents == 7)
			{
				$relationship1 = $_POST['relationship1'];
				$dob1 = $_POST['dob1'];
				$amount_covered1 = $_POST['amount_covered1'];
				$plan_type1 = $_POST['plan_type1'];
				
				$relationship2 = $_POST['relationship2'];
				$dob2 = $_POST['dob2'];
				$amount_covered3 = $_POST['amount_covered3'];
				$plan_type3 = $_POST['plan_type3'];
				
				$relationship3 = $_POST['relationship3'];
				$dob3 = $_POST['dob3'];
				$amount_covered3 = $_POST['amount_covered3'];
				$plan_type3 = $_POST['plan_type3'];
				
				$relationship4 = $_POST['relationship4'];
				$dob4 = $_POST['dob4'];
				$amount_covered4 = $_POST['amount_covered4'];
				$plan_type4 = $_POST['plan_type4'];
				
				$relationship5 = $_POST['relationship5'];
				$dob5 = $_POST['dob5'];
				$amount_covered5 = $_POST['amount_covered5'];
				$plan_type5 = $_POST['plan_type5'];
				
				$relationship6 = $_POST['relationship6'];
				$dob6 = $_POST['dob6'];
				$amount_covered6 = $_POST['amount_covered6'];
				$plan_type6 = $_POST['plan_type6'];
				
				$relationship7 = $_POST['relationship7'];
				$dob7 = $_POST['dob7'];
				$amount_covered7 = $_POST['amount_covered7'];
				$plan_type7 = $_POST['plan_type7'];
				
				$premium_dependent1 = CalculatePremium($dob1, $amount_covered1,$plan_type1,$db);
				$premium_dependent2 = CalculatePremium($dob2, $amount_covered2,$plan_type2,$db);
				$premium_dependent3 = CalculatePremium($dob3, $amount_covered3,$plan_type3,$db);
				$premium_dependent4 = CalculatePremium($dob4, $amount_covered4,$plan_type4,$db);
				$premium_dependent5 = CalculatePremium($dob5, $amount_covered5,$plan_type5,$db);
				$premium_dependent6 = CalculatePremium($dob6, $amount_covered6,$plan_type6,$db);
				$premium_dependent7 = CalculatePremium($dob7, $amount_covered7,$plan_type7,$db);
				$total_premium = $premium_policy_owner + $premium_dependent1 + $premium_dependent2  + $premium_dependent3 + $premium_dependent4 + $premium_dependent5 +$premium_dependent6 +  $premium_dependent7;
			}
			elseif($dependents == 8)
			{
				$relationship1 = $_POST['relationship1'];
				$dob1 = $_POST['dob1'];
				$amount_covered1 = $_POST['amount_covered1'];
				$plan_type1 = $_POST['plan_type1'];
				
				$relationship2 = $_POST['relationship2'];
				$dob2 = $_POST['dob2'];
				$amount_covered3 = $_POST['amount_covered3'];
				$plan_type3 = $_POST['plan_type3'];
				
				$relationship3 = $_POST['relationship3'];
				$dob3 = $_POST['dob3'];
				$amount_covered3 = $_POST['amount_covered3'];
				$plan_type3 = $_POST['plan_type3'];
				
				$relationship4 = $_POST['relationship4'];
				$dob4 = $_POST['dob4'];
				$amount_covered4 = $_POST['amount_covered4'];
				$plan_type4 = $_POST['plan_type4'];
				
				$relationship5 = $_POST['relationship5'];
				$dob5 = $_POST['dob5'];
				$amount_covered5 = $_POST['amount_covered5'];
				$plan_type5 = $_POST['plan_type5'];
				
				$relationship6 = $_POST['relationship6'];
				$dob6 = $_POST['dob6'];
				$amount_covered6 = $_POST['amount_covered6'];
				$plan_type6 = $_POST['plan_type6'];
				
				$relationship7 = $_POST['relationship7'];
				$dob7 = $_POST['dob7'];
				$amount_covered7 = $_POST['amount_covered7'];
				$plan_type7 = $_POST['plan_type7'];
				
				$relationship8 = $_POST['relationship8'];
				$dob8 = $_POST['dob8'];
				$amount_covered8 = $_POST['amount_covered8'];
				$plan_type8 = $_POST['plan_type8'];
				
				$premium_dependent1 = CalculatePremium($dob1, $amount_covered1,$plan_type1,$db);
				$premium_dependent2 = CalculatePremium($dob2, $amount_covered2,$plan_type2,$db);
				$premium_dependent3 = CalculatePremium($dob3, $amount_covered3,$plan_type3,$db);
				$premium_dependent4 = CalculatePremium($dob4, $amount_covered4,$plan_type4,$db);
				$premium_dependent5 = CalculatePremium($dob5, $amount_covered5,$plan_type5,$db);
				$premium_dependent6 = CalculatePremium($dob6, $amount_covered6,$plan_type6,$db);
				$premium_dependent7 = CalculatePremium($dob7, $amount_covered7,$plan_type7,$db);
				$premium_dependent8 = CalculatePremium($dob8, $amount_covered8,$plan_type8,$db);
				$total_premium = $premium_policy_owner + $premium_dependent1 + $premium_dependent2  + $premium_dependent3 + $premium_dependent4 + $premium_dependent5 +$premium_dependent6 +  $premium_dependent7 + $premium_dependent8;
			}
			elseif($dependents == 9)
			{
				$relationship1 = $_POST['relationship1'];
				$dob1 = $_POST['dob1'];
				$amount_covered1 = $_POST['amount_covered1'];
				$plan_type1 = $_POST['plan_type1'];
				
				$relationship2 = $_POST['relationship2'];
				$dob2 = $_POST['dob2'];
				$amount_covered3 = $_POST['amount_covered3'];
				$plan_type3 = $_POST['plan_type3'];
				
				$relationship3 = $_POST['relationship3'];
				$dob3 = $_POST['dob3'];
				$amount_covered3 = $_POST['amount_covered3'];
				$plan_type3 = $_POST['plan_type3'];
				
				$relationship4 = $_POST['relationship4'];
				$dob4 = $_POST['dob4'];
				$amount_covered4 = $_POST['amount_covered4'];
				$plan_type4 = $_POST['plan_type4'];
				
				$relationship5 = $_POST['relationship5'];
				$dob5 = $_POST['dob5'];
				$amount_covered5 = $_POST['amount_covered5'];
				$plan_type5 = $_POST['plan_type5'];
				
				$relationship6 = $_POST['relationship6'];
				$dob6 = $_POST['dob6'];
				$amount_covered6 = $_POST['amount_covered6'];
				$plan_type6 = $_POST['plan_type6'];
				
				$relationship7 = $_POST['relationship7'];
				$dob7 = $_POST['dob7'];
				$amount_covered7 = $_POST['amount_covered7'];
				$plan_type7 = $_POST['plan_type7'];
				
				$relationship8 = $_POST['relationship8'];
				$dob8 = $_POST['dob8'];
				$amount_covered8 = $_POST['amount_covered8'];
				$plan_type8 = $_POST['plan_type8'];
				
				$relationship9 = $_POST['relationship9'];
				$dob9 = $_POST['dob9'];
				$amount_covered9 = $_POST['amount_covered9'];
				$plan_type9 = $_POST['plan_type9'];
				
				$premium_dependent1 = CalculatePremium($dob1, $amount_covered1,$plan_type1,$db);
				$premium_dependent2 = CalculatePremium($dob2, $amount_covered2,$plan_type2,$db);
				$premium_dependent3 = CalculatePremium($dob3, $amount_covered3,$plan_type3,$db);
				$premium_dependent4 = CalculatePremium($dob4, $amount_covered4,$plan_type4,$db);
				$premium_dependent5 = CalculatePremium($dob5, $amount_covered5,$plan_type5,$db);
				$premium_dependent6 = CalculatePremium($dob6, $amount_covered6,$plan_type6,$db);
				$premium_dependent7 = CalculatePremium($dob7, $amount_covered7,$plan_type7,$db);
				$premium_dependent8 = CalculatePremium($dob8, $amount_covered8,$plan_type8,$db);
				$premium_dependent9 = CalculatePremium($dob9, $amount_covered9,$plan_type9,$db);
				$total_premium = $premium_policy_owner + $premium_dependent1 + $premium_dependent2  + $premium_dependent3 + $premium_dependent4 + $premium_dependent5 +$premium_dependent6 +  $premium_dependent7 + $premium_dependent8 + $premium_dependent9; 
			}

			$premium_dependents = $premium_dependent1 + $premium_dependent2  + $premium_dependent3 + $premium_dependent4 + $premium_dependent5 +$premium_dependent6 +  $premium_dependent7 + $premium_dependent8 + $premium_dependent9;

			header("location: quote-message.php?quote=$premium_policy_owner&&fname=$firstname&&mname=$middlename&&dob=$dob&&marital_status=$marital_status&&homephone=$homephone&&address=$address&&country=$country&&plan_type=$plan_type&&amount_covered=$amount_covered&&sname=$surname&&age=$age&&cover=$amount_covered&&dependents=$dependents&&plan=$plan_type&&premium_dependents=$premium_dependents&&total_premium=$total_premium");
			exit();		

?>