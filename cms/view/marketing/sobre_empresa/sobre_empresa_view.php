<?php

$botao = 'Salvar';
$action = 'controller=sobre_empresa&modo=novo';

$idVersao = null;
$textoSobre = null;
//$imagemSobre = null;
$ativo = null;
$imagemSobre= 'imagens/Viacao_Asteroide3.png';



if(isset($localSobre_empresa)){
    
    $botao = 'Editar';
    
    $idVersao = $localSobre_empresa->idVersao;
    $imagemSobre = $localSobre_empresa->imagemSobre;
    $textoSobre = $localSobre_empresa->textoSobre;
    $ativo = $localSobre_empresa->ativo;    

    
    $action = "controller=sobre_empresa&modo=editar&id=".$idVersao."&imagemSobre=".$imagemSobre;
}

?>


<form name="CRUD_sobre_empresa" method="post" action="router.php?<?=$action;?>" enctype="multipart/form-data">
    <div id="area_sobre_empresa">
        <div id="titulo_pagina_principal">
            Sobre a Empresa:
        </div>
        <div id="espaco_inserir_sobre_empresa">
            
            <div id="esquerdo_espaco_inserir_sobre_empresa">
                <div class="titulo_area_sobre_empresa">
                    Digite o Texto do Sobre a Empresa:
                </div>
                <textarea class="area_sobre_empresa borda15px"  name="txt_sobre_empresa" value=""><?php echo($textoSobre); ?></textarea>
                
                <div class="botaoSS">
                    <input class="botao11s borda15px" type="submit" name="btSalvar" value="<?php echo($botao); ?>">
                </div>
            </div>
            <div id="direto_espaco_inserir_sobre_empresa">
                <div class="titulo_area_sobre_empresa_img">
                    Insira uma Imagem
                </div>
                <div class="seguraSE">
                    <input class="imagem_empresa" type="file" name="btImagem" > 
                </div>
                
                
                
                <div id="ImagensEditarEmpresa">
                    <div id="trocaImg1">
                        <img src="<?php echo($imagemSobre);?>">
                    </div>
                </div>
            </div>
        </div>
        
        <div id="caixaDicas_sobre_empresa">
            <div id="titleDicas_sobre_empresa">
                <div class="titulo1_empresa">
                    Texto Sobre
                </div>
                <div class="titulo1_empresa">
                    Imagem Sobre:
                </div>
                <div class="titulo1_empresa">
                    Opção
                </div>                 
            </div>
            <div id="caixaCresceDica_sobre_empresa">
                
                <?php
                
                    require_once('controller/sobre_empresa_controller.php');
                    require_once('models/sobre_empresa_class.php');
                    
                // Instancia o Controller.
                    $controller_sobre_empresa = new sobreempresaController();

                // Chama o metodo para listar todos os registros.

                    $list = $controller_sobre_empresa::Listar();


                $cont = 0;
                while($cont < count($list)){
                
                ?>
                
                <div class="conteudoEmpresa lineHeight50 ">
                    <?php echo($list[$cont]->textoSobre);?>
                </div>
                <div class="conteudoEmpresa lineHeight50">
                    <?php echo($list[$cont]->imagemSobre);?>
                </div>
                <div class="conteudoEmpresa lineHeight50">
                    <div class="editar_sobre_empresa">
                     <?php
                        if($list[$cont]->ativo == 1) {    
                                            ?>   
                            <a href="router.php?controller=sobre_empresa&modo=desativar&id=<?php echo($list[$cont]->idVersao); ?>">
                                  <img src="icones/on1.png">
                             </a>
                             <?php
                                  } else {
                                 ?>
                             <a href="router.php?controller=sobre_empresa&modo=ativar&id=<?php echo($list[$cont]->idVersao); ?>">
                                    <img src="icones/off1.png" >
                                </a>
                                            <?php
                                                }
                    
                                                ?>
                    </div>
                    <div class="editar_sobre_empresa">
                        <a href="router.php?controller=sobre_empresa&modo=buscar&id=<?php echo($list[$cont]->idVersao); ?>">                        
                            <img src="icones/Modify16.png">
                        </a>
                    </div>
                    <div class="editar_sobre_empresa">
                        <a href="router.php?controller=sobre_empresa&modo=excluir&id=<?php echo($list[$cont]->idVersao); ?>">                        
                            <img src="icones/Delete16.png">
                        </a>    
                    </div>
                </div>                
                
                <?php
                    $cont+=1;
                    }                    
                ?>
                
            </div> 
                      
        </div>

                
    </div>
    
</form>




