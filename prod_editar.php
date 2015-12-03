<?php
include_once('classe/AcademiaDao.php');
$id = $_GET["idprod"];
$produto = new AcademiaDao();
$produto = $produto->getIdproduto($id);
?>
<form name="form_user" method="post" action="?ps=prod_editar">


    <table border=1 cellspacing=0 cellpadding=2 bordercolor="#620f0f"> 

        <tr>
            <td>Códido Fornecedor:</td>
            <td><input type="int" name="idforn" maxlength="20" value="<?= $usuario["idfornecedor"] ?>" /></td>
        </tr>
        <tr>
            <td>Nome:</td>
            <td><input type="int" name="nome" maxlength="20" value="<?= $usuario["nome"] ?>" /></td>
        </tr>
        <tr>
            <td>Data de Validade:</td>
            <td><input type="date" name="data" maxlength="20" value="<?= $usuario["datavali"] ?>" /></td>
        </tr>
        <tr>
            <td>Descrição:</td>
            <td><input type="text" name="descricao" maxlength="50"<?= $usuario["descricao"] ?>" /></td>
        </tr>
       <tr>
            <td>Tamanho:</td>
            <td><input type="text" name="tamanho" maxlength="20"<?= $usuario["tamanho"] ?>" /></td>
        </tr>
        <tr>
            <td>Tipo:</td>
            <td><input type="text" name="dtipo" maxlength="40" value="<?= $usuario["tipo"] ?>" /></td>
        </tr>
        <tr>
            <td>Peso:</td>
            <td><input type="text" name="peso" maxlength="40" value="<?= $usuario["peso"] ?>" /></td>
        </tr>
        <tr>
            <td>Valor Unitário:</td>
            <td><input type="int" name="valoruni" maxlength="40"value="<?= 'R$ ' . number_format($value["valoruni"], 2, ',', '.'); ?>"/></td>
        </tr>


    </table>
    <input type="hidden" name="idproduto" value="<?= $_GET["idprod"]; ?>">
    <input type="submit" class="form_bt" value="Salvar Edição"   />

</form>

<?php
if (isset($_POST) && count($_POST) > 0) {

    $salva_nome = $_POST['nome'];
    $salva_email = $_POST['email'];
    $salva_usuario = $_POST['usuario'];
    $salva_senha = $_POST['senha'];
    $salva_nivel = $_POST ['nivel'];
    $idproduto = $_POST ['idusuario'];

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

    $sql_gravar = mysql_query("UPDATE produto SET nome='$salva_nome',email='$salva_email', "
            . "usuario='$salva_usuario', senha='$salva_senha', nivel='$salva_nivel' WHERE idproduto= $idproduto");
}
?>