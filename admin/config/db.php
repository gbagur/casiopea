<?php 
$host="localhost";
$db="agenda";
$user="root";
$password="";

try {
        $conexion=new PDO("mysql:host=$host;dbname=$db",$user,$password);
        

} catch ( Exception $ex) {
    echo $ex->getMessage();

} ?>

