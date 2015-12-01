<form name="form_user" method="post" action="?ps=forne_cadastro">
    <table>
        <tr>
            <td class="titulo" colspan="2" align="center">CADASTRAR FORNECEDOR</td>
        </tr>
        <tr>
            <td><label>ID Estado: </label></td>
            <td><input type="int" name="idestado" value="" maxlength="2"></td>
        </tr>
        <tr>
            <td><label>Nome: </label></td>
            <td><input type="int" name="nome" value="" maxlength="20"></td>
        </tr>
        <tr>
            <td><label>CNPJ: </label></td>
            <td><input type="text" name="cnpj" value="" maxlength="20"></td>
        </tr>
        <tr>
            <td><label>Endereço: </label></td>
            <td><input type="text" name="endereco" value="" maxlength="50"></td>
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
            <td><input type="text" name="email" value="" maxlength="40"></td>
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

    $salva_idestado = $_POST['idestado'];
    $salva_nome = $_POST['nome'];
    $salva_cnpj = $_POST['cnpj'];
    $salva_endereco = $_POST['endereco'];
    $salva_insestado = $_POST['insestado'];
    $salva_tel = $_POST['tel'];
    $salva_email = $_POST['email'];
    $salva_contato = $_POST['contato'];
    $salva_peso = $_POST['peso'];

    //Validar valores vazios.
    if (trim($salva_nome) == "") {
        echo 'Sem Nome.';
        return;
    }
    if (trim($salva_idestado) == "") {
        echo 'Sem Código do Fornecedor.';
        return;
    }
    if (trim($salva_cnpj) == "") {
        echo 'Sem Data de Validade.';
        return;
    }
    if (trim($salva_insestado) == "") {
        echo 'Sem Valor Unitário.';
        return;
    }
   
 
    $sql_gravar = mysql_query("INSERT INTO fornecedor (idestado, nome, cnpj, endereco, insestado, tel, email, contato, peso) "
            . "value ('$salva_idestado','$salva_nome','$salva_cnpj','$salva_endereco','$salva_insestado','$salva_tel','$salva_email','$salva_contato','$salva_peso')");
}
?>
