<?php 

/**
* Classe usada para se conectar ao banco de Dados
*/
class bancoDados
{
	
	private $link = null;

	public function __construct()
	{
		$this->link = mysqli_connect('localhost', 'root', '', 'olimpiadasbh');
	}

	public function obterConexao()
	{
		if ($this->link == null)
		{
			$this->link = mysqli_connect('localhost', 'root', '', 'olimpiadasbh');
		}

		return $this->link;
	}

	public function cadastrarUsuario($id, $nome, $sobrenome, $dataNasc, $rg, $cpf, $rua, $numero, $bairro, $estado, $cidade, $cep, $email, $imagem, $login, $senha, $confirmarSenha)
	{
		if ($id) {
			$query = "UPDATE `usuarios` SET nome = '" . $nome . "', sobrenome = '" . $sobrenome . "', data_nasc = '" . $dataNasc . "', rg = '" . $rg . "', cpf = '" . $cpf . "', rua = '" . $rua . "', numero = '" . $numero . "', bairro = '" . $bairro . "', estado = '" . $estado . "', cidade = '" . $cidade . "', cep = '" . $cep . "', email = '" . $email . "', imagem_perfil = '" . $imagem . "', login = '" . $login . "', senha = '" . $senha . "' WHERE id = $id";
		} else {
			$query = "INSERT INTO `usuarios` (nome, sobrenome, data_nasc, rg, cpf, rua, numero, bairro, estado, cidade, cep, email, imagem_perfil, login, senha) VALUES ('" . $nome . "', '" . $sobrenome . "', '" . $dataNasc . "', '" . $rg . "', '" . $cpf . "', '" . $rua . "', '" . $numero . "', '" . $bairro . "', '" . $estado . "', '" . $cidade . "', '" . $cep . "', '" . $email . "', '" . $imagem . "', '" . $login . "', '" . $senha . "')";
		}

		return mysqli_query($this->link, $query);
	}

	public function logar($usuario, $senha)
	{
		return mysqli_query($this->link, "SELECT * FROM `usuarios` WHERE `login` = '$usuario' AND `senha`= '$senha'"); 
	}

	public function cadastrarEvento($id, $nome, $local, $descricao, $detalhes, $modalidade)
	{	
		if ($id) {
			$query = "UPDATE `eventos` SET nome = '" . $nome . "', local = '" . $local . "', descricao = '" . $descricao . "', detalhes = '" . $detalhes . "', modalidade = '" . $modalidade . "' WHERE id = $id";
		} else {
			$query = "INSERT INTO `eventos` (nome, local, descricao, detalhes, modalidade) VALUES ('" . $nome . "', '" . $local . "', '" . $descricao . "', '" . $detalhes . "', '" . $modalidade . "')";
		}

		return mysqli_query($this->link, $query); 
	}

	public function listarEventos()
	{
		return mysqli_query($this->link, "SELECT * FROM `eventos`"); 
	}

	public function buscarEvento($id)
	{
		return mysqli_query($this->link, "SELECT * FROM `eventos` WHERE id = $id"); 
	}

	public function buscarUsuario($id)
	{
		return mysqli_query($this->link, "SELECT * FROM `usuarios` WHERE id = $id"); 
	}

	public function excluirEvento($id)
	{
		$result = mysqli_query($this->link, "DELETE FROM `eventos` WHERE id = $id"); 

		return mysqli_affected_rows($this->link);
	}
}

?>