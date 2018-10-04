<?php

$botao = 'Salvar';
$idOnibus = null;
$placa = null;
$idTipoOnibus= null;
$fabricacao = null;
$descricao = null;
$ativo = null;
$action = 'novo';

$selectOnibus = null;


if(isset($listadmFrota)){
    
    $botao = 'Editar';
    
    $idOnibus = $listadmFrota->idOnibus;
    $placa = $listadmFrota->placa;
    $idTipoOnibus = $listadmFrota->idTipoOnibus;
    $fabricacao = $listadmFrota->fabricacao;
    $descricao = $listadmFrota->descricao;
    $ativo = $listadmFrota->ativo;
    $idTipoOnibus = $listadmFrota->idTipoOnibus;;
    
    $action = 'editar&id='.$idOnibus;
    
    $selectOnibus = 'selected';
   
        

    
}
    
?>
<form name="admFrota_view.php" method="post" action="router.php?controller=admFrota&modo=<?=$action?>" enctype="multipart/form-data">
  

     <div id="adm_frota">
         <!--Faixa onde esta o Titulo da pagina-->
         <div id="faixa_admFrota">Frota</div>
         <div id="espaco_AdmFrota">
            <!--Div onde estara o tamanho, onde ficaram os campos etc-->
            <div id="caixa_admfrota">
                <div id="caixa_Campos">
                    <div id="campo_frota">
                        Placa:
                        
                    </div>  
                    <div id="campo_frota">
                        Número de Fabricação:
                        
                    </div>
                    <div id="campo_frota">
                      Tipo Onibus:
                        
                    </div>
                    <div id="campo_frota">
                        Descrição:
                        
                    </div>
                    
                
                <div id="preencher_Campo">
                   
                    <!--Campo para preencher a Placa-->
                    <input id="admFrota" type="text" placeholder="" required name="txtPlaca" value="<?php echo($placa); ?>" maxlength="8">
            
                    <!--Campo para preencher o Número de Fabricação-->
                    <input id="admFrota_Num" type="text" placeholder="" required name="txtFabricacao" value="<?php echo($fabricacao); ?>" maxlength="9">
               
                     <!--Campo para escolher qual tipo de Onibus será cadastrado-->
                     <select name="cbx_Frota" id="alinhamento_frota">

                        <option value="1" <?php if($idTipoOnibus == 1) {echo($selectOnibus);}?> >Microonibus</option>
                        <option value="2" <?php if($idTipoOnibus == 2) {echo($selectOnibus);}?> >Tradicional</option>
                        <option value="3" <?php if($idTipoOnibus == 3) {echo($selectOnibus);}?> >Executivo(Basico)</option>
                        <option value="4" <?php if($idTipoOnibus == 4) {echo($selectOnibus);}?> >Executivo(Premiun)</option>


                    </select>
                    
                    <!--Campo para preencher o Campo de Descrição-->
                   <textarea name="txt_DescrFrota" placeholder="" maxlength="5000" id="aretext" required style="width:299px; height:60px;"><?=$descricao;?></textarea><br><br>
                    
                    
                     
                    
                </div>
                    
                    <div id="alinhamentoFrota">
                        <input id="botaoFrota" type="submit" name="btnSalvar" value="<?php echo($botao);?>"  >
                    </div>
                </div>
                <!--Aqui EStará alocada a Lista dos Registros-->
                <div id="tamanho_lista">
                    <div id="caixa_lista">
                    
                        <div id="sustent_list">
                            <div class="caixa_list_fota">
                                Placa
                            </div>
                            <div class="caixa_list_fota">
                                Num Fabricação
                            </div>
                             <div class="caixa_list_fota">
                             Tipo Onibus
                            </div>
                             <div class="caixa_list_fota">
                                Descrição
                            </div>
                            <div class="caixa_list_fota">
                                Opção
                            </div>
                        </div>
                           
                        <div id="sustent_campos">
                             <?php

                            require_once('controller/admFrota_controller.php');
                            require_once('models/admFrota_class.php');

                         // Instancia o Controller.
                        $controller_frota = new admFrotasController();

                        // Chama o metodo para listar todos os registros.
                        $listadmFrota = $controller_frota::Listar();

                        $cont = 0;
                            while($cont < count($listadmFrota)){
                                    
                                    ?>
                            <div class="caixa_list_fota">
                                <?php echo($listadmFrota[$cont]->placa); ?>
                            </div>
                            <div class="caixa_list_fota">
                               <?php echo($listadmFrota[$cont]->fabricacao); ?>
                            </div>
                             <div class="caixa_list_fota">
                                <?php echo($listadmFrota[$cont]->idTipoOnibus); ?>
                            </div>
                             <div class="caixa_list_fota">
                                <?php echo($listadmFrota[$cont]->descricao); ?>
                            </div>
                            <div class="caixa_list_fota">
                                    <div id="opcao_admFrota">
                                    <?php
                                        if($listadmFrota[$cont]->ativo == 1) {    
                                                            ?>   
                                            <a href="router.php?controller=admFrota&modo=desativar&id=<?php echo($listadmFrota[$cont]->idOnibus); ?>">
                                                  <img src="icones/on1.png">
                                             </a>
                                             <?php
                                                  } else {
                                                 ?>
                                             <a href="router.php?controller=admFrota&modo=ativar&id=<?php echo($listadmFrota[$cont]->idOnibus); ?>">
                                                    <img src="icones/off1.png" >
                                                </a>
                                            <?php
                                                }
                    
                                                ?>
                                        
                                    
                                </div>
                                
                                <div id="opcao_admFrota">
                                    <a href="router.php?controller=admFrota&modo=buscar&id=<?php echo($listadmFrota[$cont]->idOnibus); ?>">
                                        <img src="icones/Modify16.png">
                                    </a>
                                </div>
                                <div id="opcao_admFrota">
                                    <a href="router.php?controller=admFrota&modo=excluir&id=<?php echo($listadmFrota[$cont]->idOnibus); ?> " onclick="return confirm('Deseja Realmente Excluir?');">
                                
                                        <img src="icones/delete.png">
                                        
                                    </a>
                                </div>
                            
                            </div>
                                <?php
                            $cont += 1;
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    
