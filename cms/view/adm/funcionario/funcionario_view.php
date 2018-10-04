<?php

$botao = 'Salvar';
$action = 'novo';

$idFuncionario = null;
$nome = null;
$sobrenome = null;
$rg = null;
$cpf = null;
$usuario = null;
$senha = null;
$logradouro = null;
$bairro = null;
$cep = null;
$numero = null;
$cidade = null;
$idNivelFuncionario = null;
$idEndereco = null;

$selectCEP = null;
$selectIdNivelFuncionario = null;

if(isset($listF)){
    
    $idFuncionario = $listF->idFuncionario;
    $nome = $listF->nome;
    $sobrenome = $listF->sobrenome;
    $rg = $listF->rg;
    $cpf = $listF->cpf;
    $numero = $listF->numero;
    $usuario = $listF->usuario;
    $senha = $listF->senha;
    $logradouro = $listF->logradouro;
    $bairro = $listF->bairro;
    $cep = $listF->cep;
    $cidade = $listF->cidade;
    $idNivelFuncionario = $listF->idNivelFuncionario;
    $idEndereco = $listF->idEndereco;
    
    $selectCEP = 'selected';
    $selectIdNivelFuncionario = 'selected';
    
    $botao = 'Editar';
    
    $action = 'editar&id='.$idFuncionario."&idEnd=".$idEndereco;
    
}

?>

<div id="titulo_pagina_usuario1">
    Controle de Funcionários
</div>
<form name="adm_user" method="post" action="router.php?controller=funcionario&modo=<?=$action;?>">
    <div id="user_area_campos_usuario">
        
        <div class="linhas_campos_usuario">
            
            <div class="caixaItensUser">
                Nome: <input class="inputUsuario textCenter" type="text" name="txt_nome" value="<?=$nome;?>">
            </div>
           
            
            <div class="caixaGrandeItensUser">
                Sobre Nome:
                <input class="inputUsuario textCenter" type="text" name="txt_sobrenome"  value="<?=$sobrenome;?>">
            </div>
            
        </div>

        <div class="linhas_campos_usuario ">
            <div class="caixaItensUser">
                Rg: 
                <input class="inputUsuario textCenter" placeholder="XX.XXX.XXX-X" type="text" name="txt_rg" value="<?=$rg;?>">
            </div>
            <div class="caixaItensUser">
                Cpf: 
                <input class="inputUsuario textCenter" placeholder="XXX.XXX.XXX-XX" type="text" name="txt_cpf" value="<?=$cpf;?>">
            </div>
            
        </div>

        <div class="linhas_campos_usuario">
            <div class="caixaItensUser">
                Usuário: 
                <input class="inputUsuario " type="text" name="txt_usuario" value="<?=$usuario;?>">
            </div>
            <div class="caixaItensUser">
                Senha:
                <input class="inputUsuario" type="password" name="txt_senha" value="<?=$senha;?>">
            </div>
        </div>

        <div class="linhas_campos_usuario">
            <div class="caixaGrandeItensUser">
                Logradouro:
                <input class="inputUsuario textCenter" type="text" placeholder="Exemplo: Rua Vincc Anntoni" name="txt_logradouro" value="<?=$logradouro;?>">
            </div>
            <div class="caixaPequenaItensUser">
                Bairro:
                <input class="inputUsuario textCenter" placeholder="Exemplo: Bairro Anna Maria" type="text" name="txt_bairro" value="<?=$bairro;?>">
            </div>
            
        </div>

        <div class="linhas_campos_usuario">
            <div class="caixaItensUser">
                cep: <input class="inputUsuario" type="text" name="txt_cep" value="<?=$cep;?>">
            </div>
            <div class="caixaGrandeItensUser">
                Cidade:
                <select class="alinhaCidades borda5px" name="cbx_cidade">

                    <?php

                    require_once('controller/cidade_controller.php');
                    require_once('models/cidade_class.php');

                    $controller_cidade = new cidadeController();
                    $list = $controller_cidade::Listar_cbx();

                    $cont = 0;

                    while($cont < count($list)){

                    ?>

                    <option value="<?=$list[$cont]->codCidade;?>"> <?=$list[$cont]->nomeCidade;?> </option>

                    <?php

                        $cont+=1;

                    }

                    ?>

                </select>

                Nível:
                <select class="alinhaCidades borda5px" name="cbx_nivelFuncionario">

                <option value="1" <?php if($idNivelFuncionario == 1){ echo($selectIdNivelFuncionario); } ?>>Adiministração</option>
                <option value="2" <?php if($idNivelFuncionario == 2){ echo($selectIdNivelFuncionario); } ?>>Marketing</option>

                </select>
            </div>
            
        </div>
        
        <div class="botaoS borda15px">
            <input class="alinhaBt borda5px" type="submit" name="btnSalvar" value="<?=$botao;?>">
        </div>
    </div>
</form>

<div id="oi">
    
    <div id="hi">
        <div class="hello">
            Nome
        </div>
        
        <div class="hello">
            Usuário
        </div>
        
        <div class="hello">
            Senha
        </div>
        
        <div class="hello">
            CEP
        </div>
        
        <div class="hello">
            Opções
        </div>
    </div>
    
    <?php
    
    require_once('controller/funcionario_controller.php');
    require_once('models/funcionario_class.php');

    // Instancia o Controller.
    $controller_funcionario = new funcionarioController();

    // Chama o metodo para listar todos os registros.
    $list = $controller_funcionario::Listar();

    $cont = 0;
    while($cont < count($list)){
    
    ?>
    
    <div class="ola112">
        <?php echo($list[$cont]->nome." ".$list[$cont]->sobrenome); ?>
    </div>
    
    <div class="ola112">
        <?php echo($list[$cont]->usuario); ?>
    </div>
    
    <div class="ola112">
        <?php echo($list[$cont]->senha); ?>
    </div>
    
    <div class="ola112">
        <?php echo($list[$cont]->cep); ?>
    </div>
    
    <div class="ola112">
        <a href="router.php?controller=funcionario&modo=buscar&id=<?=$list[$cont]->idFuncionario;?>&idEnd=<?=$list[$cont]->idEndereco;?>">
            <img src="icones/Modify16.png">
        </a>
        
        <a href="router.php?controller=funcionario&modo=excluir&id=<?=$list[$cont]->idFuncionario;?>&idEnd=<?=$list[$cont]->idEndereco;?>" onclick="return confirm('Deseja realmente excluir?');">
            <img src="icones/Delete16.png">
        </a>
        
        <?php
        
        if($list[$cont]->ativo == 1){
        
        ?>
        
        <a href="router.php?controller=funcionario&modo=desativar&id=<?=$list[$cont]->idFuncionario;?>">
            <img width="20px;" height="20px;" src="icones/on1.png">
        </a>
        
        <?php
        
        }else{
        
        ?>
        
        <a href="router.php?controller=funcionario&modo=ativar&id=<?=$list[$cont]->idFuncionario;?>">
            <img width="20px;" height="20px;" src="icones/off1.png">
        </a>
        
        <?php
        
        }
        
        ?>
        
    </div>
    
    <?php $cont+=1; } ?>
    
</div>