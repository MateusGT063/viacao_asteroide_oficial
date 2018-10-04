<?php

/*

Autor: Eduardo Rocha
Data: 11/04/2018
Controller: Passageiros

*/

class Manutencao{
    
    // Atributos da classe.
    public $tipoOnibus;
    public $idOnibus;
    public $placa;
    public $abertura;
    public $fechamento;
    public $quilometragem;
    public $item;
    
    public function __construct(){
        require_once('bd_class.php');
    }
    
    public function Delete($manutecao){
        
        $sql = "DELETE FROM tbl_fichamanutencao WHERE idOnibus = ".$idOnibusExcluir;
        
        echo $sql;
        
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        if ($POD_conex->query($sql)){
            
            echo("<script> alert('O registro foi excluido =D'); </script>");
            
            
        }else{
            
            
            echo("<script> alert('Não tinha um registro com esse ID :('); </script>");
        }
        
        $conex->Desconectar();
        
    }
    
    
  
    
}

?>