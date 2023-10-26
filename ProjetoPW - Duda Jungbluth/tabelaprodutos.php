<?php
require "conection.php";

$sql = "SELECT id, nome FROM produtos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $rows = array();
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }

    // Converte o array para JSON
    $json_data = json_encode($rows);
    echo $json_data;
} else {
    echo "0 resultados";
}


?>
