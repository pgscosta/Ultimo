<?php 

include_once 'cabecalho.php';
if (isset($_COOKIE['REMEMBER-ME']))
{
	unset($_COOKIE['REMEMBER-ME']);
}
if (isset($_COOKIE['ACCESS-IN']))
{
	unset($_COOKIE['ACCESS-IN']);
}

session_destroy();

if (isset($_SESSION['LOGGEDIN-OBH']))
{
	unset($_SESSION['LOGGEDIN-OBH']);
}

?>
<script type="text/javascript">
location.href='index.php';
</script> 