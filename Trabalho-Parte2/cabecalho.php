<?php 

include_once 'bancoDados.php';

session_start();

$bancoDados = new bancoDados();

if (isset($_SESSION['LOGGEDIN-OBH']) && $_SESSION['LOGGEDIN-OBH'] == true) {
	if (strpos($_SERVER["REQUEST_URI"], "pg-login.php")) {
		header("location:index.php");
	}
} 
// else if (strpos($_SERVER["REQUEST_URI"], "pg-login.php") == false) {
// 	header("location:pg-login.php");
// }

?>

<!DOCTYPE html>
<html>
<head>
  <title>Olimpiadas em BH</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/normalize.css">
</head>
<body>
	<header>
			<a href="index.php" id="logo">
				<h1><img src="img/logo1.png" alt="Consumo Web"></h1>
			</a>

			<?php if (isset($_SESSION['LOGGEDIN-OBH']) == false) : ?>
			<a href="pg-login.php">
				<p class="login">
					<b>Seu login:</b>
				</p>
			</a>
			<?php endif; ?>
		

		<nav class="menu">
			<ul>
				
				<?php if (isset($_SESSION['LOGGEDIN-OBH'])) : ?>
					<li><a href="index.php">Inicio</a></li>
					<li><a href="pg-cadastro.php">Cadastrar Usuários</a></li>
					<li><a href="pg-cadastro-eventos.php">Cadastrar Eventos</a></li>
					<li><a href="pg-listar-eventos.php">Listar Eventos</a></li>
					<li><a href="pg-meus-dados.php">Meus Dados</a></li>
					<li><a href="logout.php">Sair</a></li>
				<?php else : ?>
					<li><a href="index.php">Inicio</a></li>
					<li><a href="pg-cadastro.php">Cadastro</a></li>
					<li><a href="pg-listar-eventos.php">Eventos</a></li>
					<li><a href="http://www.rio2016.com/ingressos/saibamais/" target="_blank">Ingressos</a></li>
					<li><a href="pg-ajuda.php">Ajuda</a></li>
				<?php endif; ?>
			</ul>

			<div class="busca">
				<label>Busca: </label>
				<form action="http://www.google.com.br/search" id="form-busca" target="_blank">
					<input type="search" name="q" id="q">
					<input type="image" src="img/busca.png">
				</form>
			</div>
		</nav>
	</header>