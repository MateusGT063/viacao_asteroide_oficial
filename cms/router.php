<?php

    $controller = $_GET['controller'];
    $modo = $_GET['modo'];

session_start();


//verifica qual tipo da controller iremos trabalhar.
    switch($controller){
            
        // Caso o funcionário queira sair.
        case 'sair':
            
            switch($modo){
                
                case 'sair':
                    unset($_SESSION['idUser']);
                    unset($_SESSION['idNivel']);
                    unset($_SESSION['nome']);
                    
                    unset($_SESSION['pagina']);
                    echo('Eu quero sair daqui!');
                    header('location:../index.php');
                    break;
            }
            
            break;
            
        // CRUD de missão, visão e valores.
        case 'missao':
            
            // Inclusão dos arquivos para utilizar no projeto.
            require_once('controller/missao_controller.php');
            require_once('models/missao_class.php');
            
            //verifica as ações a serem executadas pela controller(novo, editar e excluir).
            switch($modo)
            {
            
                case 'novo':
                    // Instanciando a classe da controller.
                    $controller_missao = new controllerMissao();
                    // Chama o metodo "Novo()" da controller.
                    $controller_missao::Novo();
                    break;
                    
                case 'excluir':
                    $controller_missao = new controllerMissao();
                    $controller_missao::Deletar();
                    break;
                    
                case 'buscar':
                    $controller_missao = new controllerMissao();
                    $controller_missao::Buscar();
                    break;
                    
                case 'editar':
                    $controller_missao = new controllerMissao();
                    $controller_missao::Editar();
                    break;
                    
                case 'desativar':
                    
                    $controller_missao = new controllerMissao();
                    $controller_missao::Desativar();
                    
                    break;
                case 'ativar':
                    
                   $controller_missao = new controllerMissao();
                    $controller_missao::Ativar();
                    
                    break;
            }
            
            break;
            
        // CRUD de pontos turisticos.
        case 'turismo':
            
            // require_once necessários.
            require_once('controller/turismo_controller.php');
            require_once('models/turismo_class.php');
            
            switch($modo){
                
            // Inserir um novo registro.
            case 'novo':
                
                $turismo_controller = new turismoController();
                
                $turismo_controller::Novo();
                
                break;
                
            // Excluir um registro existente.
            case 'excluir':
                
                $turismo_controller = new turismoController();
                
                $turismo_controller::Deletar();
                
                break;
                
            // Buscar um registro existente.
            case 'buscar':
                
                $turismo_controller = new turismoController();
                
                $turismo_controller::Buscar();
                
                break;
                
            // Editar um registro existente.
            case 'editar':
                
                $turismo_controller = new turismoController();
                
                $turismo_controller::Atualizar();
                
                break;
                    
                            
            case 'desativar':
                    
                    
                $turismo_controller = new turismoController();
                
                $turismo_controller::Desativar();
                    
              break;
                
            // Ativa um funcionário existente.
            case 'ativar':
                    
                   
                $turismo_controller = new turismoController();
                    
                $turismo_controller::Ativar();
                    
            break;
                    
                
            }
            
            break;
        
        // CRUD de dúvidas frequentes.
        case 'contatos':
            
            // require_once necessários.
            require_once('controller/contatos_controller.php');
            require_once('models/contatos_class.php');
            
            switch($modo){
                
                // Inserir um novo registro.
                case 'novo':
                    
                    $contatos_controller = new contatosController();
                    $contatos_controller::Novo();
                    
                    break;
                
                // Excluir um registro existente.
                case 'excluir':
                    
                    $contatos_controller = new contatosController();
                    $contatos_controller::Deletar();
                    
                    break;
                
                // Buscar um registro existente.
                case 'buscar':
                    
                    $contatos_controller = new contatosController();
                    $contatos_controller::Buscar();
                    
                    break;
                
                // Editar um registro existente.
                case 'editar':
                    
                    $contatos_controller = new contatosController();
                    $contatos_controller::Editar();
                    
                    break;
                    
            }
            
            break; 
            
        case 'funcionario':
            
            // require_once necessários.
            require_once('controller/funcionario_controller.php');
            require_once('models/funcionario_class.php');
            // require_once necessários.
            require_once('controller/endereco_controller.php');
            require_once('models/endereco_class.php');
            
            switch($modo){
                
                // Inserir um novo registro.
                case 'novo':
                    
                    $endereco_controller = new enderecoController();
                    $idEnd = $endereco_controller::Novo();
                    
                    $funcionario_controller = new funcionarioController();
                    $funcionario_controller::Novo($idEnd);
                    
                    break;
                
                // Excluir um registro existente.
                case 'excluir':
                    
                    $funcionario_controller = new funcionarioController();
                    $funcionario_controller::Deletar();
                    
                    $endereco_controller = new enderecoController();
                    $endereco_controller::Deletar();
                    
                    break;
                
                // Buscar um registro existente.
                case 'buscar':
                    
                    $funcionario_controller = new funcionarioController();
                    $funcionario_controller::Buscar();
                    
                    break;
                
                // Editar um registro existente.
                case 'editar':
                    
                    $funcionario_controller = new funcionarioController();
                    $funcionario_controller::Editar();
                    
                    break;
                
                // Desativa um funcionário existente.
                case 'desativar':
                    
                    $funcionario_controller = new funcionarioController();
                    $funcionario_controller::Desativar();
                    
                    break;
                
                // Ativa um funcionário existente.
                case 'ativar':
                    
                    $funcionario_controller = new funcionarioController();
                    $funcionario_controller::Ativar();
                    
                    break;
                    
            }
            
            break;
            
            // CRUD de dicas.
            case 'dicas':
            
            // require_once necessários.
            require_once('controller/dicas_controller.php');
            require_once('models/dicas_class.php');
            
            switch($modo){
                
                // Inserir um novo registro.
                case 'novo':
                    
                    $dicas_controller = new dicasController();
                    $dicas_controller::Novo();
                    
                    break;
                    
                // Buscar uma dica existente.
                case 'buscar':
                    
                    $dicas_controller = new dicasController();
                    $dicas_controller::Buscar();
                    
                    break;
                    
                 // Editar uma dica existente.
                case 'editar':
                    
                    $dicas_controller = new dicasController();
                    $dicas_controller::Editar();
                    
                    break;  
                    
                // Excluir uma dica existente.
                case 'excluir':
                    
                    $dicas_controller = new dicasController();
                    $dicas_controller::Deletar();
                    
                    break;
                    
                           // Desativa um funcionário existente.
                case 'desativar':
                    
                    
                    $dicas_controller = new dicasController();
                    $dicas_controller::Desativar();
                    
                    break;
                
                // Ativa um funcionário existente.
                case 'ativar':
                    
                   
                    $dicas_controller = new dicasController();
                    $dicas_controller::Ativar();
                    
                    break;
                
                    
            }
            
            break;
            
            //CRUD SOBRE A EMPRESA
            
            case 'sobre_empresa':
            
            //REQUIRE_ONCE NECESSÁRIOS
            
            require_once('controller/sobre_empresa_controller.php');
            require_once('models/sobre_empresa_class.php');
            
            switch($modo){
                    
                case 'novo':
                
                    $sobre_empresa_controller = new sobreempresaController();
                    $sobre_empresa_controller::Novo();
                    
                    break;
                
                case 'excluir':
                    
                    $sobre_empresa_controller = new sobreempresaController();
                    $sobre_empresa_controller::Deletar();
                    
                    break;
                    
                case 'editar':
                    
                    $sobre_empresa_controller = new sobreempresaController();
                    $sobre_empresa_controller::Editar(); 
                    
                    break;
                
                case 'buscar':
                    
                    $sobre_empresa_controller = new sobreempresaController();
                    $sobre_empresa_controller::Buscar();  
                    
                    break;
                
                case 'desativar':
                    
                    
                    $sobre_empresa_controller = new sobreempresaController();
                    $sobre_empresa_controller::Desativar();
                    
                    break;
                
                // Ativa um funcionário existente.
                case 'ativar':
                    
                   
                    $sobre_empresa_controller = new sobreempresaController();
                    $sobre_empresa_controller::Ativar();
                    
                    break;
                    
            }
            
            break;
            
            // Re
            
            case 'destino':
            
            // require_once necessários.
            // Destino
            require_once('controller/destino_controller.php');
            require_once('models/destino_class.php');
            
            
            switch($modo){
                    
                case 'novo':
                    
                    $destino_controller = new destinoController();
                    $destino_controller::Novo();
                    
                    break;
                    
                case 'buscar':
                    
                    $destino_controller = new destinoController();
                    $destino_controller::Buscar();
                    
                    break;
                    
                case 'excluir':
                    
                    $destino_controller = new destinoController();
                    $destino_controller::Deletar();
                    
                    break;
                    
                case 'editar':
                    
                    $destino_controller = new destinoController();
                    $destino_controller::Editar();
                    
            }
            
            break;

		 case 'admFrota':
            
            // require_once necessários.
            require_once('controller/controleManutencao_controller.php');
            require_once('models/manutencao_class.php');
            
            require_once('controller/controleFichaManutencao_controller.php');
            require_once('models/fichaManutencao_class.php');
            
            require_once('controller/admFrota_controller.php');
            require_once('models/admFrota_class.php');
            
            switch($modo){
                    
                case 'novo':
                    
                    $admFrota_controller = new admFrotasController();
                    $admFrota_controller::Novo();
                    
                    break;
               
                case 'buscar':
                    
                    $admFrota_controller = new admFrotasController();
                    $admFrota_controller::Buscar();
                    
                    break;
                    
            case 'editar':
                    
                    $admFrota_controller = new admFrotasController();
                    $admFrota_controller::Editar();
                    
                    break;
                    
                    
                case 'excluir':
                    
                    $idOnibusExcluir = $_GET['id'];
                    
                    $Manutencao = new fichaManutencaoController();
                    $Manutencao = $Manutencao::Excluir($idOnibusExcluir);
                    
                    $Manutencao = new manutencaoController();
                    $Manutencao::Excluir($idOnibusExcluir);
                    
                    $admFrota_controller = new admFrotasController();
                    $admFrota_controller::Excluir($idOnibusExcluir);
                    
                    break;
                    
            case 'desativar':
                    
                    
                $admFrota_controller = new admFrotasController();
                
                $admFrota_controller::Desativar();
                    
              break;
                
            // Ativa um funcionário existente.
            case 'ativar':
                    
                   
                $admFrota_controller = new admFrotasController();
                    
                $admFrota_controller::Ativar();
                    
            break;              
               
            }
            
            break;
            
            
            case 'passageiros':
            
            // require_once necessários.
            require_once('controller/passageiros_controller.php');
            require_once('models/passageiros_class.php');
            
            switch($modo){
                    
                case 'novo':
                    $passageiros_controller = new passageirosController();
                    $passageiros_controller::Novo();                    
                    
                
                case 'excluir':
                    
                    $passageiros_controller = new passageirosController();
                    $passageiros_controller::Deletar();
                    
                    break;
                    
                case 'desativar':
                    
                    $passageiros_controller = new passageirosController();
                    $passageiros_controller::Desativar();
                    
                    break;
                case 'ativar':
                    
                    $passageiros_controller = new passageirosController();
                    $passageiros_controller::Ativar();
                    
                    break;
            }
            
            break;
            case 'manutencao':
            
            // require_once necessários.
            require_once('controller/controleManutencao_controller.php');
            require_once('models/controleManutencao_class.php');
            
                
            break;
            
            case 'frotas':
            
            //require_once necessários.
            require_once('controller/frota_controller.php');
            require_once('models/frota_class.php');
            
            switch($modo){
                    
                //Inserir um novo registro
                case 'novo' :
                        
                    $frotas_controller = new frotaController();
                    $frotas_controller::Novo();
                    //echo("To indo certo carai");
          
            
                break;
            
                case 'excluir' :
            
                    $frota_controller = new frotaController();
                    $frota_controller::Deletar();
            
                    break;
                    
                      // Buscar um registro existente.
                case 'buscar':
                    
                    $frotas_controller = new frotaController();
                    $frotas_controller::Buscar();
                    
                    break;
                
                // Editar um registro existente.
                case 'editar':
                    
                    $frota_controller = new frotaController();
                    $frota_controller::Editar();
                    
                    break;
                    
                     // Desativa um funcionário existente.
                case 'desativar':
                    
                    $frota_controller = new frotaController();
                    $frota_controller::Desativar();
                    
                    break;
                
                // Ativa um funcionário existente.
                case 'ativar':
                    
                    $frota_controller = new frotaController();
                    $frota_controller::Ativar();
                    
                    break;
                    
            
            } 
            break;
            
        // CRUD de dicas.
        case 'postoRodoviario':
            
            // require_once necessários.
            require_once('controller/postoRodoviario_controller.php');
            require_once('models/postoRodoviario_class.php');
            require_once('controller/endereco_controller.php');
            require_once('models/endereco_class.php');
            
            switch($modo){
                
                // Inserir um novo posto rodoviario.
                case 'novo':
                    
                    $endereco_controller = new enderecoController();
                    $idEnd = $endereco_controller::NovoPosto();
                    
                    $postoRodoviario_controller = new postoRodoviarioController();
                    //$postoRodoviario_controller::Novo();
                    $postoRodoviario_controller::Novo($idEnd);
                    
                    break;
                    
                // Buscar uma dica existente.
                case 'buscar':
                    
                    $postoRodoviario_controller = new postoRodoviarioController();
                    $postoRodoviario_controller::Buscar();
                    
                    break;
                    
                 // Editar uma dica existente.
                case 'editar':
                    
                    $postoRodoviario_controller = new postoRodoviarioController();
                    $postoRodoviario_controller::Editar();
                    
                    break;  
                    
                // Excluir uma dica existente.
                case 'excluir':
                    
                    $postoRodoviario_controller = new postoRodoviarioController();
                    $postoRodoviario_controller::Deletar();
                    
                    break;
                
                    
            }
            
            break;
            
        case 'cidade':
            
            require_once('controller/cidade_controller.php');
            require_once('models/cidade_class.php');
            
            switch($modo){
                    
                case 'novo':
                    
                    $controller_cidade = new cidadeController();
                    $controller_cidade::Novo();
                    
                    break;
                    
                case 'excluir':
                    
                    $controller_cidade = new cidadeController();
                    $controller_cidade::Deletar();
                    
                    break;
                    
                case 'buscar':
                    
                    $controller_cidade = new cidadeController();
                    $controller_cidade::Buscar();
                    
                    break;
                    
                case 'editar':
                    
                    $controller_usuario = new cidadeController();
                    $controller_usuario::Editar();
                    
                    break;
                    
                    
            }
            
            break;
            
        case 'usuario':
            
            require_once('controller/usuario_controller.php');
            require_once('models/usuario_class.php');
            
            switch($modo){
                    
                case 'novo':
                    
                    $controller_usuario = new usuarioController();
                    $controller_usuario::Novo();
                    
                    break;
                    
                case 'excluir':
                    
                    $controller_usuario = new usuarioController();
                    $controller_usuario::Deletar();
                    
                    break;
                    
                case 'buscar':
                    
                    $controller_usuario = new usuarioController();
                    $controller_usuario::Buscar();
                    
                    break;
                    
                case 'editar':
                    
                    $controller_usuario = new usuarioController();
                    $controller_usuario::Editar();
                    
                    break;
                    
            }
            
            break;            
             
    }

?>

