<?php
$Id = trim(filter_input(INPUT_POST, 'Id', FILTER_SANITIZE_STRING));
$name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
$shortDesc = trim(filter_input(INPUT_POST, 'shortDesc', FILTER_SANITIZE_STRING));
$imgPath = trim(filter_input(INPUT_POST, 'imgPath', FILTER_SANITIZE_STRING));
$docPath = trim(filter_input(INPUT_POST, 'docPath', FILTER_SANITIZE_STRING));



if (empty($name) || empty($shortDesc) || empty($imgPath) || empty($docPath)) {
	$error = "Invalid mydata Entry. Please check all field and try again";
	//include ('../views/error.php');
}
else {
	require "database.php";
	
	$statement = $var_db->prepare('UPDATE tbltutorial SET name = :name, shortDesc = :shortDesc, imgPath = :imgPath, docPath = :docPath WHERE Id = :Id');

	$statement->bindParam(':Id',$Id);
	$statement->bindParam(':name',$name);
	$statement->bindParam(':shortDesc',$price);
	$statement->bindParam(':imgPath',$description);
	$statement->bindParam(':docPath',$description);
	$statement->execute();

	header('Location: ../MyData.php');
}
?>