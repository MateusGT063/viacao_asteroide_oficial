                    <div id="caixa_cont11">
                        <div id="marketing11">
                            Missão, Visão e Valores
                        </div>

                        <!--Menu do marketing-->
<!--
                        <div id="menuMarketing">
                            <div class="menu">
                                Home
                            </div>
                            <div class="menu">
                                Empresa
                            </div>
                            <div class="menu">
                                Pontos
                            </div>
                            <div class="menu">
                                Dicas
                            </div>
                            <div class="menu">
                                Frota
                            </div>
                            <div class="menu">
                                Contatos
                            </div>
                            <div class="menu">
                                Cor
                            </div>
                        </div>
-->
                        <!--O tamanho da div onde haverá  os campos de contatos-->
                        <div id="area_contato_of">
                            <!--Menu onde irá estar as telas para fazer upload-->
                            <div id="menu_contato">
                               <div class="espaco_menu">
                                    <a href="index.php?pagina=marketing/cadastro/cadastro_view.php">
                                        Missão
                                   </a>
                                </div>
                                <a href="index.php?pagina=marketing/cadastro/registro_view.php">
                                    <div class="espaco_menu">
                                        Registros
                                    </div>
                                </a>
                            </div>

                              <div id="contatos">
                                <!--Aqui estará a lista de registros do Missão, Vissão e Valores-->
                                  <div id="espaco_list1">
                                    <div id="sust_list">
                                      <div class="mvv_of">
                                        Missão
                                      </div>
                                      <div class="mvv_of">
                                        Visão
                                      </div>
                                      <div class="mvv_of">
                                        Valores
                                      </div>
                                      <div class="mvv_of">
                                          Opções
                                      </div>
                                    </div>


                                    <!--Aqui são as div onde apareceram os registros-->


                                    <div id="cont_list">
                                          <div id="sust_list1">
                                            <?php

                                                require_once('controller/missao_controller.php');
                                                require_once('models/missao_class.php');

                                                // Instancia o Controller.
                                                $controller_missao = new controllerMissao();

                                                // Chama o metodo para listar todos os registros.
                                                $list = $controller_missao::Listar();

                                                $cont = 0;
                                                while($cont < count($list)){

                                            ?>
                                            <div class="mvv1" wrap="off">
                                               <?php echo($list[$cont]->missao);?>
                                            </div>
                                            <div class="mvv1" wrap="off">
                                               <?php echo($list[$cont]->visao);?>
                                            </div>
                                            <div class="mvv1" wrap="off">
                                               <?php echo($list[$cont]->valores);?>
                                            </div>
                                            <div class="mvv1">
                                                <div id="ftMissaoOp">
                                                        <div class="alinhaFtOpcoes">
                                                            <a href="router.php?controller=missao&modo=buscar&id=<?php echo($list[$cont]->idVersao);?>">
                                                                <img src="icones/modify16.png">
                                                            </a>
                                                        </div>
                                                        <div class="alinhaFtOpcoes">
                                                            <a href="router.php?controller=missao&modo=excluir&id=<?php echo($list[$cont]->idVersao);?>">
                                                                <img src="icones/delete.png">
                                                            </a>
                                                        </div>
                                                            <?php
                                                                if($list[$cont]->ativo == 1) {    
                                                            ?>   
                                                        <div class="alinhaFtOpcoes">
                                                            <a href="router.php?controller=missao&modo=desativar&id=<?php echo($list[$cont]->idVersao); ?>">
                                                                <img src="icones/on1.png" width="25">
                                                            </a>
                                                        </div>
                                                            <?php
                                                               } else {
                                                            ?>
                                                        <div class="alinhaFtOpcoes">
                                                            <a href="router.php?controller=missao&modo=ativar&id=<?php echo($list[$cont]->idVersao); ?>">
                                                                <img src="icones/off1.png" width="25">
                                                            </a>
                                                        </div>
                                                            <?php
                                                                }
                                                            ?>
                                                
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