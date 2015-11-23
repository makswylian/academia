<form name="form_user" method="post" action="?ps=editar_user">
    <table>     
        <tr>
            <td>Login</td>
            <td><input name="login" type="text" id="login" maxlength="40" class="textBox" /></td>
        </tr>
        <tr>
            <td>Senha</td>
            <td><input name="senha" type="password" id="senha" maxlength="10" class="textBox" /></td>
        </tr>
        <tr>
            <td> </td>
            <td><input type="submit" name="Submit" value="Salvar" style="cursor:pointer;" /></td>
        </tr>
    </table>
</form>


<?php
$re = mysql_query("select * from estados order by estado");
if (mysql_errno() != 0) {
    if (!isset($erros)) {
        echo "Erro o arquivo init.php foi auterado, nao existe $erros";
        exit;
    }
    echo $erros[mysql_errno()];
    exit;
}
while ($l = mysql_fetch_array($re)) {
    $id = $l["id_estado"];
    $estado = $l["estado"];
    $uf = $l["uf"];
    echo Seleciona_Item($dados["id_estado"], "<option value=\"$id\">$uf - $estado</option>");
}
@mysql_close();
?>
