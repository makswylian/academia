<?php
include_once('classe/AcademiaDao.php');

$pedidos = new AcademiaDao();
$pedidos = $pedidos->getPedidos();
?>
<form name="form_user" method="post" action="?ps=listar_pedido">
    <table border=1 cellspacing=0 cellpadding=2 bordercolor="#620f0f"> 
        <tr>
            <td class="titulo" colspan="9" align="center">Pedidos</td>
        </tr>
        <tr>
            <th>
                Código do Usuário         
            </th>
            <th>
                Código do Cliente
            </th>
            <th>
                Código do Produto
            </th>
            <th>
                Valor Unitário            
            </th> 
            <th>
                Quantidade             
            </th>          
            <th>
                Valor Total         
            </th>
            <th>
                Descrição             
            </th>
            <th>
                Data do Pedido              
            </th>


            <th>Editar</th>
        </tr>
        <?php foreach ($pedidos as $value) { ?>
            <tr> 
                <td><?= $value["iduser"]; ?></td>
                <td><?= $value["idcliente"]; ?></td>
                <td><?= $value["idproduto"]; ?></td>
                <td><?= 'R$ ' . number_format($value["vlruni"], 2, ',', '.'); ?></td>
                <td><?= $value["qtde"]; ?></td>
                <td><?= 'R$ ' . number_format($value["vlrtotal"], 2, ',', '.'); ?></td>
                <td><?= $value["status"]; ?></td>
                <td><?= $value["data"]; ?></td>
                <td><a href="?ps=pedido_editar&idpedido=<?= $value["idpedido"]; ?>"  class="ion-edit"></a></td>
            </tr>
        <?php } ?>


    </table>
</form>