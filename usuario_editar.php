<?php
$id = $_GET["iduser"];

Abre_Conexao();
$re = mysql_query("select count(*) as total from usuario where iduser = $id");
$total = mysql_result($re, 0, "total");
?>

    <form name="form_user" method="post" action="?ps=usuario_editar">
        <tr>
            <td>Usuário</td>
            <td><input name="usuario" type="text" id="usuario" maxlength="19" value="<?php echo $dados["usuario"]; ?>" /></td>
        </tr>
        <tr>
            <td>Nome</td>
            <td><input name="nome" type="text" id="nome" maxlength="30" value="<?php echo $dados["nome"]; ?>" /></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input name="email" type="text" id="email" maxlength="50" value="<?php echo $dados["email"]; ?>" /></td>
        </tr>
        <tr>
            <td>Nivel</td>
            <td><input name="nivel" type="text" id="nivel" maxlength="1" value="<?php echo $dados["nivel"]; ?>" /></td>
        </tr>

        <tr>
            <td>Senha</td>
            <td><input name="bairro" type="text" id="bairro" maxlength="50" class="textBox" value="<?php echo $dados["senha"]; ?>" /></td>
        </tr>

        <?php
        $re = mysql_query("select * from estados order by estado");

        while ($l = mysql_fetch_array($re)) {
            $id = $l["id_estado"];
            $estado = $l["estado"];
            $uf = $l["uf"];
            echo Seleciona_Item($dados["id_estado"], "<option value=\"$id\">$uf - $estado</option>");
        }
        @mysql_close();
        ?>

    </form>
</html>
