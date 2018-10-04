
<div id="espaco_postos"> 
    <?php


    require_once('../cms/controller/postoRodoviario_controller.php');
    require_once('../cms/models/postoRodoviario_class.php');

    // Instancia o Controller.
    $controller_postoRodoviario = new postoRodoviarioController();

    // Chama o metodo para listar todos os registros.
    $list = $controller_postoRodoviario::Listar();



    ?>     
    <div class="rbg_postos">
        <div id="area_postos">
            <div id="titulo_pagina_postos">
                <img src="../icones/map-marker-2-xxl.png" alt="icones_postos">
                Nossos Postos de Vendas de Passagem
                <hr class="linha_titulo_pagina_postos">
            </div>
            <div id="area_pesquisa_postos">
                <label id="selecione_label">
                    Selecione o Estado:
                </label>
                <select id="select_selecione_estado">
                    <option> Estados: </option>            
                    <option value="SP"> SP </option>
                    <option value="RJ"> RJ </option>
                    <option value="ES"> ES </option>
                    <option value="MG"> MG </option>
                </select>  
            </div>  
            <div id="area_pesquisa_postos_cidade"> 
                <label id="selecione_label_cidade">
                    Selecione a Cidade
                </label>
                <select id="select_selecione_cidade">
                    <option> Cidades: </option>            
                    <option value="SP"> Itapevi </option>
                    <option value="RJ"> Jandira </option>
                    <option value="ES"> Baruei </option>
                    <option value="MG"> Barra Funda </option>
                </select>          
            </div>
            <div id="area_mapa_posto">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d457.262711057953!2d-46.89824391672845!3d-23.52884471881941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf0154039cb55b%3A0xadf34a919f156950!2sSENAI+-+Professor+Vicente+Amato!5e0!3m2!1spt-BR!2sbr!4v1524526812052"></iframe>
            </div>
            <div id="espaco_btw">
            </div>
        </div>
    </div>    
</div> 
<div id="area_postos_tabela" class="bgParallax" data-speed="15">
    <div class="rbg_postos">
        <div id="titulo_pagina_postos_mais_vendidas">
            <img src="../icones/map-marker-2-xxl.png" alt="linha nossos postos">
            Nossos Postos de Passagens Mais Vendidos
            <hr class="linha_titulo_pagina_postos">
        </div>
        <div id="tabela_postos_rodoviarios">
            <div id="titulo_tabela_postos">
                <div id="titulo_posto_nome">
                    Nome:
                </div>
                <div id="titulo_posto_endereco">
                    Endereço
                </div>
                <div id="titulo_posto_telefone">
                    Telefone:
                </div>
            </div>
            <?php
            
                $cont = 0;
                while($cont < count($list)){    
                    
            ?>
            <div class="conteudo_tabela_postos">
                <div class="conteudo_posto_nome">
                    <?php  
//                    echo($list[$cont]->nome);
                    ?>
                    <?php
                                        
                    $NOME = utf8_encode($list[$cont]->nome);
              
                    echo($NOME);
                                    
                    ?>
                </div>
                <div class="conteudo_posto_descricao">
                    <?php  
//                    echo($list[$cont]->logradouro);
                    ?>
                    <?php
                                        
                    $NOME = utf8_encode($list[$cont]->logradouro);
              
                    echo($NOME);
                                    
                    ?>
                </div>
                <div class="conteudo_posto_telefone">
                    <?php  echo($list[$cont]->telefone); ?>
                </div>
            </div>
            <?php
        
                $cont+=1;

            }

            ?>
        </div>
    </div>  
</div>
