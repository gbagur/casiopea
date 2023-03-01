<?php
 $servidor="localhost";
 $usuario="root";
 $password="";
 $base="agenda";

 
 $conexion=mysqli_connect("$servidor","$usuario","$password") or die();
 $base=mysqli_select_db($conexion,$base);
?>