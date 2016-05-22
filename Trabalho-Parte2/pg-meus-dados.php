<?php 

include_once 'cabecalho.php';

if (!isset($_SESSION['LOGGEDIN-OBH']) || $_SESSION['LOGGEDIN-OBH'] == false) {
	header("location:index.php");
}

$usuario = $_SESSION['LOGGEDIN-OBH'];

?>
<div class="container">
	<h2>Meus Dados <span id="edit-link"><a href="pg-cadastro.php?id=<?php echo $usuario['id']; ?>">Editar</a></span></h2>
	<dl>
		<dt>Nome: </dt>
		<dd><?php echo $usuario['nome']; ?></dd>
		<dt>Sobrenome: </dt>
		<dd><?php echo $usuario['sobrenome']; ?></dd>
		<dt>Data de Nascimento: </dt>
		<dd><?php echo $usuario['data_nasc']; ?></dd>
		<dt>RG: </dt>
		<dd><?php echo $usuario['rg']; ?></dd>
		<dt>CPF: </dt>
		<dd><?php echo $usuario['cpf']; ?></dd>
		<dt>Rua: </dt>
		<dd><?php echo $usuario['rua']; ?></dd>
		<dt>Número: </dt>
		<dd><?php echo $usuario['numero']; ?></dd>
		<dt>Bairro: </dt>
		<dd><?php echo $usuario['bairro']; ?></dd>
		<dt>Estado: </dt>
		<dd style="text-transform: uppercase;"><?php echo $usuario['estado']; ?></dd>
		<dt>Cidade: </dt>
		<dd><?php echo $usuario['cidade']; ?></dd>
		<dt>Cep: </dt>
		<dd><?php echo $usuario['cep']; ?></dd>
		<dt>Email: </dt>
		<dd><?php echo $usuario['email']; ?></dd>
	</dl>
</div>

<?php include_once 'rodape.php'; ?>