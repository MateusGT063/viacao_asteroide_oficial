<?php

$botao = 'Salvar';
$action = "controller=contatos&modo=novo";

$id = null;
$pergunta = null;
$resposta = null;

if(isset($listContatos)){
    
    $botao = 'Editar';
    
    $id = $listContatos->id;
    $pergunta = $listContatos->pergunta;
    $resposta = $listContatos->resposta;
    
    $action = "controller=contatos&modo=editar&id=".$id;
}

?>
<div id="caixaCont">
    <form name="contatos_view" method="post" action="router.php?<?=$action;?>">
        <div id="caixaCont1">
            Página de Contatos
        </div>
        <div id="caixaQuest">
            <div class="titleQuest">
                Pergunta
            </div>
            <input id="testeBottom" class="inputUsuario padding15px" type="text" name="txt_pergunta" placeholder="Informe qual é a pergunta?" value="<?=$pergunta;?>">
            
            <div class="titleQuest">
                Resposta
            </div>
             <textarea class="alinhaTextArea borda15px padding15px" name="txt_resposta" placeholder="Qual é a resposta?"><?=$resposta;?></textarea>
            <div id="botao">
                <input id="alinhamentoBt" type="submit" name="btnSalvar" value="<?php echo($botao); ?>">
            </div>
        </div>
<!--
    Pergunta<br>
    <input type="text" name="txt_pergunta" placeholder="Informe qual é a pergunta?" value="<?=$pergunta;?>"><br><br>
    
    Resposta<br>
    <textarea name="txt_resposta" placeholder="Qual é a resposta?" style="width:400px; height:180px;"><?=$resposta;?></textarea><br><br>
    
    <input type="submit" name="btnSalvar" value="<?=$botao;?>" style="margin-bottom:20px;">
-->
    
    </form>
    <div id="titleContatos">
        <div class="tituloCont">
            id:
        </div>
        <div class="tituloCont">
            Perguntas:
        </div>
        <div class="tituloCont">
            Respostas:
        </div>
        <div class="tituloCont">
            Opções:
        </div>
    </div>
    <div id="caixaCresceContato">
        <?php

        require_once('controller/contatos_controller.php');
        require_once('models/contatos_class.php');

        // Instancia o Controller.
        $contatos_controller = new contatosController();

        // Chama o metodo para listar todos os registros.
        $list = $contatos_controller::Listar();

        $cont = 0;
        while($cont < count($list)){

        ?>
        <div class="conteudoCont">
            <?php echo($list[$cont]->id);?>
        </div>
        <div class="conteudoCont">
            <?php echo($list[$cont]->pergunta);?>
        </div>
        <div class="conteudoCont">
            <?php echo($list[$cont]->resposta);?>
        </div>
        <div class="conteudoCont">
            <a href="router.php?controller=contatos&modo=buscar&id=<?=$list[$cont]->id;?>">
                <img src="icones/Modify16.png">
            </a>
            <a href="router.php?controller=contatos&modo=excluir&id=<?=$list[$cont]->id;?>">
                <img src="icones/Delete16.png">
            </a>
        </div>
        <?php 
            $cont+=1;
        }
        ?>
    </div>

<!--
    <div style="width:520px; min-height:0px; height: auto; background-color: #f00;">

        <?php

        require_once('controller/contatos_controller.php');
        require_once('models/contatos_class.php');

        // Instancia o Controller.
        $contatos_controller = new contatosController();

        // Chama o metodo para listar todos os registros.
        $list = $contatos_controller::Listar();

        $cont = 0;
        while($cont < count($list)){

        ?>

        <div style="width:160px; min-height:30px; height:auto; text-align:center; line-height:30px; float:left; background-color:#09f;">
            <?=$list[$cont]->id;?>
        </div>

        <div style="width:160px; min-height:30px; height:auto; text-align:center; line-height:30px; float:left; background-color:#09f;">
            <?=$list[$cont]->pergunta;?>
        </div>

        <div style="width:160px; min-height:30px; height:auto; text-align:center; line-height:30px; float:left; background-color:#09f;">
            <?=$list[$cont]->resposta;?>
        </div>

        <div style="width:20px; min-height:30px; height:auto; text-align:center; line-height:30px; float:left; background-color:#09f;">
            <a href="router.php?controller=contatos&modo=buscar&id=<?=$list[$cont]->id;?>">
                <img src="icones/Modify16.png">
            </a>
        </div>

        <div style="width:20px; min-height:30px; height:auto; text-align:center; line-height:30px; float:left; background-color:#09f;">
            <a href="router.php?controller=contatos&modo=excluir&id=<?=$list[$cont]->id;?>">
                <img src="icones/Delete16.png">
            </a>
        </div>

        <?php

        $cont+=1; }

        ?>

    </div>
-->
</div>
