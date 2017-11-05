<?php

function CalculatePremium($dob, $amount_covered,$plan_type,$db) {
/*GET THE CALCULATION PARAMETERS FROM DATABASE*/
/*1. CALCULATE CLIENT AGE*/
echo 'dob '.$dob;
$age = date_diff(date_create($dob), date_create('now'))->y;
//echo 'age  '.$age;


/*Premium Mode*/
$premium_mode = $plan_type;


$sql_mode = "select `$premium_mode` as mode from  tbl_gp_for_checking where age = '$age'";
$result_mode = mysqli_query($db,$sql_mode);
echo "sql ".$sql_mode;


$row_mode = mysqli_fetch_array($result_mode);
$mode = $row_mode['mode'];


/*DISPLAY QUOTAION*/
$quotation_value = ($amount_covered * $mode)/1000;
//echo "quote  :  $".$quotation_value;

return $quotation_value;

}


?>