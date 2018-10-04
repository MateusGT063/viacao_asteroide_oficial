<?php
//    require_once('../cms/controller/destino_controller.php');
//    require_once('../cms/models/destino_class.php');
//
    // Instancia o Controller.
//    $controller_destino = new destinoController();

    // Chama o metodo para listar todos os registros.
//    $list = $controller_destino::buscarViagem();

//    session_start ();

	$paradinha = $_GET['paradaId'];
    $_SESSION['paradaEscolhida'] = $paradinha;

    $viagem = $_GET['idViagem'];
    $_SESSION['vig'] = $viagem;

//	$vig = $_GET['idViagem'];



?>
<div id="area_compra_fase1_5">
    <div id="titulo_pagina_compra_passo_2">
        <img src="../icones/map-marker-2-xxl.png" alt="Titulo icone compra">
            Compra de Passagem / Passo 1.5 - Detalhes da Viagem
        <hr id="linha_pagina_compra_passo_2">
    </div>
<!--
    <div id="propaganda_compra_1_5">
        <div id="text_propaganda_1_5">
            <div id="tipo_frota_1_5">
                Conheça Nossas Frotas
            </div>
        </div>
    </div>    
-->

    <div id="container_compra1_5">
            <?php

        require_once('../cms/controller/destino_controller.php');
        require_once('../cms/models/destino_class.php');
    //
        // Instancia o Controller.
//    session_start();
        $controller_destino = new destinoController();

        // Chama o metodo para listar todos os registros.
        $list = $controller_destino::buscarViagem();


    //	$idViagem = $_GET['idViagem'];


        $cont = 0;
        while($cont < count($list)){

    ?>
        <div id="produto_compra_1_5">
            <div id="esquerdo_compra_1_5">
                <div id="imagem_esquerda_1_5">
                    <img src="../cms/<?php  echo($list[$cont]->imagem1); ?> " alt="Imagem Partida">
                </div>  
                <div id="imagem_direita_1_5">
                    <img src="../cms/<?php  echo($list[$cont]->imagem2); ?> " alt="Imagem Destino">
                </div>
            </div>
            <div id="direito_compra_1_5">
                <div id="titulo_viagem_1_5">
                    Viagem de <?php  echo($list[$cont]->destino); ?>
                </div>
                <hr id="title_line_i_5">
                <div id="esquerdo_preco_viagem">
                    <div id="quadro_preco_pagamento">
                        Preço: <span id="preco_1_55">  R$ <?php  echo($list[$cont]->valor); ?></span>
                    </div>     
                    <hr id="linha_preco_compra_1_5">
                    <div id="quadro_preco_pagamento_boleto">
                        <div class="imagem_boleto_1_5">
                            <img src="../imagens/codigo-de-barras_large_6d4cdff8-6bb1-4701-a178-3ec259c52295.jpg" alt="Imagem Codigo "> 
                        </div>
                        <div class="descricao_boleto_1_5"> 
                            Pagamento Boleto 
                        </div>
                    </div>           
                    <div id="quadro_preco_pagamento_cartao">
                        <div class="imagem_boleto_1_5">
                            <img src="../imagens/Credit_Card-512.png" alt="Imagem Cartão"> 
                        </div>
                        <div class="descricao_boleto_1_5"> 
                            Pagamento Cartão
                        </div>
                    </div>
                    <a href="cabecalho.php?href=compra_passo2/compra_2_view.php"> 
                        <div id="botao_prosseguir">
                            Continuar
                        </div>
                    </a> 
                </div>
                <div id="direito_preco_viagem">
                     <?php  
//            echo($list[$cont]->descricao);
                    ?>
                    <?php 
            
                    $NOMEARQ = utf8_encode($list[$cont]->descricao);
            
                    echo($NOMEARQ);
                    ?>
                    <div id="informacao_viagem_container"> 
                        <div class="informacoes_viagem_za">
                            Hora de Partida:  <?php  echo($list[$cont]->hora_partida); ?>
                        </div>        
                        <div class="informacoes_viagem_za">
                            Hora Chegada:  <?php  echo($list[$cont]->hora_chegada); ?> 
                        </div>      
                        <div class="informacoes_viagem_za">
                            Data de Partida:  <?php  echo($list[$cont]->data); ?>
                        </div>     
                        <div class="informacoes_viagem_za">
                            Tipo de Ônibus: 
                            <?php 
//                                echo($list[$cont]->tipo); 
                            ?>
                            <?php 
            
                                $NOMEARQ1 = utf8_encode($list[$cont]->tipo);
            
                                echo($NOMEARQ1);
                            ?>
                        </div>             
<!--                        <div class="informacoes_viagem_za">-->
<!--                            Ponto de Parada: <?php  echo($_SESSION ['teste']); ?>-->
<!--                        </div>   -->
                    </div>
                </div>                
            </div>            
        </div>
        <?php

                $cont+=1;
           }

        ?>
        <div id="titulo_pagina_compra_passo_1_5">
            <img src="../icones/map-marker-2-xxl.png" alt="Icones Outras Viagens">
                Confira Também Outras Viagens
            <hr id="linha_pagina_compra_passo_1_5">
        </div>        
        <div id="espaco_compra">
            <?php

            require_once('../cms/controller/destino_controller.php');
            require_once('../cms/models/destino_class.php');

            // Instancia o Controller.
            $controller_destino = new destinoController();

            // Chama o metodo para listar todos os registros.
            $list = $controller_destino::ListarTurismo();
            
                

            ?>       
            <?php 
                $cont = 0;
                while($cont < count($list)){  

            ?>
            <div class="caixa_passagem">
                <div class="image_passagens">
                    <div class="image_passagens_1">
                         <img src="../cms/<?php  echo($list[$cont]->imagem1); ?> " alt="Imagem Partida">
                    </div>
                    <div class="image_passagens_2">
                        <img src="../cms/<?php  echo($list[$cont]->imagem2); ?> " alt="Imagem Destino">
                    </div>
                </div>
                <div class="titulo_passagem">
                    <?php 
            
                    $NOMEARQ2 = utf8_encode($list[$cont]->destino);
            
                    echo($NOMEARQ2);
                    ?>
                </div>
                <div class="descricao_passagem"> 
                    <?php 
            
                    $NOMEARQ3 = utf8_encode($list[$cont]->descricao);
            
                    echo($NOMEARQ3);
                    ?>
                    <p class="preco_passagem"> R$ <?php  echo($list[$cont]->valor); ?> </p>                                
                </div>
                <div class="confirmacao_passagem">
                    <div class="imagem_comprar_bt">
                    </div>                            
                    <input type="submit" value="Confirmar" class="botao_confirmar_passagem" >

                </div>  
            </div>
                    
                    <?php 
                         $cont+=1;

                       }
                    ?>   
            
        </div>
    </div>
</div>
