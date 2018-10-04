<?php
//    $_GET['pagina'];
//    header("location:cabecalho.php");

//header('location:index.php');

    $controller = $_GET['controller'];
    $modo = $_GET['modo'];

session_start();


//verifica qual tipo da controller iremos trabalhar.
    switch($controller){
            
        // Caso o funcionário queira sair.
        case 'sair':
            
            switch($modo){
                
                case 'sair':
                    unset($_SESSION['email']);
                    unset($_SESSION['senha']);
                    unset($_SESSION['nome']);
                    unset($_SESSION['cliente']);
                    
                    
//                    echo('Eu quero sair daqui!');
                    header('location:views/cabecalho.php');
                    break;
            }        
                   


            break;
            
        // CRUD de missão, visão e valores.
        case 'cadUsuario':
            
            // Inclusão dos arquivos para utilizar no projeto.
            require_once('controllers/usuarioCad_controller.php');
            require_once('models/usuarioCad_class.php');
            
            require_once('cms/controller/endereco_controller.php');
            require_once('cms/models/endereco_class.php');
            
            //verifica as ações a serem executadas pela controller(novo, editar e excluir).
            switch($modo)
            {
            
                case 'novo':
                    
                    $endereco_controller = new enderecoController();
                    $idEnd = $endereco_controller::Novo();
                    
                    // Instanciando a classe da controller.
                    $controller_user = new usuarioController();
                    // Chama o metodo "Novo()" da controller.
                    $controller_user::NovoUsuario($idEnd);
                    break;
                    
                
            }
            
            break;
            
            
            // CRUD de missão, visão e valores.
            case 'cadContatos':

                // Inclusão dos arquivos para utilizar no projeto.
                require_once('controllers/contatosCad_controller.php');
                require_once('models/contatosCad_class.php');
    //            
    //            require_once('cms/controller/endereco_controller.php');
    //            require_once('cms/models/endereco_class.php');

                //verifica as ações a serem executadas pela controller(novo, editar e excluir).
                switch($modo)
                {

                    case 'novo':

                        // Instanciando a classe da controller.
                        $controller_contat = new contatosCadController();
                        // Chama o metodo "Novo()" da controller.
                        $controller_contat::NovoCont();
                        break;


                }

                break;
            case 'cadBoleto':

                // Inclusão dos arquivos para utilizar no projeto.
                require_once('controllers/boletoCad_controller.php');
                require_once('models/boletoCad_class.php');
    //            
    //            require_once('cms/controller/endereco_controller.php');
    //            require_once('cms/models/endereco_class.php');

                //verifica as ações a serem executadas pela controller(novo, editar e excluir).
                switch($modo)
                {

                    case 'novo':

                        // Instanciando a classe da controller.
                        $controller_boleto = new boletoController();
                        // Chama o metodo "Novo()" da controller.
                        
//                        header("location:boleto/boleto.php");
                        
                         ?>
                            <script>
                                alert(" Deseja mesmo Gerar o Boleto? \n Prescione Ok...");

//                                window.location.href ="";
                            </script>
                        <?php
                        
                        $controller_boleto::NovoBoleto();
                        break;
                        
                    case 'off':
//                        echo 'to em off';
                        
                         ?>
                            <script>
                                alert(" Você não esta Logado !\n Faça o Login ou Crie uma Conta...");

                                window.location.href ="views/cabecalho.php?href=login/login_view.php";
                            </script>
                            <?php
//                        header("location:");
                        
                        break;
                        
                        


                }

                break;
             case 'pagamento':

                // Inclusão dos arquivos para utilizar no projeto.
                require_once('controllers/pagamento_controller.php');
    //            
    //            require_once('cms/controller/endereco_controller.php');
    //            require_once('cms/models/endereco_class.php');

                //verifica as ações a serem executadas pela controller(novo, editar e excluir).
                switch($modo)
                {

                    case 'cartao':

                        // Instanciando a classe da controller.
                        $controller_boleto = new pagamentoController();
                        // Chama o metodo "Novo()" da controller.
                        $controller_boleto::cartao();
                        
//                        header("location:boleto/boleto.php");
//                        echo' to aq';
                        break;
                        
                    case 'off':
                        
                        
                         ?>
                            <script>
                                alert(" Você não esta Logado !\n Faça o Login ou Crie uma Conta...");

                                window.location.href ="views/cabecalho.php?href=login/login_view.php";
                            </script>
                            <?php
//                        header("location:");
                        
                        break;
                        


                }

                break;
    }
?>