<?php

    require_once('../models/bd_class.php');

if(isset($_POST['btnLogar'])){

    $email =$_POST['txt_email'];
    $senha =$_POST['txt_senha'];
    $senha = md5($senha);

    // Instancia a classe do BD.
    $conexao = new Mysql_db1();

    // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
    $POD_conex = $conexao->Conectar();

    $sql=" Select * FROM tbl_cliente WHERE email= '$email' AND senha ='".($senha)."'";

//    echo($sql);
//    var_dump($sql);
    $select = $POD_conex->query($sql);

    if( $rs = $select->fetch(PDO::FETCH_ASSOC) ){
//        session_start();

//        $_SESSION['idUser'] = $rs['idFuncionario'];
//        $_SESSION['idNivel'] = $rs['idNivelFuncionario'];
        $_SESSION['cliente'] = $rs['idCliente'];
        $_SESSION['email'] = $rs['email'];
//        $_SESSION['email'] = $rs['email'];
        $_SESSION['senha'] = $rs['senha'];
        $_SESSION['nome'] = $rs['nome'];
        $_SESSION['sobrenome'] = $rs['sobrenome'];
        $_SESSION['cpf'] = $rs['cpf'];
        $_SESSION['dt_nasc'] = $rs['dt_nasc'];

         ?>
    <script>
        window.location.href ="cabecalho.php";
    </script>
    <?php

    }else{
       ?>
        <script>
            alert("Erro ao logar! Tente Novamente ...");
//        </script>
        <?php
//
    }
}
?>
            <div id="espaco_login">
                <div id="espaco_front_login">
                


				<div id="container_login">
                    <div id="login_cms">
                        Login para o
                        <span class="edicao_texto_login">
                            <a href="../cms/login.php">
                               CMS
                            </a>
                        </span>
                    </div>
                    <form method="post" name="frm_login_usuario" action="cabecalho.php?href=login/login_view.php">

                        <div id="teste2321">

                            <div id="text_image_login">
                                <div id="imagem_login">
                                </div>
                                <div id="texto_login">
                                    Faça seu Login
                                </div>
                            </div>
                            <div id="user_space">
                                <div class="user_email_login">
                                    E-mail:
                                </div>
                                <input class="user_login" type="text" name="txt_email">
                            </div>
                            <div id="user_space_senha">
                                <div class="user_email_login">
                                    Senha:
                                </div>

                                <input class="user_login" type="password" name="txt_senha">
                            </div>
                            <div class="caixaLogin">
                                <input id="login_user_login" class="" type="submit" name="btnLogar" value="Logar">
                            </div>
                            
                            <div id="link_cadastro">

                                Não é cadastrado? Clique <span class="edicao_texto_login"> <a href="cabecalho.php?href=pagina_cadastro/pagina_cadastro_view.php"> AQUI </a> </span> e crie sua conta.
                            </div>
                        </div>
                    </form>
                
                <!-- Seja bem vindo <?php echo($_SESSION['senha1']);?>-->
                <!--                        Seja bem vindo <?=$_SESSION['nome'];?>-->
            </div>
   			  </div>
          </div>

