<?php 
include_once 'cabecalho.php'; 

if (isset($_GET['msg']) && $_GET['msg'] != "") : 
?>
<div class="info">
    <p>Você está logado. Bem vindo!</p>
</div>
<?php 
elseif (isset($_SESSION['LOGGEDIN-OBH']) && $_SESSION['LOGGEDIN-OBH'] == true) :
?>
<div class="info">
    <p>Último acesso em <?php echo $_COOKIE['ACCESS-IN']; ?>.</p>
</div>
<?php 
endif;
?>

<h3> Seja bem-vindo ao Canal olimpico em BH!</h3>
<h4> Aqui você têm acesso a informações das Olimpiadas 2016 na cidade de Belo Horizonte. </h4>

<nav class="conteudo">
	<ul>
		<li><a href="pg_modalidades.php">Modalidades</a></li>
		<li><a href="pg-calendario.php">Calendário</a></li>
		<li><a href="pg-belo_horizonte.php">Belo Horizonte</a></li>
	</ul>
</nav>

<?php include_once 'rodape.php'; ?>