<?php
session_start();
  if(!isset($_SESSION["sesion"])){
    header("Location: index.php");
  }else{

    if($_SESSION["sesion"]=="ok"){
      $datos=$_SESSION["sesion"];
    }
  }
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Casiopea</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <?php $url="http://".$_SERVER["HTTP_HOST"]."/casiopea" ?>

    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="<?php echo $url;?>">Casiopea<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/admin/inicio.php">Your Birthday Schedule</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/admin/seccion/cerrar.php">Close</a>
     
        </div>
    </nav>


    <div class="container">
</br>
        <div class="row">