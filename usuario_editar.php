<?php
$id = $_GET["iduser"];
include_once('classe/AcademiaDao.php');
$re = new AcademiaDao();
$re = $re->getRe();

$re = mysql_query("select count(*) as total from usuario where iduser = $id");
$total = mysql_result($re, 0, "total");
?>



<form name="form_user" method="post" action="?ps=usuario_editar">
    <table>
        <?php foreach ($re as $value) { ?>
            <tr>
                <td>Nome</td>
                <td><input name="usuario" type="text" id="usuario" maxlength="19" value="" /><?= $value["nome"] ?></td>
            </tr>
            <tr>
                <td>Usuário</td>
                <td><input name="nome" type="text" id="nome" maxlength="30" value="" /><?= $value["usuario"] ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input name="email" type="text" id="email" maxlength="50" value="" /><?= $value["email"] ?></td>
            </tr>
            <tr>
                <td>Nivel</td>
                <td><input name="nivel" type="text" id="nivel" maxlength="1" value="" /><?= $value["nivel"] ?></td>
            </tr>

            <tr>
                <td>Senha</td>
                <td><input name="bairro" type="text" id="bairro" maxlength="50"  value="" /><?= $value["senha"] ?></td>
        </tr>
    </table>
    <input type="submit" id="button7" value="Cadastrar"   />
</form>
