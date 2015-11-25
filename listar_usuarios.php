<?php
include_once('classe/AcademiaDao.php');

$usuarios = new AcademiaDao();
$usuarios = $usuarios->getUsuarios();

foreach ($usuarios as $value) {
    echo $value["nome"] . "<br>";
}


?>


<table>  
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
    <tr>
        <td>U</td>
        <td>U</td>
        <td>U</td>
        <td>U</td>
    </tr>
</table>

