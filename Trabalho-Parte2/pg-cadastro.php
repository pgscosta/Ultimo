<?php 
include_once 'cabecalho.php'; 

$usuario = isset($_SESSION['LOGGEDIN-OBH']) ? $_SESSION['LOGGEDIN-OBH'] : null;

if (isset($_GET['result']) && $_GET['result'] != "") : 
?>
<div class="info">
    <p>
    <?php
        switch ($_GET['result']) {
            case 'ok':
                echo "SUCESSO: Usuário cadastrado no sistema!";
                break;

            case 'ko':
                echo "ERRO: Não foi possível cadastrar o usuário!";
                break;

            case 'wrongPass':
                echo "ERRO: As senhas não conferem!";
                break;

            case 'mandatoryFields':
                echo "ERRO: Campos obrigatórios não preenchidos";
                break;
          
            default:
                break;
        }
    ?>
    </p>
</div>
<?php endif; ?>

<div class="container">

    <h2 class="logo"> 
        Cadastro de Usuários  </h2>
    <p>
          Preencha o formulário abaixo para o cadastro pessoal no aplicativo seu celular
         </p>
    <form action="cadastrar-usuario.php" method="post">
      <input type="hidden" name="id" value="<?php echo isset($_GET['id']) && $usuario ? $usuario['id'] : ''; ?>">

    <!-- DADOS PESSOAIS-->
    <fieldset>
     <legend>Dados Pessoais</legend>
     <table cellspacing="10">
      <tr>
       <td>
        <label for="nome">Nome: </label>
       </td>
       <td align="left">
        <input type="text" name="nome" value="<?php echo isset($_GET['id']) && $usuario ? $usuario['nome'] : ''; ?>">
       </td>
       <td>
        <label for="sobrenome">Sobrenome: </label>
       </td>
       <td align="left">
        <input type="text" name="sobrenome" value="<?php echo isset($_GET['id']) && $usuario ? $usuario['sobrenome'] : ''; ?>">
       </td>
      </tr>
      <tr>
       <td>
        <label>Nascimento: </label>
       </td>
       <td align="left">
        <input type="date" name="data" value="<?php echo isset($_GET['id']) && $usuario ? $usuario['data_nasc'] : ''; ?>"> 
       </td>
      </tr>
      <tr>
       <td>
        <label for="rg">RG: </label>
       </td>
       <td align="left">
        <input type="text" name="rg" size="13" maxlength="13" value="<?php echo isset($_GET['id']) && $usuario ? $usuario['rg'] : ''; ?>"> 
       </td>
      </tr>
      <tr>
       <td>
        <label>CPF:</label>
       </td>
       <td align="left">
        <input type="text" name="cpf" size="11" maxlength="11" value="<?php echo isset($_GET['id']) && $usuario ? $usuario['cpf'] : ''; ?>">
       </td>
      </tr>
     </table>
    </fieldset>

    <br />
    <!-- ENDEREȏ -->
    <fieldset>
     <legend>Dados de Endereço</legend>
     <table cellspacing="10">

      <tr>
       <td>
        <label for="rua">Rua:</label>
       </td>
       <td align="left">
        <input type="text" name="rua" value="<?php echo isset($_GET['id']) && $usuario ? $usuario['rua'] : ''; ?>">
       </td>
       <td>
        <label for="numero">Numero:</label>
       </td>
       <td align="left">
        <input type="text" name="numero" size="4" value="<?php echo isset($_GET['id']) && $usuario ? $usuario['numero'] : ''; ?>">
       </td>
      </tr>
      <tr>
       <td>
        <label for="bairro">Bairro: </label>
       </td>
       <td align="left">
        <input type="text" name="bairro" value="<?php echo isset($_GET['id']) && $usuario ? $usuario['bairro'] : ''; ?>">
       </td>
      </tr>
      <tr>
       <td>
        <label for="estado">Estado:</label>
       </td>
       <td align="left">
        <select name="estado"> 
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
       </td>
      </tr>
      <tr>
       <td>
        <label for="cidade">Cidade: </label>
       </td>
       <td align="left">
        <input type="text" name="cidade" value="<?php echo isset($_GET['id']) && $usuario ? $usuario['cidade'] : ''; ?>">
       </td>
      </tr>
      <tr>
       <td>
        <label for="cep">CEP: </label>
       </td>
       <td align="left">
        <input type="text" name="cep" size="8" maxlength="8" value="<?php echo isset($_GET['id']) && $usuario ? $usuario['cep'] : ''; ?>">
       </td>
      </tr>
     </table>
    </fieldset>
    <br />

    <!-- DADOS DE LOGIN -->
    <fieldset>
     <legend>Dados de login</legend>
     <table cellspacing="10">
      <tr>
       <td>
        <label for="email">E-mail: </label>
       </td>
       <td align="left">
        <input type="text" name="email" value="<?php echo isset($_GET['id']) && $usuario ? $usuario['email'] : ''; ?>">
       </td>
      </tr>
      <tr>
       <td>
        <label for="imagem">Imagem de perfil:</label>
       </td>
       <td>
        <input type="file" name="imagem" >

       </td>
      </tr>
      <tr>
       <td>
        <label for="login">Login de usuário: </label>
       </td>
       <td align="left">
        <input type="text" name="login" value="<?php echo isset($_GET['id']) && $usuario ? $usuario['login'] : ''; ?>">
       </td>
      </tr>
      <tr>
       <td>
        <label for="senha">Senha: </label>
       </td>
       <td align="left">
        <input type="password" name="senha">
       </td>
      </tr>
      <tr>
       <td>
        <label for="confirmar-senha">Confirme a senha: </label>
       </td>
       <td align="left">
        <input type="password" name="confirmar-senha">
       </td>
      </tr>
     </table>
    </fieldset>
    <br />
    <input type="submit">
    <input type="reset" value="Limpar">
    </form>
</div>

<?php include_once 'rodape.php'; ?>