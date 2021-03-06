﻿<!DOCTYPE html>
<html>
<head>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>Galaxy Swiss Bourdin</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<a class="navbar-brand" href="index.php">
			<table>
				<td>Galaxy Swiss Bourdin</td>
			</table>
			
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php?uc=visite">Rapport de visite</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Médicament</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Médecin</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Visiteur</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<?php if(!isset($_SESSION['user'])) { ?>
					<a class="" href="index.php?uc=Administration&action=Connexion"><input type="button" class="btn" value="Connexion"></a>
				<?php } else{ ?>
					<a class="" href="index.php?uc=Administration&action=Deconnexion"><input type="button" class="btn" value="Déconnexion"></a>
				<?php } ?>
			</form>
		</div>
	</nav>
