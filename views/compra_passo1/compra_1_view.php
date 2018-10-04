<?php

//echo 'sadgifwefwsergerg';
//    require_once('../cms/controller/destino_controller.php');
//    require_once('../cms/models/destino_class.php');
//
    // Instancia o Controller.
//    $controller_destino = new destinoController();

    // Chama o metodo para listar todos os registros.
//    $list = $controller_destino::buscarViagem();


//	$idViagem = $_GET['idViagem'];


?>
    <meta charset="UTF-8">
<div id="area_compra_fase1">
    <div id="rgba_compra_fase1">
        <div id="titulo_pagina_compra_passo_2">
            <img src="../icones/map-marker-2-xxl.png">
            Compra de Passagem | Passo 1 - Escolha da Passagem
            <hr id="linha_pagina_compra_passo_2">
        </div>
        <div id="area_pesquisa_viagem">
            <h3 id="pesquisa_origem"> Origem: </h3>
            <input id="input_origem" type="text">
             <h3 id="pesquisa_destino"> Destino: </h3>
            <input id="input_destino" type="text">
             <h3 id="text_data_ida"> Data Ida: </h3>
            <input id="input_data_ida" type="date";>
            <input id="botao_pesquisar_destino_compra" type="button" value="Pesquisar">

        </div>
        <div id="back_tabela_ida">
            <div id="tabela_ida">
                <div class="titulo_tabela_viagem">
                    Detalhes da Passagem
                    <?php
//                    echo($idViagem);
                    ?>
                </div>
                <!-- <div id="informacoes_viagem">
                    <div id="nome_destino">
                        Nome do Destino
                    </div>
                    <div id="horario_partida">
                        Horário Partida
                    </div>
                    <div id="horario_partida">
                        Horário Chegada
                    </div>
                    <div id="tipo_onibus">
                        Tipo de Ônibus
                    </div>
                    <div id="preco_viagem">
                        Preço
                    </div>
                    <div id="pontos_paradas_compra">
                        Escolha o Ponto de Embarque
                    </div>
                    <div id="escolha_viagem">
                        Escolha
                    </div>
                </div> -->
                <?php

                require_once('../cms/controller/destino_controller.php');
                require_once('../cms/models/destino_class.php');
                
                if(isset($_GET['pesquisa'])){
                    
                    $destino_controller = new destinoController();
                    $list = $destino_controller::Pesquisa();
                    
                }else{
                
                        
                    //
                        // Instancia o Controller.
//    session_start();
                        $controller_destino = new destinoController();

                        // Chama o metodo para listar todos os registros.
                        $list = $controller_destino::buscarViagem();
                }


                    //	$idViagem = $_GET['idViagem'];

                
                if($list == "Não há viagens programadas com essas caracteristicas."){
                    echo $list;
                }else{
                
                        $cont = 0;
                        while($cont < count($list)){

                    ?>
                <div class="conteudo_tabela_viagem">

                        <?php
//                            echo($list[$cont]->idViagem);
                    ?>
                    <div class="nome_destino_dados">
                        <span class="info_not_menu_compra"> Nome do Destino: </span>
                        <?php  
//                            echo($list[$cont]->destino);
                        ?>
                        <?php 
            
                            $NOMEARQ = utf8_encode($list[$cont]->destino);
            
                            echo($NOMEARQ);
                        ?>
                    </div>
                    <div class="horario_metade">
                        <div class="horario_partida_chegada_dados">
                        Partida: <span class="info_not_menu_compra"> Hora Partida: </span><?php  echo($list[$cont]->hora_partida); ?>
                        </div>
                        <div class="horario_partida_chegada_dados">
                            Chegada: <span class="info_not_menu_compra"> Hora Chegada: </span> <?php  echo($list[$cont]->hora_chegada); ?>
                        </div>

                    </div>
                    <div class="tipo_onibus_chegada_dados">
                        <div class="tipo_onibus_dados">
                            <span class="info_not_menu_compra"> Tipo do Ônibus:
                            </span> 
                            <?php  
//                                echo($list[$cont]->tipo);
                            ?>
                            <?php 
            
                                $NOMEAR = utf8_encode($list[$cont]->tipo);

                                echo($NOMEAR);
                            ?>
                        </div>
                        <div class="pontos_paradas_compra_dados">
                            <!--Campo para escolher qual tipo de Onibus será cadastrado-->
                            <script>


                            </script>
                            <span class="info_not_menu_compra"> Ponto de Parada: </span>
                            <select name="cbx_tipoOnibus" id="cbx_tipoOnibus<?= $cont ?>">
                                
                                <option>Selecione o seu local de partida</option>

                                <?php

                                require_once('../cms/controller/tipoOnibus_controller.php');
                                require_once('../cms/models/tipoOnibus_class.php');

                                $controller_tipo = new tipoOnibusController();
                                $listTo = $controller_tipo::ListarParada($list[$cont]->idViagem);

                                $cont2 = 0;

                                while($cont2 < count($listTo)){



                                ?>

                                <option  value="<?= $listTo[$cont2]->idPontosViagem;?>" >
                                    <?php 
            
                                        $NOMEARQ = utf8_encode($listTo[$cont2]->nomePonto);

                                        echo($NOMEARQ);
                                    
                                        $_SESSION ['teste'] = $listTo[$cont2]->nomePonto;
                                    ?>
                                </option>

                                <?php

                                    $cont2+=1;
                                }

                                ?>

                            </select>

                        </div>
                    </div>

                    <div class="preco_dados">
                       <span class="info_not_menu_compra"> Preço: </span> R$ <?php  echo($list[$cont]->valor); ?>
                    </div>

                    <div class="escolha_viagem_dados">
                        <div class="opacao_escolha_viagem" onclick="escolha(<?php echo($list[$cont]->idViagem).",".$cont;?>)">
                          Selecione
                            <img style="cursor:pointer" src="../icones/check2.png" alt="itens" title="Só é possivel comprar 1 por vez!" >

                                <script>
                                    function escolha( id , cont ){

                                        let nomeCx = "cbx_tipoOnibus" + cont;

                                        var e = document.getElementById( nomeCx );
                                        var itemSelecionado = e.options[e.selectedIndex].value;

                                        window.location.href = "cabecalho.php?href=compra_passo1_5/compra_1_5_view.php&idViagem=" + id + "&paradaId=" + itemSelecionado;
                                    }
                                </script>
                        </div>
                    </div>


                </div>
                <?php

                            $cont+=1;
                       }
                }

                    ?>
            </div>
        </div>
<!--
        <a href="cabecalho.php?href=compra_passo2/compra_2_view.php">
            <div id="next_page_compra_passo2">
                Próximo Passo

            </div>
        </a>
-->
    </div>
</div>
