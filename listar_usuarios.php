<?php
include_once('classe/AcademiaDao.php');

$usuarios = new AcademiaDao();
$usuarios = $usuarios->getUsuarios();
?>

<table action="?ps=listar_usuarios"> 
    <tr>
            <td class="titulo" colspan="4" align="center">Usuários</td>
        </tr>
    <tr>
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
    </tr>
    <?php foreach ($usuarios as $value) { ?>
        <tr>        
            <td><?= $value["nome"] ?></td>
            <td><?= $value["usuario"] ?></td>
            <td><?= $value["email"] ?></td>
            <td><?= $value["nivel"] ?></td>  
        </tr>
    <?php } ?>


</table>



