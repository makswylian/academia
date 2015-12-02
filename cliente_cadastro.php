<form name="form_user" method="post" action="?ps=cliente_cadastro">
    <table>
        <tr>
            <td class="titulo" colspan="2" align="center">CADASTRO DE CLIENTES</td>
        </tr>
        <tr>
            <td><label>Nome: </label></td>
            <td><input type="text" name="nome" value=""></td>
        </tr>
        <tr>
            <td><label>Data de Nascimento: </label></td>
            <td><input type="date" name="dtnasc" value=""></td>
        </tr>
        <tr>
            <td><label>Telefone: </label></td>
            <td><input type="text" name="telefone" value=""></td>
        </tr>
        <tr>
            <td><label>email: </label></td>
            <td><input type="text" name="email" value=""></td>
        <tr>
            <td><label>Observação: </label></td>
            <td><input type="text" name="obs" value=""></td>
        </tr>

    </table>
    <input type="submit" class="form_bt" value="Cadastrar"/>
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
echo 'OPERAÇÃO BEM SUCEDIDA';
?>