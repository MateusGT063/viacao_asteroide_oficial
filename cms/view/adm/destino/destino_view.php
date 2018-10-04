<style>
    
    .div_al{
        width: 1500px;
        height: 32px;
        margin-bottom: 10px;
        margin-top: 5px;
        text-align: center;
    }
    
    .mostra_destinos{
        width: 148px;
        height: 30px;
        float: left;
        overflow: hidden;
/*        background-color: chocolate;*/
        border: solid 1px #000;
    }
    
    #imagem_destino{
        min-width: 0px;
        max-width: 300px;
        min-height: 0px;
        max-height: 300px;
        width: auto;
        height: auto;
    }
    
    #seguraDestinos{
        height: 730px;
        width: 99%;
/*        background-color: dimgray;*/
    }
    
    #titlePag{
        height: 50px;
        width: 400px;
/*        background-color: aliceblue;*/
        font-size: 25pt;
        font-family: ' Verdana';
        text-align: center;
        line-height: 50px;
        margin: auto;
    }
    
    #seguraTudoDest{
        height: 388px;
        width: 1000px;
        margin: auto;
/*        background-color: dodgerblue;*/
        background-color:  rgba(0,0,0,0.3);
    }
    
    .textosDest{
        height: 30px;
        width: 160px;
        font-size: 15pt;
        text-align: center;
        float: left;
        margin-left: 70px;
        margin-right: 4px;
        margin-top: 2px;
/*        background-color: darkslategrey;*/
    }
    
    .caixasSelect{
        height: 30px;
        width: 250px;
        margin-top: 2px;
        float: left;
/*        background-color: antiquewhite;*/
    }
    
    .caixaImagens{
        height: auto;
        width: 100%;
/*        margin-left: 20px;*/
        float: left;
/*        background-color: forestgreen;*/
        margin-top: 5px;
    }
    
    .textosMenusD{
        height: 30px;
        width: 100px;
        font-size: 15pt;
        text-align: center;
        float: left;
        margin-left: 340px;
/*        margin-right: 4px;*/
        margin-top: 2px;
/*        background-color: darkslategrey;*/
    }
    
    .ftDest{
        height: 30px;
        width: 300px;
        float: left;
/*        background-color: fuchsia;*/
    }
    
    .apareceFt{
        height: 90px;
        width: 90px;
        float: left;
/*        background-color: fuchsia;*/
        border: solid 1px;
        margin-left: 2px;
    }
    
    .apareceFt img{
        width: 90px;
        height: 90px;
/*        background-color: aliceblue;*/
/*        margin-left: 10px;*/
    }
    
    .caixaLateralDest{
        height: 33px;
        width: 170px;
        float: left;
/*        background-color: red;*/
    }
    
</style>

<?php

$action = "controller=destino&modo=novo";
$botao = 'Salvar';
//$action = 'novo';
$imagem = 'imagens/logo.png';

$idViagem = null;
$passagem = null;
//$imagem = null;
$descricao = null;
$hora_saida = null;
$hora_chegada = null;
$data = null;
//$idTipoOnibus = null;


$idDestino= null;
$tamanhoRota= null;
$idPontoPartida= null;
$idPontoChegada= null;
$idOnibus= null;
$idMotorista= null;
$codCidade= null;
$valor = null;
$idEpoca=null;
$imagem1 = 'imagens/testeEdu.png';
$imagem2 = 'imagens/testeEdu.png';

