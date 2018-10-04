<?php



$botao='btFiltrar';




    require_once('../cms/controller/destino_controller.php');
    require_once('../cms/models/destino_class.php');

    // Instancia o Controller.
    $controller_destino = new destinoController();

    // Chama o metodo para listar todos os registros.
    $list = $controller_destino::ListarVendas();
 

    require_once('../cms/controller/estado_controller.php');
    require_once('../cms/models/estado_class.php');
       
    // Instancia o Controller. 
     $controller_estado = new estadoController();

     // Chama o metodo para listar todos os registros.
     $listEstado = $controller_estado::Listar();

    require_once('../cms/controller/cidade_controller.php');
    require_once('../cms/models/cidade_class.php');
      
    // Instancia o Controller.  
     $controller_cidade = new cidadeController();

     // Chama o metodo para listar todos os registros.
    $listCidade = $controller_cidade::Listar();

$sqlGeral = "SELECT v.imagem1, v.imagem2, v.descricao, v.valor AS valor, c.nomeCidade AS destino FROM tbl_viagem AS v INNER JOIN tbl_cidade AS c ON v.idDestino = c.codCidade WHERE idViagem > 0";
$sqlRadio = "";



if(isset($_POST['rdo'])){
    
    $rdo = $_POST['rdo'];
    
    $conexao = new Mysql_db();
    
    $POD_conex = $conexao->Conectar();
    
    if ($rdo == 0){
        

        
    }
    
     
 
    if ($rdo == 100){
        
        $sqlRadio = " AND valor <= 100";
        

        
    }
    
    if ($rdo == 5099){
        
        $sqlRadio = " AND valor >= 50 AND valor <= 99";
        

        
    }
    
    if ($rdo == 50){
        
        $sqlRadio = " AND valor < 50";
        

        
    }
    
    if ($rdo == 1000){
        

        
    }
    
   

    
 
}


$sqlGeral = $sqlGeral.$sqlRadio.' ORDER BY RAND()';
  

?>   

<!--<div id="seguraTodaVendaPassagem">-->
    <form name="filtragem" method="post" enctype='multipart/form-data'>
    <div id="titulo_pagina_turismo">
        <img src="../icones/map-marker-2-xxl.png" alt="titulo">
            Vendas de Passagens
        <hr id="linha_titulo_pagina_venda">
    </div>
    <div id="caixaOpcoesVendas">
        <div id="seguraOpcoes">
            <div id="alinhaOp">
                <div id="campoEstados">
                    Estado: 
               
                    <select class="cbPais"  >
                        
<!--                        <option value="Selecione"></option>-->
                        
                    <?php 
                        
                         $cont = 0;
                         while($cont < count($listEstado)){  
                    
                        ?>
                        <option  value="<?=$listEstado[$cont]->codEstado;?>"><?=$listEstado[$cont]->sigla;?></option>
                        
                        
                        <?php
                        
                         $cont +=1;
                        }
                        
                        
                        ?>
                    </select>
                </div>
               <div class="camposVendas">
                    Cidade: 
                    <select class="cbPais">
                        
