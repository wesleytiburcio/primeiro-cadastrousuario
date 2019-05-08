<?php 
require_once 'classes/usuarios.php';
$usuario = new Usuarios();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Primeiro</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		
		<h2 align="center">PRIMEIRO</h2><hr>
		<a href="index.php" class="btn btn-primary">Home</a>
		<a href="cadastrar.php" class="btn btn-success">Novo Usuário</a>
		<hr>