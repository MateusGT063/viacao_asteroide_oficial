<?php


    require_once('../cms/controller/dicas_controller.php');
    require_once('../cms/models/dicas_class.php');

    // Instancia o Controller.
    $controller_dicas = new dicasController();

    // Chama o metodo para listar todos os registros.
    $list = $controller_dicas::ListarView();




?>  
<div id="espaco_dicas">
    <div id="introducao_dicas" class="bgParallax" data-speed="15">
        <div id="rgb_dicas">
            <div id="titulo_pagina_dicas">
                <img src="../icones/map-marker-2-xxl.png" alt="dicas">
                    Dicas
                <hr id="linha_titulo_pagina_dicas">
            </div>
            <div class="texto_introducao_dicas">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut maximus semper risus eu elementum. Sed aliquet, nulla eget eleifend faucibus, massa velit maximus leo, a ultricies nunc purus nec nulla. Suspendisse sollicitudin neque vitae neque tempus semper. Sed eget erat felis. Etiam erat ipsum, fringilla consectetur faucibus sed, scelerisque in est. Fusce suscipit turpis a ante tincidunt rutrum. Suspendisse at ante sem. Nunc ut blandit ipsum. Duis tellus lorem, pulvinar in volutpat quis, feugiat id ligula.
            </div>
        </div>
    </div>
    <div id="espaco_dicas_back">
        <div id="container_dicas">
            <?php 
                $cont = 0;
                while($cont < count($list)){

            ?>

            <div class="item_dica">  
                    <div class="imagem_dica"> 
                         <img src="../cms/<?php  echo($list[$cont]->imagem); ?> " alt="dicas imagem">
                        <div class="rgba_dica">
                        </div>
                    </div>
                   <div class="titulo_dica">
                        <?php
                            $destinos = utf8_encode($list[$cont]->dica);
                            echo($destinos);        
                        ?>
                    </div>    
                <div class="texto_dica">
                    <p> <?php echo($list[$cont]->descricao); ?>
                    </p>                   

                </div>                
<!--
 
-->
            </div>
            <?php 
                $cont+=1;
            }
            ?>
        </div>       
    </div>
  
     <div id="introducao_dicas_2">
        <div id="rgb_dicas2">
            <div id="titulo_pagina_dicas2">
                <img src="../icones/map-marker-2-xxl.png" alt="dicas_">
                    Deixe Sua Dica
                <hr id="linha_titulo_pagina_dicas2">
            </div>
            <div class="texto_introducao_dicas">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut maximus semper risus eu elementum. Sed aliquet, nulla eget eleifend faucibus, massa velit maximus leo, a ultricies nunc purus nec nulla. Suspendisse sollicitudin neque vitae neque tempus semper. Sed eget erat felis. Etiam erat ipsum, fringilla consectetur faucibus sed, scelerisque in est. Fusce suscipit turpis a ante tincidunt rutrum. Suspendisse at ante sem. Nunc ut blandit ipsum. Duis tellus lorem, pulvinar in volutpat quis, feugiat id ligula.
            </div>
            <div id="deixe_sua_dica">
                <form name="frmdicas" method="post" action="../cms/router.php?controller=dicas&modo=novo&pag=here" enctype="multipart/form-data">
                    <div id="container_nome_lugar">
                        <div class="titulo_formulario_dicas">
                            Nome do Lugar:
                        </div>
                        <input type="text" name="txtLocal" id="input_nome_lugar" >
                    </div>
                    <div id="container_selecione_imagem">
                        <div class="titulo_formulario_dicas">
                            Selecione a Imagem:
                        </div>
                        <input id="selecione_imagem_dica" type="file" name="btImagem">
                    </div>
                    <div id="container_texto_dica">
                        <div id="titulo_texto_dica">
                            Agora Escreva Sua Experiência:
                        </div>
                        <textarea id="dica_txtarea" name="txtDescricao"></textarea>
                        <input id="salvar_dicas" type="submit" value="Salvar">

                    </div>
                </form>
            </div>            
        </div>
    </div>    

</div>
