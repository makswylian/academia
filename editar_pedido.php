<?php
include_once('classe/AcademiaDao.php');
$id = $_GET["idpedido"];
$pedido = new AcademiaDao();
$pedido = $pedido->getIdpedido($id);
?>
<form name="form_user" method="post" action="?ps=editar_pedido">


    <table border=1 cellspacing=0 cellpadding=2 bordercolor="#620f0f"> 

        <tr>
            <td>Nome:</td>
            <td><input name="nome" type="text" maxlength="19" value="<?= $usuario["nome"] ?>" /></td>
        </tr>
        <tr>
            <td>Usuário:</td>
            <td><input name="usuario" type="text" maxlength="30" value="<?= $usuario["usuario"] ?>" /></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input name="email" type="text" maxlength="50" value="<?= $usuario["email"] ?>" /></td>
        </tr>
        <tr>
            <td>Senha:</td>
            <td><input name="senha" type="password" maxlength="50"  value="<?= $usuario["senha"] ?>" /></td>
        </tr>
        <tr>
            <td>Nivel:</td>
            <td><input name="nivel" type="text" maxlength="1" value="<?= $usuario["nivel"] ?>" /></td>
        </tr>
    </table>
    <input type="hidden" name="idusuario" value="<?= $_GET["iduser"]; ?>">
    <input type="submit" class="form_bt" value="Salvar Edição"   />
</form>

<?php
if (isset($_POST) && count($_POST) > 0) {

    $salva_nome = $_POST['nome'];
    $salva_email = $_POST['email'];
    $salva_usuario = $_POST['usuario'];
    $salva_senha = $_POST['senha'];
    $salva_nivel = $_POST ['nivel'];
    $idusuario = $_POST ['idusuario'];

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

    $sql_gravar = mysql_query("UPDATE usuario SET nome='$salva_nome',email='$salva_email', "
            . "usuario='$salva_usuario', senha='$salva_senha', nivel='$salva_nivel' WHERE iduser=$idusuario");
    echo 'OPERAÇÃO BEM SUCEDIDA';
}
?>