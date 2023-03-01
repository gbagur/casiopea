<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Casiopea</title>

	<link rel="stylesheet" href="./css/bootstrap.min.css" />

</head>
<body>

	<?php $url="http://".$_SERVER["HTTP_HOST"]."/casiopea" ?>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<ul class="nav navbar-nav">
			
			<li class="nav-item">
				<a class="nav-link" href="index.php">Casiopea</a>
			</li>
		
			<li class="nav-item">
				<a class="nav-link" href="<?php echo $url;?>/admin/index.php">Login</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="#">Subscribe </a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="aboutus.php">About us</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="#">Contact</a>
			</li>
		</ul>
	</nav>

<div class="container">
	<div class="row"> 