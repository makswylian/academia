<?php
$isAdmin = $_SESSION['is_admin'] == "1" ? TRUE : FALSE;

if (!$isAdmin) {
    header('home.php');
    exit();
}
?>

<form name="form_user" method="post" action="?ps=usuario_cadastro">
    <table>
        <tr>
            <td class="titulo" colspan="2" align="center">CADASTRO DE USUÁRIOS</td>
        </tr>
        <tr>
            <td><label>Nome: </label></td>
            <td><input type="text" name="nome" value="" maxlength="35"></td>
        </tr>
        <tr>
            <td><label>Email: </label></td>
            <td><input type="text" name="email" value="" maxlength="35"></td>
        </tr>
        <tr>
            <td><label>Usuario: </label></td>
            <td><input type="text" name="usuario" value="" maxlength="20"></td>
        </tr>
        <tr>
            <td><label>Senha: </label></td>
            <td><input type="password" name="senha" value="" maxlength="20"></td>

        </tr>
        <tr>
            <td><label>Nivel de acesso: </label></td>
            <td>
                <input type="radio" name="nivel_acesso" value="0">Administrador
                <input type="radio" name="nivel_acesso" value="1">Usuário Comum
            </td>

        </tr>
    </table>
    <input type="submit" id="button1" value="Cadastrar"   />
</form>


<?php
if (isset($_POST) && count($_POST) > 0) {

    $salva_nome = $_POST['nome'];
    $salva_email = $_POST['email'];
    $salva_usuario = $_POST['usuario'];
    $salva_senha = $_POST['senha'];

//Validar valores vazio.
    if (trim($salva_nome) == "") {
        echo 'Sem Nome.';
        return;
    }
    if (trim($salva_usuario) == "") {
        echo 'Sem Usuário.';
        return;
    }
    if (trim($salva_senha) == "") {
        echo 'Sem Senha.';
        return;
    }

    $sql_gravar = mysql_query("INSERT INTO usuario (nome, email, usuario, senha) "
            . "value ('$salva_nome','$salva_email','$salva_usuario','$salva_senha')");
}
?>

