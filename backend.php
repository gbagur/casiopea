<?php
header("Content-Type: application/json");

$response = array(
    "status" => "success",
    "data" => "hola"
);

echo json_encode($response);
?>
