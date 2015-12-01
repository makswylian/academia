<form name="form_user" method="post" action="?ps=prod_cadastro">
    <table>
        <tr>
            <td class="titulo" colspan="2" align="center">CADASTRAR FORNECEDOR</td>
        </tr>
        <tr>
            <td><label>ID Estado: </label></td>
            <td><input type="int" name="idestado" value="" maxlength="40"></td>
        </tr>
        <tr>
            <td><label>Nome: </label></td>
            <td><input type="int" name="nome" value="" maxlength="20"></td>
        </tr>
        <tr>
            <td><label>CNPJ: </label></td>
            <td><input type="int" name="cnpj" value="" maxlength="20"></td>
        </tr>
        <tr>
            <td><label>Endereço: </label></td>
            <td><input type="text" name="endereco" value="" maxlength="20"></td>
        </tr>
        <tr>
            <td><label>Inscrição Estadual: </label></td>
            <td><input type="int" name="insestado" value="" maxlength="20"></td>
        <tr>
        <tr>
            <td><label>Telefone: </label></td>
            <td><input type="text" name="tel" value="" maxlength="20"></td>
        </tr>
        <tr>
            <td><label>Email: </label></td>
            <td><input type="texe" name="email" value="" maxlength="40"></td>
        </tr>
        <tr>
            <td><label>Contato: </label></td>
            <td><input type="text" name="contato" value="" maxlength="40"></td>
        </tr>


    </table>
    <input type="submit" id="button9" value="Cadastrar"/>
</form>

<?php
if (isset($_POST) && count($_POST) > 0) {

    $salva_nome = $_POST['idestado'];
    $salva_nome = $_POST['nome'];
    $salva_valoruni = $_POST['cnpj'];
    $salva_idforn = $_POST['endereco'];
    $salva_data = $_POST['insestado'];
    $salva_descricao = $_POST['tel'];
    $salva_tamanho = $_POST['email'];
    $salva_tipo = $_POST['contato'];
    $salva_peso = $_POST['peso'];

    //Validar valores vazio.
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

    $sql_gravar = mysql_query("INSERT INTO produtos (nome, idfornecedor, data, descricao, tamanho, tipo, peso, valoruni) "
            . "value ('$salva_nome','$salva_idforn','$salva_data','$salva_descricao','$salva_tamanho','$salva_tipo','$salva_peso','$salva_valoruni')");
}
?>
