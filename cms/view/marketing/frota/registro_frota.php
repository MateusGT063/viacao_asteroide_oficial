
                <div id="caixa_cont">
                        <div id="marketing">
                            Nossas Frotas
                        </div>

                     <!--Menu do marketing-->
                    
                        
                        <!--O tamanho da div onde haverá  os campos de contatos-->
                        <div id="area_registro">
                            <!--Menu onde irá estar as telas para fazer upload-->
                            <div id="menu_contato12">
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

                          <div id="frotaszinhas">
                            <!--Aqui estará a lista de registros do Missão, Vissão e Valores-->
                              <div id="espaco_list">
                                <div id="sust_list_frota">
                                  <div class="mvv">
                                    Imagem:
                                  </div>
                                  <div class="mvv">
                                    Sobre:
                                  </div>
                                  <div class="mvv">
                                    Tipo:
                                  </div>
                                  <div class="mvv">
                                      Opções:
                                  </div>
                                </div>
                                <!--Aqui são as div onde apareceram os registros-->
                                <div id="cont_list_frotas">
                                      <?php

                                         require_once('controller/frota_controller.php');
                                         require_once('models/frota_class.php');
//                                       
//                                  // Instancia o Controller.
                                        $controller_frota = new frotaController();
//
//                                // Chama o metodo para listar todos os registros.
                                        $list = $controller_frota::Listar();

                                         $cont = 0;
                                          while($cont < count($list)){


                                        ?>
                                   
                                    <div class="registroFrotas" wrap="off">
                                      <?php echo($list[$cont]->imagem); ?>
                                        
                                    </div>
                                    <div class="registroFrotas" wrap="off">
                                      <?php echo($list[$cont]->descricao); ?>
                                    </div>
                                    <div class="registroFrotas" wrap="off">
                                      <?php echo($list[$cont]->tipo); ?>
                                    </div>
                                    <div class="registroFrotas">
                                                <?php
                                                    if($list[$cont]->ativo == 1) {    
                                                            ?>   
                                       
                                            <a href="router.php?controller=frotas&modo=desativar&id=<?php echo($list[$cont]->id); ?>">
                                                  <img src="icones/on1.png" width="25">
                                             </a>
                                        
                                                 <?php
                                                      } else {
                                                     ?>
                                          
                                                <a href="router.php?controller=frotas&modo=ativar&id=<?php echo($list[$cont]->id); ?>">
                                                     <img src="icones/off1.png" width="25">
                                                </a>
                                           
                                                     <?php
                                                           }
                                                     ?>
                                            
                                        
                                        <a href="router.php?controller=frotas&modo=buscar&id=<?php echo($list[$cont]->id); ?>">
                                            <img src="icones/modify16.png" width="25">
                                        </a>
                                            
                                        <a href="router.php?controller=frotas&modo=excluir&id=<?php echo($list[$cont]->id); ?>">
                                            <img src="imagens/delete.png" width="25">
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
    