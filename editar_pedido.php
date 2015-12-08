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
            <td><input type="int" name="iduser" value="<?= $value["iduser"]; ?>" maxlength="20"></td>
        </tr>
        <tr>
            <td><label>Códido Cliente: </label></td>
            <td><input type="int" name="idcliente" value="<?= $value["idcliente"]; ?>" maxlength="20"></td>
        </tr>
        <tr>
            <td><label>Códido Produto: </label></td>
            <td><input type="int" name="idproduto" value="<?= $value["idproduto"]; ?>" maxlength="20"></td>
        </tr>
        <tr>
            <td><label>Valor Unitário: </label></td>
            <td><input id="vlr_unit" type="text" name="vlruni" value="<?= $value["vlruni"]; ?>" maxlength="20"></td>
        </tr>
        <tr>
            <td><label>Quantidade: </label></td>
            <td><input id="quantidade" type="text" name="qtde" value="<?= $value["qtde"]; ?>" onblur="setarTotal()" maxlength="20"></td>
        <tr>
            <td><label>Valor Total: </label></td>
            <td><input id="vlr_total" type="text" name="vlrtotal" value="<?= $value["vlrtotal"]; ?>" readonly="true"></td>
        </tr>
        <tr>
            <td><label>Status: </label></td>
            <td><input type="int" name="status" value="<?= $value["status"]; ?>" maxlength="40"></td>
        </tr>
        <tr>
            <td><label>Data do Pedido: </label></td>
            <td><input type="date" name="data" value="<?= $value["data"]; ?>"></td>
        </tr>
    </table>
    <input type="hidden" name="idpedido" value="<?= $_GET["idpedido"]; ?>">
    <input type="submit" class="form_bt" value="Salvar Edição"   />
</form>

<?php
if (isset($_POST) && count($_POST) > 0) {

    $salva_iduser = $_POST['iduser'];
    $salva_idcliente = $_POST['idcliente'];
    $salva_idproduto = $_POST['idproduto'];
    $salva_vlruni = $_POST['vlruni'];
    $salva_qtde = $_POST ['qtde'];
    $salva_vlrtotal = $_POST ['vlrtotal'];
    $salva_status = $_POST ['status'];
    $salva_data = $_POST ['data'];
    $idpedido = $_POST ['idpedido'];


//Validar valores vazio.
    if (trim($salva_iduser) == "") {
        echo 'Sem Código do Usuário .';
        return;
    }
    if (trim($salva_idcliente) == "") {
        echo 'Sem Código do Cliente.';
        return;
    }
    if (trim($salva_idproduto) == "") {
        echo 'Sem Código do Produto.';
        return;
    }
    if (trim($salva_vlruni) == "") {
        echo 'Sem Valor Unitário.';
        return;
    }
    if (trim($salva_qtde) == "") {
        echo 'Sem Quantidade.';
        return;
    }
    if (trim($salva_status) == "") {
        echo 'Sem Status.';
        return;
    }

    $sql_gravar = mysql_query("UPDATE pedido SET iduser='$salva_iduser',idcliente='$salva_idcliente', "
            . "idproduto='$salva_idproduto', vlruni='$salva_vlruni', qtde='$salva_qtde', vlrtotal='$salva_vlrtotal',"
            . " status='$salva_status', data='$salva_data' WHERE iduser=$idpedido");
    echo 'OPERAÇÃO BEM SUCEDIDA';
}
?>