if(isset($objPassagem)){
    
    $idViagem = $objPassagem->idViagem;
//    $data = $objPassagem->passagem;
    $imagem1 = $objPassagem->imagem1;
    $imagem2 = $objPassagem->imagem2;
    $descricao = $objPassagem->descricao;
    $hora_partida = $objPassagem->hora_partida;
    $hora_chegada = $objPassagem->hora_chegada;
    $data = $objPassagem->data;
    $idEpoca = $objPassagem->idEpoca;
    
    $idDestino = $objPassagem->idDestino;
    $tamanhoRota = $objPassagem->tamanhoRota;
    $idPontoPartida = $objPassagem->idPontoPartida;
    $idPontoChegada = $objPassagem->idPontoChegada;
    $idOnibus = $objPassagem->idOnibus;
    $idMotorista = $objPassagem->idMotorista;
    $codCidade = $objPassagem->codCidade;
    $valor = $objPassagem->valor
        ;
//    $idTipoOnibus = $objPassagem->idTipoOnibus;
    
    $botao = 'Editar';
    $action = "controller=destino&modo=editar&id=".$idViagem."&imagem1=".$imagem1."&imagem2=".$imagem2;
    
}

?>

<script language='JavaScript'>
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58 || tecla==46)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}
</script>


<form name="destino_view" method="post" action="router.php?<?=$action;?>" enctype="multipart/form-data">
    <div id="seguraDestinos">
        <div id="titlePag">
            Página de Destinos
        </div>
        <div class="apareceFt borda15px">
            <img class="borda15px" src="<?php echo($imagem1);?>">
        </div>
        <div class="apareceFt borda15px">
            <img class="borda15px" src="<?php echo($imagem2);?>">
        </div>
        <div id="seguraTudoDest" class="borda15px">
            <div class="textosDest">
                Ponto de partida:
            </div>
            <div class="caixasSelect">
                <select class="alinhamentoSelect borda15px padding15px" name="cbx_pontoPartida">
        
                    <?php

                    require_once('controller/pontoPartida_controller.php');
                    require_once('models/pontoPartida_class.php');

                    $controller_pontoPartida = new pontoPartidaController();
                    $listPartida = $controller_pontoPartida::Listar();

                    $cont = 0;

                    while($cont < count($listPartida)){

                    ?>

                    <option value="<?=$listPartida[$cont]->idPontoPartida;?>" 
                            <?php if($idPontoPartida == $listPartida[$cont]->idPontoPartida){ echo ('selected'); } ?> 
                            > <?=$listPartida[$cont]->nomePosto;?> </option>

                    <?php

                        $cont+=1;

                    }

                    ?>
                </select>
            </div>
            <div class="textosDest">
                Cidade:
            </div>
            <div class="caixasSelect">
                <select class="alinhamentoSelect borda15px padding15px" name="cbx_cidadePartida">

                    <?php

                    require_once('controller/cidade_controller.php');
                    require_once('models/cidade_class.php');

                    $controller_cidade = new cidadeController();
                    $list = $controller_cidade::Listar_cbx();

                    $cont = 1;

                    while($cont < count($list)){

                    ?>

                    <option value="<?=$list[$cont]->codCidade;?>" <?php if($codCidade == $list[$cont]->nomeCidade){ echo ('selected'); } ?> > <?=$list[$cont]->nomeCidade;?></option>

                    <?php

                        $cont+=1;

                    }

                    ?>

                </select>
            </div>
            <div class="textosDest">
                Ponto de chegada:
            </div>
            <div class="caixasSelect">
                <select class="alinhamentoSelect borda15px padding15px" name="cbx_pontoChegada">
<!--                <select name="cbx_pontoChegada">-->

                    <?php

                    require_once('controller/pontoChegada_controller.php');
                    require_once('models/pontoChegada_class.php');

                    $controller_pontoChegada = new pontoChegadaController();
                    $listChegada = $controller_pontoChegada::Listar();

                    $cont = 0;

                    while($cont < count($listChegada)){

                    ?>

                    <option value="<?=$listChegada[$cont]->idPontoChegada;?>" <?php if($idPontoChegada == $list[$cont]->nomeCidade){ echo ('selected'); } ?> > <?=$listChegada[$cont]->nomePosto;?> </option>

                    <?php

                        $cont+=1;

                    }

                    ?>

                </select>
            </div>
            <div class="textosDest">
                Cidade:
            </div>
            <div class="caixasSelect">
