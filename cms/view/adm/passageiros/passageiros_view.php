<?php


?>
                <form name="CRUD de Dicas" method="post" action="router.php?<?=$action;?>" enctype="multipart/form-data">
                    <div id="area_adm_passageiros">
                        <div id="caixa_dentro_area_adm_passageiros">
                            <div id="titulo_pagina_pass">
                                Passageiros
                            </div>

                            <div id="caixaPassageiros">
                                <div id="titlePassageiros">
                                    <div class="tituloPassageiros1">
                                        Nome Passageiro:
                                    </div>
                                    <div class="tituloPassageiros1">
                                        Destino:
                                    </div>
<!--
                                    <div class="tituloPassageiros1">
                                        Rg:
                                    </div>
-->
                                    <div class="tituloPassageiros1">
                                        Email:
                                    </div>
                                    <div class="tituloPassageiros2">
                                        Data:
                                    </div>
                                    <div class="tituloPassageiros2">
                                        Hora:
                                    </div>
                                    <div class="tituloPassageiros2">
                                        Opções:
                                    </div>
                                </div>
                                <div id="caixaCrescePassageiros">
                                    
                                    
                                    <?php
                                        require_once('controller/passageiros_controller.php');
                                        require_once('models/passageiros_class.php');
                                    // Instancia o Controller.
                                        $controller_passageiros = new passageirosController();

                                    // Chama o metodo para listar todos os registros.
                                                
                                        $list = $controller_passageiros::Listar();

                                                
                                        $cont = 0;
                                        while($cont < count($list)){


                                    ?>
                                    
                                    <div class="conteudoPassageiros">
                                        <?php echo($list[$cont]->nome);?>
                                    </div>
                                    <div class="conteudoPassageiros">
                                        <?php echo($list[$cont]->destino);?>
                                    </div>
                                    <div class="conteudoPassageiros">
                                        <?php echo($list[$cont]->email);?>
                                    </div>
                                     <div class="conteudoPassageiros11">
                                        <?php echo($list[$cont]->dtPartida);?>
                                    </div>
                                     <div class="conteudoPassageiros11">
                                        <?php echo($list[$cont]->hrPartida);?>
                                    </div>
                                    <div class="conteudoPassageiros11">
                                        
                                        <a href="router.php?controller=passageiros&modo=excluir&id=<?php echo($list[$cont]->idPassagem); ?>">
                                            <img src="icones/Delete16.png" width="20">
                                        </a>
                                        
                                        <?php
                                            if($list[$cont]->ativo == 1) {    
                                        ?>   
                                        <a href="router.php?controller=passageiros&modo=desativar&id=<?php echo($list[$cont]->idPassagem); ?>">
                                            <img src="icones/on1.png" width="25">
                                        </a>
                                        <?php
                                           } else {
                                        ?>
                                        <a href="router.php?controller=passageiros&modo=ativar&id=<?php echo($list[$cont]->idPassagem); ?>">
                                            <img src="icones/off1.png" width="25">
                                        </a>
                                        <?php
                                            }
                                        ?>
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