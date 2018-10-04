<?php
//    echo($_SESSION['paradaEscolhida']);
//    echo($_SESSION['cliente']);


//    require_once('../models/pagamento_class.php');
//    require_once('../controllers/pagamento_controller.php');
//// Instancia o Controller.
//        $controller_boleto = new boletoController();
//        // Chama o metodo para listar todos os registros.
//        $listUser = $controller_boleto::selecionarPerfilCliente($numeroCliente);


    
    $cart = null;
    $password = null;
    $name = null;
    $valorT = null;
    $action = null;
//    $idViagem = $_GET['idViagem'];
    $assento = $_GET['assentoSelecionado'];
    $clienteTeste = $_SESSION['cliente'];

    if ($clienteTeste == null || $_SESSION['cliente'] == null ){
        echo ' ';
    } else {
        $statusUsuario = true;
        $djewjk  = $clienteTeste;
        $numeroCliente =$_SESSION['cliente'];
        require_once('../controllers/boletoCad_controller.php');
        require_once('../models/boletoCad_class.php');
        // Instancia o Controller.
        $controller_boleto = new boletoController();
        // Chama o metodo para listar todos os registros.
        $listUser = $controller_boleto::selecionarPerfilCliente($numeroCliente);
        $contUser = 0;
        while($contUser < count($listUser)){
            
//         echo($listUser[$contUser]->nomeEstado);
        $_SESSION['cidade'] = $listUser[$contUser]->nomeEstado;
        
        $_SESSION['sigla'] = $listUser[$contUser]->sigla;
        $_SESSION['bairro'] = $listUser[$contUser]->bairro;
        $_SESSION['logradouro'] = $listUser[$contUser]->logradouro;
        $_SESSION['numero'] = $listUser[$contUser]->numero;
        $_SESSION['cep'] = $listUser[$contUser]->cep;
        
    $contUser+=1;
    }
    }


//    $idPontoPartida = $_GET['paradaId'];

//    echo($idPontoPartida); 
//    echo($_SESSION['cliente']);


?>
<?php
                        
//                        echo 'status = online';
                        
//                        $numeroCliente =$_SESSION['cliente'];
//                        require_once('../controllers/boletoCad_controller.php');
//                        require_once('../models/boletoCad_class.php');
//                        // Instancia o Controller.
//                        $controller_boleto = new boletoController();
//                        // Chama o metodo para listar todos os registros.
//                        $listUser = $controller_boleto::selecionarPerfilCliente($numeroCliente);
//
//                        $contUser = 0;
//                        while($contUser < count($listUser)){
//
//    //                        echo($listUser[$contUser]->email);
//
//    //                        echo($listUser[$contUser]->cpf);
//                            $_SESSION ['cpfUsuario'] = $listUser[$contUser]->cpf;
//                            $_SESSION ['email'] = $listUser[$contUser]->email;
//
////                            echo ($_SESSION ['cpfUsuario']);
//
//                            $contUser+=1;
//                        }
                    
                 ?>
<?php
//    
                                
?>
<?php
//       
?>
<?php 
//    
?>
<style>
    .alinhamentoCaixaApi{
        height: 40px;
        width: 370px;
/*        background-color: forestgreen;*/
        text-align: center;
        margin: auto;
    }
    
    .caixaApi{
        width: 350px;
        height: 50px;
        margin: auto;
/*        background-color: antiquewhite;*/
        margin-top: 5px;
    }
    .textApiA{
        height: 40px;
        float: left;
        margin-left: 5px;
        margin-right: 8px;
        line-height: 40px;
/*        font-size: 12pt;*/
/*        background-color: forestgreen;*/
    }
    .alinhaInputApi{
        height: 30px;
        width: 200px;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        border: solid 1px;
        padding-left: 5px;
/*        padding: 15px;*/
    }
    
    .valores2{
        float: left;
        line-height: 40px;
        width: 150px;
/*        background-color: dodgerblue;*/
        margin-left: 5px;
/*        font-size: 15pt;*/
    }
    
