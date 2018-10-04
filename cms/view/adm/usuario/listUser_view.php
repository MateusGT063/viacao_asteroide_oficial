<?php 
    
$idClientes = null;
$nome= null;
$sobrenome = null;
$telefone= null;
$celular= null;
$cep= null;
$sexo= null;
$rg= null;
$email=null;




?>
<form name="CRUD de frota" method="post" action="router.php?controller=<?=$action?>" enctype="multipart/form-data">
            <div id="caixa_cont_user">
                
                    <!--O tamanho da div onde haverá  os campos de contatos-->
                    <div id="area_contato_user">
                        
                         <div id="menu_contato">
                            <a href=" ">
                                <div class="espaço_menu_ListUser">
                                    Lista de Usuarios 
                                </div>
                            </a>
                        </div>
                        <!--Essa div segura a lista de usuario que serão cadastrados-->
                        <div id="espaco_lista_User">
                            <div id="text_listUser">
                                Usuários:
                            </div>
                            <!--Os dados que terão na lista-->
                            <div id="tamanho_List">
                                <div class="quadrados_user">
                                    Nome:
                                </div>
                                <div class="quadrados_user">
                                    Sobrenome:
                                </div>
                                <div class="quadrados_user">
                                    Cpf:
                                </div>
                                <div class="quadrados_user">
                                    RG:
                                </div>
                                <div class="quadrados_user">
                                    Telefone:
                                </div>
                                <div class="quadrados_user">
                                    Celular:
                                </div>
                                <div class="quadrados_user">
                                    Sexo:
                                </div>
                                <div class="quadrados_user">
                                    Email:
                                </div>
                                
                                 
                                <!--Aqui está a Lista -->
                            <div id="list_User">
                                
                                
                                <?php

                                    require_once('controller/usuario_controller.php');
                                    require_once('models/usuario_class.php');

                                    // Instancia o Controller.
                                    $controller_usuario = new usuarioController();

                                    // Chama o metodo para listar todos os registros.
                                     $list = $controller_usuario::Listar();

                                    $cont = 0;
                                        
                                     while($cont < count($list)){


                                          ?>
                                   <div style="width:121px; margin-right:10px; min-height:30px; height:auto; text-align:center; line-height:30px; float:left; background-color:#09f;">
                                        <?=$list[$cont]->nome;?>
                                    </div>
                                   <div style="width:121px; margin-right:10px; min-height:30px; height:auto; text-align:center; line-height:30px; float:left; background-color:#09f;">
                                        <?=$list[$cont]->sobrenome;?>
                                    </div>
                                   <div style="width:121px; margin-right:10px; min-height:30px; height:auto; text-align:center; line-height:30px; float:left; background-color:#09f;">
                                        <?=$list[$cont]->cpf;?>
                                    </div>
                                   <div style="width:121px; margin-right:10px; min-height:30px; height:auto; text-align:center; line-height:30px; float:left; background-color:#09f;">
                                        <?=$list[$cont]->rg;?>
                                    </div>
                                   <div style="width:121px; margin-right:10px; min-height:30px; height:auto; text-align:center; line-height:30px; float:left; background-color:#09f;">
                                        <?=$list[$cont]->telefone;?>
                                    </div>
                                   <div style="width:121px; margin-right:10px; min-height:30px; height:auto; text-align:center; line-height:30px; float:left; background-color:#09f;">
                                        <?=$list[$cont]->celular;?>
                                    </div>
                                   <div style="width:121px; margin-right:10px; min-height:30px; height:auto; text-align:center; line-height:30px; float:left; background-color:#09f;">
                                        <?=$list[$cont]->sexo;?>
                                    </div>
                                   <div style="width:121px; margin-right:10px; min-height:30px; height:auto; text-align:center; line-height:30px; float:left; background-color:#09f;">
                                        <?=$list[$cont]->email;?>
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
        </form>