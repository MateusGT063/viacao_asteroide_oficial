<div id="titulo_pagina_usuario1">
    Controle de Usuários
</div>


<div id="caixaUsuario">
    
    <div id="menuUsuario_of">
        <div class="opc_user">
            Nome:
        </div>
        <div class="opc_user">
            Rg:
        </div>
        <div class="opc_user">
            Telefone:
        </div>
        <div class="opc_user">
            Sexo:
        </div>
        <div class="opc_user">
            Email:
        </div>
        <div class="opc_user">
            Opções:
        </div>

    </div>
    
    <div id="cresceUsuario1">
    <?php
    
    require_once('controller/usuario_controller.php');
    require_once('models/usuario_class.php');

    // Instancia o Controller.
    $controller_usuario = new usuarioController();

    // Chama o metodo para listar todos os registros.
    $list = $controller_usuario::Listar();

    $cont = 0;
    while($cont < count($list)){
    
    ?>
    
        <div class="ola11">
            <?php echo($list[$cont]->nome." ".$list[$cont]->sobrenome); ?>
        </div>
    
        <div class="ola11">
            <?php echo($list[$cont]->rg); ?>
        </div>
    
        <div class="ola11">
            <?php echo($list[$cont]->telefone); ?>
        </div>

        <div class="ola11">
            <?php echo($list[$cont]->sexo); ?>
        </div>

        <div class="ola11">
            <?php echo($list[$cont]->email); ?>
        </div>
    
        <div class="ola11">
            <a href="router.php?controller=usuario&modo=excluir&id=<?php echo($list[$cont]->idCliente); ?>&idEnd=<?php echo($list[$cont]->idEndereco); ?>">
                <img src="icones/Delete16.png">
            </a>
            <a href="router.php?controller=dicas&modo=excluir&id=<?php echo($list[$cont]->idDicas); ?>"></a>
        </div>
    
    <?php
        
        $cont+=1; 
        } 
    ?>
    </div>
    
</div>