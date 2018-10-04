
                <form name="CRUD de Dicas" method="post" action="router.php?<?=$action;?>" enctype="multipart/form-data">
                    <div id="area_adm_passageiros">
                        <div id="caixa_dentro_area_adm_passageiros">
                            <div id="titulo_pagina_pass">
                                Controle de Manutenção
                            </div>

                            <div id="caixaPassageiros">
                                <div id="titlePassageiros">
                                    <div class="tituloManutencao">
                                        Tipo do Onibus:
                                    </div>
                                    <div class="tituloManutencao">
                                        Placa:
                                    </div>
<!--
                                    <div class="tituloPassageiros1">
                                        Rg:
                                    </div>


                    
-->
                                    <div class="tituloManutencao">
                                        Abertura:
                                    </div>
                                    <div class="tituloManutencao">
                                        Fechamento:
                                    </div>
                                    <div class="tituloManutencao">
                                        Item:
                                    </div>
                                    <div class="tituloManutencao">
                                        Quilometragem:
                                    </div>
                                </div>
                                <div id="caixaCresceManutencao">
                                    
                                    
                                    <?php
                                        require_once('controller/controleManutencao_controller.php');
                                        require_once('models/controleManutencao_class.php');
                                    // Instancia o Controller.
                                        $controller_manutencao = new manutencaoController();

                                    // Chama o metodo para listar todos os registros.
                                                
                                    $list = $controller_manutencao::Listar();

                                                
                                    $cont = 0;
                                    while($cont < count($list)){


                                    ?>
                                    
                                    <div class="conteudoManutencao">
                                        <?php echo($list[$cont]->tipoOnibus);?>
                                    </div>
                                    <div class="conteudoManutencao">
                                        <?php echo($list[$cont]->placa);?>
                                    </div>
                                    <div class="conteudoManutencao">
                                        <?php echo($list[$cont]->abertura);?>
                                    </div>
                                     <div class="conteudoManutencao">
                                        <?php echo($list[$cont]->fechamento);?>
                                    </div>
                                    <div class="conteudoManutencao">
                                        <?php echo($list[$cont]->quilometragem);?>
                                    </div>
                                    <div class="conteudoManutencao1">
                                        <?php echo($list[$cont]->item);?>
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