<?php

require "conection.php";
header("Content-Type: application/json");



$nomeprod = $_POST["nome"];
$precoprod = $_POST["preco"];
$imgprod = $_POST["imagem"];
$output = array();



$sql = "INSERT INTO produtos (nome, preco, url) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$nomeprod, $precoprod, $imgprod]);

$output["status"] = "sucesso";
$output["message"] = "Produto cadastrado com sucesso.";
echo json_encode($output);

?>
