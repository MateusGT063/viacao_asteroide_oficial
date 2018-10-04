<?php

class Pagamento{
    
    public $viagemTeste;
    
//    echo'to aq';
    
    public function __construct(){

        require_once("bd_class.php");
    }
    
//    public function Insert($boletoCad){   
//        
//        $sql = "INSERT INTO tbl_passagem (acento, idCliente, idPontos_viagem, idViagem, ativo,vencimento,dataDocumento,numeroDocumento, agenciaCodBeneficiario) VALUES('".$boletoCad->acento."','".$boletoCad->idCliente."','".$boletoCad->idParada."','".$boletoCad->viagem."','0',date_format(date_add( curdate(), INTERVAL 10 DAY),'%d/%m/%Y' ), date_format(curdate(), '%d/%m/%Y'),`acento` + 003, `idCliente` + 1);";
//        
////        echo ($sql);
//         // Instancia a classe do BD.
//        $conex = new Mysql_db1();
//        
//        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
//        $POD_conex = $conex->Conectar();
//        
//        // Executa o Script no BD.
//        if($POD_conex->query($sql)){
//            
////            header("location:index.php");
////            echo("Cadastro salvo com sucesso.<br>".$sql);
//            header('location:views/boleto/boleto.php');
//            
//            $conex->Desconectar();
//        }else{
//            echo("Erro ao cadastrar no banco.<br>".$sql);
//        }
//        
//        $conex->Desconectar();        
////        
//       
//    }
    
    

    public function Insert($pagamento){
        
        $sql = "INSERT INTO tbl_passagem (acento, idCliente, idPontos_viagem, idViagem, ativo,vencimento,dataDocumento,numeroDocumento, agenciaCodBeneficiario) VALUES (".$$pagamento->cartao.")";
        
        echo ($sql);
         // Instancia a classe do BD.
//        $conex = new Mysql_db1();
//        
//        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
//        $POD_conex = $conex->Conectar();
//        
//        // Executa o Script no BD.
//        if($POD_conex->query($sql)){
//            
////            header("location:index.php");
////            echo("Cadastro salvo com sucesso.<br>".$sql);
//            header('location:index.php');
//            
//            $conex->Desconectar();
//        }else{
//            echo("Erro ao cadastrar no banco.<br>".$sql);
//        }
//        
//        $conex->Desconectar();        
//        
       
//        require_once ('views/pagarme/pagarme.php'); 
    }
}
?>