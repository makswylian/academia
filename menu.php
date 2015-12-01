<link rel="stylesheet" href="css/menu.css" type="text/css" media="screen" />

<ul id="menu">

    <li><a href="#" class="drop">PRODUTOS</a>
        <div class="dropdown_2columns">
            <div class="col_1">
                <ul class="simple">
                    <li><a href="?ps=prod_cadastro">Cadastro</a></li>
                    <li><a href="#">Estoque</a></li>
                    <li><a href="?ps=prod_listar">Consulta</a></li>
                </ul>
            </div>   
        </div> 
    </li>

    <li><a href="#" class="drop">FORNECEDORES</a>
        <div class="dropdown_2columns">
            <div class="col_1">
                <ul class="simple">
                    <li><a href="?ps=forne_cadastro">Cadastro</a></li>
                    <li><a href="#">Consulta</a></li>
                </ul>
            </div>   
        </div> 
    </li>

    <li><a href="#" class="drop">USUÁRIO</a>
        <div class="dropdown_2columns">
            <div class="col_1">
                <ul class="simple">
                    <li><a href="?ps=usuario_cadastro">Cadastro</a></li>
                    <li><a href="?ps=usuario_listar">Consulta</a></li>
                </ul>
            </div>   
        </div> 
    </li>

    <li><a href="#" class="drop">CLIENTE</a>
        <div class="dropdown_2columns">
            <div class="col_1">
                <ul class="simple">
                    <li><a href="?ps=cliente_cadastro">Cadastro</a></li>
                    <li><a href="#">Consulta</a></li>
                </ul>
            </div>   
        </div> 
    </li>

    <li><a href="#" class="drop">PEDIDO</a>
        <div class="dropdown_2columns align_right">
            <div class="col_1">
                <ul class="simple">
                    <li><a href="?ps=gera_pedido">Gerar</a></li>
                    <li><a href="#">Consulta</a></li>
                </ul>
            </div>   
        </div> 
    </li>

    <li><a href="<?php echo $logoutAction ?>">SAIR</a></li>

</ul>