</style>
<div id="area_compra_passo3">
    <div id="rgb_area_compra_passo3">
        <div id="titulo_pagina_compra_passo_2">
            <img src="../icones/map-marker-2-xxl.png" alt="icone">
            Compra de Passagem | Passo 3 - Finalização da Compra
            <hr id="linha_pagina_compra_passo_2">
        </div>
            
        <div id="detalhes_ultimos_compra">
            <div id="titulo_compra_informacoes">
                <div id="nome_produto_final">
                    Origem / Destino:
                </div>   
                <div id="assento_produto_final">
                    Assento:
                </div>
                <div id="data_produto_final">
                    Data de Ida:
                </div>
                <div id="tipo_onibus_produto_final">
                    Tipo de Ônibus
                </div>    
                <div id="preco_onibus_produto_final">
                    Preço
                </div>
            </div>
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
            <div id="detalhes_compra_informacoes_final">
                <div id="detalhes_nome_produto_final">
<!--                    Salvador > KLDSLD-->
                    <span class="just_compra_3_resp"> Origem / Destino: </span>
                    <?php  
//                        $alinhaT = $list[$cont]->destino;
//                    echo($list[$cont]->destino); 
                    ?>
                    <?php 
            
                    $NOMEARQ = utf8_encode($list[$cont]->destino);
            
                    echo($NOMEARQ);
                    $_SESSION ['destinoC'] = $NOMEARQ;
                    ?>
                </div>   
                <div id="detalhes_assento_produto_final">
                    <div class="assento_cadeira textCenterAlign">
                        <?php 
                            echo($assento); 
                    $_SESSION ['acento'] = $assento;
                    
                        ?>
                    </div>
                   
                </div>     
                <div id="detalhes_data_produto_final">
                    <span class="just_compra_3_resp"> Data de Ida:  </span> 
                    <?php 
                    echo($list[$cont]->data);
                    ?>
                </div> 
                <div id="detalhes_tipo_onibus_produto_final">
                    
                    <span class="just_compra_3_resp"> Tipo de Ônibus:  </span>
                    
                    <?php
                        if ($list[$cont]->idOnbs == 1){
                    ?>
                    <img src="../imagens/microOnibusIlustri.png" height="85" alt="Teste" title="Micro Ônibus" alt="imagem micro">
                    <?php
                        } else if ($list[$cont]->idOnbs == 2){
                    ?>
                    <img src="../imagens/onibus2.png" height="70" alt="Teste1" title="Ônibus Tradicional" alt="imagem convencional">
                    <?php        
                        } else if ($list[$cont]->idOnbs == 3){
                    ?>
                    
                    <img src="../imagens/onibus3.png" height="80" alt="Teste" title="Ônibus Executivo" alt="imagem executivo">
                    <?php
                            
                        } else if ($list[$cont]->idOnbs == 4){
                    ?>
                    <img src="../imagens/onibus4.png" height="75" alt="Teste" title="Ônibus Premium" alt="imagem premium">
                    <?php
                            
                        }
                    ?>
<!--                    Executivo Premium-->
                </div>    
                <div id="detalhes_preco_onibus_produto_final">
                    <span class="just_compra_3_resp"> Preço:  </span> R$<?php  echo($list[$cont]->valor); ?>
<!--                     50,00-->
                </div> 
            </div>
            
        <?php

                $cont+=1;
           }

        ?>
        </div> 
<!--        
        FEITO POR: EDUAROD ROCHA PATINHO

        API PAGARME;

        05/06/2018

-->
        <?php

            if(@$_SESSION['nome'] == null){
                $status =1;
  //                $teste ='Usuário não está Logado';
                $teste ='Faça o Login ou Cadastre-se!';
                $action="off";
//                echo ($teste);
                $_SESSION['cliente'] = null;
            } else {
                $status =0;
                $teste ='Usuario Logado';
                $idViagem = $_GET['idViagem'];
//                $_SESSION ['testeValor'] = $valorT;
                $action =('cartao');
//                $action =('a');
//                echo ($teste);
            }
        
