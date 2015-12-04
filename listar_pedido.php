<?php
include_once('classe/AcademiaDao.php');

$pedidos = new AcademiaDao();
$pedidos = $produtos->getPedidos();
?>
<form name="form_user" method="post" action="?ps=listar_pedido">
    <table border=1 cellspacing=0 cellpadding=2 bordercolor="#620f0f"> 
        <tr>
            <td class="titulo" colspan="8" align="center">Pedidos</td>
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
                <td><?= $value["idpedido"]; ?></td>
                <td><?= $value["idcliente"]; ?></td>
                <td><?= $value["idproduto"]; ?></td>
                <td><?= $value["vlruni"]; ?></td>
                <td><?= $value["qntd"]; ?></td>
                <td><?= 'R$ ' . number_format($value["vlrtotal"], 2, ',', '.'); ?></td>
                <td><?= $value["descc"]; ?></td>
                <td><?= $value["peso"]; ?></td>
                <td><a href="?ps=pedido_editar&idpedido=<?= $value["idpedido"]; ?>"  class="ion-edit"></a></td>
            </tr>
        <?php } ?>


    </table>
</form>