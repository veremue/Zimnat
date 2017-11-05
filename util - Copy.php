<?php
/*CONNECT TO DATABASE*/
//require_once('config.php');


function CalculatePremium($dob, $amount_covered,$plan_type,$db) {
/*GET THE CALCULATION PARAMETERS FROM DATABASE*/
/*1. CALCULATE CLIENT AGE*/
echo 'dob '.$dob;
$age = date_diff(date_create($dob), date_create('now'))->y;
//echo 'age  '.$age;

/*Sum Assured of basic plan*/
$sum_assured = $amount_covered;

/*Policy year*/
$policy_year = 1;

/*Premium Term*/
$premium_term = 20;

/*Premium Mode*/
$premium_mode = $plan_type;

/*Net Monthly Premium Rate*/
$net_monthly_premium_rate = 0;
$sql_monthly_prates = "select * from tbl_monthly_net_premium_rates where age = '$age' ";
$result_prates = mysqli_query($db,$sql_monthly_prates);
echo "sql ".$sql_monthly_prates;
//echo "result ".$result_prates;
$row_prates = mysqli_fetch_array($result_prates,MYSQLI_ASSOC);
$benefit2500 = $row_prates['benefit2500'];
$benefit5000 = $row_prates['benefit5000'];
$benefit10000 = $row_prates['benefit10000'];
$benefit15000 = $row_prates['benefit15000'];
$benefit20000 = $row_prates['benefit20000'];

if($amount_covered == 2500){
		$net_monthly_premium_rate = $benefit2500;
}
elseif($amount_covered == 5000){
		$net_monthly_premium_rate = $benefit5000;
}
elseif($amount_covered == 10000){
		$net_monthly_premium_rate = $benefit10000;
}
elseif($amount_covered == 15000){
		$net_monthly_premium_rate = $benefit15000;
}
elseif($amount_covered == 25000){
		$net_monthly_premium_rate = $benefit25000;
}

/*Rate Divisor*/
$rate_divisor = 1000;

/*Modal Factor*/
$sql_modal_factors = "select * from tbl_modal_factors where age = '$age'";
$result = mysqli_query($db,$sql_modal_factors);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$monthly = $row['monthly'];
$quarterly  = $row['quarterly'];
$half_yearly  = $row['half_yearly'];
$annually = $row['annually'];

$modal_factor = 0;

if($plan_type == 'Monthly')
{
	$modal_factor = $monthly;
}
else if($plan_type == 'Quartely')
{
	$modal_factor = $quarterly;
}
else if($plan_type == 'Half_Yearly')
{
	$modal_factor = $half_yearly;
}
else if($plan_type == 'Annually')
{
	$modal_factor = $annually;
}


/*Basic Plan Net Premium*/
$basic_plan_net_premium = $sum_assured * $net_monthly_premium_rate * $modal_factor / $rate_divisor;

/*Administration Fee*/
$administration_fee = 0;

$sql_admin_fees = "select * from tbl_admin_fees where policy_year = '$policy_year'";
$result_admin = mysqli_query($db,$sql_admin_fees);
$row_admin = mysqli_fetch_array($result_admin,MYSQLI_ASSOC);	 	 	 
 if($plan_type == 'Monthly')
{
	$administration_fee = $basic_plan_net_premium * $row_admin['monthly'] / 100;
}
else if($plan_type == 'Quartely')
{
	$administration_fee = $basic_plan_net_premium * $row_admin['quarterly'] / 100;
}
else if($plan_type == 'Half_Yearly')
{
	$administration_fee = $basic_plan_net_premium * $row_admin['half_yearly'] / 100;
}
else if($plan_type == 'Annually')
{
	$administration_fee = $basic_plan_net_premium * $row_admin['annually'] / 100;
}
 
/*DISPLAY QUOTAION*/
$quotation_value = $basic_plan_net_premium + $administration_fee;
//echo "quote  :  $".$quotation_value;

return $quotation_value;

}


?>