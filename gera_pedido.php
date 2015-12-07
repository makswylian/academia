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
            <td><input id="quantidade" type="text" name="qntd" value="" onblur="setarTotal()" maxlength="20"></td>
        <tr>
            <td><label>Valor Total: </label></td>
            <td><input id="vlr_total" type="text" name="vlrtotal" value="0,00" disabled></td>
        </tr>
        <tr>
            <td><label>Descrição: </label></td>
            <td><input type="int" name="descc" value="" maxlength="40"></td>
        </tr>05
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
    $salva_qntd = $_POST['qntd'];
    $salva_vlrtotal = $_POST['vlrtotal'];
    $salva_descc = $_POST['descc'];
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
    if (trim($salva_qntd) == "") {
        echo 'Sem Quantidade.';
        return;
    }


    $sql_gravar = mysql_query("INSERT INTO pedido (iduser, idcliente, idproduto, vlruni, qntd, vlrtotal, descc, data) value ($salva_iduser,$salva_idcliente,$salva_idproduto,$salva_vlruni,$salva_qntd,$salva_vlrtotal,'$salva_descc'.$salva_data)");

    echo 'OPERAÇÃO BEM SUCEDIDA';
}
?>
