<?php
/*CONNECT TO DATABASE*/
require_once('config.php');
require_once('util.php');

$premium_mode = "Monthly";
$age = 23;
$sql_mode = "select `$premium_mode` as mode from  tbl_gp_for_checking where age = '$age'";
	$premium_policy_owner = CalculatePremium("1994-05-07", 5000,$premium_mode,$db);
echo $premium_policy_owner;

?>