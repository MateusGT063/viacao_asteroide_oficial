<?php

$botao = 'Salvar';

$codCidade = null;
$nomeCidade = null;
$codEstado = null;

$action = 'controller=cidade&modo=novo';

if(isset($listCidade)){
    
    $botao = 'Editar';

    $codCidade = $listCidade->codCidade;
    $nomeCidade = $listCidade->nomeCidade;
    $codEstado = $listCidade->codEstado;

    $action = 'controller=cidade&modo=editar&id='.$codCidade;
    
}

?>

<div id="espaco_cidade_crud">
<form name="cidade" method="post" action="router.php?<?=$action;?>">
    <div id="titulo_cadastro_cidade"> Cadastro de Cidades </div>
    <div id="espaco_cadastro_cidade">
        Estado:
        <select name="cbx_estado" id="select_cidade">

            <?php

            require_once("controller/estado_controller.php");
            require_once("models/estado_class.php");

            $controller_estado = new estadoController();

            $listEstado = $controller_estado::Listar();

            $cont = 0;

            while($cont < count($listEstado)){

            ?>

            <option value="<?=$listEstado[$cont]->codEstado;?>" <?php if($listEstado[$cont]->codEstado == $codEstado){ echo 'selected'; } ?>><?=$listEstado[$cont]->sigla;?> - <?=$listEstado[$cont]->nome;?></option>

            <?php

                $cont+=1;

            }

            ?>

        </select>
    </div>

    <div id="espaco_cadastro_cidade">
        Cidade:
        <input type="text" name="txt_cidade" placeholder="Cidade" value="<?=$nomeCidade;?>"  id="select_cidade">
    </div>

    <div>
        <input type="submit" name="btnSalvar" value="<?=$botao;?>" id="botao_salvar_cidades">
    </div>
    
    <div id="alignTableCidade">
         <div class="campoCidade">Cidade</div>
            <div class="campoCidade">Estado</div>
            <div class="campoCidade">Opções</div>
        <div id="tableCidade">
           
        

        <?php
        
        require_once('controller/cidade_controller.php');
        require_once('models/cidade_class.php');
        
        $controller_cidade = new cidadeController();
        $list = $controller_cidade::Listar();
        
        $cont = 0;
        
        while($cont < count($list)){
        
        ?>
        
            <div id="CidadeDados">
                <div class="DadosTableCidade"><?=$list[$cont]->nomeCidade?></div>
                <div class="DadosTableCidade"><?=$list[$cont]->nome?></div>
                <div class="DadosTableCidade">
                    
                    <a href="router.php?controller=cidade&modo=buscar&id=<?=$list[$cont]->codCidade;?>">
                        <img src="icones/Modify16.png">
                    </a>
                    <a href="router.php?controller=cidade&modo=excluir&id=<?=$list[$cont]->codCidade;?>">
                        <img src="icones/Delete16.png">
                    </a>
                    
                </div>
            </div>
        
        <?php
            
            $cont+=1;
            
        }
        
        ?>
        </div>
    </div>
</form>
</div>