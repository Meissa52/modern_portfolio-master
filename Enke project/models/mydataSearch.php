<?php

$sLook = $_GET["q"];
require_once 'database.php';
$stmt = $var_db->prepare('SELECT * FROM tblmydata WHERE name LIKE :name');
$stmt->bindValue(':name', '%' . $sLook . '%');
$stmt->execute();
$out = $stmt->fetch();
echo "<p>" . $out['name'] . "</p>";

?>
