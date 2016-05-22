<?php 

include_once 'cabecalho.php';

if (!isset($_SESSION['LOGGEDIN-OBH']) || $_SESSION['LOGGEDIN-OBH'] == false) {
	header("location:index.php");
}

$evento = null;

if (isset($_GET['id']) && $_GET['id'] != "")
{
	$evento = $bancoDados->buscarEvento($_GET['id'])->fetch_assoc();
}

if (isset($_GET['result']) && $_GET['result'] != "") : 
?>
<div class="info">
    <p>
    <?php
        switch ($_GET['result']) {
            case 'ok':
                echo "SUCESSO: Evento cadastrado no sistema!";
                break;

            case 'ko':
                echo "ERRO: Não foi possível cadastrar o evento!";
                break;
          
            default:
                break;
        }
    ?>
    </p>
</div>
<?php endif; ?>

<div class="container">
	<h2>Cadastrar Evento</h2>
	<form id="form-eventos" name="form-eventos" action="cadastrar-evento.php" method="post">
		<input type="hidden" id="id" name="id" value="<?php echo $evento ? $evento['id'] : ''; ?>">
		<label for="nome">Nome</label>
		<input type="text" id="nome" name="nome" required="required" value="<?php echo $evento ? $evento['nome'] : ''; ?>">
		<label for="local">Local</label>
		<select name="local" id="local" required="required"> 
	        <option value="ac">Acre</option> 
	        <option value="al">Alagoas</option> 
	        <option value="am">Amazonas</option> 
	        <option value="ap">Amapá</option> 
	        <option value="ba">Bahia</option> 
	        <option value="ce">Ceará</option> 
	        <option value="df">Distrito Federal</option> 
	        <option value="es">Espírito Santo</option> 
	        <option value="go">Goiás</option> 
	        <option value="ma">Maranhão</option> 
	        <option value="mt">Mato Grosso</option> 
	        <option value="ms">Mato Grosso do Sul</option> 
	        <option value="mg">Minas Gerais</option> 
	        <option value="pa">Pará</option> 
	        <option value="pb">Paraíba</option> 
	        <option value="pr">Paraná</option> 
	        <option value="pe">Pernambuco</option> 
	        <option value="pi">Piauí</option> 
	        <option value="rj">Rio de Janeiro</option> 
	        <option value="rn">Rio Grande do Norte</option> 
	        <option value="ro">Rondônia</option> 
	        <option value="rs">Rio Grande do Sul</option> 
	        <option value="rr">Roraima</option> 
	        <option value="sc">Santa Catarina</option> 
	        <option value="se">Sergipe</option> 
	        <option value="sp">São Paulo</option> 
	        <option value="to">Tocantins</option> 
       	</select>
		<label for="descricao">Descrição</label>
		<textarea id="descricao" name="descricao" required="required"><?php echo $evento ? $evento['descricao'] : ''; ?></textarea>
		<label for="detalhes">Detalhes</label>
		<textarea id="detalhes" name="detalhes"><?php echo $evento ? $evento['detalhes'] : ''; ?></textarea>
		<label for="modalidade">Modalidade</label>
		<select id="modalidade" name="modalidade" required="required">
			<option value="">Selecione</option>
			<option value="Atletismo">Atletismo</option>
			<option value="Basquetebol">Basquetebol</option>
			<option value="Ciclismo de estrada">Ciclismo de estrada</option>
			<option value="Tenis">Tenis</option>
			<option value="Mountai Bike">Mountai Bike</option>
			<option value="Futebol">Futebol</option>
			<option value="Handebol">Handebol</option>
			<option value="Voleibol">Voleibol</option>
			<option value="Hipismo Saltos">Hipismo Saltos</option>
			<option value="Natação">Natação</option>
			<option value="Taekwondo">Taekwondo</option>
			<option value="Volei de praia">Volei de praia</option>
		</select>
		<button type="button">Cadastrar</button>
	</form>
</div>
<?php
include_once 'rodape.php';
?>