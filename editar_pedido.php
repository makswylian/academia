<?php
include_once('classe/AcademiaDao.php');
$id = $_GET["idpedido"];
$pedido = new AcademiaDao();
$pedido = $pedido->getIdpedido($id);
?>
<form name="form_user" method="post" action="?ps=editar_pedido">


    <table border=1 cellspacing=0 cellpadding=2 bordercolor="#620f0f"> 

        <tr>
            <td><label>Códido do Usuário: </label></td>
            <td><input type="int" name="iduser" value="" maxlength="20"><?= $value["iduser"]; ?></td>
        </tr>
        <tr>
            <td><label>Códido Cliente: </label></td>
            <td><input type="int" name="idcliente" value="" maxlength="20"><?= $value["idcliente"]; ?></td>
        </tr>
        <tr>
            <td><label>Códido Produto: </label></td>
            <td><input type="int" name="idproduto" value="" maxlength="20"><?= $value["idproduto"]; ?></td>
        </tr>
        <tr>
            <td><label>Valor Unitário: </label></td>
            <td><input id="vlr_unit" type="text" name="vlruni" value="" maxlength="20"><?= $value["vlruni"]; ?></td>
        </tr>
        <tr>
            <td><label>Quantidade: </label></td>
            <td><input id="quantidade" type="text" name="qtde" value="" onblur="setarTotal()" maxlength="20"><?= $value["qtde"]; ?></td>
        <tr>
            <td><label>Valor Total: </label></td>
            <td><input id="vlr_total" type="text" name="vlrtotal" value="0,00" readonly="true"><?= $value["vlrtotal"]; ?></td>
        </tr>
        <tr>
            <td><label>Status: </label></td>
            <td><input type="int" name="status" value="" maxlength="40"><?= $value["status"]; ?></td>
        </tr>
        <tr>
            <td><label>Data do Pedido: </label></td>
            <td><input type="date" name="data" value=""></td>
        </tr>
    </table>
    <input type="hidden" name="idpedido" value="<?= $_GET["idpedido"]; ?>">
    <input type="submit" class="form_bt" value="Salvar Edição"   />
</form>

<?php
if (isset($_POST) && count($_POST) > 0) {

    $salva_nome = $_POST['iduser'];
    $salva_email = $_POST['idcliente'];
    $salva_usuario = $_POST['idproduto'];
    $salva_senha = $_POST['vlruni'];
    $salva_nivel = $_POST ['qtde'];
    $idusuario = $_POST ['status'];
    $idusuario = $_POST ['data'];


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