<?php
$id = trim(filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT));


	require "database.php";
	
	$statement = $var_db->prepare('DELETE FROM tbltutorial WHERE Id = :id');
	
	$statement->bindValue(':id', $id);
	$statement->execute();

	header('Location: ../MyData.php');
?>