<?php

$botao = "Salvar";
$action = "controller=frota&modo=novo";

    
    
$select1 = null;
$select2 = null;
$select3 = null;
$select4 = null;




$id = 'null';
$imagem = 'imagens/Viacao_Asteroide3.png';
$descricao = null;
$titulo_frota = null;
$action = "frotas&modo=novo";

if(isset($frotaEdit)){
    
    $botao = 'Editar';
    
    $id = $frotaEdit->id;
    $imagem = $frotaEdit->imagem;
    $descricao = $frotaEdit->descricao;
    $idTipoOnibus = $frotaEdit->idTipoOnibus;
//    $titulo_frota = $frotaEdit->titulo_frota;
    $ativo = $frotaEdit->ativo;
    
//    var_dump($frotaEdit);
    
    $action = "frotas&modo=editar&id=".$id."&imagem=".$imagem."&idTipoOnibus=".$idTipoOnibus;


}
?>
        <form name="CRUD de frota" method="post" action="router.php?controller=<?=$action?>" enctype="multipart/form-data">
            <div id="caixa_cont">

                    <div id="marketing">
                        Nossas Frotas
                    </div>
                
                    <!--O tamanho da div onde haverá  os campos de contatos-->
                    <div id="area_contato">
                        <!--Menu onde irá estar as telas para fazer upload-->
                        <div id="menu_contato11">
                            <a href="index.php?pagina=marketing/frota/frotas_view.php">
                                <div class="espaco_menu_frota">
                                    Nova Frota
                                </div>
                            </a>
                            <a href="index.php?pagina=marketing/frota/registro_frota.php">
                                <div class="espaco_menu_frota">
                                    Registros
                                </div>
                            </a>

                        </div>

                        <div id="contatos_frota">
                           <form name="pg_nossafrota" method="post" action="">
                               <a href="frotas_view.php">
                                   <div id="titulo_pagina1">
                                       
                                   </div>
                               </a>
                               <div class="cont_frota">
                                   <!--Div onde estará a seleção de imagem da pagina frota-->
                                   <div id="sustent_frota">
                                       <div id="text_frota">
                                            <div id="imagem">
                                                Imagem:
                                           </div>
                                           <div id="caixa_img">
                                               <img id="imagemFrota" src="<?php echo($imagem)?>">
                                                <div id="botao_img">
                                                    <input class="alinhaFrotaImg" type="file" name="btnImagem">
                                               </div>
                                           </div>
                                           <!--Div onde estará  os campos para preencher sobre os onibus-->
                                           <div id="sustnt_frota">
                                               <div id="sobre">
                                                Sobre:
                                               </div>
                                               <div id="espaco_sobre">
                                                <textarea wrap="off" type="text_sobre" name="txt_sobre" values=" " required  style="resize: none" id="ajuste_frota"><?php echo($descricao)?></textarea>
                                               </div>
                                               <div id="sobre">
                                                Ônibus:
                                               </div> 
                                                <div id="espaco_sobre1">
<!--                                                    <input type="text" name="titulo_frota" value="<?php                                                     echo($titulo_frota)?>">-->
                                                    <select name="cbx_tipoOnibus">
                                                        
                                                        <?php
                                                        
                                                        require_once('controller/tipoOnibus_controller.php');
                                                        require_once('models/tipoOnibus_class.php');
              
                                                        $controller_to = new tipoOnibusController();
                                                        $listTo = $controller_to::Listar();
              
                                                        $cont = 0;
              
                                                        while($cont < count($listTo)){
                                                        
                                                        ?>
                                                        
                                                        <option  value="<?=$listTo[$cont]->idTipoOnibus;?>" <?php if($listTo[$cont]->idTipoOnibus == $id){ echo'selectd'; } ?>>
                                                            <?= $listTo[$cont]->tipo;?> 
                                                        </option>
                                                        
                                                        
                                                        <?php
                                                            
                                                            $cont+=1;
                                                            
                                                        }
                                                        
                                                        ?>
                                                        
                                                    </select>
                                               </div>
                                           </div>
                                       </div>
                                       <div id="botao_frota">
                                           <input type="submit" value="<?=$botao;?>" name="btnSalvar" >
                                       </div>
                                   </div>
                               </div>
                            </form>
                        </div>
                    </div>
                </div>
            </form>