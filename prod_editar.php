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
            <td>Litros:</td>
            <td><input type="text" name="litros" maxlength="20"<?= $usuario["litros"] ?>" /></td>
        </tr>
        <tr>
            <td>Tipo:</td>
            <td><input type="text" name="tipo" maxlength="40" value="<?= $usuario["tipo"] ?>" /></td>
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

    $salva_idforn = $_POST['idforn'];
    $salva_nome = $_POST['nome'];
    $salva_data = $_POST['data'];
    $salva_descricao = $_POST['descricao'];
    $salva_litros = $_POST ['litros'];
    $salva_tipo = $_POST ['tipo'];
    $salva_peso = $_POST ['peso'];
    $salva_valoruni = $_POST ['valoruni'];
    $idproduto = $_POST ['idusuario'];

//Validar valores vazio.
    if (trim($salva_idforn) == "") {
        echo 'Sem Nome.';
        return;
    }
    if (trim($salva_nome) == "") {
        echo 'Sem Nome.';
        return;
    }
    if (trim($salva_data) == "") {
        echo 'Sem Data de Validade.';
        return;
    }
    if (trim($salva_descricao) == "") {
        echo 'Sem Descrição.';
        return;
    }
     if (trim($salva_tipo) == "") {
        echo 'Sem Tipo.';
        return;
    }

    $sql_gravar = mysql_query("UPDATE produto SET idfornecedor='$salva_idforn' nome='$salva_nome',datavali='$salva_data', "
            . "descricao='$salva_descricao', litros='$salva_litros', tipo='$salva_tipo', peso='$salva_peso'peso, valoruni='$salva_valoruni' WHERE idproduto= $idproduto");
}
echo 'OPERAÇÃO BEM SUCEDIDA';
?>