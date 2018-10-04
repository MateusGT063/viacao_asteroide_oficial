<?php
      

$botao = "Salvar";
$idVersao = null;
$missao = null;
$visao = null;
$valores = null;
$ativo = null;
$action = 'missao&modo=novo';


if(isset($listMissaoBuscar)){
    $idVersao = $listMissaoBuscar->idVersao;
    $missao = $listMissaoBuscar->missao;
    $visao = $listMissaoBuscar->visao;
    $valores = $listMissaoBuscar->valores;
    $action = 'missao&modo=editar&id='.$idVersao;
    $botao = "Editar";
}

?> 
<!--Essa div tera os objetos para fazer upload-->
                       
                <div id="caixa_cont11">

                    <div id="marketing_missao_of">
                         Missão, Visão e Valores
                    </div>

                    <!--Menu do marketing-->

                    
                    <!--O tamanho da div onde haverá  os campos de contatos-->
                    <div id="area_contato_of11">
                        <!--Menu onde irá estar as telas para fazer upload-->
                        <div id="menu_contato_of">
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

                        <div id="contatos_of">
                           <form name="pg_missao" method="post" action="router.php?controller=<?=$action?>">
                               <div class="cont">
                                   
                                   <div id="caixa_titulo">
                                       Missão
                                   </div>
                                    <!--Area das caixas do upload-->
                                   <div class="caixa_MVV1">
                                       <div class="caixa_MVV">
                                           <table>
                                               <tr id="ajuste">
                                                   <td><textarea id="caixa_texto" wrap="off" name="txt_missao" type="text" value="" required><?=$missao;?></textarea></td>
                                               </tr>
                                           </table>
                                       </div>
                                   </div>
                                   <!--Visão-->
                                   <div id="caixa_titulo">
                                       Visão
                                   </div>
                                   <div class="caixa_MVV1">
                                       <div class="caixa_MVV">
                                           <table>
                                               <tr id="ajuste">
                                                   <td><textarea id="caixa_texto" wrap="on" name="txt_visao" type="text" value="" required><?=$visao;?></textarea></td>
                                               </tr>
                                           </table>
                                       </div>
                                   </div>
                                   <!--Valores-->
                                   <div id="caixa_titulo">
                                       Valores
                                   </div>
                                   <div class="caixa_MVV1">
                                       <div class="caixa_MVV">
                                           <table>
                                               <tr id="ajuste">
                                                   <td>
                                                       <textarea id="caixa_texto" wrap="off" name="txt_valores" type="text" value="" required><?=$valores;?></textarea>
                                                   </td>
                                               </tr>
                                           </table>
                                       </div>
                                       <div id="alinhamentoBt1">
                                            <input id="botao" type="submit" name="btnSalvar" value="<?=$botao;?>"  >
                                       </div>
                                   </div>
                               </div>
                            </form>
                        </div>
                    </div>
                </div>  