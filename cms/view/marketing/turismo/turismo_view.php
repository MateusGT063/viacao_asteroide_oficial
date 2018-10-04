<?php

$botao = 'Salvar';
$action = "controller=turismo&modo=novo";

$select1 = null;
$select2 = null;
$select3 = null;
$select4 = null;

$idPontoTuristico = null;
$idEpoca = null;
$imagem = 'imagens/Viacao_Asteroide3.png';
$descricao = null;
$ativo = null;

if(isset($pontoT)){
    
    $botao = 'Editar';
    
    $idPontoTuristico = $pontoT->idPontoTuristico;
    $idEpoca = $pontoT->idEpoca;
    $imagem = $pontoT->imagem;
    $descricao = $pontoT->descricao;
    $ativo = $pontoT->ativo;
    
    $action = "controller=turismo&modo=editar&id=".$idPontoTuristico."&imagem=".$imagem;
}

?>
                <form name="CRUD de turismo" method="post" action="router.php?<?=$action;?>" enctype="multipart/form-data">
                    <div id="area_adm_turismo_of">
                        <div id="caixa_dentro_area_adm_turismo11">
                            <div id="titulo_pagina_principal_of11">
                                 Pontos Turisticos
                            </div>

                            <div id="segura_conteudo_turismo_of">

                                <div id="cadastro_turismo_of">
                                    <div id="titulo_pagina_of_turismo">
                                       
                                    </div>

                                    <div id="itens_turismo">
                                        <div id="imagem">
                                            <div id="mostra_imagem">
                                                <img src="<?php echo($imagem); ?>">
                                            </div>
                                            <div id="procura_imagem">
                                                <input type="file" name="btnImagem">
                                                <br>

                                                Estação <select name="cbx_estacoes" >
                                                    <option value="1" <?php if($idEpoca == 1){ echo('selected'); }?>>Verão</option>
                                                    <option value="2" <?php if($idEpoca == 2){ echo('selected'); }?>>Outono</option>
                                                    <option value="3" <?php if($idEpoca == 3){ echo('selected'); }?>>Primavera</option>
                                                    <option value="4" <?php if($idEpoca == 4){ echo('selected'); }?>>Inverno</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="inserir_text">
                                            <div id="text_area">
                                                <textarea name="txtDescricao" placeholder="Por que viajar para este lugar nesta estação?" required><?=$descricao;?></textarea>
                                            </div>
                                            <input type="submit" name="btnSalvar" value="<?=$botao;?>">
                                        </div>
                                    </div>

                                    <div id="area_tabela_turismo11">
                                        <div id="tabela_turismo_of">
                                            <div id="linha_cima_tabela_turismo_of">
                                                <div class="itens_tabela_turismo_of">
                                                    Imagem
                                                </div>

                                                <div class="itens_tabela_turismo_of">
                                                    Estação
                                                </div>

                                                <div class="itens_tabela_turismo_of">
                                                    Descrição
                                                </div>
                                                
                                                <div class="itens_tabela_turismo_of">
                                                    Opções
                                                </div>
                                            </div>

                                            <div id="caixa_mostra_registros_tabela_turismo11">

                                                <?php

                                                require_once('controller/turismo_controller.php');
                                                require_once('models/turismo_class.php');

                                                // Instancia o Controller.
                                                $controller_turismo = new turismoController();

                                                // Chama o metodo para listar todos os registros.
                                                $list = $controller_turismo::Listar();

                                                $cont = 0;
                                                while($cont < count($list)){


                                                ?>

                                                <div class="itens_registros_tabela_turismo">
                                                    <?php echo($list[$cont]->imagem); ?>
                                                </div>

                                                <div class="itens_registros_tabela_turismo">
                                                    <?php echo($list[$cont]->epoca); ?>
                                                </div>

                                                <div class="itens_registros_tabela_turismo">
                                                    <?php echo($list[$cont]->descricao); ?>
                                                </div>

                                                <div class="itens_registros_tabela_turismo"> 
                                                    
                                                    <?php
                                                        if($list[$cont]->ativo == 1) {    
                                                                            ?>   
                                                            <a href="router.php?controller=turismo&modo=desativar&id=<?php echo($list[$cont]->idPontoTuristico); ?>">
                                                                  <img src="icones/on1.png">
                                                             </a>
                                                             <?php
                                                                  } else {
                                                                 ?>
                                                             <a href="router.php?controller=turismo&modo=ativar&id=<?php echo($list[$cont]->idPontoTuristico); ?>">
                                                                    <img src="icones/off1.png" >
                                                                </a>
                                                    <?php
                                                        }

                                                        ?>
                                                    <a href="router.php?controller=turismo&modo=buscar&id=<?php echo($list[$cont]->idPontoTuristico); ?>">
                                                        <img src="icones/Modify16.png">
                                                    </a>
                                                    <a href="router.php?controller=turismo&modo=excluir&id=<?php echo($list[$cont]->idPontoTuristico); ?>">
                                                        <img src="icones/Delete16.png">
                                                    </a>
                                                </div>

                                                <?php 

                                                $cont+=1;

                                                }

                                                ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>