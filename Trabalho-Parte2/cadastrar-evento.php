<?php 

include_once 'bancoDados.php';

$bancoDados = new bancoDados();

$id = isset($_POST['id']) && $_POST['id'] != "" ? $_POST['id'] : null;
$nome = isset($_POST['nome']) && $_POST['nome'] != "" ? $_POST['nome'] : null;
$local = isset($_POST['local']) && $_POST['local'] != "" ? $_POST['local'] : null;
$descricao = isset($_POST['descricao']) && $_POST['descricao'] != "" ? $_POST['descricao'] : null;
$detalhes = isset($_POST['detalhes']) && $_POST['detalhes'] != "" ? $_POST['detalhes'] : null;
$modalidade = isset($_POST['modalidade']) && $_POST['modalidade'] != "" ? $_POST['modalidade'] : null;


if ($nome != null && $local != null && $descricao != null && $modalidade != null)
{
	$result = $bancoDados->cadastrarEvento($id, $nome, $local, $descricao, $detalhes, $modalidade);

	if ($result) {
		header("location:pg-cadastro-eventos.php?result=ok");
	} else {
		header("location:pg-cadastro-eventos.php?result=ko");
	}
}
else
{
	header("location:pg-cadastro-eventos.php?result=mandatoryFields");
}


?>