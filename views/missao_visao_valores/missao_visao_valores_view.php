<div id="container_mvv">
    
    <?php


    require_once('../cms/controller/missao_controller.php');
    require_once('../cms/models/missao_class.php');

    // Instancia o Controller.
    $controller_missao = new controllerMissao();

    // Chama o metodo para listar todos os registros.
    $list = $controller_missao::ListarView();

    $cont = 0;
    while($cont < count($list)){

    ?> 
    
    <div id="missao" class="bgParallax" data-speed="15">
        <div class="rgba_color"> 
             <article>
                <h1> Missão </h1>
                <p class="missao_texto"><?php  echo($list[$cont]->missao); ?> </p>
             </article>
        </div>
    </div>
    <div id="visao" class="bgParallax" data-speed="15">
        <div id="rgba_color">    
         <article>
            <h1> Visão </h1>
                <p class="missao_texto"><?php  echo($list[$cont]->visao); ?></p>
         </article>
        </div>
    </div>
    <div id="valores" class="bgParallax" data-speed="15">
        <div class="rgba_color"> 
             <article>
                <h1> Valores </h1>
                <p class="missao_texto"><?php  echo($list[$cont]->valores); ?> </p>
             </article>
        </div>
    </div>
    
    <?php
        
        $cont+=1;
    
    }
    
    ?>

</div>
<!-- O Data Speed irá definir a velocidade do background em relação aos outros elementos -->

