<!-- CSS -->
<?php

$botao = 'Salvar';
$action = "controller=dicas&modo=novo";

$idDicas = null;
$dica = null;
$imagem = 'imagens/Viacao_Asteroide3.png';
$descricao = null;
$ativo = null;


if(isset($localDica)){
    
    $botao = 'Editar';
    
    $idDicas = $localDica->idDicas;
    $dica = $localDica->dica;
    $imagem = $localDica->imagem;
    $descricao = $localDica->descricao;
    $ativo = $localDica->ativo;
    
    $action = "controller=dicas&modo=editar&id=".$idDicas."&imagem=".$imagem;
}

?>
                <form name="CRUD de Dicas" method="post" action="router.php?<?=$action;?>" enctype="multipart/form-data">
                    <div id="area_adm_turismo">
                        <div id="caixa_dentro_area_adm_turismo">
<!--
                            <div id="titulo_pagina_principal">
                                Marketing
                            </div>
-->


                            <div id="segura_conteudo_dicas">

                                <div id="cadastro_turismo">
                                    <div id="titulo_pagina">
                                        Página de Dicas:
                                    </div>
                                    <div id="seguraLocais">
                                        <div id="textoDesc1">
                                            Nome do local:
                                        </div>
                                        <div id="caixaLocal">
                                            <input id="alinhaLocal" type="text" placeholder="Informe o nome do lugar" name="txtLocal" value="<?php echo($dica); ?>">
                                        </div>
                                    </div>
                                    <div id="seguraItens">
                                        <div id="caixaFotos">
                                            <div id="textoDica">Adiciona uma Foto:</div>
                                            <div id="caixaImg">
                                                <input type="file" name="btImagem" >
                                            </div>
                                            <div id="trocaImg">
                                                <img src="<?php echo($imagem);?>">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div id="seguraText">
                                        <div id="textoText">
                                        Adcione uma descrição:
                                        </div>
                                       <div id="text_area11">
                                            <textarea id="textArea1" name="txtDescricao" placeholder=" Informe algo sobre este local:" required rows="10" cols="50"><?=$descricao;?></textarea>
                                        </div>
                                    </div>
                                    <div id="botao">
                                        <input id="alinhamentoBt" type="submit" name="" value="<?php echo($botao); ?>">
                                    </div>
                                </div>
                            </div>
                            <div id="caixaDicas">
                                <div id="titleDicas">
                                    <div class="titulo1">
                                        Nome do local:
                                    </div>
                                    <div class="titulo1">
                                        Descricao:
                                    </div>
                                    <div class="titulo1">
                                        Imagem:
                                    </div>
                                    <div class="titulo1">
                                        Opções:
                                    </div>
                                </div>
                                <div id="caixaCresceDica">
                                    
                                    
                                    <?php
                                        require_once('controller/dicas_controller.php');
                                        require_once('models/dicas_class.php');
                                    // Instancia o Controller.
                                        $controller_dicas = new dicasController();

                                    // Chama o metodo para listar todos os registros.
                                                
                                    $list = $controller_dicas::Listar();

                                                
                                    $cont = 0;
                                    while($cont < count($list)){


                                    ?>
                                    
                                    
                                    
                                    <div class="conteudoDica">
                                        <?php echo($list[$cont]->dica);?>
                                    </div>
                                    <div class="conteudoDica">
                                        <?php echo($list[$cont]->descricao);?>
                                    </div>
                                    <div class="conteudoDica">
                                        <?php echo($list[$cont]->imagem);?>
                                    </div>
                                    <div class="conteudoDica">
                                                                            
                                           
                                            <?php
                                            if($list[$cont]->ativo == 1) {    
                                            ?>   
                                            <a href="router.php?controller=dicas&modo=desativar&id=<?php echo($list[$cont]->idDicas); ?>">
                                                <img src="icones/on1.png" width="25">
                                            </a>
                                            <?php
                                               } else {
                                            ?>
                                            <a href="router.php?controller=dicas&modo=ativar&id=<?php echo($list[$cont]->idDicas); ?>">
                                                <img src="icones/off1.png" width="25">
                                            </a>
                                            <?php
                                                }
                                            ?>
                                        
                                        
                                        <a href="router.php?controller=dicas&modo=buscar&id=<?php echo($list[$cont]->idDicas); ?>">
                                            <img src="icones/Modify16.png">
                                        </a>
                                        <a href="router.php?controller=dicas&modo=excluir&id=<?php echo($list[$cont]->idDicas); ?>">
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
                </form>