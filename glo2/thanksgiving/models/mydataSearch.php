<?php

$sLook = $_GET["q"];
require_once 'database.php';
$stmt = $var_db->prepare('SELECT * FROM tblthanksgiving WHERE Thanksgivingactivity LIKE :Thanksgivingactivity');
$stmt->bindValue(':Thanksgivingactivity', '%' . $sLook . '%');
$stmt->execute();
$out = $stmt->fetch();
echo "<p>" . $out['Thanksgivingactivity'] . "</p>";

?>
