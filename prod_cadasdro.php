<form name="form_user" method="post" action="?ps=prod_cadastro">
    <table>
        <tr>
            <td class="titulo" colspan="2" align="center">CADASTRAR PRODUTO</td>
        </tr>
        <tr>
            <td><label>Códido do Produto: </label></td>
            <td><input type="int" name="idproduto" value="" maxlength="20"></td>
        </tr>
        <tr>
            <td><label>Códido Fornecedor: </label></td>
            <td><input type="int" name="idforn" value="" maxlength="20"></td>
        </tr>
        <tr>
            <td><label>Data de Validade: </label></td>
            <td><input id="" type="text" name="data" value="" maxlength="20"></td>
        </tr>
        <tr>
            <td><label>Descrição: </label></td>
            <td><input id="" type="text" name="desc" value="" maxlength="20"></td>
        <tr>
        <tr>
            <td><label>Tamanho: </label></td>
            <td><input id="" type="text" name="tamanho" value="" disabled></td>
        </tr>
        <tr>
            <td><label>Tipo: </label></td>
            <td><input type="int" name="dtipo" value="" maxlength="40"></td>
        </tr>
        <tr>
            <td><label>Peso: </label></td>
            <td><input type="int" name="peso" value="" maxlength="40"></td>
        </tr>
        <tr>
            <td><label>Valor Unitário: </label></td>
            <td><input type="int" name="valoruni" value="" maxlength="40"></td>
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
