<?php

    require_once('../cms/controller/destino_controller.php');
    require_once('../cms/models/destino_class.php');

    // Instancia o Controller.
    $controller_destino = new destinoController();

    // Chama o metodo para listar todos os registros.
    $list = $controller_destino::Listar();

?>   
           
            <div id="responsive_home">
                <div id="responsive_home_logo">
                    Bem Vindo
                </div>
            </div> 
            <form name="formPesquisa" method="post" action="cabecalho.php?href=compra_passo1/compra_1_view.php&pesquisa=1">
                <div id="area_pesquisa_rapida">
                    <div id="pesquisa_rapida_titulo_responsivo">
                        Pesquisa Rápida
                    </div>
                    <div id="escrita_image_origem">
                        <div id="escrita_image_origem_img"> 
                            <img src="../icones/bagaje.png" alt="bagem">
                        </div>
                        <div id="escrita_image_origem_escrita">
                             Origem
                        </div>
                    </div>
                    <input id="text_origem_pesquisa" type="text" name="origem_pesquisa" placeholder="Insira o Nome de Origem" required>
                    <div id="escrita_image_destino">
                        <div id="escrita_image_destino_img"> 
                            <img src="../icones/destiny.png" alt="destino">
                        </div>
                        <div id="escrita_image_destino_escrita">
                             Destino
                        </div>
                    </div>                
                    <input id="text_destino_pesquisa2" type="text" name="destino_pesquisa" placeholder="Insira o  Nome do Destino" required>
                    <div id="data_ida_e_volta">
                        <input id="data_ida" type="date" name="dt" required>
                    </div>

                    <input id="buttom_pesquisa_rapida" name="btpesquisa" type="submit" value="Confirmar"> 
                </div>
            </form>
			<div id="slide_home" title=" ">                    
                <div id="slide1">
                    <div id="texto_slide">
                        <hr id="linha_cima"> 
                            Bem Vindo ao Nosso Site 
                        <hr id="linha_baixo"> 
                        <p id="texto_slide_2"> 
                            Viação Asteroide 
                        </p>
                    </div>    
                          
                </div>                
                <div id="slide2">
                    <div id="texto_slide_rotate2">
                         <a href="cabecalho.php?href=quem_somos/quem_somos_view.php"> <span id="clique_aqui"> Clique Aqui </span> </a> e Conheça Nossa História
                        <hr id="linha_baixo_rotate2">
                        <p id="sub_texto_slide"> <a  href="cabecalho.php?href=missao_visao_valores/missao_visao_valores_view.php"> - Veja a Filosofia da Nossa Empresa </a> </p>
                        <p class="sub_texto_slide_2"> <a  href="cabecalho.php?href=nossas_frotas/nossas_frotas_view.php"> - Confira Também Nossas Frotas </a> </p>
                        <p class="sub_texto_slide_2"> <a href="cabecalho.php?href=contatos/contatos_view.php"> - Entre em Contato com a Gente </a> </p>
                    </div>
                </div>
                 <div id="slide3">
                    <div id="texto_slide_3">
                        <div id="titulo_slide">
                          
                        </div>
                        
                        <p id="subtitulo_slide3">
                        
                        </p>
                    </div>
                </div>              
			</div>
            <div id="area_produtos_home">
                <div id="texto_area_viagens_1">
                    Confira Algumas Viagens
                </div>
                <hr class=linha>
                <div class="container_produtos">
                    <?php 
                        $cont = 0;
                        while($cont < count($list)){  
                    
                    ?>
                    <hr class="hr_produto">    
                    <div class="container_passagens">
                        <div class="image_passagens">
                            <div class="image_passagens_1">
                                <img src="../cms/<?php  echo($list[$cont]->imagem1);  ?> " alt="imagem1">
                            </div>
                            <div class="image_passagens_2">
                                <img src="../cms/<?php  echo($list[$cont]->imagem2); ?> " alt="imagem2" >
                            </div>
                        </div>
                        <div class="titulo_passagem">
                            <?php  
//                            echo($list[$cont]->destino);
                            ?>
                            <?php
                                        
                                $NOMEa = utf8_encode($list[$cont]->destino);
              
                                echo($NOMEa);
                                    
                            ?>
                        </div>
                        <div class="descricao_passagem">
                            <?php  
//                            echo($list[$cont]->descricao);
                            ?>
                            <?php
                                        
                                $NOMEa = utf8_encode($list[$cont]->descricao);
              
                                echo($NOMEa);
                                    
                            ?>
                            <p class="preco_passagem"> R$ <?php  echo($list[$cont]->valor); ?></p>
                        </div>
<!--                        <a href="cabecalho.php?href=compra_passo1/compra_1_view.php">-->
                            <div class="confirmacao_passagem">
                                <div class="imagem_comprar_bt">
                                </div>                            
                                <input type="submit" value="Confirmar" class="botao_confirmar_passagem" 
                                       onclick="teste('<?php echo($list[$cont]->idViagem);?>');">
                                <script>
                                    function teste( id ){
                                        window.location.href = "cabecalho.php?href=compra_passo1/compra_1_view.php&idViagem=" + id;
                                    }
                                </script>

                            </div>
<!--                        </a>-->
                        
                    </div>

                    
                    <?php 
                         $cont+=1;

                       }
                    ?>
                    
                    
                   
                </div>
            </div>
            <div id="area_produtos_mais_vendidos">
                    <div id="texto_area_viagens_2">
                          Confira Também as Mais Vendidas
                    </div>
                    <hr class=linha>
                    <div class="container_produtos">
                        <?php 
                            $cont = 0;
                            while($cont < count($list)){  
                    
                        ?>
                        <hr class="hr_produto"> 
                        <div class="container_passagens_2">
                            <div class="image_passagens">
                                <div class="image_passagens_1">
                                   <img src="../cms/<?php  echo($list[$cont]->imagem1); ?> " alt="imagem1">
                                </div>
                                <div class="image_passagens_2">
                                    <img src="../cms/<?php  echo($list[$cont]->imagem2); ?> " alt="imagem2">
                                </div>
                            </div>
                            <div class="titulo_passagem_2">
                                <?php 
//                                echo($list[$cont]->destino); 
                                ?>
                                <?php
                                        
                                    $NOMEa1 = utf8_encode($list[$cont]->destino);
              
                                    echo($NOMEa1);
                                    
                                ?>
                            </div>
                            <div class="descricao_passagem_2">
                                <?php  
//                                    echo($list[$cont]->descricao); 
                                ?>
                                <?php
                                        
                                    $NOMEa2 = utf8_encode($list[$cont]->descricao);
              
                                    echo($NOMEa2);
                                    
                                ?>
                                <p class="preco_passagem">R$ <?php  echo($list[$cont]->valor); ?></p>                       
                            </div>
                            <div class="confirmacao_passagem_2">
                                <div class="imagem_comprar_bt">
                                </div>                            
                                <input type="submit" value="Confirmar" class="botao_confirmar_passagem_2" >
                            </div>
                        </div>
                                               
                        <?php 
                            $cont+=1;

                        }
                        ?>
                    
                        
                    </div>              
            </div>