//            if(isset($_POST['finalizarCompra'])){
//                echo 'teste';
//            }
        ?>
        
        <form name="teste" method="post" action="../router.php?controller=pagamento&modo=<?=$action?>">
        <div id="tabela_pagamento">
            <div id="titulo_pagamento">
                Pagamento em Cartão
            </div>
            <div>
                <!--  Campos fundamentais para a API -->
                <div class="caixaApi">
                    <div class="textApiA">
                        Numero do Cartão:
                    </div>
                    <input class="alinhaInputApi" type="text" name="txtCartao" value="<?php echo($cart);?>" placeholder="Cartão" maxlength="16">
                </div>
                <div class="caixaApi">
                    <div class="textApiA">
                        Cvv do Cartão:
                    </div>
                    <input class="alinhaInputApi" type="text" name="txtSenha" value="<?php echo($password);?>" placeholder="Senha" maxlength="10">
                </div>
                <div class="caixaApi">
                    <div class="textApiA">
                        Nome Completo:
                    </div>
                    <input class="alinhaInputApi" type="text" name="txtName" value="<?php echo($name);?>" placeholder="Nome Completo" maxlength="40">
                </div>
                
<!--                IFNORMANDO O VALOR PAR A API
-->
                <?php

                    require_once('../cms/controller/destino_controller.php');
                    require_once('../cms/models/destino_class.php');
                //
                    // Instancia o Controller.
            //    session_start();
                    $controller_destino1 = new destinoController();

                    // Chama o metodo para listar todos os registros.
                    $list1 = $controller_destino1::buscarViagem();


                //	$idViagem = $_GET['idViagem'];


                    $cont1 = 0;
                    while($cont1 < count($list1)){
                ?>
                <div class="alinhamentoCaixaApi">
                    <div class="valores2">
                        Valor: 
                    </div>
                    <div class="valores2">
                        R$
                        <?php  
                            $valorT = $list1[$cont1]->valor; 
                            $_SESSION ['testeValor'] = $valorT;
                            echo ( $_SESSION ['testeValor']); 
                        ?>
                    </div>
                </div>
                
                
                <?php

                    $cont1+=1;
                    }

                ?>
<!--                INFORMAÇOES SOBRE O CLIENTE
-->
                
               
                
                
            </div>
        </div>
        <div id="divspan">
<!--        

    FORMULARIO DO BOLETO

-->
        <input id="botao_confirmar_fim" type="submit" name="finalizarCompra" value="Finalizar Compra" onclick="funcao1()"> 
        </div>
<!--                    <input type="submit" name="" value="Pagar Boleto" onclick="funcao1()">-->
        
        </form>     
        
        
        
<!--        <div id="botoes_compras_finalizar">-->
<!--            <div id="botao_gerar_boleto">-->
                
                <?php
                    if($status == 0){
//                        $clienteTeste = null;
//                        $action ='to aqui';
//                        echo ($djewjk);
                        $action = 'novo&idViagem='.$idViagem.'&acento='.$assento."&parada=".$_SESSION['paradaEscolhida']."&cliente=".$djewjk;
                    } else{
//                        $clienteT =$clienteTeste;
                        $action = "off";
//                        
                        
                    } 
                        
                ?>
<!--            
                PUXA A PAGINA DE BOLETO
-->
<!--                <form class="teste" action="../router.php?controller=cadBoleto&modo=<?=$action?>" method="post">-->
                    
<!--                    <input type="submit" name="" value="Pagar Boleto" onclick="funcao1()">-->

<!--                </form>-->
<!--            </div>-->
            

        <?php
//            echo ($teste);
        ?>
        
        <script type="text/javascript">
            function funcao1()
            {
                var states = "<?php echo ($status); ?>";
                var teste= "<?php echo ($teste); ?>";
                var id = "<?php echo ($idViagem) ?>";

                if (states == 1){
                    alert(teste, id);
                } else {
  //                    alert('Vai para a pagina do boleto direto !');
                }
            }

        </script>
<!--    </div>-->
  </div>
