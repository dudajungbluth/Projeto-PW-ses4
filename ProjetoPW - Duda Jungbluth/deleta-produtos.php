<?php
require "conection.php";

$sql = "DELETE FROM produtos WHERE id = ?";
$stmt = $conn -> prepare($sql);
$stmt -> execute($_GET["id"]);
exit;

?>