<!--                <select name="cbx_cidadeChegada">-->
                <select class="alinhamentoSelect borda15px padding15px" name="cbx_cidadeChegada">

                    <?php

                    require_once('controller/cidade_controller.php');
                    require_once('models/cidade_class.php');

                    $controller_cidade = new cidadeController();
                    $list = $controller_cidade::Listar_cbx();

                    $cont = 1;

                    while($cont < count($list)){

                    ?>

                    <option value="<?=$list[$cont]->codCidade;?>"  >
                        <?=$list[$cont]->nomeCidade;?> </option>

                    <?php

                        $cont+=1;

                    }

                    ?>

                </select>
            </div>
            
<!--            Local de das duas imagens           -->
            <div class="caixaImagens">
                
<!--
                <img id="imagem_partida" src=""> <br>
    
                <img id="imagem_destino" src=""> <br>
-->
                <div class="textosMenusD">
                    Imagem 1:
                </div> 
                <div class="ftDest">
                    <input type="file" name="btnImagem1">
                </div><br>
            </div>
            
            <div class="caixaImagens">
                <div class="textosMenusD">
                    Imagem 2: 
                </div>
                <div class="ftDest">
                    <input type="file" name="btnImagem2">
                </div>
            </div>
            
            <div class="caixaImagens">
                <div class="textosMenusD">
                    Data:
                </div>
                <div class="caixaLateralDest">
                    <input class=" borda15px alinhaCaixaPequenas padding15px margin11" type="date" name="txt_data" value="<?php echo($data);?>">
                </div>
            </div>
            
            
            <div class="slaDest">
                <div class="textosDest">
                    Hora da partida:
                </div>
                <div class="caixaLateralDest">
                    <input class=" borda15px alinhaCaixaPequenas padding15px margin11" type="time" name="txt_hora_partida" value="<?php echo($hora_partida);?>">
                </div>

                <div class="textosDest">
                    Hora da chegada:
                </div>
                <div class="caixaLateralDest">
                    <input class=" borda15px alinhaCaixaPequenas padding15px margin11" type="time" name="txt_hora_chegada" value="<?php echo($hora_chegada);?>"> 
                </div>
            </div>
            
            <div class="slaDest11">
                <div class="textosDest">
                    Ônibus da viagem:
                </div>
                <div class="caixaLateralDest">
                    <select class="borda15px alinhaCaixaPequenas padding15px" name="cbx_onibus">

                        <?php

                        require_once('controller/onibus_controller.php');
                        require_once('models/onibus_class.php');

                        // Instancia o Controller.
                        $controller_onibus = new onibusController();

                        // Chama o metodo para listar todos os registros.
                        $listO = $controller_onibus::Listar();

                        $cont = 1;
                        while($cont < count($listO)){
                        ?>

                        <option value="<?=$listO[$cont]->idOnibus;?>" <?php if($idOnibus == $listO[$cont]->idOnibus){ echo ('selected'); } ?> title="número de fabricação: <?=$listO[$cont]->numFabricacao;?>"><?=$listO[$cont]->placa;?></option>

                        <?php

                        $cont+=1;

                        }

                        ?>

                    </select>
                </div>
                
                <div class="textosDest">
                    Descrição:
                </div>
                <div id="textDest"> 
                    <textarea class="alinhaTextMan" maxlength="100" name="txt_descricao"><?php echo($descricao);?></textarea> 
                </div>


            </div>
            
            
            <div class="textosDest">
                Tamanho da rota:
            </div>
            <div class="caixasSelect">
                <input class="borda15px alinhaRota" type="tel" name="txt_tamanhoRota" maxlength="7" onkeypress='return SomenteNumero(event)' value="<?php echo($tamanhoRota);?>"> 
            </div>
            
            <div class="textosDest">
                Época do Ano:
            </div>
            
            <div class="caixasSelect">
                <select class="alinhamentoSelect borda15px padding15px" name="cbx_epoca">
