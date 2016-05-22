<?php 

session_start();

include 'bancoDados.php';

$bancoDados = new bancoDados();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$lembrar = $_POST['lembrar'];

$result = $bancoDados->logar($usuario, $senha);

if($result && mysqli_num_rows($result) > 0) 
{ 
	if ($lembrar == true)
	{
		setcookie("REMEMBER-ME", "TRUE", time() + 10800);
		setcookie("ACCESS-IN", date('d/m/Y H:i:s', time()), time() + 10800);
	}
	else
	{
		setcookie("REMEMBER-ME", "FALSE");
		setcookie("ACCESS-IN", date('d/m/Y H:i:s', time()));
	}

	$_SESSION['LOGGEDIN-OBH'] = $result->fetch_assoc();
	header("location:index.php?msg=loggedIn");
} 
else 
{ 
	header("location:pg-login.php?msg=notLoggedIn");
} 

?>