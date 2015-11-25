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
            <td><label>Valor Unitário: </label></td>
            <td><input id="vlr_unit" type="text" name="vlruni" value="" maxlength="20"></td>
        </tr>
        <tr>
            <td><label>Quantidade: </label></td>
            <td><input id="quantidade" type="text" name="qntd" value="" onblur="setarTotal()" maxlength="20"></td>
        <tr>
            <td><label>Valor Total: </label></td>
            <td><input id="vlr_total" type="text" name="obs" value="0,00" disabled></td>
        </tr>
        <tr>
            <td><label>Descrição: </label></td>
            <td><input type="int" name="descc" value="" maxlength="40"></td>
        </tr>
        <tr>
            <td><label>Data do Pedido: </label></td>
            <td><input type="date" name="data" value=""></td>
        </tr>

    </table>
    <input type="submit" id="button" value="Cadastrar"/>
</form>

<?php
if (isset($_POST) && count($_POST) > 0) {

    $salva_nome = $_POST['nome'];
    $salva_dtnasc = $_POST['dtnasc'];
    $salva_telefone = $_POST['telefone'];
    $salva_email = $_POST['email'];
    $salva_obs = $_POST['obs'];
    //Validar valores vazio.
    if (trim($salva_nome) == "") {
        echo 'Sem Nome.';
        return;
    }
    if (trim($salva_dtnasc) == "") {
        echo 'Sem Data de Nascimento.';
        return;
    }
    if (trim($salva_telefone) == "") {
        echo 'Sem Telefone.';
        return;
    }
    if (trim($salva_email) == "") {
        echo 'Sem Email.';
        return;
    }

    $sql_gravar = mysql_query("INSERT INTO cliente (nome, dtnasc, fone, email, obs) "
            . "value ('$salva_nome','$salva_dtnasc','$salva_telefone','$salva_email','$salva_obs')");
}
?>