<!--                <select name="cbx_epoca">-->

                    <?php

                    require_once('controller/epoca_controller.php');
                    require_once('models/epoca_class.php');

                    $epoca_controller = new epocaController();
                    $listEpoca = $epoca_controller::Listar();

                    $cont = 1;

                    while($cont < count($listEpoca)){

                    ?>

                    <option value="<?=$listEpoca[$cont]->idEpoca;?>" <?php if($idEpoca ==$listEpoca[$cont]->idEpoca){ echo ('selected');} ?> > <?=$listEpoca[$cont]->epoca;?> </option>

                    <?php

                        $cont+=1;

                    }

                    ?>

                </select>
            </div>
            
            <div class="caixaImagens">
                <div class="textosMenusD">
                    Valor:
                </div>
                <div class="caixaLateralDest">
                    <input class=" borda15px alinhaCaixaPequenas padding15px margin11" maxlength="6" type="text" name="txt_valor" value="<?php echo($valor);?>" onkeypress='return SomenteNumero(event)'>
                </div>
            </div>
            
            
            <div class="slaDest">
                <div id="botao">
                    <input id="alinhamentoBt" type="submit" name="btnSalvar" value="<?php echo($botao);?>">
                </div>
            </div>
        </div>
        
         <div id="caixaTitleDest">
                <div class="titleDest1">
                    Nome do destino:
                </div>
                <div class="titleDest">
                    Data:
                </div>
                <div class="titleDest">
                    Hora Partida:
                </div>
                <div class="titleDest1">
                    Hora Chegada:
                </div>
                <div class="titleDest1">
                    Descrição:
                </div>
                <div class="titleDest">
                    Valor:
                </div>
                <div class="titleDest">
                    Imagens:
                </div>
                <div class="titleDest">
                    Opções:
                </div>
            </div>
        <div id="caixaPrincipalDest">
           
            <?php                 
                require_once('controller/destino_controller.php');
                require_once('models/destino_class.php');
                // Instancia o Controller.

                $controller_destino = new destinoController();

                // Chama o metodo para listar todos os registros.

                $list = $controller_destino::ListarView();


                $cont = 0;
                while($cont < count($list)){

            ?>
            <div class="seguraContDest">
                <div class="caixinhaDest">
                    <?php echo($list[$cont]->destino);?>
                </div>
                <div class="caixinhaDest1">
                    <?php echo($list[$cont]->data);?>
                </div>
                <div class="caixinhaDest1">
                    <?php echo($list[$cont]->hora_chegada);?>
                </div>
                <div class="caixinhaDest">
                    <?php echo($list[$cont]->hora_partida);?>
                </div>
                <div class="caixinhaDest2">
                    <?php echo($list[$cont]->descricao);?>
                </div>
                <div class="caixinhaDest1">
                    <?php echo($list[$cont]->valor);?>
                </div>
                
                <div class="caixinhaDest12">
                    <img src=" <?php echo($list[$cont]->imagem1);?>">
                    <img src=" <?php echo($list[$cont]->imagem2);?>">
<!--                    <?php echo($list[$cont]->imagem2);?>-->
                </div>
                <div class="caixinhaDest1">
                    <a href="router.php?controller=destino&modo=buscar&id=<?php echo($list[$cont]->idViagem);?>">
                        <img src="icones/Modify16.png">
                    </a>
                    <a href="router.php?controller=destino&modo=excluir&id=<?php echo($list[$cont]->idViagem); ?>">
                        <img src="icones/Delete16.png">
                    </a>
                </div>
            </div>
            <?php 
                    $cont+=1;
                }
            ?>
            
        </div>
<!--
        <div id="mostraIMG">
            <div id="trocaImg">
                <img src="<?php echo($imagem);?>">
            </div>
        </div>
        <div id="mostraIMG">
            <div id="trocaImg">
                <img src="<?php echo($imagem);?>">
            </div>
        </div>
-->
    </div>
</form>