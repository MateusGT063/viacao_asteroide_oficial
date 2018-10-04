<?php

$missao = "";
$visao = "";
$valores = "";
$ativo = "";
$botao="Salvar";



// Estabelece uma conecao com o bd mysql
$conexao=mysqli_connect('localhost','root','bcd127','db_viacao_asteroide'); 





if(isset($_POST["btnSalvar"])){
    
    
    $missao=$_POST["txt_missao"];
    $visao=$_POST["txt_visao"];
    $valores=$_POST["txt_valores"];
   
   
       $sql="insert into pg_missao(missao,visao,valores,ativo)
			
    values('".$missao."', '".$visao."', '".$valores."','0')";
			
     mysqli_query($conexao, $sql);
    
//    echo($sql);
}

?>
<html>
    
    <head>
        <title>Bem Vindo Usuario</title>
        <link rel="stylesheet" type="text/css" href="../css/contatos_cms.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    </head>
    <body>
        
        <!--Essa div é a responsavel para que possa definir o tamanho do layout em si!-->
        <div id="principal">
            <!--A div faixa_menu é responsavel para que possa segurar as outras -->
            <div id="faixa_acima">
                <!--Aqui ficará a logo-->
                <div id="caixa_logo">
                    <!--Logo-->
                    <div id="logo">
                        <img src="../imagens/logo2.0.png">
                    </div>
                    <!--Texto Viação Asteroide-->
                    <div id="caixa_text">
                        Viação Asteroide
                    </div>
                </div>
                <!--Caixa onde ficará a foto do usuario logado-->
                <div id="caixa_user">
                    <img src="../imagens/user.png">

                </div>
            </div>

            <!--Faixa Menu-->
            <div id="faixa_meio">
                <div id="faixa_menu">
                    <!--Opções menu-->
                    
                </div>
                <!--Aqui terá as caixas para o cadastro dos contatos-->
                <div id="caixa_cont">

                    <div id="marketing">
                        Marketing
                    </div>

                    <!--O tamanho da div onde haverá  os campos de contatos-->
                    <div id="area_contato">
                        <!--Menu onde irá estar as telas para fazer upload-->
                        <div id="menu_contato">
                            <div class="espaço_menu">
                                Missão
                            </div>
                            <div class="espaço_menu">
                                Fale Conosco
                            </div>
                            <a href="registro.php">
                             <div class="espaço_menu">
                                Registros
                            </div>
                            </a>

                        </div>

                      <div id="contatos">
                           <form name="pg_missao" method="post" action="contatos_cms.php">
                            <div id="caixa_titulo">
                              Missão
                            </div>
                            <div class="cont">
                                <!--Area das caixas do upload-->
                                <div class="caixa_MVV1">
                                    <div class="caixa_MVV">
                                        <table>
                                            <tr id="ajuste">

                                                <td><textarea id="caixa_texto" wrap="off" name="txt_missao" type="text" value="" required></textarea></td>


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

                                                <td><textarea id="caixa_texto" wrap="off" name="txt_visao" type="text" value="" required></textarea></td>


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

                                                <td><textarea id="caixa_texto" wrap="off" name="txt_valores" type="text" value="" required></textarea></td>

                                                <td> <input type="submit" name="btnSalvar" value="Salvar"  id="botao"></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>

                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </body>
</html>