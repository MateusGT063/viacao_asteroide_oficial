<?php

/*

Autor: Gabriel de Melo Marcondes.
Data: 23/04/2018
Model: Epoca.

Esta class faz o select no banco para
pegar as quatro estações do ano.

*/

class Epoca{
    
    // Atributos desta classe.
    public $idEpoca;
    public $epoca;
    
    public function __construct(){
        require_once("bd_class.php");
    }
    
    public function Select(){
        
        $sql = "SELECT * FROM tbl_epoca";
        
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        // Contador.
        $cont = 1;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Istancia a própria classe.
            $listEpoca[] = new Epoca();
            
            // Pega os valores e guarda nos atributos da classe.
            $listEpoca[$cont]->idEpoca = $rs['idEpoca'];
            $listEpoca[$cont]->epoca = $rs['epoca'];
            
            $cont+=1;
            
        }
        
        // Retorna a lista se ela existir.
        if(isset($listEpoca)){
            return $listEpoca;
        }
        
    }
    
}

?>