<!--                        <option value=""> </option>-->
                         <?php 
                        
                            $cont = 0;
                            while($cont < count($listCidade)){  
                    
                        ?>   
                        <option value="<?=$listCidade[$cont]->codEstado;?>"><?=$listCidade[$cont]->nomeCidade;?></option>
                        
                        
                        <?php
                        
                         $cont +=1;
                        }
                        
                        
                        ?>
                    </select>
                </div>
                 <div class="camposVendas1">
                    <div id="textoPreco">
                        Preços:
                    </div>
                    <div id="opcoesPrecos">
                        <div id="alinhamentoPrecos">
                            <input id="radio_todos" type="radio" name="rdo" value="0" > 
                            <label for="radio_todos"><span></span></label>
                            Todos os Preços<br>
                             <input id="radio_100" type="radio" name="rdo" value="100" > 
                            <label for="radio_100"><span></span></label>
                            Até R$ 100,00<br>
                            <input id="radio_50_99" type="radio" name="rdo"  value="5099"> 
                            <label for="radio_50_99"><span></span></label>
                            De R$ 50,00 à 99,00<br>
                             <input id="radio_50" type="radio" name="rdo" value="50"> 
                            <label for="radio_50"><span></span></label>
                            Menor que R$ 50,00 <br>
                            <input id="radio_mais_vendidos" type="radio" name="rdo" value="1000" > 
                            <label for="radio_mais_vendidos"><span></span></label>
                            Mais Vendidos
                        </div>
                    </div>
                </div>
                <div class="camposVendas">

                </div>
                <div class="botaoC1">
                    <input class="btFiltrar" type="submit" name="btFiltrar" value="Filtrar">
                </div>
            </div> 
        </div>
    </div>    
    <div id="seguraVenda">
        <?php 
        
        require_once('../cms/controller/destino_controller.php');
        require_once('../cms/models/destino_class.php');
        $controller = new destinoController();
        $list = $controller::ListarViews($sqlGeral);
        
            $cont = 0;
            while($cont < count($list)){  
                    
        ?>        
        <div class="caixaV">
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
                    $destinos = utf8_encode($list[$cont]->idDestino);
                    echo($destinos);        
                ?>
            </div>
            <div class="descricao_passagem">
                <?php  
//                echo($list[$cont]->descricao);
                ?>
                <?php
                
                    $NOMEa = utf8_encode($list[$cont]->descricao);
                    echo($NOMEa);
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
        



<!--
        <div class="caixaV">
            <div class="image_passagens">
                <div class="image_passagens_1">
                    <img src="../imagens/viagem_sc.jpg">
                </div>
                <div class="image_passagens_2">
                    <img src="../imagens/viagem_sp.jpg">
                </div>
            </div>
            <div class="titulo_passagem">
                Shablau to Shablau 
            </div>
            <div class="descricao_passagem">
                Venha viajar para ******  com todo o conforto que nossa viação tem a oferecer. Na melhor velocidade ahuee O que esta esperand? Compre
                <p class="preco_passagem"> R$ 100,00</p>                                
            </div>
            <div class="confirmacao_passagem">
                <div class="imagem_comprar_bt">
                </div>                            
                <input type="submit" value="Confirmar" class="botao_confirmar_passagem" >

            </div>  
        </div>

        <div class="caixaV">
            <div class="image_passagens">
                <div class="image_passagens_1">
                    <img src="../imagens/viagem_sc.jpg">
                </div>
                <div class="image_passagens_2">
                    <img src="../imagens/viagem_sp.jpg">
                </div>
            </div>
            <div class="titulo_passagem">
                Shablau to Shablau 
            </div>
            <div class="descricao_passagem">
                Venha viajar para ******  com todo o conforto que nossa viação tem a oferecer. Na melhor velocidade ahuee O que esta esperand? Compre
                <p class="preco_passagem"> R$ 100,00</p>                                
            </div>
            <div class="confirmacao_passagem">
                <div class="imagem_comprar_bt">
                </div>                            
                <input type="submit" value="Confirmar" class="botao_confirmar_passagem" >

            </div>             
        </div>
        <div class="caixaV">
            <div class="image_passagens">
                <div class="image_passagens_1">
                    <img src="../imagens/viagem_sc.jpg">
                </div>
                <div class="image_passagens_2">
                    <img src="../imagens/viagem_sp.jpg">
                </div>
            </div>
            <div class="titulo_passagem">
                Shablau to Shablau 
            </div>
            <div class="descricao_passagem">
                Venha viajar para ******  com todo o conforto que nossa viação tem a oferecer. Na melhor velocidade ahuee O que esta esperand? Compre
                <p class="preco_passagem"> R$ 100,00</p>                                
            </div>
            <div class="confirmacao_passagem">
                <div class="imagem_comprar_bt">
                </div>                            
                <input type="submit" value="Confirmar" class="botao_confirmar_passagem" >

            </div>             
        </div>
        <div class="caixaV">
            <div class="image_passagens">
                <div class="image_passagens_1">
                    <img src="../imagens/viagem_sc.jpg">
                </div>
                <div class="image_passagens_2">
                    <img src="../imagens/viagem_sp.jpg">
                </div>
            </div>
            <div class="titulo_passagem">
                Shablau to Shablau 
            </div>
            <div class="descricao_passagem">
                Venha viajar para ******  com todo o conforto que nossa viação tem a oferecer. Na melhor velocidade ahuee O que esta esperand? Compre
                <p class="preco_passagem"> R$ 100,00</p>                                
            </div>
            <div class="confirmacao_passagem">
                <div class="imagem_comprar_bt">
                </div>                            
                <input type="submit" value="Confirmar" class="botao_confirmar_passagem" >

            </div>             
        </div>        
    </div>
-->

<!--
    <div id="caixaVendasCompleta">
        <div class="caixaV">
            <div class="image_passagens">
                <div class="image_passagens_1">
                    <img src="../imagens/viagem_sc.jpg">
                </div>
                <div class="image_passagens_2">
                    <img src="../imagens/viagem_sp.jpg">
                </div>
            </div>
            <div class="titulo_passagem">
                Shablau to Shablau 
            </div>
            <div class="descricao_passagem">
                Venha viajar para ******  com todo o conforto que nossa viação tem a oferecer. Na melhor velocidade ahuee O que esta esperand? Compre
                <p class="preco_passagem"> R$ 100,00</p>                                
            </div>
            <div class="confirmacao_passagem">
                <div class="imagem_comprar_bt">
                </div>                            
                <input type="submit" value="Confirmar" class="botao_confirmar_passagem" >

            </div>  
        </div>

        <div class="caixaV">
            <div class="image_passagens">
                <div class="image_passagens_1">
                    <img src="../imagens/viagem_sc.jpg">
                </div>
                <div class="image_passagens_2">
                    <img src="../imagens/viagem_sp.jpg">
                </div>
            </div>
            <div class="titulo_passagem">
                Shablau to Shablau 
            </div>
            <div class="descricao_passagem">
                Venha viajar para ******  com todo o conforto que nossa viação tem a oferecer. Na melhor velocidade ahuee O que esta esperand? Compre
                <p class="preco_passagem"> R$ 100,00</p>                                
            </div>
            <div class="confirmacao_passagem">
                <div class="imagem_comprar_bt">
                </div>                            
                <input type="submit" value="Confirmar" class="botao_confirmar_passagem" >

            </div>  
        </div>

        <div class="caixaV">
            <div class="image_passagens">
                <div class="image_passagens_1">
                    <img src="../imagens/viagem_sc.jpg">
                </div>
                <div class="image_passagens_2">
                    <img src="../imagens/viagem_sp.jpg">
                </div>
            </div>
            <div class="titulo_passagem">
                Shablau to Shablau 
            </div>
            <div class="descricao_passagem">
                Venha viajar para ******  com todo o conforto que nossa viação tem a oferecer. Na melhor velocidade ahuee O que esta esperand? Compre
                <p class="preco_passagem"> R$ 100,00</p>                                
            </div>
            <div class="confirmacao_passagem">
                <div class="imagem_comprar_bt">
                </div>                            
                <input type="submit" value="Confirmar" class="botao_confirmar_passagem" >

            </div>  
        </div>

        <div class="caixaV">
            <div class="image_passagens">
                <div class="image_passagens_1">
                    <img src="../imagens/viagem_sc.jpg">
                </div>
                <div class="image_passagens_2">
                    <img src="../imagens/viagem_sp.jpg">
                </div>
            </div>
            <div class="titulo_passagem">
                Shablau to Shablau 
            </div>
            <div class="descricao_passagem">
                Venha viajar para ******  com todo o conforto que nossa viação tem a oferecer. Na melhor velocidade ahuee O que esta esperand? Compre
                <p class="preco_passagem"> R$ 100,00</p>                                
            </div>
            <div class="confirmacao_passagem">
                <div class="imagem_comprar_bt">
                </div>                            
                <input type="submit" value="Confirmar" class="botao_confirmar_passagem" >

            </div>  
        </div>

        <div class="caixaV">
            <div class="image_passagens">
                <div class="image_passagens_1">
                    <img src="../imagens/viagem_sc.jpg">
                </div>
                <div class="image_passagens_2">
                    <img src="../imagens/viagem_sp.jpg">
                </div>
            </div>
            <div class="titulo_passagem">
                Shablau to Shablau 
            </div>
            <div class="descricao_passagem">
                Venha viajar para ******  com todo o conforto que nossa viação tem a oferecer. Na melhor velocidade ahuee O que esta esperand? Compre
                <p class="preco_passagem"> R$ 100,00</p>                                
            </div>
            <div class="confirmacao_passagem">
                <div class="imagem_comprar_bt">
                </div>                            
                <input type="submit" value="Confirmar" class="botao_confirmar_passagem" >

            </div> 
        </div>
    </div>
-->
</div>
    </form>
