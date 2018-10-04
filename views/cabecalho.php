<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

//<globalization
//         fileEncoding="iso-8859-1"
//         requestEncoding="iso-8859-1"
//         responseEncoding="iso-8859-1"
//         culture="pt-BR"
//         uiCulture="pt-BR"
//    />
    
$require = "home/home_view.php";
if(isset($_GET['href'])){
    $require = $_GET['href'];
} else {
//    header("cabecalho.php?href=compra_passo1/compra_1_view.php");
}

?>

<!DOCTYPE  html>
<html lang="pt">
<!-- html5 -->
<!--    <meta http-equiv="Content-Type" content="text/html;"> -->
    <head>
        <title> Viação Ateroide</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <script>
            document.documentElement.className += ' js';
        </script>
        <header id="area_menu">
            <a href="cabecalho.php">
                <div id="logo">
                    <img src="../icones/ViaçãoAsteroide.png" alt="logo_viacao" title="Viação Asteroide">
                </div>

            </a>
            <span class="mobile-btn"></span>   
            <div id="menu">
                <ul id="menu_principal">
                    <li> 
                        <a href="cabecalho.php"> Home </a>
                    </li>
                    <?php
                        if(isset($_SESSION['nome'])){

                    ?>
                        <li class="not_menu"> 
                             <a  href="cabecalho.php?href=pagina_usuario/pagina_usuario_view.php">
                                 Minha Conta
                            </a>
                        </li>    
                        <li class="not_menu"> 
                            <a href="../router.php?controller=sair&modo=sair">
                                Log out
                            </a>
                        </li>
                    <?php

                        }  else {
                    ?>
                        <li class="not_menu"> 
                            <a  href="cabecalho.php?href=login/login_view.php">
                                Faça seu Login
                            </a>
                        </li>    
                        <li class="not_menu"> 
                            <a  href="cabecalho.php?href=pagina_cadastro/pagina_cadastro_view.php">
                            Cadastrar-se
                            </a>
                        </li> 
                    <?php
                        }
                    ?>
                    

                    <li> 
                        <a href="cabecalho.php?href=quem_somos/quem_somos_view.php"> Sobre a Empresa  </a>
                        
                        <ul class="submenu not_sub_menu" >
                            <li>
                                <a  href="cabecalho.php?href=missao_visao_valores/missao_visao_valores_view.php"> Missão, Visão e Valores </a> 
                            </li>
                            <li> 
                                <a  href="cabecalho.php?href=nossas_frotas/nossas_frotas_view.php"> Nossa Frota </a> 
                            </li>
                            <li> 
                                <a  href="cabecalho.php?href=postos_rodoviarios/postos_rodoviarios_view.php"> Postos Rodoviarios </a>
                            </li>
                        </ul>
                    </li>
                    <li class="not_menu"> 
                        <a  href="cabecalho.php?href=missao_visao_valores/missao_visao_valores_view.php"> Missão, Visão e Valores </a> 
                    </li>
                    <li class="not_menu"> 
                        <a  href="cabecalho.php?href=nossas_frotas/nossas_frotas_view.php"> Nossa Frota </a> 
                    </li>
                    <li class="not_menu">
                        <a  href="cabecalho.php?href=postos_rodoviarios/postos_rodoviarios_view.php"> Postos Rodoviarios </a>
                    </li>
                    <li class="not_menu">
                        <a  href="cabecalho.php?href=vendas_passagens/vendas_passagens_view.php" >  Venda de Passagens </a> 
                    </li>
<!--
                    <li class="not_menu">
                        <a  href="cabecalho.php?href=pontos_turisticos/pontos_turisticos_view.php"> Lugares Turísticos </a> 
                    </li>
-->
                    <li class="not_menu"> 
                        <a  href="cabecalho.php?href=dicas/dicas_view.php"> Dicas e Recomendações </a>
                    </li>
                    
                    <li>
                        <a href="cabecalho.php?href=compra_passo1/compra_1_view.php">
                            Compre sua Passagem
                        </a>
						<ul class="submenu not_sub_menu">
                            <li>
                                <a  href="cabecalho.php?href=vendas_passagens/vendas_passagens_view.php" >  Venda de Passagens </a>
                            </li>
<!--
                            <li> 
                                <a  href="cabecalho.php?href=pontos_turisticos/pontos_turisticos_view.php"> Lugares Turísticos </a>
                            </li>
-->
                            <li> 
                                <a  href="cabecalho.php?href=dicas/dicas_view.php"> Dicas e Recomendações </a>
                            </li>
                        </ul>
					</li>
                    <li> <a href="cabecalho.php?href=contatos/contatos_view.php"> Contatos </a></li>
                </ul>
            </div>
            <div id="area_usuario">

				<div id="icon_user_menu">


				</div>
                <?php
                if(isset($_SESSION['nome'])){
                ?>

				<div id="words_user_menu">
                    Bem Vindo, <?php echo($_SESSION['nome']);
                    ?> !
				</div>

                <div id="area_usuario_my">
                    <div class="titulo_area_usuario">
                        <a  href="cabecalho.php?href=pagina_usuario/pagina_usuario_view.php">
                            Minha Conta
                        </a>
                    </div>
                    <div class="titulo_area_usuario">
                        <a href="../router.php?controller=sair&modo=sair">
                            Log out
                        </a>
                    </div>
                </div>
                <?php

                }  else {
                ?>
                <div id="words_user_menu">
                    <a  href="cabecalho.php?href=login/login_view.php">
					   Faça seu Login
                    </a>
				</div>
				<div id="words_user_menu2">
					Ou Cadastre-se
				</div>
                <div id="area_usuario_my11">
                    <div class="titulo_area_usuario">
                        <a  href="cabecalho.php?href=pagina_cadastro/pagina_cadastro_view.php">
                            Cadastrar-se
                        </a>
                    </div>
                </div>
				<div id="down_user_menu">
				</div>

                <?php
                    }
                ?>

            </div>

        </header>
        <main id="conteudo">
            <div id="espaco_menu">
            </div>
            <?php

            require("$require");

//            echo($require);

            ?>


        </main>
        <footer id="rodape">
			<div id="text_rodape">
				© 2018 Viação Asteroide
			</div>
            <div>
            <div id="container_icon_rodape">
                <a href="http://www.instagram.com" target="_blank">
                    <div id="espaco_rsociais_1">
                    </div>
                </a>
                <a href="http://www.facebook.com" target="_blank">
                    <div id="espaco_rsociais_2">
                    </div>
                </a>
                <a href="http://www.linkedin.com" target="_blank">
                    <div id="espaco_rsociais_3">
                    </div>
                </a>
                <a href="http://www.youtube.com" target="_blank">
                    <div id="espaco_rsociais_4">
                    </div>
                </a>
                <a href="http://www.twitter.com" target="_blank">
                    <div id="espaco_rsociais_5">
                    </div>
                </a>
                <a href="http://www.plus.google.com" target="_blank">
                    <div id="espaco_rsociais_6">
                    </div>
                </a>
            </div>
            </div>
            <a>
                <div id="up_page">
                    ^
                </div>
            </a>
        </footer>
	   <script src="../js/jquery-3.3.1.js"></script>
	   <script src="../js/app.js"></script>
    </body>
</html>
