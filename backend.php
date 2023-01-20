<?php
header("Content-Type: application/json");

$response = array(
    "status" => "success",
    "data" => "dato del backend"
);

echo json_encode($response);
?>
