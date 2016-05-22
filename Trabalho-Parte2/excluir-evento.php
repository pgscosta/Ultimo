<?php 

include_once 'bancoDados.php';

$bancoDados = new bancoDados();

$id = isset($_GET['id']) && $_GET['id'] != "" ? $_GET['id'] : null;

if ($id != null) {
	$result = $bancoDados->excluirEvento($id);

	if ($result > 0) {
		header("location:pg-listar-eventos.php?result=ok");
	} else {
		header("location:pg-listar-eventos.php?result=ko");
	}
} else {
	header("location:pg-listar-eventos.php");
}

?>