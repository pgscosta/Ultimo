<?php 
include_once 'cabecalho.php';

$listaEventos = $bancoDados->listarEventos();

if (isset($_GET['result']) && $_GET['result'] != "") : 
?>
<div class="info">
    <p>
    <?php
        switch ($_GET['result']) {
            case 'ok':
                echo "SUCESSO: Evento excluído do sistema!";
                break;

            case 'ko':
                echo "ERRO: Não foi possível excluir o evento!";
                break;
          
            default:
                break;
        }
    ?>
    </p>
</div>
<?php endif; ?>

<div class="container">
	<div id="lista-eventos">
		<h2>Eventos Cadastrados</h2>
		<table>
			<thead>
				<tr>
					<th>Nome</th>
					<th>Local</th>
					<th>Modalidade</th>
					<th>Descrição</th>
					<th>Detalhes</th>
					<?php if (isset($_SESSION['LOGGEDIN-OBH']) && $_SESSION['LOGGEDIN-OBH'] == true) : ?>
						<th>Ações</th>
					<?php endif; ?>
				</tr>
			</thead>
			<tbody>
				<?php while ($evento = $listaEventos->fetch_assoc()) : ?>
				<tr>
					<td><?php echo $evento['nome']; ?></td>
					<td><?php echo $evento['local']; ?></td>
					<td><?php echo $evento['modalidade']; ?></td>
					<td><?php echo $evento['descricao']; ?></td>
					<td><?php echo $evento['detalhes']; ?></td>
					<?php if (isset($_SESSION['LOGGEDIN-OBH']) && $_SESSION['LOGGEDIN-OBH'] == true) : ?>
						<td><a href="excluir-evento.php?id=<?php echo $evento['id']; ?>">Excluir</a> | <a href="pg-cadastro-eventos.php?id=<?php echo $evento['id']; ?>">Editar</a></td>
					<?php endif; ?>
				</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</div>

<?php
include_once 'rodape.php';
?>