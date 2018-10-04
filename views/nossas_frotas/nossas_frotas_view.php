
<div id="area_frota">
    <div id="background_frotas">
    </div>        
    <section id="container_frota">
        <div id="titulo_pagina_frotas">
            <img src="../icones/map-marker-2-xxl.png" alt="icones_frotas">
            Nossas Frotas
            <hr id="linha_titulo_pagina_frotas">
        </div>

        <ul id="tab-menu_frota">
            <li><a href="#microonibus">Microonibus</a></li>
            <li><a href="#convencional">Convencional</a></li>
            <li><a href="#executivobasico">Executivo(Básico)</a></li>
            <li><a href="#executivopremium" >Executivo(Premium)</a></li>      
        </ul>

        <?php

        require_once('../cms/controller/frota_controller.php');
        require_once('../cms/models/frota_class.php');

        ?>

        <div class="item_frota" id="microonibus">

            <h1 class="titulo_onibus"> 
                Microonibus
            </h1>

            <?php

            $controller_frota = new frotaController();
            $idTipoOnibus = 1;
            $listMicroOnibus = $controller_frota::ListarView($idTipoOnibus);

            if($listMicroOnibus == 'nada'){
                echo 'não há nada para mostrar.';
            }else{

            ?>

            <p class="texto_frota">
               <?=$listMicroOnibus->descricao;?>
            </p>
            <div class="imagem_onibus">
                <img src="../cms/<?=$listMicroOnibus->imagem;?>" alt="microonibus">
            </div>

            <?php } ?>

        </div>
        <div class="item_frota" id="convencional">

            <h1 class="titulo_onibus"> 
                Convencional
            </h1>

            <?php

            $controller_frota = new frotaController();
            $idTipoOnibus = 2;
            $listConvencional = $controller_frota::ListarView($idTipoOnibus);

            if($listConvencional == 'nada'){
                echo 'não há nada para mostrar.';
            }else{

            ?>

            <p class="texto_frota">
               <?=$listConvencional->descricao;?>
            </p>
            <div class="imagem_onibus">
                <img src="../cms/<?=$listConvencional->imagem;?>" alt="convencional">
            </div>

            <?php } ?>

        </div>
        <div class="item_frota" id="executivobasico">

            <h1 class="titulo_onibus"> 
                Executivo Básico
            </h1>

            <?php

            $controller_frota = new frotaController();
            $idTipoOnibus = 3;
            $listExBasico = $controller_frota::ListarView($idTipoOnibus);

            if($listExBasico == 'nada'){
                echo 'não há nada para mostrar.';
            }else{

            ?>

            <p class="texto_frota">
               <?=$listExBasico->descricao;?>
            </p>
            <div class="imagem_onibus">
                <img src="../cms/<?=$listExBasico->imagem;?>" alt="executivo basico">
            </div>

            <?php } ?>

        </div>
        <div class="item_frota" id="executivopremium">

            <h1 class="titulo_onibus"> 
                Executivo Premium
            </h1>

            <?php

            $controller_frota = new frotaController();
            $idTipoOnibus = 4;
            $listExPremium = $controller_frota::ListarView($idTipoOnibus);

            if($listExPremium == 'nada'){
                echo 'não há nada para mostrar.';
            }else{

            ?>

            <p class="texto_frota">
               <?=$listExPremium->descricao;?>
            </p>
            <div class="imagem_onibus">
                <img src="../cms/<?=$listExPremium->imagem;?>" alt="executivo premium">
            </div>

            <?php } ?>

        </div>                    
    </section>
</div>
