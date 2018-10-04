

<?php



//    echo($_SESSION['vig']);


?>
<div id="area_compra_passo2">
    <div id="titulo_pagina_compra_passo_2">
        <img src="../icones/map-marker-2-xxl.png" alt="icone">
        Compra de Passagem | Passo 2 - Escolha dos Assentos
        <hr id="linha_pagina_compra_passo_2">
    </div>   
    <div id="container_caixa_escolha_assento">
        <div id="selecione_cores">
            <div id="texto_opcoes_lugares">
                SELECIONE SUA(S) POLTRONA(S).
            </div>
            <div id="icones_opcoes_lugares">
                <div class="cor_container">
                    <div id="cor_verde_caixa">
                    </div>
                    <div id="cor_verde_texto">
                        Assento Disponíveis
                    </div>
                </div>
                <div class="cor_container">
                    <div id="cor_cinza_caixa">
                    </div>
                    <div id="cor_cinza_texto">
                        Assento Selecionavel
                    </div>                    
                </div>
                <div class="cor_container">
                    <div id="cor_vermelho_caixa">
                    </div>
                    <div id="cor_vermelho_texto">
                        Assento Escolhido
                    </div>                    
                </div>
            </div>            
        </div>
        
<!--
        CAMPO PARA SELECIONAR UM ACENTO DE FORMA INFORMAL
-->
<!--
        <div id="caixaAcentoInformal">
            <div class="caixaTextInformal11">
                Selecione um acento:
            </div>
            <div class="caixaSelect">
                <select class="testeAlinhamento" name="cbx_tipoOnibus">
                    <option class="slaManus">
                        Selecione
                    </option>
                </select>
            </div>
        </div>
-->
        
        <div id="onibus_container">
            <div id="container_assentos_onibus">
                <table id="table_assentos">
                    <tr>
                        <td class="assento_cadeira"  onclick="escolheuAssento(1,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">     
                            1
                        </td>
                        <td class="assento_cadeira"  onclick="escolheuAssento(2,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">
                            2
                        </td>
                        <td> </td>
                        <td class="assento_cadeira" onclick="escolheuAssento(3,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">
                            3
                        </td>
                        <td class="assento_cadeira" onclick="escolheuAssento(4,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">
                            4
                        </td>
                    </tr>
                    <tr>
                        <td class="assento_cadeira" onclick="escolheuAssento(5,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">
                            5
                        </td>
                        <td class="assento_cadeira" onclick="escolheuAssento(6,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">
                            6
                        </td>
                        <td> </td>
                        <td class="assento_cadeira" onclick="escolheuAssento(7,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">
                            7
                        </td>
                        <td class="assento_cadeira" onclick="escolheuAssento(8,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">
                            8
                        </td>
                    </tr>
                    <tr>
                        <td class="assento_cadeira" onclick="escolheuAssento(9,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">
                            9
                        </td>
                        <td class="assento_cadeira" onclick="escolheuAssento(10,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">
                            10
                        </td>
                        <td> </td>
                        <td class="assento_cadeira" onclick="escolheuAssento(11,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">
                            11
                        </td>
                        <td class="assento_cadeira" onclick="escolheuAssento(12,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">
                            12
                        </td>
                    </tr>
                    <tr>
                        <td class="assento_cadeira" onclick="escolheuAssento(13,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">
                            13
                        </td>
                        <td class="assento_cadeira" onclick="escolheuAssento(14,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">
                            14
                        </td>
                        <td> </td>
                        <td class="assento_cadeira" onclick="escolheuAssento(15,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">
                            15
                        </td>
                        <td class="assento_cadeira" onclick="escolheuAssento(16,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">
                            16
                        </td>
                    </tr>
                    <tr>
                        <td class="assento_cadeira" onclick="escolheuAssento(17,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">
                            17
                        </td>
                        <td class="assento_cadeira" onclick="escolheuAssento(18,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">
                            18
                        </td>
                        <td> </td>
                        <td class="assento_cadeira" onclick="escolheuAssento(19,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">
                            19
                        </td>
                        <td class="assento_cadeira" onclick="escolheuAssento(20,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">
                            20
                        </td>
                    </tr> 
                    <tr>
                        <td class="assento_cadeira" onclick="escolheuAssento(21,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">
                            21
                        </td>
                        <td class="assento_cadeira" onclick="escolheuAssento(22,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">
                            22
                        </td>
                        <td> </td>
                        <td class="assento_cadeira" onclick="escolheuAssento(23,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">
                            23
                        </td>
                        <td class="assento_cadeira" onclick="escolheuAssento(24,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">
                            24
                        </td>
                    </tr>
                    <tr> 
                        <td class="assento_cadeira" onclick="escolheuAssento(25,<?php echo $_SESSION['vig']; ?>,<?php echo $_SESSION['paradaEscolhida']; ?>);">
                            
                            25
                        </td> 
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <script>
                        function escolheuAssento( idAssento,viagem,parada ){
                            
                            
                            window.location.href = "cabecalho.php?href=compra_passo3/compra_3_view.php&assentoSelecionado=" + idAssento +"&idViagem="+ viagem;  
//                            console.log("acentoSelecionado=" + id);
                        }
                    </script>
                </table>
<!--                
                Lugar indicando que o usuario so pode selecionar apenas 1 acento
-->
                
            </div>
            <div id="caixaNaoSelectMais">
                <div class="textoImportante">*</div>
                    Selecione Apenas 1 acento!
            </div>
        </div>
    </div>
</div>

