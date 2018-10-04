<style>
    /* CSS para a página de usuários (funcionários) */

    #user_area_campos_inputs{
        padding-top: 20px;
/*        background-color: darkgreen;*/
    }

    .user_linhas_campos{
        margin-right: 20px;
        margin-left: 10px;
        margin-bottom: 20px;
    }

    #user_linha_botao input{
        margin-left: 200px;
        margin-bottom: 20px;
    }

    #oi{
        width: 1400px;
        height: 419px;
/*        background-color: red;*/
    }

    #hi{
        width: 100%;
        height: 40px;
        background-color: aliceblue;
    }

    .hello{
        width: 270px;
        border: solid 1px;
        margin-left: 5px;
        height: 30px;
        margin-top: 5px;
        line-height: 30px;
        float: left;
        text-align: center;
        background-color: #161617;
        color: #FF7500;
        
    }

    #hello_op{
        width: 100px;
        height: 30px;
        float: left;
/*        background-color: darkmagenta;*/
    }

    .ola{
        width: 298px;
        height: 50px;
        border-right: solid 1px #000;
        border-left: solid 1px #000;
/*        background-color: darkorange;*/
        text-align: center;
        line-height: 50px;
        float: left;
    }

    .ola_op{
        width: 98px;
        height: 50px;
        border-right: solid 1px #000;
        border-left: solid 1px #000;
        text-align: center;
        line-height: 50px;
        background-color: darkgoldenrod;
        float: left;
    }
    
    .ola112{
        width: 270px;
        height: 50px;
        border: solid 1px;
    /*
            border-right: solid 1px #000;
            border-left: solid 1px #000;
    */
        background-color: aliceblue;
        text-align: center;
        line-height: 50px;
        float: left;
        margin-left: 5px;
    }
    
    
    /* Style da modal */

    .caixa:focus{
        background-color:#FFFFCC;
    }
    .caixa{
        font-family:verdana;
        font-size:10px;
    }


    .modal{
        width:1200px;
        height:700px;
        background-color:#161617;
        margin:auto;
        margin-top:100px;

    }

    .modalContainer{
        width:99%;
	height:99%;
	background: rgba(0, 0, 0, 0.7);
	position:fixed;
	display:none;
    padding: 0;
    position: absolute;
    z-index: 10;
    }
    
    #titleModalPassageiros{
        width: 100%;
        height: 40px;
        background-color: #191919;
        color: #ffffff;
        margin: auto;
        text-align: center;
        font-size: 20pt;
        font-family: 'Verdana';
    }
    
    #btFechar{
        width: 100px;
        background-color: #161617;
        height: 25px;
        font-size: 15pt;
        margin-left: auto;
        transition: 1s
    }
    
    #btFechar:hover{
        width: 100px;
        background-color: #161617;
        color: #FF7500;
        height: 25px;
        font-size: 15pt;
        margin-left: auto;
    }
    
    #seguraPass{
        height: 620px;
        width: 100%;
        
    }
    
    #seguraMenuP{
        width: 100%;
        min-height: 1px;
        height: auto;
        overflow: hidden;
        
    }
    
    .menusP{
        width: 270px;
        height: 30px;
        text-align: center;
        font-size: 15pt;
        font-family: 'Verdana';
        background:#161617;
        color:#FF7500;
        border: 1px solid;
        float: left;
        margin-left: 20px;
    }
    
    #seguraCp{
        width: 100%;
        height: 589px;
        overflow: auto;
        background-color: dimgray;
        
/*        height: 184px;*/
    overflow: auto;
/*
    width: 92%;
    margin: auto;
    background-color: blue;
*/
    }
    
    .campoPassageiros{
        width: 270px;
        height: 30px;
        text-align: center;
        font-size: 15pt;
        border: solid 1px;
        font-family: 'Verdana';
        background-color: aliceblue;
        float: left;
        margin-left: 20px;
    }

    
</style>


<script type="text/javascript" src="js/jquery2.js"></script>


<div class="modalContainer" >
    <div class="modal">

    </div>
</div>	


