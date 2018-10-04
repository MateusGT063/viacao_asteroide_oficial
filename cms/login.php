<?php

require_once("models/bd_class.php");

if( isset($_POST['btnOk']) ){
    
    $user = $_POST['txt_login'];
    $senha = $_POST['txt_senha'];
    
    // Instancia a classe do BD.
    $conexao = new Mysql_db();
        
    // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
    $POD_conex = $conexao->Conectar();
    
    $sql = "SELECT idFuncionario, idNivelFuncionario, nome FROM tbl_funcionario WHERE usuario = '$user' AND senha = '".($senha)."' AND ativo = 1 ";
    
    $select = $POD_conex->query($sql);
    
    if( $rs = $select->fetch(PDO::FETCH_ASSOC) ){
        session_start();
        
        $_SESSION['idUser'] = $rs['idFuncionario'];
        $_SESSION['idNivel'] = $rs['idNivelFuncionario'];
        $_SESSION['nome'] = $rs['nome'];
        
        header("location:index.php");
        
    }else{
        
        header("location:../cms/login.php?error=1");
        
    }
    
}

if( isset($_GET['error']) ){
    echo "<script> alert('Usuário ou senha incorretos !!!'); </script>";
}

?>

<html>
    <head>
        <style>
            
            *{
                font-family: Arial;
            }
            
            body{
                
                background-image: url(imagens/azdpo1K.png);
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                transition: 2s;
            }      
            
    
            
            #container_geral{
                width : 20%;
                height : 300px;
                min-width: 286px;
                border : solid 1px black;
                border-radius: 10px;
                background-color : #999;
                margin : 0 auto;
                margin-top : 50px;
                
                -webkit-box-shadow: inset 0px -1px 51px -3px rgba(0,0,0,0.75);
                -moz-box-shadow: inset 0px -1px 51px -3px rgba(0,0,0,0.75);
                box-shadow: inset 0px -1px 51px -3px rgba(0,0,0,0.75);
            
            }
            
            #tbl_dados{
                width : 80%;
                height : 200px;
                border: solid 1px black;
                border-radius: 5px;
                background-color: #ccc;
                margin : 0 auto;
                margin-top : 50px;
                -webkit-box-shadow: -1px -1px 45px -3px rgba(0,0,0,0.75);
                -moz-box-shadow: -1px -1px 45px -3px rgba(0,0,0,0.75);
                box-shadow: -1px -1px 45px -3px rgba(0,0,0,0.75);
            }
            
            #tbl_dados td{
                padding: 10px;
            }
            
            input[type="submit"]{
                width : 80px;
                height: 40px;
            }
            
            #logo{
                width : 1100px;
                height : 152px;
                margin-left: auto;
                margin-right: auto;
                transition: 1s;
                
                
              
            }     
            #logo:hover{
               -webkit-transform: scale(1.1);
                -ms-transform: scale(1.1);
                transform: scale(1.1);
                
              
            }  
     
            #logo img{
                
             background-repeat: no-repeat;
             background-position: center;
             background-attachment: fixed;
              
            }
            
          
            
            
            
            
        </style>
    </head>
    <body>
        <div id="logo">
            <img src="imagens/ViacaoAsteroide1.png"/>
        </div>
        <div id="container_geral">
            <form method="post" name="frm_login" action="login.php">
            <table id="tbl_dados">
                <tr>
                    <td>
                        Usuário:
                    </td>
                    <td>
                        <input type='text' name="txt_login">
                    </td>
                </tr>
                <tr>
                    <td>
                        Senha:
                    </td>
                    <td>
                        <input type='password' name="txt_senha">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="btnOk"></td>
                </tr>
            </table>
            </form>
        </div>
    </body>
</html>