<form name="form_user" method="post" action="?ps=prod_cadastro">
    <table>
        <tr>
            <td class="titulo" colspan="2" align="center">CADASTRAR PRODUTO</td>
        </tr>
        <tr>
            <td><label>Nome: </label></td>
            <td><input type="int" name="nome" value="" maxlength="20"></td>
        </tr>
        <tr>
            <td><label>Códido Fornecedor: </label></td>
            <td><input type="int" name="idforn" value="" maxlength="20"></td>
        </tr>
        <tr>
            <td><label>Data de Validade: </label></td>
            <td><input type="date" name="data" value="" maxlength="20"></td>
        </tr>
        <tr>
            <td><label>Descrição: </label></td>
            <td><input type="text" name="descricao" value="" maxlength="50"></td>
        <tr>
        <tr>
            <td><label>Litros: </label></td>
            <td><input type="text" name="litros" value="" maxlength="20"></td>
        </tr>
        <tr>
            <td><label>Tipo: </label></td>
            <td><input type="text" name="dtipo" value="" maxlength="40"></td>
        </tr>
        <tr>
            <td><label>Peso: </label></td>
            <td><input type="text" name="peso" value="" maxlength="40"></td>
        </tr>
        <tr>
            <td><label>Valor Unitário: </label></td>
            <td><input type="int" name="valoruni" value="" maxlength="40"></td>
        </tr>

    </table>
    <input type="submit" class="form_bt" value="Cadastrar"/>
</form>

<?php
if (isset($_POST) && count($_POST) > 0) {

    $salva_nome = $_POST['nome'];
    $salva_idforn = $_POST['idforn'];
    $salva_data = $_POST['data'];
    $salva_descricao = $_POST['descricao'];
    $salva_litros = $_POST['litros'];
    $salva_tipo = $_POST['tipo'];
    $salva_peso = $_POST['peso'];
    $salva_valoruni = $_POST['valoruni'];
    //Validar valores vazios.
    if (trim($salva_nome) == "") {
        echo 'Sem Nome.';
        return;
    }
    if (trim($salva_idforn) == "") {
        echo 'Sem Código do Fornecedor.';
        return;
    }
    if (trim($salva_data) == "") {
        echo 'Sem Data de Validade.';
        return;
    }
    if (trim($salva_valoruni) == "") {
        echo 'Sem Valor Unitário.';
        return;
    }
    if (trim($salva_descricao) == "") {
        echo 'Sem Descrição.';
        return;
    }

    $sql_gravar = mysql_query("INSERT INTO produtos (nome, idfornecedor, datavali, descricao, litros, tipo, peso, valoruni) "
            . "value ('$salva_nome','$salva_idforn','$salva_data','$salva_descricao','$salva_litros','$salva_tipo','$salva_peso','$salva_valoruni')");

    echo 'OPERAÇÃO BEM SUCEDIDA';
}
?>
