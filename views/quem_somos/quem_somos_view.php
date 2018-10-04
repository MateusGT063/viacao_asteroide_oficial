
<div id="sobre_empresa">
    <div id="container_sobre_empresa">
        
        <?php


        require_once('../cms/controller/sobre_empresa_controller.php');
        require_once('../cms/models/sobre_empresa_class.php');

        // Instancia o Controller.
        $sobreempresaController = new sobreempresaController();

        // Chama o metodo para listar todos os registros.
        $list = $sobreempresaController::ListarView();

        $cont = 0;
        $lado = 0;
        $tamanhoList = count($list);
        
        while($cont < $tamanhoList){
            if($lado == 0){

                ?>
        
        <div class="faixa_sobre_empresa">
            <div class="lado_sobre_empresa responsive_container_sobre">
                <div class="texto_sobre_empresa responsive_container_sobre">
                   <?php  echo($list[$cont]->textoSobre); ?>
                </div>
            </div>
            <div class="faixa_meio_sobre_empresa">
                <div class="pedaco_faixa_meia">
                </div>
                <div class="pedaco_faixa_meia">
                </div>
                <div class="pedaco_faixa_meia">
                </div>
                <div class="pedaco_faixa_meia">
                </div>
                <div class="pedaco_faixa_meia">
                </div>                

            </div>  
            <div class="lado_sobre_empresa">
                <div class="texto_sobre_empresa">
                    <div class="imagem_sobre_empresa">
                        <img src="../cms/<?php  echo($list[$cont]->imagemSobre); ?>" alt="Sobre a Empresa">
                    </div>
                </div>
            </div>

                    <?php

                    $lado = 1;

                }else{

                    ?>
        <div class="faixa_sobre_empresa">
            <div class="lado_sobre_empresa">
                <div class="texto_sobre_empresa">
                    <div class="imagem_sobre_empresa">
                        <img src="../cms/<?php  echo($list[$cont]->imagemSobre); ?>" alt="Imagem Sobre a Empresa">
                    </div>
                </div>
            </div>
            <div class="faixa_meio_sobre_empresa">
                <div class="pedaco_faixa_meia">
                </div>
                <div class="pedaco_faixa_meia">
                </div>
                <div class="pedaco_faixa_meia">
                </div>
                <div class="pedaco_faixa_meia">
                </div>
                <div class="pedaco_faixa_meia">
                </div>                

            </div>
            <div class="lado_sobre_empresa responsive_container_sobre">
                <div class="texto_sobre_empresa ">
                   <?php  echo($list[$cont]->textoSobre); ?>
                </div>
            </div>

                    <?php

                    $lado = 0;

                }

            ?> 

        </div>

            <?php

            if(!($cont == $tamanhoList-1) == true){

            ?>

        <div class="faixa_pedestre">
            <div class="pedaco_faixa_pedestre">
            </div>
            <div class="pedaco_faixa_pedestre">
            </div>
            <div class="pedaco_faixa_pedestre">
            </div>
            <div class="pedaco_faixa_pedestre">
            </div>
            <div class="pedaco_faixa_pedestre">
            </div>
            <div class="pedaco_faixa_pedestre just_faixa_resp">
            </div>
            <div class="pedaco_faixa_pedestre just_faixa_resp">
            </div>
            <div class="pedaco_faixa_pedestre just_faixa_resp">
            </div>
            <div class="pedaco_faixa_pedestre just_faixa_resp">
            </div>
            <div class="pedaco_faixa_pedestre just_faixa_resp">
            </div>
            <div class="pedaco_faixa_pedestre just_faixa_resp">
            </div>
            <div class="pedaco_faixa_pedestre just_faixa_resp">
            </div>
            <div class="pedaco_faixa_pedestre just_faixa_resp">
            </div>
            <div class="pedaco_faixa_pedestre just_faixa_resp">
            </div>         
        </div>

            <?php

            }

            $cont+=1;

        }

            ?>

    </div>   
</div>

<div id="sobre_empresa_responsive">
    <div id="container">
    </div>
</div>










