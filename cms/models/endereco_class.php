<?php

/*

Autor: Gabriel de Melo Marcondes.
Data: 12/04/2018
Classe: endereço.

Esta classe faz ações na
tabela de endereço.

*/

class Endereco{
    
    public $idEndereco;
    public $bairro;
    public $logradouro;
    public $idTipoEndereco;
    public $cep;
    public $codCidade;
    public $numero;
    
    public function __construct(){
        require_once('bd_class.php');
    }
    
    public function Insert($endereco){
        
        $sqlEnd = "INSERT INTO tbl_endereco SET bairro = '".$endereco->bairro."', logradouro = '".$endereco->logradouro."', numero = ".$endereco->numero.", idTipoEndereco = ".$endereco->idTipoEndereco.", cep = '".$endereco->cep."', codCidade = ".$endereco->codCidade;
        
//        echo($sqlEnd);
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        if($POD_conex->query($sqlEnd)){
            
            echo("Endereço Salvo. <br> <br>");
            
            $sqlPegaId = "SELECT idEndereco FROM tbl_endereco ORDER BY idEndereco DESC LIMIT 1";
            
            $select = $POD_conex->query($sqlPegaId);
            
            if($rs = $select->fetch(PDO::FETCH_ASSOC)){
                
                $id = $rs['idEndereco'];
                
                echo("Pegamos o id do endereço! ".$id."<br><br>");
                
            }else{
                echo("O id do endereço não voltou. <br> ".$sqlPegaId." <br>");
            }
            
        }else{
            echo("Endereço não salvo. <br> ".$sqlEnd." <br>");
        }
        
        $conex->Desconectar();
        
        if(isset($id)){
            return $id;
        }
        
    }
    
    public function Delete($endereco){
        
        $sql = "DELETE FROM tbl_endereco WHERE idEndereco = ".$endereco->idEndereco;
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        if($POD_conex->query($sql)){
            echo("Deletou o endereço.<br>".$sql."<br>");
        }else{
            echo("Não deletou o endereço.<br>".$sql."<br>");
        }
    }
    
    public function Update($endereco){
        
        $sql = "UPDATE tbl_endereco SET bairro = '".$endereco->bairro."', logradouro = '".$endereco->logradouro."', cep = '".$endereco->cep."',numero = '".$endereco->numero."', codCidade = '".$endereco->cidade."' WHERE idEndereco = ".$endereco->idEndereco;
        
//        echo($sql);
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        if($POD_conex->query($sql)){
//            echo("Atualizou o endereço.<br>".$sql."<br>");
            return 1;
        }else{
            echo("Não atualizou o endereço.<br>".$sql."<br>");
            return 0;
        }
        
    }
    
    public function UpdatePosto($endereco){
        
        $sql = "UPDATE tbl_endereco SET bairro = '".$endereco->bairro."', logradouro = '".$endereco->logradouro."', cep = '".$endereco->cep."',numero = '".$endereco->numero."' ,codCidade = '".$endereco->cidade."' WHERE idEndereco = ".$endereco->idEndereco;
        
//        echo($idEndereco);
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        if($POD_conex->query($sql)){
            echo("Atualizou o endereço.<br>".$sql."<br>");
            return 1;
        }else{
            echo("Não atualizou o endereço.<br>".$sql."<br>");
            return 0;
        }
        
    }
    
}

?>











