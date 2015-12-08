<form name="form_user" method="post" action="?ps=gera_pedido">
    <table>
        <tr>
            <td class="titulo" colspan="2" align="center">GERAR PEDIDO</td>
        </tr>
        <tr>
            <td><label>Códido do Usuário: </label></td>
            <td><input type="int" name="iduser" value="" maxlength="20"></td>
        </tr>
        <tr>
            <td><label>Códido Cliente: </label></td>
            <td><input type="int" name="idcliente" value="" maxlength="20"></td>
        </tr>
        <tr>
            <td><label>Códido Produto: </label></td>
            <td><input type="int" name="idproduto" value="" maxlength="20"></td>
        </tr>
        <tr>
            <td><label>Valor Unitário: </label></td>
            <td><input id="vlr_unit" type="text" name="vlruni" value="" maxlength="20"></td>
        </tr>
        <tr>
            <td><label>Quantidade: </label></td>
            <td><input id="quantidade" type="text" name="qtde" value="" onblur="setarTotal()" maxlength="20"></td>
        <tr>
            <td><label>Valor Total: </label></td>
            <td><input id="vlr_total" type="text" name="vlrtotal" value="0,00" readonly="true"></td>
        </tr>
        <tr>
            <td><label>Status: </label></td>
            <td><input type="int" name="status" value="" maxlength="40"></td>
        </tr>
        <tr>
            <td><label>Data do Pedido: </label></td>
            <td><input type="date" name="data" value=""></td>
        </tr>

    </table>
    <input type="submit" class="form_bt" value="Cadastrar"/>
</form>

<?php
if (isset($_POST) && count($_POST) > 0) {

    $salva_iduser = $_POST['iduser'];
    $salva_idcliente = $_POST['idcliente'];
    $salva_idproduto = $_POST['idproduto'];
    $salva_vlruni = $_POST['vlruni'];
    $salva_qtde = $_POST['qtde'];
    $salva_vlrtotal = $_POST['vlrtotal'];
    $salva_status = $_POST['status'];
    $salva_data = $_POST['data'];
    //Validar valores vazio.
    if (trim($salva_iduser) == "") {
        echo 'Sem Código do Usuário.';
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
    if (trim($salva_qtde) == "") {
        echo 'Sem Quantidade.';
        return;
    }

    $queryInsert = "INSERT INTO pedido (iduser, idcliente, qtde , status, vlruni,  vlrtotal, data, idproduto) value ($salva_iduser,$salva_idcliente,$salva_qtde ,'$salva_status',$salva_vlruni,$salva_vlrtotal,'$salva_data', $salva_idproduto)";
    $sql_gravar = mysql_query($queryInsert);
if (mysql_error()){
    echo mysql_error();
}
    echo 'OPERAÇÃO BEM SUCEDIDA';
}
?>
