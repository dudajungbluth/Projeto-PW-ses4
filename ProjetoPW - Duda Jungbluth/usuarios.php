<?php

require "conection.php";

$teste = true;
$mensagem  = array();


if($teste == true) {

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM users";

$stmt = $conn->query($sql);

$data = $stmt->fetchAll();

foreach($data as $row) {

echo $row["name"];

}
}

$output = array();
$output = validate();

if ($output["status"] == "erro"){
        echo json_encode($output);
        exit;
}



