<?php 
//header('location:index.php');
//    $action ='index.php';
    $action = "controller=cadContatos&modo=novo";


//    require_once('../cms/controller/usuario_controller.php');
//    require_once('../cms/models/usuario_class.php');

    // Instancia o Controller.
//    $controller_usuario = new usuarioController();

  
    $botao = 'Enviar';

    $txtEmail = null;
    $textObs = null;




?>
<div id="espaco_contatos">
    
    
    <?php


        require_once('../cms/controller/contatos_controller.php');
        require_once('../cms/models/contatos_class.php');

        // Instancia o Controller.
        $controller_contatos = new contatosController();

        // Chama o metodo para listar todos os registros.
        $list = $controller_contatos::Listar();




    ?>   
    <div id="contatos_container_intro" class="bgParallax2" data-speed="25">
        <div id="espaco_background_astronalt">
            <div id="background_astronalt" class="bgParallax2" data-speed="10">
            </div>
            <div id="meteor_contatos1">
            </div>
            <div id="meteor_contatos2">
            </div>      
            <div id="meteor_contatos3">
            </div>  
            <div id="meteor_contatos4">
            </div>          
            <div id='texto_contatos'>
                Entre em Contato Conosco
                <div class="subtexto_contatos">
                    <span id="duvidas_freq_scroll">
                        Veja as Dúvidas Mais Frequentes
                    </span>
                </div>
                <div class="subtexto_contatos">
                    <span class="email_scroll">
                        Mande-nos um E-mail
                    </span>
                </div>
                <div class="subtexto_contatos">
                    <span class="email_scroll">
                        Interaja com o Chatbot
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div id="duvidas_frequentes">
        <div class="titulo_pagina_contatos">
            <img src="../icones/map-marker-2-xxl.png" alt="icone contatos">
                Dúvidas Mais Frequentes
            <hr class="linha_titulo_pagina_contatos">
        </div>
        <div id="container_perguntas">                
            <?php 
                $cont = 0;
                while($cont < count($list)){           

            ?> 
                <div class="perguntas_frequentes"> <?php  echo($list[$cont]->pergunta); ?>
                </div>
                <div class="resposta_pergunta">
                  <p> <?php  echo($list[$cont]->resposta); ?></p>
                </div>

            <?php 

                $cont+=1;

                }
            ?>                
        </div>
            
    </div>
   
    <div id="formulario_contatos">
        <div id="chatbot_espaco">
        </div>
        <div class="titulo_pagina_contatos">
            <img src="../icones/map-marker-2-xxl.png" alt="icones contatos2">
                Informe sua Dúvidas
            <hr class="linha_titulo_pagina_contatos">
        </div>
        <div id="container_formulario">
            <form name="frmSugestao" method="post" action="../router.php?<?=$action;?>" enctype="multipart/form-data">
                <div id="email_contatos">
                    E-Mail:
                </div>
                <input id="email_sugestao" type="email" name="txtEmail" value="">
                
                <div id="sugestao_contatos">
                    Sugestão:
                </div>
                <textarea id="area_sugestao" name="textObs"></textarea>
                
                <button id="salvar_sugestao" type="submit" > <?php echo($botao); ?>
                </button>
            </form>            
        </div>

    </div>


</div>

