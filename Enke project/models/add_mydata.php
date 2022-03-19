<?php

$name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
$price = trim(filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING));
$description = trim(filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING));




if (empty($name) || empty($price) || empty($description)) {
	$error = "Invalid mydata Entry. Please check all field and try again";
	//include ('../views/error.php');
}
else {
	require "./database.php";
	
	$statement = $var_db->prepare('INSERT INTO tblmydata (name,price,description) VALUES(:name,:price,:description)');
	
	$statement->bindParam(':name',$name);
	$statement->bindParam(':price',$price);
	$statement->bindParam(':description',$description);
	$statement->execute();

	header('Location: ../createrecord.php');
}
?>