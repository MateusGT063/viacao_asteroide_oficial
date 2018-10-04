<?php

$botao = 'Salvar';
$action = "controller=postoRodoviario&modo=novo";

$nome = null;
$logradouro = null;
$telefone = null;
$bairro = null;
$cep = null;
$cidade = null;
$numero = null;

if(isset($postoRodoviario)){
    
    $botao = 'Editar';
    
    $idPostoRodoviario = $postoRodoviario->idPostoRodoviario;
    $nome = $postoRodoviario->nome;
    $logradouro = $postoRodoviario->logradouro;
    $bairro = $postoRodoviario->bairro;
    $cep = $postoRodoviario->cep;
    $telefone = $postoRodoviario->telefone;
    $idEndereco = $postoRodoviario->idEndereco;
    $cidade = $postoRodoviario->codCidade;
    $numero = $postoRodoviario->numero;
    
    $action = "controller=postoRodoviario&modo=editar&id=".$idPostoRodoviario."&idEnd=".$idEndereco;
}

?>
               <form name="CRUD de Dicas" method="post" action="router.php?<?=$action;?>" enctype="multipart/form-data">
                    <div id="area_adm_turismo">
                        <div id="caixa_dentro_area_adm_turismo">
                            <div id="titulo_pagina_principal">
                                Postos Rodoviários:
                            </div>


                            <div id="segura_conteudo_dicas">

                                <div id="cadastro_posto">
                                    <div id="seguraPosto1">
                                        <div class="textoPosto fontFamily">
                                            Nome do Posto Rodoviário:
                                        </div>
                                        <div class="">
                                            <input id="alinhaLocal" class="inputUsuario" type="text" placeholder="Informe o nome do posto" name="nome" value="<?php echo($nome);?>">
                                        </div>
                                    </div>
<!--
                                    <div class="seguraPosto">
                                        <div class="textoPosto1">
                                            Endereço:
                                        </div>
                                        <div class="caixaPostoR">
                                            <input id="alinhaLocal" type="text" placeholder="Informe o endereço do posto" name="txtEndereco" value="">
                                        </div>
                                    </div>
-->
                                    <div class="linhas_campos_usuario">
                                        <div class="caixaGrandeItensUser fontFamily">
                                            Logradouro:
                                            <input class="inputUsuario textCenter" type="text" placeholder="Exemplo: Rua Vincc Anntoni" name="txt_logradouro" value="<?=$logradouro;?>">
                                        </div>
                                        <div class="caixaPequenaItensUser fontFamily">
                                            Bairro:
                                            <input class="inputUsuario textCenter" placeholder="Exemplo: Bairro Anna Maria" type="text" name="txt_bairro" value="<?=$bairro;?>">
                                        </div>
                                        <div class="caixaPequenaItensUser fontFamily">
                                            Número:
                                            <input class="alinhaCidades " placeholder="000" type="text" name="txt_numero" value="<?=$numero;?>">
                                        </div>
                                    </div>
                                    <div class="linhas_campos_usuario">
                                        <div class="caixaItensUser1 fontFamily">
                                            Cep: <input class="inputUsuario" type="text" name="txt_cep" value="<?=$cep;?>">
                                        </div>
                                        <div class="caixaGrandeItensUser1 fontFamily">
                                            Cidade:
                                            <select class="alinhaCidades borda5px" name="cbx_cidade">
                                                
                                                <?php
                                                
                                                require_once('controller/cidade_controller.php');
                                                require_once('models/cidade_class.php');
                                                
                                                $controller_cidade = new cidadeController();
                                                $listCidade = $controller_cidade::ListarCidade();
                                                
                                                $cont = 0;
                                                
                                                while($cont < count($listCidade)){
                                                
                                                ?>

                                                    <option value="<?=$listCidade[$cont]->codCidade;?>" <?php if($listCidade[$cont]->codCidade == $cidade){ echo('selected'); } ?>><?=$listCidade[$cont]->nomeCidade;?></option>
                                                
                                                <?php
                                                    
                                                    $cont+=1;
                                                    
                                                }
                                                
                                                ?>

                                            </select>
                                        </div>

                                    </div>
                                    <div class="seguraPosto">
                                        <div class="textoPosto1 fontFamily">
                                            Telefone:
                                        </div>
                                        <div class="caixaPostoR">
                                            <input id="alinhaLocal" class="inputUsuario" type="text" placeholder="Informe o telefone do posto (XX) XXXX-XXXX " name="txtTelefone" maxlength="11" value="<?php echo($telefone); ?>">
                                        </div>
                                    </div>
                                    <div id="botao">
                                        <input id="alinhamentoBt" type="submit" name="" value="<?php echo($botao); ?>">
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div id="caixaPostos">
                                <div id="titlePostos">
                                    <div class="titulo1">
                                        Nome do posto:
                                    </div>
                                    <div class="titulo1">
                                        Endereço:
                                    </div>
                                    <div class="titulo1">
                                        Telefone:
                                    </div>
                                    <div class="titulo1">
                                        Numero:
                                    </div>
                                    <div class="titulo1">
                                        Opções:
                                    </div>
                                </div>
                                <div id="caixaCrescePosto">
                                    
                                    
                                    <?php
                                        require_once('controller/postoRodoviario_controller.php');
                                        require_once('models/postoRodoviario_class.php');
                                    // Instancia o Controller.
                                        $controller_postoRodoviario = new postoRodoviarioController();

                                    // Chama o metodo para listar todos os registros.
                                                
                                        $list = $controller_postoRodoviario::Listar();

                                                
                                        $cont = 0;
                                        while($cont < count($list)){


                                    ?>
                                    
                                    <div class="conteudoDica">
                                        <?php echo($list[$cont]->nome);?>
                                    </div>
                                    <div class="conteudoDica">
                                        <?php echo($list[$cont]->logradouro);?>
                                    </div>
                                    <div class="conteudoDica">
                                        <?php echo($list[$cont]->telefone);?>
                                    </div>
                                    <div class="conteudoDica">
                                        <?php echo($list[$cont]->numero);?>
                                    </div>
                                    <div class="conteudoDica">
                                        <a href="router.php?controller=postoRodoviario&modo=buscar&id=<?php echo($list[$cont]->idPostoRodoviario); ?>">
                                            <img src="icones/Modify16.png">
                                        </a>
                                        <a href="router.php?controller=postoRodoviario&modo=excluir&id=<?php echo($list[$cont]->idPostoRodoviario); ?>">
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