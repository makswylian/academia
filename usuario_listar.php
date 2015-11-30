<?php
include_once('classe/AcademiaDao.php');

$usuarios = new AcademiaDao();
$usuarios = $usuarios->getUsuarios();
?>
<form name="form_user" method="post" action="?ps=usuario_listar">
    <table border=1 cellspacing=0 cellpadding=2 bordercolor="#620f0f"> 
        <tr>
            <td class="titulo" colspan="6" align="center">Usuários</td>
        </tr>
        <tr>
            <th>
                ID          
            </th>
            <th>
                Usuário               
            </th>
            <th>
                Nome             
            </th>
            <th>
                Email            
            </th>
            <th>
                Nivel              
            </th>

            <th>Editar</th>
        </tr>
        <?php foreach ($usuarios as $value) { ?>
            <tr> 
                <td><?= $value["iduser"] ?></td>
                <td><?= $value["nome"] ?></td>
                <td><?= $value["usuario"] ?></td>
                <td><?= $value["email"] ?></td>
                <td><?= $value["nivel"] ?></td>  
                <td><a href="?ps=usuario_editar&iduser=<?= $value["iduser"] ?>"  class="ion-edit"></a></td>
            </tr>
        <?php } ?>


    </table>
</form>


