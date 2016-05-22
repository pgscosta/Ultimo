<?php 

include_once 'bancoDados.php';

$bancoDados = new bancoDados();

$id = isset($_POST['id']) && $_POST['id'] != "" ? $_POST['id'] : null;
$nome = isset($_POST['nome']) && $_POST['nome'] != "" ? $_POST['nome'] : null;
$sobrenome = isset($_POST['sobrenome']) && $_POST['sobrenome'] != "" ? $_POST['sobrenome'] : null;
$dataNasc = isset($_POST['data']) && $_POST['data'] != "" ? $_POST['data'] : null;
$rg = isset($_POST['rg']) && $_POST['rg'] != "" ? $_POST['rg'] : null;
$cpf = isset($_POST['cpf']) && $_POST['cpf'] != "" ? $_POST['cpf'] : null;
$rua = isset($_POST['rua']) && $_POST['rua'] != "" ? $_POST['rua'] : null;
$numero = isset($_POST['numero']) && $_POST['numero'] != "" ? $_POST['numero'] : null;
$bairro = isset($_POST['bairro']) && $_POST['bairro'] != "" ? $_POST['bairro'] : null;
$estado = isset($_POST['estado']) && $_POST['estado'] != "" ? $_POST['estado'] : null;
$cidade = isset($_POST['cidade']) && $_POST['cidade'] != "" ? $_POST['cidade'] : null;
$cep = isset($_POST['cep']) && $_POST['cep'] != "" ? $_POST['cep'] : null;
$email = isset($_POST['email']) && $_POST['email'] != "" ? $_POST['email'] : null;
$imagem = isset($_POST['imagem']) && $_POST['imagem'] != "" ? $_POST['imagem'] : null;
$login = isset($_POST['login']) && $_POST['login'] != "" ? $_POST['login'] : null;
$senha = isset($_POST['senha']) && $_POST['senha'] != "" ? $_POST['senha'] : null;
$confirmarSenha = isset($_POST['confirmar-senha']) && $_POST['confirmar-senha'] != "" ? $_POST['confirmar-senha'] : null;

if ($senha == $confirmarSenha) {

	if ($nome != null && $cpf != null && $cep != null && $login != null && $senha != null)
	{
		$result = $bancoDados->cadastrarUsuario($id, $nome, $sobrenome, $dataNasc, $rg, $cpf, $rua, $numero, $bairro, $estado, $cidade, $cep, $email, $imagem, $login, $senha, $confirmarSenha);

		if ($result) {
			header("location:pg-cadastro.php?result=ok");
		} else {
			header("location:pg-cadastro.php?result=ko");
		}
	}
	else
	{
		header("location:pg-cadastro.php?result=mandatoryFields");
	}
} else {
	header("location:pg-cadastro.php?result=wrongPass");
}


?>