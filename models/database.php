<?php
$var_Dsn = "mysql:host=localhost;dbname=tutorials";
$var_username = "root";
$var_password = "";


try{
	$var_db = new PDO($var_Dsn,$var_username,$var_password);
}
catch(PDOException $var_E) {
	$var_message = $var_E->getMessage();
	exit();
}
?>

