<?php

class contatosCad{
    
    public $idViagem;
    public $acento;
    public $ativo;
        
        

    public function __construct(){

        require_once("bd_class.php");
    }
    
    public function Insert($usuario){
        
        
        $sql = "INSERT INTO tbl_sugestao (email, descricao) VALUES('".$usuario->email."','".$usuario->descricao."');";
        
//        echo ($sql);
         // Instancia a classe do BD.
        $conex = new Mysql_db1();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        if($POD_conex->query($sql)){
            
//            header("location:index.php");
//            echo("Cadastro salvo com sucesso.<br>".$sql);
            header('location:index.php');
            
            $conex->Desconectar();
        }else{
            echo("Erro ao cadastrar no banco.<br>".$sql);
        }
        
        $conex->Desconectar();        
//        
       
    }
    
    

//    public function acentosUsados($idViagem){
//
//        $sql ="select * from acentosUsados_view WHERE idViagem = ".$idViagem;
//        
////        echo($sql);
//        //Instancia a classe do BD.
//        $conex = new Mysql_db1();
//
////        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
//        $POD_conex = $conex->Conectar();
//        
//        $select = $POD_conex->query($sql);
//        
//        $cont = 0;
//        
//        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
//            
//            // Cria um array de objetos da classe Destino.
//            $listAcentos[] = new contatosCad();
//            
//            // Guarda os dados de BD em cada indice do objeto criado.
//            $listAcentos[$cont]->acento = $rs['acentoOcupado'];
//            $listAcentos[$cont]->idViagem = $rs['idViagem'];
//            $listAcentos[$cont]->ativo = $rs['ativo'];
//            
////            var_dump($listAcentos);
//            $cont+=1;
//        }
//        
//        $conex->Desconectar();
//        
//        // Apenas retorna a lista se existir dados no BD.
//        if(isset($listAcentos)){
//            return $listAcentos;
////            echo 'to aqui';
//        } else{
//            echo'to fora';    
//        }
//        
//    }
    
    
    public function acentosUsados($idViagem){

        $sql ="select * from acentosUsados_view WHERE idViagem = '".$idViagem."' and ativo =1";
        
//        echo($sql);
        
//        echo($sql);
            
        $conex = new Mysql_db1();
        
         // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rsAcento = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listAcentos[] = new contatosCad();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listAcentos[$cont]->acento = $rsAcento['acentoOcupado'];
            $listAcentos[$cont]->idViagem = $rsAcento['idViagem'];
            $listAcentos[$cont]->ativo = $rsAcento['ativo'];
            
            
            $cont+=1;
            
//            var_dump ($listPassagensCliente);
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listAcentos)){
            return $listAcentos;
        }else{
            echo('Erro ao trazer todos os registros do banco');
        }

    }
    
}

?>