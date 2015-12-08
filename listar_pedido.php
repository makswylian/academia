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
                Status             
            </th>
            <th>
                Data do Pedido              
            </th>


            <th>Editar</th>
        </tr>
        <?php foreach ($pedidos as $value) { ?>
            <tr> 
                <td align="center"><?= $value["iduser"]; ?></td>
                <td align="center"><?= $value["idcliente"]; ?></td>
                <td align="center"><?= $value["idproduto"]; ?></td>
                <td align="center"><?= 'R$ ' . number_format($value["vlruni"], 2, ',', '.'); ?></td>
                <td align="center"><?= $value["qtde"]; ?></td>
                <td align="center"><?= 'R$ ' . number_format($value["vlrtotal"], 2, ',', '.'); ?></td>
                <td align="center"><?= $value["status"]; ?></td>
                <td align="center"><?= $value["data"]; ?></td>
                <td align="center"><a href="?ps=editar_pedido&idpedido=<?= $value["idpedido"]; ?>"  class="ion-edit"></a></td>
            </tr>
        <?php } ?>


    </table>
</form>