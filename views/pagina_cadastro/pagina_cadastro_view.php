<?php
//header('location:index.php');
//    $action ='index.php';
    $action = "controller=cadUsuario&modo=novo";


//    require_once('../cms/controller/usuario_controller.php');
//    require_once('../cms/models/usuario_class.php');

    // Instancia o Controller.
//    $controller_usuario = new usuarioController();


    $botao = 'Cadastrar';

    $nome = null;
    $sobrenome = null;
    $cpf = null;
    $rg = null;
    $data = null;
    $sexo = null;
    $celular = null;
    $telefone = null;
    $senha = null;
    $usuario = null;
    $email = null;

    /* ENDEREÇO */
    $idEnderco = null;
    $cep = null;
    $estado = null;
    $cidade = null;
    $bairro = null;
    $logradouro = null;
    $numero = null;




?>
<div class="area_pagina_usuario_imagem">
    <div id="espaco_cadastro">
        <div id="textoCad">
                Cadastre-se
        </div>
        <div id="descCad">
                Crie uma conta para ter melhor acesso aos serviços
        </div>

        <table id="sla">
            <tr class="coluna">
                <td>
    <!--                            <hr class="linhaEsquerda">-->
                </td>
            </tr>
            <tr class="couna">
                <td id="textinhoS">
                    Preencha o formulário
                </td>

            </tr>
            <tr class="coluna">
                <td>
    <!--                            <hr class="linhaEsquerda">-->
                </td>
            </tr>
        </table>
        <form name="frmcadastro" method="post" action="../router.php?<?=$action;?>" enctype="multipart/form-data">
            <div id="tabela_cadastro_oficial">
                <div class="esquerdo_cadastro">
                    <div class="texto_cadastro_left">
                        Nome:
                    </div>
                    <div class="texto_cadastro_left">
                        Sobrenome:
                    </div>
                    <div class="texto_cadastro_left">
                        CPF:
                    </div>
                    <div class="texto_cadastro_left">
                        RG:
                    </div>
                    <div class="texto_cadastro_left">
                        Data de Nascimento:
                    </div>
                    <div class="texto_cadastro_left">
                        Celular:
                    </div>
                    <div class="texto_cadastro_left">
                        Sexo:
                    </div>
                    <div class="texto_cadastro_left">
                        Telefone:
                    </div>
                    <div class="texto_cadastro_left">
                        Nome do Usuario:
                    </div>
                    <div class="texto_cadastro_left">
                        Senha:
                    </div>
                    <div class="texto_cadastro_left">
                        E-mail:
                    </div>
                </div>
                <div class="direito_cadastro">
                    <div class="conteudo_cadastro_right">
                        <input class="sla12" type="text" name="txtNome" maxlength="45" value="" placeholder="Primeiro nome" >
                    </div>
                    <div class="conteudo_cadastro_right">
                         <input class="sla12" type="text" name="txtSobrenome" maxlength="45" value="" placeholder="Sobrenome" >
                    </div>
                    <div class="conteudo_cadastro_right">
                         <input class="sla12" type="text" name="txtCpf" placeholder="XXX.XXX.XXX-XX" maxlength="45" value="">
                    </div>
                    <div class="conteudo_cadastro_right">
                         <input class="sla12" type="text" name="txtRG" placeholder="XX.XXX.XXX-XX" maxlength="45" value="">
                    </div>
                    <div class="conteudo_cadastro_right">
                          <input class="dtnasc" type="date" name="data" value="" >
                    </div>
                    <div class="conteudo_cadastro_right">
                         <input class="sla12" type="text" name="txtCelular" placeholder="(XX) XXXX-XXXX" maxlength="45" value="<?php echo($celular);?>">
                    </div>
                    <div class="conteudo_cadastro_right">
                        <select name="selectSexo" class="dtnasc">
                            <option value="M">
                               Masculino
                            </option>
                            <option value="F">
                                Feminino
                            </option>
                        </select>
                    </div>
                    <div class="conteudo_cadastro_right">
                         <input class="sla12" type="text" placeholder="(XX)XXXX-XXXX" name="txtTelefone" maxlength="45" value="<?php echo($telefone);?>">
                    </div>
                    <div class="conteudo_cadastro_right">
                         <input class="sla12" type="text" name="usuario" maxlength="45" value="" placeholder="Nome Usuário" >
                    </div>
                    <div class="conteudo_cadastro_right">
                        <input class="sla12" type="text" name="senha" maxlength="45" value="">
                    </div>
                    <div class="conteudo_cadastro_right">
                          <input class="sla12" type="text" name="txtEmail" maxlength="45" value="" placeholder="ex@ex.com" >
                    </div>

                </div>
            </div>
    <!--
            <div id="texto_informe_endereco">
                Informe seu Enderço
            </div>
    -->
            <div id="cadastro_endereco_espaco">
                <div class="esquerdo_cadastro">
                    <div class="texto_cadastro_left">
                        CEP:
                    </div>
                    <div class="texto_cadastro_left">
                        Cidade:
                    </div>
                    <div class="texto_cadastro_left">
                        Bairro:
                    </div>
                    <div class="texto_cadastro_left">
                        Número:
                    </div>
                    <div class="texto_cadastro_left">
                        Logradouro:
                    </div>
                </div>
                <div class="direito_cadastro">
                    <div class="conteudo_cadastro_right">
                        <input class="sla12" placeholder="XXXXX-XXX" type="text" name="txt_cep" maxlength="9">
                    </div>
                    <div class="conteudo_cadastro_right">
                        <select class="dtnasc" name="cbx_cidade">
                            <?php
                                require_once('../cms/controller/cidade_controller.php');
                                require_once('../cms/models/cidade_class.php');

                                $controller_cidade = new cidadeController();
                                $listCidade = $controller_cidade::ListarCidade();

                                $cont = 0;

                                while($cont < count($listCidade)){

                            ?>

                            <option value="<?=$listCidade[$cont]->codCidade;?>" <?php if($listCidade[$cont]->codCidade == $cidade){ echo('selected'); } ?>><?=$listCidade[$cont]->nomeCidade;?></option>

                            <?php
                                $cont+=1;
                                }
                            ?>

                        </select>
                    </div>
                    <div class="conteudo_cadastro_right">
                         <input class="sla12" type="text" name="txt_bairro" maxlength="45" placeholder="Bairro">
                    </div>
                    <div class="conteudo_cadastro_right">
                        <input class="sla12" type="number" name="txt_numero" placeholder="N°">
                    </div>
                    <div class="conteudo_cadastro_right">
                        <input class="sla12" type="text" name="txt_logradouro" maxlength="45" placeholder="Rua">
                    </div>
                </div>
            </div>

            <div id="botao">
                <button id="btCad" type="submit" name="btnSalvar"><?php echo($botao);?></button>
            </div>
            <div id="descCad2">
                Já é inscrito? <a href="cabecalho.php?href=login/login_view.php"> <span id="destaque_cadastrar"> Clique aqui </span> </a> para logar.
            </div>
           <div id="espaco_cad_footer">
            </div>
          </form>
    </div>
</div>
