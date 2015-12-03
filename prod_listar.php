<?php
include_once('classe/AcademiaDao.php');

$produtos = new AcademiaDao();
$produtos = $produtos->getProdutos();
?>
<form name="form_user" method="post" action="?ps=prod_listar">
    <table border=1 cellspacing=0 cellpadding=2 bordercolor="#620f0f"> 
        <tr>
            <td class="titulo" colspan="10" align="center">Produtos</td>
        </tr>
        <tr>
            <th>
                ID Produto          
            </th>
            <th>
                ID Fornecedor          
            </th>
            <th>
                Nome             
            </th>
            <th>
                Data de Validade             
            </th>          
            <th>
                Descrição            
            </th>
            <th>
                Litros              
            </th>
            <th>
                Tipo              
            </th>
            <th>
                Peso              
            </th>
            <th>
                Valor Unitário              
            </th>

            <th>Editar</th>
        </tr>
        <?php foreach ($produtos as $value) { ?>
            <tr> 
                <td><?= $value["idproduto"]; ?></td>
                <td><?= $value["idfornecedor"]; ?></td>
                <td><?= $value["nome"]; ?></td>
                <td><?= $value["datavali"]; ?></td>
                <td><?= $value["descricao"]; ?></td>
                <td><?= $value["litros"]; ?></td>
                <td><?= $value["tipo"]; ?></td>
                <td><?= $value["peso"]; ?></td>
                <td><?= 'R$ ' . number_format($value["valoruni"], 2, ',', '.'); ?></td>
                <td><a href="?ps=prod_editar&idprod=<?= $value["idprod"]; ?>"  class="ion-edit"></a></td>
            </tr>
        <?php } ?>


    </table>
</form>