<link rel="stylesheet" type="text/css" href="css/style_menuDropDown.css">
<!--Essa div é a responsavel para que possa definir o tamanho do layout em si!-->
        <div id="principal11">
            <!--A div faixa_menu é responsavel para que possa segurar as outras -->
            <div id="faixa_acima">
                <!--Aqui ficará a logo-->
                <div id="caixa_logo">
                    <!--Logo-->
                    <div id="logo">
                        <img src="imagens/logo_branca.png">
                    </div>
                    <!--Texto Viação Asteroide-->
                    <div id="caixa_text">
                        <img src="imagens/ViacaoAsteroide.png">
                    </div>
                </div>
                <!--Caixa onde ficará a foto do usuario logado-->
                <div id="caixa_user">
                    
                    <div>
                        <a href="router.php?controller=sair&modo=sair">
                            <img src="icones/iconExit.png" width="25" height="25">
                        </a>
                    </div>
                </div>
            </div>
        
            <!--Faixa Menu-->
            <div id="faixa_meio">
                <div id="faixa_menu">
                    <!--Opções menu-->
                     <ul class="menu12"> <!-- Esse é o 1 nivel ou o nivel principal -->
                    <li>
<!--                        <a href="index.php?pagina=home.php">-->
                        <a>
                            <img src="icones/iconMarketing.png" width="25"> 
                            Marketing
                        </a>
                        <ul class="submenu-1"> <!-- Esse é o 2 nivel ou o primeiro Drop Down -->

                            <li>
                                <a href="index.php?pagina=marketing/turismo/turismo_view.php">
                                    Turísmo
                                </a>
                            </li>
                            <li>
                                <a href="#">Empresa</a>
                                    <ul class="submenu-2"> <!-- Esse é o 3 nivel ou o Segundo Drop Down -->
                                        <li>
                                            <a href="index.php?pagina=marketing/sobre_empresa/sobre_empresa_view.php">
                                                Sobre a Empresa
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.php?pagina=marketing/frota/frotas_view.php">
                                                Nossas Frotas
                                            </a>
                                        </li>
                                        <li><a href="index.php?pagina=marketing/cadastro/cadastro_view.php">Missão, visão e valor</a>
                                        </li>
                                        <li>
                                            <a href="index.php?pagina=marketing/dicas/dicas_view.php">
                                            Dicas
                                            </a>
                                        </li>
                                        
                                    </ul>
                             </li>
                            <li>
                                <a href="index.php?pagina=marketing/contatos/contatos_view.php">
                                    Contatos
                                </a>
                            </li>
                            <li>
                                <a href="index.php?pagina=marketing/postosRodoviarios/postosRodoviarios_view.php">
                                    Postos Rodoviários
                                </a>
                            </li>
                            </ul>
                        </li>
                    <li>
                        <a>
                            <img src="icones/iconVendas.png" width="25"> 
                            Vendas
                        </a>
                        <ul class="submenu-0">
                            <li>
                                <a href="#">
                                    Vizualizar Produtos
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Area de Vendas
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Pontos Turísticos
                                </a>
                            </li>
                        </ul>
                    </li>
                        <li>
                            <a>
                                <img src="icones/moderator.png" width="25"> 
                                Administração
                            </a>
                            <ul class="submenu-5">
                                
                                <li>
                                    <a href="index.php?pagina=adm/usuario/usuario_view.php">
                                        Usuário
                                    </a>
                                </li>   
                                <li>
                                    <a href="index.php?pagina=adm/admFrota/admFrota_view.php">
                                        Frotas
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php?pagina=adm/cidade/cidade_view.php">
                                        Cidades
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php?pagina=adm/destino/destino_view.php">
                                        Destinos
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Auditoria
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php?pagina=adm/passagem/passagem_view.php">
                                        Passagem
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php?pagina=adm/passageiros/passageiros_view.php">
                                        Passageiros
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Pagamento
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php?pagina=adm/funcionario/funcionario_view.php">
                                        Funcionários
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Cerca Eletrica
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a >
                                <img src="icones/manutencaoicon.png" width="25"> 
                                Manutenção
                            </a>
                            <ul class="submenu-6">
                                <li>
                                    <a href="index.php?pagina=manutencao/controleManutencao/controleManutencao_view.php">
                                        Controle de Manutenção
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div id="conteudo_homeof">
                    <?php 
                    require_once($_SESSION['pagina']); 
//                       echo($_SESSION['pagina']);
                    ?>
                </div>
            </div>
            <div id="rodape">
            
            </div>
        </div>