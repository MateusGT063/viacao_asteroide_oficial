<?php
//    echo($_SESSION['nome']);

    require_once('../models/usuarioCad_class.php');
    require_once('../controllers/usuarioCad_controller.php');


    $controller_usuario = new usuarioController();

    // Chama o metodo para listar todos os registros.
    
    $listUsuario = $controller_usuario::ListarInf();

    $cont = 0;
    
    while($cont < count($listUsuario)){
        
        
        
        

?>


<?php 
                    $cont+=1;
                }
            ?>
<div class="area_pagina_usuario_imagem">
            <div id="area_pagina_usuario">
<!--                


            ESPAÇO PARA COLOCAR A INFROMAÇÃO DA COMPRA QUE O CARA FEZ



-->
                <div id="area_dados_user">
                    <h2 class="titulo_dados">  Meus Dados </h2>
                    <?php
                            $numeroCliente =$_SESSION['cliente'];
                            require_once('../controllers/boletoCad_controller.php');
                            require_once('../models/boletoCad_class.php');
                            // Instancia o Controller.
                            $controller_boleto = new boletoController();
                            // Chama o metodo para listar todos os registros.
                            $listUser = $controller_boleto::selecionarPerfilCliente($numeroCliente);

                            $contUser = 0;
                            while($contUser < count($listUser)){
                                
                        ?>
                    <div class="espaco_dados_oficiais">
                        
                        
                        <div class="espaco_dados_oficiais_esquerdo"> 
                            <h2 class="titulo_conteudo">
                                Nome:
                            </h2>
                            <?php echo($listUser[$contUser]->nome);?>
                        </div>
                        <div class="espaco_dados_oficiais_centralizado">
                            <h2 class="titulo_conteudo">
                                Sobrenome:
                            </h2>
                            <?php echo($listUser[$contUser]->sobrenome);?>
                        </div>
                        <div class="espaco_dados_oficiais_direito">
                            <h2 class="titulo_conteudo">
                                Data de Nascimento:
                            </h2>
                            <?php echo($listUser[$contUser]->dt_nasc);?>
                        </div>
                    </div> 
                    <div class="espaco_dados_oficiais">
                        <div class="espaco_dados_oficiais_esquerdo"> 
                            <h2 class="titulo_conteudo">
                                Sexo:
                            </h2>
                            <?php echo($listUser[$contUser]->sexo);?>
                        </div>
                        <div class="espaco_dados_oficiais_centralizado">
                            <h2 class="titulo_conteudo">
                                Celular:
                            </h2>
                            <?php 
                                
                                echo($listUser[$contUser]->celular);
                            
                                $_SESSION['telefoneCliente'] = $listUser[$contUser]->celular;
                                
                                echo ($_SESSION['telefoneCliente']);
                            ?> 
                            
                        </div>
                        <div class="espaco_dados_oficiais_direito">
                            <h2 class="titulo_conteudo">
                                Telefone:
                            </h2>
                            <?php echo($listUser[$contUser]->telefone);?>                           
                        </div>
                    </div> 
                    <div class="espaco_dados_oficiais">
                        <div class="espaco_dados_oficiais_esquerdo"> 
                            <h2 class="titulo_conteudo">
                                E-mail:
                            </h2>
                            <?php echo($listUser[$contUser]->email);?>
<!--                            matmat@gmail.com-->
                        </div>

                        <div class="espaco_dados_oficiais_direito">
                            <h2 class="titulo_conteudo">
                                CPF:
                            </h2>
                            <?php echo($listUser[$contUser]->cpf);?>
                        </div>
                    </div> 
                    <h2 class="titulo_dados_endereco">  Endereço: </h2>
                    <div class="espaco_dados_oficiais">
                        <div class="espaco_dados_oficiais_esquerdo"> 
                            <h2 class="titulo_conteudo">
                                CEP:
                            </h2>
                            <?php echo($listUser[$contUser]->cep);?>
<!--                            06656666-200-->
                        </div>
                        <div class="espaco_dados_oficiais_centralizado">
                            <h2 class="titulo_conteudo">
                                Estado:
                            </h2>
                            <?php echo($listUser[$contUser]->nomeEstado);?>
<!--                            São Paulo                         -->
                        </div>
                        <div class="espaco_dados_oficiais_direito">
                            <h2 class="titulo_conteudo">
                                Cidade:
                            </h2>
                            <?php echo($listUser[$contUser]->nomeCidade);?>
<!--                            Itapevi                           -->
                        </div>
                    </div> 
                    <div class="espaco_dados_oficiais">
                        <div class="espaco_dados_oficiais_esquerdo"> 
                            <h2 class="titulo_conteudo">
                                Bairro:
                            </h2>
                            <?php echo($listUser[$contUser]->bairro);?>
<!--                            Jardim Bela Vista-->
                        </div>
                        <div class="espaco_dados_oficiais_centralizado">
                            <h2 class="titulo_conteudo">
                                Logradouro:
                            </h2>
                            <?php echo($listUser[$contUser]->logradouro);?>
<!--                            Rua Osvaldo Martins                        -->
                        </div>
                        <div class="espaco_dados_oficiais_direito">
                            <h2 class="titulo_conteudo">
                                N°:
                            </h2>
                            <?php echo($listUser[$contUser]->numero);?>
<!--                            666                    -->
                        </div>
                    </div> 
                    
                        <?php 
                            $contUser+=1;
                            }
                        ?>
<!--                    <h3 id="altetar_dados"><a>Alterar Dados</a></h3>-->
                </div>
<!--
                <div id="area_acompanhe_onibus">
                    <h2 class="titulo_dados"> Acompanhe Seu Ônibus </h2>
                    <div id="area_mapa_onibus"> 
                    </div>
                    <div id="aviso_onibus">
                        WARNING! Seu Onibus Chegará em 1 HORA
                    </div>
                    <h2 class="titulo_dados"> Próximas Paradas </h2>
                    <div id="tabela_proximas_paradas">
                        <div id="titulo_proximas_paradas">
                            <div id="titulo_proximas_paradas_esquerdo">
                                Local
                            </div>
                            <div id="titulo_proximas_paradas_direito">
                                Horário
                            </div>
                        </div>
                        <div id="dados_proximas_paradas">
                            <div id="dados_proximas_paradas_esquerdo">
                                <div class="local_proxima_parada"> 
                                    <div class="conteudo_local">
                                    </div>
                                </div>
                            </div>
                            <div id="dados_proximas_paradas_direito">
                                <div class="horario_proxima_parada"> 
                                    <div class="conteudo_local">
                                    </div>   
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
-->
             </div>
            <div id="espaco_para_rodape">
            </div>

</div>
