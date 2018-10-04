
<div id="espaco_turismo">
<section id="container_turismo">
        <div id="titulo_pagina_turismo">
            <img src="../icones/map-marker-2-xxl.png">
            Lugares Turisticos e Suas Estações
            <hr id="linha_titulo_pagina_turismo">
        </div>
        <ul id="tab-menu">
            <li>
                <a href="#verao">
                    Verão
                </a>
            </li> 
            <li>
                <a href="#outono">
                    
                    Outono
                    
                </a>
            </li>
            <li><a href="#inverno">Inverno</a></li>
            <li><a href="#primavera">Primavera</a></li>  
            <?php 
            ?>
        </ul>     
<?php


    require_once('../cms/controller/turismo_controller.php');
    require_once('../cms/models/turismo_class.php');

    // Instancia o Controller.
    $controller_turismo = new turismoController();

    // Chama o metodo para listar todos os registros.
    $list = $controller_turismo::ListarView();    
    
    
    $cont = 0;
    while( $cont < count($list)){


    ?>   
    
    
        <div class="item" id="<?= acertaID($list[$cont]->epoca) ?>">
            <div class="text_estacao">
                <?= $list[$cont]->epoca ?>
            </div>
            <div class="item_img">
                <img src="../cms/<?php  echo($list[$cont]->imagem); ?> ">
            </div>
            <p class="descricao_estacao">
                <?php  echo($list[$cont]->descricao); ?>
            </p>
            <?php 
            
            ?>
            
            <?php

                require_once('../cms/controller/destino_controller.php');
                require_once('../cms/models/destino_class.php');

                // Instancia o Controller.
                $controller_destino = new destinoController();

                // Chama o metodo para listar todos os registros.
                $list_destinos = $controller_destino::ListarTurismo();
        
                

            ?>   
            <div class="container_produtos_turismos">
    
                <div class="caixa_passagem">
                    <div class="image_passagens">
                        <div class="image_passagens_1">
                             <img src="../cms/<?php  echo($list_destinos[$cont]->imagem1); ?> ">
                        </div>
                        <div class="image_passagens_2">
                            <img src="../cms/<?php  echo($list_destinos[$cont]->imagem2); ?> ">
                        </div>
                    </div>
                    <div class="titulo_passagem">
                        <?php  echo($list_destinos[$cont]->destino); ?>
                    </div>
                    <div class="descricao_passagem"> 
                        <?php  echo($list_destinos[$cont]->descricao); ?>
                        <p class="preco_passagem"> R$ <?php  echo($list_destinos[$cont]->valor); ?> </p>                                
                    </div>
                    <div class="confirmacao_passagem">
                        <div class="imagem_comprar_bt">
                        </div>                            
                        <input type="submit" value="Confirmar" class="botao_confirmar_passagem" >

                    </div>  
                </div>
             
                      
 
            </div>
        </div>              

                <?php
                    $cont+=1;

                } ?>
    
        </section>
            <?php
                function acertaID($nomedb){
                    
                    switch($nomedb){
                        case 'Verão':
                            $nome = 'verao';
                            $epoca = 1;
                            break;
                        case 'Outono':
                            $nome = 'outono';
                            break;
                        case 'Primavera':
                            $nome = 'primavera';
                            break;
                        case 'Inverno':
                            $nome = 'inverno';
                            break;
                    }
                    
                    return $nome;
                }
    
            ?>     
</div>    